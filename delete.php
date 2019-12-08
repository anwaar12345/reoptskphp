<?php
include("db.php");
$id = $_GET['id'];
$q = mysqli_query($conn,"DELETE FROM `tbluser` WHERE id = '$id'");
if($q){
    header("location:show.php");
}else{
    echo "failed";
}

?>