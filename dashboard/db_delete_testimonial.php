<?php


$db_connect=new mysqli("localhost","root","","website");
$id=$_GET['id'];
$del = "DELETE FROM testimonial WHERE id =$id";
$db_connect->query($del);
// header("Location:testimonial_list.php");
echo "<script>window.location.href='dashboard_testimonial.php';</script>";
    exit;
 ?>