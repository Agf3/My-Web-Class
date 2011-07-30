<?php

/* 
 * Created by Alex Figueroa
 * A class to create a Thing as defined by http://www.schema.org/thing 
*/

function __autoload($class_name){
  include ('class_'.strtolower($class_name).'_lib.php');
}

class Thing extends Tag{
  
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
  
  /*START NAME*/
  /*Set or change the name of your Thing*/
  function set_name($name){
    $this->name->value = $name;
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
  function thing_to_array(){
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
    $thing['name'] = $name;
    $thing['description'] = $description;
    $thing['image'] = $image;
    $thing ['url'] = $url;
    
    return $thing;
  }
  /*END MONGODB FUNCTIONS*/
  /*End line of entire Class*/
}
?>