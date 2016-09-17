<?php 
 require_once('../resources/config/core.php');
 require_once(LIBRARY_PATH . '/templateFunctions.php');
 
 /*************************************************************
  * RENDER LAYOUT
  */
 $page = null;
 if(isset($_REQUEST['page']))
 {
 	$page = $_REQUEST['page'];
 }
 
 switch ($page)
 {
 	case 'useragreement':
 		$view = "useragreement.php";
 		$variables = array();
 		break;
 	default:
 	case 'imprint':
 		$view = "imprint.php";
 		$variables = array();
 		break;
 	default:
		 $view = "home.php";
		 $variables = array();
 }
 
 renderLayout($view, $variables);
?>