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
							
							<h5>Hall of Fame</h5>
							
							<div class="pc">
							
							<div class="best">
								
								<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
								    <div class="hovereffect">
								        <img class="img-responsive" src="img/cocktails/Caipirinha.jpg" alt="Caipirinha">
								        <div class="overlay">
								           <h3>Platz 1</h3>
								           <a class="info" href="caipi.html">Caipirinha</a>
										   
								        </div>
								    </div>
								</div>
						
							
							<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
							    <div class="hovereffect">
							<img src="img/cocktails/Mojito.jpg" alt="Mojito">
						        <div class="overlay">
						           <h3>Platz 2</h3>
						           <a class="info" href="mojito.html">Mojito</a>
								   
						        </div>
						    	</div>
							</div>
							<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
							    <div class="hovereffect">
							<img src="img/cocktails/Erdbeer-Margarita.png" alt="Erdbeer Margarita">
						        <div class="overlay">
						           <h3>Platz 3</h3>
						           <a class="info" href="erdbeermargarita.html">Erdbeer <br /> Margarita</a>
	  						        </div>
	  						    	</div>
	  							</div>
								 
						    
						</div>
	 		
					</div>
					
					<div class="smart">
				       
					   <div class="best">
				           <h4>Platz 1</h4>
						    <h3>Der Caipirinha</h3>
						   <a href="caipi.html">
						   <img src="img/cocktails/Caipirinha.jpg" alt="Caipirinha">
						  
				    	   </a>
							
							<h4>Platz 2</h4>
							<h3>Der Mojito</h3>
							<a href="mojito.html">
							<img src="img/cocktails/Mojito.jpg" alt="Mojito">
							
							</a>
							
							
							<h4>Platz 3</h4>
							<h3>Die Erdbeer Margarita</h3>
							<a href="erdbeermargarita.html">
								<img src="img/cocktails/Erdbeer-Margarita.png" alt="Erdbeer Margarita">
								
							</a>
						</div>
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
