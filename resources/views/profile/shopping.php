<?php
if (!isset($_SESSION['user']))
{
	$_SESSION['error'] = "<strong>Zugriff verweigert!</strong> Sie sind nicht berechtigt, diese Seite aufzurufen.";
	header("Location: cocktail.php");
}
require_once '../src/Db.php';

$db = new Db();
$anzahl = null;
$list = $db->select("SELECT c.* FROM Cocktail c ORDER BY Cocktailname");

if(isset($_REQUEST['submit']))
{
	$cocktails = $_REQUEST['cocktails'];
	$anzahl = (int) $_REQUEST['count'];
	$result = array();
	
	foreach ($cocktails as $cId)
	{
		$cZutaten = $db->select("SELECT z.ID, z.Bezeichnung, cz.Menge, cz.Einheit FROM cocktail_zutat cz, zutat z WHERE z.ID = cz.Zutat_ID AND Cocktail_ID = $cId");
		foreach ($cZutaten as $cZutat)
		{
			$zId = (int)$cZutat['ID'];
			if(!isset($result[$zId]))
			{
				// default values
				$result[$zId] = array(
						'Menge' => 0,
						'Bezeichnung' => $cZutat['Bezeichnung'],
						'Einheit' => $cZutat['Einheit']
				);
			}
			// add amount
			//$result[$zId] ['Menge'] = $result[$zId] ['Menge'] + ($cZutat['Menge'] * $anzahl);
			$result[$zId] ['Menge'] += $cZutat['Menge'] * $anzahl;
		}
	}
}
?>

<main>
    <div class="row">
        <hr />
        <h5>Partyplaner</h5>
    </div>
    
    <div class="row">
 		<form action="" method="POST">
	    	<div class="small-12 large-8 large-offset-2">
		 		<p>Hier kannst du eine Einkaufsliste für deine nächste Cocktailparty erstellen.</p>
		 			<label>
			 			<input type="number" name="count" placeholder="Anzahl Personen" value="<?php echo $anzahl; ?>"/> 
		 			</label>
		 	</div>
	    	<div class="small-12 large-8 large-offset-2">
	    			<?php 
	    			foreach ($list as $cocktail)
	    			{
	    				$cName = $cocktail['Cocktailname'];
	    				$cId = $cocktail['ID'];
	    				$checked = "";
	    				if(isset($cocktails))
	    					$checked = in_array($cId, $cocktails) ? "checked=\"checked\"" : "";
	    				
	    				echo "<div class=\"large-4 small-12 columns\">";
	    				echo "<div class=\"input-group\">";
	    				echo "<span class=\"input-group-label\" class=\"align-left\">";
	    				echo "<input id=\"chkbox_$cId\" type=\"checkbox\" name=\"cocktails[]\" value=\"$cId\" $checked><label for=\"chkbox_$cId\">$cName</label>";
	    				echo "</span> </div>";
	    				echo "</div>";
	    			}
	    			?>
	    			<div class="row">
					    <div class="large-12 columns">
					      <input type="submit" name="submit" class="button" value="Speichern" /> 
					    </div>
				  </div>
	    	</div>
    	</form>
    	<hr />
    </div>
    
    <?php 
    if(isset($result))
    {
    	echo "<div class=\"row\">";
    	echo "<h3>Einkaufsliste</h3>";
    	echo "<p>Für je $anzahl der ausgewählten Cocktails werden folgende Zutaten benötigt:</p>";
	    echo "</div>";
	    
	    echo "<ul>";
	    foreach($result as $row)
	    {
	    	$menge = $row['Menge'] == 0 ? "" : $row['Menge'];
	    	$einheit = $row['Einheit'];
	    	$bezeichnung = $row['Bezeichnung'];
	    	
	    	echo "<li>$menge $einheit $bezeichnung</li>";
	    }
	    echo "</ul>";
    }
    ?>
</main>