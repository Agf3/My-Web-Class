<?php

$name = $_POST['Name'];
$description = $_POST['Description'];
$image = $_POST['Image'];
$url = $_POST['Url'];

include("../../classes/class_thing_lib.php");

/*Create the actual thing*/
$thing = new Thing();

/*Set values for thing*/
$thing->set_name($name);
$thing->set_description($description);
$thing->set_image($image);
$thing->set_url($url);

//echo $thing->get_name();
//echo $thing->get_description();
//echo $thing->get_image();
//echo $thing->get-url();
/*Add thing as an array to mongo*/
echo "<h1>The Actual HTML For Your Thing</h1>";
echo $thing->print_schema();
$thing->insert_to_mongo('localhost','Recipe');
echo "</br><strong>Your unique ID: ".$thing->get_id()."</br>";
echo "<h1>The MongoDB Array For Your Thing</h1></br>";
$thing->retrieve_from_mongo_name('localhost', 'Recipe', $thing->get_name());
?>