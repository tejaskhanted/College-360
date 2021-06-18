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
        .ui-autocomplete {
        position: absolute;
        top: 100%;
        left: 0;
        z-index: 1000;
        display: none;
        float: left;
        min-width: 160px;
        padding: 5px 0;
        margin: 2px 0 0;
        list-style: none;
        font-size: 14px;
        text-align: left;
        background-color: #ffffff;
        border: 1px solid #cccccc;
        border: 1px solid rgba(0, 0, 0, 0.15);
        border-radius: 4px;
        -webkit-box-shadow: 0 6px 12px rgba(0, 0, 0, 0.175);
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.175);
        background-clip: padding-box;
      }
      
      .ui-autocomplete > li > div {
        display: block;
        padding: 3px 20px;
        clear: both;
        font-weight: normal;
        line-height: 1.42857143;
        color: #333333;
        white-space: nowrap;
      }
      
      .ui-state-hover,
      .ui-state-active,
      .ui-state-focus {
        text-decoration: none;
        color: #262626;
        background-color: #f5f5f5;
        cursor: pointer;
      }
      
      .ui-helper-hidden-accessible {
        border: 0;
        clip: rect(0 0 0 0);
        height: 1px;
        margin: -1px;
        overflow: hidden;
        padding: 0;
        position: absolute;
        width: 1px;
      }
        
        
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
       .autocomplete-items {
  position: absolute;
  border: 1px solid #d4d4d4;
  border-bottom: none;
  border-top: none;
  z-index: 99;
  /*position the autocomplete items to be the same width as the container:*/
  top: 82%;
  left: 10;
  right: 10;
}

.autocomplete-items div {
  padding: 10px;
  cursor: pointer;
  background-color: #fff; 
  border-bottom: 1px solid #d4d4d4; 
}

/*when hovering an item:*/
.autocomplete-items div:hover {
  background-color: #e9e9e9; 
}

/*when navigating through the items using the arrow keys:*/
.autocomplete-active {
  background-color: DodgerBlue !important; 
  color: #ffffff; 
}
        
         
        
        
    </style>

    <title>Home</title>
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
        <form  autocomplete="off" action="searchcollegeinfo.php" style="max-height: 100%; max-width: 90%;">
            <h1>Search your College</h1>
            <div class="autocomplete form-box">
                <input type="text" id="myInput" name="myCountry" class="search-field business" placeholder="Search Colleges....."  >
                
                <input class="search-btn" type="submit" >
                
            </div>
        
        
        </form>
    </div> 
    
    
    
    <script>
function autocomplete(inp, arr) {
  /*the autocomplete function takes two arguments,
  the text field element and an array of possible autocompleted values:*/
  var currentFocus;
  /*execute a function when someone writes in the text field:*/
  inp.addEventListener("input", function(e) {
      var a, b, i, val = this.value;
      /*close any already open lists of autocompleted values*/
      closeAllLists();
      if (!val) { return false;}
      currentFocus = -1;
      /*create a DIV element that will contain the items (values):*/
      a = document.createElement("DIV");
      a.setAttribute("id", this.id + "autocomplete-list");
      a.setAttribute("class", "autocomplete-items");
      /*append the DIV element as a child of the autocomplete container:*/
      this.parentNode.appendChild(a);
      /*for each item in the array...*/
      for (i = 0; i < arr.length; i++) {
        /*check if the item starts with the same letters as the text field value:*/
        if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
          /*create a DIV element for each matching element:*/
          b = document.createElement("DIV");
          /*make the matching letters bold:*/
          b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
          b.innerHTML += arr[i].substr(val.length);
          /*insert a input field that will hold the current array item's value:*/
          b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
          /*execute a function when someone clicks on the item value (DIV element):*/
          b.addEventListener("click", function(e) {
              /*insert the value for the autocomplete text field:*/
              inp.value = this.getElementsByTagName("input")[0].value;
              /*close the list of autocompleted values,
              (or any other open lists of autocompleted values:*/
              closeAllLists();
          });
          a.appendChild(b);
        }
      }
  });
  /*execute a function presses a key on the keyboard:*/
  inp.addEventListener("keydown", function(e) {
      var x = document.getElementById(this.id + "autocomplete-list");
      if (x) x = x.getElementsByTagName("div");
      if (e.keyCode == 40) {
        /*If the arrow DOWN key is pressed,
        increase the currentFocus variable:*/
        currentFocus++;
        /*and and make the current item more visible:*/
        addActive(x);
      } else if (e.keyCode == 38) { //up
        /*If the arrow UP key is pressed,
        decrease the currentFocus variable:*/
        currentFocus--;
        /*and and make the current item more visible:*/
        addActive(x);
      } else if (e.keyCode == 13) {
        /*If the ENTER key is pressed, prevent the form from being submitted,*/
        e.preventDefault();
        if (currentFocus > -1) {
          /*and simulate a click on the "active" item:*/
          if (x) x[currentFocus].click();
        }
      }
  });
  function addActive(x) {
    /*a function to classify an item as "active":*/
    if (!x) return false;
    /*start by removing the "active" class on all items:*/
    removeActive(x);
    if (currentFocus >= x.length) currentFocus = 0;
    if (currentFocus < 0) currentFocus = (x.length - 1);
    /*add class "autocomplete-active":*/
    x[currentFocus].classList.add("autocomplete-active");
  }
  function removeActive(x) {
    /*a function to remove the "active" class from all autocomplete items:*/
    for (var i = 0; i < x.length; i++) {
      x[i].classList.remove("autocomplete-active");
    }
  }
  function closeAllLists(elmnt) {
    /*close all autocomplete lists in the document,
    except the one passed as an argument:*/
    var x = document.getElementsByClassName("autocomplete-items");
    for (var i = 0; i < x.length; i++) {
      if (elmnt != x[i] && elmnt != inp) {
        x[i].parentNode.removeChild(x[i]);
      }
    }
  }
  /*execute a function when someone clicks in the document:*/
  document.addEventListener("click", function (e) {
      closeAllLists(e.target);
  });
}

/*An array containing all the country names in the world:*/
var countries = ["IIT Madras - Indian Institute of Technology Chennai (IITM)","IIT Delhi - Indian Institute of Technology (IITD)","IIT Bombay - Indian Institute of Technology (IITB)","IIT Kharagpur - Indian Institute of Technology (IITKGP)","IIT Kanpur - Indian Institute of Technology (IITK)","IIT Hyderabad - Indian Institute of Technology (IITH)","IIT Roorkee - Indian Institute of Technology (IITR)","IIT Guwahati - Indian Institute of Technology (IITG)","CEG - College of Engineering Guindy, Anna University","All India Institute of Medical Sciences(AIIMS)","Christian Medical College","Maulana Azad Medical College","Kasturba Medical College","King George Medical University","Armed Forces Medical College, Pune","Jawaharlal Institute of Postgraduate Medical Education and Research","University College of Medical Sciences","Andhra Medical College"];

/*initiate the autocomplete function on the "myInput" element, and pass along the countries array as possible autocomplete values:*/
autocomplete(document.getElementById("myInput"), countries);
</script> 
    <h2 id="eng"><br/>&nbsp;Top Engineering Colleges in India</h2>
    <br>
    <div class="container" >
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
                                <img class="card-img-top"
                                     src="img/IIT-MAdras1.jpg"
                                     alt="Card image cap" width="250px" height="225px">
                                <div class="card-body">
                                    <h4 class="card-title">IIT Madras - Indian Institute of Technology Chennai (IITM)</h4>
                                    <p class="card-text">
                                        Public/Government | Established 1959<br/>Autonomous Institute <br/>
                                        <i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp;Chennai<br/> Rating : 4.6 &nbsp;<i class="fa fa-star" aria-hidden="true" style="color: #e5bc36"></i><i class="fa fa-star" aria-hidden="true" style="color: #e5bc36"></i><i class="fa fa-star" aria-hidden="true" style="color: #e5bc36"></i><i class="fa fa-star" aria-hidden="true" style="color: #e5bc36"></i><i class="fa fa-star-half-o" aria-hidden="true" style="color: #e5bc36"></i>
                                    </p>
                                  <div style="text-align:center">
                                    <a href="collegeinfo.php?varname=<?php echo 1 ?>" class="btn btn-primary">View college</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card mb-2">
                                <img class="card-img-top"
                                     src="img/IIT-Delhi.webp"
                                     alt="Card image cap" width="250px" height="225px">
                                <div class="card-body">
                                    <h4 class="card-title">IIT Delhi - Indian Institute of Technology <br>(IITD)</h4>
                                    <p class="card-text">
                                        Public/Government | Established 1961<br/>Deemed University  <br/>
                                        <i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp;Delhi<br/> Rating : 4.4 &nbsp;<i class="fa fa-star" aria-hidden="true" style="color: #e5bc36"></i><i class="fa fa-star" aria-hidden="true" style="color: #e5bc36"></i><i class="fa fa-star" aria-hidden="true" style="color: #e5bc36"></i><i class="fa fa-star" aria-hidden="true" style="color: #e5bc36"></i><i class="fa fa-star-half-o" aria-hidden="true" style="color: #e5bc36"></i>
                                    </p>
                                    <div style="text-align:center">
                                    <a href="collegeinfo.php?varname=<?php echo 2 ?>" 
                                       class="btn btn-primary" >View college</a></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card mb-2">
                                <img class="card-img-top"
                                     src="img/iitbombay1.jpg"
                                     alt="Card image cap" width="250px" height="225px">
                                <div class="card-body">
                                    <h4 class="card-title">IIT Bombay - Indian Institute of Technology (IITB)</h4>
                                    <p class="card-text">
                                        Public/Government | Established 1958<br/>Deemed University  <br/>
                                        <i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp;Powai, Mumbai<br/> Rating : 4.7 &nbsp;<i class="fa fa-star" aria-hidden="true" style="color: #e5bc36"></i><i class="fa fa-star" aria-hidden="true" style="color: #e5bc36"></i><i class="fa fa-star" aria-hidden="true" style="color: #e5bc36"></i><i class="fa fa-star" aria-hidden="true" style="color: #e5bc36"></i><i class="fa fa-star-half-o" aria-hidden="true" style="color: #e5bc36"></i>
                                    </p>
                                    <div style="text-align:center">
                                        <a href="collegeinfo.php?varname=<?php echo 3 ?>"  class="btn btn-primary">View college</a></div>
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
                                <img class="card-img-top"
                                     src="img/IIT-Kharagpur.jpg" alt="Card image cap" width="250px" height="225px">
                                <div class="card-body">
                                    <h4 class="card-title">IIT Kharagpur - Indian Institute of Technology (IITKGP)</h4>
                                    <p class="card-text">
                                        Public/Government | Established 1951<br/>Autonomous Institute  <br/>
                                        <i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp;Kharagpur<br/> Rating : 4.5 &nbsp;<i class="fa fa-star" aria-hidden="true" style="color: #e5bc36"></i><i class="fa fa-star" aria-hidden="true" style="color: #e5bc36"></i><i class="fa fa-star" aria-hidden="true" style="color: #e5bc36"></i><i class="fa fa-star" aria-hidden="true" style="color: #e5bc36"></i><i class="fa fa-star-half-o" aria-hidden="true" style="color: #e5bc36"></i>
                                    </p>
                                    <div style="text-align:center">
                                        <a href="collegeinfo.php?varname=<?php echo 4 ?>"  class="btn btn-primary" >View college</a></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card mb-2">
                                <img class="card-img-top"
                                     src="img/iit-kanpur.jpg" alt="Card image cap" width="250px" height="225px">
                                <div class="card-body">
                                    <h4 class="card-title">IIT Kanpur - Indian Institute of Technology <br>(IITK)</h4>
                                    <p class="card-text">
                                        Public/Government | Established 1959<br/>Autonomous Institute  <br/>
                                        <i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp;Kanpur<br/> Rating : 4.7 &nbsp;<i class="fa fa-star" aria-hidden="true" style="color: #e5bc36"></i><i class="fa fa-star" aria-hidden="true" style="color: #e5bc36"></i><i class="fa fa-star" aria-hidden="true" style="color: #e5bc36"></i><i class="fa fa-star" aria-hidden="true" style="color: #e5bc36"></i><i class="fa fa-star-half-o" aria-hidden="true" style="color: #e5bc36"></i>
                                    </p>
                                    <div style="text-align:center">
                                        <a href="collegeinfo.php?varname=<?php echo 5 ?>"  class="btn btn-primary">View college</a></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card mb-2">
                                <img class="card-img-top"
                                     src="img/iit-Roorkee.jpg" alt="Card image cap" width="250px" height="225px">
                                <div class="card-body">
                                    <h4 class="card-title">IIT Roorkee - Indian Institute of Technology (IITR)</h4>
                                    <p class="card-text">
                                        Public/Government | Established 1847<br/>Autonomous Institute  <br/>
                                        <i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp;Roorkee<br/> Rating : 4.4 &nbsp;<i class="fa fa-star" aria-hidden="true" style="color: #e5bc36"></i><i class="fa fa-star" aria-hidden="true" style="color: #e5bc36"></i><i class="fa fa-star" aria-hidden="true" style="color: #e5bc36"></i><i class="fa fa-star" aria-hidden="true" style="color: #e5bc36"></i><i class="fa fa-star-half-o" aria-hidden="true" style="color: #e5bc36"></i>
                                    </p>
                                    <div style="text-align:center">
                                        <a href="collegeinfo.php?varname=<?php echo 7 ?>"  class="btn btn-primary">View college</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/.Second slide-->
                <!--Third slide-->
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card mb-2">
                                <img class="card-img-top"
                                     src="img/iit-Guwahati.jpg" alt="Card image cap" width="250px" height="225px">
                                <div class="card-body">
                                    <h4 class="card-title">IIT Guwahati - Indian Institute of Technology (IITG)</h4>
                                    <p class="card-text">
                                        Public/Government | Established 1994<br/>Autonomous Institute  <br/>
                                        <i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp;Guwahati<br/> Rating : 4.4 &nbsp;<i class="fa fa-star" aria-hidden="true" style="color: #e5bc36"></i><i class="fa fa-star" aria-hidden="true" style="color: #e5bc36"></i><i class="fa fa-star" aria-hidden="true" style="color: #e5bc36"></i><i class="fa fa-star" aria-hidden="true" style="color: #e5bc36"></i><i class="fa fa-star-half-o" aria-hidden="true" style="color: #e5bc36"></i>
                                    </p>
                                    <div style="text-align:center">
                                        <a href="collegeinfo.php?varname=<?php echo 8 ?>"  class="btn btn-primary">View college</a></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card mb-2">
                                <img class="card-img-top"
                                     src="img/iit-Hyderabad.jpg" alt="Card image cap" width="250px" height="225px">
                                <div class="card-body">
                                    <h4 class="card-title">IIT Hyderabad - Indian Institute of Technology (IITH)</h4>
                                    <p class="card-text">
                                        Public/Government | Established 2008<br/>Autonomous Institute  <br/>
                                        <i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp;Hyderabad<br/> Rating : 4.6 &nbsp;<i class="fa fa-star" aria-hidden="true" style="color: #e5bc36"></i><i class="fa fa-star" aria-hidden="true" style="color: #e5bc36"></i><i class="fa fa-star" aria-hidden="true" style="color: #e5bc36"></i><i class="fa fa-star" aria-hidden="true" style="color: #e5bc36"></i><i class="fa fa-star-half-o" aria-hidden="true" style="color: #e5bc36"></i>
                                    </p>
                                    <div style="text-align:center">
                                        <a href="collegeinfo.php?varname=<?php echo 6 ?>"  class="btn btn-primary">View college</a></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card mb-2">
                                <img class="card-img-top"
                                     src="img/ceg.jpg" alt="Card image cap" width="250px" height="225px">
                                <div class="card-body">
                                    <h4 class="card-title">CEG - College of Engineering Guindy, Anna University</h4>
                                    <p class="card-text">
                                        Public/Government | Established 1794<br/>Autonomous Institute  <br/>
                                        <i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp;Guindy, Chennai<br/> Rating : 4.4 &nbsp;<i class="fa fa-star" aria-hidden="true" style="color: #e5bc36"></i><i class="fa fa-star" aria-hidden="true" style="color: #e5bc36"></i><i class="fa fa-star" aria-hidden="true" style="color: #e5bc36"></i><i class="fa fa-star" aria-hidden="true" style="color: #e5bc36"></i><i class="fa fa-star-half-o" aria-hidden="true" style="color: #e5bc36"></i>
                                    </p>
                                    <div style="text-align:center">
                                        <a href="collegeinfo.php?varname=<?php echo 9 ?>"  class="btn btn-primary">View college</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/.Third slide-->

            </div>
            <!--/.Slides-->

        </div>
        <!--/.Carousel Wrapper-->
    </div>

   
    <h2 id ="med" ><br/>&nbsp;Top Medical Colleges in India</h2>
    <br>

  
    <div class="container" >
        <!--Carousel Wrapper-->
        <div id="multi-item-example1" class="carousel slide carousel-multi-item" data-ride="carousel">

            <!--Controls-->
            <div class="controls-top">
               <a class="carousel-control-prev" href="#multi-item-example1" data-slide="next" role="button"><span class="carousel-control-prev-icon" aria-hidden="true"></span>
                   <span class="sr-only">prevoius</span></a>
                <a class="carousel-control-next" href="#multi-item-example1" data-slide="prev" role="button"><span class="carousel-control-next-icon" aria-hidden="true"></span>
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
                                <img class="card-img-top"
                                src="img/AIIMS.jpg"
                                     alt="Card image cap" width="250px" height="225px">
                                <div class="card-body">
                                    <h4 class="card-title">All India Institute of Medical Sciences(AIIMS)</h4>
                                    <p class="card-text">
                                        Public/Government | Established 1956<br/>Institute of National Importance  <br/>
                                        <i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp;New Delhi,Delhi<br/> Rating : 4.8 &nbsp;<i class="fa fa-star" aria-hidden="true" style="color: #e5bc36"></i><i class="fa fa-star" aria-hidden="true" style="color: #e5bc36"></i><i class="fa fa-star" aria-hidden="true" style="color: #e5bc36"></i><i class="fa fa-star" aria-hidden="true" style="color: #e5bc36"></i><i class="fa fa-star-half-o" aria-hidden="true" style="color: #e5bc36"></i>
                                    </p>
                                  <div style="text-align:center">
                                    <a href="collegeinfom.php?varname=<?php echo 10 ?>" class="btn btn-primary">View college</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card mb-2">
                                <img class="card-img-top"
                                 src="img/cmc.jpg"
                                     alt="Card image cap" width="250px" height="225px">
                                <div class="card-body">
                                    <h4 class="card-title">Christian Medical <br>College <br></h4>
                                    <p class="card-text">
                                        Private | Established 1942<br/>Autonomous   <br/>
                                        <i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp;Vellore,Tamil Nadu<br/> Rating : 4.7 &nbsp;<i class="fa fa-star" aria-hidden="true" style="color: #e5bc36"></i><i class="fa fa-star" aria-hidden="true" style="color: #e5bc36"></i><i class="fa fa-star" aria-hidden="true" style="color: #e5bc36"></i><i class="fa fa-star" aria-hidden="true" style="color: #e5bc36"></i><i class="fa fa-star-half-o" aria-hidden="true" style="color: #e5bc36"></i>
                                    </p>
                                    <div style="text-align:center">
                                    <a href="collegeinfom.php?varname=<?php echo 11 ?>" 
                                       class="btn btn-primary" >View college</a></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card mb-2">
                                <img class="card-img-top"
                                     src="img/mamc.jpg"
                                     alt="Card image cap" width="250px" height="225px">
                                <div class="card-body">
                                    <h4 class="card-title">Maulana Azad Medical College</h4>
                                    <p class="card-text">
                                        Public/Government | Established 1958<br/>Affiliated  <br/>
                                        <i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp;New Delhi,Delhi<br/> Rating : 4.6 &nbsp;<i class="fa fa-star" aria-hidden="true" style="color: #e5bc36"></i><i class="fa fa-star" aria-hidden="true" style="color: #e5bc36"></i><i class="fa fa-star" aria-hidden="true" style="color: #e5bc36"></i><i class="fa fa-star" aria-hidden="true" style="color: #e5bc36"></i><i class="fa fa-star-half-o" aria-hidden="true" style="color: #e5bc36"></i>
                                    </p>
                                    <div style="text-align:center">
                                        <a href="collegeinfom.php?varname=<?php echo 12 ?>"  class="btn btn-primary">View college</a></div>
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
                                <img class="card-img-top"
                                     src="img/kmc.jpg" alt="Card image cap" width="250px" height="225px">
                                <div class="card-body">
                                    <h4 class="card-title">Kasturba Medical <br>College</h4>
                                    <p class="card-text">
                                        Private | Established 1953<br/>Constituent Institute  <br/>
                                        <i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp;Manipal,Karnataka<br/> Rating : 4.6 &nbsp;<i class="fa fa-star" aria-hidden="true" style="color: #e5bc36"></i><i class="fa fa-star" aria-hidden="true" style="color: #e5bc36"></i><i class="fa fa-star" aria-hidden="true" style="color: #e5bc36"></i><i class="fa fa-star" aria-hidden="true" style="color: #e5bc36"></i><i class="fa fa-star-half-o" aria-hidden="true" style="color: #e5bc36"></i>
                                    </p>
                                    <div style="text-align:center">
                                        <a href="collegeinfom.php?varname=<?php echo 13 ?>"  class="btn btn-primary" >View college</a></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card mb-2">
                                <img class="card-img-top"
                                     src="img/kg.jpg" alt="Card image cap" width="250px" height="225px">
                                <div class="card-body">
                                    <h4 class="card-title">King George's Medical University</h4>
                                    <p class="card-text">
                                        Public/Government | Established 2004<br/>UGC  <br/>
                                        <i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp;Lucknow,UttarPradesh<br/> Rating : 4.7 &nbsp;<i class="fa fa-star" aria-hidden="true" style="color: #e5bc36"></i><i class="fa fa-star" aria-hidden="true" style="color: #e5bc36"></i><i class="fa fa-star" aria-hidden="true" style="color: #e5bc36"></i><i class="fa fa-star" aria-hidden="true" style="color: #e5bc36"></i><i class="fa fa-star-half-o" aria-hidden="true" style="color: #e5bc36"></i>
                                    </p>
                                    <div style="text-align:center">
                                        <a href="collegeinfom.php?varname=<?php echo 14 ?>"  class="btn btn-primary">View college</a></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card mb-2">
                                <img class="card-img-top"
                                     src="img/af.jpg" alt="Card image cap" width="250px" height="225px">
                                <div class="card-body">
                                    <h4 class="card-title">Armed Forces Medical College, Pune</h4>
                                    <p class="card-text">
                                        Public/Government | Established 1948<br/>Affiliated   <br/>
                                        <i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp;Pune,Maharastra<br/> Rating : 4.7 &nbsp;<i class="fa fa-star" aria-hidden="true" style="color: #e5bc36"></i><i class="fa fa-star" aria-hidden="true" style="color: #e5bc36"></i><i class="fa fa-star" aria-hidden="true" style="color: #e5bc36"></i><i class="fa fa-star" aria-hidden="true" style="color: #e5bc36"></i><i class="fa fa-star-half-o" aria-hidden="true" style="color: #e5bc36"></i>
                                    </p>
                                    <div style="text-align:center">
                                        <a href="collegeinfom.php?varname=<?php echo 15 ?>"  class="btn btn-primary">View college</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/.Second slide-->
                <!--Third slide-->
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card mb-2">
                                <img class="card-img-top"
                                     src="img/ji.jpg" alt="Card image cap" width="250px" height="225px">
                                <div class="card-body">
                                    <h4 class="card-title">Jawaharlal Institute of Postgraduate in Medical</h4>
                                    <p class="card-text">
                                        Public/Government | Established 1964<br/>Institute of National Importance <br/>
                                        <i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp;Puducherry<br/> Rating : 4.6 &nbsp;<i class="fa fa-star" aria-hidden="true" style="color: #e5bc36"></i><i class="fa fa-star" aria-hidden="true" style="color: #e5bc36"></i><i class="fa fa-star" aria-hidden="true" style="color: #e5bc36"></i><i class="fa fa-star" aria-hidden="true" style="color: #e5bc36"></i><i class="fa fa-star-half-o" aria-hidden="true" style="color: #e5bc36"></i>
                                    </p>
                                    <div style="text-align:center">
                                        <a href="collegeinfom.php?varname=<?php echo 16 ?>"  class="btn btn-primary">View college</a></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card mb-2">
                                <img class="card-img-top"
                                     src="img/uc.jpg
" alt="Card image cap" width="250px" height="225px">
                                <div class="card-body">
                                    <h4 class="card-title">University College of Medical Sciences</h4>
                                    <p class="card-text">
                                        Public/Government | Established 1971<br/>Constituent <br/>
                                        <i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp;New Delhi,Delhi<br/> Rating : 4.7 &nbsp;<i class="fa fa-star" aria-hidden="true" style="color: #e5bc36"></i><i class="fa fa-star" aria-hidden="true" style="color: #e5bc36"></i><i class="fa fa-star" aria-hidden="true" style="color: #e5bc36"></i><i class="fa fa-star" aria-hidden="true" style="color: #e5bc36"></i><i class="fa fa-star-half-o" aria-hidden="true" style="color: #e5bc36"></i>
                                    </p>
                                    <div style="text-align:center">
                                        <a href="collegeinfom.php?varname=<?php echo 17 ?>"  class="btn btn-primary">View college</a></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card mb-2">
                                <img class="card-img-top"
                                     src="img/am.jpg" alt="Card image cap" width="250px" height="225px">
                                <div class="card-body">
                                    <h4 class="card-title">Andhra Medical <br> College</h4>
                                    <p class="card-text">
                                        Public/Government | Established 1923<br/>Affiliated <br/>
                                        <i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp;Visakhapatnam,Andhra Pradesh<br/> Rating : 4.7 &nbsp;<i class="fa fa-star" aria-hidden="true" style="color: #e5bc36"></i><i class="fa fa-star" aria-hidden="true" style="color: #e5bc36"></i><i class="fa fa-star" aria-hidden="true" style="color: #e5bc36"></i><i class="fa fa-star" aria-hidden="true" style="color: #e5bc36"></i><i class="fa fa-star-half-o" aria-hidden="true" style="color: #e5bc36"></i>
                                    </p>
                                    <div style="text-align:center">
                                        <a href="collegeinfom.php?varname=<?php echo 18 ?>"  class="btn btn-primary">View college</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/.Third slide-->

            </div>
            <!--/.Slides-->

        </div>
        <!--/.Carousel Wrapper-->
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
                <h5><a href="#eng" style="color: #fff;">Top Engineering colleges</a></h5>
                <h5><a href="#med" style="color: #fff;">Top Medical colleges</a>
                </h5>
              
            
            
            
            </div>
            
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" id="bottom">
            <h3 style="text-align: center;">Contact us</h3><br>
            <div class="f1" style="text-align: center;">
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
    
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
    $(function() {
      $( "#searchdoctor" ).autocomplete({
        source: function( request, response ) {
          $.ajax({
            url: "ajax/autosuggest.php",
            dataType: "json",
            data: {
              search: request.term
            },
            success: function( data ) {
              response( data );
            }
          });
        },
        minLength: 1,
        open: function() {
                   // Do something on open event.
        },
        close: function() {
                 // Do something on close event
        }
      });
    });
      </script>
</body>
</html>