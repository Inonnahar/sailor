<?php


$db_connect=new mysqli("localhost","root","","website");
$id=$_GET['id'];
$del = "DELETE FROM about WHERE id =$id";
$db_connect->query($del);
// header("Location:dashboard_about.php");
echo "<script>window.location.href='dashboard_about.php';</script>";
exit;

 ?>