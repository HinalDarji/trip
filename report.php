<?php if (!isset($_SESSION)) 
{
    session_start();
}
$loggedUser = isset($_SESSION['loggedUser']) ? $_SESSION['loggedUser'] : array();
//print_r($loggedUser);
//exit();

?>
<?php
include "dbconcation.php";
  
//$id=$_SESSION['trip_id'];
  //$id=$_GET['id'];
         // echo $id;
  
$userID=$loggedUser['UserID'];
$id=$_SESSION['id'];

$query = "SELECT expance.ex_trip_id,expance.catogroy,category.c_id,category.c_name,SUM(expance.ex_ammount) AS TOTAL FROM expance INNER JOIN category ON expance.catogroy=category.c_id AND expance.ex_trip_id='$id' GROUP BY expance.catogroy;";
//echo $query;
$result = mysqli_query($conn, $query);
$query1 = "SELECT SUM(expance.ex_ammount) AS TOTAL,expance.catogroy FROM expance WHERE expance.ex_trip_id=$id AND expance.ex_user_id='$userID' GROUP BY expance.catogroy;";
//echo $query1;
$result1 = mysqli_query($conn, $query1);

?>
<!DOCTYPE html>
<html lang="en">
<head>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);
 
function drawChart() {
 
    var data = google.visualization.arrayToDataTable([
      ['c_name', 'c_id'],
      <?php
      while($row=mysqli_fetch_array($result))
	  {
          
            echo "['".$row['c_name']."', ".$row['c_id']."],";
          
      }
      ?>
    ]);
    
    var options = {
        title: 'Overall Trip Expense chart',
        width: 600,
        height: 300,
    };
    
    var chart = new google.visualization.PieChart(document.getElementById('piechart'));
    
    chart.draw(data, options);
}
</script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);
 
function drawChart() {
 
    var data = google.visualization.arrayToDataTable([
      ['TOTAL', 'catogroy'],
      <?php
      while($row=mysqli_fetch_array($result1))
	  {
          
            echo "['".$row['TOTAL']."', ".$row['catogroy']."],";
          
      }
      ?>
    ]);
    
    var options = {
        title: 'My Expense Category wise',
        width: 600,
        height: 300,
    };
    
    var chart = new google.visualization.PieChart(document.getElementById('piechart2'));
    
    chart.draw(data, options);
}
</script>

</head>
<body>
    <!-- Display the pie chart -->
    <div id="piechart">
             this is Trip first pie chart
    </div>
    <div id="piechart2">
             this is the second one...
    </div>

</body>
</html>
