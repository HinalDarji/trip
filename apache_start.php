<?php
session_start();
include "dbconcation.php";
$email= $_POST ['email'];

$password = $_POST ['password'];
$response = array();

$query = "SELECT * FROM customers WHERE U_email = '$email' and U_password= '$password';";
$result = mysqli_query($conn,$query);



if($result != '')
{
    while($row = mysqli_fetch_array($result))
    {
//        
        $loggedUser = array('Name' => $row['U_name'],
                        'UserID'=> $row['U_id']);
       
        //print_r($loggedUser);
        //exit();
        
    }
    $_SESSION ['loggedUser'] = $loggedUser;  
    
 
header('location:1234.php');
    
  	}
    

else
{
	$response['status']=0;
	$response['message']="loging Not successful";
	echo json_encode($response);}

?>
?>