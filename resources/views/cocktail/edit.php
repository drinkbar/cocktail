<?php 
if (!isset($_SESSION['user']) || $_SESSION['user']['role'] !== "admin")
{
	$_SESSION['error'] = "<strong>Zugriff verweigert!</strong> Sie sind nicht berechtigt, diese Seite aufzurufen.";
	header("Location: cocktail.php");
}
require_once '../src/Db.php';

$db = new Db();
if(isset($_REQUEST['submit']))
{
	$name = mysql_real_escape_string($_REQUEST['cocktailname']);
	$receipe = mysql_real_escape_string($_REQUEST['recipe']);
	$comment = mysql_real_escape_string($_REQUEST['comment']);
	$picture = mysql_real_escape_string($_REQUEST['picture']);
	
	$result = $db->query("UPDATE cocktail SET 
					Cocktailname = '$name',
					Rezept = '$receipe',
					Bemerkung = '$comment',
					Bild = '$picture'
				WHERE ID = $id");
	
	if($result)
	{
		$_SESSION['success'] = "Cocktail erfolgreich bearbeitet.";
	}
	else
	{
		$_SESSION['error'] = "Bearbeitung fehlgeschlagen. ".$db->error();
	}
	header("Location: cocktail.php?show=$id");
}

$cocktail = $db->select("SELECT *
						FROM cocktail c 
						WHERE c.ID = $id");

$zutaten = $db->select("SELECT z.*, cz.Menge
						FROM cocktail c 
						 JOIN cocktail_zutat cz ON (cz.Cocktail_ID = c.ID) 
						 JOIN zutat z ON (z.ID = cz.Zutat_ID) 
						WHERE c.ID = $id");

$cocktailZutaten = array();
foreach ($zutaten as $cZutat)
{
	$cocktailZutaten[$cZutat['ID']] = $cZutat;
}

$listZutaten = $db->select("SELECT * FROM zutat WHERE 1 ORDER BY Bezeichnung");

if(!empty($cocktail))
{
	$name = $cocktail[0]['Cocktailname'];
	//$zutaten = $cocktail[0]['Zutaten'];
	$rezept = $cocktail[0]['Rezept'];
	$comment = $cocktail[0]['Bemerkung'];
	$image = $cocktail[0]['Bild'];
}
else
{
	$_SESSION['error'] = "Es wurde ein ungültiger Cocktail angegeben.";
	header("Location: cocktail.php");
}
?>
<main>
	<div class="row">
		<hr />
		<h5><?php echo $name; ?> <small>bearbeiten</small></h5>
		<form action="" method="POST">
			<div class="row">
				<div class="large-6 columns">
			    	<label>Cocktailname
			        	<input type="text" name="cocktailname" value="<?php echo $name; ?>" />
			      	</label>
			    </div>
			    <div class="large-6 columns">
			    	<label>Bild
			        	<input type="text" name="picture" value="<?php echo $image; ?>" />
			      	</label>
			    </div>
			  </div>
			  <div class="row">
			    <div class="large-12 columns">
			      <label>Zubereitung
			        <textarea rows="5" name="recipe"><?php echo $rezept; ?></textarea>
			      </label>
			    </div>
			  </div>
			  <div class="row">
			    <div class="large-12 columns">
			      <label>Bemerkung
			        <textarea rows="5" name="comment"><?php echo $comment; ?></textarea>
			      </label>
			    </div>
			  </div>
			  <div class="large-12 columns">
			      <label>Zutaten</label>
			      <div class="row checkbox-grid">
				      <?php 
				      foreach ($listZutaten as $zutat)
				      {
				      	$zName = $zutat['Bezeichnung'];
				      	$zId = $zutat['ID'];
				      	$checked = in_array($zId, array_keys($cocktailZutaten));
				      	$amount = $checked ? $cocktailZutaten[$zId]['Menge'] : "";
				      	
				      	echo "<div class=\"small-4 columns\">";
				      	echo "<div class=\"input-group\">";
	        			echo "<span class=\"input-group-label\">";
				      	echo "<input id=\"chkbox_$zId\" type=\"checkbox\" name=\"ingredients[]\"".($checked ? "checked=\"checked\"" : "")."><label for=\"chkbox_$zId\">$zName</label>";
	        			echo "</span>
	        				    <input type=\"text\" placeholder=\"Menge\" class=\"input-group-field\" value=\"$amount\">
	      					  </div>";
				      	echo "</div>";
				      }
				      ?>
			      </div>
			  </div>
			  <input type="hidden" name="id" value="<?php echo $id; ?>" />
			  <div class="row">
			    <div class="large-12 columns">
			      <input type="submit" name="submit" class="button" value="Speichern" /> 
			    </div>
			  </div>
		</form>
	</div>
</main>