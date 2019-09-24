<?php
/**
 * sets up a connection to the collection database
 *
 * @return array variable containing the database info
 */
function collectionDbConnection()
{
    $db = new PDO('mysql:host=db; dbname=Collection', 'root', 'password');

    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    return $db;
}

/**
 * @param $db - all the data from the database
 * @return array an array containing all of the data from the specified fields.
 */
function retrieveData($db)
{
    $collection = $db->query('SELECT `Latin Name`, `Common Name`, `Height(cm)`, `Cap Width(cm)`, `Deadly?` FROM `Collection`');

    $allItems = $collection->fetchAll();
    return $allItems;
}

/**
 * @param $allItems the chosen data selected from a database
 * @return string concatenated fields and values.
 */
function displayData($allItems)
{
    $output = '';
    foreach($allItems as $row)
    {
        foreach($row as $row => $field)
        {
           $output .= '<p>' . $row . ' : ' . $field . '</p>';
        }
    }
    return $output;
}