<!doctype html>
<?php
session_start();


    $result = false;

    $dbhost = 'localhost';
    $username = 'root';
    $password = '';
    $db = 'collegereview';

    if( $_SERVER['REQUEST_METHOD']=='POST' ){

        $conn = new mysqli ( $dbhost,$username, $password, $db );
        if( $conn ){

            $sql='INSERT INTO `comment`( `name`, `emailid`, `comment`) values (?,?,?);';
            $stmt=$conn->prepare( $sql );
            $stmt->bind_param('sss', $_POST['name'],$_POST['emailid'],$_POST['comment']);
            $result = $stmt->execute();
            
        }
       
 else {
    echo "0 results";
}
        $conn->close();
    }
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
           
            
        }
       
       .reviews {
	text-align: center;
            font-size: 50px;
           font-weight: bold;  
           
}
    .user-img img{	
	height: 80px;
	width: 80px;
	border:1px solid blue;
	border-radius: 50%;
}
.user-img-part{
	width:25%;
	float:left;
   
}
.user-img{
	width:30%;
	float:left;
	text-align: center;
}
.user-text{
	float:left;
    width:20%;
    
}

.user-text p{
	font-size: 25px;
	font-weight: bold;
}
        .hp p{
            font-size: 22px;
            
        }  
       
       
        .hp{
        margin-top: 0px;
        margin-right: 25px;
       margin-bottom :10px;
       margin-left: 389px;
	   padding: 25px;
       word-wrap: break-word;
       text-align: left;
       
        }
       
        
    </style>
    <?php
include("database.php");
    
$var_value = $_GET['varname'];
#echo $var_value;    
error_reporting();
#$clg="IIT Madras - Indian Institute of Technology Chennai (IITM)";
    $query = "select * from reviewform where id = '$var_value'";
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);
#echo $total;
$result=mysqli_fetch_assoc($data);
 
#echo $result['firstname']."<br/>";

#echo $result['lastname']." ".$result['emailid'];
 


?>

    <title>Review</title>
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
                            <a class="" href="home.php" style="font-size: 17px;"><b>Home</b> </a>
                    </li>
                    <li class="nav-item">
                        <a class="" href="login.php" style="font-size: 17px;"><b>Enter review</b></a>
                    </li>
                    <li class="nav-item">
                        <a class="" href="compare.php" style="font-size: 17px;"><b>Compare College</b></a>
                    </li>
                    <li class="nav-item">
                        <a class="" href="#bottom" style="font-size: 17px;" ><b>Contact us</b></a>
                    </li>
                         <li>
                        <a href="login.php"  class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-color--light-blue-600 mdl-color-text--white" data-upgraded=",MaterialButton,MaterialRipple">LOGIN<span class="mdl-button__ripple-container"><span class="mdl-ripple is-animating" style="width: 207.056px; height: 207.056px; transform: translate(-50%, -50%) translate(760px, 14px);"></span></span></a>
                        <a href="signup.php"  style="margin-left: 10px" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-color--amber-500 mdl-color-text--grey-900" data-upgraded=",MaterialButton,MaterialRipple">SIGN UP<span class="mdl-button__ripple-container"><span class="mdl-ripple is-animating" style="width: 207.056px; height: 207.056px; transform: translate(-50%, -50%) translate(77px, 14px);"></span></span></a>

                    </li>
                
                
                   
                    
         </ul>
                </div>
         </div>
        </nav>
        <div class="reviews">Review</div>
        
        
					<div class="user-img-part">
						<div class="user-img">
							<img src="person.png">
						</div>
						<div class="user-text">
							
							<p><?php 
                                echo $result['firstname']." ".$result['lastname']."<br/>";
                                ?>
                                </p>
							
						</div>
                       
                       
					</div>
					<div class="hp">
                            <div class="titledetail"><h2 style="font-size: 39px;"><?php 
                                echo $result['collegename'];
                                ?></h2><p>
                                Title: <b><?php echo $result['titleofreview'] ?></b><br>
                                Year of completion: <b><?php 
                                echo $result['yearofcompletion'];
                                    ?></b></p>
                            </div>
                            
                   
                            
                        <div class="contentdetail"><h4>Placements:</h4>
                            <p><?php 
                                echo $result['placements']."<br/>";
                                ?></p>
                        </div>
                    
                            <div class="contentdetail"><h4>Infrastructure:</h4>
                               
						<p><?php 
                                echo $result['infrastructure']."<br/>";
                                ?></p></div>
                    
                            <div class="contentdetail"><h4>Faculty & Course Curriculum:</h4>
                               
						<p><?php 
                                echo $result['faculty&coursecurriculum']."<br/>";
                                ?></p></div>
                    <div class="contentdetail"><h4>Other Details:</h4>
                               
						<p><?php 
                                echo $result['otherdetails']."<br/>";
                                ?></p></div>
                        
                        <div class="contentdetail"><h4>College Infrastructure</h4>
                            <p><?php 
                            error_reporting(0);
                               $a = $result['collegeinfrastructure']."<br/>";
                                $_POST = $a;                     # echo $a;
                            if($_POST){

                              $cfg_min_stars = 1; //min star
                              $cfg_max_stars = 5; //max star
                              $temp_stars = $_POST['a'];

                              for($i=$cfg_min_stars; $i<=$cfg_max_stars; $i++) { 


                                if ($temp_stars >= 1) { 
                                  echo '<img src="Star (Full).png" width="40"/>';
                                  $temp_stars--;


                                }#else {
                                  #if ($temp_stars >= 0.5) {
                                   #echo '<img src="Star (Half Full).png" width="100"/>';
                                   # $temp_stars -= 0.5;
                                  #}
                                else { 
                                    echo '<img src="Star (Empty).png" width="40"/>';
                                  }
                                }
                              }

                                ?></p></div>
                        
                <div class="contentdetail"><h4>Faculty</h4>
                               
						<p><?php 
                            error_reporting(0);
                               $a = $result['faculty']."<br/>";
                                 $_POST = $a;                     # echo $a;
                                if($_POST){

                                  $cfg_min_stars = 1; //min star
                                  $cfg_max_stars = 5; //max star
                                  $temp_stars = $_POST['a'];

                                  for($i=$cfg_min_stars; $i<=$cfg_max_stars; $i++) { 


                                    if ($temp_stars >= 1) { 
                                      echo '<img src="Star (Full).png" width="40"/>';
                                      $temp_stars--;


                                    }#else {
                                      #if ($temp_stars >= 0.5) {
                                       #echo '<img src="Star (Half Full).png" width="100"/>';
                                       # $temp_stars -= 0.5;
                                      #}
                                    else { 
                                        echo '<img src="Star (Empty).png" width="40"/>';
                                      }
                                    }
                                  }

                                ?></p></div>
                        
                        <div class="contentdetail"><h4>College Placement</h4>
                               
						<p><?php 
                            error_reporting(0);
                               $a = $result['collegeplacement']."<br/>";
                                 $_POST = $a;                     # echo $a;
                                if($_POST){

                                  $cfg_min_stars = 1; //min star
                                  $cfg_max_stars = 5; //max star
                                  $temp_stars = $_POST['a'];

                                  for($i=$cfg_min_stars; $i<=$cfg_max_stars; $i++) { 


                                    if ($temp_stars >= 1) { 
                                      echo '<img src="Star (Full).png" width="40"/>';
                                      $temp_stars--;


                                    }#else {
                                      #if ($temp_stars >= 0.5) {
                                       #echo '<img src="Star (Half Full).png" width="100"/>';
                                       # $temp_stars -= 0.5;
                                      #}
                                    else { 
                                        echo '<img src="Star (Empty).png" width="40"/>';
                                      }
                                    }
                                  }

                                ?></p></div>
                        <div class="contentdetail"><h4>Industry Exposure</h4>
                               
						<p><?php 
                            error_reporting(0);
                               $a = $result['industryexposure']."<br/>";
                                 $_POST = $a;                     # echo $a;
                                if($_POST){

                                  $cfg_min_stars = 1; //min star
                                  $cfg_max_stars = 5; //max star
                                  $temp_stars = $_POST['a'];

                                  for($i=$cfg_min_stars; $i<=$cfg_max_stars; $i++) { 


                                    if ($temp_stars >= 1) { 
                                      echo '<img src="Star (Full).png" width="40"/>';
                                      $temp_stars--;


                                    }#else {
                                      #if ($temp_stars >= 0.5) {
                                       #echo '<img src="Star (Half Full).png" width="100"/>';
                                       # $temp_stars -= 0.5;
                                      #}
                                    else { 
                                        echo '<img src="Star (Empty).png" width="40"/>';
                                      }
                                    }
                                  }

                                ?></p></div>
                            <div class="contentdetail"><h4>Student Crowd</h4>
                               
						<p><?php 
                            error_reporting(0);
                               $a = $result['studentcrowd']."<br/>";
                                 $_POST = $a;                     # echo $a;
                                if($_POST){

                                  $cfg_min_stars = 1; //min star
                                  $cfg_max_stars = 5; //max star
                                  $temp_stars = $_POST['a'];

                                  for($i=$cfg_min_stars; $i<=$cfg_max_stars; $i++) { 


                                    if ($temp_stars >= 1) { 
                                      echo '<img src="Star (Full).png" width="40"/>';
                                      $temp_stars--;


                                    }#else {
                                      #if ($temp_stars >= 0.5) {
                                       #echo '<img src="Star (Half Full).png" width="100"/>';
                                       # $temp_stars -= 0.5;
                                      #}
                                    else { 
                                        echo '<img src="Star (Empty).png" width="40"/>';
                                      }
                                    }
                                  }

                                ?></p></div>
                        
                        <div class="contentdetail"><h4>College Life</h4>
                               
						<p><?php 
                            error_reporting(0);
                               $a = $result['collegelife']."<br/>";
                                 $_POST = $a;                     # echo $a;
                                if($_POST){

                                  $cfg_min_stars = 1; //min star
                                  $cfg_max_stars = 5; //max star
                                  $temp_stars = $_POST['a'];

                                  for($i=$cfg_min_stars; $i<=$cfg_max_stars; $i++) { 


                                    if ($temp_stars >= 1) { 
                                      echo '<img src="Star (Full).png" width="40"/>';
                                      $temp_stars--;


                                    }#else {
                                      #if ($temp_stars >= 0.5) {
                                       #echo '<img src="Star (Half Full).png" width="100"/>';
                                       # $temp_stars -= 0.5;
                                      #}
                                    else { 
                                        echo '<img src="Star (Empty).png" width="40"/>';
                                      }
                                    }
                                  }

                                ?></p></div>
                        
                        <div class="contentdetail"><h4>Hostel</h4>
                               
						<p><?php 
                            error_reporting(0);
                               $a = $result['hostel']."<br/>";
                                 $_POST = $a;                     # echo $a;
                                if($_POST){

                                  $cfg_min_stars = 1; //min star
                                  $cfg_max_stars = 5; //max star
                                  $temp_stars = $_POST['a'];

                                  for($i=$cfg_min_stars; $i<=$cfg_max_stars; $i++) { 


                                    if ($temp_stars >= 1) { 
                                      echo '<img src="Star (Full).png" width="40"/>';
                                      $temp_stars--;


                                    }#else {
                                      #if ($temp_stars >= 0.5) {
                                       #echo '<img src="Star (Half Full).png" width="100"/>';
                                       # $temp_stars -= 0.5;
                                      #}
                                    else { 
                                        echo '<img src="Star (Empty).png" width="40"/>';
                                      }
                                    }
                                  }

                                ?></p></div>
                                <div class="contentdetail"><h4>Affordability</h4>
                               
						<p><?php 
                            error_reporting(0);
                               $a = $result['affordability']."<br/>";
                                 $_POST = $a;                     # echo $a;
                                if($_POST){

                                  $cfg_min_stars = 1; //min star
                                  $cfg_max_stars = 5; //max star
                                  $temp_stars = $_POST['a'];

                                  for($i=$cfg_min_stars; $i<=$cfg_max_stars; $i++) { 


                                    if ($temp_stars >= 1) { 
                                      echo '<img src="Star (Full).png" width="40"/>';
                                      $temp_stars--;


                                    }#else {
                                      #if ($temp_stars >= 0.5) {
                                       #echo '<img src="Star (Half Full).png" width="100"/>';
                                       # $temp_stars -= 0.5;
                                      #}
                                    else { 
                                        echo '<img src="Star (Empty).png" width="40"/>';
                                      }
                                    }
                                  }

                                ?></p></div>
                        <div class="contentdetail"><h4>Total Fee:</h4>
                            <p><?php 
                                echo $result['totalfees']."<br/>";
                                ?></p>
                        </div>
                            
            </div>
 
   
<br>
    
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
                <h5><a href="login.php" style="color: #fff;">Enter Review</a></h5>
                <h5><a href="compare.php" style="color: #fff;">Compare College</a></h5>
                <h5><a href="/webStack_project/home.php#eng" style="color: #fff;">Top Engineering colleges</a></h5>
                <h5><a href="/webStack_project/home.php#med" style="color: #fff;">Top Medical colleges</a>
                </h5>
              
            
            
            
            </div>
            
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" id="bottom">
            <h3 style="text-align: center;">Contact us</h3><br>
            <div class="f1" style="text-align: center; text-size">
                <form method="post" data-toggle="validator" role="form" id="form" action="/webStack_project/login.php">
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
  

    
    
    
    
    
    
        

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery.min.js"></script>

    <script src="js/bootstrap.min.js"></script>
</body>
</html>