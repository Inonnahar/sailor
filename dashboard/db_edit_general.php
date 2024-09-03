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
          <li class="breadcrumb-item active">Edit general</li>
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
                    $id_data_receieve="select * from general where id =$id";
                    //print_r($id_data_receieve);
                   $receive_data=$db_connect->query($id_data_receieve)->fetch_assoc();
                  //print_r($receive_data['subtitle']);


                ?>
        <form action="#" method="post" enctype="multipart/form-data" >

                    <a href="dashboard_general.php" style="color:blue" id="back_list" class="btn btn-primary">Back</a>
                    <table class="table table-bordered" id="create_table">
                            <input type="hidden"  name="id" value="<?php echo  $receive_data['id'] ?>">

                            <tr>
                                <th class="col-md-3">Logo</th>
                                <td class="col-md-9"> <input type="file" class="form-control" name="logo" value="<?php echo  $receive_data['logo'] ?>">
                                <img src="../upload/<?php echo $receive_data['logo'] ?>" alt="logo" style="width:100px ;height:100px" >
                                <input type="hidden" name="old_logo" value="<?php echo $receive_data['logo'] ?>">
                            </td>
                            
                            </tr>
                            <tr>
                                <th class="col-md-3">Title</th>
                                <td class="col-md-9"><input type="text" placeholder="Enter your title" class="form-control" name="title" value="<?php echo  $receive_data['title'] ?>"></td>
                            </tr>                          
                            <tr>
                                <th class="col-md-3">Description</th>
                                <td class="col-md-9">
                                    <textarea name="description" id="" cols="30" rows="10" placeholder="Enter your text"  class="form-control"  value=""><?php echo  $receive_data['description'] ?></textarea>
                                </td>
                            </tr>
                            <tr>
                                <th class="col-md-3">Email</th>
                                <td class="col-md-9"><input type="text" placeholder="Enter your email" class="form-control" name="email" value="<?php echo  $receive_data['email'] ?>"></td>
                            </tr>
                            <tr>
                                <th class="col-md-3">Phone</th>
                                <td class="col-md-9"><input type="text" placeholder="Enter your phone" class="form-control" name="phone" value="<?php echo  $receive_data['phone'] ?>"></td>
                            </tr>
                            <tr>
                                <th class="col-md-3">Address</th>
                                <td class="col-md-9"><input type="text" placeholder="Enter your address" class="form-control" name="address" value="<?php echo  $receive_data['address'] ?>"></td>
                            </tr>
                            <tr>
                                <th class="col-md-3">Subtitle</th>
                                <td class="col-md-9"><input type="text" placeholder="Enter your subtitle" class="form-control" name="subtitle" value="<?php echo  $receive_data['subtitle'] ?>"></td>
                            </tr>
                            <tr>
                                <td class="col-md-12" colspan="2"><input type="submit" style="background-color:green; font-weight:bold" placeholder="" class="form-control" title="Submit" id="button"></td>
                            </tr>

                    </table>


        </form>
    </div>
</div>


<?php
if(isset($_POST['title'])){
   $db_connect=new mysqli("localhost","root","","website");
   $logo = $_FILES['logo'];
   $ext = pathinfo(basename('../upload/' . $logo['name']), PATHINFO_EXTENSION);
   $fname = rand() . '.' . $ext;
   if (move_uploaded_file($logo['tmp_name'], '../upload/' . $fname)) {
       echo "uploaded successfully!";
  } else {
       echo 'Something went wrong!';
  }

  if($photo['name'] == null){
    
    $fname=$_POST['old_logo'];
}
   $id =$_POST['id'];
   $title =$_POST['title'];
   $email =$_POST['email'];
   $phone =$_POST['phone'];
   $address =$_POST['address'];
   $description =$_POST['description'];
   $subtitle =$_POST['subtitle'];

    $update_data = "UPDATE general SET logo='$fname', title='$title', description='$description', email='$email', phone='$phone', address='$address',  subtitle='$subtitle' where id =$id";
    //print_r($update_data);

    $db_connect->query($update_data);
    // header("Location:general_list.php");
    echo "<script>window.location.href='dashboard_general.php';</script>";
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
  