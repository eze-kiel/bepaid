<?php
require('../config/configdb.php');

try{
	$db = new PDO('mysql:host=localhost;dbname='.$dbname.';charset=utf8', $username, $password);
}
catch(Exception $e){
	die('Error : '. $e->getMessage());
}