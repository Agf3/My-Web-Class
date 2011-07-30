<?php

include ('../classes/class_thing_lib.php');

$thing = new Thing();

$thing->set_name("Rugby");
$thing->set_description("A Sport Played By Men");
$thing->set_image("http://www.townsvillebulletin.com.au/images/uploadedfiles/editorial/pictures/2008/03/25/Hunt-hit.jpg");
$thing->set_url("http://www.rugby.com");

print_r($thing->print_schema());
echo "</br></br>";
print_r($thing->thing_to_array());
?>