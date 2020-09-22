<?php
include 'connect.php'; 
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
error_reporting(0);
$user=$_POST['username'];
$name=$_POST['fullname'];
$date=$_POST['dob'];
$email=$_POST['email'];
$pass=$_POST['psw'];
$testcode='1435';
$empty=' ';
$num=0;
setcookie('username', $user, time() + (86400*365));
setcookie('testcode', $testcode, time() + (86400*365));
setcookie('password', $pass, time() + (86400*365));


$sql = "SELECT id,username FROM userdata WHERE username='$user'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
echo "<script>alert('username alredy there');</script>";
echo "<script>window.open('singup-page.html','_self');</script>";

} else {
	    $conn = new mysqli('localhost','root','','singuup');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into userdata(username,name,email,date,password,testcode) values(?,?,?,?,?,?)");
		$stmt->bind_param("sssssi",$user,$name,$email,$date,$pass,$testcode);
		$execval = $stmt->execute();
	    $stmt = $conn->prepare("insert into creattest(testcode,questioncount,username) values(?,?,?)");
		$stmt->bind_param("iis",$testcode,$num,$user);
		$execval = $stmt->execute();
$stmt = $conn->prepare("insert into question(username,testcode,subject,question1,question2,question3,question4,question5)values(?,?,?,?,?,?,?,?)");
		$stmt->bind_param("ssssssss",$user,$testcode,$empty,$empty,$empty,$empty,$empty,$empty);
		$execval = $stmt->execute();
$stmt = $conn->prepare("insert into answer(username,testcode,subject,answer1,answer2,answer3,answer4,answer5)values(?,?,?,?,?,?,?,?)");
		$stmt->bind_param("ssssssss",$user,$testcode,$empty,$empty,$empty,$empty,$empty,$empty);
		$execval = $stmt->execute();
		}
	}
  echo "<script>window.open('index-homepage.html','_self');</script>";

$conn->close();
?>