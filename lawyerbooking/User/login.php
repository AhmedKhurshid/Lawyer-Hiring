<?php

session_start();

?>

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

if (isset($_POST['login'])) {
    $email = $_POST['email'];  
    $password = $_POST['password'];
    

        $sql = "SELECT * FROM `users` WHERE `u_email` = '$email' && `u_password` = '$password'" ;
        
        $sqli = "SELECT * FROM `lawyer_info` WHERE `l_email`= '$email' && `l_password` = '$password'";
            
                $result = mysqli_query($conn, $sql);
                $result2 = mysqli_query($conn, $sqli);


                $count = mysqli_num_rows($result);
                $num = mysqli_num_rows($result2);


    if($count != 0) {

        $_POST['$email']=='u_email';
  $_POST['$password'] == 'u_password';
     header('Location:http://localhost:82/lawyerbooking/admin/index.php');
 
    }
    else if($num != 0){

      $_POST['$email'] == 'l_email';
      $_POST['$password'] == 'l_password';
            header('Location:index.php');

}
        else {

        echo "<h1><center>Login Failed! Please Try Again.</center></h1>";
            
        }
            
    
}
    
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
                            <h2>LOGIN TO YOUR ACCOUNT</h2>
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
                                <label>EMAIL</label>
                                <div class="col-md-6 input-group">
                                    <input type="email" name="email" class="form-control" required="" placeholder="" autofocus> 
                                </div>

                                <br>

                                <label>PASSWORD</label>
                                <div class="col-md-6 input-group">
                                    <input type="text" name="password" class="form-control" required="" placeholder="" autofocus> 
                                </div>

                                <div class="col-sm-12 no-padding contact-us-custom-padding">
                                    <input type="submit" id="contact_submit" class="btn btn-dm" name="login">
                                </div>
                            </form> 
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