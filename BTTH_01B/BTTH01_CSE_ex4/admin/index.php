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
        <div class="row border-bottom shadow py-3">
            <nav class="navbar navbar-expand-lg bg-body-tertiary">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">Administration</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Trang chủ</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Trang ngoài</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link">Thể loại</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link">Tác giả</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link">Bài viết</a>
                            </li>
                        </ul>
                        <form class="d-flex" role="search">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Search</button>
                        </form>
                    </div>
                </div>
            </nav>
        </div>
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