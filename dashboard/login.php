<?php
@session_start();
$name=$_POST['name'];
$password=$_POST['password'];

$db_connect=new mysqli("localhost","root","","website");
$get_all = "SELECT * FROM users";
$alldata= $db_connect->query($get_all);


$status='error';
while ($d=$alldata->fetch_assoc()) {
	if($d['name']==$name && $d['password']==$password){
		$status='ok';
		$_SESSION['status']=15000;
		header('Location: dashboard_index.php');
	}
}


  if($status=='error'){
  	header('Location: index.php');
 }
 ?>