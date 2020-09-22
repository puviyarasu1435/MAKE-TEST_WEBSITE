<?php
include 'connect.php'; 
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
else{
error_reporting(0);

$answer=['answer1','answer2','answer3','answer4','answer5'];
$testcode=$_COOKIE['stestcode'];
$count=$_COOKIE['count'];
$sql = "SELECT id,testcode FROM student WHERE testcode='$testcode'";
$result = $conn->query($sql);
if ($result->num_rows > 0){
$ans=[$_POST['answer0'],$_POST['answer1'],$_POST['answer2'],$_POST['answer3'],$_POST['answer4']];
   for($i=0;$i<$count;$i++){
   $sql= "UPDATE student SET $answer[$i]='$ans[$i]' WHERE testcode='$testcode'";
   $result = $conn->query($sql);
}

 echo "<script>alert('wait please');</script>";
 echo "<script>window.open('compar.php','_self');</script>";
}else{
   echo "<script>alert('-----------error sorry------------');</script>";
 //  echo "<script>window.open('index_creage.php','_self');</script>";
}
}?>