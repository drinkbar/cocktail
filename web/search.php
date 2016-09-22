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
 	$result = $db->select("SELECT DISTINCT c.*
 							FROM cocktail c
 								JOIN cocktail_zutat cz ON (c.ID = cz.Cocktail_ID)
 								
 							WHERE cz.Zutat_ID IN(
 								SELECT nz.Zutat_ID 
 								FROM nutzer_zutat nz
	 							WHERE nz.Nutzer_ID = $userId
 							)
 							ORDER BY Cocktailname");
 	$variables['result'] = $result;
 }

 renderLayout($view, $variables);
?>