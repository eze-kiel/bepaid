<?php
require('dbConnect.php');

//validation des paramètres entrés
$existing = $db->prepare('SELECT * FROM members WHERE username=?');
$existing->execute(array($_POST['username']));

if ($existing->fetch() == null)
{
	if (($_POST['username'] != null))
	{
		if (($_POST['password'] == $_POST['password_validation'] && ($_POST['password']) != null))
		{
			//hacher le password
			$password_hache = password_hash($_POST['password'], PASSWORD_DEFAULT);

			//ajouter les infos dans la db
			$req = $db->prepare('INSERT INTO members(username, password) VALUES(?, ?)');
			$req->execute(array($_POST['username'], $password_hache));

			$req->closeCursor();
			echo "You registered successfully";
			sleep(2);
			header('Location: index.php');
		}
		else
		{
			echo "Passwords aren't similar";
		}
	}
	else
	{
		echo "Informations missing";
	}

}
else
{
	echo "This username is aready used";
	?>
	<br><h3><a href="signUp.php">Back to sign up page</a></h3>
<?php
}
?>