<?php

if (!isset($_SESSION)) 
{
    session_start();
}
$loggedUser = isset($_SESSION['loggedUser']) ? $_SESSION['loggedUser'] : array();
 //$_SESSION['id']=$id;
//print_r($loggedUser);
//exit();

?>
<?php
if(!isset($_SESSION['loggedUser'])) 
{
    header('Location:l.php');
    exit;
}
include "dbconcation.php";


?>
<!DOCTYPE html>
<html>
<head>
    
<style>
    body  {
   
    
    color:#0f0f0f;
    text-align:center;
    background-image: url('181775.jpg');
    
    background-size: cover;
    

}
body {font-family: arial, Helvetica, sans-serif;}


input[type=trip_name], input[type=start_date]input[type=end_date]input[type=T_img] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}



button:hover {
    opacity: 0.8;
}

.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
}

img.dp {
    width: 40%;
    border-radius: 50%;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 100px) {
    span.psw {
       display:inline-block ;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
</style>
     <h1 align="right"><button class="btn" onclick="location.href='logout.php'" width="400 px" height="320 px"><i class="fa fa-sign-out"></i> Log out </button></h1> 
</head>
<body>

<h2>WELCOME TO TRIP</h2>

  <form method="post" action="#" class="login-form">
	
   <h1> <?PHP $userID=$loggedUser['UserID'];
       //echo $userID;?></h1>
      <div class="form">
          <h2 style="text-align:center;">ENTER EXPENCE</h2>
         
         </div>
       
  <!--<div class="imgcontainer">
    <img src="expp.jpg" alt="Avatar" class="avatar">
  </div>-->

  <div class="container">
    <label for="uname">EXPENCE NAME</label>
      
      
  
      <br><input type="ex_name" name="ex_name" placeholder="ex_name" required/><br>
   

    <div>
        
        <label for="start">DATE</label>
        <br><input type="date" id="start" name="ex_date"
               value=" "
               /><br>
    </div>

    <div>
        <label for="end">AMOUNT</label>
       <br> <input type="ex_ammount" id="ex_ammount" name="ex_ammount"
               value=" "
              / ><br>
        <?PHP// $id=$_GET['id'];
          //echo $id;
        //$_SESSION['id']=$id;
        ?>
        
    </div>
      <div>
        <br>
          <div class="fs"><h4>Select Catagory:</h4>
		<body><select name="cname[]"  multiple>
			
			
				
				
                    <?php
					
include('dbconnect.php');
//echo mysqli_error ($conn);
$query = "SELECT `c_id`, `c_name` FROM `category`;";
$result = mysqli_query($conn,$query);
?> <?php
while($row = mysqli_fetch_array($result))
{
                    ?><option value= <?php echo $row['c_id'];?>> <?php echo $row['c_name'];?></option>
 
                    
						<?php 
                        }
							  
					?></select>
                
                <h2><input type="submit" name="submit" value="Get Selected Values" /></h2>
            </form>
           <?php
if(isset($_POST['submit']))
{

foreach ($_POST['cname'] as $select)
{
//echo "You have selected :" .$select; // Displaying Selected Value
 
 $response1 = array();
 
 //$tid=$id;
     $id=$_GET['id'];
         // echo $id;
        //$_SESSION['id']=$id;
  $id=$_SESSION['id'];
    //echo $id;
$expance_name= $_POST ['ex_name'];
$expance_date= $_POST ['ex_date'];
$amount= $_POST ['ex_ammount'];
$userID=$loggedUser['UserID'];
//$catogroy=$row['c_id'];
$cid=$select;
//echo $catogroy;
    
    
$uery="INSERT INTO expance( `ex_trip_id`, `ex_user_id`, `ex_name`, `ex_date`, `catogroy`, `ex_ammount`) VALUES ('$id','$userID','$expance_name','$expance_date','$cid','$amount');";
 echo $uery;
   // exit;
    if(mysqli_query($conn, $uery))
			  {
				  
				$response['status']=1;
				$response['message']="Registartion Successful";
				echo json_encode($response);
				header("Location:1234.php");
				
			  }
			  else
			  {
				echo mysqli_error($conn);
				$response['status']=0;
				$response['message']="Registartion not Successful, please try again";
				echo json_encode($response);	
			  
				}
 
 



}
}

            
?>
            
          </div> </div></div></form></body>
        
      <table>
		<tr>
			
		</tr>
	</table>
</html>
     
