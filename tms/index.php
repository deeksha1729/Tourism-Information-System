<?php
session_start();
error_reporting(0);
include('includes/config.php');
?>
<!doctype html>
<html lang="en-gb" class="no-js">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <title>My Travel - my memory</title>
  <meta name="description" content="Sanskari Travels">
  <meta name="author" content="WebThemez">

  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <!--  <link href="assets/css/bootstrap.css" rel='stylesheet' type='text/css' /> -->
  <link rel="stylesheet" type="text/css" href="css/isotope.css" media="screen" />
  <link rel="stylesheet" href="js/fancybox/jquery.fancybox.css" type="text/css" media="screen" />
  <link rel="stylesheet" type="text/css" href="css/da-slider.css" />
  <!-- Owl Carousel Assets -->
  <link href="js/owl-carousel/owl.carousel.css" rel="stylesheet">
  <link rel="stylesheet" href="css/styles.css" />
  <!-- Font Awesome -->
  <!--animate-->
  <link href="assets/css/animate.css" rel="stylesheet" type="text/css" media="all">
  <link href="font/css/font-awesome.min.css" rel="stylesheet">
</head>

<body>
 <?php include('includes/header.php'); ?>
 <!--/.header-->
 <div id="#top"></div>
 <section id="home">
  <div class="banner-container">
    <!--   <img src="images/banner-bg.jpg" alt="banner" />-->
    <div class="container banner-content">
      <div id="da-slider" class="da-slider">
        <div class="da-slide">
          <h2>Travel Plans</h2>
          <p>Get your plans right away.. enjoy!!!</p>
          <a href="#" class="da-link">Read more</a>
          <div class="da-img"></div>
        </div>
        <div class="da-slide">
          <h2>Amazing Tours</h2>
          <p>Travel you remember for life long!!</p>
          <a href="#" class="da-link">Read more</a>
          <div class="da-img"></div>
        </div>
        <div class="da-slide">
          <h2>Best Travel Travel</h2>
          <p>Get best deals at our place</p>
          <a href="#" class="da-link">Read more</a>
          <div class="da-img"></div>
        </div> 
      </div>
    </div>
  </div>
</section>
<section id="introText">
  <div class="container">
    <div class="text-center adeInDown animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">
      <h1>My Travel Gives You a Great Holiday Package</h1>
      <p>Discover the world, let us handle the journey.</p>
    </div>
  </div>
</section>
<!--About-->
<section id="aboutUs" class="secPad">
  <div class="container">

    <div class="heading text-center adeInDown animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">
      <!-- Heading -->
      <h2>About Us</h2>
      <p>Embark on a journey of wonder with ourTourism Travel: Where every adventure is crafted with care.</p>
    </div>
    <div class="row adeInDown animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">
      <div class="col-md-4">
        <img src="images/about.jpg" alt="" class="img-responsive img-thumbnail">
      </div>
      <div class="col-md-8">
        <p>Our Tourism Management System is designed to revolutionize the way you experience travel. At its core, our system seamlessly integrates cutting-edge technology with personalized service to streamline every aspect of your journey. From itinerary planning and booking accommodations to real-time updates and assistance on the go, we ensure that your travel experience is smooth, stress-free, and tailored to your preferences. With a user-friendly interface and robust features, our Tourism Management System empowers you to explore with confidence, knowing that every detail is expertly managed. Join us in embracing the future of travel management and unlock a world of possibilities with ease.</p> 
        
      </div>
    </div>
  </div>   
</section>


<!--Package-->
<section id="packages" class="secPad">
  <div class="container">
    <div class="heading text-center">
      <!-- Heading -->
      <h2>Most Popular Packages</h2>
      <p>Unforgettable Adventures Await: Explore Our Popular Packages Today!</p>
    </div>
    <div class="">
      <h3>Package List</h3>
      <?php $sql = "SELECT * from tbltourpackages order by rand() ";
      $query = $dbh->prepare($sql);
      $query->execute();
      $results=$query->fetchAll(PDO::FETCH_OBJ);
      $cnt=1;
      if($query->rowCount() > 0)
      {
        foreach($results as $result)
        { 
          ?>
          <div class="rom-btm">
            <div class="col-md-3 room-left wow fadeInLeft animated" data-wow-delay=".5s">
              <img src="admin/pacakgeimages/<?php echo htmlentities($result->PackageImage);?>" class="img-responsive" alt="">
            </div>
            <div class="col-md-6 room-midle wow fadeInUp animated" data-wow-delay=".5s">
              <h4>Package Name: <?php echo htmlentities($result->PackageName);?></h4>
              <h6>Package Type : <?php echo htmlentities($result->PackageType);?></h6>
              <p><b>Location :</b> <?php echo htmlentities($result->PackageLocation);?></p>
              <p><b>Features</b> <?php echo htmlentities($result->PackageFetures);?></p>
            </div>
            <div class="col-md-3 room-right wow fadeInRight animated" data-wow-delay=".5s">
              <h5>USD <?php echo htmlentities($result->PackagePrice);?></h5>
              <a href="package_details.php?pkgid=<?php echo htmlentities($result->PackageId);?>" class="view">Details</a>
            </div>
            <div class="clearfix"></div>
          </div>
          <?php 
        }
      } ?>
    </div>
    <div class="clearfix"></div>   
  </div>
</section>
<!--Quote-->
<section id="quote" class="bg-parlex">
  <div class="parlex-back">
    <div class="container secPad text-center">
      <h2>"The World is a book, and those who do not travel read only a page."
      </h2><h3>-Saint Augustine</h3>
    </div>
    <!--/.container-->
  </div>
</section>
<!--Portfolio-->
<section id="portfolio" class="page-section section appear clearfix secPad">
  <div class="container">
    <div class="heading text-center">
      <!-- Heading -->
      <h2>Gallery</h2>
      <p>Step into our gallery and be transported to a world of artistic wonder. From vibrant paintings to mesmerizing sculptures, our curated collections promise to inspire and delight. Come explore the beauty of creativity with us.</p>
    </div>
    <div class="row">            
      <div class="col-md-12">
        <div class="row">
          <div class="portfolio-items clearfix papper " id="3" >
            <article class="col-sm-4  isotopeItem webdesign">
              <div class="portfolio-item">
                <img src="images/portfolio/america.jpg" alt="" />
                <div class="portfolio-desc align-center">
                  <div class="folio-Get It!">
                    <a href="images/portfolio/img1.jpg" class="fancybox">                                                
                      <i class="fa fa-arrows-alt fa-2x"></i>
                    </a>
                  </div>
                </div>
              </div>
            </article>

            <article class="col-sm-4 isotopeItem photography">
              <div class="portfolio-item">
                <img src="images/portfolio/img2.jpg" alt="" />
                <div class="portfolio-desc align-center">
                  <div class="folio-Get It!">
                    <a href="images/portfolio/img2.jpg" class="fancybox">
                      <i class="fa fa-arrows-alt fa-2x"></i>
                    </a>
                  </div>
                </div>
              </div>
            </article>


            <article class="col-sm-4 isotopeItem photography">
              <div class="portfolio-item">
                <img src="images/portfolio/img3.jpg" alt="" />
                <div class="portfolio-desc align-center">
                  <div class="folio-Get It!">
                    <a href="images/portfolio/img3.jpg" class="fancybox">
                      <i class="fa fa-arrows-alt fa-2x"></i>
                    </a>
                  </div>
                </div>
              </div>
            </article>

            <article class="col-sm-4 isotopeItem print">
              <div class="portfolio-item">
                <img src="images/portfolio/img4.jpg" alt="" />
                <div class="portfolio-desc align-center">
                  <div class="folio-Get It!">
                    <a href="images/portfolio/img4.jpg" class="fancybox">
                      <i class="fa fa-arrows-alt fa-2x"></i>
                    </a>
                  </div>
                </div>
              </div>
            </article>

            <article class="col-sm-4 isotopeItem photography">
              <div class="portfolio-item">
                <img src="images/portfolio/img5.jpg" alt="" />
                <div class="portfolio-desc align-center">
                  <div class="folio-Get It!">
                    <a href="images/portfolio/img5.jpg" class="fancybox">
                      <i class="fa fa-arrows-alt fa-2x"></i>
                    </a>
                  </div>
                </div>
              </div>
            </article>

            <article class="col-sm-4 isotopeItem webdesign">
              <div class="portfolio-item">
                <img src="images/portfolio/img6.jpg" alt="" />
                <div class="portfolio-desc align-center">
                  <div class="folio-Get It!">
                    <a href="images/portfolio/img6.jpg" class="fancybox">
                      <i class="fa fa-arrows-alt fa-2x"></i>
                    </a>
                  </div>
                </div>
              </div>
            </article>

            <article class="col-sm-4 isotopeItem print">
              <div class="portfolio-item">
                <img src="images/portfolio/img7.jpg" alt="" />
                <div class="portfolio-desc align-center">
                  <div class="folio-Get It!">
                    <a href="images/portfolio/img7.jpg" class="fancybox">
                      <i class="fa fa-arrows-alt fa-2x"></i>
                    </a>
                  </div>
                </div>
              </div>
            </article>

            <article class="col-sm-4 isotopeItem photography">
              <div class="portfolio-item">
                <img src="images/portfolio/img8.jpg" alt="" />
                <div class="portfolio-desc align-center">
                  <div class="folio-Get It!">
                    <a href="images/portfolio/img8.jpg" class="fancybox">
                      <i class="fa fa-arrows-alt fa-2x"></i>
                    </a>
                  </div>
                </div>
              </div>
            </article>

            <article class="col-sm-4 isotopeItem print">
              <div class="portfolio-item">
                <img src="images/portfolio/img9.jpg" alt="" />
                <div class="portfolio-desc align-center">
                  <div class="folio-Get It!">
                    <a href="images/portfolio/img9.jpg" class="fancybox">
                      <i class="fa fa-arrows-alt fa-2x"></i>
                    </a>
                  </div>
                </div>
              </div>
            </article>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!--Contact -->
<section id="contactUs" class="page-section secPad">
  <div class="container">
    <div class="row">
      <div class="heading text-center">
        <!-- Heading -->
        <h2>Let's Keep In Touch!</h2>
        <p>Thank you for visiting out our profile. If you would like to get into contact with us, please fill out the form below.</p>
      </div>
    </div>
    <div class="row mrgn30">
      <div class="col-sm-12 col-md-8">
        <!--NOTE: Update your email Id in "contact_me.php" file in order to receive emails from your contact form-->
        <form name="sentMessage" id="contactForm"  validate>
          <h3>Contact Form</h3>
          <div class="control-group">
            <div class="controls">
              <input type="text" class="form-control" 
              placeholder="Full Name" id="name" required
              data-validation-required-message="Please enter your name" />
              <p class="help-block"></p>
            </div>
          </div> 	
          <div class="control-group" style="margin-bottom: 8px;">
            <div class="controls">
              <input type="email" class="form-control" placeholder="Email" 
              id="email" required
              data-validation-required-message="Please enter your email" />
            </div>
          </div> 	

          <div class="control-group" style="margin-bottom: 8px;">
            <div class="controls">
              <textarea rows="10" cols="100" class="form-control" 
              placeholder="Message" id="message" required
              data-validation-required-message="Please enter your message" minlength="5" 
              data-validation-minlength-message="Min 5 characters" 
              maxlength="999" style="resize:none"></textarea>
            </div>
          </div> 		 
          <div id="success"> </div> <!-- For success/fail messages -->
          <button type="submit" class="btn btn-primary pull-right">Send</button><br />
        </form>
      </div> 

      <!-- signup -->
      <?php include('includes/signup.php');?>     
      <!-- //signu -->
      <!-- signin -->
      <?php include('includes/signin.php');?>     
      <!-- //signin -->
      <div class="col-sm-12 col-md-4">
        <h4>Address:</h4>
        <address>
          Sanskari Tours<br>
          Opp to Country Inn<br>
          Coin Circle, manipal
          <br>
        </address>
        <h4>Phone:</h4>
        <address>
          0820-2565744<br>
        </address>
      </div>
    </div>
  </div>
  <!--/.container-->
</section>
<?php include('includes/footer.php'); ?>

<a href="#top" class="topHome"><i class="fa fa-chevron-up fa-2x"></i></a>
<script src="js/modernizr-latest.js"></script>
<script src="js/jquery-1.8.2.min.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<script src="js/jquery.isotope.min.js" type="text/javascript"></script>
<script src="js/fancybox/jquery.fancybox.pack.js" type="text/javascript"></script>
<script src="js/jquery.nav.js" type="text/javascript"></script>
<script src="js/jquery.cslider.js" type="text/javascript"></script>
<script src="contact/contact_me.js"></script>
<script src="js/custom.js" type="text/javascript"></script>
<script src="js/owl-carousel/owl.carousel.js"></script>
</body>
</html>
