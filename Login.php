<?php

$eingeloggt = false;


?>


<?php

include "inc/dbaccess.inc.php";
include "inc/session.inc.php";
if (!isset($_REQUEST['seite']))
	$_REQUEST['seite']="start";

?>

<!doctype html>
<html class="no-js" lang="de" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>thedrinkbar.de</title>
    <link rel="stylesheet" type="text/css" href="css/foundation.css">
	<link rel="stylesheet" type="text/css" href="css/foundation-icons.css">
    <link rel="stylesheet" type="text/css" href="css/app.css">
  </head>
  
  <body>
	  <main>		  
	   		 	
	  	   		
	  
			
			
					<div class ="row">
						<hr />
						<div class="large-12 columns">
							<h5>Login</h5>
						</div>
					</div>
						
						
					 <div class="regist">
						<div class ="row"> 
						  <div class="large-12 columns">
							 
							
	     	   		         <div id="login">
								 
	     	   		           <input type="text" placeholder="Benutzername">
							  
	     	   		           <input type="text" placeholder="Passwort">
							  
	     	   		         </div>
							
							 
							 <button type="button" class="button">Anmelden</button>
						
							 
						   </div>
						</div>
						
					</div>
					
						
					
				
			
					
	  </main>
	  
   
    <script src="js/vendor/jquery.js"></script>
    <script src="js/vendor/what-input.js"></script>
    <script src="js/vendor/foundation.js"></script>
    <script src="js/app.js"></script>
  </body>
</html>
