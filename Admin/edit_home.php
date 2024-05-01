<?php

include ('connection.php');

$id =$_GET["id"];

$sql="SELECT * FROM `home` WHERE `h_id` = $id";
$result=mysqli_query($conn,$sql);

$row=mysqli_fetch_Array($result);

if (isset($_POST['update'])) {
        $Qualified=$_POST['Qualified'];
        $count01=$_POST['count01'];
        $Trusted=$_POST['Trusted'];
        $count02=$_POST['count02'];
        $Cases=$_POST['Cases'];
        $count03=$_POST['count03'];
        $Awards=$_POST['Awards'];
        $count04=$_POST['count04'];
    

        $q="UPDATE `home` SET `Qualified`='$Qualified',`count01`='$count01',`Trusted`='$Trusted',`count02`='$count02',`Cases`='$Cases',`count03`='$count03',`Awards`='$Awards',`count04`='$count04' 
        WHERE `h_id`='$id'";
    
    $run=mysqli_query($conn,$q);

   

    if ($run) {
        $message = '<div class="alert alert-success text-center">About US Updated Successfully</div>';  
        header('location:home.php');
}

else {
    $failed = '<div class="alert alert-danger text-center">Error Occured While Updating About Us</div>';  
}


}


include ('sidebar.php');

?>


<style>

    .container{
        width:1000px;
    }

</style>

<body class="crm_body_bg">

<section class="main_content dashboard_part">
        <div class="main_content_iner ">
            <div class="container plr_30 body_white_bg pt_30">

            <br>

            <div>   
            <h1 class="text-center" style="font-size:40px; font-weight: bold;">Update Index</h1>
        </div> 

            <br>

        <form method="post" >
        <div><?php if(isset($message)) { echo $message; } ?></div>
        <div><?php if(isset($fail)) { echo $fail; } ?></div>


    <div class="row" >
    <div class="col-sm-4">
    
    <input type="text" value="<?php echo $row[1] ?>" name="Qualified" class="form-control form-group" style="height:40px;font-size:15px;">
    </div>
    <div class="col-sm-4">
    
    <input type="text" value="<?php echo $row[2] ?>" name="count01" class="form-control form-group" style="height:40px;font-size:15px;">
    </div>
    </div>

    <div class="row" >
    <div class="col-sm-4">
    
    <input type="text" value="<?php echo $row[3] ?>" name="Trusted" class="form-control form-group" style="height:40px;font-size:15px;">
    </div>
    <div class="col-sm-4">
    
    <input type="text" value="<?php echo $row[4] ?>" name="count02" class="form-control form-group" style="height:40px;font-size:15px;">
    </div>
    </div>

    <div class="row" >
    <div class="col-sm-4">
    
    <input type="text" value="<?php echo $row[5] ?>" name="Cases" class="form-control form-group" style="height:40px;font-size:15px;">
    </div>
    <div class="col-sm-4">
    
    <input type="text" value="<?php echo $row[6] ?>" name="count03" class="form-control form-group" style="height:40px;font-size:15px;">
    </div>
    </div>

    <div class="row" >
    <div class="col-sm-4">
    
    <input type="text" value="<?php echo $row[7] ?>" name="Awards" class="form-control form-group" style="height:40px;font-size:15px;">
    </div>
    <div class="col-sm-4">
    
    <input type="text" value="<?php echo $row[8] ?>" name="count04" class="form-control form-group" style="height:40px;font-size:15px;">
    </div>
    </div>

    

    <br>

    <button type="submit" name="update" class="btn btn-success">Update Home Page</button>  




</form>



</div>
</div>
</section>

</body>

<?php

include 'footer.php';

?>