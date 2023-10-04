<?php
    require_once ('../app/models/SongModel.php');
//    require_once ('../app/models/User.php');
    class SongController
    {
        private SongModel $songModel;
        public function __construct()
        {
            $this->songModel = new SongModel();
        }

        public function index() : void {
//            echo "HIHI";
            $baiHat = $this->songModel->getAllSong();
//            echo "<pre>";
//            print_r($baiHat);
//            echo "<pre>";
            require_once ('../app/views/song/index.php');
        }

        public function delete() : void {
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
//
                $this->songModel->deleteSongById($id);
            }
            require_once ('../app/views/song/index.php');

        }

        public function add() : void {
            $category_list = $this->songModel->getAllCategoryName();
//            echo "<pre>";
//            print_r($category_list);
//            echo "</pre>";
            if (isset($_POST['btnAdd'])) {
                $songName = $_POST['songName'];
                $singerName = $_POST['singerName'];
                $categoryId = $_POST['categoryName'];
                $this->songModel->AddSong($songName, $singerName, $categoryId);
            }
            require_once ('../app/views/song/add_song.php');
        }
//
        public function edit() : void {
            $song = $this->songModel->getSongById($_GET['id']);
            $category = [
                'id' => $song['idTheLoai'],
                'tenTheLoai' => $song['tenTheLoai']
            ];
            $category_list = $this->songModel->getAllCategoryDivCur($category['id']);
            if (isset($_POST['btnEdit'])) {
                $songNew = $_POST['songName'];
                $singerNew = $_POST['singerName'];
                $categoryNew = $_POST['categoryName'];
                if ($songNew == $song['tenBaiHat'] && $singerNew == $song['caSi'] && $categoryNew == $category['id']) {
                    header('Location: ?a=edit&id=' . $song['id'] . '&noti=Vui lòng nhập thông tin muốn sửa');
                    exit();
                }
                $this->songModel->editSong($_GET['id'], $songNew, $singerNew, $categoryNew);
            }
//            echo "<pre>";
//            print_r($song);
//            echo "</pre>";
            require_once ('../app/views/song/edit_song.php');
        }
    }