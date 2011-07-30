<?php

include("../classes/class_thing_lib.php");

try {
  /*Open connection to MongoDB server*/
  $connection = new Mongo('localhost');
  
  /*Access DB*/
  $db = $connection->Recipe;
  
  /*Access Collection*/
  $collection = $db->items;

  /*Retrieve all documents*/
  $cursor = $collection->find();

  /*Print all documents to screen*/
  echo $cursor->count() . ' objects(s) found. <br/>';  
  foreach ($cursor as $obj) {
    print_r($obj);
  }

  /*Disconnect*/
  $connection->close();
} catch (MongoConnectionException $e) {
  die('Error connecting to MongoDB server');
} catch (MongoException $e) {
  die('Error: ' . $e->getMessage());
}
?>