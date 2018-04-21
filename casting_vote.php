<?php
$student_r_no=$_POST["student_rno"];//replace var student_rno with jQuery variable
$student_class=$_POST["studentclass"];//replace var studentclass with jQuery variable
$contestant_id=$_POST["contestant"];//replace var contestant with jQuery variable
include "dbconnect.php";
$query="INSERT INTO voting_details student_class=".$student_class."contestant_unique_id=".$contestant_id."where student_roll_no=".md5($student_r_no);
if(mysqli_query($link,$query))
{
    echo "wrong roll number entered";
}
else
{
    echo "Vote successfully casted";
}
?>