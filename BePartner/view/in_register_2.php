<?php include "in_nav_bar.php" ?>
<html>
  <head></head>
<body>
<hr>
<center>
<img src="../img/title_logo.png" alt="" height="100" width="100">
<h3>Profational Information 2/3</h3>

<form action="" method="post">

<table>
<tr>
<td>Organization name:</td>
<td><input type="text" name="oname" value="<?php if(isset($_SESSION["oname"]))echo $_SESSION["oname"]?>"></td>
</tr>

<tr>
<td>Organization license:</td>
  <td><input type="text" name="liname" value="<?php if(isset($_SESSION["linumber"]))echo $_SESSION["linumber"]?>"></td>
</tr>

<tr>
<td>Tax identification number:</td>
  <td><input type="number" name="tin" value="<?php if(isset($_SESSION["tin"]))echo $_SESSION["tin"]?>"></td>
</tr>

<tr>
<td>Organization address:</td>
  <td><input type="text" name="oaddress" value="<?php if(isset($_SESSION["oaddress"]))echo $_SESSION["oaddress"]?>"></td>
</tr>

<tr>
<td>Established date:</td>
<td><input type="date" name="edate" value="<?php if(isset($_SESSION["edate"]))echo $_SESSION["edate"]?>"></td>
</tr>

<!-- <tr>
  <td>Gender:</td>
  <td><input type="radio" name = "gender" value="r1">Male
  <input type="radio" name = "gender" value="r2">Female
  <input type="radio" name = "gender" value="r3">Other</td>
</tr> -->
<tr>
<td>Organization email:</td>
<td><input type="email" name="oemail" value="<?php if(isset($_SESSION["oemail"]))echo $_SESSION["oemail"]?>"></td>
</tr>
<tr>
<td>Organization website:</td>
<td><input type="text" name="site" value="<?php if(isset($_SESSION["site"]))echo $_SESSION["site"]?>" ></td>
</tr>
<tr>
<!-- <td>Add photo:</td>
<td><input type="file" name="myfile"></td>
</tr> -->
<tr>
  <td></td> 
<td><input type="submit" class="button" value="Previous" name = "previous"></td>
</tr><tr>
  <td></td><td>
<input type="submit" class="button" value="Continue" name="next1">
</td>
</tr>
<tr><td></td><td>
<input type="reset" class="button" name="Reset"></td>
</td>
</tr>
</table>
</center>
</body>
</html>
<?php include "../Control/in_process_join2.php"?>