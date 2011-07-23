<?php

/*
 * Created by Alex Figueroa
 * A class to create a creative work schema based on http://schema.org/CreativeWork
 * A creative work is a specific type of Thing
 */

function __autoload($class_name){
  include $class_name.'.php';
}


class CreativeWork extends Thing{
  
  private $about;
  private $aggregateRating;
  private $audio;
  private $author;
  private $awards;
  private $contentLocation;
  private $contentRating;
  private $datePublished;
  private $editor;
  private $encodings;
  private $genre;
  private $headline;
  private $inLanguage;
  private $interactionCount;
  private $isFamilyFriendly;
  private $keywords;
  private $publisher;
  private $reviews;
  private $video;
  private $itemType = "http://www.schema.org/CreativeWorks";
  
  
  function __construct(){

    $this->about->tag->tagtype = 'span';
    $this->about->tag->attributes['class'] = get_class($this) . ' about ';
    $this->about->tag->attributes['itemprop'] = 'about';
    
    $this->aggregateRating->tag->tagtype = 'div';
    $this->aggregateRating->tag->attributes['class'] = get_class($this) . ' aggregateRating ';
    $this->aggregateRating->tag->attributes['itemprop'] = 'aggregateRating';
    
    $this->audio->tag->tagtype = 'div';
    $this->audio->tag->attributes['class'] = get_class($this) . ' audio ';
    $this->audio->tag->attributes['itemprop'] = 'audio';
    
    $this->author->tag->tagtype = 'div';
    $this->author->tag->attributes['class'] = get_class($this) . ' author ';
    $this->author->tag->attributes['itemprop'] = 'author';
    
    $this->awards->tag->tagtype = 'span';
    $this->awards->tag->attributes['class'] = get_class($this) . ' awards ';
    $this->awards->tag->attributes['itemprop'] = 'awards';

    $this->contentLocation->tag->tagtype = 'div';
    $this->contentLocation->tag->attributes['class'] = get_class($this) . ' contentLocation ';
    $this->contentLocation->tag->attributes['itemprop'] = 'contentLocation';
    
    $this->contentRating->tag->tagtype = 'span';
    $this->contentRating->tag->attributes['class'] = get_class($this) . ' contentRating ';
    $this->contentRating->tag->attributes['itemprop'] = 'contentRating';
    
    $this->datePublished->tag->tagtype = 'meta';
    $this->datePublished->tag->attributes['class'] = get_class($this) . ' datePublished ';
    $this->datePublished->tag->attributes['itemprop'] = 'datePublished';
    
    $this->editor->tag->tagtype = 'div';
    $this->editor->tag->attributes['class'] = get_class($this) . ' editor ';
    $this->editor->tag->attributes['itemprop'] = 'editor';
    
    $this->encodings->tag->tagtype = 'div';
    $this->encodings->tag->attributes['class'] = get_class($this) . ' encodings ';
    $this->encodings->tag->attributes['itemprop'] = 'encodings';

    $this->genre->tag->tagtype = 'span';
    $this->genre->tag->attributes['class'] = get_class($this) . ' genre ';
    $this->genre->tag->attributes['itemprop'] = 'genre';
    
    $this->headline->tag->tagtype = 'span';
    $this->headline->tag->attributes['class'] = get_class($this) . ' headline ';
    $this->headline->tag->attributes['itemprop'] = 'headline';
    
    $this->inLanguage->tag->tagtype = 'span';
    $this->inLanguage->tag->attributes['class'] = get_class($this) . ' inLanguage ';
    $this->inLanguage->tag->attributes['itemprop'] = 'inLanguage';
    
    $this->interactionCount->tag->tagtype = 'meta';
    $this->interactionCount->tag->attributes['class'] = get_class($this) . ' interactionCount ';
    $this->interactionCount->tag->attributes['itemprop'] = 'interactionCount';
    
    $this->isFamilyFriendly->tag->tagtype = 'meta';
    $this->isFamilyFriendly->tag->attributes['class'] = get_class($this) . ' isFamilyFriendly ';
    $this->isFamilyFriendly->tag->attributes['itemprop'] = 'isFamilyFriendly';
    
    $this->keywords->tag->tagtype = 'span';
    $this->keywords->tag->attributes['class'] = get_class($this) . ' keywords ';
    $this->keywords->tag->attributes['itemprop'] = 'keywords';
    
    $this->offers->tag->tagtype = 'div';
    $this->offers->tag->attributes['class'] = get_class($this) . ' offers ';
    $this->offers->tag->attributes['itemprop'] = 'offers';
    
    $this->publisher->tag->tagtype = 'div';
    $this->publisher->tag->attributes['class'] = get_class($this) . ' publisher ';
    $this->publisher->tag->attributes['itemprop'] = 'publisher';

    $this->headline->tag->tagtype = 'div';
    $this->reviews->tag->attributes['class'] = get_class($this) . ' reviews ';
    $this->reviews->tag->attributes['itemprop'] = 'reviews';
    
    $this->video->tag->tagtype = 'div';
    $this->video->tag->attributes['class'] = get_class($this) . ' video ';
    $this->video->tag->attributes['itemprop'] = 'video';
  }
  
  /*START OF SETTER FUNCTIONS*/

  /*Set or change the about of your creative work. About is a Thing*/
  function set_about($thing){
    $thing = new Thing();
    $this->about->value = $thing;
  }

  /*Set or change the aggregate rating of your creative work.*/
  function set_aggregate_rating($aggRating){
    $this->aggregateRating->value = $aggRating;
  }
  
  /*Set or change the audio file for your creative work.*/
  function set_audio($audio){
    $this->audio->value = $audio;
  }

  /*Set or change the author of your creative work.*/
  function set_author($author){
    $this->author->value = $author;
  }
  
  /*Set or change the awards for your creative work.*/
  function set_awards($awards){
    $this->awards->value = $awards;
  }
  
 /*Set or change the content location for your creative work.*/
  function set_content_location($contentLocation){
    $this->contentLocation->value = $contentLocation;
  }
  
  /*Set or change the content rating for your creative work.*/
  function set_content_rating($contentRating){
    $this->contentRating->value = $contentRating;
  }
  
  /*Set or change the date published of your creative work.*/
  function set_date_published($datePublished){
    $this->datePublished->value = $datePublished;
  }
  
  /*Set or change the editor your creative work.*/
  function set_editor($editor){
    $this->editor->value = $editor;
  }
  
  /*Set or change the encodings for your creative work.*/
  function set_encodings($encodings){
    $this->encodings->value = $encodings;
  }

  /*Set or change the genre of your creative work.*/
  function set_genre($genre){
    $this->genre->value = $genre;
  }
  
  /*Set or change the headline for your creative work.*/
  function set_headline($headline){
    $this->headline->value = $headline;
  }
  
   /*Set or change the language of your creative work.*/
  function set_language($language){
    $this->inLanguage->value = $language;
  }

 /*Set or change the interaction count for your creative work.*/
  function set_interaction_count($interactionCount){
    $this->interactionCount->value = $interactionCount;
  }
  
   /*Set or change whether your creative work is family friendly.
     Must be a boolean value*/
  function set_family_friendly($familyFriendly){
    if(is_bool($familyFriendly)){
    $this->isFamilyFriendly->value = $familyFriendly;
    }
  }
  
  /*Set or change the keywords for your creative work.*/
  function set_keywords($keywords){
    $this->keywords->value = $keywords;
  }

 /*Set or change the publisher of your creative work.*/
  function set_publisher($publisher){
    $this->publisher->value = $publisher;
  }
  
 /*Set or change the reviews for your creative work.*/
  function set_reviews($reviews){
    $this->reviews->value = $reviews;
  }
  
   /*Set or change the video for your creative work.*/
  function set_video($video){
    $this->video->value = $video;
  }
  /*END OF SETTER FUNCTIONS*/
  
  /*START OF GETTER FUNCTIONS*/

 /*Retrieve the about of your creative work.*/
  function get_about(){
    return $this->about->value;
  }

  /*Retrieve the aggregate rating of your creative work.*/
  function get_aggregate_rating(){
    return $this->aggregateRating->value;
  }
  
  /*Retrieve the audio file for your creative work.*/
  function get_audio(){
    return $this->audio->value;
  }

  /*Retrieve the author of your creative work.*/
  function get_author(){
    return $this->author->value;
  }
  
  /*Retrieve the awards for your creative work.*/
  function get_awards(){
    return $this->awards->value;
  }
  
  /*Retrieve the content location for your creative work.*/
  function get_content_location(){
    return $this->contentLocation->value;
  }
  
  /*Retrieve the content rating for your creative work.*/
  function get_content_rating(){
    return $this->contentRating->value;
  }
  
  /*Retrieve the date published of your creative work.*/
  function get_date_published(){
    return $this->datePublished->value;
  }
  
  /*Retrieve the editor your creative work.*/
  function get_editor(){
    return $this->editor->value;
  }
  
  /*Retrieve the encodings for your creative work.*/
  function get_encodings(){
    return $this->encodings->value;
  }

  /*Retrieve the genre of your creative work.*/
  function get_genre(){
    return $this->genre->value;
  }
  
  /*Retrieve the headline for your creative work.*/
  function get_headline(){
    return $this->headline->value;
  }
  
   /*Retrieve the language of your creative work.*/
  function get_language(){
   return $this->inLanguage->value;
  }

  /*Retrieve the interaction count for your creative work.*/
  function get_interaction_count(){
    return $this->interactionCount->value;
  }
  
  /*Set or change whether your creative work is family friendly.*/
  function get_family_friendly(){
    return $this->isFamilyFriendly->value;
  }
  
  /*Retrieve the keywords for your creative work.*/
  function get_keywords(){
    return $this->keywords->value;
  }

 /*Retrieve the publisher of your creative work.*/
  function get_publisher(){
    return $this->publisher->value;
  }
  
 /*Retrieve the reviews for your creative work.*/
  function get_reviews(){
    return $this->reviews->value;
  }
  
   /*Retrieve the video for your creative work.*/
  function get_video(){
    return $this->video->value;
  }

/* End line of entire class*/
}
