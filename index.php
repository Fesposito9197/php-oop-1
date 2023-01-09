<?php
require_once __DIR__.'/classes/movie.php';

$ritornoalfuturo = new Movie("back to the future" , 8 , "Fantascienza" , "eng");
$ilbuonoilbruttoilcattivo = new Movie("il buono , il brutto , il cattivo", 7 , "western" , "eng");
var_dump($ritornoalfuturo , $ilbuonoilbruttoilcattivo);