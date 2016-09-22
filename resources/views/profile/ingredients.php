<?php
if (!isset($_SESSION['user']))
{
	$_SESSION['error'] = "<strong>Zugriff verweigert!</strong> Sie sind nicht berechtigt, diese Seite aufzurufen.";
	header("Location: index.php");
}
require_once '../src/Db.php';

$db = new Db();

$listZutaten = $db->select("SELECT * FROM zutat ORDER BY Bezeichnung");
$userZutat = $db->select("SELECT z.* 
					FROM zutat z, nutzer_zutat nz
					WHERE 
						z.ID = nz.Zutat_ID AND
						nz.Nutzer_ID = $userId
			");

// get list
if(empty($userZutat))
{
	$myList = array();
}
else 
{
	foreach($userZutat as $z)
	{
		$myList[$z['ID']] = $z;
	}	
}
// UPDATE
if(isset($_REQUEST['submit']))
{
	$ingredients = $_REQUEST['ingredients'];
	
	try 
	{
		$db->startTransaction();
		// DELETE current entries
		$remove = $db->query("DELETE FROM nutzer_zutat WHERE Nutzer_ID = $userId");
		
		if($remove === false)
			throw new Exception($db->error());
		// ADD new entries
		foreach($ingredients as $ingredient)
		{
			$insert = $db->query("INSERT INTO nutzer_zutat (Nutzer_ID, Zutat_ID) VALUES ($userId, $ingredient)");
			if($insert === false)
				throw new Exception($db->error());
		}
	}
	// ROLLBACK on error
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
		header("Location: search.php?ingredients");
	}
	else
	{
		$_SESSION['error'] = "<strong>Bearbeitung fehlgeschlagen!</strong><br /> ".$error;
		header("Location: profile.php?page=ingredients");
	}
}
?>

<main>
    <div class="row">
        <hr />
        <h5>Meine Zutaten</h5>
    </div>
    
    <div class="row">
        <form action="" method="POST">
	    	<div class="large-12 columns">
		      <label><strong>Meine vorhandenen Zutaten</strong></label>
			      <div class="row checkbox-grid">
				      <?php 
					      foreach ($listZutaten as $zutat)
					      {
					      	$zName = $zutat['Bezeichnung'];
					      	$zId = $zutat['ID'];
					      	$checked = in_array($zId, array_keys($myList));
					      	
					      	echo "<div class=\"large-4 small-12 columns\">";
					      	echo "<div class=\"input-group\">";
		        			echo "<span class=\"input-group-label\">";	
					      	echo "<input id=\"chkbox_$zId\" type=\"checkbox\" name=\"ingredients[]\" value=\"$zId\"".($checked ? "checked=\"checked\"" : "")."><label for=\"chkbox_$zId\">$zName</label>";
					      	echo "</span>";
					      	echo "</div>";
					      	echo "</div>";
					      }
					      ?>
			      </div>
			</div>
			<div class="large-12 columns">
				<input type="submit" name="submit" class="button" value="Finde Cocktails anhand meiner Zutaten" /> 
			</div>
		</form>
    </div>
</main>