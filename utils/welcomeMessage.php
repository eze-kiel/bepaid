<?php
if (isset($_SESSION['username']) && isset($_SESSION['id'])) {
	echo '<p>Hey '. '<strong>' .$_SESSION['username'].'</strong></p>';
}
else{
	echo '<p><strong> </strong></p>';
}