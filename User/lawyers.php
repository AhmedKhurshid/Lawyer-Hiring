<?php 
include 'connection.php';
$q="SELECT * FROM `lawyer_info` inner join law_by_cat ON law_by_cat.lawyer_id=lawyer_info.l_id inner JOIN lawyer_categories on lawyer_categories.cat_id= law_by_cat.cat_id
";
$res=mysqli_query($conn,$q);




?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Trust</title>
    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- FONT AWESOME -->
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <!-- ICON STROKE -->
    <link href="css/icon-stroke.css" rel="stylesheet">
    <!-- MENU -->
    <link rel="stylesheet" href="css/menuzord.css"> 
    <!-- RS5.0 Main Stylesheet -->
    <link rel="stylesheet" type="text/css" href="revolution/css/settings.css">    
    <!-- RS5.0 Layers and Navigation Styles -->
    <link rel="stylesheet" type="text/css" href="revolution/css/layers.css">
    <link rel="stylesheet" type="text/css" href="revolution/css/navigation.css">    
    <!-- Important Owl stylesheet -->
    <link rel="stylesheet" href="css/owl.carousel.css"> 
    <!-- Portfolio Filter -->
    <link rel="stylesheet" href="css/bootFolio.css">
    <!-- Popup -->
    <link rel="stylesheet" href="css/magnific-popup.css">
    <!-- Default Theme -->
    <link rel="stylesheet" href="css/owl.theme.css">
    <!-- JQUERY UI STYLE -->
    <link rel="stylesheet" href="css/jquery-ui.css">
    <!-- MAIN STYLE -->
    <link href="css/main.css" rel="stylesheet">

    <!-- GOOGLE FONT -->
    <link href='https://fonts.googleapis.com/css?family=Lora:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>

    <script src="js/jquery-1.11.3.min.js"></script>

        <!-- RS5.0 Core JS Files -->
    <script type="text/javascript" src="revolution/js/jquery.themepunch.tools.min.js?rev=5.0"></script>
    <script type="text/javascript" src="revolution/js/jquery.themepunch.revolution.min.js?rev=5.0"></script>
    <script type="text/javascript" src="revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script type="text/javascript" src="revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script type="text/javascript" src="revolution/js/extensions/revolution.extension.navigation.min.js"></script>
    <script type="text/javascript" src="revolution/js/extensions/revolution.extension.parallax.min.js"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
  <body>
    <!-- =========================
     START PRELOADER
    ============================== -->
    <div class="outslider_loading">
        <div class="outslider_loader"></div>
    </div>

    <!-- =========================
     END PRELOADER
    ============================== -->


  
    <!-- =========================
     START WELCOME SECTION
    ============================== -->
    <div class="full-page-search">
       <form action="#">
          <input type="text" name="googlesearch" placeholder="Type Words Then Press Enter To Search">
          <input type="submit" id="searchsubmit" value="Search">
        </form>
        <div class="sr-overlay"></div>
   </div>    
    <header class="header-area navbar-fixed-top">
        <div class="container custom-header">
            <div class="row">
                <div id="menuzord" class="menuzord">
                   <a href="home.html" class="menuzord-brand"><img src="images/horse.png" width="35" height="51" alt="">Trust <span>We provide legal solutions <br>for you !</span></a>
                   <div class="header-contact">
                        <ul>
                           <li><span>Phone :</span> + 2 0106 5370701</li>
                           <li><span>Email :</span> 7oroof@7oroof.com</li>
                           <li><a href="#">Free Consultation</a></li>
                        </ul>
                   </div>
                   <div class="header-search">
                        <ul>
                            <li class="filter-search"><i class="fa fa-search"></i></li>
                            <li class="add-to-cart"><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            <li><a href="#">0</a></li>                        
                        </ul>
                        <div class="add-to-cart-content">
                            <div class="recent-post shop-right-thumb add-cart-thumb">
                                <h3><a href="#">Criminal Law</a></h3>
                                <p> 1 x $ 65.00</p>
                                <img src="images/shop-right-thumb.png" alt="">
                                <span><a href="#"><img src="images/shop-cart-cross.png" alt=""></a></span>
                            </div>
                            <div class="recent-post shop-right-thumb add-cart-thumb">
                                <h3><a href="#">Detention and Arrest</a></h3>
                                <p>1 x $ 65.00</p>
                                <img src="images/shop-right-thumb.png" alt="">
                                <span><a href="#"><img src="images/shop-cart-cross.png" alt=""></a></span>
                            </div>
                            <p>Subtotal:<span>$145.00</span></p>
                            <button type="button" class="btn btn-dm">View Cart</button>
                            <button type="button" class="btn btn-dm">Checkout</button>
                        </div>
                   </div>                    
                   <ul class="menuzord-menu menuzord-menu-bg">
                        <li><a href="home.html">HOME</a>
                            <div class="megamenu megamenu-half-width megamenu-bg">
                                <div class="megamenu-row">
                                    <div class="mega-item col4">
                                        <ul>
                                            <li><a href="home.html">Homepage 1</a></li>
                                            <li><a href="home-2.html">Homepage 2</a></li>
                                            <li><a href="home-3.html">Homepage 3</a></li>
                                            <li><a href="home-4.html">Homepage 4</a></li>
                                            <li><a href="home-5.html">Homepage 5</a></li>
                                        </ul>                   
                                    </div>
                                    <div class="mega-item col4">
                                        <ul>
                                            <li><a href="home-6.html">Homepage 6</a></li>
                                            <li><a href="home-7.html">Homepage 7</a></li>
                                            <li><a href="home-8.html">Homepage 8</a></li>                                        
                                            <li><a href="home-9.html">Homepage 9</a></li>
                                            <li><a href="home-10.html">Homepage 10</a></li>

                                        </ul>                   
                                    </div>  
                                    <div class="mega-item col4">
                                        <ul>
                                            <li><a href="home-11.html">Homepage 11</a></li>
                                            <li><a href="home-12.html">Homepage 12</a></li>
                                            <li><a href="home-13.html">Homepage 13</a></li>
                                            <li><a href="home-14.html">Homepage 14</a></li>
                                            <li><a href="home-15.html">Homepage 15</a></li>
                                        </ul>                   
                                    </div>         
                                </div>      
                            </div>      
                        </li>
                        <li><a href="about-us1.html">ABOUT</a>
                            <ul class="dropdown">
                                <li><a href="header-v-1.html">Headers</a>
                                    <ul class="dropdown">
                                        <li><a href="header-v-1.html">Header Basic</a>
                                            <ul class="dropdown">
                                                <li><a href="header-v-1.html">Header v1</a></li>
                                                <li><a href="header-v-2.html">Header v2</a></li>
                                                <li><a href="header-v-3.html">Header v3</a></li>
                                                <li><a href="header-v-4.html">Header v4</a></li>
                                                <li><a href="header-v-5.html">Header v5</a></li>
                                                <li><a href="header-v-6.html">Header v6</a></li>
                                                <li><a href="header-v-7.html">Header v7</a></li>
                                                <li><a href="header-v-8.html">Header v8</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="header-v-9.html">Header Transparent</a>
                                            <ul class="dropdown">
                                                <li><a href="header-v-9.html">Header v9</a></li>
                                                <li><a href="header-v-10.html">Header v10</a></li>
                                                <li><a href="header-v-11.html">Header v11</a></li>
                                                <li><a href="header-v-12.html">Header v12</a></li>
                                                <li><a href="header-v-13.html">Header v13</a></li>
                                                <li><a href="header-v-14.html">Header v14</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="page-title-1.html">Page titles</a>
                                    <ul class="dropdown">
                                        <li><a href="page-title-1.html">Page Title v1</a></li>
                                        <li><a href="page-title-2.html">Page Title v2</a></li>
                                        <li><a href="page-title-3.html">Page Title v3</a></li>
                                        <li><a href="page-title-4.html">Page Title v4</a></li>
                                        <li><a href="page-title-5.html">Page Title v5</a></li>
                                        <li><a href="page-title-6.html">Page Title v6</a></li>
                                        <li><a href="page-title-7.html">Page Title v7</a></li>
                                        <li><a href="page-title-8.html">Page Title v8</a></li>
                                        <li><a href="page-title-9.html">Page Title v9</a></li>
                                        <li><a href="page-title-10.html">Page Title v10</a></li>
                                    </ul>
                                </li>
                                <li><a href="footer-v-1.html">Footers</a>
                                    <ul class="dropdown">
                                        <li><a href="footer-v-1.html">Footer v1</a></li>
                                        <li><a href="footer-v-2.html">Footer v2</a></li>
                                        <li><a href="footer-v-3.html">Footer v3</a></li>
                                        <li><a href="footer-v-4.html">Footer v4</a></li>
                                        <li><a href="footer-v-5.html">Footer v5</a></li>
                                        <li><a href="footer-v-6.html">Footer v6</a></li>
                                        <li><a href="footer-v-7.html">Footer v7</a></li>
                                        <li><a href="footer-v-8.html">Footer v8</a></li>
                                        <li><a href="footer-v-9.html">Footer v9</a></li>
                                    </ul>
                                </li>                                 
                                <li><a href="about-us1.html">About Us 1</a></li>
                                <li><a href="about-us2.html">About Us 2</a></li>
                                <li><a href="testimonials.html">Testimonials</a></li>
                                <li><a href="clients.html">Clients</a></li>
                                <li><a href="faqs.html">FAQs</a></li>
                                <li><a href="gallery-2.html">Our Gallery</a>
                                    <ul class="dropdown">
                                        <li><a href="gallery-2.html">Gallery 2 Column</a></li>
                                        <li><a href="gallery-3.html">Gallery 3 Column</a></li>
                                        <li><a href="gallery-4.html">Gallery 4 Column</a></li>
                                    </ul> 
                                </li>                               
                            </ul>      
                        </li>
                        <li><a href="practice-area-1.html">PRACTICE AREAS</a>
                            <ul class="dropdown">
                                <li><a href="practice-area-1.html">Practice Areas 1</a></li>
                                <li><a href="practice-area-2.html">Practice Areas 2</a></li>
                                <li><a href="practice-area-block.html">Practice Areas Blocks</a></li>
                                <li><a href="practice-area-single.html">Single Practice Area</a></li>
                            </ul>
                        </li>
                        <li class="active"><a href="attorneys1.html">ATTORNEYS</a>
                            <ul class="dropdown">
                                <li><a href="attorneys1.html">Attorneys 1</a></li>
                                <li><a href="attorneys2.html">Attorneys 2</a></li>
                                <li><a href="attorneys3.html">Attorneys 3</a></li>
                                <li><a href="attorney-single.html">Single Attorney</a></li>
                            </ul>
                        </li>
                        <li><a href="blog-standard.html">BLOG</a>
                            <ul class="dropdown">
                                <li><a href="blog-grid.html">Blog Grid</a>
                                    <ul class="dropdown">
                                        <li><a href="blog-grid2.html">Blog Grid 2 Column</a></li>
                                        <li><a href="blog-grid3.html">Blog Grid 3 Column</a></li>
                                        <li><a href="blog-grid.html">Blog Grid 4 Column</a></li>
                                    </ul> 
                                </li>
                                <li><a href="blog-standard.html">Blog Standard</a>
                                    <ul class="dropdown">
                                        <li><a href="blog-standard-full.html">Full Width</a></li>
                                        <li><a href="blog-standard.html">Right Sidebar</a></li>
                                        <li><a href="blog-standard-left-sidebar.html">Left Sidebar</a></li>
                                    </ul> 
                                </li>
                                <li><a href="blog-single.html">Single Post</a>
                                    <ul class="dropdown">
                                        <li><a href="blog-single-full-width.html">Full Width</a></li>
                                        <li><a href="blog-single.html">Right Sidebar</a></li>
                                        <li><a href="blog-single-left-sidebar.html">Left Sidebar</a></li>
                                    </ul> 
                                </li>
                            </ul>
                        </li>
                        <li><a href="features-typography.html">FEATURES</a>
                            <div class="megamenu megamenu-full-width megamenu-bg">
                                <div class="megamenu-row">
                                    <div class="mega-item col3">
                                        <ul>
                                            <li><a href="features-typography.html">Typography</a></li>
                                            <li><a href="features-Soon.html">Coming Soon Page</a></li>
                                            <li><a href="features-maintenance.html">Maintenance</a></li>
                                        </ul>                   
                                    </div>
                                    <div class="mega-item col3">
                                        <ul>
                                            <li><a href="features-404.html">404 Page</a></li>
                                            <li><a href="heading-seperator.html">Headings</a></li>
                                            <li><a href="tabs.html">Tabs</a></li>
                                        </ul>                   
                                    </div>
                                    <div class="mega-item col3">
                                        <ul>
                                            <li><a href="accordions.html">Accordions</a></li>
                                            <li><a href="features-Pricing-Tables.html">Pricing Tables</a></li>
                                            <li><a href="progress-bar.html">Progress Bars</a></li>
                                        </ul>                    
                                    </div>
                                    <div class="mega-item col3">
                                        <ul>
                                            <li><a href="google-maps.html">Google Maps</a></li>
                                            <li><a href="left-sidebar-layout.html">Left Sidebar Layout</a></li>
                                            <li><a href="right-sidebar-layout.html">Right Sidebar Layout</a></li>
                                        </ul>                    
                                    </div>                                             
                                </div>      
                            </div>
                        </li>
                        <li><a href="#">SHOP</a>
                            <ul class="dropdown">
                                <li><a href="shop-category-right-sidebar.html">category right sidebar</a></li>
                                <li><a href="shop-category-left-sidebar.html">category left sidebar</a></li>
                                <li><a href="shop-category-full-width.html">category full width</a></li>
                                <li><a href="shop-product-right-sidebar.html">product right sidebar</a></li>
                                <li><a href="shop-product-left-sidebar.html">product left sidebar</a></li>
                                <li><a href="shop-product-full-width.html">product full width</a></li>
                                <li><a href="shop-single-product-right-sidebar.html">single product right sidebar</a></li>
                                <li><a href="shop-single-product-left-sidebar.html">single product left sidebar</a></li>
                                <li><a href="shop-single-product-full-width.html">single product full width</a></li>
                                <li><a href="shop-cart.html">cart</a></li>
                            </ul>
                        </li>                        
                        <li><a href="contact1.html">CONTACT</a>
                            <ul class="dropdown">
                                <li><a href="contact1.html">Contact 1</a></li>
                                <li><a href="contact2.html">Contact 2</a></li>
                            </ul>
                        </li>
                   </ul>
                </div>
            </div>
        </div>
    </header>

    <!-- =========================
     PAGE TITLE SECTION
    ============================== -->  
    <section class="page-title-area attorney-page-title-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-title-padding">
                        <div class="page-title-content text-center">
                           <p>Our Legal Team</p> 
                           <h2>Meet Our Attorneys</h2>
                        </div>
                        <div class="breadcrumbs text-center">
                           <ul class="page-breadcrumbs">
                               <li><a href="#">home</a></li>
                               <li><a href="#">Attorneys</a></li>
                               <li><a href="#">Attorney 3</a></li>
                           </ul>                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- =========================
     START OUR TEAM SECTION
    ============================== -->
    
    <section class="our-team-area attorney-1">
        <!-- start team member introduction -->  
        <div class="team-member-area">
            <div class="container">
                <div class="row">

                <?php 
                
                while($row=mysqli_fetch_array($res))
                {

                ?>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="team-description">
                            <div class="team-content">
                                <div class="team-img attorney-team-img">
                                    <img src="images/team-member-1.png" alt="team-member">
                                    <div class="attorney-content-default text-center">
                                        
                                        <!-- <h2><a href="#">Mahmoud Adel Baghagho</a></h2> -->
                                        <p><?php  echo  $row[1]?></p>
                                    </div>
                                </div>
                                <div class="about-attorney-member text-center">
                                    <div class="attorney-content-default-hover">
                                        <h2><a href="#">Mahmoud Adel Baghagho</a></h2>
                                        <p>CEO & Manager</p>
                                    </div>
                                    <div class="social-content-box attorney-team-social">
                                        <a href="#"> <i class="fa fa-facebook"></i> </a>
                                        <a href="#"> <i class="fa fa-twitter"></i> </a>
                                        <a href="#"> <i class="fa fa-google-plus"></i> </a>
                                        <a href="#"> <i class="fa fa  fa-linkedin"></i> </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                   
                    
                   <?php  } ?>
                   
                </div>
                <div class="row">
                    <div class="col-md-12 blog-pagination text-center clearfix">
                        <nav>
                            <ul class="pagination">
                                <li><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li>
                                  <a href="#" aria-label="Next">
                                    <i class="fa fa-long-arrow-right"></i>
                                  </a>
                                </li>
                            </ul>
                        </nav>                                    
                    </div>
                </div>                
            </div>
        </div>       
    </section>  <!-- end our team area -->     

    <!-- =========================
     START FOOTER SECTION
    ============================== -->   


    <footer class="footer-area">
        <div class="footer-head">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3 col-md-3">
                        <div class="f-h-content">
                            <h3>Call Us Now !</h3>
                            <h2>002 0106 5370701</h2>
                            <p><a href="#">24/7 Available</a></p>
                        </div>
                    </div>
                    <div class="col-sm-3 col-md-3">
                        <div class="f-h-content">
                            <h3>Send Us Message !</h3>
                            <h2>7oroof@7oroof.com</h2>
                            <p><a href="#">24/7 Available</a></p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6">
                        <div class="f-h-content">
                            <h3>Visit Our Office !</h3>
                            <h2>Alnahas Building, 2 AlBahr St, Tanta AlGharbia, Egypt.</h2>
                            <p><a href="#">View Map</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-content">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-4">
                        <div class="f-first-content f-all-h2">
                            <div class="f-content-img">
                                <a href="#"><img src="images/fotter-horse.png" alt="f-image"></a>
                            </div>
                            <p>Trust is a business theme perfectly suited legal advisers and offices, lawyers, attorneys, counsels, advocates and other legal and law related services.Trust started as a sole practitioner providing services to the area community.</p>
                            <p><a href="#">Buy This Theme <i class="fa fa-long-arrow-right"></i></a></p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="f-second-content f-all-h2">
                            <h2>Business Hours</h2>
                            <ul>
                                <li><a href="#">Opining Days :</a></li>
                                <li><a href="#">Monday – Friday : 9am to 20 pm</a></li>
                                <li><a href="#">Saturday : 9am to 17 pm</a></li>
                            </ul>
                            <ul>
                                <li><a href="#">Vacations :</a></li>
                                <li><a href="#">All Sunday Days</a></li>
                                <li><a href="#">All Official Holidays</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-2">
                        <div class="f-third-content f-all-h2">
                            <h2>Practice Areas</h2>
                            <ul>
                                <li><a href="#"><i class="fa fa-long-arrow-right"></i>Family Law</a></li>
                                <li><a href="#"><i class="fa fa-long-arrow-right"></i>Fire Accident</a></li>
                                <li><a href="#"><i class="fa fa-long-arrow-right"></i>Sexual Offences</a></li>
                                <li><a href="#"><i class="fa fa-long-arrow-right"></i>Drug Offences</a></li>
                                <li><a href="#"><i class="fa fa-long-arrow-right"></i>Financial Law</a></li>
                                <li><a href="#"><i class="fa fa-long-arrow-right"></i>Shoplifting</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="f-fourth-content f-all-h2">
                            <h2>Newsletter</h2>
                            <p>Don’t miss to subscribe to our news feeds, kindly fill the form below.</p>
                            <form>
                                <div class="form-group footer-subscribe">
                                    <input type="email" class="form-control" id="Email1" placeholder="Subscribe In Our Newsletter">
                                    <button type="submit" class="btn btn-default">Join</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
               <div class="footer-bottom clearfix">
                    <div class="col-md-6 col-sm-6 no-padding-left">
                        <div class="f-bottom-left-text">
                            <p>Trust © All Rights Reserved. With Love by <span><a href="#">7oroof.com</a></span> </p>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 no-padding-right">
                        <div class="f-bottom-right-text">
                            <ul>
                                <li><a href="#">News</a></li>
                                <li><a href="#">FAQs</a></li>
                                <li><a href="#">Careers</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Terms of Use</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Include owl-carousel js plugin -->
    <script src="js/owl.carousel.js"></script>
    <script src="js/menuzord.js"></script>
    <script src="js/countdown.js"></script>
    <script src="js/jquery.counterup.js"></script> 
    <script src="js/waypoints.min.js"></script> 
    <script src="https://maps.googleapis.com/maps/api/js"></script>
    <script src="js/jquery.bootFolio.js"></script>
    <script src="js/jquery.magnific-popup.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/rev-slider.js"></script>
    <script src="js/main.js"></script> 
    
  </body>
</html>