-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 15, 2019 at 09:15 PM
-- Server version: 5.7.27-0ubuntu0.18.04.1
-- PHP Version: 7.2.24-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `loginBarcode`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `name_user` varchar(225) NOT NULL,
  `username_user` varchar(225) NOT NULL,
  `password_user` varchar(225) NOT NULL,
  `role_user` enum('admin','user') NOT NULL,
  `key_user` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `name_user`, `username_user`, `password_user`, `role_user`, `key_user`) VALUES
(5, 'Muhammad Azrial', 'azrial', '$2y$10$54kQk21zuGl3KosvbxsWreXLRYsMJVie4fx5xZMyuAUghMXOZHhfm', 'admin', '$2y$10$g4Zsv30Hi.IESEEp1NRinuGYkAy/ytG0zo0KOlFmPWMwZTDnC.h42'),
(11, 'Dania Khaira Lubna', 'dania', '$2y$10$hka3BtpmTWfyi2qo6P1Y2.K3oKghLFZp7L8ceB2AoJJ008uwyEYBq', 'user', '$2y$10$crtGWANmh8y88FUL9cOQtuIO/Fe70RKHnKzh6gl86awVFXZRREUaW');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
