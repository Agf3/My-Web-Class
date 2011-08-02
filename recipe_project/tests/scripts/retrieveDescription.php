<?php

$description = $_POST['Description'];
$conn = 'localhost';
$db = 'Recipe';

include("../../classes/class_thing_lib.php");

$thing = new Thing();
$thing->retrieve_from_mongo_description($conn, $db, $description);

?>