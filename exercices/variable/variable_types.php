<?php
$name = "Benjam";
$age = 26;
$eyeColor = "brown";
$family = array(
    0 => "Violaine",
    1 => "Jean-Marc",
    2 => "Max",
    3 => "Alizée"
);
$isHungry = false
?>

<html>
<head><title>Hi!</title></head>
<body>

<p>Hi! My name is <?php echo $name; ?> !</p>
<p>I am <?php echo $age; ?> years old.</p>
<p>My eyes are <?php echo $eyeColor; ?>.</p>
<p>The first person in my family is <?php echo $family[0]; ?>.</p>
<p>Am I hungry ? <?php if ($isHungry == true) {
        echo "Yes";
    } else {
        echo "No";
    } ?></p>

</body>
</html>
