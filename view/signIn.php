<?php
session_start();
$title = 'Sign in';

if(isset($_SESSION['company_name'])) {
?>
<?php ob_start() ?>

    <?php require('../utils/menu.php');?>
    <h1>Sign in</h1>

    <p>You are already connected <strong><?php echo $_SESSION['first_name'].' '.$_SESSION['surname'];?> </strong>!</p>

<?php $content = ob_get_clean();
}
else
{
?>
<?php ob_start(); ?>

    <?php require('../utils/menu.php');?>

    <h1>Sign in</h1>

    <div class="signInForm">
        <?php require('../utils/signInForm.php'); ?>
    </div>

<?php $content = ob_get_clean(); ?>
<?php
}
?>

<?php require('template.php');?>