<?php
    require_once (APP_ROOT . '/app/models/Classroom.php');
    require_once (APP_ROOT . '/core/Database.php');
    class ClassroomService
    {
        private $conn;

        public function __construct()
        {
            $this->conn = new Database();
            $this->conn = $this->conn->get();
        }

        public function getAll() {
            $sql = "SELECT * FROM Lop";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        public function delete($id) {
            $sql_check = "SELECT * FROM Lop WHERE id = :id";
            $stmt = $this->conn->prepare($sql_check);
            $stmt->bindParam(':id', $id);
            $stmt->execute();
            if ($stmt->rowCount() == 0) {
                header('Location: ?s=f&noti=Class not exists');
                exit();
            }
            try {
                // there is a foreign key SinhVien - Lop
                $sql_delete = "DELETE FROM SinhVien WHERE idLop = :idLop";
                $stmt_delete = $this->conn->prepare($sql_delete);
                $stmt_delete->bindParam(':idLop', $id);
                $stmt_delete->execute();
                $sql = "DELETE FROM Lop WHERE id = :id";
                $stmt = $this->conn->prepare($sql);
                $stmt->bindParam(':id', $id);
                $stmt->execute();
                header('Location: ?s=t&noti=Delete class successfully');
            } catch (PDOException $e) {
                header("Location: ?s=f&noti=" . $e->getMessage());
            }
        }
        public function getClassNameById($id) {
            $sql = "SELECT tenLop FROM Lop WHERE id = :id";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':id', $id);
            $stmt->execute();
            return $stmt->fetch()[0];
        }
        public function edit($id, $classNameNew) {
            $sql_check = "SELECT * FROM Lop WHERE tenLop = :className AND id != :id";
            $stmt = $this->conn->prepare($sql_check);
            $stmt->bindParam(':id', $id);
            $stmt->bindParam(':className', $classNameNew);
            $stmt->execute();
            $className = $stmt->fetch()[1];
            if ($stmt->rowCount() > 0) {
                header('Location: ?a=edit&id='. $id . '&noti=Class <b>' . $className . '</b> already exists');
                exit();
            }
            $sql_Update = "UPDATE Lop SET tenLop = :className WHERE id = :id";
            $stmt = $this->conn->prepare($sql_Update);
            $stmt->bindParam(':className', $classNameNew);
            $stmt->bindParam(':id', $id);
            $stmt->execute();
            header('Location: ?s=t&noti=Update class name successfully');
        }
        public function add($className) {
            // Check class name existance
            $sql_check = 'SELECT * FROM Lop WHERE tenLop = :className';
            $stmt = $this->conn->prepare($sql_check);
            $stmt->bindParam(':className', $className);
            $stmt->execute();
            if ($stmt->rowCount() > 0) {
                header('Location: ?a=add&noti=Class <b>' . $className . '</b> exists');
                exit();
            }
            try {
                $sql_add = "INSERT INTO Lop(tenLop) VALUES (:className)";
                $stmt_add = $this->conn->prepare($sql_add);
                $stmt_add->bindParam(':className', $className);
                $stmt_add->execute();
                header('Location: ?s=t&noti=Added <b>' . $className . '</b> successfully');
            } catch (PDOException $e) {
                header ('Lcation: ?a=add&noti=' . $e->getMessage());
            }
//            echo "<b class='text-white'>" . $className . "</b>";
        }
    }