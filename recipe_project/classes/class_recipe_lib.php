<?php

/*
 * Created by Alex Figueroa
 * A class to create a Recipe schema based on http://www.schema.org/Recipe
 * A recipe is a specific type of creative work which is a specific type of thing
 */

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
  /*START ALL*/
  /*Set or change all the values with an option to change attributes*/
  function set_all($name, $description, $image, $url, $headline, $author, $awards, $keywords, $recipeCategory, $recipeCuisine, $cookingMethod, $prepTime, $cookTime, $totalTime, $recipeYield, $ingredients, $recipeInstructions, $var = NULL){
    
    $this->set_name($name);
    $this->set_description($description);
    $this->set_image($image);
    $this->set_url($url);
    
    $this->set_headline($headline);
    $this->set_author($author);
    $this->set_awards($awards);
    $this->set_keywords($keywords);
    $this->set_date_published(date('M. d, Y'));
    
    $this->set_recipe_category($recipeCategory);
    $this->set_recipe_cuisine($recipeCuisine);    
    $this->set_cooking_method($cookingMethod);
    $this->set_prep_time($prepTime);
    $this->set_cook_time($cookTime);
    $this->set_total_time($totalTime);
    $this->set_recipe_yield($recipeYield);    
    $this->set_ingredients($ingredients);
    $this->set_recipe_instructions($recipeInstructions);
    
    if(!is_null($var)){
      $this->set_all_attributes($var);
    } 
    
  }
  
  /*Set or change all of the about attributes*/
  function set_all_attributes($var){
    $this->set_name_attributes($var);
    $this->set_description_attributes($var);
    $this->set_image_attributes($var);
    $this->set_url_attributes($var);

    $this->set_headline_attributes($var);
    $this->set_author_attributes($var);
    $this->set_awards_attributes($var);
    $this->set_keywords_attributes($var);
    $this->set_date_published_attributes($var);

    $this->set_cook_time_attributes($var);
    $this->set_cooking_method_attributes($var);
    $this->set_ingredients_attributes($var);
    $this->set_prep_time_attributes($var);
    $this->set_recipe_category_attributes($var);
    $this->set_recipe_cuisine_attributes($var);
    $this->set_recipe_instructions_attributes($var);
    $this->set_recipe_yield_attributes($var);
    $this->set_total_time_attributes($var);

  }
  /*END ALL*/

  
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

  /*Set or change the tag for the cook time of your recipe*/
  function set_cook_time_tag($tag){
    $this->cookTime->tag->tagType = $tag;
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

  /*Set or change the tag for the cooking method of your recipe*/
  function set_cooking_method_tag($tag){
    $this->cookingMethod->tag->tagType = $tag;
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

  /*Set or change the tag for the ingredients of your recipe*/
  function set_ingredients_tag($tag){
    $this->ingredients->tag->tagType = $tag;
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

  /*Set or change the tag for the prep time of your recipe*/
  function set_prep_time_tag($tag){
    $this->prepTime->tag->tagType = $tag;
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
  
  /*Set or change the attributes for the recipe category*/
  function set_recipe_category_attributes($var){
    $class = get_class($this) . ' recipeCategory ' . $var;
    $this->recipeCategory->attributes['class'] = $class;
    $this->recipeCategory->attributes['itemprop'] = 'recipeCategory';    
  }

  /*Set or change the tag for the recipe category of your recipe*/
  function set_recipe_category_tag($tag){
    $this->recipeCategory->tag->tagType = $tag;
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

  /*Set or change the tag for the recipe cuisine of your recipe*/
  function set_recipe_cuisine_tag($tag){
    $this->recipeCuisine->tag->tagType = $tag;
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
    $this->recipeInstructions->attributes['itemprop'] = 'recipeInstructions';   }
  
/*Set or change the tag for the recipe instructions of your recipe*/
  function set_recipe_instructions_tag($tag){
    $this->recipeInstructions->tag->tagType = $tag;
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

  /*Set or change the tag for the recipe yield of your recipe*/
  function set_recipe_yield_tag($tag){
    $this->recipeYield->tag->tagType = $tag;
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
  
  /*Set or change the attributes for total time*/
  function set_total_time_attributes($var){
    $class = get_class($this) . ' totalTime ' . $var;
    $this->totalTime->attributes['class'] = $class;
    $this->totalTime->attributes['itemprop'] = 'totalTime';
  }

  /*Set or change the tag for the total time of your recipe*/
  function set_total_time_tag($tag){
    $this->totalTime->tag->tagType = $tag;
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

  /*Retrieve the specific ingredient for your recipe.*/
  function get_ingredients_index($index){
    return $this->ingredients->value[$index];
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

  /*Retrieve the number of ingredients*/
  function get_ingredients_count(){
    return count($this->ingredients->value);
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
    $this->set_tag($this->get_ingredients_tag(), $this->get_ingredients_attributes(), $this->get_ingredients_index($index));
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
    $html .= "<strong>Recipe Name:</strong> ".$this->itemprop_name()."</br>";
    $html .= "<strong>Recipe Description:</strong> ".$this->itemprop_description()."</br>";
    $html .= $this->itemprop_image()."</br>";
    $html .= $this->itemprop_url()."</br></br>";
    $html .= "<strong>Author:</strong> ".$this->itemprop_author()."</br></br>";
    

    $html .= "<strong>Awards:</strong> </br>";
    $count = $this->get_awards_count();
    for ($i = 0; $i < $count; $i++) {
      $html .= $this->itemprop_awards($i)."</br>";
    }

    $html .="</br><strong>Keywords:</strong> </br>";
    $count = $this->get_keywords_count();
    for ($i = 0; $i < $count; $i++) {
      $html .= $this->itemprop_keywords($i)."</br>";
    }    
    
    $html .= "</br>";
    $html .= "<strong>Recipe Category:</strong> ".$this->itemprop_recipe_category()."</br></br>";
    $html .= "<strong>Recipe Cuisine:</strong> ".$this->itemprop_recipe_cuisine()."</br></br>";
    $html .= "<strong>Cooking Method:</strong> ". $this->itemprop_cooking_method()."</br></br>";
    
    $html .= "<strong>Prep Time:</strong> ".$this->itemprop_prep_time()."</br></br>";
    $html .= "<strong>Cook Time:</strong> ".$this->itemprop_cook_time()."</br></br>";
    $html .= "<strong>Total Time:</strong> ".$this->itemprop_total_time()."</br></br>";
    $html .= "<strong>Recipe Yield:</strong> ".$this->itemprop_recipe_yield()."</br></br>"; 
    
    $html .= $this->itemscope_nutrition_open();
    $html .= "<strong>Ingredients:</strong> </br>";
    $count = $this->get_ingredients_count();
    for ($i = 0; $i < $count; $i++) {
      $html .= $this->itemprop_keywords($i)."</br>";
    }
    $html .= $this->itemscope_nutrition_close();
    
    $html .= "</br>";
    
    $html .= "<strong>Recipe Instructions:</strong> </br>".$this->itemprop_recipe_instructions()."</br>";
    $html .= $this->itemscope_close();
    return $html;
    
  }
  /*END PRINTING FUNCTIONS*/

  /*START MONGODB FUNCTIONS*/
 /*Turns the entire Thing into an array so it can be passed into a mongo db*/
  function to_array($update = FALSE){

    $name['value'] = $this->get_name();
    $name['tag'] = $this->get_name_tag();
    $name['attributes'] = $this->get_name_attributes();
    $name['form'] = $this->get_name_form();
    
    $description['value'] = $this->get_description();
    $description['tag'] = $this->get_description_tag();
    $description['attributes'] = $this->get_description_attributes();
    $description['form'] = $this->get_description_form();

    $image['value'] = $this->get_image();
    $image['tag'] = $this->get_image_tag();
    $image['attributes'] = $this->get_image_attributes();
    $image['form'] = $this->get_image_form();

    $url['value'] = $this->get_url();
    $url['tag'] = $this->get_url_tag();
    $url['attributes'] = $this->get_url_attributes();
    $url['form'] = $this->get_url_form();

    $headline['value'] = $this->get_headline();
    $headline['tag'] = $this->get_headline_tag();
    $headline['attributes'] = $this->get_headline_attributes();
    $headline['form'] = $this->get_headline_form();

    $author['value'] = $this->get_author();
    $author['tag'] = $this->get_author_tag();
    $author['attributes'] = $this->get_author_attributes();
    $author['form'] = $this->get_author_form();
    
    $awards['value'] = $this->get_awards();
    $awards['tag'] = $this->get_awards_tag();
    $awards['attributes'] = $this->get_awards_attributes();
    $awards['form'] = $this->get_awards_form();

    $keywords['value'] = $this->get_keywords();
    $keywords['tag'] = $this->get_keywords_tag();
    $keywords['attributes'] = $this->get_keywords_attributes();
    $keywords['form'] = $this->get_keywords_form();

    $datePublished['value'] = $this->get_date_published();
    $datePublished['tag'] = $this->get_date_published_tag();
    $datePublished['attributes'] = $this->get_date_published_attributes();
    $datePublished['form'] = $this->get_date_published_form();

    $recipeCategory['value'] = $this->get_recipe_category();
    $recipeCategory['tag'] = $this->get_recipe_category_tag();
    $recipeCategory['attributes'] = $this->get_recipe_category_attributes();
    $recipeCategory['form'] = $this->get_recipe_category_form();

    $recipeCuisine['value'] = $this->get_recipe_cuisine();
    $recipeCuisine['tag'] = $this->get_recipe_cuisine_tag();
    $recipeCuisine['attributes'] = $this->get_recipe_cuisine_attributes();
    $recipeCuisine['form'] = $this->get_recipe_cuisine_form();

    $cookingMethod['value'] = $this->get_cooking_method();
    $cookingMethod['tag'] = $this->get_cooking_method_tag();
    $cookingMethod['attributes'] = $this->get_cooking_method_attributes();
    $cookingMethod['form'] = $this->get_cooking_method_form();

    $prepTime['value'] = $this->get_prep_time();
    $prepTime['tag'] = $this->get_prep_time_tag();
    $prepTime['attributes'] = $this->get_prep_time_attributes();
    $prepTime['form'] = $this->get_prep_time_form();

    $cookTime['value'] = $this->get_cook_time();
    $cookTime['tag'] = $this->get_cook_time_tag();
    $cookTime['attributes'] = $this->get_cook_time_attributes();
    $cookTime['form'] = $this->get_cook_time_form();

    $totalTime['value'] = $this->get_total_time();
    $totalTime['tag'] = $this->get_total_time_tag();
    $totalTime['attributes'] = $this->get_total_time_attributes();
    $totalTime['form'] = $this->get_total_time_form();

    $recipeYield['value'] = $this->get_recipe_yield();
    $recipeYield['tag'] = $this->get_recipe_yield_tag();
    $recipeYield['attributes'] = $this->get_recipe_yield_attributes();
    $recipeYield['form'] = $this->get_recipe_yield_form();
    
    $ingredients['value'] = $this->get_ingredients();
    $ingredients['tag'] = $this->get_ingredients_tag();
    $ingredients['attributes'] = $this->get_ingredients_attributes();
    $ingredients['form'] = $this->get_ingredients_form();
    
    $recipeInstructions['value'] = $this->get_recipe_instructions();
    $recipeInstructions['tag'] = $this->get_recipe_instructions_tag();
    $recipeInstructions['attributes'] = $this->get_recipe_instructions_attributes();
    $recipeInstructions['form'] = $this->get_recipe_instructions_form();

    /*Create the full nested array for Thing*/
    if($update == TRUE){
      $thing['_id'] = $this->get_id();
    }

    $thing['name'] = $name;
    $thing['description'] = $description;
    $thing['image'] = $image;
    $thing ['url'] = $url;

    $thing ['headline'] = $headline;
    $thing ['author'] = $author;
    $thing ['awards'] = $awards;
    $thing ['keywords'] = $keywords;
    $thing ['datePublished'] = $datePublished;

    $thing ['recipeCategory'] = $recipeCategory;
    $thing ['recipeCuisine'] = $recipeCuisine;
    $thing ['cookingMethod'] = $cookingMethod;
    $thing ['prepTime'] = $prepTime;
    $thing ['cookTime'] = $cookTime;
    $thing ['totalTime'] = $totalTime;
    $thing ['recipeYield'] = $recipeYield;
    $thing ['ingredients'] = $ingredients;
    $thing ['recipeInstructions'] = $recipeInstructions;
    
    return $thing;
  }

 /*Retrieves an object from the mongo db & turns it into a thing*/
  function mongo_to_array($conn, $database, $id){
    
    try {
      /*Open connection to MongoDB server*/
      $connection = new Mongo($conn);
      
      /*Access DB*/
      $db = $connection->$database;
      
      /*Access Collection*/
      $collection = $db->items;
      
      /*What were searching for*/
      $mongoID = new mongoId($id);
      $criteria = array('_id' => $mongoID);
      
      /*Execute query*/
      $cursor = $collection->find($criteria);      
      
      /*Checks to see if it can first find the thing by its ID*/
      if($cursor->count() != 0){
	/*Converts all the values from the mongo db into this Thing class*/
	
	foreach ($cursor as $obj) {
	 
	  //print_r($obj);
	  $this->set_id($obj['_id']);

	  /*Grabs the arrays from mongo and places them into their own variables*/
	  $name = $obj['name'];
	  $description = $obj['description'];
	  $image = $obj['image'];
	  $url = $obj['url'];
	  $headline = $obj['headline'];
	  $author = $obj['author'];
	  $awards = $obj['awards'];
	  $keywords = $obj['keywords'];
	  $datePublished = $obj['datePublished'];
	  $recipeCategory = $obj['recipeCategory'];
	  $recipeCuisine = $obj['recipeCuisine'];
	  $cookingMethod = $obj['cookingMethod'];
	  $prepTime = $obj['prepTime'];
	  $cookTime = $obj['cookTime'];
	  $totalTime = $obj['totalTime'];
	  $recipeYield = $obj['recipeYield'];
	  $ingredients = $obj['ingredients'];
	  $recipeInstructions = $obj['recipeInstructions'];

	  /*Sets the values of Recipe using the arrays above*/
	  $this->set_name($name['value']);
	  $this->set_name_tag($name['tag']);
	  $this->set_name_attributes();//Still working on how to correctly pass through variables
	  $this->set_name_form($name['form']);

	  $this->set_description($description['value']);
	  $this->set_description_tag($description['tag']);
	  $this->set_description_attributes();//Still working on how to correctly pass through variables
	  $this->set_description_form($description['form']);

	  $this->set_image($image['value']);
	  $this->set_image_tag($image['tag']);
	  $this->set_image_attributes();//Still working on how to correctly pass through variables
	  $this->set_image_form($image['form']);
	
	  $this->set_url($url['value']);
	  $this->set_url_tag($url['tag']);
	  $this->set_url_attributes();//Still working on how to correctly pass through variables
	  $this->set_url_form($url['form']);
	  
	  $this->set_headline($headline['value']);
	  $this->set_headline_tag($headline['tag']);
	  $this->set_headline_attributes();//Still working on how to correctly pass through variables
	  $this->set_headline_form($headline['form']);
	  
	  $this->set_author($author['value']);
	  $this->set_author_tag($author['tag']);
	  $this->set_author_attributes();//Still working on how to correctly pass through variables
	  $this->set_author_form($author['form']);
	  
	  $this->set_awards($awards['value']);
	  $this->set_awards_tag($awards['tag']);
	  $this->set_awards_attributes();//Still working on how to correctly pass through variables
	  $this->set_awards_form($awards['form']);
	  
	  $this->set_keywords($keywords['value']);
	  $this->set_keywords_tag($keywords['tag']);
	  $this->set_keywords_attributes();//Still working on how to correctly pass through variables
	  $this->set_keywords_form($keywords['form']);

	  $this->set_date_published($datePublished['value']);
	  $this->set_date_published_tag($datePublished['tag']);
	  $this->set_date_published_attributes();//Still working on how to correctly pass through variables
	  $this->set_date_published_form($datePublished['form']);
	  
	  $this->set_recipe_category($recipeCategory['value']);
	  $this->set_recipe_category_tag($recipeCategory['tag']);
	  $this->set_recipe_category_attributes();//Still working on how to correctly pass through variables
	  $this->set_recipe_category_form($recipeCategory['form']);

	  $this->set_recipe_cuisine($recipeCuisine['value']);
	  $this->set_recipe_cuisine_tag($recipeCuisine['tag']);
	  $this->set_recipe_cuisine_attributes();//Still working on how to correctly pass through variables
	  $this->set_recipe_cuisine_form($recipeCuisine['form']);

	  $this->set_cooking_method($cookingMethod['value']);
	  $this->set_cooking_method_tag($cookingMethod['tag']);
	  $this->set_cooking_method_attributes();//Still working on how to correctly pass through variables
	  $this->set_cooking_method_form($cookingMethod['form']);

	  $this->set_prep_time($prepTime['value']);
	  $this->set_prep_time_tag($prepTime['tag']);
	  $this->set_prep_time_attributes();//Still working on how to correctly pass through variables
	  $this->set_prep_time_form($prepTime['form']);

	  $this->set_cook_time($cookTime['value']);
	  $this->set_cook_time_tag($cookTime['tag']);
	  $this->set_cook_time_attributes();//Still working on how to correctly pass through variables
	  $this->set_cook_time_form($cookTime['form']);

	  $this->set_total_time($totalTime['value']);
	  $this->set_total_time_tag($totalTime['tag']);
	  $this->set_total_time_attributes();//Still working on how to correctly pass through variables
	  $this->set_total_time_form($totalTime['form']);

	  $this->set_recipe_yield($recipeYield['value']);
	  $this->set_recipe_yield_tag($recipeYield['tag']);
	  $this->set_recipe_yield_attributes();//Still working on how to correctly pass through variables
	  $this->set_recipe_yield_form($recipeYield['form']);

	  $this->set_ingredients($ingredients['value']);
	  $this->set_ingredients_tag($ingredients['tag']);
	  $this->set_ingredients_attributes();//Still working on how to correctly pass through variables
	  $this->set_ingredients_form($ingredients['form']);

	  $this->set_recipe_instructions($recipeInstructions['value']);
	  $this->set_recipe_instructions_tag($recipeInstructions['tag']);
	  $this->set_recipe_instructions_attributes();//Still working on how to correctly pass through variables
	  $this->set_recipe_instructions_form($recipeInstructions['form']);
	}
      }
      
      else{
	echo "No such Thing with ID: ".$id;
      }
      
      /*Disconnect*/
      $connection->close();
    } catch (MongoConnectionException $e) {
      die('Error connecting to MongoDB server');
    } catch (MongoException $e) {
      die('Error: ' . $e->getMessage());
    } 
    
  }

 /*Update an object from the mongo db using its id. The Thing must be updated prior to using this function*/
  function update_to_mongo($conn, $database){

    try {
      /*Open connection to MongoDB server*/
      $connection = new Mongo($conn);
      
      /*Access DB*/
      $db = $connection->$database;
      
      /*Access Collection*/
      $collection = $db->items;
      
      /*What were searching for*/
      $mongoID = new mongoId($this->get_id());
      $criteria = array('_id' => $mongoID);

      /*Checks to see if it can first find the value before attempting to update it*/
      $cursor = $collection->find($criteria); //Only want to update one value
      //echo $cursor->count();
      if($cursor->count() != 0){
	
	/*Execute query*/
	$collection->save($this->to_array(TRUE)); //TRUE means to include ID in array
	
	/*Print Update*/
	//echo "Updated Thing with ID: " .$criteria['_id'];

      }
      
      else{
      echo "No such Thing with ID: ".$id;
      }
      
      /*Disconnect*/
      $connection->close();
    } catch (MongoConnectionException $e) {
      die('Error connecting to MongoDB server');
    } catch (MongoException $e) {
      die('Error: ' . $e->getMessage());
    } 
  }

  /*END MONGODB FUNCTIONS*/

  /* End line of entire class*/
}
