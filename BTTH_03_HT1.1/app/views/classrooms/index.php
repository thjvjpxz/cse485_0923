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
<!--            Table student data-->
            <div class="col-md-8 mt-5 mx-auto d-flex flex-column">
                <button class="btn btn-primary ms-auto">Add class</button>
                <h5 class="text-center mb-3 fs-3">Class list</h5>
                <table class="table-bordered table">
                    <thead>
                        <tr>
                            <th class="col-2 text-center">#</th>
                            <th class="col-6">Class name</th>
                            <th class="col-2 text-center">Edit</th>
                            <th class="col-2 text-center">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        foreach ($classList as $class) {
                    ?>
                            <tr>
                                <th class="text-center"><?= $class['id'] ?></th>
                                <td><?= $class['tenLop'] ?></td>
                                <td class="text-center"><a href="?a=edit&id=<?= $class['id'] ?>"><i class="bi bi-pencil"></i></a></td>
                                <td class="text-center">
                                    <!-- Button trigger modal -->
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#i<?= $class['id'] ?>">
                                        <i class="bi bi-trash"></i>
                                    </a>

                                    <!-- Modal -->
                                    <div class="modal fade" id="i<?= $class['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Confirm delete class</h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    Are you sure ?
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    <a class="btn btn-primary" href="?a=delete&id=<?= $class['id'] ?>">Save</a>
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
                <?php
                    if (isset($_GET['s'])) {
                ?>
                <div>
                    <p class="p-2 rounded text-white <?= $_GET['s'] == 't' ? "bg-success" : "bg-danger" ?>"><?= $_GET['noti'] ?></p>
                </div>
                <?php
                    }
                ?>
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