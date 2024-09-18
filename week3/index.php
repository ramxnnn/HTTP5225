<?php

$currentHour = rand(0, 23);

if ($currentHour >= 5 && $currentHour < 9) {
    $meal = "Breakfast: Bananas, Apples, and Oats";
} elseif ($currentHour >= 12 && $currentHour <14) {
    $meal = "Lunch: Fish, Chicken and Vegetables";
} elseif ($currentHour >= 19 && $currentHour < 21) {
    $meal = "Dinner: Steak, Carrots, and Broccoli";
} else {
    $meal = "The animals are not being fed at this time";
}

echo $meal;
?>