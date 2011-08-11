<?php

/* 
 * Created by Alex Figueroa
 * A class to create a Thing as defined by http://www.schema.org/thing 
*/

function __autoload($class_name){
  include ('class_'.strtolower($class_name).'_lib.php');
}

class Thing extends Tag{
  
  protected $id;
  protected $name;
  protected $description;
  protected $image;
  protected $url;
  private $itemtype = "http://www.schema.org/Thing";
  
  
  /*Constructor for the Thing Class*/
  function __construct() {
    
    /*Edited from Professor Williams code.  Hardcodes all the default tags for our private variables*/
    //Set all tag types
    $this->name->tag->tagType = 'span';    
    $this->description->tag->tagType = 'span';
    $this->image->tag->tagType = 'img';
    $this->url->tag->tagType = 'a';
    
    //Set all form fields
    $this->name->form->fieldtype = 'text';
    $this->description->form->fieldtype = 'text';
    $this->image->form->fieldtype = 'text';
    $this->url->form->fieldtype = 'text';
    
    //Set all tag attributes
    $this->name->tag->attributes['class'] = get_class($this) . ' name'; //Changed to correct variable (tag => name)
    $this->name->tag->attributes['itemprop'] = 'name'; //Changed to correct variable (tag => name)
    $this->description->tag->attributes['class'] = get_class($this) . ' description';
    $this->description->tag->attributes['itemprop'] = 'description';
    $this->image->tag->attributes['class'] = get_class($this) . ' image';
    $this->image->tag->attributes['itemprop'] = 'image';
    $this->url->tag->attributes['class'] = get_class($this) . ' url';
    $this->url->tag->attributes['itemprop'] = 'url';	
    //End Professor Williams code
  }  
  
  /*START SETTER METHODS*/
  
  /*Set or change the id of your Thing*/
  function set_id($id){
    $this->id->value = $id;
  }


/*START ALL*/
  /*Set or change all the values with an option to change attributes*/
  function set_all($name, $description, $image, $url, $var = NULL){
    $this->set_name($name);
    $this->set_description($description);
    $this->set_image($image);
    $this->set_url($url);

    if($var != NULL){
      $this->set_all_attributes($var);
    }

  }
  
  /*Set or change all of the attributes*/
  function set_all_attributes($var){
    $this->set_name_attributes($var);
    $this->set_description_attributes($var);
    $this->set_image_attributes($var);
    $this->set_url_attributes($var);
  }
  /*END ALL*/

  /*START NAME*/
  /*Set or change the name of your Thing*/
  function set_name($name){
    $this->name->value = $name;
  }
  
  /*Set or change the tag for the name of your Thing*/
  function set_name_tag($tag){
    $this->name->tag->tagType = $tag;
  }

  /*Set or change the attributes for the name of your Thing*/
  function set_name_attributes($var){
    $class = get_class($this) . ' name ' . $var;
    $this->name->tag->attributes['class'] = $class;
    $this->name->tag->attributes['itemprop'] = 'name';
  }

  /*Set or change the form field type for the name of your Thing*/
  function set_name_form($form){
    $this->name->form->fieldtype = $form;
  }
  /*END NAME*/
  
  
  /*START DESCRIPTION*/
  /*Set or change the description of your Thing*/
  function set_description($description){
    $this->description->value = $description;
  }
  
  /*Set or change the tag for the description of your Thing*/
  function set_description_tag($tag){
    $this->description->tag->tagType = $tag;
  }

  /*Set or change the attributes for the description of your Thing*/
  function set_description_attributes($var){
    
    $class = get_class($this) . ' description ' . $var;
    $this->description->tag->attributes['class'] = $class;
    $this->description->tag->attributes['itemprop'] = 'description';
    
  }

  /*Set or change the form field type for the description of your Thing*/
  function set_description_form($form){
    $this->description->form->fieldtype = $form;
  }
  /*END DESCRIPTION*/
  
  
  /*START IMAGE*/
  /*Set or change the image of your Thing*/
  function set_image($image){
    $this->image->value = $image;
    $this->set_image_attributes();
  }
  
  /*Set or change the tag for the image of your Thing*/
  function set_image_tag($tag){
    $this->image->tag->tagType = $tag;
  }

  /*Set or change the attributes for the image of your Thing*/
  function set_image_attributes($var){
    
    $class = get_class($this) . ' image ' . $var;
    $this->image->tag->attributes['class'] = $class;
    $this->image->tag->attributes['itemprop'] = 'image';
    $this->image->tag->attributes['src'] = $this->get_image();   
  }

  /*Set or change the form field type for the name of your Thing*/
  function set_image_form($form){
    $this->image->form->fieldtype = $form;
  }
  /*END IMAGE*/
  
  
  /*START URL*/
  /*Set or change the URL of your Thing*/
  function set_url($url){
    $this->url->value = $url;
    $this->set_url_attributes();
  }
  
  /*Set or change the tag for the url of your Thing*/
  function set_url_tag($tag){
    $this->url->tag->tagType = $tag;
  }
  
  /*Set or change the attributes for the url of your Thing*/
  function set_url_attributes($var) {
    
    $class = get_class($this) . ' url ' . $var;
    $this->url->tag->attributes['class'] = $class;
    $this->url->tag->attributes['itemprop'] = 'url';
    $this->url->tag->attributes['href'] = $this->get_url();
    
  }

  /*Set or change the form field type for the url of your Thing*/
  function set_url_form($form){
    $this->url->form->fieldtype = $form;
  }
  /*END URL*/
  
  /*END SETTER METHODS*/
  
  
  /*START GETTER METHODS*/

  /*Retrieve the id of your Thing*/
  function get_id(){
    return $this->id->value;
  }  
  
  /*START NAME*/
  /*Retrieve the name of your Thing*/
  function get_name(){
    return $this->name->value;
  }
  
  /*Retrieve the tag of the name of your Thing*/
  function get_name_tag(){
    return $this->name->tag->tagType;
  }
  
  /*Retrieve the attributes of the name of your Thing*/
  function get_name_attributes(){
    return $this->name->tag->attributes;
  }
  
  /*Retrieve the form field type for the name of your Thing*/
  function get_name_form($form){
    return $this->name->form->fieldtype;
  }
  /*END NAME*/
  
  
  
  /*START DESCRIPTION*/
  /*Retrieve the description of your Thing*/
  function get_description(){
    return $this->description->value;
  }

  /*Retrieve the tag of the description of your Thing*/
  function get_description_tag(){
    return $this->description->tag->tagType;
  }
  
  /*Retrieve the attributes of the description of your Thing*/
  function get_description_attributes(){
    return $this->description->tag->attributes;
  }

  /*Retrieve the form field type for the description of your Thing*/
  function get_description_form($form){
    return $this->description->form->fieldtype;
  }
  /*END DESCRIPTION*/
  
  
  /*START IMAGE*/
  /*Retrieve the image of your Thing*/
  function get_image(){
    return $this->image->value;
  }
  
  /*Retrieve the tag of the image of your Thing*/
  function get_image_tag(){
    return $this->image->tag->tagType;
  }
  
  /*Retrieve the attributes of the image of your Thing*/
  function get_image_attributes(){
    return $this->image->tag->attributes;
  }
  
  /*Retrieve the form field type for the image of your Thing*/
  function get_image_form($form){
    return $this->image->form->fieldtype;
  }
  /*END IMAGE*/
  
  
  /*START URL*/
  /*Retrieve the URL of your Thing*/
  function get_url(){
    return $this->url->value;
  }
  
  /*Retrieve the tag of the name of your Thing*/
  function get_url_tag(){
    return $this->url->tag->tagType;
  }
  
  /*Retrieve the attributes of the name of your Thing*/
  function get_url_attributes(){
    return $this->url->tag->attributes;
  }
  
  /*Retrieve the form field type for the name of your Thing*/
  function get_url_form($form){
    return $this->url->form->fieldtype;
  }
  /*END URL*/

  /*START ITEMTYPE*/
  /*Retrieve the itemtype of your thing*/
  function get_itemtype(){
    return $this->itemtype;
  }
  /*END ITEMTYPE*/
  
  /*END GETTER METHODS*/  
  
  
  /*START HTML PRINTING FUNCTIONS*/
  /*Creates the opening div tag for the schema*/ 
  protected function itemscope_open(){ 
    //$html = "&lt;div itemscope itemtype=&quot;".$this->get_itemtype()."&quot;&gt;"; 
    $html = '<div itemscope itemtype="'.$this->get_itemtype().'">';
    return $html;
  }
  
  /*Provides the final closed div tag for the schema*/
  protected function itemscope_close(){
    //$html = "&lt;/div&gt;";    
    $html = '</div>';
    return $html;
  }
  
  
  /*Creates the full html tag for the name*/
  protected function itemprop_name(){
    $this->set_tag($this->get_name_tag(), $this->get_name_attributes(), $this->get_name());
    return $this->get_tag();
  }
  
  /*Creates the full html tag for the description*/
  protected function itemprop_description(){
    $this->set_tag($this->get_description_tag(), $this->get_description_attributes(), $this->get_description());
    return $this->get_tag();
  }
  
  /*Creates the full html tag for the image*/
  protected function itemprop_image(){
    $this->set_tag($this->get_image_tag(), $this->get_image_attributes(), $this->get_image());
    return $this->get_tag();
  }
  
  /*Creates the full html tag for the url*/
  protected function itemprop_url(){
    $this->set_tag($this->get_url_tag(), $this->get_url_attributes(), $this->get_url());
    return $this->get_tag();
  }
  
  
  /*Creates the full html printout for the Thing Schema*/
  function print_schema(){
    
    $html = $this->itemscope_open()."</br>";
    $html .= $this->itemprop_name()."</br>";
    $html .= $this->itemprop_description()."</br>";
    $html .= $this->itemprop_image()."</br>";
    $html .= $this->itemprop_url()."</br>";
    $html .= $this->itemscope_close()."</br>";
    
    return $html;
  }

  /*START MONGODB FUNCTIONS*/
  /*Turns the entire Thing into an array so it can be passed into a mongo db*/
  function to_array($update = FALSE){

    $name['value'] = $this->get_name();
    $name['tag'] = $this->get_name_tag();
    $name['attributes'] = $this->get_name_attributes();
    $name['form'] = $this->get_name_form();
    
    $description['value'] = $this->get_description();
    $description['tag'] = $this->get_description_tag();
    $description['attributes'] = $this->get_description_attributes();
    $description['form'] = $this->get_description_form();

    $image['value'] = $this->get_image();
    $image['tag'] = $this->get_image_tag();
    $image['attributes'] = $this->get_image_attributes();
    $image['form'] = $this->get_image_form();

    $url['value'] = $this->get_url();
    $url['tag'] = $this->get_url_tag();
    $url['attributes'] = $this->get_url_attributes();
    $url['form'] = $this->get_url_form();

    /*Create the full nested array for Thing*/
    if($update == TRUE){
      $thing['_id'] = $this->get_id();
    }
    $thing['name'] = $name;
    $thing['description'] = $description;
    $thing['image'] = $image;
    $thing ['url'] = $url;
    
    return $thing;
  }
  
  /*Retrieves an object from the mongo db & turns it into a thing*/
  function mongo_to_array($conn, $database, $id){
    
    try {
      /*Open connection to MongoDB server*/
      $connection = new Mongo($conn);
      
      /*Access DB*/
      $db = $connection->$database;
      
      /*Access Collection*/
      $collection = $db->items;
      
      /*What were searching for*/
      $mongoID = new mongoId($id);
      $criteria = array('_id' => $mongoID);
      
      /*Execute query*/
      $cursor = $collection->find($criteria);      
      
      /*Checks to see if it can first find the thing by its ID*/
      if($cursor->count() != 0){
	/*Converts all the values from the mongo db into this Thing class*/
	
	foreach ($cursor as $obj) {
	  //print_r($obj['_id']);
	  //$idMongo = $obj['_id']->__toString();
	  $this->set_id($obj['_id']);
	 
	  /*Grabs the arrays from mongo and places them into their own variables*/
	  $name = $obj['name'];
	  $description = $obj['description'];
	  $image = $obj['image'];
	  $url = $obj['url'];
	  
	  /*Sets the values of Thing using the arrays above*/
	  $this->set_name($name['value']);
	  $this->set_name_tag($name['tag']);
	  $this->set_name_attributes();//Still working on how to correctly pass through variables
	  $this->set_name_form($name['form']);

	  $this->set_description($description['value']);
	  $this->set_description_tag($description['tag']);
	  $this->set_description_attributes();//Still working on how to correctly pass through variables
	  $this->set_description_form($description['form']);

	  $this->set_image($image['value']);
	  $this->set_image_tag($image['tag']);
	  $this->set_image_attributes();//Still working on how to correctly pass through variables
	  $this->set_image_form($image['form']);
	
	  $this->set_url($url['value']);
	  $this->set_url_tag($url['tag']);
	  $this->set_url_attributes();//Still working on how to correctly pass through variables
	  $this->set_url_form($url['form']);

	  //echo $this->get_id()."</br>";
	  //echo $this->get_name()."</br>";
	  //echo $this->get_name_tag()."</br>";
	  //print_r($this->get_name_attributes())."</br>";
	  //echo $this->get_name_form()."</br>";
	}
      }
      
      else{
	echo "No such Thing with ID: ".$id;
      }
      
      /*Disconnect*/
      $connection->close();
    } catch (MongoConnectionException $e) {
      die('Error connecting to MongoDB server');
    } catch (MongoException $e) {
      die('Error: ' . $e->getMessage());
    } 
    
  }

  /*START CREATE*/
  /*Insert array into the mongo db.
    Object will most likely be in form of $this->to_array*/
  function insert_to_mongo($conn, $database, $object){

    /*Attempt to insert the thing into my db*/
    try {
      /*Open connection to MongoDB server*/
      $connection = new Mongo($conn);
      
      /*Access DB*/
      $db = $connection->$database;
      
      /*Access Collection*/
      $collection = $db->items;
      
      /*Turn thing into an array then add to db*/
      $item = $object;
      $collection->insert($item);
      

      /*Set the autocreated ID*/
      $this->set_id($item['_id']);
      //echo $this->get_id();
      /*Print to screen to show which item has been added*/
      //echo 'Inserted document with ID: ' . $item['_id'];
      
      /*Disconnect*/
      $connection->close();
    } catch (MongoConnectionException $e) {
      die('Error connecting to MongoDB server');
    } catch (MongoException $e) {
      die('Error: ' . $e->getMessage());
    }
  }
  /*END CREATE*/

  /*START RETRIEVE*/
  /*Retrieve every object from the mongo db in an array*/
  function retrieve_all_from_mongo($conn, $database){
    try {
      /*Open connection to MongoDB server*/
      $connection = new Mongo($conn);
      
      /*Access DB*/
      $db = $connection->$database;
      
      /*Access Collection*/
      $collection = $db->items;
      
      /*Retrieve all documents*/
      $cursor = $collection->find();
      
      /*Print all documents to screen*/
      echo $cursor->count() . ' objects(s) found. <br/><br/>';  
      foreach ($cursor as $obj) {
	print_r($obj);
	echo "</br></br>";
      }

      /*Disconnect*/
      $connection->close();
    } catch (MongoConnectionException $e) {
      die('Error connecting to MongoDB server');
    } catch (MongoException $e) {
      die('Error: ' . $e->getMessage());
    }  
    
  }

  /*Retrieve an object from the mongo db using its ID*/
  function retrieve_from_mongo_id($conn, $database, $id){
    
    try {
      /*Open connection to MongoDB server*/
      $connection = new Mongo($conn);
      
      /*Access DB*/
      $db = $connection->$database;
      
      /*Access Collection*/
      $collection = $db->items;
      
      /*What were searching for*/
      $mongoID = new mongoId($id);
      $criteria = array('_id' => $mongoID);
      
      /*Execute query*/
      $cursor = $collection->find($criteria);
      
      /*Print all documents to screen (If done correctly should only produce 1 result)*/
      echo $cursor->count() . ' objects(s) found. <br/><br/>';  
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
  }

  /*Retrieve an object from the mongo db using its name*/
  function retrieve_from_mongo_name($conn, $database, $name){
    
    try {
      /*Open connection to MongoDB server*/
      $connection = new Mongo($conn);
      
      /*Access DB*/
      $db = $connection->$database;
      
      /*Access Collection*/
      $collection = $db->items;
      
      /*What were searching for*/
      $criteria = array('name.value' => $name);
      
      /*Execute query*/
      $cursor = $collection->find($criteria);
      
      /*Print all documents to screen */
      echo $cursor->count() . ' objects(s) found. <br/><br/>';  
      foreach ($cursor as $obj) {
	print_r($obj);
	echo "<br/><br/>";
      }
      
      
      /*Disconnect*/
      $connection->close();
    } catch (MongoConnectionException $e) {
      die('Error connecting to MongoDB server');
    } catch (MongoException $e) {
      die('Error: ' . $e->getMessage());
    } 
  }

/*Retrieve an object from the mongo db using its description*/
  function retrieve_from_mongo_description($conn, $database, $description){
    
    try {
      /*Open connection to MongoDB server*/
      $connection = new Mongo($conn);
      
      /*Access DB*/
      $db = $connection->$database;
      
      /*Access Collection*/
      $collection = $db->items;
      
      /*What were searching for*/
      $criteria = array('description.value' => $description);
      
      /*Execute query*/
      $cursor = $collection->find($criteria);
      
      /*Print all documents to screen*/
      echo $cursor->count() . ' objects(s) found. <br/><br/>';  
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
  }

/*Retrieve an object from the mongo db using its image*/
  function retrieve_from_mongo_image($conn, $database, $image){
    
    try {
      /*Open connection to MongoDB server*/
      $connection = new Mongo($conn);
      
      /*Access DB*/
      $db = $connection->$database;
      
      /*Access Collection*/
      $collection = $db->items;
      
      /*What were searching for*/
      $criteria = array('image.value' => $image);
      
      /*Execute query*/
      $cursor = $collection->find($criteria);
      
      /*Print all documents to screen (If done correctly should only produce 1 result)*/
      echo $cursor->count() . ' objects(s) found. <br/><br/>';  
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
  }
  
  /*Retrieve an object from the mongo db using its url*/
  function retrieve_from_mongo_url($conn, $database, $url){
    
    try {
      /*Open connection to MongoDB server*/
      $connection = new Mongo($conn);
      
      /*Access DB*/
      $db = $connection->$database;
      
      /*Access Collection*/
      $collection = $db->items;
      
      /*What were searching for*/
      $criteria = array('url.value' => $url);
      
      /*Execute query*/
      $cursor = $collection->find($criteria);
      
      /*Print all documents to screen (If done correctly should only produce 1 result)*/
      echo $cursor->count() . ' objects(s) found. <br/><br/>';  
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
  }
  /*END RETRIEVE*/
  
 /*START DELETE*/
  
  /*Remove an object from the mongo db using its id*/
  function remove_from_mongo_id($conn, $database, $id){
    
    try {
      /*Open connection to MongoDB server*/
      $connection = new Mongo($conn);
      
      /*Access DB*/
      $db = $connection->$database;
      
      /*Access Collection*/
      $collection = $db->items;
      
      /*What were searching for*/
      $mongoID = new mongoId($id);
      $criteria = array('_id' => $mongoID);

      /*Checks to see if it can first find the value before attempting to remove*/
      $cursor = $collection->find($criteria);
      if($cursor->count() != 0){
	
	/*Execute query*/
	$cursor = $collection->remove($criteria);
	
	/*Print Removal*/
	//echo "Removed Thing with ID: " .$criteria['_id'];
      }
      
      else{
      echo "No such object with ID: ".$id;
      }
      
      /*Disconnect*/
      $connection->close();
    } catch (MongoConnectionException $e) {
      die('Error connecting to MongoDB server');
    } catch (MongoException $e) {
      die('Error: ' . $e->getMessage());
    } 
  }

  /*Remove an object from the mongo db using its name*/
  function remove_from_mongo_name($conn, $database, $name){
    
    try {
      /*Open connection to MongoDB server*/
      $connection = new Mongo($conn);
      
      /*Access DB*/
      $db = $connection->$database;
      
      /*Access Collection*/
      $collection = $db->items;
      
      /*What were searching for*/
      $criteria = array('name.value' => $name);

      /*Checks to see if it can first find the value before attempting to remove*/
      $cursor = $collection->find($criteria);
      if($cursor->count() != 0){
	
	/*Execute query*/
	$cursor = $collection->remove($criteria);
	
	/*Print Removal*/
	echo "Removed Thing with Name: " .$criteria['name.value'];
      }
      
      else{
      echo "No such Thing with Name: ".$name;
      }
      
      /*Disconnect*/
      $connection->close();
    } catch (MongoConnectionException $e) {
      die('Error connecting to MongoDB server');
    } catch (MongoException $e) {
      die('Error: ' . $e->getMessage());
    } 
  }

  /*Remove an object from the mongo db using its description*/
  function remove_from_mongo_description($conn, $database, $description){
    
    try {
      /*Open connection to MongoDB server*/
      $connection = new Mongo($conn);
      
      /*Access DB*/
      $db = $connection->$database;
      
      /*Access Collection*/
      $collection = $db->items;
      
      /*What were searching for*/
      $criteria = array('description.value' => $description);

      /*Checks to see if it can first find the value before attempting to remove*/
      $cursor = $collection->find($criteria);
      if($cursor->count() != 0){
	
	/*Execute query*/
	$cursor = $collection->remove($criteria);
	
	/*Print Removal*/
	echo "Removed Thing with Description: " .$criteria['description.value'];
      }
      
      else{
      echo "No such Thing with Description: ".$description;
      }
      
      /*Disconnect*/
      $connection->close();
    } catch (MongoConnectionException $e) {
      die('Error connecting to MongoDB server');
    } catch (MongoException $e) {
      die('Error: ' . $e->getMessage());
    } 
  }

/*Remove an object from the mongo db using its image*/
  function remove_from_mongo_image($conn, $database, $image){
    
    try {
      /*Open connection to MongoDB server*/
      $connection = new Mongo($conn);
      
      /*Access DB*/
      $db = $connection->$database;
      
      /*Access Collection*/
      $collection = $db->items;
      
      /*What were searching for*/
      $criteria = array('image.value' => $image);

      /*Checks to see if it can first find the value before attempting to remove*/
      $cursor = $collection->find($criteria);
      if($cursor->count() != 0){
	
	/*Execute query*/
	$cursor = $collection->remove($criteria);
	
	/*Print Removal*/
	echo "Removed Thing with Image: " .$criteria['image.value'];
      }
      
      else{
      echo "No such Thing with Image: ".$image;
      }
      
      /*Disconnect*/
      $connection->close();
    } catch (MongoConnectionException $e) {
      die('Error connecting to MongoDB server');
    } catch (MongoException $e) {
      die('Error: ' . $e->getMessage());
    } 
  }

/*Remove an object from the mongo db using its url*/
  function remove_from_mongo_url($conn, $database, $url){
    
    try {
      /*Open connection to MongoDB server*/
      $connection = new Mongo($conn);
      
      /*Access DB*/
      $db = $connection->$database;
      
      /*Access Collection*/
      $collection = $db->items;
      
      /*What were searching for*/
      $criteria = array('url.value' => $url);

      /*Checks to see if it can first find the value before attempting to remove*/
      $cursor = $collection->find($criteria);
      if($cursor->count() != 0){
	
	/*Execute query*/
	$cursor = $collection->remove($criteria);
	
	/*Print Removal*/
	echo "Removed Thing with Url: " .$criteria['url.value'];
      }
      
      else{
      echo "No such Thing with Url: ".$url;
      }
      
      /*Disconnect*/
      $connection->close();
    } catch (MongoConnectionException $e) {
      die('Error connecting to MongoDB server');
    } catch (MongoException $e) {
      die('Error: ' . $e->getMessage());
    } 
  }
  /*END DELETE*/

  /*START UPDATE*/

 /*Update an object from the mongo db using its id. The Thing must be updated prior to using this function*/
  function update_to_mongo($conn, $database){
    
    try {
      /*Open connection to MongoDB server*/
      $connection = new Mongo($conn);
      
      /*Access DB*/
      $db = $connection->$database;
      
      /*Access Collection*/
      $collection = $db->items;
      
      /*What were searching for*/
      $mongoID = new mongoId($this->get_id());
      $criteria = array('_id' => $mongoID);

      /*Checks to see if it can first find the value before attempting to update it*/
      $cursor = $collection->find($criteria); //Only want to update one value
      //echo $cursor->count();
      if($cursor->count() != 0){
	
	/*Execute query*/
	$collection->save($this->to_array(TRUE)); //TRUE means to include ID in array
	
	/*Print Update*/
	//echo "Updated Thing with ID: " .$criteria['_id'];
	
      }
      
      else{
	echo "No such Thing with ID: ".$id;
      }
      
      /*Disconnect*/
      $connection->close();
    } catch (MongoConnectionException $e) {
      die('Error connecting to MongoDB server');
    } catch (MongoException $e) {
      die('Error: ' . $e->getMessage());
    } 
  }
  
  
  /*END UPDATE*/
  /*END MONGODB FUNCTIONS*/
  /*End line of entire Class*/
}
?>