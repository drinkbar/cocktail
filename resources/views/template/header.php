<!DOCTYPE HTML>
<html lang="de">
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">  
  <title>drinkbar.de</title>
  
  <link rel="stylesheet" href="css/foundation.css">
  <link rel="stylesheet" href="css/app.css">
</head>

<body>

<header>
	<div class="row" >
		<div class ="large-12 columns">
			<div class="pc">	
				<?php 
					if(isset($_SESSION['login']) && $_SESSION['login'] == 1)
					{
						echo "<ul class=\"menu align-right\">
							  <li><a href=\"security.php?logout\" class=\"button\">Logout</a></li>
							  <li>&nbsp;</li>
							  <li>Willkommen $username</li>
							</ul>";
					}
					else 
						include(TEMPLATE_PATH . "/login_form.html");
					
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
		</div>
		
		<div class="large-12 columns">
			<h1>Drinkbar</h1>
			<div class="pc">
				<div class="menu-centered">
					<ul class="menu">
						<li><a href="index.php">Home</a></li>
						<li><a href="cocktail.php">Cocktails</a></li>
						<li><a href="index.php?seite=zutaten">Zutaten</a></li>
						<li><a href="cocktail.php?ranking">Bestenliste</a></li>
						<li><a href="index.php?seite=suche">Suche</a></li>
						<li><a href="index.php?seite=einkaufsliste">Einkaufsliste</a></li>
			   		</ul>
		   		</div>
	   		</div>
   		</div>
		<hr />
	</div> 
		 
	<div class="smart">
		<div class="title-bar" data-responsive-toggle="example-menu" data-hide-for="medium">
			<button class="menu-icon" type="button" data-toggle></button>
			<div class="title-bar-title">Navigation</div>
		</div>
		
		<div class="top-bar" id="example-menu">
			<div class="top-bar-left">
				<ul class="menu vertical">
					<li><a href="index.php?seite=startseite">Home</a></li>
					<li><a href="index.php?seite=cocktails">Cocktails</a></li>
					<li><a href="index.php?seite=zutaten">Zutaten</a></li>
					<li><a href="index.php?seite=bestenliste">Bestenliste</a></li>
					<li><a href="index.php?seite=suche">Suche</a></li>
					<li><a href="index.php?seite=einkaufsliste">Einkaufsliste</a></li>
					<li> <a href="index.php?seite=anmelden">Mitglied werden</a></li>
					<li><a href="index.php?seite=login">Login</a></li>
				</ul>
			</div>
		</div>
	</div>
</header>
