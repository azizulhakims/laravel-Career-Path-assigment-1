<?php

//Problem 1
function findMinAbsoluteValue($input)
{
    // Split the input string into an array of integers
    $numbers = array_map('intval', explode(' ', $input));

    // Map the array to their absolute values
    $absoluteValues = array_map('abs', $numbers);

    // Find the minimum value in the array of absolute values
    $minAbsoluteValue = min($absoluteValues);

    return $minAbsoluteValue;
}

// Sample inputs
$input1 = '1 12 15 189 22 2 34';
$input2 = '10 -12 34 12 -3 -1 123';

// Output the results
echo 'Sample output 1: ' . findMinAbsoluteValue($input1) . "\n"; // Expected output: 2
echo 'Sample output 2: ' . findMinAbsoluteValue($input2) . "\n"; // Expected output: 3

//Problem 2:

function countWord($file)
{
    //Try chq have any file
    if (!file_exists($file)) {
        die('Not Found');
    }
    //need to to read
    $readFile = file_get_contents($file);
    //than this read file want to count.
    $wordCount = str_word_count($readFile);

    return $wordCount;
}

$file = '/file_for_test/unique.txt';

echo ' Total Word: ' . countWord($file);

//Problem 3
function reverseWords($fullWord)
{
    //divied all word in sentence
    $words = explode(' ', $fullWord);

    //reverse
    $wordRevere = array_map(function ($word) {
        return strrev($word);
    }, $words);

    $revereSentence = implode(' ', $wordRevere);

    return $revereSentence;
}

$fullWord = 'I love programming';
$result = reverseWords($fullWord);

echo $result;

//Problem 4

function printPattern($n)
{
    for ($i = 1; $i <= $n; $i++) {
        //Calculate
        $spaces = $n - $i;
        $stars = 2 * $i - 1;

        //print spaces
        echo str_repeat(' ', $spaces);

        //Print stars
        echo str_repeat('*', $stars);

        //End line
        echo "\n";
    }
}

$n = 5;

printPattern($n);

function sumNumber($n)
{
    $numberString = strval($n);

    $digits = str_split($numberString);

    $sum = 0;

    foreach ($digits as $digit) {
        $sum += intval($digit);
    }

    return $sum;
}

$n1 = 623443;
$n2 = 1000;

echo "Sum of $n1: " . sumNumber($n1) . "\n";
echo "Sum of $n2: " . sumNumber($n2) . "\n";
