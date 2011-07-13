<?php

/* 
 * Created by Alex Figueroa
 * A class to create a Thing as defined by http://www.schema.org/thing 
*/

function __autoload($class_name){
  include $class_name.'.php';
}

class Thing extends Tag{
  
  private $name;
  private $description;
  private $image;
  private $url;
  private $itemtype = "http://www.schema.org/Thing";
  
  
  /*Constructor for the Thing Class*/
  function __construct() {
    
    
    /*Taken from Professor Williams code.  Hardcodes all the default tags for our private variables*/
    $this->description->tag->tagtype = 'span';
    $this->image->tag->tagtype = 'img';
    $this->url->tag->tagtype = 'a';
    $this->name->tag->tagtype = 'span';
    //Removed form fields
    $this->name->tag->attributes['class'] = get_class($this) . ' name '; //Changed to correct variable (tag => name)
    $this->name->tag->attributes['itemprop'] = 'name'; //Changed to correct variable (tag => name)
    $this->url->tag->attributes['class'] = get_class($this) . ' url ';
    $this->url->tag->attributes['itemprop'] = 'url';
    $this->image->tag->attributes['class'] = get_class($this) . ' image ';
    $this->image->tag->attributes['itemprop'] = 'image';
    $this->description->tag->attributes['class'] = get_class($this) . ' description ';
    $this->description->tag->attributes['itemprop'] = 'description';	
    //print_r($this);
    /*End Professor Williams code*/
  }  
  
  /*START SETTER METHODS*/
  
  /*START NAME*/
  /*Set or change the name of your Thing*/
  function set_name($name){
    $this->name->value = $name;
  }
  
  /*Set or change the attributes for the name of your thing*/
  function set_name_attributes($var){
    
    $class = get_class($this) . ' name ' . $var;
    $this->name->attributes['class'] = $class;
    $this->name->attributes['itemprop'] = 'name';
    
  }
  /*END NAME*/
  
  
  /*START DESCRIPTION*/
  /*Set or change the description of your Thing*/
  function set_description($description){
    $this->description->value = $description;
  }
  
  function set_description_attributes($var){
    
    $class = get_class($this) . ' description ' . $var;
    $this->description->attributes['class'] = $class;
    $this->description->attributes['itemprop'] = 'description';
    
  }
  /*END DESCRIPTION*/
  
  
  /*START IMAGE*/
  /*Set or change the image of your Thing*/
  function set_image($image){
    $this->image->value = $image;
  }
  
  /*Set or change the attributes for the image of your Thing*/
  function set_image_attributes($var){
    
    $class = get_class($this) . ' image ' . $var;
    $this->image->attributes['class'] = $class;
    $this->image->attributes['itemprop'] = 'image';
    $this->image->attributes['src'] = $this->get_image();
    
  }
  /*END IMAGE*/
  
  
  /*START URL*/
  /*Set or change the URL of your Thing*/
  function set_url($url){
    $this->url->value = $url;
  }
  
  
  /*Set or change the attributes for the url of your Thing*/
  function set_url_attributes($var) {
    
    $class = get_class($this) . ' url ' . $var;
    $this->url->attributes['class'] = $class;
    $this->url->attributes['itemprop'] = 'url';
    $this->url->attributes['href'] = $this->get_url();
    
  }
  /*END URL*/
  
  /*END SETTER METHODS*/
  
  
  /*START GETTER METHODS*/  
  
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
  /*END DESCRIPTION*/
  
  
  /*START IMAGE*/
  /*Retrieve the image of your Thing*/
  function get_image(){
    return $this->image->value;
  }
  
  /*Retrieve the tag of the name of your Thing*/
  function get_image_tag(){
    return $this->image->tag->tagType;
  }
  
  /*Retrieve the attributes of the name of your Thing*/
  function get_image_attributes(){
    return $this->image->tag->attributes;
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
  /*END URL*/

  /*START ITEMTYPE*/
  /*Retrieve the itemtype of your thing*/
  function get_itemtype(){
    return $this->itemtype;
  }
  /*END ITEMTYPE*/

  /*END SETTER METHODS*/  


  /*START HTML PRINTING FUNCTIONS*/
  /*Note: I created the functions to print to screen and realize that these need to be changed once we actually load them into the database*/
  
   /*Creates the opening div tag for the schema. Defaults to the Thing itemtype if no variable is entered*/ 
  protected function itemscope_open(){ 
    $html = "&lt;div itemscope itemtype=&quot;".$this->get_itemtype()."&quot;&gt;"; 
    return $html;
  }
  
  /*Provides the final closed div tag for the schema*/
  protected function itemscope_close(){
    $html = "&lt;/div&gt;";    
    return $html;
  }
  

  /*Creates the full html tag for the name*/
  protected function itemprop_name(){
    $html = "&lt;".$this->get_name_tag()." itemprop=&quot;name&quot;&gt;".$this->get_name()."&lt;/".$this->get_name_tag()."&gt;";
    return $html;
  }
  
  /*Creates the full html tag for the description*/
  protected function itemprop_description(){
    $html = "&lt;".$this->get_description_tag()." itemprop=&quot;description&quot;&gt;".$this->get_description()."&lt;/".$this->get_description_tag()."&gt;";
    return $html;
  }
  
  /*Creates the full html tag for the image*/
  protected function itemprop_image(){
    $html ="&lt;".$this->get_image_tag()." itemprop=&quot;image&quot; src=&quot;".$this->get_image()."&quot; /&gt;";
    return $html;
  }
  
  /*Creates the full html tag for the url*/
  protected function itemprop_url(){
    $html = "&lt".$this->get_url_tag." itemprop=&quot;url&quot; href&quot;".$this->get_url()."&quot;&gt;".$this->get_url()."&lt;/".$this->get_url_tag()."&gt;";
    return $html;
  }
  
  
  /*Creates the full html printout for the Thing Schema*/
  function print_schema(){
    
    $html = $this->itemscope_open()."    ";
    $html .= $this->itemprop_name()."   ";
    $html .= $this->itemprop_description()."    ";
    $html .= $this->itemprop_image()."    ";
    $html .= $this->itemprop_url()."     ";
    $html .= $this->itemscope_close();
    
    return $html;
  }
  /*End line of entire Class*/
}
?>