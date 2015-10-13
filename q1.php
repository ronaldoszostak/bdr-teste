<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 13/10/15
 * Time: 17:15
 *
Escreva um programa que imprima números de 1 a 100. Mas, para múltiplos de 3 imprima
“Fizz” em vez do número e para múltiplos de 5 imprima “Buzz”. Para números múltiplos
de ambos (3 e 5), imprima “FizzBuzz”.
 */

for ($number = 1; $number <= 100; $number++){
    if (!($number % 3) && !($number % 5))
    {
        echo $number." FizzBuzz";
    }
    else if (!($number % 3))
    {
        echo $number." Fizz";
    }
    else if(!($number % 5))
    {
        echo $number." Buzz";
    }
    else {
        echo $number;
    }
    ?>
<br/>

<?php
}
?>