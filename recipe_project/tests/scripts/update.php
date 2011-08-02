<?php

$id = $_POST['ID'];
$name = $_POST['Name'];
$description = $_POST['Description'];
$image = $_POST['Image'];
$url = $_POST['Url'];

include("../../classes/class_thing_lib.php");

/*Show what the original schema looked like*/
echo "<h1>ORIGINAL HTML & SCHEMA</h1>";
$originalThing = new Thing();
$originalThing->mongo_to_thing('localhost', 'Recipe', $id);
print_r($originalThing->print_schema());
echo "</br>";
print_r($originalThing->retrieve_from_mongo_id('localhost', 'Recipe', $originalThing->get_id()));

/*Show what the update looks like*/
echo "</br><h1>THE UPDATED HTML & SCHEMA</h1>";
$updatedThing = new Thing();
$updatedThing->mongo_to_thing('localhost', 'Recipe', $id);
$updatedThing->set_name($name);
$updatedThing->set_description($description);
$updatedThing->set_image($image);
$updatedThing->update_to_mongo('localhost', 'Recipe');
print_r($updatedThing->print_schema());
echo "</br>";
print_r($updatedThing->retrieve_from_mongo_id('localhost', 'Recipe', $originalThing->get_id()));

?>