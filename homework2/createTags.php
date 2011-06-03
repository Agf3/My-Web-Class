<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Created Tags</title>
<?php include("class_tag_lib.php"); ?> 
</head>
<body>
<?php

$tag = new Tag("br", "testAttribute", "testContent");
echo $tag->get_tag();
/*Used for testing Purposes*/
/*
echo $tag->get_tag_type()."\n";
echo $tag->get_tag_attributes()."\n";
echo $tag->get_tag_content()."\n";
*/
?>
<br/><br/>
<a href="tagCreator.php">Create another tag</a>
</body>
</html>