<!DOCTYPE html>
<html>
<head>
<title>Tekeray</title>
    <link rel="stylesheet" type="text/css" href="css/sign_up.css">

   
    </head>
<body>
  <div class="box-1">
		
    <img class="logo-1" src="photos/tekeray.png">
      <nav id="header">
    <ul>
    
      <li><a href="Tekeray home.php">Home </a></li>
			<div class="dropdown">
            <li class="drop-btn"><a href="Housing.html">Housing </a></li><div class="dropdown-content">
			
		
      </div>
      
      </div>
      <li><a href="offers.php">Offers </a></li>
       <div class="dropdown">
      <li class="drop-btn"><a href="">Account </a></li><div class="dropdown-content">
      <a href="signup.php">SignUp</a>
      <a href="login.php">Login</a>
      <a href="profile.html">Profile</a>
      </div>
      
      </div>
      <li><a href="about%20us.html">About us </a></li>
    </ul>
    
    </nav>
    </div>	


<div class="login-box">
     <h1>Tenant Sign up</h1>
     <form action ="include/add.php" method ="POST">
      First Name<br>
      <input type="text" name="name" placeholder="First Name">
      <br> Last Name<br>
      <input type="text" name="lname" placeholder="Last Name">
      <br> Email<br>
      <input type="text" name="email" placeholder="Email">
     <br> Phone Number<br>
      <input type="text" name="phno" placeholder="Phone Number">
   <p>Password</p>
      <input type="password" name="pswrd" placeholder="Enter Password">
  
        <p class="condition">By Creating an Account, you agree to Tekeray Conditions of 
            Use and Privacy Notice.</p>
<br>
        
		 <input type="submit"  id ="submit "value="Sign up">
     </form>       
            <a href="login.php">Already have an Account ? Sign-In</a><br><br>  
            <a href="landlord.php">Want to be Landlord ? Sign-Up</a>


	</form>
	</div>
	</body>
</html>
    
		 