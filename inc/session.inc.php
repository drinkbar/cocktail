<?php
	
session_name("cocki");
session_start();

if (!isset($_SESSION['verified'])){
	
	$eingeloggt = false;
	$username = "";	
} 
else {
	$eingeloggt = true;
	$username = $_SESSION['username'];	
}
	
	
?>