<?php include "in_nav_bar.php" ?>
<html>
  <head>
    <script src="../js/in_valid.js"></script>
  </head>
<body>
<hr>
<center>
<img src="../img/title_logo.png" alt="" height="100" width="100">
<h3>Almost There 3/3</h3>

<form action="" onsubmit="return jonpassp2()" method="post">

<table>
<tr>
<td>Password:</td>
<td><input type="password" onkeypress="jonpassp1()" id="p1" name="pwd"></td>
<td><p id="p1error"></p></td>
</tr>

<tr>
<td>Confirm password:</td>
  <td><input type="password" id="p2" name="pwd2"></td>
  <td><p id="p2error"></p></td>
</tr>
<tr>
  <td></td>
  <td>
    <input type="checkbox" id="joinshow" onclick="joinpass()"> Show Password
  </td>
</tr>
<tr>
  <td></td>
  <td><input type="checkbox" name="box1">I am agreed with
  <a href=""> terms and conditions.</a>
</td>
</tr>

<tr>
  <td></td>
<td><input type="submit" class="button" value="Previous" name = "previous"></td>
</tr>
<tr>
  <td></td>
<td><input type="submit" onclick="jonpassp2()" class="button" value="Submit" name="submit"></td>
</tr>
<tr>
  <td></td>
<td><input type="reset" class="button" name="Reset"></td>
</tr>
</table>
</center>
</body>
</html>

<?php include "../Control/in_process_join3.php"?>