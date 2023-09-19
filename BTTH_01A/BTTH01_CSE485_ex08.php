<?php
    $array = ['programming', 'php', 'basic', 'dev', 'is', 'program is PHP'];
    $lenMax = strlen($array[0]);
    $lenMin = strlen($array[0]);
    for ($i = 1; $i < count($array); $i++) {
        if ($lenMin > strlen($array[$i]))
            $lenMin = strlen($array[$i]);
        if ($lenMax < strlen($array[$i]))
            $lenMax = strlen($array[$i]);
    }
    $resMax = "";
    $resMin = "";
    for ($i = 0; $i < count($array); $i++) {
        if ($lenMax == strlen($array[$i]))
            $resMax = $array[$i];
        if ($lenMin == strlen($array[$i]))
            $resMin = $array[$i];

    }
    echo "Chuỗi lớn nhất là " .$resMax. ", độ dài = " .$lenMax. "<br>";
    echo "Chuỗi nhỏ nhất là " .$resMin. ", độ dài = " .$lenMin. "<br>";
