<?php
    $array1 = [
        [77, 87],
        [23, 45]
    ];
    $array2 = [
        'giá trị 1', 'giá trị 2'
    ];
    $mergeArr = [];
    foreach ($array1 as $key => $val) {
        $mergeArr[$key] = array_merge([$array2[$key]], $val);
    }
    print_r($mergeArr);