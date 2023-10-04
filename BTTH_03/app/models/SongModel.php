<?php
    require_once ('../config/Database.php');
    class SongModel {
        private $db;

        public function __construct()
        {
            $this->db = new Database();
            $this->db = $this->db->getConn();
        }
        public function AddSong($tenBaiHat, $caSi, $idTheLoai)
        {
//            Truy vấn kiểm tra trùng tên bài hát
            $query_check = "SELECT * FROM BaiHat WHERE tenBaiHat = '$tenBaiHat'";
            $stmt = $this->db->prepare($query_check);
            $stmt->execute();
            if ($stmt->rowCount() > 0) {
                header('Location: ?c=song&a=add&s=f&noti=Bài hát ' . $tenBaiHat . ' đã tồn tại');
                exit();
            }
            try {
//            Truy vấn thêm bài hát
                $query = "INSERT INTO BaiHat(tenBaiHat, caSi, idTheLoai) VALUES ('$tenBaiHat', '$caSi', '$idTheLoai')";
                $stmt = $this->db->prepare($query);
                $stmt->execute();
                header('Location: ?c=song&s=t&noti=Thêm thành công bài <b>' . $tenBaiHat . '</b>');
            } catch (PDOException $e) {
                echo "Lỗi: " . $e->getMessage();
            }
        }

        public function getAllSong(): array
        {
//            Câu truy vấn
            $query = "SELECT BaiHat.id, tenBaiHat, caSi, Theloai.tenTheLoai FROM BaiHat INNER JOIN TheLoai ON BaiHat.idTheLoai = TheLoai.id";
//            Thực thi SQL
            $stmt = $this->db->prepare($query);
            $stmt->execute();
            // trả dữ liệu về duới dạng mảng kết hợp
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }

        public function deleteSongById($id): bool
        {
            $sql_check = "SELECT * FROM BaiHat WHERE id = $id";
            $stmt = $this->db->prepare($sql_check);
            $stmt->execute();
            $songName = $stmt->fetch(PDO::FETCH_ASSOC)['tenBaiHat'];
            if ($stmt->rowCount() < 1) {
                header('Location: ?noti=Bài hát không tồn tại hoặc đã bị xóa');
                exit();
            }
            $sql = "DELETE FROM BaiHat WHERE id = $id";
            $stmt = $this->db->prepare($sql);
            $stmt->execute();
            header('Location: ?noti=Xóa thành công bài hát <b>' . $songName . '</b>');
        }
        public function editSong($id, $songName, $singerName, $idTheLoai) : string {
            $sql_check = "SELECT * FROM BaiHat WHERE tenBaiHat = '$songName' AND id != $id";
            $stmt = $this->db->prepare($sql_check);
            $stmt->execute();
            if ($stmt->rowCount() > 0) {
                header('Location: ?a=edit&id=' . $id . '&noti=Bài hát <b>' . $songName . '</b> đã tồn tại');
                exit();
            }
            $sql_update = "UPDATE BaiHat SET tenBaiHat= '$songName', caSi = '$singerName', idTheLoai = '$idTheLoai' WHERE id = $id";
            $stmt = $this->db->prepare($sql_update);
            $stmt->execute();
            header('Location: ?s=t&noti=Sửa bài hát thành công');
        }
        public function getAllCategoryName() {
            $sql = "SELECT id, tenTheLoai FROM TheLoai";
            $stmt = $this->db->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        public function getSongById($id) {
            $sql = "SELECT BaiHat.id, tenBaiHat, caSi, idTheLoai, tenTheLoai FROM BaiHat INNER JOIN TheLoai ON BaiHat.idTheLoai = TheLoai.id
                    WHERE BaiHat.id = $id";
            $stmt = $this->db->prepare($sql);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);
        }
        public function getAllCategoryDivCur($id) {
            $sql = "SELECT * FROM TheLoai WHERE id != $id";
            $stmt = $this->db->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
    }
