<?php
include 'connection.php';
include 'header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
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

    <!-- =========================
     PAGE TITLE SECTION
    ============================== -->  
    <section class="page-title-area contact-page-title-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-title-padding">
                        <div class="page-title-content text-center">
                           <p>We Wanna Hear From You</p> 
                           <h2>Contact Us</h2>
                        </div>
                        <div class="breadcrumbs text-center">
                           <ul class="page-breadcrumbs">
                               <li><a href="#">home</a></li>
                               <li><a href="#">contact 1</a></li>
                           </ul>                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- =========================
     START CONTACT US SECTION
    ============================== -->

    <section class="contact-us-1">
        <div class="welcome-title-area">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-6">
                        <div class="Title-area">
                            <h3>Get In Toutch</h3>
                            <h2>Contact Us</h2>
                            <p>Feel free to get in touch with any enquiries and one of our friendly members of staff will get back to you as soon as possible, we are here to help !</p>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end title. it will use all pages title -->
        <div class="contact-us-1-area">
            <div class="container">
                <div class="row">
                    <div class="show_result"></div>
                    <div class="result_message"></div>                 
                    <div class="col-sm-6 col-md-8 no-padding">
                        <div class="contact-us-1-form clearfix">                       
                            <form>
                                <div class="col-sm-6 no-padding-left">
                                    <input type="text" class="form-control" id="Name" placeholder="YOUR NAME"> 
                                </div>
                                <div class="col-sm-6 no-padding-right">
                                    <input type="email" class="form-control" id="Email" placeholder="EMAIL"> 
                                </div>
                                <div class="col-sm-6 no-padding-left">
                                    <input type="text" class="form-control" id="phone" placeholder="PHONE"> 
                                </div>
                                <div class="col-sm-6 no-padding-right">
                                    <input type="text" class="form-control" id="Subject" placeholder="SUBJECT"> 
                                </div>
                                <div class="col-sm-12 no-padding contact-us-custom-padding">
                                    <textarea class="form-control" rows="8" id="Message" placeholder="MESSAGE"></textarea>
                                </div>
                                <div class="col-sm-12 no-padding contact-us-custom-padding">
                                    <button type="button" id="contact_submit" class="btn btn-dm">SEND YOUR REQUEST</button>
                                </div>
                            </form>                        
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 no-padding-right">
                        <div class="address-area">
                            <!-- address title -->
                            <div class="Title-area home-8-title-area contact-1-title-area">
                                <p>Trust is a business theme perfectly suited legal advisers and offices, lawyers, attorneys, and other legal and law related services. </p>
                            </div>                        
                        </div>
                        <div class="col-md-6">
                            <div class="address-details">
                                <span>Phone :</span>
                                <span><i class="fa  fa-phone"></i> + 2 01065370701</span>
                                <span><i class="fa  fa-fax"></i> + 2 01065370701</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="address-details">
                                <span>Email :</span>
                                <span><i class="fa   fa-envelope"></i>7oroof@7oroof.com</span>
                            </div>
                        </div>
                        <div class="view-location">
                            <span>Address :</span>
                            <span><i class="fa fa-map-marker"></i> 2 AlBahr St, Tanta , AlGharbia, Egypt.</span>
                            <a href="#">View Location On Map</a>
                        </div>
                    </div>
                </div>                
            </div>
        </div>

    </section> <!-- end contact us area -->

    <!-- START MAP -->
    <div id="map"></div>
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
    <script src="js/map.js"></script>
    <script src="js/main.js"></script> 

</body>
</html>