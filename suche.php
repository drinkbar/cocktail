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
							
							<h5>Suchen &amp; Finden</h5>
							<div class="regist"> 
							<p>Erinnerst du dich gerade an den Name des Cocktails, den du letztes Wochenende in deiner Lieblingsbar 								getrunken hast? Oder m&ouml;chtest du vielleicht nur wissen, was du mit einer bestimmten Zutat alles 								zaubern kannst? Durchsuche hier unsere Datenbank nach Eintr&auml;gen, egal ob alkoholisch oder nicht 								alkoholisch.</p>
							
						  
							
							 <input type="search" placeholder="Cocktail suchen">
		        			<input type="radio" name="pokemon" value="Red" id="pokemonRed" 							required><label>alkoholisch</label>
							
							<div class="smart">
							 <br />	
							</div>
							
		        			<input type="radio" name="pokemon" value="Blue" id="pokemonBlue" 							required><label>nicht alkoholisch</label>
							  
							      
							 <button type="button" class="button">Cocktail suchen</button>
							 
								 <div class="zutaten">
									  <p>Hier kannst du alle Zutaten markieren, die du bereits zu Hause hast und gezielter suchen:</p>
									 	
										<div class="small-12 large-4 columns">
							 
									 	  
							 
									 	  	<input type="radio"><label>Limetten</label>  <br />	
											<input type="radio"><label>Brauner Zucker </label> <br />	
											<input type="radio"><label>Weißer Zucker</label> <br />	
											<input type="radio"><label>Eiswürfel</label> <br />	
											<input type="radio"><label>Minze</label> <br />	
											<input type="radio"><label>Beerenobst</label> <br />	
											<input type="radio"><label>Erdbeeren</label> <br />	
											<input type="radio"><label>Heidelbeeren</label> <br />	
											<input type="radio"><label>Himbeeren</label> <br />	
											<input type="radio"><label>Oliven</label> <br />	
											<input type="radio"><label>	Lebensmittel-  <br />	farbe</label> <br />	
											<input type="radio"><label>Schlagsahne</label> 
											
											
											
							   			</div>
										
										<div class="small-12 large-4 columns">
							 
									 	 
									 	  	<input type="radio"><label>Weißer Rum</label> <br />	
											<input type="radio"><label>brauner Rum</label> <br />	
											<input type="radio"><label>Kokoslikör</label> <br />	
											<input type="radio"><label>Cachaça </label> <br />	
											<input type="radio"><label>	Weißer Tequila </label> <br />	
											<input type="radio"><label>Cointreau</label> <br />	
											<input type="radio"><label>Gin</label> <br />	
											<input type="radio"><label>Vermouth</label> <br />	
											<input type="radio"><label>Old Pascas</label> <br />	
											<input type="radio"><label>Apricot Brandy</label> <br />	
											<input type="radio"><label>Absolut <br />	 Vodka Citron</label>
											
											
							   			</div>
										
										<div class="small-12 large-4 columns">
							 
									 	
									 	  	<input type="radio"><label>Soda</label> <br />	
											<input type="radio"><label>Ananassaft</label> <br />	
											<input type="radio"><label>Kokosmilch</label> <br />	
											<input type="radio"><label>Grenadine</label> <br />	
											<input type="radio"><label>Orangensaft</label> <br />	
											<input type="radio"><label>Limettensaft</label> <br />	
											<input type="radio"><label>Zitronensaft</label> <br />	
											<input type="radio"><label>Cranberrysaft</label> <br />	
											<input type="radio"><label>Grapefruit <br />	 Limonade</label> <br />	
											<input type="radio"><label>Zuckersirup</label> <br />	
											<input type="radio"><label>Apfelsaft</label> <br />	
											<input type="radio"><label>Tonic</label>
											
										
											
							   			</div>
										 <button type="button" class="button">Suchen</button>
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
