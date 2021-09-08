<?php
include_once 'dbconn.php';

$name =$_POST['name'];
$lname =$_POST['lname'];
$email =$_POST['email'];
$phone=$_POST['phno'];
$pass =$_POST['pswrd'];

$sql ="INSERT INTO user(name, lname, email, phno, password) VALUES ('$name', '$lname','$email', '$phone', '$pass')";
mysqli_query($conn, $sql);

header("Location:../login.php");
?>
<!-- <!DOCTYPE html>
<html>
    <head>
        <title>Redirecting!</title>
    </head>
    <body>
        <a href="Tekeray%20home.html"> Redirect</a>
    </body>
</html> -->