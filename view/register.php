<?php
session_start();
$title = 'Register';

if(isset($_SESSION['username'])) {
?>
<?php ob_start(); ?>


    <?php require('../utils/menu.php');?>
    <h1>Register</h1>

    <p>You already have an account <strong><?php echo $_SESSION['username'];?> </strong>!</p>

<?php $content = ob_get_clean();

}
else
{
?>

<?php ob_start(); ?>


    <?php require('../utils/menu.php');?>
    <h1>Register</h1>

    <div class="welcome">
        <?php require('../utils/welcomeMessage.php');?>
    </div>
    
    <div class="registerForm">
        <?php require('../utils/registerForm.php'); ?>
    </div>
<?php $content = ob_get_clean();
}
?>

<?php require('template.php'); ?>