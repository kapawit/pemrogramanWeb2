-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 02, 2023 at 03:01 PM
-- Server version: 5.7.33
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_latihan14`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `BookRoom` (IN `p_room_id` INT, IN `p_customer_name` VARCHAR(50), IN `p_check_in_date` DATE, IN `p_check_out_date` DATE)   BEGIN
  -- Check if the room is available for the specified dates
  IF EXISTS (
    SELECT 1
    FROM Rooms
    WHERE room_id = p_room_id AND available = TRUE
    AND room_id NOT IN (
      SELECT room_id
      FROM Bookings
      WHERE check_out_date >= p_check_in_date
      AND check_in_date <= p_check_out_date
    )
  ) THEN
    -- Insert the booking record
    INSERT INTO Bookings (room_id, customer_name, check_in_date, check_out_date)
    VALUES (p_room_id, p_customer_name, p_check_in_date, p_check_out_date);
    
    -- Update room availability status
    UPDATE Rooms
    SET available = FALSE
    WHERE room_id = p_room_id;
    
    SELECT 'Booking successful!' AS message;
  ELSE
    SELECT 'Room not available for the specified dates.' AS message;
  END IF;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `GetAvailableRooms` (IN `p_check_in_date` DATE, IN `p_check_out_date` DATE)   BEGIN
  -- Retrieve available rooms for the specified dates
  SELECT r.room_id, r.room_type, r.capacity, r.price
  FROM Rooms r
  WHERE r.available = TRUE
  AND r.room_id NOT IN (
    SELECT room_id
    FROM Bookings
    WHERE check_out_date >= p_check_in_date
    AND check_in_date <= p_check_out_date
  );
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `update_datatable` (IN `id` INT(11), IN `jml` INT(11))  DETERMINISTIC COMMENT 'First SP at Expertdeveloper' BEGIN
DECLARE exit handler for sqlexception
BEGIN
-- ERROR
ROLLBACK;
END;
DECLARE exit handler for sqlwarning
BEGIN
-- WARNING
ROLLBACK;
END;
START TRANSACTION;
UPDATE tabel_1 SET jumlah=jumlah-jml WHERE kode=id;
UPDATE tabel_2 SET jumlah=jumlah+jml WHERE kode=id;
COMMIT;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `booking_id` int(11) NOT NULL,
  `room_id` int(11) DEFAULT NULL,
  `customer_name` varchar(50) DEFAULT NULL,
  `check_in_date` date DEFAULT NULL,
  `check_out_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`booking_id`, `room_id`, `customer_name`, `check_in_date`, `check_out_date`) VALUES
(1, 1, 'John Doe', '2023-06-10', '2023-06-15'),
(2, 3, 'Jane Smith', '2023-06-12', '2023-06-16'),
(3, 5, 'Mike Johnson', '2023-06-15', '2023-06-19'),
(4, 2, 'Emily Brown', '2023-06-20', '2023-06-25'),
(5, 1, 'pawit wahib', '2023-12-12', '2023-12-13');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `room_id` int(11) NOT NULL,
  `room_type` varchar(50) DEFAULT NULL,
  `capacity` int(11) DEFAULT NULL,
  `price` decimal(8,2) DEFAULT NULL,
  `available` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`room_id`, `room_type`, `capacity`, `price`, `available`) VALUES
(1, 'Standard', 2, 100.00, 0),
(2, 'Deluxe', 4, 200.00, 1),
(3, 'Suite', 6, 300.00, 1),
(5, 'Deluxe', 4, 200.00, 1),
(6, 'Suite', 6, 300.00, 1),
(7, 'Standard', 2, 100.00, 1),
(8, 'Deluxe', 4, 200.00, 1),
(9, 'Suite', 6, 300.00, 1),
(10, 'Standard', 2, 100.00, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tabel_1`
--

CREATE TABLE `tabel_1` (
  `kode` int(11) NOT NULL,
  `nama_barang` varchar(20) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_1`
--

INSERT INTO `tabel_1` (`kode`, `nama_barang`, `jumlah`) VALUES
(1001, 'buku', 0),
(1002, 'pulpen', 50);

-- --------------------------------------------------------

--
-- Table structure for table `tabel_2`
--

CREATE TABLE `tabel_2` (
  `kode` int(11) NOT NULL,
  `nama_barang` varchar(20) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_2`
--

INSERT INTO `tabel_2` (`kode`, `nama_barang`, `jumlah`) VALUES
(1001, 'buku', 100),
(1002, 'pulpen', 50);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`booking_id`),
  ADD KEY `room_id` (`room_id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`room_id`);

--
-- Indexes for table `tabel_1`
--
ALTER TABLE `tabel_1`
  ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `tabel_2`
--
ALTER TABLE `tabel_2`
  ADD PRIMARY KEY (`kode`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tabel_1`
--
ALTER TABLE `tabel_1`
  MODIFY `kode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1003;

--
-- AUTO_INCREMENT for table `tabel_2`
--
ALTER TABLE `tabel_2`
  MODIFY `kode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1003;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bookings`
--
ALTER TABLE `bookings`
  ADD CONSTRAINT `bookings_ibfk_1` FOREIGN KEY (`room_id`) REFERENCES `rooms` (`room_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
