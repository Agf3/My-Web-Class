<?php

$id = $_POST['ID'];

$name = $_POST['Name'];
$description = $_POST['Description'];
$image = $_POST['Image'];
$url = $_POST['Url'];

$headline = $_POST['Headline'];
$author = $_POST['Author'];
$awards = $_POST['Awards'];
$keywords = $_Post['Keywords'];

$recipeCategory = $_POST['RecipeCategory'];
$recipeCuisine = $_POST['RecipeCuisine'];
$cookingMethod = $_POST['CookingMethod'];
$ingredients = $_POST['Ingredients'];
$prepTime = $_POST['PrepTime'];
$cookTime = $_POST['CookTime'];
$totalTime = $_POST['TotalTime'];
$recipeYield = $_POST['RecipeYield'];
$recipeInstructions = $_POST['RecipeInstructions'];

include("../../classes/class_recipe_lib.php");

/*Show what the original schema looked like*/
echo "<h1>ORIGINAL HTML & SCHEMA</h1>";
$originalThing = new Recipe();
$originalThing->mongo_to_array('localhost', 'Recipe', $id);
print_r($originalThing->print_schema());
echo "</br>";
print_r($originalThing->retrieve_from_mongo_id('localhost', 'Recipe', $originalThing->get_id()));

/*Show what the update looks like*/
echo "</br><h1>THE UPDATED HTML & SCHEMA</h1>";
$updatedThing = new Recipe();
$updatedThing->mongo_to_array('localhost', 'Recipe', $id);

$updatedThing->set_all($name, $description, $image, $url, $headline, $author, $awards, $keywords, $recipeCategory, $recipeCuisine, $cookingMethod, $prepTime, $cookTime, $totalTime, $recipeYield, $ingredients, $recipeInstructions);
$updatedThing->update_to_mongo('localhost', 'Recipe');
print_r($updatedThing->print_schema());
echo "</br>";
print_r($updatedThing->retrieve_from_mongo_id('localhost', 'Recipe', $updatedThing->get_id()));

?>