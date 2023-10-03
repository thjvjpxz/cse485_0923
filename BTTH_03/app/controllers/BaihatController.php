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
        public function edit() : void {
            $song = $this->baiHatModel->getSongById($_GET['id']);
            $category = [
                'id' => $song['idTheLoai'],
                'tenTheLoai' => $song['tenTheLoai']
            ];
            $category_list = $this->baiHatModel->getAllCategoryDivCur($category['id']);
            if (isset($_POST['btnEdit'])) {
                $songNew = $_POST['songName'];
                $singerNew = $_POST['singerName'];
                $categoryNew = $_POST['categoryName'];
                if ($songNew == $song['tenBaiHat'] && $singerNew == $song['caSi'] && $categoryNew == $category['id']) {
                    header('Location: ?a=edit&id=' . $song['id'] . '&noti=Vui lòng nhập thông tin muốn sửa');
                    exit();
                }
            }
//            echo "<pre>";
//            print_r($song);
//            echo "</pre>";
            require_once ('../app/views/baihat/edit_song.php');
        }
    }