<?php  
// Datenbankserver kontaktieren

$db_host = '';
$db_base = 'cocktail2';
$db_user = 'Jessica';
$db_passwd = 'jessica';


$db = new mysqli("", "Jessica", "jessica","cocktail2");

$db->query("SET NAMES 'utf8'");

?>