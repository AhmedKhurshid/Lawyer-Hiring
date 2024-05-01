<?php

include('connection.php');
echo $_GET['id'];
if(isset($_GET['id'])){

    $id= $_GET['id'];
 $query = "DELETE FROM `lawyer_categories` WHERE `cat_id` = '$id'";
 $run= mysqli_query($conn,$query);

 if($run){
    echo '<div class="alert alert-success">Message Successfully Deleteds</div>';    

}
}

?>