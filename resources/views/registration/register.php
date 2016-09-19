<?php 
require_once '../src/Db.php';

if(isset($_REQUEST['submit']))
{
	if(empty($_REQUEST['username']) || empty($_REQUEST['password']) || empty($_REQUEST['password2']) || empty($_REQUEST['email']))
	{		
		$_SESSION['error'] = "Bitte füllen Sie alle Felder aus.";
		header("Location: registration.php?register");
	}
	elseif($_REQUEST['useragreement'] == false)
	{
		$_SESSION['error'] = "Bitte akzeptieren Sie die Nutzungsbedingungen.";
		header("Location: registration.php?register");
	}
	else
	{
		$username = mysql_real_escape_string($_REQUEST['username']);
		$password = mysql_real_escape_string($_REQUEST['password']);
		$password2 = mysql_real_escape_string($_REQUEST['password2']);
		$email = mysql_real_escape_string($_REQUEST['email']);
		
		
		// check if username already in use
		$db = new Db();
		$dbUser = $db->select("SELECT * FROM nutzer WHERE Login = '$username'");
		
		if(!empty($dbUser))
		{
			$_SESSION['error'] = "Der Benutzername wird bereits verwendet.";
			header("Location: registration.php?register");
		}
		else 
		{
			// check password confirmation
			if($password !== $password2)
			{
				$_SESSION['error'] = "Die eingegebenen Passwörter stimmen nicht überein";
				header("Location: registration.php?register");
			}
			else 
			{
				$password = crypt($password, "PO");
				// inser user into db
				$insert = $db->query("INSERT INTO nutzer (Login, Passwort, Email) VALUES ('$username', '$password', '$email')");
				if($insert)
				{
					$_SESSION['success'] = "Benutzer $username wurde erfolgreich angelegt. Sie können sich jetzt anmelden.";
					header('Location: index.php');
				}
			}			
		}
	}
}
?>
<main>
	<div class="row">
		<hr />
		<h5>Werde Mitglied auf Drinkbar.de!</h5>
		<?php include VIEW_PATH . "/registration/registration_form.html"; ?>
	</div>
</main>