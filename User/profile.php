
<?php

include 'connection.php';
include 'header.php';


$l_id =$_GET["id"];


// this query is for catoqgories
$q4="SELECT * FROM `lawyer_categories`";
$result4=mysqli_query($conn,$q4);

if (isset($_POST['addcat'])) {
    
    $cat=$_POST['catagory'];


    $qcat="INSERT INTO `law_by_cat`(`id`, `lawyer_id`, `cat_id`) VALUES ('','$l_id','$cat')";
    $result88=mysqli_query($conn,$qcat);






}
// this query is for catoqgories


// this query is for education

$q5="SELECT * FROM `lawyer_education`";
$result5=mysqli_query($conn,$q5);




// this query is for education

$q2="SELECT * FROM `lawyer_info` WHERE `l_id` = $l_id ";
$re= mysqli_query($conn,$q2);
$row=mysqli_fetch_row($re);




if (isset($_POST['submit'])) {
    
    
    
    
    
    
    
    $l_name=$_POST['l_name'];
    $email=$_POST['email'];
    $address=$_POST['address'];
    $number=$_POST['number'];
    
    // move_uploaded_file($_FILES["image"]["tmp_name"],"images/" . $_FILES["image"]["name"]);			
    // $location1=$_FILES["image"]["name"];
     
    
    // if ($_FILES['l_img']['tmp_name']=="") {
    //             $img_name=$_POST['img'];
    //         }
    //         else {
    //           $img_tmp_name=$_FILES['l_img']['tmp_name'];
    //           $img_name="images/".$_FILES['l_img']['name'];
    //           move_uploaded_file($img_tmp_name,$img_name);
    //         }
           
    
    
    
    
    $qimg="UPDATE `lawyer_info` SET `l_name`='$l_name',`l_email`='$email',`l_phone`='$number',`l_address`='$address' WHERE `l_id`='$l_id'";
    $result=mysqli_query($conn,$qimg);
   

   
    // this query is for catoqgories
 
    // $q7="INSERT INTO `law_by_cat`(`lawyer_id`, `cat_id`) VALUES ('$l_id',$cat_id)";
  
    // this query is for education
  
    // $q9="INSERT INTO `lawyer_education`(`le_id`, `le_institute`, `le_degree`, `le_startdate`, `le_enddate`, `lawyer_id`) VALUES ('','$le_institute','','','','$l_id')";
    
    
    
    
//     if ($_FILES['l_img']['tmp_name']=="") {
//         $img_name=$_POST['img'];
//     }
//     else {
//       $img_tmp_name=$_FILES['l_img']['tmp_name'];
//       $img_name="images/".$_FILES['l_img']['name'];
//       move_uploaded_file($img_tmp_name,$img_name);
//     }
//     $q="UPDATE `lawyer_info` SET `l_name`='$l_name','l_img'='$img_name' WHERE `l_id`='$l_id', 'l_img'='$l_img' ";
    

// $result=mysqli_query($conn,$q);



// this query is for catoqgories
// $result7=mysqli_query($conn,$q7);

// this query is for education
// $result9=mysqli_query($conn,$q9);

// $result11=mysqli_query($conn,$q11);
}
if (isset($_POST['des'])) {
    $l_des=$_POST['l_des'];
    // $cat_id=$_POST['catagory'];
    
    
    $q="UPDATE `lawyer_info` SET `l_des`='$l_des' WHERE `l_id`='$l_id'";
    $result=mysqli_query($conn,$q);
   

}

?>


<style>

    .about-bg{
    background: url(../User/images/page-titles/ab22.jpg);
    background-size:cover;
}

    </style>






<div class="rev_slider_wrapper">

<div >



<section class="page-title-area about-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-title-padding">
                        <div class="page-title-content text-center">
                           
                           <h2><?php echo"$row[1]" ?></h2>
                        </div>
                        <div class="breadcrumbs text-center">
                           <ul class="page-breadcrumbs">
                               <li><a href="#">home</a></li>
                               <li><?php echo"$row[1]" ?></li>
                           </ul>                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- =========================
     START TESTMONIAL SECTION
    ============================== -->
                                       
    <section class="attorney-single-area">
        <div class="testimonial-content-area">
            <div class="container">
                <div class="row">
                    <div class="attorney-single-content">
                        <div class="col-md-3 col-sm-3">
                            <div class="team-description">
                                <div class="team-content">
                                    <div class="team-img">
                                        <img style="height:299px;" src="<?php echo"$row[5]" ?>" alt="team-member">
                                        <form method="post" action="" enctype="multipart/form-data">
                                        <div class="form-group">
     <input type="file" name="name"  >
     
   
    </div>

                                    </div>
                                </div>
                                <div class="member-name text-center">
                                    <h2>

                                    <div class="form-group">
     <label for=""> Name</label>                              
     <input type="text" name="l_name" value="<?php echo $row[1] ?> " id="" class="form-control" placeholder="" aria-describedby="helpId">
     <label for="">email address</label>
     <input type="text" name="email" value="<?php echo $row[2] ?> " id="" class="form-control" placeholder="" aria-describedby="helpId">
     <label for="">Phone number</label>
     <input type="text" name="number" value="<?php echo $row[3] ?> " id="" class="form-control" placeholder="" aria-describedby="helpId">
     <label for=""> Address</label>
     <input type="text" name="address" value="<?php echo $row[4] ?> " id="" class="form-control" placeholder="" aria-describedby="helpId">
     
   <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>
</div>                                  </h2>
                                    <p></p>
                                    <span></span>
                                </div>
                            </div>
                            

                        </div>
                        <div class="col-md-6 col-sm-6 blog-custom-padding">
                            <div class="attorney-introduction">
                            <form method="post" action="" enctype="multipart/form-data">
                                <h2> <?php echo"$row[1]" ?>:</h2>
                                <div class="lawyer_description" style="height:99px;">
                                
                                <textarea type="text"  name="l_des" value=" " id="" class="form-control" placeholder="type your description" aria-describedby="helpId">
                                <?php echo $row[8] ?>
                                </textarea>
                                
                                
                                
                                
                                </div>
                                <br>
                                <button type="submit" name="des" class="btn btn-primary">Submit description</button>                                
</form>
                                <h2>Education :</h2>
                                <div class="form-group">
				<form name="add_name" id="add_name">
					<div class="table-responsive">
						<table class="table table-bordered" id="dynamic_field">
							<tr>
								
								<td><button type="button" name="add" id="add" class="btn btn-success">Add education</button></td>
							</tr>
						</table>
						<input type="button" name="submit" id="submit" class="btn btn-info" value="Submit" />
					</div>
				</form>
            <input type="hidden" class="hiddennames">
            <input type="hidden" class="hiddendegree">
            <input type="hidden" class="hiddenstart">
            <input type="hidden" class="hiddenend">
			</div>





                                           <h2>Experience :</h2>
                                <div class="">
                                <div class="form-group">
				<form name="add_name" id="add_name">
					<div class="table-responsive">
						<table class="table table-bordered" id="dynamic_field_ex">
							<tr>
								
								<td><button type="button" name="addex" id="addex" class="btn btn-success">Add Experience </button></td>
							</tr>
						</table>
						<input type="button" name="submit" id="submitex" class="btn btn-info" value="Submit" />
					</div>
				</form>
            <input type="hidden" class="hiddennames">
            <input type="hidden" class="hiddendegree">
            <input type="hidden" class="hiddenstart">
            <input type="hidden" class="hiddenend">
			</div>



                                </div>
                                <h2 class="a-c-h-p"></h2>
                                    
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3">
                            <div class="right-sidebar">
                                <div class="sidebar-category sidebar-inner">
                                    <h2 class="p-s-first-child">Categories</h2>
                                    <form method="POST">

                                    <div class="form-group">
      <label for=""></label>
      <input class="form-control" type="hidden" type="text" value="<?php echo $row[0] ?>" name="lawyer">
      <select style="height:59px" class="form-control" name="catagory" id="">
       <?php

       while($rowc=mysqli_fetch_array($result4))
       {
           echo "<option value='$rowc[0]'>$rowc[1]</option>";

       }
       ?>
       
      </select>
    </div>
    <button type="submit" name="addcat" class="btn btn-primary">Submit</button>
    </form>
                                    
                                </div>
                                <div class="sidebar-inner">
                                    <h2></h2>
                                   






                                </div>
                                
                                </div>
                            </div>
                        </div>                                                   
                    </div>
                </div>
            </div>       
        </div>       
    </section><!-- end testimonial area -->    



    </div>














</div>
<script>
$(document).ready(function(){
	var i=1;


// add button    
	$('#add').click(function(){
		i++;
		$('#dynamic_field').append('<tr id="row'+i+'"><td><input type="text" name="name" placeholder="Enter your intitute name" class="form-control name_list" /><br><input type="text" name="degree" placeholder="Enter your degree level" class="form-control degree_list" /><br><input type="date" name="startdate" placeholder="Enter your start date" class="form-control start_list" /><br><input type="date" name="degree" placeholder="Enter your end date date" class="form-control end_list" /></td><td><button type="button" name="remove" id="'
        
        
        +i+'" class="btn btn-danger btn_remove">X</button></td></tr>');
	});
	

// remove button  

	$(document).on('click', '.btn_remove', function(){
		var button_id = $(this).attr("id"); 
		$('#row'+button_id+'').remove();
	});
    
    // arrays for storing
    names=[];
    degree=[];
    start=[];
    end=[];


	$('#submit').click(function(){

//institute working
$( ".name_list" ).each(function()
{
    var abc=$(this).val();
    names.push(abc);  
});

$(".hiddennames").val(names);
 var gg=$(".hiddennames").val();    

//institute working

// degree working

 $( ".degree_list" ).each(function()
{
    var d=$(this).val();
    degree.push(d);  
});

$(".hiddendegree").val(degree);
 var dd=$(".hiddendegree").val();    
// degree working

//start date working
$( ".start_list" ).each(function()
{
    var e=$(this).val();
    start.push(e);  
});

$(".hiddenstart").val(start);
 var ss=$(".hiddenstart").val();    
//start date working


//end date working
$( ".end_list" ).each(function()
{
    var f=$(this).val();
    end.push(f);  
});

$(".hiddenend").val(end);
 var ee=$(".hiddenend").val();    

//end date working






		$.ajax({
			url:"action.php",
			type:"POST",
			data:{aa:gg,qq:dd,st:ss,oo:ee},
			success:function(data)
			{
				alert(data);
				
			}
		});
	});
	
});
</script>

<script>
$(document).ready(function(){
	var i=1;


// add button    
	$('#addex').click(function(){
		i++;
		$('#dynamic_field_ex').append('<tr id="row'+i+'"><td><input type="text" name="name" placeholder="Enter your organization name" class="form-control name_list" /><br><input type="date" name="startdate" placeholder="Enter your start date" class="form-control start_list" /><br><input type="date" name="degree" placeholder="Enter your end date date" class="form-control end_list" /></td><td><button type="button" name="removed" id="'
        
        
        +i+'" class="btn btn-danger btn_remove">X</button></td></tr>');
	});
	

// remove button  

	$(document).on('click', '.btn_removed', function(){
		var button_id = $(this).attr("id"); 
		$('#row'+button_id+'').remove();
	});
    
    // arrays for storing
    names=[];
    start=[];
    end=[];


	$('#submitex').click(function(){

//org working
$( ".name_list" ).each(function()
{
    var abc=$(this).val();
    names.push(abc);  
});

$(".hiddennames").val(names);
 var gg=$(".hiddennames").val();    

//org working

// degree working

//  $( ".degree_list" ).each(function()
// {
//     var d=$(this).val();
//     degree.push(d);  
// });

// $(".hiddendegree").val(degree);
//  var dd=$(".hiddendegree").val();    
// degree working

//start date working
$( ".start_list" ).each(function()
{
    var e=$(this).val();
    start.push(e);  
});

$(".hiddenstart").val(start);
 var ss=$(".hiddenstart").val();    
//start date working


//end date working
$( ".end_list" ).each(function()
{
    var f=$(this).val();
    end.push(f);  
});

$(".hiddenend").val(end);
 var ee=$(".hiddenend").val();    

//end date working






		$.ajax({
			url:"actionex.php",
			type:"POST",
			data:{aa:gg,st:ss,oo:ee},
			success:function(data)
			{
				alert(data);
				
			}
		});
	});
	
});
</script>







<?php

include 'footer.php';

?>