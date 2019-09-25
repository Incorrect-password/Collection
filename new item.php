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
            <label for="latin-name">Latin Name</label>
            <input type="text" name="latin-name" id = "latin-name">
            <label for="common-name">Common Name</label>
            <input type="text" name="common-name" id="common-name">
            <label for="height">Height</label>
            <input type="text" name="height" id="height">
            <label for="cap-width">Cap Width(cm)</label>
            <input type="text" name="cap-width" id="cap-width">
            <label for="deadly">Deadly?</label>
            <input type="text" name="deadly" id="deadly">
            <input type="submit" value="submit" name="submit">
        </form>
        <a href="index.php">See Collection</a>
    </body>
</html>