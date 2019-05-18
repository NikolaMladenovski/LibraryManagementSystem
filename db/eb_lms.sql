-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2017 at 06:25 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eb_lms`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `book_id` int(11) NOT NULL,
  `book_title` varchar(100) NOT NULL,
  `category_id` int(50) NOT NULL,
  `author` varchar(50) NOT NULL,
  `book_copies` int(11) NOT NULL,
  `book_pub` varchar(100) NOT NULL,
  `publisher_name` varchar(100) NOT NULL,
  `isbn` varchar(50) NOT NULL,
  `copyright_year` int(11) NOT NULL,
  `date_added` datetime NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`book_id`, `book_title`, `category_id`, `author`, `book_copies`, `book_pub`, `publisher_name`, `isbn`, `copyright_year`, `date_added`, `status`) VALUES
(33, 'simon', 5, 'simon', 30, 'simon', 'simon', '123', 1999, '2017-06-01 18:14:49', 'Archive'),
(34, 'petko', 1, 'petko', 10, 'petko', 'petko', '123', 1888, '2017-06-01 18:20:13', 'Archive'),
(35, 'Itar Pejo', 8, 's', 2, 'narodna biblioteka', 'feniks', '1', 1934, '2017-06-18 04:36:08', 'Archive'),
(36, 'a', 1, 'a', 1, 'a', 'a', 'a', 1923, '2017-06-18 06:59:25', 'Archive'),
(37, 'a', 1, 'a', 0, 'a', '/a', 'a', 0, '2017-06-18 07:00:00', 'Archive'),
(38, 'a.a', 1, 'a', 12, 'a', 'a', 'a', 1934, '2017-06-18 07:09:29', 'Archive'),
(39, 'Itar Pejo 2', 2, '1', -1, '1', '1', '1', 1923, '2017-06-18 09:06:58', 'New'),
(40, 'a', 0, 'a', 12, 'as', 'as', 'as', 1234, '2017-06-18 16:15:15', 'Archive'),
(41, 'Elektronika1', 4, 'Josif', 2, 'FEIT', 'FEIT', '1', 2016, '2017-06-20 12:03:45', 'New'),
(42, 'Matematika1', 3, 'AB', 2, 'FEIT', 'FEIT', '1', 2016, '2017-06-20 12:08:09', 'New'),
(43, 'LKDA', 4, 'Raleva', 1, 'FEIT', 'FEIT', '1', 2016, '2017-06-20 12:08:40', 'New'),
(44, 'KKT', 4, 'AB', 2, 'FEIT', 'FEIT', '1', 2016, '2017-06-20 12:11:21', 'New'),
(45, 'KA', 4, 'AB', 1, 'FEIT', 'FEIT', '1', 2016, '2017-06-20 12:11:49', 'New');

-- --------------------------------------------------------

--
-- Table structure for table `borrow`
--

CREATE TABLE `borrow` (
  `borrow_id` int(11) NOT NULL,
  `member_id` bigint(50) NOT NULL,
  `date_borrow` varchar(100) NOT NULL,
  `due_date` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `borrow`
--

INSERT INTO `borrow` (`borrow_id`, `member_id`, `date_borrow`, `due_date`) VALUES
(566, 69, '2017-06-24 15:28:00', '30/06/2017'),
(565, 69, '2017-06-20 12:13:42', '28/06/2017');

-- --------------------------------------------------------

--
-- Table structure for table `borrowdetails`
--

CREATE TABLE `borrowdetails` (
  `borrow_details_id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `borrow_id` int(11) NOT NULL,
  `borrow_status` varchar(50) NOT NULL,
  `date_return` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `borrowdetails`
--

INSERT INTO `borrowdetails` (`borrow_details_id`, `book_id`, `borrow_id`, `borrow_status`, `date_return`) VALUES
(234, 41, 566, 'pending', ''),
(233, 39, 566, 'pending', ''),
(230, 35, 565, 'returned', '2017-06-24 15:27:26'),
(231, 41, 565, 'pending', ''),
(232, 42, 565, 'returned', '2017-06-24 14:56:49');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `classname` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `classname`) VALUES
(1, 'Periodical'),
(2, 'English'),
(3, 'Math'),
(4, 'Science'),
(5, 'Encyclopedia'),
(6, 'Filipiniana'),
(7, 'Newspaper'),
(8, 'General'),
(9, 'References');

-- --------------------------------------------------------

--
-- Table structure for table `ebooks`
--

CREATE TABLE `ebooks` (
  `book_id` int(11) NOT NULL,
  `book_title` varchar(100) NOT NULL,
  `book_author` varchar(100) NOT NULL,
  `category_name` varchar(50) CHARACTER SET latin1 NOT NULL,
  `img_path` varchar(500) CHARACTER SET latin1 NOT NULL,
  `img_type` varchar(50) CHARACTER SET latin1 NOT NULL,
  `file_name` varchar(50) CHARACTER SET latin1 NOT NULL,
  `file_path` varchar(500) CHARACTER SET latin1 NOT NULL,
  `file_type` varchar(50) CHARACTER SET latin1 NOT NULL,
  `copyright_year` int(11) NOT NULL,
  `isbn` varchar(50) CHARACTER SET latin1 NOT NULL,
  `img_name` varchar(50) CHARACTER SET latin1 NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `ebooks`
--

INSERT INTO `ebooks` (`book_id`, `book_title`, `book_author`, `category_name`, `img_path`, `img_type`, `file_name`, `file_path`, `file_type`, `copyright_year`, `isbn`, `img_name`, `status`) VALUES
(4, '11 ÐžÐºÑ‚Ð¾Ð¼Ð²Ñ€Ð¸', 'Ð›Ð¸Ñ‚ÐµÑ€Ð°Ñ‚ÑƒÑ€ÐµÐ½ Ð·Ð±Ð¾Ñ€Ð½Ð¸Ðº, 1948', 'Istorija', '../LMS/gallery1.jpg', 'image/jpeg', 'kniga1.pdf', '../knigi/kniga1.pdf', 'application/pdf', 1948, 'Ð°', 'gallery1.jpg', 'Archive'),
(5, '11 ÐžÐºÑ‚Ð¾Ð¼Ð²Ñ€Ð¸', 'Ð›Ð¸Ñ‚ÐµÑ€Ð°Ñ‚ÑƒÑ€ÐµÐ½ Ð·Ð±Ð¾Ñ€Ð½Ð¸Ðº, 1948', 'Istorija', '../LMS/gallery1.jpg', 'image/jpeg', 'kniga1.pdf', '../knigi/kniga1.pdf', 'application/pdf', 1948, '1', 'gallery1.jpg', 'a'),
(6, 'ÐžÐ´ Ð±Ñ€Ð¾Ð±Ð°Ñ‚Ð°, Ð½Ð°Ñ€Ð¾Ð´Ð½Ð¸ Ð¿ÐµÑÐ½Ð¸, 1947', 'Ð‘Ð»Ð°Ð¶Ðµ ÐšÐ¾Ð½ÐµÑÐºÐ¸, ÑÐ¾Ð±Ñ€Ð°Ð»', 'Poezija', '../LMS/gallery2.jpg', 'image/jpeg', 'kniga2.pdf', '../knigi/kniga2.pdf', 'application/pdf', 1947, '1', 'gallery2.jpg', 'Archive'),
(7, 'ÐžÐ´ Ð±Ð¾Ñ€Ð±Ð°Ñ‚Ð°, Ð½Ð°Ñ€Ð¾Ð´Ð½Ð¸ Ð¿ÐµÑÐ½Ð¸, 1947', 'Ð‘Ð»Ð°Ð¶Ðµ ÐšÐ¾Ð½ÐµÑÐºÐ¸, ÑÐ¾Ð±Ñ€Ð°Ð»', 'Poezija', '../LMS/gallery2.jpg', 'image/jpeg', 'kniga2.pdf', '../knigi/kniga2.pdf', 'application/pdf', 1947, '1', 'gallery2.jpg', 'a'),
(8, 'ÐÐ½Ñ‚Ð¸Ñ†Ð°, Ð¿Ð¸ÐµÑÐ° Ð²Ð¾ 4 Ñ‡Ð¸Ð½Ð° (7 ÑÐ»Ð¸ÐºÐ¸), 1940', 'Ð Ð¸ÑÑ‚Ð¾ ÐšÑ€Ð»Ðµ', 'Drami', '../LMS/gallery4.jpg', 'image/jpeg', 'kniga4.pdf', '../knigi/kniga4.pdf', 'application/pdf', 1940, '1', 'gallery4.jpg', 'a'),
(9, 'a', 'a', 'DetskaLiteratura', '../LMS/gallery2.jpg', 'image/jpeg', 'kniga2.pdf', '../knigi/kniga2.pdf', 'application/pdf', 1934, 'a', 'gallery2.jpg', 'Archive'),
(10, 'a', 'a', 'Drugo', '../LMS/gallery3.jpg', 'image/jpeg', 'kniga2.pdf', '../knigi/kniga2.pdf', 'application/pdf', 1934, 'a', 'gallery3.jpg', 'Archive'),
(11, 'Ð‘ÐµÐ³Ð°Ð»ÐºÐ°, Ð´Ñ€Ð°Ð¼Ð° Ð²Ð¾ 5 Ñ‡Ð¸Ð½Ð°, 1926', 'Ð’Ð°ÑÐ¸Ð» Ð˜Ñ™Ð¾ÑÐºÐ¸', 'Drami', '../LMS/gallery5.jpg', 'image/jpeg', 'kniga5.pdf', '../knigi/kniga5.pdf', 'application/pdf', 1926, '1', 'gallery5.jpg', 'a'),
(12, 'Ð‘ÐµÐ³Ð°Ð»Ñ†Ð¸, 1949', 'ÐˆÐ¾Ð²Ð°Ð½ Ð‘Ð¾ÑˆÐºÐ¾Ð²ÑÐºÐ¸', 'Raskazi', '../LMS/gallery6.jpg', 'image/jpeg', 'kniga6.pdf', '../knigi/kniga6.pdf', 'application/pdf', 1949, '1', 'gallery6.jpg', 'a'),
(13, 'Ð’Ð°Ñ€Ð´Ð°Ñ€, 1958', 'ÐÐ½Ñ‚Ðµ ÐŸÐ¾Ð¿Ð¾Ð²ÑÐºÐ¸', 'Poezija', '../LMS/gallery7.jpg', 'image/jpeg', 'kniga7.pdf', '../knigi/kniga7.pdf', 'application/pdf', 1958, '1', 'gallery7.jpg', 'a'),
(14, 'Ð’Ð¸Ð¾Ñ€Ð½Ð¾ Ð·Ð½Ð°Ð¼Ðµ, 1950', 'Ð’Ð¾Ð»Ñ‡Ðµ ÐÐ°ÑƒÐ¼Ñ‡ÐµÐ²ÑÐºÐ¸', 'DetskaLiteratura', '../LMS/gallery8.jpg', 'image/jpeg', 'kniga8.pdf', '../knigi/kniga8.pdf', 'application/pdf', 1950, '1', 'gallery8.jpg', 'a'),
(15, 'Ð“Ð»Ð°Ð´Ð½Ð° ÐºÐ¾ÐºÐ¾ÑˆÐºÐ° Ð¿Ñ€Ð¾ÑÐ¾ ÑÐ¾Ð½ÑƒÐµ, 1945', 'Ð‘Ð»Ð°Ð¶Ðµ ÐšÐ¾Ð½ÐµÑÐºÐ¸', 'Drami', '../LMS/gallery9.jpg', 'image/jpeg', 'kniga9.pdf', '../knigi/kniga9.pdf', 'application/pdf', 1945, '1', 'gallery9.jpg', 'a'),
(16, 'Ð”ÐµÐ½Ð¾Ð²Ð¸, 1939', 'ÐšÐ¾ÑÑ‚Ð° Ð Ð°Ñ†Ð¸Ð½', 'Poezija', '../LMS/gallery10.jpg', 'image/jpeg', 'gallery10.jpg', '../knigi/gallery10.jpg', 'image/jpeg', 1939, '1', 'gallery10.jpg', 'a'),
(17, 'Ð—Ð° Ð½Ð¾Ð²Ð°Ñ‚Ð° Ð¿Ñ€Ð¾Ð»ÐµÑ‚, 1946', 'Ð“Ð¾Ð³Ð¾ Ð˜Ð²Ð°Ð½Ð¾Ð²ÑÐºÐ¸', 'Poezija', '../LMS/gallery11.jpg', 'image/jpeg', 'kniga11.pdf', '../knigi/kniga11.pdf', 'application/pdf', 1946, '1', 'gallery11.jpg', 'a'),
(18, 'Ð—Ð°Ð¿Ð¸ÑÐ¸, 1974', 'Ð‘Ð»Ð°Ð¶Ðµ ÐšÐ¾Ð½ÐµÑÐºÐ¸', 'Poezija', '../LMS/gallery12.jpg', 'image/jpeg', 'kniga12.pdf', '../knigi/kniga12.pdf', 'application/pdf', 1974, '1', 'gallery12.jpg', 'a'),
(19, 'Ð›ÐµÐ±ÐµÐ´Ð¾Ð²Ð° Ð¿ÐµÑÐ½Ð°, 1982', 'ÐÐ´ÐµÐ¼ Ð“Ð°Ñ˜Ñ‚Ð°Ð½Ð¸', 'Poezija', '../LMS/gallery13.jpg', 'image/jpeg', 'kniga13.pdf', '../knigi/kniga13.pdf', 'application/pdf', 1982, '1', 'gallery13.jpg', 'a'),
(20, 'ÐœÐ°ÐºÐµÐ´Ð¾Ð½ÑÐºÐ° Ð»Ð¸Ñ€Ð¸ÐºÐ°, 1950', 'ÐœÐ°ÐºÐµÐ´Ð¾Ð½ÑÐºÐ¸ Ð¿Ð¸ÑÐ°Ñ‚ÐµÐ»Ð¸', 'Poezija', '../LMS/gallery14.jpg', 'image/jpeg', 'kniga14.pdf', '../knigi/kniga14.pdf', 'application/pdf', 1950, '1', 'gallery14.jpg', 'a'),
(21, 'ÐœÐ°ÐºÐµÐ´Ð¾Ð½ÑÐºÐ¸ Ð¿Ñ€Ð°Ð²Ð¾Ð¿Ð¸Ñ', 'Ð˜Ð·Ñ€Ð°Ð±Ð¾Ñ‚ÐµÐ½Ð¾ Ð¾Ð´ ÐºÐ¾Ð¼Ð¸ÑÐ¸Ñ˜Ð°Ñ‚Ð° Ð·Ð', 'Istorija', '../LMS/gallery15.jpg', 'image/jpeg', 'kniga15.pdf', '../knigi/kniga15.pdf', 'application/pdf', 1945, '1', 'gallery15.jpg', 'Archive'),
(22, 'ÐœÐ¸Ð»Ð¸Ð¾Ð½ ÐœÐ°Ñ‡ÐµÐ½Ð¸Ñ†Ð¸, 1940', 'Ð Ð¸ÑÑ‚Ð¾ ÐšÑ€Ð»Ðµ', 'Drami', '../LMS/gallery16.jpg', 'image/jpeg', 'kniga16.pdf', '../knigi/kniga16.pdf', 'application/pdf', 1940, '1', 'gallery16.jpg', 'a'),
(23, 'ÐœÐ¸Ð»Ð¸Ð¾Ð½ ÑŸÐ¸Ð½Ð¾Ð¸, 1948', 'Ð¡Ð»Ð°Ð²ÐºÐ¾ ÐˆÐ°Ð½ÐµÐ²ÑÐºÐ¸', 'DetskaLiteratura', '../LMS/gallery16.jpg', 'image/jpeg', 'kniga16.pdf', '../knigi/kniga16.pdf', 'application/pdf', 1948, '1', 'gallery16.jpg', 'Archive'),
(24, 'ÐœÐ¸Ð»Ð¸Ð¾Ð½ ÑŸÐ¸Ð½Ð¾Ð¸, 1948', 'Ð¡Ð»Ð°Ð²ÐºÐ¾ ÐˆÐ°Ð½ÐµÐ²ÑÐºÐ¸', 'DetskaLiteratura', '../LMS/gallery17.jpg', 'image/jpeg', 'kniga17.pdf', '../knigi/kniga17.pdf', 'application/pdf', 1948, '1', 'gallery17.jpg', 'a'),
(25, 'ÐœÐ¸Ñ€Ð¾Ð½Ð¾ÑÐ½Ð¸Ñ†Ð¸, 1965', 'Ð‘Ð¾Ð³Ð¾Ð¼Ð¸Ð» ÐƒÑƒÐ·ÐµÐ»', 'Poezija', '../LMS/gallery18.jpg', 'image/jpeg', 'kniga18.pdf', '../knigi/kniga18.pdf', 'application/pdf', 1965, '1', 'gallery18.jpg', 'a'),
(26, 'ÐœÐ¾Ðµ ÑÐµÐ»Ð¾, 1950', 'Ð’Ð°Ð½Ñ‡Ð¾ ÐÐ¸ÐºÐ¾Ð»ÐµÑÐºÐ¸', 'Poezija', '../LMS/gallery19.jpg', 'image/jpeg', 'kniga19.pdf', '../knigi/kniga19.pdf', 'application/pdf', 1950, '1', 'gallery19.jpg', 'a'),
(27, 'ÐÐ° Ð¸ÑÑ‚Ð¾ÐºÐ¾Ñ‚, 1944', 'Ð’ÐµÐ½ÐºÐ¾ ÐœÐ°Ñ€ÐºÐ¾Ð²ÑÐºÐ¸', 'Poezija', '../LMS/gallery20.jpg', 'image/jpeg', 'kniga20.pdf', '../knigi/kniga20.pdf', 'application/pdf', 1944, '1', 'gallery20.jpg', 'a'),
(28, 'ÐÐµÐ¿Ð¾ÐºÐ¾Ñ€ , 1964', 'ÐÐ½Ñ‚Ðµ ÐŸÐ¾Ð¿Ð¾Ð²ÑÐºÐ¸', 'Poezija', '../LMS/gallery21.jpg', 'image/jpeg', 'kniga21.pdf', '../knigi/kniga21.pdf', 'application/pdf', 1964, '1', 'gallery21.jpg', 'a'),
(29, 'ÐžÐ³Ð¸Ð½Ð¾Ñ‚, 1945', 'Ð’ÐµÐ½ÐºÐ¾ ÐœÐ°Ñ€ÐºÐ¾Ð²ÑÐºÐ¸', 'Poezija', '../LMS/gallery22.jpg', 'image/jpeg', 'kniga22.pdf', '../knigi/kniga22.pdf', 'application/pdf', 1945, '1', 'gallery22.jpg', 'a'),
(30, 'ÐžÐºÐ¾Ð²Ð°Ð½Ð¾ Ñ˜Ð°Ð±Ð¾Ð»ÐºÐ¾, 1978', 'Ð¡Ð»Ð°Ð²ÐºÐ¾ ÐˆÐ°Ð½ÐµÐ²ÑÐºÐ¸', 'Poezija', '../LMS/gallery23.jpg', 'image/jpeg', 'kniga23.pdf', '../knigi/kniga23.pdf', '', 1978, '1', 'gallery23.jpg', 'a'),
(31, 'ÐŸÐ°Ñ€Ð¸Ñ‚Ðµ ÑÐµ Ð¾Ñ‚ÐµÐ¿ÑƒÐ²Ð°Ñ‡ÐºÐ°, 1938', 'Ð Ð¸ÑÑ‚Ð¾ ÐšÑ€Ð»Ðµ', 'Drami', '../LMS/gallery24.jpg', 'image/jpeg', 'kniga24.pdf', '../knigi/kniga24.pdf', 'application/pdf', 1938, '1', 'gallery24.jpg', 'a'),
(32, 'ÐŸÐµÑÐ½Ð¸, 1946', 'ÐšÐ¾ÑÑ‚Ð° Ð¡. Ð Ð°Ñ†Ð¸Ð½', 'Poezija', '../LMS/gallery25.jpg', 'image/jpeg', 'kniga25.pdf', '../knigi/kniga25.pdf', 'application/pdf', 1946, '1', 'gallery25.jpg', 'a'),
(33, 'ÐŸÐµÑÐ½Ð¸, 1948', 'Ð¡Ð»Ð°Ð²ÐºÐ¾ ÐˆÐ°Ð½ÐµÐ²ÑÐºÐ¸', 'Poezija', '../LMS/gallery26.jpg', 'image/jpeg', 'kniga26.pdf', '../knigi/kniga26.pdf', 'application/pdf', 1948, '1', 'gallery26.jpg', 'a'),
(34, 'ÐŸÐµÑÐ½Ð¸, 1953', 'Ð‘Ð»Ð°Ð¶Ðµ ÐšÐ¾Ð½ÐµÑÐºÐ¸', 'Poezija', '../LMS/gallery27.jpg', 'image/jpeg', 'kniga27.pdf', '../knigi/kniga27.pdf', 'application/pdf', 1953, '1', 'gallery27.jpg', 'a'),
(35, 'ÐŸÐµÑ‡Ð°Ð»Ð±Ð°Ñ€Ð¸, Ð´Ñ€Ð°Ð¼Ð° Ð²Ð¾ 4 Ñ‡Ð¸Ð½Ð°, 1936', 'ÐÐ½Ñ‚Ð¾Ð½ ÐŸÐ°Ð½Ð¾Ð²', 'Drami', '../LMS/gallery28.jpg', 'image/jpeg', 'kniga28.pdf', '../knigi/kniga28.pdf', 'application/pdf', 1936, '1', 'gallery28.jpg', 'a'),
(36, 'Ð¡Ð»ÐµÑ˜ ÑÐµ ÑÐ¾ Ñ‚Ð¸ÑˆÐ¸Ð½Ð°Ñ‚Ð°, 1955', 'ÐÑ†Ð¾ Ð¨Ð¾Ð¿Ð¾Ð²', 'Poezija', '../LMS/gallery29.jpg', 'image/jpeg', 'kniga29.pdf', '../knigi/kniga29.pdf', 'application/pdf', 1955, '1', 'gallery29.jpg', 'a'),
(37, 'Ð¢Ð¸ÐºÐ²ÐµÑˆÐºÐ° Ð»ÐµÐ³ÐµÐ½Ð´Ð°, 1948', 'Ð›Ð°Ð·Ð¾ ÐšÐ°Ñ€Ð¾Ð²ÑÐºÐ¸', 'Poezija', '../LMS/gallery31.jpg', 'image/jpeg', 'kniga31.pdf', '../knigi/kniga31.pdf', 'application/pdf', 1948, '1', 'gallery31.jpg', 'a'),
(38, 'Ð¢ÑƒÑ‚ÑƒÐ½Ð¾Ð±ÐµÑ€Ð°Ñ‡Ð¸Ñ‚Ðµ, 1939', 'ÐšÐ¾ÑÑ‚Ð° Ð Ð°Ñ†Ð¸Ð½', 'Poezija', '../LMS/gallery32.jpg', 'image/jpeg', 'kniga32.pdf', '../knigi/kniga32.pdf', 'application/pdf', 1939, '1', 'gallery32.jpg', 'a'),
(39, 'Ð§Ð¾Ñ€Ð±Ð°ÑŸÐ¸ Ð¢ÐµÐ¾Ð´Ð¾Ñ, 1937', 'Ð’Ð°ÑÐ¸Ð» Ð˜Ñ™Ð¾ÑÐºÐ¸', 'Drami', '../LMS/gallery34.jpg', 'image/jpeg', 'kniga34.pdf', '../knigi/kniga34.pdf', 'application/pdf', 1937, '1', 'gallery34.jpg', 'a'),
(40, 'ÐœÐ°ÐºÐµÐ´Ð¾Ð½ÑÐºÐ¸ Ð¿Ñ€Ð°Ð²Ð¾Ð¿Ð¸Ñ', 'Ð˜Ð·Ñ€Ð°Ð±Ð¾Ñ‚ÐµÐ½Ð¾ Ð¾Ð´ ÐºÐ¾Ð¼Ð¸ÑÐ¸Ñ˜Ð°Ñ‚Ð° Ð·Ð', 'Istorija', '../LMS/gallery15.jpg', 'image/jpeg', 'kniga15.pdf', '../knigi/kniga15.pdf', 'application/pdf', 1945, '1', 'gallery15.jpg', 'Archive'),
(41, 'ÐœÐ°ÐºÐµÐ´Ð¾Ð½ÑÐºÐ¸ Ð¿Ñ€Ð°Ð²Ð¾Ð¿Ð¸Ñ', 'Ð˜Ð·Ñ€Ð°Ð±Ð¾Ñ‚ÐµÐ½Ð¾ Ð¾Ð´ ÐºÐ¾Ð¼Ð¸ÑÐ¸Ñ˜Ð°Ñ‚Ð° Ð·Ð° Ñ˜Ð°Ð·Ð¸Ðº Ð¸ Ð»Ð¸Ñ‚ÐµÑ€Ð°Ñ‚ÑƒÑ€Ð°', 'Istorija', '../LMS/gallery15.jpg', 'image/jpeg', 'kniga15.pdf', '../knigi/kniga15.pdf', 'application/pdf', 1945, '1', 'gallery15.jpg', 'a'),
(42, 'a', 'a', 'Istorija', '../LMS/gallery4.jpg', 'image/jpeg', 'kniga34.pdf', '../knigi/kniga34.pdf', 'application/pdf', 1, 'a', 'gallery4.jpg', 'a');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `event_id` int(11) NOT NULL,
  `event_name` varchar(200) CHARACTER SET utf8 NOT NULL,
  `event_dscr` text CHARACTER SET utf8 NOT NULL,
  `event_date` date NOT NULL,
  `date_added` datetime NOT NULL,
  `img_path` varchar(500) CHARACTER SET utf8 NOT NULL,
  `img_type` varchar(50) CHARACTER SET utf8 NOT NULL,
  `img_name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `img_caption` varchar(100) CHARACTER SET utf8 NOT NULL,
  `status` varchar(50) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`event_id`, `event_name`, `event_dscr`, `event_date`, `date_added`, `img_path`, `img_type`, `img_name`, `img_caption`, `status`) VALUES
(12, 'Ð¡Ð°ÐµÐ¼ Ð½Ð° ÐºÐ½Ð¸Ð³Ð°Ñ‚Ð°', 'Ð¡ÐÐ•ÐœÐžÐ¢ ÐÐ ÐšÐÐ˜Ð“ÐÐ¢Ð ÐºÐ°ÐºÐ¾ ÐµÐ´Ð½Ð° Ð¾Ð´ Ð½Ð°Ñ˜Ð·Ð½Ð°Ñ‡Ð°Ñ˜Ð½Ð¸Ñ‚Ðµ ÐºÑƒÐ»Ñ‚ÑƒÑ€Ð½Ð¸ Ð¼Ð°Ð½Ð¸Ñ„ÐµÑÑ‚Ð°Ñ†Ð¸Ð¸ Ð²Ð¾ Ð·ÐµÐ¼Ñ˜Ð°Ñ‚Ð° Ð¾Ð±ÐµÐ·Ð±ÐµÐ´ÑƒÐ²Ð° Ð½Ð°Ñ˜Ð³Ð¾Ð»ÐµÐ¼Ð° ÐºÐ¾Ð½Ñ†ÐµÐ½Ñ‚Ñ€Ð°Ñ†Ð¸Ñ˜Ð° Ð½Ð° Ð´ÐµÐ»Ð° Ð¾Ð´ Ð´Ð¾Ð¼Ð°ÑˆÐ½Ð¸ Ð¸ ÑÑ‚Ñ€Ð°Ð½ÑÐºÐ¸ Ð°Ð²Ñ‚Ð¾Ñ€Ð¸, ÑÐ¾Ð²Ñ€ÐµÐ¼ÐµÐ½Ð¸ Ð¸ ÐºÐ»Ð°ÑÐ¸Ñ‡Ð½Ð¸ Ð»Ð¸Ñ‚ÐµÑ€Ð°Ñ‚ÑƒÑ€Ð½Ð¸ Ð´ÐµÐ»Ð°, ÑÑ‚Ñ€ÑƒÑ‡Ð½Ð° Ð½Ð°ÑƒÑ‡Ð½Ð° Ð¸ Ð±ÐµÐ»ÐµÑ‚Ñ€Ð¸ÑÑ‚Ð¸Ñ‡ÐºÐ° Ð»Ð¸Ñ‚ÐµÑ€Ð°Ñ‚ÑƒÑ€Ð°, ÑƒÑ‡ÐµÐ±Ð½Ð¸Ñ†Ð¸ Ð¸ ÑƒÑ‡Ð¸Ð»Ð¸ÑˆÐ½Ð¸ Ð¿Ñ€Ð¸Ñ€Ð°Ñ‡Ð½Ð¸Ñ†Ð¸, ÐµÐ½Ñ†Ð¸ÐºÐ»Ð¾Ð¿ÐµÐ´Ð¸Ð¸ Ð¸ Ð´ÐµÐ»Ð° Ð¾Ð´ Ð¾Ð±Ð»Ð°ÑÑ‚Ð° Ð½Ð° ÐºÑƒÐ»Ñ‚ÑƒÑ€Ð°Ñ‚Ð° Ð¸ ÑƒÐ¼ÐµÑ‚Ð½Ð¾ÑÑ‚Ð°.', '2017-04-04', '2017-06-24 20:28:13', '../sliki/nastani/saem.jpg', 'image/jpeg', 'saem.jpg', 'Ð¡Ð°ÐµÐ¼ Ð½Ð° ÐºÐ½Ð¸Ð³Ð°Ñ‚Ð° ', 'a'),
(13, 'ÐŸÑ€Ð¸ÐºÐ°Ð·Ð½Ð° Ð·Ð° Ð¿Ñ€Ð¾Ð»ÐµÑ‚Ñ‚a', 'ÐÐ° 27 Ð°Ð¿Ñ€Ð¸Ð» 2017 Ð³Ð¾Ð´Ð¸Ð½Ð°, Ð²Ð¾ Ð‘Ð¸Ð±Ð»Ð¸Ð¾Ñ‚ÐµÐºÐ° â€žÐ”Ñ€ÑƒÐ³Ð°Ñ€Ñ‡Ðµâ€œ Ð´ÐµÑ‡Ð¸ÑšÐ°Ñ‚Ð° Ð¾Ð´ Ð¸Ð³Ñ€Ð°Ð»Ð½Ð°Ñ‚Ð° ÑÐ»Ð¸ÐºÐ°a ÑÐ¾ Ð²Ð¾Ð´ÐµÐ½Ð¸ Ð±Ð¾Ð¸ Ð½Ð° Ñ‚ÐµÐ¼Ð°: â€žÐŸÑ€Ð¸ÐºÐ°Ð·Ð½Ð° Ð·Ð° Ð¿Ñ€Ð¾Ð»ÐµÑ‚Ñ‚aâ€œ.', '2017-04-27', '2017-06-24 21:06:34', '../sliki/nastani/5-600x540.jpg', 'image/jpeg', '5-600x540.jpg', 'Ð Ð°Ñ‡Ð½Ð¸ Ñ‚Ð²Ð¾Ñ€Ð±Ð¸', 'a'),
(14, 'ÐŸÐµÑÐ½Ð° Ð½Ð° Ñ€Ð¸Ð´Ð¾Ñ‚', 'ÐŸÑ€Ð¾Ð¼Ð¾Ñ†Ð¸Ñ˜Ð° Ð½Ð° ÐºÐ½Ð¸Ð³Ð°Ñ‚Ð° â€žÐŸÐ•Ð¡ÐÐ ÐÐ Ð Ð˜Ð”ÐžÐ¢â€œ Ð¾Ð´ Ð“ÐžÐ Ð”ÐÐÐ ÐœÐ˜Ð¥ÐÐ˜Ð›ÐžÐ’Ð Ð‘ÐžÐ¨ÐÐÐšÐžÐ¡ÐšÐ Ð´Ð¾Ð±Ð¸Ñ‚Ð½Ð¸Ðº Ð½Ð° Ð½Ð°Ð³Ñ€Ð°Ð´Ð°Ñ‚Ð° â€žÐÑ†Ð¾ Ð¨Ð¾Ð¿Ð¾Ð²â€œ Ð½Ð° Ð”ÐŸÐœ Ð·Ð° 2016 Ð³Ð¾Ð´Ð¸Ð½Ð° Ð¿Ñ€Ð¾Ð¼Ð¾Ñ‚Ð¾Ñ€Ð¸: Ð˜Ð²Ð°Ð½ Ð§Ð°Ð¿Ð¾Ð²ÑÐºÐ¸, Ð Ð°Ð´Ðµ Ð¡Ð¸Ð»Ñ˜Ð°Ð½ Ð°ÐºÑ‚ÐµÑ€: Ð¢Ð¾Ð¼Ðµ Ð’Ð¸Ñ‚Ð°Ð½Ð¾Ð² ÐŸÑ€Ð¾Ð¼Ð¾Ñ†Ð¸Ñ˜Ð°Ñ‚Ð° ÑœÐµ ÑÐµ Ð¾Ð´Ñ€Ð¶Ð¸ Ð½Ð° 7 Ñ˜ÑƒÐ½Ð¸ (ÑÑ€ÐµÐ´Ð°) 2017 Ð³Ð¾Ð´Ð¸Ð½Ð° Ð²Ð¾ ÑÐ¿Ð¾Ð¼ÐµÐ½-ÑÐ¾Ð±Ð°Ñ‚Ð° Ð½Ð° ÐœÐ¸Ð»Ð°Ð´Ð¸Ð½Ð¾Ð²Ñ†Ð¸, ÑÐ¾ Ð¿Ð¾Ñ‡ÐµÑ‚Ð¾Ðº Ð²Ð¾ 12.00 Ñ‡Ð°ÑÐ¾Ñ‚.', '2017-06-07', '2017-06-24 20:29:11', '../sliki/nastani/Pesna-na-ridot.jpg', 'image/jpeg', 'Pesna-na-ridot.jpg', 'ÐÐ°ÑÐ»Ð¾Ð²Ð½Ð° ÑÑ‚Ñ€Ð°Ð½Ð° Ð½Ð° ÐºÐ½Ð¸Ð³Ð°Ñ‚Ð° â€žÐŸÐµÑÐ½Ð° Ð½Ð° Ñ€Ð¸Ð´Ð¾Ñ‚â€œ', 'a'),
(15, 'ÐŸÑ€Ð¾Ð¼Ð¾Ñ†Ð¸Ñ˜Ð° Ð½Ð° ÐºÐ½Ð¸Ð³Ð° ', 'â€žÐ˜ Ð¿Ð¾ ÑÑ‚Ð¾ Ð¿Ð°Ñ‚Ð¸â€œ Ð¾Ð´ ÐÐ»ÐµÐºÑÐ°Ð½Ð´Ð°Ñ€ ÐŸÐ¾Ð¿Ð¾Ð²ÑÐºÐ¸, Ð´Ð¾Ð±Ð¸Ñ‚Ð½Ð¸Ðº Ð½Ð° Ð½Ð°Ð³Ñ€Ð°Ð´Ð°Ñ‚Ð° Ð·Ð° Ð½Ð°Ñ˜Ð´Ð¾Ð±Ñ€Ð° ÐºÐ½Ð¸Ð³Ð° Ð·Ð° Ð´ÐµÑ†Ð° Ð¸ Ð¼Ð»Ð°Ð´Ð¸Ð½Ñ†Ð¸ â€žÐ’Ð°Ð½Ñ‡Ð¾ ÐÐ¸ÐºÐ¾Ð»ÐµÑÐºÐ¸â€œ Ð½Ð° Ð”ÐŸÐœ Ð·Ð° 2016 Ð³Ð¾Ð´Ð¸Ð½Ð°. ÐŸÑ€Ð¾Ð¼Ð¾Ñ‚Ð¾Ñ€: Ð’Ð¸Ð¾Ð»Ñ‚Ð° Ð¢Ð°Ð½Ñ‡ÐµÐ²Ð° Ð—Ð»Ð°Ñ‚ÐµÐ²Ð°.', '2017-04-12', '2017-06-24 21:20:58', '../sliki/nastani/i-po-sto-pati.jpg', 'image/jpeg', 'i-po-sto-pati.jpg', 'ÐÐ°ÑÐ»Ð¾Ð²Ð½Ð° ÑÑ‚Ñ€Ð°Ð½Ð° Ð½Ð° ÐºÐ½Ð¸Ð³Ð°Ñ‚Ð° â€žÐ˜ Ð¿Ð¾ ÑÑ‚Ð¾ Ð¿Ð°Ñ‚Ð¸â€œ', 'a'),
(16, 'Ð˜Ð·Ð²ÐµÑÑ‚ÑƒÐ²Ð°ÑšÐµ ', 'ÐÐ 14.04 (ÐŸÐ•Ð¢ÐžÐš) Ð˜ 15.04 (Ð¡ÐÐ‘ÐžÐ¢Ð) Ð§Ð˜Ð¢ÐÐ›ÐÐ˜Ð¢Ð• Ð’Ðž Ð‘Ð˜Ð‘Ð›Ð˜ÐžÐ¢Ð•ÐšÐÐ¢Ð ÐŒÐ• Ð‘Ð˜Ð”ÐÐ¢ ÐžÐ¢Ð’ÐžÐ Ð•ÐÐ˜ Ð—Ð Ð¡Ð˜Ð¢Ð• ÐšÐžÐ Ð˜Ð¡ÐÐ˜Ð¦Ð˜.	ÐŸÐ¾ Ð¿Ð¾Ð²Ð¾Ð´ Ð’ÐµÐ»Ð¸Ð³Ð´ÐµÐ½ÑÐºÐ¸Ñ‚Ðµ Ð¿Ñ€Ð°Ð·Ð½Ð¸Ñ†Ð¸, Ð‘Ð¸Ð±Ð»Ð¸Ð¾Ñ‚ÐµÐºÐ°Ñ‚Ð° Ð½ÐµÐ¼Ð° Ð´Ð° Ñ€Ð°Ð±Ð¾Ñ‚Ð¸ Ð½Ð° 16.04. (Ð½ÐµÐ´ÐµÐ»Ð°) Ð¸ 17.04 (Ð¿Ð¾Ð½ÐµÐ´ÐµÐ»Ð½Ð¸Ðº). ÐžÐ´Ð´ÐµÐ»Ð¸Ñ‚Ðµ Ð±ÐµÐ»ÐµÑ‚Ñ€Ð¸ÑÑ‚Ð¸ÐºÐ°, Ð½Ð°ÑƒÑ‡Ð½Ð¸Ð¾Ñ‚, Ð´ÐµÑ‚ÑÐºÐ¸Ð¾Ñ‚ Ð¸ Ð¿ÐµÑ€Ð¸Ð¾Ð´Ð¸ÐºÐ° Ð½ÐµÐ¼Ð° Ð´Ð° Ñ€Ð°Ð±Ð¾Ñ‚Ð°Ñ‚ Ð·Ð° Ð¿Ñ€ÐµÑ‚ÑÑ‚Ð¾Ñ˜Ð½Ð¸Ð¾Ñ‚ Ð¿Ñ€Ð°Ð·Ð½Ð¸Ðº 14,15 Ð¸ 17 Ð°Ð¿Ñ€Ð¸Ð» (Ð¿ÐµÑ‚Ð¾Ðº,ÑÐ°Ð±Ð¾Ñ‚Ð° Ð¸ Ð¿Ð¾Ð½ÐµÐ´ÐµÐ»Ð½Ð¸Ðº).', '2017-04-14', '2017-06-24 20:29:33', '../sliki/nastani/citalna.png', 'image/png', 'citalna.png', 'Ð˜Ð·Ð²ÐµÑÑ‚ÑƒÐ²Ð°ÑšÐµ ', 'a');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `member_id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) CHARACTER SET utf8 NOT NULL,
  `contact` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`member_id`, `firstname`, `lastname`, `username`, `email`, `password`, `contact`, `type`, `status`) VALUES
(66, 'Simon', 'Stankoski', 'simon123', 'simonstankoski@hotmail.com', 'b30bd351371c686298d32281b337e8e9', '070123123', 'student', 'active'),
(67, 'Stanko', 'stankov', 'stanko321', 'stanko@gmail.com', 'e6427442dd58e1ad3a0637da8c777713', '070887188', 'student', 'active'),
(68, 'Stanko', 'stankov', 'stanko', 'stanko@gmail.com', 'stanko', '070887188', 'student', 'active'),
(69, 'petko', 'petkovski', 'petko123', 'petko@gmail.com', 'petko123', '12345678910', 'Student', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `notif_id` int(10) NOT NULL,
  `member_id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`notif_id`, `member_id`, `book_id`) VALUES
(10, 69, 37),
(12, 69, 39);

-- --------------------------------------------------------

--
-- Table structure for table `notif_user`
--

CREATE TABLE `notif_user` (
  `notifuser_id` int(11) NOT NULL,
  `member_id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `date_available` varchar(100) CHARACTER SET utf8 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notif_user`
--

INSERT INTO `notif_user` (`notifuser_id`, `member_id`, `book_id`, `date_available`) VALUES
(2, 69, 35, '2017-06-24 13:27:26');

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE `type` (
  `id` int(11) NOT NULL,
  `borrowertype` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`id`, `borrowertype`) VALUES
(2, 'Teacher'),
(20, 'Employee'),
(21, 'Non-Teaching'),
(22, 'Student'),
(32, 'Contruction');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `firstname`, `lastname`) VALUES
(2, 'admin', 'admin', 'admin', 'admin'),
(3, 'aaaa', 'aaaa', 'aaaa', 'aaaa'),
(4, 'sokol', 'sokol', 'Georgi', 'Sokol'),
(5, 'aaaa', 'bbbbb', 'abc', 'bca');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `borrow`
--
ALTER TABLE `borrow`
  ADD PRIMARY KEY (`borrow_id`),
  ADD KEY `borrowerid` (`member_id`),
  ADD KEY `borrowid` (`borrow_id`);

--
-- Indexes for table `borrowdetails`
--
ALTER TABLE `borrowdetails`
  ADD PRIMARY KEY (`borrow_details_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`),
  ADD UNIQUE KEY `category_id` (`category_id`),
  ADD KEY `classid` (`category_id`);

--
-- Indexes for table `ebooks`
--
ALTER TABLE `ebooks`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`member_id`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`notif_id`);

--
-- Indexes for table `notif_user`
--
ALTER TABLE `notif_user`
  ADD PRIMARY KEY (`notifuser_id`);

--
-- Indexes for table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`id`),
  ADD KEY `borrowertype` (`borrowertype`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT for table `borrow`
--
ALTER TABLE `borrow`
  MODIFY `borrow_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=567;
--
-- AUTO_INCREMENT for table `borrowdetails`
--
ALTER TABLE `borrowdetails`
  MODIFY `borrow_details_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=235;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=801;
--
-- AUTO_INCREMENT for table `ebooks`
--
ALTER TABLE `ebooks`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `member_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;
--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `notif_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `notif_user`
--
ALTER TABLE `notif_user`
  MODIFY `notifuser_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `type`
--
ALTER TABLE `type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
