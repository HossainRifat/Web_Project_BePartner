<?php include "./in_nav_bar_profile.php";
include "../Control/in_security.php";
//include "../control/in_process_edit_profile.php";

$obj = new inde();
?>


<html>
  <head>
    <script src="../js/in_valid.js"></script>
  </head>
<body>
<hr>
<center>
<div class="editp">
<form action="" method="post" name="update1" onsubmit="return passValid()" onsubmit="return phone2()" enctype="multipart/form-data">
<table>
  <caption>Personal Information</caption>
<tr>
<td>First Name:</td>
<td><input type="text" name="fname" id="fname" onkeypress="nameValid()" value="<?php if(isset($_SESSION["firstName"]))echo $_SESSION["firstName"]?>"></td>
<td><p id="namer"></p></td>
</tr>

<tr>
<td>Last name:</td>
  <td><input type="text" name="lname" onkeypress="lnameValid()" id="lname" value="<?php if(isset($_SESSION["lastName"]))echo $_SESSION["lastName"]?>"></td>
  <td><p id="namel"></p></td>
</tr>


<tr>
<td>Date of birth:</td>
<td><input type="date" id="dob" onclick="dobValid()" name="age" value="<?php if(isset($_SESSION["DOB"]))echo $_SESSION["DOB"]?>"></td>
<td><p id="dobe"></p></td>
</tr>

<tr>
  <td>Gender:</td>
  <td><input type="radio" name = "gender" value="r1" <?php if(isset($_SESSION["gender"])){if($_SESSION["gender"]=="Male"){echo"checked";}}?>>Male
  <input type="radio" name = "gender" value="r2" <?php if(isset($_SESSION["gender"])){if($_SESSION["gender"]=="Female"){echo"checked";}}?> >Female
  <input type="radio" name = "gender" value="r3" <?php if(isset($_SESSION["gender"])){if($_SESSION["gender"]=="Other"){echo"checked";}}?> >Other</td>
</tr>

<tr>
<td>Phone number:</td>
<td><input type="text" name="phone" id="phone" onkeypress="phone2()" placeholder="01993830224" value="<?php if(isset($_SESSION["phone"]))echo $_SESSION["phone"]?>"></td>
<td><p id="perror"></p></td>
</tr>

<!-- <tr>
<td>Personal email:</td>
<td><input type="email" name="email" value="<?php if(isset($_SESSION["email"])) echo $_SESSION["email"]?>"></td>
</tr>
<tr>
<td>Personal address:</td>
<td><input type="text" name="pAddress" value="<?php if(isset($_SESSION["pAddress"]))echo $_SESSION["pAddress"]?>"></td>
</tr> -->

<tr>
<td>Personal address:</td>
<td><textarea name="pAddress" class="detail"><?php if(isset($_SESSION["pAddress"]))echo $_SESSION["pAddress"]?></textarea></td>
</tr>
<tr>
<td>Password:</td>
<td><input type="password" id="passShow" onkeypress="passValid()" name="pwd" value="<?php if(isset($_SESSION["pwd"])) echo $obj->decryption($_SESSION["pwd"])?>"></td>
<td><p id="passerror"></p></td>
</tr>
<tr>
<td></td>
<td><input type="checkbox" onclick="showPass()" name="pwd"> Show Password</td>
</tr>

</table>
</div>


<div class="editp">
<table>
<caption>Profational Information</caption>
<tr>
<td>Organization name:</td>
<td><input type="text" id="oname" onkeypress="onameValid()" name="oname" value="<?php if(isset($_SESSION["oname"]))echo $_SESSION["oname"]?>"></td>
<td><p id="ovalid"></p></td>
</tr>

<tr>
<td>Organization license:</td>
  <td><input type="text" id="liname" name="liname" onkeypress="liValid()" value="<?php if(isset($_SESSION["linumber"]))echo $_SESSION["linumber"]?>"></td>
  <td><p id="lierror"></p></td>
</tr>


<tr>
<td>Tax identification number:</td>
  <td><input type="number" name="tin" id="tin" onkeypress="tinValid()" value="<?php if(isset($_SESSION["tin"]))echo $_SESSION["tin"]?>"></td>
  <td><p id="tinerror"></p></td>
</tr>

<!-- <tr>
<td>Organization address:</td>
  <td><input type="text" name="oaddress" value="<?php if(isset($_SESSION["oaddress"]))echo $_SESSION["oaddress"]?>"></td>
</tr> -->

<tr>
<td>Organization address:</td>
  <td><textarea class="detail" name="oaddress" value=""><?php if(isset($_SESSION["oaddress"]))echo $_SESSION["oaddress"]?></textarea></td>
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

<!-- <tr>
<td>Add photo:</td>
<td><input type="file" name="myfile"></td>
</tr> -->
<!-- <tr> 
<td><input type="submit" value="Update" name="Update">
<input type="reset" name="Reset"></td>
</tr> -->
</table>

<input type="submit" class="buttonedit" value="Update" name="next1"><br>
<input type="reset" name="Reset" class="buttonedit">
</div>
</form>
</center>

</body>
</html>
<?php
include "../Control/in_process_edit_profile.php";
?>