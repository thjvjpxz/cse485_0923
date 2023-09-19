<?php

    $arr1 = ['1', 'b', 'c', 'e'];
    $arr1 = array_map('strtoupper', $arr1);

    $arr2 = ['a', 0, null, false];
    $arr2 = array_map('strtoupper', $arr2);

    print_r($arr1);
    echo "<br>";
    print_r($arr2);
