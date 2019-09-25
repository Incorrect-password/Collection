<?php
/**
 * sets up a connection to the collection database
 *
 * @return :PDO $db containing the database info
 */
function collectionDbConnection(): PDO
{
    $db = new PDO('mysql:host=db; dbname=Collection', 'root', 'password');

    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    return $db;
}

/**
 * @param $db - all the data from the database
 * @return array $allItems containing all of the data from the specified fields.
 */
function retrieveData(PDO $db): array
{
    $collection = $db->query('SELECT `Latin Name`, `Common Name`, `Height(cm)`, `Cap Width(cm)`, `Deadly` FROM `Collection`');

    $allItems = $collection->fetchAll();
    return $allItems;
}

/**
 * @param $allItems the chosen data selected from a database
 * @return string $output concatenated fields and values.
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

/**
 * @param string $latin user input for the latin name of a new item
 * @param string $common user input for the common name of a new item
 * @param int $height user input for the height of a new item
 * @param int $width user input for the width of a new item
 * @param string $death user input for the deathly cat. of a new item
 */
function newItem(PDO $db, string $latin, string $common, int $height, int $width, string $death)
{
    $query = $db->prepare('INSERT INTO `Collection` (`Latin Name`, `Common Name`, `Height(cm)`, `Cap Width(cm)`, `Deadly`) VALUES (:latinname, :commonname, :height, :capwidth, :deadly);');

    $query->execute(['latinname' => $latin,
        'commonname' => $common,
        'height' => $height,
        'capwidth' => $width,
        'deadly' => $death]);
}
