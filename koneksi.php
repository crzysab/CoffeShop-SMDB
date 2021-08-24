<?php
	ob_start();

	if(!isset($_SESSION)){
		session_start();
	}
	
	$host = 'localhost';
	$username = 'root';
	$password = '';
	$db = 'coffeeshop';

	$koneksi = mysqli_connect($host, $username, $password, $db);
?>