<?php

include("../classes/class_thing_lib.php");

/*Create the actual thing*/
$thing = new Thing();

/*Set values for thing*/
$thing->set_name("Cricket");
$thing->set_description("Never Played It");
$thing->set_image("http://cricmasports.files.wordpress.com/2011/07/lovely-cricket-australia.jpg");
$thing->set_url("http://www.cricket.com");

/*Add thing as an array to mongo*/
$thing->insert_to_mongo('localhost','Recipe');
?>