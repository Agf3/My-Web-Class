<?php

include("../classes/class_thing_lib.php");

/*Shows all three parts of the update process.
  1) Grab Original values from DB
  2) Insert new values into DB
  3) Verify that the values were upadted */


/*Show what the original schema looked like*/
echo "<h1>BEFORE UPDATE</h1>";
$originalThing = new Thing();
$originalThing->mongo_to_thing('localhost', 'Recipe', '4e373d191ce31e201e000000');
print_r($originalThing->print_schema());

/*Show what the update should look like*/
echo "</br><h1>THE UPDATE</h1>";
$updatedThing = new Thing();
$updatedThing->mongo_to_thing('localhost', 'Recipe', '4e373d191ce31e201e000000');
$updatedThing->set_name("Cricket 2.0");
$updatedThing->set_description("Still haven't played it");
$updatedThing->set_image("http://graphics8.nytimes.com/images/2009/08/09/sports/cricket/09cricket-600.jpg");
$updatedThing->update_to_mongo('localhost', 'Recipe');
print_r($updatedThing->print_schema());

/*Show what the update actually looks like (Should be same as above)*/
echo "</br><h1>AFTER THE UPDATE</h1>";
$newThing = new Thing();
$newThing->mongo_to_thing('localhost', 'Recipe', '4e373d191ce31e201e000000');
print_r($newThing->print_schema());
?>