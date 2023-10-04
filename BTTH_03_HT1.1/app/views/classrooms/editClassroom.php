<!doctype html>
<html lang="en">

<head>
    <?php require_once (APP_ROOT . '/app/views/layouts/head.php') ?>
    <title>Class</title>
</head>

<body class="bg-dark">
<div class="container vh-100">
    <!--        Header-->
    <?php require_once(APP_ROOT . '/app/views/layouts/header.php') ?>
    <!--        End header-->
    <!--        Content-->
    <div class="row h-100 bg-body-tertiary pt-2">
        <div class="col-md-4 mx-auto mt-5">
            <h3 class="text-center mb-3">Edit class</h3>
            <form action="" method="post">
                <label for="id" class="form-label">ID:</label>
                <input type="text" id="id" name="id" class="form-control bg-dark-subtle" value="<?= $_GET['id'] ?>" readonly>
                <label for="className" class="form-label mt-3">Class name:</label>
                <input type="text" id="className" name="className" class="form-control" value="<?= $classNameOld ?>">
                <?php
                    if (isset($_GET['noti'])) {
                ?>
                <div class="mt-3">
                    <p class="p-2 rounded text-white bg-danger"><?= $_GET['noti'] ?></p>
                </div>
                <?php
                    }
                ?>
                <div class="d-flex gap-3 justify-content-center mt-3">
                    <button class="btn btn-success" type="submit" name="btnEdit">Save</button>
                    <a href="." class="btn btn-secondary">Cancel</a>
                </div>
            </form>
        </div>
    </div>
    <!--        End content-->
    <!--        Footer-->
    <?php require_once (APP_ROOT . '/app/views/layouts/footer.php') ?>
    <!--        End footer-->
</div>
<script src="./js/bootstrap.bundle.min.js"></script>
</body>
</html>