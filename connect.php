<?php
/**
 * Created by PhpStorm.
 * User: injila
 * Date: 6/19/19
 * Time: 6:13 PM
 */
//LAMPP
//WAMP
$servername = 'localhost';
$username = 'root';
$password ='';

#connecting/creation of a connection
$conn = new mysqli($servername,$username,$password);

//check connection
if($conn->connect_error){
    die("Connection failed".$conn->connect_error);
}else{
    echo "Connection successful";
}

mysqli_close($conn);


?>