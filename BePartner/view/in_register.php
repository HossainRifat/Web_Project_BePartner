<?php include "in_nav_bar.php" ?>
<html>
  <head>
  <link rel="stylesheet" type="text/css" href="in_style.css">
    <script src="../js/in_valid.js"></script>
  </head>
<body>
<hr>
<center>
<form action="" name="register1" onsubmit="return phoneValid()" method="post" enctype="multipart/form-data">
<img src="../img/title_logo.png" alt="" height="100" width="100">
<h3>Personal Information 1/3</h3>

<table class="reg1">
<tr>
<td>First Name:</td>
<td><input type="text" name="fname" value="<?php if(isset($_SESSION["firstName"]))echo $_SESSION["firstName"]?>"></td>
</tr>

<tr>
<td>Last name:</td>
  <td><input type="text" name="lname" value="<?php if(isset($_SESSION["lastName"]))echo $_SESSION["lastName"]?>"></td>
</tr>

<tr>
<td>Date of birth:</td>
<td><input type="date" name="age" value="<?php if(isset($_SESSION["DOB"]))echo $_SESSION["DOB"]?>"></td>
</tr>

<tr>
  <td>Gender:</td>
  <td><input type="radio" name = "gender" value="r1" <?php if(isset($_SESSION["gender"])){if($_SESSION["gender"]=="Male"){echo"checked";}}?>>Male
  <input type="radio" name = "gender" value="r2" <?php if(isset($_SESSION["gender"])){if($_SESSION["gender"]=="Female"){echo"checked";}}?> >Female
  <input type="radio" name = "gender" value="r3" <?php if(isset($_SESSION["gender"])){if($_SESSION["gender"]=="Other"){echo"checked";}}?> >Other</td>
</tr>

<tr>
<td>Phone number:</td>
<td><input type="number" name="phone" placeholder="01993830224" onkeyup="phoneValid()" value="<?php if(isset($_SESSION["phone"]))echo $_SESSION["phone"]?>"></td>
<td id="phone_error"></td>
</tr>

<tr>
<td>Personal email:</td>
<td><input type="email" name="email" value="<?php if(isset($_SESSION["email"]))echo $_SESSION["email"]?>"></td>
</tr>
<tr>
<td>Personal address:</td>
<td><input type="text" name="pAddress" rows="3" value="<?php if(isset($_SESSION["pAddress"]))echo $_SESSION["pAddress"]?>"></td>
</tr>
<tr>
<td>Add photo:</td>
<td><input type="file" name="myfile"></td>
</tr>
<tr> 
  <td></td>
<td><input type="submit" class="button" value="Continue" name="next1">
</tr>
<tr>
  <td></td>
  <td>
<input type="reset" name="Reset" class="button"></td>
</td>
</tr>
<tr>
  <td>
  <?php include "../Control/in_process_join1.php"?>
  </td>

</tr>
</table>
<!-- <br>
<input type="submit" value="Continue" name="next1">
<input type="reset" name="Reset"> -->

</center>
</body>
</html>

