<?php
include ('connection.php');
include ('sidebar.php');

if (isset($_POST['upload'])) {
    
    $heading=$_POST['heading'];

    $img_tmp_name=$_FILES['poster']['tmp_name'];
    $img_name="images/".$_FILES['poster']['name'];
    move_uploaded_file($img_tmp_name,$img_name);
    
    $text=$_POST['text'];
    
    
    $q="INSERT INTO `blog`(`id`,`b_heading`,`b_image`, `b_text`) VALUES ('','$heading','$img_name','$text')";
    
    $run=mysqli_query($conn,$q);
    
    
    echo '<div class="alert alert-success">Content Successfully Added</div>';  
    
    }



?>

<style>

    .container{
        width:1000px;
    }

</style>




<body class="crm_body_bg">

<section class="main_content dashboard_part">
        <div class="container main_content_iner ">


            <br>

            <div>   
            <h1 class="text-center" style="font-size:40px; font-weight: bold;">Blog</h1>
        </div> 

        <br>

        <form method="post" enctype="multipart/form-data">
    <div class="row" >
    <div class="col-sm-4">
    
    <input type="text" placeholder="Add Heading" id="heading" class="form-control form-group">
    </div>
    <div class="col-sm-4">
    <input type="file" placeholder="Add image" id="img" name="poster" class="form-control form-group">
    </div>



    <div class="col-sm-12">
    
<textarea id="text" placeholder="text"></textarea>
    </div>


&nbsp;&nbsp;&nbsp;<input type="button" value="Upload" id="upload" name="upload" class="btn btn-success">


</div>

</form>

<br>

<div class="row">

<div id="msg" class="col-sm-12 text-center" ></div>

<div id="about"  class="col-sm-12">
            

</div>

</div>


       </div>
  </div>
          


<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

<script>
$(document).ready(function(){

    $('#upload').on('click',function(){
        var heading = $('#heading').val();
        var text = $('#text').val();
        var img = $('#img').val();

        $.ajax({

url:"all_insert.php",
type:"post",
data:{
    heading:heading,
    text:text,
    img:img
},
success:function(data){
    $("#msg").html(data);
      view_blog();
    }

});
    });



    function view_blog(){


$.ajax({

type:"POST",
url:"view_blog.php",
datatype:"html",
success:function(data){
$("#about").html(data);
}

});


}
view_blog();

})
</script>

<?php


$query=mysqli_query($conn,"SELECT * FROM `blog`");

if ($query !=null) {
 

    echo"
    <table id='data' class='table table-hover table-stripped table-bordered'>
    <tr>
    <th><b> Heading</b></th>
    <th><b> img</b></th> 
    <th><b>Text</b></th>
    <th><b>Update</b></th>
 
    
    </tr>";

while ($row=mysqli_fetch_array($query)) {
    ?>
   
    
    <tr>
    <td><?php echo $row[1] ?></td>
    <td ><img src="<?php echo $row[2] ?>"></td>
    <td ><?php echo $row[3] ?></td>

    
  
   <td><a href="edit_blog.php?id=<?php echo $row[0];?>" class="btn btn-success">Update</td>
   
    </tr>
    
    

    <?php
}



echo "</table>";
}


else {
    echo '<div class="alert alert-danger text-center">There Is Nothing To show You.</div>';  
}
?>

</body>

<?php

include 'footer.php';

?>