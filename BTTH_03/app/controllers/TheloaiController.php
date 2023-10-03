<?php

    require_once('../app/models/TheLoaiModel.php');

//    require_once ('../app/models/User.php');
    class TheloaiController
    {
        private TheLoaiModel $theLoaiModel;

        public function __construct()
        {
            $this->theLoaiModel = new TheLoaiModel();
        }

        public function index(): void
        {
//            echo "hihi";
            $theLoai = $this->theLoaiModel->getAllTheLoai();
//            echo "<pre>";
//            print_r($theLoai);
//            echo "<pre>";
            require_once('../app/views/theloai/index.php');
        }

        public function add() : void
        {
            if (isset($_POST['btnAdd'])) {
                $categoryName = $_POST['categoryName'];
                $this->theLoaiModel->addCategory($categoryName);
            }
            require_once('../app/views/theloai/add_category.php');
        }
        public function delete() : void {
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                $this->theLoaiModel->removeCategoryById($id);
            }
        }
    }