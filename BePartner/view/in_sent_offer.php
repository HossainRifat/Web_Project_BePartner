<?php include "in_nav_bar_entrepreneure.php";
include "../Control/in_process_enterprenrur_list.php";
include "../Control/in_process_sent_offer.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sent offers | BePartner</title>
</head>
<body>
    <!-- <hr>
    <form action="" method="post">
    <table>
        <tr>
                <td>
                    <input type="text" name="searchBox">
                </td>
                <td>
                    <input type="submit" name="search" value="Search">
                </td>
                <td>
                    Filter
                </td>
                <td>
                    Sort
                </td>
               
        </tr>
    </table>
  -->


    <?php
    if(isset($fdata) && isset($offerdata)){
    for($i=0;$i<count($offerdata);$i++){
        
        for($j=0;$j<count($fdata);$j++){
            if($offerdata[$i]["post_id"]==$fdata[$j]["id"]){
        
       ?> 

        <table class="list">
        <tr>
        <td class="list_im"><img src="../img/building.jpeg" alt="hello"       width="200" height="200" align = "left"></td>
        <td><h2><?php echo $fdata[$j]["company_name"] ?> </h2>
        
        <h3><?php echo $fdata[$j]["moto"] ?></h3>
        
        <p><?php echo $fdata[$j]["description"] ?>  (Varified by BePartner)</p>
        
        <h4>Offer Sent: <?php echo $offerdata[$i]["value"] ?> BDT For <?php echo $offerdata[$i]["share"] ?>% of the Company. </h4>

        <a href="./in_offer_details.php?ofid=<?php echo $enobj->encryption($offerdata[$i]["id"])?>" class="list_more"> More</a>

        <!-- <input type="submit" class="button" value="Delete Offer" name="one<?php echo $i ?>"> -->
        </td>
        </tr>
    </table>

    <?php
            }
        }
    }
}
    ?>
    <center>
    <table>
    <tr>
    <?php

    // if(seeALL() > 1){
    
    //     $pageNumber = seeALL() / 1;
    //     if(is_float($pageNumber)){
    //         $pageNumber = (int)$page;
    //         $pageNumber = $pageNumber + 1;
    //     }

    //     if(!isset($_GET['page'])){
    //         $page = 1;
    //     }
    //     else{
    //         $page = $_GET['page'];
    //     }

    //     echo $this_page_limit = ($page - 1) * 1;
    //     // $mydb = new db();
    //     // $con = $mydb->opencon();
    //     $mydata2 = $mydb->getEntLim("post",$con, $this_page_limit);
    //     if($mydata2->num_rows > 0){
    //         $row2 = $mydata->fetch_assoc();
    //         //$i = 0;
    //         while($row2 = $mydata->fetch_assoc()){
    //             // $fdata[$i] = $row;
    //             // $i=$i+1;
    //             echo "ID:" .$row2["id"];
    //         }
    //     }

    //     for($page=1; $page<=$pageNumber; $page++){
            
            
    //         echo '<td><a href="in_entrepreneure_list.php?page='.$page.'">'.$page.'</a></td>';
            
            

    //     }
    // }
    // ?>
       </tr>
       </table>
       </center>



    <!-- <table>
        <tr>
        <td><img src="../img/building.jpeg" alt="hello"       width="200" height="200" align = "right"></td>
        
        <td><h2><?php echo $fdata[0]["company_name"] ?></h2>
        
        <h3><?php echo $fdata[0]["moto"] ?></h3>
        
        <p><?php echo $fdata[0]["description"] ?></p>
        
        <h4>Asking: <?php echo $fdata[0]["asking_amount"] ?> BDT For <?php echo $fdata[0]["share"] ?>% of the Company. </h4>

        <input type="submit" value="More" name="one">
        </td>
        </tr>
    </table>
    <hr>

    <table>
        <tr>
        <td><img src="../img/building.jpeg" alt="hello"       width="200" height="200" align = "right"></td>
        <td><h2><?php echo $fdata[1]["company_name"] ?></h2>
        
        <h3><?php echo $fdata[1]["moto"] ?></h3>
        
        <p><?php echo $fdata[1]["description"] ?></p>
        
        <h4>Asking: <?php echo $fdata[1]["asking_amount"] ?> BDT For <?php echo $fdata[1]["share"] ?>% of the Company. </h4>

        <input type="submit" value="More" name="two">
        </td>
        </tr>
    </table>
    <hr>

    <table>
        <tr>
        <td><img src="../img/building.jpeg" alt="hello"       width="200" height="200" align = "right"></td>
        <td><h3>Name</h3> <p>all details are here</p>
        <input type="button" value="More" name="3">
        </td>
        </tr>
    </table>
    <hr>

    <table>
        <tr>
        <td><img src="../img/building.jpeg" alt="hello"       width="200" height="200" align = "right"></td>
        <td><h3>Name</h3> <p>all details are here</p>
        <input type="button" value="More" name="4">
        </td>
        </tr>
    </table>
    <hr>

    <table>
        <tr>
        <td><img src="../img/building.jpeg" alt="hello"       width="200" height="200" align = "right"></td>
        <td><h3>Name</h3> <p>all details are here</p>
        <a href=""> More</a>
        </td>
        </tr>
    </table>
    <hr>

    <table>
        <tr>
        <td><img src="../img/building.jpeg" alt="hello"       width="200" height="200" align = "right"></td>
        <td><h3>Name</h3> <p>all details are here</p>
        <a href=""> More</a>
        </td>
        </tr>
    </table>
    <hr>

    <table>
        <tr>
        <td><img src="../img/building.jpeg" alt="hello"       width="200" height="200" align = "right"></td>
        <td><h3>Name</h3> <p>all details are here</p>
        <a href=""> More</a>
        </td>
        </tr>
    </table>
    <hr>

    <table>
        <tr>
        <td><img src="../img/building.jpeg" alt="hello"       width="200" height="200" align = "right"></td>
        <td><h3>Name</h3> <p>all details are here</p>
        <a href=""> More</a>
        </td>
        </tr>
    </table>
    <hr>

    <table>
        <tr>
        <td><img src="../img/building.jpeg" alt="hello"       width="200" height="200" align = "right"></td>
        <td><h3>Name</h3> <p>all details are here</p>
        <a href=""> More</a>
        </td>
        </tr>
    </table>
    <hr>

    <table>
        <tr>
        <td><img src="../img/building.jpeg" alt="hello"       width="200" height="200" align = "right"></td>
        <td><h3>Name</h3> <p>all details are here</p>
        <a href=""> More</a>
        </td>
        </tr>
    </table>
    <hr>

    <table>
        <tr>
        <td><img src="../img/building.jpeg" alt="hello"       width="200" height="200" align = "right"></td>
        <td><h3>Name</h3> <p>all details are here</p>
        <a href=""> More</a>
        </td>
        </tr>
    </table>
    <hr>

    <table>
        <tr>
        <td><img src="../img/building.jpeg" alt="hello"       width="200" height="200" align = "right"></td>
        <td><h3>Name</h3> <p>all details are here</p>
        <a href=""> More</a>
        </td>
        </tr>
    </table>
    </form>
    <hr>
</body>
</html> -->
<?php
// include "../control/in_process_enterprenrur_list.php" ?>