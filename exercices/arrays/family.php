<?php

$family = ["Violaine", "Maximilien", "Loan", "Lucas", "Thomas", "Alizée", "Jean-Marc", "Marguerite"];

print_r($family);

echo "<br>";
echo "<br>";

echo $family[5];

echo "<br>";
echo "<br>";

var_dump($family);

array_push($family, "Pixel");
$family[] = "Dora";

echo "<br>";
echo "<br>";

var_dump($family);

$me = [
    "firstname" => "Benjamin",
    "lastname" => "Willem",
    "age" => 26,
    "job" => "Junior Web-Dev",
    "season" => "Winter",
    "doesLikesSoccer" => false,
    "favouriteGames" => array("Outer Wilds", "Monster Hunter", "Zelda", "Kingdom Hearts")
];

$lover = [
    "firstname" => "Alizée",
    "lastname" => "Katona",
    "age" => 27,
    "job" => "Versatile Worker",
    "season" => "Winter",
    "doesLikesSoccer" => false,
    "favouriteGames" => array("Outer Wilds", "Monster Hunter", "Zelda", "Kingdom Hearts", "Life Is Strange")
];

array_push($me, $lover);

echo "<br>";
echo "<br>";

echo '<pre>';
print_r($me);
echo '</pre>';

echo "<br>";
echo "<br>";

echo "Nbre hobbies of me :" . count($me['favouriteGames']);
echo "<br>";
echo "Nbre hobbies of lover :" . count($lover['favouriteGames']);
echo "<br>";
echo "Total hobbies  :" . (count($lover['favouriteGames']) + count($me['favouriteGames']));

echo "<br>";
echo "<br>";

$me["favouriteGames"][] = "Death Stranding";
echo '<pre>';
print_r($me);
echo '</pre>';

$me['lastname'] = "Durand";

echo "<br>";
echo "<br>";

echo '<pre>';
print_r($me);
echo '</pre>';

echo "<br>";
echo "<br>";

// perform array operation
$possible_hobbies_via_intersection = array_intersect($me['favouriteGames'], $lover['favouriteGames']);
$possible_hobbies_via_merge = array_merge($me['favouriteGames'], $lover['favouriteGames']);

echo '<pre>';
print_r($possible_hobbies_via_intersection);
print_r($possible_hobbies_via_merge);
echo '</pre>';

echo "<br>";
echo "<br>";

$web_development = [
    "frontend" => array(),
    "backend" => array()
];

array_push($web_development["frontend"], "xhtml", "CSS", "Javascript");
array_push($web_development["backend"], "Ruby on Rails", "Flash");

echo '<pre>';
print_r($web_development);
echo '</pre>';

echo "<br>";
echo "<br>";

$web_development["frontend"][0] = "html";

echo '<pre>';
print_r($web_development);
echo '</pre>';

echo "<br>";
echo "<br>";

array_splice($web_development["backend"], 1, 1);

echo '<pre>';
print_r($web_development);
echo '</pre>';
