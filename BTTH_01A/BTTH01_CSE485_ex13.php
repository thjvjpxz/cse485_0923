<?php
    $numbers = [78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72,
        65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73];
    $sum = array_sum($numbers);
    $ava = $sum / count($numbers);
    echo "Giá trị trung bình: " . $ava . "<br>";
    echo "Các số lớn hơn giá trị trung bình là:";
    foreach ($numbers as $item) {
        if ($item > $ava)
            echo " $item";
    }
    echo "<br>Các số nhỏ hơn giá trị trung bình là:";
    foreach($numbers as $item)
        if ($item <= $ava)
            echo " $item";