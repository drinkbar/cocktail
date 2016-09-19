<?php 
require_once '../src/Db.php';
// select random cocktail
$db = new Db();
$cocktailList = $db->select("SELECT * FROM cocktail WHERE 1");
$randCocktail = $cocktailList[array_rand($cocktailList, 1)];
?>
<main>
<div class="row">
	<hr />
	<div class="large-12 columns">
		<h6>Mit einem Cocktail in der Hand gibt es immer einen Grund zu feiern!</h6>

		<div class="small-12 large-6 columns">
			<p>Tats&auml;chlich gibt es bestimmt ein halbes Dutzend Geschichten
				&uuml;ber die Erfindung des Cocktails. Einig ist man sich nur, dass
				der Cocktail in den 20er-Jahren seine Bl&uuml;tezeit erlebte. Eine
				dieser Geschichen handelt von Antoine Amadie Peychaud. Anfang des
				19. Jahrhunderts behandelte er im French Quarter nicht nur
				Krankheiten mit Magenbitter, sondern mixte f&uuml;r Freunde im
				Hinterzimmer seiner Apotheke ein Getr&auml;nk aus franz&ouml;sischem
				Brandy, speziellem Magenbitter, ein wenig Wasser und einem
				St&uuml;ck Zucker. Der Legende zufolge servierte er diesen Drink in
				einem Eierbecher, der auf franz&ouml;sisch coquetier hei&szlig;t und
				den die Amerikaner "cocktail" aussprachen. Die Nachfrage war bald so
				gro&szlig;, dass die Bars von New Orleans das Rezept
				&uuml;bernahmen. Nach einem dieser Lokale, dem Sazerac, wurde dann
				ein Cocktail benannt. Heute gilt der &quot;Sazerac&quot; als eine
				Art Nationalgetr&auml;nk in New Orleans.</p>
		</div>

		<div class="small-12 large-6 columns">
			<p>Heute gibt es hunderte von verschiedenen Cocktails. Sie
				k&ouml;nnen s&uuml;&szlig;, sauer, stark, schwach, scharf, oder
				prickelnd sein. In jedem Fall sind sie aber lecker und
				unwiderstehlich. Neben den Klassikern, wie Martini, oder Daiquiri
				werden au&szlig;erdem st&auml;ndig neue Rezepte kreiert und alte
				nach Vorlieben und Anlass abgewandelt. Wie also soll es da
				m&ouml;glich sein den &Uuml;berblick zu behalten?</p>

			<p>Auf Drinkbar.de findest du eine gro&szlig;e Rezeptauswahl: vom
				bew&auml;hrten Barklassiker bis zum aktuellen Trend-Cocktail. </p>
		</div>
	</div>

	<div class="large-12 columns" id="zufall">
		<div class="large-12 columns">
			<h4>Wie wäre es mit... ?</h4>
			<div class="small-12 large-6 columns">
				<?php echo $randCocktail['Rezept']?>
			</div>

			<div class="small-12 large-6 columns">
				<h3><?php echo $randCocktail['Cocktailname']; ?></h3>
				<a href="cocktail.php?show=<?php echo $randCocktail['ID']; ?>"> <img src="<?php echo $randCocktail['Bild']?>"
					alt="<?php echo $randCocktail['Cocktailname']; ?>">
				</a>
			</div>

		</div>
	</div>
</div>





</main>