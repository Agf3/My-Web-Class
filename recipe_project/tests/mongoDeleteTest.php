<?php

include("../classes/class_thing_lib.php");

/*Allows the use of the thing functions*/
$thing = new Thing();

/*All remove functions*/
//$thing->remove_from_mongo_id('localhost', 'Recipe', '4e3462886b26e6d444010000');
//$thing->remove_from_mongo_name('localhost', 'Recipe', 'Cricket');
//$thing->remove_from_mongo_description('localhost', 'Recipe', "Never Played It");
//$thing->remove_from_mongo_image('localhost', 'Recipe', "http://cricmasports.files.wordpress.com/2011/07/lovely-cricket-australia.jpg");
$thing->remove_from_mongo_url('localhost', 'Recipe', "http://www.cricket.com");
?>