<?php 

$day = "Wednesday";

switch ($day) {
    case "Monday":
        echo "It's the start of the week.";
        break;

    case "Tuesday":
    case "Wednesday":
    case "Thursday":
        echo "It's a workday.";
        break;

    case "Friday":
        echo "It's almost the weekend!";
        break;

    case "Saturday":
    case "Sunday":
        echo "It's the weekend.";
        break;

    default:
        echo "Invalid day.";
}


?>