<?php
include_once 'database.php';
$register= new database;

if (isset($_POST['submit'])){
	session_start();
	session_unset();
	session_destroy();
	$register->url("../index.php");
	exit();
}