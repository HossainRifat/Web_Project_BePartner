<?php 
include "../Model/in_model.php";
include "in_security.php";
    $mydb = new db();
    $in = new inde();
    $mail=$in->decryption($_COOKIE["log"]);
    //$pass=$in->encryption($_POST["pwd"]);
    $conobj=$mydb->opencon();
    $mydata=$mydb->fetchData("reg_investor",$conobj,$mail);
    if($mydata->num_rows > 0){
        $row = $mydata->fetch_assoc();
                    $_SESSION["img"] = $row["img"];
                    $_SESSION["email"] = $row["email"];
                    $_SESSION["pwd"] = $row["pass"];
                    $_SESSION["firstName"] = $row["firstname"];
                    $_SESSION["lastName"] = $row["lastname"];
                    $_SESSION["DOB"] = $row["DOB"];
                    $_SESSION["gender"] = $row["gender"];
                    $_SESSION["phone"] = $row["phone"];
                    $_SESSION["pAddress"] = $row["paddress"];
                    
                    $_SESSION["oname"] = $row["oname"];
                    $_SESSION["linumber"] = $row["linumber"];
                    $_SESSION["tin"] = $row["tin"];
                    $_SESSION["oaddress"] = $row["oaddress"];
                    $_SESSION["edate"] = $row["edate"];
                    $_SESSION["oemail"] = $row["oemail"];
                    $_SESSION["site"] = $row["site"];
    }


if(isset($_POST["delete"])){
    $mydata=$mydb->searchData("post",$conobj, "bayer", $in->decryption($_COOKIE["log"]));
if($mydata->num_rows > 0){
    echo "You have shares you can't delete account";
    // // sleep(4);
    // header("Refresh:5;location:../view/in_profile.php",true,303);
    // // exit;
}
else{
    
    if($mydb->deleteData("reg_investor", $conobj, $in->decryption($_COOKIE["log"]), "email")){
        header("location:../Control/in_af_login_nav_ logout_process.php");

    }
    else{
        echo "something went wrong";
    }
}
}

// $data = file_get_contents("../file/in_join_info.json");
//         $readData = json_decode($data,true);
//         if(isset($_COOKIE["autologin"])){

        
//         foreach($readData as $myobject)
//         {   
//             if($myobject["email"] == $_COOKIE["autologin"]){
//                     // setcookie("autologin",$_POST["email"],time()+2*24*60*60);

//                     //$_SESSION["email"] = $_POST["email"];
//                     //$_SESSION["pwd"] = $_POST["pwd"];
//                     $_SESSION["firstName"] = $myobject["firstName"];
//                     $_SESSION["lastName"] = $myobject["lastName"];
//                     $_SESSION["DOB"] = $myobject["DOB"];
//                     $_SESSION["gender"] = $myobject["gender"];
//                     $_SESSION["phone"] = $myobject["phone"];
//                     $_SESSION["pAddress"] = $myobject["pAddress"];
                    
//                     $_SESSION["oname"] = $myobject["oname"];
//                     $_SESSION["linumber"] = $myobject["linumber"];
//                     $_SESSION["tin"] = $myobject["tin"];
//                     $_SESSION["oaddress"] = $myobject["oaddress"];
//                     $_SESSION["edate"] = $myobject["edate"];
//                     $_SESSION["oemail"] = $myobject["oemail"];
//                     $_SESSION["site"] = $myobject["site"];
//                     break;
//             }
//         }
// }

// else{
//         foreach($readData as $myobject)
//         {   
//             if($myobject["email"] == $_SESSION["email"]){
//                     // setcookie("autologin",$_POST["email"],time()+2*24*60*60);

//                     //$_SESSION["email"] = $_POST["email"];
//                     //$_SESSION["pwd"] = $_POST["pwd"];
//                     $_SESSION["firstName"] = $myobject["firstName"];
//                     $_SESSION["lastName"] = $myobject["lastName"];
//                     $_SESSION["DOB"] = $myobject["DOB"];
//                     $_SESSION["gender"] = $myobject["gender"];
//                     $_SESSION["phone"] = $myobject["phone"];
//                     $_SESSION["pAddress"] = $myobject["pAddress"];
                    
//                     $_SESSION["oname"] = $myobject["oname"];
//                     $_SESSION["linumber"] = $myobject["linumber"];
//                     $_SESSION["tin"] = $myobject["tin"];
//                     $_SESSION["oaddress"] = $myobject["oaddress"];
//                     $_SESSION["edate"] = $myobject["edate"];
//                     $_SESSION["oemail"] = $myobject["oemail"];
//                     $_SESSION["site"] = $myobject["site"];
//                     break;
//             }
//         }
// }
        

?>