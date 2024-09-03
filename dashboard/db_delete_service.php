<?php


$db_connect=new mysqli("localhost","root","","website");
$id=$_GET['id'];
$del = "DELETE FROM service WHERE id =$id";
$db_connect->query($del);
// header("Location:service_list.php");
echo "<script>window.location.href='dashboard_service.php';</script>";
    exit;
 ?>