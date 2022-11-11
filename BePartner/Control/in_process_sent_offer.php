<?php
// include "../model/in_model.php";
// include "../control/in_security.php";

// $enobj = new inde();
$mydb = new db();
$con = $mydb->opencon();

$myofferdata = $mydb->getOfferData($con, "offer", $enobj->decryption($_COOKIE["log"]));
if($myofferdata->num_rows > 0){
    $i = 0;
    while($row = $myofferdata->fetch_assoc()){
        $offerdata[$i] = $row;
        $i=$i+1;
    }
}
else{
    echo "No Sent offer";
}

$mydb->closecon($con);
?>
