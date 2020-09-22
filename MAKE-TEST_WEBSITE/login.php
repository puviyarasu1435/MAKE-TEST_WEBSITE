<html>
<head>
<title>loginpage</title>
      <link rel="stylesheet" type="text/css" href="CSS.css"/>
<body  onload = "changeImage()">
     
     <img id="img" src="https://images.pexels.com/photos/1261728/pexels-photo-1261728.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940">
     
      <div class="loginbox">
      
     <img  id="logo" src="logo.png" class="logo">
        <h1>Login Here</h1>

      <form action="login-php.php" method="POST">
        <p>user name</p>
      <input type="text" name="username" placeholder="Enter username">
      <p>password</p>
      <input type="password" name="password" placeholder="Enter password">
      <input type="submit" value="login">
      <a href="singup.php">create new account</a><br>
      <a href="forget.php">forget your password</a><br>
      </form> 
   </div>    
</body>
</head>
</html>