<?php
    $a = [
        'a' => [
            'b' => 0,
            'c' => 1
        ],
        'b' => [
            'e' => 2,
            'o' => [
                'b' => 3
            ]
        ]
    ];
    echo "Gias trị ở key b: ";
    foreach ($a as $key => $value) {
        echo $value['o']['b']; // 3
    }
    echo "<br>";
    echo "Giá trị ở key c: ";
    foreach ($a as $key => $value) {
        echo $value['c'];
    }
    echo "<br>";
    echo "Giá trị ở key a: ";
    print_r($a['a']);