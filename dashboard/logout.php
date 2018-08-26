<?php
session_start();
if($_SESSION['user_id']){	
	session_destroy();
	header("location: /timetable/login_page.php");
}

?>