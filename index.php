<?php
require('functions.php');
$db = collectionDbConnection();
$allItems = retrieveData($db);
$output = displayData($allItems);
echo $output;



?>


