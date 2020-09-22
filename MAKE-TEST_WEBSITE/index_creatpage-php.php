<?php
include 'connect.php'; 
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

else{
	error_reporting(0);
$db=['userdata','creattest','question','answer'];
$subject=$_POST['subject'];
$count=$_POST['count'];
$testcode=$_POST['testcode'];
$username=$_COOKIE['username'];

$i=0;
for($i=0;$i<4;$i++){
$sql = "UPDATE $db[$i] SET testcode='$testcode' WHERE username='$username'";
$result = $conn->query($sql);
}
$sql = "UPDATE $db[1] SET questioncount=$count WHERE username='$username'";
$result = $conn->query($sql);
$sql = "UPDATE $db[2] SET subject='$subject' WHERE username='$username'";
$result = $conn->query($sql);
$sql = "UPDATE $db[3] SET subject='$subject' WHERE username='$username'";
$result = $conn->query($sql);
setcookie('testcode', $testcode, time() + (86400*365));
setcookie('count', $count, time() + (86400*365));
echo "<script>window.open('test.php','_self');</script>";


}
  ?>