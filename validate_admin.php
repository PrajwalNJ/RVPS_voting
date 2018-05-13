<?php
$admin_username=$_POST['admin_username'];
$admin_password=md5($_POST['admin_password']);
include "dbconnect.php";
$conn=$_SESSION['mysql_link'];
$stmt=$conn->prepare("SELECT * FROM `admin_table` WHERE admin_username=? AND admin_password=?");
$stmt->bind_param("ss",$admin_username,$admin_password);
$result=$stmt->execute();
$stmt->store_result();
$stmt->fetch();
$noofrows=$stmt->num_rows;
echo json_encode($noofrows);
$stmt->close();
?>

