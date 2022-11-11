<?php
include "../Model/in_model.php";
include "in_security.php";

$mydb = new db();
$con = $mydb->opencon();
$seob = new inde();

$myofferdata = $mydb->searchData("offer",$con,"id",$seob->decryption($_GET["ofid"]));
if($myofferdata->num_rows > 0){
    $offer = $myofferdata->fetch_assoc();
    //echo $row[""];
}

$mydata = $mydb->searchData("post",$con,"id",$offer["post_id"]);
if($mydata->num_rows > 0){
    $row = $mydata->fetch_assoc();
    //echo $row[""];
}

if(isset($_POST["delete"])){
    if($mydb->deleteData("offer", $con, $seob->decryption($_GET["ofid"]),"id")){
        header("location: ../view/in_sent_offer.php");
    }
    else{
        echo "something went wrong";
    }
}

if(isset($_POST["of_sub"])){
    $mydb->updateOffer($con, "offer", $_POST["sharevalue"], $_POST["value"], $seob->decryption($_GET["ofid"]), $_POST["details"]);
    header("location: ../view/in_offer_details.php?ofid=".$_GET["ofid"]);
}

if(isset($_POST["of_msg"])){
    if(!empty($_POST["msg"])){
        $msg = $mydb->insertMsg($con, "message_en_in", $seob->decryption($_COOKIE["log"]), $row["ceo_email"],$_POST["msg"], "new");
    }
}

?>