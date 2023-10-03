<?php
    require_once ('../config/Database.php');
    class TheLoaiModel
    {
        private $db;

        public function __construct()
        {
            $this->db = new Database();
            $this->db = $this->db->getConn();
        }
        public function getAllTheLoai(): array
        {
//            Câu truy vấn
            $query = "SELECT * FROM TheLoai";
//            Thực thi SQL
            $stmt = $this->db->prepare($query);
            $stmt->execute();
            // trả dữ liệu về duới dạng mảng kết hợp
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        public function addCategory($categoryName) {
            $sql_check = "SELECT * FROM theloai WHERE tenTheLoai = '$categoryName'";
            $stmt = $this->db->prepare($sql_check);
            $stmt->execute();
            // Trường hợp đã tồn tại tên thể loại
            if ($stmt->rowCount() > 0) {
                header("Location: ?c=theloai&s=f&noti=Thêm thất bại, <b>$categoryName</b> đã tồn tại");
                exit();
            }
            $sql = "INSERT INTO theloai(tenTheLoai) VALUES ('$categoryName')";
            $stmt = $this->db->prepare($sql);
            $stmt->execute();
            header("Location: ?c=theloai&s=t&noti=Thêm thành công thể loại <b>$categoryName</b>" );
        }
        public function removeCategoryById($id) {
            $sql_check = "SELECT * FROM TheLoai WHERE id = $id";
            $stmt = $this->db->prepare($sql_check);
            $stmt->execute();
            if ($stmt->rowCount() == 0) {
                header("Location: ?c=theloai&s=f&noti=Xóa thất bại, $id không tồn tại");
                exit();
            }
            try {
                $tenTheLoai_sql = $stmt->fetch(PDO::FETCH_ASSOC)['tenTheLoai'];
                $sql = "DELETE FROM TheLoai WHERE id = $id";
                $stmt = $this->db->prepare($sql);
                $stmt->execute();
                header("Location: ?c=theloai&s=t&noti=Xóa thành công $tenTheLoai_sql");
            } catch (PDOException $e) {
                echo "Lỗi: " . $e->getMessage();
            }
        }
    }