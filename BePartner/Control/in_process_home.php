<?php 
include "../Model/in_model.php";
include "../Control/in_security.php";
$in = new inde();
$mydb = new db();
$con = $mydb->opencon();


$data=$mydb->searchData("message_en_in",$con,"receiver",$in->decryption($_COOKIE["log"]));
if($data->num_rows > 0){
    $i = 0;
    while($row = $data->fetch_assoc()){
        $mdata[$i] = $row;
        $i=$i+1;
    }
}

$mydata = $mydb->getEnt("post", $con);
if($mydata->num_rows > 0){
    $i = 0;
    while($row = $mydata->fetch_assoc()){
        $fdata[$i] = $row;
        $i=$i+1;
    }
}



$mydb->closecon($con);
?>