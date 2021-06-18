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
