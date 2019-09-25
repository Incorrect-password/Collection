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
        <link href="mushroomcollection.css" rel="stylesheet" type="text/css">
     <title>Add Item</title>
    </head>
    <body>
        <form method="post">
            <label for="latin-name">Latin Name</label>
            <input type="text" name="latin-name" id = "latin-name" placeholder="eg. Boletus edulis " required>
            <label for="common-name">Common Name</label>
            <input type="text" name="common-name" id="common-name" placeholder="eg. Porcini" required>
            <label for="height">Height</label>
            <input type="number" name="height" id="height" placeholder="eg. 10" required>
            <label for="cap-width">Cap Width(cm)</label>
            <input type="number" min="1" max="99" maxlength="2" size="2" name="cap-width" id="cap-width" placeholder="eg. 10" required>
            <label for="deadly yes">Deadly? Yes</label>
            <input type="radio" name="deadly" id="deadly yes" value="Yes">
            <label for="deadly no">No</label>
            <input type="radio" name="deadly" id="deadly" value="No" checked>
            <input type="submit" value="submit" name="submit">
        </form>
        <a href="index.php">See Collection</a>
    </body>
</html>