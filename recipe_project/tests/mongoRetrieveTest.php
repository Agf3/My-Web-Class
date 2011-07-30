<?php

include("../classes/class_thing_lib.php");

$thing = new Thing();

/*All different retrieve functions*/
//$thing->retrieve_all_from_mongo('localhost', 'Recipe');
//$thing->retrieve_from_mongo_id('localhost', 'Recipe', '4e3449596b26e6d544000000');
//$thing->retrieve_from_mongo_name('localhost', 'Recipe', 'Football');
//$thing->retrieve_from_mongo_description('localhost', 'Recipe', "A Sport Played By Men");
//$thing->retrieve_from_mongo_image('localhost', 'Recipe', "http://www.townsvillebulletin.com.au/images/uploadedfiles/editorial/pictures/2008/03/25/Hunt-hit.jpg");
$thing->retrieve_from_mongo_url('localhost', 'Recipe', "http://www.cricket.com");
?>