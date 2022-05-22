<?php

class getLongestWord{
    public $word;
    function __construct($sentence) { // return array
        $StrToArr = explode(" ", $sentence); //convert string to array
        $bestLength = max(array_map('strlen', $StrToArr)); // get best length
        $getWord = array_filter( // remove the null value
        array_map(function($item) use ($bestLength){ // test to all word
            if(strlen($item) == $bestLength){ // get the word who have a biggest length 
                return $item." : ".$bestLength; // return it to array
            }
        },$StrToArr)
        );
        $this->word = $getWord;
    }
}