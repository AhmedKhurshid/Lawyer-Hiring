<?php

include ('connection.php');

$id =$_GET["id"];

$sql="SELECT * FROM `about` WHERE `id` = $id " ;
$result=mysqli_query($conn,$sql);

$row=mysqli_fetch_array($result);

if (isset($_POST['update'])) {
    $s_heading=$_POST['s_heading'];
    $heading=$_POST['heading'];
    $text=$_POST['text'];
    $text2=$_POST['text2'];
    $s_heading2=$_POST['s_heading2'];
    $heading2=$_POST['heading2'];
    $text3=$_POST['text3'];
    $cases1=$_POST['cases1'];
    $desc1=$_POST['desc1'];
    $cases2=$_POST['cases2'];
    $desc2=$_POST['desc2'];
    $cases3=$_POST['cases3'];
    $desc3=$_POST['desc3'];
    $cases4=$_POST['cases4'];
    $desc4=$_POST['desc4'];


    $q="UPDATE `about` SET `Short_heading`='$s_heading',`heading`='$heading',`text`='$text',`About_para`='$text2',`Short_heading2`='$s_heading2',`heading2`='$heading2', `para_2`='$text3',
    `cases_one`='$cases1',`cases_one_desc`='$desc1',`cases_two`='$cases2',`cases_two_desc`='$desc2',`cases_three`='$cases3',`cases_three_desc`='$desc3',`cases_four`='$cases4',
    `cases_four_desc`='$desc4' WHERE `id`='$id'";
    
    $run=mysqli_query($conn,$q);

   

    if ($run) {
        $message = '<div class="alert alert-success text-center">About US Updated Successfully</div>';  
        header('location:about.php');
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
            <h1 class="text-center" style="font-size:40px; font-weight: bold;">Update About</h1>
        </div> 

            <br>

        <form method="post" >
        <div><?php if(isset($message)) { echo $message; } ?></div>
        <div><?php if(isset($fail)) { echo $fail; } ?></div>


    <div class="row" >
    <div class="col-sm-4">
    
    <input type="text" value="<?php echo $row[1] ?>" name="s_heading" class="form-control form-group" style="height:40px;font-size:15px;">
    </div>
    <div class="col-sm-4">
    
    <input type="text" value="<?php echo $row[2] ?>" name="heading" class="form-control form-group" style="height:40px;font-size:15px;">
    </div>
    </div>

   <div class="row" >
    <div class="col-sm-8">
    
<textarea name="text" cols="80" rows="7" class="form-control form-group">
<?php echo $row[3] ?>
</textarea>
</div>
    </div>

    <div class="row" >
    <div class="col-sm-8">
    
<textarea name="text2" cols="80" rows="7" class="form-control form-group">
<?php echo $row[4] ?>
</textarea>
</div>
    </div>
   
    <div class="row" >
    <div class="col-sm-4">
    
    <input type="text" value="<?php echo $row[5] ?>" name="s_heading2" class="form-control form-group" style="height:40px;font-size:15px;">
    </div>
    <div class="col-sm-4">
    
    <input type="text" value="<?php echo $row[6] ?>" name="heading2" class="form-control form-group" style="height:40px;font-size:15px;">
    </div>
    </div>

    <div class="row" >
    <div class="col-sm-8">
    
<textarea name="text3" cols="80" rows="7" class="form-control form-group">
<?php echo $row[7] ?>
</textarea>
</div>
    </div>

    <div class="row" >
    <div class="col-sm-4">
    
    <input type="text" value="<?php echo $row[8] ?>" name="cases1" class="form-control form-group" style="height:40px;font-size:15px;">
    </div>
    </div>
    
    <div class="row" >
    <div class="col-sm-8">
    
<textarea name="desc1" cols="80" rows="7" class="form-control form-group">
<?php echo $row[9] ?>
</textarea>
</div>
    </div>

    <div class="row" >
    <div class="col-sm-4">
    
    <input type="text" value="<?php echo $row[10] ?>" name="cases2" class="form-control form-group" style="height:40px;font-size:15px;">
    </div>
    </div>
    
    <div class="row" >
    <div class="col-sm-8">
    
<textarea name="desc2" cols="80" rows="7" class="form-control form-group">
<?php echo $row[11] ?>
</textarea>
</div>
    </div>

    <div class="row" >
    <div class="col-sm-4">
    
    <input type="text" value="<?php echo $row[12] ?>" name="cases3" class="form-control form-group" style="height:40px;font-size:15px;">
    </div>
    </div>
    
    <div class="row" >
    <div class="col-sm-8">
    
<textarea name="desc3" cols="80" rows="7" class="form-control form-group">
<?php echo $row[13] ?>
</textarea>
</div>
    </div>

    <div class="row" >
    <div class="col-sm-4">
    
    <input type="text" value="<?php echo $row[14] ?>" name="cases4" class="form-control form-group" style="height:40px;font-size:15px;">
    </div>
    </div>
    
    <div class="row" >
    <div class="col-sm-8">
    
<textarea name="desc4" cols="80" rows="7" class="form-control form-group">
<?php echo $row[15] ?>
</textarea>
</div>
    </div>

    <br>

    <button type="submit" name="update" class="btn btn-success">Update About Us</button>  




</form>



</div>
</div>
</section>

</body>

<?php

include 'footer.php';

?>