<?php
 include "../Model/in_model.php";

if($_GET["data"]==""){
    echo "No input";
}
else{
    $mydb = new db();
    $con = $mydb->opencon();
    $mydata2=$mydb->newSearch($con, "post", $_GET["data"]);
    if($mydata2->num_rows > 0){
        while($row=$mydata2->fetch_assoc())
        {
            echo $row["company_name"];
        }
    }
    else{
        echo "Didn't Match";
    }
    $mydb->closecon($con);
}

?>