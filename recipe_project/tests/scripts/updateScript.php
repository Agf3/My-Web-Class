<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Update A Thing To Mongo DB</title>
</head>

<body>
<?php
include("../../classes/class_thing_lib.php");

$id = $_POST['ID'];
//echo $id;

$thing = new Thing();
$thing->mongo_to_thing('localhost', 'Recipe', $id);
$name = $thing->get_name();
$description = $thing->get_description();
$image = $thing->get_image();
$url = $thing->get_url();

?>
<h1 align="center">UPDATE YOUR THING</h1>
<form action="update.php" method="post">
<div align="center">
  <h2 align="center"><strong>Name:</strong></h2>
  <input name="Name" type="text" size="100" value="<?php echo $name; ?>"/>
 <h2><strong>Description:</strong></h2>
  <input name="Description" type="text" size="100" value="<?php echo $description; ?>"/>
<h2><strong>Image:</strong></h2>
  <input name="Image" type="text" size="100" value="<?php echo $image; ?>"/>
<h2><strong>URL:</strong></h2>
  <input name="Url" type="text" size="100" value="<?php echo $url; ?>"/>
  <input name="ID" type="hidden" value="<?php echo $id; ?>" />
  <p></br></p>
<input name="submit" type="submit" value="UPDATE THING" />
</div>
</form>
</body>
</html>
