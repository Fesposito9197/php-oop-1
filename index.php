<?php
require_once __DIR__.'/classes/movie.php';

$ritornoalfuturo = new Movie("back to the future" , 8 , "Fantascienza" , "eng" , "Il diciottenne Marty ha come amico un bislacco scienziato che ha inventato una macchina per viaggiare nel tempo. Grazie ad essa Marty tornerà indietro nel tempo, fino al 1955.");

$ilbuonoilbruttoilcattivo = new Movie("il buono , il brutto , il cattivo", 7 , "western" , "eng" , "Mentre infuria la Guerra di Secessione, tre uomini dall'oscuro passato si battono per impossessarsi di un tesoro nascosto in un cimitero.");

$ilcavaliereoscuro = new Movie("the dark knight", 8 , "azione" , "eng" ,"Batman e Jim Gordon si alleano con il nuovo procuratore di Gotham City, Harvey Dent, per combattere il crimine organizzato che dilaga in città e fermare un pericoloso rapinatore, il Joker, che ha gettato la città nell'anarchia.");

$benvenutialsud = new Movie("benvenuti al sud" , 6 , "commedia" , "ita" , "Alberto Colombo, un direttore delle Poste che vive in un paesino della Brianza, viene trasferito a guidare l'ufficio postale del piccolo paese di Castellabate in seguito ad una richiesta andata non propriamente a buon fine. L'uomo, inizialmente perplesso dalla situazione, viene accolto a braccia aperte dal postino Mattia e dai colleghi, iniziando ad apprezzare le bellezze e le abitudini del piccolo centro campano.");

var_dump($ritornoalfuturo , $ilbuonoilbruttoilcattivo , $ilcavaliereoscuro , $benvenutialsud);