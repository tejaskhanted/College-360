<?php
$servername='localhost';
$username='root';
$password='';
$dbname = "collegereview";
$conn=mysqli_connect($servername,$username,$password,$dbname);

if($conn){
    #echo "CONNECTION OK";
}
else
{
die("CONNECTION FAILED:".mysql_connect_error());
}
?>