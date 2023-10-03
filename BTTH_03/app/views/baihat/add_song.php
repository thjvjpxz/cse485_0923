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
                    <p class="fs-1 fw-bold text-center">Them bai hat</p>
                    <?php
                        if (isset($_GET['err'])) {
                            if ($_GET['err'] === "success") {
                                ?>
                                <div class="text-white bg-success mb-2 ps-3 py-1 rounded">Added user successfully</div>
                                <?php
                            } else {
                                ?>
                                <div class="text-white bg-danger mb-2 ps-3 py-1 rounded"><?= $_GET['err']; ?></div>
                                <?php
                            }
                        }
                    ?>
                    <label for="uname" class="input-group mb-2">
                        <span class="input-group-text"><i class="bi bi-person"></i></span>
                        <input type="text" id="uname" name="uname" class="form-control" placeholder="Nhap ten bai hat" required>
                    </label>
<!--                    <div class="text-white bg-danger mb-2 ps-3 py-1 rounded">Enter</div>-->
                    <label for="email" class="input-group mb-2">
                        <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                        <input type="text" id="email" name="email" class="form-control" placeholder="Nhap ten ca si" required>

                    </label>
                   <label for="pass" class="input-group mb-2">
                        <span class="input-group-text"><i class="bi bi-lock"></i></span>
                       <input type="number" class="form-control" placeholder="Ma the loai">
                   </label>

                    <div class="d-flex justify-content-center gap-3">
                        <button class="btn btn-primary" type="submit" name="btnAdd">Save</button>
                        <a href="?c=baihat" class="btn btn-secondary">Cancel</a>
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