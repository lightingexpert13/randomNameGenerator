<?php
include_once 'controller/databaseController.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="res/css/mainCss.css">
        <meta charset="UTF-8">
        <title>Random Info</title>
    </head>
    <body
        <div id="userInfo">
        <form method="post">
            <p>Name: <?php echo $fname . " " . $lname?></br>
               Address: <?php echo $address?></br>
               City: <?php echo $city . ", " . $state . " " . $zipcode?>
            </p>
            <?php
                if(isset($_POST['regen'])) {
                    randomNumber();
                }
            ?>
            <button type="regenerate" name="regen" value="Regenerate">Regenerate</button>
        </form>
        </div>
    </body>
</html>
