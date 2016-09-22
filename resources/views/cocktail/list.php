<?php 
require_once '../src/Db.php';

$db = new Db();
$filter = "all";

if(isset($_REQUEST['submit']))
{
	$subSql = "SELECT c.ID
			FROM cocktail c
				JOIN cocktail_zutat cz ON (c.ID = cz.Cocktail_ID)
				JOIN zutat z ON (z.ID = cz.Zutat_ID)
			WHERE z.Alk = 1";		

	$filter = $_REQUEST['alk'];
	if($filter == "alk")
	{
		$list = $db->select("SELECT * FROM cocktail WHERE ID IN ($subSql) ORDER BY Cocktailname");
	}
	elseif($filter == "noalk")
	{
		$list = $db->select("SELECT * FROM cocktail WHERE ID NOT IN ($subSql) ORDER BY Cocktailname");
	}
	else 
	{
		$list = $db->select("SELECT * FROM cocktail ORDER BY Cocktailname");
	}
}
else
	$list = $db->select("SELECT * FROM cocktail WHERE 1 ORDER BY Cocktailname");
?>
<main>
	<div class="row">
		<hr />
		<h5>Cocktails</h5>
	</div>
	<div class="row">
		<div class="small-12 columns">
			<form action="" method="POST" class="filter small-12 columns">
				<label for="all"><input type="radio" name="alk" id="all" value="all" <?php echo $filter == "all" ? "checked" : ""; ?> /> alle</label>
				<label for="only_alk"><input type="radio" name="alk" id="only_alk" value="alk" <?php echo $filter == "alk" ? "checked" : ""; ?> /> nur alkoholische</label>
				<label for="only_no_alk"><input type="radio" name="alk" id="only_no_alk" value="noalk" <?php echo $filter == "noalk" ? "checked" : ""; ?>/> nur alkoholfreie</label>
				<input type="submit" name="submit" value="Filter anwenden" class="button" />
			</form>
		</div>
	</div>
	<div class="row">
			<?php 
			foreach ($list as $cocktail)
			{
				include 'cocktail_widget.php';
				//echo "<li>";
				//echo "<a href=\"cocktail.php?show=".$cocktail['ID']."\">".$cocktail['Cocktailname']."</a>";
				//echo "</li>";
			}
			?>
	</div>
</main>