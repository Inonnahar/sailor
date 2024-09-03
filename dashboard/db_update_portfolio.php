<?php

   $db_connect=new mysqli("localhost","root","","website");
   $photo = $_FILES['photo'];
   $ext = pathinfo(basename('../upload/' . $photo['name']), PATHINFO_EXTENSION);
   $fname = rand() . '.' . $ext;
   if (move_uploaded_file($photo['tmp_name'], '../upload/' . $fname)) {
       echo "uploaded successfully!";
  } else {
       echo 'Something went wrong!';
  }
   $id =$_POST['id'];

   if($photo['name'] == null){
    
       $fname=$_POST['old_photo'];
   }
  


    $update_data = "UPDATE portfolio SET photo='$fname' where id =$id";
    //print_r($update_data);

    $db_connect->query($update_data);
    // header("Location:portfolio_list.php");
    echo "<script>window.location.href='dashboard_portfolio.php';</script>";
    exit;
    




?>