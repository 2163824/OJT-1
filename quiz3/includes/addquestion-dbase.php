<?php
extract($_POST);
include "database.php";
$quiz=new database;
$qus=htmlentities($qus);
$option1=htmlentities($op1);
$option2=htmlentities($op2);
$option3=htmlentities($op3);
$option4=htmlentities($op4);
$array=[$option1,$option2,$option3,$option4];
$answer=array_search($ans,$array);
$query="insert into questions (question, ans1, ans2, ans3, ans4, ans, subject_id) values ('$qus','$option1','$option2','$option3','$option4','$answer','$submit')";
if($quiz->add_quiz($query))
{
	$quiz->url("../admin/addquestion.php");
}

?>