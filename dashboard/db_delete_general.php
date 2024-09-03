<?php


$db_connect=new mysqli("localhost","root","","website");
$id=$_GET['id'];
$del = "DELETE FROM general WHERE id =$id";
$db_connect->query($del);
// header("Location:display_list.php");
echo "<script>window.location.href='dashboard_general.php';</script>";
    exit;

 ?>