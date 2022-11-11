<?php include "in_nav_bar_entrepreneure.php";
include "../Control/in_process_enterprenrur_list.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
<script src="../js//in_valid.js">
</script>
    <title>List</title>
</head>
<body>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
   <script>
$(document).ready(function(){
  $("#searchdata").focus(function(){
    $(".sresult").show("slow");
  });

  $("#searchdata").focusout(function(){
    $(".sresult").hide("slow");
  });
});
</script>
    <!-- <form action="" method="post"> -->
      <div  class="listSearch">
    <table >
        <tr>
        <form action="" method="post">
                <td>
                    <input type="search" name="searchdata" id="searchdata" onkeyup="searchmydata()" class="in_search_bar_list" placeholder=" Search Something">
                </td>
                <td>
                    <input type="submit" name="search" value="Search" class="in_search_button_list" >
                </td>
        </form>
                <td class="pad">
                    <button class="listFilter">Filter</button>
                </td>
                <td>
                <button class="listSort">Sort</button>
                </td>
               
        </tr>
        <tr>
            <div class="sresult">
            <a id="show" href="" onclick="gosearch()"></a>
            </div>
                
        </tr>
    </table>
    </div>
    </form>
    <!-- <button class="listSort">Sort</button>
    
    <button class="listFilter">Filter</button> -->
    
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
   <script>
$(document).ready(function(){
  $(".listsort").click(function(){
    $("#lidropdown").slideToggle("medium");
  });
  $(".bellbutton").click(function(){
    $(".noti_son").slideToggle("slow");
  });
});
</script>
    <div class="lidropdown" id="lidropdown">
      <table>
        <tr>
          <td><a href="in_entrepreneure_list.php?sort=az">Sort by A-Z</a></td>
        </tr>
        <tr>
          <td><a href="in_entrepreneure_list.php?sort=za">Sort by Z-A</a></td>
        </tr>
        <tr>
          <td><a href="in_entrepreneure_list.php?sort=no">Sort by New-Old</a></td>
        </tr>
        <tr>
          <td><a href="in_entrepreneure_list.php?sort=on">Sort by Old-New</a></td>
        </tr>
      </table>
    </div>
    <?php
    
    if(isset($fdata)){
    for($i=0;$i<count($fdata);$i++){
    
       ?> 
        <table class="list">
        <tr>
        <td class="list_im"><img src="<?php echo $fdata[$i]["photo"] ?>" alt="hello"       width="200" height="200" align = "left"></td>
        <td><h2><?php echo $fdata[$i]["company_name"] ?> </h2>
        
        <h3><?php echo $fdata[$i]["moto"] ?></h3>
        
        <p><b></b><?php echo $fdata[$i]["description"] ?>   (Varified by BePartner)</p>
        
        <h4>Asking: <?php echo $fdata[$i]["asking_amount"] ?> BDT For <?php echo $fdata[$i]["share"] ?>% of the Company. </h4>

        <a href="./in_entrepreneure.php?en=<?php echo $enobj->encryption($fdata[$i]["id"])?>" class="list_more"> More about <?php echo $fdata[$i]["company_name"]?></a>

        <!-- <input type="submit" value="More" name="one<?php echo $i ?>"> -->
        </td>
        </tr>
    </table>

    <?php
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