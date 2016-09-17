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
	  
	<?php
	#if (!$eingeloggt):
		
	?>
	 <main>		  
	   		 	
	  	   		
	  
			
			
					<div class ="row">
						<hr />
						<div class="large-12 columns">
							
							<h6>Mit einem Cocktail in der Hand gibt es immer einen Grund zu feiern! </h6>
							
								<div class="small-12 large-6 columns">
								

								<p>Tats&auml;chlich gibt es bestimmt ein halbes Dutzend Geschichten &uuml;ber die Erfindung des Cocktails. Einig 								ist man sich nur, dass der Cocktail in den 20er-Jahren seine Bl&uuml;tezeit erlebte. Eine dieser 								Geschichen handelt von Antoine Amadie Peychaud. Anfang des 19. Jahrhunderts behandelte er im French 								Quarter nicht nur Krankheiten mit Magenbitter, sondern mixte f&uuml;r Freunde im Hinterzimmer seiner 								Apotheke ein Getr&auml;nk aus franz&ouml;sischem Brandy, speziellem Magenbitter, ein wenig Wasser und einem 								St&uuml;ck Zucker. Der Legende zufolge servierte er diesen Drink in einem Eierbecher, der auf franz&ouml;sisch 								coquetier hei&szlig;t und den die Amerikaner "cocktail" aussprachen. Die Nachfrage war bald so gro&szlig;, dass die 								Bars von New Orleans das Rezept &uuml;bernahmen. Nach einem dieser Lokale, dem Sazerac, wurde dann ein 								Cocktail benannt. Heute gilt der &quot;Sazerac&quot; als eine Art Nationalgetr&auml;nk in New Orleans.</p>
								
								</div>
	
								<div class="small-12 large-6 columns">
									
										<p>Heute gibt es hunderte von verschiedenen Cocktails. Sie k&ouml;nnen s&uuml;&szlig;, sauer, stark, schwach, scharf, 								oder prickelnd sein. In jedem Fall sind sie aber lecker und unwiderstehlich. Neben den Klassikern, wie 								Martini, oder Daiquiri werden au&szlig;erdem st&auml;ndig neue Rezepte kreiert und alte nach Vorlieben und Anlass 								abgewandelt. Wie also soll es da m&ouml;glich sein den &Uuml;berblick zu behalten? </p>

									<p>	Auf Drinkbar.de findest du eine gro&szlig;e Rezeptauswahl: vom bew&auml;hrten Barklassiker bis zum aktuellen 								Trend-Cocktail. </p>
									
								</div>
								
						</div>
						
					
								<div class="large-12 columns" id="zufall">
									
								<div class="large-12 columns">
										
										<h4>Wie w&auml;re es mit... ?</h4>
										
										
										<div class="small-12 large-6 columns">
											
											<div class="small-12 large-1 columns">
												<span class="badge">1</span>
											</div>
											<div class="small-12 large-11 columns">
												<p>Schneide die Limette von beiden Seiten an und teile sie in 															drei Teile.</p>
											</div>
							
											<div class="small-12 large-1 columns">
											<span class="badge">2</span>
									   		</div>
											<div class="small-12 large-11 columns">
												<p>Gebe die Limettenst&uuml;cke in ein Glas.</p>
											</div>
							
											<div class="small-12 large-1 columns">
											<span class="badge">3</span>
									   		</div>
											<div class="small-12 large-11 columns">
												<p>F&uuml;gen den braunen Zucker hinzu.</p>
											</div>
							
											<div class="small-12 large-1 columns">
											<span class="badge">4</span>
									   		</div>
											<div class="small-12 large-11 columns">
												<p>Zersto&szlig;e die Limette zusammen mit dem braunen Zucker.</p>
											</div>
							
											<div class="small-12 large-1 columns">
											<span class="badge">5</span>
									   		</div>
											<div class="small-12 large-11 columns">
												<p>Anschlie&szlig;end Cacha&ccedil;a hinzugeben.</p>
											</div>
							
											<div class="small-12 large-1 columns">
											<span class="badge">6</span>
									   		</div>
											<div class="small-12 large-11 columns">
												<p>Gebe das gecrushte Eis hinzu.</p>
											</div>
							
											<div class="small-12 large-1 columns">
											<span class="badge">7</span>
									   		</div>
											<div class="small-12 large-11 columns">
												<p>Verr&uuml;hre den Glasinhalt gut.</p>
											</div>
											
										</div>
									
								
										
										<div class="small-12 large-6 columns">
											<h3>Der Caipirinha</h3>
											<a href="caipi.html">
											<img src="img/cocktails/Caipirinha2.jpg" alt="Caipirinha2">
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
