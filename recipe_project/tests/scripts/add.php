<?php

include("../../classes/class_recipe_lib.php");

/*Grabs the values from the form*/
$name = $_POST['Name'];
$description = $_POST['Description'];
$image = $_POST['Image'];
$url = $_POST['Url'];

$headline = $_POST['Headline'];
$author = $_POST['Author'];
$awardsString = $_POST['Awards'];
$keywordsString = $_POST['Keywords'];

$cookTime = $_POST['CookTime'];
$cookingMethod = $_POST['CookingMethod'];
$ingredientsString = $_POST['Ingredients'];
$prepTime = $_POST['PrepTime'];
$recipeCategory = $_POST['RecipeCategory'];
$recipeCuisine = $_POST['RecipeCuisine'];
$recipeInstructions = $_POST['RecipeInstructions'];
$recipeYield = $_POST['RecipeYield'];
$totalTime = $_POST['TotalTime'];

/*Splits certain form strings into an array*/
$awards = explode(",", $awardsString);
$keywords = explode(",", $keywordsString);
$ingredients = explode(",", $ingredientsString);

/*Create the actual thing*/
$thing = new Recipe();
$fig = "Fig"; //Added to the end of all attributes

/*Set values for thing*/
$thing->set_all($name, $description, $image, $url, $headline, $author, $awards, $keywords, $recipeCategory, $recipeCuisine, $cookingMethod, $prepTime, $cookTime, $totalTime, $recipeYield, $ingredients, $recipeInstructions, $fig);

/*Add thing as an array to mongo*/
echo "<h1>The Actual HTML For Your Thing</h1>";
print_r($thing->print_schema());
$thing->insert_to_mongo('localhost','Recipe', $thing->to_array());
echo "</br><strong>Your unique ID: ".$thing->get_id()."</br>";
echo "<h1>The MongoDB Array For Your Thing</h1></br>";
$thing->retrieve_from_mongo_id('localhost', 'Recipe', $thing->get_id());
?>