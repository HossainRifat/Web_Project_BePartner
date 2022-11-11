<?php 
session_start();
if(isset($_SESSION["pwd"])){
    header("location:in_home.php");
}
?>
<head>
<title>BePartner  </title> 
<link rel="stylesheet" type="text/css" href="in_style.css">
<head></head>
<body>
    <div class = "nav_color_join">
    <table >
        <tr>

          <th><a href="home.php"><img src="../img/page_ icon.png" width="200" height="45"></a></th>
          <th> </th>
          <th><a href="home.php" class="link"> Home </a></th>
          <th> </th>
          <th><a href="about.php" class="link"> About </a></th>
          <th> </th>
          <th><a href="blog.php" class="link"> Blog </a></th>
          <th> </th>
          <th><a href="contact.php" class="link"> Contact </a></th>
          <!-- <th> </th>
          <th><a href="home.php"> Become an Investor </a></th> -->
          <th> </th>
          <th><a href="in_login.php" class="link"> Sign In </a></th>
          <th> </th>
          
    
        </tr>
       
    </table>
    </div>
</body>