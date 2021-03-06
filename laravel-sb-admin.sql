-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 02, 2020 lúc 03:10 PM
-- Phiên bản máy phục vụ: 10.4.11-MariaDB
-- Phiên bản PHP: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `laravel-sb-admin`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `level` int(11) NOT NULL,
  `github` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `skype` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fullname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `created_at`, `updated_at`, `remember_token`, `level`, `github`, `facebook`, `skype`, `avatar`, `email`, `age`, `status`, `position`, `fullname`) VALUES
(6, 'abc123', '$2y$10$BeqHAFo8tjYTDEk.C7y9R.YQmaJ7YbKDiCjG0hVIrh/P9qP/l2T.u', '2020-05-20 03:44:44', '2020-05-26 02:39:58', NULL, 1, NULL, NULL, NULL, NULL, NULL, 15, NULL, NULL, 'abc123'),
(7, 'xyz@gmail.com', '$2y$10$87TTGfkaUGcPII2S2w/8lOMestNIvsMehOuqxIfq0LGuet70Q3D6S', '2020-05-20 03:45:44', '2020-05-20 03:45:44', 'P3YbsBrTGHwN4K7bxUB7oLqTvS92dJ3Iu8KQupJ7cjlnmS8MkcbSGcGQSbEK', 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'xyz'),
(8, 'admin', '$2y$10$4a8vEV4FmqQXufQ32B7sZ.ijHNluzXIVxBHeUUDtj3QLS2R5VTjWa', '2020-05-26 10:18:27', '2020-05-26 10:18:27', NULL, 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'admin');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `id` int(10) UNSIGNED NOT NULL,
  `cate` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`id`, `cate`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Giải Trí', 1, '2018-11-15 08:36:01', '2018-11-15 08:36:01'),
(5, 'Công Nghệ', 1, '2018-11-15 10:11:20', '2018-11-15 10:11:20'),
(6, 'Linh Tinh', 1, '2018-11-15 10:33:50', '2018-11-15 10:33:50'),
(7, 'Truyện', 0, '2018-11-15 10:35:10', '2018-11-28 13:58:35');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comment`
--

CREATE TABLE `comment` (
  `id` int(10) UNSIGNED NOT NULL,
  `content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `new_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `report` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `comment`
--

INSERT INTO `comment` (`id`, `content`, `user_id`, `new_id`, `created_at`, `updated_at`, `report`) VALUES
(13, 'gbsxb', 6, 16, '2018-12-01 11:55:36', '2018-12-01 11:55:36', NULL),
(14, 'xin chao', 6, 16, '2018-12-01 12:03:44', '2018-12-01 12:03:44', NULL),
(15, 'success', 1, 16, '2018-12-01 12:05:38', '2018-12-01 12:05:38', NULL),
(16, 'hello world', 1, 16, '2018-12-01 12:05:47', '2018-12-01 14:38:45', NULL),
(17, 'hoho', 6, 19, '2018-12-01 13:56:52', '2018-12-01 13:56:52', NULL),
(18, 'g', 12, 19, '2020-05-21 00:57:46', '2020-05-21 00:57:46', NULL),
(20, 'hi hi hi', 12, 19, '2020-05-21 01:08:09', '2020-05-23 08:41:37', 8),
(21, 'abc dắt dê đi ỉa', 7, 16, '2020-05-21 03:00:08', '2020-05-21 03:00:08', NULL),
(24, 'heagfágfkakvm', 25, 18, '2020-05-28 06:39:25', '2020-05-28 06:39:25', NULL),
(25, 'àâf', 25, 18, '2020-05-28 06:40:59', '2020-05-28 06:41:09', 1),
(26, 'dsgs', 25, 19, '2020-05-29 03:54:03', '2020-05-29 03:54:03', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `info`
--

CREATE TABLE `info` (
  `id` int(255) NOT NULL,
  `user_id` int(255) NOT NULL,
  `fullname` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birth` int(10) DEFAULT NULL,
  `facebook` int(11) DEFAULT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `info`
--

INSERT INTO `info` (`id`, `user_id`, `fullname`, `birth`, `facebook`, `avatar`) VALUES
(9, 28, 'admin', NULL, NULL, NULL),
(10, 29, 'admin1', NULL, NULL, NULL),
(14, 35, 'Trần Ngọc Trí', NULL, NULL, 'https://graph.facebook.com/v3.3/237886757412138/picture?type=normal'),
(15, 36, 'Trí Trần Ngọc', NULL, NULL, 'https://lh6.googleusercontent.com/-rAsIEpwfGBc/AAAAAAAAAAI/AAAAAAAAAAA/AMZuucky0YJMKQz2pbde90HsbItdZ7lVfQ/photo.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(16, '2014_10_12_000000_create_users_table', 1),
(17, '2014_10_12_100000_create_password_resets_table', 1),
(18, '2018_11_11_211033_news', 1),
(19, '2018_11_11_211206_admin', 1),
(20, '2018_11_11_211356_category', 1),
(21, '2018_11_16_222107_add_col_level_admin_table', 2),
(22, '2018_11_16_222531_add_col_level_admin_table', 3),
(23, '2018_11_16_222648_add_cols_admin_table', 4),
(24, '2018_11_19_211534_add_status_col_admin_table', 5),
(25, '2018_11_19_212444_add_position_col_admin_table', 6),
(26, '2018_11_19_224320_add_fullname_col_admin_table', 6),
(27, '2018_11_20_000452_add_author2_col_new_table', 7),
(28, '2018_11_26_214626_create_comment_table', 8);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `news`
--

CREATE TABLE `news` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `changetitle` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `author` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `author2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `view` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `news`
--

INSERT INTO `news` (`id`, `title`, `changetitle`, `description`, `content`, `author`, `avatar`, `category`, `status`, `created_at`, `updated_at`, `author2`, `view`) VALUES
(16, 'Tổng hợp ngôn ngữ lập trình nên  học trong 2018', 'tong-hop-ngon-ngu-lap-trinh-nen-hoc-trong-2018206658', 'JavaScript,PHP,Python,Java,...', '<p><img alt=\"\" src=\"/ckfinder/userfiles/files/600_5b0b47e9-1e80-4f03-8be7-91acd9003c05.jpg\" style=\"height:451px; width:602px\" /></p>', 'admin', 'admin_layout/images/avatar-new/avatar_admin2031278569.jpg', 'Giải Trí', 1, '2018-11-18 17:26:46', '2020-05-25 14:45:24', '', 128),
(17, 'fa', 'fa', 'fawf', '<p>fa</p>', 'Nguyên Phương', 'admin_layout/images/avatar-new/avatar_Nguyên Phương1668710676.jpg', 'Linh Tinh', 0, '2018-11-19 17:15:54', '2018-11-19 17:15:54', 'admin', NULL),
(18, 'Món ngon mỗi ngày', 'mon-ngon-moi-ngay', 'miêu tả nha', '<p>shdshsfh</p>', 'Nguyên Phương', 'admin_layout/images/avatar-new/avatar_Nguyên Phương898468551.jpg', 'Công Nghệ', 1, '2018-11-19 17:26:52', '2020-05-29 03:53:42', 'admin', 11),
(19, 'Bảo Thy dạo phố, ăn kem giữa Seoul lạnh 4 độ C', 'bao-thy-dao-pho-an-kem-giua-seoul-lanh-4-do-c7532455', 'Nữ ca sĩ tiết lộ tiết trời mùa đông tại Seoul khiến chân tay tê cứng song cô chưa có dịp \"hưởng tuyết\" như mong đợi.', '<p><img alt=\"Bảo Thy dạo phố, ăn kem giữa Seoul lạnh 4 độ C\" id=\"vne_slide_image_0\" src=\"https://i-dulich.vnecdn.net/2018/11/26/45902285-738438299849368-8914646521434994812-n_600x0.jpg\" /></p>\r\n\r\n<p>Bảo Thy vừa có chuyến đi chơi kết hợp công tác ngắn ngày tại Seoul đầu đông khi nhiệt độ dao động 4 - 6 độ C. Nữ ca sĩ check-in chợ đêm Myeong-dong sầm uất vào ngày 20/11 cùng anh trai Thế Bảo và chị dâu.</p>\r\n\r\n<p><img alt=\"Bảo Thy dạo phố, ăn kem giữa Seoul lạnh 4 độ C\" id=\"vne_slide_image_1\" src=\"https://i-dulich.vnecdn.net/2018/11/26/44746682-257682615099987-2440653947520021280-n-1543206325_600x0.jpg\" /></p>\r\n\r\n<p>Myeong-dong là khu mua sắm nổi tiếng với hàng nghìn cửa hàng mỹ phẩm và thời trang từ bình dân đến cao cấp, bên cạnh đó là những tiệm ăn vặt, ăn đêm, quán cà phê, karaoke...</p>\r\n\r\n<p><img alt=\"Bảo Thy dạo phố, ăn kem giữa Seoul lạnh 4 độ C\" id=\"vne_slide_image_2\" src=\"https://i-dulich.vnecdn.net/2018/11/26/46523923-10156409851875091-2872623450692780032-n_680x0.jpg\" /></p>\r\n\r\n<p>Bảo Thy ghé qua tòa nhà Dongdaemun Design Plaza - DDP, nơi luôn được du khách check-in khi tới Seoul. Được thiết kế bởi kiến trúc sư nổi tiếng thế giới Zaha Hadid, DDP có 5 sảnh theo các chủ đề Nghệ thuật, Bảo tàng, Nghiên cứu Thiết kế, Chợ Thiết kế, Lịch sử Dongdaemun và Công viên văn hóa.</p>\r\n\r\n<p>Các chương trình nghệ thuật, biểu diễn thường xuyên diễn ra tại địa điểm này. Riêng sảnh Chợ Thiết kế mở cửa 24/24 hướng ra phía khu chợ&nbsp;Dongdaemun nhộn nhịp.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Video Player is loading.</p>\r\n\r\n<p>Dừng</p>\r\n\r\n<p>Hiện tại&nbsp;0:05</p>\r\n\r\n<p>/</p>\r\n\r\n<p>Thời lượng&nbsp;0:55</p>\r\n\r\n<p>Đã tải: 0%</p>\r\n\r\n<p>Tiến trình: 0%</p>\r\n\r\n<p>Bỏ tắt tiếng</p>\r\n\r\n<p>Toàn màn hình</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Nữ ca sĩ thưởng thức rất nhiều đặc sản Hàn Quốc.</p>\r\n\r\n<p><img alt=\"Bảo Thy dạo phố, ăn kem giữa Seoul lạnh 4 độ C\" id=\"vne_slide_image_3\" src=\"https://i-dulich.vnecdn.net/2018/11/26/46524219-10156409851925091-6602163271451541504-n_600x0.jpg\" /></p>\r\n\r\n<p>Nữ ca sĩ vào thư viện sách giữa trung tâm thương mại Starfield COEX Mall ở Gangnam. Với diện tích hơn 2.800 m2, thư viện hai tầng này cho phép khách vào cửa miễn phí, chiêm ngưỡng ba giá sách khổng lồ cao 13 m. Nơi này có khoảng 50.000 cuốn sách và tạp chí cập nhật liên tục, mở cửa từ 10h đến 22h.</p>\r\n\r\n<p><img alt=\"Bảo Thy dạo phố, ăn kem giữa Seoul lạnh 4 độ C\" id=\"vne_slide_image_4\" src=\"https://i-dulich.vnecdn.net/2018/11/26/46731312-849664135393673-4930988399665650106-n-1543206325_600x0.jpg\" /></p>\r\n\r\n<p>Bảo Thy tiết lộ tiết trời mùa đông tại Seoul khiến chân tay tê cứng. Tuy nhiên cô chưa có dịp ngắm tuyết như mong đợi.</p>\r\n\r\n<p><img alt=\"Bảo Thy dạo phố, ăn kem giữa Seoul lạnh 4 độ C\" id=\"vne_slide_image_5\" src=\"https://i-dulich.vnecdn.net/2018/11/26/44336480-2166695203657170-5431364922427763652-n-1543207501_600x0.jpg\" /></p>\r\n\r\n<p>Nữ ca sĩ ghé trường Đại học Nữ sinh Ewha. Bao quanh khuôn viên trường đại học là các cửa hiệu, nhà hàng và tiệm cà phê, khiến nơi đây trở thành điểm vui chơi nổi tiếng với giới trẻ Seoul và du khách. Bạn có thể đi tàu điện ngầm Seoul tuyến số 2 và xuống tại Ga Đại học Nữ sinh Ewha.</p>\r\n\r\n<p><img alt=\"Bảo Thy dạo phố, ăn kem giữa Seoul lạnh 4 độ C\" id=\"vne_slide_image_6\" src=\"https://i-dulich.vnecdn.net/2018/11/26/132_680x0.jpg\" /></p>\r\n\r\n<p>Bảo Thy khoe hình ăn kem dưới thời tiết 4 độ C và thưởng thức hải sản trong bữa tối.</p>', 'Nguyên Phương', 'admin_layout/images/avatar-new/avatar_Nguyên Phương877742906.jpg', 'Giải Trí', 1, '2018-11-28 12:24:36', '2020-05-29 03:54:03', 'admin', 131),
(20, 'abc', NULL, 'abc', 'hfhndfnfdnd', 'abc', NULL, 'Giải Trí', 0, '2020-05-20 06:22:59', '2020-05-20 08:10:04', 'abc123', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `place`
--

CREATE TABLE `place` (
  `id` int(255) NOT NULL,
  `name` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `username` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `remember_token`, `created_at`, `updated_at`) VALUES
(28, 'admin', '$2y$10$6ZDFbapK5NQLynpPvSS6b.M', NULL, NULL, '2020-05-29 13:34:49', '2020-05-29 13:34:49'),
(29, 'admin1', '$2y$10$tsQlakIqh4cpuni6OZlVo.y', NULL, NULL, '2020-05-29 13:35:03', '2020-05-29 13:54:47'),
(35, NULL, NULL, 'ngoctriqn5288@gmail.com', 'he he', '2020-05-30 05:20:54', '2020-06-02 03:17:28'),
(36, NULL, NULL, 'ngoctriqntest@gmail.com', 'QNEBkM4spGlhR2fFVS7Kr5PWjH0duZcIa+iXAz8-vw=b6&UC3y', '2020-06-02 02:26:40', '2020-06-02 04:05:06');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admin_email_unique` (`email`);

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userid` (`user_id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `place`
--
ALTER TABLE `place`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT cho bảng `info`
--
ALTER TABLE `info`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT cho bảng `news`
--
ALTER TABLE `news`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT cho bảng `place`
--
ALTER TABLE `place`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `info`
--
ALTER TABLE `info`
  ADD CONSTRAINT `info_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
