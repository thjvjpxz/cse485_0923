<?php
    require_once ('../config/Database.php');
    class CategoryModel
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
            $sql_check = "SELECT * FROM TheLoai WHERE tenTheLoai = '$categoryName'";
            $stmt = $this->db->prepare($sql_check);
            $stmt->execute();
            // Trường hợp đã tồn tại tên thể loại
            if ($stmt->rowCount() > 0) {
                header("Location: ?c=category&s=f&noti=Thêm thất bại, <b>$categoryName</b> đã tồn tại");
                exit();
            }
            $sql = "INSERT INTO TheLoai(tenTheLoai) VALUES ('$categoryName')";
            $stmt = $this->db->prepare($sql);
            $stmt->execute();
            header("Location: ?c=category&s=t&noti=Thêm thành công thể loại <b>$categoryName</b>" );
        }
        public function removeCategoryById($id) {
            $sql_check = "SELECT * FROM TheLoai WHERE id = $id";
            $stmt = $this->db->prepare($sql_check);
            $stmt->execute();
            $tenTheLoai_sql = $stmt->fetch(PDO::FETCH_ASSOC)['tenTheLoai'];
            if ($stmt->rowCount() == 0) {
                header("Location: ?c=category&s=f&noti=Xóa thất bại, $id không tồn tại");
                exit();
            }
            try {
                // Delete songs
                $sql_song = "SELECT BaiHat.id FROM BaiHat INNER JOIN TheLoai ON BaiHat.idTheLoai = TheLoai.id 
                                WHERE TheLoai.id = $id";
                $stmt = $this->db->prepare($sql_song);
                $stmt->execute();
                $song_list = $stmt->fetchAll(PDO::FETCH_ASSOC);
                foreach ($song_list as $song) {
                    $query_dsong = 'DELETE FROM BaiHat WHERE id ='. $song['id'];
                    $stmt = $this->db->prepare($query_dsong);
                    $stmt->execute();
                }
                // Delete category
                $sql = "DELETE FROM TheLoai WHERE id = $id";
                $stmt = $this->db->prepare($sql);
                $stmt->execute();
                header("Location: ?c=category&s=t&noti=Xóa thành công <b>$tenTheLoai_sql</b>");
            } catch (PDOException $e) {
                echo "Lỗi: " . $e->getMessage();
            }
        }
        public function getCategoryName($id) {
            $sql = "SELECT tenTheLoai FROM TheLoai WHERE id = $id";
            $stmt = $this->db->prepare($sql);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC)['tenTheLoai'];
        }
        public function editCategoryName($id, $newName, $oldName) {
            $sql_check = "SELECT * FROM TheLoai WHERE tenTheLoai = '$newName' AND id != $id";
            $stmt = $this->db->prepare($sql_check);
            $stmt->execute();
            if ($stmt->rowCount() > 0) {
                header('Location: ?c=category&a=edit&id='.$id.'&noti=Thể loại đã tồn tại, vui lòng nhập thể loại khác');
                exit();
            }
            $sql = "UPDATE TheLoai SET tenTheLoai = '$newName' WHERE id = $id";
            $stmt = $this->db->prepare($sql);
            $stmt->execute();
            header('Location: ?c=category&s=t&noti=Sửa thành công <b>' . $oldName . '</b> thành <b>' . $newName . '</b>');
        }
    }