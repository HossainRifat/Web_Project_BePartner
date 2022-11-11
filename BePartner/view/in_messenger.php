<?php 
include "./in_nav_bar_home.php";
include "../Control/in_process_messenger.php";
// include "../control/in_process_enterprenrur_list.php";
?>
<html>
    <head>
        <title>Messenger | BePartner</title>
    </head>
    <body>
    <?php
    if(isset($fdata) && isset($mdata)){
    for($i=0;$i<count($mdata);$i++){
        
        for($j=0;$j<count($fdata);$j++){
            if($mdata[$i]["sender"]==$fdata[$j]["ceo_email"]){
        
       ?> 
<form action="" method="post">
<div class="msginbox">
        <table>
            
        <!-- <table class="list"> -->
        <tr>
        <td class="msgcolor">Message from <?php echo $mdata[$i]["sender"] ?></td>
        </tr>
        <tr>

        <td class="msgcolor"><h2> CEO of <?php echo $fdata[$j]["company_name"] ?> </h2>
        </td>
        </tr>
        <tr>
            <td class="msgcolor">
                Message:
            </td>
            <td class="msgcolor">Reply:</td>
        </tr>
        <tr>
        <td>
            <div class="msgdetails">
                <text name="" cols="30" rows="10" value=""><?php echo $mdata[$i]["message"] ?></text>
            </div>
            </td>
            
            <td>
                <div>
                    <textarea class="sendmsg" name="sendmsg" id="" cols="30" rows="10" placeholder="Reply here..."></textarea>
                </div>
            </td>
        </tr>
        <tr>
        <input type="hidden" name="id" value="<?php echo $mdata[$i]["sender"] ?>">
            <td><input class="buttonreplay"type="button" value="Forward"></td>
            <td><input class="buttonreplay" type="submit" name="reply" value="Reply"></td>
        </tr>
    </table>

</div>
</form>
    <?php
            }
        }
    }
}
    ?>
    </body>
</html>