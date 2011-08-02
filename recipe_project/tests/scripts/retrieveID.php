<?php

$id = $_POST['ID'];
$conn = 'localhost';
$db = 'Recipe';

include("../../classes/class_thing_lib.php");

$thing = new Thing();
$thing->retrieve_from_mongo_id($conn, $db, $id);

?>