<?php
include 'connection.php';
session_start();
 $user_id  =   $_SESSION["id"] ;

$sql = "SELECT cat_name FROM lawyer_categories";
$result= mysqli_query($conn,$sql);


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

    <style>

.menuzord-menu {
    padding-right: 0px;
}

    </style>


</head>
  <body>
    <!-- =========================
     START PRELOADER
    ============================== -->
    <!-- <div class="outslider_loading">
        <div class="outslider_loader"></div>
    </div> -->

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
                   <a href="index.php" class="menuzord-brand"><img src="images/law.png" width="50" height="65" alt="">Law Service <span>We provide legal <br> solutions for you !</span></a>
                   <div class="header-contact">
                        <ul>
                           <li><span>Phone :</span> + 92 312 061 1171</li>
                           <li><span>Email :</span> lawservice000@gmail.com</li>
                           <li><a href="#">Free Consultation</a></li>
                        </ul>
                   </div>
                               
                   <ul class="menuzord-menu menuzord-menu-bg">
                        <li  class="active"><a href="index.php">HOME</a>      
                        </li>
                        <li><a href="about-us.php">ABOUT</a>                                         
                        </li>
                        <li><a href="blog.php">BLOG</a>
                        </li>
                        <li><a href="#">CATEGORIES</a>
                            <ul class="dropdown">
                            <?php
                            while ($row = mysqli_fetch_assoc($result)) 
                            {
                                                            
                                echo "<li><a href='".$row['cat_name'].".php'>".$row['cat_name']."</a></li>";
                               // echo $row["cat_name"];
                             }
                            
                            ?>
                            </ul>
                        </li>  
                        <li><a href="lawyers2.php">SEARCH BY LAWYER</a>                      
                        <li><a href="contact.php">CONTACT</a>
                        </li>
                        <?php
	if ($user_id == null) {
?>
                        <li><a href="#">REGISTER</a>
                            <ul class="dropdown">
                                <li><a href="lawyer-register.php">JOIN AS LAWYER</a></li>
                                <li><a href="user-register.php">HIRE A LAWYER</a></li>
                            </ul>
                        </li>
                        <li><a href="login.php">LOGIN</a>
                        </li>
                        <?php
	}
	else{
	?>                   
    <li><a href="#">My Account</a>
                            <ul class="dropdown">
                                <li><a href="logout.php">SignOut</a></li>
                            </ul>
                        </li>
                        <?php 
	}
	?>                        
                   </ul>
                </div>
            </div>
        </div>
    </header>
