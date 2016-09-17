<?php

$eingeloggt = false;


?>


<?php

include "inc/dbaccess.inc.php";
include "inc/session.inc.php";
if (!isset($_REQUEST['seite']))
	$_REQUEST['seite']="start";

?>
<!doctype html>
<html class="no-js" lang="de" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>drinkbar.de</title>
    <link rel="stylesheet" href="css/foundation.css">
	<link rel="stylesheet" href="css/foundation-icons.css">
    <link rel="stylesheet" href="css/app.css">
  </head>
  
  <body>
	  
	  <main>		  
	   		 	
	  	   	
					<div class ="row">
						<hr />
						<div class="small-12 large-4 columns">
							
							
							<div class="container">
								
					  		
								
				
						    <?php
						    $qu = "select * from cocktail order by Cocktailname";
						    $ret = $db->query($qu);
						    while($arr = $ret->fetch_assoc())
						    {
						       
						        $cocktails[] = array(
						            
						            'Cocktailname' => $arr['Cocktailname'],
						            'Bild' => $arr['Bild'],
						            'Rezept' => $arr['Rezept'],
						            'ID' => $arr['ID']);
						    }
						    $count = count($cocktails);
						    $div = true;
							$div = printCocktail($div, $cocktails);
						  


						

						    function printCocktail($div, $cocktails)
						    {

						        if($div)
						        {
						            echo "<div class=row>";
						            $div = false;
						        }
						        else
						        {
						            $div = true;
						        }
						        $cocktail = '<div class="small-12 large-4 columns">';
						        $cocktail .= '	<figure>';
						        $cocktail .= '		<a href="' . $cocktails[$a]['Bild'] . '" data-lightbox="Cocktail' . $cocktails[$a]['ID'] . '" data-title="' . $cocktails[$a]['Cocktailname'] . '">
													<img src="' . $cocktails[$a]['Bild'] . '" alt="' . $cocktails[$a]['Cocktailname'] . '"/></a>';
						        $cocktail .= '		<figcaption class="starcaption">';
						        if(!$cocktails[$a]['Fav'])
						        {
						            if($userID == 0)
						            {
						            }
						            else
						            {
						                //without ajax
						                //$cocktail.= '<a href="1Main.php?seite=AddToFav&ID='.$cocktails[$a]['ID'].'"><img class="herz" src="bilder/grauherz.png" alt="Favorit"></a>';
						                $cocktail .= '<div id="cocktail_' . $cocktails[$a]['ID'] . '"><a onclick="addToFav(' . $cocktails[$a]['ID'] . ')"><img class="herz" src="bilder/grauherz.png" alt="Favorit" title="Favorit hinzufügen"></a></div>';

						            }
						        }
						        else
						        {
						            $cocktail .= '<img class="herz" src="bilder/rotherz.png" alt="Favorit">';
						        }
						        $cocktail .= '		</figcaption>';
						        $cocktail .= '	</figure>';
						        $cocktail .= '</div>';
						        $cocktail .= '<div class="small-12 large-2 columns">';
						        $cocktail .= '	<p>' . $cocktails[$a]['Kurzbeschreibung'] . '';
						        $cocktail .= '<br><a href="1Main.php?seite=Cocktail&ID=' . $cocktails[$a]['ID'] . '" target="_blank"><b> Mehr...</b></a>';
						        $cocktail .= '</p>';
						        $cocktail .= '</div>';
						        if($div)
						        {
						            $cocktail .= '</div>';
						        }
						        echo $cocktail;

						        return $div;
						    }

						    ?>
								
						</div></div>
					</div>
				
			
					
	  </main>
	  
   
    <script src="js/vendor/jquery.js"></script>
    <script src="js/vendor/what-input.js"></script>
    <script src="js/vendor/foundation.js"></script>
    <script src="js/app.js"></script>
  </body>
</html>
