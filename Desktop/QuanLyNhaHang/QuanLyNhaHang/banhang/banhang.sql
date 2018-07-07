-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2017 at 12:00 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `banhang`
--

-- --------------------------------------------------------

--
-- Table structure for table `monan`
--

CREATE TABLE `monan` (
  `id` int(11) NOT NULL,
  `ten` varchar(255) NOT NULL,
  `mota` text NOT NULL,
  `gia` int(11) NOT NULL,
  `hinh` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `monan`
--

INSERT INTO `monan` (`id`, `ten`, `mota`, `gia`, `hinh`, `created_at`, `updated_at`) VALUES
(8, 'Lẩu cá mè', 'Lẩu cá mè chua cay\r\n', 100000, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQWX_zeJgP5JqZAWY9jm2SERUZET15CnYDvPv8Rvw62xtOeD5mBFA', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 'Bánh canh cá lóc', 'ca loc banh canh rau dang', 25000, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQWX_zeJgP5JqZAWY9jm2SERUZET15CnYDvPv8Rvw62xtOeD5mBFA', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 'Rau muống xào', 'Rau muống xào tỏi\r\n', 30000, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTntwTqQoidp0UCLuceSEm4H-2pLm55VYHaCvDHyfzqsp43VB7vgg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, 'Cơm chiên hải sản', 'Cơm chiên hải sản tôm mực cua ghẹ', 75000, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQkm_bgXoXizzmwHN5RGqGuy8A4uvh6fGVrJeWoCprS9ClqULhMjQ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(12, 'Bánh trung thu ', ' Vỏ Bánh Truyền Thống\r\n', 80000, 'http://images.media-allrecipes.com/userphotos/250x250/03/35/96/3359675.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(15, 'rau muong xao', 'CLASSIC Vỏ Bánh Truyền Thống\n', 30000, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS8yccoXqfo2KtkcvG1-JXFfxH_Rtrfu8EXZnJOWVxahiBM7qTI', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(16, 'com chien hai san', 'Pizza Thịt và Xúc Xích thơm ngon và giàu protein với thịt muối, thịt bò, thịt nguội và xúc xích', 50000, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS8yccoXqfo2KtkcvG1-JXFfxH_Rtrfu8EXZnJOWVxahiBM7qTI', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(17, 'lau ca duoi', 'CLASSIC Vỏ Bánh Truyền Thống\n', 100000, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR96ok53N0ukNkZyn9IxBFC9fn9fz5DcZPPlZ5LrMul3cTHVrA5', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(18, 'lau ca me', 'CLASSIC Vỏ Bánh Truyền Thống\n', 60000, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTkM5lcDnFEHXd4WJwclEGfVmwd8DvdvOeCXhBe_jg6J-8OvAhV', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(19, 'banh canh ca loc', 'CLASSIC Vỏ Bánh Truyền Thống\n', 25000, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ1Rw2PN2WN9Uzk0spNMROnHdS9vD_GGUAkbbH1NFTKp08s_eQX', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(20, 'banh gato trai cay', 'CLASSIC Vỏ Bánh Truyền Thống\n', 160000, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTPTnnKTnlyzdaiGXYCjg5fP0oZ5PzCxIgeITTBqfH6F9HPwV_F8A', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(21, 'banh gato trai cay', 'CLASSIC Vỏ Bánh Truyền Thống\n', 160000, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTXzIEtCVN3k8Z-xkpu4MNIJDEx57SvkBLZeuwWUXyzqt-6vane', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(22, 'banh canh ca loc', 'Pizza Thịt và Xúc Xích thơm ngon và giàu protein với thịt muối, thịt bò, thịt nguội và xúc xích', 25000, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTXzIEtCVN3k8Z-xkpu4MNIJDEx57SvkBLZeuwWUXyzqt-6vane', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(23, 'pizza 10', 'CLASSIC Vỏ Bánh Truyền Thống\n', 20000, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTXzIEtCVN3k8Z-xkpu4MNIJDEx57SvkBLZeuwWUXyzqt-6vane', '2017-10-21 10:04:13', '2017-10-21 10:04:13'),
(24, 'pizza 3', 'CLASSIC Vỏ Bánh Truyền Thống\n', 20000, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRcR92T7D_IF8Lg8no6DIWRCE2jxfKQfn9U21WrJdfXNCnmw77q', '2017-10-21 10:04:13', '2017-10-21 10:04:13'),
(25, 'com chien hai san', 'Pizza Thịt và Xúc Xích thơm ngon và giàu protein với thịt muối, thịt bò, thịt nguội và xúc xích', 50000, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTXzIEtCVN3k8Z-xkpu4MNIJDEx57SvkBLZeuwWUXyzqt-6vane', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(29, 'mi tom hao hao', 'CLASSIC Vỏ Bánh Truyền Thống\n', 10000, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTXzIEtCVN3k8Z-xkpu4MNIJDEx57SvkBLZeuwWUXyzqt-6vane', '2017-10-22 15:37:16', '2017-10-22 15:37:16'),
(30, 'mi tom hao hao', 'CLASSIC Vỏ Bánh Truyền Thống\n', 10000, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS8yccoXqfo2KtkcvG1-JXFfxH_Rtrfu8EXZnJOWVxahiBM7qTI', '2017-10-22 15:37:22', '2017-10-22 15:37:22'),
(34, 'Mi cung dinh', 'Pizza Thịt và Xúc Xích thơm ngon và giàu protein với thịt muối, thịt bò, thịt nguội và xúc xích', 1000, NULL, '2017-10-22 15:47:12', '2017-10-22 15:47:12'),
(37, 'omachi', 'cay', 50000, NULL, '2017-10-22 17:19:42', '2017-10-22 17:19:42'),
(39, 'Mì Ý', 'Nhập khẩu từ Ý', 100000, NULL, '2017-10-22 17:48:24', '2017-10-22 17:48:24'),
(43, 'mi cay', 'cay qua', 50000, NULL, '2017-10-23 06:38:04', '2017-10-23 06:38:04'),
(44, 'BANH MY', 'NGON', 4444, NULL, '2017-10-23 07:06:13', '2017-10-23 07:06:13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `monan`
--
ALTER TABLE `monan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `monan`
--
ALTER TABLE `monan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
