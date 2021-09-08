<?php  
include 'dbconn.php';
$e_mail =$_POST['email'];
$pswrd =$_POST['password'];

$sql = "SELECT id FROM landlord WHERE email='$e_mail' and password ='$pswrd'";
$result =mysqli_query($conn, $sql);

$count =mysqli_num_rows($result);

if($count == 1){
    header("Location:../Tekeray home.php");
}
else if(empty($e_mail) || empty($pswrd)){?>
    <script type="text/javascript">
alert("Empty entry detected, Try again!");
window.location.href = "../loginlandlord.php";
</script>
<?php }
else{?>
<script type="text/javascript">
alert("Incorrect Email or Password!");
window.location.href = "../loginlandlord.php";
</script>
<?php
}?>