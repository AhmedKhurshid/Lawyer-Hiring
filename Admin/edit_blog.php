<?php

include ('connection.php');

$id =$_GET["id"];

$sql="SELECT * FROM `blog` WHERE `id` = $id " ;
$result=mysqli_query($conn,$sql);

$row=mysqli_fetch_array($result);

if (isset($_POST['update'])) {
    $img=$_POST['image'];
    $heading=$_POST['heading'];
    $text=$_POST['text'];

    $q="UPDATE `blog` SET `b_heading`='$heading',`b_image`='$img',`b_text`='$text' WHERE `id`='$id'";
    $run=mysqli_query($conn,$q);

   

    if ($run) {
        $message = '<div class="alert alert-success text-center">blog Updated Successfully</div>';
        header('location:blog.php');
}

else {
    $failed = '<div class="alert alert-danger text-center">Error Occured While Updating About Us</div>';  
}


}

include ('sidebar.php');

?>

    <br>

    <style>

.container{
    width:1000px;
}

</style>



<body class="crm_body_bg">

<section class="main_content dashboard_part">
        <div class="main_content_iner ">
            <div class="container plr_30 body_white_bg pt_30">

   
            <div>   
            <h1 class="text-center" style="font-size:40px; font-weight:bold;">Update Blog</h1>
        </div> 

        <br>

        <form method="post" >
        <div><?php if(isset($message)) { echo $message; } ?></div>
        <div><?php if(isset($fail)) { echo $fail; } ?></div>


    <div class="row" >
    <div class="col-sm-4">
    
    <input type="text" value="<?php echo $row[1] ?>" name="heading" class="form-control form-group" style="height:40px;font-size:15px;">
    </div>
    <div class="col-sm-4">
    
    <input type="text" value="<?php echo $row[2] ?>" name="image" class="form-control form-group" style="height:40px;font-size:15px;">
    </div>
    </div>

   <div class="row" >
    <div class="col-sm-12">
    
<textarea name="text" cols="80" rows="7" class="form-control form-group">
<?php echo $row[3] ?>
</textarea>
</div>
    </div>
   
    <br>

    <button type="submit" name="update" class="btn btn-success">Update blog</button>  




</form>



</div>
</div>
</section>

</body>

<?php

include 'footer.php';

?>