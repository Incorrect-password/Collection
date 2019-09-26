<?php
require('functions.php');
$db = collectionDbConnection();
$allItems = retrieveData($db);
$output = displayData($allItems);
if(isset($_POST['id']))
{
    delete($db, $_POST['id']);
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="normalize.css" rel="stylesheet" type="text/css">
        <link href="mushroomcollection.css" rel="stylesheet" type="text/css">
     <title>My Mushroom Collection</title>
    </head>
    <body>
        <div class="background">
            <h1>A Collection of Mushrooms</h1>
        </div>
        <div class="anchorBox">
            <a class="pagelink" href="new-item.php">Add a new item.</a>
        </div>
        <div class="displayUnit">
            <?php echo $output; ?>
        </div>
    </body>
</html>


