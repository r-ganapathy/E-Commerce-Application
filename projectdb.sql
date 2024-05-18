-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 19, 2024 at 07:58 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projectdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `cart_861._ganapathy`
--

CREATE TABLE `cart_861._ganapathy` (
  `Product_Id` bigint(100) NOT NULL,
  `Product_Name` text NOT NULL,
  `Product_Price` bigint(100) NOT NULL,
  `Product_Qty` int(100) NOT NULL,
  `Product_Img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart_861._ganapathy`
--

INSERT INTO `cart_861._ganapathy` (`Product_Id`, `Product_Name`, `Product_Price`, `Product_Qty`, `Product_Img`) VALUES
(19, 'abcde2', 10000, 5, 'uploads/images (7).jfif');

-- --------------------------------------------------------

--
-- Table structure for table `cart_8811._charlie`
--

CREATE TABLE `cart_8811._charlie` (
  `Product_Id` bigint(100) NOT NULL,
  `Product_Name` text NOT NULL,
  `Product_Price` bigint(100) NOT NULL,
  `Product_Qty` int(100) NOT NULL,
  `Product_Img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(100) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `product_price` int(100) NOT NULL,
  `product_category` varchar(100) NOT NULL,
  `product_description` varchar(500) NOT NULL,
  `product_img` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `product_name`, `product_price`, `product_category`, `product_description`, `product_img`) VALUES
(12, 'abcde', 500, 'male', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Natus facilis, iusto, ea consequuntur modi tempora aliquam commodi a obcaecati dolorum quibusdam possimus consequatur nemo vero harum tempore, recusandae cupiditate itaque!', 'uploads/images.jfif'),
(13, 'fghijk', 1900, 'male', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Natus facilis, iusto, ea consequuntur modi tempora aliquam commodi a obcaecati dolorum quibusdam possimus consequatur nemo vero harum tempore, recusandae cupiditate itaque!', 'uploads/images (1).jfif'),
(14, 'lmnop', 5000, 'female', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Natus facilis, iusto, ea consequuntur modi tempora aliquam commodi a obcaecati dolorum quibusdam possimus consequatur nemo vero harum tempore, recusandae cupiditate itaque!', 'uploads/images (2).jfif'),
(15, 'qrstu', 900, 'female', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Natus facilis, iusto, ea consequuntur modi tempora aliquam commodi a obcaecati dolorum quibusdam possimus consequatur nemo vero harum tempore, recusandae cupiditate itaque!', 'uploads/images (3).jfif'),
(16, 'vwxyz', 600, 'other', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Natus facilis, iusto, ea consequuntur modi tempora aliquam commodi a obcaecati dolorum quibusdam possimus consequatur nemo vero harum tempore, recusandae cupiditate itaque!', 'uploads/images (4).jfif'),
(17, 'abcde1', 400, 'other', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Natus facilis, iusto, ea consequuntur modi tempora aliquam commodi a obcaecati dolorum quibusdam possimus consequatur nemo vero harum tempore, recusandae cupiditate itaque!', 'uploads/images (5).jfif'),
(18, 'fghijk2', 3000, 'other', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Natus facilis, iusto, ea consequuntur modi tempora aliquam commodi a obcaecati dolorum quibusdam possimus consequatur nemo vero harum tempore, recusandae cupiditate itaque!', 'uploads/images (6).jfif'),
(19, 'abcde2', 10000, 'male', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Natus facilis, iusto, ea consequuntur modi tempora aliquam commodi a obcaecati dolorum quibusdam possimus consequatur nemo vero harum tempore, recusandae cupiditate itaque!', 'uploads/images (7).jfif'),
(20, 'fghijk1', 7000, 'female', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Natus facilis, iusto, ea consequuntur modi tempora aliquam commodi a obcaecati dolorum quibusdam possimus consequatur nemo vero harum tempore, recusandae cupiditate itaque!', 'uploads/images (8).jfif'),
(21, 'lmnop1', 6000, 'male', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Natus facilis, iusto, ea consequuntur modi tempora aliquam commodi a obcaecati dolorum quibusdam possimus consequatur nemo vero harum tempore, recusandae cupiditate itaque!', 'uploads/images (9).jfif'),
(22, 'lmnop2', 4000, 'female', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Natus facilis, iusto, ea consequuntur modi tempora aliquam commodi a obcaecati dolorum quibusdam possimus consequatur nemo vero harum tempore, recusandae cupiditate itaque!', 'uploads/images (10).jfif'),
(23, 'qrstu1', 3500, 'male', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Natus facilis, iusto, ea consequuntur modi tempora aliquam commodi a obcaecati dolorum quibusdam possimus consequatur nemo vero harum tempore, recusandae cupiditate itaque!', 'uploads/images (11).jfif'),
(25, 'qrstu2', 100000, 'female', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Natus facilis, iusto, ea consequuntur modi tempora aliquam commodi a obcaecati dolorum quibusdam possimus consequatur nemo vero harum tempore, recusandae cupiditate itaque!', 'uploads/images (12).jfif');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(100) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone_no` bigint(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `Teacher` text NOT NULL,
  `School` text NOT NULL,
  `Food` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `phone_no`, `password`, `Teacher`, `School`, `Food`) VALUES
(861, 'Ganapathy', 'ganapathy@gmail.com', 9876543210, 'alpha', 'xyz', 'abc', 'chapathi'),
(8811, 'charlie', 'charlie@gmail.com', 9876543210, 'charlie', 'qwe', 'asd', 'zxc');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9632;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
