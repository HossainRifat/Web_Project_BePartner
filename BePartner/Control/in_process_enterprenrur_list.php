<?php
include "../Model/in_model.php";
include "../Control/in_security.php";

$enobj = new inde();
$mydb = new db();
$con = $mydb->opencon();

if(!isset($_GET["sort"])){
// function seeALL(){
//     $mydb = new db();
//     $con = $mydb->opencon();

//     $mydata = $mydb->getEntNum("post", $con);

//     $rom = $mydata->num_rows;
//     //echo $rom;
//     return $rom;
// }


$mydata = $mydb->getEnt("post", $con);
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
}
else if($_GET["sort"] == "az"){
    $mydata = $mydb->postSort($con,"post", "company_name","ASC");
    if($mydata->num_rows > 0){
    $i = 0;
    while($row = $mydata->fetch_assoc()){
        $fdata[$i] = $row;
        $i=$i+1;
    }
}
}
else if($_GET["sort"] == "za"){
    $mydata = $mydb->postSort($con,"post", "company_name","DESC");
    if($mydata->num_rows > 0){
    $i = 0;
    while($row = $mydata->fetch_assoc()){
        $fdata[$i] = $row;
        $i=$i+1;
    }
}
}

else if($_GET["sort"] == "no"){
    $mydata = $mydb->postSort($con,"post", "id","DESC");
    if($mydata->num_rows > 0){
    $i = 0;
    while($row = $mydata->fetch_assoc()){
        $fdata[$i] = $row;
        $i=$i+1;
    }
}
}

else if($_GET["sort"] == "on"){
    $mydata = $mydb->postSort($con,"post", "id","ASC");
    if($mydata->num_rows > 0){
    $i = 0;
    while($row = $mydata->fetch_assoc()){
        $fdata[$i] = $row;
        $i=$i+1;
    }
}
}
// if(isset($_POST["2"])){
//     echo "hello";
//     $mydata = $mydb->getEntLim("post", $con, 1);
//     if($mydata->num_rows > 0){
//         $i = 0;
//         while($row = $mydata->fetch_assoc()){
//             $fdata[$i] = $row;
//             $i=$i+1;
//         }
//     }
//     header("location:../view/in_entrepreneure_list.php");
// }

// if(isset($_POST["one0"])){
//     $_SESSION["post_id"] = $fdata[0]["id"];
//     echo $_SESSION["post_id"];
//     header("location:../view/in_entrepreneure.php");
// }
// if(isset($_POST["one1"])){
//     $_SESSION["post_id"] = $fdata[1]["id"];
//     echo $_SESSION["post_id"];
//     header("location:../view/in_entrepreneure.php");
// }
$mydb->closecon($con);
?>