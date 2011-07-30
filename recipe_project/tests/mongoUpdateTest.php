<?php

include("../classes/class_thing_lib.php");

$thing = new Thing();

/*All different update functions*/
$thing->mongo_to_thing('localhost', 'Recipe', '4e34771f6b26e6e144020000');
print_r($thing->print_schema());
?>