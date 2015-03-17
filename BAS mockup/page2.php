<?php
// page2.php

session_start();

echo 'Welcome to page #2<br/>';
if (isset($_POST)){
	$_SESSION['degree'] = $_POST['degree'];
	if ($_POST['sid'] != ""){
		$_SESSION['sid'] = $_POST['sid'];
	}
	if ($_POST['fname'] != ""){
		$_SESSION['fname'] = $_POST['fname'];
	}
	if ($_POST['email'] != ""){
		$_SESSION['email'] = $_POST['email'];
	}
}
?>
<br><br>
<a href="PrerequisitsSoftDev.php">check prereqs</a>