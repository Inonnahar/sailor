<?php
@session_start();
if($_SESSION['status']!=15000){
	header('Location: index.php');
}


?> 
<?php include("header.php");

$db_connect=new mysqli("localhost","root","","website");
?>

<main id="main">

<section id="contact" class="contact">
      <div class="container">

        <div>
          <iframe style="border:0; width: 100%; height: 270px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen></iframe>
        </div>

        <div class="row mt-5">

          <div class="col-lg-4">
          <?php 

              $get_all_general = "SELECT * FROM general";
              $general= $db_connect->query($get_all_general)->fetch_assoc();
              
                  
              ?>
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p><?php echo $general['address'] ?></p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p><?php echo $general['email'] ?></p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p><?php echo $general['phone'] ?></p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0" id="create_form">

            <form action="#" method="post" role="form" class="form" >
              <div class="row">
                <div class="col-md-6 form-group" >
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required >
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <!-- <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>  -->
              <div class="text-center mt-3"  ><button type="submit" style="background-color: green; border-style: solid;">Send Message</button></div>
            </form>

          </div>
          <?php 

  if(isset($_POST['name'])){

   
    $name =$_POST['name'];
    $email =$_POST['email'];
    $subject =$_POST['subject'];
    $message =$_POST['message'];
    $insert_data = "INSERT INTO contact ( name, email, subject, message) VALUES ('$name', '$email' ,'$subject','$message')";
    $data=$db_connect->query($insert_data);
   //
   //header("Location:index.php");
   echo "<script>window.location.href='index.php';</script>";

}


?>

        </div>

      </div>
    </section><!-- End Contact Section -->

</main><!-- End #main -->
<?php include('footer.php'); ?>