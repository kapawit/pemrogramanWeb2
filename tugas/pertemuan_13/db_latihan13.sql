CREATE DATABASE db_latihan13;

USE db_latihan13;

CREATE TABLE tabel_mahasiswa (
  nim INT(14),
  nama VARCHAR(20),
  alamat TEXT,
  jurusan VARCHAR(20),
  PRIMARY KEY (nim)
);

INSERT INTO tabel_mahasiswa (nim, nama, alamat, jurusan) VALUES
(1, 'John Doe', 'Jl. Merdeka No. 123', 'Informatika'),
(2, 'Jane Smith', 'Jl. Pahlawan No. 456', 'Manajemen'),
(3, 'David Johnson', 'Jl. Sudirman No. 789', 'Akuntansi'),
(4, 'Sarah Lee', 'Jl. Gatot Subroto No. 321', 'Psikologi'),
(5, 'Michael Wang', 'Jl. Ahmad Yani No. 555', 'Teknik Elektro');

CREATE TABLE customer (
  customernumber INT(11) PRIMARY KEY,
  customername VARCHAR(50),
  contactlastname VARCHAR(50),
  contactfirstname VARCHAR(50),
  phone VARCHAR(50),
  addressline1 VARCHAR(50),
  addressline2 VARCHAR(50),
  city VARCHAR(50),
  state VARCHAR(50),
  postalcode VARCHAR(50),
  country VARCHAR(50),
  salesrepemployeenumber INT(11)
);

INSERT INTO customer (customernumber, customername, contactlastname, contactfirstname, phone, addressline1, addressline2, city, state, postalcode, country, salesrepemployeenumber) VALUES
(1, 'ABC Company', 'Doe', 'John', '123456789', 'Address 1', 'Address 2', 'City 1', 'State 1', '12345', 'Country 1', 100),
(2, 'XYZ Corporation', 'Smith', 'Jane', '987654321', 'Address 3', 'Address 4', 'City 2', 'State 2', '54321', 'Country 2', 101),
(3, 'PQR Ltd.', 'Johnson', 'David', '555555555', 'Address 5', 'Address 6', 'City 3', 'State 3', '67890', 'Country 3', 102),
(4, 'MNO Industries', 'Wang', 'Michael', '111111111', 'Address 7', 'Address 8', 'City 4', 'State 4', '10101', 'Country 4', 103),
(5, 'JKL Corporation', 'Brown', 'Sarah', '222222222', 'Address 9', 'Address 10', 'City 5', 'State 5', '98765', 'Country 5', 104),
(6, 'DEF Corporation', 'Miller', 'Robert', '333333333', 'Address 11', 'Address 12', 'City 6', 'State 6', '45678', 'Country 6', 105),
(7, 'GHI Ltd.', 'Anderson', 'Emily', '444444444', 'Address 13', 'Address 14', 'City 7', 'State 7', '54321', 'Country 7', 106),
(8, 'UVW Company', 'Taylor', 'William', '555555555', 'Address 15', 'Address 16', 'City 8', 'State 8', '90876', 'Country 8', 107),
(9, 'STU Corporation', 'Wilson', 'Jessica', '666666666', 'Address 17', 'Address 18', 'City 9', 'State 9', '23456', 'Country 9', 108),
(10, 'RST Ltd.', 'Lee', 'Daniel', '777777777', 'Address 19', 'Address 20', 'City 10', 'State 10', '34567', 'Country 10', 109);
