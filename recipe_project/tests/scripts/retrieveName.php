<?php

$name = $_POST['Name'];
$conn = 'localhost';
$db = 'Recipe';

include("../../classes/class_thing_lib.php");

$thing = new Thing();
$thing->retrieve_from_mongo_name($conn, $db, $name);

?>