<?php

$url = $_POST['Url'];
$conn = 'localhost';
$db = 'Recipe';

include("../../classes/class_thing_lib.php");

$thing = new Thing();
$thing->retrieve_from_mongo_url($conn, $db, $url);

?>