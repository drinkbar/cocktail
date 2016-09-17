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
  
  <body><main>		  
	   		 	
	  	   	
					<div class ="row">
						<hr />
						<div class="small-12 large-4 columns">
							
							<div class="container">		
							<img src="img/zutaten/Old_Pascas.png" alt="Old Pascas">
   					   	 <div class="textbox">
   					   	 <div class="text"><h3>Old Pascas</h3>
						 Die Heimat des Old Pascas Dark Rum liegt im fernen, exotischen Jamaika. Hier wird nach Tradition aus feinem Zuckerrohr bester Rum destilliert und gelagert. Durch die Aufbewahrung der F&auml;sser in diesem tropischen, sonnigen Klima, bekommt jeder Rum eine ganz besondere Note. 
						 Ein Gemisch von Melasse (bei industriellem Rum) oder geh&auml;ckseltem Zuckerrohr, Zuckerrohrsaft und Wasser ergibt die Maische. F&uuml;r eine anschlie&szlig;ende G&auml;rung wird die Maische fermentiert und bekommt danach einen Alkoholgehalt von etwa 4 % bis 5 %. Dieser Zuckerwein wird destilliert. Das Destillat hat dann einen Alkoholgehalt von 65 % bis 75 %. Mit destilliertem Wasser verd&uuml;nnt, erh&auml;lt man wei&szlig;en Rum. Erfolgt die Lagerung in Eichenf&auml;ssern, nimmt Geschmacksstoffe der F&auml;sser auf und entwickelt dabei eine leicht br&auml;unliche F&auml;rbung.
						 
					 </div>
   					   	 </div>
   					   	 </div>
							
							<div class="container">
							<img src="img/zutaten/erdbeeren.jpg" alt="Erdbeeren">
   					   	 <div class="textbox">
   					   	 <div class="text"><h3>Erdbeeren</h3>
						 Im Sommer ist Erdbeersaison. Je nach Witterung k&ouml;nnen von Mai bis Juli frische Erdbeeren von deutschen Feldern gekauft werden. Viele Bauern bieten an, Erdbeeren direkt vom Feld selber zu ernten. Das garantiert nicht nur Frische, es macht auch sehr viel Spa&szlig;!
					 </div>
   					   	 </div>
   					   	 </div>
							
							<div class="container">
							<img src="img/zutaten/Tequila.jpg" alt="Tequila">
   					   	 <div class="textbox">
   					   	 <div class="text"><h3>Tequila</h3>
						 Der Tequila [teˈkiːla] ist eine Form der Spirituose Mezcal, eines Agaven-Brands aus Mexiko. Tequila ist der bekannteste Mezcal und wird in der Umgebung der Stadt Tequila im mexikanischen Bundesstaat Jalisco und in vier weiteren Staaten aus dem Herzen der blauen Agave gewonnen. F&uuml;r gew&ouml;hnlich betr&auml;gt der Alkoholgehalt zwischen 38 und 40, bei einigen Tequilas auch bis zu 50 Volumenprozent Alkohol.
Wei&szlig;er Tequila (silver, blanco) ist klarer, transparenter Tequila, der nach der Destillation unmittelbar in Flaschen abgef&uuml;llt wurde.

						 </div>
   					   	 </div>
   					   	 </div>
							
							<div class="container">
							<img src="img/zutaten/Minze.jpg" alt="Minze">
   					   	 <div class="textbox">
   					   	 <div class="text"><h3>Minze</h3>
						Rund um den Globus kennt man rund 20 verschiedene Arten der Minze, die sich in Aussehen und auch W&uuml;rzkraft 						durchaus unterscheiden.
						 In Gem&uuml;segesch&auml;ften, wird das aromatisch duftende Kraut meist lose zu dicken B&uuml;ndeln gebunden oder im Topf angeboten.
						 
						 
					 </div>
   					   	 </div>
   					   	 </div>
							
							
								
							
						</div>	
						<div class="small-12 large-4 columns">
							
						<div class="container">
						<img src="img/zutaten/Absolut_Citron.jpg" alt="Absolut Citron">
				   	 <div class="textbox">
				   	 <div class="text"><h3>Absolut Vodka Citron</h3>
					 Die Hauptzutaten in Absolut Citron sind Absolut Vodka und Zitronen-Aroma. Absolut Vodka wird aus Wasser und Winterweizen hergestellt. Obwohl die Zitrone das Hauptaroma liefert, wurde auch Limone hinzugef&uuml;gt, um Absolut Citron seinen vollendet ausgewogenen Charakter zu verleihen.
					 
				 </div>
				   	 </div>
				   	 </div>
						
						<div class="container">
						<img src="img/zutaten/blaubeeren.jpg" alt="Heidelbeeren">
				   	 <div class="textbox">
				   	 <div class="text"><h3>Heidelbeeren</h3>
					 Heidelbeeren werden je nach Region und Mundart auch Blaubeeren, Schwarzbeeren, Mollbeeren,  oder Bickbeeren genannt. Man bekommt sie zwar das ganze Jahr &uuml;ber als Importware, die heimische Saison dauert aber von Juli bis September.
				 </div>
				   	 </div>
				   	 </div>
						
						<div class="container">
						<img src="img/zutaten/Cointreau.jpg" alt="Cointreau">
				   	 <div class="textbox">
				   	 <div class="text"><h3>Cointreau</h3>
					 Cointreau [ko̯ɛ̃ˈtroː] ist ein franz&ouml;sischer Orangenlik&ouml;r und hat einen Alkoholgehalt von 40 Volumenprozent.
					 Die f&uuml;r Cointreau verwendeten Orangenschalen stammen von s&uuml;&szlig;en und bitteren Orangen aus den L&auml;ndern Haiti, Brasilien und Spanien. Die Schalen werden gemischt und zum Mazerieren in Alkohol eingelegt. Hierbei entzieht kalter Alkohol den Orangenschalen langsam das Aroma. Daran anschlie&szlig;end erfolgt die Destillation, wodurch ein hochprozentiges Destillat entsteht. In den weiteren Herstellungsphasen entsteht daraus mit Zucker, Wasser und Neutralalkohol der Cointreau.
					 
				 </div>
				   	 </div>
				   	 </div>
						
						<div class="container">
						<img src="img/zutaten/cranberry.jpg" alt="Cranberrys">
				   	 <div class="textbox">
				   	 <div class="text"><h3>Cranberrysaft</h3>
					 Cranberrysaft wird aus den Fr&uuml;chten der Gro&szlig;fr&uuml;chtigen Moosbeere gewonnen welche vor allem unter der englischen Bezeichnung Cranberry bekannt ist.
					 Der rote Saft zeichnet sich durch seinen herben und sehr sauren Geschmack aus.
				 </div>
				   	 </div>
				   	 </div>
						
							
							
							
							
						</div>
						<div class="small-12 large-4 columns">
							
								<div class="container">
								<img src="img/zutaten/Grenadine.png" alt="Grenadine">
	   					   	 <div class="textbox">
	   					   	 <div class="text"><h3>Grenadine</h3>
							 Grenadine wird bei der Verwendung von echtem Granatapfelsaft auch als Granatapfelsirup bezeichnet. Der Sirup hat eine intensiv rote Farbe und wird haupts&auml;chlich zum Aromatisieren und F&auml;rben von Cocktails verwendet. Urspr&uuml;nglich wurde Grenadine aus dem Saft von Granat&auml;pfeln, Zucker und Wasser hergestellt. Heute werden unter dem Namen Grenadine sehr unterschiedliche Produkte angeboten, die sich geschmacklich und qualitativ stark unterscheiden. Ihnen gemeinsam ist lediglich ein hoher Zuckergehalt, die rote Farbe und ein im weitesten Sinn fruchtiges Aroma.
							 
						 </div>
	   					   	 </div>
	   					   	 </div>
								
								<div class="container">
								<img src="img/zutaten/Apricot_Brandy.jpg" alt="Apricot Brandy">
	   					   	 <div class="textbox">
	   					   	 <div class="text"><h3>Apricot Brandy</h3>
							 Apricot Brandy ist ein bernsteinfarbener Aprikosenlik&ouml;r. Er wird aus Aprikosen hergestellt, die ihm den typischen Zyanidgeschmack verleihen. Dabei wird der Dampf des Destillats durch ein Gef&auml;&szlig; geleitet, in dem sich die Fr&uuml;chte und ihre Kerne befinden. Des Weiteren wird Apricot Brandy mit verschiedenen Kr&auml;utern und Cognac verfeinert.
							 Der s&uuml;&szlig;e, leicht fruchtige Geschmack erinnert oft an Amaretto.
							 Man kann Apricot Brandy nicht nur pur genie&szlig;en, sondern auch hervorragend als Basis f&uuml;r Longdrinks und Cocktails verwenden.
							 
						 </div>
	   					   	 </div>
	   					   	 </div>
								
								<div class="container">
								<img src="img/zutaten/Cachaca.jpg" alt="Cacha&ccedil;a">
	   					   	 <div class="textbox">
	   					   	 <div class="text"><h3>Cacha&ccedil;a</h3>
							 Der, oder die Cacha&ccedil;a [kaˈ&int;asa] ist eine brasilianische Spirituose, die fr&uuml;her und hochsprachlich als 							Aguardente (= hei&szlig; brennendes Wasser oder „Feuerwasser“) und umgangssprachlich oft als Pinga (= Fusel) 							bezeichnet wird. 
							 Der aus reinem Zuckerrohrsaft bestehende Brand kann bei der Herstellung mehrfach destilliert werden, 							muss am Ende aber mit 38-48 Volumenprozent Alkohol abgef&uuml;llt beziehungsweise eingelagert werden.

							 
						 </div>
	   					   	 </div>
	   					   	 </div>
								
								<div class="container">
								<img src="img/zutaten/Himbeeren.jpg" alt="Himbeeren">
	   					   	 <div class="textbox">
	   					   	 <div class="text"><h3>Himbeeren</h3>
								  Mit ihren vielen kleinen, eng aneinander liegenden Fr&uuml;chtchen geh&ouml;rt die Himbeere eigentlich gar nicht zu den Beeren, sondern zu den sogenannten Sammelsteinfr&uuml;chten.
								  Sie kennzeichnet sich durch ihre leuchtend rote Farbe und den bet&ouml;renden Duft.
							
							 
							 </div>
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
