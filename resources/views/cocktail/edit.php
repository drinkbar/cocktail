<?php 
if (!isset($_SESSION['user']) || $_SESSION['user']['role'] !== "admin")
{
	$_SESSION['error'] = "<strong>Zugriff verweigert!</strong> Sie sind nicht berechtigt, diese Seite aufzurufen.";
	header("Location: cocktail.php");
}
require_once '../src/Db.php';

$db = new Db();

// UPDATE
if(isset($_REQUEST['submit']))
{
	$name = mysql_real_escape_string($_REQUEST['cocktailname']);
	$receipe = mysql_real_escape_string($_REQUEST['recipe']);
	$comment = mysql_real_escape_string($_REQUEST['comment']);
	$picture = mysql_real_escape_string($_REQUEST['picture']);
	$ingredients = $_REQUEST['ingredients'];
	$amounts = $_REQUEST['amount'];
	
	var_dump($ingredients);
	var_dump($amounts);
	// start SQL TRANSACTION
	try 
	{
		$db->startTransaction();
		// UPDATE cocktail by id
		$updateCocktail = $db->query("UPDATE cocktail SET 
						Cocktailname = '$name',
						Rezept = '$receipe',
						Bemerkung = '$comment',
						Bild = '$picture'
					WHERE ID = $id");
		
		if($updateCocktail === false)
			throw new Exception($db->error());
		
		// REMOVE old cocktail_zutat entries
		$remove = $db->query("DELETE FROM cocktail_zutat WHERE Cocktail_ID = $id");
		if($remove === false)
			throw new Exception($db->error());
		// INSERT new cocktail_zutat enties
		foreach ($ingredients as $ingredientId)
		{
			if(array_key_exists($ingredientId, $amounts))
			{	
				$insert = $db->query("INSERT INTO cocktail_zutat (Cocktail_ID, Zutat_ID, Menge) VALUES ($id,$ingredientId,'".$amounts[$ingredientId]."')");
				if($insert === false)
				{
					throw new Exception($db->error());
				}
			}
		}		
	}
	// rollback on error
	catch (Exception $ex)
	{
		$db->rollback();
		$result = false;
		$error = $ex->getMessage();
	}
	if(!isset($error))
	{
		// COMMIT and CLOSE TRANSACTION
		$result = $db->commit();
	}

	if($result)
	{
		$_SESSION['success'] = "Cocktail erfolgreich bearbeitet.";
	}
	else
	{
		$_SESSION['error'] = "<strong>Bearbeitung fehlgeschlagen!</strong><br /> ".$error;
	}
	header("Location: cocktail.php?show=$id");
}

// SELECT cocktail by id
$cocktail = $db->select("SELECT *
						FROM cocktail c 
						WHERE c.ID = $id");
// redirect if no cocktail found
if(empty($cocktail))
{
	$_SESSION['error'] = "Es wurde ein ungültiger Cocktail angegeben.";
	header("Location: cocktail.php");	
}
// SELECT cocktail zutaten by id
$zutaten = $db->select("SELECT z.*, cz.Menge
						FROM cocktail c 
						 JOIN cocktail_zutat cz ON (cz.Cocktail_ID = c.ID) 
						 JOIN zutat z ON (z.ID = cz.Zutat_ID) 
						WHERE c.ID = $id");
// generate new array; use zutat.id as array index
$cocktailZutaten = array();
foreach ($zutaten as $cZutat)
{
	$cocktailZutaten[$cZutat['ID']] = $cZutat;
}
unset($zutaten);

// SELECT all zutaten
$listZutaten = $db->select("SELECT * FROM zutat WHERE 1 ORDER BY Bezeichnung");

// set variables
$name = $cocktail[0]['Cocktailname'];
//$zutaten = $cocktail[0]['Zutaten'];
$rezept = $cocktail[0]['Rezept'];
$comment = $cocktail[0]['Bemerkung'];
$image = $cocktail[0]['Bild'];

// CONTENT:
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
				      // render zutaten input (checkbox + text)
				      foreach ($listZutaten as $zutat)
				      {
				      	$zName = $zutat['Bezeichnung'];
				      	$zId = $zutat['ID'];
				      	$checked = in_array($zId, array_keys($cocktailZutaten));
				      	$amount = $checked ? $cocktailZutaten[$zId]['Menge'] : "";
				      	
				      	echo "<div class=\"small-4 columns\">";
				      	echo "<div class=\"input-group\">";
	        			echo "<span class=\"input-group-label\">";
				      	echo "<input id=\"chkbox_$zId\" type=\"checkbox\" name=\"ingredients[]\" value=\"$zId\"".($checked ? "checked=\"checked\"" : "")."><label for=\"chkbox_$zId\">$zName</label>";
	        			echo "</span>
	        				    <input type=\"text\" placeholder=\"Menge\" name=\"amount[$zId]\" class=\"input-group-field\" value=\"$amount\" \>
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