<form name="Dropdown" method="POST">
<select name="catagory[] "id="DDLActivites" data-style="btn-default" class="selectpicker form-control">
<?php 
include('dbconnect.php');
						echo mysqli_error ($conn);
						$query = "SELECT `c_id`, `c_name` FROM `category`;";
						$result = mysqli_query($conn,$query);
							 
						while($row = mysqli_fetch_array($result))
						{?>
 <option value= <?php echo $row['c_id'];?>> <?php echo $row['c_name'];?></option>
						<?php 
                        }
						echo "</select>";	  
					?>
                </select>
                <h2><input type="submit" name="submit" value="Get Selected Values" color= black; /></h2>
            </form>
            <?php
if(isset($_POST['submit']))
{

    foreach ($_POST['c_name'] as $select)
{
    echo "You have selected :".$select;
    exit;
}
        
}

?>