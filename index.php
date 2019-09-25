<?php
require('functions.php');
$db = collectionDbConnection();
$allItems = retrieveData($db);
$output = displayData($allItems);
echo $output;
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="normalize.css" rel="stylesheet" type="text/css">
     <title>My Mushroom Collection</title>
    </head>
    <body>
        <a href="new item.php">Add a new item.</a>
    </body>
</html>


