<?php
	session_start();
	unset($_SESSION['user']);
	header('Location: ./forum1.php');
?>