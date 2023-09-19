<?php
    $arr1 = ['1', 'B', 'C', 'E'];
    $arr1 = array_map('strtolower', $arr1);

    $arr2 = ['a', 0, null, false];
    $arr2 = array_map('strtolower', $arr2);

    print_r($arr1);
    echo "<br>";
    print_r($arr2);
