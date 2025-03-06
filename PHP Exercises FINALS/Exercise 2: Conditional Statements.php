<?php

echo "Please enter a number: ";


$number = trim(fgets(STDIN));


if (!is_numeric($number)) {
    echo "Please enter a valid number.\n";
    exit();
}


if ($number > 0) {
    echo "$number is positive.\n";
} elseif ($number < 0) {
    echo "$number is negative.\n";
} else {
    echo "$number is zero.\n";
}


if ($number % 2 == 0) {
    echo "$number is even.\n";
} else {
    echo "$number is odd.\n";
}
?>
