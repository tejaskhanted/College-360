<!doctype html>
<?php

    $result = false;

    $dbhost = 'localhost';
    $username = 'root';
    $password = '';
    $db = 'collegereview';

    if( $_SERVER['REQUEST_METHOD']=='POST' ){

        $conn = new mysqli ( $dbhost,$username, $password, $db );
        if( $conn ){

            $sql='insert into signup ( `username`,`email`,`password`) values (?,?,?);';
            $stmt=$conn->prepare( $sql );
            $stmt->bind_param('sss', $_POST['username'],$_POST['email'],$_POST['password']);
            $result = $stmt->execute();
            header('location:login.php');

        }
       
 else {
    echo "0 results";
}
        $conn->close();
    }
include("database1.php");
?>
<html lang="en">
<head>

    <!-- Bootstrap CSS -->
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
            height: 600px;
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
        #login-box
            {
                position: relative;
                margin: 5% auto;
                height: 500px;
                width: 800px;
                background: #fff;
                box-shadow: 0 2px 4px rgba(0,0,0,0.6);
            }
            .left-box
            {
                position: absolute;
                top: 0;
                left: 0;
                box-sizing: border-box;
                padding: 40px;
                width: 400px;
                height: 500px;
            }
            h1{
                margin: 0 0 20px 0;
                font-weight: 500;
                font-size: 38px;
                
            }
            .header input[type="text"],input[type="password"]
            {
                display: block;
                box-sizing: border-box;
                margin-bottom: 20px;
                padding: 6px;
                width: 320px;
                height: 52px;
                border: none;
                outline: none;
                border-bottom: 1px solid #aaa;
                font-family: sans-serif;
                font-weight: 400;
                font-size: 18px;
                transition: 0.2s ease;
            }
            input[type="submit"]
            {
                margin-bottom: 28px;
                width: 320px;
                height: 42px;
                background: #f44336;
                border: none;
                border-radius: 2px;
                color: #fff;
                font-family:sans-serif;
                text-transform: uppercase;
                transition: 0.2s ease;
                cursor: pointer;
            }
            input[type="submit"]:hover,input[type="submit"]:focus
            {
                background: #ff5722;
                transition: 0.2s ease;
            }
            .right-box
            {
                position: absolute;
                top: 0;
                right: 0;
                box-sizing: border-box;
                padding-left: 75px;
                padding-top: 50px;
                padding-right: 70px;
                width: 400px;
                height: 500px;
                background-image:url(img/iit-Roorkee.jpg);
                background-size: cover;
                background-position: center;
                align-items: center;
                align-content: center;
                    
            }
            .or{
                position: absolute;
                top: 220px;
                left: 370px;
                width: 60px;
                height: 60px;
                background: #efefef;
                border-radius: 50%;
                box-shadow: 0 2px 4px rgba(0,0,0,0.6);
                line-height: 65px;
                text-align: center;
            }
            
        @media screen and (max-width:800px){
            .header
        {
            height: 1050px;
            background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url(img/bg1.jpg);
            
            background-size:cover;
            background-position:center;
            display:flex;
            justify-content: center;
            align-items: center;
            font-family: sans-serif;
        }
            #login-box
            {
                float: left;
                position:absolute;
                top: 200px;
                margin: 0;
                height: 940px;
                width: 400px;
                background: #fff;
                box-shadow: 0 2px 4px rgba(0,0,0,0.6);
            }
            .left-box
            {
                position: absolute;
                top: 0;
                left: 0;
                box-sizing: border-box;
                padding: 40px;
                width: 400px;
                height: 500px;
            }
            .right-box
            {
                position: absolute;
                top: 500px;
                right: 0;
                box-sizing: border-box;
                padding-left: 75px;
                padding-top: 50px;
                padding-right: 70px;
                width: 400px;
                height: 440px;
                background-image:url(img/iit-Roorkee.jpg);
                background-size: cover;
                background-position: center;
                align-items: center;
                align-content: center;
                    
            }
            .or{
                position: absolute;
                top: 470px;
                left: 170px;
                width: 60px;
                height: 60px;
                background: #efefef;
                border-radius: 50%;
                box-shadow: 0 2px 4px rgba(0,0,0,0.6);
                line-height: 65px;
                text-align: center;
            }
            
        }
       
    .row input[type="email"]
{
     
    text-align: center;
    padding-left: 0px;
        }
    </style>
    <script>
    $(document).ready(function(){
        var $submitBtn = $("#form input[type='submit']");
        var $passwordBox = $("#inputPassword");
        var $confirmBox = $("#inputPasswordConfirm");
        var $errorMsg =  $('<span id="error_msg">These do not match. I wonder why...</span>');

        // This is incase the user hits refresh - some browsers will maintain the disabled state of the button.
        $submitBtn.removeAttr("disabled");

        function checkMatchingPasswords(){
            if($confirmBox.val() != "" && $passwordBox.val != ""){
                if( $confirmBox.val() != $passwordBox.val() ){
                    $submitBtn.attr("disabled", "disabled");
                    $errorMsg.insertAfter($confirmBox);
                }
            }
        }

        function resetPasswordError(){
            $submitBtn.removeAttr("disabled");
            var $errorCont = $("#error_msg");
            if($errorCont.length > 0){
                $errorCont.remove();
            }  
        }


        $("#inputPasswordConfirm, #inputPassword")
             .on("keydown", function(e){
                /* only check when the tab or enter keys are pressed
                 * to prevent the method from being called needlessly  */
                if(e.keyCode == 13 || e.keyCode == 9) {
                    checkMatchingPasswords();
                }
             })
             .on("blur", function(){                    
                // also check when the element looses focus (clicks somewhere else)
                checkMatchingPasswords();
            })
            .on("focus", function(){
                // reset the error message when they go to make a change
                resetPasswordError();
            })

    });
        
        
  </script>

    <title>Hello, world!</title>
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
                            <a class=" active" href="home.php" style="font-size: 17px;"><b>Home</b> </a>
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
    <div class="header">
        <div id="login-box">
            <div class="left-box">
                <h1>Sign Up</h1>
                <form method='post' data-toggle="validator" role="form" id="form">
                <input type="text" name="username" placeholder="Username" required>
                <input type="email" name="email" placeholder="Email" required style="display: block;
                box-sizing: border-box;
                margin-bottom: 20px;
                padding: 6px;
                width: 320px;
                height: 52px;
                border: none;
                outline: none;
                border-bottom: 1px solid #aaa;
                font-family: sans-serif;
                font-weight: 400;
                font-size: 18px;
                transition: 0.2s ease;">
                <input type="password" name="password" placeholder="Password" required id="inputPassword" data-minlength="6"  class="from-control" title="We recommend at least one number and one uppercase and lowercase letter, and at least 8 or more characters">
                <input type="password" name="password2" placeholder="Retype Password" required id="inputPasswordConfirm"  data-match="#inputPassword" data-match-error="These don't match. I wonder why..."   class="from-control">
                <input type="submit" name="signup" value="Sign Up"></form>
            
            </div>
            
            <div class="right-box">
                
                
            </div>
            <div></div>
        </div>
    
    </div> 
    
   

   

    
    
    
    
    
    
    
    
    
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
            <div class="f1" style="text-align: center;">
                <form method="post" data-toggle="validator" role="form" id="form" action="home.php">
                <p>Name : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="name" style="height: 25px; width: 200px;" required></p>
                <p>Email ID : &nbsp;&nbsp;&nbsp;<input type="email" name="emailid" style="height: 25px; width: 200px; " required></p>
                <div class="row" style="text-align: center; align-content: center; margin-left: 100px;">
                <p>Comment :&nbsp;</p>
                
                <p><textarea name="comment" rows="3" cols="25" required> 
                    </textarea></p>
                </div>    
                
                <input  type="submit" class="submit" style="        
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
                "
            >
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