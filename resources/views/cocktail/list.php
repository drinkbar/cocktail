<?php 
require_once '../src/Db.php';

$db = new Db();
$list = $db->select("SELECT * FROM cocktail WHERE 1 ORDER BY Cocktailname");
?>
<main>
	<div class="row">
		<hr />
		<h5>Cocktails</h5>
		<p>Hier werden alle Cocktails aufgelistet.</p>
		<ul>
			<?php 
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