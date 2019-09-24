<?php
$db = new PDO('mysql:host=db; dbname=Collection','root','password');

$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

$collection = $db->query('SELECT `Latin Name`, `Common Name`, `Height(cm)`, `Cap Width(cm)`, `Deadly?` FROM `Collection`');

$allItems = $collection->fetchAll();
//var_dump($items);



foreach($allItems as $row)
{
    foreach($row as $row => $field)
    {
        echo $row . ' : ' . $field . '<br>';
    }
    echo '<br>';
}
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
