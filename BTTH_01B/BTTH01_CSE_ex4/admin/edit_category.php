<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Category</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/all.min.css">
</head>
<body>
<div class="container-fluid">
    <!--        header-->
    <?php
        include('./includes/header.php')
    ?>
    <!--        end header-->

    <div class="row my-5">
        <div class="col-10 mx-auto">
            <div class="row">
                <h3 class="text-uppercase fw-bold text-center">Sửa thông tin thể loại</h3>
            </div>
            <div class="row my-4">
                <div class="input-group col">
                    <span class="input-group-text">Mã thể loại</span>
                    <input type="text" class="form-control">
                </div>
            </div>
            <div class="row mb-4">
                <div class="input-group col">
                    <span class="input-group-text">Tên thể loại</span>
                    <input type="text" class="form-control">
                </div>
            </div>
            <div class="row">
                <div class="d-flex justify-content-end gap-3">
                    <button class="btn btn-success">Lưu lại</button>
                    <a href="./category.php" class="btn btn-warning">Quay lại</a>
                </div>
            </div>
        </div>
    </div>

    <!--        footer-->
    <?php
        include('../assets/include/footer.php')
    ?>
    <!--        end footer-->
</div>
<script src="../assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>