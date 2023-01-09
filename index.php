<?php
require_once __DIR__.'/classes/movie.php';

$ritornoalfuturo = new Movie("back to the future" , 8 , "Fantascienza" , "eng" , "Il diciottenne Marty ha come amico un bislacco scienziato che ha inventato una macchina per viaggiare nel tempo. Grazie ad essa Marty tornerà indietro nel tempo, fino al 1955.");
$ilbuonoilbruttoilcattivo = new Movie("il buono , il brutto , il cattivo", 5 , "western" , "eng" , "Mentre infuria la Guerra di Secessione, tre uomini dall'oscuro passato si battono per impossessarsi di un tesoro nascosto in un cimitero.");
var_dump($ritornoalfuturo , $ilbuonoilbruttoilcattivo);