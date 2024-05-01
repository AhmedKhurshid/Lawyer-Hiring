<?php

include('connection.php');





$id =$_GET["id"];

$sql="SELECT * FROM `lawyer_categories` WHERE `cat_id` = $id " ;
$result=mysqli_query($conn,$sql);

$row=mysqli_fetch_array($result);

if (isset($_POST['update'])) {
    $category=$_POST['category'];
    $q="UPDATE `lawyer_categories` SET `cat_name`='$category' WHERE `cat_id`='$id'";
    $run=mysqli_query($conn,$q);

   

    if ($run) { $message = '<div class="alert alert-success text-center">Record Updated Successfully</div>'; 
    header('location:lawyer_category.php');
    
    }

else {
    $failed = '<div class="alert alert-danger text-center">Error Occured While Updating Category</div>';  
}


}
include('sidebar.php');
?>



<body class="crm_body_bg">

<section class="main_content dashboard_part">
        <div class="main_content_iner ">
            <div class="container plr_30 body_white_bg pt_30">

   
            <div>   
            <h1 class="text-center" style="font-size:40px;">Update Category</h1>
            <hr>
        </div> 



        <form method="post" >
        <div><?php if(isset($message)) { echo $message; } ?></div>
        <div><?php if(isset($fail)) { echo $fail; } ?></div>


    <div class="row" >
    <div class="col-sm-4">
    
    <input type="text" value="<?php echo $row[1] ?>" name="category" class="form-control form-group" style="height:40px;font-size:15px;">
    </div>
    </div>
    <br>

    <button type="submit" name="update" class="btn btn-outline-success">Update Category</button>  




</form>



</div>
</div>
</section>

</body>