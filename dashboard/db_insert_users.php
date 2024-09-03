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

    <div class="pagename">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="dashboard_index.php">Home</a></li>
          <li class="breadcrumb-item active">Add users</li>
        </ol>
      </nav>
    </div><!-- End Page name -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-12">
          


        <div class="col-md-12"  id="create_form">
            <div class="row">
            <form action="#" method="post" enctype="multipart/form-data" >
       
                    <a href="dashboard_user.php" style="color:blue" id="back_list" class="btn btn-primary">Back</a>
                    <table class="table table-bordered" id="create_table">
                    
                            <tr>
                                <th class="col-md-3">name</th>
                                <td class="col-md-9"><input type="text" placeholder="Enter your name" class="form-control" name="name"></td>
                            </tr>
                            
                            <tr>
                                <th class="col-md-3">Password</th>
                                <td class="col-md-9"><input type="text" placeholder="Enter your password" class="form-control" name="password"></td>
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

    $name =$_POST['name'];
    $password =$_POST['password'];

    
    $insert_data = "INSERT INTO users ( name, password) VALUES ('$name','$password')";
    $data=$db_connect->query($insert_data);
    // header("Location:dashboard/dashboard_users.php");
    echo "<script>window.location.href='dashboard_user.php';</script>";
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
  