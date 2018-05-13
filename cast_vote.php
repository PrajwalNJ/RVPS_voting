<?php
//to store the id of the contestant when the student has casted the vote

$student_rno=$_SESSION['student_r_no'];
$student_class=$_SESSION['student_class'];
$student_section=$_SESSION['student_section'];
//get the id of the contestant to whom the student casted the vote
$contestant_unique_id=$_POST['contestantid'];//var contestantid to be replaced with the name of the variable in jQuery
?>