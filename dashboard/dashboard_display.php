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
          <li class="breadcrumb-item active">Display</li>
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
                <h3>Display Information <a href="db_insert_display.php" id="create" class="btn btn-sm btn-primary" style="float:right ; width:10%;">Insert display</a></h3>
                
            </div>  
        <table class="table table-bordered table-hover table-responsive" style="margin-top:10px" >
            <thead>
                <tr>
                    <th style="width:5%; text-align:center">SL</th>
                    <th style="width:10%; text-align:center">Photo</th>
                    <th style="width:10%; text-align:center">Title</th>
                    <th style="width:10%; text-align:center"> Sub Title</th>
                    <th style="width:10%; text-align:center">Action</th>
                
                </tr>
            </thead>
            <tbody>
            <?php 

            $sl=0;


                $db_connect=new mysqli("localhost","root","","website");
                $get_all = "SELECT * FROM display";
                //$alldata= $db_connect->query($get_all)->fetch_all();
                $alldata= $db_connect->query($get_all);
                //print_r($alldata);
                while($d=$alldata->fetch_assoc()){
                // foreach($alldata as $d){  
                   // print_r($d); 
                ?>
                 <tr>
                    <td style="width:5%; text-align:right"><?php echo ++$sl ?></td>
                    <td style="width:10%"><img src="../upload/<?php echo $d['photo']?>" alt="" height="200px" width="200px"></td>
                    <td style="width:10%"><?php echo $d['title'] ?></td>
                   
                    <td style="width:10%"><?php echo $d['subtitle'] ?></td>
                    
                    <td style="width:10%">
                        <a href="db_edit_display.php?id=<?php echo $d['id']?>" class="btn btn-success btn-sm">Edit</a>
                        <a href="db_delete_display.php?id=<?php echo $d['id']?>" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                </tr>

                <?php
           

               }
                ?>
            </tbody>
        </table>

    </div>
</div>


      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->

  <?php

include("dashboard_footer.php");
?>
  