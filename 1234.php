<?php
if (!isset($_SESSION)) 
{
    session_start();
}
$loggedUser = isset($_SESSION['loggedUser']) ? $_SESSION['loggedUser'] : array();
//print_r($loggedUser);
//exit();

if(!isset($_SESSION['loggedUser'])) 
{
    header('Location:l.php');
exit;
}
?>
<?php
include "dbconcation.php";
$userID=$loggedUser['UserID'];
$respone= array();
    
$query ="select T_id, T_name, T_img FROM trip_table INNER JOIN traveller_table ON trip_table.T_id=traveller_table.Trip_id AND traveller_table.User_id='$userID';";

$result = mysqli_query($conn,$query);


?>


<!DOCTYPE html>
<html>
<head>
    
    <meta charset="UTF-8">
    <title>trip</title>
    
    <link rel="stylesheet" type="text/css" href="css.css">
</head>
    
    <input type="button" value="logout" onclick="location.href='l.php'">
            
    <style>
body  {
   
    
    color:#fff;
    text-align:center;
    background-image: url('6483.jpg');
    
    background-size: cover;
    

}
    

</style>
<body style="padding-left: 20px" >
   
    
<h1 class="title" align="center">WELCOME <?php echo $loggedUser['Name'];?></h1>
<?PHP $userID=$loggedUser['UserID'];
//echo $userID;?>
        <input type="button" value="CREATE TRIP" onclick="location.href='add_trip_frm.php'">

    <?php
if($result!='')

  {
    
    while($row = mysqli_fetch_array($result))
    {
 
      //echo $row['T_id']; 
     
   // $logedUser = array('Name' =>$row['T_name'],
                       // 'ex_trip_id'=> $row['T_id'],
                         //'img'=> $row['T_img'] );
        
        
   ?> 

 
  <?php echo $row['T_name'];?>
    <!--<input type="button" value="logout" onclick="location.href='l.php'">-->
  
    <a href = "exp_php.php?id=<?php echo $row['T_id'] ?>">
        
    <img src="<?php echo $row['T_img'];?>" height="200" width="200" 
         />
      <!--//onclick="location.href='exp.php'"-->
<?php 
    //print_r($row) ;
        //echo $row['T_img'];
 //exit;
    }
   // $_SESSION ['logedUser'] = $logedUser;
    
}

?>

   <div class="container">
       <br/>
        
                
                        
            </div>
    </a>
  
</body>
    
</html>