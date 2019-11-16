-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Nov 16, 2019 at 03:16 AM
-- Server version: 5.7.26
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `product`
--

-- --------------------------------------------------------

--
-- Table structure for table `til_products`
--

CREATE TABLE `til_products` (
  `id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `til_products`
--

INSERT INTO `til_products` (`id`, `product_name`, `price`, `category`) VALUES
(1, 'MacBook', '$1000', 'Laptop'),
(2, 'iPad', '$500', 'Device'),
(3, 'JBL Headphones', '$300', 'Headphones'),
(4, 'Galaxy S7', '$700', 'Mobile Phone'),
(5, 'ert', 'fe', 'cexq');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `til_products`
--
ALTER TABLE `til_products`
  ADD PRIMARY KEY (`id`);
