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
 
 if(isset($_REQUEST['term']))
 {
 	$term = $_REQUEST['term'];
 	$result = $db->select("SELECT * FROM cocktail WHERE Cocktailname LIKE '%$term%'");
 	$variables['result'] = $result;
 }
 // handle session parameter 
 require_once(LIBRARY_PATH . '/session.php');

 renderLayout($view, $variables);
?>