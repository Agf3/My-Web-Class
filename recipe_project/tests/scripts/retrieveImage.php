<?php

$image = $_POST['Image'];
$conn = 'localhost';
$db = 'Recipe';

include("../../classes/class_thing_lib.php");

$thing = new Thing();
$thing->retrieve_from_mongo_image($conn, $db, $image);

?>