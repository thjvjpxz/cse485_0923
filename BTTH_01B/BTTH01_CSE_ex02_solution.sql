USE btth01_cse485;
-- a) Liệt kê các bài viết về các bài hát thuộc thể loại Nhạc trữ tình
SELECT baiviet.*
FROM baiviet INNER JOIN theloai ON baiviet.ma_tloai = theloai.ma_tloai
WHERE theloai.ten_tloai LIKE 'Nhạc Trữ Tình';
-- b) Liệt kê các bài viết của tác giả “Rose Warrier"
SELECT bv.*
FROM baiviet AS bv INNER JOIN tacgia AS tg ON bv.ma_tgia = tg.ma_tgia
WHERE tg.ten_tgia LIKE 'Rose Warrier';
-- c) Liệt kê các thể loại nhạc chưa có bài viết cảm nhận nào
SELECT tl.ten_tloai AS 'Thể loại'
FROM theloai AS tl LEFT JOIN baiviet AS bv ON tl.ma_tloai = bv.ma_tloai
WHERE bv.ma_tloai IS NULL;
-- d) Liệt kê các bài viết với các thông tin sau: mã bài viết, tên bài viết,
-- tên bài hát, tên tác giả, tên thể loại, ngày viết
SELECT baiviet.ma_bviet AS 'Mã bài viết', baiviet.tieude AS 'Tiêu đề', baiviet.ten_bhat AS 'Tên bài hát',
       tacgia.ten_tgia AS 'Tên tác giả', theloai.ten_tloai AS 'Tên thể loại', baiviet.ngayviet AS 'Ngày viết'
FROM baiviet, tacgia, theloai
WHERE baiviet.ma_tloai = theloai.ma_tloai && baiviet.ma_tgia = tacgia.ma_tgia;
-- e) Tìm thể loại có số bài viết nhiều nhất
SELECT tl.ten_tloai 'Thể loại', count(bv.ma_bviet) 'Số lần'
FROM theloai AS tl INNER JOIN baiviet bv ON tl.ma_tloai = bv.ma_tloai
GROUP BY tl.ten_tloai
ORDER BY count(bv.ma_bviet) DESC
LIMIT 1;
-- f) Liệt kê 2 tác giả có số bài viết nhiều nhất
SELECT tg.ten_tgia 'Tên tác giả', COUNT(bv.ma_bviet) 'Số lần'
FROM tacgia tg INNER JOIN baiviet bv ON tg.ma_tgia = bv.ma_tgia
GROUP BY tg.ten_tgia
ORDER BY count(bv.ma_bviet) DESC
LIMIT 2;
-- g) Liệt kê các bài viết về các bài hát có tựa bài hát chứa 1 trong các từ “yêu”, “thương”, “anh”, “em”
SELECT *
FROM baiviet bv
WHERE bv.ten_bhat LIKE '%anh%' OR bv.ten_bhat LIKE '%em%' OR bv.ten_bhat LIKE '%yêu%' OR
      bv.ten_bhat LIKE '%thương%';
-- h) Liệt kê các bài viết về các bài hát có tiêu đề bài viết hoặc tựa bài hát chứa 1 trong các từ
-- “yêu”, “thương”, “anh”, “em”
SELECT *
FROM baiviet bv
WHERE bv.ten_bhat LIKE '%anh%' OR bv.ten_bhat LIKE '%em%' OR bv.ten_bhat LIKE '%yêu%' OR
      bv.ten_bhat LIKE '%thương%' OR bv.tieude LIKE '%anh%' OR bv.tieude LIKE '%em%' OR
      bv.tieude LIKE '%thương%' OR bv.tieude LIKE '%yêu%';
-- i) Tạo 1 view có tên vw_Music để hiển thị thông tin về Danh sách các bài viết kèm theo Tên
-- thể loại và tên tác giả
CREATE VIEW vw_Music AS
SELECT baiviet.ma_bviet, baiviet.tieude, theloai.ten_tloai, tacgia.ten_tgia
FROM baiviet, tacgia, theloai
WHERE baiviet.ma_tgia = tacgia.ma_tgia AND baiviet.ma_tloai = theloai.ma_tloai;
-- j) Tạo 1 thủ tục có tên sp_DSBaiViet với tham số truyền vào là Tên thể loại và trả về danh sách
-- Bài viết của thể loại đó. Nếu thể loại không tồn tại thì hiển thị thông báo lỗi)
CREATE PROCEDURE sp_DSBaiViet(IN p_ten_tloai VARCHAR(50))
BEGIN
    DECLARE v_ma_tloai INT;

    -- Lấy mã thể loại từ tên thể loại
    SELECT ma_tloai INTO v_ma_tloai FROM theloai WHERE ten_tloai = p_ten_tloai;

    -- Kiểm tra xem thể loại có tồn tại hay không
    IF v_ma_tloai IS NULL THEN
        SELECT 'Thể loại không tồn tại' AS ErrorMsg;
    ELSE
        -- Truy vấn danh sách bài viết của thể loại
        SELECT baiviet.ma_bviet, baiviet.tieude
        FROM baiviet
        WHERE baiviet.ma_tloai = v_ma_tloai;
    END IF;
END;
-- k) Thêm mới cột SLBaiViet vào trong bảng theloai. Tạo 1 trigger có tên tg_CapNhatTheLoai để
-- khi thêm/sửa/xóa bài viết thì số lượng bài viết trong bảng theloai được cập nhật theo.
ALTER TABLE theloai
ADD COLUMN SLBaiViet INT DEFAULT 0;

CREATE TRIGGER tg_CapNhatTheLoai
    AFTER INSERT ON baiviet
    FOR EACH ROW
BEGIN
    -- Cập nhật số lượng bài viết trong bảng theloai khi thêm/sửa/xóa bài viết
    UPDATE theloai
    SET SLBaiViet = (SELECT COUNT(*) FROM baiviet WHERE ma_tloai = NEW.ma_tloai)
    WHERE ma_tloai = NEW.ma_tloai;
END;
-- i) Bổ sung thêm bảng Users để lưu thông tin Tài khoản đăng nhập và sử dụng cho chức năng
-- Đăng nhập/Quản trị trang web
CREATE TABLE Users (
    uname varchar(20) NOT NULL UNIQUE,
    pass varchar(50) NOT NULL
);