<?php
include('db.php');
$fname = $_POST['fname'];
$lstn = $_POST['lstname'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$city = $_POST['city'];
$country = $_POST['country'];
$password =md5($_POST['password']);

$result = mysqli_query($conn,"INSERT INTO `tbluser`(`first_name`, `last_name`, `email`, `gender`, `city`, `country`, `password`) VALUES ('$fname','$lstn','$email','$gender','$city','$country','$password')");
if($result){
    echo "inserted";
    header("location:show.php");
}else{
    echo "failed";
}




?>