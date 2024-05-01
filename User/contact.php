<?php
include 'connection.php';
       

if (isset($_POST['submit'])) {
    

    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $subject=$_POST['subject'];
    $message=$_POST['message'];

        $q="INSERT INTO `contact`(`id`, `name`, `subject`, `email`, `phone`, `comment`) VALUES ('','$name','$email','$phone','$subject','$message')";
        $result=mysqli_query($conn,$q);  
        echo '<script>alert("your feedback sent sucessfully") </script>';
            
}
else{
    echo '<script>alert("Please Enter your Required Fields") </script>';
}

include 'header.php';

?>

<style>

    .about-bg{
    background: url(../User/images/page-titles/ab22.jpg);
    background-size:cover;
}

    </style>



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
    <section class="page-title-area about-bg">
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
                               <li><a href="#">contact Us</a></li>
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
                            <form method="POST">
                                <div class="col-sm-6 no-padding-left">
                                    <input type="text" required="your name" class="form-control" name="name" id="Name" placeholder="YOUR NAME"> 
                                </div>
                                <div class="col-sm-6 no-padding-right">
                                    <input type="email" required="your email" class="form-control" id="Email" name="email" placeholder="EMAIL"> 
                                </div>
                                <div class="col-sm-6 no-padding-left">
                                    <input type="text" class="form-control" required="" id="phone" name="phone" placeholder="PHONE"> 
                                </div>
                                <div class="col-sm-6 no-padding-right">
                                    <input type="text" class="form-control"  id="Subject" name="subject" placeholder="SUBJECT"> 
                                </div>
                                <div class="col-sm-12 no-padding contact-us-custom-padding">
                                    <textarea class="form-control" rows="8" id="Message" name="message" placeholder="MESSAGE"></textarea>
                                </div>
                                <div class="col-sm-12 no-padding contact-us-custom-padding">
                                    <button type="submit" name="submit" class="btn btn-dm">SEND YOUR FEEDBACK</button>
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
                                <span><i class="fa  fa-phone"></i> + 92 312 061 1171</span>
                                <span><i class="fa  fa-fax"></i> + 92 310 240 8172</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="address-details">
                                <span>Email :</span>
                                <span><i class="fa   fa-envelope"></i>lawservice000@gmail.com</span>
                            </div>
                        </div>
                        <div class="view-location">
                            <span>Address :</span>
                            <span><i class="fa fa-map-marker"></i>Block 5 Block 5 A Block 5 Nazimabad, Karachi, Karachi City, Sindh 74600.</span>
                        </div>
                    </div>
                </div>                
            </div>
        </div>

    </section> <!-- end contact us area -->

    <!-- START MAP -->
    <div id="map">


    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3618.255237732386!2d67.02056321404996!3d24.92337344887334!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb33f93330071ad%3A0xc3a5eff15618c9cf!2sTanveer%20Shaheed%20Park%2C%20Block%205%20Block%205%20A%20Block%205%20Nazimabad%2C%20Karachi%2C%20Karachi%20City%2C%20Sindh%2074600%2C%20Pakistan!5e0!3m2!1sen!2s!4v1626029328145!5m2!1sen!2s" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
    <!-- =========================
    
<?php

include 'footer.php';

?>