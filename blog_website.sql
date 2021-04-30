-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2021 at 12:29 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog_website`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `blog_id` int(10) NOT NULL,
  `blog_user_id` int(10) NOT NULL,
  `blog_date` date NOT NULL DEFAULT current_timestamp(),
  `blog_title` varchar(100) CHARACTER SET utf8 NOT NULL,
  `blog_content` varchar(2000) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`blog_id`, `blog_user_id`, `blog_date`, `blog_title`, `blog_content`) VALUES
(3, 0, '2021-04-25', 'test title', 'test content'),
(4, 0, '2021-04-25', 'test 2', 'test content 2'),
(5, 0, '2021-04-25', 'Facebook và google \"hiểu\" chúng ta như thế nào?', 'Đã bao giờ bạn gặp những tình huống dưới đây và đặt câu hỏi thắc mắc tại sao chưa?\r\n\r\nTình huống 1: Bạn vào một trang mua sắm (Tiki, Shopee...) tìm kiếm mua một món hàng (ví dụ: bạn tìm mua một chiếc đồng hồ) và rồi bạn không mua và thoát ra. Một lát sau khi lướt face, bạn \"vô tình\" thấy rất nhiều quảng cáo liên quan đến đồng hồ của tiki và cả những đơn vị khác xuất hiện trên bảng tin rất nhiều. Vậy có phải facebook đang theo dõi bạn nên mới biết bạn đang tìm mua đồng hồ?\r\n\r\nTình huống 2: Bạn ngồi nói chuyện với đồng nghiệp của mình về dự định về chuyến du lịch Đà Nẵng dự định thực hiện vào tuần sau. Và rất nhanh sau đó, khi bạn tìm kiếm trên google hoặc bạn lướt facebook, hàng loạt những quảng cáo về các địa điểm hay vé máy bay xuất hiện, những quảng cáo của các đơn vị cung cấp dịch vụ du lịch hay đặt phòng, đặt vé máy bay cũng \"vô tình\" xuất hiện trên màn hình của chúng ta. Vậy liệu chúng thực sự có \"vô tình\" xuất hiện trên facebook và google của chúng ta?');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(10) NOT NULL,
  `users_email` varchar(255) CHARACTER SET utf8 NOT NULL,
  `users_username` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `users_password` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `users_email`, `users_username`, `users_password`) VALUES
(43, 'thuan@gmail.com', 'truonghoangthuan', '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`blog_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `blog_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
