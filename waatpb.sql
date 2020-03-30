-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 30, 2020 at 09:20 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `waatpb`
--

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
(1, '2020_03_15_083450_tbl_member', 1),
(2, '2020_03_15_183242_tbl_job', 2),
(3, '2020_03_19_083518_tbl_history', 3),
(4, '2020_03_19_084741_tbl_about', 4),
(5, '2020_03_19_091258_tbl_header', 5),
(6, '2020_03_19_102016_tbl_event', 6),
(7, '2020_03_22_062947_tbl_gallary', 7),
(8, '2020_03_22_073640_tbl_join_event', 8),
(9, '2020_03_26_100552_tbl_member_skill', 9),
(10, '2014_10_12_000000_create_users_table', 10),
(11, '2020_03_26_111001_add_role_column_in_users', 10),
(12, '2020_03_27_120008_tbl_service', 11);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_about`
--

CREATE TABLE `tbl_about` (
  `about_id` int(10) UNSIGNED NOT NULL,
  `about_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `about_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_about`
--

INSERT INTO `tbl_about` (`about_id`, `about_title`, `about_description`, `image`, `created_at`, `updated_at`) VALUES
(3, 'WELCOME TO WAATPB', 'Our mission is to bring All those Professionals from Textile & Apparel Industries under one umbrella who feels the passion for the goodwill of the sector & also would like to improve the Socio-financial status of its members. Our vision is to be the best group of the country enriched with exemplary human beings for whom every countryman feels proud. Our vision is to be the best group of the country enriched with exemplary human beings for whom every countryman feels proud.', 'image/JnILqLeraW.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_event`
--

CREATE TABLE `tbl_event` (
  `event_id` int(10) UNSIGNED NOT NULL,
  `event_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `event_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `event_date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_event`
--

INSERT INTO `tbl_event` (`event_id`, `event_title`, `event_image`, `event_date`, `created_at`, `updated_at`) VALUES
(1, 'Badminton', 'image/E2X4IEa8MtsS6bN1qu8m.jpg', '2020-03-31', NULL, NULL),
(4, 'Badminton 3', 'image/S0JBljiDkDnr1fmUBxpI.jpg', '2020-04-03', NULL, NULL),
(5, 'Badminton 3', 'image/k6fuAivbaebP56IcJX0G.jpg', '2020-04-05', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gallary`
--

CREATE TABLE `tbl_gallary` (
  `image_id` int(10) UNSIGNED NOT NULL,
  `image_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_gallary`
--

INSERT INTO `tbl_gallary` (`image_id`, `image_title`, `image`, `created_at`, `updated_at`) VALUES
(1, 'image_1', 'image/M8Sh02ZIDObzdvvx8sfs.jpg', NULL, NULL),
(2, 'image_2', 'image/mKZXLiyW6a3ZHepEr4lb.jpg', NULL, NULL),
(3, 'image_3', 'image/VLztQbbv1CmExwcEbFaT.jpg', NULL, NULL),
(4, 'image_4', 'image/5Sfj2BqHnglVBaBlGodc.jpg', NULL, NULL),
(5, 'image_5', 'image/Z9e2CAyG2Zfg28nfa4X6.jpg', NULL, NULL),
(6, 'image_7', 'image/UCYc7wrazGhwvjcBqI09.jpg', NULL, NULL),
(7, 'image_8', 'image/746hfhNT5H8tdTe1F5sf.jpg', NULL, NULL),
(8, 'image_9', 'image/SMKcb4MrlJ5Rff2biH0u.jpg', NULL, NULL),
(9, 'image_10', 'image/XARBCtp35PPGk8dYPPY5.jpg', NULL, NULL),
(10, 'image_11', 'image/OgGxtwMw6M42LZhuM9C1.jpg', NULL, NULL),
(11, 'image_13', 'image/tvEN0nPdoyCAyyWUBj42.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_header`
--

CREATE TABLE `tbl_header` (
  `header_id` int(10) UNSIGNED NOT NULL,
  `header_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `header_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_header`
--

INSERT INTO `tbl_header` (`header_id`, `header_title`, `header_description`, `created_at`, `updated_at`) VALUES
(1, 'Welfare Association of Apparel and Textile Professionals of Bangladesh', 'Our mission is to bring All those Professionals from Textile & Apparel Industries under one umbrella who feels the passion for the goodwill of the sector & also would like to improve the Socio-financial status of its members.', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_history`
--

CREATE TABLE `tbl_history` (
  `history_id` int(10) UNSIGNED NOT NULL,
  `first_paragraph` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `middle_paragraph` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_paragraph` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_history`
--

INSERT INTO `tbl_history` (`history_id`, `first_paragraph`, `middle_paragraph`, `last_paragraph`, `created_at`, `updated_at`) VALUES
(1, 'Alhamdulillah. It was a nice winter day in December 2018 when a group of Apparel & Textile Professionals met together from a call from the visionary leader in this sector Mr. Robin Mohiuddin. That day they all expressed their willingness to do something Better for this platform, specially for the professionals. They raised their voice very open mindedly and agreed to take this up with more and more peoples engagement having similar visions.\r\n\r\nFor this a lot of ideas, brainstorming & discussion was required, for that they all agreed to have similar meeting after few months with more professionals participation. They named this team as Welfare Association of Apparel & Textile Professionals of Bangladesh, WAATPB. They all returned home with enlightened heart and increased hunger to do something countable to the platform…', 'Then in April 2019, the 2nd meeting took place, but this time the participants were more than 100 in numbers with more professional approach and ideas. Everyone was invited to speak & ask, which brought new questions on the table. This self filtering approach and all the inquiries helped the team to scrutiny and purify the understanding for the old participants and also the new ones. Those amazing questions & Ideas gave all the participants & organisers some food for thoughts to close the day...\r\n\r\n\r\nFrom that day onward, the eagerness from many more professionals were clearly visible across all the social & communication platforms in support to the idea of having a welfare association for the professionals. Everyone was willing to meet once again and share their views…', 'So, the 3rd meeting was scheduled on the 20th of september 2019. The participation was overwhelmingly exceeded the organisers plan where more than 300 professionals enlisted for the event. It was the day where the founding leaders shared the basics of the association, its objective(s), vision(s), membership rule(s) to be set etc… all the guests were invited to ask questions and talk. Interestingly and delightfully many of those answers were given by other guests which was the proof of so many professionals serious engagement with this upcoming association. Everyone felt the need for practical execution of all these discussions, which wrapped the day.\r\n\r\n\r\nSo, now is the high time for action towards the common dream…. Let’s weave it.', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_job`
--

CREATE TABLE `tbl_job` (
  `job_id` int(10) UNSIGNED NOT NULL,
  `employee_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `department` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vacancies` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `joining_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `package` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deadline` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `additional_notes` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_job`
--

INSERT INTO `tbl_job` (`job_id`, `employee_name`, `department`, `position`, `vacancies`, `job_location`, `joining_date`, `package`, `deadline`, `additional_notes`, `created_at`, `updated_at`) VALUES
(1, 'Not Specified', 'WEB', 'intern', '3', 'Baridhara', '2020-04-02', 'Negotiable', '2020-03-27', 'Considering the Position, the candidate must have knowledge on production & factory activities along with Marketing & Merchandising', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_join_event`
--

CREATE TABLE `tbl_join_event` (
  `join_id` int(10) UNSIGNED NOT NULL,
  `member_id` int(11) NOT NULL,
  `event_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_join_event`
--

INSERT INTO `tbl_join_event` (`join_id`, `member_id`, `event_id`, `created_at`, `updated_at`) VALUES
(1, 25, 5, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_member`
--

CREATE TABLE `tbl_member` (
  `member_id` int(10) UNSIGNED NOT NULL,
  `member_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `present_organization` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blood_group` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `department` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `present_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `member_skill` text COLLATE utf8mb4_unicode_ci,
  `member_hobby` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_member`
--

INSERT INTO `tbl_member` (`member_id`, `member_name`, `email_address`, `contact_number`, `nid`, `present_organization`, `blood_group`, `department`, `designation`, `present_address`, `password`, `image`, `member_skill`, `member_hobby`, `created_at`, `updated_at`) VALUES
(25, 'A S M Nasim', 'asmnasim@hotmail.com', '01959031119', '19965718738000445', 'nasimIt', 'A+', 'Web Development', 'web developer', 'Shaymoly ,Dhaka', '$2y$10$HfQC8q2rw1w8XHu1IJosi.VzsJc.k2h9Kx9TbBpIlVyf0gQ71VN..', 'image/GCepujCk1u7tAb9ywWov.jpg', 'HTML, CSS, PHP, Bootstrap, jQuery', 'Gaming, browsing, travelling', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_member_skill`
--

CREATE TABLE `tbl_member_skill` (
  `member_skill_id` int(10) UNSIGNED NOT NULL,
  `member_id` int(11) NOT NULL,
  `member_skill` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `member_hobby` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_service`
--

CREATE TABLE `tbl_service` (
  `service_id` int(10) UNSIGNED NOT NULL,
  `service_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_service`
--

INSERT INTO `tbl_service` (`service_id`, `service_title`, `created_at`, `updated_at`) VALUES
(1, 'Welfare', NULL, NULL),
(2, 'Training', NULL, NULL),
(3, 'Job(Career)', NULL, NULL),
(4, 'Research and Development', NULL, NULL),
(5, 'Blood Donation', NULL, NULL),
(7, 'Database', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` enum('admin','member') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `role`, `created_at`, `updated_at`) VALUES
(1, 'Rapples', 'asmnasim@hotmail.com', NULL, '$2y$10$2Biib2YhT5gjo9eSvrKMnODK/UyDWic6CcpLkn7zhhal1zytJ7bpm', NULL, 'admin', '2020-03-27 03:41:56', '2020-03-27 03:41:56'),
(2, 'Admin', 'admin@rappleslimited.com', NULL, '$2y$10$VBDC3SC7qSGqQLrqOP8jaurNBFqjKr3nkuRordeTZGbM/jSTQ66wS', NULL, 'admin', '2020-03-27 10:05:08', '2020-03-27 10:05:08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_about`
--
ALTER TABLE `tbl_about`
  ADD PRIMARY KEY (`about_id`);

--
-- Indexes for table `tbl_event`
--
ALTER TABLE `tbl_event`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `tbl_gallary`
--
ALTER TABLE `tbl_gallary`
  ADD PRIMARY KEY (`image_id`);

--
-- Indexes for table `tbl_header`
--
ALTER TABLE `tbl_header`
  ADD PRIMARY KEY (`header_id`);

--
-- Indexes for table `tbl_history`
--
ALTER TABLE `tbl_history`
  ADD PRIMARY KEY (`history_id`);

--
-- Indexes for table `tbl_job`
--
ALTER TABLE `tbl_job`
  ADD PRIMARY KEY (`job_id`);

--
-- Indexes for table `tbl_join_event`
--
ALTER TABLE `tbl_join_event`
  ADD PRIMARY KEY (`join_id`);

--
-- Indexes for table `tbl_member`
--
ALTER TABLE `tbl_member`
  ADD PRIMARY KEY (`member_id`);

--
-- Indexes for table `tbl_member_skill`
--
ALTER TABLE `tbl_member_skill`
  ADD PRIMARY KEY (`member_skill_id`);

--
-- Indexes for table `tbl_service`
--
ALTER TABLE `tbl_service`
  ADD PRIMARY KEY (`service_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_about`
--
ALTER TABLE `tbl_about`
  MODIFY `about_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_event`
--
ALTER TABLE `tbl_event`
  MODIFY `event_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_gallary`
--
ALTER TABLE `tbl_gallary`
  MODIFY `image_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_header`
--
ALTER TABLE `tbl_header`
  MODIFY `header_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_history`
--
ALTER TABLE `tbl_history`
  MODIFY `history_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_job`
--
ALTER TABLE `tbl_job`
  MODIFY `job_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_join_event`
--
ALTER TABLE `tbl_join_event`
  MODIFY `join_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_member`
--
ALTER TABLE `tbl_member`
  MODIFY `member_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `tbl_member_skill`
--
ALTER TABLE `tbl_member_skill`
  MODIFY `member_skill_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_service`
--
ALTER TABLE `tbl_service`
  MODIFY `service_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
