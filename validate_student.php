<?php
//to validate the student details when entered
//pass values from jQuery to php
$student_r_no=md5($_POST['rollno']);
$student_class=$_POST['sclass'];
$student_section=$_POST['section'];
$student_house=$_POST['house'];
$contestant_id="";
include "dbconnect.php";
$conn=$_SESSION['mysql_link'];
$stmt=$conn->prepare("select * from `voting_details` where student_roll_no=? and student_class=? and student_section=? and contestant_unique_id=?");
$stmt->bind_param("siss",$student_r_no,$student_class,$student_section,$contestant_id);
$result=$stmt->execute();
$stmt->store_result();
$stmt->fetch();
$noofrows=$stmt->num_rows();
echo json_encode($noofrows);
$_SESSION['student_r_no']=$student_r_no;
$_SESSION['student_class']=$student_class;
$_SESSION['student_section']=$student_section;
$_SESSION['student_house']=$student_house;
?>
