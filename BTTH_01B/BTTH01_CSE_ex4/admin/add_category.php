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

    <div class="main-content my-5 row">
        <div class="col-10 mx-auto">
            <div class="row">
                <div class="col-5 mx-auto d-block">
                    <h3 class="text-uppercase fw-bold">Thêm mới thể loại</h3>
                </div>
            </div>
            <div class="row">
                <label for="" class="col input-group">
                    <input type="text" placeholder="Tên thể loại" class="form-control">
                </label>
            </div>
            <div class="row pt-4">
                    <div class="d-flex justify-content-end gap-3">
                        <button class="btn btn-success">Thêm</button>
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