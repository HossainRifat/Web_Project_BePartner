<?php
include "../Model/in_model.php";
include "in_security.php";

$mydb = new db();
$con = $mydb->opencon();
$seob = new inde();
if(isset($_GET["en"])){
$mydata = $mydb->searchData("post",$con,"id",$seob->decryption($_GET["en"]));
if($mydata->num_rows > 0){
    $row = $mydata->fetch_assoc();
    //echo $row[""];
}
}
else if(isset($_GET["search"])){
    $mydata = $mydb->searchData("post",$con,"company_name",$_GET["search"]);
    if($mydata->num_rows > 0){
    $row = $mydata->fetch_assoc();
    //echo $row[""];
}
}

if(isset($_POST["of_sub"])){
    if(!empty($_POST["sharevalue"]) && !empty($_POST["value"])){
        $msg = $mydb->insertOffer($con, "offer", $seob->decryption($_COOKIE["log"]), $row["ceo_email"],$_POST["details"], "new", $_POST["value"], $_POST["sharevalue"],$row["id"]);
    }
}

if(isset($_POST["of_msg"])){
    if(!empty($_POST["msg"])){
        $msg = $mydb->insertMsg($con, "message_en_in", $seob->decryption($_COOKIE["log"]), $row["ceo_email"],$_POST["msg"], "new");
    }
}

if(isset($_POST["deal"])){
    $mydb->updatePost($con, "post", $seob->decryption($_COOKIE["log"]),$row["id"]);
    header("location: ../view/in_my_business.php");
}

$mydb->closecon($con);
?>