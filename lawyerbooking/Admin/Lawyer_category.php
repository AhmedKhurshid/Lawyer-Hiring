<?php
include 'connection.php';
include 'sidebar.php';
?>

<br>

<div>
<h1 class="text-center" style=" font-weight: bold;" >Add Lawyer Category</h1>
</div>

<br>


<form method="post">
  <div class="row">

    <div class="col-sm-4">

    <input class="form-control" placeholder="Add lawyer category" id="add_category" required="" type="text" name="">

    </div>
    <div class="col-sm-4">

    <input class="btn btn-success"  id="add" value="Add" type="button" name="">
    
    </div>
    
  </div>
  
</form>

<br>


<div class="row">
<div id="msg_box" class="col-sm-12 text-center"></div>
<div id="all_categories" class="col-sm-12" style="width:50%;"></div>

</div>

<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

<script>
$(document).ready(function(){

  $('#add').on('click',function(){

      var category = $('#add_category').val();

      $.ajax({

url:"all_insert.php",
type:"post",
data:{
  category:category,
},
success:function(data){
  $("#msg_box").html(data);
  
}



      });

  });



});


</script>


<?php

$query=mysqli_query($conn,"SELECT * FROM `lawyer_categories`");

if($query != null ) {

  echo"
    <table id='data' class='table table-hover table-stripped table-bordered'>
    <tr> <th><b> Category Name</b></th>
    <th><b>Update</b></th>
    <th><b>Delete</b></th>
    
    </tr>";

    while ($row=mysqli_fetch_array($query)) {
      ?>
     
      
      <tr>
      <td><?php echo $row[1] ?></td>
  
   <td><a href="category_update.php?id=<?php echo $row[0];?>" class="btn btn-success" >Update</td>
   <td><a href="delete_cat.php?id=<?php echo $row[0];?>" class="btn btn-danger" >Delete</td>
  
      </tr>
      
      
  
      <?php
  }
  
  
  
  echo "</table>";




  }

  else {
    echo '<div class="alert alert-danger text-center">There Is Nothing To show You.</div>';  

}
?>





<?php
include 'footer.php';
?>  