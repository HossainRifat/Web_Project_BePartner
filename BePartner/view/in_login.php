<?php include "in_login_nav_bar.php";
// if(isset($_SESSION["oname"])){
//     header("location:../view/in_home.php");
// }
?>
<html>
    <head><title>Login | BePartner</title>
    <link rel="stylesheet" type="text/css" href="in_style.css">
    <script src="../js/in_valid.js">
        </script>
</head>
<body>
<hr>
<center>
<div class="loginS">
<img src="../img/title_logo.png" alt="" height="100" width="100">


<form action="" method="post" enctype="multipart/form-data">

<table>
    <caption><h2>Login</h2></caption>
<tr>
<td>
    <p class="logins">Email:</p>
</td>
</tr><tr>
<td>
    
    <input type="email" name="email">

</td>
</tr>

<tr>
    
<td>  
<p class="logins">Password:</p>
</td>
</tr>
<td><input type="password" id="passShow"name="pwd"></td>
</tr>
<tr>

<td><input type="checkbox" onclick="showPass()" name="pwd"> Show Password</td>
</tr>
<tr>
    <td>
        <input type="checkbox" name = "remember"> Remember me.
    </td>
</tr>
<tr>

<td><input type="submit" value="Login" name="submit" class="button">
</tr>
<tr>

<td><input type="reset" name="Reset" class="button"></td>
</tr>
</table>
<div class="loginS">
<?php include "../Control/in_process_login.php"?>
</center>
</body>
</html>


