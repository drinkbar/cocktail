<?php 
 require_once('../resources/config/core.php');
 require_once(LIBRARY_PATH . '/templateFunctions.php');
 
 session_start();
 /*************************************************************
  * RENDER LAYOUT
  */

 // default view --> list
 $view = "cocktail/list.php";
 $variables = array();
 
 // show
 if(isset($_REQUEST['show']))
 {
 	$view = "cocktail/show.php";
 	$variables = array( 'id' => $_REQUEST['show']);
 }

 // error handling
 if(isset($_SESSION['error']))
 {
 	$variables['error'] = $_SESSION['error'];
 	unset($_SESSION['error']);
 }

 renderLayout($view, $variables);
?>