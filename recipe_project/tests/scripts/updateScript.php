<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Update A Thing To Mongo DB</title>
</head>

<body>
<?php
include("../../classes/class_recipe_lib.php");

$id = $_POST['ID'];
//echo $id;

$thing = new Recipe();
$thing->mongo_to_array('localhost', 'Recipe', $id);

/*Retrieve all the values for the form*/
$name = $thing->get_name();
$description = $thing->get_description();
$image = $thing->get_image();
$url = $thing->get_url();

$headline = $thing->get_headline();
$author = $thing->get_author();
$awards = $thing->get_awards();
$keywords = $thing->get_keywords();

$recipeCategory = $thing->get_recipe_category();
$recipeCuisine = $thing->get_recipe_cuisine();
$cookingMethod = $thing->get_cooking_method();
$ingredients = $thing->get_ingredients();
$prepTime = $thing->get_prep_time();
$cookTime = $thing->get_cook_time();
$totalTime = $thing->get_total_time();
$recipeYield = $thing->get_recipe_yield();
$recipeInstructions = $thing->get_recipe_instructions();

?>
<h1 align="center">UPDATE YOUR RECIPE</h1>
<form action="update.php" method="post">
<div align="center">
<input name="ID" type="hidden" value="<?php echo $id; ?>" />
  <h2 align="center"><strong>Name:</strong></h2>
  <input name="Name" type="text" size="100" value="<?php echo $name; ?>"/>
 <h2><strong>Description:</strong></h2>
  <input name="Description" type="text" size="100" value="<?php echo $description; ?>"/>
<h2><strong>Image:</strong></h2>
  <input name="Image" type="text" size="100" value="<?php echo $image; ?>"/>
<h2><strong>URL:</strong></h2>
  <input name="Url" type="text" size="100" value="<?php echo $url; ?>"/>
  <h2><strong>Headline:</strong></h2>
  <input name="Headline" type="text" size="100" value="<?php echo $headline; ?>"/>
  <h2><strong>Author:</strong></h2>
  <input name="Author" type="text" size="100" value="<?php echo $author; ?>"/>
  <h2><strong>Awards:</strong></h2>
  <input name="Awards" type="text" size="100" value="<?php echo $awards; ?>"/>
  <h2><strong>Keywords:</strong></h2>
  <input name="Keywords" type="text" size="100" value="<?php echo $keywords; ?>"/>
  <h2><strong>Recipe Category:</strong></h2>
  <input name="RecipeCategory" type="text" size="100" value="<?php echo $recipeCategory; ?>"/>
  <h2><strong>Recipe Cuisine:</strong></h2>
  <input name="RecipeCuisine" type="text" size="100" value="<?php echo $recipeCuisine; ?>"/>
  <h2><strong>Cooking Method:</strong></h2>
  <input name="CookingMethod" type="text" size="100" value="<?php echo $cookingMethod; ?>"/>
  <h2><strong>Ingredients:</strong></h2>
  <input name="Ingredients" type="text" size="100" value="<?php echo $ingredients; ?>"/>
  <h2><strong>Prep Time:</strong></h2>
  <input name="PrepTime" type="text" size="100" value="<?php echo $prepTime; ?>"/>
  <h2><strong>Cook Time:</strong></h2>
  <input name="CookTime" type="text" size="100" value="<?php echo $cookTime; ?>"/>
  <h2><strong>Total Time:</strong></h2>
  <input name="TotalTime" type="text" size="100" value="<?php echo $totalTime; ?>"/>
  <h2><strong>Recipe Yield:</strong></h2>
  <input name="RecipeYield" type="text" size="100" value="<?php echo $recipeYield; ?>"/>
  <h2><strong>Recipe Instructions:</strong></h2>
  <input name="RecipeInstructions" type="text" size="100" value="<?php echo $recipeInstructions; ?>"/>
  <p></br></p>
<input name="submit" type="submit" value="UPDATE RECIPE" />
</div>
</form>
</body>
</html>
