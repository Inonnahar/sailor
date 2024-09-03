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
          <li class="breadcrumb-item active">general</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-12">
          


  <div class="col-md-12"  id="list">
    <div class="row">
            <div>
                <h3>General Information <a href="db_insert_general.php" id="create" class="btn btn-sm btn-primary" style="float:right ; width:10%;">Insert General</a></h3>
                
            </div>  
        <table class="table table-bordered table-hover table-responsive" style="margin-top:10px" >
            <thead>
                <tr>
                    <th style="width:5%; text-align:center">SL</th>
                    <th style="width:10%; text-align:center">Logo</th>
                    <th style="width:10%; text-align:center">Title</th>
                    <th style="width:20%; text-align:center">Description</th>
                    <th style="width:10%; text-align:center">Email</th>
                    <th style="width:10%; text-align:center">Phone</th>
                    <th style="width:15%; text-align:center">Address</th>
                    <th style="width:10%; text-align:center"> Sub Title</th>
                    <th style="width:10%; text-align:center">Action</th>
                
                </tr>
            </thead>
            <tbody>
            <?php 

            $sl=0;


                $db_connect=new mysqli("localhost","root","","website");
                $get_all = "SELECT * FROM general";
                $alldata= $db_connect->query($get_all)->fetch_assoc();
                //print_r($alldata);
                // while($d=$alldata->fetch_assoc()){
                    
                ?>
                <tr>
                    <td style="width:5%; text-align:right"><?php echo ++$sl ?></td>
                    <td style="width:10%"><img src="../upload/<?php echo $alldata['logo']?>" alt=""></td>
                    <td style="width:10%"><?php echo $alldata['title'] ?></td>
                    <td style="width:20%"><?php echo $alldata['description'] ?></td>
                    <td style="width:10%"><?php echo $alldata['email'] ?></td>
                    <td style="width:10%"><?php echo $alldata['phone'] ?></td>
                    <td style="width:15%"><?php echo $alldata['address'] ?></td>
                    <td style="width:10%"><?php echo $alldata['subtitle'] ?></td>
                    
                    <td style="width:10%">
                        <a href="db_edit_general.php?id=<?php echo $alldata['id']?>" class="btn btn-success btn-sm">Edit</a>
                        <a href="db_delete_general.php?id=<?php echo $alldata['id']?>" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                </tr>

                <?php
           

                //}
                ?>
            </tbody>
        </table>

    </div>
</div>

<?php 

?>


      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->

  <?php

include("dashboard_footer.php");
?>
  