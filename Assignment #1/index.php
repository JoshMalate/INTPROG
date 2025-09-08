<?php
$height = 133; //height is in cm

if ($height >= 121) {
    echo "You can ride the roller coaster!";
}
?>


<?php
$age = 16;

if ($age >= 18) { //Age requirement for a driver's license 
    echo "You can have a driver's license";
} else {
    echo "Sorry, you're too young to have a driver's license";
}
?>    

<?php
$difficulty = "Expert"; //game difficulty

if ($difficulty == "Beginner") {
    echo "A Stroll in the Woods";
} elseif ($difficulty == "Propessional.") {
    echo "The Path of the Champion.";
} elseif ($difficulty == "Expert") {
    echo "Trial of the Gods.";
} else {
    echo "Please choose a difficulty.";
}
?>


<?php
$menu = 3; // customer selects a number from the menu

switch ($menu) {
    case 1:
        echo "You ordered 1pc. chicken joy.";
        break;
    case 2:
        echo "You ordered 1pc. chicken joy w/ Jolly spagetti.";
        break;
    case 3:
        echo "You ordered 1pc. Burger Steak.";
        break;
    case 4:
        echo "You ordered Coke Float.";
        break;
    default:
        echo "Invalid choice. Please select again.";
}
?>
