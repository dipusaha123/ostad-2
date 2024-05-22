<?php
$strings = ["Hello", "World", "PHP", "Programming"];

function countVowels($str) {
    $vowels = ['a', 'e', 'i', 'o', 'u'];
    $strLower = strtolower($str);
    $vowelCount = 0;
    for ($i = 0; $i < strlen($strLower); $i++) {
        if (in_array($strLower[$i], $vowels)) {
            $vowelCount++;
        }
    }
    return $vowelCount;
}

foreach ($strings as $string) {
    $vowelCount = countVowels($string);
    $reversedString = strrev($string);
    echo "Original String: $string, Vowel Count: $vowelCount, Reversed String: $reversedString\n";
}
?>
