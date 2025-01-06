<form method="get" action="excuse.php">

    <br>

    <label for="name">Name of the child :</label>
    <input type="text" id="name" name="name" required>

    <br>

    <h4>Gender :</h4>
    <input type="radio" id="gender_male" name="gender" value="male" required>
    <label for="gender_male">Male</label>

    <br>

    <input type="radio" id="gender_female" name="gender" value="female">
    <label for="gender_female">Female</label>

    <br>
    <br>

    <label for="teacher">Name of the Teacher :</label>
    <input type="text" id="teacher" name="teacher" required>

    <br>

    <h4>Reason :</h4>

    <input type="radio" id="reason_illness" name="reason" value="illness">
    <label for="reason_illness">Illness</label>

    <br>

    <input type="radio" id="reason_death" name="reason" value="death" required>
    <label for="reason_death">Death of beloved pet or family member</label>

    <br>

    <input type="radio" id="reason_activity" name="reason" value="activity">
    <label for="reason_activity">Significant extra-curricular activity</label>

    <br>

    <input type="radio" id="reason_other" name="reason" value="other">
    <label for="reason_other">Any other excuse of your choice</label>

    <br>
    <br>

    <input type="submit" name="submit" value="Generate Excuse">

</form>

<h3>Result :</h3>

<?php

$date = date('l jS \of F Y');

if (isset($_GET['name'])) {
    if ($_GET['gender'] == 'female' or $_GET['gender'] = 'male') {
        switch ($_GET['reason']) {
            case 'illness' :
                echo "Dear " . ($_GET['teacher']) . ",
                
                <br><br>

Please excuse my child, " . $_GET['name'] . ", from school on " . $date . ", as they were unwell due to illness. Thank you for your understanding.

<br><br>

Sincerely,
<br><br>
.$date";
                break;
            case 'death' :
                echo "Respected " . ($_GET['teacher']) . ", 

<br><br>

I am writing to inform you that our child " . ($_GET['name']) . ", shall not be able to attend school next week due to the unfortunate passing of a beloved family member. We are currently dealing with this difficult time and appreciate your understanding.

<br><br>

We would be grateful if you could share next week’s study plan so we can ensure that " . ($_GET['name']) . " stays up to date with their studies upon our return.

<br><br>

Sincerely,

<br><br>
.$date";
                break;
            case 'activity' :
                echo "Respected " . ($_GET['teacher']) . ", 

<br><br>

I am writing to inform you that our child " . ($_GET['name']) . ", shall not be able to attend school next week. We will be traveling to France for a week owing to a family event, therefore kindly excuse " . ($_GET['name']) . ".

<br><br>

We would appreciate it if you can share next week’s study plan so we can cover the course as soon as we return.

<br><br>

Sincerely.

<br><br>" . $date;
                break;
            case 'other' :
                echo "Respected " . ($_GET['teacher']) . ", 

<br><br>

I am writing to inform you that our child " . ($_GET['name']) . ", was unable to attend school yesterday due to an unexpected encounter with a family of friendly squirrels. 

<br><br>

While playing in the backyard, " . ($_GET['name']) . " discovered that the squirrels had organized a mini talent show, complete with acorn juggling and tree climbing competitions. It was a once-in-a-lifetime opportunity that simply could not be missed!

<br><br>

We appreciate your understanding of this unusual circumstance and kindly ask for any assignments or notes from the day so that " . ($_GET['name']) . " can catch up on what was missed.

<br><br>

Sincerely,

<br><br>
.$date";
                break;
        }
    }
}
?>