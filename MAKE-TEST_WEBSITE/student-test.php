<!DOCTYPE html>
<html>
<head>
	<title>student test</title>
	<link rel="stylesheet" type="text/css" href="student_test.css">
</head>
<body>
     <?php
     include 'connect.php'; 
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$testcode=$_COOKIE['stestcode'];


$aa= "SELECT id,name FROM userdata WHERE testcode='$testcode'";
$bb= "SELECT id,subject,question1,question2,question3,question4,question5 FROM question WHERE testcode='$testcode'";
$cc= "SELECT id,questioncount FROM creattest WHERE testcode='$testcode'";
//-----------------------------------------------------------------
$aab= $conn->query($aa);
$bbb= $conn->query($bb);
$ccb= $conn->query($cc);
if ($aab->num_rows > 0) {
    $r = $aab->fetch_assoc() ;
    $ro = $bbb->fetch_assoc() ;
    $row = $ccb->fetch_assoc() ;
    $name= $r["name"];
    $subject= $ro["subject"];
    $quescount= $row["questioncount"];
    $qa= $ro["question1"];
    $qb= $ro["question2"];
    $qc= $ro["question3"];
    $qd= $ro["question4"];
    $qe= $ro["question5"];
    $list=[$qa,$qb,$qc,$qd,$qe];
    $j=1;
    setcookie('count', $quescount, time() + (86400*365));
}
echo "<div class='work'>
<h3 class='teacher'>TEACHER NAME : $name</h3>
<h3 class='teacher'>TESTCODE : $testcode</h3>
<h3 class='teacher'>SUBJECT NAME : $subject</h3>
<h3 class='teacher'>NUMBER OF QUESTION : $quescount</h3></div>";
echo "<hr style='border:2px solid black;'>";
echo "<div class='wo'>";
for ($i=0; $i <5 ; $i++){
	
    if($list[($i)]!=""){
    	echo "<h3>$j) $list[$i]<br></h3>";
    	$j+=1;}}
echo "</div><br><hr style='border:2px solid black;'>";
   ?>
 <form method='post' action='complte.php'>
  <div id='con'>
     <table id='question'>
         <tr>
        </tr>
    </table>
  <a href='#' id='complet'>
  <button id=chang  class='num' >save</button>
  </a>
  </div>
</form>"
<script type="text/javascript">
var i;
var qc='<?php echo $quescount; ?>';
if (Number(qc)<11){
  if(Number(qc)>0){
    for (i=0;i<(Number(qc));i++) { 
        var add0= document.createElement("tr");
        add0.setAttribute("class","ans");
        var element =document.getElementById("question");
        element.appendChild(add0);
        var  add2= document.createElement("textarea");
        var  add3= document.createElement("br");
        add2.setAttribute("placeholder","anwser");
        add2.setAttribute("class","anwser");
        add2.setAttribute("name","answer"+i);
        var element1=document.getElementsByClassName("ans");
        element.appendChild(add3);
        element.appendChild(add2);
     }
  }
  else{
  alert("teacher not set basic requment");
  window.open('index_student-login.html','_self');
  }
}
else{
  alert("sorry some problam");
window.open('index_student-login.html','_self');
}
</script>
</body>
</html>