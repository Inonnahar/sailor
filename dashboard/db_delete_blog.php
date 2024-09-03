<?php


$db_connect=new mysqli("localhost","root","","website");
$id=$_GET['id'];
$del = "DELETE FROM blog WHERE id =$id";
$db_connect->query($del);
// header("Location:blog_list.php");
echo "<script>window.location.href='dashboard_blog.php';</script>";
    exit;
 ?>