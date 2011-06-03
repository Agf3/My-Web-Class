<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML//EN">
<html> <head>
<title>Tag Creator</title>
<?php include("class_tag_lib.php"); ?> 
</head>

<body>
<?php

$test = new Tag("h1","test","test");
echo $test->get_tag_type();

?>
</body> </html>
