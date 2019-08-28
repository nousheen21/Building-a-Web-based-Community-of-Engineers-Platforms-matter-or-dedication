-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2018 at 04:42 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nsu_alumni`
--

-- --------------------------------------------------------

--
-- Table structure for table `achievements`
--

CREATE TABLE `achievements` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `status` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `achievements`
--

INSERT INTO `achievements` (`id`, `user_id`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, '<p>Recruiters and HR Managers want to see that you produce results in a competitive marketplace. This can be undertaken in several ways including providing examples where you increased revenue, saved the company money or enhanced team productivity. Just remember to ensure you don&rsquo;t use stories or paragraphs on the r&eacute;sum&eacute; and use easy to read bullet points.</p>\r\n\r\n<p>In order to spark ideas of workplace accomplishments, consider times when you have&hellip;.</p>\r\n\r\n<ul>\r\n	<li>Exceeded targets or key performance indicators</li>\r\n	<li>Re-organised a system to make it work more efficiently</li>\r\n	<li>Achieved measurable outcomes that add value to the company</li>\r\n	<li>Trained, inducted or coached new staff members</li>\r\n	<li>Saved time or money for the company</li>\r\n	<li>Actively contributed on team projects</li>\r\n	<li>Contributed to outstanding customer service</li>\r\n	<li>Identified a problem and resolved it</li>\r\n	<li>Received awards or commendations from your supervisor</li>\r\n	<li>Substantially increased revenue for the company</li>\r\n</ul>', NULL, '2018-04-05 13:31:24', '2018-04-05 13:37:59');

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` text COLLATE utf8mb4_unicode_ci,
  `contact` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `avatar`, `contact`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@admin.com', NULL, NULL, '$2y$10$gVZhniif5cBTYirgdk5wxetDZP6c9FrLxsFmk3xw70DeyU.8zhU.q', 'YwXJp0neNCQvoPhACRJ64D9wxyyWEGKpdSh7vU4WbpIQgHQZTRYPZHaCyG9w', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `affiliations`
--

CREATE TABLE `affiliations` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `job_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `job_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `organization` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `duration_form` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `duration_to` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `affiliations`
--

INSERT INTO `affiliations` (`id`, `user_id`, `job_type`, `job_status`, `organization`, `name`, `designation`, `duration_form`, `duration_to`, `created_at`, `updated_at`) VALUES
(1, 1, 'Full time', 'Fair', 'Organization', 'ATS', 'Web developer', '2018-01-01', 'Continuing', '2018-03-30 10:39:39', '2018-03-30 12:17:47'),
(5, 1, 'Part time', 'Fair', 'Company', 'IIML', 'Computer Operator', '2016-06-01', '2017-04-01', '2018-03-30 13:42:25', '2018-03-30 13:42:25');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `user_id`, `title`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'ALUMNI CAREER WEEKS: WHY 2018 WAS ITS BEST YEAR YET', '<p>Our pockets are bursting with business cards and LinkedIn inboxes are full. Alumni Career Weeks has come and gone, but not without leaving its mark. Each year, the Alumni Association dedicates the month of March to alumni careers and professional development with 31 days of networking events, webinars, and professional growth opportunities</p>', 1, '2018-04-06 10:04:38', '2018-04-06 10:53:31'),
(2, 1, 'The Faraway Tree Series by Enid Blyton', '<p><img alt=\"\" src=\"http://dof4zo1o53v4w.cloudfront.net/s3fs-public/The%20Far%20Away%20Tree%20Series.jpg\" style=\"float:right\" title=\"\" /></p>\r\n\r\n<p>These delightful stories are based in a magical world of the Faraway Tree inhabited by fairies and pixies. Devouring these books at a young age was delicious. I remember spending hot summer days glued to these books, completely oblivious of time and the world around me. It was like a drug! The world described in these books was strange and mysterious, however it never became scary. I forget the plots but I remember a sweet treat called &#39;toffee shock&#39; which would keep enlarging in the mouth and then pop into nothing&mdash;how wonderful!</p>', 0, '2018-04-06 10:43:02', '2018-04-06 11:10:35');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `subject`, `email`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Rashiqul Rony', 'Help', 'rony.mmj@gmail.com', 'First Mrs. Parker would show you the double parlours. You would not dare to interrupt her description of their advantages and of the merits of the gentleman who had occupied them for eight years. Then you would manage to stammer forth the confession that you were neither a doctor nor a dentist. Mrs. Parker\'s manner .', '2018-04-14 03:59:15', '2018-04-14 03:59:15'),
(2, 'Rabule', 'problem', 'rony.mmj@gmail.com', 'Next you ascended one flight of stairs and looked at the second- floor-back at $8. Convinced by her second-floor manner that it was worth the $12 that Mr. Toosenberry always paid for it until he left to take charge of his brother\'s orange plantation in Florida near Palm Beach, where Mrs. McIntyre always spent the winters that had the double front room with private bath, you managed to babble that you wanted something still cheaper.', '2018-04-14 04:01:53', '2018-04-14 04:01:53');

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `level` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `degree` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `group` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `institute` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `result` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scale` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `passing_year` int(11) DEFAULT NULL,
  `duration` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`id`, `user_id`, `level`, `degree`, `group`, `institute`, `result`, `scale`, `passing_year`, `duration`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'Secondary', 'Secondary School Certificate', 'Science', 'MMJ High School', '3.94', '5.00', 2009, '10 year', NULL, '2018-04-04 09:33:56', '2018-04-04 10:08:41'),
(2, 1, 'Higher Secondary', 'Diploma in Engineering', 'Computer Science & Engineering', 'B Polytechnic Institute', NULL, NULL, 2014, '4 Year', NULL, '2018-04-04 10:13:59', '2018-04-04 10:13:59');

-- --------------------------------------------------------

--
-- Table structure for table `education_works`
--

CREATE TABLE `education_works` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `high_school` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `college` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `degree` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `institutions` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `job_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `skills` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `works` longtext COLLATE utf8mb4_unicode_ci,
  `linkedin` text COLLATE utf8mb4_unicode_ci,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `education_works`
--

INSERT INTO `education_works` (`id`, `user_id`, `high_school`, `college`, `degree`, `institutions`, `job_status`, `designation`, `skills`, `works`, `linkedin`, `status`, `created_at`, `updated_at`) VALUES
(1, 2, 'MMJ High School', 'MMJ Degree College', 'NSU', 'CSE Club', 'IT', 'Web developer', 'HTML, CSS, PHP, Laravel, JavaScript, Java, Jquery.', '<h2>1. Find the right supervisor</h2>\r\n\r\n<p>My professor asked a faculty member to become my supervisor. I floated an idea about what area I was interested in working on, and she agreed to keep an eye on me. In terms of a supervisor I couldn&rsquo;t have asked for anything better. She is patient with me, she knows my shortcomings and she always motivates me even if I am unable to see myself progressing. Having such a supervisor makes this journey very comfortable and easy.</p>\r\n\r\n<h2>2. Don&rsquo;t be shy, ask!</h2>\r\n\r\n<p>I told you earlier that I did not have any clue about how to do a research project. That was my reality and I didn&rsquo;t try to hide it. I communicated my weakness openly to my supervisor and warned her in advance that I would be asking stupid questions throughout the duration of my project just so I could get an idea of what I was doing. &ldquo;No question is stupid,&rdquo; she assured me. The credit indeed goes to her, but it is ultimately&nbsp;<em>your</em>&nbsp;responsibility to communicate with your supervisor and ask as many questions as you need to.</p>\r\n\r\n<h2>3. Select the right topic</h2>\r\n\r\n<p>Your topic will determine your project. It should be interesting and it should be something that you really want to investigate. So never rely on others for recommendations about what should be your topic of research. Try to read and think a lot and you will find an area of interest. Explore your inner self, even if it takes time. In a few weeks you will start gathering your thoughts and realize what you actually are interested in researching</p>', 'https://linkedIn.com', 0, '2018-04-07 13:41:02', '2018-04-08 09:16:56');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` text COLLATE utf8mb4_unicode_ci,
  `start_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `end_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `status` tinyint(4) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `slug`, `contact`, `image`, `start_date`, `end_date`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Nelson Mandela Memorial Tribute', 'nelson-mandela-memorial-tribute', 'Mobele: 1234569874, UK', 'event_up_14-04-2018_w2.jpg', '14-04-2018', '17-04-2018', '<p>During this inaugural lecture Professor Amanda Burls considers the state of public and patient involvement in shared decision making and health research. Professor Burls will discuss the activities of the Network to Amanda-Burls-NuffieldSupport Understanding of Health Research and ThinkWell, a not-for-profit organisation set up to help the public understand health information so they can make.</p>\r\n\r\n<p><strong>Speaker:</strong>&nbsp;Professor Amanda Burls - Professor of Public Health, City University London</p>\r\n\r\n<p><strong>Location: Drysdale Lecture Theatre, Drysdale Building, City University London, EC1V 0HB</strong></p>\r\n\r\n<p>Amanda Burls is a public health physician. She founded and directs ThinkWell, a novel internet-based research programme, which aims to help the public understand health information so they can make informed health decisions and also set up and participate in research studies.</p>\r\n\r\n<p>In 2011 she co-organised a Conference on Enhancing Public Understanding of Health Research, which resulted in the formation of the International Network for Enhancing Understanding of Health Research.</p>', 1, '2018-04-09 10:17:42', '2018-04-12 09:22:09'),
(4, 'University Open Days', 'university-open-days', 'University Room : 123, Department: CSE, Phone: 125482688', 'event_17-04-2018_w8.jpg', '17-04-2018', '31-07-2018', '<p>Our Southampton Undergraduate Open Days give you a chance to explore our beautiful campuses and experience what your life would be like here as a student.</p>\r\n\r\n<p>The Open Days are for undergraduate courses studied on Highfield Campus, as well as courses based on Avenue Campus, Boldrewood Campus and at the National Oceanography Centre Southampton. Find out more about&nbsp;at an Open Day.</p>\r\n\r\n<h3>You will be able to visit us at the following Open Days in 2018:</h3>\r\n\r\n<ul>\r\n	<li>Friday 6 July 2018</li>\r\n	<li>Saturday 7 July 2018</li>\r\n	<li>Saturday 8 September 2018</li>\r\n	<li>Sunday 9 September 2018</li>\r\n	<li>Saturday 13 October 2018</li>\r\n</ul>\r\n\r\n<p>Booking for these Open Days isn&#39;t yet open. You can register to keep updated on how and when you can book your place.</p>', 1, '2018-04-09 12:19:12', '2018-04-12 09:22:12');

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `status` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `user_id`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, '<p><span style=\"font-family:Arial,Helvetica,sans-serif\"><u><strong>What is the Alumni App?</strong></u><br />\r\nA alumni app takes your public profile information from LinkedIn and business information you&rsquo;ve shared with, making a super-duper powerful networking tool. The app gives you the ability to connect with other alumni in your industry and location.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><u><strong>What is the Advancement division?</strong></u><br />\r\nThe Advancement division focuses on increasing private support and alumni engagement, developing strategies for growth, and building and retaining a high-performance team. Departments within the Advancement division include alumni relations, annual giving, development, donor relations, planned giving, records and gift processing, events and operations.</span></p>\r\n\r\n<p><span style=\"font-family:Arial,Helvetica,sans-serif\"><u><strong>What is the Alumni App?</strong></u><br />\r\nA alumni app takes your public profile information from LinkedIn and business information you&rsquo;ve shared with, making a super-duper powerful networking tool. The app gives you the ability to connect with other alumni in your industry and location.</span></p>', NULL, '2018-04-06 09:06:07', '2018-04-06 09:23:15'),
(2, 2, '<p><u><strong>What is the Alumni App?</strong></u><br />\r\nA alumni app takes your public profile information from LinkedIn and business information you&rsquo;ve shared with, making a super-duper powerful networking tool. The app gives you the ability to connect with other alumni in your industry and location.</p>\r\n\r\n<p><u><strong>What is the Advancement division?</strong></u><br />\r\nThe Advancement division focuses on increasing private support and alumni engagement, developing strategies for growth, and building and retaining a high-performance team. Departments within the Advancement division include alumni relations, annual giving, development, donor relations, planned giving, records and gift processing, events and operations.</p>', NULL, '2018-04-21 05:02:49', '2018-04-21 05:02:49');

-- --------------------------------------------------------

--
-- Table structure for table `interestings`
--

CREATE TABLE `interestings` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `status` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `interestings`
--

INSERT INTO `interestings` (`id`, `user_id`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, '<ul>\r\n	<li>\r\n	<p>The appointment of professors Charles Elliott and Orange Nash Stoddard as hall residents was the predecessor by eighty years of the resident adviser system.</p>\r\n	</li>\r\n	<li>\r\n	<p>Miami is known as the &quot;Mother of Fraternities&quot;, with the Miami Triad Beta Theta Pi, Phi Delta Theta, and Sigma Chi being founded in Oxford.</p>\r\n	</li>\r\n	<li>\r\n	<p>In the 1830&#39;s Miami was the fourth largest college in the United States trailing only Harvard, Yale, and Dartmouth.</p>\r\n	</li>\r\n	<li>\r\n	<p>William Holmes McGuffey, whose readers sold over 130 million copies, received only $1,000 and a ham every Christmas for sales of his readers. Only the Holy Bible has had greater sales.</p>\r\n	</li>\r\n	<li>\r\n	<p>The official&nbsp;<a href=\"https://www.miamialum.org/s/916/internal.aspx?sid=916&amp;gid=1&amp;pgid=405\">seal</a>&nbsp;of Miami was adopted in 1826.</p>\r\n	</li>\r\n	<li>\r\n	<p>The total cost of attending Miami during its first year was $93, including board, room, tuition, laundry, candles, and wood.</p>\r\n	</li>\r\n	<li>\r\n	<p>The oldest building on the Miami campus is the DeWitt log cabin built in 1804.</p>\r\n	</li>\r\n	<li>\r\n	<p>Oxford, Ohio is the first Oxford in North America.</p>\r\n	</li>\r\n	<li>\r\n	<p>In 1920 Miami appointed the first Artist-in-Residence at a public institution, the poet Percy MacKaye.</p>\r\n	</li>\r\n	<li>\r\n	<p>The first intercollegiate football game in the state of Ohio was played in 1888 between Miami and Cincinnati.</p>\r\n	</li>\r\n	<li>\r\n	<p>In 1917 Miami played an eight-game schedule without a loss and outscored the opposition by 202-0.</p>\r\n	</li>\r\n	<li>\r\n	<p>Arthur Wickenden headed the first Department of Religion on a public campus in America.</p>\r\n	</li>\r\n	<li>\r\n	<p>Miami is one of the very few universities in the country with its own cemetery.</p>\r\n	</li>\r\n	<li>\r\n	<p>In 1888 the Republican candidate for President, Benjamin Harrison, and the Democratic candidate&#39;s campaign manager, Calvin Brice, were both Miami graduates.</p>\r\n	</li>\r\n	<li>\r\n	<p>In 1892 the Republican candidate for President was Benjamin Harrison and his Vice Presidential candidate was Whitelaw Reid; both were Miami graduates.</p>\r\n	</li>\r\n	<li>\r\n	<p>Miami produced ten Union generals and three Confederate generals in the Civil War.</p>\r\n	</li>\r\n	<li>\r\n	<p>In the 1850&#39;s there were five colleges in Oxford.</p>\r\n	</li>\r\n</ul>\r\n\r\n<hr />\r\n<p>If you are interested in reading more about Miami History we recommend the following books.</p>\r\n\r\n<p>Miami University: A Personal History<br />\r\nby Dr. Phillip Shriver</p>\r\n\r\n<p>Miami Years<br />\r\nby Walter Havighurst</p>\r\n\r\n<p>Men of Old Miami<br />\r\nby Walter Havighurst</p>', NULL, '2018-04-05 13:55:21', '2018-04-05 13:58:13');

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
(4, '2018_03_30_155831_create_affiliations_table', 2),
(6, '2018_03_31_135931_create_project_researches_table', 3),
(7, '2018_04_02_180730_create_admins_table', 3),
(8, '2018_04_03_034702_create_stories_table', 4),
(9, '2018_04_03_175700_create_travels_table', 5),
(10, '2018_04_04_141152_create_education_table', 6),
(12, '2018_04_05_183317_create_workshops_table', 8),
(13, '2018_04_05_192033_create_achievements_table', 9),
(14, '2018_04_05_194928_create_interestings_table', 10),
(15, '2018_04_06_145318_create_faqs_table', 11),
(16, '2018_04_06_152828_create_blogs_table', 12),
(17, '2018_04_07_170322_create_education_works_table', 13),
(18, '2018_04_09_142649_create_events_table', 14),
(19, '2018_04_14_093655_create_contacts_table', 15),
(21, '2018_04_21_061648_create_questions_table', 16);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `project_researches`
--

CREATE TABLE `project_researches` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` text COLLATE utf8mb4_unicode_ci,
  `title` text COLLATE utf8mb4_unicode_ci,
  `adviser` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `team_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `funded_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `project_researches`
--

INSERT INTO `project_researches` (`id`, `user_id`, `type`, `name`, `image`, `title`, `adviser`, `team_name`, `funded_by`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 3, 'Research', 'Lorem', 'rony123_1_mitx_6.004.2x_378x225.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit,', 'MA Shaddam', 'Star', 'lorem', '<p style=\"text-align:justify\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod<br />\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,<br />\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo<br />\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse<br />\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non<br />\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', 1, '2018-03-31 08:49:13', '2018-04-01 13:20:32'),
(2, 1, 'Project', 'Web base Software', 'rony123_4magutti_laravel_56.jpg', 'E-Commerce software for online shopping', 'Jhons', 'Lava', 'None', '<p>A well written description of any project makes it possible for the indented audience (e.g. the sponsor, the executive) to understand the concept and context of the proposed project and to realize whether to approve and finance the project or not.</p>', 1, '2018-04-03 10:16:38', '2018-04-03 10:16:42');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(10) UNSIGNED NOT NULL,
  `alumni_or_student` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `question` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `alumni_or_student`, `type`, `user_name`, `name`, `subject`, `question`, `created_at`, `updated_at`) VALUES
(2, 'robinhud123', '2', 'student123', 'Student', 'Alumni Information', 'What is the Alumni App?', '2018-04-21 00:29:41', '2018-04-21 00:29:41'),
(3, 'rony123', '2', 'student123', 'Student', 'Advancement division', 'What is the Advancement division?', '2018-04-21 00:57:17', '2018-04-21 00:57:17'),
(4, 'rony123', '1', 'rony22', 'Shunno', 'Alumni Information', 'What is the Alumni App?', '2018-04-21 02:59:49', '2018-04-21 02:59:49'),
(5, 'student123', '1', 'rony123', 'Rashiqul', 'problem', 'What is the Advancement division?', '2018-04-21 03:44:03', '2018-04-21 03:44:03');

-- --------------------------------------------------------

--
-- Table structure for table `stories`
--

CREATE TABLE `stories` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `status` tinyint(4) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `stories`
--

INSERT INTO `stories` (`id`, `user_id`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, '<h1 style=\"text-align:justify\"><cite>The Skylight Room</cite></h1>\r\n\r\n<h3 style=\"text-align:justify\">by&nbsp;<a href=\"https://americanliterature.com/author/o-henry\">O. Henry</a></h3>\r\n\r\n<p style=\"text-align:justify\"><img alt=\"An illustration for the story The Skylight Room by the author O. Henry\" src=\"https://assets.americanliterature.com/al/images/story/the-skylight-room.jpg\" style=\"float:right; height:300px; margin-left:10px; margin-right:10px; width:200px\" title=\"Elizabeth Sawtell, Studio at Wellington Art Club, 1919\" /></p>\r\n\r\n<p style=\"text-align:justify\">Elizabeth Sawtell, Studio at Wellington Art Club, 1919</p>\r\n\r\n<p style=\"text-align:justify\">First Mrs. Parker would show you the double parlours. You would not dare to interrupt her description of their advantages and of the merits of the gentleman who had occupied them for eight years. Then you would manage to stammer forth the confession that you were neither a doctor nor a dentist. Mrs. Parker&#39;s manner of receiving the admission was such that you could never afterward entertain the same feeling toward your parents, who had neglected to train you up in one of the professions that fitted Mrs. Parker&#39;s parlours.</p>\r\n\r\n<p style=\"text-align:justify\">Next you ascended one flight of stairs and looked at the second- floor-back at $8. Convinced by her second-floor manner that it was worth the $12 that Mr. Toosenberry always paid for it until he left to take charge of his brother&#39;s orange plantation in Florida near Palm Beach, where Mrs. McIntyre always spent the winters that had the double front room with private bath, you managed to babble that you wanted something still cheaper.</p>\r\n\r\n<p style=\"text-align:justify\">If you survived Mrs. Parker&#39;s scorn, you were taken to look at Mr. Skidder&#39;s large hall room on the third floor. Mr. Skidder&#39;s room was not vacant. He wrote plays and smoked cigarettes in it all day long. But every room-hunter was made to visit his room to admire the lambrequins. After each visit, Mr. Skidder, from the fright caused by possible eviction, would pay something on his rent.</p>', 0, '2018-04-02 22:31:52', '2018-04-07 10:18:33'),
(2, 3, '<p style=\"text-align:justify\">Idleness, vice, and intemperance had done their miserable work, and the dead mother lay cold and still amid her wretched children. She had fallen upon the threshold of <span style=\"font-size:12px\"><img alt=\"An illustration for the story An Angel in Disguise by the author T.S. Arthur\" src=\"https://assets.americanliterature.com/al/images/story/an-angel-in-disguise.jpg\" style=\"float:right; height:235px; margin-left:5px; margin-right:5px; width:300px\" /></span>her own door in a drunken fit, and died in the presence of her frightened little ones.</p>\r\n\r\n<p style=\"text-align:justify\">Death touches the spring of our common humanity. This woman had been despised, scoffed at, and angrily denounced by nearly every man, woman, and child in the village; but now, as the fact of her death was passed from lip to lip, in subdued tones, pity took the place of anger, and sorrow of denunciation. Neighbors went hastily to the old tumble-down hut, in which she had secured little more than a place of shelter from summer heats and winter cold: some with grave-clothes for a decent interment of the body; and some with food for the half-starving children, three in number. Of these, John, the oldest, a boy of twelve, was a stout lad, able to earn his living with any farmer. Kate, between ten and eleven, was bright, active girl, out of whom something clever might be made, if in good hands; but poor little Maggie, the youngest, was hopelessly diseased. Two years before a fall from a window had injured her spine, and she had not been able to leave her bed since, except when lifted in the arms of her mother.</p>\r\n\r\n<p style=\"text-align:justify\">&quot;What is to be done with the children?&quot; That was the chief question now. The dead mother would go underground, and be forever beyond all care or concern of the villagers. But the children must not be left to starve. After considering the matter, and talking it over with his wife, farmer Jones said that he would take John, and do well by him, now that his mother was out of the way; and Mrs. Ellis, who had been looking out for a bound girl, concluded that it would be charitable in her to make choice of Katy, even though she was too young to be of much use for several years.</p>', 1, '2018-04-03 09:08:00', '2018-04-03 09:23:06'),
(3, 2, '<p>I decided to choose the NSU College due to its amazing study program that prepared me for university entry, and also the convenient location in the city of Adelaide. When I first arrived in Adelaide, I had a hard time trying to adapt because of the different culture and speaking English, but after a month at the College, with the support of the friendly teachers and staff, my English started to improve a lot and I started to enjoy myself. My teachers were wonderful, they were always encouraging and very supportive. They did not hesitate at all to spend time with students in and outside of the classroom, whenever we had difficulty with class work or adapting to a new culture.</p>\r\n\r\n<p>The content of the courses at the College taught me things I&rsquo;d never known. The teachers did a great job of explaining the concepts, which was really helpful. The classes helped me create a strong foundation for university; improvement in my English and confidence in public speaking was a great tool for me in university presentations and class participation.</p>\r\n\r\n<p>I learned and enjoyed myself a lot during my year at the College. The knowledge and experiences that I received from the College are still fresh in my memory and will be taken with me as a guide throughout my years at university. The NSU College has helped me immensely and I&rsquo;m sure it will be of great help to other students.</p>', 0, '2018-04-07 10:37:01', '2018-04-07 10:46:42');

-- --------------------------------------------------------

--
-- Table structure for table `travels`
--

CREATE TABLE `travels` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `status` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `travels`
--

INSERT INTO `travels` (`id`, `user_id`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, '<h3><u><strong>Office of History - Armstrong Flight Research Center</strong></u></h3>\r\n\r\n<p>The Armstrong Flight Research Center, NASA&#39;s premier installation for atmospheric flight research, is chartered to research, develop, verify and transfer advanced aeronautics, space and related technologies and conduct atmospheric Earth and space science flight operations. The center is named in honor of Neil A. Armstrong, a former research test pilot at the center and the first man to step on the moon during the historic Apollo 11 mission in 1969.</p>\r\n\r\n<p>NASA Armstrong&#39;s history dates back to late 1946, when 13 engineers and technicians from the NACA&#39;s Langley Memorial Aeronautical Laboratory came to Muroc Army Air Base (now Edwards Air Force Base) in Southern California&#39;s high desert to prepare for the first supersonic research flights by the X-1 rocket plane...</p>', NULL, '2018-04-03 12:38:46', '2018-04-03 12:40:58');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `role` tinyint(4) DEFAULT NULL,
  `nsuid` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` int(11) DEFAULT '0',
  `degree` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'Bachelor',
  `user_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci,
  `cover_image` text COLLATE utf8mb4_unicode_ci,
  `booking` int(11) DEFAULT NULL,
  `short_bio` text COLLATE utf8mb4_unicode_ci,
  `status` tinyint(1) DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role`, `nsuid`, `year`, `degree`, `user_name`, `first_name`, `last_name`, `email`, `password`, `image`, `cover_image`, `booking`, `short_bio`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 1, '112365985', 2018, 'BSc In CSE', 'rony123', 'Rashiqul', 'Rony', 'rony.mmj@gmail.com', '$2y$10$qIDB8Mg.7H3pyzKgNRfFQu6ai6nTcjoB0aCqOqaOLSaeojgc179Y.', 'rony123_profile_1_joss.jpg', 'rony123_cover_1_buffon_wallpaper_by_adik1910-db72ryq.png', NULL, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid amet ducimus porro vitae voluptatum. Eum, veritatis, voluptate. Quae quaerat recusandae sit. Deleniti et excepturi, optio porro quas quibusdam sapiente vitae.', 1, 'GZzdyFQvcTctsiNqbEiBLS0FJKeDZ3QDZ4CHvdEJhsJISxrbDYqZpkGR6HEC', '2018-03-27 22:34:31', '2018-04-14 02:51:28'),
(2, 2, '59857895', 3, 'Bachelor of Science', 'student123', 'Student', 'New', 'student@student.com', '$2y$10$BWupJq0QwRBmmf2hHUIAveo8WRU89J/MZuesZtD0W4ET7hcIkN/Sa', 'student123_profile_2_agile.png', 'student123_cover_2_domain-hosting-post-banner.jpg', NULL, 'In line with my interest and performance in Computer Science Engineering I have decided to build up my career in the professional field. So, I would like to show my immense aspiration to become a quick learner and to prove myself as a sincere and energetic person through extensive hard working and integrity.', 1, 'xKHEGCOC8GR3eOQqFwTzlKHmxptcMPeJwviDqYxp9zJ60WcZi5YEYPLxeIkc', '2018-03-27 23:50:21', '2018-04-08 08:40:01'),
(3, 1, '7845515', 2017, 'Bachelor of Science', 'rony22', 'Shunno', 'Rony', 'rony@gmail.com', '$2y$10$yyKXQxGrSJtxaQ.na27.oevb8DRairW7mpB941MHku78A0pVa99Ji', 'rony22_profile_3_29495874_538072486579483_4038260081425383424_o.jpg', 'rony22_cover_3_taylorswift-rapunzel-2.png', NULL, 'A short, professional bio is one of those things most people don\'t think about until, all of a sudden, we\'ve been asked to \"shoot one over via email\" and have approximately one afternoon to come up with it.', 1, 'SKwLnB5jdetfzgPdtX3zotRecRAjzSUHVYUBwwiBLMITX7GiNvYUqfTPozdm', '2018-03-29 15:05:34', '2018-04-01 09:00:39'),
(5, 1, '123456789', 2015, 'BSC in CSE', 'robinhud123', 'Robinhud', 'Pandey', 'robinhud@gmail.com', '$2y$10$SDo6xVZmWsPRNESu2PoOA.5lLM.J1ArtxoPdugeZQCdENfG09To5S', NULL, NULL, NULL, NULL, 1, '2KuleK4uuBUSeXhQb5xAQO9iV6t8ZDDKJHZuclvjv9l8XUV208eu1NkXV4Da', '2018-04-03 09:43:21', '2018-04-03 09:52:41'),
(6, 2, '852452325685', 0, 'null', 'student1', 'Alex', 'John', 'student1@student.com', '$2y$10$fW/sPr96bJyvwgUneDS5z.K08SzVjpBAfvifRfDLNspql9p/9/i6e', NULL, NULL, NULL, NULL, 0, NULL, '2018-04-08 09:44:37', '2018-04-08 12:50:18');

-- --------------------------------------------------------

--
-- Table structure for table `workshops`
--

CREATE TABLE `workshops` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `workshops`
--

INSERT INTO `workshops` (`id`, `user_id`, `description`, `created_at`, `updated_at`) VALUES
(1, 1, '<h3 style=\"text-align:justify\"><strong>Date</strong></h3>\r\n\r\n<p style=\"text-align:justify\">Friday, March 25, 2016 -&nbsp;13:30&nbsp;to&nbsp;15:00</p>\r\n\r\n<h3 style=\"text-align:justify\"><strong>Location</strong></h3>\r\n\r\n<p style=\"text-align:justify\">Lab 3 - Level C - Seminar Room C700</p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<h3 style=\"text-align:justify\">Workshop: &quot;Job Offer Negotiation Strategies for the Scientist&quot;</h3>\r\n\r\n<p style=\"text-align:justify\">&quot;Working up a job offer is always difficult when you are attempting this tricky negotiation for the first time, whether it is for an industrial position or for a tenure-track appointment in academia. Dave Jensen will discuss how important it is to understand all of the issues surrounding that prospective job offer, from both sides of the fence. By putting yourself in the shoe.s of your potential employer, you&rsquo;ll be able to see exactly how issues like time, budget and personality fit into the equation. In an exercise showing how one Assistant Professor applicant moves through the process, Jensen will guide audience members to see where the possible stumbling blocks are; the speaker will help you maximize your job offers to suit your needs. There are lots of take home lessons provided in this 90 minute workshop, including fifteen tips for better science job offer negotiations.&quot;</p>\r\n\r\n<h5 style=\"text-align:justify\">When: Friday, March 25, 2016 | 1:30 - 3:00 PM<br />\r\nWere: Lab 3 - Level C - Seminar Room C700</h5>\r\n\r\n<h5 style=\"text-align:justify\">Registration Deadline: Tuesday, March 22, 2016</h5>\r\n\r\n<h5 style=\"text-align:justify\">Capacity: Up to 50 attendees (OIST Researchers have priority in case the number exceeds 50)</h5>\r\n\r\n<h5 style=\"text-align:justify\"><strong>Registration required.&nbsp;<a href=\"https://groups.oist.jp/pcda/workshop-job-offer-negotiation-strategies-scientist\" target=\"_blank\">Please CLICK HERE to register</a>.</strong></h5>\r\n\r\n<h4 style=\"text-align:justify\">Instructor: Dave Jensen, AAAS &ldquo;Tooling Up&rdquo; Columnist and Forum Moderator</h4>\r\n\r\n<h5 style=\"text-align:justify\">Biosketch</h5>\r\n\r\n<p style=\"text-align:justify\">With 30 years of experience in scientific and executive search, Dave Jensen is currently a senior recruiter as well as popular speaker and author on topics related to careers in the biotechnology, life sciences, agricultural and pharmaceutical sciences, and non-profit sectors.<br />\r\nDave is on the editorial advisory board of Journal of Commercial Biotechnology. Jensen also writes the popular &ldquo;Tooling Up&rdquo; column in the website for the journal SCIENCE for monthly career tips and techniques (ScienceCareers.org). He is also the founder and moderator of the AAAS Science Careers Discussion Forum, a website of the Association for the Advancement of Science (AAAS) website that has been a resource for young scientists for more than 25 years.<br />\r\nMr. Jensen has had seminars and workshops in industry meetings internationally, including keynote presentations at career events held by major universities around the world, including multiple University of California locations, National University (Singapore), National Institutes of Health, the U.S. Environmental Protection Agency, Johns Hopkins University, Karolinska Institute (Sweden), University of Washington, and both Princeton and Harvard University.</p>', '2018-04-05 12:40:39', '2018-04-05 12:44:34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `achievements`
--
ALTER TABLE `achievements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `affiliations`
--
ALTER TABLE `affiliations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `education_works`
--
ALTER TABLE `education_works`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `interestings`
--
ALTER TABLE `interestings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `project_researches`
--
ALTER TABLE `project_researches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stories`
--
ALTER TABLE `stories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `travels`
--
ALTER TABLE `travels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_nsuid_unique` (`nsuid`);

--
-- Indexes for table `workshops`
--
ALTER TABLE `workshops`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `achievements`
--
ALTER TABLE `achievements`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `affiliations`
--
ALTER TABLE `affiliations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `education`
--
ALTER TABLE `education`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `education_works`
--
ALTER TABLE `education_works`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `interestings`
--
ALTER TABLE `interestings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `project_researches`
--
ALTER TABLE `project_researches`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `stories`
--
ALTER TABLE `stories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `travels`
--
ALTER TABLE `travels`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `workshops`
--
ALTER TABLE `workshops`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
