<?php
    include ('../app/views/includes/askLogin.php');
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>W3CMS</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./bootstrap-icons/bootstrap-icons.min.css">
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
<div class="container-fluid vh-100">
    <div class="row h-100 bg-secondary-subtle">
        <!--            Start aside-->
        <?php
            require_once ('../app/views/includes/aside.php');
        ?>
        <!--            End aside-->
        <!--            Start main content-->
        <section class="col-md-10 pt-3 px-5">
            <!--                Header-->
            <?php
                require_once ('../app/views/includes/header.php');
            ?>
            <!--                End header-->
            <article class="row main-content h-100">
                <div class="mt-5 pt-5">
                    <p class="fs-1 fw-bold text-center">Sửa thể loại</p>
                    <form action="" class="col-md-4 mx-auto" method="post">
                        <label for="categoryName" class="form-label mt-2">Tên thể loại:</label>
                        <input type="text" class="form-control mb-3" id="categoryName" name="categoryName" value="<?= $categoryName ?>">
                        <div class="">
                                <?php
                                    if (isset($_GET['noti'])) {
                                ?>
                                        <p class="rounded p-2 py-1 bg-danger text-white"><?= $_GET['noti'] ?></p>
                                <?php
                                    }
                                ?>
                        </div>
                        <div class="d-flex justify-content-center gap-3">
                            <button class="btn btn-primary" type="submit" name="btnEdit">Lưu</button>
                            <a href="?c=theloai" class="btn btn-secondary">Quay lại</a>
                        </div>
                    </form>
                </div>
            </article>
        </section>
        <!--            End main content-->
    </div>
</div>

<script src="./js/bootstrap.bundle.min.js"></script>
<script src="./js/jquery.min.js"></script>
</body>
</html>