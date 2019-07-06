<?php

require('dbConnect.php');

$req = $db->prepare('SELECT * FROM members WHERE company_name = ?');
$req->execute(array($_SESSION['company_name']));

while($row = $req->fetch()) {
    echo '<strong>Company : </strong>'.$row['company_name'].'<br>';
    echo '<strong>City : </strong>'.$row['company_city'].'<br>';
    echo '<strong>ZIP Code : </strong>'.$row['company_zip'].'<br>';
    echo '<strong>Country : </strong>'.$row['company_country'].'<br>';
    echo '<strong>Telephone : </strong>'.$row['company_tel'].'<br>';
    echo '<strong>Mail : </strong>'.$row['company_mail'];
}