<?php 
require_once '../src/Db.php';

$db = new Db();
$cocktail = $db->select("SELECT *
						FROM cocktail c 
						WHERE c.ID = $id");

$zutaten = $db->select("SELECT z.*, cz.Menge
						FROM cocktail c 
						 JOIN cocktail_zutat cz ON (cz.Cocktail_ID = c.ID) 
						 JOIN zutat z ON (z.ID = cz.Zutat_ID) 
						WHERE c.ID = $id");

if(!empty($cocktail))
{
	$name = $cocktail[0]['Cocktailname'];
	//$zutaten = $cocktail[0]['Zutaten'];
	$rezept = $cocktail[0]['Rezept'];
	$image = $cocktail[0]['Bild'];
}
else
{
	session_start();
	$_SESSION['error'] = "Es wurde ein ungültiger Cocktail angegeben.";
	header("Location: cocktail.php");
}
?>
<main>
	<div class="row">
		<hr />
		<h5><?php echo $name; ?></h5>
		<div class="small-6 columns">
			<img src="<?php echo $image; ?>" alt="<?php echo $name; ?>" title="<?php echo $name; ?>" />
		</div>
		<div class="small-6 columns">
			<h3>Zutaten</h3>
			<ul>
				<?php 
				foreach ($zutaten as $zutat)
				{
					echo "<li>";
					echo $zutat['Menge']." ".$zutat['Bezeichnung'];
					echo "</li>";
				}?>
			</ul>		
			<h3>Rezept</h3>
			<p><?php echo $rezept; ?></p>
		</div>
	</div>
</main>