<?php 
require_once '../src/Db.php';

$db = new Db();
$list = $db->select("
		SELECT c.* 
		FROM cocktail c 
			JOIN nutzer_cocktail nc ON (c.Id = nc.Cocktail_ID) 
		WHERE nc.Nutzer_ID = $userId
		ORDER BY Cocktailname");
?>
<main>
	<div class="row">
		<hr />
		<h5>Meine Favoriten</h5>
	</div>
	<div class="row">
		<?php 
		if(empty($list))
			echo "<p><strong>Es ist kein Cocktail in Favoriten gespeichert.</strong></p>";
		else
		{
			foreach ($list as $cocktail)
			{
				include VIEW_PATH .'/cocktail/cocktail_widget.php';
			}			
		}
		?>
	</div>
</main>