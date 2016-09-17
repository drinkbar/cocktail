<?php 
 require_once('../resources/config/core.php');
 require_once(LIBRARY_PATH . '/templateFunctions.php');
 
 /*************************************************************
  * RENDER LAYOUT
  */
 $view = "home.php";
 $variables = array(
 );
 
 renderLayout($view, $variables);
?>