<!DOCTYPE html>
<?php include "in_nav_bar_profile.php"?>
<?php include "../Control/in_process_profile.php"?>

<html lang="en">
<head>
    <title>Profile | BePartner</title>
    <!-- <link rel="stylesheet" type="text/css" href="in_style.css"> -->
</head>
<body>


    <div class="profileP">
    <table class="profilepp">
        
        <tr>
            <td><img src="<?php echo $_SESSION["img"]?>" alt="profile pic" class="profilepic" width="250" height="240" align = "right"></td>
            <td></td>
            <td> <h2 class="helloP">Hello,<br><?php echo $_SESSION["firstName"]." ".$_SESSION["lastName"]?><br>Owner,<br> <?php echo $_SESSION["oname"]?></h2></td>
        </tr>
        <tr>
            <td>
                <a href="./in_edit_profile.php" class="list_more2">Edit profile</a>
            </td>
        </tr>
        
    </table>
    <form action="" method="post">
    <!-- <a href="../control/in_process_delete.php" class="list_more23">Detele Account</a> -->
    <input type="submit" name="delete" class="list_more23" value="Delete Account">
    </div>
    </form>
    <div class="personal">
    <table>
        <tr>
            <td><h3>Personal Information</h3></td>
        </tr>
        <tr>
            <td>First Name: </td>
            <td><?php echo $_SESSION["firstName"]?></td>
        </tr>
        <tr>
            <td>Last Name: </td>
            <td><?php echo $_SESSION["lastName"]?></td>
        </tr>
        <tr>
            <td>Email: </td>
            <td><?php echo $in->decryption($_COOKIE["log"])?></td>
        </tr>
        <tr>
            <td>Date of Birth: </td>
            <td><?php echo $_SESSION["DOB"]?></td>
        </tr>
        <tr>
            <td>Gender: </td>
            <td><?php echo $_SESSION["gender"]?></td>
        </tr>
        <tr>
            <td>Phone Number: </td>
            <td><?php echo $_SESSION["phone"]?></td>
        </tr>
        <tr>
            <td>Personal Address: </td>
            <td><?php echo $_SESSION["pAddress"]?></td>
        </tr>
    </table>
    </div>

    <div class="personal">
    <table>
        <tr>
            <td><h3>Profational Information</h3></td>
        </tr>
        <tr>
            <td>Organization's Name: </td>
            <td><?php echo $_SESSION["oname"]?></td>
        </tr>
        <tr>
            <td>Organization's License: </td>
            <td><?php echo $_SESSION["linumber"]?></td>
        </tr>
        <tr>
            <td>Tax Identification Number: </td>
            <td><?php echo $_SESSION["tin"]?></td>
        </tr>
        <tr>
            <td>Organization's Address: </td>
            <td><?php echo $_SESSION["oaddress"]?></td>
        </tr>
        <tr>
            <td>Established Date: </td>
            <td><?php echo $_SESSION["edate"]?></td>
        </tr>
        <tr>
            <td>Organization's Email: </td>
            <td><?php echo $_SESSION["oemail"]?></td>
        </tr>
        <tr>
            <td>Organization's Website: </td>
            <td><a href="<?php echo $_SESSION["site"]?>" class="pLink"><?php echo $_SESSION["site"]?></td>
        </tr>
    </table>
</body>
</html>

