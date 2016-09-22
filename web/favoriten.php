<?php 
 require_once('../resources/config/core.php');
 require_once(LIBRARY_PATH . '/templateFunctions.php');
 require_once '../src/Db.php';
 /*************************************************************
  * RENDER LAYOUT
  */

 $db = new Db();

 // default view --> list
 $view = "favoriten/list.php";
 $variables = array();
 
 // handle session parameter 
 require_once(LIBRARY_PATH . '/session.php');

 if(isset($_REQUEST['add']))
 {
 	$cocktailId = $_REQUEST['add'];
 	$userId = $_SESSION['user']['ID'];
 	$result = $db->query("INSERT INTO nutzer_cocktail (Cocktail_ID, Nutzer_ID) VALUES ($cocktailId, $userId)");
 
 	header("Location: cocktail.php?show=$cocktailId");
 }
 elseif(isset($_REQUEST['remove']))
 {
 	$cocktailId = $_REQUEST['remove'];
 	$userId = $_SESSION['user']['ID'];
 	$result = $db->query("DELETE FROM nutzer_cocktail WHERE Cocktail_ID = $cocktailId AND Nutzer_ID = $userId");
 
 	header("Location: cocktail.php?show=$cocktailId");
 }


 renderLayout($view, $variables);
?>