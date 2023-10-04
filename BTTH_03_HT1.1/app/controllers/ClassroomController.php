<?php
    require_once (APP_ROOT . '/app/services/ClassroomService.php');
    class ClassroomController
    {
        private $classroomService;

        public function __construct()
        {
            $this->classroomService = new ClassroomService();
        }

        public function index() {
            $classList = $this->classroomService->getAll();
            require_once (APP_ROOT . '/app/views/classrooms/index.php');
        }

        public function delete() {
            if (isset($_GET['id'])) {
                $this->classroomService->delete($_GET['id']);
            }
        }

        public function edit() {
            $classNameOld = $this->classroomService->getClassNameById($_GET['id']);
            if (isset($_POST['btnEdit'])) {
                $classNameNew = $_POST['className'];
                if ($classNameNew == $classNameOld) {
                    header('Location: ?a=edit&id=' . $_GET['id'] . '&noti=Please enter the change');
                    exit();
                }
                $this->classroomService->edit($_GET['id'], $classNameNew);
            }
            require_once (APP_ROOT . '/app/views/classrooms/editClassroom.php');
        }
    }