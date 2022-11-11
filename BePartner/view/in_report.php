<?php include "./in_nav_bar_home.php";
include "../Control/in_process_report.php" ?>

<html>
<head>
<link rel="stylesheet" type="text/css" href="in_style.css">
</head>
<body>
    <center>
    <div class="report">
    <form action="" method="post">
        <table>
            <caption>Report to admin</caption>
            <tr>
                <td>Subject:</td>
            </tr>
            <tr>
                <td><input type="text" name="company_name"></td>
            </tr>
            <tr>
                <td>Report:</td>
            </tr>
            <tr>
                <td><textarea class="detail" placeholder="Details here..." name="details"></textarea></td>
            </tr>
            <tr>
                <td><input type="checkbox" name="agreed">I understand the consiqusense of <br>reporting an account.
                </td>
            </tr>
        </table>
        <input type="submit" class="button"   name="submit">

    </form>
    </div>
    </center>
</body>
</html>