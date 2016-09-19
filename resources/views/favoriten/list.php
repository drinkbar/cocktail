<?php 
require_once '../src/Db.php';

$db = new Db();
$list = $db->select("SELECT c.* FROM cocktail c JOIN nutzer_cocktail nc ON (c.Id = nc.Cocktail_ID) AND nc.Nutzer_ID = $userId WHERE 1 ORDER BY Cocktailname");
?>
<main>
	<div class="row">
		<hr />
		<h5>Meine Favoriten</h5>
		<ul>
			<?php 
			if(empty($list))
				echo "<li>Kein Cocktail in Favoriten</li>";
			
			foreach ($list as $cocktail)
			{
				echo "<li>";
				echo "<a href=\"cocktail.php?show=".$cocktail['ID']."\">".$cocktail['Cocktailname']."</a>";
				echo "</li>";
			}
			?>
		</ul>
	</div>
</main>