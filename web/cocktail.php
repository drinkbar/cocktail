<?php 
 require_once('../resources/config/core.php');
 require_once(LIBRARY_PATH . '/templateFunctions.php');
 
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

 // handle session parameter 
 require_once(LIBRARY_PATH . '/session.php');
 

 renderLayout($view, $variables);
?>