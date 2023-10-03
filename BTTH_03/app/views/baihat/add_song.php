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
    <title>BaiHat</title>
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
                <form method="POST" action="" class="col-md-4 d-flex flex-column mt-5 pt-5 mx-auto">
                    <p class="fs-1 fw-bold text-center">Thêm bài hát</p>
                    <label for="songName" class="form-label">Tên bài hát</label>
                    <input type="text" id="songName" name="songName" class="form-control" placeholder="Nhập tên bài hát" required>
                    <label for="singerName" class="form-label mt-2">Tên ca sĩ</label>
                    <input type="text" id="singerName" name="singerName" class="form-control" placeholder="Nhập tên ca sĩ" required>
                    <label for="categoryName" class="form-label mt-2">Thể loại</label>
                    <select name="categoryName" id="categoryName" class="form-select" required>
                        <option value="" selected disabled>Chọn thể loại</option>
                        <?php
                            foreach ($category_list as $category) {

                        ?>
                                <option value="<?= $category['id'] ?>"><?= $category['tenTheLoai'] ?></option>
                        <?php
                            }
                        ?>

                    </select>
                    <div class="mt-3">
                        <?php
                            if (isset($_GET['noti']) && $_GET['s'] == 'f') {
                        ?>
                                <p class="p-2 text-white py-1 rounded bg-danger"><?= $_GET['noti'] ?></p>
                        <?php
                            }
                        ?>
                    </div>
                    <div class="d-flex justify-content-center mt-2 gap-3">
                        <button class="btn btn-primary" type="submit" name="btnAdd">Lưu</button>
                        <a href="?c=baihat" class="btn btn-secondary">Quay lại</a>
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