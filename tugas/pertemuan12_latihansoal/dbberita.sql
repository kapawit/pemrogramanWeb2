CREATE DATABASE IF NOT EXISTS dbBerita;

USE dbBerita;

CREATE TABLE tblKategori (
  idKategori INT PRIMARY KEY,
  nama_kategori VARCHAR(50)
);

CREATE TABLE tblBerita (
  idBerita INT PRIMARY KEY,
  idKategori INT,
  judulBerita VARCHAR(100),
  isiBerita TEXT,
  penulis VARCHAR(50),
  tglDipublish DATE,
  FOREIGN KEY (idKategori) REFERENCES tblKategori(idKategori)
);
