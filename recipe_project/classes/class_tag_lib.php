<?php
/*
 *PHP Library used for creating HTML tags
 *Created by Alex Figueroa
*/


class Tag{
  
  /*variables assigned to each tag*/
  protected $type;
  protected $content;
  protected $attributes;
  protected $fullTag;
  
  /*Automatically creates the tag based on the given parameters*/
  function __construct($tagType, $tagAttributes, $tagContent){

    $this->type = $tagType;
    $this->attributes = $tagAttributes;
    $this->content = $tagContent;

    $this->set_tag($tagType, $tagAttributes, $tagContent);
    
  }
  
  
  /*The function that actually creates the tag. Uses a validator to make sure that the type of tag is supported*/
  function set_tag($tagType, $tagAttributes, $tagContent){
    
    /*Determines if the tag the user is trying to create is valid*/
    $validate = $this->tag_validation($tagType);
    
    /*Check to make sure that the tag type & attributes are valid*/
    if($this->attribute_validation($tagAttributes) && ($validate!='Error')){
      
      $tagOutput = "&lt".$tagType;
      
      /*Creates the section for the attributes*/ 
      foreach($tagAttributes as $key => $value){
	$tagAttributesOutput .= " ".$key."=&#039".$value."&#039";
      }
      
      /*Determines the type of tag to create based on validation function*/  
      switch($validate){
      case 'Normal':
	$tagOutput .= $tagAttributesOutput."&gt".$tagContent."&lt/".$tagType."&gt";
	break;
      case 'Single':
	$tagOutput .= $tagAttributesOutput." /&gt";
	break;
      case 'SingleNoAttribute':
	$tagOutput .= " /&gt";
	break;
      case 'Comment':
	$tagOutput .=" ".$tagContent." --&gt";
	break;
      case 'Document':
	$tagOutput .=" HTML &gt";
	break;
      }
      
      $this->fullTag = $tagOutput;
      
    }
  }
  
  

  
  /*Determines what type of tag the user is trying to create. Also will display an error if it is not a valid tag*/
  function tag_validation($tagType){    
    
    /*Makes sure the tag is a valid tag then checks to see if it has any special conditions*/
    if($this->html5_validation($tagType)){
      
      if($this->single_tag_with_attributes_validation($tagType)){
	$tag = 'Single';
      }
      
      else if($this->single_tag_no_attributes_validation($tagType)){
	$tag = 'SingleNoAttribute';
      }
      
      else if($this->comment_tag_validation($tagType)){
	$tag = 'Comment';
      }
      
      else if($this->document_tag_validation($tagType)){	  
	$tag = 'Document';		
      }
      
      else{
	$tag = 'Normal';
      }
    }
    
    /*Error handling for invalid tags*/
    else{
      $tag = 'Error';
      $errorMessage = "Sorry ".$tagType." is not a valid tag";
      echo $errorMessage;
      echo "\n";
      
      $directory = getcwd();
      $errorLog = new ErrorFileHandler($directory);
      $errorLog->add_to_log($errorMessage);
      
    }
    
    return $tag;
  }

  /*Checks to make sure the tag is a valid html5 tag*/
  function html5_validation($tagType){
    
    /*A list of all HTML5 tags. Source is http://www.w3schools.com/*/
    $validTags = array("!--","!DOCTYPE", "a", "abbr", "address", "area", "article", "aside", "audio", "b", "base", "bdo", "blockquote", "body", "br", "button", "canvas", "caption", "cite", "code", "col", "colgroup", "command", "datalist", "dd", "del", "details", "dfn", "div", "dl", "dt", "em", "embed", "fieldset", "figcaption", "figure", "footer", "form",  "h1", "h2", "h3", "h4", "h5", "h6", "head", "header", "hgroup", "hr", "html", "i", "frame", "img", "input", "ins", "keygen", "kbd", "label", "legend", "li", "link",  "map", "mark", "menu", "meta", "meter", "nav",  "noscript", "object", "ol", "optgroup", "option", "output", "p", "param", "pre", "progress", "q", "rp", "rt", "ruby", "samp", "script", "section", "select", "small", "source", "span", "strong", "style", "sub", "summary", "sup", "table", "tbody", "td", "texture", "toot", "th", "thead", "time", "title", "tr", "ul", "var", "video", "wbr");
    
    if(in_array($tagType, $validTags)){
      return true;
    }
    else{
      return false;
    }
    
  }
  
  /*Checks to see if the tag is a single tag with attributes*/
  function single_tag_with_attributes_validation($tagType){
    
    /*A list of tags that only contain one pair of brackets with attributes (Example: <area href="test"/>)*/
    $singleTagsWithAttributes = array("area", "base", "col", "embed", "img", "input", "keygen", "link", "meta", "param", "source");

    if(in_array($tagType, $singleTagsWithAttributes)){
      return true;
    }
    else{
      return false;
    }
    
  }


  
  /*Checks to see if the tag is a single tag without attributes*/
  function single_tag_no_attributes_validation($tagType){

    /*A list of tags that only contain one pair of brackets with no attributes (Example: <br/>)*/
    $singleTagsNoAttributes = array("br", "hr");
    
    if(in_array($tagType, $singleTagsNoAttributes)){
      return true;
    }
    else{
      return false;
    }
    
  }



  /*Checks to see if the tag is a comment*/
  function comment_tag_validation($tagType){

    /*A list of tags that can be used as comments*/
    $commentTags = array("!--");

    if(in_array($tagType, $commentTags)){
      return true;
    }
    else{
      return false;
    }

  }
  


  /*Checks to see if the tag is a document type*/
  function document_tag_validation($tagType){

    /*A list of tags that can be used as document types*/
    $documentTags = array("!DOCTYPE");

    if(in_array($tagType, $documentTags)){
      return true;
    }
    else{
      return false;
    }
    
  }



  /*Makes sure that the attributes being added are valid*/
  function attribute_validation($attribute){
    
    /*Checks each attribute individually to make sure it is a valid string*/
    foreach ($attribute as $value){
      
      $numbers = '0123456789';
      
      /*Checks to make sure the value is a string and that there are no numbers contained in the string*/
      if(!is_string($value) || (strcspn($value, $numbers) != strlen($value))){
	
	//echo "strcspn:".strcspn($value, $numbers)."  strlen:".strlen($value);
	$errorMessage = "Sorry ".$value." is not a valid attribute";
	echo $errorMessage;
	echo "\n";
	
	
	  $directory = getcwd();
	  $errorLog = new ErrorFileHandler($directory);
	  $errorLog->add_to_log($errorMessage);
	
	
	return false;
	
      }	
    }
    
    return true;
  }
  
  
  /*Returns the full tag (Example: <a href="test.html">Example</a>*/
  function get_tag(){
    return $this->fullTag;
  }
  
  /*Returns the tag type (Example: img)*/
  function get_tag_type(){
    return $this->type;
  }
  
  /*Returns only the tag attributes (Example: align = "center")*/
  function get_tag_attributes(){
    return $this->attributes;
  }

  /*Returns only the tag contents (Example: Click here for a link)*/  
  function get_tag_content(){
    return $this->content;
  }

  /*End line of entire class*/  
}


?>
