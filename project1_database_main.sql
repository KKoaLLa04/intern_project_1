-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2023 at 11:58 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `bill` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phone` varchar(13) NOT NULL,
  `pay` varchar(100) NOT NULL COMMENT 'updating...',
  `total` int(11) NOT NULL,
  `note` text DEFAULT NULL,
  `status` int(11) NOT NULL COMMENT '0: chưa xử lý\r\n1: đang xử lý\r\n2: đang giao hàng\r\n3: đã giao hàng',
  `client_id` int(11) DEFAULT NULL,
  `code` varchar(100) NOT NULL,
  `create_at` datetime NOT NULL,
  `update_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`id`, `name`, `email`, `address`, `phone`, `pay`, `total`, `note`, `status`, `client_id`, `code`, `create_at`, `update_at`) VALUES
(63, 'Duy Kiên', 'kienndph39656@fpt.edu.vn', 'hữu bằng - thạch thất', '0368031178', 'vnpay', 150000, NULL, 1, 7, '170072592355', '2023-01-18 14:52:33', '2023-11-26 23:40:50'),
(64, 'Duy Kiên', 'kienndph39656@fpt.edu.vn', 'hữu bằng - thạch thất', '0368031178', 'cash', 150000, NULL, 2, 7, '170075703930', '2023-01-10 00:00:00', '2023-11-27 00:01:13'),
(65, 'Duy Kiên', 'kienndph39656@fpt.edu.vn', 'hữu bằng - thạch thất', '0368031178', 'momo_atm', 453000, NULL, 1, 7, '170076060751', '2023-02-10 00:00:00', '2023-11-26 23:40:47'),
(66, 'Duy Kiên', 'kienndph39656@fpt.edu.vn', 'hữu bằng - thạch thất', '0368031178', 'momo_atm', 453000, NULL, 3, 7, '170076060751', '2023-03-24 00:31:24', '2023-11-26 23:41:07'),
(67, 'Duy Kiên', 'kienndph39656@fpt.edu.vn', 'hữu bằng - thạch thất', '0368031178', 'vnpay', 750000, NULL, 2, 7, '170076070479', '2023-03-24 00:32:02', '2023-11-26 23:40:52'),
(68, 'Duy Kiên', 'kienndph39656@fpt.edu.vn', 'hữu bằng - thạch thất', '0368031178', 'vnpay', 750000, NULL, 3, 7, '170076070479', '2023-11-28 16:16:51', '2023-11-26 23:40:44'),
(69, 'Duy Kiên', 'kienndph39656@fpt.edu.vn', 'hữu bằng - thạch thất', '0368031178', 'cash', 300000, NULL, 3, 7, '170076075388', '2023-05-24 00:32:33', '2023-11-26 23:40:41'),
(70, 'Duy Kiên', 'kienndph39656@fpt.edu.vn', 'hữu bằng - thạch thất', '0368031178', 'vnpay', 300000, NULL, 3, 7, '170076078323', '2023-06-24 00:33:20', '2023-11-26 23:40:41'),
(71, 'Duy Kiên', 'kienndph39656@fpt.edu.vn', 'hữu bằng - thạch thất', '0368031178', 'vnpay', 150000, NULL, 3, 7, '170080859584', '2023-04-24 13:50:33', '2023-11-26 23:40:42'),
(72, 'Duy Kiên', 'kienndph39656@fpt.edu.vn', 'hữu bằng - thạch thất', '0368031178', 'vnpay', 152000, 'Đã xử lý đơn hàng&#13;&#10;', 1, 7, '170082521957', '2023-08-24 18:27:12', '2023-11-27 00:00:59'),
(74, 'Duy Kiên', 'kienndph39656@fpt.edu.vn', 'hữu bằng - thạch thất', '0368031178', 'momo_atm', 300000, NULL, 2, 7, '170102620918', '2023-09-27 02:17:51', '2023-12-04 00:13:16'),
(75, 'Duy Kiên', 'kienndph39656@fpt.edu.vn', 'hữu bằng - thạch thất', '0368031178', 'cash', 300000, NULL, 1, 7, '170109253524', '2023-07-27 20:42:15', '2023-12-04 00:13:12'),
(76, 'gia khiem', 'zazgia@gmail.com', 'Đ. Đức Thắng', '0963452426', 'momo_atm', 150000, NULL, 1, 12, '1701162972', '2023-11-28 16:16:51', '2023-12-04 00:13:13'),
(77, 'gia khiem', 'zazgia@gmail.com', 'Đ. Đức Thắng', '0963452426', 'momo_atm', 604000, '', 3, 12, '170116307647', '2023-11-29 00:00:00', '2023-11-28 20:00:08'),
(78, 'Duy Kiên', 'kienndph39656@fpt.edu.vn', 'hữu bằng - thạch thất', '0368031178', 'momo_atm', 1200000, NULL, 2, 7, '170143938561', '2023-12-01 21:03:39', '2023-12-04 00:13:14'),
(79, 'Duy Kiên', 'kienndph39656@fpt.edu.vn', 'hữu bằng - thạch thất', '0368031178', 'cash', 450000, NULL, 1, 7, '17014394379', '2023-11-29 21:03:57', '2023-12-04 00:13:06'),
(80, 'Duy Kiên', 'kienndph39656@fpt.edu.vn', 'hữu bằng - thạch thất', '0368031178', 'cash', 300000, NULL, 1, 7, '170144669456', '2023-12-01 23:04:54', '2023-12-04 00:13:05'),
(81, 'Nguyễn Duy Kiên', 'ndkdzvl@gmail.com', 'Hà Nội', '0368031178', 'cash', 150000, NULL, 2, 10, '170149456271', '2023-12-02 12:22:42', '2023-12-04 00:13:19'),
(82, 'Nguyễn Duy Kiên', 'ndkdzvl@gmail.com', 'Hà Nội', '0368031178', 'cash', 90000, NULL, 1, 10, '170149457889', '2023-12-02 12:22:58', '2023-12-04 00:13:04'),
(83, 'Nguyễn Duy Kiên', 'ndkdzvl@gmail.com', 'Hà Nội', '0368031178', 'cash', 2430000, NULL, 3, 10, '170149795369', '2023-12-02 13:19:13', '2023-12-04 00:13:20');

-- --------------------------------------------------------

--
-- Table structure for table `blocks`
--

CREATE TABLE `blocks` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `actions` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blocks`
--

INSERT INTO `blocks` (`id`, `name`, `title`, `actions`) VALUES
(1, 'book', 'Quản lý sách', '{\"lists\": \"Xem\",\"add\":\"Th\\u00eam\",\"edit\": \"S\\u1eeda\",\"delete\":\"X\\u00f3a\",\"duplicate\":\"Nh\\u00e2n B\\u1ea3n\"\n}'),
(2, 'book_category', 'Quản lý danh mục sách', '{\"lists\": \"Xem\",\"add\":\"Th\\u00eam\",\"edit\": \"S\\u1eeda\",\"delete\":\"X\\u00f3a\",\"duplicate\":\"Nh\\u00e2n B\\u1ea3n\"\n}'),
(3, 'contact', 'Quản lý liên hệ', '{\"lists\": \"Xem\",\"add\":\"Th\\u00eam\",\"edit\": \"S\\u1eeda\",\"delete\":\"X\\u00f3a\",\"duplicate\":\"Nh\\u00e2n B\\u1ea3n\"\n}'),
(4, 'document', 'Quản lý tài liệu', '{\"lists\": \"Xem\",\"add\":\"Th\\u00eam\",\"edit\": \"S\\u1eeda\",\"delete\":\"X\\u00f3a\",\"duplicate\":\"Nh\\u00e2n B\\u1ea3n\" }'),
(5, 'exam', 'Quản lý đề thi', '{\"lists\": \"Xem\",\"add\":\"Th\\u00eam\",\"edit\": \"S\\u1eeda\",\"delete\":\"X\\u00f3a\",\"duplicate\":\"Nh\\u00e2n B\\u1ea3n\" }'),
(6, 'exam_category', 'Quản lý danh mục đề thi', '{\"lists\": \"Xem\",\"add\":\"Th\\u00eam\",\"edit\": \"S\\u1eeda\",\"delete\":\"X\\u00f3a\",\"duplicate\":\"Nh\\u00e2n B\\u1ea3n\" }'),
(7, 'groups', 'Quản lý phân quyền', '{\"lists\": \"Xem\",\"add\":\"Th\\u00eam\",\"edit\": \"S\\u1eeda\",\"delete\":\"X\\u00f3a\",\"duplicate\":\"Nh\\u00e2n B\\u1ea3n\" }'),
(8, 'lesson', 'Quản lý bài học', '{\"lists\": \"Xem\",\"add\":\"Th\\u00eam\",\"edit\": \"S\\u1eeda\",\"delete\":\"X\\u00f3a\",\"duplicate\":\"Nh\\u00e2n B\\u1ea3n\" }'),
(9, 'module', 'Quản lý chương học', '{\"lists\": \"Xem\",\"add\":\"Th\\u00eam\",\"edit\": \"S\\u1eeda\",\"delete\":\"X\\u00f3a\",\"duplicate\":\"Nh\\u00e2n B\\u1ea3n\" }'),
(10, 'news', 'Quản lý tin tức', '{\"lists\": \"Xem\",\"add\":\"Th\\u00eam\",\"edit\": \"S\\u1eeda\",\"delete\":\"X\\u00f3a\",\"duplicate\":\"Nh\\u00e2n B\\u1ea3n\" }'),
(11, 'news_category', 'Quản lý danh mục tin tức', '{\"lists\": \"Xem\",\"add\":\"Th\\u00eam\",\"edit\": \"S\\u1eeda\",\"delete\":\"X\\u00f3a\",\"duplicate\":\"Nh\\u00e2n B\\u1ea3n\" }'),
(12, 'student', 'Quản lý học viên', '{\"lists\": \"Xem\",\"add\":\"Th\\u00eam\",\"edit\": \"S\\u1eeda\",\"delete\":\"X\\u00f3a\",\"duplicate\":\"Nh\\u00e2n B\\u1ea3n\" }'),
(13, 'subject', 'Quản lý khóa học', '{\"lists\": \"Xem\",\"add\":\"Th\\u00eam\",\"edit\": \"S\\u1eeda\",\"delete\":\"X\\u00f3a\",\"duplicate\":\"Nh\\u00e2n B\\u1ea3n\" }'),
(14, 'subject_category', 'Quản lý danh mục khóa học', '{\"lists\": \"Xem\",\"add\":\"Th\\u00eam\",\"edit\": \"S\\u1eeda\",\"delete\":\"X\\u00f3a\",\"duplicate\":\"Nh\\u00e2n B\\u1ea3n\" }'),
(15, 'teacher', 'Quản lý giảng viên', '{\"lists\": \"Xem\",\"add\":\"Th\\u00eam\",\"edit\": \"S\\u1eeda\",\"delete\":\"X\\u00f3a\",\"duplicate\":\"Nh\\u00e2n B\\u1ea3n\" }'),
(16, 'test', 'Quản lý thi online', '{\"lists\": \"Xem\",\"add\":\"Th\\u00eam\",\"edit\": \"S\\u1eeda\",\"delete\":\"X\\u00f3a\",\"duplicate\":\"Nh\\u00e2n B\\u1ea3n\" }');

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `thumbnail` varchar(255) DEFAULT NULL,
  `price` float DEFAULT NULL,
  `author` varchar(100) DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `content` text DEFAULT NULL,
  `book_id` int(11) NOT NULL,
  `quantity` int(11) DEFAULT NULL,
  `create_at` timestamp NULL DEFAULT NULL,
  `update_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`id`, `name`, `thumbnail`, `price`, `author`, `status`, `description`, `content`, `book_id`, `quantity`, `create_at`, `update_at`) VALUES
(5, 'PHP 2', '4.png', 249000, 'duy kiên', 1, 'Kiến thức trong “The Pragmatic Programer” áp dụng được cho mọi ngôn ngữ lập trình vì nó không nêu ra vấn đề của riêng ngôn ngữ nào cả. Cuốn sách lập trình kinh điển này mang đến kiến thức bao quát mọi vấn đề liên quan trong nghề, từ những kỹ thuật cơ bản đến nâng cao và không bao giờ lỗi thời.', '&#60;h6&#62;GIỚI THIỆU S&#38;Aacute;CH&#60;/h6&#62;&#13;&#10;&#13;&#10;&#60;p&#62;Khi bạn hỏi một lập tr&#38;igrave;nh vi&#38;ecirc;n thế n&#38;agrave;o l&#38;agrave; nghề lập tr&#38;igrave;nh th&#38;igrave; hầu hết sẽ trả lời ngắn gọn rằng đ&#38;oacute; l&#38;agrave; một nghề viết ra những d&#38;ograve;ng code bằng ng&#38;ocirc;n ngữ lập tr&#38;igrave;nh. Trong thực tế, đ&#38;acirc;y l&#38;agrave; 1 nghề kh&#38;oacute; để giải th&#38;iacute;ch ngắn gọn để c&#38;oacute; thể hiểu hết. Bởi đ&#38;acirc;y l&#38;agrave; nghề tương đối phức tạp với kh&#38;aacute; nhiều điều chi tiết. Để viết ra những d&#38;ograve;ng code đ&#38;oacute; lập tr&#38;igrave;nh vi&#38;ecirc;n cần phải tập trung v&#38;agrave;o n&#38;oacute; để c&#38;oacute; thể viết ra những d&#38;ograve;ng code theo một tr&#38;igrave;nh tự logic. V&#38;agrave; nghề n&#38;agrave;y cũng kh&#38;ocirc;ng chỉ l&#38;agrave; g&#38;otilde; những c&#38;acirc;u lệnh cho m&#38;aacute;y t&#38;iacute;nh chạy. Qua cuốn s&#38;aacute;ch n&#38;agrave;y, 2 t&#38;aacute;c giải sẽ gi&#38;uacute;p ch&#38;uacute;ng ta biết r&#38;otilde; hơn về nghề lập tr&#38;igrave;nh v&#38;agrave; chỉ ra con đường m&#38;agrave; mọi lập tr&#38;igrave;nh vi&#38;ecirc;n c&#38;oacute; thể đi theo để trở th&#38;agrave;nh một lập tr&#38;igrave;nh vi&#38;ecirc;n thực thụ. Đ&#38;oacute; kh&#38;ocirc;ng chỉ l&#38;agrave; việc tập trung v&#38;agrave;o những c&#38;ocirc;ng việc chi tiết của việc lập tr&#38;igrave;nh như những lập tr&#38;igrave;nh vi&#38;ecirc;n kh&#38;aacute;c m&#38;agrave; c&#38;acirc;u trả lời l&#38;agrave;: h&#38;atilde;y tập trung v&#38;agrave;o c&#38;aacute;i bạn đang l&#38;agrave;m trong khi bạn đang l&#38;agrave;m v&#38;agrave; cố gắng l&#38;agrave;m điều đ&#38;oacute; tốt hơn. V&#38;iacute; dụ khi bạn ở trong cuộc họp k&#38;eacute;o d&#38;agrave;i kh&#38;ocirc;ng biết bao giờ kết th&#38;uacute;c. Bạn chỉ c&#38;oacute; thể mong tho&#38;aacute;t khỏi cuộc họp v&#38;agrave; trở về với chiếc PC th&#38;acirc;n y&#38;ecirc;u v&#38;agrave; viết tiếp những d&#38;ograve;ng code dang dở nhưng Dave v&#38;agrave; Andy th&#38;igrave; kh&#38;ocirc;ng như vậy. Họ sẽ nghĩ l&#38;yacute; do tại sao họ phải c&#38;oacute; mặt trong cuộc họp hay c&#38;oacute; g&#38;igrave; c&#38;oacute; thể tự động h&#38;oacute;a cho c&#38;aacute;c cuộc họp trong tương lai kh&#38;ocirc;ng v&#38;agrave; rồi họ sẽ l&#38;agrave;m được điều đ&#38;oacute;.&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;p&#62;Đ&#38;oacute; l&#38;agrave; c&#38;aacute;ch m&#38;agrave; một lập tr&#38;igrave;nh vi&#38;ecirc;n n&#38;ecirc;n tư duy, n&#38;ecirc;n l&#38;agrave;m cứ kh&#38;ocirc;ng phải l&#38;agrave; chỉ viết code. C&#38;aacute;ch suy nghĩ đ&#38;oacute; ch&#38;iacute;nh l&#38;agrave; c&#38;aacute;ch lập tr&#38;igrave;nh v&#38;agrave; c&#38;aacute;ch trau dồi năng lực lập tr&#38;igrave;nh. V&#38;agrave; mẹo l&#38;agrave;: Think about your work - Nghĩ về c&#38;ocirc;ng việc của bạn. Lu&#38;ocirc;n lu&#38;ocirc;n suy nghĩ về việc m&#38;igrave;nh đang l&#38;agrave;m trong l&#38;uacute;c ch&#38;uacute;ng ta l&#38;agrave;m n&#38;oacute; đ&#38;oacute; l&#38;agrave; c&#38;aacute;ch giữ tập trung, lu&#38;ocirc;n lu&#38;ocirc;n cải thiện, tự nhận x&#38;eacute;t v&#38;agrave; đưa ra c&#38;aacute;c quyết định đ&#38;uacute;ng đắn nhất. Tuy chỉ l&#38;agrave; một phần nhận x&#38;eacute;t từ một người đọc trước bản nh&#38;aacute;p th&#38;ocirc;i nhưng lại rất thấm, nhiều khi ta mệt, ta bế tắc, ch&#38;ocirc;ng ch&#38;ecirc;nh giữ c&#38;aacute;c ng&#38;ocirc;n ngữ, giải ph&#38;aacute;p m&#38;agrave; chọn đại chứ kh&#38;ocirc;ng c&#38;acirc;n nhắc n&#38;oacute; c&#38;oacute; tốt kh&#38;ocirc;ng (m&#38;igrave;nh kh&#38;ocirc;ng n&#38;oacute;i tốt nhất nhưng sẽ l&#38;agrave; tốt trong t&#38;igrave;nh huống đ&#38;oacute;) đ&#38;oacute; ch&#38;iacute;nh l&#38;agrave; cảm x&#38;uacute;c m&#38;igrave;nh được khơi gợi ngay khi đọc phần n&#38;agrave;y, h&#38;atilde;y tỉnh t&#38;aacute;o lại suy nghĩ v&#38;igrave; sao chọn nghề lập tr&#38;igrave;nh v&#38;agrave; tr&#38;aacute;ch nhiệm với nghề lập tr&#38;igrave;nh?&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;p&#62;Cuốn s&#38;aacute;ch n&#38;agrave;y chứa những mẹo được đ&#38;uacute;c r&#38;uacute;t từ kinh nghiệm thực tế qua nhiều năm l&#38;agrave;m việc của t&#38;aacute;c giả. Ch&#38;uacute;ng l&#38;agrave; những lời khuy&#38;ecirc;n thiết thực được hệ thống h&#38;oacute;a m&#38;agrave; mọi lập tr&#38;igrave;nh vi&#38;ecirc;n c&#38;oacute; thể học hỏi v&#38;agrave; &#38;aacute;p dụng ngay trong c&#38;ocirc;ng việc của m&#38;igrave;nh.&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;p&#62;&#60;img src=&#34;https://media.licdn.com/dms/image/D5612AQHxVB67IoFh3w/article-inline_image-shrink_1000_1488/0/1695961054244?e=1706140800&#38;amp;v=beta&#38;amp;t=cD7aCsxGncTgVEe_1JGfor8cHcPRwHjefK0edxLmWgo&#34; /&#62;&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;p&#62;Giữa h&#38;agrave;ng vạn người, điều g&#38;igrave; khiến một người n&#38;agrave;o đ&#38;oacute; trở n&#38;ecirc;n nổi bật? Dường như họ &#38;ndash; những người ti&#38;ecirc;u biểu &#38;ndash; lu&#38;ocirc;n c&#38;oacute; một th&#38;aacute;i độ v&#38;agrave; một phong c&#38;aacute;ch t&#38;iacute;ch cực. Hơn nữa, những triết l&#38;iacute; v&#38;agrave; quan điểm tiếp cận vấn đề của họ, hay như c&#38;aacute;ch m&#38;agrave; họ giải quyết vấn đề cũng lu&#38;ocirc;n rất kh&#38;aacute;c biệt với mọi người. Họ kh&#38;ocirc;ng vội bắt tay v&#38;agrave;o giải quyết ngay vấn đề, nhưng l&#38;ugrave;i lại một bước để c&#38;oacute; thể đ&#38;aacute;nh gi&#38;aacute; bức tranh to&#38;agrave;n cảnh. Người ta vẫn hay c&#38;oacute; c&#38;acirc;u h&#38;aacute;t: &#38;ldquo;n&#38;ecirc;n anh l&#38;ugrave;i bước về sau, để thấy em r&#38;otilde; hơn, để c&#38;oacute; thể ngắm em từ xa, &#38;acirc;u yếm hơn&#38;rdquo;, chẳng phải khi c&#38;oacute; một c&#38;aacute;i nh&#38;igrave;n tổng qu&#38;aacute;t, giải ph&#38;aacute;p sẽ tối ưu hơn đ&#38;oacute; hay sao?&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;p&#62;L&#38;agrave; một người ti&#38;ecirc;u biểu, hiển nhi&#38;ecirc;n l&#38;agrave; kh&#38;ocirc;ng thể thiếu được tinh thần tr&#38;aacute;ch nhiệm, mỗi lập tr&#38;igrave;nh vi&#38;ecirc;n đều phải c&#38;oacute; tr&#38;aacute;ch nhiệm với code m&#38;igrave;nh viết ra, phải giữ đ&#38;uacute;ng tiến độ chung của c&#38;ocirc;ng việc, lu&#38;ocirc;n giải quyết vấn đề ph&#38;aacute;t sinh sớm nhất c&#38;oacute; thể (tự m&#38;igrave;nh hoặc b&#38;agrave;n bạc c&#38;ugrave;ng team), đừng đổ thừa &#38;ldquo;Con m&#38;egrave;o đ&#38;atilde; ăn mất code của em&#38;rdquo; (mục &#38;ldquo;The cat ate my source code&#38;ldquo;) để bao biện cho việc code kh&#38;ocirc;ng chạy được ở buổi tổng kết team, hay tệ hơn l&#38;agrave; buổi demo kh&#38;aacute;ch h&#38;agrave;ng. H&#38;atilde;y chuy&#38;ecirc;n nghiệp trong mọi việc.&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;p&#62;Tất nhi&#38;ecirc;n kh&#38;ocirc;ng g&#38;igrave; l&#38;agrave; ho&#38;agrave;n hảo, nhưng thế n&#38;agrave;o l&#38;agrave; đủ tốt? Đừng c&#38;oacute; gắng nhận h&#38;agrave;ng t&#38;aacute; c&#38;aacute;c y&#38;ecirc;u cầu rồi OT th&#38;acirc;u đ&#38;ecirc;m h&#38;ograve;ng l&#38;agrave;m vui l&#38;ograve;ng kh&#38;aacute;ch h&#38;agrave;ng, h&#38;atilde;y biết giới hạn y&#38;ecirc;u cầu để lu&#38;ocirc;n đảm bảo mỗi t&#38;iacute;nh năng khi được triển khai đều tốt đạt chất lượng cao ????&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;ul&#62;&#13;&#10;&#9;&#60;li&#62;&#13;&#10;&#9;&#60;p&#62;&#38;nbsp;&#60;/p&#62;&#13;&#10;&#13;&#10;&#9;&#60;p&#62;&#60;strong&#62;➡️T&#38;igrave;m hiểu g&#38;oacute;i&#38;nbsp;học VIP&#38;nbsp;gi&#38;aacute; rẻ&#38;nbsp;nhất cho K2006:&#38;nbsp;&#60;a href=&#34;https://chuvanbien.vn/index.php?module=news&#38;amp;view=news&#38;amp;code=lo-trinh-dac-biet-danh-cho-hoc-sinh-thi-thpt-2024&#38;amp;id=227&#34; target=&#34;_blank&#34;&#62;TẠI Đ&#38;Acirc;Y&#60;/a&#62;&#60;/strong&#62;&#60;/p&#62;&#13;&#10;&#13;&#10;&#9;&#60;p&#62;&#60;strong&#62;➡️T&#38;igrave;m hiểu g&#38;oacute;i&#38;nbsp;học VIP&#38;nbsp;gi&#38;aacute; rẻ&#38;nbsp;nhất cho K2007&#38;nbsp;:&#38;nbsp;&#60;a href=&#34;https://chuvanbien.vn/index.php?module=news&#38;amp;view=news&#38;amp;code=2k6-2k7-muon-dang-ki-khoa-hoc--dang-ki-o-dau&#38;amp;id=231&#34; target=&#34;_blank&#34;&#62;TẠI Đ&#38;Acirc;Y&#60;/a&#62;&#60;/strong&#62;&#60;/p&#62;&#13;&#10;&#13;&#10;&#9;&#60;p&#62;&#60;strong&#62;➡️T&#38;igrave;m hiểu&#38;nbsp;CHƯƠNG TR&#38;Igrave;NH ĐẶC BIỆT CHO GI&#38;Aacute;O VI&#38;Ecirc;N, SINH VI&#38;Ecirc;N GIA SƯ:&#38;nbsp;&#60;a href=&#34;https://chuvanbien.vn/index.php?module=news&#38;amp;view=news&#38;amp;code=lo-trinh-vip-danh-cho-giao-vien-luyen-thi--sinh-vien--gia-su&#38;amp;id=232&#34; target=&#34;_blank&#34;&#62;TẠI Đ&#38;Acirc;Y&#60;/a&#62;&#60;/strong&#62;&#60;/p&#62;&#13;&#10;&#13;&#10;&#9;&#60;p&#62;&#60;strong&#62;➡️&#60;/strong&#62;&#60;strong&#62;XEM VIDEO B&#38;Agrave;I GIẢNG HAY ĐẶC SẮC MIỄN PH&#38;Iacute;:&#38;nbsp;&#60;a href=&#34;https://www.youtube.com/c/ChuV%C4%83nBi%C3%AAnvn/playlists&#34; target=&#34;_blank&#34;&#62;TẠI Đ&#38;Acirc;Y&#60;/a&#62;&#60;/strong&#62;&#60;/p&#62;&#13;&#10;&#9;&#60;/li&#62;&#13;&#10;&#60;/ul&#62;&#13;&#10;', 1, 147, NULL, '2023-12-04 10:35:19'),
(6, 'HTML and CSS: Design and Build Websites', '4.png', 90000, 'duy kiên', 1, 'HTLM và CSS là hai ngôn ngữ bạn nên biết khi lập trình web. Đó cũng là nội dung chính của cuốn sách này. Nếu bạn không có nhiều thời gian nghiên cứu mà vẫn muốn nắm được kiến thức căn bản, đây là lựa chọn tốt nhất dành cho bạn. Cuốn sách sẽ giải thích cho bạn biết hiểu những khái niệm, kỹ thuật cơ bản cần có để tạo ra một trang web.&#13;&#10;&#13;&#10;Điểm đặc biệt là tác giả đã trình bày nội dung sách rất hấp dẫn, với nhiều hình ảnh minh họa. Từng trang sách hiện lên như một website được thiết kế tỉ mỉ. Điều đó khiến cho cuốn sách trở nên hấp dẫn hơn với người đọc.&#13;&#10;&#13;&#10;Ngoài cuốn này, tác giả Jon Duckett còn có một cuốn khác viết về JavaScript và JQuery. Cả hai đều là những tài liệu đáng đọc và tham khảo.', '&#60;h6&#62;&#60;span style=&#34;font-size:11px&#34;&#62;GIỚI THIỆU S&#38;Aacute;CH&#60;/span&#62;&#60;/h6&#62;&#13;&#10;&#13;&#10;&#60;p&#62;&#38;nbsp;&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;pre&#62;&#13;&#10;&#60;span style=&#34;font-size:16px&#34;&#62;&#60;span style=&#34;font-family:Arial,Helvetica,sans-serif&#34;&#62;&#60;strong&#62;Phần giới thiệu đầy m&#38;agrave;u sắc về những điều cơ bản về HTML v&#38;agrave; CSS từ c&#38;aacute;c nh&#38;agrave; xuất bản của Wrox!&#13;&#10;Mỗi ng&#38;agrave;y, ng&#38;agrave;y c&#38;agrave;ng c&#38;oacute; nhiều người muốn học một số HTML v&#38;agrave; CSS. Tham gia c&#38;ugrave;ng c&#38;aacute;c nh&#38;agrave; thiết kế v&#38;agrave; lập tr&#38;igrave;nh web chuy&#38;ecirc;n nghiệp l&#38;agrave; những kh&#38;aacute;n giả mới, những người cần biết một ch&#38;uacute;t về m&#38;atilde; trong c&#38;ocirc;ng việc (cập nhật hệ thống quản l&#38;yacute; nội dung hoặc cửa h&#38;agrave;ng thương mại điện tử) v&#38;agrave; những người muốn l&#38;agrave;m cho blog c&#38;aacute; nh&#38;acirc;n của m&#38;igrave;nh hấp dẫn hơn. Nhiều cuốn s&#38;aacute;ch dạy HTML v&#38;agrave; CSS rất kh&#38;ocirc; khan v&#38;agrave; chỉ được viết cho những người muốn trở th&#38;agrave;nh lập tr&#38;igrave;nh vi&#38;ecirc;n, đ&#38;oacute; l&#38;agrave; l&#38;yacute; do tại sao cuốn s&#38;aacute;ch n&#38;agrave;y c&#38;oacute; một c&#38;aacute;ch tiếp cận ho&#38;agrave;n to&#38;agrave;n mới.&#13;&#10;&#13;&#10;Giới thiệu HTML v&#38;agrave; CSS theo c&#38;aacute;ch gi&#38;uacute;p mọi người ―người c&#38;oacute; sở th&#38;iacute;ch, sinh vi&#38;ecirc;n v&#38;agrave; chuy&#38;ecirc;n gia ―c&#38;oacute; thể truy cập ch&#38;uacute;ng ―v&#38;agrave; n&#38;oacute; c&#38;oacute; đầy đủ m&#38;agrave;u sắc xuy&#38;ecirc;n suốt&#13;&#10;Sử dụng đồ họa th&#38;ocirc;ng tin v&#38;agrave; chụp ảnh phong c&#38;aacute;ch sống để giải th&#38;iacute;ch c&#38;aacute;c chủ đề một c&#38;aacute;ch đơn giản nhưng hấp dẫn&#13;&#10;C&#38;oacute; cấu tr&#38;uacute;c độc đ&#38;aacute;o cho ph&#38;eacute;p bạn tiến bộ qua c&#38;aacute;c chương từ đầu đến cuối hoặc chỉ đi s&#38;acirc;u v&#38;agrave;o c&#38;aacute;c chủ đề bạn đặc biệt quan t&#38;acirc;m khi rảnh rỗi&#13;&#10;Cuốn s&#38;aacute;ch gi&#38;aacute;o dục n&#38;agrave;y l&#38;agrave; cuốn s&#38;aacute;ch m&#38;agrave; bạn sẽ th&#38;iacute;ch cầm l&#38;ecirc;n, đọc v&#38;agrave; sau đ&#38;oacute; tham khảo lại. N&#38;oacute; sẽ khiến bạn ước g&#38;igrave; c&#38;aacute;c chủ đề kỹ thuật kh&#38;aacute;c được tr&#38;igrave;nh b&#38;agrave;y một c&#38;aacute;ch đơn giản, hấp dẫn v&#38;agrave; hấp dẫn như vậy!&#13;&#10;&#60;/strong&#62;&#60;/span&#62;&#60;/span&#62;&#60;img src=&#34;https://d1iv5z3ivlqga1.cloudfront.net/wp-content/uploads/2021/01/03172316/613ZTDcDsiL._AC_UF10001000_QL80_.jpg&#34; /&#62;&#60;span style=&#34;font-size:16px&#34;&#62;&#60;span style=&#34;font-family:Arial,Helvetica,sans-serif&#34;&#62;&#60;strong&#62;&#13;&#10;&#13;&#10;Cuốn s&#38;aacute;ch n&#38;agrave;y cũng được cung cấp dưới dạng một bộ b&#38;igrave;a cứng - Thiết kế web với HTML, CSS, JavaScript v&#38;agrave; jQuery, 9781119038634; v&#38;agrave; trong b&#38;igrave;a mềm - Thiết kế web với HTML, CSS, JavaScript v&#38;agrave; jQuery, &#60;/strong&#62;&#60;/span&#62;&#60;/span&#62;&#60;/pre&#62;&#13;&#10;&#13;&#10;&#60;p&#62;Chắc sẽ c&#38;oacute; bạn hỏi cuốn s&#38;aacute;ch n&#38;agrave;y d&#38;agrave;nh cho đối tượng n&#38;agrave;o?&#60;br /&#62;&#13;&#10;&#60;strong&#62;- D&#38;agrave;nh cho học sinh với mong muốn &#38;ocirc;n tập cấp tốc để đạt mức 7-8 điểm&#60;/strong&#62;&#60;br /&#62;&#13;&#10;&#60;strong&#62;- D&#38;agrave;nh cho học sinh mục ti&#38;ecirc;u đạt 9-10 điểm nhưng thường l&#38;agrave;m b&#38;agrave;i kh&#38;ocirc;ng cẩn thận, sai c&#38;acirc;u dễ, sai l&#38;yacute; thuyết&#38;hellip;&#60;/strong&#62;&#60;br /&#62;&#13;&#10;&#60;strong&#62;- D&#38;agrave;nh cho gi&#38;aacute;o vi&#38;ecirc;n luyện thi định hướng &#38;ocirc;n tập cho học sinh trong thời gian cấp tốc ( L&#38;agrave; t&#38;agrave;i liệu hữu &#38;iacute;ch cho gi&#38;aacute;o vi&#38;ecirc;n &#38;aacute;p dụng đại tr&#38;agrave; để tổng &#38;ocirc;n cấp tốc cho học sinh)&#60;/strong&#62;&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;p&#62;Ch&#38;uacute;ng t&#38;ocirc;i bi&#38;ecirc;n soạn ra cuốn s&#38;aacute;ch n&#38;agrave;y nhằm tặng k&#38;egrave;m cho kh&#38;oacute;a học&#38;nbsp;&#60;a href=&#34;https://chuvanbien.vn/7-ngay-7-diem-2023-cd181.html&#34; target=&#34;_blank&#34;&#62;&#60;strong&#62;&#38;Ocirc;N THI CẤP TỐC 2023&#60;/strong&#62;&#60;/a&#62;&#38;nbsp;định hướng c&#38;aacute;c nội dung cơ bản cần &#38;ocirc;n tập với phương ch&#38;acirc;m&#38;nbsp;&#60;strong&#62;&#38;ldquo;C&#38;ocirc; đọng &#38;ndash; Ngắn gọn &#38;ndash; Hiệu quả - Dễ học &#38;ndash; Dễ nhớ&#38;rdquo;&#60;/strong&#62;,&#38;nbsp;&#60;br /&#62;&#13;&#10;C&#38;ugrave;ng kết hợp với s&#38;aacute;ch đ&#38;oacute; l&#38;agrave; hệ thống luyện đề online để r&#38;egrave;n luyện tốc độ giải nhanh v&#38;agrave; video giải chi tiết từng c&#38;acirc;u ph&#38;acirc;n t&#38;iacute;ch kĩ v&#38;igrave; sao đ&#38;aacute;p &#38;aacute;n n&#38;agrave;y đ&#38;uacute;ng, v&#38;igrave; sao đ&#38;aacute;p &#38;aacute;n n&#38;agrave;y sai rất dễ hiểu tại&#38;nbsp;&#60;a href=&#34;https://chuvanbien.vn/7-ngay-7-diem-2023-cd181.html&#34; target=&#34;_blank&#34;&#62;https://chuvanbien.vn/&#60;/a&#62;. Chắc chắn đ&#38;oacute; sẽ l&#38;agrave; c&#38;ocirc;ng cụ đắc lực hỗ trợ gi&#38;uacute;p c&#38;aacute;c em qu&#38;eacute;t sạch phần kiến thức cơ bản trong thời gian ngắn nhất, để tự tin chinh phục điểm cao k&#38;igrave; thi THPT QG 2023.&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;p&#62;D&#38;ugrave; đ&#38;atilde; rất cố gắng v&#38;agrave; tỉ mỉ trong qu&#38;aacute; tr&#38;igrave;nh bi&#38;ecirc;n soạn, song chắc chắn kh&#38;ocirc;ng thể tr&#38;aacute;nh khỏi những sai s&#38;oacute;t, ch&#38;uacute;ng t&#38;ocirc;i rất cần sự đ&#38;oacute;ng g&#38;oacute;p &#38;yacute; kiến của c&#38;aacute;c thầy, c&#38;ocirc; gi&#38;aacute;o v&#38;agrave; c&#38;aacute;c em học sinh để cuốn s&#38;aacute;ch ho&#38;agrave;n thiện hơn.&#38;nbsp;&#60;br /&#62;&#13;&#10;- Mọi g&#38;oacute;p &#38;yacute; xin li&#38;ecirc;n hệ với t&#38;aacute;c giả theo địa chỉ:&#60;br /&#62;&#13;&#10;-&#38;nbsp;&#60;strong&#62;Facebook&#60;/strong&#62;:&#38;nbsp;&#60;a href=&#34;https://chuvanbien.vn/7-ngay-7-diem-8-tuan-8-diem-b6.html&#34;&#62;Chu Văn Bi&#38;ecirc;n&#38;nbsp;&#60;/a&#62;&#60;br /&#62;&#13;&#10;-&#38;nbsp;&#60;strong&#62;Gmail&#60;/strong&#62;: chuvanbien.vn@gmail.com.&#38;nbsp;&#60;br /&#62;&#13;&#10;- Hướng dẫn học &#38;ndash; cập nhật mới miễn ph&#38;iacute; hằng ng&#38;agrave;y:&#60;br /&#62;&#13;&#10;-&#38;nbsp;&#60;strong&#62;Group&#60;/strong&#62;:&#38;nbsp;https://www.facebook.com/groups/chuvanbien.vn/&#60;br /&#62;&#13;&#10;- Qu&#38;yacute; độc giả c&#38;oacute; nhu cầu s&#38;aacute;ch tham khảo vật l&#38;yacute; hay - mới nhất, vui l&#38;ograve;ng li&#38;ecirc;n hệ&#38;nbsp;&#38;nbsp;&#60;strong&#62;Fanpage:&#38;nbsp;&#60;/strong&#62;&#60;a href=&#34;https://m.me/chuvanbien.vn&#34; target=&#34;_blank&#34;&#62;Chu Văn Bi&#38;ecirc;n&#60;/a&#62;&#60;br /&#62;&#13;&#10;-&#38;nbsp;&#60;strong&#62;SĐT&#60;/strong&#62;: 0985 829393 &#38;ndash; 0943 1919 00&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;p&#62;&#60;strong&#62;➡️CẬP NHẬT MỚI MIỄN PH&#38;Iacute;:&#38;nbsp;&#60;a href=&#34;https://www.facebook.com/groups/chuvanbien.vn/&#34;&#62;TẠI Đ&#38;Acirc;Y&#38;nbsp;&#60;/a&#62;&#60;/strong&#62;&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;p&#62;&#60;a href=&#34;https://drive.google.com/drive/u/0/folders/0Bw8jmd_oSYcTbnpKMnVIU1Z6ZlE?fbclid=IwAR01t3PT6Ghv0Sbw4Gj4gW9hkxq3ujiJoLyEHIL7G11Sx4N8J54nvVA9-SE&#34;&#62;&#60;strong&#62;➡️&#60;/strong&#62;&#60;/a&#62;&#60;strong&#62;Học vật l&#38;yacute; thầy Chu Văn Bi&#38;ecirc;n c&#38;oacute; hiệu quả kh&#38;ocirc;ng:&#38;nbsp;&#60;/strong&#62;&#60;a href=&#34;https://drive.google.com/drive/u/0/folders/0Bw8jmd_oSYcTbnpKMnVIU1Z6ZlE?fbclid=IwAR01t3PT6Ghv0Sbw4Gj4gW9hkxq3ujiJoLyEHIL7G11Sx4N8J54nvVA9-SE&#34;&#62;&#60;strong&#62;TẠI Đ&#38;Acirc;Y&#60;/strong&#62;&#60;/a&#62;&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;p&#62;&#60;strong&#62;➡️Li&#38;ecirc;n hệ nhận d&#38;ugrave;ng thử MIỄN PH&#38;Iacute; T&#38;Agrave;I KHOẢN VIP:&#38;nbsp;&#60;a href=&#34;https://m.me/chuvanbien.vn&#34;&#62;TẠI Đ&#38;Acirc;Y&#60;/a&#62;&#60;/strong&#62;&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;p&#62;&#60;strong&#62;➡️&#38;nbsp;&#60;/strong&#62;&#60;strong&#62;Hướng dẫn c&#38;aacute;ch đăng k&#38;yacute; s&#38;aacute;ch kh&#38;oacute;a học:&#38;nbsp;&#60;a href=&#34;https://chuvanbien.vn/index.php?module=news&#38;amp;view=news&#38;amp;code=hinh-thuc-thanh-toan&#38;amp;id=222&#34;&#62;TẠI Đ&#38;Acirc;Y&#60;/a&#62;&#60;/strong&#62;&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;p&#62;&#60;strong&#62;➡️T&#38;igrave;m hiểu g&#38;oacute;i&#38;nbsp;học VIP&#38;nbsp;gi&#38;aacute; rẻ&#38;nbsp;nhất cho K2005:&#38;nbsp;&#60;a href=&#34;https://chuvanbien.vn/index.php?module=news&#38;amp;view=news&#38;amp;code=lo-trinh-vip-danh-cho-hoc-sinh-k2005--khuyen-mai-cuc-lon&#38;amp;id=219&#34;&#62;TẠI Đ&#38;Acirc;Y&#60;/a&#62;&#60;/strong&#62;&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;p&#62;&#60;strong&#62;➡️T&#38;igrave;m hiểu g&#38;oacute;i&#38;nbsp;học VIP&#38;nbsp;gi&#38;aacute; rẻ&#38;nbsp;nhất cho K2006&#38;nbsp;:&#38;nbsp;&#60;a href=&#34;https://chuvanbien.vn/index.php?module=news&#38;amp;view=news&#38;amp;code=lo-trinh-hoc-tap-dac-biet-danh-cho-hs-k2006&#38;amp;id=221&#34;&#62;TẠI Đ&#38;Acirc;Y&#60;/a&#62;&#60;/strong&#62;&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;p&#62;&#60;strong&#62;➡️T&#38;igrave;m hiểu&#38;nbsp;CHƯƠNG TR&#38;Igrave;NH ĐẶC BIỆT CHO GI&#38;Aacute;O VI&#38;Ecirc;N, SINH VI&#38;Ecirc;N GIA SƯ:&#38;nbsp;&#60;a href=&#34;https://chuvanbien.vn/index.php?module=news&#38;amp;view=news&#38;amp;code=goi-luyen-thi-thpt-mon-vat-li-danh-cho-giao-vien-2022-2023&#38;amp;id=220&#34;&#62;TẠI Đ&#38;Acirc;Y&#60;/a&#62;&#60;/strong&#62;&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;p&#62;&#60;strong&#62;➡️&#60;/strong&#62;&#60;strong&#62;XEM VIDEO B&#38;Agrave;I GIẢNG HAY ĐẶC SẮC MIỄN PH&#38;Iacute;:&#38;nbsp;&#60;a href=&#34;https://www.youtube.com/c/ChuV%C4%83nBi%C3%AAnvn/playlists&#34; target=&#34;_blank&#34;&#62;TẠI Đ&#38;Acirc;Y&#60;/a&#62;&#60;/strong&#62;&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;p&#62;&#60;a href=&#34;https://chuvanbien.vn/index.php?module=news&#38;amp;view=news&#38;amp;code=chuong-trinh-hoc-thu-full-khoa---mien-phi-tu-van-hoc-tap&#38;amp;id=195&#34; target=&#34;_blank&#34;&#62;&#60;strong&#62;&#38;nbsp;&#60;em&#62;&#60;strong&#62;&#38;gt;&#38;gt;&#38;gt;&#38;nbsp;CHƯƠNG TR&#38;Igrave;NH HỌC THỬ FULL KHO&#38;Aacute; - MIỄN PH&#38;Iacute; TƯ VẤN HỌC TẬP&#60;/strong&#62;&#38;nbsp;&#60;/em&#62;&#60;/strong&#62;&#60;/a&#62;&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;p&#62;&#60;strong&#62;&#38;gt;&#38;gt;&#38;gt;&#38;nbsp;&#38;nbsp;&#60;a href=&#34;https://drive.google.com/drive/folders/1GctGg9NUrf4jJ14VXG-vw3sVmGbDj1Ql?usp=share_link&#34; target=&#34;_blank&#34;&#62;&#60;strong&#62;HỌC SINH &#38;ndash; GI&#38;Aacute;O VI&#38;Ecirc;N Đ&#38;Atilde; MUA HỌ Đ&#38;Aacute;NH GI&#38;Aacute; NHƯ THẾ N&#38;Agrave;O??&#60;/strong&#62;&#60;/a&#62;&#60;/strong&#62;&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;p&#62;Xin tr&#38;acirc;n trọng c&#38;aacute;m ơn!&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;p&#62;&#38;nbsp;&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;p&#62;C&#38;Oacute; THỂ BẠN QUAN T&#38;Acirc;M&#60;/p&#62;&#13;&#10;', 4, 92, NULL, '2023-12-04 10:35:29'),
(7, 'Designing with Web Standards', '4196T42AKQL._AC_UF10001000_QL80_.jpg', 150000, 'Duy Kiên', 1, 'Tác giả của sách là Jeffrey Zeldman, người được xem là chuyên gia trong việc thiết kế web theo tiêu chuẩn.&#13;&#10;&#13;&#10;Mục đích của ông khi viết cuốn sách này đã thể hiện ngay từ tên gọi. Nó sẽ hướng dẫn người đọc cách tốt nhất để tối ưu những tiêu chuẩn phải có trong website. Để truyền tải thông điệp của mình, Zeldman đưa ra rất nhiều ví dụ minh họa bằng mã code. Điều đó khiến cuốn sách dễ hiểu hơn với những người mới học lập trình. Từ đó, họ có thể tạo ra những trang web thân thiện hơn với người đọc.&#13;&#10;&#13;&#10;Dù cuốn sách này đã được phát hành từ rất lâu (năm 2003), nhưng nội dung thì không hề cũ. Nó hấp dẫn đến độ đã trở thành textbook (sách giáo khoa) ở hơn 85 trường cao đẳng.', '&#60;p&#62;&#60;span style=&#34;font-size:16px&#34;&#62;T&#38;aacute;c giả của s&#38;aacute;ch l&#38;agrave; Jeffrey Zeldman, người được xem l&#38;agrave; chuy&#38;ecirc;n gia trong việc thiết kế web theo ti&#38;ecirc;u chuẩn.&#60;/span&#62;&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;p&#62;&#60;span style=&#34;font-size:16px&#34;&#62;Mục đ&#38;iacute;ch của &#38;ocirc;ng khi viết cuốn s&#38;aacute;ch n&#38;agrave;y đ&#38;atilde; thể hiện ngay từ t&#38;ecirc;n gọi. N&#38;oacute; sẽ hướng dẫn người đọc c&#38;aacute;ch tốt nhất để tối ưu những ti&#38;ecirc;u chuẩn phải c&#38;oacute; trong website. Để truyền tải th&#38;ocirc;ng điệp của m&#38;igrave;nh, Zeldman đưa ra rất nhiều v&#38;iacute; dụ minh họa bằng m&#38;atilde; code. Điều đ&#38;oacute; khiến cuốn s&#38;aacute;ch dễ hiểu hơn với những người mới học lập tr&#38;igrave;nh. Từ đ&#38;oacute;, họ c&#38;oacute; thể tạo ra những trang web th&#38;acirc;n thiện hơn với người đọc.&#60;/span&#62;&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;p&#62;&#60;span style=&#34;font-size:16px&#34;&#62;D&#38;ugrave; cuốn s&#38;aacute;ch n&#38;agrave;y đ&#38;atilde; được ph&#38;aacute;t h&#38;agrave;nh từ rất l&#38;acirc;u (năm 2003), nhưng nội dung th&#38;igrave; kh&#38;ocirc;ng hề cũ. N&#38;oacute; hấp dẫn đến độ đ&#38;atilde; trở th&#38;agrave;nh textbook (s&#38;aacute;ch gi&#38;aacute;o khoa) ở hơn 85 trường cao đẳng.&#60;/span&#62;&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;p&#62;&#60;span style=&#34;font-size:16px&#34;&#62;Nửa đầu cuốn Thiết kế theo ti&#38;ecirc;u chuẩn web của Zeldman năm 2003 đ&#38;atilde; củng cố trường hợp của c&#38;aacute;c ti&#38;ecirc;u chuẩn web về khả năng truy cập, tối ưu h&#38;oacute;a c&#38;ocirc;ng cụ t&#38;igrave;m kiếm, t&#38;iacute;nh di động của nội dung hướng tới m&#38;ocirc;i trường di động v&#38;agrave; c&#38;aacute;c m&#38;ocirc;i trường mới nổi kh&#38;aacute;c, giảm băng th&#38;ocirc;ng v&#38;agrave; chi ph&#38;iacute; sản xuất cũng như c&#38;aacute;c lợi &#38;iacute;ch kh&#38;aacute;c. Phần n&#38;agrave;y của cuốn s&#38;aacute;ch đề cập đến c&#38;aacute;c nh&#38;agrave; tiếp thị v&#38;agrave; chủ sở hữu trang web cũng như c&#38;aacute;c nh&#38;agrave; ph&#38;aacute;t triển v&#38;agrave; thiết kế web. Phần thứ hai của cuốn s&#38;aacute;ch l&#38;agrave; hướng dẫn d&#38;agrave;nh cho c&#38;aacute;c nh&#38;agrave; thiết kế v&#38;agrave; nh&#38;agrave; ph&#38;aacute;t triển. S&#38;aacute;ch hướng dẫn rất phổ biến trong ng&#38;agrave;nh c&#38;ocirc;ng nghiệp web, mặc d&#38;ugrave; hầu như kh&#38;ocirc;ng c&#38;oacute; s&#38;aacute;ch n&#38;agrave;o dạy c&#38;aacute;c ti&#38;ecirc;u chuẩn web v&#38;agrave;o thời điểm đ&#38;oacute;. Điều l&#38;agrave;m cho ấn bản đầu ti&#38;ecirc;n của Thiết kế theo Ti&#38;ecirc;u chuẩn Web trở n&#38;ecirc;n độc đ&#38;aacute;o l&#38;agrave; n&#38;oacute; tập trung v&#38;agrave;o việc tạo ra trường hợp chuyển tiếp khả năng tương th&#38;iacute;ch, khả năng truy cập v&#38;agrave; SEO cho tất cả những người sở hữu, quản l&#38;yacute; hoặc sử dụng trang web chứ kh&#38;ocirc;ng chỉ c&#38;aacute;c nh&#38;agrave; ph&#38;aacute;t triển.&#60;/span&#62;&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;p&#62;&#60;img src=&#34;https://d1iv5z3ivlqga1.cloudfront.net/wp-content/uploads/2021/01/03172555/4196T42AKQL._AC_UF10001000_QL80_.jpg&#34; /&#62;&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;p&#62;&#60;span style=&#34;font-size:16px&#34;&#62;Cuốn s&#38;aacute;ch được ghi nhận l&#38;agrave; đ&#38;atilde; chuyển đổi ng&#38;agrave;nh từ s&#38;uacute;p thẻ v&#38;agrave; Flash sang ngữ nghĩa v&#38;agrave; khả năng truy cập th&#38;ocirc;ng qua việc sử dụng đ&#38;uacute;ng HTML, CSS v&#38;agrave; JavaScript. C&#38;aacute;c phi&#38;ecirc;n bản tiếp theo, trong khi tiếp tục đề cập đến trạng th&#38;aacute;i của Web v&#38;agrave; lợi &#38;iacute;ch của thiết kế dựa tr&#38;ecirc;n ti&#38;ecirc;u chuẩn, cũng tập trung v&#38;agrave;o c&#38;aacute;c c&#38;ocirc;ng nghệ mới nổi như HTML5 v&#38;agrave; CSS3, cũng như c&#38;aacute;c chiến lược thiết kế mới nổi như Thiết kế Web đ&#38;aacute;p ứng (RWD) v&#38;agrave; &#38;quot;Mobile First&#38;quot;. .&#38;quot;&#60;/span&#62;&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;p&#62;&#60;span style=&#34;font-size:16px&#34;&#62;B&#38;igrave;a cuốn s&#38;aacute;ch c&#38;oacute; h&#38;igrave;nh ảnh nổi tiếng của Zeldman với chiếc mũ đan m&#38;agrave;u xanh lam, điều n&#38;agrave;y đ&#38;atilde; truyền cảm hứng cho Douglas Vos ph&#38;aacute;t minh ra Ng&#38;agrave;y Mũ Xanh, một lễ kỷ niệm quốc tế h&#38;agrave;ng năm về ti&#38;ecirc;u chuẩn web bắt đầu v&#38;agrave;o năm 2007.&#60;/span&#62;&#60;/p&#62;&#13;&#10;', 4, 73, '2023-11-21 05:23:47', '2023-12-02 06:19:13'),
(8, 'Full Stack JavaScript', 'f6bc9451324a0b9c65a795dc25cc8533.png_2200x2200q80.png_.webp', 15590000, 'MongGODB', 1, 'Learn agile JavaScript web development using the latest cutting-edge front-end and back-end technologies including Node.js, MongoDB, Backbone.js, Parse.com, Heroku, and Microsoft Azure. Using a key project example of a message board app, you will learn the foundations of a typical web application: fetching data, displaying it, and submitting new data. Practical examples of the app build are provided with multiple technologies and all code examples are in full color.&#13;&#10;This book will save you many hours by providing a hand-picked and tested collection of quick start guides that will enable you to spend less time learning and more time building your own applications. Completely updated for this second edition, Full Stack JavaScript uses current versions of all technologies, including ES6/ES2015 and the latest versions of Node and npm. Prototype fast and ship code that matters!', '&#60;p&#62;What You&#38;#39;ll Learn &#38;bull; Use a collection of quick start guides, tutorials, and suggestions, to enhance several development apps &#38;bull; Review virtually all setup and deployment step-by-step. &#38;bull; Work with Chat web/mobile applications &#38;bull; Put front-end and back-end components together and deploy them to production environment&#60;/p&#62;&#13;&#10;', 1, 249, '2023-11-28 09:45:08', '2023-12-04 10:34:57'),
(10, 'Lập Trình cơ bản từ a &#62; z', 'book_1.jpg', 159999, 'Gia Khiêm', 1, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 4, 125, '2023-12-04 10:38:36', NULL),
(11, 'Tất tần tật về ngôn ngữ C', 'book_2.jpg', 190000, 'Duy Khánh', 1, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&#13;&#10;Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&#13;&#10;Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 4, 18, '2023-12-04 10:39:54', NULL),
(12, 'Bí kíp múa PHP', 'book_3.jpg', 55000, 'Duy Khánh', 1, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&#13;&#10;Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&#13;&#10;Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 1, 129, '2023-12-04 10:41:02', NULL),
(13, 'Lập trình căn bản PHP', 'book_4.jpg', 180000, 'Duy Khánh', 1, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&#13;&#10;Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&#13;&#10;Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 1, 140, '2023-12-04 10:44:29', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `book_category`
--

CREATE TABLE `book_category` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `create_at` timestamp NULL DEFAULT NULL,
  `update_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `book_category`
--

INSERT INTO `book_category` (`id`, `title`, `create_at`, `update_at`) VALUES
(1, 'Sách lập trình cơ bản với php 1', NULL, '2023-11-27 15:21:55'),
(4, 'Chuyên mục web', '2023-11-04 06:06:21', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `images` varchar(255) NOT NULL,
  `price` float NOT NULL,
  `quantity` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `code_id` varchar(100) DEFAULT NULL,
  `book_id` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT 0 COMMENT '0: chưa đặt hàng\r\n1: đã đặt',
  `create_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `name`, `images`, `price`, `quantity`, `student_id`, `code_id`, `book_id`, `status`, `create_at`) VALUES
(278, 'Sách minh họa', 'pic2.jpg', 150000, 8, 7, '655e031b2a2661700659995', 7, 1, '2023-11-22 20:32:51'),
(279, 'Sách ôn luyện', 'pic3.jpg', 1500, 2, 7, '655e031b2a2661700659995', 6, 1, '2023-11-22 20:32:55'),
(280, 'Sách minh họa', 'pic2.jpg', 150000, 8, 7, '655e06685c8c71700660840', 7, 1, '2023-11-22 20:47:03'),
(282, 'Sách minh họa', 'pic2.jpg', 150000, 8, 7, '655e1639668281700664889', 7, 1, '2023-11-22 20:51:59'),
(283, 'Sách ôn luyện', 'pic3.jpg', 1500, 1, 7, '655e19a7ae4411700665767', 6, 1, '2023-11-22 21:54:58'),
(284, 'Sách minh họa', 'pic2.jpg', 150000, 8, 7, '655e2f3302fb61700671283', 7, 1, '2023-11-22 22:11:06'),
(285, 'Sách ôn luyện', 'pic3.jpg', 1500, 2, 7, '655e2f3302fb61700671283', 6, 1, '2023-11-22 23:20:10'),
(286, 'Sách minh họa', 'pic2.jpg', 150000, 8, 7, '655e336ddfd061700672365', 7, 1, '2023-11-22 23:51:43'),
(287, 'Sách minh họa', 'pic2.jpg', 150000, 8, 7, '', 7, 1, '2023-11-23 12:45:34'),
(288, 'Sách ôn luyện', 'pic3.jpg', 1500, 1, 7, '170072397095', 6, 1, '2023-11-23 14:12:27'),
(289, 'Sách minh họa', 'pic2.jpg', 150000, 8, 7, '170072397095', 7, 1, '2023-11-23 14:19:24'),
(290, 'Sách minh họa', 'pic2.jpg', 150000, 8, 7, '170072547217', 7, 1, '2023-11-23 14:44:08'),
(291, 'Sách minh họa', 'pic2.jpg', 150000, 8, 7, '170072557053', 7, 1, '2023-11-23 14:45:56'),
(292, 'Sách minh họa', 'pic2.jpg', 150000, 8, 7, '170072584113', 7, 1, '2023-11-23 14:49:57'),
(293, 'Sách minh họa', 'pic2.jpg', 150000, 8, 7, '170072592355', 7, 1, '2023-11-23 14:51:56'),
(296, 'Sách minh họa', 'pic2.jpg', 150000, 1, 7, '170075703930', 7, 1, '2023-11-23 23:29:24'),
(302, 'Sách minh họa', 'pic2.jpg', 150000, 3, 7, '170076060751', 7, 1, '2023-11-24 00:13:46'),
(303, 'Sách ôn luyện', 'pic3.jpg', 1500, 2, 7, '170076060751', 6, 1, '2023-11-24 00:13:56'),
(304, 'Sách minh họa', 'pic2.jpg', 150000, 5, 7, '170076070479', 7, 1, '2023-11-24 00:31:35'),
(305, 'Sách minh họa', 'pic2.jpg', 150000, 2, 7, '170076075388', 7, 1, '2023-11-24 00:32:26'),
(306, 'Sách minh họa', 'pic2.jpg', 150000, 2, 7, '170076078323', 7, 1, '2023-11-24 00:32:43'),
(307, 'Sách minh họa', 'pic2.jpg', 150000, 1, 7, '170080859584', 7, 1, '2023-11-24 12:50:03'),
(308, 'PHP 2', 'pic1.jpg', 2000, 1, 7, '170082521957', 5, 1, '2023-11-24 13:50:58'),
(309, 'Sách minh họa', 'pic2.jpg', 150000, 1, 7, '170082521957', 7, 1, '2023-11-24 18:26:52'),
(310, 'Sách minh họa', 'download.jpg', 150000, 1, 7, 'course_1700989637', 7, 1, '2023-11-24 22:24:10'),
(311, 'Sách minh họa', '360_F_317254576_lKDALRrvGoBr7gQSa1k4kJBx7O2D15dc.jpg', 150000, 2, 7, '170102620918', 7, 1, '2023-11-27 02:11:39'),
(312, 'Sách minh họa', '360_F_317254576_lKDALRrvGoBr7gQSa1k4kJBx7O2D15dc.jpg', 150000, 2, 7, '170109253524', 7, 1, '2023-11-27 03:18:33'),
(313, 'Sách minh họa', '360_F_317254576_lKDALRrvGoBr7gQSa1k4kJBx7O2D15dc.jpg', 150000, 1, 12, '1701162972', 7, 1, '2023-11-28 16:16:51'),
(314, 'Sách minh họa', '360_F_317254576_lKDALRrvGoBr7gQSa1k4kJBx7O2D15dc.jpg', 150000, 4, 12, '170116307647', 7, 1, '2023-11-28 16:17:26'),
(315, 'PHP 2', 'demo-text-businessman-dark-vintage-background-108609906.webp', 2000, 2, 12, '170116307647', 5, 1, '2023-11-28 16:17:43'),
(317, 'Designing with Web Standards', '4196T42AKQL._AC_UF10001000_QL80_.jpg', 150000, 8, 7, '170143938561', 7, 1, '2023-12-01 21:02:53'),
(318, 'Designing with Web Standards', '4196T42AKQL._AC_UF10001000_QL80_.jpg', 150000, 3, 7, '17014394379', 7, 1, '2023-12-01 21:03:49'),
(319, 'Designing with Web Standards', '4196T42AKQL._AC_UF10001000_QL80_.jpg', 150000, 2, 7, '170144669456', 7, 1, '2023-12-01 23:04:47'),
(320, 'Designing with Web Standards', '4196T42AKQL._AC_UF10001000_QL80_.jpg', 150000, 1, 10, '170149456271', 7, 1, '2023-12-02 12:22:36'),
(321, 'HTML and CSS: Design and Build Websites', '4.png', 90000, 1, 10, '170149457889', 6, 1, '2023-12-02 12:22:51'),
(322, 'Designing with Web Standards', '4196T42AKQL._AC_UF10001000_QL80_.jpg', 150000, 12, 10, '170149795369', 7, 1, '2023-12-02 13:18:57'),
(323, 'HTML and CSS: Design and Build Websites', '4.png', 90000, 7, 10, '170149795369', 6, 1, '2023-12-02 13:19:05'),
(326, 'Designing with Web Standards', '4196T42AKQL._AC_UF10001000_QL80_.jpg', 150000, 1, 7, NULL, 7, 0, '2023-12-04 00:14:37');

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `id` int(11) NOT NULL,
  `message` varchar(100) DEFAULT NULL,
  `teacher_id` int(11) NOT NULL,
  `create_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`id`, `message`, `teacher_id`, `create_at`) VALUES
(1, 'faefaef', 6, '2023-12-01 14:20:27'),
(2, 'aef', 6, '2023-12-01 14:20:28'),
(3, '123', 6, '2023-12-01 14:20:48'),
(4, '123', 6, '2023-12-01 14:20:58'),
(5, 'just test', 6, '2023-12-01 14:21:04'),
(6, '1', 12, '2023-12-01 14:34:14'),
(7, 'ok, i got it', 12, '2023-12-01 14:34:33'),
(8, 'ok', 6, '2023-12-01 14:34:38'),
(9, 'superadmin', 12, '2023-12-01 14:36:46'),
(10, 'thông báo website', 6, '2023-12-02 07:05:41'),
(11, 'tất cả giảng viên có thắc mắc gì vui lòng liên hệ admin thông qua email kienndph39656@fpt.edu.vn', 6, '2023-12-02 07:06:01'),
(12, 'dạ', 15, '2023-12-02 17:57:22');

-- --------------------------------------------------------

--
-- Table structure for table `code_course`
--

CREATE TABLE `code_course` (
  `id` int(11) NOT NULL,
  `price` int(11) DEFAULT NULL,
  `course_id` int(11) DEFAULT NULL,
  `student_id` int(11) DEFAULT NULL,
  `code` varchar(100) DEFAULT NULL,
  `create_at` timestamp NULL DEFAULT NULL,
  `update_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `code_course`
--

INSERT INTO `code_course` (`id`, `price`, `course_id`, `student_id`, `code`, `create_at`, `update_at`) VALUES
(4, 100000, 6, 7, 'course_1700991238', '2023-01-26 09:34:31', NULL),
(5, 50000, 7, 7, 'course_1700991284', '2023-01-26 09:35:13', NULL),
(6, 100000, 16, 7, 'course_1700992936', '2023-02-26 10:02:46', NULL),
(7, 500000, 12, 7, 'course_1701002630', '2023-02-26 12:44:13', NULL),
(8, 100000, 16, 11, 'course_1701032537', '2023-02-26 21:02:35', NULL),
(9, 100000, 16, 12, 'course_1701162829', '2023-03-28 09:15:06', NULL),
(10, 20000, 11, 7, 'course_1701408356', '2023-05-01 05:26:10', NULL),
(11, 220000, 14, 7, 'course_1701409991', '2023-11-28 05:53:25', NULL),
(12, 50000, 7, 10, 'course_1701447291', '2023-12-01 16:15:19', NULL),
(13, 100000, 6, 10, 'course_1701498906', '2023-12-02 06:35:40', NULL),
(14, 100000, 16, 10, 'course_1701499891', '2023-12-02 06:52:07', NULL),
(15, 20000, 11, 10, 'course_1701500131', '2023-12-02 06:56:02', NULL),
(16, 220000, 14, 10, 'course_1701500173', '2023-12-02 06:56:53', NULL),
(17, 50000, 15, 10, 'course_1701500345', '2023-12-02 06:59:37', NULL),
(18, 1500000, 24, 13, 'course_1701686871', '2023-12-04 10:48:23', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `fullname` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` varchar(13) DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `note` varchar(255) DEFAULT NULL,
  `create_at` timestamp NULL DEFAULT NULL,
  `update_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `fullname`, `email`, `phone`, `status`, `content`, `note`, `create_at`, `update_at`) VALUES
(1, 'duy kiên', 'ndkdzvl@gmail.com', '0368031178', 1, 'Khóa học rất hay', 'đã gọi điện cho khách hàng nhưng không trả lời', NULL, '2023-11-17 10:57:17'),
(2, 'Nguyễn Duy Kiên', 'ndkdzvl@email.com', '0368031178', 1, 'Update content...&#13;&#10;', 'something', '2023-11-17 10:17:25', '2023-11-17 10:57:22'),
(3, 'ND Kiên', 'kienndph39656@fpt.edu.vn', '0123984756', 1, 'content...&#13;&#10;', NULL, '2023-11-17 10:59:56', '2023-11-27 16:38:25'),
(4, 'nd kien', 'ifaoejfio@email.com', '0123984756', 1, 'content&#13;&#10;', NULL, '2023-11-17 11:06:02', '2023-12-02 07:06:40'),
(5, 'test', 'ofaijeiof@email.com', '0123984756', 1, 'content....', NULL, '2023-11-17 11:06:10', '2023-12-02 07:06:42');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `id` int(11) NOT NULL,
  `title` varchar(200) DEFAULT NULL,
  `cate_id` int(11) DEFAULT NULL,
  `thumbnail` varchar(255) DEFAULT NULL,
  `price` float DEFAULT NULL,
  `description` text DEFAULT NULL,
  `teacher_id` int(11) DEFAULT NULL,
  `create_at` timestamp NULL DEFAULT NULL,
  `update_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `title`, `cate_id`, `thumbnail`, `price`, `description`, `teacher_id`, `create_at`, `update_at`) VALUES
(6, 'Tin Học Cơ Sở', 14, '360_F_317254576_lKDALRrvGoBr7gQSa1k4kJBx7O2D15dc.jpg', 100000, '', 15, '2023-11-06 13:37:39', '2023-12-03 17:51:25'),
(7, 'Lập trình C++', 14, 'duan1.jpg', 50000, '', 15, '2023-11-06 13:39:51', '2023-12-02 17:56:58'),
(9, 'Cơ Sở Dữ Liệu', 15, 'csdl.jpg', 1000, '', 1, '2023-11-06 13:40:27', '2023-11-28 09:40:23'),
(10, 'Lập Trình Java1', 15, '360_F_317254576_lKDALRrvGoBr7gQSa1k4kJBx7O2D15dc.jpg', 2000, '', 1, '2023-11-06 13:41:18', '2023-11-28 09:57:11'),
(11, 'Xây Dựng Trang Web', 15, 'duan1.jpg', 20000, '', 1, '2023-11-06 13:41:38', '2023-11-28 09:57:35'),
(12, 'HTML &#38; CSS Cơ Bản', 14, 'demo-text-businessman-dark-vintage-background-108609906.webp', 500000, '', 1, '2023-11-06 13:42:04', '2023-12-03 18:16:23'),
(14, 'Lập Trình Cơ Sở Với Javascript', 15, 'duan1.jpg', 220000, '', 1, '2023-11-06 13:43:04', '2023-11-28 09:57:59'),
(15, 'Thiết Kế UI/UX', 16, 'uxui.jpg', 50000, '', 1, '2023-11-06 13:43:31', '2023-11-28 09:40:39'),
(16, 'Lập Trình PHP1', 16, 'php.png', 100000, '&#60;p&#62;M&#38;ocirc; Tả Kho&#38;aacute; học PHP &#38;amp; MySQL cơ bản d&#38;agrave;nh cho người mới bao gồm hơn 100 video hướng dẫn học vi&#38;ecirc;n học lập tr&#38;igrave;nh PHP &#38;amp; MySQL từ d&#38;ograve;ng code đầu ti&#38;ecirc;n cho đến khi l&#38;agrave;m được sản phẩm Bạn sẽ nhận được g&#38;igrave; tại kh&#38;oacute;a học? Hiểu r&#38;otilde; bản chất cốt l&#38;otilde;i ng&#38;ocirc;n ngữ lập tr&#38;igrave;nh PHP Được học theo lộ tr&#38;igrave;nh r&#38;otilde; r&#38;agrave;ng, b&#38;agrave;i bản Nắm vững kiến thức nền tảng của ng&#38;ocirc;n ngữ lập tr&#38;igrave;nh PHP, từ đ&#38;oacute; dễ d&#38;agrave;ng xử l&#38;yacute; c&#38;aacute;c b&#38;agrave;i to&#38;aacute;n phức tạp, tiếp cận c&#38;aacute;c kiến thức n&#38;acirc;ng cao Được r&#38;egrave;n luyện về logic, thuật to&#38;aacute;n qua c&#38;aacute;c b&#38;agrave;i tập trong kho&#38;aacute; học Nắm vững kiến thức về cơ sở dữ liệu, ng&#38;ocirc;n ngữ truy vấn SQL từ đ&#38;oacute; x&#38;acirc;y dựng ứng dụng thực tế kết hợp PHP &#38;amp; MySQL Từng bước x&#38;acirc;y dựng website ho&#38;agrave;n chỉnh từ đầu đến khi đẩy website l&#38;ecirc;n Internet Được hỗ trợ trực tiếp bởi giảng vi&#38;ecirc;n, qua group k&#38;iacute;n,... Học thử miễn ph&#38;iacute; tr&#38;ecirc;n Youtube https://www.youtube.com/playlist?list=PL8y3hWbcppt21UiT79eZNhGYHmVJVV4xx https://www.youtube.com/playlist?list=PL8y3hWbcppt1aPQL_fqhwFO1tig4XX-te&#60;/p&#62;&#13;&#10;', 1, '2023-11-06 13:43:49', '2023-12-03 18:16:12'),
(17, 'Thiết kế Web với HTML5&#38;CSS3', 16, 'duan1.jpg', 1500, '', 1, '2023-11-06 13:44:02', '2023-11-28 09:58:57'),
(21, 'Dự án 1 (TKTW)', 16, 'duan1.jpg', 950000, '&#60;h3&#62;M&#38;ocirc; Tả&#60;/h3&#62;&#13;&#10;&#13;&#10;&#60;p&#62;Kho&#38;aacute; học PHP &#38;amp; MySQL cơ bản d&#38;agrave;nh cho người mới bao gồm hơn 100 video hướng dẫn học vi&#38;ecirc;n học lập tr&#38;igrave;nh PHP &#38;amp; MySQL từ d&#38;ograve;ng code đầu ti&#38;ecirc;n cho đến khi l&#38;agrave;m được sản phẩm&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;p&#62;&#60;strong&#62;Bạn sẽ nhận được g&#38;igrave; tại kh&#38;oacute;a học?&#60;/strong&#62;&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;ul&#62;&#13;&#10;&#9;&#60;li&#62;Hiểu r&#38;otilde; bản chất cốt l&#38;otilde;i ng&#38;ocirc;n ngữ lập tr&#38;igrave;nh PHP&#60;/li&#62;&#13;&#10;&#9;&#60;li&#62;Được học theo lộ tr&#38;igrave;nh r&#38;otilde; r&#38;agrave;ng, b&#38;agrave;i bản&#60;/li&#62;&#13;&#10;&#9;&#60;li&#62;Nắm vững kiến thức nền tảng của ng&#38;ocirc;n ngữ lập tr&#38;igrave;nh PHP, từ đ&#38;oacute; dễ d&#38;agrave;ng xử l&#38;yacute; c&#38;aacute;c b&#38;agrave;i to&#38;aacute;n phức tạp, tiếp cận c&#38;aacute;c kiến thức n&#38;acirc;ng cao&#60;/li&#62;&#13;&#10;&#9;&#60;li&#62;Được r&#38;egrave;n luyện về logic, thuật to&#38;aacute;n qua c&#38;aacute;c b&#38;agrave;i tập trong kho&#38;aacute; học&#60;/li&#62;&#13;&#10;&#9;&#60;li&#62;Nắm vững kiến thức về cơ sở dữ liệu, ng&#38;ocirc;n ngữ truy vấn SQL từ đ&#38;oacute; x&#38;acirc;y dựng ứng dụng thực tế kết hợp PHP &#38;amp; MySQL&#60;/li&#62;&#13;&#10;&#9;&#60;li&#62;Từng bước x&#38;acirc;y dựng website ho&#38;agrave;n chỉnh từ đầu đến khi đẩy website l&#38;ecirc;n Internet&#60;/li&#62;&#13;&#10;&#9;&#60;li&#62;Được hỗ trợ trực tiếp bởi giảng vi&#38;ecirc;n, qua group k&#38;iacute;n,...&#60;/li&#62;&#13;&#10;&#60;/ul&#62;&#13;&#10;&#13;&#10;&#60;p&#62;&#60;strong&#62;Học thử miễn ph&#38;iacute; tr&#38;ecirc;n Youtube&#60;/strong&#62;&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;p&#62;&#60;a href=&#34;https://www.youtube.com/playlist?list=PL8y3hWbcppt21UiT79eZNhGYHmVJVV4xx&#34; target=&#34;_blank&#34;&#62;https://www.youtube.com/playlist?list=PL8y3hWbcppt21UiT79eZNhGYHmVJVV4xx&#60;/a&#62;&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;p&#62;&#60;a href=&#34;https://www.youtube.com/playlist?list=PL8y3hWbcppt1aPQL_fqhwFO1tig4XX-te&#34; target=&#34;_blank&#34;&#62;https://www.youtube.com/playlist?list=PL8y3hWbcppt1aPQL_fqhwFO1tig4XX-te&#60;/a&#62;&#60;/p&#62;&#13;&#10;', 1, '2023-11-08 05:08:51', '2023-12-03 18:16:45'),
(24, 'Nhập môn lập trình', 14, 'java.jpg', 1500000, '', 18, '2023-12-02 12:51:15', '2023-12-04 10:21:44');

-- --------------------------------------------------------

--
-- Table structure for table `course_category`
--

CREATE TABLE `course_category` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `teacher_id` int(11) DEFAULT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `update_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `course_category`
--

INSERT INTO `course_category` (`id`, `title`, `teacher_id`, `create_at`, `update_at`) VALUES
(14, 'Học Kỳ 1', NULL, '2023-11-26 10:36:36', '2023-11-08 05:59:03'),
(15, 'Học Kỳ 2', NULL, '2023-11-26 10:36:46', '2023-11-06 13:35:58'),
(16, 'Học Kỳ 3', NULL, '2023-11-26 10:36:42', '2023-11-06 13:36:01');

-- --------------------------------------------------------

--
-- Table structure for table `document`
--

CREATE TABLE `document` (
  `id` int(11) NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `answers` varchar(100) DEFAULT NULL,
  `view` int(11) DEFAULT NULL,
  `document_id` int(11) DEFAULT NULL,
  `create_at` timestamp NULL DEFAULT NULL,
  `update_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `document`
--

INSERT INTO `document` (`id`, `title`, `answers`, `view`, `document_id`, `create_at`, `update_at`) VALUES
(4, 'Lab (1 - 8) - 14/11/2023', 'Lab.zip', NULL, 1, '2023-11-14 10:18:00', NULL),
(5, 'Slide', 'Slide.zip', NULL, 1, '2023-11-14 10:19:06', NULL),
(6, 'Assigment', 'Web1013 - Xay dung trang web - Assignment.pdf', NULL, 1, '2023-11-14 10:21:29', NULL),
(7, 'Syllabus', 'WEB1013 - Xay dung trang web-Syllabus-CDIO.xlsx', NULL, 1, '2023-11-14 10:22:09', NULL),
(8, 'Đáp án đề 1', 'Slide.zip', NULL, 1, '2023-11-14 10:24:06', NULL),
(9, 'test 1', 'slide.zip', NULL, 2, '2023-11-14 10:25:11', NULL),
(10, 'test 2', 'WEB2014-Lap_trinh_PHP1-Assignment-SP22.pdf', NULL, 1, '2023-11-14 10:25:28', NULL),
(11, 'test 3', 'Lab 1.pdf', NULL, 2, '2023-11-14 10:25:42', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `document_category`
--

CREATE TABLE `document_category` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `create_at` timestamp NULL DEFAULT NULL,
  `update_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `document_category`
--

INSERT INTO `document_category` (`id`, `name`, `create_at`, `update_at`) VALUES
(1, 'Xây dựng trang web', NULL, '2023-11-14 10:18:07'),
(2, 'Php 2', '2023-11-14 05:23:21', '2023-11-14 05:36:52'),
(3, 'Java 1', '2023-11-14 05:23:33', '2023-11-14 05:36:39'),
(4, 'Cơ sở javascript', '2023-11-14 05:23:39', NULL),
(5, 'Tin học văn phòng', '2023-11-14 05:40:43', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `exam`
--

CREATE TABLE `exam` (
  `id` int(11) NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `description` tinytext DEFAULT NULL,
  `content` text DEFAULT NULL,
  `exam_id` int(11) DEFAULT NULL,
  `images` varchar(100) NOT NULL,
  `create_at` timestamp NULL DEFAULT NULL,
  `update_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `exam`
--

INSERT INTO `exam` (`id`, `title`, `description`, `content`, `exam_id`, `images`, `create_at`, `update_at`) VALUES
(8, 'Đề thi 3', 'description', '&#60;p&#62;&#60;span style=&#34;font-size:11pt&#34;&#62;&#60;span style=&#34;font-family:Calibri,sans-serif&#34;&#62;&#60;strong&#62;&#60;span style=&#34;font-size:14.0pt&#34;&#62;&#60;span style=&#34;font-family:&#38;quot;Tahoma&#38;quot;,sans-serif&#34;&#62;Y&#38;ecirc;u cầu:&#60;/span&#62;&#60;/span&#62;&#60;/strong&#62;&#60;/span&#62;&#60;/span&#62;&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;ol&#62;&#13;&#10;&#9;&#60;li&#62;&#60;span style=&#34;font-size:11pt&#34;&#62;&#60;span style=&#34;font-family:Calibri,sans-serif&#34;&#62;&#60;span style=&#34;font-size:14.0pt&#34;&#62;&#60;span style=&#34;font-family:&#38;quot;Tahoma&#38;quot;,sans-serif&#34;&#62;Layout đ&#38;uacute;ng bố cục chuẩn k&#38;iacute;ch thước, m&#38;agrave;u sắc theo thiết kế photoshop v&#38;agrave; ho&#38;agrave;n thiện (Y&#38;ecirc;u cầu tất cả menu, ti&#38;ecirc;u đề tin, ti&#38;ecirc;u đề sản phẩm đề c&#38;oacute; link v&#38;agrave; hover) &#60;/span&#62;&#60;/span&#62;&#60;/span&#62;&#60;/span&#62;&#60;/li&#62;&#13;&#10;&#9;&#60;li&#62;&#60;span style=&#34;font-size:11pt&#34;&#62;&#60;span style=&#34;font-family:Calibri,sans-serif&#34;&#62;&#60;span style=&#34;font-size:14.0pt&#34;&#62;&#60;span style=&#34;font-family:&#38;quot;Tahoma&#38;quot;,sans-serif&#34;&#62;Ch&#38;egrave;n logo &#60;/span&#62;&#60;/span&#62;&#60;/span&#62;&#60;/span&#62;&#60;/li&#62;&#13;&#10;&#9;&#60;li&#62;&#60;span style=&#34;font-size:11pt&#34;&#62;&#60;span style=&#34;font-family:Calibri,sans-serif&#34;&#62;&#60;span style=&#34;font-size:14.0pt&#34;&#62;&#60;span style=&#34;font-family:&#38;quot;Tahoma&#38;quot;,sans-serif&#34;&#62;Tạo menu v&#38;agrave; c&#38;oacute; hover, link &#60;/span&#62;&#60;/span&#62;&#60;/span&#62;&#60;/span&#62;&#60;/li&#62;&#13;&#10;&#9;&#60;li&#62;&#60;span style=&#34;font-size:11pt&#34;&#62;&#60;span style=&#34;font-family:Calibri,sans-serif&#34;&#62;&#60;span style=&#34;font-size:14.0pt&#34;&#62;&#60;span style=&#34;font-family:&#38;quot;Tahoma&#38;quot;,sans-serif&#34;&#62;Tạo form v&#38;agrave; validate form &#60;/span&#62;&#60;/span&#62;&#60;/span&#62;&#60;/span&#62;&#60;/li&#62;&#13;&#10;&#9;&#60;li&#62;&#60;span style=&#34;font-size:11pt&#34;&#62;&#60;span style=&#34;font-family:Calibri,sans-serif&#34;&#62;&#60;span style=&#34;font-size:14.0pt&#34;&#62;&#60;span style=&#34;font-family:&#38;quot;Tahoma&#38;quot;,sans-serif&#34;&#62;Ch&#38;egrave;n banner &#60;/span&#62;&#60;/span&#62;&#60;/span&#62;&#60;/span&#62;&#60;/li&#62;&#13;&#10;&#9;&#60;li&#62;&#60;span style=&#34;font-size:11pt&#34;&#62;&#60;span style=&#34;font-family:Calibri,sans-serif&#34;&#62;&#60;span style=&#34;font-size:14.0pt&#34;&#62;&#60;span style=&#34;font-family:&#38;quot;Tahoma&#38;quot;,sans-serif&#34;&#62;Tạo sản phẩm b&#38;aacute;n chạy&#60;/span&#62;&#60;/span&#62;&#60;/span&#62;&#60;/span&#62;&#60;/li&#62;&#13;&#10;&#9;&#60;li&#62;&#60;span style=&#34;font-size:11pt&#34;&#62;&#60;span style=&#34;font-family:Calibri,sans-serif&#34;&#62;&#60;span style=&#34;font-size:14.0pt&#34;&#62;&#60;span style=&#34;font-family:&#38;quot;Tahoma&#38;quot;,sans-serif&#34;&#62;Tạo sản phẩm mới&#60;/span&#62;&#60;/span&#62;&#60;/span&#62;&#60;/span&#62;&#60;/li&#62;&#13;&#10;&#60;/ol&#62;&#13;&#10;', 2, 'de 1.jpg', '0000-00-00 00:00:00', NULL),
(9, 'Đề thi 2', 'update...', '&#60;p&#62;&#60;span style=&#34;font-size:11pt&#34;&#62;&#60;span style=&#34;font-family:Calibri,sans-serif&#34;&#62;&#60;strong&#62;&#60;span style=&#34;font-size:14.0pt&#34;&#62;&#60;span style=&#34;font-family:&#38;quot;Tahoma&#38;quot;,sans-serif&#34;&#62;Y&#38;ecirc;u cầu:&#60;/span&#62;&#60;/span&#62;&#60;/strong&#62;&#60;/span&#62;&#60;/span&#62;&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;ol&#62;&#13;&#10;&#9;&#60;li&#62;&#60;span style=&#34;font-size:11pt&#34;&#62;&#60;span style=&#34;font-family:Calibri,sans-serif&#34;&#62;&#60;span style=&#34;font-size:14.0pt&#34;&#62;&#60;span style=&#34;font-family:&#38;quot;Tahoma&#38;quot;,sans-serif&#34;&#62;Layout đ&#38;uacute;ng bố cục chuẩn k&#38;iacute;ch thước, m&#38;agrave;u sắc theo thiết kế photoshop v&#38;agrave; ho&#38;agrave;n thiện (Y&#38;ecirc;u cầu tất cả menu, ti&#38;ecirc;u đề tin, ti&#38;ecirc;u đề sản phẩm đề c&#38;oacute; link v&#38;agrave; hover) &#60;/span&#62;&#60;/span&#62;&#60;/span&#62;&#60;/span&#62;&#60;/li&#62;&#13;&#10;&#9;&#60;li&#62;&#60;span style=&#34;font-size:11pt&#34;&#62;&#60;span style=&#34;font-family:Calibri,sans-serif&#34;&#62;&#60;span style=&#34;font-size:14.0pt&#34;&#62;&#60;span style=&#34;font-family:&#38;quot;Tahoma&#38;quot;,sans-serif&#34;&#62;Ch&#38;egrave;n logo &#60;/span&#62;&#60;/span&#62;&#60;/span&#62;&#60;/span&#62;&#60;/li&#62;&#13;&#10;&#9;&#60;li&#62;&#60;span style=&#34;font-size:11pt&#34;&#62;&#60;span style=&#34;font-family:Calibri,sans-serif&#34;&#62;&#60;span style=&#34;font-size:14.0pt&#34;&#62;&#60;span style=&#34;font-family:&#38;quot;Tahoma&#38;quot;,sans-serif&#34;&#62;Tạo menu v&#38;agrave; c&#38;oacute; hover, link &#60;/span&#62;&#60;/span&#62;&#60;/span&#62;&#60;/span&#62;&#60;/li&#62;&#13;&#10;&#9;&#60;li&#62;&#60;span style=&#34;font-size:11pt&#34;&#62;&#60;span style=&#34;font-family:Calibri,sans-serif&#34;&#62;&#60;span style=&#34;font-size:14.0pt&#34;&#62;&#60;span style=&#34;font-family:&#38;quot;Tahoma&#38;quot;,sans-serif&#34;&#62;Tạo form v&#38;agrave; validate form &#60;/span&#62;&#60;/span&#62;&#60;/span&#62;&#60;/span&#62;&#60;/li&#62;&#13;&#10;&#9;&#60;li&#62;&#60;span style=&#34;font-size:11pt&#34;&#62;&#60;span style=&#34;font-family:Calibri,sans-serif&#34;&#62;&#60;span style=&#34;font-size:14.0pt&#34;&#62;&#60;span style=&#34;font-family:&#38;quot;Tahoma&#38;quot;,sans-serif&#34;&#62;Ch&#38;egrave;n banner &#60;/span&#62;&#60;/span&#62;&#60;/span&#62;&#60;/span&#62;&#60;/li&#62;&#13;&#10;&#9;&#60;li&#62;&#60;span style=&#34;font-size:11pt&#34;&#62;&#60;span style=&#34;font-family:Calibri,sans-serif&#34;&#62;&#60;span style=&#34;font-size:14.0pt&#34;&#62;&#60;span style=&#34;font-family:&#38;quot;Tahoma&#38;quot;,sans-serif&#34;&#62;Tạo sản phẩm b&#38;aacute;n chạy&#60;/span&#62;&#60;/span&#62;&#60;/span&#62;&#60;/span&#62;&#60;/li&#62;&#13;&#10;&#9;&#60;li&#62;&#60;span style=&#34;font-size:11pt&#34;&#62;&#60;span style=&#34;font-family:Calibri,sans-serif&#34;&#62;&#60;span style=&#34;font-size:14.0pt&#34;&#62;&#60;span style=&#34;font-family:&#38;quot;Tahoma&#38;quot;,sans-serif&#34;&#62;Tạo sản phẩm mới&#60;/span&#62;&#60;/span&#62;&#60;/span&#62;&#60;/span&#62;&#60;/li&#62;&#13;&#10;&#60;/ol&#62;&#13;&#10;', 2, '2.jpg', '0000-00-00 00:00:00', NULL),
(10, 'Đề thi 2', 'Đề thi thiếu nhi', '&#60;p style=&#34;text-align:center&#34;&#62;&#60;strong&#62;Lập tr&#38;igrave;nh in ra m&#38;agrave;n h&#38;igrave;nh m&#38;ocirc; phỏng ph&#38;eacute;p nh&#38;acirc;n tay 2 số nguy&#38;ecirc;n dương c&#38;oacute; 3 chữ số nhập từ b&#38;agrave;n ph&#38;iacute;m. V&#38;iacute; dụ với 2 số nhập v&#38;agrave;o l&#38;agrave; 763 v&#38;agrave; 589 th&#38;igrave; phải in ra m&#38;agrave;n h&#38;igrave;nh như sau:&#60;/strong&#62;&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;p style=&#34;text-align:center&#34;&#62;&#38;nbsp;&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;p style=&#34;text-align:center&#34;&#62;&#60;strong&#62;&#60;img alt=&#34;Bài tập C++ số 1&#34; src=&#34;https://st.quantrimang.com/photos/image/2017/12/01/bai-tap-C-plus-1.png&#34; style=&#34;height:191px; width:257px&#34; /&#62;&#60;/strong&#62;&#60;/p&#62;&#13;&#10;', 3, 'bai-tap-C-plus-1.webp', '0000-00-00 00:00:00', NULL),
(11, 'Đề thi 1', 'update...', '&#60;p&#62;&#60;span style=&#34;font-size:11pt&#34;&#62;&#60;span style=&#34;font-family:Calibri,sans-serif&#34;&#62;&#60;strong&#62;&#60;span style=&#34;font-size:14.0pt&#34;&#62;&#60;span style=&#34;font-family:&#38;quot;Tahoma&#38;quot;,sans-serif&#34;&#62;Y&#38;ecirc;u cầu:&#60;/span&#62;&#60;/span&#62;&#60;/strong&#62;&#60;/span&#62;&#60;/span&#62;&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;ol&#62;&#13;&#10;&#9;&#60;li&#62;&#60;span style=&#34;font-size:11pt&#34;&#62;&#60;span style=&#34;font-family:Calibri,sans-serif&#34;&#62;&#60;span style=&#34;font-size:14.0pt&#34;&#62;&#60;span style=&#34;font-family:&#38;quot;Tahoma&#38;quot;,sans-serif&#34;&#62;Layout đ&#38;uacute;ng bố cục chuẩn k&#38;iacute;ch thước, m&#38;agrave;u sắc theo thiết kế photoshop v&#38;agrave; ho&#38;agrave;n thiện (Y&#38;ecirc;u cầu tất cả menu, ti&#38;ecirc;u đề tin, ti&#38;ecirc;u đề sản phẩm đề c&#38;oacute; link v&#38;agrave; hover) &#60;/span&#62;&#60;/span&#62;&#60;/span&#62;&#60;/span&#62;&#60;/li&#62;&#13;&#10;&#9;&#60;li&#62;&#60;span style=&#34;font-size:11pt&#34;&#62;&#60;span style=&#34;font-family:Calibri,sans-serif&#34;&#62;&#60;span style=&#34;font-size:14.0pt&#34;&#62;&#60;span style=&#34;font-family:&#38;quot;Tahoma&#38;quot;,sans-serif&#34;&#62;Ch&#38;egrave;n logo &#60;/span&#62;&#60;/span&#62;&#60;/span&#62;&#60;/span&#62;&#60;/li&#62;&#13;&#10;&#9;&#60;li&#62;&#60;span style=&#34;font-size:11pt&#34;&#62;&#60;span style=&#34;font-family:Calibri,sans-serif&#34;&#62;&#60;span style=&#34;font-size:14.0pt&#34;&#62;&#60;span style=&#34;font-family:&#38;quot;Tahoma&#38;quot;,sans-serif&#34;&#62;Tạo menu v&#38;agrave; c&#38;oacute; hover, link &#60;/span&#62;&#60;/span&#62;&#60;/span&#62;&#60;/span&#62;&#60;/li&#62;&#13;&#10;&#9;&#60;li&#62;&#60;span style=&#34;font-size:11pt&#34;&#62;&#60;span style=&#34;font-family:Calibri,sans-serif&#34;&#62;&#60;span style=&#34;font-size:14.0pt&#34;&#62;&#60;span style=&#34;font-family:&#38;quot;Tahoma&#38;quot;,sans-serif&#34;&#62;Tạo form v&#38;agrave; validate form &#60;/span&#62;&#60;/span&#62;&#60;/span&#62;&#60;/span&#62;&#60;/li&#62;&#13;&#10;&#9;&#60;li&#62;&#60;span style=&#34;font-size:11pt&#34;&#62;&#60;span style=&#34;font-family:Calibri,sans-serif&#34;&#62;&#60;span style=&#34;font-size:14.0pt&#34;&#62;&#60;span style=&#34;font-family:&#38;quot;Tahoma&#38;quot;,sans-serif&#34;&#62;Ch&#38;egrave;n banner &#60;/span&#62;&#60;/span&#62;&#60;/span&#62;&#60;/span&#62;&#60;/li&#62;&#13;&#10;&#9;&#60;li&#62;&#60;span style=&#34;font-size:11pt&#34;&#62;&#60;span style=&#34;font-family:Calibri,sans-serif&#34;&#62;&#60;span style=&#34;font-size:14.0pt&#34;&#62;&#60;span style=&#34;font-family:&#38;quot;Tahoma&#38;quot;,sans-serif&#34;&#62;Tạo dầu gội b&#38;aacute;n chạy&#60;/span&#62;&#60;/span&#62;&#60;/span&#62;&#60;/span&#62;&#60;/li&#62;&#13;&#10;&#9;&#60;li&#62;&#60;span style=&#34;font-size:11pt&#34;&#62;&#60;span style=&#34;font-family:Calibri,sans-serif&#34;&#62;&#60;span style=&#34;font-size:14.0pt&#34;&#62;&#60;span style=&#34;font-family:&#38;quot;Tahoma&#38;quot;,sans-serif&#34;&#62;Tạo dầu gội mới &#60;/span&#62;&#60;/span&#62;&#60;/span&#62;&#60;/span&#62;&#60;/li&#62;&#13;&#10;&#60;/ol&#62;&#13;&#10;', 2, 'de 3.jpg', '0000-00-00 00:00:00', NULL),
(12, 'Đề thi 1', 'mô tả ngắn', '&#60;p&#62;&#60;span style=&#34;font-size:11pt&#34;&#62;&#60;span style=&#34;font-family:Calibri,sans-serif&#34;&#62;&#60;strong&#62;&#60;span style=&#34;font-size:14.0pt&#34;&#62;&#60;span style=&#34;font-family:&#38;quot;Tahoma&#38;quot;,sans-serif&#34;&#62;Y&#38;ecirc;u cầu:&#60;/span&#62;&#60;/span&#62;&#60;/strong&#62;&#60;/span&#62;&#60;/span&#62;&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;ol&#62;&#13;&#10;&#9;&#60;li&#62;&#60;span style=&#34;font-size:11pt&#34;&#62;&#60;span style=&#34;font-family:Calibri,sans-serif&#34;&#62;&#60;span style=&#34;font-size:14.0pt&#34;&#62;&#60;span style=&#34;font-family:&#38;quot;Tahoma&#38;quot;,sans-serif&#34;&#62;Layout đ&#38;uacute;ng bố cục chuẩn k&#38;iacute;ch thước, m&#38;agrave;u sắc theo thiết kế photoshop v&#38;agrave; ho&#38;agrave;n thiện (Y&#38;ecirc;u cầu tất cả menu, ti&#38;ecirc;u đề tin, ti&#38;ecirc;u đề sản phẩm đề c&#38;oacute; link v&#38;agrave; hover) &#60;/span&#62;&#60;/span&#62;&#60;/span&#62;&#60;/span&#62;&#60;/li&#62;&#13;&#10;&#9;&#60;li&#62;&#60;span style=&#34;font-size:11pt&#34;&#62;&#60;span style=&#34;font-family:Calibri,sans-serif&#34;&#62;&#60;span style=&#34;font-size:14.0pt&#34;&#62;&#60;span style=&#34;font-family:&#38;quot;Tahoma&#38;quot;,sans-serif&#34;&#62;Ch&#38;egrave;n logo &#60;/span&#62;&#60;/span&#62;&#60;/span&#62;&#60;/span&#62;&#60;/li&#62;&#13;&#10;&#9;&#60;li&#62;&#60;span style=&#34;font-size:11pt&#34;&#62;&#60;span style=&#34;font-family:Calibri,sans-serif&#34;&#62;&#60;span style=&#34;font-size:14.0pt&#34;&#62;&#60;span style=&#34;font-family:&#38;quot;Tahoma&#38;quot;,sans-serif&#34;&#62;Tạo menu v&#38;agrave; c&#38;oacute; hover, link &#60;/span&#62;&#60;/span&#62;&#60;/span&#62;&#60;/span&#62;&#60;/li&#62;&#13;&#10;&#9;&#60;li&#62;&#60;span style=&#34;font-size:11pt&#34;&#62;&#60;span style=&#34;font-family:Calibri,sans-serif&#34;&#62;&#60;span style=&#34;font-size:14.0pt&#34;&#62;&#60;span style=&#34;font-family:&#38;quot;Tahoma&#38;quot;,sans-serif&#34;&#62;Tạo form v&#38;agrave; validate form &#60;/span&#62;&#60;/span&#62;&#60;/span&#62;&#60;/span&#62;&#60;/li&#62;&#13;&#10;&#9;&#60;li&#62;&#60;span style=&#34;font-size:11pt&#34;&#62;&#60;span style=&#34;font-family:Calibri,sans-serif&#34;&#62;&#60;span style=&#34;font-size:14.0pt&#34;&#62;&#60;span style=&#34;font-family:&#38;quot;Tahoma&#38;quot;,sans-serif&#34;&#62;Ch&#38;egrave;n banner &#60;/span&#62;&#60;/span&#62;&#60;/span&#62;&#60;/span&#62;&#60;/li&#62;&#13;&#10;&#9;&#60;li&#62;&#60;span style=&#34;font-size:11pt&#34;&#62;&#60;span style=&#34;font-family:Calibri,sans-serif&#34;&#62;&#60;span style=&#34;font-size:14.0pt&#34;&#62;&#60;span style=&#34;font-family:&#38;quot;Tahoma&#38;quot;,sans-serif&#34;&#62;Tạo dầu gội b&#38;aacute;n chạy&#60;/span&#62;&#60;/span&#62;&#60;/span&#62;&#60;/span&#62;&#60;/li&#62;&#13;&#10;&#9;&#60;li&#62;&#60;span style=&#34;font-size:11pt&#34;&#62;&#60;span style=&#34;font-family:Calibri,sans-serif&#34;&#62;&#60;span style=&#34;font-size:14.0pt&#34;&#62;&#60;span style=&#34;font-family:&#38;quot;Tahoma&#38;quot;,sans-serif&#34;&#62;Tạo dầu gội mới &#60;/span&#62;&#60;/span&#62;&#60;/span&#62;&#60;/span&#62;&#60;/li&#62;&#13;&#10;&#60;/ol&#62;&#13;&#10;', 3, 'de 13.jpg', '0000-00-00 00:00:00', NULL),
(13, 'Đề thi 3', 'Ngôn ngữ java', '&#60;p&#62;&#60;span style=&#34;font-size:11pt&#34;&#62;&#60;span style=&#34;font-family:Calibri,sans-serif&#34;&#62;&#60;strong&#62;&#60;span style=&#34;font-size:14.0pt&#34;&#62;&#60;span style=&#34;font-family:&#38;quot;Tahoma&#38;quot;,sans-serif&#34;&#62;Y&#38;ecirc;u cầu:&#60;/span&#62;&#60;/span&#62;&#60;/strong&#62;&#60;/span&#62;&#60;/span&#62;&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;ol&#62;&#13;&#10;&#9;&#60;li&#62;&#60;span style=&#34;font-size:11pt&#34;&#62;&#60;span style=&#34;font-family:Calibri,sans-serif&#34;&#62;&#60;span style=&#34;font-size:14.0pt&#34;&#62;&#60;span style=&#34;font-family:&#38;quot;Tahoma&#38;quot;,sans-serif&#34;&#62;Layout đ&#38;uacute;ng bố cục chuẩn k&#38;iacute;ch thước, m&#38;agrave;u sắc theo thiết kế photoshop v&#38;agrave; ho&#38;agrave;n thiện (Y&#38;ecirc;u cầu tất cả menu, ti&#38;ecirc;u đề tin, ti&#38;ecirc;u đề sản phẩm đề c&#38;oacute; link v&#38;agrave; hover) &#60;/span&#62;&#60;/span&#62;&#60;/span&#62;&#60;/span&#62;&#60;/li&#62;&#13;&#10;&#9;&#60;li&#62;&#60;span style=&#34;font-size:11pt&#34;&#62;&#60;span style=&#34;font-family:Calibri,sans-serif&#34;&#62;&#60;span style=&#34;font-size:14.0pt&#34;&#62;&#60;span style=&#34;font-family:&#38;quot;Tahoma&#38;quot;,sans-serif&#34;&#62;Ch&#38;egrave;n logo &#60;/span&#62;&#60;/span&#62;&#60;/span&#62;&#60;/span&#62;&#60;/li&#62;&#13;&#10;&#9;&#60;li&#62;&#60;span style=&#34;font-size:11pt&#34;&#62;&#60;span style=&#34;font-family:Calibri,sans-serif&#34;&#62;&#60;span style=&#34;font-size:14.0pt&#34;&#62;&#60;span style=&#34;font-family:&#38;quot;Tahoma&#38;quot;,sans-serif&#34;&#62;Tạo menu v&#38;agrave; c&#38;oacute; hover, link &#60;/span&#62;&#60;/span&#62;&#60;/span&#62;&#60;/span&#62;&#60;/li&#62;&#13;&#10;&#9;&#60;li&#62;&#60;span style=&#34;font-size:11pt&#34;&#62;&#60;span style=&#34;font-family:Calibri,sans-serif&#34;&#62;&#60;span style=&#34;font-size:14.0pt&#34;&#62;&#60;span style=&#34;font-family:&#38;quot;Tahoma&#38;quot;,sans-serif&#34;&#62;Tạo form v&#38;agrave; validate form &#60;/span&#62;&#60;/span&#62;&#60;/span&#62;&#60;/span&#62;&#60;/li&#62;&#13;&#10;&#9;&#60;li&#62;&#60;span style=&#34;font-size:11pt&#34;&#62;&#60;span style=&#34;font-family:Calibri,sans-serif&#34;&#62;&#60;span style=&#34;font-size:14.0pt&#34;&#62;&#60;span style=&#34;font-family:&#38;quot;Tahoma&#38;quot;,sans-serif&#34;&#62;Ch&#38;egrave;n banner &#60;/span&#62;&#60;/span&#62;&#60;/span&#62;&#60;/span&#62;&#60;/li&#62;&#13;&#10;&#9;&#60;li&#62;&#60;span style=&#34;font-size:11pt&#34;&#62;&#60;span style=&#34;font-family:Calibri,sans-serif&#34;&#62;&#60;span style=&#34;font-size:14.0pt&#34;&#62;&#60;span style=&#34;font-family:&#38;quot;Tahoma&#38;quot;,sans-serif&#34;&#62;Tạo dầu gội b&#38;aacute;n chạy&#60;/span&#62;&#60;/span&#62;&#60;/span&#62;&#60;/span&#62;&#60;/li&#62;&#13;&#10;&#9;&#60;li&#62;&#60;span style=&#34;font-size:11pt&#34;&#62;&#60;span style=&#34;font-family:Calibri,sans-serif&#34;&#62;&#60;span style=&#34;font-size:14.0pt&#34;&#62;&#60;span style=&#34;font-family:&#38;quot;Tahoma&#38;quot;,sans-serif&#34;&#62;Tạo dầu gội mới &#60;/span&#62;&#60;/span&#62;&#60;/span&#62;&#60;/span&#62;&#60;/li&#62;&#13;&#10;&#60;/ol&#62;&#13;&#10;', 3, 'lab 6 web1013.jpg', '0000-00-00 00:00:00', NULL),
(14, 'Đề thi 1', '1', '&#60;p&#62;&#60;strong&#62;Y&#38;ecirc;u cầu:&#60;/strong&#62;&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;ol&#62;&#13;&#10;&#9;&#60;li&#62;Layout đ&#38;uacute;ng bố cục chuẩn k&#38;iacute;ch thước, m&#38;agrave;u sắc theo thiết kế photoshop v&#38;agrave; ho&#38;agrave;n thiện (Y&#38;ecirc;u cầu tất cả menu, ti&#38;ecirc;u đề tin, ti&#38;ecirc;u đề sản phẩm đề c&#38;oacute; link v&#38;agrave; hover)&#60;/li&#62;&#13;&#10;&#9;&#60;li&#62;Ch&#38;egrave;n logo&#60;/li&#62;&#13;&#10;&#9;&#60;li&#62;Tạo menu v&#38;agrave; c&#38;oacute; hover, link&#60;/li&#62;&#13;&#10;&#9;&#60;li&#62;Tạo form v&#38;agrave; validate form&#60;/li&#62;&#13;&#10;&#9;&#60;li&#62;Ch&#38;egrave;n banner&#60;/li&#62;&#13;&#10;&#9;&#60;li&#62;Tạo dầu gội b&#38;aacute;n chạy&#60;/li&#62;&#13;&#10;&#9;&#60;li&#62;Tạo dầu gội mới&#60;/li&#62;&#13;&#10;&#60;/ol&#62;&#13;&#10;', 4, 'lab 6 web1013.jpg', '0000-00-00 00:00:00', NULL),
(15, 'Đề thi 2', 'đề thi mới javascript', '&#60;p&#62;&#60;strong&#62;Y&#38;ecirc;u cầu:&#60;/strong&#62;&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;ol&#62;&#13;&#10;&#9;&#60;li&#62;Layout đ&#38;uacute;ng bố cục chuẩn k&#38;iacute;ch thước, m&#38;agrave;u sắc theo thiết kế photoshop v&#38;agrave; ho&#38;agrave;n thiện (Y&#38;ecirc;u cầu tất cả menu, ti&#38;ecirc;u đề tin, ti&#38;ecirc;u đề sản phẩm đề c&#38;oacute; link v&#38;agrave; hover)&#60;/li&#62;&#13;&#10;&#9;&#60;li&#62;Ch&#38;egrave;n logo&#60;/li&#62;&#13;&#10;&#9;&#60;li&#62;Tạo menu v&#38;agrave; c&#38;oacute; hover, link&#60;/li&#62;&#13;&#10;&#9;&#60;li&#62;Tạo form v&#38;agrave; validate form&#60;/li&#62;&#13;&#10;&#9;&#60;li&#62;Ch&#38;egrave;n banner&#60;/li&#62;&#13;&#10;&#9;&#60;li&#62;Tạo dầu gội b&#38;aacute;n chạy&#60;/li&#62;&#13;&#10;&#9;&#60;li&#62;Tạo dầu gội mới&#60;/li&#62;&#13;&#10;&#60;/ol&#62;&#13;&#10;', 4, '4.png', '0000-00-00 00:00:00', NULL),
(16, 'Đề thi 3', 'đề thi 3 javascript', '&#60;p&#62;&#60;strong&#62;Y&#38;ecirc;u cầu:&#60;/strong&#62;&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;ol&#62;&#13;&#10;&#9;&#60;li&#62;Layout đ&#38;uacute;ng bố cục chuẩn k&#38;iacute;ch thước, m&#38;agrave;u sắc theo thiết kế photoshop v&#38;agrave; ho&#38;agrave;n thiện (Y&#38;ecirc;u cầu tất cả menu, ti&#38;ecirc;u đề tin, ti&#38;ecirc;u đề sản phẩm đề c&#38;oacute; link v&#38;agrave; hover)&#60;/li&#62;&#13;&#10;&#9;&#60;li&#62;Ch&#38;egrave;n logo&#60;/li&#62;&#13;&#10;&#9;&#60;li&#62;Tạo menu v&#38;agrave; c&#38;oacute; hover, link&#60;/li&#62;&#13;&#10;&#9;&#60;li&#62;Tạo form v&#38;agrave; validate form&#60;/li&#62;&#13;&#10;&#9;&#60;li&#62;Ch&#38;egrave;n banner&#60;/li&#62;&#13;&#10;&#9;&#60;li&#62;Tạo dầu gội b&#38;aacute;n chạy&#60;/li&#62;&#13;&#10;&#9;&#60;li&#62;Tạo dầu gội mới&#60;/li&#62;&#13;&#10;&#60;/ol&#62;&#13;&#10;', 4, '5.png', '0000-00-00 00:00:00', NULL),
(17, 'Đề thi 4', '', '&#60;p&#62;&#60;strong&#62;Y&#38;ecirc;u cầu:&#60;/strong&#62;&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;ol&#62;&#13;&#10;&#9;&#60;li&#62;Layout đ&#38;uacute;ng bố cục chuẩn k&#38;iacute;ch thước, m&#38;agrave;u sắc theo thiết kế photoshop v&#38;agrave; ho&#38;agrave;n thiện (Y&#38;ecirc;u cầu tất cả menu, ti&#38;ecirc;u đề tin, ti&#38;ecirc;u đề sản phẩm đề c&#38;oacute; link v&#38;agrave; hover)&#60;/li&#62;&#13;&#10;&#9;&#60;li&#62;Ch&#38;egrave;n logo&#60;/li&#62;&#13;&#10;&#9;&#60;li&#62;Tạo menu v&#38;agrave; c&#38;oacute; hover, link&#60;/li&#62;&#13;&#10;&#9;&#60;li&#62;Tạo form v&#38;agrave; validate form&#60;/li&#62;&#13;&#10;&#9;&#60;li&#62;Ch&#38;egrave;n banner&#60;/li&#62;&#13;&#10;&#9;&#60;li&#62;Tạo dầu gội b&#38;aacute;n chạy&#60;/li&#62;&#13;&#10;&#9;&#60;li&#62;Tạo dầu gội mới&#60;/li&#62;&#13;&#10;&#60;/ol&#62;&#13;&#10;', 4, 'de 1.jpg', '0000-00-00 00:00:00', NULL),
(18, 'Đề thi cuối kỳ', '', '&#60;p&#62;&#60;strong&#62;Y&#38;ecirc;u cầu:&#60;/strong&#62;&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;ol&#62;&#13;&#10;&#9;&#60;li&#62;Layout đ&#38;uacute;ng bố cục chuẩn k&#38;iacute;ch thước, m&#38;agrave;u sắc theo thiết kế photoshop v&#38;agrave; ho&#38;agrave;n thiện (Y&#38;ecirc;u cầu tất cả menu, ti&#38;ecirc;u đề tin, ti&#38;ecirc;u đề sản phẩm đề c&#38;oacute; link v&#38;agrave; hover)&#60;/li&#62;&#13;&#10;&#9;&#60;li&#62;Ch&#38;egrave;n logo&#60;/li&#62;&#13;&#10;&#9;&#60;li&#62;Tạo menu v&#38;agrave; c&#38;oacute; hover, link&#60;/li&#62;&#13;&#10;&#9;&#60;li&#62;Tạo form v&#38;agrave; validate form&#60;/li&#62;&#13;&#10;&#9;&#60;li&#62;Ch&#38;egrave;n banner&#60;/li&#62;&#13;&#10;&#9;&#60;li&#62;Tạo dầu gội b&#38;aacute;n chạy&#60;/li&#62;&#13;&#10;&#9;&#60;li&#62;Tạo dầu gội mới&#60;/li&#62;&#13;&#10;&#60;/ol&#62;&#13;&#10;', 3, 'de 13.jpg', '0000-00-00 00:00:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `exam_category`
--

CREATE TABLE `exam_category` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `create_at` timestamp NULL DEFAULT NULL,
  `update_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `exam_category`
--

INSERT INTO `exam_category` (`id`, `name`, `create_at`, `update_at`) VALUES
(2, 'Xây dựng trang web 1', '2023-11-12 06:22:47', NULL),
(3, 'Ngôn Ngữ Java', '2023-11-12 14:30:49', NULL),
(4, 'Javascript', '2023-12-02 08:32:38', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `permission` text DEFAULT NULL,
  `create_at` timestamp NULL DEFAULT NULL,
  `update_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `permission`, `create_at`, `update_at`) VALUES
(1, 'Super Admin', '{\"book\":{\"lists\":\"Xem\",\"add\":\"Th\\u00eam\",\"edit\":\"S\\u1eeda\",\"delete\":\"X\\u00f3a\"},\"book_category\":{\"lists\":\"Xem\",\"add\":\"Th\\u00eam\",\"edit\":\"S\\u1eeda\",\"delete\":\"X\\u00f3a\"},\"contact\":{\"lists\":\"Xem\",\"add\":\"Th\\u00eam\",\"edit\":\"S\\u1eeda\",\"delete\":\"X\\u00f3a\"},\"document\":{\"lists\":\"Xem\",\"add\":\"Th\\u00eam\",\"edit\":\"S\\u1eeda\",\"delete\":\"X\\u00f3a\"},\"exam\":{\"lists\":\"Xem\",\"add\":\"Th\\u00eam\",\"edit\":\"S\\u1eeda\",\"delete\":\"X\\u00f3a\"},\"exam_category\":{\"lists\":\"Xem\",\"add\":\"Th\\u00eam\",\"edit\":\"S\\u1eeda\",\"delete\":\"X\\u00f3a\"},\"groups\":{\"lists\":\"Xem\",\"add\":\"Th\\u00eam\",\"edit\":\"S\\u1eeda\",\"delete\":\"X\\u00f3a\"},\"lesson\":{\"lists\":\"Xem\",\"add\":\"Th\\u00eam\",\"edit\":\"S\\u1eeda\",\"delete\":\"X\\u00f3a\"},\"module\":{\"lists\":\"Xem\",\"add\":\"Th\\u00eam\",\"edit\":\"S\\u1eeda\",\"delete\":\"X\\u00f3a\"},\"news\":{\"lists\":\"Xem\",\"add\":\"Th\\u00eam\",\"edit\":\"S\\u1eeda\",\"delete\":\"X\\u00f3a\"},\"news_category\":{\"lists\":\"Xem\",\"add\":\"Th\\u00eam\",\"edit\":\"S\\u1eeda\",\"delete\":\"X\\u00f3a\"},\"student\":{\"lists\":\"Xem\",\"add\":\"Th\\u00eam\",\"edit\":\"S\\u1eeda\",\"delete\":\"X\\u00f3a\"},\"subject\":{\"lists\":\"Xem\",\"add\":\"Th\\u00eam\",\"edit\":\"S\\u1eeda\",\"delete\":\"X\\u00f3a\"},\"subject_category\":{\"lists\":\"Xem\",\"add\":\"Th\\u00eam\",\"edit\":\"S\\u1eeda\",\"delete\":\"X\\u00f3a\"},\"teacher\":{\"lists\":\"Xem\",\"add\":\"Th\\u00eam\",\"edit\":\"S\\u1eeda\",\"delete\":\"X\\u00f3a\"},\"test\":{\"lists\":\"Xem\",\"add\":\"Th\\u00eam\",\"edit\":\"S\\u1eeda\",\"delete\":\"X\\u00f3a\"}}', NULL, '2023-11-19 14:47:38'),
(2, 'Admin', '{\"book\":{\"lists\":\"Xem\",\"add\":\"Th\\u00eam\",\"edit\":\"S\\u1eeda\"},\"book_category\":{\"lists\":\"Xem\",\"add\":\"Th\\u00eam\",\"edit\":\"S\\u1eeda\"},\"contact\":{\"lists\":\"Xem\",\"add\":\"Th\\u00eam\",\"edit\":\"S\\u1eeda\"},\"document\":{\"lists\":\"Xem\",\"add\":\"Th\\u00eam\",\"edit\":\"S\\u1eeda\"},\"exam\":{\"lists\":\"Xem\",\"add\":\"Th\\u00eam\",\"edit\":\"S\\u1eeda\"},\"exam_category\":{\"lists\":\"Xem\",\"add\":\"Th\\u00eam\",\"edit\":\"S\\u1eeda\"},\"lesson\":{\"lists\":\"Xem\",\"add\":\"Th\\u00eam\",\"edit\":\"S\\u1eeda\"},\"module\":{\"lists\":\"Xem\",\"add\":\"Th\\u00eam\",\"edit\":\"S\\u1eeda\"},\"news\":{\"lists\":\"Xem\",\"add\":\"Th\\u00eam\",\"edit\":\"S\\u1eeda\"},\"news_category\":{\"lists\":\"Xem\",\"add\":\"Th\\u00eam\",\"edit\":\"S\\u1eeda\"},\"student\":{\"lists\":\"Xem\",\"add\":\"Th\\u00eam\",\"edit\":\"S\\u1eeda\"},\"subject\":{\"lists\":\"Xem\",\"add\":\"Th\\u00eam\",\"edit\":\"S\\u1eeda\"},\"subject_category\":{\"lists\":\"Xem\",\"add\":\"Th\\u00eam\",\"edit\":\"S\\u1eeda\"},\"teacher\":{\"lists\":\"Xem\",\"add\":\"Th\\u00eam\",\"edit\":\"S\\u1eeda\"},\"test\":{\"lists\":\"Xem\",\"add\":\"Th\\u00eam\",\"edit\":\"S\\u1eeda\"}}', '2023-11-08 15:47:28', '2023-11-19 08:56:09'),
(3, 'Teacher', '{\"document\":{\"lists\":\"Xem\",\"add\":\"Th\\u00eam\",\"edit\":\"S\\u1eeda\"},\"exam\":{\"lists\":\"Xem\",\"add\":\"Th\\u00eam\",\"edit\":\"S\\u1eeda\"},\"exam_category\":{\"lists\":\"Xem\",\"add\":\"Th\\u00eam\",\"edit\":\"S\\u1eeda\"},\"lesson\":{\"lists\":\"Xem\",\"add\":\"Th\\u00eam\",\"edit\":\"S\\u1eeda\"},\"module\":{\"lists\":\"Xem\",\"add\":\"Th\\u00eam\",\"edit\":\"S\\u1eeda\"},\"subject\":{\"lists\":\"Xem\",\"add\":\"Th\\u00eam\",\"edit\":\"S\\u1eeda\"}}', '2023-11-19 08:53:59', '2023-12-02 17:58:55'),
(4, 'Staff', '{\"book\":{\"lists\":\"Xem\",\"add\":\"Th\\u00eam\",\"edit\":\"S\\u1eeda\"},\"book_category\":{\"lists\":\"Xem\",\"add\":\"Th\\u00eam\",\"edit\":\"S\\u1eeda\"},\"contact\":{\"lists\":\"Xem\",\"add\":\"Th\\u00eam\",\"edit\":\"S\\u1eeda\"},\"document\":{\"lists\":\"Xem\",\"add\":\"Th\\u00eam\",\"edit\":\"S\\u1eeda\"},\"lesson\":{\"lists\":\"Xem\",\"add\":\"Th\\u00eam\",\"edit\":\"S\\u1eeda\"},\"module\":{\"lists\":\"Xem\",\"add\":\"Th\\u00eam\",\"edit\":\"S\\u1eeda\"},\"news\":{\"lists\":\"Xem\",\"add\":\"Th\\u00eam\",\"edit\":\"S\\u1eeda\"},\"news_category\":{\"lists\":\"Xem\",\"add\":\"Th\\u00eam\",\"edit\":\"S\\u1eeda\"},\"student\":{\"lists\":\"Xem\",\"add\":\"Th\\u00eam\",\"edit\":\"S\\u1eeda\"},\"test\":{\"lists\":\"Xem\",\"add\":\"Th\\u00eam\",\"edit\":\"S\\u1eeda\"}}', '2023-11-19 08:54:01', '2023-11-19 09:00:34'),
(5, 'Sales', '{\"book\":{\"lists\":\"Xem\",\"add\":\"Th\\u00eam\",\"edit\":\"S\\u1eeda\"},\"book_category\":{\"lists\":\"Xem\",\"add\":\"Th\\u00eam\",\"edit\":\"S\\u1eeda\"},\"contact\":{\"lists\":\"Xem\",\"add\":\"Th\\u00eam\",\"edit\":\"S\\u1eeda\"}}', '2023-11-19 08:54:49', '2023-11-19 09:00:43');

-- --------------------------------------------------------

--
-- Table structure for table `lesson`
--

CREATE TABLE `lesson` (
  `id` int(11) NOT NULL,
  `title` varchar(200) DEFAULT NULL,
  `video_url` text DEFAULT NULL,
  `module_id` int(11) DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL COMMENT '0: chờ duyệt\r\n1: đã duyệt',
  `teacher_id` int(11) DEFAULT NULL,
  `share_lesson` int(11) NOT NULL,
  `create_at` timestamp NULL DEFAULT NULL,
  `update_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lesson`
--

INSERT INTO `lesson` (`id`, `title`, `video_url`, `module_id`, `status`, `teacher_id`, `share_lesson`, `create_at`, `update_at`) VALUES
(10, 'Lab 2', '&#60;iframe width=&#34;560&#34; height=&#34;315&#34; src=&#34;https://www.youtube.com/embed/jb958YV4r14?si=ECnWGBgXpaYmmJM1&#34; title=&#34;YouTube video player&#34; frameborder=&#34;0&#34; allow=&#34;accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share&#34; allowfullscreen&#62;&#60;/iframe&#62;', 7, 1, NULL, 1, '2023-11-06 13:49:08', '2023-11-26 21:46:59'),
(11, 'Lab 3', '&#60;iframe width=&#34;560&#34; height=&#34;315&#34; src=&#34;https://www.youtube.com/embed/LtNvXIeE3ss?si=KrxSVhmJZS4yf7lC&#34; title=&#34;YouTube video player&#34; frameborder=&#34;0&#34; allow=&#34;accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share&#34; allowfullscreen&#62;&#60;/iframe&#62;', 7, 1, NULL, 1, '2023-11-06 13:49:12', '2023-11-26 21:47:49'),
(12, 'Lab 4', '&#60;iframe width=&#34;560&#34; height=&#34;315&#34; src=&#34;https://www.youtube.com/embed/ucsQDjc8LOA?si=mnYiKq10mNkqZV10&#34; title=&#34;YouTube video player&#34; frameborder=&#34;0&#34; allow=&#34;accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share&#34; allowfullscreen&#62;&#60;/iframe&#62;', 7, 1, NULL, 1, '2023-11-06 13:49:17', '2023-11-26 21:48:29'),
(13, 'Lab 5', '&#60;iframe width=&#34;560&#34; height=&#34;315&#34; src=&#34;https://www.youtube.com/embed/ucsQDjc8LOA?si=mnYiKq10mNkqZV10&#34; title=&#34;YouTube video player&#34; frameborder=&#34;0&#34; allow=&#34;accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share&#34; allowfullscreen&#62;&#60;/iframe&#62;', 7, 1, NULL, 0, '2023-11-06 13:49:22', '2023-11-26 22:15:21'),
(14, 'Lab 6', '&#60;iframe width=&#34;560&#34; height=&#34;315&#34; src=&#34;https://www.youtube.com/embed/jHEYx-qZh7A?si=oqTluULdFcQPOTfB&#34; title=&#34;YouTube video player&#34; frameborder=&#34;0&#34; allow=&#34;accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share&#34; allowfullscreen&#62;&#60;/iframe&#62;', 7, 1, NULL, 0, '2023-11-06 13:49:29', '2023-11-26 22:15:11'),
(15, 'Lab 7', '&#60;iframe width=&#34;560&#34; height=&#34;315&#34; src=&#34;https://www.youtube.com/embed/ucsQDjc8LOA?si=mnYiKq10mNkqZV10&#34; title=&#34;YouTube video player&#34; frameborder=&#34;0&#34; allow=&#34;accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share&#34; allowfullscreen&#62;&#60;/iframe&#62;', 7, 1, NULL, 0, '2023-11-06 13:49:35', '2023-11-26 22:15:01'),
(16, 'Lab 8', '&#60;iframe width=&#34;560&#34; height=&#34;315&#34; src=&#34;https://www.youtube.com/embed/jHEYx-qZh7A?si=oqTluULdFcQPOTfB&#34; title=&#34;YouTube video player&#34; frameborder=&#34;0&#34; allow=&#34;accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share&#34; allowfullscreen&#62;&#60;/iframe&#62;', 7, 1, NULL, 0, '2023-11-06 13:49:40', '2023-11-26 22:13:50'),
(19, 'Tiêu đề 1', '&#60;iframe width=&#34;560&#34; height=&#34;315&#34; src=&#34;https://www.youtube.com/embed/GAwvZGliOJ0?si=cYQ95-gBzFUAG2iB&#34; title=&#34;YouTube video player&#34; frameborder=&#34;0&#34; allow=&#34;accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share&#34; allowfullscreen&#62;&#60;/iframe&#62;', 10, 1, 6, 0, '2023-11-23 15:43:21', '2023-11-28 10:46:02'),
(21, 'CHuong hoc', '&#60;iframe width=&#34;560&#34; height=&#34;315&#34; src=&#34;https://www.youtube.com/embed/9xjxjFNV-0Q?si=A-Xts5qPUR8G7cdq&#34; title=&#34;YouTube video player&#34; frameborder=&#34;0&#34; allow=&#34;accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share&#34; allowfullscreen&#62;&#60;/iframe&#62;', 10, 1, 6, 0, '2023-11-23 15:56:22', '2023-11-28 10:46:45'),
(22, '123213', '213123', 10, NULL, NULL, 0, '2023-11-24 11:12:20', NULL),
(28, 'Bài 1: Giới thiệu Java', '&#60;iframe width=&#34;560&#34; height=&#34;315&#34; src=&#34;https://www.youtube.com/embed/3gtOAlcovoQ?si=cmpMkEm8vdO-gLoD&#34; title=&#34;YouTube video player&#34; frameborder=&#34;0&#34; allow=&#34;accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share&#34; allowfullscreen&#62;&#60;/iframe&#62;', 14, 1, 6, 0, '2023-11-28 10:49:42', '2023-11-28 14:39:57'),
(29, 'Bài 2: Cài đặt môi trường Java', '&#60;iframe width=&#34;560&#34; height=&#34;315&#34; src=&#34;https://www.youtube.com/embed/KjMRn1YQcLc?si=5vctCQgBt1U79oB9&#34; title=&#34;YouTube video player&#34; frameborder=&#34;0&#34; allow=&#34;accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share&#34; allowfullscreen&#62;&#60;/iframe&#62;', 14, 1, 6, 0, '2023-11-28 10:50:14', '2023-11-28 14:40:43'),
(30, 'Bài 3: Chương trình Java đầu tiên', '&#60;iframe width=&#34;560&#34; height=&#34;315&#34; src=&#34;https://www.youtube.com/embed/jIQmebw9VaA?si=JS8sMcMhN21OCvbM&#34; title=&#34;YouTube video player&#34; frameborder=&#34;0&#34; allow=&#34;accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share&#34; allowfullscreen&#62;&#60;/iframe&#62;', 14, 1, 6, 0, '2023-11-28 14:42:28', '2023-11-28 14:43:06'),
(31, 'Bài 4: Biến trong Java', '&#60;iframe width=&#34;560&#34; height=&#34;315&#34; src=&#34;https://www.youtube.com/embed/G2mCSTtBojM?si=IVsnAeCuCQMXqA7V&#34; title=&#34;YouTube video player&#34; frameborder=&#34;0&#34; allow=&#34;accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share&#34; allowfullscreen&#62;&#60;/iframe&#62;', 14, 1, 6, 0, '2023-11-28 14:42:52', '2023-11-28 14:43:07'),
(32, 'Bài 5: Kiểu dữ liệu trong Java', '&#60;iframe width=&#34;560&#34; height=&#34;315&#34; src=&#34;https://www.youtube.com/embed/4k_5vWY2wps?si=poisw9t-aa02Ma5P&#34; title=&#34;YouTube video player&#34; frameborder=&#34;0&#34; allow=&#34;accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share&#34; allowfullscreen&#62;&#60;/iframe&#62;', 14, 1, 6, 0, '2023-11-28 14:43:46', '2023-11-28 14:49:49'),
(33, 'Bài 1: Cấu trúc một trang HTML cơ bản', '&#60;iframe width=&#34;560&#34; height=&#34;315&#34; src=&#34;https://www.youtube.com/embed/cMGEQ8XjOVE?si=dFbKYsjgCH6OWC1J&#34; title=&#34;YouTube video player&#34; frameborder=&#34;0&#34; allow=&#34;accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share&#34; allowfullscreen&#62;&#60;/iframe&#62;', 15, 1, 6, 1, '2023-11-28 14:48:13', '2023-11-28 14:49:50'),
(34, 'Bài 2: Các thẻ HTML cơ bản phần 1', '&#60;iframe width=&#34;560&#34; height=&#34;315&#34; src=&#34;https://www.youtube.com/embed/lb-DCIkCVr8?si=R8d6bafCKn19swfD&#34; title=&#34;YouTube video player&#34; frameborder=&#34;0&#34; allow=&#34;accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share&#34; allowfullscreen&#62;&#60;/iframe&#62;', 15, 1, 6, 0, '2023-11-28 14:48:38', '2023-11-28 14:49:50'),
(35, 'Bài 3: Các thẻ HTML cơ bản phần 2', '&#60;iframe width=&#34;560&#34; height=&#34;315&#34; src=&#34;https://www.youtube.com/embed/g4GBGAo_riE?si=uvpESBaNsIzeAnJd&#34; title=&#34;YouTube video player&#34; frameborder=&#34;0&#34; allow=&#34;accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share&#34; allowfullscreen&#62;&#60;/iframe&#62;', 15, 1, 6, 0, '2023-11-28 14:49:01', '2023-11-28 14:49:51'),
(36, 'Bài 4: Sự khác nhau giữa thẻ inline và thẻ block trong CSS', '&#60;iframe width=&#34;560&#34; height=&#34;315&#34; src=&#34;https://www.youtube.com/embed/Rng6MpThAtQ?si=7FzAd53Bv5ODIpGd&#34; title=&#34;YouTube video player&#34; frameborder=&#34;0&#34; allow=&#34;accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share&#34; allowfullscreen&#62;&#60;/iframe&#62;', 15, 1, 6, 0, '2023-11-28 14:49:21', '2023-11-28 14:49:51'),
(37, 'Bài 5: Sự khác nhau giữa class và id trong CSS', '&#60;iframe width=&#34;560&#34; height=&#34;315&#34; src=&#34;https://www.youtube.com/embed/bymtqR7oTts?si=1sw7kw8v876L92hD&#34; title=&#34;YouTube video player&#34; frameborder=&#34;0&#34; allow=&#34;accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share&#34; allowfullscreen&#62;&#60;/iframe&#62;', 15, 1, 6, 0, '2023-11-28 14:49:45', '2023-11-28 14:49:52'),
(41, 'Bài 1: Giới thiệu về C++', '&#60;iframe width=&#34;560&#34; height=&#34;315&#34; src=&#34;https://www.youtube.com/embed/ILr_rU-lISk?si=maZcCT11JDwpS6i3&#34; title=&#34;YouTube video player&#34; frameborder=&#34;0&#34; allow=&#34;accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share&#34; allowfullscreen&#62;&#60;/iframe&#62;', 17, 1, 15, 1, '2023-11-28 15:03:33', '2023-11-28 15:04:48'),
(42, 'Bài 2: Xây dựng chương trình C++ đầu tiên', '&#60;iframe width=&#34;560&#34; height=&#34;315&#34; src=&#34;https://www.youtube.com/embed/q8UGqw6Cbnk?si=rwiSEJ77qMQhfq6l&#34; title=&#34;YouTube video player&#34; frameborder=&#34;0&#34; allow=&#34;accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share&#34; allowfullscreen&#62;&#60;/iframe&#62;', 17, 1, 15, 1, '2023-11-28 15:03:55', '2023-11-28 15:04:49'),
(43, 'Bài 3: Cấu trúc một chương trình C++', '&#60;iframe width=&#34;560&#34; height=&#34;315&#34; src=&#34;https://www.youtube.com/embed/IXzH3pYM_bg?si=JQGcWNZ1CLlFhoCK&#34; title=&#34;YouTube video player&#34; frameborder=&#34;0&#34; allow=&#34;accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share&#34; allowfullscreen&#62;&#60;/iframe&#62;', 17, 1, 15, 0, '2023-11-28 15:04:23', '2023-11-28 15:04:49'),
(44, 'Bài 4: Kinh nghiệm về Ghi chú trong C++', '&#60;iframe width=&#34;560&#34; height=&#34;315&#34; src=&#34;https://www.youtube.com/embed/Z-laY5MmTIE?si=wbqvmj4OCxGTseeh&#34; title=&#34;YouTube video player&#34; frameborder=&#34;0&#34; allow=&#34;accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share&#34; allowfullscreen&#62;&#60;/iframe&#62;', 17, 1, 15, 0, '2023-11-28 15:04:41', '2023-12-03 18:10:49'),
(45, 'Bài 1: Giới thiệu SQL và SQL server', '&#60;iframe width=&#34;560&#34; height=&#34;315&#34; src=&#34;https://www.youtube.com/embed/2fanjSYVElY?si=RT3ewwRgsSGRCQKF&#34; title=&#34;YouTube video player&#34; frameborder=&#34;0&#34; allow=&#34;accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share&#34; allowfullscreen&#62;&#60;/iframe&#62;', 18, 1, 6, 0, '2023-11-28 15:11:36', '2023-11-28 15:17:57'),
(47, 'Bài 2: Tạo database', '&#60;iframe width=&#34;560&#34; height=&#34;315&#34; src=&#34;https://www.youtube.com/embed/XUIm5VQlpJM?si=MON9nidKXWM5Olen&#34; title=&#34;YouTube video player&#34; frameborder=&#34;0&#34; allow=&#34;accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share&#34; allowfullscreen&#62;&#60;/iframe&#62;', 18, 1, 6, 0, '2023-11-28 15:12:09', '2023-11-28 15:17:59'),
(48, 'Bài 3: Tạo bảng', '&#60;iframe width=&#34;560&#34; height=&#34;315&#34; src=&#34;https://www.youtube.com/embed/TrLKdQH_Qng?si=KPxs7F7n4HD-Kab4&#34; title=&#34;YouTube video player&#34; frameborder=&#34;0&#34; allow=&#34;accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share&#34; allowfullscreen&#62;&#60;/iframe&#62;', 18, 1, 6, 0, '2023-11-28 15:12:27', '2023-11-28 15:17:59'),
(49, 'Bài 4: Kiểu dữ liệu trong SQL', '&#60;iframe width=&#34;560&#34; height=&#34;315&#34; src=&#34;https://www.youtube.com/embed/_40bzGOHloo?si=t25Rf317VjVgGahM&#34; title=&#34;YouTube video player&#34; frameborder=&#34;0&#34; allow=&#34;accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share&#34; allowfullscreen&#62;&#60;/iframe&#62;', 18, 1, 6, 0, '2023-11-28 15:12:50', '2023-11-28 15:18:00'),
(50, 'Bài 5: Insert, delete, update table', '&#60;iframe width=&#34;560&#34; height=&#34;315&#34; src=&#34;https://www.youtube.com/embed/viVwygluDDY?si=9lId0oT5lCaffggz&#34; title=&#34;YouTube video player&#34; frameborder=&#34;0&#34; allow=&#34;accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share&#34; allowfullscreen&#62;&#60;/iframe&#62;', 18, 1, 6, 0, '2023-11-28 15:13:11', '2023-11-28 15:18:01'),
(51, 'Bài 1:Figma', '&#60;iframe width=&#34;560&#34; height=&#34;315&#34; src=&#34;https://www.youtube.com/embed/YNeOB8AqCgs?si=gKaD1_Tgwhs-a6p1&#34; title=&#34;YouTube video player&#34; frameborder=&#34;0&#34; allow=&#34;accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share&#34; allowfullscreen&#62;&#60;/iframe&#62;', 19, 1, 6, 0, '2023-11-28 15:18:42', '2023-11-28 15:20:01'),
(52, 'Bài 2:Làm việc với Move, Scale, Frame và Slice Tool', '&#60;iframe width=&#34;560&#34; height=&#34;315&#34; src=&#34;https://www.youtube.com/embed/--6ABDok-AI?si=R94hS_RVzGEB4b2E&#34; title=&#34;YouTube video player&#34; frameborder=&#34;0&#34; allow=&#34;accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share&#34; allowfullscreen&#62;&#60;/iframe&#62;', 19, 1, 6, 0, '2023-11-28 15:19:04', '2023-11-28 15:20:02'),
(53, 'Bài 3:Draw Vector Shapes và Pen Tool', '&#60;iframe width=&#34;560&#34; height=&#34;315&#34; src=&#34;https://www.youtube.com/embed/NHP5uzfw-6c?si=Z2Mb72Y6TqcX8Ple&#34; title=&#34;YouTube video player&#34; frameborder=&#34;0&#34; allow=&#34;accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share&#34; allowfullscreen&#62;&#60;/iframe&#62;', 19, 1, 6, 0, '2023-11-28 15:19:24', '2023-11-28 15:20:02'),
(54, 'Bài 4:Làm việc với Text, Hand Tool và Comment', '&#60;iframe width=&#34;560&#34; height=&#34;315&#34; src=&#34;https://www.youtube.com/embed/_A8V1lDoQMo?si=49Nl8Iv6o3rM_3bj&#34; title=&#34;YouTube video player&#34; frameborder=&#34;0&#34; allow=&#34;accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share&#34; allowfullscreen&#62;&#60;/iframe&#62;', 19, 1, 6, 0, '2023-11-28 15:19:55', '2023-11-28 15:20:03'),
(55, 'Bài 1:Cài đặt môi trường', '&#60;iframe width=&#34;560&#34; height=&#34;315&#34; src=&#34;https://www.youtube.com/embed/efI98nT8Ffo?si=qnGGujQcUssGUOnj&#34; title=&#34;YouTube video player&#34; frameborder=&#34;0&#34; allow=&#34;accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share&#34; allowfullscreen&#62;&#60;/iframe&#62;', 20, 1, 6, 0, '2023-11-28 15:21:59', '2023-11-28 15:23:20'),
(56, 'Bài 2:Sử dụng JS trong file HTML', '&#60;iframe width=&#34;560&#34; height=&#34;315&#34; src=&#34;https://www.youtube.com/embed/W0vEUmyvthQ?si=jeQmjSrZugB9dToU&#34; title=&#34;YouTube video player&#34; frameborder=&#34;0&#34; allow=&#34;accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share&#34; allowfullscreen&#62;&#60;/iframe&#62;', 20, 1, 6, 0, '2023-11-28 15:22:24', '2023-11-28 15:23:20'),
(57, 'Bài 3:Khai báo biến', '&#60;iframe width=&#34;560&#34; height=&#34;315&#34; src=&#34;https://www.youtube.com/embed/CLbx37dqYEI?si=fPa-Q_LIcH4npbZU&#34; title=&#34;YouTube video player&#34; frameborder=&#34;0&#34; allow=&#34;accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share&#34; allowfullscreen&#62;&#60;/iframe&#62;', 20, 1, 6, 0, '2023-11-28 15:22:51', '2023-11-28 15:23:21'),
(58, 'Bài 4:Làm quen với toán tử', '&#60;iframe width=&#34;560&#34; height=&#34;315&#34; src=&#34;https://www.youtube.com/embed/SZb-N7TfPlw?si=8RasR-2821SQgw_V&#34; title=&#34;YouTube video player&#34; frameborder=&#34;0&#34; allow=&#34;accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share&#34; allowfullscreen&#62;&#60;/iframe&#62;', 20, 1, 6, 0, '2023-11-28 15:23:14', '2023-11-28 15:23:22'),
(59, 'Bài 1: Giới thiệu về web', '&#60;iframe width=&#34;560&#34; height=&#34;315&#34; src=&#34;https://www.youtube.com/embed/ZU6V0HJ28pw?si=fin-bxkQFWT2VsWK&#34; title=&#34;YouTube video player&#34; frameborder=&#34;0&#34; allow=&#34;accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share&#34; allowfullscreen&#62;&#60;/iframe&#62;', 21, 1, 6, 0, '2023-11-28 15:24:36', '2023-11-29 02:37:38'),
(60, 'Bài 2: Công cụ và môi trường', '&#60;iframe width=&#34;560&#34; height=&#34;315&#34; src=&#34;https://www.youtube.com/embed/NHD-vbK8f1c?si=OdxzqP-1fxyAz6tx&#34; title=&#34;YouTube video player&#34; frameborder=&#34;0&#34; allow=&#34;accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share&#34; allowfullscreen&#62;&#60;/iframe&#62;', 21, 1, 6, 0, '2023-11-28 15:24:57', '2023-11-29 02:37:39'),
(61, 'Bài 3: Định dạng nội dung văn bản', '&#60;iframe width=&#34;560&#34; height=&#34;315&#34; src=&#34;https://www.youtube.com/embed/2mR7bvU_CSg?si=_iSNVgB1F-GaVhVY&#34; title=&#34;YouTube video player&#34; frameborder=&#34;0&#34; allow=&#34;accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share&#34; allowfullscreen&#62;&#60;/iframe&#62;', 21, 1, 6, 0, '2023-11-28 15:25:40', '2023-11-29 02:37:40'),
(62, 'Bài 5: Cách học lập trình với ngôn ngữ c++', '&#60;iframe width=&#34;560&#34; height=&#34;315&#34; src=&#34;https://www.youtube.com/embed/hu20Ld4Yf-A?si=sjnSSfirP5YAj7LZ&#34; title=&#34;YouTube video player&#34; frameborder=&#34;0&#34; allow=&#34;accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share&#34; allowfullscreen&#62;&#60;/iframe&#62;', 22, 1, 15, 1, '2023-12-02 18:01:30', '2023-12-03 18:10:56'),
(64, 'Microsoft Excel 2016 Bài 01: Làm quen với Excel 2016', '&#60;iframe width=&#34;560&#34; height=&#34;315&#34; src=&#34;https://www.youtube.com/embed/3Su3SdPkSvQ?si=CtuDdBqYeMyxyuQW&#34; title=&#34;YouTube video player&#34; frameborder=&#34;0&#34; allow=&#34;accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share&#34; allowfullscreen&#62;&#60;/iframe&#62;', 16, 1, 15, 1, '2023-12-03 17:57:58', '2023-12-03 18:00:10'),
(65, 'Microsoft Excel 2016 Bài 02: Thao tác cơ bản với Excel', '&#60;iframe width=&#34;560&#34; height=&#34;315&#34; src=&#34;https://www.youtube.com/embed/jvxVjMhilZE?si=dw8NMdZo3x7LJDaj&#34; title=&#34;YouTube video player&#34; frameborder=&#34;0&#34; allow=&#34;accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share&#34; allowfullscreen&#62;&#60;/iframe&#62;', 16, 1, 15, 1, '2023-12-03 17:58:27', '2023-12-03 18:00:12'),
(66, 'Microsoft Excel 2016 Bài 03: Quản lý Vùng dữ liệu và Ô dữ liệu', '&#60;iframe width=&#34;560&#34; height=&#34;315&#34; src=&#34;https://www.youtube.com/embed/6p28Dz4fw-c?si=QQULZvsxw2fqL-Q9&#34; title=&#34;YouTube video player&#34; frameborder=&#34;0&#34; allow=&#34;accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share&#34; allowfullscreen&#62;&#60;/iframe&#62;', 16, 1, 15, 0, '2023-12-03 17:58:42', '2023-12-03 18:00:13'),
(67, 'Microsoft Excel 2016 Bài 04: Định dạng Vùng dữ liệu', '&#60;iframe width=&#34;560&#34; height=&#34;315&#34; src=&#34;https://www.youtube.com/embed/8wyUBZPdgyQ?si=oO7VJrRxYtSyOK4G&#34; title=&#34;YouTube video player&#34; frameborder=&#34;0&#34; allow=&#34;accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share&#34; allowfullscreen&#62;&#60;/iframe&#62;', 16, 1, 15, 0, '2023-12-03 17:59:24', '2023-12-03 18:00:14'),
(68, 'Microsoft Excel 2016 Bài 05: Lập công thức tính toán trong Excel', '&#60;iframe width=&#34;560&#34; height=&#34;315&#34; src=&#34;https://www.youtube.com/embed/4wkuN4MQJ98?si=7NP5B2TkRYsM7dDG&#34; title=&#34;YouTube video player&#34; frameborder=&#34;0&#34; allow=&#34;accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share&#34; allowfullscreen&#62;&#60;/iframe&#62;', 16, 1, 15, 0, '2023-12-03 17:59:59', '2023-12-03 18:00:15'),
(69, 'Microsoft Word 2016 Bài 06: Làm quen với Microsoft Office Word 2016', '&#60;iframe width=&#34;560&#34; height=&#34;315&#34; src=&#34;https://www.youtube.com/embed/UGpod7WlwJ0?si=C5pbLWQnJRVs7qen&#34; title=&#34;YouTube video player&#34; frameborder=&#34;0&#34; allow=&#34;accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share&#34; allowfullscreen&#62;&#60;/iframe&#62;', 23, 1, 15, 0, '2023-12-03 18:02:23', '2023-12-03 18:11:05'),
(70, 'Microsoft Word 2016 Bài 07: Tổ chức quản lý các tài liệu trong Word', '&#60;iframe width=&#34;560&#34; height=&#34;315&#34; src=&#34;https://www.youtube.com/embed/KiDdqMTLc34?si=RpwlwuyNWIygcmUg&#34; title=&#34;YouTube video player&#34; frameborder=&#34;0&#34; allow=&#34;accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share&#34; allowfullscreen&#62;&#60;/iframe&#62;', 23, 1, 15, 0, '2023-12-03 18:02:41', '2023-12-03 18:11:12'),
(71, 'Microsoft Word 2016 Bài 08: Các thao tác Soạn thảo văn bản Word', '&#60;iframe width=&#34;560&#34; height=&#34;315&#34; src=&#34;https://www.youtube.com/embed/SDpN6i8BUHc?si=x1VRa0eLqBWgd9zh&#34; title=&#34;YouTube video player&#34; frameborder=&#34;0&#34; allow=&#34;accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share&#34; allowfullscreen&#62;&#60;/iframe&#62;', 23, 1, 15, 0, '2023-12-03 18:03:45', '2023-12-03 18:11:19'),
(72, 'Microsoft Word 2016 Bài 09: Các thao tác Soạn thảo văn bản Word', '&#60;iframe width=&#34;560&#34; height=&#34;315&#34; src=&#34;https://www.youtube.com/embed/9UBpEDaWfTE?si=MykJCL0frHODMDt1&#34; title=&#34;YouTube video player&#34; frameborder=&#34;0&#34; allow=&#34;accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share&#34; allowfullscreen&#62;&#60;/iframe&#62;', 23, 1, 15, 0, '2023-12-03 18:04:03', '2023-12-03 18:11:26'),
(73, 'Bài 6: Biến trong C++', '&#60;iframe width=&#34;560&#34; height=&#34;315&#34; src=&#34;https://www.youtube.com/embed/i3nJyEt42Y8?si=pyXp-Fk_1rqYQBB3&#34; title=&#34;YouTube video player&#34; frameborder=&#34;0&#34; allow=&#34;accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share&#34; allowfullscreen&#62;&#60;/iframe&#62;', 17, 1, 15, 0, '2023-12-03 18:13:37', '2023-12-03 18:15:38'),
(74, 'Bài 1: Khái niệm, đặc điểm của ngôn ngữ C', '&#60;iframe width=&#34;560&#34; height=&#34;315&#34; src=&#34;https://www.youtube.com/embed/lOH-7uPNE3U?si=P6WzNUyy4aj87O3Y&#34; title=&#34;YouTube video player&#34; frameborder=&#34;0&#34; allow=&#34;accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share&#34; allowfullscreen&#62;&#60;/iframe&#62;', 24, 1, 18, 1, '2023-12-04 10:24:58', '2023-12-04 10:29:07'),
(75, 'Bài 2: Cấu trúc và chương trình C đầu tiên', '&#60;iframe width=&#34;560&#34; height=&#34;315&#34; src=&#34;https://www.youtube.com/embed/j2JdNl0aHnY?si=heVZRqubb877YF7k&#34; title=&#34;YouTube video player&#34; frameborder=&#34;0&#34; allow=&#34;accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share&#34; allowfullscreen&#62;&#60;/iframe&#62;', 24, 1, 18, 0, '2023-12-04 10:25:18', '2023-12-04 10:29:13'),
(76, 'Bài 3: Định danh và biến trong C', '&#60;iframe width=&#34;560&#34; height=&#34;315&#34; src=&#34;https://www.youtube.com/embed/tj30ZjlQr18?si=da5Y6UTs2p_ZU4N9&#34; title=&#34;YouTube video player&#34; frameborder=&#34;0&#34; allow=&#34;accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share&#34; allowfullscreen&#62;&#60;/iframe&#62;', 25, 1, 18, 0, '2023-12-04 10:25:55', '2023-12-04 10:29:14'),
(77, 'Bài 4: Kiểu dữ liệu cơ bản của ngôn ngữ C', '&#60;iframe width=&#34;560&#34; height=&#34;315&#34; src=&#34;https://www.youtube.com/embed/nKFu_k5ZU2o?si=x6iq5E1reFU7qKPe&#34; title=&#34;YouTube video player&#34; frameborder=&#34;0&#34; allow=&#34;accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share&#34; allowfullscreen&#62;&#60;/iframe&#62;', 25, 1, 18, 0, '2023-12-04 10:26:11', '2023-12-04 10:29:14'),
(78, 'Bài 5: Nhập xuất đơn giản trong C', '&#60;iframe width=&#34;560&#34; height=&#34;315&#34; src=&#34;https://www.youtube.com/embed/jF6kaIQQTRk?si=cZv7jcV9RWCxzpvb&#34; title=&#34;YouTube video player&#34; frameborder=&#34;0&#34; allow=&#34;accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share&#34; allowfullscreen&#62;&#60;/iframe&#62;', 25, 1, 18, 0, '2023-12-04 10:26:29', '2023-12-04 10:29:15'),
(79, 'Bài 6: Phép toán logic', '&#60;iframe width=&#34;560&#34; height=&#34;315&#34; src=&#34;https://www.youtube.com/embed/bJT0x7vD-PI?si=yL2I7_te_pAjPgFD&#34; title=&#34;YouTube video player&#34; frameborder=&#34;0&#34; allow=&#34;accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share&#34; allowfullscreen&#62;&#60;/iframe&#62;', 25, 1, 18, 0, '2023-12-04 10:26:48', '2023-12-04 10:29:27'),
(80, 'Bài 7: Phép toán trên bit', '&#60;iframe width=&#34;560&#34; height=&#34;315&#34; src=&#34;https://www.youtube.com/embed/KZOJk4yUIgY?si=zynuxzufBEfg8BWK&#34; title=&#34;YouTube video player&#34; frameborder=&#34;0&#34; allow=&#34;accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share&#34; allowfullscreen&#62;&#60;/iframe&#62;', 25, 1, 18, 0, '2023-12-04 10:27:22', '2023-12-04 10:29:28'),
(81, 'Bài 8: Sự khác nhau giữa ++i và i++', '&#60;iframe width=&#34;560&#34; height=&#34;315&#34; src=&#34;https://www.youtube.com/embed/tYikxsw3ySk?si=IKEdgr68PUMafwfO&#34; title=&#34;YouTube video player&#34; frameborder=&#34;0&#34; allow=&#34;accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share&#34; allowfullscreen&#62;&#60;/iframe&#62;', 25, 1, 18, 0, '2023-12-04 10:27:45', '2023-12-04 10:29:28'),
(82, 'Bài 9: Câu lệnh điều kiện IF - ELSE và SWITCH trong C', '&#60;iframe width=&#34;560&#34; height=&#34;315&#34; src=&#34;https://www.youtube.com/embed/gxZOn13Z_ic?si=8z0mSNC9cZqEzT3_&#34; title=&#34;YouTube video player&#34; frameborder=&#34;0&#34; allow=&#34;accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share&#34; allowfullscreen&#62;&#60;/iframe&#62;', 26, 1, 18, 0, '2023-12-04 10:28:02', '2023-12-04 10:29:28'),
(83, 'Bài 10: Lệnh lặp FOR hoạt động ra sao?', '&#60;iframe width=&#34;560&#34; height=&#34;315&#34; src=&#34;https://www.youtube.com/embed/iMKYVYNNnYk?si=c0ROeswIhV1OkVkD&#34; title=&#34;YouTube video player&#34; frameborder=&#34;0&#34; allow=&#34;accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share&#34; allowfullscreen&#62;&#60;/iframe&#62;', 26, 1, 18, 0, '2023-12-04 10:28:21', '2023-12-04 10:29:29'),
(84, 'Bài 11: While và Do while khác nhau thế nào?', '&#60;iframe width=&#34;560&#34; height=&#34;315&#34; src=&#34;https://www.youtube.com/embed/bf9wdO6gjxo?si=Hlr-KF8ouqiWOyO1&#34; title=&#34;YouTube video player&#34; frameborder=&#34;0&#34; allow=&#34;accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share&#34; allowfullscreen&#62;&#60;/iframe&#62;', 26, 1, 18, 0, '2023-12-04 10:28:36', '2023-12-04 10:29:29');

-- --------------------------------------------------------

--
-- Table structure for table `module`
--

CREATE TABLE `module` (
  `id` int(11) NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `course_id` int(11) DEFAULT NULL,
  `teacher_id` int(11) DEFAULT NULL,
  `create_at` timestamp NULL DEFAULT NULL,
  `update_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `module`
--

INSERT INTO `module` (`id`, `title`, `course_id`, `teacher_id`, `create_at`, `update_at`) VALUES
(7, 'Giải Lab môn php 1', 16, NULL, '2023-11-06 13:48:26', '2023-11-08 06:04:58'),
(10, 'Luyện đề thi', 16, NULL, '2023-11-06 14:23:36', NULL),
(14, 'java', 10, 6, '2023-11-28 10:49:26', NULL),
(15, 'HTML &#38; CSS dành cho người mới', 12, 6, '2023-11-28 14:47:32', NULL),
(16, 'Làm quen với excel', 6, 15, '2023-11-28 14:58:02', '2023-12-03 17:57:10'),
(17, 'Lập trình C++ cơ bản', 7, 15, '2023-11-28 15:03:11', NULL),
(18, 'Sử dụng SQL server cơ bản', 9, 6, '2023-11-28 15:11:11', NULL),
(19, 'Học FIGMA  thiết kế UX/UI', 15, 6, '2023-11-28 15:15:13', NULL),
(20, 'Javascript Cơ Bản', 14, 6, '2023-11-28 15:21:36', NULL),
(21, 'Học lập trình web front-end sử dụng HTML5 và CSS3', 17, 6, '2023-11-28 15:24:06', NULL),
(22, 'Nhập môn lập trình với ngôn ngữ C++', 7, 15, '2023-12-02 18:00:14', NULL),
(23, 'Làm quen với Word', 6, 15, '2023-12-03 18:01:42', NULL),
(24, 'Khái niệm ngôn ngữ C', 24, 18, '2023-12-04 10:23:31', '2023-12-04 10:24:19'),
(25, 'Kiểu dữ liệu trong ngôn ngữ C', 24, 18, '2023-12-04 10:23:53', NULL),
(26, 'Cấu trúc rẽ nhánh', 24, 18, '2023-12-04 10:24:01', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `momo`
--

CREATE TABLE `momo` (
  `id` int(11) NOT NULL,
  `partner_code` varchar(100) NOT NULL,
  `order_id` varchar(100) NOT NULL,
  `amount` varchar(100) NOT NULL,
  `order_info` varchar(100) NOT NULL,
  `order_type` varchar(100) NOT NULL,
  `trans_id` varchar(100) NOT NULL,
  `pay_type` varchar(100) NOT NULL,
  `code_cart` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `momo`
--

INSERT INTO `momo` (`id`, `partner_code`, `order_id`, `amount`, `order_info`, `order_type`, `trans_id`, `pay_type`, `code_cart`) VALUES
(1, 'MOMOBKUN20180529', '1700723249', '300000', 'Thanh toán qua MoMo', 'momo_wallet', '3134869046', 'napas', ''),
(2, 'MOMOBKUN20180529', '1700723970', '151500', 'Thanh toán qua MoMo', 'momo_wallet', '3134869963', 'napas', '170072397095'),
(3, 'MOMOBKUN20180529', '1700725472', '300000', 'Thanh toán qua MoMo', 'momo_wallet', '3134871235', 'napas', '170072547217'),
(4, 'MOMOBKUN20180529', '1700760607', '453000', 'Thanh toán qua MoMo', 'momo_wallet', '3134948192', 'napas', '170076060751'),
(5, 'MOMOBKUN20180529', '1700991238', '100000', 'Thanh toán qua MoMo', 'momo_wallet', '3135534034', 'napas', 'course_1700991238'),
(6, 'MOMOBKUN20180529', '1700991284', '50000', 'Thanh toán qua MoMo', 'momo_wallet', '3135534045', 'napas', 'course_1700991284'),
(7, 'MOMOBKUN20180529', '1701026209', '300000', 'Thanh toán qua MoMo', 'momo_wallet', '3135606714', 'napas', '170102620918'),
(8, 'MOMOBKUN20180529', '1701162829', '100000', 'Thanh toán qua MoMo', 'momo_wallet', '3104981500', 'napas', 'course_1701162829'),
(9, 'MOMOBKUN20180529', '1701162972', '150000', 'Thanh toán qua MoMo', 'momo_wallet', '3105102377', 'napas', '1701162972'),
(10, 'MOMOBKUN20180529', '1701163076', '604000', 'Thanh toán qua MoMo', 'momo_wallet', '3105121869', 'napas', '170116307647'),
(11, 'MOMOBKUN20180529', '1701439385', '1200000', 'Thanh toán qua MoMo', 'momo_wallet', '3105341084', 'napas', '170143938561'),
(12, 'MOMOBKUN20180529', '1701447291', '50000', 'Thanh toán qua MoMo', 'momo_wallet', '3105358627', 'napas', 'course_1701447291'),
(13, 'MOMOBKUN20180529', '1701498906', '100000', 'Thanh toán qua MoMo', 'momo_wallet', '3105346972', 'napas', 'course_1701498906'),
(14, 'MOMOBKUN20180529', '1701499891', '100000', 'Thanh toán qua MoMo', 'momo_wallet', '3105362609', 'napas', 'course_1701499891'),
(15, 'MOMOBKUN20180529', '1701500131', '20000', 'Thanh toán qua MoMo', 'momo_wallet', '3105611712', 'napas', 'course_1701500131'),
(16, 'MOMOBKUN20180529', '1701500173', '220000', 'Thanh toán qua MoMo', 'momo_wallet', '3105594712', 'napas', 'course_1701500173'),
(17, 'MOMOBKUN20180529', '1701500345', '50000', 'Thanh toán qua MoMo', 'momo_wallet', '3105347091', 'napas', 'course_1701500345');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `thumbnail` varchar(100) DEFAULT NULL,
  `news_id` int(11) DEFAULT NULL,
  `create_at` timestamp NULL DEFAULT NULL,
  `update_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `content`, `thumbnail`, `news_id`, `create_at`, `update_at`) VALUES
(1, 'Ưu đãi 20% với các khóa học lập trình cơ bản', '&#60;h1&#62;CHƯƠNG TR&#38;Igrave;NH HỌC THỬ FULL KH&#38;Oacute;A- TƯ VẤN MIỄN PH&#38;Iacute; HỌC TẬP&#60;/h1&#62;&#13;&#10;&#13;&#10;&#60;p&#62;12:00&#38;nbsp;13/11/2023&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;p&#62;Chia sẻ ngay:Twitter&#38;nbsp;Fabook&#38;nbsp;Share&#38;nbsp;&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;p&#62;Chắc chắn, b&#38;acirc;y giờ bạn K2006-K2007-K2008 đang v&#38;ocirc; c&#38;ugrave;ng lo lắng, kh&#38;ocirc;ng biết l&#38;agrave;m thế n&#38;agrave;o để &#38;ocirc;n tập kiến thức&#38;nbsp;hiệu quả kiến thức để chuẩn bị cho những&#38;nbsp;b&#38;agrave;i&#38;nbsp;kiểm tra, k&#38;igrave; thi quan trọng...của m&#38;igrave;nh. Đặc biệt đối với 2006 l&#38;agrave; k&#38;igrave; thi Tốt nghiệp trung học phổ th&#38;ocirc;ng, c&#38;ograve;n K2007, 2008 th&#38;igrave; chuẩn bị cho c&#38;aacute;c b&#38;agrave;i kiểm tra ở lớp, trường, c&#38;aacute;c b&#38;agrave;i thi khảo s&#38;aacute;t.&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;p&#62;B&#38;ecirc;n cạnh&#38;nbsp;rất nhiều bạn đ&#38;atilde; bắt kịp được xu hướng học online chủ động mọi l&#38;uacute;c mọi nơi, tr&#38;ecirc;n mọi thiết bị, nhưng cũng c&#38;oacute; những bạn kh&#38;aacute; kh&#38;oacute; khăn khi tiếp cận h&#38;igrave;nh thức học online n&#38;agrave;y. D&#38;ugrave; rằng n&#38;oacute; đang trở n&#38;ecirc;n phổ biến với rất nhiều ưu điểm. Chuvanbien.vn với kinh nghiệm nhiều năm dẫn dắt bao nhi&#38;ecirc;u thế hệ học sinh bứt ph&#38;aacute; th&#38;agrave;nh c&#38;ocirc;ng với số điểm như &#38;yacute;.&#38;nbsp;&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;p&#62;Chuvanbien.vn triển khai chương tr&#38;igrave;nh học thử miễn ph&#38;iacute; tất cả c&#38;aacute;c kh&#38;oacute;a học lớp 10,11,12&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;p&#62;Đồng thời miễn ph&#38;iacute; tư vấn học tập, kiểm tra kiến thức hiện tại cho tất cả c&#38;aacute;c bạn học sinh&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;p&#62;C&#38;aacute;c bạn sẽ nhanh ch&#38;oacute;ng trả lời được c&#38;acirc;u hỏi của m&#38;igrave;nh:&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;ol&#62;&#13;&#10;&#9;&#60;li&#62;&#38;nbsp;Học như thế n&#38;agrave;o cho hiệu quả?&#60;/li&#62;&#13;&#10;&#9;&#60;li&#62;&#38;nbsp;M&#38;ocirc;ng lung kh&#38;ocirc;ng biết c&#38;aacute;ch quản l&#38;yacute; thời gian v&#38;agrave; l&#38;ecirc;n mục ti&#38;ecirc;u, kế hoạch thực hiện mục ti&#38;ecirc;u?&#60;/li&#62;&#13;&#10;&#9;&#60;li&#62;&#38;nbsp;Giữa h&#38;agrave;ng trăm webside dạy trực tuyến m&#38;ocirc;n vật l&#38;yacute; th&#38;igrave; webside n&#38;agrave;o mới đang tin cậy?&#60;/li&#62;&#13;&#10;&#9;&#60;li&#62;&#38;nbsp;V&#38;agrave; n&#38;ecirc;n theo học với&#38;nbsp;gi&#38;aacute;o vi&#38;ecirc;n n&#38;agrave;o?&#60;/li&#62;&#13;&#10;&#60;/ol&#62;&#13;&#10;&#13;&#10;&#60;p&#62;Để đạt hiệu quả cao nhất, chinh phục được mọi k&#38;igrave; thi kiểm tra ở lớp ở trường, đặc biệt hơn l&#38;agrave;&#38;nbsp; chuẩn bị chu đ&#38;aacute;o cho k&#38;igrave; thi v&#38;ocirc; c&#38;ugrave;ng quan trọng của cuộc đời học sinh&#38;nbsp;- k&#38;igrave; thi THPT Quốc Gia?&#38;nbsp;&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;p&#62;&#60;br /&#62;&#13;&#10;➡️ C&#38;aacute;c bạn h&#38;atilde;y&#38;nbsp;lắng nghe &#38;yacute; kiến chia sẻ từ c&#38;aacute;c anh chị kho&#38;aacute; trước, c&#38;aacute;c gv c&#38;oacute; kinh nghiệm luyện thi nhiều năm v&#38;agrave; chắn chắn l&#38;agrave; bản th&#38;acirc;n c&#38;aacute;c bạn phải được trải nghiệm&#38;nbsp;thật sự, ch&#38;iacute;nh m&#38;igrave;nh cảm thụ v&#38;agrave;&#38;nbsp;đ&#38;aacute;nh gi&#38;aacute;!!!&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;p&#62;❤️❤️❤️Đừng bỏ lỡ chương tr&#38;igrave;nh&#38;nbsp;HỌC THỬ FULL KHO&#38;Aacute; - MIỄN PH&#38;Iacute; TƯ VẤN HỌC TẬP&#38;nbsp;tại Web&#38;nbsp;&#60;a href=&#34;https://chuvanbien.vn/&#34;&#62;http://chuvanbien.vn/&#60;/a&#62;&#38;nbsp;&#60;br /&#62;&#13;&#10;▶️ Nhanh tay inbox&#38;nbsp;&#60;a href=&#34;https://www.facebook.com/thaychuvanbienchuyenluyenthivatly&#34; target=&#34;_blank&#34;&#62;TẠI Đ&#38;Acirc;Y&#60;/a&#62;&#38;nbsp;để nhận t&#38;agrave;i khoản học thử như học ch&#38;iacute;nh thức - đầy đủ to&#38;agrave;n bộ chương tr&#38;igrave;nh Vật L&#38;yacute; 10, 11, 12 đầy đủ L&#38;yacute; thuyết, phương ph&#38;aacute;p giải b&#38;agrave;i tập, v&#38;iacute; dụ minh họa cho đến hệ thống b&#38;agrave;i kiểm tra đ&#38;aacute;nh gi&#38;aacute; năng lực được bi&#38;ecirc;n soạn kĩ lưỡng v&#38;agrave; tr&#38;igrave;nh b&#38;agrave;y v&#38;ocirc; c&#38;ugrave;ng cuốn h&#38;uacute;t v&#38;agrave; truyền cảm bởi thầy gi&#38;aacute;o gi&#38;agrave;u kinh nghiệm &#38;quot; Chu Văn Bi&#38;ecirc;n&#38;quot;&#38;nbsp;&#38;nbsp;&#60;br /&#62;&#13;&#10;▶️ Tham gia để đc thầy v&#38;agrave; c&#38;aacute;c thủ khoa hướng dẫn học hằng ng&#38;agrave;y miễn ph&#38;iacute;:&#38;nbsp;&#60;a href=&#34;https://www.facebook.com/groups/chuvanbien.vn/&#34; target=&#34;_blank&#34;&#62;TẠI Đ&#38;Acirc;Y&#60;/a&#62;&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;p&#62;*FANPAGE CHU VĂN BI&#38;Ecirc;N để nhận nhiều kiến thức hay về vật l&#38;yacute; mỗi ng&#38;agrave;y:&#38;nbsp;&#60;a href=&#34;https://www.facebook.com/thaychuvanbienchuyenluyenthivatly&#34; target=&#34;_blank&#34;&#62;TẠI Đ&#38;Acirc;Y&#60;/a&#62;&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;p&#62;*Hotline: 0985829393 - 0943191900 - 0965191900 - 0904191900&#38;nbsp;&#38;nbsp;&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;p&#62;C&#38;aacute;c em c&#38;oacute; thể nghe chia sẻ th&#38;ecirc;m từ c&#38;aacute;c thủ khoa&#38;nbsp;&#60;strong&#62;&#60;a href=&#34;https://www.youtube.com/watch?v=HC4fnsoYnS8&#38;amp;t=13s&#34; target=&#34;_blank&#34;&#62;TẠI Đ&#38;Acirc;Y&#60;/a&#62;&#60;/strong&#62;&#60;/p&#62;&#13;&#10;', '74d7f223a059a135521a8eb7de9dfac7.jpg', 1, NULL, '2023-12-02 08:02:23'),
(2, 'Chính sách đặc biệt dành cho hs có hoàn cảnh khó khăn, hs giỏi, hs đăng kí theo nhóm', '&#60;h1&#62;Ch&#38;iacute;nh s&#38;aacute;ch đặc biệt d&#38;agrave;nh cho hs c&#38;oacute; ho&#38;agrave;n cảnh kh&#38;oacute; khăn, hs giỏi, hs đăng k&#38;iacute; theo nh&#38;oacute;m&#60;/h1&#62;&#13;&#10;&#13;&#10;&#60;p&#62;12:00&#38;nbsp;19/06/2023&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;p&#62;Chia sẻ ngay:Twitter&#38;nbsp;Fabook&#38;nbsp;Share&#38;nbsp;&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;p&#62;&#60;iframe frameborder=&#34;0&#34; height=&#34;20px&#34; id=&#34;bee9ad74-43e3-468c-8c0b-7cc08717c293&#34; name=&#34;bee9ad74-43e3-468c-8c0b-7cc08717c293&#34; scrolling=&#34;no&#34; src=&#34;https://button-share.zalo.me/share_inline?id=bee9ad74-43e3-468c-8c0b-7cc08717c293&#38;amp;layout=2&#38;amp;color=blue&#38;amp;customize=false&#38;amp;width=20&#38;amp;height=20&#38;amp;isDesktop=true&#38;amp;url=https%3A%2F%2Fchuvanbien.vn%2Findex.php%3Fmodule%3Dnews%26view%3Dnews%26code%3Dchinh-sach-dac-biet-danh-cho-hs-co-hoan-canh-kho-khan-hs-gioi-hs-dang-ki-theo-nhom%26id%3D229&#38;amp;d=eyJ1cmwiOiJodHRwczovL2NodXZhbmJpZW4udm4vaW5kZXgucGhwP21vZHVsZT1uZXdzJnZpZXc9bmV3cyZjb2RlPWNoaW5oLXNhY2gtZGFjLWJpZXQtZGFuaC1jaG8taHMtY28taG9hbi1jYW5oLWtoby1raGFuLWhzLWdpb2ktaHMtZGFuZy1raS10aGVvLW5ob20maWQ9MjI5In0%253D&#38;amp;shareType=0&#34; width=&#34;20px&#34;&#62;&#60;/iframe&#62;&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;h1&#62;Khuyến m&#38;atilde;i&#38;nbsp;đặc biệt cho c&#38;aacute;c học sinh đạt giải hsg , thi Olypia, hộ ngh&#38;egrave;o...v&#38;agrave; C&#38;aacute;c bạn đăng k&#38;iacute; theo nh&#38;oacute;m học.&#60;/h1&#62;&#13;&#10;&#13;&#10;&#60;p&#62;&#38;nbsp;&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;p&#62;&#60;strong&#62;C&#38;ocirc;ng ty C&#38;Ocirc;NG TY TNHH MODERN VISION lu&#38;ocirc;n c&#38;oacute; c&#38;aacute;c&#38;nbsp;chương tr&#38;igrave;nh khuyến học&#38;nbsp;nhằm tạo điều kiện cho c&#38;aacute;c học sinh to&#38;agrave;n quốc học tập tốt nhất, đạt kết quả cao như sau:&#60;/strong&#62;&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;ul&#62;&#13;&#10;&#9;&#60;li&#62;Giảm 100% học ph&#38;iacute; c&#38;aacute;c kh&#38;oacute;a học trang bị kiến thức đối với Học sinh bị t&#38;agrave;n tật, khuyết tật, mồ c&#38;ocirc;i cả cha lẫn mẹ.&#60;/li&#62;&#13;&#10;&#9;&#60;li&#62;Giảm 30 % học ph&#38;iacute; tất cả c&#38;aacute;c kh&#38;oacute;a học cho học sinh hộ ngh&#38;egrave;o, cận ngh&#38;egrave;o, ho&#38;agrave;n cảnh đặc biệt kh&#38;oacute; khăn.&#60;/li&#62;&#13;&#10;&#9;&#60;li&#62;Giảm gi&#38;aacute; 10% tất cả c&#38;aacute;c s&#38;aacute;ch kh&#38;oacute;a học cho học sinh đạt c&#38;aacute;c giải nhất, nh&#38;igrave;, ba của c&#38;aacute;c k&#38;igrave; thi HSG Tỉnh, HSG Quốc Gia, Đường l&#38;ecirc;n đỉnh Olympia.&#60;/li&#62;&#13;&#10;&#9;&#60;li&#62;Giảm gi&#38;aacute; 10% tất cả c&#38;aacute;c s&#38;aacute;ch kh&#38;oacute;a học cho học sinh l&#38;agrave; em ruột của c&#38;aacute;c cao thủ thủ khoa c&#38;aacute;c năm.&#60;/li&#62;&#13;&#10;&#9;&#60;li&#62;Giảm gi&#38;aacute; 10% tất cả c&#38;aacute;c kh&#38;oacute;a học VIP cho học sinh l&#38;agrave; em ruột của c&#38;aacute;c học sinh đ&#38;atilde; từng l&#38;agrave; hs CVBer&#60;/li&#62;&#13;&#10;&#9;&#60;li&#62;Giảm gi&#38;aacute; 10% tất cả c&#38;aacute;c kh&#38;oacute;a học v&#38;agrave; kh&#38;oacute;a học VIP cho học sinh l&#38;agrave; con của c&#38;aacute;c thương binh bệnh binh.&#60;/li&#62;&#13;&#10;&#9;&#60;li&#62;CH&#38;Iacute;NH S&#38;Aacute;CH ĐĂNG K&#38;Iacute; NH&#38;Oacute;M&#60;br /&#62;&#13;&#10;&#9;+&#38;nbsp;Giảm gi&#38;aacute; 20% cho nh&#38;oacute;m học sinh đăng k&#38;yacute; &#38;gt;= 20 combo kh&#38;oacute;a học VIP2, VIP 3, VIP 1&#60;br /&#62;&#13;&#10;&#9;+ Giảm gi&#38;aacute; 15% cho nh&#38;oacute;m học sinh đăng k&#38;yacute; &#38;gt;= 10 combo kh&#38;oacute;a học VIP2, VIP 3, VIP 1&#60;br /&#62;&#13;&#10;&#9;+&#38;nbsp;Giảm gi&#38;aacute; 10% cho nh&#38;oacute;m học sinh đăng k&#38;yacute; &#38;gt;= 5 combo kh&#38;oacute;a học VIP2, VIP 3, VIP 1&#60;br /&#62;&#13;&#10;&#9;+ Giảm gi&#38;aacute; 5% cho nh&#38;oacute;m học sinh đăng k&#38;yacute; &#38;gt;= 2 combo kh&#38;oacute;a học VIP2, VIP 3, VIP 1&#60;/li&#62;&#13;&#10;&#9;&#60;li&#62;Giảm gi&#38;aacute; khi đăng k&#38;iacute; số lượng lớn kh&#38;oacute;a lẻ:&#60;br /&#62;&#13;&#10;&#9;+ Giảm gi&#38;aacute; 5% cho nh&#38;oacute;m học sinh đăng k&#38;iacute; &#38;gt;= 3 kh&#38;oacute;a học bất k&#38;igrave;&#60;br /&#62;&#13;&#10;&#9;+ Giảm gi&#38;aacute; 10% cho nh&#38;oacute;m học sinh đăng k&#38;iacute; &#38;gt;= 5 kh&#38;oacute;a học bất k&#38;igrave;&#60;br /&#62;&#13;&#10;&#9;+ Giảm gi&#38;aacute; 15% cho nh&#38;oacute;m học sinh đăng k&#38;iacute; &#38;gt;= 10 kh&#38;oacute;a học bất k&#38;igrave;&#60;br /&#62;&#13;&#10;&#9;+ Giảm gi&#38;aacute; 20% cho nh&#38;oacute;m học sinh đăng k&#38;iacute; &#38;gt;= 20 kh&#38;oacute;a học bất k&#38;igrave;&#60;/li&#62;&#13;&#10;&#9;&#60;li&#62;&#38;nbsp;Giảm gi&#38;aacute; cho học sinh đạt học sinh giỏi D&#38;agrave;nh cho học sinh đang học ở&#38;nbsp;chuvanbien.vn&#38;nbsp;ĐẠT NHẤT, NH&#38;Igrave;, BA cấp tỉnh m&#38;ocirc;n vật l&#38;yacute;:&#38;nbsp;&#60;/li&#62;&#13;&#10;&#60;/ul&#62;&#13;&#10;&#13;&#10;&#60;p&#62;&#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp;+ Giải nhất, nh&#38;igrave;, ba tặng 1 balo, hoặc &#38;aacute;o&#38;nbsp;chuvanbien.vn&#38;nbsp;hoặc giải nhất voucher 200k, giải nh&#38;igrave; voucher 150k, giải 3 voucher 100k ( C&#38;aacute;c voucher &#38;aacute;p dụng khi đăng k&#38;iacute; kh&#38;oacute;a học hoặc đăng k&#38;iacute; cho người th&#38;acirc;n, bạn b&#38;egrave;)&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;p&#62;&#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp;+ Ưu đ&#38;atilde;i giảm 10% khi đăng k&#38;iacute; c&#38;aacute;c kh&#38;oacute;a học hoặc VIP&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;ul&#62;&#13;&#10;&#9;&#60;li&#62;D&#38;agrave;nh cho học sinh đang học ở&#38;nbsp;chuvanbien.vn&#38;nbsp;đạt giải khuyến kh&#38;iacute;ch cấp tỉnh m&#38;ocirc;n vật l&#38;yacute;&#60;/li&#62;&#13;&#10;&#60;/ul&#62;&#13;&#10;&#13;&#10;&#60;p&#62;&#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; +Tặng 1 voucher 100k ( C&#38;aacute;c voucher &#38;aacute;p dụng khi đăng k&#38;iacute; kh&#38;oacute;a học hoặc đăng k&#38;iacute; cho người th&#38;acirc;n, bạn b&#38;egrave;)&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;p&#62;&#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; + Ưu đ&#38;atilde;i 10% khi đăng k&#38;iacute; c&#38;aacute;c kh&#38;oacute;a học hoặc VIP&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;ul&#62;&#13;&#10;&#9;&#60;li&#62;D&#38;agrave;nh cho học đang học&#38;nbsp;chuvanbien.vn&#38;nbsp;đạt giải c&#38;aacute;c m&#38;ocirc;n văn h&#38;oacute;a kh&#38;aacute;c&#60;/li&#62;&#13;&#10;&#60;/ul&#62;&#13;&#10;&#13;&#10;&#60;p&#62;&#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; + Giải nhất voucher 200k,&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;p&#62;&#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; + Giải nh&#38;igrave; voucher 150k&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;p&#62;&#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; + Giải 3 voucher 100k ( C&#38;aacute;c voucher &#38;aacute;p dụng khi đăng k&#38;iacute; kh&#38;oacute;a học hoặc đăng k&#38;iacute; cho người th&#38;acirc;n, bạn b&#38;egrave;)&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;p&#62;&#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; + Ưu đ&#38;atilde;i 10% khi đăng k&#38;iacute; c&#38;aacute;c kh&#38;oacute;a học hoặc VIP&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;ul&#62;&#13;&#10;&#9;&#60;li&#62;D&#38;agrave;nh cho học sinh chưa học ở&#38;nbsp;chuvanbien.vn&#38;nbsp;đang muốn đăng k&#38;iacute; học với điều kiện đạt học sinh giỏi c&#38;aacute;c m&#38;ocirc;n kh&#38;aacute;c:&#60;/li&#62;&#13;&#10;&#60;/ul&#62;&#13;&#10;&#13;&#10;&#60;p&#62;&#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; + Giảm 10% khi đăng k&#38;iacute; kh&#38;oacute;a học, kh&#38;oacute;a VIP.&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;p&#62;&#60;em&#62;&#60;strong&#62;Lưu &#38;yacute;:&#38;nbsp;&#60;/strong&#62;&#60;/em&#62;Mỗi&#38;nbsp;trường hợp học sinh với điều kiện như tr&#38;ecirc;n sẽ được &#38;aacute;p dụng chương tr&#38;igrave;nh cho đến khi đủ KH&#38;Oacute;A VIP ưu đ&#38;atilde;i&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;p&#62;Thời gian &#38;aacute;p dụng từ 20/06/2023&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;p&#62;Tất cả c&#38;aacute;c bạn học sinh thuộc diện n&#38;ecirc;u tr&#38;ecirc;n li&#38;ecirc;n hệ&#38;nbsp;&#60;strong&#62;&#60;a href=&#34;https://m.me/chuvanbien.vn&#34; target=&#34;_blank&#34;&#62;TẠI Đ&#38;Acirc;Y&#60;/a&#62;&#60;/strong&#62;&#38;nbsp;để nhận quyền lợi.&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;p&#62;&#60;strong&#62;➡️Học vật l&#38;yacute; thầy Chu Văn Bi&#38;ecirc;n c&#38;oacute; hiệu quả kh&#38;ocirc;ng:&#38;nbsp;&#60;a href=&#34;http://drive.google.com/drive/folders/1GctGg9NUrf4jJ14VXG-vw3sVmGbDj1Ql&#34; target=&#34;_blank&#34;&#62;TẠI Đ&#38;Acirc;Y&#60;/a&#62;&#60;/strong&#62;&#60;/p&#62;&#13;&#10;', '4f71f29c0d155d8f5d929eaa6a9d1fbb.jpg', 2, '2023-11-04 11:32:34', '2023-11-29 02:36:59'),
(3, 'Lộ trình đặc biệt dành cho học sinh thi THPT 2024', '&#60;h1&#62;Lộ tr&#38;igrave;nh đặc biệt d&#38;agrave;nh cho học sinh thi THPT 2024&#60;/h1&#62;&#13;&#10;&#13;&#10;&#60;p&#62;12:00&#38;nbsp;02/06/2023&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;p&#62;Chia sẻ ngay:Twitter&#38;nbsp;Fabook&#38;nbsp;Share&#38;nbsp;&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;p&#62;&#60;iframe frameborder=&#34;0&#34; height=&#34;20px&#34; id=&#34;1e1af0a0-67aa-49ea-a6f0-95e821c826f6&#34; name=&#34;1e1af0a0-67aa-49ea-a6f0-95e821c826f6&#34; scrolling=&#34;no&#34; src=&#34;https://button-share.zalo.me/share_inline?id=1e1af0a0-67aa-49ea-a6f0-95e821c826f6&#38;amp;layout=2&#38;amp;color=blue&#38;amp;customize=false&#38;amp;width=20&#38;amp;height=20&#38;amp;isDesktop=true&#38;amp;url=https%3A%2F%2Fchuvanbien.vn%2Findex.php%3Fmodule%3Dnews%26view%3Dnews%26code%3Dlo-trinh-dac-biet-danh-cho-hoc-sinh-thi-thpt-2024%26id%3D227&#38;amp;d=eyJ1cmwiOiJodHRwczovL2NodXZhbmJpZW4udm4vaW5kZXgucGhwP21vZHVsZT1uZXdzJnZpZXc9bmV3cyZjb2RlPWxvLXRyaW5oLWRhYy1iaWV0LWRhbmgtY2hvLWhvYy1zaW5oLXRoaS10aHB0LTIwMjQmaWQ9MjI3In0%253D&#38;amp;shareType=0&#34; width=&#34;20px&#34;&#62;&#60;/iframe&#62;&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;p&#62;&#60;strong&#62;Xin ch&#38;agrave;o tất cả học sinh th&#38;acirc;n thương !!!!&#60;/strong&#62;&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;p&#62;&#60;strong&#62;Tất cả c&#38;aacute;c học sinh K2006 th&#38;acirc;n mến, hiện nay chắc nhiều bạn vẫn đang m&#38;ocirc;ng lung chưa biết m&#38;igrave;nh n&#38;ecirc;n học theo khối g&#38;igrave;? để v&#38;agrave;o trường Đại Học n&#38;agrave;o? Học ng&#38;agrave;nh g&#38;igrave; v&#38;agrave; sau n&#38;agrave;y ra trường m&#38;igrave;nh sẽ l&#38;agrave;m g&#38;igrave; nhỉ???&#60;br /&#62;&#13;&#10;2K6 l&#38;agrave; lứa học sinh cuối c&#38;ugrave;ng sử dụng s&#38;aacute;ch gi&#38;aacute;o khoa cũ, vậy n&#38;ecirc;n c&#38;aacute;c bạn chắc hẳn rất &#38;aacute;p lực.&#60;/strong&#62;&#60;br /&#62;&#13;&#10;Việc học giỏi đ&#38;atilde; kh&#38;oacute;, việc lựa chọn đ&#38;uacute;ng ng&#38;agrave;nh nghề&#38;nbsp; với sở trường của m&#38;igrave;nh c&#38;agrave;ng kh&#38;oacute; hơn.&#38;nbsp;&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;p&#62;Chắc chắn c&#38;aacute;c em phải cố gắng kh&#38;aacute;m ph&#38;aacute; thế mạnh của bản th&#38;acirc;n kết hợp với sự gi&#38;uacute;p đỡ của gia đ&#38;igrave;nh, nh&#38;agrave; trường v&#38;agrave; bạn b&#38;egrave;&#38;nbsp;h&#38;atilde;y&#38;nbsp;l&#38;ecirc;n mục ti&#38;ecirc;u r&#38;otilde; r&#38;agrave;ng, ph&#38;ugrave; hợp với m&#38;igrave;nh c&#38;agrave;ng sớm c&#38;agrave;ng tốt. Bởi Mục ti&#38;ecirc;u l&#38;agrave; điều quan trọng nhất trong cuộc sống n&#38;agrave;y,&#38;nbsp;c&#38;agrave;ng r&#38;otilde; r&#38;agrave;ng về c&#38;aacute;c&#38;nbsp;&#60;strong&#62;mục ti&#38;ecirc;u&#60;/strong&#62;&#38;nbsp;v&#38;agrave; mục đ&#38;iacute;ch của m&#38;igrave;nh,&#38;nbsp;ch&#38;uacute;ng ta&#38;nbsp;c&#38;agrave;ng c&#38;oacute; nhiều năng lực v&#38;agrave; hiệu quả trong việc đạt được ch&#38;uacute;ng. Điều l&#38;agrave;m n&#38;ecirc;n sự kh&#38;aacute;c biệt ở mỗi người chắc chắn đ&#38;oacute; ch&#38;iacute;nh l&#38;agrave; sống c&#38;oacute; mục ti&#38;ecirc;u.&#38;nbsp;&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;p&#62;Hơn nữa,&#38;nbsp;để lựa chọn khối một c&#38;aacute;ch ch&#38;iacute;nh x&#38;aacute;c, c&#38;aacute;c em cần x&#38;aacute;c định r&#38;otilde; c&#38;aacute;c ng&#38;agrave;nh nghề sau n&#38;agrave;y muốn gắn b&#38;oacute; cũng như sở th&#38;iacute;ch, sở trường, năng lực hiện tại để đưa ra quyết định s&#38;aacute;ng suốt chuẩn bị h&#38;agrave;nh trang thật tốt cho k&#38;igrave; thi năm 2024.&#38;nbsp;&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;p&#62;Nếu bạn n&#38;agrave;o c&#38;oacute; đam m&#38;ecirc; v&#38;agrave; năng khiếu về tư duy logic, t&#38;iacute;nh to&#38;aacute;n ch&#38;iacute;nh x&#38;aacute;c v&#38;agrave; sau n&#38;agrave;y muốn l&#38;agrave;m c&#38;aacute;c c&#38;ocirc;ng việc li&#38;ecirc;n quan đến khoa học, c&#38;ocirc;ng nghệ, kỹ thuật&#38;hellip; th&#38;igrave; n&#38;ecirc;n lựa chọn c&#38;aacute;c khối học tự nhi&#38;ecirc;n như A v&#38;agrave; A1 bao gồm c&#38;aacute;c m&#38;ocirc;n học&#38;nbsp; To&#38;aacute;n, L&#38;yacute;, H&#38;oacute;a, Anh. Đặc biệt với việc t&#38;igrave;m hiểu về phương ph&#38;aacute;p v&#38;agrave; tư duy học tốt m&#38;ocirc;n Vật L&#38;yacute; th&#38;igrave; chuvanbien.vn được học sinh v&#38;agrave; gi&#38;aacute;o vi&#38;ecirc;n luyện thi nhiều năm qua b&#38;igrave;nh chọn l&#38;agrave; website học vật l&#38;yacute; h&#38;agrave;ng đầu Việt Nam. Chuvanbien.vn sẽ lu&#38;ocirc;n l&#38;agrave; 1 người bạn đồng h&#38;agrave;nh, 1 trợ thủ đắc lực gi&#38;uacute;p c&#38;aacute;c em chinh phục đỉnh cao m&#38;ocirc;n Vật L&#38;yacute;.&#38;nbsp;&#60;br /&#62;&#13;&#10;&#60;br /&#62;&#13;&#10;Để được hỗ trợ đầy đủ nhất 24/7 c&#38;aacute;c bạn ibox trực tiếp cho page&#38;nbsp;&#60;a href=&#34;https://m.me/chuvanbien.vn&#34;&#62;CHU VĂN BI&#38;Ecirc;N&#60;/a&#62;&#38;nbsp;để được tư vấn nhanh nhất nh&#38;eacute;&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;p&#62;Lộ tr&#38;igrave;nh c&#38;ugrave;ng thầy Chu Văn Bi&#38;ecirc;n sẽ đồng h&#38;agrave;nh c&#38;ugrave;ng c&#38;aacute;c bạn từ ngay b&#38;acirc;y giờ cho đến thi thpt 2024,&#38;nbsp;c&#38;aacute;c bạn tham khảo c&#38;aacute;c g&#38;oacute;i học dưới đ&#38;acirc;y:&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;p&#62;&#60;strong&#62;I. G&#38;Oacute;I VIP-2024 CHỈ 1.900K&#38;nbsp;(GI&#38;Aacute; GỐC 4.900K)&#60;/strong&#62;&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;p&#62;&#60;strong&#62;➡&#60;/strong&#62;&#38;nbsp;FULL KH&#38;Oacute;A HỌC HỌC ĐẾN NG&#38;Agrave;Y THI ĐẠI HỌC: BAO GỒM KH&#38;Oacute;A TRANG BỊ KIẾN THỨC, LUYỆN ĐỀ, TỔNG &#38;Ocirc;N&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;p&#62;➡ 1 Ng&#38;agrave;y học&#38;nbsp;HIỆU QUẢ&#38;nbsp;chỉ với 4K - RẤT TIẾT KIỆM:&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;p&#62;&#60;img src=&#34;https://chuvanbien.vn/upload_images/images/2022/05/24/Slide9.JPG&#34; style=&#34;height:656px; width:1261px&#34; /&#62;&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;p&#62;&#60;strong&#62;**TẶNG TH&#38;Ecirc;M:&#60;/strong&#62;&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;ul&#62;&#13;&#10;&#9;&#60;li&#62;KHO&#38;Aacute; THI Đ&#38;Aacute;NH GI&#38;Aacute; NĂNG LỰC H&#38;Agrave;NG TUẦN&#38;nbsp;( mua lẻ 10 đề x 10k/ đề=&#38;gt; 120 ĐỀ TIẾT KIỆM 1200K&#38;nbsp;)&#60;/li&#62;&#13;&#10;&#9;&#60;li&#62;CẬP NHẬT MỚI HẰNG NG&#38;Agrave;Y MIỄN PH&#38;Iacute;:&#60;a href=&#34;https://www.facebook.com/chuvanbien.vn&#34; target=&#34;_blank&#34;&#62;&#38;nbsp;&#60;strong&#62;TẠI Đ&#38;Acirc;Y&#60;/strong&#62;&#60;/a&#62;&#60;/li&#62;&#13;&#10;&#9;&#60;li&#62;NH&#38;Oacute;M CHĂM S&#38;Oacute;C&#38;nbsp;D&#38;Agrave;NH RI&#38;Ecirc;NG CHO HS ĐĂNG K&#38;Iacute; KH&#38;Oacute;A HỌC 2K6&#60;strong&#62;:&#38;nbsp;&#38;nbsp;&#60;a href=&#34;https://www.facebook.com/groups/512364524244072&#34;&#62;TẠI Đ&#38;Acirc;Y&#60;/a&#62;&#60;/strong&#62;&#60;/li&#62;&#13;&#10;&#60;/ul&#62;&#13;&#10;&#13;&#10;&#60;p&#62;&#60;strong&#62;**ĐẢM BẢO:&#60;/strong&#62;&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;ul&#62;&#13;&#10;&#9;&#60;li&#62;QU&#38;Eacute;T SẠCH C&#38;Aacute;C DẠNG VẬT L&#38;Yacute; 10,11,12 ( B&#38;Aacute;M S&#38;Aacute;T KHUNG CHƯƠNG TR&#38;Igrave;NH CỦA BỘ)&#60;/li&#62;&#13;&#10;&#9;&#60;li&#62;KH&#38;Ocirc;NG CẦN ĐI HỌC TH&#38;Ecirc;M&#38;nbsp;&#60;/li&#62;&#13;&#10;&#9;&#60;li&#62;TRANG BỊ KIẾN THỨC TỪ CƠ BẢN -&#38;gt; HAY LẠ KH&#38;Oacute;&#60;/li&#62;&#13;&#10;&#9;&#60;li&#62;HỌC ĐẦY ĐỦ QUY TR&#38;Igrave;NH BAO GỒM ĐẦY ĐỦ L&#38;Yacute; THUYẾT, PHƯƠNG PH&#38;Aacute;P, V&#38;Iacute; DỤ MINH HỌA, B&#38;Agrave;I TẬP VẬN DỤNG THEO TỪNG CHUY&#38;Ecirc;N ĐỀ TỪNG DẠNG TO&#38;Aacute;N&#60;/li&#62;&#13;&#10;&#9;&#60;li&#62;ĐƯỢC THẦY&#38;nbsp;&#60;strong&#62;CHU VĂN BI&#38;Ecirc;N&#38;nbsp;v&#38;agrave; đội ngũ&#38;nbsp;chuvanbien.vn&#60;/strong&#62;&#38;nbsp;K&#38;Egrave;M&#38;nbsp;HỌC TẬP&#38;nbsp;HẰNG NG&#38;Agrave;Y MIỄN PH&#38;Iacute;:&#38;nbsp;&#60;strong&#62;&#60;a href=&#34;https://www.facebook.com/groups/chuvanbien.vn&#34; target=&#34;_blank&#34;&#62;TẠI Đ&#38;Acirc;Y&#60;/a&#62;&#60;/strong&#62;&#60;/li&#62;&#13;&#10;&#60;/ul&#62;&#13;&#10;&#13;&#10;&#60;p&#62;&#60;strong&#62;II. KH&#38;Oacute;A B&#38;Iacute; QUYẾT&#38;nbsp;CHỈ 800K&#38;nbsp;(GI&#38;Aacute; GỐC 3.500K)&#60;/strong&#62;&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;p&#62;➡ HỆ THỐNG B&#38;Agrave;I GIẢNG TỪ CƠ BẢN ĐẾN N&#38;Acirc;NG CAO CỦA CHƯƠNG TR&#38;Igrave;NH 12( TẶNG K&#38;Egrave;M CHƯƠNG TR&#38;Igrave;NH 10, 11)&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;p&#62;➡ 1 Ng&#38;agrave;y học&#38;nbsp;HIỆU QUẢ&#38;nbsp;chỉ với 1.9K - RẤT TIẾT KIỆM:&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;p&#62;&#60;img src=&#34;https://chuvanbien.vn/upload_images/images/2022/05/24/Slide6.JPG&#34; style=&#34;height:520px; width:1242px&#34; /&#62;&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;p&#62;&#60;strong&#62;**TẶNG TH&#38;Ecirc;M:&#60;/strong&#62;&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;ul&#62;&#13;&#10;&#9;&#60;li&#62;KHO&#38;Aacute; THI Đ&#38;Aacute;NH GI&#38;Aacute; NĂNG LỰC H&#38;Agrave;NG TUẦN&#38;nbsp;( mua lẻ 10 đề x 10k/ đề=&#38;gt;40 ĐỀ TIẾT KIỆM 400K&#38;nbsp;)&#60;/li&#62;&#13;&#10;&#9;&#60;li&#62;CẬP NHẬT MỚI HẰNG NG&#38;Agrave;Y MIỄN PH&#38;Iacute;:&#60;a href=&#34;https://www.facebook.com/chuvanbien.vn&#34; target=&#34;_blank&#34;&#62;&#38;nbsp;&#60;strong&#62;TẠI Đ&#38;Acirc;Y&#60;/strong&#62;&#60;/a&#62;&#60;/li&#62;&#13;&#10;&#9;&#60;li&#62;NH&#38;Oacute;M CHĂM S&#38;Oacute;C&#38;nbsp;D&#38;Agrave;NH RI&#38;Ecirc;NG CHO HS ĐĂNG K&#38;Iacute; KH&#38;Oacute;A HỌC 2K6&#60;strong&#62;:&#38;nbsp;&#38;nbsp;&#60;a href=&#34;https://www.facebook.com/groups/512364524244072&#34;&#62;TẠI Đ&#38;Acirc;Y&#60;/a&#62;&#60;/strong&#62;&#60;/li&#62;&#13;&#10;&#60;/ul&#62;&#13;&#10;&#13;&#10;&#60;p&#62;&#60;strong&#62;**ĐẢM BẢO:&#60;/strong&#62;&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;ul&#62;&#13;&#10;&#9;&#60;li&#62;QU&#38;Eacute;T SẠCH C&#38;Aacute;C DẠNG VẬT L&#38;Yacute; 10,11,12 ( B&#38;Aacute;M S&#38;Aacute;T KHUNG CHƯƠNG TR&#38;Igrave;NH CỦA BỘ)&#60;/li&#62;&#13;&#10;&#9;&#60;li&#62;KH&#38;Ocirc;NG CẦN ĐI HỌC TH&#38;Ecirc;M&#38;nbsp;&#60;/li&#62;&#13;&#10;&#9;&#60;li&#62;TRANG BỊ KIẾN THỨC TỪ CƠ BẢN -&#38;gt; HAY LẠ KH&#38;Oacute;&#60;/li&#62;&#13;&#10;&#9;&#60;li&#62;HỌC ĐẦY ĐỦ QUY TR&#38;Igrave;NH BAO GỒM ĐẦY ĐỦ L&#38;Yacute; THUYẾT, PHƯƠNG PH&#38;Aacute;P, V&#38;Iacute; DỤ MINH HỌA, B&#38;Agrave;I TẬP VẬN DỤNG THEO TỪNG CHUY&#38;Ecirc;N ĐỀ TỪNG DẠNG TO&#38;Aacute;N&#60;/li&#62;&#13;&#10;&#9;&#60;li&#62;ĐƯỢC THẦY&#38;nbsp;&#60;strong&#62;CHU VĂN BI&#38;Ecirc;N&#38;nbsp;v&#38;agrave; đội ngũ&#38;nbsp;chuvanbien.vn&#60;/strong&#62;&#38;nbsp;K&#38;Egrave;M&#38;nbsp;HỌC TẬP&#38;nbsp;HẰNG NG&#38;Agrave;Y MIỄN PH&#38;Iacute;:&#38;nbsp;&#60;strong&#62;&#60;a href=&#34;https://www.facebook.com/groups/chuvanbien.vn&#34; target=&#34;_blank&#34;&#62;TẠI Đ&#38;Acirc;Y&#60;/a&#62;&#60;/strong&#62;&#60;/li&#62;&#13;&#10;&#60;/ul&#62;&#13;&#10;', '4f71f29c0d155d8f5d929eaa6a9d1fbb.jpg', 3, '2023-11-29 02:39:49', '2023-11-29 02:40:02'),
(4, 'tin tức hot rần rần ngày 2/12/2023', '&#60;p&#62;update&#60;/p&#62;&#13;&#10;', '74d7f223a059a135521a8eb7de9dfac7.jpg', NULL, '2023-12-02 09:52:11', '2023-12-02 09:56:30');

-- --------------------------------------------------------

--
-- Table structure for table `news_category`
--

CREATE TABLE `news_category` (
  `id` int(11) NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `create_at` timestamp NULL DEFAULT NULL,
  `update_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `news_category`
--

INSERT INTO `news_category` (`id`, `title`, `create_at`, `update_at`) VALUES
(1, 'Ưu đãi khi học tại website', NULL, NULL),
(2, 'Chi phí', '2023-11-04 11:05:00', NULL),
(3, 'Ưu đãi', '2023-11-04 11:05:00', NULL),
(4, 'Combo các khóa', '2023-11-04 11:05:00', NULL),
(5, 'Thủ khoa Fpoly', '2023-11-04 11:05:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `options`
--

CREATE TABLE `options` (
  `id` int(11) NOT NULL,
  `opt_key` varchar(100) DEFAULT NULL,
  `opt_value` text DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `options`
--

INSERT INTO `options` (`id`, `opt_key`, `opt_value`, `name`) VALUES
(1, 'general_hotline', '0123456789 - 0147852369', 'Hotline'),
(2, 'general_button_login', 'Đăng Nhập', 'Nội dung nút đăng nhập'),
(3, 'general_button_register', 'Đăng ký', 'Nội dung nút đăng ký'),
(4, 'footer_1_1', 'Giới Thiệu', 'Nội dung dòng 1'),
(5, 'footer_2_1', 'Giảng viên nối tiếng', 'Nội dung dòng 2'),
(6, 'footer_3_1', 'Học Viên xuất sắc', 'Nội dung dòng 3'),
(7, 'footer_4_1', 'Chính sách khuyến học', 'Nội dung dòng 4'),
(8, 'footer_5_1', 'Liên hệ hợp tác', 'Nội dung dòng 5'),
(9, 'footer_1_2', 'Chính sách và quy định chung', 'Nội dung dòng 1'),
(10, 'footer_2_2', 'Chính sách bảo mật', 'Nội dung dòng 2'),
(11, 'footer_3_2', 'Vận chuyển và thanh toán', 'Nội dung dòng 3'),
(12, 'footer_4_2', 'Chính sách đổi trả', 'Nội dung dòng 4'),
(13, 'footer_5_2', 'Hướng dẫn đặt hàng', 'Nội dung dòng 5'),
(14, 'footer_1_3', 'Giấy chứng nhận đăng ký doanh nghiệp số 5801482851 do Sở Kế hoạch và Đầu tư tỉnh Thạch Thất cấp lần đầu ngày 12/04/2022', 'Nội dung dòng 1'),
(15, 'footer_2_3', 'Địa chỉ: Số 89B, Hoàng Diệu, Phường 5, Thành phố Đà Lạt, Tỉnh Thạch Thất', 'Nội dung dòng 2'),
(16, 'footer_3_3', 'Điện thoại: 036.803.1178', 'Nội dung dòng 3'),
(19, 'general_facebook', '#', 'Link Facebook'),
(20, 'general_youtube', '#', 'Link Youtube'),
(21, 'general_zalo', '#', 'Link Zalo'),
(22, 'general_logo', 'SONLINE', 'Logo (text)'),
(23, 'introduce_polite_study', '&#60;p&#62;&#60;strong&#62;C&#38;ocirc;ng ty TNHH SONLINE&#38;nbsp;lu&#38;ocirc;n c&#38;oacute; c&#38;aacute;c&#38;nbsp;chương tr&#38;igrave;nh khuyến học&#38;nbsp;&#60;/strong&#62;&#60;strong&#62;nhằm tạo điều kiện cho c&#38;aacute;c học sinh to&#38;agrave;n quốc học tập tốt nhất, đạt kết quả cao như sau:&#60;/strong&#62;&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;ul&#62;&#13;&#10;&#9;&#60;li&#62;Giảm 100% học ph&#38;iacute; c&#38;aacute;c kh&#38;oacute;a học trang bị kiến thức đối với Học sinh bị t&#38;agrave;n tật, khuyết tật, mồ c&#38;ocirc;i cả cha lẫn mẹ.&#60;/li&#62;&#13;&#10;&#9;&#60;li&#62;Giảm 30 % học ph&#38;iacute; tất cả c&#38;aacute;c kh&#38;oacute;a học, 10% tr&#38;ecirc;n gi&#38;aacute; b&#38;aacute;n s&#38;aacute;ch tham khảo Vật L&#38;yacute; cho học sinh hộ ngh&#38;egrave;o, cận ngh&#38;egrave;o, ho&#38;agrave;n cảnh đặc biệt kh&#38;oacute; khăn.&#60;/li&#62;&#13;&#10;&#60;/ul&#62;&#13;&#10;&#13;&#10;&#60;ul&#62;&#13;&#10;&#9;&#60;li&#62;Giảm 30 % học ph&#38;iacute; tất cả c&#38;aacute;c kh&#38;oacute;a học VIP2 cho học sinh hộ ngh&#38;egrave;o, cận ngh&#38;egrave;o, ho&#38;agrave;n cảnh đặc biệt kh&#38;oacute; khăn, bị t&#38;agrave;n tật, khuyết tật, mồ c&#38;ocirc;i cả cha lẫn mẹ&#60;/li&#62;&#13;&#10;&#9;&#60;li&#62;Giảm gi&#38;aacute; 10% tất cả c&#38;aacute;c s&#38;aacute;ch kh&#38;oacute;a học cho học sinh đạt c&#38;aacute;c giải nhất, nh&#38;igrave;, ba của c&#38;aacute;c k&#38;igrave; thi HSG Tỉnh, HSG Quốc Gia, Đường l&#38;ecirc;n đỉnh Olympia.&#60;/li&#62;&#13;&#10;&#9;&#60;li&#62;Giảm gi&#38;aacute; 10% tất cả c&#38;aacute;c s&#38;aacute;ch kh&#38;oacute;a học cho học sinh l&#38;agrave; em ruột của c&#38;aacute;c cao thủ thủ khoa c&#38;aacute;c năm.&#38;nbsp;&#60;/li&#62;&#13;&#10;&#9;&#60;li&#62;Giảm gi&#38;aacute; 10% tất cả c&#38;aacute;c&#38;nbsp;kh&#38;oacute;a học VIP&#38;nbsp;cho học sinh l&#38;agrave;&#38;nbsp;em ruột của c&#38;aacute;c&#38;nbsp;học sinh đ&#38;atilde; từng học đ&#38;uacute;ng lộ tr&#38;igrave;nh VIP2&#60;/li&#62;&#13;&#10;&#9;&#60;li&#62;Giảm gi&#38;aacute; 20%&#38;nbsp;cho nh&#38;oacute;m học sinh đăng k&#38;yacute; &#38;gt;= 20&#38;nbsp;combo kh&#38;oacute;a học VIP2, VIP 3, VIP 1 (Học sinh&#38;nbsp;chung trường thường đăng k&#38;yacute; c&#38;ugrave;ng nhau)&#60;/li&#62;&#13;&#10;&#9;&#60;li&#62;Giảm gi&#38;aacute; 15%&#38;nbsp;cho nh&#38;oacute;m học sinh đăng k&#38;yacute; &#38;gt;=&#38;nbsp;10 combo kh&#38;oacute;a học VIP2, VIP 3, VIP 1&#38;nbsp;&#60;/li&#62;&#13;&#10;&#9;&#60;li&#62;Giảm gi&#38;aacute; 10%&#38;nbsp;cho nh&#38;oacute;m học sinh đăng k&#38;yacute; &#38;gt;=&#38;nbsp;5 combo kh&#38;oacute;a học VIP2, VIP 3, VIP 1&#60;/li&#62;&#13;&#10;&#9;&#60;li&#62;Giảm gi&#38;aacute; 5%&#38;nbsp;cho nh&#38;oacute;m học sinh đăng k&#38;yacute; &#38;gt;= 2 combo kh&#38;oacute;a học VIP2, VIP 3, VIP 1 với điều kiện&#38;nbsp;gửi&#38;nbsp;s&#38;aacute;ch&#38;nbsp;về chung 1 địa chỉ.&#60;/li&#62;&#13;&#10;&#9;&#60;li&#62;Giảm gi&#38;aacute; 3%&#38;nbsp;cho nh&#38;oacute;m học sinh đăng k&#38;yacute;&#38;nbsp;&#38;gt;= 2 combo kh&#38;oacute;a học VIP2, VIP 3, VIP 1 nếu gửi về kh&#38;aacute;c địa chỉ&#38;nbsp;&#60;/li&#62;&#13;&#10;&#60;/ul&#62;&#13;&#10;&#13;&#10;&#60;p&#62;&#60;em&#62;&#60;strong&#62;Lưu &#38;yacute;:&#38;nbsp;&#60;/strong&#62;&#60;/em&#62;Mỗi&#38;nbsp;trường hợp học sinh với điều kiện như tr&#38;ecirc;n sẽ được &#38;aacute;p dụng 1 lần chương tr&#38;igrave;nh ưu đ&#38;atilde;i&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;p&#62;Thời gian &#38;aacute;p dụng từ 10/03/2021&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;p&#62;Tất cả c&#38;aacute;c bạn học sinh thuộc diện n&#38;ecirc;u tr&#38;ecirc;n li&#38;ecirc;n hệ&#38;nbsp;&#60;strong&#62;&#60;a href=&#34;https://m.me/chuvanbien.vn&#34; target=&#34;_blank&#34;&#62;TẠI Đ&#38;Acirc;Y&#60;/a&#62;&#38;nbsp;&#60;/strong&#62;để nhận quyền lợi.&#60;/p&#62;&#13;&#10;', 'Chính sách khuyến học'),
(24, 'introduce_cooperate', '&#60;p&#62;&#60;strong&#62;LI&#38;Ecirc;N HỆ HỢP T&#38;Aacute;C&#60;/strong&#62;&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;p&#62;Ch&#38;acirc;n th&#38;agrave;nh cảm&#38;nbsp;ơn Qu&#38;yacute; đối t&#38;aacute;c đ&#38;atilde; quan t&#38;acirc;m đến ch&#38;uacute;ng t&#38;ocirc;i.&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;p&#62;C&#38;aacute;c th&#38;ocirc;ng tin hợp t&#38;aacute;c vui l&#38;ograve;ng li&#38;ecirc;n hệ:&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;ul&#62;&#13;&#10;&#9;&#60;li&#62;Mr. Nguyễn Duy Ki&#38;ecirc;n&#60;/li&#62;&#13;&#10;&#9;&#60;li&#62;Email: ndkdzvl@gmail.com&#60;/li&#62;&#13;&#10;&#9;&#60;li&#62;Tel: 0777.19.19.00 - 0965.19.19.00&#60;/li&#62;&#13;&#10;&#60;/ul&#62;&#13;&#10;&#13;&#10;&#60;div class=&#34;ddict_btn&#34; style=&#34;left:216.25px; top:147px&#34;&#62;&#38;nbsp;&#60;/div&#62;&#13;&#10;&#13;&#10;&#60;div class=&#34;ddict_btn&#34; style=&#34;left:264.688px; top:159px&#34;&#62;&#38;nbsp;&#60;/div&#62;&#13;&#10;', 'Liên hệ hợp tác'),
(25, 'introduce_polite_general', '&#60;p&#62;Một khi đ&#38;atilde; tham gia&#38;nbsp;Website Chuvanbien.vn&#38;nbsp;nghĩa l&#38;agrave; bạn đ&#38;atilde; đọc, hiểu, chấp nhận v&#38;agrave; tu&#38;acirc;n thủ những điều khoản dưới đ&#38;acirc;y:&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;p&#62;&#60;strong&#62;TẤT CẢ QU&#38;Yacute; KH&#38;Aacute;CH KHI TRUY CẬP V&#38;Agrave;O TRANG WEB N&#38;Agrave;Y BẮT BUỘC PHẢI TU&#38;Acirc;N THỦ C&#38;Aacute;C QUY ĐỊNH SAU (TRONG TRƯỜNG HỢP QU&#38;Yacute; KH&#38;Aacute;CH KH&#38;Ocirc;NG ĐỒNG &#38;Yacute; VỚI BẤT K&#38;Igrave; ĐIỀU KHOẢN N&#38;Agrave;O TH&#38;Igrave; VUI L&#38;Ograve;NG KH&#38;Ocirc;NG TRUY CẬP V&#38;Agrave;O TRANG WEB N&#38;Agrave;Y):&#60;/strong&#62;&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;p&#62;&#60;strong&#62;Điều 1:&#60;/strong&#62;&#38;nbsp;Khi đăng k&#38;yacute; t&#38;agrave;i khoản, bạn n&#38;ecirc;n cung cấp đầy đủ th&#38;ocirc;ng tin về t&#38;ecirc;n tuổi, địa chỉ, email,...&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;ul&#62;&#13;&#10;&#9;&#60;li&#62;Đ&#38;acirc;y l&#38;agrave; những th&#38;ocirc;ng tin bắt buộc, qu&#38;yacute; kh&#38;aacute;ch h&#38;agrave;ng phải điền đầy đủ th&#38;ocirc;ng tin để ch&#38;uacute;ng t&#38;ocirc;i căn cứ theo đ&#38;oacute; m&#38;agrave; phục vụ qu&#38;yacute; kh&#38;aacute;ch một c&#38;aacute;ch tốt nhất.&#60;/li&#62;&#13;&#10;&#9;&#60;li&#62;Những trường hợp điền thiếu th&#38;ocirc;ng tin hoặc th&#38;ocirc;ng tin sai sự thật sẽ kh&#38;ocirc;ng được giải quyết.&#60;/li&#62;&#13;&#10;&#60;/ul&#62;&#13;&#10;&#13;&#10;&#60;p&#62;&#60;strong&#62;Điều 2:&#60;/strong&#62;&#38;nbsp;Kh&#38;aacute;ch h&#38;agrave;ng c&#38;oacute; tr&#38;aacute;ch nhiệm phải tự m&#38;igrave;nh bảo quản mật khẩu, nếu mật khẩu bị lộ ra ngo&#38;agrave;i dưới bất kỳ h&#38;igrave;nh thức n&#38;agrave;o, Website Chuvanbien.vn&#38;nbsp;sẽ kh&#38;ocirc;ng chịu tr&#38;aacute;ch nhiệm về mọi tổn thất ph&#38;aacute;t sinh.&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;p&#62;&#60;strong&#62;Điều 3:&#60;/strong&#62;&#38;nbsp;Tuyệt đối kh&#38;ocirc;ng sử dụng bất kỳ chương tr&#38;igrave;nh, c&#38;ocirc;ng cụ hay h&#38;igrave;nh thức n&#38;agrave;o kh&#38;aacute;c để can thiệp v&#38;agrave;o hệ thống hay l&#38;agrave;m thay đổi cấu tr&#38;uacute;c dữ liệu.&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;p&#62;&#60;strong&#62;Điều 4:&#60;/strong&#62;&#38;nbsp;Nghi&#38;ecirc;m cấm việc ph&#38;aacute;t t&#38;aacute;n, truyền b&#38;aacute; hay cổ vũ cho bất kỳ hoạt động n&#38;agrave;o nhằm can thiệp, ph&#38;aacute; hoại hay x&#38;acirc;m nhập v&#38;agrave;o dữ liệu của Website Chuvanbien.vn cũng như hệ thống m&#38;aacute;y chủ của Website Chuvanbien.vn (hack, cheat...).&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;ul&#62;&#13;&#10;&#9;&#60;li&#62;Khi ph&#38;aacute;t hiện ra lỗi của hệ thống, bạn h&#38;atilde;y th&#38;ocirc;ng b&#38;aacute;o cho đội ngũ quản trị qua email&#38;nbsp;chuvanbien.vn@gmail.com&#60;/li&#62;&#13;&#10;&#9;&#60;li&#62;Kh&#38;ocirc;ng được c&#38;oacute; bất kỳ h&#38;agrave;nh vi n&#38;agrave;o nhằm đăng nhập tr&#38;aacute;i ph&#38;eacute;p hoặc t&#38;igrave;m c&#38;aacute;ch đăng nhập tr&#38;aacute;i ph&#38;eacute;p cũng như g&#38;acirc;y thiệt hại cho hệ thống m&#38;aacute;y chủ của Website Chuvanbien.vn.&#60;/li&#62;&#13;&#10;&#60;/ul&#62;&#13;&#10;&#13;&#10;&#60;p&#62;&#60;strong&#62;Điều 5:&#60;/strong&#62;&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;ul&#62;&#13;&#10;&#9;&#60;li&#62;Khi giao tiếp, nhận x&#38;eacute;t v&#38;agrave; đ&#38;aacute;nh gi&#38;aacute; bất kỳ sản phẩm hoặc nhận x&#38;eacute;t của c&#38;aacute;c kh&#38;aacute;ch h&#38;agrave;ng kh&#38;aacute;c, bạn kh&#38;ocirc;ng được quấy rối, chửi bới, đe dọa, l&#38;agrave;m phiền hay c&#38;oacute; bất kỳ h&#38;agrave;nh vi thiếu văn ho&#38;aacute; n&#38;agrave;o đối với kh&#38;aacute;ch h&#38;agrave;ng kh&#38;aacute;c.&#60;/li&#62;&#13;&#10;&#9;&#60;li&#62;Tuyệt đối nghi&#38;ecirc;m cấm việc x&#38;uacute;c phạm, nhạo b&#38;aacute;ng người kh&#38;aacute;c dưới bất kỳ h&#38;igrave;nh thức n&#38;agrave;o (đe dọa, nhạo b&#38;aacute;ng, ch&#38;ecirc; bai, kỳ thị t&#38;ocirc;n gi&#38;aacute;o, giới t&#38;iacute;nh, sắc tộc...).&#60;/li&#62;&#13;&#10;&#9;&#60;li&#62;Tuyệt đối nghi&#38;ecirc;m cấm mọi h&#38;agrave;nh vi mạo nhận hay cố &#38;yacute; l&#38;agrave;m người kh&#38;aacute;c tưởng lầm m&#38;igrave;nh l&#38;agrave; một kh&#38;aacute;ch h&#38;agrave;ng kh&#38;aacute;c, hoặc l&#38;agrave; th&#38;agrave;nh vi&#38;ecirc;n trong Ban Quản trị Website Chuvanbien.vn&#60;/li&#62;&#13;&#10;&#60;/ul&#62;&#13;&#10;&#13;&#10;&#60;p&#62;&#60;em&#62;&#60;strong&#62;Nếu vi phạm sẽ bị kh&#38;oacute;a t&#38;agrave;i khoản 1 th&#38;aacute;ng sau 1 th&#38;aacute;ng nếu vẫn tiếp tục vi phạm sẽ bị kh&#38;oacute;a t&#38;agrave;i khoản vĩnh viễn.&#60;/strong&#62;&#60;/em&#62;&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;p&#62;&#60;strong&#62;Điều 6:&#60;/strong&#62;&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;ul&#62;&#13;&#10;&#9;&#60;li&#62;Tuyệt đối nghi&#38;ecirc;m cấm mọi h&#38;agrave;nh vi tuy&#38;ecirc;n truyền, chống ph&#38;aacute; v&#38;agrave; xuy&#38;ecirc;n tạc ch&#38;iacute;nh quyền.&#60;/li&#62;&#13;&#10;&#9;&#60;li&#62;Tuyệt đối kh&#38;ocirc;ng b&#38;agrave;n luận về Ch&#38;iacute;nh trị.&#60;/li&#62;&#13;&#10;&#60;/ul&#62;&#13;&#10;&#13;&#10;&#60;p&#62;&#60;strong&#62;Điều 7:&#60;/strong&#62;&#60;br /&#62;&#13;&#10;Mọi th&#38;ocirc;ng tin c&#38;aacute; nh&#38;acirc;n của kh&#38;aacute;ch h&#38;agrave;ng sẽ được ch&#38;uacute;ng t&#38;ocirc;i bảo mật, kh&#38;ocirc;ng tiết lộ ra ngo&#38;agrave;i. Ch&#38;uacute;ng t&#38;ocirc;i kh&#38;ocirc;ng b&#38;aacute;n hay trao đổi những th&#38;ocirc;ng tin n&#38;agrave;y với bất kỳ một b&#38;ecirc;n thứ ba n&#38;agrave;o kh&#38;aacute;c.&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;ul&#62;&#13;&#10;&#9;&#60;li&#62;Như tr&#38;ecirc;n đ&#38;atilde; n&#38;oacute;i, mọi th&#38;ocirc;ng tin đăng k&#38;yacute; của th&#38;agrave;nh vi&#38;ecirc;n sẽ được bảo mật nhưng trong trường hợp cơ quan ph&#38;aacute;p luật y&#38;ecirc;u cầu, ch&#38;uacute;ng t&#38;ocirc;i sẽ buộc phải cung cấp những th&#38;ocirc;ng tin n&#38;agrave;y cho c&#38;aacute;c cơ quan ph&#38;aacute;p luật.&#60;/li&#62;&#13;&#10;&#60;/ul&#62;&#13;&#10;&#13;&#10;&#60;p&#62;&#60;strong&#62;Điều 8&#60;/strong&#62;: Nghi&#38;ecirc;m cấm quảng b&#38;aacute; bất kỳ sản phẩm n&#38;agrave;o kh&#38;aacute;c tr&#38;ecirc;n diễn đ&#38;agrave;n m&#38;agrave; kh&#38;ocirc;ng c&#38;oacute; sự đồng &#38;yacute; bằng văn bản của Website Chuvanbien.vn.&#60;br /&#62;&#13;&#10;Website Chuvanbien.vn c&#38;oacute; thể thay đổi, bổ sung hoặc sửa chữa thỏa thuận n&#38;agrave;y bất cứ l&#38;uacute;c n&#38;agrave;o v&#38;agrave; sẽ c&#38;ocirc;ng bố r&#38;otilde; tr&#38;ecirc;n Website.&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;p&#62;&#60;strong&#62;Điều 9&#60;/strong&#62;: KH&#38;Ocirc;NG GIẢI QUYẾT C&#38;Aacute;C TRƯỜNG HỢP CHUYỂN NHƯỢNG C&#38;Aacute;C T&#38;Agrave;I KHOẢN KH&#38;Oacute;A HỌC. KHI KH&#38;Aacute;CH H&#38;Agrave;NG Đ&#38;Atilde; ĐĂNG K&#38;Iacute; SẢN PHẨM B&#38;Ecirc;N C&#38;Ocirc;NG TY TH&#38;Igrave; KH&#38;Ocirc;NG ĐƯỢC ĐỔI, HO&#38;Agrave;N TRẢ LẠI D&#38;Ugrave; BẤT K&#38;Igrave; L&#38;Yacute; DO N&#38;Agrave;O.( TRƯỚC KHI ĐĂNG K&#38;Iacute; TH&#38;Igrave; ĐƯỢC TƯ VẤN V&#38;Agrave; THẨM ĐỊNH KĨ TRƯỚC)&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;p&#62;&#60;strong&#62;Điều 10&#60;/strong&#62;: KH&#38;Aacute;CH H&#38;Agrave;NG TỰ &#38;Yacute; D&#38;Ugrave;NG TK KHO&#38;Aacute; HỌC HỌC ĐỂ KINH DOANH LẠI BẤT HỢP PH&#38;Aacute;P VI PHẠM BẢN QUYỀN, LỪA ĐẢO NGƯỜI KH&#38;Aacute;C ẢNH HƯỞNG ĐẾN UY T&#38;Iacute;N V&#38;Agrave; THƯƠNG HIỆU CỦA CHUVANBIEN.VN SẼ BỊ KHO&#38;Aacute; T&#38;Agrave;I KHOẢN 2 TH&#38;Aacute;NG - VĨNH VIỄN&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;p&#62;&#60;strong&#62;Điều 11&#60;/strong&#62;: Mọi h&#38;agrave;nh vi chia sẻ quảng c&#38;aacute;o bu&#38;ocirc;n b&#38;aacute;n cổ vũ s&#38;aacute;ch lậu b&#38;agrave;i giảng lậu đều bị k&#38;iacute;ch vĩnh viễn khỏi nh&#38;oacute;m học tập v&#38;agrave; x&#38;oacute;a t&#38;agrave;i khoản tr&#38;ecirc;n web.&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;p&#62;&#60;strong&#62;Điều 12&#60;/strong&#62;: Tất cả c&#38;aacute;c&#38;nbsp;kho&#38;aacute; học mất ph&#38;iacute; sẽ bị giới hạn về thời gian học kho&#38;aacute; học, thời gian học kho&#38;aacute; học được t&#38;iacute;nh từ thời điểm khai giảng đến thời điểm kết th&#38;uacute;c kho&#38;aacute; học.&#38;nbsp;&#60;strong&#62;Lưu &#38;yacute;,&#60;/strong&#62;&#38;nbsp;thời điểm kết th&#38;uacute;c kho&#38;aacute; học ch&#38;uacute;ng t&#38;ocirc;i th&#38;ocirc;ng tin r&#38;otilde; tại phần giới thiệu kho&#38;aacute; học tương ứng.&#38;nbsp;&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;p&#62;&#60;strong&#62;Điều 13&#60;/strong&#62;: Khi qu&#38;yacute; kh&#38;aacute;ch nạp tiền trực tiếp tr&#38;ecirc;n web bắt buộc phải th&#38;ocirc;ng b&#38;aacute;o đến số điện thoại 0985829393 hoặc 0943191900 để ch&#38;uacute;ng t&#38;ocirc;i x&#38;aacute;c nhận th&#38;ocirc;ng tin hỗ trợ tư vấn học tập được ch&#38;iacute;nh x&#38;aacute;c v&#38;agrave; hiệu quả nhất. Khi ch&#38;uacute;ng t&#38;ocirc;i kiểm tra số tiền qu&#38;yacute; kh&#38;aacute;ch nạp v&#38;agrave;o hợp lệ th&#38;igrave; số tiền trong t&#38;agrave;i khoản của qu&#38;yacute; kh&#38;aacute;ch mới c&#38;oacute; gi&#38;aacute; trị sử dụng. Mọi trường hợp nộp tiền tự động tr&#38;ecirc;n web kh&#38;ocirc;ng th&#38;ocirc;ng b&#38;aacute;o đến số điện thoại n&#38;oacute;i tr&#38;ecirc;n th&#38;igrave; ch&#38;uacute;ng t&#38;ocirc;i kh&#38;ocirc;ng giải quyết mọi thắc mắc li&#38;ecirc;n quan đến vấn đề đ&#38;oacute; v&#38;agrave; xem như đ&#38;oacute; l&#38;agrave; tiền ảo v&#38;agrave; c&#38;oacute; thể bị x&#38;oacute;a bất kỳ l&#38;uacute;c n&#38;agrave;o.&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;p&#62;&#60;strong&#62;Điều 14&#60;/strong&#62;: C&#38;aacute;c học sinh c&#38;oacute; ho&#38;agrave;n cảnh kh&#38;oacute; khăn th&#38;igrave; chuvanbien.vn lu&#38;ocirc;n c&#38;oacute;&#38;nbsp;&#60;strong&#62;Ch&#38;iacute;nh s&#38;aacute;ch&#38;nbsp; khuyến học d&#38;agrave;nh cho đối tượng hộ ngh&#38;egrave;o, hộ cận ngh&#38;egrave;o khi mua kh&#38;oacute;a học&#38;nbsp;v&#38;agrave; s&#38;aacute;ch:&#60;/strong&#62;&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;ul&#62;&#13;&#10;&#9;&#60;li&#62;&#60;strong&#62;Hồ sơ cần chuẩn bị để được hưởng ch&#38;iacute;nh s&#38;aacute;ch d&#38;agrave;nh cho đối tượng hộ ngh&#38;egrave;o:&#60;/strong&#62;&#60;/li&#62;&#13;&#10;&#9;&#60;li&#62;Giấy x&#38;aacute;c nhận gia đ&#38;igrave;nh c&#38;oacute; ho&#38;agrave;n cảnh kh&#38;oacute; khăn: giấy chứng nhận hộ ngh&#38;egrave;o c&#38;oacute; c&#38;ocirc;ng chứng trong thời hạn 6 th&#38;aacute;ng hoặc giấy x&#38;aacute;c nhận hộ ngh&#38;egrave;o c&#38;oacute; dấu của của UBND phường/x&#38;atilde; nơi cư tr&#38;uacute;. Chủ hộ ngh&#38;egrave;o phải l&#38;agrave; cha/mẹ hoặc người gi&#38;aacute;m hộ của học sinh.&#60;/li&#62;&#13;&#10;&#9;&#60;li&#62;Bản sao sổ hộ khẩu (c&#38;ocirc;ng chứng).&#60;/li&#62;&#13;&#10;&#9;&#60;li&#62;Bản sao CMT hoặc thẻ căn cước của học sinh (c&#38;ocirc;ng chứng).&#60;/li&#62;&#13;&#10;&#9;&#60;li&#62;Bản sao CMT hoặc thẻ căn cước của cha/mẹ/người gi&#38;aacute;m hộ (c&#38;ocirc;ng chứng).&#60;/li&#62;&#13;&#10;&#9;&#60;li&#62;Đơn xin miễn giảm học ph&#38;iacute;&#38;nbsp;&#60;/li&#62;&#13;&#10;&#9;&#60;li&#62;Scan hoặc chụp ảnh gửi th&#38;ocirc;ng tin&#38;nbsp;&#60;a href=&#34;https://m.me/chuvanbien.vn&#34; target=&#34;_blank&#34;&#62;&#60;strong&#62;TẠI Đ&#38;Acirc;Y&#60;/strong&#62;&#60;/a&#62;&#60;/li&#62;&#13;&#10;&#60;/ul&#62;&#13;&#10;&#13;&#10;&#60;p&#62;&#60;strong&#62;Điều 15&#60;/strong&#62;: Mọi t&#38;agrave;i khoản đăng k&#38;iacute; học tr&#38;ecirc;n web nếu ch&#38;uacute;ng t&#38;ocirc;i đ&#38;atilde; được ch&#38;uacute;ng t&#38;ocirc;i x&#38;aacute;c nhận( Tại&#38;nbsp;&#60;a href=&#34;https://m.me/chuvanbien.vn&#34; target=&#34;_blank&#34;&#62;&#60;strong&#62;TẠI Đ&#38;Acirc;Y&#60;/strong&#62;&#38;nbsp;&#60;/a&#62;) th&#38;igrave; được bảo đảm mọi quyền lợi d&#38;ugrave; bất k&#38;igrave; trường hợp n&#38;agrave;o xảy ra.&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;p&#62;&#60;strong&#62;Điều 16&#60;/strong&#62;: Những nick facebook n&#38;agrave;o đăng k&#38;iacute; kh&#38;oacute;a học (kh&#38;oacute;a luyện đề minh họa+&#38;nbsp;kh&#38;oacute;a tổng &#38;ocirc;n) th&#38;igrave; mới được v&#38;agrave;o nh&#38;oacute;m b&#38;iacute; mật. Mọi vấn đề thắc mắc li&#38;ecirc;n quan đến chuyển nhượng th&#38;igrave; admin sẽ kh&#38;ocirc;ng giải quyết.&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;p&#62;&#60;strong&#62;Điều 17&#60;/strong&#62;:&#38;nbsp;Kh&#38;aacute;ch h&#38;agrave;ng tự &#38;yacute; d&#38;ugrave;ng t&#38;agrave;i khoản kho&#38;aacute; học để kinh doanh lại bất hợp ph&#38;aacute;p vi phạm bản quyền, lừa đảo người kh&#38;aacute;c dưới mọi h&#38;igrave;nh thức, ảnh hưởng đến uy t&#38;iacute;n v&#38;agrave; thương hiệu của&#38;nbsp;&#60;strong&#62;chuvanbien.vn&#60;/strong&#62;&#38;nbsp;sẽ bị KHO&#38;Aacute; T&#38;Agrave;I KHOẢN&#38;nbsp; vĩnh viễn.&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;p&#62;&#60;strong&#62;Điều 18: Chuvanbien.vn lu&#38;ocirc;n khuyến kh&#38;iacute;ch học sinh gi&#38;aacute;o vi&#38;ecirc;n phụ huynh tuy&#38;ecirc;n truyền phổ biến giới thiệu c&#38;aacute;c học sinh kh&#38;oacute;a sau c&#38;oacute; nhu cầu để giảm bớt sự vất vả &#38;amp; sai lầm cho học sinh trong c&#38;ocirc;ng việc chọn t&#38;agrave;i liệu hay để tham khảo. Gi&#38;aacute;o vi&#38;ecirc;n học sinh phụ huynh đ&#38;atilde; gi&#38;uacute;p đỡ chuvanbien.vn th&#38;igrave; vui l&#38;ograve;ng li&#38;ecirc;n để nhận qu&#38;agrave;&#38;nbsp;&#60;a href=&#34;https://m.me/chuvanbien.vn&#34; target=&#34;_blank&#34;&#62;TẠI Đ&#38;Acirc;Y&#60;/a&#62;&#60;/strong&#62;&#60;/p&#62;&#13;&#10;', 'Chính sách và quy định chung'),
(26, 'introduce_polite_security', '&#60;p&#62;Chuvanbien.vn hiểu rằng Qu&#38;yacute; Kh&#38;aacute;ch H&#38;agrave;ng rất quan t&#38;acirc;m đến việc những th&#38;ocirc;ng tin c&#38;aacute; nh&#38;acirc;n m&#38;agrave; bạn đ&#38;atilde; tin cậy cung cấp cho ch&#38;uacute;ng t&#38;ocirc;i được bảo mật v&#38;agrave; sử dụng ra sao. Chuvanbien.vn rất tr&#38;acirc;n trọng sự tin tưởng đ&#38;oacute; v&#38;agrave; cam kết rằng những th&#38;ocirc;ng tin n&#38;agrave;y sẽ được ch&#38;uacute;ng t&#38;ocirc;i nỗ lực tối đa để bảo mật. Chuvanbien.vn đảm bảo sẽ sử dụng th&#38;ocirc;ng tin kh&#38;aacute;ch h&#38;agrave;ng một c&#38;aacute;ch hợp l&#38;yacute;, c&#38;oacute; c&#38;acirc;n nhắc để kh&#38;ocirc;ng ngừng cải thiện chất lượng dịch vụ v&#38;agrave; đem lại cho Qu&#38;yacute; Kh&#38;aacute;ch H&#38;agrave;ng những trải nghiệm th&#38;uacute; vị khi mua sắm tại website ch&#38;uacute;ng t&#38;ocirc;i.&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;p&#62;&#60;strong&#62;1. Thu thập th&#38;ocirc;ng tin kh&#38;aacute;ch h&#38;agrave;ng&#60;/strong&#62;&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;p&#62;Để sử dụng được c&#38;aacute;c dịch vụ của Chuvanbien.vn, Qu&#38;yacute; Kh&#38;aacute;ch H&#38;agrave;ng phải đăng k&#38;yacute; t&#38;agrave;i khoản v&#38;agrave; cung cấp một số th&#38;ocirc;ng tin như: email, họ t&#38;ecirc;n, số điện thoại v&#38;agrave; địa chỉ v&#38;agrave; một số th&#38;ocirc;ng tin kh&#38;aacute;c. Phần thủ tục đăng k&#38;lrm;&#38;yacute; n&#38;agrave;y nhằm gi&#38;uacute;p ch&#38;uacute;ng t&#38;ocirc;i x&#38;aacute;c định phần thanh to&#38;aacute;n v&#38;agrave; giao h&#38;agrave;ng ch&#38;iacute;nh x&#38;aacute;c cho người nhận. Bạn c&#38;oacute; thể chọn kh&#38;ocirc;ng cung cấp cho ch&#38;uacute;ng t&#38;ocirc;i một số th&#38;ocirc;ng tin nhất định nhưng khi đ&#38;oacute; bạn sẽ kh&#38;ocirc;ng thể hưởng được một số tiện &#38;iacute;ch m&#38;agrave; những t&#38;iacute;nh năng của ch&#38;uacute;ng t&#38;ocirc;i cung cấp.&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;p&#62;Ch&#38;uacute;ng t&#38;ocirc;i cũng lưu trữ tất cả th&#38;ocirc;ng tin bạn nhập tr&#38;ecirc;n website Chuvanbien.vn. Những th&#38;ocirc;ng tin đ&#38;oacute; sẽ được sử dụng cho mục đ&#38;iacute;ch phản hồi y&#38;ecirc;u cầu của kh&#38;aacute;ch h&#38;agrave;ng, đưa ra những gợi &#38;yacute;&#38;lrm; ph&#38;ugrave; hợp cho từng kh&#38;aacute;ch h&#38;agrave;ng khi mua sắm tại Chuvanbien.vn, n&#38;acirc;ng cao chất lượng h&#38;agrave;ng h&#38;oacute;a dịch vụ v&#38;agrave; li&#38;ecirc;n lạc với bạn khi cần&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;p&#62;&#60;strong&#62;2. Sử dụng th&#38;ocirc;ng tin&#60;/strong&#62;&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;p&#62;Mục đ&#38;iacute;ch của việc thu thập th&#38;ocirc;ng tin l&#38;agrave; nhằm x&#38;acirc;y dựng Chuvanbien.vn trở th&#38;agrave;nh một website thương mại điện tử mang lại nhiều tiện &#38;iacute;ch nhất cho kh&#38;aacute;ch h&#38;agrave;ng. V&#38;igrave; thế, việc sử dụng th&#38;ocirc;ng tin sẽ phục vụ những hoạt động sau:&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;ul&#62;&#13;&#10;&#9;&#60;li&#62;Gửi tin tức giới thiệu sản phẩm mới v&#38;agrave; những chương tr&#38;igrave;nh khuyến m&#38;atilde;i của Chuvanbien.vn&#60;/li&#62;&#13;&#10;&#9;&#60;li&#62;Cung cấp một số tiện &#38;iacute;ch, dịch vụ hỗ trợ kh&#38;aacute;ch h&#38;agrave;ng&#60;/li&#62;&#13;&#10;&#9;&#60;li&#62;N&#38;acirc;ng cao chất lượng dịch vụ kh&#38;aacute;ch h&#38;agrave;ng của Chuvanbien.vn&#60;/li&#62;&#13;&#10;&#9;&#60;li&#62;Giải quyết c&#38;aacute;c vấn đề, tranh chấp ph&#38;aacute;t sinh li&#38;ecirc;n quan đến việc sử dụng website&#60;/li&#62;&#13;&#10;&#9;&#60;li&#62;Ngăn chặn những hoạt động vi phạm ph&#38;aacute;p luật Việt Nam&#60;/li&#62;&#13;&#10;&#60;/ul&#62;&#13;&#10;&#13;&#10;&#60;p&#62;&#60;strong&#62;3. Chia sẻ th&#38;ocirc;ng tin&#60;/strong&#62;&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;p&#62;Chuvanbien.vn biết rằng th&#38;ocirc;ng tin về kh&#38;aacute;ch h&#38;agrave;ng l&#38;agrave; một phần rất quan trọng trong việc kinh doanh v&#38;agrave; ch&#38;uacute;ng sẽ kh&#38;ocirc;ng được b&#38;aacute;n, trao đổi cho một b&#38;ecirc;n thứ ba n&#38;agrave;o kh&#38;aacute;c. Ch&#38;uacute;ng t&#38;ocirc;i sẽ kh&#38;ocirc;ng chia sẻ th&#38;ocirc;ng tin kh&#38;aacute;ch h&#38;agrave;ng trừ những trường hợp cụ thể sau đ&#38;acirc;y:&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;p&#62;Để bảo vệ Chuvanbien.vn v&#38;agrave; c&#38;aacute;c b&#38;ecirc;n thứ ba kh&#38;aacute;c: Ch&#38;uacute;ng t&#38;ocirc;i chỉ đưa ra th&#38;ocirc;ng tin t&#38;agrave;i khoản v&#38;agrave; những th&#38;ocirc;ng tin c&#38;aacute; nh&#38;acirc;n kh&#38;aacute;c khi tin chắc rằng việc đưa những th&#38;ocirc;ng tin đ&#38;oacute; l&#38;agrave; ph&#38;ugrave; hợp với luật ph&#38;aacute;p, bảo vệ quyền lợi, t&#38;agrave;i sản của người sử dụng dịch vụ, của Chuvanbien.vn v&#38;agrave; c&#38;aacute;c b&#38;ecirc;n thứ ba kh&#38;aacute;c.&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;p&#62;Theo y&#38;ecirc;u cầu ph&#38;aacute;p l&#38;lrm;&#38;yacute; từ một cơ quan ch&#38;iacute;nh phủ hoặc khi ch&#38;uacute;ng t&#38;ocirc;i tin rằng việc l&#38;agrave;m đ&#38;oacute; l&#38;agrave; cần thiết v&#38;agrave; ph&#38;ugrave; hợp nhằm tu&#38;acirc;n theo c&#38;aacute;c y&#38;ecirc;u cầu ph&#38;aacute;p l&#38;lrm;&#38;yacute;&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;p&#62;Trong những trường hợp c&#38;ograve;n lại, ch&#38;uacute;ng t&#38;ocirc;i sẽ c&#38;oacute; th&#38;ocirc;ng b&#38;aacute;o cụ thể cho Qu&#38;yacute; Kh&#38;aacute;ch H&#38;agrave;ng khi phải tiết lộ th&#38;ocirc;ng tin cho một b&#38;ecirc;n thứ ba v&#38;agrave; th&#38;ocirc;ng tin n&#38;agrave;y chỉ được cung cấp khi được sự phản hồi đồng &#38;lrm;&#38;yacute;&#38;lrm; từ ph&#38;iacute;a Qu&#38;yacute; Kh&#38;aacute;ch H&#38;agrave;ng. VD: c&#38;aacute;c chương tr&#38;igrave;nh khuyến m&#38;atilde;i c&#38;oacute; sự hợp t&#38;aacute;c, t&#38;agrave;i trợ với c&#38;aacute;c đối t&#38;aacute;c của Chuvanbien.vn; cung cấp c&#38;aacute;c th&#38;ocirc;ng tin giao nhận cần thiết cho c&#38;aacute;c đơn vị vận chuyển&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;p&#62;N&#38;oacute; chắc chắn kh&#38;ocirc;ng bao gồm việc b&#38;aacute;n, chia sẻ dẫn đến việc l&#38;agrave;m lộ th&#38;ocirc;ng tin c&#38;aacute; nh&#38;acirc;n của kh&#38;aacute;ch h&#38;agrave;ng v&#38;igrave; mục đ&#38;iacute;ch thương mại vi phạm những cam kết được đặt ra trong quy định Ch&#38;iacute;nh s&#38;aacute;ch bảo mật th&#38;ocirc;ng tin kh&#38;aacute;ch h&#38;agrave;ng của Chuvanbien.vn&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;p&#62;&#60;strong&#62;4. Bảo mật th&#38;ocirc;ng tin kh&#38;aacute;ch h&#38;agrave;ng&#60;/strong&#62;&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;p&#62;Chuvanbien.vn sử dụng phần mềm để bảo vệ th&#38;ocirc;ng tin của kh&#38;aacute;ch h&#38;agrave;ng trong qu&#38;aacute; tr&#38;igrave;nh chuyển dữ liệu bằng c&#38;aacute;ch m&#38;atilde; h&#38;oacute;a th&#38;ocirc;ng tin bạn nhập v&#38;agrave;o.&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;p&#62;Một điều quan trọng đối với kh&#38;aacute;ch h&#38;agrave;ng l&#38;agrave; việc tự bảo vệ bạn trước sự tiếp cận th&#38;ocirc;ng tin về &#38;ldquo;mật khẩu&#38;rdquo; khi bạn d&#38;ugrave;ng chung m&#38;aacute;y t&#38;iacute;nh với nhiều người. Khi đ&#38;oacute;, bạn phải chắc chắn đ&#38;atilde; tho&#38;aacute;t khỏi t&#38;agrave;i khoản sau khi sử dụng dịch vụ của ch&#38;uacute;ng t&#38;ocirc;i.&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;p&#62;Ch&#38;uacute;ng t&#38;ocirc;i cũng cam kết kh&#38;ocirc;ng cố &#38;lrm;&#38;lrm;&#38;yacute; tiết lộ th&#38;ocirc;ng tin kh&#38;aacute;ch h&#38;agrave;ng, kh&#38;ocirc;ng b&#38;aacute;n hoặc chia sẻ th&#38;ocirc;ng tin kh&#38;aacute;ch h&#38;agrave;ng của Chuvanbien.vn v&#38;igrave; mục đ&#38;iacute;ch thương mại vi phạm những cam kết giữa ch&#38;uacute;ng t&#38;ocirc;i với Qu&#38;lrm;&#38;yacute; kh&#38;aacute;ch h&#38;agrave;ng chiếu theo Ch&#38;iacute;nh s&#38;aacute;ch bảo mật th&#38;ocirc;ng tin kh&#38;aacute;ch h&#38;agrave;ng của Chuvanbien.vn&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;p&#62;Chuvanbien.vn nhấn mạnh rằng ch&#38;uacute;ng t&#38;ocirc;i rất quan t&#38;acirc;m đến quyền lợi của Qu&#38;yacute; &#38;lrm;kh&#38;aacute;ch h&#38;agrave;ng trong việc bảo vệ th&#38;ocirc;ng tin c&#38;aacute; nh&#38;acirc;n n&#38;ecirc;n trong trường hợp bạn c&#38;oacute; g&#38;oacute;p &#38;lrm;&#38;yacute;, thắc mắc li&#38;ecirc;n quan đến ch&#38;iacute;nh s&#38;aacute;ch bảo mật của ch&#38;uacute;ng t&#38;ocirc;i, vui l&#38;ograve;ng li&#38;ecirc;n hệ:&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;p&#62;Tel: 0943.19.19.00&#38;nbsp;&#38;ndash; 0985.82.93.93&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;p&#62;Email:&#38;nbsp;Chuvanbien.vn@gmail.com&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;p&#62;&#60;em&#62;&#60;strong&#62;Lưu &#38;lrm; &#38;yacute;:&#60;/strong&#62;&#60;/em&#62;&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;p&#62;Ch&#38;iacute;nh s&#38;aacute;ch bảo mật th&#38;ocirc;ng tin kh&#38;aacute;ch h&#38;agrave;ng của Chuvanbien.vn chỉ được &#38;aacute;p dụng tại http://chuvanbien.vn/. N&#38;oacute; kh&#38;ocirc;ng bao gồm hoặc li&#38;ecirc;n quan đến c&#38;aacute;c b&#38;ecirc;n thứ ba kh&#38;aacute;c đặt quảng c&#38;aacute;o hoặc c&#38;oacute; li&#38;ecirc;n kết tại Chuvanbien,vn. Ch&#38;uacute;ng t&#38;ocirc;i đề nghị bạn tham khảo v&#38;agrave; ph&#38;acirc;n biệt r&#38;otilde; sự kh&#38;aacute;c biệt trong ch&#38;iacute;nh s&#38;aacute;ch bảo mật th&#38;ocirc;ng tin kh&#38;aacute;ch h&#38;agrave;ng của những website n&#38;agrave;y.&#60;/p&#62;&#13;&#10;', 'Chính sách bảo mật'),
(27, 'introduce_polite_paypal', '&#60;p&#62;&#60;strong&#62;1. THANH TO&#38;Aacute;N&#60;/strong&#62;&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;p&#62;&#60;strong&#62;C&#38;oacute; 2 c&#38;aacute;ch đăng k&#38;yacute; s&#38;aacute;ch v&#38;agrave; kh&#38;oacute;a học sau:&#60;/strong&#62;&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;p&#62;&#60;strong&#62;C&#38;Aacute;CH 1: CHUYỂN TIỀN QUA T&#38;Agrave;I KHOẢN&#38;nbsp;NG&#38;Acirc;N H&#38;Agrave;NG (Ưu ti&#38;ecirc;n, nhanh v&#38;agrave; rẻ ph&#38;iacute; nhất)&#60;/strong&#62;&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;p&#62;&#60;strong&#62;C&#38;Aacute;CH 2: CHUYỂN ĐẾN TẬN NƠI THANH TO&#38;Aacute;N (PH&#38;Iacute; 50K/ ĐƠN PH&#38;Iacute; TRẢ CHO BƯU ĐIỆN THU TIỀN HỘ)&#60;/strong&#62;&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;p&#62;&#60;strong&#62;Lưu &#38;yacute;: Qu&#38;yacute; kh&#38;aacute;ch nạp tiền bằng bất cứ h&#38;igrave;nh thức n&#38;agrave;o bắt buộc phải li&#38;ecirc;n hệ với ch&#38;uacute;ng t&#38;ocirc;i qua số điện thoại 0985.82.93.93 - 0943.19.19.00 để x&#38;aacute;c nhận th&#38;ocirc;ng tin kh&#38;oacute;a học, kh&#38;oacute;a thi online v&#38;agrave; gửi s&#38;aacute;ch.&#60;/strong&#62;&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;p&#62;&#60;strong&#62;GI&#38;Aacute; NI&#38;Ecirc;M YẾT TẠI WEB L&#38;Agrave; GI&#38;Aacute; CHUYỂN TIỀN QUA TK NG&#38;Acirc;N H&#38;Agrave;NG&#60;/strong&#62;&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;p&#62;&#60;strong&#62;Nạp tiền tại quầy/ c&#38;acirc;y ATM / Điểm giao dịch bằng c&#38;aacute;ch chuyển khoản v&#38;agrave;o t&#38;agrave;i khoản dưới đ&#38;acirc;y:&#60;/strong&#62;&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;ul&#62;&#13;&#10;&#9;&#60;li&#62;&#13;&#10;&#9;&#60;p&#62;&#60;strong&#62;Số TK(A/C No.):&#38;nbsp;111002909232&#60;/strong&#62;&#60;/p&#62;&#13;&#10;&#9;&#60;/li&#62;&#13;&#10;&#9;&#60;li&#62;&#13;&#10;&#9;&#60;p&#62;&#60;strong&#62;T&#38;ecirc;n TK(A/C Name): C&#38;ocirc;ng ty TNHH MATHPRESSO Vietnam&#60;/strong&#62;&#60;/p&#62;&#13;&#10;&#9;&#60;/li&#62;&#13;&#10;&#9;&#60;li&#62;&#13;&#10;&#9;&#60;p&#62;&#60;strong&#62;Ng&#38;acirc;n h&#38;agrave;ng: Vietinbank chi nh&#38;aacute;nh Đống Đa&#60;/strong&#62;&#60;/p&#62;&#13;&#10;&#9;&#60;/li&#62;&#13;&#10;&#9;&#60;li&#62;&#13;&#10;&#9;&#60;p&#62;&#60;strong&#62;Nội dung nộp (Detail): T&#38;ecirc;n kh&#38;oacute;a học đăng k&#38;iacute; + sdt&#38;nbsp;&#60;/strong&#62;&#60;/p&#62;&#13;&#10;&#9;&#60;/li&#62;&#13;&#10;&#60;/ul&#62;&#13;&#10;&#13;&#10;&#60;p&#62;&#60;strong&#62;2. VẬN CHUYỂN&#60;/strong&#62;&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;p&#62;&#60;strong&#62;Giao h&#38;agrave;ng nhanh ch&#38;oacute;ng v&#38;agrave; bảo đảm&#60;/strong&#62;&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;p&#62;1. Tr&#38;aacute;ch nhiệm xử l&#38;yacute; đơn h&#38;agrave;ng v&#38;agrave; vận chuyển sản phẩm đến kh&#38;aacute;ch h&#38;agrave;ng do Chuvanbien.vn đảm nhận v&#38;agrave; phụ thuộc v&#38;agrave;o h&#38;igrave;nh thức thanh to&#38;aacute;n v&#38;agrave; vận chuyển cho c&#38;aacute;c sản phẩm m&#38;agrave; kh&#38;aacute;ch h&#38;agrave;ng khai b&#38;aacute;o khi tạo đơn h&#38;agrave;ng.&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;p&#62;2. Chuvanbien.vn sẽ chịu tr&#38;aacute;ch nhiệm đảm bảo kh&#38;aacute;ch h&#38;agrave;ng nhận được h&#38;agrave;ng h&#38;oacute;a đ&#38;uacute;ng như đ&#38;atilde; đặt mua trong thời gian giao h&#38;agrave;ng như cam kết. Trường hợp h&#38;agrave;ng h&#38;oacute;a bị lỗi, hư hại trong qu&#38;aacute; tr&#38;igrave;nh vận chuyển, Chuvanbien.vn sẽ chấp nhận việc đổi h&#38;agrave;ng mới cho kh&#38;aacute;ch.&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;p&#62;3. Trong trường hợp kh&#38;aacute;ch h&#38;agrave;ng tự &#38;yacute; hủy đơn h&#38;agrave;ng hoặc đơn h&#38;agrave;ng ho&#38;agrave;n th&#38;agrave;nh nhưng kh&#38;ocirc;ng giao cho kh&#38;aacute;ch h&#38;agrave;ng được v&#38;igrave; l&#38;yacute; do th&#38;ocirc;ng tin li&#38;ecirc;n lạc kh&#38;ocirc;ng ch&#38;iacute;nh x&#38;aacute;c, Chuvanbien.vn sẽ hủy đơn h&#38;agrave;ng đ&#38;oacute;.&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;p&#62;4. Với những đơn h&#38;agrave;ng trả tiền trước như:&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;ul&#62;&#13;&#10;&#9;&#60;li&#62;Thanh to&#38;aacute;n bằng thẻ ATM&#60;/li&#62;&#13;&#10;&#9;&#60;li&#62;Chuyển khoản ng&#38;acirc;n h&#38;agrave;ng&#60;/li&#62;&#13;&#10;&#9;&#60;li&#62;Nạp card điện thoại.&#60;/li&#62;&#13;&#10;&#60;/ul&#62;&#13;&#10;&#13;&#10;&#60;p&#62;Chuvanbien.vn sẽ x&#38;aacute;c nhận v&#38;agrave; tiến h&#38;agrave;nh gửi h&#38;agrave;ng đi sau khi nhận được thanh to&#38;aacute;n từ ph&#38;iacute;a qu&#38;yacute; kh&#38;aacute;ch. V&#38;igrave; vậy để sớm nhận được h&#38;agrave;ng, qu&#38;yacute; kh&#38;aacute;ch vui l&#38;ograve;ng tiến h&#38;agrave;nh thủ tục chuyển tiền sớm.&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;p&#62;5. Trong trường hợp v&#38;igrave; l&#38;yacute; do bất khả kh&#38;aacute;ng, thời gian giao h&#38;agrave;ng bị chậm so với thời gian quy định, Chuvanbien.vn sẽ th&#38;ocirc;ng b&#38;aacute;o đến kh&#38;aacute;ch h&#38;agrave;ng.&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;p&#62;H&#38;agrave;ng h&#38;oacute;a được gửii theo đường bưu điện qu&#38;yacute; kh&#38;aacute;ch sẽ nhận được h&#38;agrave;ng trong khoảng thời gian từ 3 đến 7 ng&#38;agrave;y.&#60;/p&#62;&#13;&#10;', 'Vận chuyển và thanh toán'),
(28, 'introduce_polite_exchange', '&#60;p&#62;&#60;strong&#62;QUY ĐỊNH MUA H&#38;Agrave;NG&#60;/strong&#62;&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;ul&#62;&#13;&#10;&#9;&#60;li&#62;C&#38;aacute;c sản phẩm s&#38;aacute;ch, kh&#38;oacute;a học đ&#38;atilde; ph&#38;aacute;t h&#38;agrave;nh, chưa ( sắp) ph&#38;aacute;t h&#38;agrave;nh, c&#38;aacute;c g&#38;oacute;i luyện thi VIP đ&#38;uacute;ng lộ tr&#38;igrave;nh,...bất k&#38;igrave; sản phẩm n&#38;agrave;o do C&#38;ocirc;ng ty TNHH Mode Vision cung cấp kh&#38;aacute;ch h&#38;agrave;ng sẽ được nh&#38;acirc;n vi&#38;ecirc;n c&#38;ocirc;ng ty tư vấn, cung cấp đầy đủ th&#38;ocirc;ng tin sản phẩm, dịch vụ....&#60;/li&#62;&#13;&#10;&#9;&#60;li&#62;Kh&#38;aacute;ch h&#38;agrave;ng c&#38;oacute; nhiệm vụ phối hợp, nghi&#38;ecirc;n cứu kĩ trước khi đăng k&#38;yacute; sản phẩm, nghe kĩ tư vấn. Khi kh&#38;aacute;ch h&#38;agrave;ng đ&#38;atilde; đăng k&#38;iacute; sản phẩm th&#38;igrave; kh&#38;ocirc;ng được đổi, ho&#38;agrave;n trả lại d&#38;ugrave; bất k&#38;igrave; l&#38;yacute; do n&#38;agrave;o. (V&#38;igrave; trước khi đăng k&#38;iacute; th&#38;igrave; được tư vấn v&#38;agrave; thẩm định kĩ lưỡng rồi).&#60;/li&#62;&#13;&#10;&#9;&#60;li&#62;Kh&#38;aacute;ch h&#38;agrave;ng t&#38;ocirc;n trọng bản quyền t&#38;aacute;c giả, cấm copy v&#38;agrave; kinh doanh trục lợi dưới mọi h&#38;igrave;nh thức.&#60;/li&#62;&#13;&#10;&#9;&#60;li&#62;C&#38;ocirc;ng ty kh&#38;ocirc;ng giải quyết v&#38;agrave; chịu tr&#38;aacute;ch nhiệm&#38;nbsp;c&#38;aacute;c trường hợp chuyển nhượng t&#38;agrave;i khoản kh&#38;oacute;a học, kh&#38;oacute;a thi online, s&#38;aacute;ch tham khảo.&#60;/li&#62;&#13;&#10;&#60;/ul&#62;&#13;&#10;&#13;&#10;&#60;p&#62;&#60;strong&#62;KH&#38;Ocirc;NG TRẢ LẠI H&#38;Agrave;NG&#38;nbsp;-&#38;nbsp;&#60;/strong&#62;&#60;strong&#62;CHỈ ĐỔI KHI:&#60;/strong&#62;&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;ul&#62;&#13;&#10;&#9;&#60;li&#62;Nhận được sản phẩm kh&#38;ocirc;ng đ&#38;uacute;ng như quảng c&#38;aacute;o&#60;/li&#62;&#13;&#10;&#9;&#60;li&#62;Do sản phẩm lỗi do qu&#38;aacute; tr&#38;igrave;nh vận chuyển&#60;/li&#62;&#13;&#10;&#9;&#60;li&#62;Do sản phẩm lỗi sản xuất&#60;/li&#62;&#13;&#10;&#60;/ul&#62;&#13;&#10;&#13;&#10;&#60;p&#62;&#60;strong&#62;Hướng Dẫn Đổi - Trả Sản Phẩm&#60;/strong&#62;&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;p&#62;&#60;strong&#62;I. Kiểm tra điều kiện đổi trả h&#38;agrave;ng:&#60;/strong&#62;&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;p&#62;Vui l&#38;ograve;ng chắc chắn rằng sản phẩm qu&#38;yacute; kh&#38;aacute;ch y&#38;ecirc;u cầu đổi (trả) thỏa m&#38;atilde;n điều kiện đổi trả h&#38;agrave;ng của Chuvanbien.vn tại ch&#38;iacute;nh s&#38;aacute;ch đổi trả h&#38;agrave;ng h&#38;oacute;a.&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;p&#62;Một số điều kiện bắt buộc:&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;ul&#62;&#13;&#10;&#9;&#60;li&#62;Kh&#38;ocirc;ng qu&#38;aacute;&#38;nbsp;5 ng&#38;agrave;y kể từ ng&#38;agrave;y nhận h&#38;agrave;ng,&#60;/li&#62;&#13;&#10;&#9;&#60;li&#62;Kh&#38;ocirc;ng c&#38;oacute; dấu hiệu đ&#38;atilde; qua sử dụng, c&#38;ograve;n nguy&#38;ecirc;n bao b&#38;igrave; đ&#38;oacute;ng g&#38;oacute;i&#60;/li&#62;&#13;&#10;&#60;/ul&#62;&#13;&#10;&#13;&#10;&#60;p&#62;&#60;strong&#62;II. C&#38;aacute;c bước thực hiện đổi - trả:&#60;/strong&#62;&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;p&#62;&#60;strong&#62;Bước 1: Đăng k&#38;yacute;&#60;/strong&#62;&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;p&#62;Li&#38;ecirc;n hệ với Chuvanbien.vn qua hotline 0985.82.93.93 hoặc truy cập trang &#38;quot;Gửi y&#38;ecirc;u cầu&#38;quot; v&#38;agrave; cung cấp th&#38;ocirc;ng tin chi tiết về sản phẩm lỗi gồm:&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;ul&#62;&#13;&#10;&#9;&#60;li&#62;M&#38;atilde; số đơn h&#38;agrave;ng&#60;/li&#62;&#13;&#10;&#9;&#60;li&#62;T&#38;ecirc;n sản phẩm&#60;/li&#62;&#13;&#10;&#9;&#60;li&#62;Lỗi sản phẩm (m&#38;ocirc; tả chi tiết v&#38;agrave; k&#38;egrave;m ảnh chụp nếu c&#38;oacute;)&#60;/li&#62;&#13;&#10;&#9;&#60;li&#62;Nhu cầu cần hỗ trợ: đổi/trả&#60;/li&#62;&#13;&#10;&#60;/ul&#62;&#13;&#10;&#13;&#10;&#60;p&#62;&#60;strong&#62;Bước 2: Đ&#38;oacute;ng g&#38;oacute;i v&#38;agrave; mang sản phẩm đến Bưu Điện&#60;/strong&#62;&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;p&#62;Đ&#38;oacute;ng g&#38;oacute;i v&#38;agrave; mang sản phẩm đến bưu điện gần nh&#38;agrave;&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;p&#62;&#60;strong&#62;Bước 3: Gửi sản phẩm về C&#38;ocirc;ng ty TNHH Mode Vision&#60;/strong&#62;&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;p&#62;Điền th&#38;ocirc;ng tin m&#38;atilde; số đơn h&#38;agrave;ng l&#38;ecirc;n th&#38;ugrave;ng h&#38;agrave;ng v&#38;agrave; gửi h&#38;agrave;ng về C&#38;ocirc;ng ty TNHH Mode Vision theo địa chỉ:&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;p&#62;ĐC: 371 L&#38;ecirc; Lai , P. Đ&#38;ocirc;ng Sơn, TP. Thanh H&#38;oacute;a.&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;p&#62;ĐT: 0985.82.93.93 - 0943.19.19.00&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;p&#62;Trong trường hợp kh&#38;ocirc;ng nhớ th&#38;ocirc;ng tin ở bước số 3, qu&#38;yacute; kh&#38;aacute;ch c&#38;oacute; thể xuất tr&#38;igrave;nh tin nhắn Chuvanbien.vn đ&#38;atilde; gửi (ở bước 2) cho nh&#38;acirc;n vi&#38;ecirc;n bưu điện v&#38;agrave; l&#38;agrave;m theo hướng dẫn.&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;p&#62;Sau khi nhận được sản phẩm qu&#38;yacute; kh&#38;aacute;ch gởi về, C&#38;ocirc;ng ty TNHH Mode Vision sẽ phản hồi v&#38;agrave; cập nhật th&#38;ocirc;ng tin tr&#38;ecirc;n từng giai đoạn xử l&#38;yacute; đến qu&#38;yacute; kh&#38;aacute;ch qua email.&#60;/p&#62;&#13;&#10;', 'Chính sách đổi trả'),
(29, 'introduce_polite_order', '&#60;p&#62;Qu&#38;yacute; kh&#38;aacute;ch&#38;nbsp;c&#38;oacute; thể đặt s&#38;aacute;ch trực tuyến tr&#38;ecirc;n website theo c&#38;aacute;c bước chi tiết dưới đ&#38;acirc;y.&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;p&#62;&#60;strong&#62;1. Đăng k&#38;yacute; hoặc Đăng nhập&#60;/strong&#62;&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;p&#62;Để đặt h&#38;agrave;ng qu&#38;yacute; kh&#38;aacute;ch&#38;nbsp;cần đăng k&#38;yacute; th&#38;agrave;nh vi&#38;ecirc;n&#38;nbsp;nếu qu&#38;yacute; kh&#38;aacute;ch chưa l&#38;agrave;&#38;nbsp;th&#38;agrave;nh vi&#38;ecirc;n hoặc đăng nhập nếu qu&#38;yacute; kh&#38;aacute;ch đ&#38;atilde; c&#38;oacute; t&#38;agrave;i khoản th&#38;agrave;nh vi&#38;ecirc;n&#38;nbsp;để tiến h&#38;agrave;nh c&#38;aacute;c bước đặt h&#38;agrave;ng.&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;p&#62;&#60;img alt=&#34;&#34; src=&#34;https://chuvanbien.vn/upload_images/images/Huong-dan-dat-hang/Buoc-1.PNG&#34; style=&#34;width:100%&#34; /&#62;&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;p&#62;&#60;strong&#62;2. T&#38;igrave;m kiếm v&#38;agrave; lựa chọn sản phẩm cần mua&#60;/strong&#62;&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;p&#62;Kh&#38;aacute;ch h&#38;agrave;ng lựa chọn xem sản phẩm cần mua, hệ thống Chuvanbien.vn&#38;nbsp;cung cấp cho kh&#38;aacute;ch h&#38;agrave;ng c&#38;aacute;c th&#38;ocirc;ng tin chi tiết nhất li&#38;ecirc;n quan đến cuốn s&#38;aacute;ch kh&#38;aacute;ch h&#38;agrave;ng quan t&#38;acirc;m để c&#38;oacute; sự lựa chọn tốt nhất. Ngo&#38;agrave;i ra hệ thống Chuvanbien.vn c&#38;ograve;n cho ph&#38;eacute;p kh&#38;aacute;ch h&#38;agrave;ng xem trước tr&#38;iacute;ch đoạn của s&#38;aacute;ch.&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;p&#62;&#60;img alt=&#34;&#34; src=&#34;https://chuvanbien.vn/upload_images/images/Huong-dan-dat-hang/Buoc-2.png&#34; style=&#34;width:100%&#34; /&#62;&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;p&#62;Sau khi xem xong c&#38;aacute;c th&#38;ocirc;ng tin của s&#38;aacute;ch, kh&#38;aacute;ch h&#38;agrave;ng điền số lượng s&#38;aacute;ch cần mua v&#38;agrave; nhấn v&#38;agrave;o n&#38;uacute;t ʺMUA NGAYʺ&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;p&#62;Trong trường hợp s&#38;aacute;ch chưa ph&#38;aacute;t h&#38;agrave;nh, hệ thống cho ph&#38;eacute;p kh&#38;aacute;ch h&#38;agrave;ng ʺĐặt h&#38;agrave;ng trướcʺ.&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;p&#62;&#60;img alt=&#34;&#34; src=&#34;https://chuvanbien.vn/upload_images/images/Huong-dan-dat-hang/Buoc-3.png&#34; style=&#34;width:100%&#34; /&#62;&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;p&#62;Sau khi đ&#38;atilde; x&#38;aacute;c nhận th&#38;ocirc;ng tin, qu&#38;yacute; kh&#38;aacute;ch chọn ĐẶT H&#38;Agrave;NG (Tư vấn, thanh to&#38;aacute;n COD hoặc chuyển khoản).&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;p&#62;Sau khi chọn đặt h&#38;agrave;ng, th&#38;ocirc;ng tin đơn h&#38;agrave;ng của kh&#38;aacute;ch h&#38;agrave;ng sẽ được gửi về nh&#38;agrave; s&#38;aacute;ch. Sau khi nh&#38;agrave; s&#38;aacute;ch kiểm tra đơn h&#38;agrave;ng, sẽ li&#38;ecirc;n hệ&#38;nbsp;với kh&#38;aacute;ch h&#38;agrave;ng th&#38;ocirc;ng qua sdt hoặc fb kh&#38;aacute;ch h&#38;agrave;ng cung cấp.&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;p&#62;Cảm ơn qu&#38;yacute; kh&#38;aacute;ch h&#38;agrave;ng đ&#38;atilde; tin tưởng sử dụng sản phẩm của ch&#38;uacute;ng t&#38;ocirc;i!!!&#60;/p&#62;&#13;&#10;', 'Hướng dẫn đặt hàng');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `id` int(11) NOT NULL,
  `student_id` int(11) DEFAULT NULL,
  `test_id` int(11) DEFAULT NULL,
  `score` float DEFAULT NULL,
  `create_at` timestamp NULL DEFAULT NULL,
  `update_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`id`, `student_id`, `test_id`, `score`, `create_at`, `update_at`) VALUES
(12, 7, 8, 10, '0000-00-00 00:00:00', NULL),
(13, 7, 7, 3.33333, '0000-00-00 00:00:00', NULL),
(14, 7, 7, 3.33333, '0000-00-00 00:00:00', NULL),
(15, 15, 8, 0, '0000-00-00 00:00:00', NULL),
(16, 15, 8, 0, '0000-00-00 00:00:00', NULL),
(17, 15, 9, 10, '0000-00-00 00:00:00', NULL),
(18, 13, 8, 10, '2023-12-04 10:55:57', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `fullname` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` varchar(13) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `role` tinyint(4) DEFAULT 0,
  `forgot` varchar(100) DEFAULT NULL,
  `token` varchar(100) DEFAULT NULL,
  `create_at` timestamp NULL DEFAULT NULL,
  `update_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `fullname`, `email`, `phone`, `address`, `password`, `status`, `role`, `forgot`, `token`, `create_at`, `update_at`) VALUES
(7, 'Kiên', 'kienndph39656@fpt.edu.vn', '0368031178', 'hữu bằng - thạch thất', '$2y$10$rdDmSyYeEcz3f.KA.Kda3up0blB.rozSHcmAP5Zw.I0RcPt7QPq2W', 1, 0, NULL, NULL, '2023-11-08 13:08:20', '2023-12-03 08:32:00'),
(10, 'Nguyễn Duy Kiên', 'ndkdzvl@gmail.com', '0368031178', 'Hà Nội', '$2y$10$GPfl9CpVG7k7G6klPKBbxedziC0TVfRgN9hpVaMBXqBlN9DjRXXSq', 1, 0, NULL, NULL, '2023-11-17 14:52:38', '2023-12-03 08:31:30'),
(11, 'test', 'test@gmail.com', '0123984756', NULL, '$2y$10$f59N1U7YCJfs1.EbrrEXD.BGrWypwBycqydupy8BP71uWfyqN7URq', 1, 0, NULL, '', '2023-11-26 20:37:10', NULL),
(12, 'gia khiem', 'zazgia@gmail.com', '0963452426', '', '$2y$10$ATI7HJJqysGQI.nMwaQfgu3aRsBiulCR1iOZBo.nDLEP39ZXdaqLy', 1, 0, NULL, NULL, '2023-11-28 09:12:27', '2023-11-28 09:17:21'),
(13, 'hocvien', 'hocvien@gmail.com', '0123984756', NULL, '$2y$10$zbFaFk3xiiJdal0VGwax7efRgG8tRbOb68p2nXec6a6Q8NJ9sHiVm', 1, 0, NULL, '', '2023-12-02 07:02:47', NULL),
(14, 'Nguyễn Quốc Toản', 'nguyenquoctoan@gmail.com', '0123984756', NULL, '$2y$10$gTY2lZmAs/JJqz7PaRF3xuPiiE7Q1E3nVWoqUovyyqMbf/IquHV1e', 1, 0, NULL, NULL, '2023-12-03 07:57:29', '2023-12-03 08:29:34'),
(15, 'Duy Khánh', 'nguyenduykhanh@gmail.com', '0123984756', NULL, '$2y$10$GlC8AnP9xRf8e0atl/zHCOaJTbaxeO6.AO5qdctqkXGLwN1PLQmhi', 1, 0, NULL, NULL, '2023-12-03 08:29:07', '2023-12-03 08:30:00'),
(16, 'Nguyễn Gia Khiêm', 'nguyengiakhiem@gmail.com', '0123984756', NULL, '$2y$10$AVIJIJQlssYilUFhU4dGP.5WeZsV4aCjORbt9rn.b0eORK11axX7O', 1, 0, NULL, NULL, '2023-12-03 08:31:24', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `id` int(11) NOT NULL,
  `fullname` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `exp` int(11) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `group_id` int(11) DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `create_at` timestamp NULL DEFAULT NULL,
  `update_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`id`, `fullname`, `email`, `phone`, `exp`, `password`, `group_id`, `status`, `create_at`, `update_at`) VALUES
(1, 'Duy Kiên', 'ndkdzvl@gmail.com', '0368031178', 1, NULL, 1, 1, NULL, NULL),
(6, 'Duy Kiên', 'kienndph39656@fpt.edu.vn', '0368031178', 2, '$2y$10$1JOdFdc.oEvDfxDnIMXeKeXCfNWx5f0U1a2szj7lsE8cWEZKi3pfG', 1, 1, '2023-11-08 15:08:38', '2023-11-27 17:05:54'),
(8, 'Nguyễn Văn A', 'congtacvien@gmail.com', '0147852369', 0, '$2y$10$21JctqSs3VKCoFraQAdt9uXET0XumnU2OHjjB4ZpfvXhSOT8oxLoS', 2, 1, '2023-11-19 09:28:58', '2023-11-19 15:48:22'),
(13, 'Sales11', 'sales@gmail.com', '0123984756', 0, '$2y$10$tRNfw2J2Wqb75yGoj7d5IO17iR4HLqrEMvmiCfabkqFj.0LqKGqq6', 5, 1, '2023-11-26 16:19:51', NULL),
(14, 'Stafff1', 'staff@gmail.com', '0123984756', 0, '$2y$10$0fv8XIGi5jvfUAetED.nHeSr74fGa1oL8yxuNx2leLthC5Z4CKY8W', 4, 1, '2023-11-26 16:20:23', '2023-11-27 16:26:51'),
(15, 'Trần Quốc Toán', 'tranquoctoan@gmail.com', '0123984756', 1, '$2y$10$lZb.n5zsvULnKUUQBr5a6.UJJiNNpptfMko7KKJws.fXrqd4tc5q2', 3, 1, '2023-12-02 17:56:27', '2023-12-02 17:56:31'),
(16, 'Lê Thị Kiều Diễm', 'lethikieudiem@gmail.com', '0123984756', 1, '$2y$10$GJynztegV5pUoJeymp2EmenR0YfJuSWPZhsTBU0WG5l8rP6q0P2Le', 3, 1, '2023-12-03 17:49:14', '2023-12-03 17:49:25'),
(17, 'Nguyễn Gia Khiêm', 'nguyengiakhiem@gmail.com', '0123984756', 1, '$2y$10$eTAUlyafxJRKTXgGt3d29.Qsnd0uFf/88vqKG5EjKNx.KQP8rR7A2', 3, 1, '2023-12-03 17:49:46', '2023-12-03 17:50:13'),
(18, 'Nguyễn Duy Khánh', 'nguyenduykhanh@gmail.com', '0123984756', 1, '$2y$10$P9RALpObMjmFGdKgqjfytewl26gxO3suOyrHDjHe5hcOe5s0FisYa', 3, 1, '2023-12-03 17:50:10', '2023-12-03 17:50:14');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `id` int(11) NOT NULL,
  `title` varchar(200) DEFAULT NULL,
  `question` varchar(255) DEFAULT NULL,
  `choice` varchar(255) DEFAULT NULL,
  `answer` varchar(255) DEFAULT NULL,
  `test_id` int(11) DEFAULT NULL,
  `create_at` timestamp NULL DEFAULT NULL,
  `update_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`id`, `title`, `question`, `choice`, `answer`, `test_id`, `create_at`, `update_at`) VALUES
(7, 'Javascript', '[\"&#60;p&#62;javscript l&#38;agrave; g&#38;igrave;&#60;\\/p&#62;&#13;&#10;\",\"&#60;p&#62;c&#38;aacute;ch khai b&#38;aacute;o bi\\u1ebfn trong js&#60;\\/p&#62;&#13;&#10;\",\"&#60;p&#62;JS l&#38;agrave; vi\\u1ebft t\\u1eaft c\\u1ee7a&#60;\\/p&#62;&#13;&#10;\"]', '[\"l\\u00e0 ng\\u00f4n ng\\u1eef\",\"l\\u00e0 l\\u1eadp tr\\u00ecnh\",\"js\",\"java\",\"let ho\\u1eb7c var + t\\u00ean bi\\u1ebfn\",\"$ + t\\u00ean bi\\u1ebfn\",\"ki\\u1ec3u d\\u1eef li\\u1ec7u + t\\u00ean bi\\u1ebfn\",\"next\",\"Javascript\",\"java\",\"javas\",\"javan\"]', '[\"2\",\"1\",\"1\"]', 5, '2023-11-16 09:06:42', '2023-11-17 09:26:49'),
(8, 'Đề thi ôn luyện 1', '[\"&#60;p&#62;C c&#38;oacute; ph\\u1ea3i l&#38;agrave; ng&#38;ocirc;n ng\\u1eef l\\u1eadp tr&#38;igrave;nh hay kh&#38;ocirc;ng&#60;\\/p&#62;&#13;&#10;\"]', '[\"ph\\u1ea3i\",\"\\u0111\\u00e1p \\u00e1n A &#38; B\",\"kh\\u00f4ng\",\"3 \\u0110\\u00e1p \\u00e1n tr\\u00ean \\u0111\\u1ec1u \\u0111\\u00fang\"]', '[\"3\"]', 7, '2023-12-03 09:23:32', '2023-12-03 09:26:16'),
(9, 'Đề thi ôn tập 1', '[\"&#60;p&#62;Java c&#38;oacute; ph\\u1ea3i ng&#38;ocirc;n ng\\u1eef l\\u1eadp tr&#38;igrave;nh hay kh&#38;ocirc;ng&#60;\\/p&#62;&#13;&#10;\"]', '[\"c\\u00f3\",\"\\u0111\\u00e1p \\u00e1n A v\\u00e0 B\",\"kh\\u00f4ng\",\"3 \\u0111\\u00e1p \\u00e1n tr\\u00ean \\u0111\\u1ec1u \\u0111\\u00fang\"]', '[\"3\"]', 6, '2023-12-03 09:23:57', '2023-12-03 09:28:44'),
(10, 'Đề thi ôn luyện PHP', '[\"&#60;p&#62;PHP c&#38;oacute; \\u0111\\u01b0\\u1ee3c coi l&#38;agrave; 1 ng&#38;ocirc;n ng\\u1eef l\\u1eadp tr&#38;igrave;nh hay kh&#38;ocirc;ng&#60;\\/p&#62;&#13;&#10;\"]', '[\"\\u0110\\u00fang\",\"\\u0110\\u00e1p \\u00e1n A &#38; B\",\"Sai\",\"3 \\u0111\\u00e1p \\u00e1n tr\\u00ean \\u0111\\u1ec1u sai\"]', '[\"3\"]', 4, '2023-12-03 09:24:07', '2023-12-03 09:29:12'),
(11, 'Đề thi cuối kỳ môn HTML 5 &#38; CSS 3', '[\"&#60;p&#62;HTML 5 &#38;amp; CSS 3 l&#38;agrave; g&#38;igrave;&#60;\\/p&#62;&#13;&#10;\"]', '[\"l\\u00e0 ng\\u00f4n ng\\u1eef l\\u1eadp tr\\u00ecnh\",\"\\u0110\\u00e1p \\u00e1n \\u0111\\u00fang\",\"L\\u00e0 text\",\"0\"]', '[\"3\"]', 3, '2023-12-04 10:55:13', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `test_category`
--

CREATE TABLE `test_category` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `create_at` timestamp NULL DEFAULT NULL,
  `update_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `test_category`
--

INSERT INTO `test_category` (`id`, `name`, `create_at`, `update_at`) VALUES
(3, 'HTML 5 &#38; CSS 3', '2023-11-16 03:23:55', NULL),
(4, 'PHP 1', '2023-11-16 03:23:57', NULL),
(5, 'Javascript', '2023-11-16 03:24:04', NULL),
(6, 'Java', '2023-11-16 03:24:06', NULL),
(7, 'C', '2023-11-16 03:24:07', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `vnpay`
--

CREATE TABLE `vnpay` (
  `id` int(11) NOT NULL,
  `vnp_Amount` varchar(50) NOT NULL,
  `vnp_BankCode` varchar(50) NOT NULL,
  `vnp_BankTranNo` varchar(50) NOT NULL,
  `vnp_CardType` varchar(50) NOT NULL,
  `vnp_OrderInfo` varchar(100) NOT NULL,
  `vnp_PayDate` varchar(50) NOT NULL,
  `vnp_TmnCode` varchar(50) NOT NULL,
  `vnp_TransactionNo` varchar(50) NOT NULL,
  `code_cart` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vnpay`
--

INSERT INTO `vnpay` (`id`, `vnp_Amount`, `vnp_BankCode`, `vnp_BankTranNo`, `vnp_CardType`, `vnp_OrderInfo`, `vnp_PayDate`, `vnp_TmnCode`, `vnp_TransactionNo`, `code_cart`) VALUES
(4, '15000000', 'NCB', 'VNP14193597', 'ATM', 'NCB', '20231122235933', 'CJQLSZK0', '14193597', '655e336ddfd061700672365'),
(5, '45000000', 'NCB', 'VNP14194548', 'ATM', 'Thanh toán đơn hàng đặt tại web', '20231123144626', 'CJQLSZK0', '14194548', '170072557053'),
(6, '30000000', 'NCB', 'VNP14194572', 'ATM', 'Thanh toán đơn hàng đặt tại web', '20231123145104', 'CJQLSZK0', '14194572', '170072584113'),
(7, '15000000', 'NCB', 'VNP14194579', 'ATM', 'Thanh toán đơn hàng đặt tại web', '20231123145229', 'CJQLSZK0', '14194579', '170072592355'),
(8, '75000000', 'NCB', 'VNP14196045', 'ATM', 'Thanh toán đơn hàng đặt tại web', '20231124003158', 'CJQLSZK0', '14196045', '170076070479'),
(9, '30000000', 'NCB', 'VNP14196047', 'ATM', 'Thanh toán đơn hàng đặt tại web', '20231124003316', 'CJQLSZK0', '14196047', '170076078323'),
(10, '15000000', 'NCB', 'VNP14197221', 'ATM', 'Thanh toán đơn hàng đặt tại web', '20231124135026', 'CJQLSZK0', '14197221', '170080859584'),
(11, '15200000', 'NCB', 'VNP14197978', 'ATM', 'Thanh toán đơn hàng đặt tại web', '20231124182707', 'CJQLSZK0', '14197978', '170082521957'),
(12, '10000000', 'NCB', 'VNP14201552', 'ATM', 'Thanh toán đơn hàng đặt tại web', '20231126160732', 'CJQLSZK0', '14201552', 'course_1700989637'),
(13, '10000000', 'NCB', 'VNP14201563', 'ATM', 'Thanh toán đơn hàng đặt tại web', '20231126161147', 'CJQLSZK0', '14201563', 'course_1700989893'),
(14, '10000000', 'NCB', 'VNP14201570', 'ATM', 'Thanh toán đơn hàng đặt tại web', '20231126161333', 'CJQLSZK0', '14201570', 'course_1700990000'),
(15, '10000000', 'NCB', 'VNP14201579', 'ATM', 'Thanh toán đơn hàng đặt tại web', '20231126161630', 'CJQLSZK0', '14201579', 'course_1700990168'),
(16, '10000000', 'NCB', 'VNP14201668', 'ATM', 'Thanh toán đơn hàng đặt tại web', '20231126170241', 'CJQLSZK0', '14201668', 'course_1700992936'),
(17, '50000000', 'NCB', 'VNP14201902', 'ATM', 'Thanh toán đơn hàng đặt tại web', '20231126194406', 'CJQLSZK0', '14201902', 'course_1701002630'),
(18, '10000000', 'NCB', 'VNP14202648', 'ATM', 'Thanh toán đơn hàng đặt tại web', '20231127040231', 'CJQLSZK0', '14202648', 'course_1701032537'),
(19, '2000000', 'NCB', 'VNP14213627', 'ATM', 'Thanh toán đơn hàng đặt tại web', '20231201122605', 'CJQLSZK0', '14213627', 'course_1701408356'),
(20, '22000000', 'NCB', 'VNP14213632', 'ATM', 'Thanh toán đơn hàng đặt tại web', '20231201123029', 'CJQLSZK0', '14213632', 'course_1701408617'),
(21, '22000000', 'NCB', 'VNP14213662', 'ATM', 'Thanh toán đơn hàng đặt tại web', '20231201125320', 'CJQLSZK0', '14213662', 'course_1701409991'),
(22, '150000000', 'NCB', 'VNP14216976', 'ATM', 'Thanh toán đơn hàng đặt tại web', '20231204174811', 'CJQLSZK0', '14216976', 'course_1701686871');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bill_ibfk_1` (`client_id`);

--
-- Indexes for table `blocks`
--
ALTER TABLE `blocks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id`),
  ADD KEY `book_id` (`book_id`);

--
-- Indexes for table `book_category`
--
ALTER TABLE `book_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `client_id` (`student_id`),
  ADD KEY `book_id` (`book_id`);

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `code_course`
--
ALTER TABLE `code_course`
  ADD PRIMARY KEY (`id`),
  ADD KEY `course_id` (`course_id`),
  ADD KEY `client_id` (`student_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`),
  ADD KEY `teacher_id` (`teacher_id`),
  ADD KEY `cate_id` (`cate_id`);

--
-- Indexes for table `course_category`
--
ALTER TABLE `course_category`
  ADD PRIMARY KEY (`id`),
  ADD KEY `teacher_id` (`teacher_id`);

--
-- Indexes for table `document`
--
ALTER TABLE `document`
  ADD PRIMARY KEY (`id`),
  ADD KEY `document_id` (`document_id`);

--
-- Indexes for table `document_category`
--
ALTER TABLE `document_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exam`
--
ALTER TABLE `exam`
  ADD PRIMARY KEY (`id`),
  ADD KEY `exam_id` (`exam_id`);

--
-- Indexes for table `exam_category`
--
ALTER TABLE `exam_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lesson`
--
ALTER TABLE `lesson`
  ADD PRIMARY KEY (`id`),
  ADD KEY `module_id` (`module_id`),
  ADD KEY `teacher_id` (`teacher_id`);

--
-- Indexes for table `module`
--
ALTER TABLE `module`
  ADD PRIMARY KEY (`id`),
  ADD KEY `course_id` (`course_id`),
  ADD KEY `teacher_id` (`teacher_id`);

--
-- Indexes for table `momo`
--
ALTER TABLE `momo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`),
  ADD KEY `news_id` (`news_id`);

--
-- Indexes for table `news_category`
--
ALTER TABLE `news_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `options`
--
ALTER TABLE `options`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_id` (`student_id`),
  ADD KEY `test_id` (`test_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `test_category`
--
ALTER TABLE `test_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vnpay`
--
ALTER TABLE `vnpay`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT for table `blocks`
--
ALTER TABLE `blocks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `book_category`
--
ALTER TABLE `book_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=332;

--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `code_course`
--
ALTER TABLE `code_course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `course_category`
--
ALTER TABLE `course_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `document`
--
ALTER TABLE `document`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `document_category`
--
ALTER TABLE `document_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `exam`
--
ALTER TABLE `exam`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `exam_category`
--
ALTER TABLE `exam_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `lesson`
--
ALTER TABLE `lesson`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT for table `module`
--
ALTER TABLE `module`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `momo`
--
ALTER TABLE `momo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `news_category`
--
ALTER TABLE `news_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `options`
--
ALTER TABLE `options`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `test_category`
--
ALTER TABLE `test_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `vnpay`
--
ALTER TABLE `vnpay`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `book`
--
ALTER TABLE `book`
  ADD CONSTRAINT `book_ibfk_1` FOREIGN KEY (`book_id`) REFERENCES `book_category` (`id`);

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `student` (`id`),
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`book_id`) REFERENCES `book` (`id`);

--
-- Constraints for table `code_course`
--
ALTER TABLE `code_course`
  ADD CONSTRAINT `code_course_ibfk_1` FOREIGN KEY (`course_id`) REFERENCES `course` (`id`),
  ADD CONSTRAINT `code_course_ibfk_2` FOREIGN KEY (`student_id`) REFERENCES `student` (`id`);

--
-- Constraints for table `course`
--
ALTER TABLE `course`
  ADD CONSTRAINT `course_ibfk_1` FOREIGN KEY (`teacher_id`) REFERENCES `teacher` (`id`),
  ADD CONSTRAINT `course_ibfk_2` FOREIGN KEY (`cate_id`) REFERENCES `course_category` (`id`);

--
-- Constraints for table `course_category`
--
ALTER TABLE `course_category`
  ADD CONSTRAINT `course_category_ibfk_1` FOREIGN KEY (`teacher_id`) REFERENCES `teacher` (`id`);

--
-- Constraints for table `document`
--
ALTER TABLE `document`
  ADD CONSTRAINT `document_ibfk_1` FOREIGN KEY (`document_id`) REFERENCES `document_category` (`id`);

--
-- Constraints for table `exam`
--
ALTER TABLE `exam`
  ADD CONSTRAINT `exam_ibfk_1` FOREIGN KEY (`exam_id`) REFERENCES `exam_category` (`id`);

--
-- Constraints for table `lesson`
--
ALTER TABLE `lesson`
  ADD CONSTRAINT `lesson_ibfk_1` FOREIGN KEY (`module_id`) REFERENCES `module` (`id`),
  ADD CONSTRAINT `lesson_ibfk_2` FOREIGN KEY (`teacher_id`) REFERENCES `teacher` (`id`);

--
-- Constraints for table `module`
--
ALTER TABLE `module`
  ADD CONSTRAINT `module_ibfk_1` FOREIGN KEY (`course_id`) REFERENCES `course` (`id`),
  ADD CONSTRAINT `module_ibfk_2` FOREIGN KEY (`teacher_id`) REFERENCES `teacher` (`id`);

--
-- Constraints for table `news`
--
ALTER TABLE `news`
  ADD CONSTRAINT `news_ibfk_1` FOREIGN KEY (`news_id`) REFERENCES `news_category` (`id`);

--
-- Constraints for table `result`
--
ALTER TABLE `result`
  ADD CONSTRAINT `result_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `student` (`id`),
  ADD CONSTRAINT `result_ibfk_2` FOREIGN KEY (`test_id`) REFERENCES `test` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
