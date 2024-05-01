<?php

include 'connection.php';
include 'header.php';






if (isset($_POST['register'])) {
    $date = $_POST['date'];  
    $user_id = $user_id;
    $l_id =$_GET["id"];


    // working to checking user 
    $sqli = "SELECT * FROM `users` WHERE `id` = '$user_id'" ;
    $result2 = mysqli_query($conn, $sqli);
    $num = mysqli_num_rows($result2);
                           
    if($num != 0){
        
        
        $sql=" INSERT INTO `appointment`(`app_id`, `app_date`, `user_id`, `lawyer_id`) VALUES ('','$date','$user_id','$l_id')";
        $result = mysqli_query($conn, $sql);
    


    }    
    
    else {
            
        echo "<h1><center>Your are lawyer also.</center></h1>";
            
        }
    





}


?>
<section class="attorney-single-area">


<h1><?php echo $user_id?>
</h1>
<form method="post">
                                
                                <label>Appointment Date</label>
                                <div class="col-md-6 input-group">
                                    <input type="date" name="date" class="form-control" required="" placeholder="" autofocus> 
                                </div>

                                <br>

                               

                                <div class="col-sm-12 no-padding contact-us-custom-padding">
                                    <input type="submit" id="contact_submit" class="btn btn-dm" name="register">
                                </div>
                            </form> 
                            






</section>