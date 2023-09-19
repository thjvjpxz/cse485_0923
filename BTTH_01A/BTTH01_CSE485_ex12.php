<?php
    $numbers = [
        'key1' => 12,
        'key2' => 30,
        'key3' => 4,'key4' => -123,
        'key5' => 1234,
        'key6' => -12565,
    ];
    $firstKey = reset($numbers);
    $lastKey = end($numbers);
    echo "Phần tử đầu tiên: $firstKey <br>";
    echo "Phần tử cuối cùng: $lastKey <br>";
    $soLon = $soNho = $firstKey;
    $summ = 0;
    foreach ($numbers as $key => $val) {
        if ($soLon < $val)
            $soLon = $val;
        if ($soNho > $val)
            $soNho = $val;
        $summ += $val;
    }
    echo "Số lớn nhất: $soLon <br>Số Nhỏ nhất: $soNho <br>";
    echo "Sắp xếp chiều tăng của value:";
    // Sap xep tang dan theo value
    asort($numbers);
    var_dump($numbers);
    echo "<br>";
    // Sap xep giam dan theo value
    arsort($numbers);
    var_dump($numbers);
    echo "<br>";
    // Sap xep tang dan theo key
    ksort($numbers);
    var_dump($numbers);
    echo "<br>";
    // Sap xep giam dan theo key
    krsort($numbers);
    var_dump($numbers);
    echo "<br>";