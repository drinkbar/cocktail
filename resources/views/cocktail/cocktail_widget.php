<div class="small-12 large-4 columns">
	<div class="hovereffect">
		<img src="<?php echo $cocktail['Bild']; ?>" alt="<?php echo $cocktail['Cocktailname']; ?>">
		<div class="overlay">
				<h3>
					<a href="cocktail.php?show=<?php echo 	$cocktail['ID']; ?>">
						<?php echo $cocktail['Cocktailname']; ?>
					</a>
				</h3>
		</div>
	</div>
</div>