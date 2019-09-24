<?php
require('functions.php');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="normalize.css" rel="stylesheet" type="text/css">
     <title>Add Item</title>
    </head>
    <body>
        <form method="post">
            Latin Name<input type="text" name="latin name">
            Common Name<input type="text" name="common name">
            Height(cm)<input type="text" name="height">
            Cap Width(cm)<input type="text" name="cap width">
            Deadly?<input type="text" name="deadly">
            <input type="submit" value="submit" name="submit">
        </form>
    </body>
</html>