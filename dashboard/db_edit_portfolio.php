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
          <li class="breadcrumb-item active">Edit portfolio</li>
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
                    $id_data_receieve="select * from portfolio where id =$id";
                    //print_r($id_data_receieve);
                   $receive_data=$db_connect->query($id_data_receieve)->fetch_assoc();
                  //print_r($receive_data['subtitle']);


                ?>
        <form action="db_update_portfolio.php" method="post" enctype="multipart/form-data" >

                    <a href="dashboard_portfolio.php" style="color:blue" id="back_list" class="btn btn-primary">Back</a>
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
                                <td class="col-md-12" colspan="2"><input type="submit" style="background-color:green; font-weight:bold" placeholder="" class="form-control" title="Submit" id="button"></td>
                            </tr>

                    </table>


        </form>
    </div>
</div>




      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->

  <?php

include("dashboard_footer.php");
?>
  