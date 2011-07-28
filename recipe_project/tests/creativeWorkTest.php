<?php

include ("../classes/class_creativework_lib.php");

$book = new CreativeWork();

$name = "Book";
$description = "A guide to using schema";
$image = "http://www.ljbook.com/imgs/book.jpg";
$url = "http://www.book.com";
$author = "Mario";
$awards = "Best Book EVER";
$contentRating = "M";
$datePublished = "Aug";
$editor = "Luigi";
$genre = "Comedy";
$headline = "AMAZING";
$inLanguage = "English";
$isFamilyFriendly = FALSE;
$keywords = "Brothers";
$publisher = "Bowser";

$book->set_about($name, $description, $image, $url);
$book->set_author($author);
$book->set_awards($awards);
$book->set_content_rating($contentRating);
$book->set_date_published($datePublished);
$book->set_editor($editor);
$book->set_genre($genre);
$book->set_headline($headline);
$book->set_language($inLanguage);
$book->set_family_friendly($isFamilyFriendly);
$book->set_keywords($keywords);
$book->set_publisher($publisher);

print_r($book->print_schema());
?>