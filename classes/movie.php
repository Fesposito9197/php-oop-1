<?php

class Movie {
    public $name;
    public $rating;
    public $genere;
    public $language;
    public $plot;
    function __construct( string $_name , int $_rating , string $_genere , string $_language , string $_plot)
    {
        $this ->name = $_name;
        $this ->rating = $_rating;
        $this ->genere = $_genere;
        $this ->language = $_language;
        $this->setRating($_plot);   
    }

    function setRating($_plot){
        if($this->rating > 6){
            $this->plot = $_plot;
        }
    }

}
    

