<?php

    require_once('../app/models/CategoryModel.php');

//    require_once ('../app/models/User.php');
    class CategoryController
    {
        private CategoryModel $categoryModel;

        public function __construct()
        {
            $this->categoryModel = new CategoryModel();
        }

        public function index(): void
        {
//            echo "hihi";
            $theLoai = $this->categoryModel->getAllTheLoai();
//            echo "<pre>";
//            print_r($theLoai);
//            echo "<pre>";
            require_once('../app/views/category/index.php');
        }

        public function add() : void
        {
            if (isset($_POST['btnAdd'])) {
                $categoryName = $_POST['categoryName'];
                $this->categoryModel->addCategory($categoryName);
            }
            require_once('../app/views/category/add_category.php');
        }
        public function delete() : void {
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                $this->categoryModel->removeCategoryById($id);
            }
        }
        public function edit() : void {
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                $categoryName = $this->categoryModel->getCategoryName($id);
                if (isset($_POST['btnEdit'])) {
                    $categoryNameNew = $_POST['categoryName'];
                    if ($categoryNameNew == $categoryName) {
                        header('Location: ?c=category&a=edit&id=' . $id . '&noti=Vui lòng nhập tên muốn thay đổi');
//                        echo "hihi";
                    }
                    else {
                        $this->categoryModel->editCategoryName($id, $categoryNameNew, $categoryName);
                    }
//                    echo "Old Name: " . $categoryName . "</br>";
//                    echo "New Name: " . $categoryNameNew . "</br>";
                }
            }
            require_once ('../app/views/category/edit_category.php');
        }
    }