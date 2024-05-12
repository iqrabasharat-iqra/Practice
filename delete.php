<?php
session_start();
ob_start();
$con = mysqli_connect("localhost" , "root" , "" , "second");

$received_id = $_GET['userid'];

$delete = "delete from project where id = '$received_id'";

$run = mysqli_query($con , $delete);

header("location:database.php");

 if ($run) {
    $_SESSION['del'] = "Data deleted Successfully";
    header("location:database.php");
  }
 ?>
