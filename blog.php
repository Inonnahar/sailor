
<?php include("header.php");

$db_connect=new mysqli("localhost","root","","website");
?>

<main id="main">

<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
  <div class="container">

    <div class="d-flex justify-content-between align-items-center">
      <h2>Blog</h2>
      <ol>
        <li><a href="index.html">Home</a></li>
        <li>Blog</li>
      </ol>
    </div>

  </div>
</section><!-- End Breadcrumbs -->

<!-- ======= Blog Section ======= -->
 <!-- ======= Blog Section ======= -->
 <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-12 entries">

            
            <?php 

                // $sl=0;


    
            $get_all_blog = "SELECT * FROM blog";
            //$alldata= $db_connect->query($get_all)->fetch_all();
            $alldatablog= $db_connect->query($get_all_blog);
            //print_r($alldata);
            while($d=$alldatablog->fetch_assoc()){
            // foreach($alldata as $d){  
              // print_r($d); 
            ?>
            <article class="entry">
              <div class="entry-img">
                <img src="upload/<?php echo $d['photo']?>" alt="" class="img-fluid">
              </div>

              <h2 class="entry-title">
                <a href="blog-single.html"><?php echo $d['title'] ?></a>
              </h2>

              <!-- <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-single.html">John Doe</a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-single.html"><time datetime="2020-01-01">Jan 1, 2020</time></a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="blog-single.html">12 Comments</a></li>
                </ul>
              </div> -->

              <div class="entry-content">
                <p>
                <?php echo $d['description']; ?>
                </p>
                <div class="read-more">
                  <a href="blog-single.html">Read More</a>
                </div>
              </div>
            </article><!-- End blog entry -->
              <?php }?>
           
            

        </div>

      </div>
    </section><!-- End Blog Section -->



</main><!-- End #main -->
<?php include('footer.php'); ?>