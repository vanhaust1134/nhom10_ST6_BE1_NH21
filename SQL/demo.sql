-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3306
-- Thời gian đã tạo: Th1 06, 2022 lúc 09:23 AM
-- Phiên bản máy phục vụ: 5.7.31
-- Phiên bản PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `demo`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `manufactures`
--

DROP TABLE IF EXISTS `manufactures`;
CREATE TABLE IF NOT EXISTS `manufactures` (
  `manu_id` int(11) NOT NULL AUTO_INCREMENT,
  `manu_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`manu_id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `manufactures`
--

INSERT INTO `manufactures` (`manu_id`, `manu_name`) VALUES
(1, 'Apple'),
(2, 'Samsung'),
(3, 'Oppo'),
(4, 'Xiaomi'),
(5, 'Dell'),
(6, 'Acer'),
(7, 'Asus'),
(8, 'HP'),
(9, 'Sony'),
(10, 'Logitech');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `price` int(100) NOT NULL,
  `manu_id` int(11) NOT NULL,
  `type_id` int(11) NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `feature` tinyint(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=38 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `name`, `image`, `price`, `manu_id`, `type_id`, `description`, `feature`, `created_at`) VALUES
(1, 'Iphone-12-pro-max 128GB', 'iphone-12-pro-max-xanh-duong-new-600x600-600x600.jpg', 31490000, 1, 1, 'iPhone 12 Pro Max 128 GB một siêu phẩm smartphone đến từ Apple. Máy có một hiệu năng hoàn toàn mạnh mẽ đáp ứng tốt nhiều nhu cầu đến từ người dùng và mang trong mình một thiết kế đầy vuông vức, sang trọng.', 0, '2021-10-22 03:08:36'),
(2, ' Samsung Galaxy Z Flip3 5G 256GB', 'samsung-galaxy-z-flip-3-violet-1-600x600.jpg', 43990000, 2, 1, 'Nối tiếp thành công của Galaxy Z Flip 5G, trong sự kiện Galaxy Unpacked vừa qua Samsung tiếp tục giới thiệu đến thế giới về Galaxy Z Flip3 5G 256GB. Sản phẩm có nhiều cải tiến từ độ bền cho đến hiệu năng và thậm chí nó còn vượt xa hơn mong đợi của mọi người.', 0, '2021-10-23 03:09:12'),
(3, 'OPPO Reno6 Z 5G', 'oppo-reno6-z-5g-aurora-1-600x600.jpg', 9490000, 3, 1, 'Reno6 Z 5G đến từ nhà OPPO với hàng loạt sự nâng cấp và cải tiến không chỉ ngoại hình bên ngoài mà còn sức mạnh bên trong. Đặc biệt, chiếc điện thoại được hãng đánh giá “chuyên gia chân dung bắt trọn mọi cảm xúc chân thật nhất”, đây chắc chắn sẽ là một “siêu phẩm\" mà bạn không thể bỏ qua.', 0, '2021-10-24 03:09:23'),
(4, 'Xiaomi 11 Lite 5G NE', 'xiaomi-11-lite-5g-ne-pink-600x600.jpg', 9490000, 4, 1, 'Xiaomi 11 Lite 5G NE một phiên bản có ngoại hình rất giống với Mi 11 Lite được ra mắt trước đây. Chiếc smartphone này của Xiaomi mang trong mình một hiệu năng ổn định, thiết kế sang trọng và màn hình lớn đáp ứng tốt các tác vụ hằng ngày của bạn một cách dễ dàng', 0, '2021-10-25 03:09:33'),
(5, 'Dell Gaming G3 15 i7 10750H (P89F002BWH)', 'dell-g3-15-i7-p89f002bwh-16-600x600.jpg', 31490000, 5, 2, 'Laptop Dell G3 15 i7 (P89F002BWH) thuộc dòng laptop gaming với cấu hình mạnh mẽ, thiết kế trang nhã và rất sang trọng, dễ lựa chọn cho cả người đi đọc, đi làm, là 1 phiên bản tốt để lựa chọn cho cả nhu cầu làm việc, học tập và chơi game giải trí.', 0, '2021-10-26 03:09:42'),
(6, 'Acer Nitro 5 Gaming AN515 57 727J i7 11800H', 'acer-nitro-gaming-an515-57-727j-i7-nhqd9sv005-10-600x600.jpg', 28990000, 6, 2, 'Acer Nitro 5 Gaming AN515 57 727J i7 (NH.QD9SV.005.) sở hữu vẻ ngoài cá tính, nổi bật và được tích hợp bộ vi xử lý Intel thế hệ 11 tân tiến, card đồ hoạ rời NVIDIA GeForce RTX, hứa hẹn mang đến các trải nghiệm tuyệt vời cho người dùng.', 0, '2021-10-27 03:09:51'),
(7, 'Asus ZenBook UX325EA i5 1135G7 (KG363T)', 'asus-zenbook-ux325ea-i5-kg363t-16-600x600.jpg', 23790000, 7, 2, 'Chắc chắn hơn bao giờ hết nhờ độ bền chuẩn quân đội, laptop Asus Zenbook UX325EA (KG363T) sở hữu kiểu dáng tinh tế cùng hiệu năng tối ưu nhờ CPU Intel thế hệ 11, giúp bạn xử lý nhanh gọn và chính xác mọi tác vụ.', 0, '2021-10-28 03:10:00'),
(8, 'HP Envy 13 ba1030TU i7 1165G7 (2K0B6PA)', 'hp-envy-13-ba1030tu-i7-2k0b6pa-101820-091857-600x600.jpg', 30490000, 8, 2, 'Laptop HP Envy 13 ba1030TU i7 (2K0B6PA) sở hữu thiết kế mỏng nhẹ cùng cấu hình cực mạnh mẽ đáp ứng đa dạng nhu cầu làm việc, giúp bạn đạt được hiệu suất làm việc tốt nhất.', 0, '2021-10-29 03:10:09'),
(9, 'Loa Bluetooth Sony SRS-XB13', 'bluetooth-sony-srs-xb13-avatar-600x600.jpg', 1290000, 9, 3, 'Thiết kế loa Bluetooth Sony đơn giản, gọn nhẹ chỉ 0.4 kg, đi kèm dây treo cho bạn dễ dàng đeo vào cổ tay của mình hoặc treo móc vào balo mang theo khi đi chơi, du lịch, đi học,... Chất liệu vỏ nhựa có thêm lớp UV coating cho độ bền cao, chống trầy xước, làm sạch nhẹ nhàng.', 0, '2021-10-30 03:10:16'),
(12, 'iPhone 13 Pro Max', 'iphone-13-pro-max-sierra-blue-600x600.jpg', 33990000, 1, 1, 'iPhone 13 Pro Max 512GB một siêu phẩm đến từ nhà Apple chắc chắn đang được rất nhiều sự quan tâm từ iFan. Chiếc điện thoại này sở hữu màn hình siêu đẹp, hiệu năng bức phá từ con chip Apple A15 Bionic sẽ cho bạn trải nghiệm tuyệt vời, từ những tác vụ thông thường cho đến các ứng dụng chuyên nghiệp.', 1, '2021-10-22 09:18:08'),
(11, 'Chuột không dây Logitech MX Anywhere 3 Đen', 'chuot-khong-day-logitech-mx-anywhere-3-den-600x600.jpg', 899000, 10, 4, 'Chuột không dây Logitech MX Anywhere 2S đen có thiết kế nhỏ gọn với các chi tiết được bo cong', 1, '2021-10-31 09:08:01'),
(13, 'iPhone 13 Pro Max', 'iphone-13-pro-max-sierra-blue-600x600.jpg', 33990000, 1, 1, 'iPhone 13 Pro Max 256GB - siêu phẩm mang trên mình bộ vi xử lý Apple A15 Bionic hàng đầu, màn hình Super Retina XDR 120 Hz, cụm camera khẩu độ f/1.5 cực lớn, tất cả sẽ mang lại cho bạn những trải nghiệm tuyệt vời chưa từng có.', 1, '2021-10-22 09:18:08'),
(14, 'Samsung Galaxy Z Fold2 5G', 'samsung-galaxy-z-fold-2-den-600x600.jpg', 44000000, 2, 1, 'Galaxy Z Fold 2 là tên gọi chính thức của điện thoại màn hình gập cao cấp của Samsung. Với nhiều nâng cấp tiên phong về thiết kế, hiệu năng và camera, hứa hẹn đây sẽ là một siêu phẩm thành công tiếp theo đến từ “ông trùm” sản xuất điện thoại lớn nhất thế giới. ', 1, '2021-10-23 09:18:08'),
(15, 'OPPO Find X3 Pro 5G', 'oppo-find-x3-pro-black-001-1-600x600.jpg', 23990000, 3, 1, 'OPPO đã làm khuynh đảo thị trường smartphone khi cho ra đời chiếc điện thoại OPPO Find X3 Pro 5G. Đây là một sản phẩm có thiết kế độc đáo, sở hữu cụm camera khủng, cấu hình thuộc top đầu trong thế giới Android.', 1, '2021-10-24 09:20:49'),
(16, 'Xiaomi 11T 5G 256GB', 'xiaomi-11t-grey-1-600x600.jpg', 11990000, 4, 1, 'Xiaomi 11T 5G sở hữu màn hình AMOLED, viên pin siêu khủng cùng camera độ phân giải 108 MP, chiếc smartphone này của Xiaomi sẽ đáp ứng mọi nhu cầu sử dụng của bạn, từ giải trí đến làm việc đều vô cùng mượt mà. ', 1, '2021-10-25 09:20:49'),
(17, 'Dell Vostro 3400 i5 1135G7 (70253900)', 'dell-vostro-3400-i5-1135g7-8gb-256gb-office-600x600.jpg', 18490000, 5, 2, 'Với hiệu năng vượt trội đến từ con chip Intel Gen 11 tân tiến ẩn bên trong vẻ ngoài mang phong cách tối giản, thanh lịch, laptop Dell Vostro 3400 i5 (70253900) sẽ là một trong những gợi ý đáng để bạn tìm hiểu và chọn mua.', 1, '2021-10-26 09:25:10'),
(18, 'Acer Predator Triton 300 PT315 53 71DJ i7 11800H', 'acer-predator-triton-300-pt315-53-71dj-i7-600x600.jpg', 49990000, 6, 2, 'Trải nghiệm chơi game cực mượt mà trên chiếc laptop Acer Predator Triton 300 PT315 53 71DJ i7 (NH.QDSSV.001) mang trong mình bộ xử lý Intel thế hệ 11 mạnh mẽ cân được nhiều tựa game hot.', 1, '2021-10-27 09:25:10'),
(19, 'Asus ZenBook UX371EA i7 1165G7 (HL494TS)', 'asus-zenbook-ux371ea-i7-1165g7-16gb-1tb-ssd-touch-600x600.jpg', 41490000, 7, 2, 'Chiêm ngưỡng sự đẳng cấp đến từ Asus ZenBook UX371EA (HL494TS) với xu hướng thiết kế mỏng nhẹ, thời thượng cùng thông số kỹ thuật mạnh mẽ, hứa hẹn sẽ mang đến những trải nghiệm hoàn hảo nhất và không khiến người dùng phải thất vọng.', 1, '2021-10-28 09:26:54'),
(20, 'HP Omen 15 ek0078TX i7 10750H (26Y68PA)', 'hp-omen-15-ek0078tx-i7-26y68pa-600x600.jpg', 55490000, 8, 2, 'HP Omen 15 ek0078TX i7 (26Y68PA) là chiếc laptop gaming mang trong mình sức mạnh siêu phàm nhờ sở hữu cấu hình gồm con chip Intel Core i7 mạnh mẽ và vi xử lý đồ họa cực mượt mà nhưng vẫn giữ ngoại hình tương đối mỏng nhẹ, đây chính là công cụ đắc lực, đồng hành cùng bạn trong mọi cuộc chiến.', 1, '2021-10-29 09:26:54'),
(21, 'Loa Bluetooth Sony SRS-XB43', 'loa-bluetooth-sony-srs-xb43-ava-600x600.jpg', 4470000, 9, 3, 'Loa Bluetooth Sony có kiểu dáng hiện đại, gọn đẹp, năng động', 1, '2021-10-30 09:29:47'),
(22, 'Chuột Không Dây Bluetooth Logitech MX Anywhere 3 Xám', 'chuot-khong-day-logitech-mx-anywhere-3-xam-600x600.jpg', 1790000, 10, 4, 'Vẻ ngoài cao cấp, màu xám thời thượng', 1, '2021-10-31 09:29:47'),
(23, 'Bàn Phím Không Dây Logitech K580', 'khong-day-logitech-k580-600x600.jpg', 934000, 10, 5, 'Cấu trúc mỏng gọn, trọng lượng chỉ 558g, mang theo đến bất kỳ nơi nào', 1, '2021-10-31 09:35:09'),
(24, 'Samsung Galaxy M51', 'samsung-galaxy-m51-trang-new-600x600-600x600.jpg', 9490000, 2, 1, 'Galaxy M51 thuộc thế hệ Galaxy M đến từ Samsung và được nằm trong phân khúc giá tầm trung. Máy được nâng cấp và cải tiến với camera góc siêu rộng, dung lượng pin siêu khủng cùng vẻ ngoài sang trọng và thời thượng.', 2, '2021-11-20 05:32:21'),
(25, 'Samsung Galaxy A52 8GB/256GB', 'samsung-galaxy-a52-8gb-256gb-thumb-white-600x600-600x600.jpg', 10290000, 2, 1, 'Samsung cho ra mắt sản phẩm thuộc dòng Galaxy A mang tên Galaxy A52 (8GB/256GB). Sở hữu vi xử lý Snapdragon 720G mạnh mẽ bậc nhất, cụm 4 camera có độ phân giải lên đến 64 MP và một vẻ ngoài hiện đại, trẻ trung tràn đầy sức sống.', 2, '2021-11-21 07:32:21'),
(26, 'Samsung Galaxy S21 5G', 'samsung-galaxy-s21-tim-600x600.jpg', 1799000, 2, 1, 'Galaxy S21 5G nằm trong series S21 đến từ Samsung nổi bật với thiết kế tràn viền, cụm camera ấn tượng cho đến hiệu năng mạnh mẽ hàng đầu.', 1, '2021-11-22 07:55:06');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `protypes`
--

DROP TABLE IF EXISTS `protypes`;
CREATE TABLE IF NOT EXISTS `protypes` (
  `type_id` int(11) NOT NULL AUTO_INCREMENT,
  `type_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`type_id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `protypes`
--

INSERT INTO `protypes` (`type_id`, `type_name`) VALUES
(1, 'Điện Thoại'),
(2, 'Laptop'),
(3, 'Loa'),
(4, 'Chuột'),
(5, 'Bàn phím');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `role_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `role_id`) VALUES
(1, 'admin', '202cb962ac59075b964b07152d234b70', 1),
(2, 'user', '81dc9bdb52d04dc20036dbd8313ed055', 2),
(4, 'guest', '202cb962ac59075b964b07152d234b70', NULL),
(5, 'user1', '202cb962ac59075b964b07152d234b70', NULL),
(6, 'user2', '202cb962ac59075b964b07152d234b70', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
