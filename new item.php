<?php
require('functions.php');
if(isset($_POST['latin-name']) &&
    isset($_POST['common-name']) &&
    isset($_POST['height']) &&
    isset($_POST['cap-width']) &&
    isset($_POST['deadly']))
{
    $db = collectionDbConnection();
    newItem($db, $_POST['latin-name'], $_POST['common-name'], $_POST['height'], $_POST['cap-width'], $_POST['deadly']);
}

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
            Latin Name<input type="text" name="latin-name">
            Common Name<input type="text" name="common-name">
            Height(cm)<input type="text" name="height">
            Cap Width(cm)<input type="text" name="cap-width">
            Deadly?<input type="text" name="deadly">
            <input type="submit" value="submit" name="submit">
        </form>
        <a href="index.php">See Collection</a>
    </body>
</html>