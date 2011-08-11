<?php

/*
 * Created by Alex Figueroa
 * A class to create a creative work schema based on http://schema.org/CreativeWork
 * A creative work is a specific type of Thing
 */

include('class_thing_lib.php');

class CreativeWork extends Thing{
  
  /*I have only enabled the attributes Im going to use for my Creative Work*/
  //protected $aggregateRating;
  //protected $audio;
  protected $author;
  protected $awards;
  //protected $contentLocation;
  //protected $contentRating;
  protected $datePublished;
  //protected $editor;
  //protected $encodings;
  //protected $genre;
  protected $headline;
  //protected $inLanguage;
  //protected $interactionCount;
  //protected $isFamilyFriendly;
  protected $keywords;
  //protected $publisher;
  //protected $reviews;
  //protected $video;
  private $itemtype = "http://www.schema.org/CreativeWorks";
  
  
  function __construct(){
   
    /*The about tag which consists of name, description, image & url*/
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
    
    /* $this->aggregateRating->tag->tagType = 'div';
    $this->aggregateRating->tag->attributes['class'] = get_class($this) . ' aggregateRating';
    $this->aggregateRating->tag->attributes['itemprop'] = 'aggregateRating';
    $this->aggregateRating->form->fieldtype = 'text';*/
    
    /*$this->audio->tag->tagType = 'div';
    $this->audio->tag->attributes['class'] = get_class($this) . ' audio';
    $this->audio->tag->attributes['itemprop'] = 'audio';
    $this->audio->form->fieldtype = 'text';*/
    
    $this->author->tag->tagType = 'span';
    $this->author->tag->attributes['class'] = get_class($this) . ' author';
    $this->author->tag->attributes['itemprop'] = 'author';
    $this->author->form->fieldtype = 'text';
    
    $this->awards->tag->tagType = 'span';
    $this->awards->tag->attributes['class'] = get_class($this) . ' awards';
    $this->awards->tag->attributes['itemprop'] = 'awards';
    $this->awards->form->fieldtype = 'text';

    /*$this->contentLocation->tag->tagType = 'div';
    $this->contentLocation->tag->attributes['class'] = get_class($this) . ' contentLocation';
    $this->contentLocation->tag->attributes['itemprop'] = 'contentLocation';
    $this->contentLocation->form->fieldtype = 'text';*/
    
    /*$this->contentRating->tag->tagType = 'span';
    $this->contentRating->tag->attributes['class'] = get_class($this) . ' contentRating';
    $this->contentRating->tag->attributes['itemprop'] = 'contentRating';
    $this->contentRating->form->fieldtype = 'text';*/
    
    $this->datePublished->tag->tagType = 'meta';
    $this->datePublished->tag->attributes['class'] = get_class($this) . ' datePublished';
    $this->datePublished->tag->attributes['itemprop'] = 'publishDate';
    $this->datePublished->tag->attributes['content'] = date('Y-m-d');
    $this->datePublished->form->fieldtype = 'text';
    
    /*$this->editor->tag->tagType = 'span';
    $this->editor->tag->attributes['class'] = get_class($this) . ' editor';
    $this->editor->tag->attributes['itemprop'] = 'editor';
    $this->editor->form->fieldtype = 'text';*/
    
    /*$this->encodings->tag->tagType = 'div';
    $this->encodings->tag->attributes['class'] = get_class($this) . ' encodings';
    $this->encodings->tag->attributes['itemprop'] = 'encodings';
    $this->encodings->form->fieldtype = 'text';*/

    /*$this->genre->tag->tagType = 'span';
    $this->genre->tag->attributes['class'] = get_class($this) . ' genre';
    $this->genre->tag->attributes['itemprop'] = 'genre';
    $this->genre->form->fieldtype = 'text';*/
    
    $this->headline->tag->tagType = 'h2';
    $this->headline->tag->attributes['class'] = get_class($this) . ' headline';
    $this->headline->tag->attributes['itemprop'] = 'headline';
    $this->headline->form->fieldtype = 'text';
    
    /*$this->inLanguage->tag->tagType = 'span';
    $this->inLanguage->tag->attributes['class'] = get_class($this) . ' inLanguage';
    $this->inLanguage->tag->attributes['itemprop'] = 'inLanguage';
    $this->inLanguage->form->fieldtype = 'text';*/
    
    /* $this->interactionCount->tag->tagType = 'meta';
    $this->interactionCount->tag->attributes['class'] = get_class($this) . ' interactionCount';
    $this->interactionCount->tag->attributes['itemprop'] = 'interactionCount';
    $this->interactionCount->form->fieldtype = 'text';*/
    
    /*$this->isFamilyFriendly->tag->tagType = 'span';
    $this->isFamilyFriendly->tag->attributes['class'] = get_class($this) . ' isFamilyFriendly';
    $this->isFamilyFriendly->tag->attributes['itemprop'] = 'isFamilyFriendly';
    $this->isFamilyFriendly->form->fieldtype = 'text';*/
    
    $this->keywords->tag->tagType = 'span';
    $this->keywords->tag->attributes['class'] = get_class($this) . ' keywords';
    $this->keywords->tag->attributes['itemprop'] = 'keywords';
    $this->keywords->form->fieldtype = 'text';
    
    /*$this->offers->tag->tagType = 'div';
    $this->offers->tag->attributes['class'] = get_class($this) . ' offers';
    $this->offers->tag->attributes['itemprop'] = 'offers';
    $this->offers->form->fieldtype = 'text';*/
    
    /*$this->publisher->tag->tagType = 'div';
    $this->publisher->tag->attributes['class'] = get_class($this) . ' publisher';
    $this->publisher->tag->attributes['itemprop'] = 'publisher';
    $this->publisher->form->fieldtype = 'text';*/
    
    /*$this->reviews->tag->tagType = 'div';
    $this->reviews->tag->attributes['class'] = get_class($this) . ' reviews';
    $this->reviews->tag->attributes['itemprop'] = 'reviews';
    $this->reviews->form->fieldtype = 'text';*/
    
    /*$this->video->tag->tagType = 'div';
    $this->video->tag->attributes['class'] = get_class($this) . ' video';
    $this->video->tag->attributes['itemprop'] = 'video';
    $this->video->form->fieldtype = 'text';*/
  }
  

  /*START OF SETTER FUNCTIONS*/
  
/*START ALL*/
  /*Set or change all the values with an option to change attributes*/
  function set_all($name, $description, $image, $url, $headline, $author, $awards, $keywords, $var = NULL){
    $this->set_name($name);
    $this->set_description($description);
    $this->set_image($image);
    $this->set_url($url);
    $this->set_headline($headline);
    $this->set_author($author);
    $this->set_awards($awards);
    $this->set_keywords($keywords);
    $this->set_date_published(date('M. d, Y'));
    
    if($var != NULL){
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
  }
  /*END ALL*/

  /*Set or change the aggregate rating of your creative work.
  function set_aggregate_rating($aggRating){
    $this->aggregateRating->value = $aggRating;
  }*/
  
  /*Set or change the audio file for your creative work.
  function set_audio($audio){
    $this->audio->value = $audio;
  }*/

  /*START AUTHOR*/
  /*Set or change the author of your creative work.*/
  function set_author($author){
    $this->author->value = $author;
  }

  /*Set or change the attributes for the author of your creative work*/
  function set_author_attributes($var){
    $class = get_class($this) . ' author ' . $var;
    $this->name->tag->attributes['class'] = $class;
    $this->name->tag->attributes['itemprop'] = 'author';
  }

  /*Set or change the tag for the author of your creative work*/
  function set_author_tag($tag){
    $this->author->tag->tagType = $tag;
  }

  /*Set or change the form field for the author of your creative work*/
  function set_author_form($form){
    $this->author->form->fieldtype = $form;
  }
  /*END AUTHOR*/

  /*START AWARDS*/
  /*Set or change the awards for your creative work.*/
  function set_awards($awards){
    $this->awards->value = $awards;
  }
  
  /*Set or change the attributes for awards of the creative work*/
  function set_awards_attributes($var){
    $class = get_class($this) . ' awards ' . $var;
    $this->awards->tag->attributes['class'] = $class;
    $this->awards->tag->attributes['itemprop'] = 'awards';
  }

  /*Set or change the tag for the awards of your creative work*/
  function set_awards_tag($tag){
    $this->awards->tag->tagType = $tag;
  }
  
  /*Set or change the form field for the awards of your creative work*/
  function set_awards_form($form){
    $this->awards->form->fieldtype = $form;
  }
  /*END AWARDS*/
  
 /*Set or change the content location for your creative work.
  function set_content_location($contentLocation){
    $this->contentLocation->value = $contentLocation;
  }*/
  
  /*START CONTENT RATING*/
  /*Set or change the content rating for your creative work.*/
  function set_content_rating($contentRating){
    $this->contentRating->value = $contentRating;
  }
  
  /*Set or change the attributes for the content rating of the creative work*/
  function set_content_rating_attributes($var){
    $class = get_class($this) . ' contentRating ' . $var;
    $this->contentRating->tag->attributes['class'] = $class;
    $this->contentRating->tag->attributes['itemprop'] = 'contentRating';
  }
  
/*Set or change the tag for the content rating of your creative work*/
  function set_content_rating_tag($tag){
    $this->contentRating->tag->tagType = $tag;
  }

  /*Set or change the form field for the content rating of your creative work*/
  function set_content_rating_form($form){
    $this->contentRating->form->fieldtype = $form;
  }
  /*END CONTENT RATING*/
  
  /*START DATE PUBLISHED*/
  /*Set or change the date published of your creative work.*/
  function set_date_published($datePublished){
    $this->datePublished->value = $datePublished;
  }
  
  /*Set or change the attributes for the publication date of the creative work*/
  function set_date_published_attributes($var){
    $class = get_class($this) . ' datePublished ' . $var;
    $this->datePublished->tag->attributes['class'] = $class;
    $this->datePublished->tag->attributes['itemprop'] = 'publishDate';
    $this->datePublished->tag->attributes['content'] = date('Y-m-d');
  }
  
  /*Set or change the tag for the date published of your creative work*/
  function set_date_published_tag($tag){
    $this->datePublished->tag->tagType = $tag;
  }

  /*Set or change the form field for the content rating of your creative work*/
  function set_date_published_form($form){
    $this->datePublished->form->fieldtype = $form;
  }
  /*END DATE PUBLISHED*/
  
  /*START EDITOR*/
  /*Set or change the editor your creative work.*/
  function set_editor($editor){
    $this->editor->value = $editor;
  }

 /*Set or change the attributes for the editor of the creative work*/
  function set_editor_attributes($var){
    $class = get_class($this) . ' editor ' . $var;
    $this->editor->tag->attributes['class'] = $class;
    $this->editor->tag->attributes['itemprop'] = 'editor';
  }
  
  /*Set or change the tag for the editor of your creative work*/
  function set_ediotr_tag($tag){
    $this->editor->tag->tagType = $tag;
  }

  /*Set or change the form field for the editor of your creative work*/
  function set_editor_form($form){
    $this->editor->form->fieldtype = $form;
  }
  /*END EDITOR*/
  
  /*Set or change the encodings for your creative work.
  function set_encodings($encodings){
    $this->encodings->value = $encodings;
  }*/

  /*START GENRE*/
  /*Set or change the genre of your creative work.*/
  function set_genre($genre){
    $this->genre->value = $genre;
  }

/*Set or change the attributes for the genre of the creative work*/
  function set_genre_attributes($var){
    $class = get_class($this) . ' editor ' . $var;
    $this->genre->tag->attributes['class'] = $class;
    $this->genre->tag->attributes['itemprop'] = 'genre';
  }
  
  /*Set or change the tag for the genre of your creative work*/
  function set_genre_tag($tag){
    $this->genre->tag->tagType = $tag;
  }

  /*Set or change the form field for the genre of your creative work*/
  function set_genre_form($form){
    $this->genre->form->fieldtype = $form;
  }
  /*END GENRE*/
  
  /*START HEADLINE*/
  /*Set or change the headline for your creative work.*/
  function set_headline($headline){
    $this->headline->value = $headline;
  }

/*Set or change the attributes for the headline of the creative work*/
  function set_headline_attributes($var){
    $class = get_class($this) . ' headline ' . $var;
    $this->headline->tag->attributes['class'] = $class;
    $this->headline->tag->attributes['itemprop'] = 'headline';
  }
  
  /*Set or change the tag for the headline of your creative work*/
  function set_headline_tag($tag){
    $this->headline->tag->tagType = $tag;
  }

  /*Set or change the form field for the headline of your creative work*/
  function set_headline_form($form){
    $this->headline->form->fieldtype = $form;
  }
  /*END HEADLINE*/
  
  /*START LANGUAGE*/
   /*Set or change the language of your creative work.*/
  function set_language($language){
    $this->inLanguage->value = $language;
  }

/*Set or change the attributes for the language of the creative work*/
  function set_language_attributes($var){
    $class = get_class($this) . ' editor ' . $var;
    $this->inLanguage->tag->attributes['class'] = $class;
    $this->inLanguage->tag->attributes['itemprop'] = 'inLanguage';
  }
  
  /*Set or change the tag for the language of your creative work*/
  function set_language_tag($tag){
    $this->inLanguage->tag->tagType = $tag;
  }

  /*Set or change the form field for the language of your creative work*/
  function set_language_form($form){
    $this->inLanguage->form->fieldtype = $form;
  }
  /*END LANGUAGE*/

 /*Set or change the interaction count for your creative work.
  function set_interaction_count($interactionCount){
    $this->interactionCount->value = $interactionCount;
    }*/
  
   /*Set or change whether your creative work is family friendly.
     Must be a boolean value*/
  function set_family_friendly($familyFriendly){
    if(is_bool($familyFriendly)){
      $this->isFamilyFriendly->value = $familyFriendly;
      }
  }
  
  /*Set or change the attributes for whether your creative work is family friendly*/
  function set_family_friendly_attributes($var){
    $class = get_class($this) . ' editor ' . $var;
    $this->isFamilyFriendly->tag->attributes['class'] = $class;
    $this->isFamilyFriendly->tag->attributes['itemprop'] = 'isFamilyFriendly';
  }
  
/*Set or change the tag for the whether your creative work is family friend*/
  function set_family_friendly_tag($tag){
    $this->isFamilyFriendly->tag->tagType = $tag;
  }

  /*Set or change the form field for the family friendly tag*/
  function set_family_friendly_form($form){
    $this->isFamilyFriendly->form->fieldtype = $form;
  }
  /*END FAMILY FRIENDLY*/

  /*START KEYWORDS*/
  /*Set or change the keywords for your creative work.*/
  function set_keywords($keywords){
    $this->keywords->value = $keywords;
  }

  /*Set or change the attributes for the keywords of the creative work*/
  function set_keywords_attributes($var){
    $class = get_class($this) . ' editor ' . $var;
    $this->keywords->tag->attributes['class'] = $class;
    $this->keywords->tag->attributes['itemprop'] = 'keywords';
  }

/*Set or change the tag for the keywords of your creative work*/
  function set_keywords_tag($tag){
    $this->keywords->tag->tagType = $tag;
  }
  
  /*Set or change the form field for the keywords of your creative work*/
  function set_keywords_form($form){
    $this->keywords->form->fieldtype = $form;
  }
  /*END KEYWORDS*/

 /*Set or change the publisher of your creative work.*/
  function set_publisher($publisher){
    $this->publisher->value = $publisher;
  }

/*Set or change the attributes for the publisher of the creative work*/
  function set_publisher_attributes($var){
    $class = get_class($this) . ' editor ' . $var;
    $this->publisher->tag->attributes['class'] = $class;
    $this->publisher->tag->attributes['itemprop'] = 'publisher';
  }

  /*Set or change the tag for the publisher of your creative work*/
  function set_publisher_tag($tag){
    $this->publisher->tag->tagType = $tag;
  }
  
  /*Set or change the form field for the publisher of your creative work*/
  function set_publisher_form($form){
    $this->publisher->form->fieldtype = $form;
  }
  /*END PUBLISHER*/
  
 /*Set or change the reviews for your creative work.
  function set_reviews($reviews){
    $this->reviews->value = $reviews;
  }*/
  
   /*Set or change the video for your creative work.
  function set_video($video){
    $this->video->value = $video;
  }*/
  /*END OF SETTER FUNCTIONS*/
  
  /*START OF GETTER FUNCTIONS*/
  
 /*Retrieve the about of your creative work. This includes name, description, image & url*/
  function get_about(){
    return $this->about->value;
  }

  /*Retrieve the aggregate rating of your creative work.
  function get_aggregate_rating(){
    return $this->aggregateRating->value;
    }*/
  
  /*Retrieve the audio file for your creative work.
  function get_audio(){
    return $this->audio->value;
    }*/

  /*START AUTHOR*/
  /*Retrieve the author of your creative work.*/
  function get_author(){
    return $this->author->value;
  }

  /*Retrieve the tag of the author of your creative work*/
  function get_author_tag(){
    return $this->author->tag->tagType;
  }
  
  /*Retrieve the attributes of the author of your creative work*/
  function get_author_attributes(){
    return $this->author->tag->attributes;
  }
  
  /*Retrieve the form field type for the author of your creative work*/
  function get_author_form($form){
    return $this->author->form->fieldtype;
  }
  /*END AUTHOR*/

  /*START AWARDS*/
  /*Retrieve the awards for your creative work.*/
  function get_awards(){
    return $this->awards->value;
  }

  /*Retrieve the specific award for your creative work.*/
  function get_awards_index($index){
    return $this->awards->value[$index];
  }
  
  /*Retrieve the tag of the awards of your creative work*/
  function get_awards_tag(){
    return $this->author->tag->tagType;
  }
  
  /*Retrieve the attributes of the awards of your creative work*/
  function get_awards_attributes(){
    return $this->awards->tag->attributes;
  }
  
  /*Retrieve the form field type for the awards of your creative work*/
  function get_awards_form(){
    return $this->awards->form->fieldtype;
  }
  
  /*Retrieve the number of awards*/
  function get_awards_count(){
    return count($this->awards->value);
  }
  /*END AWARDS*/
  
  /*Retrieve the content location for your creative work.
    function get_content_location(){
    return $this->contentLocation->value;
    }*/
  
  /*START CONTENT RATING*/
  /*Retrieve the content rating for your creative work.*/
  function get_content_rating(){
    return $this->contentRating->value;
  }
  
  /*Retrieve the tag of the content rating of your creative work*/
  function get_content_rating_tag(){
    return $this->contentRating->tag->tagType;
  }
  
  /*Retrieve the attributes of the content rating of your creative work*/
  function get_content_rating_attributes(){
    return $this->contentRating->tag->attributes;
  }
  
  /*Retrieve the form field type for the content rating of your creative work*/
  function get_content_rating_form(){
    return $this->contentRating->form->fieldtype;
  }
  /*END CONTENT RATING*/
  
  /*START DATE PUBLISHED*/
  /*Retrieve the date published of your creative work.*/
  function get_date_published(){
    return $this->datePublished->value;
  }
  
  /*Retrieve the tag of the date published of your creative work*/
  function get_date_published_tag(){
    return $this->datePublished->tag->tagType;
  }
  
  /*Retrieve the attributes of the date published of your creative work*/
  function get_date_published_attributes(){
    return $this->datePublished->tag->attributes;
  }
  
  /*Retrieve the form field type for the date published of your creative work*/
  function get_date_published_form(){
    return $this->datePublished->form->fieldtype;
  }
  /*END DATE PUBLISHED*/
  
  /*START EDITOR*/
  /*Retrieve the editor your creative work.*/
  function get_editor(){
    return $this->editor->value;
  }
  
  /*Retrieve the tag of the editor of your creative work*/
  function get_editor_tag(){
    return $this->editor->tag->tagType;
  }
  
  /*Retrieve the attributes of the editor of your creative work*/
  function get_editor_attributes(){
    return $this->editor->tag->attributes;
  }
  
  /*Retrieve the form field type for the editor of your creative work*/
  function get_editor_form(){
    return $this->editor->form->fieldtype;
  }
  /*END EDITOR*/
  
  /*Retrieve the encodings for your creative work.
  function get_encodings(){
    return $this->encodings->value;
    }*/

  /*START GENRE*/
  /*Retrieve the genre of your creative work.*/
  function get_genre(){
    return $this->genre->value;
  }

  /*Retrieve the tag of the genre of your creative work*/
  function get_genre_tag(){
    return $this->genre->tag->tagType;
  }
  
  /*Retrieve the attributes of the genre of your creative work*/
  function get_genre_attributes(){
    return $this->genre->tag->attributes;
  }
  
  /*Retrieve the form field type for the genre of your creative work*/
  function get_genre_form(){
    return $this->genre->form->fieldtype;
  }
  /*END GENRE*/
  
  /*START HEADLINE*/
  /*Retrieve the headline for your creative work.*/
  function get_headline(){
    return $this->headline->value;
  }

  /*Retrieve the tag of the headline of your creative work*/
  function get_headline_tag(){
    return $this->headline->tag->tagType;
  }
  
  /*Retrieve the attributes of the headline of your creative work*/
  function get_headline_attributes(){
    return $this->headline->tag->attributes;
  }
  
  /*Retrieve the form field type for the headline of your creative work*/
  function get_headline_form(){
    return $this->headline->form->fieldtype;
  }
  /*END HEADLINE*/
  
  /*START LANGUAGE*/
   /*Retrieve the language of your creative work.*/
  function get_language(){
   return $this->inLanguage->value;
  }

  /*Retrieve the tag of the language of your creative work*/
  function get_language_tag(){
    return $this->inLanguage->tag->tagType;
  }
  
  /*Retrieve the attributes of the language of your creative work*/
  function get_language_attributes(){
    return $this->inLanguage->tag->attributes;
  }
  
  /*Retrieve the form field type for the language of your creative work*/
  function get_language_form(){
    return $this->inLanguage->form->fieldtype;
  }
  /*END LANGUAGE*/


  /*Retrieve the interaction count for your creative work.
  function get_interaction_count(){
    return $this->interactionCount->value;
    }*/

  /*START FAMILY FRIENDLY*/
  /*Set or change whether your creative work is family friendly.*/
  function get_family_friendly(){
    return $this->isFamilyFriendly->value;
  }

  /*Retrieve the tag of the family friendly of your creative work*/
  function get_family_friendly_tag(){
    return $this->isFamilyFriendly->tag->tagType;
  }
  
  /*Retrieve the attributes of the family friendly of your creative work*/
  function get_family_friendly_attributes(){
    return $this->isFamilyFriendly->tag->attributes;
  }
  
  /*Retrieve the form field type for the family friendly of your creative work*/
  function get_family_friendly_form(){
    return $this->isFamilyFriendly->form->fieldtype;
  }
  /*END FAMILY FRIENDLY*/
  
  /*START KEYWORDS*/
  /*Retrieve the keywords for your creative work.*/
  function get_keywords(){
    return $this->keywords->value;
  }

  /*Retrieve the specific keyword for your creative work.*/
  function get_keywords_index($index){
    return $this->keywords->value[$index];
  }

  /*Retrieve the tag of the keywords of your creative work*/
  function get_keywords_tag(){
    return $this->keywords->tag->tagType;
  }
  
  /*Retrieve the attributes of the keywords of your creative work*/
  function get_keywords_attributes(){
    return $this->keywords->tag->attributes;
  }
  
  /*Retrieve the form field type for the keywords of your creative work*/
  function get_keywords_form(){
    return $this->keywords->form->fieldtype;
  }

 /*Retrieve the number of keywords*/
  function get_keywords_count(){
    return count($this->keywords->value);
  }
  /*END KEYWORDS*/

  /*START PUBLISHER*/
 /*Retrieve the publisher of your creative work.*/
  function get_publisher(){
    return $this->publisher->value;
  }

  /*Retrieve the tag of the publisher of your creative work*/
  function get_publisher_tag(){
    return $this->publisher->tag->tagType;
  }
  
  /*Retrieve the attributes of the publisher of your creative work*/
  function get_publisher_attributes(){
    return $this->publisher->tag->attributes;
  }
  
  /*Retrieve the form field type for the publisher of your creative work*/
  function get_publisher_form(){
    return $this->publisher->form->fieldtype;
  }
  /*END PUBLISHER*/
  
  /*Retrieve the reviews for your creative work.
   function get_reviews(){
   return $this->reviews->value;
   }*/
  
  /*Retrieve the video for your creative work.
    function get_video(){
    return $this->video->value;
    }*/

  /*START ITEMTYPE*/
  /*Retrieve the itemtype of your thing*/
  function get_itemtype(){
    return $this->itemtype;
  }
  /*END ITEMTYPE*/
  /*END ALL GETTERS*/
  
  /*START HTML PRINTING FUNCTIONS*/

 /*Creates the full html tag for the author*/
  protected function itemprop_author(){
    $this->set_tag($this->get_author_tag(), $this->get_author_attributes(), $this->get_author());
    return $this->get_tag();
  }

 /*Creates the full html tag for the awards*/
  protected function itemprop_awards($index){
    
    $this->set_tag($this->get_awards_tag(), $this->get_awards_attributes(), $this->get_awards_index($index));
    
    return $this->get_tag();
  }
  
  /*Creates the full html tag for the content rating*/
  protected function itemprop_content_rating(){
    $this->set_tag($this->get_content_rating_tag(), $this->get_content_rating_attributes(), $this->get_content_rating());
    return $this->get_tag();
  }

 /*Creates the full html tag for the date published*/
  protected function itemprop_date_published(){
    $this->set_tag($this->get_date_published_tag(), $this->get_date_published_attributes(), $this->get_date_published());
    return $this->get_tag();
  }

 /*Creates the full html tag for the editor*/
  protected function itemprop_editor(){
    $this->set_tag($this->get_editor_tag(), $this->get_editor_attributes(), $this->get_editor());
    return $this->get_tag();
  }

 /*Creates the full html tag for the genre*/
  protected function itemprop_genre(){
    $this->set_tag($this->get_genre_tag(), $this->get_genre_attributes(), $this->get_genre());
    return $this->get_tag();
  }

 /*Creates the full html tag for the headline*/
  protected function itemprop_headline(){
    $this->set_tag($this->get_headline_tag(), $this->get_headline_attributes(), $this->get_headline());
    return $this->get_tag();
  }

 /*Creates the full html tag for the language*/
  protected function itemprop_language(){
    $this->set_tag($this->get_language_tag(), $this->get_language_attributes(), $this->get_language());
    return $this->get_tag();
  }

 /*Creates the full html tag for family friendly*/
  protected function itemprop_family_friendly(){
    $this->set_tag($this->get_family_friendly_tag(), $this->get_family_friendly_attributes(), $this->get_family_friendly());
    return $this->get_tag();
  }

 /*Creates the full html tag for the keywords*/
  protected function itemprop_keywords($index){
    $this->set_tag($this->get_keywords_tag(), $this->get_keywords_attributes(), $this->get_keywords_index($index));
    return $this->get_tag();
  }

 /*Creates the full html tag for the publisher*/
  protected function itemprop_publisher(){
    $this->set_tag($this->get_publisher_tag(), $this->get_publisher_attributes(), $this->get_publisher());
    return $this->get_tag();
  }

  /*Creates the full html printout for the Creative Works Schema*/
  function print_schema(){
    
    $html = $this->itemscope_open()."</br>";
    $html .= $this->itemprop_headline()."</br>";
    $html .= $this->itemprop_name()."</br>";
    $html .= $this->itemprop_description()."</br>";
    $html .= $this->itemprop_image()."</br>";
    $html .= $this->itemprop_url()."</br>";
    $html .= $this->itemprop_author()."</br>";
    
    $count = $this->get_awards_count();
    for ($i = 0; $i < $count; $i++) {
    $html .= $this->itemprop_awards($i)."</br>";
    }
    
    $count = $this->get_keywords_count();
    for ($i = 0; $i < $count; $i++) {
      $html .= $this->itemprop_keywords($i)."</br>";
    }    
    
    $html .= $this->itemprop_date_published();
    $html .= $this->itemscope_close()."</br>";
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
    
    return $thing;
  }
  /*END MONGODB FUNCTIONS*/
  

  /* End line of entire class*/
}
