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
    <title>Thể loại</title>
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
                <form class="col-4 mx-auto mt-5 pt-5" method="post">
                    <h1 class="text-center">Thêm thể loại</h1>
                    <div class="mb-3">
                        <label for="categoryName" class="form-label">Tên thể loại</label>
                        <input type="text" class="form-control" id="categoryName" name="categoryName">
                    </div>
                    <div class="mt-2 d-flex justify-content-center gap-2">
                        <button type="submit" class="btn btn-primary" name="btnAdd">Lưu</button>
                        <a href="?c=theloai" class="btn btn-secondary">Quay lại</a>
                    </div>
                </form>
            </article>
        </section>
        <!--            End main content-->
    </div>
</div>

<script src="./js/bootstrap.bundle.min.js"></script>
<script src="./js/jquery.min.js"></script>
</body>
</html>