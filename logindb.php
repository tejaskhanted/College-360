<?php

session_start();


$con = mysqli_connect('localhost','root','');
if($con){
	echo "connection successful";
	}else{
		echo "no connection";
}

mysqli_select_db($con, 'collegereview');

$name=$_POST['username'];
$pass=$_POST['password'];

$q = "select * from signup where username = '$name' && password = '$pass'";


$result = mysqli_query($con, $q);

$num = mysqli_num_rows($result);
$_SESSION["username"]='username';

if($num==1){
	
	$_SESSION['username'] = $name;
    
   
   
	header('location:home2.php');
    echo "login sucessful";
    


	}

    else{
		$message = "Invalid! Fill Correct Details";
	echo "<script type='text/javascript'>alert('$message');</script>";
	echo '<script>window.location.href = "login.php";</script>';
    echo "invalid";
}

?>
