USE BTTH01_CSE485;
-- ADD DATA TO tacgia
insert into tacgia (ten_tgia) values ('Rose Warrier');
insert into tacgia (ten_tgia) values ('Cristian Keal');
insert into tacgia (ten_tgia) values ('Tabor Boothman');
insert into tacgia (ten_tgia) values ('Lona Hoggins');
insert into tacgia (ten_tgia) values ('Tallou Andover');
insert into tacgia (ten_tgia) values ('Philippe Haborn');
insert into tacgia (ten_tgia) values ('Andros Biset');
insert into tacgia (ten_tgia) values ('Christy Hultberg');
insert into tacgia (ten_tgia) values ('Tana Gatus');
insert into tacgia (ten_tgia) values ('Violet Dring');
-- ADD DATA TO theloai
INSERT INTO theloai (ten_tloai) VALUES ('Hành động');
INSERT INTO theloai (ten_tloai) VALUES ('Kinh dị');
INSERT INTO theloai (ten_tloai) VALUES ('Tình cảm');
INSERT INTO theloai (ten_tloai) VALUES ('Hài hước');
INSERT INTO theloai (ten_tloai) VALUES ('Phiêu lưu');
INSERT INTO theloai (ten_tloai) VALUES ('Khoa học viễn tưởng');
INSERT INTO theloai (ten_tloai) VALUES ('Tâm lý');
INSERT INTO theloai (ten_tloai) VALUES ('Hoạt hình');
INSERT INTO theloai (ten_tloai) VALUES ('Lịch sử');
INSERT INTO theloai (ten_tloai) VALUES ('Tội phạm')
-- ADD DATA TO baiviet
# Thêm 50 bài viết ngẫu nhiên

# Tạo biến i để đếm số bài viết
SET @i = 1;

# Lặp qua vòng lặp 50 lần để thêm dữ liệu
WHILE @i <= 50 DO

    # Tạo câu lệnh INSERT
    INSERT INTO baiviet (tieude, ten_bhat, ma_tloai, tomtat, noidung, ma_tgia) VALUES
        (CONCAT('Tiêu đề bài viết ', @i), CONCAT('Tên bài viết ', @i), FLOOR(RAND() * 10) + 1, CONCAT('Tóm tắt bài viết ', @i), CONCAT('Nội dung bài viết ', @i), FLOOR(RAND() * 10) + 1);

    # Tăng biến i lên 1
    SET @i = @i + 1;

END WHILE;