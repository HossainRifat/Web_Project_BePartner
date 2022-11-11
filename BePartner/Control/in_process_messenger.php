<?php
//include "in_process_enterprenrur_list.php";
include "../Model/in_model.php";
include "../Control/in_security.php";

$in = new inde();
$mydb = new db();
$con = $mydb->opencon();

$mydata = $mydb->getTable($con,"post");
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

$data=$mydb->searchData("message_en_in",$con,"receiver",$in->decryption($_COOKIE["log"]));
if($data->num_rows > 0){
    $i = 0;
    while($row = $data->fetch_assoc()){
        $mdata[$i] = $row;
        $i=$i+1;
    }
}

if(isset($_POST["reply"])){
    if(!empty($_POST["sendmsg"])){
        $msg = $mydb->insertMsg($con, "message_en_in", $in->decryption($_COOKIE["log"]),$_POST["id"], $_POST["sendmsg"],"new");
    }
}

$mydb->closecon($con);
?>