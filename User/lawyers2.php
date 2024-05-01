<?php 


include 'connection.php';
include 'header.php';


if(isset($_GET['id']))
{
    $q="SELECT * FROM `lawyer_info` inner join law_by_cat ON law_by_cat.lawyer_id=lawyer_info.l_id inner JOIN lawyer_categories on lawyer_categories.cat_id= law_by_cat.cat_id where lawyer_categories.cat_id= ".$_GET['id'];
    ;

}
else
{
    $q="SELECT * FROM `lawyer_info` inner join law_by_cat ON law_by_cat.lawyer_id=lawyer_info.l_id inner JOIN lawyer_categories on lawyer_categories.cat_id= law_by_cat.cat_id";

}
$res=mysqli_query($conn,$q);



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
    <section class="page-title-area blog-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-title-padding">
                        <div class="page-title-content text-center">
                            
                           <h2>Search By Lawyer</h2>
                        </div>
                        <div class="breadcrumbs text-center">
                           <ul class="page-breadcrumbs">
                               <li><a href="#">home</a></li>
                               <li><a href="#">Search By Lawyer </a></li>
                           </ul>                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> 
    <!-- =========================
     FEATURE TYPOGRAPHY SECTION
    ============================== -->      
    
    <section class="feature-typo h-f-typo">
        <div class="container">
            <div class="row">                
                <div class="col-md-9 col-md-push-3">
                    <div class="shop-product-content-heading clearfix">
                        <div class="shop-product-left">
                            <span>Sort by:</span>
                            <div class="dropdown shop-m-h-right-content shop-product-dropdown">
                                <button class="btn dropdown-toggle" type="button" data-toggle="dropdown">Default Sorting
                                <span><i class="fa fa-angle-down"></i></span></button>
                                <ul class="dropdown-menu">
                                    <li><a href="#">sort by populerity</a></li>
                                    <li><a href="#">sort by rating</a></li>
                                    <li><a href="#">sort by low to high</a></li>
                                    <li><a href="#">sort by high to low</a></li>
                                </ul>
                            </div>
                            <span>Show:</span>
                            <div class="dropdown shop-m-h-right-content shop-product-dropdown">
                                <button class="btn dropdown-toggle" type="button" data-toggle="dropdown">10 items / page
                                <span><i class="fa fa-angle-down"></i></span></button>
                                <ul class="dropdown-menu">
                                    <li><a href="#">10 items / page</a></li>
                                    <li><a href="#">8 items / page</a></li>
                                    <li><a href="#">5 items / page</a></li>
                                    <li><a href="#">3 items / page</a></li>
                                </ul>
                            </div>                            
                        </div>
                        <div class="shop-product-right">
                            <span>View as:</span>
                            <span><i class="fa fa-th-large"></i></span>
                            <span><i class="fa fa-th-list"></i></span>
                        </div>
                    </div>  
                    <div class="shop-main-content">

                    
               
                    </div>
                    <div class="row">
                        <div class="col-md-12 blog-pagination shop-pagination text-center clearfix">
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

<?php
if(isset($_POST['keyword'])){

$keyword=$_POST['keyword'];
$query= mysqli_query($conn,"SELECT * FROM `lawyer_info` WHERE `l_name` LIKE '%$keyword%'");

}
?>

                <div class="col-md-3 col-md-pull-9 l-s-r-l-out">
                    <div class="right-sidebar">
                        <div class="search-bar">
                            <form method="post">
                                <input type="text" name="keyword" id="keyword" value="" class="sidebar-input-text" placeholder="Type and hit enter ...">
                                <i class="fa fa-search"></i>
                            </form>
                        </div> <!-- end search-bar -->
                        <div class="sidebar-category sidebar-inner">
                            <h2>Categories</h2>
                            <ul>
                            <?php
                            $sql = "SELECT * FROM lawyer_categories";
                            $result= mysqli_query($conn,$sql);
                            while ($row2 = mysqli_fetch_array($result)) 
                            {
                                                            
                              echo '<li><a href="" class="cat" data-id="'.$row2[0].'"><i class="fa fa-long-arrow-right"></i>'.$row2[1].'</a></li>';
                               
                            }
                            
                            ?>
                               
                            </ul>
                        </div>
                    </div>
                </div>  
            </div>
        </div>                      
    </section>
    
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

<script>
    $(document).ready(function(){
        function showdata(){

     $.ajax({
     url :"showdata.php",
     type:"post",
     data:{"abc":"dfd"},
     success:function(data){
     $(".shop-main-content").html(data);
     }

     });


     $('#keyword').keyup(function(){


var search =$('#keyword').val();
$.ajax({
     url :"showdata.php",
     type:"post",
     data:{"search":search},
     success:function(data){
     $(".shop-main-content").html(data);
     }

     });


        });

        $('.cat').on("click",function(e){

e.preventDefault();
var cat =$(this).attr("data-id");
$.ajax({
     url :"showdata.php",
     type:"post",
     data:{"cat":cat},
     success:function(data){
     $(".shop-main-content").html(data);
     }

     });

        });



        }
showdata();
    
    });
</script>


<?php

include 'footer.php';

?>