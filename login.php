<?php
include "dbconcation.php";
$email= $_POST ['email'];

$password= $_POST ['password'];
$response = array();

$query = 'SELECT * FROM `customers` WHERE U_email = $email & U_password= $password';

if(mysqli_query($conn, $query))
{
	$response['status']=1;
	$response['message']="Registartion Successful";
	echo json_encode($response);	
}
else
{
	$response['status']=0;
	$response['message']="Registartion Not successful";
	echo json_encode($response);}

?>
?>