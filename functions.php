<?php
/**
 * sets up a connection to the collection database
 *
 * @return :PDO $db containing the database info
 */
function collectionDbConnection(): object
{
    $db = new PDO('mysql:host=db; dbname=Collection', 'root', 'password');

    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    return $db;
}

/**
 * @param $db - all the data from the database
 * @return array $allItems containing all of the data from the specified fields.
 */
function retrieveData(object $db): array
{
    $collection = $db->query('SELECT `id`, `image`, `Latin Name`, `Common Name`, `Height(cm)`, `Cap Width(cm)`, `Deadly` FROM `Collection` WHERE `Deleted` = 0');

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
        $output .= '<div class="item"><form method="post">';
        foreach($row as $field => $value)
            if($field == 'id') {
                $output .= '<input type="hidden" name="id" value="' . $value . '">';
            } else if($field == 'image'){
                $output .= '<div class="image"><img src="' . $value . '" alt="picture of mushroom"></div>';
            }else{
               $output .= '<p>' . '<span class="field">' . $field .  ' : ' . '</span>' . '<span class="value">' . $value . '</span>' . '</p>';
            }
            $output .= '<p>'. '<input type="submit" value="Delete" name="submit">' .'</p>';
            $output .= '</form></div>';
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
function newItem(PDO $db, string $image, string $latin, string $common, int $height, int $width, string $death)
{
    $query = $db->prepare('INSERT INTO `Collection` (`image`,`Latin Name`, `Common Name`, `Height(cm)`, `Cap Width(cm)`, `Deadly`) VALUES (:image, :latinname, :commonname, :height, :capwidth, :deadly);');

    $query->execute(['image' => $image,
        'latinname' => $latin,
        'commonname' => $common,
        'height' => $height,
        'capwidth' => $width,
        'deadly' => $death]);
}

/**
 * @param $db all the data from the database
 * @param $id the id number from the delete form
 */
function delete(PDO $db, $id)
{
   $query = $db->prepare('UPDATE `Collection` SET `Deleted`=1 WHERE `id` = :id');

   $query->execute([':id' => $id]);
}
