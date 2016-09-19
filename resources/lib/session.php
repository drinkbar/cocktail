<?php
session_start();

if(!isset($variables))
	$variables = array();

// check user
if(isset($_SESSION['user']))
{
	$variables['username'] = $_SESSION['user']['Login'];
	$variables['userId'] = $_SESSION['user']['ID'];
}

// check error
if(isset($_SESSION['error']))
{
	$variables['error'] = $_SESSION['error'];
	unset($_SESSION['error']);
}// check warning
if(isset($_SESSION['warning']))
{
	$variables['warning'] = $_SESSION['warning'];
	unset($_SESSION['warning']);
}// check success
if(isset($_SESSION['success']))
{
	$variables['success'] = $_SESSION['success'];
	unset($_SESSION['success']);
}
