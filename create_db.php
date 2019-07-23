<?php
#create connection
$conn = new mysqli('localhost','root','');

#checking connection
if($conn->connect_error){
    die("Connection failed".$conn->connect_error);
}

#creating a db
#create a variable to store instruction for the db
$sql = "CREATE DATABASE mitevening";

if($conn->query($sql)=== TRUE){
    echo "Database created successfully";
}
else{
    echo "Creation of database is unsuccessful";
}



mysqli_close($conn)
?>