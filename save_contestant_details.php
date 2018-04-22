<?php
$contestant_name=$_POST['contestantname'];//replace var contestantname with the name in jQuery
$election_type=$_POST['election_type'];//to store the type of election for which the candidate is standing
$target_file="contestant_images/0".basename($_FILES["candidate_pic"]["name"]);
$imageFileType=strtolower(pathinfo($target_file,PANTHINFO_EXTENSION));
if(!getimagesize($_FILES["candidate_pic"]["name"]))
{
    echo "File is not an image";
}
if(file_exists($target_file))
{
    echo "File already exists";
}
if($imageFileType != "jpg" && $imageFileType!="jpeg" && $imageFileType!="png")
{
    echo "Only .jpg,.jpeg and .png files are allowed";
}
$contestant_uid=md5($contestant_name);
include "dbconnect.php";
$query="INSERT INTO contestant_details contestant_name=".$contestant_name.",contestant_picture=".$target_file.",contestant_id=".$contestant_uid.",election_type=".$election_type;
$result=mysqli_query($link,$query);
if(!$result)
{
    echo "Error occured";
}
/**Replace "candidate_pic" with the var name in jQuery*/
?>