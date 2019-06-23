<?php
session_start();
$title = 'Home';
?>
<?php ob_start(); ?>


    <?php require('../utils/menu.php');?>

    
    <h1>Welcome !</h1>
    <div class="welcome">
        <?php require('../utils/welcomeMessage.php');?>
    </div>

    <div class="firstBloc">
        <p>The first content bloc should be written here</p>
    </div>
<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>