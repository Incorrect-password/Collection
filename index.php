<?php
$db = new PDO('mysql:host=db; dbname=Collection','root','password');

$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

$collection = $db->query('SELECT `latin_name`, `common_name`, `height(cm)`, `cap_width(cm)`, `deadly` FROM `Collection`');

$items = $collection->fetchAll();
var_dump($items);

//foreach($items as $value)
//{
//    echo $value['latin_name'];
//    echo $value['common_name'];
//    echo $value['height(cm)'];
//    echo $value['cap_width(cm)'];
//    echo $value['deadly'];
//}
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
