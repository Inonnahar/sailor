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
          <li class="breadcrumb-item active">About</li>
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
                <h3>About Information <a href="db_insert_about.php" id="create" class="btn btn-sm btn-primary" style="float:right ; width:10%;">Insert About</a></h3>
                
            </div>  
        <table class="table table-bordered" style="margin-top:10px" >
            <thead>
                <tr>
                    <th style="width:10%; text-align:center">SL</th>
                    <th style="width:30%; text-align:center">Title</th>
                    <th style="width:30%; text-align:center">Sub-Title</th>
                    <th style="width:20%; text-align:center">Description</th>
                    <th style="width:10%; text-align:center">Action</th>
                
                </tr>
            </thead>
            <tbody>
        <?php 

             $sl=0;


            $db_connect=new mysqli("localhost","root","","website");
            $get_all = "SELECT * FROM about";
            $alldata= $db_connect->query($get_all);

            while($d=$alldata->fetch_assoc()){
            
        ?>
                <tr>
                    <td style="width:10%; text-align:right"><?php echo ++$sl ?></td>
                    <td style="width:30%"><?php echo $d['title']?></td>
                    <td style="width:30%"><?php echo $d['subtitle'] ?></td>
                    <td style="width:20%"><?php echo $d['description'] ?></td>
                    <td style="width:10%">
                        <a href="db_edit_about.php?id=<?php echo $d['id']?>" class="btn btn-success btn-sm">Edit</a>
                        <a href="db_delete_about.php?id=<?php echo $d['id']?>" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                </tr>

                <?php
           

                }
                ?>
            </tbody>
        </table>

    </div>
</div>

<?php 

?>


<?php 



?>

      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->

  <?php

include("dashboard_footer.php");
?>
  