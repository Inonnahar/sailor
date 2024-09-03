<?php


$db_connect=new mysqli("localhost","root","","website");
$id=$_GET['id'];
$del = "DELETE FROM users WHERE id =$id";
$db_connect->query($del);
// header("Location:users_list.php");
echo "<script>window.location.href='dashboard_user.php';</script>";
    exit;
 ?>