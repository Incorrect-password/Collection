<?php

function retrieveData ()
{
    $db = new PDO('mysql:host=db;dbname=Collection','root','password');

    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

    $collection = $db->query('SELECT `latin_name`,`common_name`,`height(cm)`,`cap_width(cm)`,`deadly` FROM `Collection`');

    $items = $collection->fetchAll();

    return $items;
    echo 'yes';
}
function displayData($items)
{
    foreach($items as $value)
    {
        echo $value['latin_name'];
    }
}