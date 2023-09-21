<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>index</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
</head>
<body>
    <div class="container-fluid">
<!--        header-->
        <?php
            include('./includes/header.php')
        ?>
<!--        End header-->
        <div class="row my-5 main-conten justify-content-center">
                <?php
                    $title = ['Người dùng' => 110, 'Thể loại' => 10, 'Tác giả' => 20, 'Bài viết' => 110];
                    foreach ($title as $key => $val) {
                ?>
            <div class="col-2 px-4 py-2 me-4 text-center border rounded">
                <span class="text-primary"><?= $key ?></span>
                <br>
                <span class="fs-3"><?= $val ?></span>
            </div>
                <?php
                    }
                ?>
        </div>
<!--        Footer-->
        <?php
            include('../assets/include/footer.php')
        ?>
    </div>
    <script src="../assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>