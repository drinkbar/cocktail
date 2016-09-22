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
        <h5>Meine Zutaten</h5>
    </div>
    
    <div class="row">
    	<p>Liste meiner vorhandenen Zutaten</p>
    	
    </div>
</main>