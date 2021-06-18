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

            $sql='INSERT INTO `reviewform`( `collegename`, `yearofcompletion`, `placements`, `infrastructure`, `faculty&coursecurriculum`, `otherdetails`, `titleofreview`, `overallrating`, `collegeinfrastructure`, `faculty`, `collegeplacement`, `industryexposure`, `studentcrowd`, `collegelife`, `hostel`, `affordability`, `recommend`, `totalfees`, `firstname`, `lastname`, `emailid`, `mobilenumber`) values (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?);';
            $stmt=$conn->prepare( $sql );
            $stmt->bind_param('ssssssssssssssssssssss', $_POST['collegename'],$_POST['yearofcompletion'],$_POST['placements'],$_POST['infrastructure'],$_POST['faculty&coursecurriculum'],$_POST['otherdetails'],$_POST['titleofreview'],$_POST['rating'],$_POST['rating1'],$_POST['rating2'],$_POST['rating3'],$_POST['rating4'],$_POST['rating5'],$_POST['rating6'],$_POST['rating7'],$_POST['rating8'],$_POST['rt'],$_POST['totalfees'],$_POST['firstname'],$_POST['lastname'],$_POST['email'],$_POST['mobileno']);
            $result = $stmt->execute();
           
	
        }
       
 else {
    echo "0 results";
}
        $conn->close();
    }

?>

<?php


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









<html>
    <head>
         <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Review Form</title>
        <script src="http://code.jquery.com/jquery-2.1.0.min.js"></script>
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
        .review{
            align-content: center;
            text-align: center;
        }
        .form{
            text-align: justify;
        }
      .container p{
            font-size: 13px;
        }
        .info{
            font-size: 15px;
        }
        
        
        /*rating*/
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
        
        .s1{
            margin-bottom: 35px;
                width: 250px;
                height: 42px;
                background: #EEA234;
                border: none;
                border-radius: 6px;
                color: #fff;
                font-family:sans-serif;
                font-size: 20px;
                text-transform: uppercase;
                transition: 0.2s ease;
                cursor: pointer;
        }
        
        </style>
    
    
    
    
    </head>


    <body>
        <nav class="navbar navbar-expand-md navbar-light bg-white sticky-top">
            <div class="container-fluid">
                <a class="navbar-brand" href="home2.php"><img src="img/logo.png" width="160px" height="110px"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
                    <span class="navbar-toggler-icon"></span>
                
                
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                       <li class="nav-item active">
                            <a class="" href="home2.php" style="font-size: 17px;"><b>Home</b> </a>
                    </li>
                    <li class="nav-item">
                        <a class="active" href="review_form.php" style="font-size: 17px;"><b>Enter review</b></a>
                    </li>
                    <li class="nav-item">
                        <a class="" href="compare2.php" style="font-size: 17px;"><b>Compare College</b></a>
                    </li>
                    <li class="nav-item">
                        <a class="" href="#bottom" style="font-size: 17px;"><b>Contact us</b></a>
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
        <div class="container">
        <div class="review">
            <form method="post" data-toggle="validator" role="form" id="form">
            <h2>Your College Experience could help others<hr></h2>
            
            <div class="form"><p class="info">Your college review can help thousands of students make an informed college decision.<br><br>

To increase your chances of having your review accepted on College360, make your review HONEST and DETAILED by giving specifics on Placements, Internships, Infrastructure, Curriculum and Faculty.<br><br>
                <b>We will reject your review if:</b><br>
1. It is too short and vague, without any useful information<br>
2. You have copied text from anywhere on the internet<br>
3. You have used junk characters, SMS language, slang or abusive words in your review<br>
                4. Your personal details could not be verified<br><br></p>
                <h5>Your College Details</h5><br>

                <h6>College Name</h6>
                <p>Enter the college name you're about to review</p>
                <?php
include("database.php");
error_reporting();
$query = "select * from collegeinfo";
$data = mysqli_query($conn, $query);

?>
                
                
        
          <select style="box-shadow: none;
    border: 1px solid #caccce; padding: 10px;
    background: #f9f9f6;
    color: #8e8a8a; height: 45px; width: 600px;" name="collegename" required >
        <option value="">Select College</option>
              <?php
                  while($result1=mysqli_fetch_assoc($data))
        {
          ?>
              
        <option value="<?php echo $result1["clgname"]; ?>"><?php echo $result1["clgname"]; ?></option>
          <?php
        }
           ?>   
    
        </select>
                 
                
                
                
                
                
                
              
              <br>
                <p style="color: red">You can’t leave this empty.</p>
                <h6>Year of Completion</h6>
<p>Select the year when you completed the course.<br>

    If you're currently studying, please enter the year when you will complete the course.</p>
                <select style=" padding: 10px;
    background: #f9f9f6;
    color: #8e8a8a; height: 40px; width: 600px;" name="yearofcompletion" required>
                    <option value="none">Select</option>
                    <option value="2025">2025</option>
                    <option value="2024">2024</option>
                    <option value="2023">2023</option>
                    <option value="2022">2022</option>
                    <option value="2021">2021</option>
                    <option value="2020">2020</option>
                    <option value="2019">2019</option>
                    <option value="2018">2018</option>
                    
                </select><p style="color: red">Please select Year of Completion.
</p>
                <h6>Placements</h6> <p>(At least 3-4 lines)<br>

How were placements for your batch and your senior batch? What per cent of students were placed? What was the highest, lowest and average salary offered? Which all companies visited the campus? What kind of roles were offered to the students?

What percent of students got internship from college? What was the highest, lowest and the average stipend offered during internship?
                Is there a placement cell? How efficient or useful is it?</p>
                <textarea style="    box-shadow: none;
    border: 1px solid #caccce;
    padding: 10px;
    background: #f9f9f6;
    color: #8e8a8a; width: 1115px; height: 100px;" name="placements" required>
                </textarea>
                <p style="color: red">You can’t leave this empty.
                </p>
                
                <h6>Infrastructure</h6> <p>(At least 3-4 lines)<br>

Describe the facilities (e.g. Wi-Fi, Labs, Classrooms, Library, Medical Facilities, Sports and Games etc.) available in the campus. What is the quality of labs and classrooms? What is the quality of food available in the canteen? How are hostel rooms? Did you face any infrastructure related issues during your tenure at the college?

</p>
                <textarea style="    box-shadow: none;
    border: 1px solid #caccce;
    padding: 10px;
    background: #f9f9f6;
    color: #8e8a8a; width: 1115px; height: 100px;" name="infrastructure" required>
                </textarea>
                <p style="color: red">You can’t leave this empty.
                </p>
                
                
                <h6>Faculty & Course Curriculum</h6> <p>(At least 3-4 lines)<br>

Were the teachers helpful, qualified, and knowledgeable? How was the teaching quality? What teaching methods were used? What was the student to faculty ratio? Did you get industry exposure? Kindly provide the details. Was the course curriculum useful?

</p>
                <textarea style="    box-shadow: none;
    border: 1px solid #caccce;
    padding: 10px;
    background: #f9f9f6;
    color: #8e8a8a; width: 1115px; height: 100px;" name="faculty&coursecurriculum" required>
                </textarea>
                <p style="color: red">You can’t leave this empty.
                </p>
                
                <h6>Other Details</h6> <p>

(E.g. - Events, Fest, Campus Crowd, Connectivity, Campus Surroundings, Scholarship, Extracurricular Activities, etc.)

</p>
                <textarea style="    box-shadow: none;
    border: 1px solid #caccce;
    padding: 10px;
    background: #f9f9f6;
    color: #8e8a8a; width: 1115px; height: 100px;" name="otherdetails" required>
                </textarea>
                <p style="color: red">You can’t leave this empty.
                </p>
                
                <h6>Title of Review</h6> <p>

Give a short headline that summarizes your college review. e.g. Absolutely dissatisfied because of faculty, good placements in 2015, really good infrastructure and facilities etc.

</p>
                <input type="text" style="box-shadow: none;
    border: 1px solid #caccce; padding: 10px;
    background: #f9f9f6;
    color: #8e8a8a; height: 40px; width: 600px;" name="titleofreview" required>
                <p style="color: red">You can’t leave this empty.
                </p>
                <h6>Rate Your College On The Following Parameters</h6>
                
                <h6>Overall Rating</h6>

<div class="rating" >
  
    <input type="radio" id="star5" name="rating" value="5" required /><label for="star5" title="Rocks!" >5 stars</label>
    <input type="radio" id="star4" name="rating" value="4" required /><label for="star4" title="Pretty good">4 stars</label>
    <input type="radio" id="star3" name="rating" value="3" required/><label for="star3" title="Meh">3 stars</label>
    <input type="radio" id="star2" name="rating" value="2" required/><label for="star2" title="Kinda bad">2 stars</label>
    <input type="radio" id="star1" name="rating" value="1" required/><label for="star1" title="Sucks big time">1 star</label>
</div>
<br>
<br>
<br>

<table>

<tr>
    <td><h6>College Infrastructure&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h6></td>
<td><div class="rating1">
  
    <input type="radio" id="star51" name="rating1" value="5" required/><label for="star51" title="Rocks!">5 stars</label>
    <input type="radio" id="star41" name="rating1" value="4" required/><label for="star41" title="Pretty good">4 stars</label>
    <input type="radio" id="star31" name="rating1" value="3" required/><label for="star31" title="Meh">3 stars</label>
    <input type="radio" id="star21" name="rating1" value="2" required/><label for="star21" title="Kinda bad">2 stars</label>
    <input type="radio" id="star11" name="rating1" value="1" required/><label for="star11" title="Sucks big time">1 star</label>
</div></td>
</tr>
<tr>
    <td><h6>Faculty</h6></td>
<td><div class="rating2">
  
    <input type="radio" id="star52" name="rating2" value="5" required/><label for="star52" title="Rocks!">5 stars</label>
    <input type="radio" id="star42" name="rating2" value="4" required/><label for="star42" title="Pretty good">4 stars</label>
    <input type="radio" id="star32" name="rating2" value="3" required/><label for="star32" title="Meh">3 stars</label>
    <input type="radio" id="star22" name="rating2" value="2" required/><label for="star22" title="Kinda bad">2 stars</label>
    <input type="radio" id="star12" name="rating2" value="1" required/><label for="star12" title="Sucks big time">1 star</label>
</div></td>
</tr>
<tr>
    <td><h6>College Placement</h6></td>
<td>
<div  class="rating3">
  
    <input type="radio" id="star53" name="rating3" value="5" required/><label for="star53" title="Rocks!">5 stars</label>
    <input type="radio" id="star43" name="rating3" value="4" required/><label for="star43" title="Pretty good">4 stars</label>
    <input type="radio" id="star33" name="rating3" value="3" required/><label for="star33" title="Meh">3 stars</label>
    <input type="radio" id="star23" name="rating3" value="2" required/><label for="star23" title="Kinda bad">2 stars</label>
    <input type="radio" id="star13" name="rating3" value="1" required/><label for="star13" title="Sucks big time">1 star</label>
</div></td>
</tr>
<tr>
    <td><h6>Industry Exposure</h6></td>
<td>
<div class="rating4">
  
    <input type="radio" id="star54" name="rating4" value="5" required/><label for="star54" title="Rocks!">5 stars</label>
    <input type="radio" id="star44" name="rating4" value="4" required/><label for="star44" title="Pretty good">4 stars</label>
    <input type="radio" id="star34" name="rating4" value="3" required/><label for="star34" title="Meh">3 stars</label>
    <input type="radio" id="star24" name="rating4" value="2" required/><label for="star24" title="Kinda bad">2 stars</label>
    <input type="radio" id="star14" name="rating4" value="1" required/><label for="star14" title="Sucks big time">1 star</label>
</div></td>
</tr>
<tr>
    <td><h6>Student Crowd</h6></td>
<td>
<div class="rating5">
  
    <input type="radio" id="star55" name="rating5" value="5" required/><label for="star55" title="Rocks!">5 stars</label>
    <input type="radio" id="star45" name="rating5" value="4" required/><label for="star45" title="Pretty good">4 stars</label>
    <input type="radio" id="star35" name="rating5" value="3" required/><label for="star35" title="Meh">3 stars</label>
    <input type="radio" id="star25" name="rating5" value="2" required/><label for="star25" title="Kinda bad">2 stars</label>
    <input type="radio" id="star15" name="rating5" value="1" required/><label for="star15" title="Sucks big time">1 star</label>
</div></td>
</tr>
<tr>
    <td><h6>College Life</h6></td>
<td>
<div class="rating6">
  
    <input type="radio" id="star56" name="rating6" value="5" required/><label for="star56" title="Rocks!">5 stars</label>
    <input type="radio" id="star46" name="rating6" value="4" required/><label for="star46" title="Pretty good">4 stars</label>
    <input type="radio" id="star36" name="rating6" value="3" required/><label for="star36" title="Meh">3 stars</label>
    <input type="radio" id="star26" name="rating6" value="2" required/><label for="star26" title="Kinda bad">2 stars</label>
    <input type="radio" id="star16" name="rating6" value="1" required/><label for="star16" title="Sucks big time">1 star</label>
</div></td>
</tr>
<tr>
    <td><h6>Hostel</h6></td>
<td>
<div class="rating7">
  
    <input type="radio" id="star57" name="rating7" value="5" required/><label for="star57" title="Rocks!">5 stars</label>
    <input type="radio" id="star47" name="rating7" value="4" required/><label for="star47" title="Pretty good">4 stars</label>
    <input type="radio" id="star37" name="rating7" value="3" required/><label for="star37" title="Meh">3 stars</label>
    <input type="radio" id="star27" name="rating7" value="2" required/><label for="star27" title="Kinda bad">2 stars</label>
    <input type="radio" id="star17" name="rating7" value="1" required/><label for="star17" title="Sucks big time">1 star</label>
</div></td>
</tr>
<tr>
    <td><h6>Affordability</h6></td>
<td>
<div class="rating8">
  
    <input type="radio" id="star58" name="rating8" value="5" required/><label for="star58" title="Rocks!">5 stars</label>
    <input type="radio" id="star48" name="rating8" value="4" required/><label for="star48" title="Pretty good">4 stars</label>
    <input type="radio" id="star38" name="rating8" value="3" required/><label for="star38" title="Meh">3 stars</label>
    <input type="radio" id="star28" name="rating8" value="2" required/><label for="star28" title="Kinda bad">2 stars</label>
    <input type="radio" id="star18" name="rating8" value="1" required/><label for="star18" title="Sucks big time">1 star</label>
</div></td>
</tr>
</table>
                <h6>Would you recommend others to take admission in your college?<br></h6>
<input type="radio" name="rt" value="yes" required>&nbsp;yes&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="radio" name="rt" value="no" required>&nbsp;no&nbsp;<br><br>
                
                <h6>What was/is the approximate Total Fees charged by your College for this course? </h6>
<p>1. Please write below the Total Fees which includes Tuition, Hostel, Library, Admission fees, Mess and any other charges (e.g Rs 150000)<br>
    2. Please enter numbers only</p>
                <input type="text" style="box-shadow: none;
    border: 1px solid #caccce; padding: 10px;
    background: #f9f9f6;
    color: #8e8a8a; height: 40px; width: 600px;" placeholder="e.g Rs 150000" name="totalfees" required><br><br><hr><br>
                <h6>Personal Details</h6>

                <p>Students trust a review when it comes from a genuine person. Please give us few basic details about yourself which we will verify.</p>

                <h6>First Name</h6>
               <p> <input type="text" style="box-shadow: none;
    border: 1px solid #caccce; padding: 10px;
    background: #f9f9f6;
                   color: #8e8a8a; height: 40px; width: 600px;" name="firstname" required></p>
                <h6>Last Name</h6>
               <p> <input type="text" style="box-shadow: none;
    border: 1px solid #caccce; padding: 10px;
    background: #f9f9f6;
                   color: #8e8a8a; height: 40px; width: 600px;" name="lastname" required></p>
                <h6>Personal Email ID</h6>
                <p><input type="email" style="box-shadow: none;
    border: 1px solid #caccce; padding: 10px;
    background: #f9f9f6;
                    color: #8e8a8a; height: 40px; width: 600px;" name="email" required></p>
                <h6>Mobile Number</h6>
                <p><input type="text" style="box-shadow: none;
    border: 1px solid #caccce; padding: 10px;
    background: #f9f9f6;
                    color: #8e8a8a; height: 40px; width: 600px;" name="mobileno" required></p><br>
                <!--<button class="s1" ><bold>Submit Review</bold></button><br>-->
                <input type="submit" class="s1" value="Submit Review">





                
            </div>
            
            </form>
            
        
        </div>
        
        </div>
        
        
        
        
        
        
        
     <!-- Footer-->
        
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
                <h5><a href="compare2.php" style="color: #fff;">Compare College</a></h5>
                <h5><a href="/webStack_project/home2.php#eng" style="color: #fff;">Top Engineering colleges</a></h5>
                <h5><a href="/webStack_project/home2.php#med" style="color: #fff;">Top Medical colleges</a>
                </h5>
              
            
            
            
            </div>
            
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" id="bottom">
            <h3 style="text-align: center;">Contact us</h3><br>
            <div class="f1" style="text-align: center;">
                <form method="post" data-toggle="validator" role="form" id="form" action="review_form.php">
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