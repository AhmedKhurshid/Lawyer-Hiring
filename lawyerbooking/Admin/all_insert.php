<?php

include 'connection.php';


    //category//


    if(isset($_POST['category'])) {

        $category=$_POST['category'];


        $q="INSERT INTO `lawyer_categories`(`cat_id`, `cat_name`) VALUES ('','$category')";

        $r=mysqli_query($conn,$q);

        echo '<div class="alert alert-success">New Category Added Successfully</div>';
    
    }

    else{
        echo '';
    }

    //delete category//
    


//About//
if (isset($_POST['heading'])) {
    
    $heading=$_POST['heading'];
    $text=$_POST['text'];
    $img=$_POST['img'];
    
    
    $q="INSERT INTO `about`(`id`,`img`, `heading`, `text`) VALUES ('','$img','$heading','$text')";
    
    $run=mysqli_query($conn,$q);
    
    
    echo '<div class="alert alert-success">Content Successfully Added</div>';  
    
    }

    //blog//
    if (isset($_POST['heading'])) {
    
        $heading=$_POST['heading'];
        $img=$_POST['img'];
        $text=$_POST['text'];
        
        
        $q="INSERT INTO `blog`(`id`,`b_heading`,`b_image`, `b_text`) VALUES ('','$heading','$img','$text')";
        
        $run=mysqli_query($conn,$q);
        
        
        echo '<div class="alert alert-success">Content Successfully Added</div>';  
        
        }

?>

