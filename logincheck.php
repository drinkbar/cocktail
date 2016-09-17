<?php
include("inc/dbaccess.inc.php");



$passwortX = crypt($_REQUEST['passwort'],"PO");

#echo $passwortX;
#exit;


//Gibt es den Nutzder in der DB?
$qu = "select * from nutzer ";
$qu.="where Login='".$_REQUEST['login']."'";



$ret = $db->query($qu);


if(!$arr = $ret->fetch_assoc()) {
	
	//Nutzer nicht vorhanden
	header("location: index.php?error=1");
	exit;
}

if ($arr['Passwort'] != $passwortX) {
	//Passwort falsch
	header("location: index.php?error=2");
	exit;
}

session_name("cocki");
session_start();
$_SESSION['verified']=true;
$_SESSION ['username']= $arr['Login'];



	//JA
header("location: index.php?cocki=".session_id());
exit;




//Stimmt das Passwort?

//JA
#header("location: index.php");
	
	
?>