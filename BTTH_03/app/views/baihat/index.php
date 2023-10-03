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
                <div class="col rounded-2 p-3 ps-4 mt-5">
                    <div class="mb-3 d-flex">
                        <a href="?c=baihat&a=add" class="btn btn-primary ms-auto">Thêm bài hát</a>
                    </div>
                    <?php
                        if (isset($_GET['noti'])) {
                            ?>
                            <div class="mb-3">
                                <p class="bg-success rounded py-2 px-3 fs-5 text-white"><?= $_GET['noti']; ?> </p>
                            </div>
                            <?php
                        }
                    ?>
<!--                    Table data-->
                    <table class="table table-bordered">

                        <thead>
                            <tr>
                                <th class="col text-center">#</th>
                                <th class="col-4">Tên bài hát</th>
                                <th class="col-4">Tác giả</th>
                                <th class="col text-center">Sửa</th>
                                <th class="col text-center">Xóa</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            foreach ($baiHat as $item) {
                                ?>
                                <tr>
                                    <td class="text-center"><?=$item['id']?></td>
                                    <td><?=$item['tenBaiHat']?></td>
                                    <td><?=$item['caSi']?></td>
                                    <td class="text-center"><a href="#"><i class="bi bi-pencil"></i></a></td>
                                    <td class="text-center">
                                        <!--                                            Button delete-->
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#i<?= $item['id']; ?>"><i class="bi bi-trash"></i></a>
                                        <!--                                            Confirm delete-->
                                        <div class="modal fade" id="i<?= $item['id']; ?>" aria-labelledby="confirmDelete">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="confirmDelete">Confirm delete</h5>
                                                        <button data-bs-dismiss="modal" aria-label="Close" class="btn-close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <h5>ARE YOU SURE ?</h5>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                        <a href="?a=delete&id=<?= $item['id']; ?>" class="btn btn-primary">OK</a>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                        <?php
                            }
                        ?>
                        </tbody>
                    </table>
<!--                    End table data-->
<!--                    Pagination-->
                    <nav class="d-flex">
                        <ul class="pagination ms-auto">
                        </ul>
                    </nav>
                </div>
            </article>
        </section>
        <!--            End main content-->
    </div>
</div>
<script src="./js/bootstrap.bundle.min.js"></script>
</body>
</html>