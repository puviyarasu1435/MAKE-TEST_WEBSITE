<!DOCTYPE html>
<html>
<head>
  <title>creat test</title>
  <link rel="stylesheet" type="text/css" href="index_creatpage-css.css">
  <link rel="stylesheet" type="text/css" href="design.css">
   <link rel="stylesheet" type="text/css" href="index_creatpage-css.css">
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  
</head>
<body>
      <input type="checkbox" id = "check">
    <label for="check">
         <i class="fas fa-bars" id="bar"></i>
         <i class="fas fa-times" id="cancel"></i>
    </label>

    <div class="side">
      <header>MENU</header>
      <ul>
        <li><a href="index-homepage.html"><i class="fas fa-home"></i>Home</a></li>
        <li><a href="index_creatpage.php"><i class="fas fa-file-import"></i>Creat test</a></li>
        <li><a href="result.php"><i class="fas fa-chart-pie"></i>Status</a></li>
        <li><a href="#"><i class="fas fa-user"></i>Account</a></li>
        <li><a href="index-about.html"><i class="fas fa-question-circle"></i>About</a></li>
        <li><a href="contact.html"><i class="fas fa-envelope"></i>Contact</a></li>
      </ul>
      
    </div>
<form action="index_creatpage-php.php" method="POST">
  <div class="basic">
  <h1 class="num">SUBJECT NAME</h1>
  <input type="text" id="subjectname" class="num" name="subject" placeholder="enter subject"><br>
  <h1 class="num">TESTCODE</h1>
  <input type="text" id="numofstudent"class="num" name="testcode"placeholder="test code"><br>
  <h1 class="num">QUESTION COUNT</h1>
  <input type="text" id="number" class="num" name="count" placeholder="question count"><br>
  <a href="test.html" onclick="adding()" id="open">
  <button id=chang  class="num" >save</button>
  </a>
  </div>
    <script type="text/javascript">
    function adding(){
    var qc=document.querySelector('#number').value;
    var tc=document.querySelector('#numofstudent').value;
    var sub=document.querySelector('#subjectname').value;
    localStorage.setItem("qc",qc);
    localStorage.setItem("tc",tc);
    localStorage.setItem("sub",sub);
  }</script>
</form>
</body>
    <section></section>

  
</html>s