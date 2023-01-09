<?php

class Movie {
    public $name;
    public $rating;
    public $genere;
    public $language;
    function __construct( string $_name , int $_rating , string $_genere , string $_language)
    {
        $this ->name = $_name;
        $this ->rating = $_rating;
        $this ->genere = $_genere;
        $this ->language = $_language;   
    }
}
    

