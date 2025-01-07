<?php

function capitalize($name)
{
    echo ucfirst($name);
}

$names = [
    'emma', 'olivia', 'sophia', 'ava', 'isabella', 'mia', 'amelia',
    'harper', 'evelyn', 'abigail', 'emily', 'lily', 'ella',
    'madison', 'scarlett', 'victoria', 'aria', 'grace', 'chloe',
    'penelope', 'layla', 'riley', 'zoey', 'nora', 'hannah',
    'elizabeth', 'aubrey', 'ellie', 'stella', 'aurora',
    'samuel', 'liam', 'jacob', 'noah', 'mason',
    'ethan', 'james', 'alexander', 'elijah', 'lucas'
];

foreach ($names as $name) {
    capitalize($name);
    echo "<br>";
}

echo "<br>";
echo "<br>";

date_default_timezone_set('Europe/Paris');
echo date("d-m-Y H:i:s");

echo "<br>";
echo "<br>";

function sum($a, $b)
{
    if (is_numeric($a) && is_numeric($b)) {
        echo $a + $b;
    } else {
        echo "Error, please enter numbers only";
    }
}

sum('Oui', 542646);

echo "<br>";
echo "<br>";

function acronym($string)
{
    if (is_string($string)) {
        $characters = [];
        $words = explode(" ", $string);

        foreach ($words as $word) {
            $characters[] = substr($word, 0, 1);
        }

        foreach ($characters as $character) {
            echo capitalize($character) . " ";
        }
    }
}

acronym("Ceci n'est pas un test");

echo "<br>";
echo "<br>";

function theImpossibleLetter($subject)
{
    echo str_replace("ae", "æ", $subject);
}

theImpossibleLetter("microsphaera");
echo "<br>";
theImpossibleLetter("chaenichthys");
echo "<br>";
theImpossibleLetter("caecotrophie");

echo "<br>";
echo "<br>";

function impossibleLetterToPossible($subject)
{
    echo str_replace("æ", "ae", $subject);
}

impossibleLetterToPossible("cæcotrophie");
echo "<br>";
impossibleLetterToPossible("chænichthys");
echo "<br>";
impossibleLetterToPossible("microsphæra");

echo "<br>";
echo "<br>";

function error($notice, $warning)
{
    return "<div class=\"" . $warning . "\">" . capitalize($warning) . $notice . ".</div>";
}

echo error("Incorrect email address", "error");

echo "<br>";
echo "<br>";

function randomString()
{
    $characters = "abcdefghijklmnopqrstuvwxyz";
    $randomStringOne = "";
    $randomStringTwo = "";

    $oneToFive = rand(1, 5);
    $sevenToFifteen = rand(7, 15);

    for ($i = 0; $i < $oneToFive; $i++) {
        $index = rand(0, strlen($characters) - 1);
        $randomStringOne .= $characters[$index];
    }

    for ($i = 0; $i < $sevenToFifteen; $i++) {
        $index = rand(0, strlen($characters) - 1);
        $randomStringTwo .= $characters[$index];
    }

    echo $randomStringOne;
    echo "<br>";
    echo $randomStringTwo;
}

randomString();

echo "<br>";
echo "<br>";

echo strtolower("STOP YELLING I CAN'T HEAR MYSELF THINKING!!");

echo "<br>";
echo "<br>";

function calculate_one_volume($ray, $height)
{
    $volume = $ray * $ray * 3.14 * $height * (1 / 3);

    echo 'The volume of a cone which ray is ' . $ray . ' and height is ' . $height . ' is ' . $volume . ' <sup>cm3</sup>';
}

calculate_one_volume(10, 5);



