-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 05, 2023 at 04:56 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prakweb_2023_a_213040033`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `id` int NOT NULL,
  `Cover` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `judul` varchar(255) NOT NULL,
  `penulis` varchar(255) NOT NULL,
  `tahun_terbit` int NOT NULL,
  `penerbit` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id`, `Cover`, `judul`, `penulis`, `tahun_terbit`, `penerbit`) VALUES
(1, 'https://cdn.gramedia.com/uploads/items/9786020386201_Harry-Potter-.jpg', 'Harry Potter dan Batu Bertuah', 'J.K. Rowling', 1997, 'Bloomsbury'),
(2, 'https://tse3.mm.bing.net/th?id=OIP.bvsOC5rMirlDAGp14NAgMwHaLH&pid=Api&P=0&h=180', 'To Kill a Mockingbird', 'Harper Lee', 1960, 'J.B. Lippincott & Co.'),
(3, 'https://www.themoviedb.org/t/p/original/nwJbVKauPDgJVQgT7SQpVTVN4gA.jpg', 'The Great Gatsby', 'F. Scott Fitzgerald', 1925, 'Charles Scribner\'s Sons'),
(4, 'https://i.pinimg.com/originals/0d/2c/09/0d2c0915b3c86c8ac0680f3f6c88731d.jpg', '1984', 'George Orwell', 1949, 'Secker and Warburg'),
(5, 'https://tse3.mm.bing.net/th?id=OIP.j69bSsx0m-ISRlnIgeE1tQHaLH&pid=Api&P=0&h=180', 'The Hobbit', 'J.R.R. Tolkien', 1937, 'Allen & Unwin'),
(6, 'https://tse2.mm.bing.net/th?id=OIP.h0iJZbuWxSjYiIZrHxt1-wHaLZ&pid=Api&P=0&h=180', 'The Catcher in the Rye', 'J.D. Salinger', 1951, 'Little, Brown and Company'),
(7, 'https://img.moviesrankings.com/t/p/w1280/vAxWpk857xbpaeoSvkRsfMbokPl.jpg', 'Pride and Prejudice', 'Jane Austen', 1813, 'T. Egerton, Whitehall'),
(8, 'https://tse2.mm.bing.net/th?id=OIP._wUdkOsvkup77MhpneaJzQHaLH&pid=Api&P=0&h=180', 'The Lord of the Rings', 'J.R.R. Tolkien', 1954, 'Allen & Unwin'),
(9, 'https://tse2.mm.bing.net/th?id=OIP.G0IkAfqo2eT0Y9bHcwEJcgHaKE&pid=Api&P=0&h=180', 'The Da Vinci Code', 'Dan Brown', 2003, 'Doubleday'),
(10, 'https://tse1.mm.bing.net/th?id=OIP.WTbE7_qIyqfSbkS2CNdPRAHaJl&pid=Api&P=0&h=180', 'Moby-Dick', 'Herman Melville', 1851, 'Harper & Brothers');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
