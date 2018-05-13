<?php
$dbName="school_election_db";
$host="localhost:3306";
$user="root";
$password="";
$conn=new mysqli($host,$user,$password,$dbName);
//mysqli_connect($conn);
if(mysqli_connect_error($conn))
{
    die("connection failed:".mysqli_connect_error($conn));
}
session_start();
$_SESSION['mysql_link']=$conn;
?>