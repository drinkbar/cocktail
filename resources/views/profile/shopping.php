<?php
if (!isset($_SESSION['user']))
{
	$_SESSION['error'] = "<strong>Zugriff verweigert!</strong> Sie sind nicht berechtigt, diese Seite aufzurufen.";
	header("Location: cocktail.php");
}
require_once '../src/Db.php';

$db = new Db();
?>

<main>
    <div class="row">
        <hr />
        <h5>Partyplaner</h5>
    </div>
    
    <div class="row">
    	<div class="small-12 large-8 large-offset-2">
	 		<p>Hier kannst du eine Einkaufsliste für deine nächste Cocktailparty erstellen.</p>
	 		<form action="" method="POST">
	 			<label>
		 			<input type="number" name="person" placeholder="Anzahl Personen" /> 
	 			</label>
	 		</form>
    	</div>
    </div>
</main>