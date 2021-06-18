<html>
<head>

</head>
<body>
<?php
include("database.php");
?>
<form name="form1" action="#" method="post">
    
<select name="tejas" >
<?php
$res=mysqli_query($conn,"select * from collegeinfo");
while($row=mysqli_fetch_array($res))
{
?>
<option value="<?php echo $row["id"]; ?>"><?php echo $row["clgname"]; ?></option>
  
<?php


}
?>
</select>
  
    <input type="submit" name="submit" value="Get Selected Values" />
  </form>
     <?php

$selected_val = $_POST['tejas'];  // Storing Selected Value In Variable
echo "You have selected :" .$selected_val;  // Displaying Selected Value


?> 
   
</body>



</html>