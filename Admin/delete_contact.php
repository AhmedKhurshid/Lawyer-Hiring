<?php

include('connection.php');
echo $_GET['id'];

$id= $_GET['id'];
 $query = "DELETE FROM `contact` WHERE `id` = '$id'";
 $run= mysqli_query($conn,$query);

 if($run){
    echo '<div class="alert alert-success">Message Successfully Deleteds</div>';
    header('location:contact.php');    

}
else {
    echo "Don't Delete";
}


?>