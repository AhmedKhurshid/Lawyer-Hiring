<?php 


include 'connection.php';


// if(isset($_POST['abc']))
// {
//     $q="SELECT * FROM `lawyer_info` inner join law_by_cat ON law_by_cat.lawyer_id=lawyer_info.l_id inner JOIN lawyer_categories on lawyer_categories.cat_id= law_by_cat.cat_id where lawyer_categories.cat_id= ".$_GET['id'];
//     ;

// }
// else
// {
//     $q="SELECT * FROM `lawyer_info` inner join law_by_cat ON law_by_cat.lawyer_id=lawyer_info.l_id inner JOIN lawyer_categories on lawyer_categories.cat_id= law_by_cat.cat_id";

// }

$result="";

$q="SELECT * FROM `lawyer_info` inner join law_by_cat ON law_by_cat.lawyer_id=lawyer_info.l_id inner JOIN lawyer_categories on lawyer_categories.cat_id= law_by_cat.cat_id  WHERE `l_name` LIKE '%%'";

if(isset($_POST['search']))
{
    $ss=$_POST['search'];
    $q.=" AND `l_name` LIKE '%$ss%' ";

}
if(isset($_POST['cat']))
{
    $cat=$_POST['cat'];
    $q.=" AND lawyer_categories.cat_id = $cat ";

}






$res=mysqli_query($conn,$q);


                
while($row=mysqli_fetch_array($res))
{

    $result.= '<div class="col-xs-12 col-sm-6 col-md-4">
            <div class="shop-content-inner">
                <div class="shop-content-img">
                    <a href="#"><img style="height:199px;" src="'.$row[5].'" class="img-responsive" alt=""></a>
                    <div class="shop-content-img-hover">
                        <div class="shop-content-img-hover-text">
                            <a href="details.php?id='.$row[0].'">Details</a>
                        </div> 
                    </div> 
                </div>
                <div class="shop-content-text">
                    <p>'.$row[13].'</p>
                    <h2> '.$row[1].'</h2>
                </div>
            </div>
        </div>';
 } 

echo $result;



?>
