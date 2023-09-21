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

        <div class="row main-content">
            <div class="col-9 d-block my-5 mx-auto">
                <div class="row mb-3">
                    <div class="col-4 p-0">
                       <a href="./add_category.php" class="btn btn-success">Thêm mới</a>
                    </div>
                </div>
                <div class="row">
                    <table class="col">
                        <tr>
                            <th>#</th>
                            <th>Tên thể loại</th>
                            <th>Sửa</th>
                            <th>Xóa</th>
                        </tr>
                        <?php
                            for($i = 0; $i < 3; $i++) {
                                ?>
                                <tr>
                                    <th><?= $i+1 ?></th>
                                    <td>Nhạc <?= $i+1 ?></td>
                                    <td>
                                        <a href="./edit_category.php"><i class="fa-regular fa-pen-to-square"></i></a>
                                    </td>
                                    <td>
                                        <a href="#"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                    </td>
                                </tr>
                                <?php
                            }
                        ?>
                    </table>
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