<?php


$db_connect=new mysqli("localhost","root","","website");
$id=$_GET['id'];
$del = "DELETE FROM team WHERE id =$id";
$db_connect->query($del);
// header("Location:team_list.php");
echo "<script>window.location.href='dashboard_team.php';</script>";
    exit;
 ?>