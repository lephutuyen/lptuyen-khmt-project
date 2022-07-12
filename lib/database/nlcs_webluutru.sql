-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th7 04, 2022 lúc 05:03 PM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `nlcs_webluutru`
--

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2021_10_09_115654_vp_user', 2),
(4, '2021_10_11_072740_vp_categories', 3),
(5, '2021_10_11_092543_vp_products', 4),
(6, '2021_10_11_125024_vp_products', 5),
(7, '2021_12_21_025734_vp_profiles', 6),
(8, '2021_12_21_070819_vp_profile', 7),
(9, '2022_06_12_044731_vp_introduce', 8),
(10, '2022_06_18_045120_vp_gallery', 9),
(11, '2022_06_24_115053_vp_dbcl', 10),
(12, '2022_06_28_052430_vp_post_cate', 11),
(13, '2022_06_29_030259_vp_information', 12);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `vp_categories`
--

CREATE TABLE `vp_categories` (
  `cate_id` int(10) UNSIGNED NOT NULL,
  `cate_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cate_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `count_post` int(11) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `vp_categories`
--

INSERT INTO `vp_categories` (`cate_id`, `cate_name`, `cate_slug`, `count_post`, `created_at`, `updated_at`) VALUES
(6, 'Sách', 'sach', 5, '2021-10-11 07:54:54', '2021-12-30 18:27:32'),
(7, 'Hội Nghị', 'hoi-nghi', 5, '2021-10-11 07:55:00', '2021-12-22 20:33:48'),
(8, 'Hội Thảo', 'hoi-thao', 5, '2021-10-11 07:55:05', '2021-12-22 20:37:04'),
(9, 'Tạp Chí', 'tap-chi', 5, '2021-10-11 07:55:09', '2021-12-22 20:41:12');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `vp_dbcl`
--

CREATE TABLE `vp_dbcl` (
  `dbcl_id` int(10) UNSIGNED NOT NULL,
  `dbcl_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dbcl_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dbcl_file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dbcl_cate` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `vp_dbcl`
--

INSERT INTO `vp_dbcl` (`dbcl_id`, `dbcl_code`, `dbcl_title`, `dbcl_file`, `dbcl_cate`, `created_at`, `updated_at`) VALUES
(12, 'Intro-01a', 'Decision No. 1031/QD-DHCT on April, 11, 2018 on the establishment of the self-assessment team in 2018 according to AUN-QA criteria', '104429594_264614868318041_1167242805699321457_n.jpg', 'Image', '2022-06-25 01:59:31', '2022-06-25 01:59:31'),
(13, 'Intro-01b', 'Decision No. 1039/QD-DHCT dated on the establishment of the self-assessment team in 2018', '278721885_5757328554321619_7360178863573945636_n.jpg', 'Image', '2022-06-25 02:02:02', '2022-06-25 02:02:02'),
(15, 'Intro-01c', 'Decision No. 1031/QD-DHCT on April, 11, 2018 on the establishment of the self-assessment team in 2018 according to AUN-QA criteria', 'Niklaus _ Wiki _ Vampire Kingdom Rp_ Amino.jpg', 'Document', '2022-07-02 20:56:41', '2022-07-02 20:56:41'),
(16, 'Intro-02d', 'Decision No. 1031/QD-DHCT on April, 11, 2018 on the establishment of the self-assessment team in 2018 according to AUN-QA criteria', 'Niklaus _ Wiki _ Vampire Kingdom Rp_ Amino.jpg', 'Document', '2022-07-02 20:57:09', '2022-07-02 20:57:09'),
(17, 'Intro-02c', 'Decision No. 1031/QD-DHCT on April, 11, 2018 on the establishment of the self-assessment team in 2018 according to AUN-QA criteria', 'Niklaus _ Wiki _ Vampire Kingdom Rp_ Amino.jpg', 'Document', '2022-07-02 20:57:21', '2022-07-02 20:57:21'),
(18, 'Intro-02e', 'Decision No. 1031/QD-DHCT on April, 11, 2018 on the establishment of the self-assessment team in 2018 according to AUN-QA criteria', 'Niklaus _ Wiki _ Vampire Kingdom Rp_ Amino.jpg', 'Document', '2022-07-02 20:57:45', '2022-07-02 20:57:45');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `vp_gallery`
--

CREATE TABLE `vp_gallery` (
  `gal_id` int(10) UNSIGNED NOT NULL,
  `gal_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gal_img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `vp_gallery`
--

INSERT INTO `vp_gallery` (`gal_id`, `gal_title`, `gal_img`, `created_at`, `updated_at`) VALUES
(2, 'Ngày hội việc làm 2022', '278721885_5757328554321619_7360178863573945636_n.jpg', '2022-06-17 23:38:52', '2022-06-18 00:33:40'),
(3, 'Khoa CNTT&TT ký MOU về hợp tác với công ty TNHH HARVEY NASH', '174257396_483591573087035_4339643421913530723_n.jpg', '2022-06-17 23:39:59', '2022-06-17 23:45:25'),
(4, 'Ngày hội Tư vấn tuyển sinh 2022', 'cantho-16462239491771198069736.jpg', '2022-06-17 23:40:13', '2022-06-17 23:40:13');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `vp_information`
--

CREATE TABLE `vp_information` (
  `info_id` int(10) UNSIGNED NOT NULL,
  `info_cate_id` int(10) UNSIGNED NOT NULL,
  `info_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `info_content` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `info_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_post` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `vp_information`
--

INSERT INTO `vp_information` (`info_id`, `info_cate_id`, `info_title`, `info_content`, `info_image`, `date_post`, `created_at`, `updated_at`) VALUES
(2, 2, 'KHOA HỌC MÁY TÍNH TEST 1', 'KHOA HỌC MÁY TÍNH TEST 1', '3-8.png', '2022-06-29 05:14:51', '2022-06-28 22:14:51', '2022-06-28 22:14:51'),
(3, 3, 'KHOA HỌC MÁY TÍNH TEST 2', 'KHOA HỌC MÁY TÍNH TEST 2', 'khmt_0.jpg', '2022-06-29 05:15:06', '2022-06-28 22:15:06', '2022-06-28 22:15:06'),
(4, 4, 'KHOA HỌC MÁY TÍNH TEST 3', 'KHOA HỌC MÁY TÍNH TEST 3', '174257396_483591573087035_4339643421913530723_n.jpg', '2022-06-29 05:15:21', '2022-06-28 22:15:21', '2022-06-28 22:15:21'),
(5, 2, 'KHOA HỌC MÁY TÍNH TEST 4', 'KHOA HỌC MÁY TÍNH TEST 4', '278721885_5757328554321619_7360178863573945636_n.jpg', '2022-06-29 12:26:20', '2022-06-29 05:26:20', '2022-06-29 05:26:20'),
(6, 3, 'KHOA HỌC MÁY TÍNH TEST 5', 'Ông Hạnh (Hưng Yên) cứ ngỡ mình đã kiểm soát lượng đường trong máu cao, nhưng đến khi đo HbA1c tới 8.5% mới tá hỏa khi biết mình vẫn có nguy cơ bị biến chứng. Nếu không phát hiện sớm, ông sẽ phải đối mặt với nhiều rủi ro chết người! Khi lượng đường trong máu cao,', '278721885_5757328554321619_7360178863573945636_n.jpg', '2022-06-29 12:26:33', '2022-06-29 05:26:33', '2022-07-02 22:41:54'),
(7, 4, 'KHOA HỌC MÁY TÍNH TEST 6', 'KHOA HỌC MÁY TÍNH TEST 6', 'K.png', '2022-06-29 12:26:48', '2022-06-29 05:26:48', '2022-06-29 05:26:48'),
(8, 2, 'KHOA HỌC MÁY TÍNH TEST 7', 'KHOA HỌC MÁY TÍNH TEST 7', '269712594_641222270657297_5122879546338336810_n.png', '2022-06-29 12:27:03', '2022-06-29 05:27:03', '2022-06-29 05:27:03'),
(9, 2, 'KHOA HỌC MÁY TÍNH TEST 8', 'KHOA HỌC MÁY TÍNH TEST 8', 'K.png', '2022-06-29 12:27:15', '2022-06-29 05:27:15', '2022-06-29 05:27:15'),
(10, 2, 'KHOA HỌC MÁY TÍNH TEST 9', 'KHOA HỌC MÁY TÍNH TEST 9', '104429594_264614868318041_1167242805699321457_n.jpg', '2022-06-29 12:27:30', '2022-06-29 05:27:30', '2022-06-29 05:27:30'),
(11, 2, 'Khoa học máy tính vippro no1', 'Ông Trang Học Lễ, sinh năm 1902 tại Diêu Trang, Huyện Hiệp, tỉnh Hà Nam, Trung Quốc hiện được bình chọn là \"Ngôi sao sống thọ\" Trung Quốc với 117 tuổi, nổi tiếng gần xa.\r\n\r\nTừ ngày 3 – 5/ 1 /2019, Hiệp hội Sức khỏe và Hiệp hội Lão khoa Trung Quốc đã tiến hành một cuộc điều tra tại chỗ. Kết quả, lão nông Trang Học Lễ là một người hiếm hoi sống thọ trên 110 tuổi ở Trung Quốc, và là người già khỏe mạnh nhất ở Trung Quốc.\r\n\r\nTheo dữ liệu của cuộc điều tra dân số lần thứ 6 ở Trung Quốc năm 2010, số người từ 100 tuổi trở lên ở Trung Quốc là 35.934, trong đó có 27.082 phụ nữ, 8852 nam.\r\n\r\nTrong danh sách người cao tuổi sống thọ được bầu chọn đa số là phụ nữ chiếm ưu thế thì năm nay, ông Trang được lựa chọn và được mệnh danh là ông già khỏe mạnh nhất Trung Quốc và ông cũng là tấm gương sáng cho cộng đồng nam giới Trung Quốc!\r\n\r\nĐừng nhìn vào số tuổi của ông Trang, thực tế cho thấy sức khỏe của ông vẫn sung sức, suy nghĩ của ông rất minh mẫn, rõ ràng, đôi mắt của ông vẫn có thể nhìn rõ, đôi tai vẫn còn có thể nghe được và về cơ bản có thể tự chăm sóc bản thân.\r\n\r\nKhông chỉ vậy, ông lão còn có kỹ năng gây ngạc nhiên - không chỉ viết thư pháp truyền thống Trung Quốc tuyệt đẹp, mà còn đọc thuộc Tam tự kinh, Kinh thi và Luận ngữ - những tác phẩm kinh điển của Trung Quốc.\r\n\r\nÔng Trang còn khoe bức thư pháp của ông viết và nói \"Người già rồi, tay run yếu, chữ viết cũng không được đẹp nữa\".\r\n\r\nNgười ta tò mò muốn biết, liệu ông Trang có cách sống đặc biệt gì không để giúp ông có được tuổi thọ đáng ngưỡng mộ như vậy?\r\n\r\n Sau đây là chia sẻ của ông về những bí quyết giúp ông có được sức khỏe. Lão nông sống đời thanh đạm, khỏe mạnh, tiền bạc cũng không đổi được sức khỏe.\r\n\r\n1. Dùy trì cuộc sống điều độ mỗi ngày\r\n\r\nCô Trương Viện, con gái thứ ba của ông Trang nói rằng, cuộc sống hàng ngày của cha cô giống như một chiếc đồng hồ: Ông thức dậy vào khoảng 7 giờ sáng, uống một tách trà sau khi thức dậy và ăn ba bữa một ngày.\r\n\r\nBan ngày, ông trò chuyện với các thành viên trong gia đình và xem TV. Ngày chợp mắt với một giấc ngủ ngắn vào buổi sáng và buổi chiều.\r\n\r\nSống điều độ và có quy luật hàng ngày là một vũ khí kỳ diệu cho sức khỏe. Kim Thế Nguyên - một \"bậc thần y quốc gia\" Trung Quốc đã từng nói: \"Chăm sóc sức khỏe mà không cần thuốc, cuộc sống điều độ và sinh hoạt có nguyên tắc là bí quyết chăm sóc sức khỏe tốt nhất.\"\r\n\r\nHãy thức dậy đúng giờ, ngủ đúng giờ, ăn đúng giờ, tập thể dục đúng giờ - để tất cả các cơ quan và hệ thống của cơ thể con người có thể hoạt động hiệu quả hơn, từ đó có thể tăng cường sức khỏe.\r\n\r\n2. Duy trì sở thích uống trà\r\n\r\nSở thích lớn nhất trong cuộc đời của ông Trang là uống trà và không uống rượu.\r\n\r\nTrong cuốn sách nổi tiếng Trung Quốc \"Trà kinhTrung Quốc\" đã được giới thiệu rằng, trà có 24 tác dụng dưỡng sinh và chăm sóc sức khỏe. Tác dụng quen thuộc nhất là làm mới, chất polyphenol trong trà và tim mạch và mạch máu não được cho là 2 yếu tố có liên quan chặt chẽ với nhau. Đây là một hoạt chất giúp tăng cường tim, giảm huyết áp và cải thiện chức năng mạch máu.\r\n\r\nLá trà cũng chứa vitamin E và các axit amin khác nhau, làm cho cơ thể có khả năng chống lão hóa.\r\n\r\n3. Chăm chỉ lao động\r\n\r\nÔng Trang rất nhiệt tình và chăm chỉ làm việc cả đời. Ông chỉ ngừng làm việc đồng áng khi gần một trăm tuổi. Sau đó, dù ông ở nhà nhưng cũng không để cho bản thân mình sống nhàn rỗi, tranh thủ và chăm chỉ làm việc nhà cùng với các thành viên khác trong gia đình.\r\n\r\nNhiều người thường phàn nàn rằng họ sống quá mệt mỏi, quá khó khăn, ghen tị với sự nhàn hạ và thư giãn của người khác và nghĩ rằng chỉ có giải trí là hạnh phúc lớn nhất trên thế giới. Nhưng có một câu nói nổi tiếng rằng: \"Nhàn rỗi thì bách bệnh sinh\" nếu chúng ta quá nhàn thì cơ thể sẽ sinh lắm bệnh, người bận rộn sẽ ít bệnh tật.\r\n\r\nNghiên cứu y học cũng chỉ ra rằng căng thẳng vừa phải có lợi cho việc tiết ra các hormone khỏe mạnh, có thể tăng cường khả năng miễn dịch của cơ thể và chống lại các kích thích và bệnh tật bên ngoài. Vì vậy, đừng để mình quá nhàn rỗi.\r\n\r\n4. Ăn uống thanh đạm, nhẹ nhàng, không ăn quá nhiều\r\n\r\nTầm quan trọng của chế độ ăn uống đối với sức khỏe của người cao tuổi phải được coi trọng và các sản phẩm chăm sóc sức khỏe đắt tiền không thể thay thế ba bữa một ngày, và sự pha trộn và đa dạng nguồn thực phẩm với số lượng hợp lý và đảm bảo an toàn thực phẩm chính là chìa khóa để khỏe mạnh.\r\n\r\nThay đổi thói quen ăn uống xấu như ăn quá mặn, nhiều dầu, đồ ngọt, ăn quá nhiều thức ăn trong từng bữa ăn. Nên duy trì thói quen ăn uống thanh đạm, giữ hương vị nhẹ, không ăn quá nhiều vì đây là cách làm cho nhiều loại bệnh mãn tính sinh ra.\r\n\r\nNhưng sự nhẹ nhàng trong ăn uống không phải là sự đơn điệu, thiếu dinh dưỡng, mà nên theo một cấu trúc chế độ ăn uống cân bằng hợp lý, với những bữa ăn ít dầu và ít muối, để vừa ngon vừa bổ dưỡng.\r\n\r\n5. Thích đọc báo, viết chữ\r\n\r\nNgoài việc trò chuyện với con gái, con rể và hàng xóm, ông Trang cũng thỉnh thoảng đọc sách, đọc báo và viết thư pháp.\r\n\r\nNgười cao tuổi cần phải siêng năng hoạt bát trong mọi việc, từ đó có thể làm cho sự kết nối giữa các tế bào thần kinh của não hoạt động và tăng lên, thúc đẩy tư duy, hiểu biết, logic, trí nhớ và các hoạt động thần kinh tiên tiến khác để giữ cho trí não trẻ, là một trong những công thức để ngăn ngừa sự lão hóa chức năng não.\r\n\r\nSở thích của người già có thể mở rộng hơn so với khi còn trẻ bạn quá bận rộn. Ví dụ như nuôi chim, sưu tập tem, câu cá, vẽ tranh, âm nhạc, trồng hoa, du lịch, cờ vua, v.v., đều có lợi để trì hoãn lão hóa não, có lợi cho sức khỏe và tuổi thọ.\r\n\r\n 6. Luôn sống lạc quan, tốt bụng với mọi người\r\n\r\nTrong mắt con gái, ông Trang luôn được xem là một ông già tốt bụng trong làng. Ông là người tốt đối với mọi người, luôn quan tâm và giúp đỡ người khác, làm những việc hữu ích.\r\n\r\nÔng không bao giờ tức giận hay tỏ ra khó chịu với bất kỳ ai. Những người khác nếu đã yêu cầu giúp đỡ, ông không bao giờ từ chối.\r\n\r\nNgười xưa có câu nói nổi tiếng rằng, người già nếu tạo ra được sự rộng rãi sẽ có cuộc sống hạnh phúc. Chỉ khi ông có việc gì đó để làm, quan tâm người khác thì ông mới có thể vui vẻ. Thay vì ở nhà và không làm gì, tốt hơn là ra ngoài và trở thành một cụ ông vui vẻ.\r\n\r\nÔng Trang thường xuyên đến những địa điểm công cộng trong làng, vừa hoạt động cơ bắp, thể dục, vừa tạo cơ hội tiếp xúc với xã hội và làm cho bộ não hoạt động thường xuyên. Điều này có thể giúp ông có được hạnh phúc khi quan tâm và giúp đỡ người khác.\r\n\r\n7. Thái độ tốt, không lo lắng về mọi thứ không cần thiết xung quanh\r\n\r\nCô con gái ông nói, \"Ông gần như cả đời có thái độ tốt, tính cách ổn định, tốt tính, gặp việc gì cũng không so đo tính toán quá nhiều, không quan tâm đến những chuyện vặt vãnh, trái tim luôn yêu đời và rộng lượng\".\r\n\r\nKhoa học đã chứng minh rằng những người có thái độ tốt sẽ khỏe mạnh hơn và sống lâu hơn. Cuộc sống không thể suôn sẻ suốt đời, mà có thành công và thất bại, hạnh phúc và đau khổ, chuẩn mực và lạc lối. Nếu chúng ta nhìn vào những thăng trầm trong cuộc sống quá nhiều, quá dằn vặt hay mệt mỏi, cuộc sống sẽ không bao giờ tĩnh tại, yên ổn và như vậy thì bạn sẽ không bao giờ có được nụ cười.\r\n\r\nCó một trái tim vui vẻ, cuộc sống ổn định bình thường là một chất bôi trơn thiết yếu cho cuộc sống khỏe mạnh và trường thọ.\r\n\r\nNhững điều ông Trang đã làm để trở thành một người sống thọ khỏe mạnh nhất Trung Quốc xem ra không quá cao siêu. Hy vọng bạn cũng sẽ làm được những điều đó và khỏe mạnh mỗi ngày.', 'cantho-16462239491771198069736.jpg', '2022-07-03 04:30:08', '2022-07-02 21:30:08', '2022-07-03 02:06:40');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `vp_introduce`
--

CREATE TABLE `vp_introduce` (
  `intro_id` int(10) UNSIGNED NOT NULL,
  `intro_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `intro_title_2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `intro_title_3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `intro_text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `intro_text_2` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `intro_text_3` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `intro_img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `vp_introduce`
--

INSERT INTO `vp_introduce` (`intro_id`, `intro_title`, `intro_title_2`, `intro_title_3`, `intro_text`, `intro_text_2`, `intro_text_3`, `intro_img`, `created_at`, `updated_at`) VALUES
(18, 'TỔNG QUAN CHƯƠNG TRÌNH', 'MỤC TIÊU ĐÀO TẠO', 'CHUẨN ĐẦU RA', 'Ngành Khoa học Máy tính thuộc nhóm ngành Máy tính và Công nghệ thông tin. Mục tiêu của chương trình ngành Khoa học Máy tính là đào tạo ra những kỹ sư có chất lượng cao, có khả năng thiết kế, xây dựng và triển khai những hệ thống phần mềm đáp ứng nhu cầu trong nước và quốc tế. Kỹ sư tốt nghiệp ngành Khoa học Máy tính cũng được trang bị những kiến thức cần thiết để có thể học tiếp cao học và tiến sỹ trong lĩnh vực Máy tính và Công nghệ thông tin.\r\n\r\nChương trình sẽ trang bị cho sinh viên kiến thức nền tảng thuộc lĩnh vực Máy tính và Công nghệ thông tin, kiến thức cốt lõi ngành Khoa học Máy tính, và kiến thức, công nghệ chuyên sâu của ngành như trí tuệ nhân tạo, bảo mật và an toàn máy tính, xử lý dữ liệu khối lượng lớn từ mạng Internet và các mạng xã hội, thiết kế và phát triển các ứng dụng cho các thiết bị di động và môi trường Web.', 'Đào tạo những kỹ sư có phẩm chất chính trị, đạo đức, có ý thức phục vụ cộng đồng, có kiến thức và năng lực thực hành nghề nghiệp tương xứng với trình độ đào tạo, có sức khỏe, đáp ứng tốt yêu cầu xây dựng và bảo vệ Tổ quốc.\r\n\r\nCác mục tiêu cụ thể như sau:\r\n\r\nCó đạo đức tốt để làm việc và có ích cho cộng đồng.\r\nCó khả năng hiện thực các hệ thống thông tin, hệ thống tri thức, và hệ thống phần mềm đáp ứng nhu cầu kinh tế xã hội.\r\nCó đủ kiến thức để có thể học sau đại học, hoặc tự bồi dưỡng để nâng cao kiến thức và kỹ năng nghề nghiệp trong môi trường cạnh tranh trong nước cũng như quốc tế.\r\nCó khả năng làm việc tốt trong các đội nhóm đa ngành.', 'Phân tích vấn đề tính toán phức tạp để áp dụng những nguyên lý của Khoa Học Máy Tính và những quy tắc liên quan để xác định ra giải pháp.\r\nThiết kế, thực thi, và đánh giá một giải pháp khoa học máy tính để thoả mãn những yêu cầu khoa học máy tính trong văn bản kỷ luật của chương trình.\r\nGiao tiếp hiệu quả trong nhiều môi trường chuyên nghiệp.\r\nNhận thức trách nhiệm nghề nghiệp và đưa ra các đánh giá về tính toán thực hành dựa trên các nguyên tắc pháp lý và đạo đức.\r\nHoạt động hiệu quả như dưới vai trò là một thành viên hoặc trưởng nhóm của một nhóm tham gia vào các hoạt động phù hợp theo quy tắc của chương trình.\r\nÁp dụng lý thuyết khoa học máy tính và các nguyên tắc cơ bản về phát triển phần mềm vào sản xuất các giải pháp.', 'cantho-16462239491771198069736.jpg', '2022-06-15 09:05:28', '2022-07-02 21:28:18');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `vp_post_cate`
--

CREATE TABLE `vp_post_cate` (
  `post_cate_id` int(10) UNSIGNED NOT NULL,
  `post_cate_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_cate_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `vp_post_cate`
--

INSERT INTO `vp_post_cate` (`post_cate_id`, `post_cate_name`, `post_cate_slug`, `created_at`, `updated_at`) VALUES
(2, 'Tin học vụ', 'tin-hoc-vu', '2022-06-28 01:36:01', '2022-06-28 01:36:01'),
(3, 'Tin học bổng', 'tin-hoc-bong', '2022-06-28 20:50:38', '2022-06-28 20:50:38'),
(4, 'Tin tuyển dụng', 'tin-tuyen-dung', '2022-06-28 20:50:43', '2022-06-28 20:50:43');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `vp_products`
--

CREATE TABLE `vp_products` (
  `prod_id` int(10) UNSIGNED NOT NULL,
  `prod_author` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prod_acticle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prod_publisher` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prod_year` int(11) NOT NULL,
  `prod_chapter` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prod_cate` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `vp_products`
--

INSERT INTO `vp_products` (`prod_id`, `prod_author`, `prod_acticle`, `prod_publisher`, `prod_year`, `prod_chapter`, `prod_cate`, `created_at`, `updated_at`) VALUES
(73, 'Prof. Henri Briand, Dr. François Poulet', 'Ph.D. in Informatics', 'LINA, Laboratory for Computer Science, Nantes University, France', 2004, 'Visualization and Support Vector Machine in Data Mining', 6, '2021-12-22 20:19:17', '2021-12-22 20:19:17'),
(74, 'Dr. François Poulet', 'Master research in Informatics', 'LINA, Laboratory for Computer Science, Nantes University, France', 2002, 'Visualization and Support Vector Machine in Data Mining', 6, '2021-12-22 20:19:50', '2021-12-22 20:19:50'),
(75, 'Dr. Philippe Massonet', 'Master in Informatics', 'IFI, Francophone Institute for Computer Science Hanoi, Vietnam', 2001, 'Aug', 6, '2021-12-22 20:21:10', '2021-12-22 20:21:10'),
(76, 'Prof. Philippe Lenca, A/Prof. Sorin Moga', 'Visiting scientist', 'Telecom-Bretagne, France.', 2013, 'DECIDE, URM 6285 Lab-STICC', 6, '2021-12-22 20:22:37', '2021-12-22 20:22:37'),
(77, 'T-N. Do', 'Training Neural Networks on Top of Support Vector Machine Models for Classifying Fingerprint Images', 'SN Computer Science', 2021, 'Vol.2(5)', 6, '2021-12-22 20:24:13', '2021-12-22 20:24:13'),
(78, 'T-N. Do, T-P. Pham, H-H. Nguyen, N-K. Pham', 'Visual Classification of Intangible Cultural Heritage Images in the Mekong Delta', 'Chapter 4 in Data Analytics for Cultural Heritage', 2021, 'pp.71-89', 7, '2021-12-22 20:25:22', '2021-12-22 20:25:22'),
(79, 'T-N. Do', 'Automatic Learning Algorithms for Local Support Vector Machines', 'SN Computer Science', 2020, 'Vol.1(1)', 7, '2021-12-22 20:26:37', '2021-12-22 20:26:37'),
(80, 'M-T. Tran-Nguyen, L-D. Bui, T-N. Do', 'Decision tree using local support vector regression for large datasets', 'Journal of Information & Telecommunication', 2020, 'Vol.4(1): 17-35, Taylor & Francis', 7, '2021-12-22 20:27:20', '2021-12-22 20:27:20'),
(81, 'P-H. Vo, T-S. Nguyen, V-T. Huynh, T-N. Do', 'A High capacity invertible steganography algorithm using 2-D histogram shifting with EDH', 'Chapter 6 in the book Digital Media Steganography: Principles, Algorithms, Advances', 2020, 'pp.99-122', 7, '2021-12-22 20:29:13', '2021-12-22 20:29:13'),
(82, 'P-H. Huynh, V-H. Nguyen, T-N. Do', 'Improvements in the large p, small n classification issue', 'SN Computer Science', 2020, 'Vol.1(4): 1-19', 7, '2021-12-22 20:33:48', '2021-12-22 20:33:48'),
(83, 'T-N. Do, F. Poulet', 'Latent-lSVM classification of very high-dimensional and large scale multi-class datasets', 'Concurrency and Computation: Practice and Experience', 2019, 'Vol.31(2):e4224', 8, '2021-12-22 20:34:37', '2021-12-22 20:34:37'),
(84, 'T-N. Do, L-D. Bui', 'Parallel learning algorithms of local support vector regression for dealing with large datasets', 'The LNCS Journal Transactions on Large-Scale Data- and Knowledge-Centered Systems', 2019, 'Vol.41:59-77', 8, '2021-12-22 20:35:18', '2021-12-22 20:35:18'),
(85, 'P-H. Huynh, V-H. Nguyen, T-N. Do', 'Novel hybrid DCNN-SVM model for classifying RNA-Sequencing gene expression data', 'Journal of Information & Telecommunication', 2019, 'Vol.3(4): 533-547', 8, '2021-12-22 20:35:52', '2021-12-22 20:35:52'),
(86, 'P-H. Huynh, V-H. Nguyen, T-N. Do', 'Enhancing gene expression classification of support vector machines with generative adversarial networks', 'Journal of Information and Communication Convergence Engineering', 2019, 'Vol.17(1):14-20', 8, '2021-12-22 20:36:26', '2021-12-22 20:36:26'),
(87, 'P-H. Vo, T-S. Nguyen, V-T. Huynh and T-N. Do', 'A Novel Reversible Data Hiding Scheme with Two-Dimensional Histogram Shifting Mechanism', 'International Journal of Multimedia Tools and Applications', 2018, 'Vol.77(21): 28777-2879', 8, '2021-12-22 20:37:04', '2021-12-22 20:37:04'),
(88, 'T-N. Do, F. Poulet', 'Larallel learning of local SVM algorithms for classifying large datasets', 'The LNCS Journal Transactions on Large-Scale Data- and Knowledge-Centered Systems', 2017, 'Vol.31:67-93', 9, '2021-12-22 20:38:05', '2021-12-22 20:55:02'),
(89, 'T-N. Do, P. Lenca, S. Lallich', 'Classifying Many-Class High Dimensional Fingerprint Datasets Using Random Forest of Oblique Decision Trees', 'Vietnam Journal of Computer Science', 2015, 'Vol.2(1): 3-12', 9, '2021-12-22 20:39:09', '2021-12-22 20:39:09'),
(90, 'T-N. Do, N-K. Pham', 'Handwritten Digit Recognition Using GIST Descriptors and Random Oblique Decision Trees', 'Advances in Intelligent Systems and Computing', 2015, 'Vol.341: 1-15', 9, '2021-12-22 20:39:46', '2021-12-22 20:39:46'),
(91, 'T-N. Doan, T-N. Do, F. Poulet', 'Large Scale Classifiers for Visual Classification Tasks', 'International Journal of Multimedia Tools and Applications', 2015, 'Vol.74(4): 1199-1224', 9, '2021-12-22 20:40:32', '2021-12-22 20:40:32'),
(92, 'T-N. Do, H-A. Le-Thi', 'Massive Classification with Support Vector Machines', 'Transactions on Computational Collective Intelligence XVIII', 2015, 'pp. 147-165', 9, '2021-12-22 20:41:12', '2021-12-22 20:41:12');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `vp_profile`
--

CREATE TABLE `vp_profile` (
  `prol_id` int(10) UNSIGNED NOT NULL,
  `prol_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prol_info` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prol_date` int(11) NOT NULL,
  `prol_sex` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prol_mail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prol_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prol_contact` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prol_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prol_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `vp_profile`
--

INSERT INTO `vp_profile` (`prol_id`, `prol_name`, `prol_info`, `prol_date`, `prol_sex`, `prol_mail`, `prol_phone`, `prol_contact`, `prol_address`, `prol_image`, `created_at`, `updated_at`) VALUES
(5, 'Minh-Thu Tran', 'A/Prof. @ Dept. of Comp. Networks', 1980, 'Female', 'tnmthu@cit.ctu.edu.vn', '+84 (0) 907 500 103', 'http://www.cit.ctu.edu.vn/~tnmthu/', '3/2 Street, Ninh Kieu District, 92100-CanTho, Viet Nam', 'tnmthu.jpg', '2021-12-22 01:59:47', '2021-12-30 18:28:31');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `vp_users`
--

CREATE TABLE `vp_users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `vp_users`
--

INSERT INTO `vp_users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', '$2y$10$WDAgqRy9CToR2EShWwA9SOOkBO02prq1OOmWU5qjFpbxjIr3y.KZy', NULL, NULL, NULL);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Chỉ mục cho bảng `vp_categories`
--
ALTER TABLE `vp_categories`
  ADD PRIMARY KEY (`cate_id`);

--
-- Chỉ mục cho bảng `vp_dbcl`
--
ALTER TABLE `vp_dbcl`
  ADD PRIMARY KEY (`dbcl_id`);

--
-- Chỉ mục cho bảng `vp_gallery`
--
ALTER TABLE `vp_gallery`
  ADD PRIMARY KEY (`gal_id`);

--
-- Chỉ mục cho bảng `vp_information`
--
ALTER TABLE `vp_information`
  ADD PRIMARY KEY (`info_id`),
  ADD KEY `vp_information_info_cate_id_foreign` (`info_cate_id`);

--
-- Chỉ mục cho bảng `vp_introduce`
--
ALTER TABLE `vp_introduce`
  ADD PRIMARY KEY (`intro_id`);

--
-- Chỉ mục cho bảng `vp_post_cate`
--
ALTER TABLE `vp_post_cate`
  ADD PRIMARY KEY (`post_cate_id`);

--
-- Chỉ mục cho bảng `vp_products`
--
ALTER TABLE `vp_products`
  ADD PRIMARY KEY (`prod_id`),
  ADD KEY `vp_products_prod_cate_foreign` (`prod_cate`);

--
-- Chỉ mục cho bảng `vp_profile`
--
ALTER TABLE `vp_profile`
  ADD PRIMARY KEY (`prol_id`);

--
-- Chỉ mục cho bảng `vp_users`
--
ALTER TABLE `vp_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `vp_users_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `vp_categories`
--
ALTER TABLE `vp_categories`
  MODIFY `cate_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT cho bảng `vp_dbcl`
--
ALTER TABLE `vp_dbcl`
  MODIFY `dbcl_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT cho bảng `vp_gallery`
--
ALTER TABLE `vp_gallery`
  MODIFY `gal_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `vp_information`
--
ALTER TABLE `vp_information`
  MODIFY `info_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `vp_introduce`
--
ALTER TABLE `vp_introduce`
  MODIFY `intro_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT cho bảng `vp_post_cate`
--
ALTER TABLE `vp_post_cate`
  MODIFY `post_cate_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `vp_products`
--
ALTER TABLE `vp_products`
  MODIFY `prod_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- AUTO_INCREMENT cho bảng `vp_profile`
--
ALTER TABLE `vp_profile`
  MODIFY `prol_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `vp_users`
--
ALTER TABLE `vp_users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `vp_information`
--
ALTER TABLE `vp_information`
  ADD CONSTRAINT `vp_information_info_cate_id_foreign` FOREIGN KEY (`info_cate_id`) REFERENCES `vp_post_cate` (`post_cate_id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `vp_products`
--
ALTER TABLE `vp_products`
  ADD CONSTRAINT `vp_products_prod_cate_foreign` FOREIGN KEY (`prod_cate`) REFERENCES `vp_categories` (`cate_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
