<?php
include 'connect.php'; 
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
error_reporting(0);
$question=['question1','question2','question3','question4','question5'];
$answer=['answer1','answer2','answer3','answer4','answer5'];
$testcode=$_COOKIE['testcode'];
$count=$_COOKIE['count'];
$sql = "SELECT id,testcode FROM userdata WHERE testcode='$testcode'";
$result = $conn->query($sql);
if ($result->num_rows > 0){
$ques=[$_POST['question0'],$_POST['question1'],$_POST['question2'],$_POST['question3'],$_POST['question4']];
$ans=[$_POST['answer0'],$_POST['answer1'],$_POST['answer2'],$_POST['answer3'],$_POST['answer4']];
for($i=0;$i<$count;$i++){
  echo $i;
   $sql = "UPDATE question SET $question[$i]='$ques[$i]' WHERE testcode='$testcode'";
   $result = $conn->query($sql);
   $sql = "UPDATE answer SET $answer[$i]='$ans[$i]' WHERE testcode='$testcode'";
   $result = $conn->query($sql);
    

} 

 echo "<script>alert('wait please');</script>";
   echo "<script>window.open('index_creatpage.php','_self');</script>";
}
else{
  echo "<script>alert('server problam');</script>";
}
$conn->close();        
?>