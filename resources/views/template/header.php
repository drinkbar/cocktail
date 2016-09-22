<!DOCTYPE HTML>
<html lang="de">
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

<header>
	<div class="row" >
		<div class ="large-12 columns">
			<?php 
				if(isset($_SESSION['login']) && $_SESSION['login'] == 1)
				{
					include TEMPLATE_PATH . "/user_nav.php";
				}
				else 
					include TEMPLATE_PATH . "/login_form.html";
				
				if(isset($error))
				{
					echo "
					<div data-alert class=\"callout alert\">$error</div>";
				}
				if(isset($warning))
				{
					echo "
					<div data-alert class=\"callout warning\">$warning</div>";
				}
				if(isset($success))
				{
					echo "
					<div data-alert class=\"callout success\">$success</div>";
				}
				?>	
		</div>
		
		<div class="large-12 columns">
			<h1>Drinkbar</h1>
				<div class="menu-centered">
					<ul class="menu">
						<li><a href="index.php">Home</a></li>
						<li><a href="cocktail.php">Cocktails</a></li>
						<li><a href="index.php?page=zutaten">Zutaten</a></li>
						<?php  if(isset($_SESSION['user'])) echo "<li><a href=\"favoriten.php\">Favoriten</a></li>";?>
						<li><a href="search.php">Suche</a></li>
						<?php  if(isset($_SESSION['user'])) echo "<li><a href=\"index.php?seite=einkaufsliste\">Einkaufsliste</a></li>"; ?>
			   		</ul>
		   		</div>
   		</div>
		<hr />
	</div> 
</header>
