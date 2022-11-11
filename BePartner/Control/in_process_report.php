<?php
include "../Model/in_model.php";
include "../Control/in_security.php";

$db = new db();
$con=$db->opencon();
$in = new inde();

if(isset($_POST["submit"])){
    $db->reportAdmin($con,"report_admin",$in->decryption($_COOKIE["log"]),"admin",$_POST["details"],$_POST["company_name"]);
}
?>