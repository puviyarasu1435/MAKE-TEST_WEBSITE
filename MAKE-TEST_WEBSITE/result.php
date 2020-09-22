<!DOCTYPE html>
<html>
<head>
	<title>status page</title>
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <link rel="stylesheet" type="text/css" href="result-css.css">

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
        <li><a href="connect.html"><i class="fas fa-envelope"></i>Contact</a></li>
      </ul>
      
    </div>
   <div id="b">
   <a><i class="fa fa-graduation-cap">Student status</i></a>
   </div>
   
    <div id="q"></div>

 <!-------------------------Table area------------>   
    <table align="center" border="1px solid white">
        <tr>
        <th>Name</th>
        <th>Code</th>
        <th>Percentage</th>
        </tr>
        <tr>
          <?php

            $con=mysqli_connect("localhost","root","","singuup");

            $query= mysqli_query($con,"select * from student");
            while($row=mysqli_fetch_array($query)){
          ?>
        </tr>
        <tr>
          <td><?=$row['student']; ?></td>
          <td><?=$row['testcode']; ?></td>
          <td><?=$row['percentage']; ?></td>
        </tr>
      <?php  } ?>
      </table>
</body>
</html>