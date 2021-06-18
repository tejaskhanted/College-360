<!doctype html>
<?php

session_start();
include("database1.php");
?>
<html lang="en">
<head>
 <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
     <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
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
				
				padding: 14px 16px;
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
            .main1{
            
        padding-right: 30px;
            padding-left : 30px;
            
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
        
        
        
        /*Rating*/
        .rating {
    float:left;
}

/* :not(:checked) is a filter, so that browsers that don’t support :checked don’t 
   follow these rules. Every browser that supports :checked also supports :not(), so
   it doesn’t make the test unnecessarily selective */
.rating:not(:checked) > input {
    position:absolute;
    
    clip:rect(0,0,0,0);
}

.rating:not(:checked) > label {
    float:right;
    width:1em;
    padding:0 .1em;
    overflow:hidden;
    white-space:nowrap;
    cursor:pointer;
    font-size:200%;
    width:1em;
    padding:0 .1em;
	color:#ddd;
    text-shadow:1px 1px #bbb, 2px 2px #666, .1em .1em .2em rgba(0,0,0,.5);
}

.rating:not(:checked) > label:before {
    content: '★ ';
}

.rating > input:checked ~ label {
    color: #f70;
    text-shadow:1px 1px #c60, 2px 2px #940, .1em .1em .2em rgba(0,0,0,.5);
}

.rating:not(:checked) > label:hover,
.rating:not(:checked) > label:hover ~ label {
    color: gold;
    text-shadow:1px 1px goldenrod, 2px 2px #B57340, .1em .1em .2em rgba(0,0,0,.5);
}

.rating > input:checked + label:hover,
.rating > input:checked + label:hover ~ label,
.rating > input:checked ~ label:hover,
.rating > input:checked ~ label:hover ~ label,
.rating > label:hover ~ input:checked ~ label {
    color: #ea0;
    text-shadow:1px 1px goldenrod, 2px 2px #B57340, .1em .1em .2em rgba(0,0,0,.5);
}

.rating > label:active {
    position:relative;
    top:2px;
    left:2px;
}
    
    
    
    /*demo */
    .rating1,.rating2,.rating3,.rating4,.rating5,.rating6,.rating7,.rating8 {
    float:left;
}

/* :not(:checked) is a filter, so that browsers that don’t support :checked don’t 
   follow these rules. Every browser that supports :checked also supports :not(), so
   it doesn’t make the test unnecessarily selective */
.rating1:not(:checked) > input,.rating2:not(:checked) > input,.rating3:not(:checked) > input,.rating4:not(:checked) > input,.rating5:not(:checked) > input,.rating6:not(:checked) > input,.rating7:not(:checked) > input,.rating8:not(:checked) > input {
    position:absolute;
    
    clip:rect(0,0,0,0);
}

.rating1:not(:checked) > label,.rating2:not(:checked) > label,.rating3:not(:checked) > label,.rating4:not(:checked) > label,.rating5:not(:checked) > label,.rating6:not(:checked) > label,.rating7:not(:checked) > label,.rating8:not(:checked) > label {
    float:right;
    width:1em;
    padding:0 .1em;
    overflow:hidden;
    white-space:nowrap;
    cursor:pointer;
    font-size:200%;
    width:1em;
    padding:0 .1em;
	color:#ddd;
    text-shadow:1px 1px #bbb, 2px 2px #666, .1em .1em .2em rgba(0,0,0,.5);
}

.rating1:not(:checked) > label:before,.rating2:not(:checked) > label:before,.rating3:not(:checked) > label:before,.rating4:not(:checked) > label:before,.rating5:not(:checked) > label:before,.rating6:not(:checked) > label:before,.rating7:not(:checked) > label:before,.rating8:not(:checked) > label:before {
    content: '★ ';
}

.rating1 > input:checked ~ label,.rating2 > input:checked ~ label,.rating3 > input:checked ~ label,.rating4 > input:checked ~ label,.rating5 > input:checked ~ label,.rating6 > input:checked ~ label,.rating7 > input:checked ~ label,.rating8 > input:checked ~ label {
    color: #f70;
    text-shadow:1px 1px #c60, 2px 2px #940, .1em .1em .2em rgba(0,0,0,.5);
}

.rating1:not(:checked) > label:hover,
.rating1:not(:checked) > label:hover ~ label,
    .rating2:not(:checked) > label:hover,
.rating2:not(:checked) > label:hover ~ label,
    .rating3:not(:checked) > label:hover,
.rating3:not(:checked) > label:hover ~ label,
    .rating4:not(:checked) > label:hover,
.rating4:not(:checked) > label:hover ~ label,
    .rating5:not(:checked) > label:hover,
.rating5:not(:checked) > label:hover ~ label,
    .rating6:not(:checked) > label:hover,
.rating6:not(:checked) > label:hover ~ label,
    .rating7:not(:checked) > label:hover,
.rating7:not(:checked) > label:hover ~ label,
    .rating8:not(:checked) > label:hover,
.rating8:not(:checked) > label:hover ~ label{
    color: gold;
    text-shadow:1px 1px goldenrod, 2px 2px #B57340, .1em .1em .2em rgba(0,0,0,.5);
}

.rating1 > input:checked + label:hover,
.rating1 > input:checked + label:hover ~ label,
.rating1 > input:checked ~ label:hover,
.rating1 > input:checked ~ label:hover ~ label,
.rating1 > label:hover ~ input:checked ~ label,
    
    .rating2 > input:checked + label:hover,
.rating2 > input:checked + label:hover ~ label,
.rating2 > input:checked ~ label:hover,
.rating2 > input:checked ~ label:hover ~ label,
.rating2 > label:hover ~ input:checked ~ label,
    
    .rating3 > input:checked + label:hover,
.rating3 > input:checked + label:hover ~ label,
.rating3 > input:checked ~ label:hover,
.rating3 > input:checked ~ label:hover ~ label,
.rating3 > label:hover ~ input:checked ~ label,
    
    .rating4 > input:checked + label:hover,
.rating4 > input:checked + label:hover ~ label,
.rating4 > input:checked ~ label:hover,
.rating4 > input:checked ~ label:hover ~ label,
.rating4 > label:hover ~ input:checked ~ label,
    
    .rating5 > input:checked + label:hover,
.rating5 > input:checked + label:hover ~ label,
.rating5 > input:checked ~ label:hover,
.rating5 > input:checked ~ label:hover ~ label,
.rating5 > label:hover ~ input:checked ~ label,
    
    .rating6 > input:checked + label:hover,
.rating6 > input:checked + label:hover ~ label,
.rating6 > input:checked ~ label:hover,
.rating6 > input:checked ~ label:hover ~ label,
.rating6 > label:hover ~ input:checked ~ label,
    
    .rating7 > input:checked + label:hover,
.rating7 > input:checked + label:hover ~ label,
.rating7 > input:checked ~ label:hover,
.rating7 > input:checked ~ label:hover ~ label,
.rating7 > label:hover ~ input:checked ~ label,
    
    .rating8 > input:checked + label:hover,
.rating8 > input:checked + label:hover ~ label,
.rating8 > input:checked ~ label:hover,
.rating8 > input:checked ~ label:hover ~ label,
.rating8 > label:hover ~ input:checked ~ label{
    color: #ea0;
    text-shadow:1px 1px goldenrod, 2px 2px #B57340, .1em .1em .2em rgba(0,0,0,.5);
}

.rating1 > label:active,.rating2 > label:active,.rating3 > label:active,.rating4 > label:active,.rating5 > label:active,.rating6 > label:active,.rating7 > label:active,.rating8 > label:active {
    position:relative;
    top:2px;
    left:2px;
}
    .main {
   
  border: 5px;
font-size: 30px;
  margin: 10px;
}
        .main1 p{
            font-size: 20px;
        }
        h4{
          font-size: 30px;  
        }
        
</style>
    
    <?php
include("database.php");
    
$var_value = $_GET['varname'];
#echo $var_value;    
error_reporting();
#$clg="IIT Madras - Indian Institute of Technology Chennai (IITM)";
    $query = "select * from courseinfo where id = '$var_value'";
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);
#echo $total;
$result=mysqli_fetch_assoc($data);
 ?>

    <title>Course Detail</title>
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
                    </ul>
                </div>
                </div>
        </nav>
        <div class="main1">
    <div class="main">
        <center><img src="<?php echo $result['courseimg'] ?>" class="h-img" width="1400px" height="450px"></center>
        <h1 style="font-size: 50px;"><br/><?php echo $result['coursename'] ?></h1>
        <p style="font-size: 20px;" >
            <b>Stream : </b><?php echo $result['stream'] ?><br/>
           <b> Duration : </b><?php echo $result['duration'] ?><br/>
           <b> Course Type : </b><?php echo $result['coursetype'] ?>              </p>
        
    </div>
    <div><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $result['1stpara'] ?><br>
        
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $result['2ndpara'] ?><br>
        <?php echo $result['3rdpara'] ?></p>

       </div>
    <div>
        <h4><?php echo $result['name'] ?>: What is it About?</h4><p>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $result['about'] ?></p>

    </div>
    
    <div>
        <h4><?php echo $result['name'] ?>: Top Institutes</h4>

        <p><?php echo $result['1institute'] ?></p>
         <p><?php echo $result['2institute'] ?></p>
         <p><?php echo $result['3institute'] ?></p>
         <p><?php echo $result['4institute'] ?></p>
         <p><?php echo $result['5institute'] ?></p>
         <p><?php echo $result['6institute'] ?></p>
    </div>
    <div>
        <h4><?php echo $result['name'] ?>: Eligibility</h4>
   <p>     
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $result['eligibility'] ?></p>
    </div>
    <div>
        <h4><?php echo $result['name'] ?>: Admission Process</h4>
        <br>
      <img src="<?php echo $result['admissionimg'] ?>" class="h-img" width="500px" height="300px"><br>
        

    <br>
   <p>     
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $result['admissionprocess'] ?>
        </p>
        <p><b>Some main national level and state level engineering entrance tests are below-</b></p>
     <p><?php echo $result['exam1'] ?></p>
         <p><?php echo $result['exam2'] ?></p>
         <p><?php echo $result['exam3'] ?></p>
         <p><?php echo $result['exam4'] ?></p>
    
    
    </div>
    
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
                <form method="post" data-toggle="validator" role="form" id="form" action="course detail2.php?varname=<?php echo $var_value ?>">
                <p>Name : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="name" style="height: 25px; width: 200px;" required></p>
                <p>Email ID : &nbsp;&nbsp;&nbsp;<input type="email" name="emailid" style="height: 25px; width: 200px;" required></p>
                <div class="row" style="text-align: center; align-content: center; margin-left: 97px;">
                <p>Comment :&nbsp;&nbsp;</p>
                
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