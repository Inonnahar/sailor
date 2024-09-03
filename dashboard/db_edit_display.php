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
          <li class="breadcrumb-item active">Edit Display</li>
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
                    $id_data_receieve="select * from display where id =$id";
                    //print_r($id_data_receieve);
                   $receive_data=$db_connect->query($id_data_receieve)->fetch_assoc();
                  //print_r($receive_data['subtitle']);


                ?>
        <form action="#" method="post" enctype="multipart/form-data" >

                    <a href="display_list.php" style="color:blue" id="back_list" class="btn btn-primary">Back</a>
                    <table class="table table-bordered" id="create_table">
                            <input type="hidden"  name="id" value="<?php echo  $receive_data['id'] ?>">

                            <tr>
                                <th class="col-md-3">photo</th>
                                <td class="col-md-9"> <input type="file" class="form-control" name="photo" value="<?php echo  $receive_data['photo'] ?>">
                                <img src="../upload/<?php echo $receive_data['photo'] ?>" alt="Photo" style="width:100px ;height:100px" >
                                <input type="hidden" name="old_photo" value="<?php echo $receive_data['photo'] ?>">
                            </td>
                            
                            </tr>
                            <tr>
                                <th class="col-md-3">Title</th>
                                <td class="col-md-9"><input type="text" placeholder="Enter your title" class="form-control" name="title" value="<?php echo  $receive_data['title'] ?>"></td>
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
   $photo = $_FILES['photo'];
   $ext = pathinfo(basename('../upload/' . $photo['name']), PATHINFO_EXTENSION);
   $fname = rand() . '.' . $ext;
   if (move_uploaded_file($photo['tmp_name'], '../upload/' . $fname)) {
       echo "uploaded successfully!";
  } else {
       echo 'Something went wrong!';
  }
   $id =$_POST['id'];
   $title =$_POST['title'];
   if($photo['name'] == null){
    
       $fname=$_POST['old_photo'];
   }
  
   $subtitle =$_POST['subtitle'];

    $update_data = "UPDATE display SET photo='$fname', title='$title', subtitle='$subtitle' where id =$id";
    //print_r($update_data);

    $db_connect->query($update_data);
    // header("Location:display_list.php");
    echo "<script>window.location.href='dashboard_display.php';</script>";
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
  