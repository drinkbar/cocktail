<?php 
 require_once('../resources/config/core.php');
 require_once(LIBRARY_PATH . '/templateFunctions.php');
 require_once '../src/Db.php';
 /*************************************************************
  * RENDER LAYOUT
  */

 $db = new Db();

 // default view --> list
 $view = "search/search.php";
 $variables = array();
 
 // handle session parameter 
 require_once(LIBRARY_PATH . '/session.php');

 if(isset($_REQUEST['term']))
 {
 	$term = trim($_REQUEST['term']);
 	$result = $db->select("SELECT * FROM cocktail WHERE Cocktailname LIKE '%$term%' ORDER BY Cocktailname");
 	$variables['result'] = $result;
 }
 elseif(isset($_REQUEST['ingredients']))
 {
 	$userId = $_SESSION['user']['ID'];
 	$listCocktail = $db->select("SELECT * FROM cocktail ORDER BY Cocktailname");
 	$result = array();
 	
 	foreach ($listCocktail as $cocktail)
 	{
 		$cId = $cocktail['ID'];
 		// alle Zutaten, die für Cocktail nötig sind
 		$cZutaten = $db->select("SELECT cz.Zutat_ID FROM cocktail_zutat cz WHERE cz.Cocktail_ID = $cId");
 		// alle Zutaten, die der Nutzer hat
 		$uZutaten = $db->select("SELECT cz.Zutat_ID FROM nutzer_zutat nz, cocktail_zutat cz WHERE nz.Zutat_ID = cz.Zutat_ID AND cz.Cocktail_ID = $cId");
 		
 		if($cZutaten == $uZutaten)
 		{
 			$result[] = $cocktail;
 		}
 	}
 	
  	$variables['result'] = $result;
 }

 renderLayout($view, $variables);
?>