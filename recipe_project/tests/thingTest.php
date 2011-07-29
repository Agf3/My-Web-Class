<?php

include ("../classes/class_thing_lib.php");


$thing = new Thing();

$thing->set_name("Football");
$thing->set_description("Toy used to play football with");
$thing->set_image("http://www.pes-sports.com/football.gif");
$thing->set_url("http://www.nfl.com");
//$thing->set_image_attributes("tthing");
//$thing->set_name_attributes();
//print_r($thing->get_image());
//print_r($thing->get_name_attributes());
//print_r($thing->get_image_tag());
print_r($thing->print_schema());
?>