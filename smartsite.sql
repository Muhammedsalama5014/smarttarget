-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 30, 2023 at 12:29 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smartsite`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_pages`
--

CREATE TABLE `about_pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `bg_image` varchar(255) NOT NULL,
  `bg_image_title` varchar(255) DEFAULT NULL,
  `bg_image_desc` text DEFAULT NULL,
  `h_title` varchar(255) NOT NULL,
  `h_desc` text NOT NULL,
  `guide_title` varchar(255) NOT NULL,
  `guide_desc1` text NOT NULL,
  `guide_desc2` text NOT NULL,
  `guide_image` text NOT NULL,
  `guide_image_title` varchar(255) DEFAULT NULL,
  `guide_image_desc` text DEFAULT NULL,
  `profile` varchar(255) NOT NULL,
  `about_title` varchar(255) NOT NULL,
  `about_desc1` text NOT NULL,
  `about_desc2` text NOT NULL,
  `mission` text NOT NULL,
  `vision` text NOT NULL,
  `about_image1` varchar(255) NOT NULL,
  `about_image2` varchar(255) NOT NULL,
  `about_image1_title` varchar(255) DEFAULT NULL,
  `about_image1_desc` text DEFAULT NULL,
  `about_image2_title` varchar(255) DEFAULT NULL,
  `about_image2_desc` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about_pages`
--

INSERT INTO `about_pages` (`id`, `bg_image`, `bg_image_title`, `bg_image_desc`, `h_title`, `h_desc`, `guide_title`, `guide_desc1`, `guide_desc2`, `guide_image`, `guide_image_title`, `guide_image_desc`, `profile`, `about_title`, `about_desc1`, `about_desc2`, `mission`, `vision`, `about_image1`, `about_image2`, `about_image1_title`, `about_image1_desc`, `about_image2_title`, `about_image2_desc`, `created_at`, `updated_at`) VALUES
(1, 'about/ZlPcmwegPJ1f0tJ1CEAyMeyQR5HRqplbNIJtovR7.jpg', 'TitleTest', 'ascascac', 'Test Title 2', 'Welcome to Our Smart World Yes Partner, Let\'s Talk...   Let Us Write a New Chapter of Your Business Success', 'Test Title 3', 'At Smart Target, we\'ve spent the last 15 years partnering with over 100 esteemed brands, establishing ourselves as a premier marketing force in the Middle East. With a commitment to modern marketing systems and sales enhancement techniques, we\'ve earned the trust of our clients, becoming steadfast partners in their journey toward success.', 'At Smart Target, we\'ve spent the last 15 years partnering with over 100 esteemed brands, establishing ourselves as a premier marketing force in the Middle East. With a commitment to modern marketing systems and sales enhancement techniques, we\'ve earned the trust of our clients, becoming steadfast partners in their journey toward success.', 'about/CQWaOaRVu7CN802vQTmyrLI78eEr0uhmBvrhWsWg.jpg', 'test title', 'test title', 'about/kgVmANVwSdM2NEQ9fQQOo4z7eUxMEyDM4yaYkiRJ.pdf', 'Test Title 2', 'At Smart Target, we\'ve spent the last 15 years partnering with over 100 esteemed brands, establishing ourselves as a premier marketing force in the Middle East. With a commitment to modern marketing systems and sales enhancement techniques, we\'ve earned the trust of our clients, becoming steadfast partners in their journey toward success.', 'At Smart Target, we\'ve spent the last 15 years partnering with over 100 esteemed brands, establishing ourselves as a premier marketing force in the Middle East. With a commitment to modern marketing systems and sales enhancement techniques, we\'ve earned the trust of our clients, becoming steadfast partners in their journey toward success.', 'At Smart Target, we\'ve spent the last 15 years partnering with over 100 esteemed brands, establishing ourselves as a premier marketing force in the Middle East. With a commitment to modern marketing systems and sales enhancement techniques, we\'ve earned the trust of our clients, becoming steadfast partners in their journey toward success.', 'At Smart Target, we\'ve spent the last 15 years partnering with over 100 esteemed brands, establishing ourselves as a premier marketing force in the Middle East. With a commitment to modern marketing systems and sales enhancement techniques, we\'ve earned the trust of our clients, becoming steadfast partners in their journey toward success.', 'about/QJVYEKyTZamTHJaxFaONu7WpMvuurIq3nnkmB2qi.jpg', 'about/Gf1hZzJM5360BllXfPNcjHBFZAzx4CkNuFvpIwIA.jpg', 'test title', 'test title', 'test title', 'test title', NULL, '2023-08-28 09:09:20');

-- --------------------------------------------------------

--
-- Table structure for table `add_features_to_socials`
--

CREATE TABLE `add_features_to_socials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `social_plan_id` int(10) UNSIGNED NOT NULL,
  `social_plan_feature_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `social_plan_name` text DEFAULT NULL,
  `social_plan_feature_name` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `add_features_to_socials`
--

INSERT INTO `add_features_to_socials` (`id`, `social_plan_id`, `social_plan_feature_id`, `created_at`, `updated_at`, `social_plan_name`, `social_plan_feature_name`) VALUES
(5, 3, 4, '2023-08-23 06:16:58', '2023-08-23 06:16:58', 'new me', 'buy anything'),
(6, 3, 3, '2023-08-24 09:10:04', '2023-08-24 09:10:04', 'new me', 'Test2');

-- --------------------------------------------------------

--
-- Table structure for table `best_projects`
--

CREATE TABLE `best_projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `month_name` varchar(255) NOT NULL,
  `image1` varchar(255) NOT NULL,
  `image2` varchar(255) NOT NULL,
  `image3` varchar(255) NOT NULL,
  `image4` varchar(255) NOT NULL,
  `image5` varchar(255) NOT NULL,
  `image1_title` text DEFAULT NULL,
  `image1_desc` text DEFAULT NULL,
  `image2_title` text DEFAULT NULL,
  `image2_desc` text DEFAULT NULL,
  `image3_title` text DEFAULT NULL,
  `image3_desc` text DEFAULT NULL,
  `image4_title` text DEFAULT NULL,
  `image4_desc` text DEFAULT NULL,
  `image5_title` text DEFAULT NULL,
  `image5_desc` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `best_projects`
--

INSERT INTO `best_projects` (`id`, `month_name`, `image1`, `image2`, `image3`, `image4`, `image5`, `image1_title`, `image1_desc`, `image2_title`, `image2_desc`, `image3_title`, `image3_desc`, `image4_title`, `image4_desc`, `image5_title`, `image5_desc`, `created_at`, `updated_at`) VALUES
(1, 'auguest', 'BestProject/AttsaqzOBmYPR72jkdvSPYIIEHGQc5Ff5rOlYSgA.png', 'BestProject/QB5T08x3ZywJFr7n38bbfTenlbjg2bYoyvWV8MVe.png', 'BestProject/WMj7aUaSDfv9QsW1HiCNIJ6Q2GOWdyx67xXNcLmd.png', 'BestProject/scDNPSYxvXtfFsDbyRXkY9OFempPRxTItJA43Wgo.png', 'BestProject/xZulh3gyoouaHPjpw1rbbo5kY18Br67J6aXyKvO0.png', 'test title', 'test title', 'test title', 'test title', 'test title', 'test title', 'test title', 'test title', 'test title', 'test title', '2023-08-22 06:45:39', '2023-08-26 21:49:36');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `image_title` varchar(255) DEFAULT NULL,
  `image_desc` text DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `s_description` text NOT NULL,
  `l_description` text NOT NULL,
  `blog_title_url` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `image`, `image_title`, `image_desc`, `title`, `s_description`, `l_description`, `blog_title_url`, `created_at`, `updated_at`) VALUES
(1, 'blog/GmgPRO2lPxKqKYcQfhL08DpmiAxWCLdv5SBaOeYe.jpg', 'test', 'test', 'nemmy', 'njgkszjfkjkgadfjkldgf\r\n                        aknsjfs,fgd', 'aosiofgjklajskjgkljklgaosiofgjklajskjgkljklgaosiofgjklajskjgkljklgaosiofgjklajskjgkljklgaosiofgjklajskjgkljklgaosiofgjklajskjgkljklg', '', '2023-08-23 06:02:17', '2023-08-27 09:46:38'),
(2, 'blog/ZK1kklkPdPXpVXaWj2hQDTOGCOf8qS9Y83LSht6S.jpg', 'test', 'test', 'test', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>testtesttesttesttesttesttesttesttesttest</p>\r\n</body>\r\n</html>', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>testtesttesttesttesttesttesttest</p>\r\n</body>\r\n</html>', 'test', '2023-08-29 10:52:02', '2023-08-29 10:52:02');

-- --------------------------------------------------------

--
-- Table structure for table `blog_pages`
--

CREATE TABLE `blog_pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `bg_image` varchar(255) NOT NULL,
  `bg_image_title` varchar(255) DEFAULT NULL,
  `bg_image_desc` text DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_pages`
--

INSERT INTO `blog_pages` (`id`, `bg_image`, `bg_image_title`, `bg_image_desc`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 'blog/zCEVeqFP8946g9FqVzlfRbepdCvrJw9VlPLoAu8n.png', 'dacas', 'ascascac', 'Test Title 222', 'Test Title 5665sg886', NULL, '2023-08-24 13:53:40');

-- --------------------------------------------------------

--
-- Table structure for table `brandings`
--

CREATE TABLE `brandings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `main_image` varchar(255) NOT NULL,
  `main_image_title` text NOT NULL,
  `main_image_desc` text NOT NULL,
  `title` varchar(255) NOT NULL,
  `categories` varchar(255) NOT NULL,
  `s_description` text NOT NULL,
  `l_description` text NOT NULL,
  `image1` varchar(255) NOT NULL,
  `image2` varchar(255) NOT NULL,
  `image3` varchar(255) NOT NULL,
  `image4` varchar(255) NOT NULL,
  `image1_title` text DEFAULT NULL,
  `image1_desc` text DEFAULT NULL,
  `image2_title` text DEFAULT NULL,
  `image2_desc` text DEFAULT NULL,
  `image3_title` text DEFAULT NULL,
  `image3_desc` text DEFAULT NULL,
  `image4_title` text DEFAULT NULL,
  `image4_desc` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brandings`
--

INSERT INTO `brandings` (`id`, `main_image`, `main_image_title`, `main_image_desc`, `title`, `categories`, `s_description`, `l_description`, `image1`, `image2`, `image3`, `image4`, `image1_title`, `image1_desc`, `image2_title`, `image2_desc`, `image3_title`, `image3_desc`, `image4_title`, `image4_desc`, `created_at`, `updated_at`) VALUES
(4, 'branding/qzNz8NMCUKXL5dAwmzT5QZcppxt2LOEYA5CnP1KB.png', 'test', 'test', 'new me', 'me', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>kljkjkjkjkljk</p>\r\n</body>\r\n</html>', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>jkljkljkljkjkljkljljkljkljkjj</p>\r\n</body>\r\n</html>', 'branding/lJ6fMbH7mpUCvjmmpsjpOYXCJpfBhnGxY5wh1jgO.png', 'branding/0M2XrAa4fhAicmV2HS0mjESAi2hYKj1PVWTN9KOJ.png', 'branding/yEWx6rZ0b36oXOA3beqPD88Wf5DnbwmO07WpV0h6.png', 'branding/tRtQQ6FuCZle4Ov6r5gDupVsnJvSq3lHrg9gLz6O.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-23 06:32:01', '2023-08-27 08:41:29');

-- --------------------------------------------------------

--
-- Table structure for table `branding_pages`
--

CREATE TABLE `branding_pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `bg_image` varchar(255) NOT NULL,
  `bg_image_title` text DEFAULT NULL,
  `bg_image_desc` text DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `branding_pages`
--

INSERT INTO `branding_pages` (`id`, `bg_image`, `bg_image_title`, `bg_image_desc`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 'branding/cxxi2Bqhu6R88O5MS6ZNAz6nqXF2apAlwlmzQIhH.png', 'TitleTest', 'TitleTest', 'Test Titlyyy', 'Test TitleTest TitleTest TitleTest TitleTest Title', NULL, '2023-08-26 12:10:36');

-- --------------------------------------------------------

--
-- Table structure for table `brand_goals`
--

CREATE TABLE `brand_goals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `budget` varchar(255) NOT NULL,
  `goals` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brand_goals`
--

INSERT INTO `brand_goals` (`id`, `name`, `email`, `phone`, `budget`, `goals`, `created_at`, `updated_at`) VALUES
(1, 'Ahmed karem', 'ak5464235@gmail.com', '01128120374', '988', '78', '2023-08-27 10:32:15', '2023-08-27 10:32:15');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `name_title` text DEFAULT NULL,
  `name_desc` text DEFAULT NULL,
  `link` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `name`, `name_title`, `name_desc`, `link`, `created_at`, `updated_at`) VALUES
(1, 'clients/3eVJMoprj8SyQRotDkPp9pvrqfSrXHjHT3rw0ATn.png', 'test', 'test', 'link', '2023-08-23 06:23:02', '2023-08-26 21:35:20'),
(3, 'clients/3eVJMoprj8SyQRotDkPp9pvrqfSrXHjHT3rw0ATn.png', 'test', 'test', 'link', '2023-08-23 06:23:02', '2023-08-26 21:35:20'),
(4, 'clients/3eVJMoprj8SyQRotDkPp9pvrqfSrXHjHT3rw0ATn.png', 'test', 'test', 'link', '2023-08-23 06:23:02', '2023-08-26 21:35:20'),
(5, 'clients/3eVJMoprj8SyQRotDkPp9pvrqfSrXHjHT3rw0ATn.png', 'test', 'test', 'link', '2023-08-23 06:23:02', '2023-08-26 21:35:20'),
(6, 'clients/3eVJMoprj8SyQRotDkPp9pvrqfSrXHjHT3rw0ATn.png', 'test', 'test', 'link', '2023-08-23 06:23:02', '2023-08-26 21:35:20'),
(7, 'clients/3eVJMoprj8SyQRotDkPp9pvrqfSrXHjHT3rw0ATn.png', 'test', 'test', 'link', '2023-08-23 06:23:02', '2023-08-26 21:35:20'),
(8, 'clients/3eVJMoprj8SyQRotDkPp9pvrqfSrXHjHT3rw0ATn.png', 'test', 'test', 'link', '2023-08-23 06:23:02', '2023-08-26 21:35:20');

-- --------------------------------------------------------

--
-- Table structure for table `contact_messages`
--

CREATE TABLE `contact_messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_messages`
--

INSERT INTO `contact_messages` (`id`, `name`, `email`, `phone`, `message`, `created_at`, `updated_at`) VALUES
(1, 'vdvsdv', 'm@m.com', '123456789', 'l klsdklv klddvnkl dklvnklsdv', '2023-08-29 19:10:13', '2023-08-29 19:10:13'),
(2, 'vdvsdv', 'm@m.com', '123456789', 'l klsdklv klddvnkl dklvnklsdv', '2023-08-29 19:10:37', '2023-08-29 19:10:37');

-- --------------------------------------------------------

--
-- Table structure for table `contact_pages`
--

CREATE TABLE `contact_pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `bg_image` varchar(255) NOT NULL,
  `bg_image_title` varchar(255) DEFAULT NULL,
  `bg_image_desc` text DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `map_link` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_pages`
--

INSERT INTO `contact_pages` (`id`, `bg_image`, `bg_image_title`, `bg_image_desc`, `title`, `description`, `map_link`, `created_at`, `updated_at`) VALUES
(1, 'contact/XzQpwAeWcagThxo4pOC9uTXrDLu7vFk8zGUs6z7N.png', 'TitleTest', 'test title', 'Connect with Smart Target', 'We\'re Here to Listen and Collaborate  Thank you for considering Smart Target as your partner in achieving digital success. Reach out to us using the contact details provided below, and let\'s embark on a journey of innovation and growth.', 'Test Title', NULL, '2023-08-26 21:33:53');

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
-- Table structure for table `hirings`
--

CREATE TABLE `hirings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `img` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `type` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hirings`
--

INSERT INTO `hirings` (`id`, `img`, `title`, `description`, `type`, `location`, `created_at`, `updated_at`) VALUES
(1, 'hiring/LxohGcrAlDwCbjOp35Tx1X7wssfUGiGrjVCluDev.png', 'Jop Kan', 'REER', 'test', 'kuwait', '2023-08-23 06:05:23', '2023-08-23 06:05:23');

-- --------------------------------------------------------

--
-- Table structure for table `hiring_pages`
--

CREATE TABLE `hiring_pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `bg_image` varchar(255) NOT NULL,
  `bg_image_title` varchar(255) DEFAULT NULL,
  `bg_image_desc` text DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hiring_pages`
--

INSERT INTO `hiring_pages` (`id`, `bg_image`, `bg_image_title`, `bg_image_desc`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, '1.png', 'vwev', 'wevwevwev', 'Test Title', 'Test Title', NULL, '2023-08-24 14:04:27');

-- --------------------------------------------------------

--
-- Table structure for table `hiring_requests`
--

CREATE TABLE `hiring_requests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `hiring_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `cover_letter` text NOT NULL,
  `cv` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hiring_requests`
--

INSERT INTO `hiring_requests` (`id`, `hiring_id`, `name`, `email`, `phone`, `cover_letter`, `cv`, `created_at`, `updated_at`) VALUES
(1, 1, 'dvsdv', 'm@m.com', '123456789', 'nkls klsvdvdvsdvsdv', 'hiringCv/AUQTmaN3LodWkJMweiCjF7cglXf4XVykqJoXMB3w.pdf', '2023-08-29 15:51:31', '2023-08-29 15:51:31'),
(2, 1, 'dcdcdc', 'csdcsdc@dvsdv.com', '123456789', 'vssdvvbisdvbuisdvsdvsdvsdvsdv', 'hiringCv/Iub4sfIdVTEOuDQVeVYGlTz3fUka2U5QgXd3Tfta.pdf', '2023-08-29 16:17:04', '2023-08-29 16:17:04');

-- --------------------------------------------------------

--
-- Table structure for table `home_pages`
--

CREATE TABLE `home_pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `header_video` varchar(255) NOT NULL,
  `who_title` varchar(255) NOT NULL,
  `who_description1` text NOT NULL,
  `who_description2` text NOT NULL,
  `who_img1` varchar(255) NOT NULL,
  `who_img2` varchar(255) NOT NULL,
  `who_img3` varchar(255) NOT NULL,
  `who_img1_title` varchar(255) DEFAULT NULL,
  `who_img1_desc` text DEFAULT NULL,
  `who_img2_title` varchar(255) DEFAULT NULL,
  `who_img2_desc` text DEFAULT NULL,
  `who_img3_title` varchar(255) DEFAULT NULL,
  `who_img3_desc` text DEFAULT NULL,
  `who_img4` varchar(255) NOT NULL,
  `about_title` varchar(255) NOT NULL,
  `about_description1` text NOT NULL,
  `about_description2` text NOT NULL,
  `vission` text NOT NULL,
  `mission` text NOT NULL,
  `vission_img` varchar(255) NOT NULL,
  `mission_img` varchar(255) NOT NULL,
  `mission_img_title` varchar(255) DEFAULT '',
  `mission_img_desc` text DEFAULT NULL,
  `vission_img_title` varchar(255) DEFAULT NULL,
  `vission_img_desc` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_pages`
--

INSERT INTO `home_pages` (`id`, `header_video`, `who_title`, `who_description1`, `who_description2`, `who_img1`, `who_img2`, `who_img3`, `who_img1_title`, `who_img1_desc`, `who_img2_title`, `who_img2_desc`, `who_img3_title`, `who_img3_desc`, `who_img4`, `about_title`, `about_description1`, `about_description2`, `vission`, `mission`, `vission_img`, `mission_img`, `mission_img_title`, `mission_img_desc`, `vission_img_title`, `vission_img_desc`, `created_at`, `updated_at`) VALUES
(1, 'home/hIK3QhxKPLXg2lBL49UPsdhZxAdRAyBtFdKiIAH1.mp4', 'WHO WE ARE', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>At Smart Target, we don\'t just offer services; we build partnerships that lead to prosperity. With a legacy spanning 15 years, we are a dynamic digital marketing agency in kuwait that breathes life into brands. Our commitment to excellence and innovation has made us a driving force in the industry. Our journey is marked by client success stories, where we have converted aspirations into achievements.</p>\r\n</body>\r\n</html>', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>Let Us Write a New Chapter of Your Business Success!</p>\r\n</body>\r\n</html>', 'home/UeRwmd6U9NXJfAd5PpeH5sIi3amdXK5kx8ySdFFP.jpg', 'home/URCPazgleLFGSxmUvPqB2oRz2cuAX8Lt0gDXFZmW.png', 'home/M3B9cbNvDs4mrOwWfQ5DYPmjBHljS432SMkfVC80.jpg', 'test title', 'test title', 'test title', 'test title', 'test title', 'test title', '1.png', 'ABOUT SMART TARGET', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>Over the past 15 years, we have worked with over 100 brands and have earned our position through a dedication to work and a focus on meeting your business needs and achieving the highest percentage of spread and sales.</p>\r\n</body>\r\n</html>', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>Smart Target is a comprehensive advertising agency that provides its clients with the highest level of advanced marketing services. You will not find a better partner for your business success than us.</p>\r\n</body>\r\n</html>', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>We serve our clients to achieve their business goals, within strategic planning of intensive care for each client project, through the best tactics.</p>\r\n</body>\r\n</html>', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>To be the innovative pioneer in providing business owners with our more than 14 years of business experience, solutions &amp; marketing services all over the MENA region</p>\r\n</body>\r\n</html>', 'home/0sROHyfxLwXxxGvg6u58Qk09woXQzCbzDS07iYwt.jpg', 'home/4lfYyKBfVhfHl7b49b8USmjyfYdz4jAxrOPtu1wI.jpg', 'test title', 'test title', 'test title', 'test title', NULL, '2023-08-27 07:57:58');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2023_08_18_120825_create_about_pages_table', 1),
(7, '2023_08_18_120848_create_best_projects_table', 1),
(8, '2023_08_18_122528_create_blog_pages_table', 1),
(9, '2023_08_18_122534_create_blogs_table', 1),
(10, '2023_08_18_122550_create_clients_table', 1),
(11, '2023_08_18_122605_create_contact_pages_table', 1),
(12, '2023_08_18_122619_create_contact_messages_table', 1),
(13, '2023_08_18_122634_create_hiring_pages_table', 1),
(14, '2023_08_18_122649_create_hirings_table', 1),
(15, '2023_08_18_122708_create_hiring_requests_table', 1),
(16, '2023_08_18_122722_create_home_pages_table', 1),
(17, '2023_08_18_122734_create_brand_goals_table', 1),
(18, '2023_08_18_122749_create_service_pages_table', 1),
(19, '2023_08_18_123143_create_services_table', 1),
(20, '2023_08_18_123154_create_teams_table', 1),
(21, '2023_08_18_123207_create_pricing_pages_table', 1),
(22, '2023_08_18_123221_create_other_plans_table', 1),
(23, '2023_08_18_123253_create_other_plan_features_table', 1),
(24, '2023_08_18_123308_create_social_plans_table', 1),
(25, '2023_08_18_123316_create_social_plan_features_table', 1),
(26, '2023_08_18_123340_create_add_features_to_socials_table', 1),
(27, '2023_08_18_123354_create_branding_pages_table', 1),
(28, '2023_08_18_123420_create_motion_pages_table', 1),
(29, '2023_08_18_123604_create_voice_pages_table', 1),
(30, '2023_08_18_124232_create_socialmedia_pages_table', 1),
(31, '2023_08_18_124246_create_website_pages_table', 1),
(32, '2023_08_18_124304_create_seo_pages_table', 1),
(33, '2023_08_18_124310_create_sem_pages_table', 1),
(34, '2023_08_18_124337_create_brandings_table', 1),
(35, '2023_08_18_124350_create_motions_table', 1),
(36, '2023_08_18_124400_create_socialmedia_table', 1),
(37, '2023_08_18_124417_create_voices_table', 1),
(38, '2023_08_18_124426_create_websites_table', 1),
(39, '2023_08_18_124440_create_plan_requests_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `motions`
--

CREATE TABLE `motions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `video` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `company` varchar(255) NOT NULL,
  `video1` varchar(255) NOT NULL,
  `video2` varchar(255) NOT NULL,
  `video3` varchar(255) NOT NULL,
  `video4` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `description` text DEFAULT NULL,
  `video5` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `motions`
--

INSERT INTO `motions` (`id`, `video`, `title`, `company`, `video1`, `video2`, `video3`, `video4`, `created_at`, `updated_at`, `description`, `video5`) VALUES
(2, 'motion/COWR74TI2tbZgKzPEptXepYNyLV0cMV3tI4dto0P.mp4', 'ccc', 'Damnhour University', 'motion/72AvTquPcZPK1DB3VsGLH8Aw0pOFnCYuFfPRrmzB.svg', 'motion/dk9xu553CB8Zur9GrYlgW1Yn0hqFr4bbMs4ljSRT.png', 'motion/KGaUwh6uurgBqbhAwyRxFSn1g4h4bh85U8pkQEG0.png', 'motion/v76BQXSN6nt0CXPjBfA2b7Qq9EvymLqNg1ezhCOX.jpg', '2023-08-22 06:50:08', '2023-08-27 09:55:23', 'nnnnn\r\n                        m m', 'motion/pqVfh6hAeiDai1vYJQGm6YAsmpOxrPjn7HvgJEF6.jpg'),
(3, 'motion/QLiZjfWxoReLuWzSyyajBzlvKo7IeRfKEEr29bOZ.mp4', 'description', 'description', 'motion/52RiVa28VXbbG7brtSUuxCjka3Ao8i4ZIovJZxZI.jpg', 'motion/vuzysKA1AKkwdpFLHMXyS32AVeFswpugGMazOy9W.jpg', 'motion/FZdGsxMwJ4DkR4U5nuShKz1dvbiG3TlO6DEOZwOK.jpg', 'motion/w7HA4tAZwppPIn22nBgqpuDez8JqjzosPmW7UCJz.png', '2023-08-27 09:11:49', '2023-08-27 09:11:49', 'description', 'motion/qp5zaKKz7DyGw8vlbxjCTDqZVmPIg3whbKzjPzKt.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `motion_pages`
--

CREATE TABLE `motion_pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `bg_image` varchar(255) NOT NULL,
  `bg_image_title` text DEFAULT NULL,
  `bg_image_desc` text DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `motion_pages`
--

INSERT INTO `motion_pages` (`id`, `bg_image`, `bg_image_title`, `bg_image_desc`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 'motion/htanxvaUNZQLFqPA01P38WQ0JLCxfxW6PgMP5emr.jpg', NULL, NULL, 'Test TitleTest Titlennnn', 'Test Title', NULL, '2023-08-22 06:06:59');

-- --------------------------------------------------------

--
-- Table structure for table `other_plans`
--

CREATE TABLE `other_plans` (
  `id` int(11) UNSIGNED NOT NULL,
  `icon` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `per` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `other_plans`
--

INSERT INTO `other_plans` (`id`, `icon`, `title`, `type`, `per`, `created_at`, `updated_at`) VALUES
(4, 'pricing/KednrxIfo7eIr50uCyY31hbXPj1lyQODitUizzq1.jpg', 'sssssssf', 'sssssss', 'sssssss', '2023-08-22 15:13:01', '2023-08-22 15:17:32'),
(6, 'pricing/QojHqg2C4CuN2yagannQ9YIXbMuJGRSTyahbeCuA.png', 'shreen', 'new Plan', 'Month', '2023-08-23 06:18:38', '2023-08-23 06:18:38');

-- --------------------------------------------------------

--
-- Table structure for table `other_plan_features`
--

CREATE TABLE `other_plan_features` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `other_plan_id` int(11) UNSIGNED DEFAULT NULL,
  `title` text NOT NULL,
  `price` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `other_plan_features`
--

INSERT INTO `other_plan_features` (`id`, `other_plan_id`, `title`, `price`, `created_at`, `updated_at`) VALUES
(2, NULL, 'b ffrtt', '55', NULL, '2023-08-22 15:52:22'),
(4, NULL, 'mkm', '13', '2023-08-22 15:42:37', '2023-08-22 15:42:37'),
(5, NULL, 'b ffrjbf', '13', '2023-08-22 15:48:43', '2023-08-22 15:48:43'),
(6, 4, 'b ffrr', '55', '2023-08-22 15:50:22', '2023-08-22 15:50:22'),
(7, NULL, 'b ffr', '55', '2023-08-22 15:50:31', '2023-08-22 15:50:31');

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
-- Table structure for table `plan_requests`
--

CREATE TABLE `plan_requests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `plan_name` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `plan_requests`
--

INSERT INTO `plan_requests` (`id`, `plan_name`, `name`, `email`, `phone`, `message`, `created_at`, `updated_at`) VALUES
(1, 'test1', 'test', 'test', 'test', 'test', '2023-08-23 08:07:08', '2023-08-23 08:07:08');

-- --------------------------------------------------------

--
-- Table structure for table `pricing_pages`
--

CREATE TABLE `pricing_pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `bg_image` varchar(255) NOT NULL,
  `bg_image_title` text DEFAULT NULL,
  `bg_image_desc` text DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pricing_pages`
--

INSERT INTO `pricing_pages` (`id`, `bg_image`, `bg_image_title`, `bg_image_desc`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 'branding/RFWouV3mGxf4CeJQq1mvBYSyVpxjJCfmEkmknHUs.jpg', 'TitleTest', 'test title', 'Test Titledd', 'Test Title', NULL, '2023-08-26 21:39:07');

-- --------------------------------------------------------

--
-- Table structure for table `sem_pages`
--

CREATE TABLE `sem_pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `bg_image` varchar(255) NOT NULL,
  `bg_image_title` text DEFAULT NULL,
  `bg_image_desc` text DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sem_pages`
--

INSERT INTO `sem_pages` (`id`, `bg_image`, `bg_image_title`, `bg_image_desc`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 'sem/0wHZSZ9bea3Wjiw5qwCA49jQpiu6f8mW1ZEfFzQl.jpg', NULL, NULL, 'Test Titleb', 'Test Title', NULL, '2023-08-22 07:30:16');

-- --------------------------------------------------------

--
-- Table structure for table `seo_pages`
--

CREATE TABLE `seo_pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `bg_image` varchar(255) NOT NULL,
  `bg_image_title` text DEFAULT NULL,
  `bg_image_desc` text DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `seo_pages`
--

INSERT INTO `seo_pages` (`id`, `bg_image`, `bg_image_title`, `bg_image_desc`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 'seo/Gre5mUGZwpzrPYMs2ycxLUT5XEaOhmlEtZ0Arc3g.jpg', 'TitleTest', 'Test Title', 'Test Tit  nnnnle', 'Test Titlen', NULL, '2023-08-26 12:47:28');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `icon` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `sub_title` text NOT NULL,
  `s_description` text NOT NULL,
  `main_img` varchar(255) NOT NULL,
  `main_img_title` varchar(255) DEFAULT NULL,
  `main_img_desc` text DEFAULT NULL,
  `l_description` text NOT NULL,
  `end_img1` varchar(255) NOT NULL,
  `end_img2` varchar(255) NOT NULL,
  `end_img3` varchar(255) NOT NULL,
  `end_img4` varchar(255) NOT NULL,
  `end_img1_title` varchar(255) DEFAULT NULL,
  `end_img1_desc` text DEFAULT NULL,
  `end_img2_title` varchar(255) DEFAULT NULL,
  `end_img2_desc` text DEFAULT NULL,
  `end_img3_title` varchar(255) DEFAULT NULL,
  `end_img3_desc` text DEFAULT NULL,
  `end_img4_title` varchar(255) DEFAULT NULL,
  `end_img4_desc` text DEFAULT NULL,
  `service_title_url` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `icon`, `title`, `sub_title`, `s_description`, `main_img`, `main_img_title`, `main_img_desc`, `l_description`, `end_img1`, `end_img2`, `end_img3`, `end_img4`, `end_img1_title`, `end_img1_desc`, `end_img2_title`, `end_img2_desc`, `end_img3_title`, `end_img3_desc`, `end_img4_title`, `end_img4_desc`, `service_title_url`, `created_at`, `updated_at`) VALUES
(3, 'service/5b7WoXftqizbvFjP16zsDwkt3ykaga84IxYH38Xf.png', 'Test Service', 'Test Service', 'Test Service', 'service/8bmZSkE5afnGvybVq1Ac3mTI3iVd78GbAwgdCFUQ.jpg', 'Test Service', 'Test Service', 'Test Service', 'service/FxLAkPNvJNKOYaH8HfbrBQZQZ6flN0jUnBNSl77j.jpg', 'service/sQKyHM9u0GHiwEWDJlOs162gDbng8vfLk2xmpSo5.jpg', 'service/edSifjNekdhcRZ4PYK3vylwZUca8GVoPlaFClQOY.jpg', 'service/C9hswGulkCec5TsZI1Wyq9SouajjYxbhnHt0UCLg.jpg', 'Test Service', 'Test Service', 'v', 'v', 'Test Service', 'Test Service', 'Test Service', 'Test Service', 'Test Service', '2023-08-27 10:46:08', '2023-08-27 10:46:08'),
(4, 'service/5b7WoXftqizbvFjP16zsDwkt3ykaga84IxYH38Xf.png', 'Test Service', 'Test Service', 'Test Service', 'service/8bmZSkE5afnGvybVq1Ac3mTI3iVd78GbAwgdCFUQ.jpg', 'Test Service', 'Test Service', 'Test Service', 'service/FxLAkPNvJNKOYaH8HfbrBQZQZ6flN0jUnBNSl77j.jpg', 'service/sQKyHM9u0GHiwEWDJlOs162gDbng8vfLk2xmpSo5.jpg', 'service/edSifjNekdhcRZ4PYK3vylwZUca8GVoPlaFClQOY.jpg', 'service/C9hswGulkCec5TsZI1Wyq9SouajjYxbhnHt0UCLg.jpg', 'Test Service', 'Test Service', 'v', 'v', 'Test Service', 'Test Service', 'Test Service', 'Test Service', 'Test Service', '2023-08-27 10:46:08', '2023-08-27 10:46:08'),
(5, 'service/5b7WoXftqizbvFjP16zsDwkt3ykaga84IxYH38Xf.png', 'Test Service', 'Test Service', 'Test Service', 'service/8bmZSkE5afnGvybVq1Ac3mTI3iVd78GbAwgdCFUQ.jpg', 'Test Service', 'Test Service', 'Test Service', 'service/FxLAkPNvJNKOYaH8HfbrBQZQZ6flN0jUnBNSl77j.jpg', 'service/sQKyHM9u0GHiwEWDJlOs162gDbng8vfLk2xmpSo5.jpg', 'service/edSifjNekdhcRZ4PYK3vylwZUca8GVoPlaFClQOY.jpg', 'service/C9hswGulkCec5TsZI1Wyq9SouajjYxbhnHt0UCLg.jpg', 'Test Service', 'Test Service', 'v', 'v', 'Test Service', 'Test Service', 'Test Service', 'Test Service', 'Test Service', '2023-08-27 10:46:08', '2023-08-27 10:46:08');

-- --------------------------------------------------------

--
-- Table structure for table `service_pages`
--

CREATE TABLE `service_pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `bg_image` varchar(255) NOT NULL,
  `bg_image_title` varchar(255) DEFAULT NULL,
  `bg_image_desc` text DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `subtitle` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `service_pages`
--

INSERT INTO `service_pages` (`id`, `bg_image`, `bg_image_title`, `bg_image_desc`, `title`, `subtitle`, `description`, `created_at`, `updated_at`) VALUES
(1, 'service/U7XIeLNszZOdBn5oAkJEto4hEfBTDQRbzrsdK3Ks.jpg', 'cklascasckl', 'as;mcasklasklc', 'Test Title 2', 'Test Title 3', '23234gfskjk', NULL, '2023-08-28 09:57:53');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `logo` varchar(255) NOT NULL,
  `name` text NOT NULL,
  `description` text NOT NULL,
  `keywords` text NOT NULL,
  `icon` text NOT NULL,
  `footer_description` text NOT NULL,
  `address` text NOT NULL,
  `phone1` text NOT NULL,
  `phone2` text NOT NULL,
  `email` text NOT NULL,
  `facebook` text NOT NULL,
  `instagram` text NOT NULL,
  `twitter` text NOT NULL,
  `behance` text NOT NULL,
  `snapchat` text NOT NULL,
  `messanger` text NOT NULL,
  `whatsapp` text NOT NULL,
  `telegram` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `youtube` text DEFAULT NULL,
  `linkedin` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `logo`, `name`, `description`, `keywords`, `icon`, `footer_description`, `address`, `phone1`, `phone2`, `email`, `facebook`, `instagram`, `twitter`, `behance`, `snapchat`, `messanger`, `whatsapp`, `telegram`, `created_at`, `updated_at`, `youtube`, `linkedin`) VALUES
(1, 'setting/ttQigbvdmwACFN9sY146w1ZRCWwYA9TdH5gRoghv.png', 'testee', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', NULL, '2023-08-27 10:36:37', 'test', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `socialmedia`
--

CREATE TABLE `socialmedia` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `main_image` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `categories` varchar(255) NOT NULL,
  `s_description` text NOT NULL,
  `l_description` text NOT NULL,
  `image1` varchar(255) NOT NULL,
  `image2` varchar(255) NOT NULL,
  `image3` varchar(255) NOT NULL,
  `image4` varchar(255) NOT NULL,
  `main_image_title` text DEFAULT NULL,
  `main_image_desc` text DEFAULT NULL,
  `image1_title` text DEFAULT NULL,
  `image1_desc` text DEFAULT NULL,
  `image2_title` text DEFAULT NULL,
  `image2_desc` text DEFAULT NULL,
  `image3_title` text DEFAULT NULL,
  `image3_desc` text DEFAULT NULL,
  `image4_title` text DEFAULT NULL,
  `image4_desc` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `socialmedia`
--

INSERT INTO `socialmedia` (`id`, `main_image`, `title`, `categories`, `s_description`, `l_description`, `image1`, `image2`, `image3`, `image4`, `main_image_title`, `main_image_desc`, `image1_title`, `image1_desc`, `image2_title`, `image2_desc`, `image3_title`, `image3_desc`, `image4_title`, `image4_desc`, `created_at`, `updated_at`) VALUES
(2, 'socialmedia/gArd2jS3l6JFifE6qa9qKJd83IOndwvLtRqIWDyZ.jpg', 'test data', 'test', 'testtesttesttesttesttesttesttesttest', 'testtesttesttesttesttesttesttesttesttest', 'socialmedia/fgVmTmDaMoYTu4c39iKeuDLjDylUi37KYW5f60TA.png', 'socialmedia/RIlfVlZiQwtRWN2ccWg1wfYqMuTAJwhhdIHrsV2s.jpg', 'socialmedia/5VKl0FCYwOkiYgj5ffBvs5wmDUXKQwnASGiFyLgX.jpg', 'socialmedia/LZUdv2lLeAxsw5pOPHbKS5FhtugWu7tKixc6t8FD.jpg', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', '2023-08-27 08:48:26', '2023-08-27 08:48:26');

-- --------------------------------------------------------

--
-- Table structure for table `socialmedia_pages`
--

CREATE TABLE `socialmedia_pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `bg_image` varchar(255) NOT NULL,
  `bg_image_title` text DEFAULT NULL,
  `bg_image_desc` text DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `socialmedia_pages`
--

INSERT INTO `socialmedia_pages` (`id`, `bg_image`, `bg_image_title`, `bg_image_desc`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 'branding/0fzfxQhVOzxWy5whS347BolrE0HmxoLQv4U0XUwg.jpg', 'TitleTest', 'ascascac', 'Test Titlegngh', 'Test Title', NULL, '2023-08-26 12:35:13');

-- --------------------------------------------------------

--
-- Table structure for table `social_plans`
--

CREATE TABLE `social_plans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `icon` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `social_plans`
--

INSERT INTO `social_plans` (`id`, `icon`, `title`, `price`, `created_at`, `updated_at`) VALUES
(3, 'pricing/LuHIJ2FRZkQY2TRkqZEajxzAipqcNYYEpCdZjAgJ.png', 'new me', '15000000000', '2023-08-23 06:10:45', '2023-08-23 06:10:45'),
(4, 'pricing/xRN1VLFFM7OCO6fx0WngaQPbqlhlnJmZEvz73dNm.png', 'new m4 me', '200000000', '2023-08-23 06:11:43', '2023-08-23 06:11:43');

-- --------------------------------------------------------

--
-- Table structure for table `social_plan_features`
--

CREATE TABLE `social_plan_features` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `social_plan_features`
--

INSERT INTO `social_plan_features` (`id`, `title`, `created_at`, `updated_at`) VALUES
(3, 'Test2', '2023-08-23 04:20:15', '2023-08-23 04:20:15'),
(4, 'buy anything', '2023-08-23 06:13:49', '2023-08-23 06:13:49');

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `img` varchar(255) NOT NULL,
  `img_title` varchar(255) DEFAULT NULL,
  `img_desc` text DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `video` text NOT NULL,
  `about` text NOT NULL,
  `experiance` text NOT NULL,
  `education` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `img`, `img_title`, `img_desc`, `name`, `position`, `description`, `video`, `about`, `experiance`, `education`, `created_at`, `updated_at`) VALUES
(1, 'team/KfMuJAQKyqdn2t41sZ1LVxDhysh3LYNsI4jFhTmU.png', 'test', 'test', 'Waddah Salama', 'CEO', 'This is website Desceiption This is website Desceiption This is website Desceiption This is website Desceiption This is website DesceiptionThis is website Desceiption This is website Desceiption This is website Desceiption This is website Desceiption', 'team/sBTfdnSj6ColF2HymhEXgDUDi0k5QA7fv4hF7jTt.mp4', 'test descriptiondddddd', '4', 'Developerww', '2023-08-27 10:04:11', '2023-08-27 10:05:50'),
(2, 'team/g2Ee0nUg9ceYjLSJOcuFD5sZg8dK2NKg0YlN1S1Q.jpg', 'test', 'test', 'Ahmed karem', 'Developer', 'This is website Desceiption', 'team/XY0QfMdkfIrN6Ja1YxO7jDuyNZGvlsO3KX9LTDwH.mp4', 'test descriptiondddddd', '4', 'Developer', '2023-08-27 10:03:06', '2023-08-27 10:03:06');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `two_factor_secret` text DEFAULT NULL,
  `two_factor_recovery_codes` text DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@smarttargetkwt.com', '2023-08-22 06:58:33', '$2y$10$zsn8cpDSKR0qmEJv506pG.E7HqcWs5V9VGR1XtQ2JE4QZ.u2YHmOK', NULL, NULL, NULL, NULL, '2023-08-22 06:58:33', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `voices`
--

CREATE TABLE `voices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `audio` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `voices`
--

INSERT INTO `voices` (`id`, `audio`, `title`, `type`, `created_at`, `updated_at`) VALUES
(2, 'voices/TOTmoANWt0OUzYSHLvy8zZ5nZAGzc2Ow7WBqMiQV.mp3', 'Test', 'Test', '2023-08-22 09:37:46', '2023-08-22 09:37:46'),
(3, 'voices/b81kmvgZvY4vn6KJZyDG0tOp36maAUQWkEpoQEDT.mp3', 'vvv', 'vvv', '2023-08-22 09:38:12', '2023-08-22 09:38:12');

-- --------------------------------------------------------

--
-- Table structure for table `voice_pages`
--

CREATE TABLE `voice_pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `bg_image` varchar(255) NOT NULL,
  `bg_image_title` text DEFAULT NULL,
  `bg_image_desc` text DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `voice_pages`
--

INSERT INTO `voice_pages` (`id`, `bg_image`, `bg_image_title`, `bg_image_desc`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 'voice/oVpLzx8s30kRXNKEFKRRlSC0vXpWpggrBlN7oEP8.jpg', 'ascmascma', 'as;mcasklasklc', 'Test Titled', 'Test Title', NULL, '2023-08-26 12:28:48');

-- --------------------------------------------------------

--
-- Table structure for table `websites`
--

CREATE TABLE `websites` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(255) NOT NULL,
  `main_image` varchar(255) NOT NULL,
  `main_image_title` text DEFAULT NULL,
  `main_image_desc` text DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `s_description` text NOT NULL,
  `image1` varchar(255) NOT NULL,
  `image2` varchar(255) NOT NULL,
  `image3` varchar(255) NOT NULL,
  `image4` varchar(255) NOT NULL,
  `image1_title` text DEFAULT NULL,
  `image1_desc` text DEFAULT NULL,
  `image2_title` text DEFAULT NULL,
  `image2_desc` text DEFAULT NULL,
  `image3_title` text DEFAULT NULL,
  `image3_desc` text DEFAULT NULL,
  `sec1_image` varchar(255) NOT NULL,
  `sec1_title` varchar(255) NOT NULL,
  `sec1_description` text NOT NULL,
  `sec2_image` varchar(255) NOT NULL,
  `sec1_image_title` text DEFAULT NULL,
  `sec1_image_desc` text DEFAULT NULL,
  `sec2_image_title` text DEFAULT NULL,
  `sec2_image_desc` text DEFAULT NULL,
  `sec2_title` varchar(255) NOT NULL,
  `sec2_description` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `websites`
--

INSERT INTO `websites` (`id`, `type`, `main_image`, `main_image_title`, `main_image_desc`, `title`, `s_description`, `image1`, `image2`, `image3`, `image4`, `image1_title`, `image1_desc`, `image2_title`, `image2_desc`, `image3_title`, `image3_desc`, `sec1_image`, `sec1_title`, `sec1_description`, `sec2_image`, `sec1_image_title`, `sec1_image_desc`, `sec2_image_title`, `sec2_image_desc`, `sec2_title`, `sec2_description`, `created_at`, `updated_at`) VALUES
(1, 'One', 'website/JBiszJZpZqlNpvy124wPU6s071OLDfIbP28M7E8a.jpg', NULL, NULL, 'Website', 'Website', 'Website', 'Website', 'Website', '1.png', NULL, NULL, NULL, NULL, NULL, NULL, 'Website', 'Website', 'Website', 'Website', NULL, NULL, NULL, NULL, 'Website', 'Website', NULL, '2023-08-22 11:35:22');

-- --------------------------------------------------------

--
-- Table structure for table `website_pages`
--

CREATE TABLE `website_pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `bg_image` varchar(255) NOT NULL,
  `bg_image_title` text DEFAULT NULL,
  `bg_image_desc` text DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `website_pages`
--

INSERT INTO `website_pages` (`id`, `bg_image`, `bg_image_title`, `bg_image_desc`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 'website/SopiFL50Xs3iIbKMU6hUwt5fwiQywoYXTUNH6Bui.jpg', 'TitleTest', 'ascascac', 'Test Titlejbj', 'Test Title', NULL, '2023-08-26 12:48:22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_pages`
--
ALTER TABLE `about_pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `add_features_to_socials`
--
ALTER TABLE `add_features_to_socials`
  ADD PRIMARY KEY (`id`),
  ADD KEY `social_plan_id` (`social_plan_id`),
  ADD KEY `social_plan_feature_id` (`social_plan_feature_id`);

--
-- Indexes for table `best_projects`
--
ALTER TABLE `best_projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_pages`
--
ALTER TABLE `blog_pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brandings`
--
ALTER TABLE `brandings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `branding_pages`
--
ALTER TABLE `branding_pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brand_goals`
--
ALTER TABLE `brand_goals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_messages`
--
ALTER TABLE `contact_messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_pages`
--
ALTER TABLE `contact_pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `hirings`
--
ALTER TABLE `hirings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hiring_pages`
--
ALTER TABLE `hiring_pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hiring_requests`
--
ALTER TABLE `hiring_requests`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hiring_requests_hiring_id_foreign` (`hiring_id`);

--
-- Indexes for table `home_pages`
--
ALTER TABLE `home_pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `motions`
--
ALTER TABLE `motions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `motion_pages`
--
ALTER TABLE `motion_pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `other_plans`
--
ALTER TABLE `other_plans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `other_plan_features`
--
ALTER TABLE `other_plan_features`
  ADD PRIMARY KEY (`id`),
  ADD KEY `other_plan_features_other_plan_id_foreign` (`other_plan_id`);

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
-- Indexes for table `plan_requests`
--
ALTER TABLE `plan_requests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pricing_pages`
--
ALTER TABLE `pricing_pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sem_pages`
--
ALTER TABLE `sem_pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seo_pages`
--
ALTER TABLE `seo_pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_pages`
--
ALTER TABLE `service_pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `socialmedia`
--
ALTER TABLE `socialmedia`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `socialmedia_pages`
--
ALTER TABLE `socialmedia_pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social_plans`
--
ALTER TABLE `social_plans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social_plan_features`
--
ALTER TABLE `social_plan_features`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `voices`
--
ALTER TABLE `voices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `voice_pages`
--
ALTER TABLE `voice_pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `websites`
--
ALTER TABLE `websites`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `website_pages`
--
ALTER TABLE `website_pages`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_pages`
--
ALTER TABLE `about_pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `add_features_to_socials`
--
ALTER TABLE `add_features_to_socials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `best_projects`
--
ALTER TABLE `best_projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `blog_pages`
--
ALTER TABLE `blog_pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `brandings`
--
ALTER TABLE `brandings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `branding_pages`
--
ALTER TABLE `branding_pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `brand_goals`
--
ALTER TABLE `brand_goals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `contact_messages`
--
ALTER TABLE `contact_messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contact_pages`
--
ALTER TABLE `contact_pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hirings`
--
ALTER TABLE `hirings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `hiring_pages`
--
ALTER TABLE `hiring_pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `hiring_requests`
--
ALTER TABLE `hiring_requests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `home_pages`
--
ALTER TABLE `home_pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `motions`
--
ALTER TABLE `motions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `motion_pages`
--
ALTER TABLE `motion_pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `other_plans`
--
ALTER TABLE `other_plans`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `other_plan_features`
--
ALTER TABLE `other_plan_features`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `plan_requests`
--
ALTER TABLE `plan_requests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pricing_pages`
--
ALTER TABLE `pricing_pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sem_pages`
--
ALTER TABLE `sem_pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `seo_pages`
--
ALTER TABLE `seo_pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `service_pages`
--
ALTER TABLE `service_pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `socialmedia`
--
ALTER TABLE `socialmedia`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `socialmedia_pages`
--
ALTER TABLE `socialmedia_pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `social_plans`
--
ALTER TABLE `social_plans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `social_plan_features`
--
ALTER TABLE `social_plan_features`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `voices`
--
ALTER TABLE `voices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `voice_pages`
--
ALTER TABLE `voice_pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `websites`
--
ALTER TABLE `websites`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `website_pages`
--
ALTER TABLE `website_pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `hiring_requests`
--
ALTER TABLE `hiring_requests`
  ADD CONSTRAINT `hiring_requests_hiring_id_foreign` FOREIGN KEY (`hiring_id`) REFERENCES `hirings` (`id`);

--
-- Constraints for table `other_plan_features`
--
ALTER TABLE `other_plan_features`
  ADD CONSTRAINT `other_plan_features_other_plan_id_foreign` FOREIGN KEY (`other_plan_id`) REFERENCES `other_plans` (`id`) ON DELETE SET NULL ON UPDATE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
