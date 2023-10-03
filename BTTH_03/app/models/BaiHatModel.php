<?php
    require_once ('../config/Database.php');
    class BaiHatModel {
        private $db;

        public function __construct()
        {
            $this->db = new Database();
            $this->db = $this->db->getConn();
        }
        public function AddSong($tenBaiHat, $caSi, $idTheLoai): string
        {
//            Truy vấn kiểm tra trùng uname hoặc email
            $query_check = "SELECT * FROM baihat WHERE tenBaiHat = '$tenBaiHat'";
            $stmt = $this->db->prepare($query_check);
            $stmt->execute();
            if ($stmt->rowCount() > 0) {
                 return "SongName already exist";
            }
//            Truy vấn thêm song
            $query = "INSERT INTO user(tenBaiHat, caSi, idTheLoai) VALUES ('$tenBaiHat', '$caSi', '$idTheLoai')";
            $stmt = $this->db->prepare($query);
            if ($stmt->execute()){
                return "success";
            }
            return "Add new song failed";
        }

        public function getAllBaiHat(): array
        {
//            Câu truy vấn
            $query = "SELECT baihat.id, tenBaiHat, caSi, Theloai.tenTheLoai FROM BaiHat INNER JOIN TheLoai ON BaiHat.idTheLoai = TheLoai.id";
//            Thực thi SQL
            $stmt = $this->db->prepare($query);
            $stmt->execute();
            // trả dữ liệu về duới dạng mảng kết hợp
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }

        public function deleteUserById($id): bool
        {

            $sql = "DELETE FROM baihat WHERE id = $id";
            $stmt = $this->db->prepare($sql);
            $stmt->execute();
            $rowCount = $stmt->rowCount();
            return $rowCount > 0;
        }
        public function editUserById($id, $unameNew) : string {
            $sql_check = "SELECT * FROM baihat WHERE tenBaiHat = '$unameNew' AND id != $id";
            $stmt = $this->db->prepare($sql_check);
            $stmt->execute();
            if ($stmt->rowCount() > 0) {
                return 'SongName already exist';
            } else {
                $sql_update = "UPDATE user SET uname = '$unameNew' WHERE id = $id";
                $stmt = $this->db->prepare($sql_update);
                if ($stmt->execute()) {
                    return 'success';
                }
                return 'Edit user fail';
            }
        }
    }
