<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Created Tag</title>
</head>
<body>
<?php
$tag = $_POST["tagSelect"];
$headerType = $_POST['headerSelect'];
$headerText = $_POST['headerText'];
$css = $_POST['cSSLink'];
$javascript = $_POST['javascriptLink'];

echo "Tag: ".$tag."\n";
echo "Header Type: ".$headerType."\n";
echo "Header Text: ".$headerText."\n";
echo "CSS Link: ".$css."\n";
echo "Javascript Link: ".$javascript."\n";
?>