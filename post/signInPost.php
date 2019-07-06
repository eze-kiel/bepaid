<?php
require('../utils/dbConnect.php');

//tester la validité des arguements donnés
if ($_POST['company_name'] != null AND $_POST['password'] != null)
{
	$req = $db->prepare('SELECT id, password FROM members WHERE company_name = ?');
	$req->execute(array($_POST['company_name']));

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
			$_SESSION['company_name'] = $_POST['company_name'];
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