<?php
require('../utils/dbConnect.php');

//check if the enterprise name is unique
$existing = $db->prepare('SELECT * FROM members WHERE company_name=?');
$existing->execute(array($_POST['company_name']));
 
if ($existing->fetch() == null)
{
	if (($_POST['company_name'] != null) && ($_POST['first_name'] != null) && ($_POST['surname'] != null))
	{
		//check if the password is valid thanks to passwordValidation.php
		require('../utils/passwordValidation.php');

		//if the password is valid, add informations in the db
		if ($passwordIsValid) {

			//hash the password
			$password_hache = password_hash($_POST['password'], PASSWORD_DEFAULT);

			//exec the add request
			$req = $db->prepare('INSERT INTO members(first_name, surname, password, company_name, company_city, company_zip, company_country, company_tel, company_mail) values (?, ?, ?, ?, ?, ?, ?, ?, ?)');
			$req->execute(array($_POST['first_name'], $_POST['surname'], $password_hache, $_POST['company_name'], $_POST['company_city'], $_POST['company_zip'], $_POST['company_country'], $_POST['company_tel'], $_POST['company_mail']));

			//close the cursor
			$req->closeCursor();
			echo "Added!";
			header('Location: ../index.php');
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