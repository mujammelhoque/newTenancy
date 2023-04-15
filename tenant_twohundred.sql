-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 15, 2023 at 08:10 AM
-- Server version: 10.3.38-MariaDB-0ubuntu0.20.04.1
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tenant_twohundred`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `org_id` varchar(255) NOT NULL,
  `org_name` varchar(255) NOT NULL,
  `org_domain` varchar(255) DEFAULT NULL,
  `tenant_url` varchar(255) NOT NULL,
  `status` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `org_id`, `org_name`, `org_domain`, `tenant_url`, `status`, `email`, `phone`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, NULL, 'twohundred', 'company 200', NULL, 'twohundred.localhost', NULL, 'company@gmail.com', NULL, NULL, '$2y$10$TARQlRkD5SxFRgGRfnWbD.LAG599XSwYTO9.RUgbp8aCPA/GR3cw2', NULL, '2023-04-11 22:34:22', '2023-04-11 22:34:22');

-- --------------------------------------------------------

--
-- Table structure for table `admin_sub_domain_auth_checks`
--

CREATE TABLE `admin_sub_domain_auth_checks` (
  `id` int(11) NOT NULL,
  `admin_id` bigint(20) UNSIGNED DEFAULT NULL,
  `subdomain_id` varchar(200) DEFAULT NULL,
  `token` varchar(250) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_sub_domain_auth_checks`
--

INSERT INTO `admin_sub_domain_auth_checks` (`id`, `admin_id`, `subdomain_id`, `token`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, 'FKxGBHc5lR3YEIgHGQcrB8bUs3r5WZV0JQP6cHJG', '2023-04-14 23:29:48', '2023-04-14 23:29:48');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `department` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `department`, `created_at`, `updated_at`) VALUES
(1, 'Web Department', NULL, NULL),
(2, 'IT Management', NULL, NULL),
(3, 'Marketing', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(4, '2023_04_04_024630_create_tenant_employees_table', 1),
(5, '2023_04_04_053339_create_departments_table', 1),
(6, '2023_04_05_040107_create_tenant_earning_deductions_table', 1),
(7, '2023_04_09_025904_create_super_admins_table', 1),
(8, '2023_04_09_031100_create_admins_table', 1),
(9, '2023_04_09_061613_create_tenant_users_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `super_admins`
--

CREATE TABLE `super_admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `status` varchar(255) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `super_admins`
--

INSERT INTO `super_admins` (`id`, `name`, `phone`, `email`, `status`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'mujammel', '01850134450', 'mujammel@gmail.com', NULL, NULL, '$2y$10$wqcI1tU9tJGeoB8uilXJdOMy73NyF/jWScRfQOd6o8RKlyER/l89K', NULL, '2023-04-11 22:34:22', '2023-04-11 22:34:22');

-- --------------------------------------------------------

--
-- Table structure for table `tenant_earning_deductions`
--

CREATE TABLE `tenant_earning_deductions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tenant_employee_id` bigint(20) UNSIGNED NOT NULL,
  `gross_salary` double(10,2) DEFAULT NULL,
  `basic` double(10,2) DEFAULT NULL,
  `house_rent` double(10,2) DEFAULT NULL,
  `medical` double(10,2) DEFAULT NULL,
  `transportation` double(10,2) DEFAULT NULL,
  `mobile` double(10,2) DEFAULT NULL,
  `lumpsum` varchar(255) DEFAULT NULL,
  `income_tax` double(6,2) DEFAULT NULL,
  `absence` double(6,2) DEFAULT NULL,
  `advance` double(10,2) DEFAULT NULL,
  `loan` double(10,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tenant_earning_deductions`
--

INSERT INTO `tenant_earning_deductions` (`id`, `tenant_employee_id`, `gross_salary`, `basic`, `house_rent`, `medical`, `transportation`, `mobile`, `lumpsum`, `income_tax`, `absence`, `advance`, `loan`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, 60000.00, 6000.00, 5000.00, 8000.00, 5000.00, NULL, 4.00, 8.00, 500.00, 50000.00, '2023-04-11 22:40:08', '2023-04-11 22:40:08');

-- --------------------------------------------------------

--
-- Table structure for table `tenant_employees`
--

CREATE TABLE `tenant_employees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tenant_user_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `dob` varchar(255) DEFAULT NULL,
  `joining_date` date DEFAULT NULL,
  `designation` varchar(255) DEFAULT NULL,
  `department_id` bigint(20) UNSIGNED DEFAULT NULL,
  `national_id` varchar(255) DEFAULT NULL,
  `bank_account` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tenant_employees`
--

INSERT INTO `tenant_employees` (`id`, `tenant_user_id`, `name`, `phone`, `address`, `email`, `gender`, `dob`, `joining_date`, `designation`, `department_id`, `national_id`, `bank_account`, `created_at`, `updated_at`) VALUES
(1, 1, 'abrar', '015845655', 'uttara,', 'abrar@gmail.com', 'male', '2023-04-11', '2023-04-07', 'Junior Programmer', 2, '566885', '5265988', '2023-04-11 22:39:21', '2023-04-11 22:39:21');

-- --------------------------------------------------------

--
-- Table structure for table `tenant_users`
--

CREATE TABLE `tenant_users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `present_address` varchar(255) NOT NULL,
  `permanent_address` varchar(255) NOT NULL,
  `national_id` varchar(255) DEFAULT NULL,
  `bank_ac` varchar(255) DEFAULT NULL,
  `department` varchar(255) DEFAULT NULL,
  `dob` date NOT NULL,
  `gender` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `status` varchar(255) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tenant_users`
--

INSERT INTO `tenant_users` (`id`, `name`, `phone`, `present_address`, `permanent_address`, `national_id`, `bank_ac`, `department`, `dob`, `gender`, `email`, `status`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'abrar', '015845655', 'uttara, dhaka', 'dhaka', '566885', '5265988', NULL, '2023-04-11', 'male', 'abrar@gmail.com', NULL, NULL, '$2y$10$I7NDDVi6HDFb6yxpY3WSh.hqirktyF7ebH0tOOsSjUDTlaStB/2RK', NULL, '2023-04-11 22:35:57', '2023-04-11 22:35:57');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_org_id_unique` (`org_id`),
  ADD UNIQUE KEY `admins_tenant_url_unique` (`tenant_url`),
  ADD UNIQUE KEY `admins_email_unique` (`email`),
  ADD UNIQUE KEY `admins_phone_unique` (`phone`);

--
-- Indexes for table `admin_sub_domain_auth_checks`
--
ALTER TABLE `admin_sub_domain_auth_checks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `super_admins`
--
ALTER TABLE `super_admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `super_admins_phone_unique` (`phone`),
  ADD UNIQUE KEY `super_admins_email_unique` (`email`);

--
-- Indexes for table `tenant_earning_deductions`
--
ALTER TABLE `tenant_earning_deductions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tenant_earning_deductions_tenant_employee_id_foreign` (`tenant_employee_id`);

--
-- Indexes for table `tenant_employees`
--
ALTER TABLE `tenant_employees`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tenant_employees_email_unique` (`email`);

--
-- Indexes for table `tenant_users`
--
ALTER TABLE `tenant_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admin_sub_domain_auth_checks`
--
ALTER TABLE `admin_sub_domain_auth_checks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `super_admins`
--
ALTER TABLE `super_admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tenant_earning_deductions`
--
ALTER TABLE `tenant_earning_deductions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tenant_employees`
--
ALTER TABLE `tenant_employees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tenant_users`
--
ALTER TABLE `tenant_users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tenant_earning_deductions`
--
ALTER TABLE `tenant_earning_deductions`
  ADD CONSTRAINT `tenant_earning_deductions_tenant_employee_id_foreign` FOREIGN KEY (`tenant_employee_id`) REFERENCES `tenant_employees` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
