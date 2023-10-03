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
            $category_list = $this->baiHatModel->getAllCategoryName();
//            echo "<pre>";
//            print_r($category_list);
//            echo "</pre>";
            if (isset($_POST['btnAdd'])) {
                $songName = $_POST['songName'];
                $singerName = $_POST['singerName'];
                $categoryId = $_POST['categoryName'];
                $this->baiHatModel->AddSong($songName, $singerName, $categoryId);
            }
            require_once ('../app/views/baihat/add_song.php');
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