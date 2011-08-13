<?php
ini_set('display_errors', 'On');
class testclass {
private $itemscope = 'http://www.schema.org/Thing';
private $id; //mongo object id

private $name;
private $url;
private $image;
private $description;
protected $test1;
public $objID;
Public $Colname="FinalThing";

//saves thing
function save_object($collection) {

$obj = $this->prepare_array();
$collection->insert($obj);
}
//gets a thing array to pass to mongo, it will error if you just pass in a $this because it can't access the private variables;
function prepare_array() {
/*Hardcoded Temp*/
//$obj['name'] = "First Recipe ";//$this->name->value;
//
    $obj['name'] = $_POST["RecipeName"];//"First Recipe";
    $obj['url'] =$_POST["URLName"];// "www.MyOwnRecipe.Com/EggOmlete";
    $obj['image'] = $_POST["ImageName"];//"EggOmlete.Jpg";
    $obj['description'] =$_POST["Description"];/// "This is first Recipe from Nirav.";
    return $obj;
//$obj = array( "about" => "Recipe system 1.0", "author" => "Nirav Patel");
//    $salaries["Bob"] = 2000;
//$salaries["Sally"] = 4000;
//$salaries["Charlie"] = 600;
//$salaries["Clare"] = 0;
//
//$obj['url'] = "www.MyOwnRecipe.Com/EggOmlete";//$this->url->value;
//$obj['image'] = 'EggOmlete.Jpg';//$this->image->value;
//$obj['description'] = 'This is first Recipe from Nirav.';//$this->description->value;
/*
foreach($this as $key => $value) {
$obj[$key] = $value;
}
*/
//return $salaries;
}
function getItemScope() {

return $this->itemscope;

}

function setNameValue($var) {

$this->name->value = $var;

}

function getNameValue() {

return $this->name->value;

}

function setNameTag($var) {

$this->name->tag->tagtype = $var;
}

function getNameTag() {

return $this->name->tag->tagtype ;

}
function setNameAttributes($var) {

$class = get_class($this) . ' name ' . $var;
$this->name->tag->attributes['class'] = $class;
$this->name->tag->attributes['itemprop'] = 'name';

}

function getNameAttributes() {

return $this->name->tag->attributes;

}

function setUrlValue($var) {

$this->url->value = $var;

}

function getUrlValue() {

return $this->url->value;

}

function setUrlTag($var) {

$this->url->tag->tagtype = $var;

}

function getUrlTag() {

return $this->url->tag->tagtype;

}
function setUrlAttributes($var) {

$class = get_class($this) . ' url ' . $var;
$this->url->tag->attributes['class'] = $class;
$this->url->tag->attributes['itemprop'] = 'url';

}

function getUrlAttributes() {

return $this->url->tag->attributes;

}
function setImageValue($var) {

$this->image->value = $var;

}

function getImageValue() {

return $this->image->value;

}

function setImageTag($var) {

$this->image->tag->tagtype = $var;

}

function getImageTag() {

return $this->image->tag->tagtype;

}
function setImageAttributes($var) {

$class = get_class($this) . ' image ' . $var;
$this->image->tag->attributes['class'] = $class;
$this->image->tag->attributes['itemprop'] = 'image';

}

function getImageAttributes() {

return $this->image->tag->attributes;

}
function setDescriptionValue($var) {

$this->description->value = $var;

}

function getDescriptionValue() {

return $this->description->value;

}
function getDescriptionFormFieldType() {

return $this->description->form->fieldtype;

}
function setDescriptionFormFieldType($var) {

$this->description->form->fieldtype = $var;

}
function getImageFormFieldType() {

return $this->image->form->fieldtype;

}
function setImageFormFieldType($var) {

$this->image->form->fieldtype = $var;

}
function getUrlFormFieldType() {

return $this->url->form->fieldtype;

}
function setUrlFormFieldType($var) {

$this->url->form->fieldtype = $var;

}
function getNameFormFieldType() {

return $this->name->form->fieldtype;

}

function setNameFormFieldType($var) {

$this->name->form->fieldtype = $var;

}
function setDescriptionTag($var) {

$this->description->tag->tagtype = $var;

}

function getDescriptionTag() {

return $this->description->tag->tagtype;

}
function setDescriptionAttributes($var) {

$class = get_class($this) . ' description ' . $var;
$this->description->tag->attributes['class'] = $class;
$this->description->tag->attributes['itemprop'] = 'description';

}

function getDescriptionAttributes() {

return $this->description->tag->attributes;

}

function testclass($id = null, $collection = null) {
//allows the loading of object at instantiation;
if(!is_null($id)) {

$this->get_object($collection, $id);
}

$this->description->tag->tagtype = 'span';
$this->image->tag->tagtype = 'img';
$this->url->tag->tagtype = 'a';
$this->name->tag->tagtype = 'span';
$this->description->form->fieldtype = 'text';
$this->image->form->fieldtype = 'text';
$this->url->form->fieldtype = 'text';
$this->name->form->fieldtype = 'text';
$this->name->tag->attributes['class'] = get_class($this) . ' tag ';
$this->name->tag->attributes['itemprop'] = 'tag';
$this->url->tag->attributes['class'] = get_class($this) . ' url ';
$this->url->tag->attributes['itemprop'] = 'url';
$this->url->tag->attributes['href'] = 'myownrecipe.com';

$this->image->tag->attributes['class'] = get_class($this) . ' image ';
$this->image->tag->attributes['itemprop'] = 'image';
$this->description->tag->attributes['class'] = get_class($this) . ' description ';
$this->description->tag->attributes['itemprop'] = 'description';

//print_r($this);

}
public function PrintThing()
{
   // $this->get_object();
$dbl=new DBLayer();
$dbl->setCollectionObj($this->Colname);
$obj=$this->prepare_array();
$this->objID=$dbl->InsertCollection($obj,NULL);
$cursor = $dbl->get_CollectionObjectbyid($this->Colname,$this->objID);
foreach ($cursor as $arr) 
{
$this->name->value = $arr["name"];
$this->url->value = $arr["url"];
$this->image->value = $arr["image"];
$this->description->value = $arr["description"];
}
//echo 'Printing';
echo '<b>Name<b></b> :'. $this->printNameHtmlTag().'<br>';
echo '<b>Description</b> :'. $this->printDescriptionHtmlTag().'<br>';
echo '<b>URL </b> :'. $this->printUrlHtmlTag().'<br>';
echo '<b>Image </b> :'. $this->printImageHtmlTag().'<br>';

//$this->printNameHtmlTag();
    
}
private function printNameHtmlTag()
{
$tag = new Tag($this->getNameTag(), $this->getNameAttributes(), $this->getNameValue());
return $tag->get_tag();
}
private function printUrlHtmlTag(){
$tag = new Tag($this->getUrlTag(), $this->getUrlAttributes(), $this->getUrlValue());
return $tag->get_tag();
}

private function printDescriptionHtmlTag(){
$tag = new Tag($this->getDescriptionTag(), $this->getDescriptionAttributes(), $this->getDescriptionValue());
return $tag->get_tag();
}
private function printImageHtmlTag(){
$tag = new Tag($this->getImageTag(), $this->getImageAttributes(), $this->getImageValue());
return $tag->get_tag();
}
public function SearchThing($parmName,$parmval)
{
$dbl=new DBLayer();
$dbl->setCollectionObj($this->Colname);
$cursor = $dbl->get_CollectionObjectbysearchParameter($this->Colname,$parmName, $parmval);  
foreach ($cursor as $arr) 
{
$this->objID=$arr["_id"];
$this->name->value = $arr["name"];
$this->url->value = $arr["url"];
$this->image->value = $arr["image"];
$this->description->value = $arr["description"];
}
//echo 'Printing';
echo '<b>Name<b></b> :'. $this->printNameHtmlTag().'<br>';
echo '<b>Description</b> :'. $this->printDescriptionHtmlTag().'<br>';
echo '<b>URL </b> :'. $this->printUrlHtmlTag().'<br>';
echo '<b>Image </b> :'. $this->printImageHtmlTag().'<br>';

//$this->printNameHtmlTag();
    
}
}
?>