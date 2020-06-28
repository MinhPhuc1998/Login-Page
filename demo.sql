-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 28, 2020 lúc 12:42 PM
-- Phiên bản máy phục vụ: 10.4.13-MariaDB
-- Phiên bản PHP: 7.2.31

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
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id` int(5) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `_token` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `_token`) VALUES
(1, 'Peko', 'peko@gmail.com', '6f7ce9d616984a89251fa6886bfe6f34', ''),
(5, 'a', 'a@gmail.com', '5ea7d3de4d34b959e1fe2d536b65c59f', 'dc0518650dd01a09877c523547624f10ea6bd8ed25a0e64923d604e3717ca79dc0ac7a1f082c145d002f4348529e4b2d0ecd'),
(8, 'peko', 'pe@gmail.com', '5ea7d3de4d34b959e1fe2d536b65c59f', ''),
(9, 'd', 'd@gmail.com', '5ea7d3de4d34b959e1fe2d536b65c59f', ''),
(10, 'b', 'b@gmail.com', '5ea7d3de4d34b959e1fe2d536b65c59f', ''),
(11, 'c', 'c@gmail.com', '01dc334ee3861de321423d149e6b6d47', ''),
(14, 'e', 'e@gmail.com', '3d9a4bb73e60fefeae019914d4766e01', ''),
(15, 'l', 'e1@gmail.com', 'feab12da14a57e23a2ba62b37416e078', ''),
(16, 'r', 'r@gmail.com', 'feab12da14a57e23a2ba62b37416e078', ''),
(17, 'hihi', 'hihi@gmail.com', 'feab12da14a57e23a2ba62b37416e078', 'de2b3cbe05b29d386ab5c101ac0a0636288e322d4d385af40227c2cebac70d5b2a302a9d291d173abc3f36c340b955f6d62f'),
(18, 'phuc', 'minhphuc130298@gmail.com', 'feab12da14a57e23a2ba62b37416e078', 'bc0e5a9b91250cdb34dcd970785d469babb290402cbd24827d97829906c5575c61ddaec898791c0aa7c95924cd0ddad96039'),
(19, 'bee', 'mpbee1302@gmail.com', '9c3fe066e716fd3b8e9bd5abea6ba31b', '0da4b5320010224ec15a64ed041de96cc58c4c1a7ffb4fe6acf59019b100f21a55fd49ddef03608e96f601a2f76650f09493');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
