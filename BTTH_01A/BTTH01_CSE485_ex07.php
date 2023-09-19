<?php
    $array = [12, 5, 200, 10, 125, 60, 90, 345, -123, 100, -125, 0];
    for ($i = 0; $i < count($array); $i++) {
        if ($array[$i] >= 100 && $array[$i] <= 200 && $array[$i] % 5 == 0) {
            echo $array[$i] . "<br>";
        }
    }
