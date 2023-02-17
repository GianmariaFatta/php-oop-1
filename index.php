<?php 
 
class Movie{

    public $title;
    public $genre;
    public $language;
    public $overview;

    public function __construct($_title,$_genre,$_language,$_overview)
    {
        $this->title=$_title;
        $this->genre=$_genre;
        $this->language=$_language;
        $this->$overview=$_overview;
    }
}

$il_signore_degli_anelli = new Movie()