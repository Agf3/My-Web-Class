<?php

include ("../classes/class_recipe_lib.php");

$duck = new Recipe();

/*SET THING/ABOUT VALUES*/
$name = "Duck Flambe";
$description = "A duck recipe I made up off the top of my head";
$image = "http://www.duck.org/images/rubberduck.jpg";
$url = "http://www.duck.com";

/*SET CREATIVE WORK VALUES*/
$headline = "Quite Possibly The Greatest Tasting Duck Ever";
$author = "Fig";
$awards = "2011 National Duck Honors";
$language = "English";
$keywords = "Duck, Best, Amazing, Flambe";

/*SET RECIPE VALUES*/
$cookTime = "1 HR";
$cookingMethod = "Bake";
$ingredients = "Duck, Sauce";
$prepTime = "30 MIN";
$recipeCategory = "Duck";
$recipeCuisine = "American";
$recipeInstructions = "Just Cook It and It Will Taste Delicious";
$recipeYield = "100";
$totalTime = "1 HR 30 MIN";

/*SET SCHEMA*/
$duck->set_about($name, $description, $image, $url);
$duck->set_headline($headline);
$duck->set_author($author);
$duck->set_awards($awards);
$duck->set_language($language);
$duck->set_keywords($keywords);
$duck->set_cook_time($cookTime);
$duck->set_cooking_method($cookingMethod);
$duck->set_ingredients($ingredients);
$duck->set_prep_time($prepTime);
$duck->set_recipe_category($recipeCategory);
$duck->set_recipe_cuisine($recipeCuisine);
$duck->set_recipe_instructions($recipeInstructions);
$duck->set_recipe_yield($recipeYield);
$duck->set_total_time($totalTime);

/*PRINT SCHEMA*/
//echo $duck->get_prep_time_tag();
print_r($duck->print_schema());
?>