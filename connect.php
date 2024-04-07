<?php
$name= $_POST['name'];
$email= $_POST['email'];
$password= $_POST['password'];
$confirm= $_POST['confirm'];
$date= $_POST['date'];
$gender= $_POST['gender'];


//database connection

$conn = new mysqli('localhost','root','','stud_login');
if($conn->connect_error){
    
}
?>