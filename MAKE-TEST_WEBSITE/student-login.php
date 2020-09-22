<?php
include 'connect.php'; 
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);}
else{
error_reporting(0);
$username=$_POST['username'];
$testcode=$_POST['testcode'];
$empty='';
$sql = "SELECT id,username FROM student WHERE username='$username'";
$result = $conn->query($sql);
if ($result->num_rows > 0){
	  setcookie('susername', $username, time() + (86400*365));
      setcookie('stestcode', $testcode, time() + (86400*365));
      echo "<script>window.open('student-test.php','_self');</script>";  
}else{  
$sql = "SELECT id,testcode FROM userdata WHERE testcode='$testcode'";
$result = $conn->query($sql);
if ($result->num_rows > 0){  
	  setcookie('susername', $username, time() + (86400*365));
      setcookie('stestcode', $testcode, time() + (86400*365));
       $stmt = $conn->prepare("insert into student(student,testcode,answer1,answer2,answer3,answer4,answer5) values(?,?,?,?,?,?,?)");
       $stmt->bind_param("sssssss",$username,$testcode,$empty,$empty,$empty,$empty,$empty);
      $execval = $stmt->execute();
      echo "<script>window.open('student-test.php','_self');</script>";
}
 else {
	echo "<script>alert('testcode incorrect');</script>";
	echo "<script>window.open('index_student-login.html','_self');</script>";
	}
}
}
?>