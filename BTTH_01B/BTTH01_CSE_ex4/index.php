<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
</head>
<body>
    <div class="container-fluid vh-100">
        <?php
            include ('./assets/include/header.php');
        ?>
        <div class="w-100 banner">
            <a href="#">
                <img src="./assets/images/banner.png" class="w-100" alt="banner">
            </a>
        </div>
        <div class="main-content my-3">
            <p class="text-uppercase text-center fw-medium text-primary fs-5 mb-3">top bài hát yêu thích</p>
            <div class="mx-2">
                <ul class="row gap-1 flex-nowrap">
                    <li class="col-3 border">
                        <a href="./detail.php">
                            <img src="./assets/images/default.jpg" class="w-100" alt="default">
                            <p class="text-center my-2">Lòng mẹ</p>
                        </a>
                    </li>
                    <li class="col-3 border">
                        <a href="./detail.php">
                            <img src="./assets/images/default.jpg" class="w-100" alt="default">
                            <p class="text-center my-2">Lòng mẹ</p>
                        </a>
                    </li>
                    <li class="col-3 border">
                        <a href="./detail.php">
                            <img src="./assets/images/default.jpg" class="w-100" alt="default">
                            <p class="text-center my-2">Lòng mẹ</p>
                        </a>
                    </li>
                    <li class="col-3 border">
                        <a href="./detail.php">
                            <img src="./assets/images/default.jpg" class="w-100" alt="default">
                            <p class="text-center my-2">Lòng mẹ</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <?php
            include ('./assets/include/footer.php');
        ?>
    </div>
</body>
</html>
