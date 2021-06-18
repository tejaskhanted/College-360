<?php

session_start();

$var_value = $_GET['myCountry'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "collegereview";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT `id`, `clgimage`, `clgname`, `type`, `year`, `institute`, `location`, `rating`, `img1`, `img2`, `img3`, `img4`, `img5`, `img6`, `img7`, `img8` FROM `collegeinfo` WHERE clgname='$var_value'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$clg=$row["clgname"];


$sql1 = "SELECT `id`, `collegename`, `yearofcompletion`, `placements`, `infrastructure`, `faculty&coursecurriculum`, `otherdetails`, `titleofreview`, `overallrating`, `collegeinfrastructure`, `faculty`, `collegeplacement`, `industryexposure`, `studentcrowd`, `collegelife`, `hostel`, `affordability`, `recommend`, `totalfees`, `firstname`, `lastname`, `emailid`, `mobilenumber` FROM `reviewform` WHERE collegename='$clg'";
$result1 = $conn->query($sql1);
$row1 = $result1->fetch_assoc();
$data = mysqli_query($conn, $sql1);
$total = mysqli_num_rows($data); 



$conn->close();



error_reporting(0);
    





include("database1.php");
?>
<!doctype html>
<html lang="en">
<head>
 <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/css/swiper.css">
<link rel="stylesheet" href="https://unpkg.com/swiper/css/swiper.min.css">

<script src="https://unpkg.com/swiper/js/swiper.js"></script>
<script src="https://unpkg.com/swiper/js/swiper.min.js"></script>

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
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
				
				padding: 16px 20px;
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
            padding:0;
            
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
        .sub{
            width: 80px;
                height: 30px;
                border: none;
                border-radius: 2px;
                color: #fff;
                font-family: sans-serif;
                font-weight:500;
                transition: 0.2s ease;
                cursor: pointer;
                background: #4e6db7;
            
        }
        .c1{
            float: left;
            width: 32%;
            padding: 10px;
            margin: 5px;
            border: 1px solid black;
            box-shadow: 0 2px 4px rgba(0,0,0,0.6);
        }
        .h-img,object{
            max-width: 98%;
            max-height: 50%;
        }
        .swiper-container {
      width: 80%;
      height: 50%;
    }
    .swiper-slide {
      text-align: center;
      font-size: 18px;
      background: #fff;
      /* Center slide text vertically */
      display: -webkit-box;
      display: -ms-flexbox;
      display: -webkit-flex;
      display: flex;
      -webkit-box-pack: center;
      -ms-flex-pack: center;
      -webkit-justify-content: center;
      justify-content: center;
      -webkit-box-align: center;
      -ms-flex-align: center;
      -webkit-align-items: center;
      align-items: center;
    }
        
        .hedding-title h1{	
	margin:0px;
	padding:0px 0px 10px 0px;
	font-size:25px;
}
.average-rating{
	float:left;
	text-align: center;
	width:30%;
}
.average-rating h2{
	margin:0px;
	font-size:80px;
}
.average-rating p{
	margin:0px;
	font-size:20px;
}
.fa-star,.fa-star-o,.fa-star-half-o{
	color:#FDC91B;
	font-size:25px !important;
}
.progress,.progress-2,.progress-3,.progress-4,.progress-5{
    background:#F5F5F5;
    border-radius: 13px;
    height:18px;
    width:97%;
    padding:3px;
    margin:5px 0px 3px 0px;
}
.progress:after,.progress-2:after,.progress-3:after,.progress-4:after,.progress-5:after{
    content: '';
    display: block;
    background: #337AB7;
    width:80%;
    height: 100%;
    border-radius: 9px;
}
.progress-2:after{
	width: 60%;
}
.progress-3:after{
	width:40%;
}
.progress-4:after{
	width:20%;
}
.progress-5:after{
	width:10%;
}
.loder-ratimg{
	display: inline-block;
	width:40%;
}
.start-part{
	float:right;
	width:30%;
	text-align: center;
}
.start-part span{
	color:#337AB7;
	font-size:23px;
}
.reviews h1{
	margin:10px 0px 20px 30px;
}
.user-img img{	
	height: 80px;
	width: 80px;
	border:1px solid blue;
	border-radius: 50%;
}
.user-img-part{
	width:30%;
	float:left;
}
.user-img{
	width:48%;
	float:left;
	text-align: center;
}
.user-text{
	float:left;
}
.user-text h4,.user-text p{
	margin:0px 0px 5px 0px;
}
.user-text p{
	font-size: 20px;
	font-weight: bold;
}
.user-text h4,.user-text span{
	color:#B3B5B4;
}
.comment{
	width:68%;
	float:left;
	
}
.main-section{
   
  
  padding-right: 90px;
  padding-bottom: 50px;
  padding-left: 90px;
  }      
              
        
        
        
        
    </style>

    <title>College Info</title>
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
                        <a class="" href="compare2.php" style="font-size: 17px;"><b>Compare College</b></a>
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
        
     <div class="header" align ="center";>
        <center><img src=<?php  echo $row["clgimage"]; ?> class="h-img" width="1400px" height="450px"></center>
        <h1><br/>&nbsp; &nbsp;
            <?php  echo $row["clgname"]; ?></h1>
        <p style="font-size: 20px;" >
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php  echo $row["type"]; ?> | Established <?php  echo $row["year"]; ?><br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php  echo $row["institute"]; ?> <br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp;<?php  echo $row["location"]; ?><br/> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rating : <?php  echo $row["rating"]; ?> &nbsp;<i class="fa fa-star" aria-hidden="true" style="color: #e5bc36"></i><i class="fa fa-star" aria-hidden="true" style="color: #e5bc36"></i><i class="fa fa-star" aria-hidden="true" style="color: #e5bc36"></i><i class="fa fa-star" aria-hidden="true" style="color: #e5bc36"></i><i class="fa fa-star-half-o" aria-hidden="true" style="color: #e5bc36"></i></p>
        <h2>&nbsp;&nbsp;&nbsp;Courses and Fees</h2>
    </div>
    
    <div class="container">
        <!--Carousel Wrapper-->
        <div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">

            <!--Controls-->
            <div class="controls-top">
                 <a class="carousel-control-prev" href="#multi-item-example" data-slide="next" role="button"><span class="carousel-control-prev-icon" aria-hidden="true"></span>
                   <span class="sr-only">prevoius</span></a>
                <a class="carousel-control-next" href="#multi-item-example" data-slide="prev" role="button"><span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span></a>
            </div>
            <!--/.Controls-->
            <!--Slides-->
            <div class="carousel-inner" role="listbox">
                <!--First slide-->
                <div class="carousel-item active">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card mb-2">
                                
                                <div class="card-body">
                                    <h4 class="card-title">Master of Business Administration</h4>
                                    <p class="card-text">
                                        Rating : 4.5 &nbsp;<i class="fa fa-star" aria-hidden="true" style="color: #e5bc36"></i><i class="fa fa-star" aria-hidden="true" style="color: #e5bc36"></i><i class="fa fa-star" aria-hidden="true" style="color: #e5bc36"></i><i class="fa fa-star" aria-hidden="true" style="color: #e5bc36"></i><i class="fa fa-star-half-o" aria-hidden="true" style="color: #e5bc36"></i><br/> Fees : ₹ 6.89 Lakh<br/>Duration : 2 years | Full Time<br/>Exams: CAT, IITM WAT<br/>
    Offered by DoMS IIT Madras - Department of Management Studies
                                    </p>
                                    <div style="text-align:center">
                                    <a href="course%20detail2.php?varname=2" class="btn btn-primary">View</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card mb-2">
                                
                                <div class="card-body">
                                    <h4 class="card-title">B.Tech. in Computer Science and Engineering</h4>
                                    <p class="card-text">
                                        Rating : 4.6 &nbsp;<i class="fa fa-star" aria-hidden="true" style="color: #e5bc36"></i><i class="fa fa-star" aria-hidden="true" style="color: #e5bc36"></i><i class="fa fa-star" aria-hidden="true" style="color: #e5bc36"></i><i class="fa fa-star" aria-hidden="true" style="color: #e5bc36"></i><i class="fa fa-star-half-o" aria-hidden="true" style="color: #e5bc36"></i><br/> Fees : ₹ 8.82 Lakh<br/>Duration : 4 years | Full Time<br/>Exams: JEE Advanced<br/>
    Offered by IIT Madras - Department of Computer Engineering
                                    </p>
                                     <div style="text-align:center">
                                    <a href="course%20detail2.php?varname=3" class="btn btn-primary">View</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card mb-2">
                                
                                <div class="card-body">
                                    <h4 class="card-title">B.Tech. in Mechanical Engineering</h4>
                                    <p class="card-text">
                                        Rating : 4.7 &nbsp;<i class="fa fa-star" aria-hidden="true" style="color: #e5bc36"></i><i class="fa fa-star" aria-hidden="true" style="color: #e5bc36"></i><i class="fa fa-star" aria-hidden="true" style="color: #e5bc36"></i><i class="fa fa-star" aria-hidden="true" style="color: #e5bc36"></i><i class="fa fa-star-half-o" aria-hidden="true" style="color: #e5bc36"></i><br/> Fees : ₹ 8.82 Lakh<br/>Duration : 4 years | Full Time<br/>Exams: JEE Advanced<br/>
Offered by IIT Madras - Department of Mechanical Engineering
                                    </p>
                                    <div style="text-align:center">
                                    <a href="course%20detail2.php?varname=4" class="btn btn-primary">View</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/.First slide-->
                <!--Second slide-->
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card mb-2">
                                
                                <div class="card-body">
                                    <h4 class="card-title">B.Tech. in Electrical Engineering</h4>
                                    <p class="card-text">
                                        Rating : 4.9 &nbsp;<i class="fa fa-star" aria-hidden="true" style="color: #e5bc36"></i><i class="fa fa-star" aria-hidden="true" style="color: #e5bc36"></i><i class="fa fa-star" aria-hidden="true" style="color: #e5bc36"></i><i class="fa fa-star" aria-hidden="true" style="color: #e5bc36"></i><i class="fa fa-star" aria-hidden="true" style="color: #e5bc36"></i><br/> Fees : ₹ 8.82 Lakh<br/>Duration : 4 years | Full Time<br/>Exams: JEE Advanced<br/>
Offered by DoMS IIT Madras - Department of Electrical Studies
                                    </p>
                                   <div style="text-align:center">
                                    <a href="course%20detail2.php?varname=1" class="btn btn-primary">View</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card mb-2">
                                
                                <div class="card-body">
                                    <h4 class="card-title">B.Tech. in Chemical Engineering</h4>
                                    <p class="card-text">
                                        Rating : 4.7 &nbsp;<i class="fa fa-star" aria-hidden="true" style="color: #e5bc36"></i><i class="fa fa-star" aria-hidden="true" style="color: #e5bc36"></i><i class="fa fa-star" aria-hidden="true" style="color: #e5bc36"></i><i class="fa fa-star" aria-hidden="true" style="color: #e5bc36"></i><i class="fa fa-star" aria-hidden="true" style="color: #e5bc36"></i><br/> Fees : ₹ 8.82 Lakh<br/>Duration : 4 years | Full Time<br/>Exams: JEE Advanced<br/>

Offered by IIT Madras - Department of Chemical Engineering
                                    </p>
                                    <div style="text-align:center">
                                    <a href="course%20detail2.php?varname=5" class="btn btn-primary">View</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card mb-2">
                                
                                <div class="card-body">
                                    <h4 class="card-title">B.Tech. in Civil <br>Engineering</h4>
                                    <p class="card-text">
                                        Rating : 4.6 &nbsp;<i class="fa fa-star" aria-hidden="true" style="color: #e5bc36"></i><i class="fa fa-star" aria-hidden="true" style="color: #e5bc36"></i><i class="fa fa-star" aria-hidden="true" style="color: #e5bc36"></i><i class="fa fa-star" aria-hidden="true" style="color: #e5bc36"></i><i class="fa fa-star" aria-hidden="true" style="color: #e5bc36"></i><br/> Fees : ₹ 8.82 Lakh<br/>Duration : 4 years | Full Time<br/>Exams: JEE Advanced<br/>

Offered by IIT Madras - Department of Civil Engineering
                                    </p>
                                    <div style="text-align:center">
                                    <a href="course%20detail2.php?varname=6" class="btn btn-primary">View</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
            <!--/.Slides-->

        </div>
        <!--/.Carousel Wrapper-->
    </div>
    
    
    
    
    
        
    
    &nbsp;&nbsp;<br>
    <div align="center" class="images" ><h2>&nbsp;&nbsp;&nbsp;Images<br/></h2></div>
    <br>
    <div class="swiper-container">
    <div class="swiper-wrapper">
      <div class="swiper-slide"><img src=<?php  echo $row['img1']; ?> height="100%" width="100%"> </div>
      <div class="swiper-slide"><img src=<?php  echo $row["img2"]; ?> height="100%" width="100%"></div>
      <div class="swiper-slide"><img src=<?php  echo $row["img3"]; ?> height="100%" width="100%"></div>
      <div class="swiper-slide"><img src=<?php  echo $row["img4"]; ?> height="100%" width="100%"></div>
      <div class="swiper-slide"><img src=<?php  echo $row["img5"]; ?> height="100%" width="100%"></div>
      <div class="swiper-slide"><img src=<?php  echo $row["img6"]; ?> height="100%" width="100%"></div>
      <div class="swiper-slide"><img src=<?php  echo $row["img7"]; ?> height="100%" width="100%"></div>
      <div class="swiper-slide"><img src=<?php  echo $row["img8"]; ?> height="100%" width="100%"></div>
      
    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
  </div>

  <!-- Swiper JS -->
  <script src="../package/js/swiper.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper('.swiper-container', {
      slidesPerView: 3,
      spaceBetween: 30,
        autoplay:{
            delay: 5000
        },
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
    });
  </script>
    
    <br>
 
    <div>
	       <?php
        if($total !=0)
        {
            ?>
			
			<div class="reviews" align="center"><h1>Reviews</h1></div>
				<br>
        
         <?php
   
    while($result2=mysqli_fetch_assoc($data)){ 
   
      
      
      ?>
            <div class="comment-part">
					<div class="user-img-part">
                        
                        <div class="user-img">
							<img src="person.png">
						</div>
						<div class="user-text">
							
							<p><?php echo $result2['firstname']; ?>&nbsp;<?php echo $result2['lastname']; ?></p>
                            <div><span>Completion Year:<?php echo $result2['yearofcompletion']; ?></span></div>
						</div>
						<div style="clear: both;"></div>
					</div>
					<div class="comment">
						<?php   
      
            $a = $result2['overallrating'];
            $_POST = $a;                     
     # echo $a;
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
                        
						<p><?php echo $result2['titleofreview']; ?></p>
                        
                        
                      
                      <div style="text-align:right">
                          <a href="review2.php?varname=<?php echo $result2['id']; ?>" class="btn btn-primary" >Read More</a></div>
				
                     
                    
                                     
					
               
                </div>	
        </div>
        
        
    
        <?php 
  }
        ?>
     
    </div>
    <?php 
  }
        ?>
   
   <p style="color:white"><?php echo "gbnnmmmm"?></p>
    <div>
    
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
                <form method="post" data-toggle="validator" role="form" id="form" action="searchcollegeinfo2.php?myCountry=<?php echo $var_value ?>">
                <p>Name : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="name" style="height: 25px; width: 200px;" required></p>
                <p>Email ID : &nbsp;&nbsp;&nbsp;<input type="email" name="emailid" style="height: 25px; width: 200px;" required></p>
                <div class="row" style="text-align: center; align-content: center; margin-left: 100px;">
                <p>Comment :&nbsp;</p>
                
                <p><textarea name="comment" rows="3" cols="25" required> 
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
   
    </div>

    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery.min.js"></script>

    <script src="js/bootstrap.min.js"></script>
      
</body>
</html>