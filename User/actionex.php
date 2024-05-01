<?php
session_start();
include 'connection.php';



$names=explode(',',$_POST["aa"]);
$startdate=explode(',',$_POST["st"]);
$enddate=explode(',',$_POST["oo"]);

// print_r($names);
// print_r($startdate);
// print_r($enddate);


 $number = count($names);

if($number > 0)
 {
	for($i=0; $i<$number; $i++)
	{
		
			$sql = "INSERT INTO `lawyer_experience`(`e_id`, `e_organization`, `e_startdate`, `e_enddate`, `lawyer_id`) VALUES('','$names[$i]','$startdate[$i]','$enddate[$i]',$_SESSION[id])";
						
			mysqli_query($conn, $sql);
		
 	}

	 echo "Experience Inserted";

}


else
{
	echo "Please Enter your ex data properly";
}

?>
