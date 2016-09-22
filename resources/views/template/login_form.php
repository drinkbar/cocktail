<div class="title-bar" data-responsive-toggle="login-menu" data-hide-for="medium">
  <button class="menu-icon" type="button" data-toggle></button>
  <div class="title-bar-title">Benutzernavigation</div>
</div>

<div class="top-bar" id="login-menu">
    <div class="top-bar-left">
        <ul class="menu">
            <li class="has-form">
				<form action="security.php?login_check" method="post">
                <div class="row collapse">
                    <div class="large-5 columns">
						<input type="text" name="username" placeholder="Benutzername">
                    </div>
                    <div class="large-5 columns">
						<input type="password" name="password" placeholder="Passwort">   
                    </div>
                    <div class="large-2 columns">
						<input type="submit" name="submit" class="button secondary" value="Login">
					</div>
                </div>
				</form>
            </li>
            <li class="align-right">Heute ist der <?php echo date("d.m.Y"); ?></li>
        </ul>
    </div>
    
    <div class="top-bar-right">
	    <a href="registration.php" class="button secondary">Mitglied werden</a>
    </div>
</div>
