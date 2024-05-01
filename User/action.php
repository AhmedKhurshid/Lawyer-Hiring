<?php
session_start();
include 'connection.php';



$names=explode(',',$_POST["aa"]);
$degree=explode(',',$_POST["qq"]);
$startdate=explode(',',$_POST["st"]);
$enddate=explode(',',$_POST["oo"]);

// print_r($names);
// print_r($degree);
// print_r($startdate);
// print_r($enddate);


 $number = count($names);

if($number > 0)
 {
	for($i=0; $i<$number; $i++)
	{
		
			$sql = "INSERT INTO `lawyer_education`(`le_id`, `le_institute`, `le_degree`, `le_startdate`, `le_enddate`, `lawyer_id`) VALUES('','$names[$i]','$degree[$i]','$startdate[$i]','$enddate[$i]',$_SESSION[id])";
						
			mysqli_query($conn, $sql);
		
 	}

	 echo "Education Inserted";

}


else
{
	echo "Please Enter your data properly";
}

?>
