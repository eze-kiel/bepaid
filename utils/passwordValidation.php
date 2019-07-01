<?php

if (($_POST['password'] == $_POST['password_validation'] && ($_POST['password']) != null))
{
	//hacher le password
	$password_hache = password_hash($_POST['password'], PASSWORD_DEFAULT);

	//ajouter les infos dans la db
	$req = $db->prepare('INSERT INTO members(username, password) VALUES(?, ?)');
	$req->execute(array($_POST['username'], $password_hache));

	$req->closeCursor();
	echo "You registered successfully";
	header('Location: index.php');
}
else
{
	echo "Passwords aren't similar";
}