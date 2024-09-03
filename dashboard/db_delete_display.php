<?php


$db_connect=new mysqli("localhost","root","","website");
$id=$_GET['id'];
$del = "DELETE FROM display WHERE id =$id";
$db_connect->query($del);
// header("Location:display_list.php");
echo "<script>window.location.href='dashboard_display.php';</script>";
    exit;
 ?>