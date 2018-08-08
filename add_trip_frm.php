<?php

if (!isset($_SESSION)) 
{
    session_start();
}
$loggedUser = isset($_SESSION['loggedUser']) ? $_SESSION['loggedUser'] : array();
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
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
    body  {
   
    
    color:#0f0f0f;
    text-align:center;
    background-image: url('final.jpg');
    
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

button {
    background-color: #4CAF50;
    color: black;
    padding: 140px 200px;
    margin: 8px 0;
    border: black;
    cursor: pointer;
    width: 100%;
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
</head>
<body>

<h2>CREATE TRIP</h2>

  <form method="post" action="final.php" class="login-form">
	
    
      <div class="form">
          <h2 style="text-align:center;">Add Travellers</h2>
         
         </div>
       
  <!--<div class="imgcontainer">
    <img src="expp.jpg" alt="Avatar" class="avatar">
  </div>-->

  <div class="container">
    <label for="uname">TRIP NAME</label>
      
      
  
      <br><input type="trip_name" name="trip_name" placeholder="Trip_name" required/><br>
   

    <div>
        
        <label for="start">START DATE</label>
        <br><input type="date" id="start" name="start_date"
               value=" "
               /><br>
    </div>

    <div>
        <label for="end">END DATE</label>
       <br> <input type="date" id="end" name="end_date"
               value=" "
              / ><br>
        
    </div>
      <div>
        <br><label for="T_img">ADD IMAGE</label>
      <br>  <input type="file" id="img" name="T_img"
               value=" "
              / ><br>
          <?php
$query="SELECT U_id, U_email FROM `customers`;";
$result = mysqli_query($conn,$query);
?>
<div class="form">
<!--<form method="post" action="abcde.php" class="login-form">-->
<form>
 <br> <select name="email[]" size="5" multiple><br/>
<?php
while ($row = mysqli_fetch_array($result))
{
   ?>
<br><option value= <?php echo $row['U_id'];?>><br> <?php echo $row['U_email'];?></option><br>
      <?php 
// echo $row['U_id'];
    
}?>
      </select><br>
      
 
</form>
    
    
          </div>
      </div>
      <br><input type="submit" name="submit" value="Get Selected Values and create trip " color= yellow; />
   <!--<button type="submit" class="login-form"  onclick="location.href='1234.php'">Submit</button>-->
    
   <br>
       
      </div>
    </form>
      
  

  <div class="container" style="background-color:# pink ">
  </div>
    </body>
</html>
    
     