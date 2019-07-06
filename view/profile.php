<?php
session_start();

$title = 'my profile';

//if connected bloc
if (isset($_SESSION['id'])) {
?>
<?php ob_start(); ?> 

	<?php require('../utils/menu.php'); ?>
	<h1>Profile</h1>

	<p>Welcome on your profile, <strong><?= $_SESSION['first_name'].' '.$_SESSION['surname'];?></strong></p>

	<p>Here are the information you entered :</p>
	<!-- display user's informations -->
	<?php require('../utils/profileInformations.php'); ?>
	<br><a href="../view/updateInformations.php">Update those informations</a>

<?php $content = ob_get_clean();
}

//if not connected bloc
else
{
?>
<?php ob_start(); ?>

	<?php require('../utils/menu.php'); ?>
	<h1>Profile</h1>

	<h2>You are not connected!</h2>
	<p>You can create your account <a href="register.php">just here</a>, or <a href="signIn.php">sign in</a>.</p>

<?php $content = ob_get_clean();
}
?>

<?php require('template.php');