<?php
include 'connect.php'; 
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
error_reporting(0);
$user=$_POST['username'];
$pass=$_POST['password'];
$loginid=$_POST['loginid'];



$sq1 = "SELECT id,username FROM userdata WHERE username='$user'";
//$sq2 = "SELECT id,password FROM userdata WHERE password='$password'";
$result = $conn->query($sq1);
//$result1 = $conn->query($sq2);
if ($result->num_rows > 0){
       $sql = "UPDATE userdata SET password='$pass' WHERE username='$user'";
       if ($conn->query($sql) === TRUE) {
            setcookie('username', $user, time() + (86400*365));
            setcookie('password', $pass, time() + (86400*365));
            echo "<script>alert('password updating sucessful');</script>";
            echo "<script>window.open('login.php','_self');</script>";
        }
        else {
             echo "Error updating record: " . $conn->error;
         }
}
else{
	echo "<script>alert('username or login id invalied');</script>";
	echo "<script>window.open('forget.php','_self');</script>";

}

$conn->close();