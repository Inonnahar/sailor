
<?php include("header.php");

$db_connect=new mysqli("localhost","root","","website");
?>
<main id="main">

<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
  <div class="container">

    <div class="d-flex justify-content-between align-items-center">
      <h2>About</h2>
      <ol>
        <li><a href="index.php">Home</a></li>
        <li>About</li>
      </ol>
    </div>

  </div>
</section><!-- End Breadcrumbs -->

<!-- ======= About Section ======= -->
<section id="about" class="about">
      <div class="container">
      <?php 

        //$sl=0;


        
        $get_all_about = "SELECT * FROM about";
        $alldataabout= $db_connect->query($get_all_about)->fetch_assoc();

        // while($d=$alldataabout->fetch_assoc()){

        ?>
        <div class="row content">
          <div class="col-lg-6">
            <h2><?php echo $alldataabout['title']  ?></h2>
            <h3><?php echo $alldataabout['subtitle']  ?></h3>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <p>
            <?php echo $alldataabout['description']  ?>
            </p>
          </div>
        </div>
        <?php
           

          //}
          ?>
      </div>
    </section><!-- End About Section -->

<!-- ======= Team Section ======= -->
<section id="team" class="team ">
      <div class="container">

        <div class="row">

        <?php 

              $get_all_team = "SELECT * FROM team";
              //$alldata= $db_connect->query($get_all)->fetch_all();
              $alldatateam= $db_connect->query($get_all_team);
              //print_r($alldata);
              while($team=$alldatateam->fetch_assoc()){
              // foreach($alldata as $d){  
                // print_r($d); 
              ?>

          <div class="col-lg-6">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="upload/<?php echo $team['photo']?>" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4><?php echo $team['name'] ?></h4>
                <span><?php echo $team['designation'] ?></span>
                <p><?php echo $team['description'] ?></p>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>
          
          <?php
           

          }
           ?>

          <!-- <div class="col-lg-6 mt-4 mt-lg-0">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="assets/img/team/team-2.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Sarah Jhonson</h4>
                <span>Product Manager</span>
                <p>Aut maiores voluptates amet et quis</p>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="assets/img/team/team-3.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>William Anderson</h4>
                <span>CTO</span>
                <p>Quisquam facilis cum velit laborum corrupti</p>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="assets/img/team/team-4.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Amanda Jepson</h4>
                <span>Accountant</span>
                <p>Dolorum tempora officiis odit laborum officiis</p>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div> -->

        </div>

      </div>
    </section><!-- End Team Section --><!-- End Team Section -->

<!-- ======= Our Skills Section ======= -->
<section id="skills" class="skills">
  <div class="container">

    <div class="section-title">
      <h2>Our Skills</h2>
      <p>Check our Our Skills</p>
    </div>

    <div class="row skills-content">

      <div class="col-lg-6">

        <div class="progress">
          <span class="skill">HTML <i class="val">100%</i></span>
          <div class="progress-bar-wrap">
            <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div>

        <div class="progress">
          <span class="skill">CSS <i class="val">90%</i></span>
          <div class="progress-bar-wrap">
            <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div>

        <div class="progress">
          <span class="skill">JavaScript <i class="val">75%</i></span>
          <div class="progress-bar-wrap">
            <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div>

      </div>

      <div class="col-lg-6">

        <div class="progress">
          <span class="skill">PHP <i class="val">80%</i></span>
          <div class="progress-bar-wrap">
            <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div>

        <div class="progress">
          <span class="skill">WordPress/CMS <i class="val">90%</i></span>
          <div class="progress-bar-wrap">
            <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div>

        <div class="progress">
          <span class="skill">Photoshop <i class="val">55%</i></span>
          <div class="progress-bar-wrap">
            <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div>

      </div>

    </div>

  </div>
</section><!-- End Our Skills Section -->

</main><!-- End #main -->
<?php include('footer.php'); ?>