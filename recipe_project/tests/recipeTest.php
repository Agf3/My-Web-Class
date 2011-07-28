<?php

include ("../classes/class_creativework_lib.php");

$book = new Recipe();

$name = "Duck Flambe";
$description = "A duck recipe I made up off the top of my head";
$image = "http://www.duck.org/images/rubberduck.jpg";
$url = "http://www.duck.com";

$book->set_about($name, $description, $image, $url);
//$book->set_about_attributes("test");
print_r($book->print_schema());
?>