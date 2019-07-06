<?php
$passwordIsValid = false;

if (($_POST['password'] == $_POST['password_validation'] && ($_POST['password']) != null))
{

	$passwordIsValid = true;

}
else
{
	echo "Passwords aren't similar";
}