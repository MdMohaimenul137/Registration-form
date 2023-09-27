<?php
include 'dbconnect.php';

$Name = $_POST['firstname'];
$DoB = $_POST['DOB'];
$phone_number = $_POST['phone_number'];
$add = $_POST['address'];
$img = $_FILES['pic'];
// $code = $img["error"];

// $src = $img["tmp_name"];

// $dst = __DIR__
// ."/image/"
// .$img["name"];
// move_uploaded_file($src,$dst);

// $source= $_FILES["pic2"]["tmp_name"];
// echo $source;
// $destination_folder="image/";
// $destination_file=$destination_folder.$_FILES["pic2"]["name"];
// move_uploaded_file($source,$destination_file);




 
$source_file=$_FILES["pic"]["tmp_name"]; //source folder
$target_folder= 'image/'; //destination folder
$targetfile =$target_folder.basename($_FILES["pic"]["name"]);


 move_uploaded_file($source_file,$targetfile);



$sql = "INSERT INTO profilelist (name, dob, phone_number, address, picture) VALUES ('$Name', '$DoB', '$phone_number',  '$add', '$targetfile')";

$conn->query($sql);
header("location: Tabledisplay.php");

echo "success";

?>