<?php

include("dashboard_header.php");
?>
<!-- End Header -->

  <!-- ======= Sidebar ======= -->
  

  <?php

include("dashboard_sidebar.php");
?>
 <!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="dashboard_index.php">Home</a></li>
          <li class="breadcrumb-item active">Edit testimonial</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-12">
          

        <div class="col-md-12"  id="create_form">
    <div class="row">
                <?php

                    $db_connect=new mysqli("localhost","root","","website");
                    $id=$_GET['id'];
                    //echo $id;
                    $id_data_receieve="select * from testimonial where id =$id";
                    //print_r($id_data_receieve);
                   $receive_data=$db_connect->query($id_data_receieve)->fetch_assoc();
                  //print_r($receive_data['description']);


                ?>
        <form action="#" method="post" enctype="multipart/form-data" >

                    <a href="dashboard_testimonial.php" style="color:blue" id="back_list" class="btn btn-primary">Back</a>
                    <table class="table table-bordered" id="create_table">
                            <input type="hidden"  name="id" value="<?php echo  $receive_data['id'] ?>">
                          
                            <tr>
                                <th class="col-md-3">Photo</th>
                                <td class="col-md-9"> <input type="file" class="form-control" name="photo" value="<?php echo  $receive_data['photo'] ?>">
                                <img src="../upload/<?php echo $receive_data['photo'] ?>" alt="Photo" style="width:100px ;height:100px" >
                                <input type="hidden" name="old_photo" value="<?php echo $receive_data['photo'] ?>">
                            </td>
                            <tr>
                                <th class="col-md-3">Name</th>
                                <td class="col-md-9"><input type="text" placeholder="Enter your name" class="form-control" name="name" value="<?php echo  $receive_data['name'] ?>"></td>
                            </tr>                          
                          
                            <tr>
                                <th class="col-md-3">Designation</th>
                                <td class="col-md-9"><input type="text" placeholder="Enter your designation" class="form-control" name="designation" value="<?php echo  $receive_data['designation'] ?>"></td>
                            </tr>

                            <tr>
                                <th class="col-md-3">Description</th>
                                <td class="col-md-9"><input type="text" placeholder="Enter your description" class="form-control" name="description" value="<?php echo  $receive_data['description'] ?>"></td>
                            </tr>
                            </tr>
                        
                            <tr>
                                <td class="col-md-12" colspan="2"><input type="submit" style="background-color:green; font-weight:bold" placeholder="" class="form-control" title="Submit" id="button"></td>
                            </tr>

                    </table>


        </form>
    </div>
</div>


<?php
if(isset($_POST['name'])){
   $db_connect=new mysqli("localhost","root","","website");
   //print_r($db_connect);
   $photo = $_FILES['photo'];
   $ext = pathinfo(basename('../upload/' . $photo['name']), PATHINFO_EXTENSION);
   $fname = rand() . '.' . $ext;
   if (move_uploaded_file($photo['tmp_name'], '../upload/' . $fname)) {
       echo "uploaded successfully!";
  } else {
       echo 'Something went wrong!';
  }

  if($photo['name'] == null){
    
    $fname=$_POST['old_photo'];
}
   $id =$_POST['id'];
   $name =$_POST['name'];
   $designation =$_POST['designation'];
   $description =$_POST['description'];

    $update_data = "UPDATE testimonial SET  photo='$fname', name='$name', designation='$designation', description='$description' where id =$id";
    // print_r($update_data);
    $db_connect->query($update_data);
    // header("Location:testimonial_list.php");

    echo "<script>window.location.href='dashboard_testimonial.php';</script>";
    exit;
    
}



?>

      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->

  <?php

include("dashboard_footer.php");
?>
  