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
 	case 'ingredients':
 		$view = "profile/ingredients.php";
 		$variables = array();
 		break;
 	case 'shopping':
 		$view = "profile/shopping.php";
 		$variables = array();
 		break;
 	default:
 		// redirect
		header('Location: index.php');
 }
 
 // handle session parameter
 require_once(LIBRARY_PATH . '/session.php');
 
 renderLayout($view, $variables);
?>