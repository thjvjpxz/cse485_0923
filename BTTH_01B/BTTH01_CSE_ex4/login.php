<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/all.min.css">
</head>
<body>
    <div class="container-fluid vh-100">
        <?php
            include('./assets/include/header.php')
        ?>

            <div class="row my-5">
                <div class="col-6 col-lg-3 rounded mx-auto bg-secondary">
                    <div class="row text-white fw-medium fs-4 ps-4 pt-2">
                        Sign In
                    </div>
                    <div class="row">
                        <form action="" class="pb-4">
                            <label class="input-group p-4 pb-2">
                                <span class="input-group-text px-3" id="basic-addon1"><i class="fa fa-user"></i></span>
                                <input type="text" class="form-control p-2" placeholder="username">
                            </label>
                            <label class="input-group p-4 pt-2 pb-0">
                                <span class="input-group-text px-3" id="basic-addon1"><i class="fa fa-key"></i></span>
                                <input type="password" class="form-control p-2" placeholder="password">
                            </label>
                            <div class="input-group px-4 py-3">
                                <input type="checkbox" id="checkk" class="form-check-input rounded-0 me-1 h4">
                                <label for="checkk" class="form-check-label text-white">Remember me</label>
                            </div>
                            <button class="btn btn-warning px-4 py-1 ms-auto d-block me-4">Login</button>
                        </form>
                    </div>
                    <div class="row">
                        <div class="row">
                            <div class="col text-center">
                                Don't have an account?
                                <a href="#" class="text-warning">Sign Up</a>
                            </div>
                        </div>
                        <div class="row pb-2">
                            <div class="col text-center">
                                <a href="#" class="text-warning">Forgot your password?</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        <?php
            include('./assets/include/footer.php')
        ?>
    </div>
</body>
</html>