<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Created Tag</title>
<?php include("class_tag_lib.php"); ?> 
</head>
<body>
<?php

$tagType = $_POST["tagSelect"];
$headerType = $_POST['headerSelect'];
$headerText = $_POST['headerText'];
$css = $_POST['cSSLink'];
$javascript = $_POST['javascriptLink'];



if($tagType == 'body'){
	
	$tag = new Tag($tagType);
	$tag->set_tag($tagType);
	//echo $tag->get_tag_type();

}

else if($tagType == 'html'){
	
	$tag = new Tag($tagType);
	$tag->set_tag($tagType);

}

else if($tagType == 'DOCTYPE'){
	$tag = new Doctype($tagType);
	$tag->set_tag($tagType);
}

else if($tagType == 'javascript'){
	$tag = new Link($tagType);
	$tag->set_tag($tagType, $javascript);
	//echo $tag->get_tag_type();
}

else if($tagType == 'css'){
	$tag = new Link($tagType);
	$tag->set_tag($tagType, $css);
}

else if($tagType == 'header'){
	$tag = new Header($tagType);
	$tag->set_tag($headerType, $headerText);
	//echo $tag->get_tag_type();
}

echo $tag->get_tag();
?>
<br/><br/>
<a href="tagCreator.php">Create another tag</a>
</body>
</html>