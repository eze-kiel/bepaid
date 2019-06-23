<?php
require('../utils/dbConnect.php');

//tester la validité des arguements donnés
if ($_POST['username'] != null AND $_POST['password'] != null)
{
	$req = $db->prepare('SELECT id, password FROM members WHERE username = ?');
	$req->execute(array($_POST['username']));

	$result = $req->fetch();

	//vérifier si le mdp est le bon
	$is_password_correct = password_verify($_POST['password'], $result['password']);

	if (!$result)
	{
		echo "Wrong credentials";
	}
	else
	{
		if ($is_password_correct)
		{
			session_start();
			$_SESSION['id'] = $result['id'];
			$_SESSION['username'] = $_POST['username'];
			$req->closeCursor();
			header('Location: ../index.php');
		}
		else
		{
			echo "Wrong credentials";
		}
	}
}
else
{
	echo "Wrong credentials";
}
?>