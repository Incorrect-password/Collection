<?php
require('functions.php');
$db = databaseConnection();
$allItems = retrieveData($db);
displayData($allItems);



?>

<!--<!DOCTYPE html>-->
<!--<html lang="en">-->
<!--    <head>-->
<!--        <meta charset="UTF-8">-->
<!--        <meta name="viewport" content="width=device-width, initial-scale=1">-->
<!--         <link href="normalize.css" rel="stylesheet" type="text/css">-->
<!--     <title>My Mushroom Collection</title>-->
<!--    </head>-->
<!--    <body>-->
<!---->
<!--    </body>-->
<!--</html>-->
