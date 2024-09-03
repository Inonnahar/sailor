<?php
@session_start();
if($_SESSION['status']!=15000){
	header('Location: index.php');
}

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
          <li class="breadcrumb-item active">Add team</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-12">
          

        <div class="col-md-12"  id="create_form">
    <div class="row">
        <form action="#" method="post" enctype="multipart/form-data" >
       
                    <a href="dashboard_team.php" style="color:blue" id="back_list" class="btn btn-primary">Back</a>
                    <table class="table table-bordered" id="create_table">
                           
                            <tr>
                                <th class="col-md-3">Name</th>
                                <td class="col-md-9"><input type="text" placeholder="Enter your name" class="form-control" name="name"></td>
                            </tr>
                            <tr>
                                <th class="col-md-3">Designation</th>
                                <td class="col-md-9"><input type="text" placeholder="Enter your designation" class="form-control" name="designation"></td>
                            </tr>
                            <tr>
                                <th class="col-md-3">Description</th>
                                <td class="col-md-9"><input type="text" placeholder="Enter your description" class="form-control" name="description"></td>
                            </tr>
                    
                            <tr>
                                <th class="col-md-3">Photo</th>
                                <td class="col-md-9"><input type="file" class="form-control" name="photo"></td>
                            </tr>
                          
                            <tr>
                                
                                <td class="col-md-12" colspan="2"><input type="submit" style="background-color:green; font-weight:bold" placeholder="" class="form-control" name="Submit" id="button"></td>
                            </tr>
                        
                    </table>
              
            
        </form>
    </div>
</div>  


<?php 
if(isset($_POST['name'])){
    $db_connect=new mysqli("localhost","root","","website");
    $photo = $_FILES['photo'];
    $ext = pathinfo(basename('../upload/' . $photo['name']), PATHINFO_EXTENSION);
    $fname = rand() . '.' . $ext;
    if (move_uploaded_file($photo['tmp_name'], '../upload/' . $fname)) {
        echo "uploaded successfully!";
   } else {
        echo 'Something went wrong!';
   }

    $name =$_POST['name'];

    $designation =$_POST['designation'];
  
    $description =$_POST['description'];
    
    
    $insert_data = "INSERT INTO team (name, designation, description, photo) VALUES ('$name', '$designation' ,'$description', '$fname')";
    $data=$db_connect->query($insert_data);
    // header("Location:team_list.php");
    echo "<script>window.location.href='dashboard_team.php';</script>";
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
  