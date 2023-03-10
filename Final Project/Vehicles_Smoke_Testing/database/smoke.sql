-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 20, 2023 at 03:54 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smoke`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer_logins`
--

CREATE TABLE `customer_logins` (
  `id` int(10) UNSIGNED NOT NULL,
  `user` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pass` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customer_logins`
--

INSERT INTO `customer_logins` (`id`, `user`, `pass`, `created_at`, `updated_at`) VALUES
(1, 'customer', 'cus123', NULL, NULL),
(2, 'Ravi', 'Ravi1996', NULL, NULL),
(3, 'jane', 'jane789', NULL, NULL),
(4, 'nuwan', 'Nuwan123', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `harmful_gas_variation`
--

CREATE TABLE `harmful_gas_variation` (
  `id` int(20) NOT NULL,
  `gas` varchar(25) DEFAULT NULL,
  `value` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `harmful_gas_variation`
--

INSERT INTO `harmful_gas_variation` (`id`, `gas`, `value`) VALUES
(1, 'CO', 935),
(2, 'CO2', 1620),
(3, 'SO2', 567),
(4, 'NO2', 600),
(5, 'Acetaldehyde', 114),
(6, 'Formaldehyde', 268);

-- --------------------------------------------------------

--
-- Table structure for table `internal_params`
--

CREATE TABLE `internal_params` (
  `id` int(20) UNSIGNED NOT NULL,
  `CO` double NOT NULL,
  `CO2` double NOT NULL,
  `SO2` double NOT NULL,
  `NO2` double NOT NULL,
  `Acetaldehyde` double NOT NULL,
  `Formaldehyde` double NOT NULL,
  `rate` double NOT NULL,
  `temperature` double NOT NULL,
  `humidity` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `internal_params`
--

INSERT INTO `internal_params` (`id`, `CO`, `CO2`, `SO2`, `NO2`, `Acetaldehyde`, `Formaldehyde`, `rate`, `temperature`, `humidity`, `created_at`, `updated_at`) VALUES
(1, 900, 729, 340, 400, 140, 212, 124, 236, 113, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `logins`
--

CREATE TABLE `logins` (
  `id` int(20) UNSIGNED NOT NULL,
  `user` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pass` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `logins`
--

INSERT INTO `logins` (`id`, `user`, `pass`, `created_at`, `updated_at`) VALUES
(1, 'abc', '123', NULL, NULL),
(2, 'Officer', 'officer123', NULL, NULL),
(3, 'Kamal', 'Kamal199', NULL, NULL),
(4, 'Kalum', 'Kalum123', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_12_18_105238_create_logins_table', 1),
(6, '2022_12_18_110010_create_customers_table', 2),
(7, '2022_12_18_111010_create_officers_table', 3),
(8, '2022_12_18_112526_create_vehicles_details_table', 4),
(9, '2022_12_18_114032_create_internal_params_table', 5),
(10, '2022_12_25_115328_create_customer_logins_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `vehicles_details`
--

CREATE TABLE `vehicles_details` (
  `id` int(20) UNSIGNED NOT NULL,
  `ftype` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `etype` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `lnum` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `vmodel` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vehicles_details`
--

INSERT INTO `vehicles_details` (`id`, `ftype`, `etype`, `lnum`, `vmodel`, `created_at`, `updated_at`) VALUES
(1, 'Petrol', 'Petrol Engine', 'CAE-7072', 'Car', NULL, NULL),
(10, 'Desal', 'Desal engine', 'CAE-7000', 'Car', NULL, NULL),
(11, 'Petrol', 'Petrol Engine', 'CAE-7772', 'van', NULL, NULL),
(12, 'Petrol', 'Petrol Engine', 'RAE-7072', 'Lorry', NULL, NULL),
(13, 'Desal', 'Desal engine', 'UBE-7072', 'Van', NULL, NULL),
(14, 'Petrol', 'Petrol Engine', 'CAE-9002', 'Van', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer_logins`
--
ALTER TABLE `customer_logins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `harmful_gas_variation`
--
ALTER TABLE `harmful_gas_variation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `internal_params`
--
ALTER TABLE `internal_params`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logins`
--
ALTER TABLE `logins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vehicles_details`
--
ALTER TABLE `vehicles_details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer_logins`
--
ALTER TABLE `customer_logins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `harmful_gas_variation`
--
ALTER TABLE `harmful_gas_variation`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `internal_params`
--
ALTER TABLE `internal_params`
  MODIFY `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `logins`
--
ALTER TABLE `logins`
  MODIFY `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `vehicles_details`
--
ALTER TABLE `vehicles_details`
  MODIFY `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
