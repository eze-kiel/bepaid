<?php
if (isset($_SESSION['company_name']) && isset($_SESSION['id'])) {
	echo '<p>Hey '. '<strong>' .$_SESSION['company_name'].'</strong></p>'; //hello company ? why not name ?
}
else{
	echo '<p><strong> </strong></p>';
}