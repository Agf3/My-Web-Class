<?php

/*
 * Created by Alex Figueroa
 * A class to create a Recipe schema based on http://www.schema.org/Recipe
 * A recipe is a specific type of creative work which is a specific type of thing
 */

function __autoload($class_name){
  include $class_name.'.php';
}


class Recipe extends CreativeWork{
  
  private $cookTime;
  private $cookingMethod;
  private $ingredients;
  private $nutrition;
  private $prepTime;
  private $recipeCategory;
  private $recipeCuisine;
  private $recipeInstructions;
  private $recipeYield;
  private $totalTime;
  private $itemType = "http://schema.org/Recipe";
  
  
  function __construct(){
    
    $this->cookTime->tag->tagtype = 'meta';
    $this->cookTime->tag->attributes['class'] = get_class($this) . ' cookTime ';
    $this->cookTime->tag->attributes['itemprop'] = 'cookTime';
    
    $this->cookingMethod->tag->tagtype = 'span';
    $this->cookingMethod->tag->attributes['class'] = get_class($this) . ' cookingMethod ';
    $this->cookingMethod->tag->attributes['itemprop'] = 'cookingMethod';
    
    $this->ingredients->tag->tagtype = 'span';
    $this->ingredients->tag->attributes['class'] = get_class($this) . ' ingredients ';
    $this->ingredients->tag->attributes['itemprop'] = 'ingredients';
    
    $this->nutrition->tag->tagtype = 'div';
    $this->nutrition->tag->attributes['class'] = get_class($this) . ' nutrition ';
    $this->nutrition->tag->attributes['itemprop'] = 'nutrition';

    $this->prepTime->tag->tagtype = 'meta';
    $this->prepTime->tag->attributes['class'] = get_class($this) . ' prepTime ';
    $this->prepTime->tag->attributes['itemprop'] = 'prepTime';
    
    $this->recipeCategory->tag->tagtype = 'span';
    $this->recipeCategory->tag->attributes['class'] = get_class($this) . ' recipeCategory ';
    $this->recipeCategory->tag->attributes['itemprop'] = 'recipeCategory';
    
    $this->recipeCuisine->tag->tagtype = 'span';
    $this->recipeCuisine->tag->attributes['class'] = get_class($this) . ' recipeCuisine ';
    $this->recipeCuisine->tag->attributes['itemprop'] = 'recipeCuisine';
    
    $this->recipeInstructions->tag->tagtype = 'span';
    $this->recipeInstructions->tag->attributes['class'] = get_class($this) . ' recipeInstructions ';
    $this->recipeInstructions->tag->attributes['itemprop'] = 'recipeInstructions';
    
    $this->recipeYield->tag->tagtype = 'span';
    $this->recipeYield->tag->attributes['class'] = get_class($this) . ' recipeYield ';
    $this->recipeYield->tag->attributes['itemprop'] = 'recipeYield';
    
    $this->totalTime->tag->tagtype = 'meta';
    $this->totalTime->tag->attributes['class'] = get_class($this) . ' totalTime ';
    $this->totalTime->tag->attributes['itemprop'] = 'totalTime';
  }
  

/*START SETTER METHODS*/
  
  /*START COOK TIME*/
  /*Set or change the cooktime for your recipe*/
  function set_cook_time($cookTime){
    $this->cookTime->value = $cookTime;
  }

  /*Set or change the attributes for the cooktime for your recipe*/
  function set_cook_time_attributes($var){
    
    $class = get_class($this) . ' cookTime ' . $var;
    $this->cookTime->attributes['class'] = $class;
    $this->cookTime->attributes['itemprop'] = 'cookTime';
    
  }
  /*END COOK TIME*/
  
  
  /*START COOKING METHOD*/
  /*Set or change the cook method for your recipe*/
  function set_cooking_method($cookingMethod){
    $this->cookingMethod->value = $cookingMethod;
  }

  /*Set or change the attributes for your cooking method*/
  function set_cooking_method_attributes($var){

    $class = get_class($this) . ' cookingMethod ' . $var;
    $this->cookingMethod->attributes['class'] = $class;
    $this->cookingMethod->attributes['itemprop'] = 'cookingMethod';
    
  }
  /*END COOKING METHOD*/
  
  
  /*START INGREDIENTS*/
  /*Set or change the ingredients of your recipe*/
  function set_ingredients($ingredients){
    $this->ingredients->value = $ingredients;
  }
  
  /*Set or change the attributes for your ingredients*/
  function set_ingredients($var){
    
    $class = get_class($this) . ' ingredients ' . $var;
    $this->ingredients->attributes['class'] = $class;
    $this->ingredients->attributes['itemprop'] = 'ingredients';    
  }
  /*END INGREDIENTS*/
  
  
  /*START NUTRTITION*/
  /*Set or change the nutrition information of your recipe*/
  function set_nutrition($nutrition){
    $this->nutrition->value = $nutrition;
  }
  
  
  /*Set or change the attributes for your nutrition information*/
  function set_nutrition_attributes($var) {
    
    $class = get_class($this) . ' nutrition ' . $var;
    $this->nutrition->attributes['class'] = $class;
    $this->nutrition->attributes['itemprop'] = 'nutrition';
    
  }
  /*END NUTRITION*/
  
  /*START PREP TIME*/
  /*Set or change the prep time of your recipe*/
  function set_prep_time($prepTime){
    $this->prepTime->value = $prepTime;
  }

  /*Set or change the attributes for your prep time*/
  function set_prep_time_attributes($var){
    
    $class = get_class($this) . ' prepTime ' . $var;
    $this->prepTime->attributes['class'] = $class;
    $this->prepTime->attributes['itemprop'] = 'prepTime';
    
  }
  /*END PREP TIME*/
  
  
  /*START RECIPE CATEGORY*/
  /*Set or change the recipe category*/
  function set_recipe_category($recipeCategory){
    $this->recipeCategory->value = $recipeCategory;
  }
  
  function set_recipe_category_attributes($var){

    $class = get_class($this) . ' recipeCategory ' . $var;
    $this->recipeCategory->attributes['class'] = $class;
    $this->recipeCategory->attributes['itemprop'] = 'recipeCategory';
    
  }
  /*END RECIPE CATEGORY*/
  
  
  /*START RECIPE CUISINE*/
  /*Set or change the recipe cuisine*/
  function set_recipe_cuisine($recipeCuisine){
    $this->recipeCuisine->value = $recipeCuisine;
  }
  
  /*Set or change the attributes for the recipe cuisine*/
  function set_recipe_cuisine_attributes($var){
    
    $class = get_class($this) . ' recipeCuisine ' . $var;
    $this->recipeCuisine->attributes['class'] = $class;
    $this->recipeCuisine->attributes['itemprop'] = 'recipeCuisine';
    
  }
  /*END RECIPE CUISINE*/
  
  
  /*START RECIPE INSTRUCTION*/
  /*Set or change the instructions for your recipe*/
  function set_recipe_instructions($recipeInstructions){
    $this->recipeInstructions->value = $recipeInstructions;
  }
  
  
  /*Set or change the attributes for the recipe instructions*/
  function set_recipe_instructions_attributes($var) {
    
    $class = get_class($this) . ' recipeInstructions ' . $var;
    $this->recipeInstructions->attributes['class'] = $class;
    $this->recipeInstructions->attributes['itemprop'] = 'recipeInstructions';    
  }

  /*END RECIPE INSTRUCTIONS*/
  
  /*START RECIPE YIELD*/
  /*Set or change the recipe yield*/
  function set_recipe_yield($recipeYield){
    $this->recipeYield->value = $recipeYield;
  }

  /*Set or change the attributes for the recipe yield*/
  function set_recipe_yield_attributes($var){
    
    $class = get_class($this) . ' recipeYield ' . $var;
    $this->recipeYield->attributes['class'] = $class;
    $this->recipeYield->attributes['itemprop'] = 'recipeYield';
    
  }
  /*END RECIPE YIELD*/
  
  
  /*START TOTAL TIME*/
  /*Set or change the total time for your recipe*/
  function set_total_time($totalTime){
    $this->totalTime->value = $totalTime;
  }

  function set_total_time_attributes($var){

    $class = get_class($this) . ' totalTime ' . $var;
    $this->totalTime->attributes['class'] = $class;
    $this->totalTime->attributes['itemprop'] = 'totalTime';
    
  }
  /*END TOTAL TIME*/
  
  /*END ALL SETTERS*/
 
  /*START ALL GETTERS*/
  
  /*START COOK TIME*/
  /*Retrieve the cook time of your recipe*/
  function get_cook_time(){
    return $this->cookTime->value;
  }
  
  /*Retrieve the tag of cook time*/
  function get_cook_time_tag(){
    return $this->cookTime->tag->tagType;
  }
  
  /*Retrieve the attributes of cook time*/
  function get_cook_time_attributes(){
    return $this->cookTime->tag->attributes;
  }
  /*END COOK TIME*/
  
  
  
  /*START COOKING METHOD*/
  /*Retrieve the cooking method*/
  function get_cooking_method(){
    return $this->cookingMethod->value;
  }

  /*Retrieve the tag of the cooking method*/
  function get_cooking_method_tag(){
    return $this->cookingMethod->tag->tagType;
  }
  
  /*Retrieve the attributes of the cooking method*/
  function get_cooking_method_attributes(){
    return $this->cookingMethod->tag->attributes;
  }
  /*END COOKING METHOD*/
  
  
  /*START INGREDIENTS*/
  /*Retrieve the ingredients of your recipe*/
  function get_ingredients(){
    return $this->ingredients->value;
  }
  
  /*Retrieve the tag of the ingredients*/
  function get_ingredients_tag(){
    return $this->ingredients->tag->tagType;
  }
  
  /*Retrieve the attributes of the ingredients*/
  function get_ingredients_attributes(){
    return $this->ingredients->tag->attributes;
  }
  /*END INGREDIENTS*/
  
  
  /*START NUTRITION*/
  /*Retrieve the nutrition information of your recipe*/
  function get_nutrition(){
    return $this->nutrition->value;
  }
  
  /*Retrieve the tag of nutrition*/
  function get_nutrition_tag(){
    return $this->nutrition->tag->tagType;
  }
  
  /*Retrieve the attributes of nutrition*/
  function get_nutrition_attributes(){
    return $this->nutrition->tag->attributes;
  }
  /*END NUTRITION*/

  /*START PREP TIME*/
  /*Retrieve the prep time of your recipe*/
  function get_prep_time(){
    return $this->prepTime;
  }

  /*Retrieve the tag of prep time*/
  function get_prep_time_tag(){
    return $this->prepTime->tag->tagType;
  }
  
  /*Retrieve the attributes of prep time*/
  function get_prep_time_attributes(){
    return $this->prepTime->tag->attributes;
  }
  /*END PREP TIME*/


  /*START RECIPE CATEGORY*/
  /*Retrieve the recipe category*/
  function get_recipe_category(){
    return $this->recipeCategory->value;
  }
  
  /*Retrieve the tag of the recipe category*/
  function get_recipe_category_tag(){
    return $this->recipeCategory->tag->tagType;
  }
  
  /*Retrieve the attributes of the recipe Category*/
  function get_recipe_category_attributes(){
    return $this->recipeCategory->tag->attributes;
  }
  /*END RECIPE CATEGORY*/
  
  
  
  /*START RECIPE CUISINE*/
  /*Retrieve the recipe cuisine*/
  function get_recipe_cuisine(){
    return $this->recipeCuisine->value;
  }

  /*Retrieve the tag of the recipe cuisine*/
  function get_recipe_cuisine_tag(){
    return $this->recipeCuisine->tag->tagType;
  }
  
  /*Retrieve the attributes of the recipe cuisine*/
  function get_recipe_cuisine_attributes(){
    return $this->recipeCuisine->tag->attributes;
  }
  /*END RECIPE CUISINE*/
  
  
  /*START RECIPE INSTRUCTION*/
  /*Retrieve the instructions for your recipe*/
  function get_recipe_instructions(){
    return $this->recipeInstructions->value;
  }
  
  /*Retrieve the tag of the recipe instructions*/
  function get_recipe_instructions_tag(){
    return $this->recipeInstructions->tag->tagType;
  }
  
  /*Retrieve the attributes of the recipe instructions*/
  function get_recipe_instructions_attributes(){
    return $this->recipeInstructions->tag->attributes;
  }
  /*END RECIPE INSTRUCTIONS*/
  
  
  /*START RECIPE YIELD*/
  /*Retrieve the recipe yield*/
  function get_recipe_yield(){
    return $this->recipeYield->value;
  }
  
  /*Retrieve the tag of the recipe yield*/
  function get_recipe_yield_tag(){
    return $this->recipeYield->tag->tagType;
  }
  
  /*Retrieve the attributes of recipe yield*/
  function get_recipe_yield_attributes(){
    return $this->recipeYield->tag->attributes;
  }
  /*END RECIPE YIELD*/


  /*START TOTAL TIME*/
  /*Retrieve the total time to cook recipe*/
  function get_total_time(){
    return $this->totalTime->value;
  }
  
  /*Retrieve the tag of the total time*/
  function get_total_time_tag(){
    return $this->totalTime->tag->tagType;
  }
  
  /*Retrieve the attributes of total time*/
  function get_total_time_attributes(){
    return $this->totalTime->tag->attributes;
  }
  /*END RECIPE YIELD*/

  /*END ALL GETTERS*/

  /* End line of entire class*/
}
