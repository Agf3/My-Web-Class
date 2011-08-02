<?php

$id = $_POST['ID'];
$conn = 'localhost';
$db = 'Recipe';

include("../../classes/class_thing_lib.php");

/*Show what the original db looked like*/
echo "<h1>ORIGINAL MONGO DB</h1>";
$thing = new Thing();
$thing->retrieve_all_from_mongo($conn, $db);
echo "</br>";

/*Remove from db*/
echo "<h1>WHAT YOU HAVE REMOVED FROM THE DATABASE</h1>";
$thing->retrieve_from_mongo_id($conn, $db, $id);
echo "</br>";
$thing->remove_from_mongo_id($conn, $db, $id);


/*Show what the updated db looks like*/
echo "<h1>UPDATED MONGO DB</h1>";
$thing->retrieve_all_from_mongo($conn, $db);

?>