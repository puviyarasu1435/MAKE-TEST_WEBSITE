<!DOCTYPE html>
<html>
<head>
	<title>sing up</title>
	<link rel="stylesheet" type="text/css" href="singup-css.css">

</head>
<body>
<form method="post" action="singup-php.php">
  <div class="main">
    <h1>Sign Up</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>
        <label class="name" for="us"><b>USER NAME</b></label>
    <input class="put" type="text" placeholder="username" name="username" required><br>

        <label class="name" for="fullname"><b>FULLNAME</b></label>
    <input class="put" type="text" placeholder="Enter Email" name="fullname" required><br>


        <label class="name" for="dob"><b>DATE OF BIRTH</b></label>
    <input class="put" type="date" placeholder="dateofbirth" name="dob" required><br>

    <label class="name" for="email"><b>EAMIL</b></label>
    <input class="put" type="text" placeholder="Enter Email" name="email" required><br>

    <label class="name" for="psw"><b>PASSWORD</b></label>
    <input class="put" type="password" placeholder="Enter Password" name="psw" required><br>
    <p>By creating an account you agree to our <a href="#" style="color:blue">Terms & Privacy</a>.</p>

    <div class="clearfix">
      <button type="button" class="cancelbtn" onclick="window.location.href="login.php"">Cancel</button>
      <button type="submit" name="submit" onclick="window.location.href="index-homepage.html"" class="signupbtn">Sign Up</button>
    </div>
  </div>
</form>
</body>
</html>
