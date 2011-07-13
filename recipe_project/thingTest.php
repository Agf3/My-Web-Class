<?php

/*
 * Created by Alex Figueroa
 * Used to test the Thing class
*/

include("class_thing_lib.php");

$thing = new Thing();
$thing->set_name("Macbook Pro");
//echo $thing->get_name()."     ";
$thing->set_description("The Computer I wrote this code on...aka best computer ever made");
//echo $thing->get_description()."     ";
$thing->set_image("http://www.apple.com/macbookpro/picture");
//echo $thing->get_image()."     ";
$thing->set_url("http://www.apple.com");
//echo $thing->get_url()."     ";
//echo $thing->get_itemtype();
echo $thing->print_schema();
?>