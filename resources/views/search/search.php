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
    </div>
    
    
    <div class="row">
    	<div class="small-12 columns">
    		<?php
    		if (isset($result))
    		{    			
	    		echo "<h3>Suchergebnis</h3>";
	    		
	    		if(empty($result))
	    		{
	    			echo "<p>Es wurde kein Ergebnis gefunden.";
	    		}
	    		else
	    		{
		    		echo "<ul>"; 
		    		foreach ($result as $cocktail)
		    		{
		    			echo "<li>".$cocktail['Cocktailname']."</li>";
		    		}
		    		echo "</ul>";	    			
	    		}
    		}
    		?>
    	</div>
    </div>
</main>