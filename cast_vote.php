<?php
//to store the id of the contestant when the student has casted the vote
session_start();
$student_rno=$_SESSION['student_r_no'];
$student_class=$_SESSION['student_class'];
$student_section=$_SESSION['student_section'];
//get the id of the contestant to whom the student casted the vote
$contestant_unique_id=$_POST['contestantid'];//var contestantid to be replaced with the name of the variable in jQuery
$query="INSERT INTO voting details contestant_unique_id=".$contestant_unique_id."WHERE student_roll_no=".$student_rno."and WHERE student_class=".$student_class."and WHERE student_section=".$student_section;
include "dbconnect.php";
$result=mysqli_query($link,$query);
if(!$result)
{
    echo "Error occured";
}