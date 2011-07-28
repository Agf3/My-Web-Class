<?php

include ("../classes/class_recipe_lib.php");

$duck = new Recipe();

$name = "Duck Flambe";
$description = "A duck recipe I made up off the top of my head";
$image = "http://www.duck.org/images/rubberduck.jpg";
$url = "http://www.duck.com";

$duck->set_about($name, $description, $image, $url);
//$book->set_about_attributes("test");
print_r($duck->print_schema());
?>