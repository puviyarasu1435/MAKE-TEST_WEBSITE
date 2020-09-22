<!DOCTYPE html>
<html>
<head>
  <title>creat page</title>
  <link rel="stylesheet" type="text/css" href="index_creatpage-css.css">
   <?php $quescount=$_COOKIE['count'];?>
</head>
<body>
    <h1 id="logo">logo</h1>
  <div id="gen">
    <h1 id="main1">sub name</h1>
    <h1 id="main2">student count</h1>
    <h1 id="main3">quistion count</h1>
  </div>
  <form method="post" action="test-php.php">
  <div id="con">
     <table id="question">
         <tr>
        </tr>
    </table>
  <a href="test-php.php" id="complet">
  <button id=chang  class="num" >save</button>
  </a>
  </div>
</form>

</body>
<script type="text/javascript">

var sc=localStorage.getItem("tc");
var sub=localStorage.getItem("sub");
var qc=localStorage.getItem("qc");
document.getElementById("main1").innerHTML = "SUBJECT NAME : "+sub;
document.getElementById("main2").innerHTML = "TEST CODE : "+sc;
document.getElementById("main3").innerHTML = "QUESTION COUNT : "+(Number(qc));
var qc='<?php echo $quescount; ?>';
var i;
if (Number(qc)<6){
  if(Number(qc)>0){
    for (i=0;i<(Number(qc));i++) { 
        var add0= document.createElement("tr");
        add0.setAttribute("class","ans");
        var element =document.getElementById("question");
        element.appendChild(add0);
        var add1 = document.createElement("input");
        var  add2= document.createElement("textarea");
        var  add3= document.createElement("br");
        add1.setAttribute("type","text");
        add1.setAttribute("placeholder","question");
        add2.setAttribute("placeholder","anwser");
        add1.setAttribute("class","q");
        add2.setAttribute("class","anwser");
        add2.setAttribute("name","answer"+i);
        add1.setAttribute("name","question"+i);
        var element1=document.getElementsByClassName("ans");
        element.appendChild(add1);
        element.appendChild(add3);
        element.appendChild(add2);
     }
  }
  else{
  alert("place set basic requment");
  window.open('index_creatpage.php','_self');
  }
}
else{
  alert("sorry 5 question only add");
window.open('index_creatpage.php','_self');
}
</script>

</html>