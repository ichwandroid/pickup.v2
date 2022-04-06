<?php
	$host 		= "localhost";
	$user 		= "root";
	$pass 		= "";
	$database	= "pickup";

	try {
	 	$connect = new PDO("mysql:host={$host};dbname={$database}",$user,$pass);
	 	$connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	 } catch (Exception $e) {
	 	echo $e->getMessage();
	 } 

	 include_once 'functions.php';
	 $crud = new crud($connect);
?>