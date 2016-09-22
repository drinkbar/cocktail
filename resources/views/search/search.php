<?php
?>

<main>
    <div class="row">
        <hr />
        <h5>Suche</h5>
        <form action="search.php" method="POST">
        	<div class="input-group">
        	  <input type="text" id="search_term" name="term" class="input-group-field" placeholder="Cocktailname eingeben..." />
			  <div class="input-group-button">
			    <input type="submit" class="button" value="Suchen">
			  </div>
			</div>
        </form>
        <?php 
        if(isset($username))
        {
        	echo "<p><a href=\"search.php?ingredients\" class=\"button\">Finde Cocktails anhand meiner Zutaten</a></p>";
        }
        ?>
    </div>
    
    
    <div class="row">
    		<?php
    		if (isset($result))
    		{    	
    			echo "<div class=\"small-12 columns\">";
	    		echo "<h3>Suchergebnis</h3>";
	    		echo "</div>";
	    		
	    		if(empty($result))
	    		{
	    			echo "<div class=\"small-12 columns\">";
	    			echo "<p><strong>Es wurde kein Ergebnis gefunden.</strong></p>";
	    			echo "</div>";
	    		}
	    		else
	    		{
	    			echo "<div class=\"small-12 columns\">";
		    		foreach ($result as $cocktail)
		    		{
		    			include VIEW_PATH .'/cocktail/cocktail_widget.php';
		    		}	    			
		    		echo "</div>";
	    		}
    		}
    		?>
    </div>
</main>