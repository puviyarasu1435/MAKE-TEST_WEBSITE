<?php
include 'connect.php'; 
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
else{
	error_reporting(0);
$user=$_POST['username'];
$pass=$_POST['password'];
	// Database connection
$sql = "SELECT id,username,password FROM userdata WHERE username='$user' AND password='$pass'";
$result = $conn->query($sql);
if ($result->num_rows > 0){  
	  setcookie('username', $user, time() + (86400*365));
      setcookie('password', $pass, time() + (86400*365));
      echo "<script>window.open('index-homepage.html','_self');</script>";
} else {
	echo "<script>alert('username password incorrect');</script>";
	echo "<script>window.open('login.php','_self');</script>";
	}
}
$conn->close();
?>