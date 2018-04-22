<?php
//to validate the student details when entered
//pass values from jQuery to php
$student_r_no=$_POST['studentrno']; //studentrno var to be replaced with the variable in jQuery
$student_class=$_POST['studentclass'];//studentclass var to be replaced with the variable in jQuery
$student_section=$_POST['studentsection'];//studentsection var to be replace with the variable in jQuery
include "dbconnect.php";
$query="select * from voting_details where student_roll_no=".md5($student_r_no)."and student_class=".$student_class." and student_section=".$student_section."and contestant_unique_id=''";
$result=mysqli_query($link,$query);
if(!$result)
{
    echo "Wrong details entered";
}
session_start();
$_SESSION['student_r_no']=$student_r_no;
$_SESSION['student_class']=$student_class;
$_SESSION['student_section']=$student_section;
?>
