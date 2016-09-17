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
    <title>drinkbar.de</title>
    <link rel="stylesheet" href="css/foundation.css">
	<link rel="stylesheet" href="css/foundation-icons.css">
    <link rel="stylesheet" href="css/app.css">
  </head>
  
  <body>
	  
	  <main>		  
	   		 	
	  	   		
	  
			
			
					<div class ="row">
						<hr />
						<div class="large-12 columns">
							
							<h5>Einkaufsliste erstellen</h5>
							<div class="regist"> 
							<p>Hier kannst du eine Einkaufsliste für deinen nächsten Cocktail erstellen.</p>
							
						  
							<label> Wähle deinen Wunschcocktail aus: 
				          <select required>
				            <option value="">Auswahl treffen...</option>
							<option value="1">Caipirinha</option>
							<option value="2">Mojito</option>
							<option value="3">Piña Colada</option>
							<option value="4">Erdbeer-Margarita</option>
							<option value="5">Dry Martini</option>
							<option value="6">Zombie</option>
							<option value="7">Cosmopolitan</option>
							<option value="8">Strawberry Daiquiri</option>
							<option value="9">Heidelbeer- Grapefruit- Schorle</option>
							<option value="10">Virgin Mojito</option>
						
				          </select>
					  		</label>
							
					  	  <label>Anzahl der Personen:
				        	  <input type="text" placeholder="1" required>
				      	  </label>
							
							
		        		
							  
							      
							 <button type="button" class="button">Liste drucken</button>
							 
								
								
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
