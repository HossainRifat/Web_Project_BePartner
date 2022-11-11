<?php include "in_nav_bar_home.php";
include "../Control/in_process_home.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" type="text/css" href="in_style.css">
<script src="../js/in_valid.js"></script>
    <title>Home | BePartner</title>
</head>
<body>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>

<script>
$(document).ready(function(){
  $("#searchdata").focus(function(){
    $(".sresult_home").show("slow");
  });

  $("#searchdata").focusout(function(){
    $(".sresult_home").hide("slow");
  });
});
</script>

<form action="" method="post">
    <!-- <hr> -->
    <div class="homec">
    <img src="../img/in_home3.jpg" alt="hello" width="1516"
            height="650" align = "left">
            <div class="top-left">
    <table class="top-left">
        <tr>
            <td>
            <img src="../img/page_ icon.png" height="40"
        width="150"  alt="">
                <p class="home_f">Find the best Startups <br> to invest</p>
            <h3 class="home_t">Search Collaborate Invest Earn</h3>
            <input type="search" name="search" class="in_search_bar" id="searchdata"  placeholder=" Search here" onkeyup="searchmydata()">
            <input type="submit" name="search_button" class="in_search_button" value="Search">
            
            <div class="sresult_home">
            <a id="show" href="" onclick="gosearch()"></a>
            </div>
            
            <br>Propular: 
            <?php
            if(isset($fdata)){
              if(count($fdata) < 6){
                for($i=0;$i<count($fdata);$i++){              
            ?>
            <!-- <a href="" class="list_more1">Agriculture</a>
            <a href=""class="list_more1">Garments</a>
            <a href=""class="list_more1">Science and technology</a> -->
            <a href="in_entrepreneure.php?search=<?php echo $fdata[$i]["company_name"] ?>"class="list_more1"><?php echo $fdata[$i]["company_name"] ?></a>
                <?php
                }  
            }
            else{
              for($i=0;$i<6;$i++){
              
              
                ?>
                <!-- <a href="" class="list_more1">Agriculture</a>
                <a href=""class="list_more1">Garments</a>
                <a href=""class="list_more1">Science and technology</a> -->
                <a href=""class="list_more1"><?php echo $fdata[$i]["company_name"] ?></a>
                    <?php
                    }
            }
            }
                ?>
          </td>
            <!-- <td><img src="../img/img_01_.png" alt="hello" width="300"
            height="500" align = "right"></td> -->
        </tr>
    </table>
    </div>
    </div>
</form>
    <!-- <table>
        <tr>
            <th>News & Events</th>
        </tr>
    </table> -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
   <script>
$(document).ready(function(){
  $("#menu").click(function(){
    $("#dropdown").slideToggle("slow");
  });
  $(".bellbutton").click(function(){
    $(".noti_son").slideToggle("slow");
  });
});
</script>

    <button class="menu2" id="menu">Menu</button>
    <div class="dropdown" id="dropdown">
      <table>
        <tr>
          <td><a href="in_sent_offer.php">My sent offers</a></td>
        </tr>
        <tr>
          <td><a href="in_report.php">Report to admin</a></td>
        </tr>
        <tr>
          <td><a href="#"></a></td>
        </tr>
      </table>

    </div>

    <!-- <script>
      function messagelog(){
  var msg = document.getElementById("msggo").innerText;
  console.log(msg);
}
    </script> -->
    <button type="button" name="noti" class="bellbutton"> <img src="../img/bell.png" height ="20" width="20" /></button>
    <div class="noti_son">
        <h3 align="center">Notifications</h3>
        <table class="noti_table">
          <?php
          
          if(!isset($mdata)){ ?>
            <tr>
                <td>No message</td>
            </tr>
            <?php } 
            else{
              for($i=0;$i<count($mdata);$i++){
            ?>
            <tr>
              <td><a href="./in_messenger.php" id="msggo" onclick="messagelog()">New message from <?php echo $mdata[$i]["sender"]?></a></td>
            </tr>
            <?php } }?>
        </table>
    </div>
</body>
</html>
