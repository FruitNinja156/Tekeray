<?php 
include 'dbconn.php';

$name =$_POST['name'];
$lname =$_POST['lname'];
$email =$_POST['email'];
$phno =$_POST['phno'];
$pswrd =$_POST['password'];
if (empty($name) || empty($lname) || empty($email) || empty($phno) || empty($pswrd)){
    ?>
    <script type="text/javascript">
alert("Please fill all fields properly, Click OK to try again!");
window.location.href = "../landlord.php";
</script><?php
}
else{
$sql ="INSERT INTO landlord(name, lname, phno, email, password) VALUES ('$name', '$lname', '$phno', '$email', '$pswrd')";
mysqli_query($conn, $sql);
?><script type="text/javascript">
alert("Successfully Registered as Landlord, Click OK to proceed.");
window.location.href = "../login-landlord.html";
</script><?php
}
?>