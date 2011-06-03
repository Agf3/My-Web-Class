<?php
/*
 *PHP Library used for creating HTML tags
 *Created by Alex Figueroa
 */

class Tag{

  /*variables needed to create tag*/
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
    
    $validate = $this->tag_validation($tagType);
    //echo $validate;
  
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
    case 'Special':
      $tagOutput .= "/&gt";
      break;
    }
    
    $this->fullTag = $tagOutput;//'&lt;'.$tagType."&gt;&lt;/".$tagType."&gt;";
    
  }
  
  /*Determines what type of tag the user has chosen. Also will display error if not a supported tag*/
  function tag_validation($tagType){
    
    $validTags = array("!DOCTYPE", "a", "address", "article", "blockquote", "body", "br", "detail", "dfn", "div", "dl", "dt", "footer", "form", "h1", "h2", "h3", "h4", "h5", "h6", "head", "header", "HTML", "li", "link", "menu", "meta", "nav", "ol", "p", "section", "span", "style", "summary", "title", "ul");
    $specialTags = array("!DOCTYPE", "br", "link", "meta");
    
    /*Makes sure the tag is a valid tag then checks to see if it is a special tag*/
    if(in_array($tagType, $validTags) && in_array($tagType, $specialTags)){
      $tag = 'Special';
    }
    
    /*Just makes sure it is a valid tag*/
    else if(in_array($tagType, $validTags)){	  
      $tag = 'Normal';		
    }
    
    /*Error handling for invalid tags*/
	else{
	  $tag = 'Error';
	}
    
    return $tag;
  }
  
  function get_tag(){
    return $this->fullTag;
  }
  
  function get_tag_type(){
    return $this->type;
  }
  
  function get_tag_attributes(){
    return $this->attributes;
  }
  
  function get_tag_content(){
    return $this->content;
  }
  
}

/*
class Doctype extends Tag{

function __construct($tagType){
	
	$this->type = $tagType;

}

function set_tag($tagType){
	
	$this->fullTag = '&lt;'.$tagType." html PUBLIC &quot;-//W3C//DTD XHTML 1.0 Transitional//EN&quot &quot;http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd&quot;&gt;";

}


}

class Link extends Tag{

function __construct($tagType){
	
	$this->type = $tagType;

}

function set_tag($tagType, $link){
	
	if($tagType == 'javascript'){
		$this->fullTag = "&lt;script type=&quot;text/javascript&quot; src=&quot;".$link."&quot;&gt;&lt;/script&gt;";
	}
	
	else if($tagType == 'css'){
		$this->fullTag = "&lt;LINK href=&quot;".$link."&quot; rel=&quot;stylesheet&quot; type=&quot;text/css&quot;&gt;";
	}
}
}

class Header extends Tag{
	
	function __construct($tagType){
		
		$this->type = $tagType;
		
	}
	
	function set_tag($headerType, $text){
		
		$this->fullTag = "&lt;".$headerType."&gt;".$text."&lt;/".$headerType."&gt;";
	}
	
	}*/
?>