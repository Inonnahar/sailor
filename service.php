
<?php include("header.php");

$db_connect=new mysqli("localhost","root","","website");
?>

<main id="main">

  <!-- ======= Services Section ======= -->
  <section id="services" class="services">
      <div class="container">

              <div class="row">
              <?php 

      //$sl=0;



      $get_all_service = "SELECT * FROM service";
      $alldataservice= $db_connect->query($get_all_service);

       while($d=$alldataservice->fetch_assoc()){

      ?>
          <div class="col-md-6">
            <div class="icon-box">
              <!-- <i class="bi bi-briefcase"></i> -->
              <img src="upload/<?php echo $d['icon']?>" alt="" height="40px" width="40px">
              <h4><a href="#"><?php echo $d['title']?></a></h4>
              <p><?php echo $d['description']?></p>
            </div>
          </div>
          <!-- <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box">
              <i class="bi bi-card-checklist"></i>
              <h4><a href="#">Dolor Sitema</a></h4>
              <p>Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box">
              <i class="bi bi-bar-chart"></i>
              <h4><a href="#">Sed ut perspiciatis</a></h4>
              <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box">
              <i class="bi bi-binoculars"></i>
              <h4><a href="#">Nemo Enim</a></h4>
              <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box">
              <i class="bi bi-brightness-high"></i>
              <h4><a href="#">Magni Dolore</a></h4>
              <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box">
              <i class="bi bi-calendar4-week"></i>
              <h4><a href="#">Eiusmod Tempor</a></h4>
              <p>Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi</p>
            </div>
          </div> -->
          <?php
           

           }
           ?>
        </div>

      </div>
    </section><!-- End Services Section -->



</main><!-- End #main -->
<?php include('footer.php'); ?>