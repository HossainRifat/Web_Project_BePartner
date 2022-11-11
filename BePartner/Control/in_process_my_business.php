<?php
include "../Model/in_model.php";
include "in_security.php";

$inob = new inde();
$mydb = new db();
$con = $mydb->opencon();

function seeALL(){
    $mydb = new db();
    $con = $mydb->opencon();

    $mydata = $mydb->getEntNum("post", $con);

    $rom = $mydata->num_rows;
    //echo $rom;
    return $rom;
}


$mydata = $mydb->getMyBusiness("post", $con, $inob->decryption($_COOKIE["log"]));
if($mydata->num_rows > 0){
    $i = 0;
    while($row = $mydata->fetch_assoc()){
        $fdata[$i] = $row;
        $i=$i+1;
    }
}
else{
    echo "No available Enterprenure";
}

if(isset($_POST["of_msg"])){
    if(!empty($_POST["msg"])){
        $msg = $mydb->insertMsg($con, "message_en_in", $inob->decryption($_COOKIE["log"]), $_POST["id"],$_POST["msg"], "new");
    }
}
?>