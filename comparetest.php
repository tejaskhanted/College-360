<!doctype html>
<html>
<head>
    <title>compare college</title>
     <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    
    
    <link rel="stylesheet" href="css/bootstrap.css">
    <style>
        body {
           border-left: 60px solid white;
             border-right: 60px solid white;
             }
        input {
                color: #f9f9f6;
                height: 100%;
                padding: 13px;
            background-color: lightblue;
            border-top-color: lightblue;
            
  border: none;
 

  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
                }
    input:focus {
  background-color: blue;
}
    </style>
    
    <?php
include("database.php");
error_reporting(0);
$query = "select * from collegeinfo";
$data = mysqli_query($conn, $query);
$data1 = mysqli_query($conn, $query);
?>
    
</head>
    <body>
        
      <div class="d-flex justify-content-center" class ="college">
          <form name="form1" action="#" method="post">
          <select style=" padding: 10px; background: #f9f9f6; color: black; height: 60px; width: 440px;" name="tejas";>
        <?php
                  while($row=mysqli_fetch_assoc($data))
        {
          ?>
        <option value="<?php echo $row["id"]; ?>"><?php echo $row["clgname"]; ?></option>
          <?php
        }
           ?>   
    
        </select>
      &nbsp;&nbsp;&nbsp;&nbsp;
          <select style=" padding: 10px; background: #f9f9f6; color: black; height: 60px; width: 440px;" name="tejas1";>
        <?php
                  while($row1=mysqli_fetch_assoc($data1))
        {
          ?>
        <option value="<?php echo $row1["id"]; ?>"><?php echo $row1["clgname"]; ?></option>
          <?php
        }
           ?>   
    
        </select>
          &nbsp;&nbsp;&nbsp;&nbsp;
<input type="submit" name="submit" value="COMPARE"/>
          </form>
          <?php
$val = $_POST['tejas'];
$clgname=
$val1 = $_POST['tejas1'];// Storing Selected Value In Variable
#echo "You have selected :" .$val;
             # echo $val1;
          
          
        
$query1 = "select * from collegeinfo where id = '$val'";
$datas = mysqli_query($conn, $query1);
$query2 = "select * from collegeinfo where id = '$val1'";
$data3 = mysqli_query($conn, $query2);

$result1=mysqli_fetch_assoc($datas);
$result2=mysqli_fetch_assoc($data3);    

$clgname1= $result1['clgname'];
$clgname2= $result2['clgname'];
#echo $clgname1;
#echo $clgname2;
$query3 = "select * from reviewform where collegename= '$clgname1'";
$data4 = mysqli_query($conn, $query3);

$query4 = "select * from reviewform where collegename= '$clgname2'";
$data5 = mysqli_query($conn, $query4);

$result3=mysqli_fetch_assoc($data4);
$result4=mysqli_fetch_assoc($data5);    

          #echo $result3['collegeinfrastructure'];
          
              ?>   
        </div>
        <div> 
             
  <br><br><br>
    <table  class="table table-bordered">
        <thead class="thead-dark">
       <tr>
            <th scope="col">College Name</th>
            <th scope="col"><?php echo $result1['clgname']; ?></th>
            <th scope="col"><?php echo $result2['clgname']; ?></th>
           
        </tr>
        </thead>
        <tr>
            <th>type</th>
            <td><?php echo $result1['type']; ?></td>
            <td><?php echo $result2['type']; ?></td>
        </tr>
        
        <tr>
            <th>Year of Established</th>
            <td><?php echo $result1['year']; ?></td>
            <td><?php echo $result2['year']; ?></td>
        </tr>
        <tr>
            <th>location</th>
            <td><?php echo $result1['location']; ?></td>
            <td><?php echo $result2['location']; ?></td>
        </tr>
        <tr>
            <th>institute</th>
            <td><?php echo $result1['institute']; ?></td>
            <td><?php echo $result2['institute']; ?></td>
        </tr>
        <tr>
            <th>rating </th>
            <td><?php   
            $a = $result1['rating'];
 $_POST = $a;                     # echo $a;
if($_POST){
    
  $cfg_min_stars = 1; //min star
  $cfg_max_stars = 5; //max star
  $temp_stars = $_POST['a'];

  for($i=$cfg_min_stars; $i<=$cfg_max_stars; $i++) { 
   
      
    if ($temp_stars >= 1) { 
      echo '<img src="Star (Full).png" width="40"/>';
      $temp_stars--;
       
    
    }else {
      if ($temp_stars >= 0.5) {
       echo '<img src="Star (Half Full).png" width="100"/>';
        $temp_stars -= 0.5;
      }
    else { 
        echo '<img src="Star (Empty).png" width="40"/>';
      }
    }
  }
}
    ?>
            
            
            
            </td> 
            <td><?php   
            $a = $result2['rating'];
 $_POST = $a;                     # echo $a;
if($_POST){
    
  $cfg_min_stars = 1; //min star
  $cfg_max_stars = 5; //max star
  $temp_stars = $_POST['a'];

  for($i=$cfg_min_stars; $i<=$cfg_max_stars; $i++) { 
   
      
    if ($temp_stars >= 1) { 
      echo '<img src="Star (Full).png" width="40"/>';
      $temp_stars--;
       
    
    }else {
      if ($temp_stars >= 0.5) {
       echo '<img src="Star (Half Full).png" width="100"/>';
        $temp_stars -= 0.5;
      }
    else { 
        echo '<img src="Star (Empty).png" width="40"/>';
      }
    }
  }
}
    ?></td>
        </tr>
        <tr>
            <th>collegeinfrastructure </th>
            <td><?php echo $result3['collegeinfrastructure']; ?></td>
            <td><?php echo $result4['collegeinfrastructure']; ?></td>
        </tr>
       
        <tr>
            <th>faculty </th>
            <td><?php echo $result3['faculty']; ?></td>
            <td><?php echo $result4['faculty']; ?></td>
        </tr> 
        <tr>
            <th>collegeplacement </th>
            <td><?php   
            $a = $result3['collegeplacement'];
 $_POST = $a;                     # echo $a;
if($_POST){
    
  $cfg_min_stars = 1; //min star
  $cfg_max_stars = 5; //max star
  $temp_stars = $_POST['a'];

  for($i=$cfg_min_stars; $i<=$cfg_max_stars; $i++) { 
   
      
    if ($temp_stars >= 1) { 
      echo '<img src="Star (Full).png" width="40"/>';
      $temp_stars--;
       
    
    }else {
      if ($temp_stars >= 0.5) {
       echo '<img src="Star (Half Full).png" width="100"/>';
        $temp_stars -= 0.5;
      }
    else { 
        echo '<img src="Star (Empty).png" width="40"/>';
      }
    }
  }
}
    ?></td>
            <td><?php echo $result4['collegeplacement']; ?></td>
        </tr> 
        <tr>
            <th>industryexposure </th>
            <td><?php echo $result3['industryexposure']; ?></td>
            <td><?php echo $result4['industryexposure']; ?></td>
        </tr>
        <tr>
            <th>studentcrowd </th>
            <td><?php echo $result3['studentcrowd']; ?></td>
            <td><?php echo $result4['studentcrowd']; ?></td>
        </tr>
     <tr>
            <th>collegelife </th>
            <td><?php echo $result3['collegelife']; ?></td>
            <td><?php echo $result4['collegelife']; ?></td>
        </tr>
         <tr>
            <th>hostel </th>
            <td><?php echo $result3['hostel']; ?></td>
            <td><?php echo $result4['hostel']; ?></td>
        </tr>
         <tr>
            <th>affordability </th>
            <td><?php echo $result3['affordability']; ?></td>
            <td><?php echo $result4['affordability']; ?></td>
        </tr>
    </table>
       </div>
     </body>
</html>