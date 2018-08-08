<?php

if (!isset($_SESSION)) 
{
    session_start();
}
$loggedUser = isset($_SESSION['loggedUser']) ? $_SESSION['loggedUser'] : array();

?>
<?php
if(!isset($_SESSION['loggedUser'])) 
{
    header('Location:l.php');
    exit;
}
include "dbconcation.php";

$trip_name= $_POST ['trip_name'];
$start_date= $_POST ['start_date'];
$end_date= $_POST ['end_date'];
$trip_creater = $loggedUser['UserID'];
$T_img= $_POST ['T_img'];
$response = array();

$query_t ="INSERT INTO `trip_table`(`T_name`, `start_date`, `end_date`, `T_creator`, `T_img`) VALUES ('$trip_name', '$start_date', '$end_date', '$trip_creater','$T_img')";

$result = mysqli_query($conn,$query_t);

if($result != '')
{
    $lastid = mysqli_insert_id(($conn));
         echo "T_ID : ".$lastid;?><br><?php
     
      if(isset($_POST['submit']))
{
$x=1;
    foreach ($_POST['email'] as $select)
        {
        echo "You have selected :".$select;?><br><?php
        $x++;
     echo $x;
//for($i=0; $i==$x; $i++){
     $response1 = array();
        $que="INSERT INTO `traveller_table` (`Trip_id`, `user_ID`) VALUES ('$lastid', '$select');";
      echo $que;
      $result = mysqli_query($conn,$que); 
if($result != '')
{
    
	$response1['message']="TRIP CREATED";
	echo json_encode($response1);
    header('location:exp.php');
}
        
        else
{
	$response1['status']=0;
	$response1['message']="loging Not successful";
	echo json_encode($response1);}


    }
    }
    
       
        
     //
    
    // $response = array();
        //echo "T_ID : ".$lastid;
   
      }


    
    


    ?>

    

   
