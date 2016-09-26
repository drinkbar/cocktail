<?php 
 require_once('../resources/config/core.php');
 require_once(LIBRARY_PATH . '/templateFunctions.php');
 require_once '../src/Db.php';
 /*************************************************************
  * RENDER LAYOUT
  */

 $db = new Db();
 
 // show
 if(isset($_REQUEST['show']))
 {
 	$view = "cocktail/show.php";
 	$variables = array( 'id' => $_REQUEST['show']);
 }
 elseif(isset($_REQUEST['edit']))
 {
 	$view = "cocktail/edit.php";
 	$variables = array( 'id' => $_REQUEST['edit']);
 }
 elseif(isset($_REQUEST['delete']))
 {
 	$id = $_REQUEST['delete'];
 	$query = $db->query("DELETE FROM cocktail WHERE ID = $id");
 	if($query)
 	{
 		$variables['success'] = "Cocktail erfolgreich gelöscht!";
	 	$view = "cocktail/list.php";
 	}
 	else
 	{
 		$variables['error'] = "Cocktail konnte nicht gelöscht werden!";
 		$view = "cocktail/show.php";
 		$variables = array( 'id' => $_REQUEST['show']);
 	}	
 }
 // SHOW
 else 
 {
	 $view = "cocktail/list.php"; 	
 }

 // handle session parameter 
 require_once(LIBRARY_PATH . '/session.php');

 renderLayout($view, $variables);
?>