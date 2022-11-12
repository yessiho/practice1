<?php
$server = 'localhost';
$user = 'root';
$password = '';
$dbname = 'personal_info';

// create database connection 

$conn = mysqli_connect($server, $user, $password, $dbname);

// check connection 
// if(!$conn){
//     die("faile connection:".mysqli_connect_error());
// }
// else{
//     echo "you are connected";
// }

// insert into database table
$query = "INSERT INTO signup(id,fname,last_name,email,password) VALUES(NULL,'Yessiho','Peter', 'gbenahonyessiho@gmail.com', '1234')";
// checking for
if(mysqli_query($conn,$query)){
    echo "New record added";
}
else{
    echo "No record added";
}
?>