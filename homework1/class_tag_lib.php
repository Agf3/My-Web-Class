<?php

class Tag{

protected $type;
protected $fullTag;

function __construct($tagType){
	
	$this->type = $tagType;
}

function set_tag($tagType){
	
	$this->fullTag = '&lt;'.$tagType."&gt;&lt;/".$tagType."&gt;";

}

function get_tag(){
	
	return $this->fullTag;

}

function get_tag_type(){
	
	return $this->type;

}

}

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
	
}
?>