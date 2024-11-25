<?php
// Sample string
$string = "Hello, welcome to PHP string manipulation!";

// i) Find the length of a string
$stringLength = strlen($string);
echo "Length of the string: " . $stringLength . "<br>";

// ii) Count the number of words in a string
$wordCount = str_word_count($string);
echo "Number of words in the string: " . $wordCount . "<br>";

// iii) Reverse a string
$reversedString = strrev($string);
echo "Reversed string: " . $reversedString . "<br>";

// iv) Search for a specific string
$searchString = "PHP";
$position = strpos($string, $searchString);
if ($position !== false) {
    echo "The string '$searchString' was found at position: " . $position . "<br>";
} else {
    echo "The string '$searchString' was not found.<br>";
}
?>
