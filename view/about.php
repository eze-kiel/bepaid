<?php
session_start();
$title = 'About';
?>
<?php ob_start(); ?>

<?php require('../utils/menu.php'); ?>

<h1>About</h1>

<div>
	<h2>Who we are</h2>
	<p>We are a team of developers who just wanted to give small companies the power to be paid right in time.</p>

	<h2>How ?</h2>
	<p>This application is easy to use :</p>
	<ul style="list-style-type:disc;" >
		<li>Create an account <a href="register.php">here</a></li>
		<li>Search or create one of your collaborator company using the search bar</li>
		<li>Rate them on how they pay (from 0 to 5)</li>
	</ul>
</div>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>