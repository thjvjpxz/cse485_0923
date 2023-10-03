<?php
    require_once ('../app/models/BaiHatModel.php');
//    require_once ('../app/models/User.php');
    class BaihatController
    {
        private BaiHatModel $baiHatModel;
        public function __construct()
        {
            $this->baiHatModel = new BaiHatModel();
        }

        public function index() : void {

            $baiHat = $this->baiHatModel->getAllBaiHat();
//            echo "<pre>";
//            print_r($baiHat);
//            echo "<pre>";
            require_once ('../app/views/baihat/index.php');
        }

        public function delete() : void {
            if (isset($_GET['id'])) {
                $id = $_GET['id'];

                $res = $this->baiHatModel->deleteUserById($id);
                $noti = "Song has been successfully deleted";
                if (!$res) {
                    $noti = "Song not exist or has been deleted";
                }
                header("Location: .?c=baihat&i=$id&noti=$noti");
            }
            require_once ('../app/views/index.php');

        }

        public function add() : void {
            if (isset($_POST['btnAdd'])) {
                $uname = $_POST['uname'];
                $pass = $_POST['pass'];
                $email = $_POST['email'];
                if ($pass != $_POST['re-pass']) {
                    header('Location: .?c=user&a=add&err=Password and Re-password must be the same');
                    return;
                }
                $new_User = new User($uname, $pass, $email);
                $noti = $this->userModel->createUser($new_User);
//                echo "$noti";
                header('Location: .?c=user&a=add&err='.$noti);
            }
            require_once ('../app/views/baihat/add_category.php');
        }
//
//        public function edit() : void {
//            if (isset($_GET['id'])) {
//                $id = $_GET['id'];
//                $user_old = $this->userModel->getUserById($id);
//                if (isset($_POST['btnEdit'])) {
//                    $user_new = [
//                        'id' => $id,
//                        'uname' => $_POST['uname'],
//                        'email' => $_POST['email']
//                    ];
//                    if ($user_new['uname'] == $user_old['uname'] && $user_new['email'] == $user_old['email']) {
//                        header("Location: .?c=user&a=edit&id=$id&err=Please enter username or email you want to change");
//                    }
//                    else {
//                        $noti = $this->userModel->editUserById($id, $user_new['uname'], $user_new['email']);
//                        header("Location: .?c=user&a=edit&id=$id&err=$noti");
//                    }
////                    echo  ($user_new['uname'] === $user_old['uname'] && $user_new['emai'] === $user_old['email']) ? "True" : "False";
////                    echo "<br>";
////                    echo "<pre>";
////                    print_r($user_old);
////                    echo "</pre>";
////                    echo "<pre>";
////                    print_r($user_new);
////                    echo "</pre>";
//                }
//            }
//            require_once ('../app/views/users/edit_category.php');
//        }
    }