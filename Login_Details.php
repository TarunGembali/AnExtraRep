<?php
// connecting web server to database
$servername="localhost";
$username="root";
$password="";
$database="login_db";
// Creating a connection
$conn=mysqli_connect($servername,$username,$password,$database);
if(!$conn){
    die("Connection Failed".mysqli_connect_error());
}
// Inserting data and storing it in database
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $age=$_POST['age'];
    $weight=$_POST['weight'];
    $mail=$_POST['mail'];
    $image=$_POST['image'];
    $sql_query = "INSERT INTO `user details` (`S.no.`, `Name`, `Age`, `Weight`, `Email`) VALUES (NULL, '$name', '$age', '$weight', '$mail')";
    if(mysqli_query($conn,$sql_query)){
        echo "Data inserted Successfully";
    }else{
        echo "Error...".$sql_query."Failed to insert data".mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>