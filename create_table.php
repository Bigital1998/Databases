<?php
$conn = new mysqli('localhost','root','','mitevening');
if($conn->connect_error){
    die('Connection failed'.$conn->connect_error);
}

$sql = "CREATE TABLE students (
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  firstname  VARCHAR(30) NOT NULL,
  lastname VARCHAR(30) NOT NULL,
  reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP 
);";

if($conn->query($sql)=== TRUE){
    echo "The students table created successfully";
}else{
    echo "Error: ".$sql . "<br>". $conn->error;
}


#insert data into a database
$sql = "INSERT INTO students (firstname, lastname, reg_date) 
VALUES ('Mike', 'Graham',null)";


//if($conn->query($sql)=== TRUE){
//
//    echo "new data entered successfully";
//}else{
//    echo "Error: ".$sql. "<br>". $conn->error;
//}
if(mysqli_query($conn, $sql)){
    #grag the last data added into the table
    $last_item = mysqli_insert_id($conn);
    echo "New Record added successfully";
    echo "Last item to be added has id: $last_item";
}else{
    echo "Error:  ".$sql.mysqli_error($conn)."<br>";
}

#Selecting data from a table(s)
//Syntax
//SELECT column_one, column_two FROM tablename
//SELECT * FROM tablename

$sql = "SELECT id, firstname, lastname";
$result = mysqli_query($conn,$sql);
















mysqli_close($conn)
?>