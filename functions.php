<?php

function displayData ()
{
    $db = new PDO('mysql:host=db; dbname=Collection','root','password');

    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

    $collection = $db->query('SELECT `Latin Name`, `Common Name`, `Height(cm)`, `Cap Width(cm)`, `Deadly?` FROM `Collection`');

    $allItems = $collection->fetchAll();

    foreach($allItems as $row)
    {
        echo '<div>';
        foreach($row as $row => $field)
        {
            echo '<p>' . $row . ' : ' . $field . '</p>';
        }
        echo '</div>';
    }
}