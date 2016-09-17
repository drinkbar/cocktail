<?php
	
	$qu = "select * from cocktail";
	$ret = $db->query($qu);
	while ($arr = $ret -> fetch_assoc()):
?>

<div>
	<img src="pics/<?= $arr['Bild'] ?>">
	<h2><?= $arr['Cocktailname'] ?></h2>
	<ul>
	<?php
		
		$qu = "SELECT zutat. *, cocktail_zutat.Menge from zutat,cocktail_zutat WHERE cocktail_zutat.Zutat_ID = zutat.ID AND cocktail_zutat.Cocktail_ID=".$arr['ID'];
		$ret1 = $db->query($qu);
		while ($arr1 = $ret1->fetch_assoc()):
	?>
	
	<li><?= $arr1['Menge']." ".$arr1['Bezeichnung']?></li>
		
		<?php
	endwhile;
		
		?>
	
	</ul>	
	
	<p>
		<?= $arr['Rezept'] ?>
	</p>
</div>

<?php

endwhile;
	
?>