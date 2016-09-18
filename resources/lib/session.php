<?php
session_start();

if(!isset($variables))
	$variables = array();

// check user
if(isset($_SESSION['user']))
{
	$variables['username'] = $_SESSION['user']['Login'];
}

// check error
if(isset($_SESSION['error']))
{
	$variables['error'] = $_SESSION['error'];
	unset($_SESSION['error']);
}
