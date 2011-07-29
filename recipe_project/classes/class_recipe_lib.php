<?php

/*
 * Created by Alex Figueroa
 * A class to create a Recipe schema based on http://www.schema.org/Recipe
 * A recipe is a specific type of creative work which is a specific type of thing
 */

/*function __autoload($class_name){
  include ('class_'.$class_name.'_lib.php');
  }*/

include("class_creativework_lib.php");

class Recipe extends CreativeWork{
  
  protected $cookTime;
  protected $cookingMethod;
  protected $ingredients;
  protected $prepTime;
  protected $recipeCategory;
  protected $recipeCuisine;
  protected $recipeInstructions;
  protected $recipeYield;
  protected $totalTime;
  private $nutrition = "http://schema.org/NutritionInformation";
  private $itemtype = "http://schema.org/Recipe";
  
  function __construct(){

    /*Fields from thing schema which consists of name, description, image & url*/
    $this->name->tag->tagType = 'span';
    $this->name->tag->attributes['class'] = get_class($this) . ' name';
    $this->name->tag->attributes['itemprop'] = 'name';
    $this->name->form->fieldtype = 'text';    
    
    $this->description->tag->tagType = 'span';
    $this->description->tag->attributes['class'] = get_class($this) . ' description';
    $this->description->tag->attributes['itemprop'] = 'description';
    $this->description->form->fieldtype = 'text';
    
    $this->image->tag->tagType = 'img';
    $this->image->tag->attributes['class'] = get_class($this) . ' image';
    $this->image->tag->attributes['itemprop'] = 'image';
    $this->image->form->fieldtype = 'text';

    $this->url->tag->tagType = 'a';
    $this->url->tag->attributes['class'] = get_class($this) . ' url';
    $this->url->tag->attributes['itemprop'] = 'url';
    $this->url->form->fieldtype = 'text';
    /*End about tag*/

    /*Fields from Creative Works Schema. Only includes fields I want displayed for my recipe webpage
      Includes author, awards, date published, headline, language and keywords*/    
    $this->author->tag->tagType = 'span';
    $this->author->tag->attributes['class'] = get_class($this) . ' author';
    $this->author->tag->attributes['itemprop'] = 'author';
    $this->author->form->fieldtype = 'text';
    
    $this->awards->tag->tagType = 'span';
    $this->awards->tag->attributes['class'] = get_class($this) . ' awards';
    $this->awards->tag->attributes['itemprop'] = 'awards';
    $this->awards->form->fieldtype = 'text';
    
    $this->datePublished->tag->tagType = 'meta';
    $this->datePublished->tag->attributes['class'] = get_class($this) . ' datePublished';
    $this->datePublished->tag->attributes['itemprop'] = 'publishDate';
    $this->datePublished->tag->attributes['content'] = date('Y-m-d');
    $this->datePublished->form->fieldtype = 'text';
    
    $this->headline->tag->tagType = 'h1';
    $this->headline->tag->attributes['class'] = get_class($this) . ' headline';
    $this->headline->tag->attributes['itemprop'] = 'headline';
    $this->headline->form->fieldtype = 'text';
    
    $this->inLanguage->tag->tagType = 'span';
    $this->inLanguage->tag->attributes['class'] = get_class($this) . ' inLanguage';
    $this->inLanguage->tag->attributes['itemprop'] = 'inLanguage';
    $this->inLanguage->form->fieldtype = 'text';

    $this->keywords->tag->tagType = 'span';
    $this->keywords->tag->attributes['class'] = get_class($this) . ' keywords';
    $this->keywords->tag->attributes['itemprop'] = 'keywords';
    $this->keywords->form->fieldtype = 'text';
    /*End of Creative Works Schema*/
    

    /*Fields only in the recipe schema
      Includes cook time, cooking method, ingredients, nutrition, prep time, recipe category
      recipe cuisine, recipe instructions, recipe yield & total time*/
    $this->cookTime->tag->tagType = 'span';
    $this->cookTime->tag->attributes['class'] = get_class($this) . ' cookTime ';
    $this->cookTime->tag->attributes['itemprop'] = 'cookTime';
    $this->cookTime->form->fieldtype = 'text';
    
    $this->cookingMethod->tag->tagType = 'span';
    $this->cookingMethod->tag->attributes['class'] = get_class($this) . ' cookingMethod ';
    $this->cookingMethod->tag->attributes['itemprop'] = 'cookingMethod';
    $this->cookingMethod->form->fieldtype = 'text';    

    $this->ingredients->tag->tagType = 'span';
    $this->ingredients->tag->attributes['class'] = get_class($this) . ' ingredients ';
    $this->ingredients->tag->attributes['itemprop'] = 'ingredients';
    $this->ingredients->form->fieldtype = 'text';    

    /*$this->nutrition->tag->tagType = 'div';
    $this->nutrition->tag->attributes['class'] = get_class($this) . ' nutrition ';
    $this->nutrition->tag->attributes['itemprop'] = 'nutrition';
    $this->nutrition->form->fieldtype = 'text';*/

    $this->prepTime->tag->tagType = 'span';
    $this->prepTime->tag->attributes['class'] = get_class($this) . ' prepTime ';
    $this->prepTime->tag->attributes['itemprop'] = 'prepTime';
    $this->prepTime->form->fieldtype = 'text';    

    $this->recipeCategory->tag->tagType = 'span';
    $this->recipeCategory->tag->attributes['class'] = get_class($this) . ' recipeCategory ';
    $this->recipeCategory->tag->attributes['itemprop'] = 'recipeCategory';
    $this->recipeCategory->form->fieldtype = 'text';
    
    $this->recipeCuisine->tag->tagType = 'span';
    $this->recipeCuisine->tag->attributes['class'] = get_class($this) . ' recipeCuisine ';
    $this->recipeCuisine->tag->attributes['itemprop'] = 'recipeCuisine';
    $this->recipeCuisine->form->fieldtype = 'text';
    
    $this->recipeInstructions->tag->tagType = 'span';
    $this->recipeInstructions->tag->attributes['class'] = get_class($this) . ' recipeInstructions ';
    $this->recipeInstructions->tag->attributes['itemprop'] = 'recipeInstructions';
    $this->recipeInstructions->form->fieldtype = 'text';
    
    $this->recipeYield->tag->tagType = 'span';
    $this->recipeYield->tag->attributes['class'] = get_class($this) . ' recipeYield ';
    $this->recipeYield->tag->attributes['itemprop'] = 'recipeYield';
    $this->recipeYield->form->fieldtype = 'text';
    
    $this->totalTime->tag->tagType = 'span';
    $this->totalTime->tag->attributes['class'] = get_class($this) . ' totalTime ';
    $this->totalTime->tag->attributes['itemprop'] = 'totalTime';
    $this->totalTime->form->fieldtype = 'text';
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

  /*Set or change the form field for the cooktime of your recipe*/
  function set_cook_time_form($form){
    $this->cookTime->form->fieldtype = $form;
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

  /*Set or change the form field for the cooking method of your recipe*/
  function set_cooking_method_form($form){
    $this->cookingMethod->form->fieldtype = $form;
  }
  /*END COOKING METHOD*/
  
  /*START INGREDIENTS*/
  /*Set or change the ingredients of your recipe*/
  function set_ingredients($ingredients){
    $this->ingredients->value = $ingredients;
  }
  
  /*Set or change the attributes for your ingredients*/
  function set_ingredients_attributes($var){
    $class = get_class($this) . ' ingredients ' . $var;
    $this->ingredients->attributes['class'] = $class;
    $this->ingredients->attributes['itemprop'] = 'ingredients';    
  }

  /*Set or change the form field for the ingredients of your recipe*/
  function set_ingredients_form($form){
    $this->ingedients->form->fieldtype = $form;
  }
  /*END INGREDIENTS*/
  
  /*START NUTRTITION*/
  /*Set or change the nutrition information of your recipe
  function set_nutrition($nutrition){
    $this->nutrition->value = $nutrition;
  }*/
  
  /*Set or change the attributes for your nutrition information
  function set_nutrition_attributes($var) {
    $class = get_class($this) . ' nutrition ' . $var;
    $this->nutrition->attributes['class'] = $class;
    $this->nutrition->attributes['itemprop'] = 'nutrition';
  }*/

  /*Set or change the form field for the nutrition of your recipe
  function set_nutrition_form($form){
    $this->nutrition->form->fieldtype = $form;
  }*/
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

/*Set or change the form field for the prep time of your recipe*/
  function set_prep_time_form($form){
    $this->prepTime->form->fieldtype = $form;
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

  /*Set or change the form field for the recipe category*/
  function set_recipe_category_form($form){
    $this->recipeCategory->form->fieldtype = $form;
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

  /*Set or change the form field for the recipe cuisine*/
  function set_recipe_cuisine_form($form){
    $this->recipeCuisine->form->fieldtype = $form;
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
  
  /*Set or change the form field for the instructions of your recipe*/
  function set_recipe_instructions_form($form){
    $this->recipeInstructions->form->fieldtype = $form;
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

  /*Set or change the form field for the recipe yield*/
  function set_recipe_yield_form($form){
    $this->recipeYield->form->fieldtype = $form;
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

  /*Set or change the form field for the total time of your recipe*/
  function set_total_time_form($form){
    $this->totalTime->form->fieldtype = $form;
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

  /*Retrieve the form field type for the cook time of your recipe*/
  function get_cook_time_form($form){
    return $this->cookTime->form->fieldtype;
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
  
  /*Retrieve the form field type for the cooking method of your recipe*/
  function get_cooking_method_form($form){
    return $this->cookingMethod->form->fieldtype;
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
  
  /*Retrieve the form field type for the ingredients of your recipe*/
  function get_ingredients_form($form){
    return $this->ingredients->form->fieldtype;
  }
  /*END INGREDIENTS*/
  
  /*START NUTRITION*/
  /*Retrieve the nutrition information of your recipe*/
  function get_nutrition(){
    return $this->nutrition;
  }
  
  /*Retrieve the tag of nutrition
  function get_nutrition_tag(){
    return $this->nutrition->tag->tagType;
  }*/
  
  /*Retrieve the attributes of nutrition
  function get_nutrition_attributes(){
    return $this->nutrition->tag->attributes;
  }*/
  
  /*Retrieve the form field type for the nutrition of your recipe
  function get_nutrition_form($form){
    return $this->nutrition->form->fieldtype;
  }*/
  /*END NUTRITION*/
  
  /*START PREP TIME*/
  /*Retrieve the prep time of your recipe*/
  function get_prep_time(){
    return $this->prepTime->value;
  }

  /*Retrieve the tag of prep time*/
  function get_prep_time_tag(){
    return $this->prepTime->tag->tagType;
  }
  
  /*Retrieve the attributes of prep time*/
  function get_prep_time_attributes(){
    return $this->prepTime->tag->attributes;
  }

  /*Retrieve the form field type for the prep time of your recipe*/
  function get_prep_time_form($form){
    return $this->prepTime->form->fieldtype;
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

  /*Retrieve the form field type for the recipe category*/
  function get_recipe_category_form($form){
    return $this->recipeCategory->form->fieldtype;
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

  /*Retrieve the form field type for the recipe cuisine*/
  function get_recipe_cuisine_form($form){
    return $this->recipeCuisine->form->fieldtype;
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

  /*Retrieve the form field type for the recipe instructions*/
  function get_recipe_instructions_form($form){
    return $this->recipeInstructions->form->fieldtype;
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

  /*Retrieve the form field type for the recipe yield*/
  function get_recipe_yield_form($form){
    return $this->recipeYield->form->fieldtype;
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
  
  /*Retrieve the form field type for the total time of your recipe*/
  function get_total_time_form($form){
    return $this->totalTime->form->fieldtype;
  }
  /*END RECIPE YIELD*/
  
  /*START ITEMTYPE*/
  /*Retrieve the itemtype of your thing*/
  function get_itemtype(){
    return $this->itemtype;
  }
  /*END ITEMTYPE*/
  
  /*END ALL GETTERS*/
  
  /*START HTML PRINTING FUNCTIONS*/

  /*Creates the opening div tag for nutrition*/ 
  protected function itemscope_nutrition_open(){  
    $html = '<div itemscope itemtype="'.$this->get_nutrition().'">';
    return $html;
  }
  
  /*Provides the final closed div tag for nutrition*/
  protected function itemscope_nutrition_close(){    
    $html = '</div>';
    return $html;
  }

  /*Creates the full html tag for the cookTime*/
  protected function itemprop_cook_time(){
    $this->set_tag($this->get_cook_time_tag(), $this->get_cook_time_attributes(), $this->get_cook_time());
    return $this->get_tag();
  }
 
  /*Creates the full html tag for the cooking method*/
  protected function itemprop_cooking_method(){
    $this->set_tag($this->get_cooking_method_tag(), $this->get_cooking_method_attributes(), $this->get_cooking_method());
    return $this->get_tag();
  }

  /*Creates the full html tag for the ingredients*/
  protected function itemprop_ingredients(){
    $this->set_tag($this->get_ingredients_tag(), $this->get_ingredients_attributes(), $this->get_ingredients());
    return $this->get_tag();
  }

  /*Creates the full html tag for the prep time*/
  protected function itemprop_prep_time(){
    $this->set_tag($this->get_prep_time_tag(), $this->get_prep_time_attributes(), $this->get_prep_time());
    return $this->get_tag();
  } 

  /*Creates the full html tag for the recipe category*/
  protected function itemprop_recipe_category(){
    $this->set_tag($this->get_recipe_category_tag(), $this->get_recipe_category_attributes(), $this->get_recipe_category());
    return $this->get_tag();
  }

 /*Creates the full html tag for the recipe cuisine*/
  protected function itemprop_recipe_cuisine(){
    $this->set_tag($this->get_recipe_cuisine_tag(), $this->get_recipe_cuisine_attributes(), $this->get_recipe_cuisine());
    return $this->get_tag();
  }

  /*Creates the full html tag for the recipe instructions*/
  protected function itemprop_recipe_instructions(){
    $this->set_tag($this->get_recipe_instructions_tag(), $this->get_recipe_instructions_attributes(), $this->get_recipe_instructions());
    return $this->get_tag();
  }

 /*Creates the full html tag for the recipe yield*/
  protected function itemprop_recipe_yield(){
    $this->set_tag($this->get_recipe_yield_tag(), $this->get_recipe_yield_attributes(), $this->get_recipe_yield());
    return $this->get_tag();
  }

  /*Creates the full html tag for the total time*/
  protected function itemprop_total_time(){
    $this->set_tag($this->get_total_time_tag(), $this->get_total_time_attributes(), $this->get_total_time());
    return $this->get_tag();
  }
  
  /*Creates the full html printout for the Recipe Schema*/
  function print_schema(){
    
    $html = $this->itemscope_open();
    $html .= $this->itemprop_headline()."</br>";
    $html .= $this->itemprop_name()."</br>";
    $html .= $this->itemprop_description()."</br>";
    $html .= $this->itemprop_image()."</br>";
    $html .= $this->itemprop_url()."</br>";
    $html .= $this->itemprop_author()."</br>";
    $html .= $this->itemprop_awards()."</br>";
    $html .= $this->itemprop_date_published();
    $html .= $this->itemprop_language()."</br>";
    $html .= $this->itemprop_keywords()."</br>";
    $html .= $this->itemprop_recipe_category()."</br>";
    $html .= $this->itemprop_recipe_cuisine()."</br>";
    $html .= $this->itemprop_cooking_method()."</br>";
    $html .= $this->itemscope_nutrition_open();
    $html .= $this->itemprop_ingredients();
    $html .= $this->itemscope_nutrition_close();
    $html .= $this->itemprop_recipe_yield()."</br>";
    $html .= $this->itemprop_prep_time()."</br>";
    $html .= $this->itemprop_cook_time()."</br>";
    $html .= $this->itemprop_total_time()."</br>";
    $html .= $this->itemprop_recipe_instructions()."</br>";
    $html .= $this->itemscope_close();
    return $html;
    
  }
  /*END PRINTING FUNCTIONS*/

  /* End line of entire class*/
}
