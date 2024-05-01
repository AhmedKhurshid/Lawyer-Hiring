
<?php

include 'connection.php';
include 'header.php';


$l_id =$_GET["id"];

$query= mysqli_query($conn,"SELECT * FROM `lawyer_info` inner join law_by_cat ON law_by_cat.lawyer_id=lawyer_info.l_id inner JOIN lawyer_categories on lawyer_categories.cat_id= law_by_cat.cat_id WHERE l_id = $l_id");







?>

<?php while($row = mysqli_fetch_Array($query)){?>
    
    <section class="page-title-area attorney-page-title-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-title-padding">
                        <div class="page-title-content text-center">
                           <p>Single Attorney</p> 
                           <h2><?php echo $row[1]?></h2>
                        </div>
                        <div class="breadcrumbs text-center">
                           <ul class="page-breadcrumbs">
                               <li><a href="lawyers2.php">home</a></li>
                               <li><a href="#"><?php echo $row[1]?></a></li>
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

    <section class="attorney-single-area">
        <div class="testimonial-content-area">
            <div class="container">
                <div class="row">
                    <div class="attorney-single-content">
                        <div class="col-md-3 col-sm-3">
                            <div class="team-description">
                                <div class="team-content">
                                    <div class="team-img">
                                        <img src="<?php echo $row[5]?>" alt="team-member">
                                    </div>
                                </div>
                                <div class="member-name text-center">
                                    <h2><?php echo $row[1]?></h2>
                                    <span></span>
                                </div>
                            </div>
                            <div class="attorney-single-btn">
                                <a href="appointment.php?id=<?php echo $row[0]?>"Book AN Appointment</a>
                            </div>

                        </div>
                        <div class="col-md-6 col-sm-6 blog-custom-padding">
                            <div class="attorney-introduction">
                                <h2>About <?php echo $row[1]?> :</h2>
                                <p><?php echo $row[8]?></p>

                                </ul>
                                <h2>Attorny Skills :</h2>
                                <div class="progressbar">
                                    
                                </div>
                                <h2 class="a-c-h-p">Practice Areas :</h2>
                                <div class="attorney-practice clearfix">
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="p-c-practice-wrap text-center">
                                            <div class="p-c-practice-1 text-center">
                                                <i class="fa fa-child"></i>
                                                <h2><a href="#">Family Law</a></h2>
                                                <p>Family law is an area of the law that deals with family matters & domestic relations, including adoption and surrogacy.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="p-c-practice-wrap text-center">
                                            <div class="p-c-practice-1 text-center">
                                                <i class="fa  fa-fire"></i>
                                                <h2><a href="#">Fire Accident</a></h2>
                                                <p>Fire accidents can result in catastrophic personal injury and devastating damage. Every year, billions of doll</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="p-c-practice-wrap text-center">
                                            <div class="p-c-practice-1 text-center">
                                                <i class="fa fa-shopping-cart"></i>
                                                <h2><a href="#">Shoplifting</a></h2>
                                                <p>Fire accidents can result in catastrophic personal injury and devastating damage. Every year, billions of doll</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>     
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3">
                            <div class="right-sidebar">
                                <div class="sidebar-category sidebar-inner">
                                    <h2 class="p-s-first-child">Categories</h2>
                                    <ul>
                                        <li><?php echo $row[13]?></li>
                                    </ul>
                                </div>
                                <div class="sidebar-inner">
                                    <h2>Download Brochures</h2>
                                    <ul class="d-brochures">
                                        <li><a href="#"><i class="fa fa-gavel"></i>All Practice Areas</a></li>
                                        <li><a href="#"><i class="fa fa-user"></i>Family Law</a></li>
                                        <li><a href="#"><i class="fa fa-heart"></i>Criminal Defence</a></li>
                                    </ul>                                    
                                </div>
                                
                                </div>
                            </div>
                        </div>                                                   
                    </div>
                </div>
            </div>       
        </div>       
    </section><!-- end testimonial area -->   

    <?php

}
?>








<?php

include 'footer.php';

?>