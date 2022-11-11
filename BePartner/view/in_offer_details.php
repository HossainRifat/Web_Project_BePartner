<?php include "in_nav_bar_entrepreneure.php";
include "../Control/in_process_offer_details.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
<script src="../js/in_valid.js"></script>
    <title>Entrepreneure | BePartner</title>
    <script src="../js/in_valid.js"></script>
</head>
<body>
    <hr>
    <table>
        <form action="" method="post">
        <tr>
            <td><h3><?php echo $row["company_name"] ?></h3>
            <h2><?php echo $row["moto"] ?></h2>
            <p><?php echo $row["description"] ?></p>
            <h4>Sent Offer: <?php echo $offer["value"] ?> BDT For <?php echo $offer["share"] ?>% of the Company. </h4>
            <button name="delete" class="en_button">Delete Offer</button>
            <input type="button" class="en_button" value="Update Offer" onclick="openofferForm()">
            <input type="button" class="en_button" onclick="openchatForm()" value="Message">
            </td>
            <td>
            <img src="../img/bar.png" alt="hello"       width="10"
            height="600" align = "right">
            </td>
            <td><img src="../img/building.jpeg" alt="hello"       width="1040"
            height="600" align = "right"></td>
        </tr>
        </form>
    </table>

    <hr>
    <table class="en_de">
        <br><br>
        <tr>
            <!-- <td><img src="../img/img_01_.png" alt="hello"       width="100"
            height="100" align = "right">
            </td> -->
            <td class="in_why">
                <h3>Why <br> You Choose Us</h3>
            </td>
            <td>
            <img src="../img/bar.png" alt="hello"       width="10"
            height="70" align = "right">
            </td>
            <td>
                <?php echo $row["why_us"] ?>
            
            <!-- </td>
            <td><img src="../img/img_01_.png" alt="hello"       width="100"
            height="100" align = "right">
            </td> -->
            <td>
            <img src="../img/bar.png" alt="hello"       width="10"
            height="70" align = "right">
            </td>
            <td class="en_details">
                <b>Tota profit:</b> <?php echo $row["total_profit"] ?> BDT.<br>
                <b>Last Month profit:</b> <?php echo $row["last_month_profit"] ?> BDT.<br>
                <b>Last year profit:</b> <?php echo $row["last_year_profit"] ?> BDT.<br>
                <b>Valuation:</b> <?php echo $row["valuation"] ?> BDT.
            </td>
        </tr>
    </table>
    <table>
    <tr><br><br>
            <td><img src="../img/img_01_.png" alt="hello"       width="100"
            height="100" align = "right">
            </td>
            <td>
                <b><?php echo $row["goal01_title"] ?></b><br>
                <p><?php echo $row["goal01_des"] ?></p>
            </td>
            <td><img src="../img/img_01_.png" alt="hello"       width="100"
            height="100" align = "right">
            </td>
            <td>
            <b><?php echo $row["goal02_title"] ?></b><br>
                <p><?php echo $row["goal02_des"] ?></p>
            </td>
            </td>
            <td><img src="../img/img_01_.png" alt="hello"       width="100"
            height="100" align = "right">
            </td>
            <td>
            <b><?php echo $row["goal03_title"] ?></b><br>
                <p><?php echo $row["goal03_des"] ?></p>
            </td>
            <td><img src="../img/img_01_.png" alt="hello"       width="100"
            height="100" align = "right">
            </td>
            <td>
            <b><?php echo $row["goal04_title"] ?></b><br>
                <p><?php echo $row["goal04_des"] ?></p>
            </td>
        </tr>
    </table>
    <div class="chat-popup" id="message">
  <form action="" class="form-container" method="post">
    <h1>Message</h1>

    <label for="msg"><b>To CEO of <?php echo $row["company_name"] ?></b></label>
    <textarea placeholder="Type message.." name="msg" required></textarea>

    <button type="submit" name="of_msg" class="btn">Send</button>
    <button type="button" class="btn cancel" onclick="closechatForm()">Close</button>
  </form>
</div>

<div class="chat-popup" id="offer">
  <form action="" class="form-container" method="post">
    <h1>Give new offer</h1>

    <label name="ss" for="msg"><b>To CEO of <?php echo $row["company_name"] ?></b></label>
    <p class="offfermsg">Share(%):</p>
    <input type="number" step="0.01" min="0" max="100" name="sharevalue" class="offfermsg">
    <p class="offfermsg">Value(BDT):</p>
    <input type="number" name="value" class="offfermsg">
    <p class="offfermsg">Details:</p>
    <!-- <input type="text" name="details" class="offfermsg"> -->
    <textarea placeholder="Type message.." name="details" required></textarea>
    <button type="submit" name="of_sub" class="btn">Send</button>
    <button type="button" class="btn cancel" onclick="closeofferForm()">Close</button>
  </form>
</div>

</body>
</html>
