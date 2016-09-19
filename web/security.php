<?php
require_once '../src/Db.php';
session_start();

// LOGIN CHECK
if(isset($_REQUEST['login_check']))
{
	if(isset($_REQUEST['submit']))
	{
		// escape form values
		$_username = mysql_real_escape_string($_REQUEST['username']);
		$_password = mysql_real_escape_string($_REQUEST['password']);
		$_password = crypt($_password, "PO");
		
		$database = new Db();
		$user = $database->select("SELECT * FROM nutzer WHERE Login = '$_username' AND Passwort = '$_password' LIMIT 1");
	
		if(empty($user))
		{
			$_SESSION['login'] = 0;
			$_SESSION['error'] = "Login fehlgeschlagen.";
		}
		else
		{
			$_SESSION['login'] = 1;
			$_SESSION['user'] = $user[0];
		}
	}
	// redirect
	header("Location: index.php");	
}
// LOGOUT
elseif(isset($_REQUEST['logout']))
{
	if(isset($_SESSION['login']))
	{
		session_destroy();
	}
	// redirect
	header('Location: index.php');
}