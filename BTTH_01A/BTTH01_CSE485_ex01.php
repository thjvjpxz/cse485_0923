<?php
    function cal($arr, $phepTinh) {
        $result = 1;
        echo "=";
        if ($phepTinh == '+' || $phepTinh == '-')
            $result = 0;
        for ($i = 0; $i < count($arr); $i++) {
           if ($phepTinh == '+') {
               $result += $arr[$i];
               echo " $arr[$i] +";
           }
           else if ($phepTinh == '*') {
               $result *= $arr[$i];
               echo " $arr[$i] *";
           }
           else if ($phepTinh == '-') {
               $result -= $arr[$i];
               echo " $arr[$i] -";
           }
           else {
               $result /= $arr[$i];
               echo " $arr[$i] /";
           }
           if ($i == count($arr) - 1) {
               echo " $arr[$i] = ";
               break;
           }
        }
        echo "$result";
    }
    $arrs = [2, 5, 6, 9, 2, 5, 6, 12 ,5];
    $plus = 0;
    $sub = 0;
    $div = 1;
    $mul = 1;
    $strNoti0 = "Tổng các phần tử";
    $strNoti1 = "Tích các phần tử";
    $strNoti2 = "Hiệu các phần tử";
    $strNoti3 = "Thương các phần tử";
    ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <td>
                <?= $strNoti0 ?>
            </td>
            <td>
                <?php cal($arrs, '+') ?>
            </td>
        </tr>
        <tr>
            <td>
                <?= $strNoti1 ?>
            </td>
            <td>
                <?php cal($arrs, '*') ?>
            </td>
        </tr>
        <tr>
            <td>
                <?= $strNoti2 ?>
            </td>
            <td>
                <?php cal($arrs, '-') ?>
            </td>
        </tr>
        <tr>
            <td>
                <?= $strNoti3 ?>
            </td>
            <td>
                <?php cal($arrs, '/') ?>
            </td>
        </tr>
    </table>
</body>
</html>