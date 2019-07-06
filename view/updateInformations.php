<?php
session_start();
$title = 'Register';
ob_start(); ?>


    <?php require('../utils/menu.php');?>
    <h1>Update your profile</h1>
    <?php require('../utils/modifyProfileForm.php');?>

<?php $content = ob_get_clean();?>

<?php require('template.php'); ?>