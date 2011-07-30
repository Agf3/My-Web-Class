<?php

include("../classes/class_thing_lib.php");

/*Create the actual thing*/
$thing = new Thing();

$thing->set_name("Rugby");
$thing->set_description("A Sport Played By Men");
$thing->set_image("http://www.townsvillebulletin.com.au/images/uploadedfiles/editorial/pictures/2008/03/25/Hunt-hit.jpg");
$thing->set_url("http://www.rugby.com");

/*Attempt to insert the thing into my db*/
try {
  /*Open connection to MongoDB server*/
  $connection = new Mongo('localhost');

  /*Access DB*/
  $db = $connection->Recipe;
  
  /*Access Collection*/
  $collection = $db->items;
  
  
  /*Turn thing into an array*/
  $item = $thing->thing_to_array();
  //print_r($item);
  $collection->insert($item);

  /*Print to screen to make sure item has been added*/
  echo 'Inserted document with ID: ' . $item['_id'];

  /*Disconnect*/
  $connection->close();
} catch (MongoConnectionException $e) {
  die('Error connecting to MongoDB server');
} catch (MongoException $e) {
  die('Error: ' . $e->getMessage());
}
?>