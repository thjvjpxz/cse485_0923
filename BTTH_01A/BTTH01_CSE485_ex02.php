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
<?php
    $color = ['red', 'blue', 'orange', 'white'];

?>
    <p>
        Màu <span style="color:<?=$color[0];?>">đỏ</span> là màu yêu thích của Anh, <span style="color:<?= $color[3]?>">trắng</span> là màu yêu thích của Sơn,
        <span style="color:<?=$color[2];?>">cam</span> là màu yêu thích của Thắng, còn màu yêu thích của tôi là màu <span style="color:<?=$color[3]?>">trắng</span>
    </p>
</body>
</html>