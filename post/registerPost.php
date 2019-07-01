<?php
require('../utils/dbConnect.php');

//validation des paramètres entrés
$existing = $db->prepare('SELECT * FROM members WHERE username=?');
$existing->execute(array($_POST['username']));

if ($existing->fetch() == null)
{
	if (($_POST['company_name'] != null) && ($_POST['first_name'] != null) && ($_POST['surname'] != null))
	{
		require('../utils/passwordValidation.php');
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