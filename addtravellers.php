<?php 
if(!isset($_SESSION)) 
{
    session_start();
}
$loggedUser = isset($_SESSION['loggedUser']) ? $_SESSION['loggedUser'] : array();
?>
<?php
include "dbconnect.php";
$response = array();
$query="Select U_email from user";
$result = mysqli_query($conn,$query);
//print_r($result);
//exit();
?>
<div class="login-page">

<link rel="stylesheet" href="styletrip.css">
     <div class="header">
  	
  </div>
  <div class="form">
   
    <form method="post" action="addtravellers.php" class="login-form">
	<h2 style="text-align:center;">Add Travellers</h2>
        <!--<h4>Please fill all entries.</h4>-->
        
        <select name="travellers" size="5" multiple>  
<?php

   while ($row = mysqli_fetch_array($result))
   {
       ?>
        
       
  <option><?php echo $row['U_email'];?></option>
             

        <?php
   }
       ?>
            </select>
        <br></br>
	  
     <!-- <input type="password" name="password"  placeholder="password" required/>-->
	  
  	
      <button type="submit" href="dashboard2.php">Add</button>
        
        <br>
        </br>
    <?php 
     $this_year=date('Y');
        ?>
    <button type="button" onclick="history.back();">Back</button><br>
      </br>
    <small>&copy;<?php echo date('Y');?></small>
      
       <!-- <button type="button" onclick="location.href='signup.php'">sign up</button>-->
		

      
    
	 