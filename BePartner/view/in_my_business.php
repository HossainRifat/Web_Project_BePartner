<?php include "./in_nav_bar_my_business.php";
include "../Control/in_process_my_business.php"?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>My Business | BePartner</title>
    
</head>
<body>


    <hr>
    <?php
    if(isset($fdata)){
        for($i=0; $i<count($fdata); $i++){
            
            ?>
            <table class="my_business">
            <tr>
                <td><h3><?php echo $fdata[$i]["company_name"] ?></h3>
                
                <h2><?php echo $fdata[$i]["moto"] ?></h2>

                <p><?php echo $fdata[$i]["description"] ?></p>
                
                <h4>Investment: <?php echo $fdata[$i]["asking_amount"] ?> BDT.</h4>

                <h4>Share: <?php echo $fdata[$i]["share"] ?>% of the company.</h4>
                <!-- <input type="button" value="Arrange meeting" class="business_button"> -->
                <input type="button" class="button" id="button<?php echo $fdata[$i]["id"] ?>" value="Message">
                </td>
    
                <td>
                <img src="../img/bar.png" alt="hello"       width="10"
                height="400" align = "right">
                </td>
                <td><img src="<?php echo $fdata[$i]["photo"] ?>" alt="Photo"       width="750"
                height="400" align = "right"></td>
            </tr>
        </table>
          
          <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
          <script>
$(document).ready(function(){
  $("#button<?php echo $fdata[$i]["id"] ?>").click(function(){
    $("#message<?php echo $fdata[$i]["id"] ?>").slideToggle("slow");
  });
});
</script>

          <div class="chat-popup" id="message<?php echo $fdata[$i]["id"] ?>">
  <form action="" class="form-container" method="post">
    <h1>Message</h1>

    <label for="msg"><b>To CEO of <?php echo $fdata[$i]["company_name"] ?></b></label>
    <input type="hidden" name="id" value="<?php echo $fdata[$i]["ceo_email"] ?>">
    <textarea placeholder="Type message.." name="msg" required></textarea>

    <button type="submit" name="of_msg" class="btn">Send</button>
    <button type="button" class="btn cancel">Close</button>
  </form>
</div>
            <?php
        }
    }
    ?>
<!--         
$(document).ready(function(){
  $(".button").click(function(){
    $("#message").slideToggle("slow");
  });
  $(".bellbutton").click(function(){
    $(".noti_son").slideToggle("slow");
  });
});
</script> -->

<!-- <div class="chat-popup" id="message">
  <form action="" class="form-container" method="post">
    <h1>Message</h1>

    <label for="msg"><b>To CEO of <?php echo $row["company_name"] ?></b></label>
    <textarea placeholder="Type message.." name="msg" required></textarea>

    <button type="submit" name="of_msg" class="btn">Send</button>
    <button type="button" class="btn cancel" onclick="closechatForm()">Close</button>
  </form>
</div> -->





    <!-- <table>
        <tr>
            <td><h3>Brixel</h3><h2>Create With Heart</h2><h1>Build With Mind</h1>
            Keep the whole family comfortable with building construction. We <br> provide 24/7 emergency water extraction service in Dhaka city.<br>
            <h4>Investment: 1 crore.</h4>
            <h4>Share: 5% of the company.</h4>
            <input type="button" value="Arrange meeting">
            <input type="button" value="Contact CEO">
            </td>

            <td>
            <img src="../img/bar.png" alt="hello"       width="10"
            height="400" align = "right">
            </td>
            <td><img src="../img/building.jpeg" alt="hello"       width="1050"
            height="400" align = "right"></td>
        </tr>
    </table>
      <hr>
      <hr> -->
      <script src="../js/in_valid.js"></script>
    </body>
    </html>