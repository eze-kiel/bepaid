<?php
session_start();

$title = 'my profile';

if (isset($_SESSION['id'])) {
?>
<?php ob_start(); ?> 

	<?php require('../utils/menu.php'); ?>
	<h1>Profile</h1>

	<p>Welcome <strong><?= $_SESSION['username'];?></strong> on your profile</p>

<?php $content = ob_get_clean();
}
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