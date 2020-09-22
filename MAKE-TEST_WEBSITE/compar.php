<?php
     include 'connect.php'; 
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
error_reporting(0);
$testcode=$_COOKIE['stestcode'];
$count=$_COOKIE['count'];
$result=0;
$bb= "SELECT id,answer1,answer2,answer3,answer4,answer5 FROM student WHERE testcode='$testcode'";
$cc= "SELECT id,subject,answer1,answer2,answer3,answer4,answer5 FROM answer WHERE testcode='$testcode'";
//-----------------------------------------------------------------
$bbb= $conn->query($bb);
$ccb= $conn->query($cc);
if ($bbb->num_rows > 0) {
    $ro = $bbb->fetch_assoc() ;
    $row = $ccb->fetch_assoc() ;
   for ($i=1; $i <($count+1) ; $i++) {
        $qc=$ro["answer$i"];
        $qa=$row["answer$i"];
        $list=explode(" ", $qc);
        $lis=explode(" ", $qa);
        for ($j=0; $j<(count($list)-1); $j++) { 
                 $t=strcmp($list[$j],$lis[$j]);
                 if ($t==0){
                 	$result=$result+1;
                 }  	
           }        

   }
}
else{
	echo "<script>alert('place creat test');</script>";
	echo "<script>window.open('index_student-login.html','_self');</script>";
}
$final=number_format((($result/count($list))*100),2);
$sql = "UPDATE student SET percentage='$final' WHERE testcode='$testcode'";
$conn->query($sql);
echo "<script>window.open('thankyou.php','_self');</script>";
?>