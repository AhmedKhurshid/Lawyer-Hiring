<?php
include ('connection.php');
include ('sidebar.php');
?>



<body class="crm_body_bg">

<section class="main_content dashboard_part">
        <div class="main_content_iner ">

 
            <div>   
            <h1 class="text-center">About Us</h1>
            <hr>
        </div> 


        <form method="post" >
    <div class="row" >
    <div class="col-sm-4">
    <input type="text" placeholder="Add image" id="img" class="form-control form-group">
    </div>
    <div class="col-sm-4">
    
    <input type="text" placeholder="Add Heading" id="heading" class="form-control form-group">
    </div>
    
</div>

<div class="row" >
    <div class="col-sm-12">
    
<textarea id="text" placeholder="Describe Heading"></textarea>
    </div>
</div>

<div class="row">
<input type="button" value="Upload" id="upload" class="btn btn-outline-success">


</div>

</form>

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
      view_about();
    }

});
    });



    function view_about(){


$.ajax({

type:"POST",
url:"view_about.php",
datatype:"html",
success:function(data){
$("#about").html(data);
}

});


}
view_about();

})
</script>

<?php


$query=mysqli_query($conn,"SELECT * FROM `about` ");

if ($query !=null) {
 

    echo"
    <table id='data' class='table table-hover table-stripped table-bordered'>
    <tr> <th><b>img</b></th>
    <th><b>Heading</b></th>
    <th><b>Text</b></th>
    <th><b>Update</b></th>
 
    
    </tr>";

while ($row=mysqli_fetch_array($query)) {
    ?>
   
    
    <tr>
    <td><?php echo $row[1] ?></td>
    <td ><?php echo $row[2] ?></td>
    <td ><?php echo $row[3] ?></td>

    
  
   <td><a href="edit_about.php?id=<?php echo $row[0];?>" class="btn btn-success" data-toggle='modal' data-target='exampleModal' >Update</td>
   
   
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