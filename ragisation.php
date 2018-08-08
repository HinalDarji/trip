<?php
include "dbconcation.php";
$name= $_POST ['name'];
$email= $_POST ['email'];
$mobile= $_POST ['mobile'];
$password= $_POST ['password'];
$active= 1;

$response = array();

$query = "INSERT INTO customers (U_name,U_email,U_mobile,U_password,U_active) 
  			  VALUES('$name', '$email', '$mobile','$password','$active')";

if(mysqli_query($conn, $query))
{
	$response['status']=1;
	$response['message']="Registartion Successful";
	echo json_encode($response);
    header("location:http://localhost/trip/l.php");
}
else
{
	$response['status']=0;
	$response['message']="Registartion Not successful";
	echo json_encode($response);}

?>
