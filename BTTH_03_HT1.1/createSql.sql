CREATE DATABASE QuanLySinhVien;

USE QuanLySinhVien;

-- Tạo bảng Lop
CREATE TABLE Lop (
    id INT PRIMARY KEY AUTO_INCREMENT,
    tenLop VARCHAR(255) NOT NULL
);

-- Tạo bảng SinhVien
CREATE TABLE SinhVien (
    id INT PRIMARY KEY AUTO_INCREMENT,
    tenSinhVien VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE,
    ngaySinh DATE NOT NULL,
    idLop INT NOT NULL,
    FOREIGN KEY (idLop) REFERENCES Lop(id)
);