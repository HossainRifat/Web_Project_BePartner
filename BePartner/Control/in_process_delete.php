<?php
include "../Model/in_model.php";
include "../Control/in_security.php";

$in = new inde();
$dbobj = new db();
$con = $dbobj->opencon();

$mydata=$dbobj->searchData("post",$con, "bayer", $in->decryption($_COOKIE["log"]));
if($mydata->num_rows > 0){
    echo "You have shares you can't delete account";
    // // sleep(4);
    // header("Refresh:5;location:../view/in_profile.php",true,303);
    // // exit;
}
else{
    echo "deleted";
    // if($dbobj->deleteData("reg_investor", $con, $in->decryption($_COOKIE["log"]), "email")){
    //     header("location: in_af_login_nav_ logout_process.php");
    // }
    // else{
    //     echo "something went wrong";
    // }
}




?>