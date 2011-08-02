<?php

include("../../classes/class_thing_lib.php");

$thing = new Thing();
$thing->retrieve_all_from_mongo('localhost', 'Recipe');

?>