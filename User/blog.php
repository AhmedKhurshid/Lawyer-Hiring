<?php

include 'connection.php';

include 'header.php';

$query= mysqli_query($conn,"SELECT * FROM `blog`");
?>


<style>

    .blog-bg{
    background: url(../User/images/page-titles/btt.jpg);
    background-size:cover;
}

    </style>


    <!-- =========================
     PAGE TITLE SECTION
    ============================== -->  
    <section class="page-title-area blog-bg"                                                   >
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-title-padding">
                        <div class="page-title-content text-center">
                           <p>Our Blog</p> 
                           <h2>Lawyer Blog</h2>
                        </div>
                        <div class="breadcrumbs text-center">
                           <ul class="page-breadcrumbs">
                               <li><a href="#">home</a></li>
                               <li><a href="#">Lawyer Blog</a></li>
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

    <section class="testimonial-area home-2-testimonial-area">
        <div class="testimonial-content-area">
            <div class="container">
                <div class="row">
                    <div class="t-b-content-area blog-content-area clearfix">
                        <div class="col-md-12 no-padding blog-custom-padding">
                            <?php
                            while($row = mysqli_fetch_Array($query)){?>
                            <div class="col-md-6 col-sm-6">
                                <div class="t-b-details t-b-single tb-grid">
                                    <div class="t-b-img" >
                                        <img style="height:299px;" src="<?php echo $row[2]?>" class="img-responsive">
                                    </div>
                                    <div class="t-b-comment blog-post-comment">
                                        <p><span><a href="#"><i class="fa fa-comments"></i></a><a href="#">15</a> </span>
                                           <span><a href="#"><i class="fa fa-eye"></i></a> 11</span></p>
                                    </div>
                                    <h2 style="color:#d5aa6d;"><?php echo $row[1]?></h2>
                                    <p><?php echo $row[3]?></p>
                                </div>
                            </div>
                        <?php
                        }
                        ?>
                        </div>    
                    </div>
                </div>
            </div>       
        </div>       
    </section><!-- end testimonial area -->    

<?php

include 'footer.php';

?>