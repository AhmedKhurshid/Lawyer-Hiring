<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lawyer Services | Lawyer Website</title>
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

<?php

include 'connection.php';

if (isset($_POST['register'])) {
    $name = $_POST['name'];  
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $password = $_POST['password'];  
    $c_password = $_POST['c_password'];
    $address = $_POST['address'];  
        
    $sql = "SELECT * FROM `lawyer_info` WHERE `l_email` = '$email'";
   
    $result = mysqli_query($conn, $sql);
    
    $num = mysqli_num_rows($result);


    if($num == 0) {
        if(($password == $c_password) ) {
     $sql="INSERT INTO `lawyer_info`(`l_id`, `l_name`, `l_email`, `l_phone`, `l_address`, `l_img`, `l_password`, `l_cpassword`, `l_des`) VALUES ('','$name','$email','$contact','$address','','$password','$c_password','images/default.jpg')";
   $result = mysqli_query($conn, $sql);
     if ($result) {
         $showAlert = true;
     }   
    echo '<script>alert("you are registered") </script>';
    //  echo '<div class="alert alert-success alert-dismissible fade show col-sm-12" role="alert" style="padding:50px;margin-bottom:-50px;">
    //               <center><strong>Congratulation!</strong>You Have Successfully Signed Up.</center>
    //               <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    //                 <span aria-hidden="true">&times;</span>
    //               </button>
    //             </div>';
         
    }
    else {
        echo '<script>alert("your password does not matched") </script>';
         // echo '<div class="alert alert-danger alert-dismissible fade show col-sm-12 " role="alert" style="padding:50px;margin-bottom:-50px;">
         //              <center><strong>Passwords are not identical!</strong> Please Try Again.</center>
         //              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
         //                <span aria-hidden="true">&times;</span>
         //              </button>
         //            </div>';
     } 

}
else if ($num>0) 
{
   echo '<script>alert("you are already registered") </script>';
//    echo '<div class="alert alert-danger alert-dismissible fade show col-sm-12" role="alert" style="padding:50px;margin-bottom:-50px;">
//      <center><strong>Email Already Taken!</strong> Please Try Another One.</center>
//      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
//        <span aria-hidden="true">&times;</span>
//      </button>
//    </div>';  
}
            
    }
    
//  else if($num>0) 
//    {
//     echo '<div class="alert alert-danger alert-dismissible fade show col-sm-12" role="alert" style="padding:50px;margin-bottom:-50px;">
//     <center><strong>Email Already Taken!</strong> Please Try Another One.</center>
//     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
//       <span aria-hidden="true">&times;</span>
//     </button>
//   </div>';  
// } 
   
   
?>




    <!-- =========================
     START WELCOME SECTION
    ============================== -->
    

    <!-- =========================
     START CONTACT US SECTION
    ============================== -->

    <section class="contact-us-1">
        <div class="welcome-title-area">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-6">
                        <div class="Title-area">
                            <h2>JOIN AS LAWYER</h2>
                            <h2>SIGN UP TO YOUR ACCOUNT</h2>
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
                    <div class="col-sm-12 col-md-12 no-padding">
                        <div class="contact-us-1-form clearfix">



                            <form method="post">
                                <label>USERNAME</label>
                                <div class="col-md-6 input-group">
                                    <input type="text" name="name" class="form-control" required="" placeholder="" autofocus> 
                                </div>

                                <br>
                                
                                <label>EMAIL</label>
                                <div class="col-md-6 input-group">
                                    <input type="email" name="email" class="form-control" required="" placeholder="" autofocus> 
                                </div>

                                <br>

                                <label>PASSWORD</label>
                                <div class="col-md-6 input-group">
                                    <input type="password" name="password" class="form-control" required="" placeholder="" autofocus> 
                                </div>

                                <br>

                                <label>RE-ENTER PASSWORD</label>
                                <div class="col-md-6 input-group">
                                    <input type="password" name="c_password" class="form-control" required="" placeholder="" autofocus> 
                                </div>
                                
                                <br>

                                <label>CONTACT</label>
                                <div class="col-md-6 input-group">
                                    <input type="text" name="contact" class="form-control" required="" placeholder="" autofocus> 
                                </div>
                                
                                <br>

                                <label>ADDRESS</label>
                                <div class="col-md-6 input-group">
                                    <input type="text" name="address" class="form-control" required="" placeholder="" autofocus> 
                                </div>
                                
                                <br>


                                <div class="col-sm-12 no-padding contact-us-custom-padding">
                                    <input type="submit" id="contact_submit" class="btn btn-dm" name="register">
                                </div>
                            </form> 
                            
                            <p class="account1">Already have an account ? <a href="login.html">Login now</a></p>

                        </div>
                    </div>
                </div>                
            </div>
        </div>

    </section> <!-- end contact us area -->


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