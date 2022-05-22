<?php

include "getLongestWord.php";

$sentence = "mana yang paling panjang"; // input your sentence
$getWord = new getLongestWord($sentence); // will return array

var_dump($getWord->word);