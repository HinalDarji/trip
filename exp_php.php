

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
include "dbconcation.php";
  
        ?>
<a href = "exp.php?id=<?php echo $row['T_id'] ?>"> 

<?php
    $id=$_GET['id'];
         // echo $id;
        $_SESSION['id']=$id;
//exit;




//echo $id;
$userID=$loggedUser['UserID'];
$query="SELECT ex_trip_id,SUM(ex_ammount) as sum FROM expance WHERE ex_trip_id='$id' AND ex_user_id='$userID';";
//echo $query;
    
$result = mysqli_query($conn,$query);
   //print_r($result);
   //exit();
?>

<!DOCTYPE html>
<html>
<head>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">   
<style>
     body  {
   
    
    color:#0f0f0f;
    text-align:center;
    background-image: url('expp.jpg');
    
    background-size: cover;
    

}
    #example1 
    {
    border: 1px solid black;
    background-color:bisque;
    background-size: cover;
    background-repeat: no-repeat;
      text-align:center;  
    padding:5px;
    }
   <body>
    <div id="example1">
    </body>
</style>
</head>
</html>  

    

<link rel="stylesheet" href="styletrip.css">
     <div class="header">
         <h2 align="right"><button class="btn" onclick="location.href='logout.php'" width="400 px" height="320 px"><i class="fa fa-sign-out"></i> Log out </button></h2> 
  	<div class="login-page">
     
     </div>
<div class="form">
   
    <form method="post"  class="login-form">
        
	<h1 style="text-align:center" color="#0f0f0f" >Expense</h1>
      
   <!--<input value=<?php //echo $loggedUser['Name'];?> name="Name" placeholder="Trip Creator" required/>-->
    
<?php
   if($result!='')
    {
      while($row = mysqli_fetch_array($result))
       {
         $sum = $row['sum'];
        ?>
            
          <h2 align="center"> Total Expense: <input value="<?php echo $sum;?>" readonly </h2> 
        <!--<h5 align="left"> Expense Name:<input value="<?php //echo $row['E_name'];?>"  placeholder="expense name" /></h5>-->
          <?php
        }  
         ?>
       <?php      
     }
?>
              <h2> <button type="button" onclick="location.href='exp.php'" align:left width="400000 px" height="320000 px">ADD</button>  </h2>         

<!--<input type="submit" style="background-color:#5F9EA0" value="Add Expense" name="Add" onclick="exp.php">-->
      
   <a href = "report.php?id=<?php echo $row['T_id'] ?>">     
<button type="button"  onclick="location.href='report.php'">Report</button>
              <br>
      </br><br><br><br>
<br><br><br><br><br><br>
<br><br><br><br><br><br>
<br><br><br><br><br><br>
<?php $this_year=date('Y');?>
        <small>&copy;<?php echo $this_year;?></small>
     </form> 
  </div>
</div>
