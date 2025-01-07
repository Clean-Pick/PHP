<?php

$pronouns = array('I', 'You', 'He/She', 'We', 'You', 'They');

foreach ($pronouns as $pronoun) {
    echo $pronoun . " code.<br>";
}

echo "<br>";
echo "<br>";

$one = 1;

while ($one <= 120) {
    echo $one . "<br>";
    $one++;
}

echo "<br>";
echo "<br>";

for ($i = 1; $i <= 120; $i++) {
    echo $i . "<br>";
}

echo "<br>";
echo "<br>";


$family = ["Violaine", "Maximilien", "Loan", "Lucas", "Thomas", "Alizée", "Jean-Marc", "Marguerite"];

foreach ($family as $member) {
    echo $member . "<br>";
}

echo "<br>";
echo "<br>";

$countries = [
    'FR' => 'France',
    'DE' => 'Germany',
    'US' => 'United States',
    'CA' => 'Canada',
    'BR' => 'Brazil',
    'MX' => 'Mexico',
    'GB' => 'United Kingdom',
    'IT' => 'Italy',
    'ES' => 'Spain',
    'PT' => 'Portugal',
    'AU' => 'Australia',
    'NZ' => 'New Zealand',
    'JP' => 'Japan',
    'CN' => 'China',
    'KR' => 'South Korea',
    'IN' => 'India',
    'RU' => 'Russia',
    'TR' => 'Turkey',
    'ZA' => 'South Africa',
    'EG' => 'Egypt',
    'AR' => 'Argentina',
    'CO' => 'Colombia',
    'CL' => 'Chile',
    'PE' => 'Peru',
    'TH' => 'Thailand',
    'VN' => 'Vietnam',
    'ID' => 'Indonesia',
    'MY' => 'Malaysia',
    'PH' => 'Philippines',
    'SG' => 'Singapore',
    'SE' => 'Sweden',
    'NO' => 'Norway',
    'DK' => 'Denmark',
    'FI' => 'Finland',
    'IS' => 'Iceland',
    'PL' => 'Poland',
    'HU' => 'Hungary',
    'CZ' => 'Czech Republic',
    'SK' => 'Slovakia',
    'AT' => 'Austria',
    'BE' => 'Belgium',
    'CH' => 'Switzerland',
    'NL' => 'Netherlands',
    'GR' => 'Greece',
    'RO' => 'Romania',
    'BG' => 'Bulgaria',
    'UA' => 'Ukraine',
    'MA' => 'Morocco',
    'SA' => 'Saudi Arabia',
    'AE' => 'United Arab Emirates',
    'QA' => 'Qatar',
    'IL' => 'Israel',
    'IR' => 'Iran',
    'PK' => 'Pakistan'
];

?>

<label for="countries"></label>

<select name="countries" id="countries">
    <?php foreach ($countries as $isoCode => $country) {
        echo "<option value=\"" . $isoCode . "\">$country</option>";
    }
    ?>
</select>


