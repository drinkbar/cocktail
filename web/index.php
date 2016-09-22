<?php 
 require_once('../resources/config/core.php');
 require_once(LIBRARY_PATH . '/templateFunctions.php');
 
 /*************************************************************
  * RENDER LAYOUT
  */
 $page = null;
 $variables = array();
 if(isset($_REQUEST['page']))
 {
 	$page = $_REQUEST['page'];
 }
 
 switch ($page)
 {
 	case 'zutaten':
 		$view = "zutaten.php";
 		break;
 	case 'useragreement':
 		$view = "useragreement.php";
 		break;
 	case 'imprint':
 		$view = "imprint.php";
 		break;
 	default:
		 $view = "home.php";
 }
 
 // handle session parameter
 require_once(LIBRARY_PATH . '/session.php');
 
 renderLayout($view, $variables);
?>