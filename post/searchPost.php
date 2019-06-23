<?php
session_start();

if (isset($_SESSION['id'])) {
	//recherche
}
header('Location: ../view/searchResult.php')
?>