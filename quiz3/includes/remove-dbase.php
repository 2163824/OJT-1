<?php
include_once 'database.php';

if (isset($_POST['submit'])){
	extract ($_POST);
	$remove= new database;
	if ($remove->remove($query)){
		$remove->url("../admin/remove.php?=successfully=removed");
	}
}else{
	$register->url("../admin/remove.php");
	echo "Error deleting record";
	exit();
}

