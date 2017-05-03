<?php

print strrev('This is mafin.');

$s = "Once upon a time there was a turtle.";
// разбиение строки по словам

//$words = explode(' ', $s);

//$words = array_reverse($words);

// построение строки

//$s = implode(' ', $words); // объединяет элементы массива в строку
// компактная перестановка строки по словам

$reversedS = implode(' ', array_reverse(explode(' ', $s)));

echo $reversedS;


echo '<pre>';
//print_r($words);