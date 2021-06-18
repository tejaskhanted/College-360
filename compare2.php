<!doctype html>


<?php
session_start();
include("database1.php");
?>
<html lang="en">
<head>
 <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="http://code.jquery.com/jquery-2.1.0.min.js"></script>
    
    <link rel="stylesheet" href="css/bootstrap.css">
    <style>
        .mdl-image--responsive {
            max-width: 100%!important;
            max-height: 100%!important;
            height: auto!important;
            
        }
        .mdl-color--light-blue-600 {
                background-color: #039be5!important;
            }
        .mdl-button {
            background: 0 0;
            border: none;
            border-radius: 2px;
            color: #000;
            position: relative;
            height: 36px;
            margin: 6px 4px;
            min-width: 64px;
            padding: 0 16px;
            display: inline-block;
            font-family: "Open Sans",Helvetica,Arial,sans-serif;
            font-size: 14px;
            font-weight: 500;
            text-transform: uppercase;
            letter-spacing: 0;
            overflow: hidden;
            will-change: box-shadow;
            transition: box-shadow .2s cubic-bezier(.4,0,1,1),background-color .2s cubic-bezier(.4,0,.2,1),color .2s cubic-bezier(.4,0,.2,1);
            outline: 0;
            cursor: pointer;
            text-decoration: none;
            text-align: center;
            line-height: 36px;
            vertical-align: middle;
        }

        .mdl-color-text--white {
            color: #fff!important;
            }
        .mdl-button__ripple-container {
            display: block;
            height: 100%;
            left: 0;
            position: absolute;
            top: 0;
            width: 100%;
            z-index: 0;
            overflow: hidden;
        }
            .mdl-color-text--grey-900 {
            color: #212121!important;
        }
            .mdl-color--amber-500 {
            background-color: #ffc107!important;
        }
        .mdl-button {
            background: 0 0;
            border: none;
            border-radius: 2px;
            color: #000;
            position: relative;
            height: 36px;
            margin: 6px 4px;
            min-width: 64px;
            padding: 0 16px;
            display: inline-block;
            font-family: "Open Sans",Helvetica,Arial,sans-serif;
            font-size: 17px;
            font-weight: 500;
            text-transform: uppercase;
            letter-spacing: 0;
            overflow: hidden;
            will-change: box-shadow;
            transition: box-shadow .2s cubic-bezier(.4,0,1,1),background-color .2s cubic-bezier(.4,0,.2,1),color .2s cubic-bezier(.4,0,.2,1);
            outline: 0;
            cursor: pointer;
            text-decoration: none;
            text-align: center;
            line-height: 36px;
            vertical-align: middle;
        }
        
        li {
				float:left;
			}
            
			li a {
				display: block;
				color: #555;
				
				padding: 16px 22px;
				text-decoration:none;


				}

			li a.active {
				background-color: #4e6db7;
				color:white;

				}

			li a:hover:not(.active){
				background-color: #95b1d8;
				color:white;

				}
            body{
            
            margin: 0;
            padding: 0;
            
        }
        .header
        {
            height: 100vh;
            background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url(img/bg1.jpg);
            background-size:cover;
            background-position:center;
            display:flex;
            justify-content: center;
            align-items: center;
            font-family: sans-serif;
            
            
        }
        h1
        {
            color: #fff;
            margin-bottom: 70px;
            font-size: 45px;
            letter-spacing: 2px;
            text-align:center;
            
        }
        .search-field
        {
            height: 50px;
            padding: 10px;
            border: none;
            border-radius: 25px;
            outline: none;
            font-size: 20px;
            max-height: 100%; 
            max-width: 90%;
        }
        .business
        {
            width: 600px;
        }
        .search-btn
        {
            height: 50px;
            width: 150px;
            background: #ffeb3b;
            border: none;
            color: #000;
            border-radius: 25px;
            font-size: 20px;
        }
        .search-btn:hover{
            background: #ffc107;
            cursor: pointer;
        }
        .form-box
        {
            background: rgba(0,0,0,0.5);
            padding: 30px;
        }
        #r1 {
         background-color: #039be5!important;

    padding: 15px;
    color: #fff;
}
            .submit{
                margin-bottom: 30px;
                width: 80px;
                height: 30px;
                border: none;
                border-radius: 2px;
                color: #fff;
                font-family: sans-serif;
                font-weight:500;
                transition: 0.2s ease;
                cursor: pointer;
                align-self: center;
                background: #0f73e6;
                margin-left: 200px;
                
            }
        @media screen and (max-width:900px){
            .search-field{
                max-height: 100%; 
            max-width: 70%;
            }
        }
        @media screen and (max-width:600px){
            .header{
                height: 80vh;
            }
            .search-field
        {
            height: 50px;
            padding: 10px;
            border: none;
            border-radius: 25px;
            outline: none;
            font-size: 20px;
            max-height: 100%; 
            max-width: 98%;
        }
        .business
        {
            width: 370px;
        }
        .search-btn
        {
            height: 50px;
            width: 150px;
            background: #ffeb3b;
            border: none;
            color: #000;
            border-radius: 25px;
            font-size: 20px;
            position:relative;
    top:50%; 
    left:30%;
            
        }
            
        }
        h2{
            text-align: center;
        }
    
        
    </style>
    <?php
include("database.php");
error_reporting(0);
$query = "select * from collegeinfo";
$data = mysqli_query($conn, $query);
$data1 = mysqli_query($conn, $query);
?>

    <title>Compare College</title>
</head>
<body>
        
            <nav class="navbar navbar-expand-md navbar-light bg-white sticky-top">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><img src="img/logo.png" width="160px" height="110px"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
                    <span class="navbar-toggler-icon"></span>
                
                
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="" href="home2.php" style="font-size: 17px;"><b>Home</b> </a>
                    </li>
                    <li class="nav-item">
                        <a class="" href="review_form.php" style="font-size: 17px;"><b>Enter review</b></a>
                    </li>
                    <li class="nav-item">
                        <a class="active" href="compare2.php" style="font-size: 17px;"><b>Compare College</b></a>
                    </li>
                    <li class="nav-item">
                        <a class="" href="#bottom" style="font-size: 17px;" ><b>Contact us</b></a>
                    </li>

                   
                    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <p style="font-size: 18px;"><b><?php echo $_SESSION["username"]; ?></b> </p>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="logout.php" style="font-size: 18px;"><b>Logout</b></a>
          
        </div>
      </li>
                
                
                
                    </ul>
                </div>
        
        
        
        
        
            </div>
        </nav>
        
    <div class="d-flex justify-content-center" class ="college">
          <form name="form1" action="#" method="post">
          <select style=" padding: 10px; background: #f9f9f6; color: black; height: 60px; width: 500px;" name="tejas"; required>
         <option value="">Select College</option> 
              <?php
                  while($row=mysqli_fetch_assoc($data))
        {
          ?>
        <option value="<?php echo $row["id"]; ?>"><?php echo $row["clgname"]; ?></option>
          <?php
        }
           ?>   
    
        </select>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <select style=" padding: 10px; background: #f9f9f6; color: black; height: 60px; width: 500px;" name="tejas1"; required>
        <option value="">Select College</option> 
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
              <input type="submit" name="submit" value="COMPARE" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-color--light-blue-600 mdl-color-text--white" data-upgraded=",MaterialButton,MaterialRipple" style="width: 120.056px; height: 60.056px;">
          </form>
        <br><br><br><br>
          <?php

$val = $_POST['tejas'];

$val1 = $_POST['tejas1'];// Storing Selected Value In Variable
#echo "You have selected :" .$val;
             #echo $val1;
    if($val == $val1)
    {
      
	echo "<script type='text/javascript'>alert('Note: Same College cannot be compared!!!');</script>";
        
    $val = 0;
        $val1 = 0;
    }
            else
            {
                $val = $val ;
        $val1 = $val1 ;
            }
         
            
            
        
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
        
         
  <br><br><br>
            <div align="center">
    <table class="table" style="text-align:center;">
        
       <tr>
            <th>College Name</th>
            <th><?php echo $result1['clgname']; ?></th>
            <th><?php echo $result2['clgname']; ?></th>
           
        </tr>
      
        <tr>
            <th>Type</th>
            <td><?php echo $result1['type']; ?></td>
            <td><?php echo $result2['type']; ?></td>
        </tr>
        
        <tr>
            <th>Year of Established</th>
            <td><?php echo $result1['year']; ?></td>
            <td><?php echo $result2['year']; ?></td>
        </tr>
        <tr>
            <th>Location</th>
            <td><?php echo $result1['location']; ?></td>
            <td><?php echo $result2['location']; ?></td>
        </tr>
        <tr>
            <th>Institute</th>
            <td><?php echo $result1['institute']; ?></td>
            <td><?php echo $result2['institute']; ?></td>
        </tr>
        <tr>
            <th>Rating </th>
            <td>
            <?php   
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
            <th>College Infrastructure </th>
            <td>
            
            <?php   
            $a = $result3['collegeinfrastructure'];
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
            <td>
            <?php   
            $a = $result4['collegeinfrastructure'];
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
        </tr>
       
        <tr>
            <th>Faculty </th>
            <td>
            <?php   
            $a = $result3['faculty'];
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
            <td>
            <?php   
            $a = $result4['faculty'];
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
        </tr> 
        <tr>
            <th>College Placement </th>
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
           <td><?php   
            $a = $result4['collegeplacement'];
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
            <th>Industry Exposure </th>
            <td><?php   
            $a = $result3['industryexposure'];
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
            <td><?php   
            $a = $result4['industryexposure'];
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
            <th>Student Crowd </th>
            <td><?php   
            $a = $result3['studentcrowd'];
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
            <td>
              <?php   
            $a = $result4['studentcrowd'];
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
        </tr>
     <tr>
            <th>College Life </th>
            <td>
         
              <?php   
            $a = $result3['collegelife'];
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
            <td>
         <?php   
            $a = $result4['collegelife'];
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
        </tr>
         <tr>
            <th>Hostel </th>
            <td>
             <?php   
            $a = $result3['hostel'];
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
            $a = $result4['hostel'];
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
        </tr>
         <tr>
            <th>Affordability </th>
            <td>
             <?php   
            $a = $result3['affordability'];
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
            $a = $result4['affordability'];
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
    </table>
       </div>
    <br><br>
    
     <div class="container-fluid" id="r1">
            <div class="r2">
                <h3 style="text-align: center;"><a href="https://www.facebook.com" class="fa fa-facebook" aria-hidden="true" style="color: #fff"></a>&nbsp;&nbsp;&nbsp;&nbsp;
                    
                    <a class="fa fa-twitter" href="https://www.twitter.com" aria-hidden="true" style="color: #fff">        </a>&nbsp;&nbsp;&nbsp;&nbsp;
                    <a class="fa fa-instagram"  href="https://www.instagram.com" aria-hidden="true" style="color: #fff"></a>
                    
                    
                    </h3><br>
             
             
        
            </div>
        
         <div class="row" >
             
             
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
        <div class="region region-panel-second-1">
        <div id="block-contactinfo" class="block block-block-content block-block-contente29440d8-09bd-4afe-8080-1f9cc71afa89">
        <h3 style="text-align: center;">Contact Info</h3><br>
            <div class="clearfix text-formatted field field--name-body field--type-text-with-summary field--label-hidden field__item" style="text-align: center;"><h5>Email ID</h5><h6>
        &nbsp;mandarkumbhar65@gmail.com<br>
        &nbsp;rutviklat@gmail.com<br>
        &nbsp;tgkhanted@gmail.com<br></h6>
                <h5>Mobile No</h5><h6>
        &nbsp;9930641900/
        9967293194/
        9167124511<br></h6><br>
    
        </div>
        </div>
        </div>
         </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <h3 style="text-align: center;">Links</h3><br>
            <div style="text-align: center;">
                <h5><a href="review_form.php" style="color: #fff;">Enter Review</a></h5>
                <h5><a href="compare2.php" style="color: #fff;">Compare College</a></h5>
                <h5><a href="/webStack_project/home2.php#eng" style="color: #fff;">Top Engineering colleges</a></h5>
                <h5><a href="/webStack_project/home2.php#med" style="color: #fff;">Top Medical colleges</a>
                </h5>
              
            
            
            
            </div>
            
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" id="bottom">
            <h3 style="text-align: center;">Contact us</h3><br>
            <div class="f1" style="text-align: center;">
                <form method="post" data-toggle="validator" role="form" id="form" action="compare2.php?">
                <p>Name : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="name" style="height: 25px; width: 200px;" required></p>
                <p>Email ID : &nbsp;&nbsp;&nbsp;<input type="email" name="emailid" style="height: 25px; width: 200px;" required></p>
                <div class="row" style="text-align: center; align-content: center; margin-left: 100px;">
                <p>Comment :&nbsp;</p>
                
                <p><textarea name="comment" rows="4" cols="25" required> 
                    </textarea></p>
                </div>    
                
                <input  type="submit" class="submit">
                </form>
            
            
            </div>
        </div>
        
        </div>
            <div class="copyright" style="text-align: center;">
            
                <h6>&#169;2019College360.All Rights Reserved</h6>
            
            </div>
            
            
        </div>
    
    
    
    
    
    
    
    
        

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery.min.js"></script>

    <script src="js/bootstrap.min.js"></script>
</body>
</html>