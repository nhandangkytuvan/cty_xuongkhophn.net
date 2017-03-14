-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 14, 2017 at 01:56 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cty_xuongkhophnnet`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `comment_id` bigint(20) UNSIGNED NOT NULL,
  `post_id` bigint(20) UNSIGNED NOT NULL,
  `address_ip` varchar(255) NOT NULL,
  `comment_detail` text,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `post_id` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `term_id` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `media_file` varchar(255) NOT NULL,
  `media_name` varchar(255) DEFAULT NULL,
  `media_alias` varchar(255) DEFAULT NULL,
  `media_folder` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`id`, `user_id`, `post_id`, `term_id`, `media_file`, `media_name`, `media_alias`, `media_folder`, `created_at`, `updated_at`) VALUES
(1, 1, 0, 3, 'nguyen-nhan-gay-dau-dot-song-lung-1487749081.jpeg', 'Nguyên nhân gây đau đốt sống lưng', 'nguyen-nhan-gay-dau-dot-song-lung', NULL, '2017-02-22 07:41:06', '2017-02-22 00:41:06'),
(2, 1, 0, 7, 'viem-khop-goi-1487753609.jpeg', 'Viêm khớp gối', 'viem-khop-goi', NULL, '2017-02-22 01:53:29', '2017-02-22 01:53:29'),
(3, 1, 0, 7, 'viem-khop-goi-1487753634.jpeg', 'Viêm khớp gối', 'viem-khop-goi', NULL, '2017-02-22 01:53:54', '2017-02-22 01:53:54'),
(4, 1, 0, 8, 'viem-khop-quan-vai-1487753667.jpeg', 'Viêm khớp quan vai', 'viem-khop-quan-vai', NULL, '2017-02-22 01:54:27', '2017-02-22 01:54:27'),
(5, 1, 0, 0, 'trieu-chung-phong-thap-1487754075.jpeg', 'Triệu chứng phong thấp', 'trieu-chung-phong-thap', NULL, '2017-02-22 02:01:15', '2017-02-22 02:01:15'),
(6, 1, 0, 30, 'gioi-thieu-1487831774.jpeg', 'Giới thiệu', 'gioi-thieu', NULL, '2017-02-22 23:36:14', '2017-02-22 23:36:14'),
(7, 1, 0, 30, 'gioi-thieu-1487831788.jpeg', 'Giới thiệu', 'gioi-thieu', NULL, '2017-02-22 23:36:28', '2017-02-22 23:36:28'),
(8, 1, 0, 30, 'anh-quang-cao-1488165860.png', 'Ảnh quảng cáo', 'anh-quang-cao', NULL, '2017-02-26 20:24:20', '2017-02-26 20:24:20');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `term_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `post_status` tinyint(1) NOT NULL,
  `post_name` varchar(255) NOT NULL,
  `post_alias` varchar(255) NOT NULL,
  `post_avatar` varchar(255) DEFAULT NULL,
  `post_description` text NOT NULL,
  `post_detail` longtext NOT NULL,
  `post_keyword` text,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `term_id`, `user_id`, `post_status`, `post_name`, `post_alias`, `post_avatar`, `post_description`, `post_detail`, `post_keyword`, `created_at`, `updated_at`) VALUES
(2, 30, 1, 1, 'Địa chỉ phòng khám', 'dia-chi-phong-kham', 'nguyen-nhan-gay-benh-dau-dot-song-co-1487752800.jpeg', 'Địa chỉ phòng khám', '<div style="text-align: center;"><img src="../../../public/img/gioi-thieu-1487831788.jpeg" width="768" height="290" />&nbsp;</div>', '', '2017-02-25 06:34:33', '2017-02-24 23:34:33'),
(3, 30, 1, 1, 'GIỚI THIỆU CHUYÊN KHOA XƯƠNG KHỚP PHÒNG KHÁM NHÂN ÁI', 'gioi-thieu-chuyen-khoa-xuong-khop-phong-kham-nhan-ai', NULL, '', '<p style="text-align: center;"><span style="font-size: 16px;"><strong><a style="color: #ff0000;" href="http://drt.zoosnet.net/lr/chatpre.aspx?id=drt84001515&amp;lng=en&amp;r=&amp;rf1=http%3A//khoaxuongkhop&amp;rf2=.net/&amp;p=http%3A//khoaxuongkhop.net/phong-kham-nhan-ai/gioi-thieu-chuyen-khoa-xuong-khop-phong-kham-nhan-ai.html&amp;cid=1483607673213378298340&amp;sid=1487813481318352102953" target="_blank" rel="noopener noreferrer"><span style="font-family: arial, helvetica, sans-serif;">&gt;&gt;&gt;Nguồn : Chuy&ecirc;n khoa xương khớp Nh&acirc;n &Aacute;i&nbsp; cick để đăng nhập v&agrave;o ph&ograve;ng kh&aacute;m &lt;&lt;&lt;</span></a></strong></span></p>\r\n<p style="text-align: justify;"><strong><span style="font-size: 14px; font-family: arial, helvetica, sans-serif;">Chuy&ecirc;n khoa xương khớp ph&ograve;ng kh&aacute;m Nh&acirc;n &Aacute;i l&agrave; cơ sở chuy&ecirc;n điều trị c&aacute;c bệnh về phong thấp, xương khớp. Với nhiều năm kinh nghiệm trong nghi&ecirc;m cứu, kh&aacute;m v&agrave; điều trị bệnh xương khớp, tổng hợp được nhiều phương ph&aacute;p điều trị cũng như c&aacute;c b&agrave;i thuốc hay trong điều trị bệnh xứng đ&aacute;ng l&agrave; một cơ sở chuy&ecirc;n nghi&ecirc;p, kh&aacute;m v&agrave; điều trị c&aacute;c bệnh: khoa phong thấp, gai xương, khoa xương khớp, phục hồi chức năng v&agrave; c&aacute;c khoa điều trị kh&aacute;c , Chuy&ecirc;n s&acirc;u trong điều trị vi&ecirc;m khớp phong thấp, vi&ecirc;m khớp dạng thấp, vi&ecirc;m khớp do g&uacute;t, vi&ecirc;m cột sống d&iacute;nh khớp, tho&aacute;t vị đĩa đệm đốt sống lưng, vi&ecirc;m khớp vai, chẩn đo&aacute;n v&agrave; điều trị c&aacute;c bệnh về xương khớp, l&agrave; cơ sở y tế chuy&ecirc;n nghiệp trong y tế l&acirc;m s&agrave;ng, nghi&ecirc;n cứu, ph&ograve;ng ngừa c&aacute;c bệnh về xương khớp.</span></strong></p>\r\n<p style="text-align: justify;"><span style="font-size: 14px; font-family: arial, helvetica, sans-serif;">Nhiều năm qua, ki&ecirc;n tr&igrave; thực hiện mục ti&ecirc;u ph&ograve;ng kh&aacute;m c&ocirc;ng &iacute;ch, với c&aacute;c mục ti&ecirc;u &ldquo;đặt chất lượng y tế l&ecirc;n tr&ecirc;n hết, đặt an to&agrave;n l&agrave; cơ sở, lấy kĩ thuật đỉnh cao l&agrave;m chủ đạo, lấy chất lượng phục vụ cao l&agrave;m t&ocirc;n chỉ, lấy th&agrave;nh t&iacute;n l&agrave;m gốc&rdquo; hội nhập cơ chế quản l&iacute; ti&ecirc;n tiến hiện đại, to&agrave;n thể nh&acirc;n vi&ecirc;n đồng t&acirc;m x&acirc;y dựng &ldquo;đạt được niềm tin của c&aacute;c cơ quan chức năng v&agrave; cả người d&acirc;n&rdquo; tạo n&ecirc;n một thương hiệu trong kh&aacute;m chữa bệnh. Nỗ lực để tạo ra một ph&ograve;ng kh&aacute;m chuy&ecirc;n khoa, hiệu đại trong điều trị c&aacute;c bệnh xương khớp c&oacute; tập hợp đầy đủ c&aacute;c y&ecirc;u tố như: &ldquo;thiết bị đi đầu, quản l&iacute; quy phạm, chuy&ecirc;n khoa đặc sắc, phục vụ chuy&ecirc;n nghiệp&rdquo;.</span></p>\r\n<p style="text-align: center;"><img class="alignnone wp-image-662" src="http://khoaxuongkhop.net/wp-content/uploads/2017/01/slide-nghien-cuu-pp-moi.jpg" sizes="(max-width: 535px) 85vw, 535px" srcset="http://khoaxuongkhop.net/wp-content/uploads/2017/01/slide-nghien-cuu-pp-moi.jpg 1020w, http://khoaxuongkhop.net/wp-content/uploads/2017/01/slide-nghien-cuu-pp-moi-300x130.jpg 300w, http://khoaxuongkhop.net/wp-content/uploads/2017/01/slide-nghien-cuu-pp-moi-768x333.jpg 768w" alt="slide-nghien-cuu-pp-moi" width="535" height="232" /></p>\r\n<p style="text-align: justify;"><span style="font-size: 14px; font-family: arial, helvetica, sans-serif;">&nbsp;Ph&ograve;ng kh&aacute;m ch&uacute; trọng khoa học kĩ thuật đẩy mạnh sự ph&aacute;t triển của ph&ograve;ng kh&aacute;m, đội ngũ nh&acirc;n vi&ecirc;n c&oacute; năng lực, ph&ograve;ng kh&aacute;m hội tụ đội ngũ b&aacute;c sĩ chuy&ecirc;n c&aacute;c bệnh về thấp khớp, với c&aacute;c thiết bị kiểu mới được nhập khẩu c&oacute; độ ch&iacute;nh x&aacute;c cao, tạo n&ecirc;n chỗ đứng vững chắc cho ph&ograve;ng kh&aacute;m, ph&ograve;ng kh&aacute;m cũng đặc biệt mời đội ngũ b&aacute;c sĩ c&oacute; danh tiếngvới nhiều năm kinh nghiệm trong điều trị l&acirc;m s&agrave;ng c&aacute;c bệnh về xương khớp đến ph&ograve;ng kh&aacute;m điều trị bệnh. To&agrave;n t&acirc;m đẩu mạnh nghi&ecirc;m cứu v&agrave; điều trị, đặc biệt l&agrave; &ldquo; <strong>Kỹ thuật x&acirc;m lấn tối thiểu ly giải m&agrave;ng bao hoạt dịch khớp</strong>&rdquo; kĩ thuật l&agrave; sự kết hợp ho&agrave;n hảo của kĩ thuật điều trị truyền thống v&agrave; nền y học phương t&acirc;y hiện đại, đưa đến một kĩ thuật điều trị chất lượng cao, đảm bảo hiệu quả điều trị, nhận được sự c&ocirc;ng nhận của đ&ocirc;ng đảo bệnh nh&acirc;n.</span></p>\r\n<p style="text-align: justify;"><span style="font-size: 14px; font-family: arial, helvetica, sans-serif; color: #ff0000;"><strong>Thiết bị an to&agrave;n đi đầu trong kh&aacute;m điều trị</strong>&nbsp;</span></p>\r\n<p style="text-align: justify;"><span style="font-size: 14px; font-family: arial, helvetica, sans-serif;">&nbsp;L&agrave; một ph&ograve;ng kh&aacute;m chuy&ecirc;n khoa hiện đại, chuy&ecirc;n khoa xương khớp ph&ograve;ng kh&aacute;m Nh&acirc;n &Aacute;i lu&ocirc;n bắt nhịp c&ugrave;ng với bước tiến của kĩ thuật, nhập khẩu c&aacute;c thiết bị điều trị c&aacute;c bệnh về xương khớp từ c&aacute;c nước như Mỹ, Đức, về phương diện điều trị bằng Đ&ocirc;ng y Trung Quốc, &aacute;p dụng c&aacute;c loại thảo dược từ thi&ecirc;n nhi&ecirc;n, t&ugrave;y v&agrave;o t&igrave;nh trạng bệnh kh&aacute;c nhau để c&oacute; c&aacute;c phương ph&aacute;p b&iacute; truyền điều trị kh&aacute;c nhau, đạt được kết quả điều trị tốt.</span></p>\r\n<p style="text-align: justify;"><span style="font-size: 14px; font-family: arial, helvetica, sans-serif;">&nbsp;Chuy&ecirc;n khoa xương khớp ph&ograve;ng kh&aacute;m Nh&acirc;n &Aacute;i lu&ocirc;n tu&acirc;n theo t&ocirc;n chỉ phục vụ &ldquo; Sức khỏe của bạn l&agrave; t&acirc;m nguyện của ch&uacute;ng t&ocirc;i&rdquo;, x&acirc;y dựng cơ sở chuy&ecirc;n nghiệp điều trị c&aacute;c bệnh về xương khớp, trở th&agrave;nh ph&ograve;ng kh&aacute;m chuy&ecirc;n khoa xương khớp h&agrave;ng đầu ở khu vực H&agrave; Nội.</span></p>\r\n<p style="text-align: justify;"><span style="font-size: 14px; font-family: arial, helvetica, sans-serif; color: #ff0000;"> <strong>&nbsp;Chi ph&iacute; c&ocirc;ng khai</strong></span></p>\r\n<p style="text-align: justify;"><span style="font-size: 14px; font-family: arial, helvetica, sans-serif;">　　&nbsp;Chuy&ecirc;n khoa xương khớp ph&ograve;ng kh&aacute;m Nh&acirc;n &Aacute;i l&agrave; cơ sở y tế chuy&ecirc;n nghiệp tại H&agrave; Nội, nghi&ecirc;m t&uacute;c thực hiện việc thu ph&iacute; theo quy định của nh&agrave; nước, ngăn chặn c&aacute;c hiện tượng n&acirc;ng cao gi&aacute; thuốc, loạn thu ph&iacute;, lạm dụng thuốc&hellip; gi&aacute; cả bằng nhau nhưng đem đến chất lượng cao hơn, bảo vệ lợi &iacute;ch của bệnh nh&acirc;n một c&aacute;ch to&agrave;n diện.</span></p>\r\n<p style="text-align: justify;"><span style="font-size: 14px; font-family: arial, helvetica, sans-serif;">Từ vấn đề &ldquo; kh&aacute;m bệnh kh&oacute;, kh&aacute;m bệnh đắt&rdquo;, mỗi th&aacute;ng ph&ograve;ng kh&aacute;m Nh&acirc;n &Aacute;i đều c&oacute; chương tr&igrave;nh ưu đ&atilde;i kh&aacute;m bệnh, để giảm bớt những g&aacute;nh nặng kinh tế cho bệnh nh&acirc;n, tuyệt đối kh&ocirc;ng để bệnh nh&acirc;n ti&ecirc;u ti&ecirc;n l&atilde;ng ph&iacute;, tất cả c&aacute;c chi ph&iacute; đều nghi&ecirc;m t&uacute;c thực hiện theo ti&ecirc;u chuẩn thu ph&iacute; quy định với c&aacute;c bệnh viện, gi&aacute; cả r&otilde; r&agrave;ng,tr&igrave;nh tự c&ocirc;ng khai.</span></p>\r\n<p style="text-align: justify;"><span style="color: #ff0000;"><strong><span style="font-size: 14px; font-family: arial, helvetica, sans-serif;">Chất lượng phục vụ</span></strong></span></p>\r\n<p style="text-align: center;"><img class="alignnone wp-image-289" src="http://khoaxuongkhop.net/wp-content/uploads/2017/01/banner.jpg" sizes="(max-width: 484px) 85vw, 484px" srcset="http://khoaxuongkhop.net/wp-content/uploads/2017/01/banner.jpg 1350w, http://khoaxuongkhop.net/wp-content/uploads/2017/01/banner-300x113.jpg 300w, http://khoaxuongkhop.net/wp-content/uploads/2017/01/banner-768x290.jpg 768w, http://khoaxuongkhop.net/wp-content/uploads/2017/01/banner-1024x387.jpg 1024w, http://khoaxuongkhop.net/wp-content/uploads/2017/01/banner-1200x453.jpg 1200w" alt="banner" width="484" height="183" /></p>\r\n<p style="text-align: justify;"><span style="font-size: 14px; font-family: arial, helvetica, sans-serif;">&Aacute;p dụng nhiều biện ph&aacute;p để cải thiện m&ocirc;i trường ph&ograve;ng kh&aacute;m, n&acirc;ng cao chất lượng m&ocirc;i trường kh&aacute;m chữa bệnh, ph&acirc;n bố khu kh&aacute;m bệnh hợp l&yacute;, c&aacute;c tầng ph&ograve;ng kh&aacute;m x&acirc;y dựng theo thiết kế mới đảm bảo ảnh s&aacute;ng, khi v&agrave;o viện được thăm hỏi động vi&ecirc;n, gi&uacute;p bệnh nh&acirc;n cảm thấy y&ecirc;n t&acirc;m; trước khi điều trị thăm kh&aacute;m kĩ c&agrave;ng, gi&uacute;p bệnh nh&acirc;n kh&ocirc;ng c&ograve;n e ngại; sau điều trị b&aacute;m s&aacute;t t&igrave;nh h&igrave;nh bệnh nh&acirc;n, gi&uacute;p bệnh nh&acirc;n cảm thấy y&ecirc;n t&acirc;m hơn; khi lấy mẫu x&eacute;t nghiệm, t&igrave;m hiểu bệnh t&igrave;nh của bệnh nh&acirc;n, để việc lấy mẫu được th&agrave;nh c&ocirc;ng ngay lần đầu; trươc khi kiểm tra hỏi thăm t&igrave;nh h&igrave;nh bệnh nh&acirc;n ,gi&uacute;p bệnh nh&acirc;n tr&aacute;nh t&igrave;nh trạng kiểm tra sai g&acirc;y tốn k&eacute;m; v&igrave; an to&agrave;n hỏi thăm bệnh nh&acirc;n th&ecirc;m một v&agrave;i c&acirc;u,gi&uacute;p bệnh nh&acirc;n tr&aacute;nh được những tổn thương ngo&agrave;i &yacute; muốn; V&igrave; t&igrave;nh trạng hồi phục của bệnh nh&acirc;n thăm hỏi th&ecirc;m với bệnh nh&acirc;n v&agrave;i c&acirc;u, gi&uacute;p bệnh nh&acirc;n c&oacute; thể tự n&acirc;ng cao khả năng chăm s&oacute;c ph&ograve;ng bệnh của m&igrave;nh; trước khi xu&aacute;t viện thăm hỏi th&ecirc;m với bệnh nh&acirc;n v&agrave;i c&acirc;u, gi&uacute;p bệnh nh&acirc;n ho&agrave;n th&agrave;nh thủ tục xuất viện được thuận lợi. N&acirc;ng cao chất lượng quy tr&igrave;nh kh&aacute;m bệnh, để tạo cho bệnh nh&acirc;n chất lượng phục vụ thuận lợi tốt hơn, thay đổi quy tr&igrave;nh đăng k&yacute; kh&aacute;m bệnh, quy tr&igrave;nh nhập viện, quy tr&igrave;nh xuất viện, v&agrave; quy tr&igrave;nh thực hiện c&aacute;c hạng mục kiểm tra, th&ocirc;ng qua việc chỉ đạo trực tiếp v&agrave; li&ecirc;n tục thực hiện sửa đổi để h&igrave;nh th&agrave;nh một ti&ecirc;u chuẩn, cung cấp chất lượng phục vụ y tế theo ti&ecirc;u chuẩn cho từng bệnh nh&acirc;n. Ch&uacute;ng t&ocirc;i sẽ kh&ocirc;ng ngừng n&acirc;ng cao, kh&ocirc;ng ngừng cải tiến, lấy sự h&agrave;i l&ograve;ng của bệnh nh&acirc;n l&agrave; mục ti&ecirc;u của ch&uacute;ng t&ocirc;i, th&uacute;c đẩy ph&ograve;ng kh&aacute;m ch&uacute;ng t&ocirc;i lớn mạnh v&agrave; li&ecirc;n tục ph&aacute;t triển.</span></p>\r\n<p style="text-align: justify;"><span style="font-size: 14px; font-family: arial, helvetica, sans-serif;">C&aacute;c b&aacute;c sĩ, y t&aacute; v&agrave; nh&acirc;n vi&ecirc;n khoa xương khớp ph&ograve;ng kh&aacute;m đa khoa Nh&acirc;n &Aacute;i lu&ocirc;n thực hiện theo t&ocirc;n chỉ <strong>&ldquo; to&agrave;n t&acirc;m to&agrave;n &yacute; v&igrave; nh&acirc;n d&acirc;n phục vụ&rdquo;</strong> để gi&agrave;nh được sự t&iacute;n nhiệm đ&ocirc;ng đảo người bệnh, lấy kỹ thuật ti&ecirc;n tiến, chất lượng phục vụ cao, m&ocirc;i trường ph&ograve;ng kh&aacute;m th&acirc;n thiện ấm &aacute;p để phục vụ bệnh nh&acirc;n to&agrave;n diện. Chủ động phục vụ cộng đồng, tập trung v&agrave;o uy t&iacute;n x&atilde; hội, tu&acirc;n thủ đạo đức nghề nghiệp, bảo vệ lợi &iacute;ch của bệnh nh&acirc;n, ki&ecirc;n tr&igrave; lấy con người l&agrave;m gốc, điều trị đ&uacute;ng bệnh, thu ph&iacute; hợp l&yacute;, phấn đấu x&acirc;y dựng thương hiệu ph&ograve;ng kh&aacute;m điều trị xương khớp uy t&iacute;n tại H&agrave; Nội</span></p>', '', '2017-02-23 07:45:42', '2017-02-23 00:45:42'),
(5, 30, 3, 0, '9 cách chữa bệnh hiệu quả', '9-cach-chua-benh-hieu-qua', NULL, 'tóm tắt', '<p>chi tiết</p>', '', '2017-02-24 02:00:53', '2017-02-24 02:00:53');

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

CREATE TABLE `setting` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `web_icon` varchar(255) DEFAULT NULL,
  `web_logo` varchar(255) DEFAULT NULL,
  `web_name` varchar(255) DEFAULT NULL,
  `web_description` text,
  `web_keyword` text,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `setting`
--

INSERT INTO `setting` (`id`, `user_id`, `web_icon`, `web_logo`, `web_name`, `web_description`, `web_keyword`, `created_at`, `updated_at`) VALUES
(1, 1, '1488939922.png', '1488939847.png', 'Khoa xương khớp - Phòng khám Nhân Ái', 'Chuyên chữa các bệnh về xương khớp', 'Chuyên chữa các bệnh về xương khớp', '2017-03-08 02:25:22', '2017-03-07 19:25:22');

-- --------------------------------------------------------

--
-- Table structure for table `term`
--

CREATE TABLE `term` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `term_id` bigint(20) UNSIGNED NOT NULL,
  `term_name` varchar(255) NOT NULL,
  `term_alias` varchar(255) NOT NULL,
  `term_order` int(11) NOT NULL,
  `term_description` text,
  `term_keyword` text,
  `term_comment` longtext,
  `term_view` longtext,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `term`
--

INSERT INTO `term` (`id`, `user_id`, `term_id`, `term_name`, `term_alias`, `term_order`, `term_description`, `term_keyword`, `term_comment`, `term_view`, `created_at`, `updated_at`) VALUES
(1, 1, 0, 'Khoa cột sống', 'khoa-cot-song', 0, 'khoa cột sống chữa các bệnh về viêm cột sống', 'khoa cột sống, viêm cột sống', NULL, NULL, '2017-02-21 20:47:53', '2017-02-23 02:01:18'),
(2, 1, 1, 'Bệnh đốt sống cổ', 'benh-dot-song-co', 0, NULL, NULL, NULL, NULL, '2017-02-21 20:51:03', '2017-02-21 20:51:03'),
(3, 1, 1, 'Bệnh đốt sống lưng', 'benh-dot-song-lung', 0, NULL, NULL, NULL, NULL, '2017-02-21 20:51:40', '2017-02-21 20:51:40'),
(4, 1, 1, 'Thoát vị đĩa đệm đốt sống lưng', 'thoat-vi-dia-dem-dot-song-lung', 0, NULL, NULL, NULL, NULL, '2017-02-22 00:50:01', '2017-02-22 00:50:01'),
(5, 1, 1, 'Hẹp ống sống', 'hep-ong-song', 0, NULL, NULL, NULL, NULL, '2017-02-22 00:50:26', '2017-02-22 00:50:26'),
(6, 1, 0, 'Khoa khớp', 'khoa-khop', 0, NULL, NULL, NULL, NULL, '2017-02-22 00:50:41', '2017-02-22 00:50:41'),
(7, 1, 6, 'Viêm khớp gối', 'viem-khop-goi', 0, NULL, NULL, NULL, NULL, '2017-02-22 00:51:01', '2017-02-22 00:51:01'),
(8, 1, 6, 'Viêm khớp vai', 'viem-khop-vai', 0, NULL, NULL, NULL, NULL, '2017-02-22 00:51:17', '2017-02-22 03:20:02'),
(10, 1, 6, 'Viêm màng hoạt dịch', 'viem-mang-hoat-dich', 0, NULL, NULL, NULL, NULL, '2017-02-22 03:20:16', '2017-02-22 03:20:16'),
(11, 1, 6, 'Hoại tử chỏm xương đùi', 'hoai-tu-chom-xuong-dui', 0, NULL, NULL, NULL, NULL, '2017-02-22 03:20:35', '2017-02-22 03:20:35'),
(12, 1, 6, 'Viêm xương khớp', 'viem-xuong-khop', 0, NULL, NULL, NULL, NULL, '2017-02-22 03:20:49', '2017-02-22 03:20:49'),
(13, 1, 0, 'Khoa đau dây thần kinh cột sống', 'khoa-dau-day-than-kinh-cot-song', 0, NULL, NULL, NULL, NULL, '2017-02-22 03:21:34', '2017-02-22 03:21:34'),
(14, 1, 13, 'Đau cổ vai lưng chân ', 'dau-co-vai-lung-chan', 0, NULL, NULL, NULL, NULL, '2017-02-22 03:21:55', '2017-02-22 03:21:55'),
(15, 1, 13, 'Viêm cơ mạc', 'viem-co-mac', 0, NULL, NULL, NULL, NULL, '2017-02-22 03:22:13', '2017-02-22 03:22:13'),
(16, 1, 13, 'Đau thần kinh tọa', 'dau-than-kinh-toa', 0, NULL, NULL, NULL, NULL, '2017-02-22 03:22:33', '2017-02-22 03:22:33'),
(17, 1, 13, 'Chứng loãng xương', 'chung-loang-xuong', 0, NULL, NULL, NULL, NULL, '2017-02-22 03:22:54', '2017-02-22 03:22:54'),
(18, 1, 13, 'Gai xương ', 'gai-xuong', 0, NULL, NULL, NULL, NULL, '2017-02-22 03:23:07', '2017-02-22 03:23:07'),
(19, 1, 13, 'Đau gót chân', 'dau-got-chan', 0, NULL, NULL, NULL, NULL, '2017-02-22 03:23:22', '2017-02-22 03:23:22'),
(20, 1, 0, 'Ngoại khoa tay chân', 'ngoai-khoa-tay-chan', 0, NULL, NULL, NULL, NULL, '2017-02-22 03:23:49', '2017-02-22 03:23:49'),
(21, 1, 20, 'Viêm bao gân', 'viem-bao-gan', 0, NULL, NULL, NULL, NULL, '2017-02-22 03:24:01', '2017-02-22 03:24:01'),
(22, 1, 20, 'Viêm gân gót chân', 'viem-gan-got-chan', 0, NULL, NULL, NULL, NULL, '2017-02-22 03:24:25', '2017-02-22 03:24:25'),
(23, 1, 0, 'Khoa thấp khớp', 'khoa-thap-khop', 0, NULL, NULL, NULL, NULL, '2017-02-22 03:24:47', '2017-02-22 03:24:47'),
(24, 1, 23, 'Viêm khớp dạng thấp', 'viem-khop-dang-thap', 0, NULL, NULL, NULL, NULL, '2017-02-22 03:25:05', '2017-02-22 03:25:05'),
(25, 1, 23, 'Viêm khớp phong thấp', 'viem-khop-phong-thap', 0, NULL, NULL, NULL, NULL, '2017-02-22 03:25:16', '2017-02-22 03:25:16'),
(26, 1, 23, 'Bệnh gút', 'benh-gut', 0, NULL, NULL, NULL, NULL, '2017-02-22 03:25:27', '2017-02-22 03:25:27'),
(27, 1, 23, 'Viêm cột sống dính khớp', 'viem-cot-song-dinh-khop', 0, NULL, 'Viêm cột sống dính khớp, viêm khớp', NULL, NULL, '2017-02-22 03:25:38', '2017-02-22 18:14:33'),
(28, 1, 0, 'Kỹ thuật chuyên nghiệp ', 'ky-thuat-chuyen-nghiep', 0, NULL, NULL, NULL, NULL, '2017-02-22 03:26:02', '2017-02-22 03:26:02'),
(29, 1, 0, 'Trường hợp hồi phục ', 'truong-hop-hoi-phuc', 0, NULL, NULL, NULL, NULL, '2017-02-22 03:26:12', '2017-02-22 03:26:12'),
(30, 1, 0, 'Phòng khám Nhân Ái', 'phong-kham-nhan-ai', 0, '', '', NULL, NULL, '2017-02-22 20:58:07', '2017-02-24 01:09:20');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_avatar` varchar(255) DEFAULT NULL,
  `user_name` varchar(255) DEFAULT NULL,
  `user_email` varchar(255) DEFAULT NULL,
  `user_group` varchar(255) NOT NULL,
  `user_block` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `user_avatar`, `user_name`, `user_email`, `user_group`, `user_block`, `created_at`, `updated_at`) VALUES
(1, 'admin', '$2y$10$.gf0KdHQ45/0iaEjhxW4yO7DS8rlAYK4P4LS0dOAqxsxMFMFiIMIG', 'pham-van-truong-1487748942.jpeg', 'Trường', 'truongbuon@hotmail.com', 'admin', 0, '2017-03-03 08:34:28', '2017-03-03 01:34:28'),
(2, 'user', '$2y$10$.gf0KdHQ45/0iaEjhxW4yO7DS8rlAYK4P4LS0dOAqxsxMFMFiIMIG', 'pham-thanh-thuy-1487754937.jpeg', 'Thúy', 'vantruong3289@gmail.com', 'bien-tap', 0, '2017-03-07 05:00:39', '2017-03-06 22:00:39'),
(3, 'seo', '$2y$10$.gf0KdHQ45/0iaEjhxW4yO7DS8rlAYK4P4LS0dOAqxsxMFMFiIMIG', NULL, 'Nhường', 'nhuong_xinh@gmail.com', 'seo', 1, '2017-03-03 09:25:27', '2017-03-03 02:25:27');

-- --------------------------------------------------------

--
-- Table structure for table `view`
--

CREATE TABLE `view` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `post_id` bigint(20) UNSIGNED DEFAULT NULL,
  `term_id` bigint(20) DEFAULT NULL,
  `view_sum` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `view`
--

INSERT INTO `view` (`id`, `post_id`, `term_id`, `view_sum`, `created_at`, `updated_at`) VALUES
(1, 3, NULL, 8, '2017-03-08 03:27:28', '2017-03-07 20:27:28'),
(2, NULL, 1, 3, '2017-03-02 03:03:51', '2017-03-01 20:03:51'),
(3, NULL, 2, 1, '2017-02-28 20:50:13', '2017-02-28 20:50:13'),
(4, NULL, 30, 2, '2017-03-04 04:11:02', '2017-03-03 21:11:02'),
(5, 2, NULL, 5, '2017-03-08 02:38:21', '2017-03-07 19:38:21'),
(6, NULL, 12, 1, '2017-02-28 20:51:04', '2017-02-28 20:51:04'),
(7, NULL, 29, 1, '2017-02-28 20:51:21', '2017-02-28 20:51:21'),
(8, NULL, 16, 1, '2017-02-28 20:51:26', '2017-02-28 20:51:26'),
(9, NULL, 28, 2, '2017-03-08 02:39:46', '2017-03-07 19:39:46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `term`
--
ALTER TABLE `term`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `view`
--
ALTER TABLE `view`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `setting`
--
ALTER TABLE `setting`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `term`
--
ALTER TABLE `term`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `view`
--
ALTER TABLE `view`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
