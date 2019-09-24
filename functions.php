<?php
/**
 * sets up a connection to the collection database
 *
 * @return object object containing the database info
 */
function collectionDbConnection(): object
{
    $db = new PDO('mysql:host=db; dbname=Collection', 'root', 'password');

    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    return $db;
}

/**
 * @param $db - all the data from the database
 * @return array an array containing all of the data from the specified fields.
 */
function retrieveData(object $db): array
{
    $collection = $db->query('SELECT `Latin Name`, `Common Name`, `Height(cm)`, `Cap Width(cm)`, `Deadly?` FROM `Collection`');

    $allItems = $collection->fetchAll();
    return $allItems;
}

/**
 * @param $allItems the chosen data selected from a database
 * @return string concatenated fields and values.
 */
function displayData(array $allItems): string
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

function newItem()
{
    $db = collectionDbConnection($latin, $common, $height, $width, $death);
    $query = $db->prepare('INPUT INTO `Collection` (`Latin Name`, `Common Name`, `Height(cm)`, `Cap Width(cm)`, `Deadly?`) VALUES (:latinname, :commonname, :height, :cap-width, ;deadly)');

    $query->execute(['latinname' => $latin,
        'commonname' => $common,
        'height' => $height,
        'cap-width' => $width,
        'deadly' => $death]);
}
