<?php

// 1.1 Clean your room Exercise


$possible_states = [
    "health hazard",
    "filthy",
    "dirty",
    "clean",
    "immaculate",
];

$room_is_filthy = $possible_states[4];

if ($room_is_filthy == "health hazard") {

    echo "Yuk, Room is dangerous! let's clean it up !";
    cleanup_room();
    echo "<br>Room is now clean!";
    $room_is_filthy = $possible_states[3];
    echo "<br>The room is now $room_is_filthy";

} else if ($room_is_filthy == "filthy") {

    echo "Yuk, Room is disgusting! let's clean it up !";
    cleanup_room();
    echo "<br>Room is now clean!";
    $room_is_filthy = $possible_states[3];
    echo "<br>The room is now $room_is_filthy";

} else if ($room_is_filthy == "dirty") {

    echo "This room could need a bit of cleaning ! let's clean it up !";
    cleanup_room();
    echo "<br>Room is now clean!";
    $room_is_filthy = $possible_states[3];
    echo "<br>The room is now $room_is_filthy";

} else if ($room_is_filthy == "clean") {

    echo "This room is already clean.";

} else if ($room_is_filthy == "immaculate") {

    echo "Are you living in a museum ?";
}

function cleanup_room()
{
    echo "<br>Cleaning process ongoing....";
}

echo "<br><br><hr>";

// 2. "Different greetings according to time" Exercise

echo "<br>";

$now = date("h");

// Test the value of $now and display the right message according to the specifications.

if ($now >= 5 and $now < 9) {
    echo "Good morning !";
} else if ($now >= 9 and $now < 12) {
    echo "Good day !";
} else if ($now >= 12 and $now < 16) {
    echo "Good afternoon !";
} else if ($now >= 16 and $now < 21) {
    echo "Good evening !";
} else if ($now >= 21 or $now < 5) {
    echo "Good night !";
}

echo "<br><br><hr>";

// 3. "Different greetings according to age" Exercise

echo "<br>";


if (isset($_GET['age'])) {
// Form processing
    if ($_GET['age'] < 12) {

        if ($_GET['language'] == "yes") {
            if ($_GET['gender'] == 'female') {
                echo "Hello miss kiddo!";
            } else if ($_GET['gender'] == 'male') {
                echo "Hello mister kiddo!";
            } else {
                echo "Hello kiddo!";
            }
        } else if ($_GET['language'] == "no") {
            if ($_GET['gender'] == 'female') {
                echo "Aloha miss kiddo!";
            } else if ($_GET['gender'] == 'male') {
                echo "Aloha mister kiddo!";
            } else {
                echo "Aloha kiddo!";
            }
        }


    } else if ($_GET['age'] >= 12 and $_GET['age'] < 18) {

        if ($_GET['language'] == "yes") {
            if ($_GET['gender'] == 'female') {
                echo "Hello miss Teenager !";
            } else if ($_GET['gender'] == 'male') {
                echo "Hello mister Teenager !";
            } else {
                echo "Hello Teenager !";
            }
        } else if ($_GET['language'] == "no") {
            if ($_GET['gender'] == 'female') {
                echo "Aloha miss Teenager !";
            } else if ($_GET['gender'] == 'male') {
                echo "Aloha mister Teenager !";
            } else {
                echo "Aloha Teenager !";
            }
        }

    } else if ($_GET['age'] >= 18 and $_GET['age'] < 115) {
        if ($_GET['language'] == "yes") {
            if ($_GET['gender'] == 'female') {
                echo "Hello miss adult !";
            } else if ($_GET['gender'] == 'male') {
                echo "Hello mister adult !";
            } else {
                echo "Hello adult !";
            }
        } else if ($_GET['language'] == "no") {
            if ($_GET['gender'] == 'female') {
                echo "Aloha miss Adult !";
            } else if ($_GET['gender'] == 'male') {
                echo "Aloha mister Adult !";
            } else {
                echo "Aloha Adult !";
            }
        }

    } else if ($_GET['age'] >= 115) {
        echo "Wow! Still alive ? Are you a robot, like me ? Can I hug you ?";
    }
}

echo "<br>";

?>

<!--Form-->
<form method="get" action="conditions.php">
    <label for="age"></label>

    <input type="text" name="age" placeholder="Your age" required>
    <input type="submit" name="submit" value="Greet me now">

    <br>

    <input type="radio" name="gender" value="male" id="male">
    <label for="male">Male</label>

    <br>

    <input type="radio" name="gender" value="female" id="female">
    <label for="female">Female</label>

    <br>
    <br>

    <p>Do you speak English ? :</p>
    <input type="radio" name="language" value="yes" id="yes">
    <label for="yes">Yes</label>

    <br>

    <input type="radio" name="language" value="no" id="no">
    <label for="no">No</label>

</form>

<?php

echo "<br><br><hr>";

// 6. The Girl Soccer Team
echo "<br>";

if (isset($_GET['name'])) {
    if ($_GET['age_soccer'] >= 21 and $_GET['age_soccer'] <= 40 and $_GET['gender_soccer'] == 'female') {
        echo $_GET['name'] . ", welcome to the team !";
    } else {
        echo "Sorry " . $_GET['name'] . ", you dont fit the criteria.";
    }
}

?>

<form method="get" action="conditions.php">

    <label for="name"></label>

    <input type="text" name="name" placeholder="Your name" required>


    <br>

    <label for="age"></label>

    <input type="text" name="age_soccer" placeholder="Your age" required>


    <br>

    <input type="radio" name="gender_soccer" value="male" id="male_soccer">
    <label for="male_soccer">Male</label>

    <br>

    <input type="radio" name="gender_soccer" value="female" id="female_soccer">
    <label for="female_soccer">Female</label>

    <br>

    <input type="submit" name="submit_request" value="submit">

</form>

<?php

echo "<br><br><hr>";

// 8. School sucks!

echo "<br>";

if (isset($_GET['grade'])) {
    if ($_GET['grade'] < 4) {
        echo "This work is really bad. This kid needs help. ";
    } else if ($_GET['grade'] >= 4 and $_GET['grade'] <= 9) {
        echo "This is not sufficient. More studying is required.";
    } else if ($_GET['grade'] == 10) {
        echo "barely enough !";
    } else if ($_GET['grade'] == 11 or $_GET['grade'] == 12 or $_GET['grade'] == 13 or $_GET['grade'] == 14) {
        echo "Not bad!";
    } else if ($_GET['grade'] >= 15 and $_GET['grade'] <= 18) {
        echo "Bravo, bravissimo!";
    } else if ($_GET['grade'] == 19 or $_GET['grade'] == 20) {
        echo "Too good to be true : confront the cheater!";
    }
}
echo "<br>"
?>

<form method="get" action="conditions.php">

    <label for="grade"></label>
    <input type="text" name="grade" placeholder="Student's grade." required>
    <input type="submit" name="submit_grade" value="Submit Grade">
</form>
