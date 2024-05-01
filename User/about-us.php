<?php

include 'connection.php';

include 'header.php';

$query= mysqli_query($conn,"SELECT * FROM `about`");
?>

    <style>

    .about-bg{
    background: url(../User/images/page-titles/ab22.jpg);
    background-size:cover;
}

    </style>


    <!-- =========================
     PAGE TITLE SECTION
    ============================== -->  
    <section class="page-title-area about-bg" >
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-title-padding">
                        <div class="page-title-content text-center">
                           <p>Our History</p> 
                           <h2>About Us</h2>
                        </div>
                        <div class="breadcrumbs text-center">
                           <ul class="page-breadcrumbs">
                               <li><a href="#">home</a></li>
                               <li><a href="#">About Us</a></li>
                           </ul>                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> 

    <!-- =========================
     START TESTMONIAL SECTION
    ============================== -->

    <?php

    $row=mysqli_fetch_array($query)
    ?> 

    <section class="our-history-area">
        <div class="welcome-title-area">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-6">
                        <div class="Title-area">
                            <h3><?php echo $row[1]?></h3>
                            <h2><?php echo $row[2]?></h2>
                            <p><?php echo $row[3]?></p>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <div class="asset-button btn-text-left text-right top-margin">
                            <button type="button" class="btn btn-default">Find Out More About Trust</button>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end title. it will use all pages title --> 



        <div class="history-content-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 no-padding">
                        <div class="history-right-content">
                            <div class="col-sm-6 col-md-6"> 
                                <div class="progress-left-img">
                                    <img src="images/progress-left-images.png" class="img-responsive" alt="">
                                    <span><i class="fa fa-shield"></i></span>                                
                                </div>  
                            </div> 
                            <div class="col-sm-6 col-md-6">
                                <div class="history-right-content-text">
                                    <p><?php echo $row[4]?></p>
                                    <img src="images/history-right-sign.png" alt="">
                                </div>
                            </div>
                        </div>                        
                    </div>
                    <div class="col-md-4">
                        <div class="progressbar">
                            <div class="progress_cont">
                                <div class="skill">Criminal Law<span class="pull-right"></span> </div>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 0%"> <span class="sr-only">94% Complete (success)</span> </div>
                                </div>
                            </div>
                            <div class="progress_cont">
                                <div class="skill">Indurance <span class="pull-right"></span> </div>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 0%"> <span class="sr-only">94% Complete (success)</span> </div>
                                </div>
                            </div>
                            <div class="progress_cont">
                                <div class="skill">Financial Law <span class="pull-right"></span> </div>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 0%"> <span class="sr-only">94% Complete (success)</span> </div>
                                </div>
                            </div>
                            <div class="progress_cont">
                                <div class="skill">Civil Litigation <span class="pull-right"></span> </div>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 0%"> <span class="sr-only">94% Complete (success)</span> </div>
                                </div>
                            </div>
                            <div class="progress_cont">
                                <div class="skill">Other Areas <span class="pull-right"></span> </div>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 0%"> <span class="sr-only">94% Complete (success)</span> </div>
                                </div>
                            </div>
                        </div>
                    </div>    
                </div>
            </div>
        </div>              
    </section><!-- end testimonial area -->

    
    <!-- =========================
     START PRACTICE SECTION
    ============================== -->

    <section class="practice-area home-2-practice-area">
        <div class="welcome-title-area">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-6">
                        <div class="Title-area">
                            <h3><?php echo $row[5]?></h3>
                            <h2><?php echo $row[6]?></h2>
                            <p><?php echo $row[7]?></p>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <div class="asset-button btn-text-left text-right top-margin">
                            <button type="button" class="btn btn-default">View All Practice Areas</button>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end title. it will use all pages title -->

        <!-- start practice content area -->
        <div class="container">
            <div class="row">
                <div class="h-2-practice-content clearfix">
                    <div class="col-sm-6 col-md-3">
                        <div class="h-2-p-c-details">
                            <div class="h-2-p-c-default">
                                <i class="fa fa-child"></i>
                                <h2><?php echo $row[8]?></h2>
                                <p><?php echo $row[9]?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="h-2-p-c-details">
                            <div class="h-2-p-c-default">
                                <i class="fa  fa-fire"></i>
                                <h2><?php echo $row[10]?></h2>
                                <p><?php echo $row[11]?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="h-2-p-c-details">
                            <div class="h-2-p-c-default">
                                <i class="fa fa-shopping-cart"></i>
                                <h2><?php echo $row[12]?></h2>
                                <p><?php echo $row[13]?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="h-2-p-c-details">
                            <div class="h-2-p-c-default">
                                <i class="fa fa-female"></i>
                                <h2><?php echo $row[14]?></h2>
                                <p><?php echo $row[15]?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>        
    </section> <!-- end practice area -->
    
<?php

include 'footer.php';

?>