<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->

    <meta charset="utf-8">
    <style>
      .site-navbar.navbar-dark {
        box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
      }
    </style>

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,600,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?= base_url('fonts/icomoon/style.css') ?>">

    <link rel="stylesheet" href="<?= base_url('css/owl.carousel.min.css') ?>">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>">
    
    <!-- Style -->
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">

    <title>Naukri Hunt</title>
    <style>
    .mt-3, .my-3 {
     margin-top: 0rem !important; 
    }
    body {
      font-weight: 600 !important;
    }
    .btn{
      font-weight: 600 !important;
    }
    .Applybtn{
        width: 150px;
        height: 50px;
        border-radius: 30px;
        border: none;
        color: white;
        background-color: blue;
        font-weight: 600;
        
    }
    .sharebtn{
        position: sticky; Top:50%;
    }
    .icon-share:onhover{
        color: blue;
    }
    </style>
  </head>
  <body style="background-color:#fafbfd;">
    


    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->
    

    <!-- NAVBAR -->
    <header class="site-navbar mt-3" style="position: fixed; top: 0; width: 100%; box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);">
      <div class="container-fluid">
        <div class="row align-items-center" style="
            height: 80px;
            color: white;
            background-color: white;">
          <div class="site-logo col-6"><a href="~">Naukri Hunt</a></div>

          <nav class="mx-auto site-navigation">
            <ul class="site-menu js-clone-nav d-none d-xl-block ml-0 pl-0">
              <li><a href="index.html" class="nav-link active">Home</a></li>
              <li><a href="about.html">About</a></li>
              <li class="has-children">
                <a href="job-listings.html">Job Listings</a>
                <ul class="dropdown">
                  <li><a href="job-single.html">Job Single</a></li>
                  <li><a href="post-job.html">Post a Job</a></li>
                </ul>
              </li>
              <li class="has-children">
                <a href="services.html">Pages</a>
                <ul class="dropdown">
                  <li><a href="services.html">Services</a></li>
                  <li><a href="service-single.html">Service Single</a></li>
                  <li><a href="blog-single.html">Blog Single</a></li>
                  <li><a href="portfolio.html">Portfolio</a></li>
                  <li><a href="portfolio-single.html">Portfolio Single</a></li>
                  <li><a href="testimonials.html">Testimonials</a></li>
                  <li><a href="faq.html">Frequently Ask Questions</a></li>
                  <li><a href="gallery.html">Gallery</a></li>
                </ul>
              </li>
              <li><a href="blog.html">Compete</a></li>
              <li><a href="contact.html">Contact</a></li>
              <li class="d-lg-none"><a href="post-job.html"><span class="mr-2">+</span> Post a Job</a></li>
              <li class="d-lg-none"><a href="login.html">Log In</a></li>
            </ul>
          </nav>
          
          <div class="right-cta-menu text-right d-flex aligin-items-center col-6">
            <div class="ml-auto">
              <a href="post-job.html" class="btn btn-outline-white border-width-2 d-none d-lg-inline-block"></span>Register</a>
              <a href="login.html" class="btn btn-primary border-width-2 d-none d-lg-inline-block"><span class="mr-2 icon-lock_outline"></span>Log In</a>
            </div>
            <a href="#" class="site-menu-toggle js-menu-toggle d-inline-block d-xl-none mt-lg-2 ml-3"><span class="icon-menu h3 m-0 p-0 mt-2"></span></a>
          </div>

        </div>
      </div>
    </header>
    

    <!-- <div class="hero" style="background-image: url('images/hero_1.jpg');"></div> -->
<div style="display: flex; justify-content: space-between; margin: 100px 20px 20px 20px;">
  <div style="background-color: white; margin: 10px; padding: 20px; flex: 2;">
    <div style="background-color: white; border-radius: 10px; padding: 20px;">
    <div style="margin: 10px;">
        <div style="display: flex;">
            <div style="flex: 1; text-align: left; display: flex; align-items: center; justify-content: flex-start;">
                <img src="images/person_1.jpg" alt="Image" class="img-fluid mr-3" style="width: 60px; height: 60px; border-radius: 50%; object-fit: cover;">
                <h4><?= $row->JobTitle ?></h4>
            </div>
            <div style="flex: 1; text-align: right; display: flex; align-items: center; justify-content: flex-end;">
                <button class="Applybtn">Apply Now</button><p class="sharebtn" ><span class="icon-share" style="font-size: 20px;margin-top: 80px; margin-left: 10px;"></span></p>
            </div>
        </div>
        <div style="text-align: left; margin-top: 10px; font-weight: bold; font-size: 20px;">
        <h2><?= $row->CompanyName ?></h2>
        </div>
        <div>
            <p><?= $row->JobLocation ?></p>
        </div>

        <div style="text-align: left; margin-top: 10px; font-weight: bold; font-size: 20px;">
          <h3>Job Description</h3>
        </div>
        <div>
            <ul style="list-style: disc; margin-left: 20px; margin-top: 10px;">
                <!-- <li>Responsible for data analysis, data mining and data visualization.</li>
                <li>Develop, test and maintain statistical models.</li>
                <li>Collaborate with cross-functional teams to integrate data insights into business strategies.</li>
                <li>Collaborate with cross-functional teams to integrate data insights into business strategies.</li>

                <li>Collaborate with cross-functional teams to integrate data insights into business strategies.</li>

                <li>Collaborate with cross-functional teams to integrate data insights into business strategies.</li>

                <li>Collaborate with cross-functional teams to integrate data insights into business strategies.</li> -->
                <?= $row->JobDescription ?>
            </ul>
        </div>
        
    
    </div>
    </div>
    
    <!-- Content for the left div -->
  </div>
  <div style="background-color: white; margin: 10px; padding: 20px; flex: 1;">
    <!-- Content for the right div -->
  </div>
</div>

    <footer class="site-footer" style="background-color: #333; color: #fff; padding: 2rem 0; text-align: center;">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <h5>About Us</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque nisl eros, pulvinar facilisis justo mollis, auctor consequat urna.</p>
          </div>
          <div class="col-md-4">
            <h5>Quick Links</h5>
            <ul style="list-style: none; padding: 0;">
              <li><a href="#" style="color: #fff; text-decoration: none;">Home</a></li>
              <li><a href="#" style="color: #fff; text-decoration: none;">About</a></li>
              <li><a href="#" style="color: #fff; text-decoration: none;">Services</a></li>
              <li><a href="#" style="color: #fff; text-decoration: none;">Contact</a></li>
            </ul>
          </div>
          <div class="col-md-4">
            <h5>Contact Us</h5>
            <p>Email: info@example.com</p>
            <p>Phone: +123456789</p>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <p>&copy; <?= date('Y') ?> Your Company. All rights reserved.</p>
          </div>
        </div>
      </div>
    </footer>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>