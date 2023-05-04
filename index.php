<?php
// echo 'date : <br>' ;
// echo  date("d/m/Y") ;

// $phrase = 'Mettez une phrase differente ici a cet endroit!';
// echo strlen($phrase);

// $texte = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's
//  standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
//   It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
//    It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
//     and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
// ";
// echo substr($texte, 0, 20) . '...<a href="\"\""> lire la suite </a>';

// $pseudo = "joker";
// if(isset($pseudo))
// {
//     echo 'la variable $pseudo existe!<br>';
// }
// else
// {
//     echo 'la variable $pseudo n\'existe PAS!<br>';
// }

// $pseudo = "joker";
// if(isset($pseudo))
// {
//     echo 'la variable $pseudo est vide!<br>';
// }
// else
// {
//     echo 'la variable $pseudo n\'est pas vide  (et est donc remplie).<br>';
// }

// $a = 4 ;
// $b = 5 ;
// echo $a * $b ;

// $c = 10 ;
// $d = 20 ;
// echo $c * $d ;

//rappel une fonction

// require('./lib.php');
// echo multiplier(20,10);

// function calculTva()
// {
//     return 100*1.2;
// }
// echo calculTVA() . '<br>';

function calculTva($Tvaun , $Tvadeux)
{
    return $Tvaun*$Tvadeux;
}

echo calculTva(900,5) . '<br>'; 
