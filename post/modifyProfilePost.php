<?php
session_start();
require('../utils/dbConnect.php');

$req = $db->prepare('UPDATE members SET company_city = ?, company_zip = ?, company_country = ?, company_tel = ?, company_mail = ?');
$req->execute(array($_POST['company_city'], $_POST['company_zip'], $_POST['company_country'], $_POST['company_tel'], $_POST['company_mail']));

$req->closeCursor();

header('Location: ../view/profile.php');