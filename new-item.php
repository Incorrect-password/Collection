<?php
require('functions.php');
if(isset($_POST['image']) &&
    isset($_POST['latin-name']) &&
    isset($_POST['common-name']) &&
    isset($_POST['height']) &&
    isset($_POST['cap-width']) &&
    isset($_POST['deadly']))
{
    $db = collectionDbConnection();
    newItem($db, $_POST['image'], $_POST['latin-name'], $_POST['common-name'], $_POST['height'], $_POST['cap-width'], $_POST['deadly']);
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
<h1>Add A New Shroom</h1>
<form method="post">
    <div class="inputDiv">
        <label for="image">Image URL/Location</label>
        <input type="text" name="image" id="image" placeholder="eg. /pics/Boletus">
    </div>
    <div class="inputDiv">
        <label for="latin-name">Latin Name: </label>
        <input type="text" name="latin-name" id="latin-name" placeholder="eg. Boletus edulis" required>
    </div>
    <div class="inputDiv">
        <label for="common-name">Common Name: </label>
        <input type="text" name="common-name" id="common-name" placeholder="eg. Porcini" required>
    </div>
    <div class="inputDiv">
        <label for="height">Height(cm): </label>
        <input type="number" name="height" id="height" placeholder="eg. 10" min="1" max="99" maxlength="2" size="2" required>
    </div>
    <div class="inputDiv">
        <label for="cap-width">Cap Width(cm): </label>
        <input type="number" min="1" max="99" maxlength="2" size="2" name="cap-width" id="cap-width" placeholder="eg. 10" required>
    </div>
    <div class="inputDiv">
        <label for="deadly yes">Deadly? Yes</label>
        <input type="radio" name="deadly" id="deadly yes" value="Yes">
        <label for="deadly no">No</label>
        <input type="radio" name="deadly" id="deadly no" value="No" checked>
    </div>
    <div class="inputDiv">
        <input type="submit" value="submit" name="submit">
    </div>
</form>
<div class="anchorBox">
    <a href="index.php" class="pagelink">Back to Collection</a>
</div>
</body>
</html>