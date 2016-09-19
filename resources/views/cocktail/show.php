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
	$rezept = nl2br($cocktail[0]['Rezept']);
	$comment = nl2br($cocktail[0]['Bemerkung']);
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
		<?php 
		if(isset($_SESSION['user']) && $_SESSION['user']['role'] == 'admin') 
		{
			echo "<div class=\"small-12 columns\">";
			echo "<a href=\"cocktail.php?delete=$id\" class=\"button alert round\">Löschen</a>";
			echo "<a href=\"cocktail.php?edit=$id\" class=\"button success round\">Bearbeiten</a>";
			echo "</div>";
		}
		?>
	</div>
	<div class="row align-middle">
		<div class="small-6 columns">
			<img src="<?php echo $image; ?>" alt="<?php echo $name; ?>" title="<?php echo $name; ?>" />
		</div>
		<div class="small-6 columns">
			<h4>Zutaten</h4>
			<ul>
				<?php 
				foreach ($zutaten as $zutat)
				{
					echo "<li>";
					echo $zutat['Menge']." ".$zutat['Bezeichnung'];
					echo "</li>";
				}?>
			</ul>		
			<h4>Zubereitung</h4>
			<p><?php echo $rezept; ?></p>
		</div>
	</div>
	<div class="row">
		<div class="small-12 columns">
			<p><?php echo $comment; ?></p>
		</div>
	</div>
</main>