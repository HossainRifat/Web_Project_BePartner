<?php

class db{

    function opencon(){
    
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "wt_project";

        $conn = new mysqli($servername,$username,$password,$dbname);

        if($conn->connect_error){
            echo "could not connect";
        }
        else{
            return $conn;
        }

    }

    function insertJoinData($tname,$email,$pass,$firstName,$lastName,$DOB,$gender,$phone,$pAddress,$oname,$linumber,$tin,$oaddress,$edate,$oemail,$site,$img,$cover,$conn){

        $sql = "INSERT INTO $tname (email,pass,firstname,lastname,DOB,gender,phone,paddress,oname,linumber,tin,oaddress,edate,oemail,site,img,cover)
         VALUES('$email','$pass','$firstName','$lastName','$DOB','$gender','$phone','$pAddress','$oname','$linumber','$tin','$oaddress','$edate','$oemail','$site','$img','')";
        
        if($conn->query($sql)===TRUE){
            echo "Data inserted";
            return TRUE;
        }
        else{
            echo "data cant be inserted".$conn->error;
            return FALSE;
        }

    }

    function fetchData($tablename, $conn, $email){

        $sqlsrt = "SELECT * FROM $tablename WHERE email = '$email'";

        $results = $conn->query($sqlsrt);
        return $results;
    }

    function searchData($tablename, $conn, $key, $data){

        $sqlsrt = "SELECT * FROM $tablename WHERE $key = '$data'";

        $results = $conn->query($sqlsrt);
        return $results;
    }


    function updateData($tname,$email,$pass,$firstName,$lastName,$DOB,$gender,$phone,$pAddress,$oname,$linumber,$tin,$oaddress,$edate,$oemail,$site,$conn){

        $sql = "UPDATE $tname SET pass='$pass',firstname='$firstName',lastname='$lastName',DOB='$DOB',gender='$gender',phone='$phone',paddress='$pAddress',oname='$oname',linumber='$linumber',tin='$tin',oaddress='$oaddress',edate='$edate',oemail='$oemail',site='$site' WHERE email = '$email'";
        
        if($conn->query($sql)===TRUE){
            echo "Data updated";
            return TRUE;
        }
        else{
            echo "data cant be inserted".$conn->error;
            return FALSE;
        }

    }

    function deleteData($tablename, $conn, $email, $key){

        $sqlsrt = "DELETE FROM $tablename WHERE $key = '$email'";

        if($conn->query($sqlsrt)){
            return TRUE;
        }
    }

    function getEnt($tablename, $conn){

        $sqlsrt = "SELECT * FROM $tablename WHERE bayer = ''";

        $results = $conn->query($sqlsrt);
        return $results;
    }

    function getMyBusiness($tablename, $conn, $bayer){

        $sqlsrt = "SELECT * FROM $tablename WHERE bayer = '$bayer'";

        $results = $conn->query($sqlsrt);
        return $results;
    }

    function getEntLim($tablename, $conn, $ofset){

        $sqlsrt = "SELECT * FROM $tablename LIMIT 1 , $ofset";

        $results = $conn->query($sqlsrt);
        return $results;
    }

    function getEntNum($tablename, $conn){

        $sqlsrt = "SELECT id FROM $tablename";

        $results = $conn->query($sqlsrt);
        return $results;
    }

    function insertOffer($con, $tablename, $sender, $receiver, $details, $status, $value, $share, $id){
        $sql = "INSERT INTO $tablename (id, sender, receiver, details, status, value, share, post_id) VALUES ('', '$sender', '$receiver', '$details', '$status', '$value', '$share', $id)";

        if($con->query($sql)===TRUE){
            //echo "Data inserted";
            return TRUE;
        }
        else{
            echo "data cant be inserted".$con->error;
            return FALSE;
        }
    }

    function insertMsg($con, $tablename, $sender, $receiver, $message, $status){
        $sql = "INSERT INTO $tablename (id, sender, receiver, message, status) VALUES ('', '$sender', '$receiver', '$message', '$status')";

        if($con->query($sql)===TRUE){
            //echo "Data inserted";
            return TRUE;
        }
        else{
            echo "data cant be inserted".$con->error;
            return FALSE;
        }
    }


    function reportAdmin($con, $tablename, $sender, $receiver, $message, $title){
        $sql = "INSERT INTO $tablename (id, sender, title, message, replay_for, receiver) VALUES ('', '$sender', '$title', '$message','' ,'$receiver')";

        if($con->query($sql)===TRUE){
            //echo "Data inserted";
            return TRUE;
        }
        else{
            echo "data cant be inserted".$con->error;
            return FALSE;
        }
    }

    function updatePost($con, $tablename, $bayer, $id){
        $sql = "UPDATE $tablename SET bayer = '$bayer' WHERE id = $id";
        if($con->query($sql)===TRUE){
            //echo "Data inserted";
            return TRUE;
        }
        else{
            echo "data cant be inserted".$con->error;
            return FALSE;
        }
    }

    function getOfferData($con, $tablename, $sender){
        $sqlsrt = "SELECT * FROM $tablename WHERE sender = '$sender'";

        $results = $con->query($sqlsrt);
        return $results;
    }

    function updateOffer($conn, $tablename, $share, $value, $id, $details){
        $sql = "UPDATE $tablename SET details = '$details',  value = '$value', share ='$share' WHERE id = '$id'";
        
        if($conn->query($sql)===TRUE){
            //echo "Data updated";
            return TRUE;
        }
        else{
            echo "data cant be inserted".$conn->error;
            return FALSE;
        }
    }

    function postSort($con, $tablename, $column , $order){
        $sqlsrt = "SELECT * FROM $tablename WHERE bayer = '' ORDER BY $column $order ";

        $results = $con->query($sqlsrt);
        return $results;
    }

    function newSearch($con, $tablename, $value){
        $sqlsrt = "SELECT * FROM $tablename WHERE bayer='' AND company_name = '$value'";

        $results = $con->query($sqlsrt);
        return $results;
    }

    function getTable($con, $tablename){
        $sqlsrt = "SELECT * FROM $tablename";

        $results = $con->query($sqlsrt);
        return $results;
    }

    function closecon($conn){
        return $conn->close();
    }

}
?>