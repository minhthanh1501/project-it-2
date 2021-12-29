-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 08, 2021 lúc 08:04 AM
-- Phiên bản máy phục vụ: 10.4.17-MariaDB
-- Phiên bản PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `doan2`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `brand`
--

CREATE TABLE `brand` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'no-image'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `brand`
--

INSERT INTO `brand` (`id`, `name`, `logo`) VALUES
(1, 'Ralph Lauren', 'no-image'),
(2, 'Valentino', 'no-image'),
(3, 'Nike', 'no-image'),
(4, 'Adidas', 'no-image'),
(5, 'Harley Davidson', 'no-image');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `types` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`id`, `name`, `types`, `created_at`, `updated_at`) VALUES
(1, 'Áo sơ mi', 1, '2021-11-08 23:03:51', '2021-11-09 05:09:03'),
(2, 'Áo khoác', 1, '2021-09-21 10:36:26', '2021-09-21 10:36:26'),
(3, 'Áo thun dài tay', 1, '2021-11-12 23:04:41', '2021-11-18 23:04:41'),
(4, 'Áo polo', 1, '2021-11-17 23:04:41', '2021-11-17 23:04:41'),
(5, 'Áo T-Shirt', 1, '2021-11-18 23:05:14', '2021-11-05 23:05:14'),
(6, 'Quần Thể Thao', 2, '2021-10-22 13:08:39', '2021-10-22 13:08:39'),
(7, 'Áo len', 1, '2021-11-09 23:05:43', '2021-11-08 23:05:43'),
(8, 'Áo Tank-top', 1, '2021-11-08 23:05:43', '2021-12-07 09:50:44'),
(10, 'Quần Short', 2, '2021-11-08 23:06:05', '2021-11-09 05:31:04'),
(11, 'Quần jeans', 2, '2021-11-08 23:06:33', '2021-11-08 23:06:33'),
(12, 'Quần Kaki', 2, '2021-11-08 23:06:33', '2021-11-08 23:06:33'),
(13, 'Boxer', 4, '2021-10-20 11:42:01', '2021-10-19 11:40:59'),
(14, 'Brief', 4, '2021-10-20 11:42:01', '2021-10-20 11:42:01'),
(16, 'Cà vạt', 3, '2021-10-19 11:40:59', '2021-10-19 11:40:59'),
(17, 'Ví da', 3, '2021-10-12 22:47:23', '2021-10-28 21:58:26'),
(18, 'Giày da', 3, '2021-09-28 16:52:50', '2021-09-28 16:52:50'),
(19, 'Va li', 3, '2021-10-12 21:59:09', '2021-11-09 05:35:04'),
(29, 'Quần âu', 2, '2021-09-21 10:36:26', '2021-09-21 10:36:26');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_details`
--

CREATE TABLE `order_details` (
  `id` int(11) NOT NULL,
  `id_order` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `id_the_order` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` float NOT NULL,
  `size` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thanhtien` float NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `order_details`
--

INSERT INTO `order_details` (`id`, `id_order`, `id_product`, `id_the_order`, `quantity`, `price`, `size`, `thanhtien`, `created_at`, `updated_at`) VALUES
(28, 4, 34, 58, 1, 1570000, 'S', 1570000, '2021-12-07 06:55:55', '2021-12-07 06:55:55'),
(29, 4, 30, 59, 4, 669000, 'S', 669000, '2021-12-07 10:54:37', '2021-12-07 10:54:37'),
(30, 4, 30, 60, 1, 669000, 'S', 669000, '2021-12-07 10:33:38', '2021-12-07 10:33:38'),
(31, 4, 32, 60, 1, 999000, 'S', 999000, '2021-12-07 10:33:38', '2021-12-07 10:33:38'),
(32, 1, 30, 61, 1, 669000, 'S', 669000, '2021-12-07 16:59:41', '2021-12-07 16:59:41'),
(33, 2, 2, 62, 3, 570000, 'XL', 1710000, '2021-12-08 08:24:02', '2021-12-08 08:24:02'),
(34, 2, 31, 62, 2, 980000, 'S', 1960000, '2021-12-08 08:24:02', '2021-12-08 08:24:02');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` float NOT NULL,
  `price_del` float NOT NULL,
  `thumbnail` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `bestseller` tinyint(4) NOT NULL DEFAULT 0,
  `sale` tinyint(4) NOT NULL DEFAULT 0,
  `new` tinyint(4) NOT NULL DEFAULT 0,
  `id_users` int(11) NOT NULL,
  `id_brand` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id`, `name`, `price`, `price_del`, `thumbnail`, `content`, `bestseller`, `sale`, `new`, `id_users`, `id_brand`, `created_at`, `updated_at`) VALUES
(1, 'ÁO SƠ MI DÀI TAY NAM ARISTINO ALS23701', 550000, 7000000, 'https://aristino.com/Data/upload/images/Product/so-mi-dai-tay/ALS23701/ao-so-mi-nam-aristino-ALS23701-03.jpg', 'KIỂU DÁNG: SLIM FIT\r\n\r\nCHI TIẾT:\r\n\r\n- Áo sơ mi dài tay phom Slim fit ôm vừa vặn với cơ thể, tôn dáng người mặc.\r\n\r\n- Áo thiết kế tà lượn, không túi, họa tiết kẻ caro xanh - cam trên nền trắng, tạo điểm nhấn độc đáo, mang lại vẻ ngoài hiện đại và trẻ trung khi mặc.\r\n\r\nCHẤT LIỆU:\r\n\r\n- Chất liệu công nghệ hoàn toàn mới Micro Polyester mang đến đến những điểm ưu việt: ▪️ Chống nhăn nhàu ▪️ Co giãn 4 chiều ▪️ Siêu thấm hút và khô nhanh ▪️ Kháng tia UV\r\n\r\nMÀU SẮC: Trắng kẻ xanh cam\r\n\r\nSIZE: 38 - 39 - 40 - 41 - 42 - 43', 1, 1, 1, 1, 1, '2021-11-08 23:26:31', '2021-12-07 09:29:17'),
(2, 'ÁO SƠ MI NAM DÀI TAY ARISTINO ALS35101', 570000, 750000, 'https://aristino.com/Data/upload/images/Product/so-mi-dai-tay/ALS35101/ao-so-mi-nam-aristino-ALS35101-01.jpg', 'KIỂU DÁNG: SLIM FIT\r\n\r\nCHI TIẾT:\r\n\r\n- Áo sơ mi dài tay phom Slim fit ôm vừa vặn, tôn dáng nhưng vẫn vô cùng thoải mái khi mặc.\r\n\r\n- Áo thiết kế tà lượn, không túi. Họa tiết trắng xám kẻ lịch lãm, đem lại vẻ ngoài nam tính, mạnh mẽ cho các quý ông.\r\n\r\nCHẤT LIỆU:\r\n\r\n- 50% Bamboo mang đến sự thoáng mát, thấm hút tốt.\r\n\r\n- 50% Polyspun mang đến khả năng đàn hồi tự nhiên và ít nhăn co trong suốt quá trình sử dụng.\r\n\r\nMÀU SẮC: Trắng xám kẻ\r\n\r\nSIZE: 38 - 39 - 40 - 41 - 42 - 43', 0, 1, 0, 1, 1, '2021-09-21 10:36:26', '2021-10-28 21:58:26'),
(12, 'ÁO LEN NAM ARISTINO AWO006W9', 580000, 750000, 'https://aristino.com/Data/upload/images/Product/ao-len/AWO006W9/ao-len-nam-aristino-AWO006W9-04.jpg', 'KIỂU DÁNG: CASUAL FIT\r\n\r\nCHI TIẾT:\r\n\r\n- AWO006W9 được Aristino cắt may theo phom Casual Fit. Áo suông rộng, không ôm cơ thể, mang đến sự thoải mái tuyệt đối cho người mặc trong suốt mùa đông. Đồng thời áo vẫn có sự vừa vặn với số đo hình thể của nam giới Việt.\r\n\r\n- Hình ảnh hoa mộc lan được in tràn trên phần thân áo tạo nên điểm nhấn, vừa mang nét đẹp lãng mạn tươi mới, vừa giữ được vẻ ngoài nam tính, lịch lãm.\r\n\r\nCHẤT LIỆU:\r\n\r\n- Thiết kế này được sử dụng 100% sợi Acrylic đem tới sự ấm áp tuyệt vời đồng thời vẫn có bề mặt vải êm nhẹ. Không dừng lại ở đó, áo có khả năng kiểm soát độ ẩm và độ đàn hồi ấn tượng, màu sắc sắc nét và bền đẹp theo thời gian.\r\n\r\nMÀU SẮC: Xám 104M in, Xanh tím than 52 in, Nâu 72 in\r\n\r\nSIZE: S – M – L – XL – XXL ', 0, 1, 0, 1, 4, '2021-11-15 18:14:36', '2021-11-15 18:14:36'),
(13, 'ÁO LEN NAM ARISTINO AWO001W9', 590000, 700000, 'https://aristino.com/Data/upload/images/Product/ao-len/AWO001W9/ao-len-nam-aristino-AWO001W9-13.jpg', 'KIỂU DÁNG: CASUAL FIT\r\n\r\nCHI TIẾT:\r\n\r\n- Áo len phom Casual Fit suông rộng, thoải mái, đem đến vẻ ngoài trẻ trung và phóng khoáng.\r\n\r\n- Thiết kế cổ tròn cơ bản. Điểm nhấn của áo nằm ở việc phối đồng màu họa tiết kẻ in ngang ngực và tay áo. Áo màu sắc nổi bật, thích hợp để mặc cùng các loại quần âu, quần khaki, quần jean cho các hoàn cảnh khác nhau.\r\n\r\nCHẤT LIỆU:\r\n\r\n- Chất liệu len Acrylic nhẹ, ấm, hạn chế xù lông. Đặc biệt áo có khả năng co giãn, đàn hồi và giữ định hình tốt.  Áo kiểm soát ẩm tốt, giúp giữ ấm cơ thể nhưng không tạo cảm giác bí bách.\r\n\r\nMÀU SẮC: Đỏ 77 kẻ, Trắng 9 kẻ, Xanh lá 27 kẻ\r\n\r\nSIZE:  S – M – L – XL', 0, 0, 0, 1, 3, '2021-09-21 10:36:26', '2021-09-21 10:36:26'),
(19, 'ÁO SƠ MI DÀI TAY NAM ARISTINO ALS27501', 950000, 695000, 'https://aristino.com/Data/upload/images/Product/so-mi-dai-tay/ALS27501/ao-so-mi-nam-aristino-ALS27501-02.jpg', 'KIỂU DÁNG: SLIM FIT\r\n\r\nCHI TIẾT:\r\n\r\n- Áo sơ mi dài tay phom Slim fit\r\n\r\n- Áo thiết kế tà lượn, không túi. Màu đen trung tính, dễ kết hợp trang phục. Họa tiết kẻ caro xám tạo điểm nhấn nổi bật trên áo\r\n\r\nCHẤT LIỆU:\r\n\r\n- 49% Modal giúp áo mềm mại và thấm hút tốt.\r\n\r\n- 49% Polyester giúp quần bền màu, sắc nét, mặt vải trơn trượt, mỏng nhẹ.\r\n\r\n- 2% Cotton giúp áo mềm mại, xốp nhẹ và thoáng khí.\r\n\r\nMÀU SẮC: Đen kẻ caro xám\r\n\r\nSIZE: 38 - 39 - 40 - 41 - 42 - 43', 0, 1, 0, 3, 2, '2021-09-21 10:36:26', '2021-09-21 10:36:26'),
(20, 'ÁO SƠ MI DÀI TAY NAM ARISTINO ALS21901', 400000, 700000, 'https://aristino.com/Data/upload/images/Product/so-mi-dai-tay/ALS21901/ao-so-mi-nam-aristino-ALS21901-05.jpg', 'KIỂU DÁNG: REGULAR FIT\r\n\r\nCHI TIẾT:\r\n\r\n- Áo sơ mi dài tay phom dáng regular fit suông vừa, không ôm sát cơ thể, tạo sự thoải mái cho người mặc\r\n\r\n- Được thiết kế cơ bản với tà lượn, túi ngực tiện lợi và , họa tiết trắng kẻ sọc xanh đem lại hình ảnh ấn tượng cho các quý ông Aristino.\r\n\r\nCHẤT LIỆU:\r\n\r\nChất liệu 100% Polyester cao cấp. Sử dụng công nghệ dệt kim đan dọc giúp vải vừa có khả năng co giãn nhẹ vừa đứng dáng, xốp nhẹ, mềm mại, không nhăn nhàu, thấm hút mồ hôi và khô nhanh mang đến sự thoáng mát, dễ chịu cho người mặc.\r\n\r\nMÀU SẮC: Trắng kẻ sọc xanh\r\n\r\nSIZE: 38 - 39 - 40 - 41 - 42 - 43 - 44', 0, 1, 0, 3, 1, '2021-09-28 16:52:50', '2021-09-28 16:52:50'),
(21, 'ÁO SƠ MI NAM DÀI TAY ARISTINO ALS22001', 450000, 700000, 'https://aristino.com/Data/upload/images/Product/so-mi-dai-tay/ALS22001/ao-so-mi-nam-aristino-ALS22001-03.jpg', 'KIỂU DÁNG: SLIM FIT\r\n\r\nCHI TIẾT:\r\n\r\n- Áo sơ mi dài tay dáng Slim fit ôm vừa vặn cơ thể.\r\n\r\n- Thiết kế tà lượn, không túi. Họa tiết kẻ lịch lãm kết hợp gam màu xanh tím than nam tính\r\n\r\nCHẤT LIỆU:\r\n\r\n- 50% Modal giúp áo mềm mại và thấm hút tốt.\r\n\r\n- 50% Polyspun mang đến khả năng đàn hồi tự nhiên và ít nhăn co trong suốt quá trình sử dụng.\r\n\r\nMÀU SẮC: Xanh tím than\r\n\r\nSIZE: 38-39-40-41-42-43', 0, 1, 0, 1, 1, '2021-09-21 10:36:26', '2021-09-21 10:36:26'),
(22, 'ÁO SƠ MI DÀI TAY NAM ARISTINO ALS26901', 535000, 700000, 'https://aristino.com/Data/upload/images/Product/so-mi-dai-tay/ALS26901/ao-so-mi-nam-aristino-ALS26901-03.jpg', 'KIỂU DÁNG: SLIM FIT\r\n\r\nCHI TIẾT:\r\n\r\n- Áo sơ mi dài tay phom Slim fit ôm vừa vặn với cơ thể, tôn dáng người mặc.\r\n\r\n- Áo thiết kế tà lượn, không túi, kẻ sọc trắng trên nền vải xanh tinh tế, tạo điểm nhấn độc đáo, đem lại vẻ ngoài lịch lãm, nam tính.\r\n\r\nCHẤT LIỆU:\r\n\r\n- 50% Modal giúp áo mềm mại và thấm hút tốt.\r\n\r\n- 50% Polyspun mang đến khả năng đàn hồi tự nhiên và ít nhăn co trong suốt quá trình sử dụng.\r\n\r\nMÀU SẮC: Xanh kẻ sọc\r\n\r\nSIZE: 38 - 39 - 40 - 41 - 42 - 43', 0, 0, 0, 3, 1, '2021-10-19 11:37:17', '2021-10-19 11:38:07'),
(23, 'ÁO SƠ MI DÀI TAY NAM ARISTINO ALS23701', 525000, 700000, 'https://aristino.com/Data/upload/images/Product/so-mi-dai-tay/ALS23701/ao-so-mi-nam-aristino-ALS23701-03.jpg', 'KIỂU DÁNG: SLIM FIT\r\n\r\nCHI TIẾT:\r\n\r\n- Áo sơ mi dài tay phom Slim fit ôm vừa vặn với cơ thể, tôn dáng người mặc.\r\n\r\n- Áo thiết kế tà lượn, không túi, họa tiết kẻ caro xanh - cam trên nền trắng, tạo điểm nhấn độc đáo, mang lại vẻ ngoài hiện đại và trẻ trung khi mặc.\r\n\r\nCHẤT LIỆU:\r\n\r\n- Chất liệu công nghệ hoàn toàn mới Micro Polyester mang đến đến những điểm ưu việt: ▪️ Chống nhăn nhàu ▪️ Co giãn 4 chiều ▪️ Siêu thấm hút và khô nhanh ▪️ Kháng tia UV\r\n\r\nMÀU SẮC: Trắng kẻ xanh cam\r\n\r\nSIZE: 38 - 39 - 40 - 41 - 42 - 43', 1, 1, 1, 1, 1, '2021-11-08 23:26:31', '2021-11-08 23:26:31'),
(24, 'ÁO SƠ MI NAM DÀI TAY ARISTINO ALS35101', 1000000, 1500000, 'https://aristino.com/Data/upload/images/Product/so-mi-dai-tay/ALS35101/ao-so-mi-nam-aristino-ALS35101-01.jpg', 'KIỂU DÁNG: SLIM FIT\r\n\r\nCHI TIẾT:\r\n\r\n- Áo sơ mi dài tay phom Slim fit ôm vừa vặn, tôn dáng nhưng vẫn vô cùng thoải mái khi mặc.\r\n\r\n- Áo thiết kế tà lượn, không túi. Họa tiết trắng xám kẻ lịch lãm, đem lại vẻ ngoài nam tính, mạnh mẽ cho các quý ông.\r\n\r\nCHẤT LIỆU:\r\n\r\n- 50% Bamboo mang đến sự thoáng mát, thấm hút tốt.\r\n\r\n- 50% Polyspun mang đến khả năng đàn hồi tự nhiên và ít nhăn co trong suốt quá trình sử dụng.\r\n\r\nMÀU SẮC: Trắng xám kẻ\r\n\r\nSIZE: 38 - 39 - 40 - 41 - 42 - 43', 0, 0, 0, 1, 1, '2021-09-21 10:36:26', '2021-10-28 21:58:26'),
(25, 'ÁO LEN NAM ARISTINO AWO006W9', 950000, 1000000, 'https://aristino.com/Data/upload/images/Product/ao-len/AWO006W9/ao-len-nam-aristino-AWO006W9-04.jpg', 'KIỂU DÁNG: CASUAL FIT\r\n\r\nCHI TIẾT:\r\n\r\n- AWO006W9 được Aristino cắt may theo phom Casual Fit. Áo suông rộng, không ôm cơ thể, mang đến sự thoải mái tuyệt đối cho người mặc trong suốt mùa đông. Đồng thời áo vẫn có sự vừa vặn với số đo hình thể của nam giới Việt.\r\n\r\n- Hình ảnh hoa mộc lan được in tràn trên phần thân áo tạo nên điểm nhấn, vừa mang nét đẹp lãng mạn tươi mới, vừa giữ được vẻ ngoài nam tính, lịch lãm.\r\n\r\nCHẤT LIỆU:\r\n\r\n- Thiết kế này được sử dụng 100% sợi Acrylic đem tới sự ấm áp tuyệt vời đồng thời vẫn có bề mặt vải êm nhẹ. Không dừng lại ở đó, áo có khả năng kiểm soát độ ẩm và độ đàn hồi ấn tượng, màu sắc sắc nét và bền đẹp theo thời gian.\r\n\r\nMÀU SẮC: Xám 104M in, Xanh tím than 52 in, Nâu 72 in\r\n\r\nSIZE: S – M – L – XL – XXL ', 0, 0, 0, 1, 4, '2021-11-15 18:14:36', '2021-11-15 18:14:36'),
(26, 'ÁO LEN NAM ARISTINO AWO001W9', 200000, 500000, 'https://aristino.com/Data/upload/images/Product/ao-len/AWO001W9/ao-len-nam-aristino-AWO001W9-13.jpg', 'KIỂU DÁNG: CASUAL FIT\r\n\r\nCHI TIẾT:\r\n\r\n- Áo len phom Casual Fit suông rộng, thoải mái, đem đến vẻ ngoài trẻ trung và phóng khoáng.\r\n\r\n- Thiết kế cổ tròn cơ bản. Điểm nhấn của áo nằm ở việc phối đồng màu họa tiết kẻ in ngang ngực và tay áo. Áo màu sắc nổi bật, thích hợp để mặc cùng các loại quần âu, quần khaki, quần jean cho các hoàn cảnh khác nhau.\r\n\r\nCHẤT LIỆU:\r\n\r\n- Chất liệu len Acrylic nhẹ, ấm, hạn chế xù lông. Đặc biệt áo có khả năng co giãn, đàn hồi và giữ định hình tốt.  Áo kiểm soát ẩm tốt, giúp giữ ấm cơ thể nhưng không tạo cảm giác bí bách.\r\n\r\nMÀU SẮC: Đỏ 77 kẻ, Trắng 9 kẻ, Xanh lá 27 kẻ\r\n\r\nSIZE:  S – M – L – XL', 0, 1, 0, 1, 3, '2021-09-21 10:36:26', '2021-09-21 10:36:26'),
(27, 'ÁO SƠ MI DÀI TAY NAM ARISTINO ALS27501', 700000, 900000, 'https://aristino.com/Data/upload/images/Product/so-mi-dai-tay/ALS27501/ao-so-mi-nam-aristino-ALS27501-02.jpg', 'KIỂU DÁNG: SLIM FIT\r\n\r\nCHI TIẾT:\r\n\r\n- Áo sơ mi dài tay phom Slim fit\r\n\r\n- Áo thiết kế tà lượn, không túi. Màu đen trung tính, dễ kết hợp trang phục. Họa tiết kẻ caro xám tạo điểm nhấn nổi bật trên áo\r\n\r\nCHẤT LIỆU:\r\n\r\n- 49% Modal giúp áo mềm mại và thấm hút tốt.\r\n\r\n- 49% Polyester giúp quần bền màu, sắc nét, mặt vải trơn trượt, mỏng nhẹ.\r\n\r\n- 2% Cotton giúp áo mềm mại, xốp nhẹ và thoáng khí.\r\n\r\nMÀU SẮC: Đen kẻ caro xám\r\n\r\nSIZE: 38 - 39 - 40 - 41 - 42 - 43', 0, 0, 0, 3, 2, '2021-09-21 10:36:26', '2021-09-21 10:36:26'),
(28, 'ÁO SƠ MI DÀI TAY NAM ARISTINO ALS21901', 800000, 900000, 'https://aristino.com/Data/upload/images/Product/so-mi-dai-tay/ALS21901/ao-so-mi-nam-aristino-ALS21901-05.jpg', 'KIỂU DÁNG: REGULAR FIT\r\n\r\nCHI TIẾT:\r\n\r\n- Áo sơ mi dài tay phom dáng regular fit suông vừa, không ôm sát cơ thể, tạo sự thoải mái cho người mặc\r\n\r\n- Được thiết kế cơ bản với tà lượn, túi ngực tiện lợi và , họa tiết trắng kẻ sọc xanh đem lại hình ảnh ấn tượng cho các quý ông Aristino.\r\n\r\nCHẤT LIỆU:\r\n\r\nChất liệu 100% Polyester cao cấp. Sử dụng công nghệ dệt kim đan dọc giúp vải vừa có khả năng co giãn nhẹ vừa đứng dáng, xốp nhẹ, mềm mại, không nhăn nhàu, thấm hút mồ hôi và khô nhanh mang đến sự thoáng mát, dễ chịu cho người mặc.\r\n\r\nMÀU SẮC: Trắng kẻ sọc xanh\r\n\r\nSIZE: 38 - 39 - 40 - 41 - 42 - 43 - 44', 0, 0, 0, 3, 1, '2021-09-28 16:52:50', '2021-09-28 16:52:50'),
(29, 'ÁO SƠ MI NAM DÀI TAY ARISTINO ALS22001', 350000, 700000, 'https://aristino.com/Data/upload/images/Product/so-mi-dai-tay/ALS22001/ao-so-mi-nam-aristino-ALS22001-03.jpg', 'KIỂU DÁNG: SLIM FIT\r\n\r\nCHI TIẾT:\r\n\r\n- Áo sơ mi dài tay dáng Slim fit ôm vừa vặn cơ thể.\r\n\r\n- Thiết kế tà lượn, không túi. Họa tiết kẻ lịch lãm kết hợp gam màu xanh tím than nam tính\r\n\r\nCHẤT LIỆU:\r\n\r\n- 50% Modal giúp áo mềm mại và thấm hút tốt.\r\n\r\n- 50% Polyspun mang đến khả năng đàn hồi tự nhiên và ít nhăn co trong suốt quá trình sử dụng.\r\n\r\nMÀU SẮC: Xanh tím than\r\n\r\nSIZE: 38-39-40-41-42-43', 0, 0, 0, 1, 1, '2021-09-21 10:36:26', '2021-09-21 10:36:26'),
(30, 'ÁO SƠ MI DÀI TAY NAM ARISTINO ALS26901', 669000, 700000, 'https://aristino.com/Data/upload/images/Product/so-mi-dai-tay/ALS26901/ao-so-mi-nam-aristino-ALS26901-03.jpg', 'KIỂU DÁNG: SLIM FIT\r\n\r\nCHI TIẾT:\r\n\r\n- Áo sơ mi dài tay phom Slim fit ôm vừa vặn với cơ thể, tôn dáng người mặc.\r\n\r\n- Áo thiết kế tà lượn, không túi, kẻ sọc trắng trên nền vải xanh tinh tế, tạo điểm nhấn độc đáo, đem lại vẻ ngoài lịch lãm, nam tính.\r\n\r\nCHẤT LIỆU:\r\n\r\n- 50% Modal giúp áo mềm mại và thấm hút tốt.\r\n\r\n- 50% Polyspun mang đến khả năng đàn hồi tự nhiên và ít nhăn co trong suốt quá trình sử dụng.\r\n\r\nMÀU SẮC: Xanh kẻ sọc\r\n\r\nSIZE: 38 - 39 - 40 - 41 - 42 - 43', 0, 0, 0, 3, 1, '2021-10-19 11:37:17', '2021-10-19 11:38:07'),
(31, 'ÁO SƠ MI DÀI TAY NAM ARISTINO ALS27501', 980000, 1200000, 'https://aristino.com/Data/upload/images/Product/so-mi-dai-tay/ALS27501/ao-so-mi-nam-aristino-ALS27501-02.jpg', 'KIỂU DÁNG: SLIM FIT\r\n\r\nCHI TIẾT:\r\n\r\n- Áo sơ mi dài tay phom Slim fit\r\n\r\n- Áo thiết kế tà lượn, không túi. Màu đen trung tính, dễ kết hợp trang phục. Họa tiết kẻ caro xám tạo điểm nhấn nổi bật trên áo\r\n\r\nCHẤT LIỆU:\r\n\r\n- 49% Modal giúp áo mềm mại và thấm hút tốt.\r\n\r\n- 49% Polyester giúp quần bền màu, sắc nét, mặt vải trơn trượt, mỏng nhẹ.\r\n\r\n- 2% Cotton giúp áo mềm mại, xốp nhẹ và thoáng khí.\r\n\r\nMÀU SẮC: Đen kẻ caro xám\r\n\r\nSIZE: 38 - 39 - 40 - 41 - 42 - 43', 0, 0, 0, 3, 2, '2021-09-21 10:36:26', '2021-09-21 10:36:26'),
(32, 'QUẦN ÂU NAM ARISTINO ATR03601', 999000, 1100000, 'https://aristino.com/Data/upload/images/Product/quan-au/ATR03601/quan-au-nam-aristino-ATR03601-12.jpg', 'KIỂU DÁNG: REGULAR FIT\r\n\r\nCHI TIẾT:\r\n\r\n- Quần âu phom Regular fit ôm vừa, tôn dáng người mặc.\r\n\r\n- Quần thiết kế họa tiết kẻ thời trang, túi chéo 2 bên, màu sắc trung tính dễ dàng kết hợp cùng nhiều loại trang phục khác nhau.\r\n\r\nCHẤT LIỆU:\r\n\r\n- 75% Polyester giúp quần bền màu, sắc nét, mặt vải trơn trượt, mỏng nhẹ.\r\n\r\n- 25% Rayon giúp quần có độ mềm mại, mát mẻ và bay rũ tự nhiên.\r\n\r\nMÀU SẮC: Xám 38 kẻ, Đen 1 kẻ, Xanh tím than 9 kẻ\r\n\r\nSIZE: 29 - 30 - 31 - 32 - 33 - 34 - 35', 0, 1, 0, 1, 1, '2021-09-21 10:36:26', '2021-09-21 10:36:26'),
(33, 'QUẦN ÂU NAM ARISTINO ATR03001', 1500000, 1600000, 'https://aristino.com/Data/upload/images/Product/quan-au/ATR03001/quan-au-nam-aristino-ATR03001-02.jpg', 'KIỂU DÁNG: SLIM FIT\r\n\r\nCHI TIẾT:\r\n\r\n- Quần âu phom dáng Slim fit ôm vừa vặn với hình thể người mặc, mang lại vẻ trẻ trung, nam tính.\r\n\r\n- Quần thiết kế họa tiết kẻ tinh tế, đem đến diện mạo chỉn chu, lịch lãm khi mặc. Gam màu xám trung tính, dễ kết hợp với nhiều loại trang phục, nhiều phong cách khác nhau.\r\n\r\nCHẤT LIỆU:\r\n\r\n- 59% Polyester giúp quần bền màu, sắc nét, mặt vải trơn trượt, mỏng nhẹ.\r\n\r\n- 40% Rayon giúp quần có độ mềm mại, mát mẻ và bay rũ tự nhiên.\r\n\r\n- 1% Spandex tạo độ co giãn nhẹ.\r\n\r\nMÀU SẮC: Xám 32 kẻ\r\n\r\nSIZE: 29 - 30 - 31 - 32 - 33 - 34 - 35', 0, 0, 0, 1, 5, '2021-09-21 10:36:26', '2021-09-21 10:36:26'),
(34, 'QUẦN ÂU NAM ARISTINO ATR03801', 1570000, 1650000, 'https://aristino.com/Data/upload/images/Product/quan-au/ATR03801/quan-au-nam-aristino-ATR03801-01.jpg', 'KIỂU DÁNG: SLIM FIT\r\n\r\nCHI TIẾT:\r\n\r\n- Quần âu phom Slim fit ôm vừa vặn với cơ thể\r\n\r\n- Quần màu cơ bản, dễ kết hợp trang phục, họa tiết kẻ thời trang, nam tính. Thiết kế túi xẻ 2 bên, túi cài sau tiện lợi.\r\n\r\nCHẤT LIỆU:\r\n\r\n- 66% Polyester giúp quần bền màu, sắc nét, mặt vải trơn trượt, mỏng nhẹ.\r\n\r\n- 27% Rayon giúp quần có độ mềm mại, mát mẻ và bay rũ tự nhiên.\r\n\r\n- 7% Spandex tạo độ co giãn nhẹ.\r\n\r\nMÀU SẮC: Xanh tím than 32 kẻ\r\n\r\nSIZE: 29 - 30 - 31 - 32 - 33 - 34 - 35', 0, 1, 0, 3, 5, '2021-09-21 10:36:26', '2021-09-21 10:36:26'),
(35, 'QUẦN ÂU NAM ARISTINO ATR03601', 695000, 700000, 'https://aristino.com/Data/upload/images/Product/quan-au/ATR03601/quan-au-nam-aristino-ATR03601-12.jpg', 'KIỂU DÁNG: REGULAR FIT\r\n\r\nCHI TIẾT:\r\n\r\n- Quần âu phom Regular fit ôm vừa, tôn dáng người mặc.\r\n\r\n- Quần thiết kế họa tiết kẻ thời trang, túi chéo 2 bên, màu sắc trung tính dễ dàng kết hợp cùng nhiều loại trang phục khác nhau.\r\n\r\nCHẤT LIỆU:\r\n\r\n- 75% Polyester giúp quần bền màu, sắc nét, mặt vải trơn trượt, mỏng nhẹ.\r\n\r\n- 25% Rayon giúp quần có độ mềm mại, mát mẻ và bay rũ tự nhiên.\r\n\r\nMÀU SẮC: Xám 38 kẻ, Đen 1 kẻ, Xanh tím than 9 kẻ\r\n\r\nSIZE: 29 - 30 - 31 - 32 - 33 - 34 - 35', 0, 0, 0, 1, 1, '2021-10-12 22:47:23', '2021-09-21 10:36:26'),
(37, 'QUẦN THU ĐÔNG NAM ARISTINO APA008W1', 1800000, 0, 'https://aristino.com/Data/upload/images/Product/quan-the-thao/APA008W1/quan-thu-dong-nam-aristino-APA008W1-07.jpg', 'KIỂU DÁNG: REGULAR FIT\r\n\r\nCHI TIẾT:\r\n\r\n- Quần dài thu - đông phom dáng Regular fit có độ ôm vừa phải, đem lại cảm giác thoải mái và tự tin trong mọi hoàn cảnh.\r\n\r\n- Thiết kế basic, dệt kim tinh tế tạo kết cấu bề mặt vải sắc nét, giữ phom dáng tối đa phù hợp với nhiều dáng người.\r\n\r\nCHẤT LIỆU:\r\n\r\n- 57% Cotton giúp quần mềm mại, xốp nhẹ và thoáng khí.\r\n\r\n- 38% Polyester cho bề mặt vải bóng mịn, sắc nét, ít nhăn co.\r\n\r\n- 5% Spandex tạo độ co giãn nhẹ.\r\n\r\nMÀU SẮC: Xám 62MF, Xanh tím than 8\r\n\r\nSIZE: S - M - L - XL - XXL', 0, 0, 0, 1, 2, '2021-10-19 11:37:17', '2021-10-19 11:37:17'),
(51, 'Ví nam 123', 1000000, 500000, 'ao-polo-nam-aristino-APS036S1-02.jpg', 'jhgjhghughj', 0, 0, 0, 2, 3, '2021-12-08 07:41:54', '2021-12-08 07:58:56');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product_categories`
--

CREATE TABLE `product_categories` (
  `id` int(11) NOT NULL,
  `id_category` int(11) NOT NULL,
  `id_product` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product_categories`
--

INSERT INTO `product_categories` (`id`, `id_category`, `id_product`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 19),
(4, 1, 20),
(5, 1, 21),
(6, 1, 22),
(7, 1, 23),
(8, 1, 24),
(9, 7, 25),
(10, 7, 26),
(11, 1, 27),
(12, 1, 28),
(13, 1, 31),
(14, 1, 29),
(15, 1, 30),
(16, 29, 32),
(17, 29, 33),
(18, 29, 34),
(19, 1, 31),
(20, 29, 35),
(21, 6, 37),
(35, 17, 51);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product_images`
--

CREATE TABLE `product_images` (
  `id` int(11) NOT NULL,
  `file` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_product` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product_images`
--

INSERT INTO `product_images` (`id`, `file`, `id_product`) VALUES
(1, 'https://aristino.com/Data/upload/images/Product/so-mi-dai-tay/ALS35101/ao-so-mi-nam-aristino-ALS35101-02.jpg\r\n', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `slide_show`
--

CREATE TABLE `slide_show` (
  `id` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `slide_show`
--

INSERT INTO `slide_show` (`id`, `image`) VALUES
(1, 'https://images.unsplash.com/photo-1512437011370-3c5a37a2190f?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80'),
(2, 'https://images.unsplash.com/photo-1495366691023-cc4eadcc2d7e?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80'),
(3, 'https://images.unsplash.com/photo-1516290260555-781710098c93?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=464&q=80'),
(4, 'https://images.unsplash.com/photo-1520975954732-35dd22299614?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80'),
(5, 'https://media.istockphoto.com/photos/rural-landscape-in-late-summer-picture-id1224621364?b=1&k=20&m=1224621364&s=170667a&w=0&h=WOUcG0kO2kklLZ6Xa_bc01Dc9sebL9HemOaN-z7nz0Y=');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `the_order`
--

CREATE TABLE `the_order` (
  `id` int(11) NOT NULL,
  `id_users` int(11) DEFAULT 0,
  `fullname` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tel` int(11) NOT NULL,
  `note` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `total` float NOT NULL,
  `status` tinyint(4) DEFAULT 0 COMMENT '0.Đơn hàng mới 1.Đang xử lý 2.Đang giao hàng 3.Đang xử lý',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `the_order`
--

INSERT INTO `the_order` (`id`, `id_users`, `fullname`, `email`, `address`, `tel`, `note`, `total`, `status`, `created_at`, `updated_at`) VALUES
(58, 4, 'Tran Hung Dao', 'thd@gmail.com', 'Dong Nai', 1345678, 'oke', 1570000, 0, '2021-12-07 06:55:55', '2021-12-07 06:55:55'),
(59, 4, 'Tran Hung Dao', 'thd@gmail.com', 'Dong Nai', 1345678, 'Cẩn thận', 2676000, 0, '2021-12-07 10:54:37', '2021-12-07 10:54:37'),
(60, 4, 'Tran Hung Dao', 'thd@gmail.com', 'Dong Nai', 1345678, '', 1668000, 0, '2021-12-07 10:33:38', '2021-12-07 10:33:38'),
(61, 1, 'Minh Thành', 'mt@gmail.com', 'Đà Nẵng', 852097564, '', 669000, 0, '2021-12-07 16:59:41', '2021-12-07 16:59:41'),
(62, 2, 'admin', 'admin@gmail.com', 'Hải Phòng', 166489, '', 3670000, 0, '2021-12-08 08:24:02', '2021-12-08 08:24:02');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fullname` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tel` int(11) NOT NULL,
  `email` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` enum('admin','seller','customer') COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Not-image',
  `address` varchar(70) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `fullname`, `tel`, `email`, `password`, `role`, `avatar`, `address`) VALUES
(1, 'Minh Thành', 852097564, 'mt@gmail.com', '123', 'seller', '122364581_2762542987334611_1632126498575074825_n.jpg', 'Đà Nẵng'),
(2, 'admin', 166489, 'admin@gmail.com', '123', 'admin', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSy7nFdX1g_CVR4WyP5LgKOGytP0J8PE53_RQ&usqp=CAU', 'Hải Phòng'),
(3, 'Bảo Hân', 87946132, 'bh@gmail.com', '1234', 'seller', 'https://chiase24.com/wp-content/uploads/2020/04/Tong-hop-hinh-anh-con-heo-dep-nhat-10-1.jpg', 'HCM'),
(4, 'Tran Hung Dao', 13456789, 'thd@gmail.com', '123', 'customer', 'tranhungdao.jpg', 'Thang Long'),
(5, 'Quang Trung', 1233456, 'qt@gmail.com', '12345', 'customer', '', 'Quy Nhơn'),
(6, 'Nguyễn Văn B', 123345678, 'b@gmail.com', '123', 'customer', '', 'Quy Nhơn');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_details_ibfk_1` (`id_product`),
  ADD KEY `id_order` (`id_order`),
  ADD KEY `id_the_order` (`id_the_order`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_users` (`id_users`),
  ADD KEY `id_brand` (`id_brand`);

--
-- Chỉ mục cho bảng `product_categories`
--
ALTER TABLE `product_categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_category` (`id_category`),
  ADD KEY `id_product` (`id_product`);

--
-- Chỉ mục cho bảng `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_product` (`id_product`);

--
-- Chỉ mục cho bảng `slide_show`
--
ALTER TABLE `slide_show`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `the_order`
--
ALTER TABLE `the_order`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `brand`
--
ALTER TABLE `brand`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT cho bảng `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT cho bảng `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT cho bảng `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `slide_show`
--
ALTER TABLE `slide_show`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `the_order`
--
ALTER TABLE `the_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `order_details_ibfk_1` FOREIGN KEY (`id_product`) REFERENCES `product` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `order_details_ibfk_2` FOREIGN KEY (`id_order`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `order_details_ibfk_3` FOREIGN KEY (`id_the_order`) REFERENCES `the_order` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`id_users`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `product_ibfk_2` FOREIGN KEY (`id_brand`) REFERENCES `brand` (`id`);

--
-- Các ràng buộc cho bảng `product_categories`
--
ALTER TABLE `product_categories`
  ADD CONSTRAINT `product_categories_ibfk_1` FOREIGN KEY (`id_category`) REFERENCES `category` (`id`),
  ADD CONSTRAINT `product_categories_ibfk_2` FOREIGN KEY (`id_product`) REFERENCES `product` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `product_images`
--
ALTER TABLE `product_images`
  ADD CONSTRAINT `product_images_ibfk_1` FOREIGN KEY (`id_product`) REFERENCES `product` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
