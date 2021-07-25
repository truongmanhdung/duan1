-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th7 25, 2021 lúc 01:50 PM
-- Phiên bản máy phục vụ: 10.4.18-MariaDB
-- Phiên bản PHP: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `duan1`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietkhachsan`
--

CREATE TABLE `chitietkhachsan` (
  `id` int(11) NOT NULL,
  `id_khachsan` int(11) NOT NULL,
  `chitiet` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `gioithieu` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tiennghi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `danhgia` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `chinhsach` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tienich` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `chitietkhachsan`
--

INSERT INTO `chitietkhachsan` (`id`, `id_khachsan`, `chitiet`, `gioithieu`, `tiennghi`, `danhgia`, `chinhsach`, `tienich`, `time`) VALUES
(2, 4, '<p style=\"box-sizing: inherit; margin-bottom: 1rem; font-family: Luxstay; color: rgb(34, 34, 34); line-height: 1.5rem !important;\"><span style=\"box-sizing: inherit; font-weight: bolder;\">Tóm tắt về The Galaxy Home Apartment</span></p><p style=\"box-sizing: inherit; margin-bottom: 1rem; font-family: Luxstay; color: rgb(34, 34, 34); line-height: 1.5rem !important;\">·Vị trí rất đẹp và thuận tiện ở quận Cầu Giấy</p><p style=\"box-sizing: inherit; margin-bottom: 1rem; font-family: Luxstay; color: rgb(34, 34, 34); line-height: 1.5rem !important;\">·Gần công viên Cầu Giấy, Lotteria, trung tâm mua sắm với môi trường ngoài trời yên tĩnh</p><p style=\"box-sizing: inherit; margin-bottom: 1rem; font-family: Luxstay; color: rgb(34, 34, 34); line-height: 1.5rem !important;\">·Bạn hoàn toàn có thể trải nghiệm những dịch vụ cao cấp tại đây</p><p style=\"box-sizing: inherit; margin-bottom: 1rem; font-family: Luxstay; color: rgb(34, 34, 34); line-height: 1.5rem !important;\"><span style=\"box-sizing: inherit; font-weight: bolder;\">Về không gian</span></p><p style=\"box-sizing: inherit; margin-bottom: 1rem; font-family: Luxstay; color: rgb(34, 34, 34); line-height: 1.5rem !important;\">·Căn hộ được thiết kế với nhiều lựa chọn bố trí hợp lý và được trang bị theo tiêu chuẩn cao cấp 4 sao với ban công riêng và cảnh quan đẹp</p><p style=\"box-sizing: inherit; margin-bottom: 1rem; font-family: Luxstay; color: rgb(34, 34, 34); line-height: 1.5rem !important;\">·Có nhiều dịch vụ tại chỗ khác nhau như giặt ủi, dịch vụ vệ sinh, Wi-Fi miễn phí tốc độ cao, an ninh 24/7</p><p style=\"box-sizing: inherit; margin-bottom: 1rem; font-family: Luxstay; color: rgb(34, 34, 34); line-height: 1.5rem !important;\">·Dịch vụ khách hàng đặc biệt được cung cấp</p>', '<p style=\"box-sizing: inherit; margin-bottom: 1rem; font-family: Luxstay; color: rgb(34, 34, 34); line-height: 1.5rem !important;\"><span style=\"box-sizing: inherit; font-weight: bolder;\">Căn hộ Deluxe 60m2 - Có ban công - Hướng nhìn thành phố</span></p><p style=\"box-sizing: inherit; margin-bottom: 1rem; font-family: Luxstay; color: rgb(34, 34, 34); line-height: 1.5rem !important;\">·Thang máy ra vào căn hộ với hệ thống thẻ khóa an ninh</p><p style=\"box-sizing: inherit; margin-bottom: 1rem; font-family: Luxstay; color: rgb(34, 34, 34); line-height: 1.5rem !important;\">·Phòng khách được thiết kế theo phong cách hiện đại với ghế sofa và khu vực ăn uống riêng</p><p style=\"box-sizing: inherit; margin-bottom: 1rem; font-family: Luxstay; color: rgb(34, 34, 34); line-height: 1.5rem !important;\">·Nhà bếp được trang bị đầy đủ với bếp điện và máy hút mùi điện, lò vi sóng, tủ lạnh, ấm điện, đồ thủy tinh, đồ sành sứ, dao kéo</p><p style=\"box-sizing: inherit; margin-bottom: 1rem; font-family: Luxstay; color: rgb(34, 34, 34); line-height: 1.5rem !important;\">·Phòng tắm được trang bị bồn tắm dài / tắm đứng và kính riêng</p><p style=\"box-sizing: inherit; margin-bottom: 1rem; font-family: Luxstay; color: rgb(34, 34, 34); line-height: 1.5rem !important;\">·Phòng ngủ có sẵn ga trải giường và két an toàn cá nhân trong phòng</p><p style=\"box-sizing: inherit; margin-bottom: 1rem; font-family: Luxstay; color: rgb(34, 34, 34); line-height: 1.5rem !important;\">·Hệ thống giải trí với TV LCD và các kênh truyền hình cáp</p><p style=\"box-sizing: inherit; margin-bottom: 1rem; font-family: Luxstay; color: rgb(34, 34, 34); line-height: 1.5rem !important;\">·Điều hòa hai chiều với bộ điều khiển nhiệt riêng</p><p style=\"box-sizing: inherit; margin-bottom: 1rem; font-family: Luxstay; color: rgb(34, 34, 34); line-height: 1.5rem !important;\">·Điện thoại</p><p style=\"box-sizing: inherit; margin-bottom: 1rem; font-family: Luxstay; color: rgb(34, 34, 34); line-height: 1.5rem !important;\">·Wi-fi</p><p style=\"box-sizing: inherit; margin-bottom: 1rem; font-family: Luxstay; color: rgb(34, 34, 34); line-height: 1.5rem !important;\">·Cơ sở vật chất phòng tắm và nhà bếp tiện nghi đến từ các nhãn hàng nổi tiếng như: Koller, Samsung, Electrolux...</p><p style=\"box-sizing: inherit; margin-bottom: 1rem; font-family: Luxstay; color: rgb(34, 34, 34); line-height: 1.5rem !important;\">·Căn hộ đều có tiện nghi sang trọng, điện thoại, kênh truyền hình cáp, TV màn hình phẳng, máy lạnh, khu vực phòng khách, máy giặt, tủ quần áo, giá treo quần áo, máy sấy tóc, phòng tắm, dép, vòi hoa sen, ghế sofa, sàn gỗ, tủ lạnh, lò vi sóng, đồ dùng nhà bếp, bàn ăn, khăn tắm, ga trải giường.</p><p style=\"box-sizing: inherit; margin-bottom: 1rem; font-family: Luxstay; color: rgb(34, 34, 34); line-height: 1.5rem !important;\"><span style=\"box-sizing: inherit; font-weight: bolder;\">Các dịch vụ khác</span></p><p style=\"box-sizing: inherit; margin-bottom: 1rem; font-family: Luxstay; color: rgb(34, 34, 34); line-height: 1.5rem !important;\">·Dịch vụ dọn phòng: 2 lần mỗi tuần</p><p style=\"box-sizing: inherit; margin-bottom: 1rem; font-family: Luxstay; color: rgb(34, 34, 34); line-height: 1.5rem !important;\">·Dịch vụ giặt đồ</p><p style=\"box-sizing: inherit; margin-bottom: 1rem; font-family: Luxstay; color: rgb(34, 34, 34); line-height: 1.5rem !important;\">·Bãi đỗ xe</p><p style=\"box-sizing: inherit; margin-bottom: 1rem; font-family: Luxstay; color: rgb(34, 34, 34); line-height: 1.5rem !important;\">·Camera an ninh 24/7</p>', '<div item=\"[object Object]\" style=\"box-sizing: inherit; color: rgb(34, 34, 34); font-family: Luxstay;\"><h4 class=\"mt--24 mb--0\" style=\"box-sizing: inherit; line-height: 1.25; margin-bottom: 1rem; font-size: 1.25rem; margin-top: 24px !important;\">Tiện ích</h4><ul class=\"list list--3 is-flex\" style=\"padding-left: 0px; list-style: none; display: flex; flex-wrap: wrap; font-size: 0.875rem; color: rgb(85, 85, 85);\"><li class=\"mt--12\" style=\"box-sizing: inherit; margin-top: 12px !important; flex-basis: 33.3333%; line-height: 2rem;\"><svg version=\"1.1\" viewBox=\"0 0 24 24\" class=\"svg-icon svg-fill\" alt=\"\" style=\"width: 24px; height: 24px;\"><g fill=\"#000\" fill-rule=\"nonzero\"><path pid=\"0\" d=\"M23.44 9.04a.502.502 0 01-.354-.146A14.9 14.9 0 0012.48 4.5 14.903 14.903 0 001.873 8.894a.5.5 0 01-.707-.707A15.896 15.896 0 0112.48 3.5c4.274 0 8.292 1.665 11.313 4.687a.5.5 0 01-.353.853z\"></path><path pid=\"1\" d=\"M20.612 11.868a.502.502 0 01-.354-.146c-4.289-4.288-11.268-4.288-15.557 0a.5.5 0 01-.707-.707c4.679-4.679 12.292-4.679 16.971 0a.5.5 0 01-.353.853z\"></path><path pid=\"2\" d=\"M17.783 14.697a.502.502 0 01-.354-.146 6.954 6.954 0 00-4.95-2.05c-1.87 0-3.627.728-4.95 2.05a.5.5 0 01-.707-.707 7.948 7.948 0 015.657-2.343c2.137 0 4.146.832 5.657 2.343a.5.5 0 01-.353.853zM12.48 20.5a2.503 2.503 0 01-2.5-2.5c0-1.378 1.122-2.5 2.5-2.5s2.5 1.122 2.5 2.5-1.122 2.5-2.5 2.5zm0-4c-.827 0-1.5.673-1.5 1.5s.673 1.5 1.5 1.5 1.5-.673 1.5-1.5-.673-1.5-1.5-1.5z\"></path></g></svg>&nbsp;<span style=\"box-sizing: inherit; margin-left: 0.75rem;\">Wifi</span></li><li class=\"mt--12\" style=\"box-sizing: inherit; margin-top: 12px !important; flex-basis: 33.3333%; line-height: 2rem;\"><svg version=\"1.1\" viewBox=\"0 0 24 24\" class=\"svg-icon svg-fill\" alt=\"\" style=\"width: 24px; height: 24px;\"><path pid=\"0\" fill=\"#000\" fill-rule=\"nonzero\" d=\"M16.293 14H8.707l-1.853 1.854a.5.5 0 01-.708-.708L7.293 14H3.5a.5.5 0 01-.5-.5v-11a.5.5 0 01.5-.5h18a.5.5 0 01.5.5v11a.5.5 0 01-.5.5h-3.793l1.147 1.146a.5.5 0 01-.708.708L16.293 14zM4 3v10h17V3H4zM3 21.5v1a.5.5 0 11-1 0V18a1.5 1.5 0 011.5-1.5h18A1.5 1.5 0 0123 18v4.5a.5.5 0 11-1 0v-1H3zm0-1h19V18a.5.5 0 00-.5-.5h-18a.5.5 0 00-.5.5v2.5zm8.5-1a.5.5 0 110-1h2a.5.5 0 110 1h-2zM5.854 5.854a.5.5 0 11-.708-.708l1-1a.5.5 0 11.708.708l-1 1zm0 3a.5.5 0 11-.708-.708l4-4a.5.5 0 11.708.708l-4 4z\"></path></svg>&nbsp;<span style=\"box-sizing: inherit; margin-left: 0.75rem;\">TV</span></li><li class=\"mt--12\" style=\"box-sizing: inherit; margin-top: 12px !important; flex-basis: 33.3333%; line-height: 2rem;\"><svg version=\"1.1\" viewBox=\"0 0 24 24\" class=\"svg-icon svg-fill\" alt=\"\" style=\"width: 24px; height: 24px;\"><path pid=\"0\" fill=\"#000\" fill-rule=\"nonzero\" d=\"M23 8.5h-2.085a1.5 1.5 0 01-2.83 0H1v4a.5.5 0 00.5.5h1v-.5A1.5 1.5 0 014 11h16a1.5 1.5 0 011.5 1.5v.5h1a.5.5 0 00.5-.5v-4zm0-1v-2a.5.5 0 00-.5-.5h-21a.5.5 0 00-.5.5v2h17.085a1.5 1.5 0 012.83 0H23zM20.5 13v-.5a.5.5 0 00-.5-.5H4a.5.5 0 00-.5.5v.5h17zm-19-9h21A1.5 1.5 0 0124 5.5v7a1.5 1.5 0 01-1.5 1.5h-21A1.5 1.5 0 010 12.5v-7A1.5 1.5 0 011.5 4zm5.886 16.182a.5.5 0 01-.772.636c-.817-.993-.817-2.086-.009-3.125.525-.674.525-1.248.009-1.875a.5.5 0 01.772-.636c.817.993.817 2.086.009 3.125-.525.674-.525 1.248-.009 1.875zm5 0a.5.5 0 01-.772.636c-.817-.993-.817-2.086-.009-3.125.525-.674.525-1.248.009-1.875a.5.5 0 01.772-.636c.817.993.817 2.086.009 3.125-.525.674-.525 1.248-.009 1.875zm5 0a.5.5 0 01-.772.636c-.817-.993-.817-2.086-.009-3.125.525-.674.525-1.248.009-1.875a.5.5 0 01.772-.636c.817.993.817 2.086.009 3.125-.525.674-.525 1.248-.009 1.875z\"></path></svg>&nbsp;<span style=\"box-sizing: inherit; margin-left: 0.75rem;\">Điều hoà</span></li><li class=\"mt--12\" style=\"box-sizing: inherit; margin-top: 12px !important; flex-basis: 33.3333%; line-height: 2rem;\"><svg version=\"1.1\" viewBox=\"0 0 24 24\" class=\"svg-icon svg-fill\" alt=\"\" style=\"width: 24px; height: 24px;\"><path pid=\"0\" fill=\"#000\" fill-rule=\"nonzero\" d=\"M15.07 11.21a4.5 4.5 0 100 6.58c-2.093-1.832-2.093-4.748 0-6.58zm.651.759c-1.628 1.432-1.628 3.63 0 5.062A4.48 4.48 0 0016.5 14.5a4.48 4.48 0 00-.779-2.531zM10 1H4.5a.5.5 0 00-.5.5V5h6V1zm1 0v4h9V1.5a.5.5 0 00-.5-.5H11zM4 6v17h16V6H4zm.5-6h15A1.5 1.5 0 0121 1.5v22a.5.5 0 01-.5.5h-17a.5.5 0 01-.5-.5v-22A1.5 1.5 0 014.5 0zM12 20a5.5 5.5 0 110-11 5.5 5.5 0 010 11zM6 3.5a.5.5 0 010-1h2a.5.5 0 010 1H6zM18 4a1 1 0 110-2 1 1 0 010 2zm-3 0a1 1 0 110-2 1 1 0 010 2z\"></path></svg>&nbsp;<span style=\"box-sizing: inherit; margin-left: 0.75rem;\">Máy giặt</span></li><li class=\"mt--12\" style=\"box-sizing: inherit; margin-top: 12px !important; flex-basis: 33.3333%; line-height: 2rem;\"><svg version=\"1.1\" viewBox=\"0 0 24 24\" class=\"svg-icon svg-fill\" alt=\"\" style=\"width: 24px; height: 24px;\"><path pid=\"0\" d=\"M7.381 0c-1.457 0-2.7 1.065-2.7 1.065a.48.48 0 10.6.75S6.438.96 7.381.96c1.226 0 2.28.855 2.28.855l.12.09V3.84H9.211a.48.48 0 00-.39.48v2.4h-.48a4.336 4.336 0 00-4.32 4.32v2.73a.492.492 0 000 .285V21.6a2.41 2.41 0 002.4 2.4h11.52a2.41 2.41 0 002.4-2.4v-7.59a.488.488 0 000-.195V11.04a4.336 4.336 0 00-4.32-4.32h-.48v-2.4a.48.48 0 00-.48-.48h-.48V1.92h.48a.483.483 0 00.422-.238.485.485 0 000-.484.483.483 0 00-.422-.238h-.855a.45.45 0 00-.15-.015.422.422 0 00-.045.015h-3.645a.45.45 0 00-.15-.015.422.422 0 00-.045.015h-.06C9.894.786 8.87 0 7.381 0zm3.36 1.92h2.88v1.92h-2.88V1.92zm-.96 2.88h4.8v1.92h-4.8V4.8zm-1.44 2.88h7.68c1.85 0 3.36 1.51 3.36 3.36v2.4h-5.805c.026-.154.045-.319.045-.48a2.888 2.888 0 00-2.88-2.88 2.888 2.888 0 00-2.88 2.88c0 .161.019.326.045.48H4.981v-2.4c0-1.85 1.51-3.36 3.36-3.36zm2.4 3.36c1.067 0 1.92.853 1.92 1.92s-.853 1.92-1.92 1.92a1.91 1.91 0 01-1.74-1.11v-.015l-.015-.03-.015-.015c-.002-.004.002-.011 0-.015l-.015-.015a1.944 1.944 0 01-.135-.72c0-1.067.853-1.92 1.92-1.92zm-5.76 3.36h3.27a2.89 2.89 0 002.49 1.44 2.89 2.89 0 002.49-1.44h6.15v7.2a1.44 1.44 0 01-1.44 1.44H6.421a1.44 1.44 0 01-1.44-1.44v-7.2zm10.08 1.44c-1.056 0-1.92.864-1.92 1.92s.864 1.92 1.92 1.92 1.92-.864 1.92-1.92-.864-1.92-1.92-1.92zm0 .96c.536 0 .96.424.96.96s-.424.96-.96.96a.952.952 0 01-.96-.96c0-.536.424-.96.96-.96zm-3.84 2.4c-.79 0-1.44.65-1.44 1.44 0 .79.65 1.44 1.44 1.44.79 0 1.44-.65 1.44-1.44 0-.79-.65-1.44-1.44-1.44zm0 .96c.27 0 .48.21.48.48s-.21.48-.48.48-.48-.21-.48-.48.21-.48.48-.48z\" fill=\"#000\" fill-rule=\"nonzero\"></path></svg>&nbsp;<span style=\"box-sizing: inherit; margin-left: 0.75rem;\">Dầu gội, dầu xả</span></li><li class=\"mt--12\" style=\"box-sizing: inherit; margin-top: 12px !important; flex-basis: 33.3333%; line-height: 2rem;\"><svg version=\"1.1\" viewBox=\"0 0 24 24\" class=\"svg-icon svg-fill\" alt=\"\" style=\"width: 24px; height: 24px;\"><path pid=\"0\" fill=\"#000\" d=\"M0 7.429C0 3.367 1.964 0 4.571 0H19.43C22.036 0 24 3.367 24 7.429c0 4.06-1.964 7.428-4.571 7.428H16v8.572a.571.571 0 01-.571.571H.57a.571.571 0 01-.57-.571v-16zm14.857 7.428H4.571c-1.394 0-2.604-.963-3.428-2.48v10.48h13.714v-8zm4.572-1.143c1.81 0 3.428-2.772 3.428-6.285 0-3.514-1.617-6.286-3.428-6.286H7.035c1.286 1.323 2.108 3.66 2.108 6.286 0 2.626-.822 4.962-2.108 6.285H19.43zm-14.858 0C6.383 13.714 8 10.942 8 7.43c0-3.514-1.617-6.286-3.429-6.286-1.81 0-3.428 2.772-3.428 6.286 0 3.513 1.617 6.285 3.428 6.285zm0-4c-1.007 0-1.714-1.06-1.714-2.285 0-1.226.707-2.286 1.714-2.286 1.008 0 1.715 1.06 1.715 2.286 0 1.225-.707 2.285-1.715 2.285zm0-1.143c.256 0 .572-.474.572-1.142 0-.669-.316-1.143-.572-1.143-.255 0-.571.474-.571 1.143 0 .668.316 1.142.571 1.142z\" fill-rule=\"evenodd\"></path></svg>&nbsp;<span style=\"box-sizing: inherit; margin-left: 0.75rem;\">Giấy vệ sinh</span></li><li class=\"mt--12\" style=\"box-sizing: inherit; margin-top: 12px !important; flex-basis: 33.3333%; line-height: 2rem;\"><svg version=\"1.1\" viewBox=\"0 0 24 24\" class=\"svg-icon svg-fill\" alt=\"\" style=\"width: 24px; height: 24px;\"><g fill-rule=\"evenodd\"><path pid=\"0\" fill-rule=\"nonzero\" d=\"M22.527 6.497h-.366v-.202c.107-1.298-.245-2.453-.993-3.254a3.18 3.18 0 00-2.443-1.024H3.945c-1.376 0-2.496 1.102-2.496 2.457v2.023h-.023C.64 6.497 0 7.127 0 7.901v.359c0 .774.64 1.403 1.426 1.403h.023v10.865c0 1.355 1.12 2.457 2.496 2.457h12.188c1.417 0 2.208-.28 2.646-.934.417-.624.421-1.51.421-2.537h1.757c.675 0 1.204-.67 1.204-1.524V9.663h.366c.787 0 1.426-.63 1.426-1.403V7.9c0-.773-.64-1.403-1.426-1.403zM1.45 8.742h-.023a.487.487 0 01-.49-.482V7.9c0-.265.22-.482.49-.482h.023v1.324zM21.225 6.36v.137H19.21c.043-.329.15-.593.314-.77a.773.773 0 01.577-.245c.39 0 .899.276 1.125.878zm-2.96 13.126c0 1.032-.019 1.686-.267 2.058-.162.242-.52.52-1.865.52H3.945c-.86 0-1.56-.69-1.56-1.536V18.05h15.88v1.435zm0-2.356H2.384v-1.98h15.88v1.98zm.572-12.028c-.307.327-.655.949-.573 2.057v7.07H2.384v-.88h4.578a.464.464 0 00.468-.46.465.465 0 00-.468-.461H2.385V4.474c0-.847.7-1.536 1.56-1.536h14.803a2.252 2.252 0 011.731.726c.298.32.513.72.638 1.18A2.001 2.001 0 0020.1 4.56c-.487 0-.935.192-1.263.541zm2.388 12.888c0 .396-.2.603-.268.603H19.2v-8.93h2.025v8.327zm1.793-9.73c0 .266-.22.482-.49.482H19.2V7.418h3.327c.27 0 .49.217.49.483v.359z\"></path><path pid=\"1\" d=\"M8.428 12.428h-.037a.464.464 0 00-.468.46c0 .255.21.461.468.461h.037a.464.464 0 00.468-.46.465.465 0 00-.468-.461z\"></path></g></svg>&nbsp;<span style=\"box-sizing: inherit; margin-left: 0.75rem;\">Khăn tắm</span></li><li class=\"mt--12\" style=\"box-sizing: inherit; margin-top: 12px !important; flex-basis: 33.3333%; line-height: 2rem;\"><svg version=\"1.1\" viewBox=\"0 0 24 24\" class=\"svg-icon svg-fill\" alt=\"\" style=\"width: 24px; height: 24px;\"><path pid=\"0\" d=\"M19.824 1.261L18.105 2.98l-3.273.399-.123.014-.096.068L2.745 12.99l-.014.014-.013.027-1.155 1.141-.303.317 8.25 8.25.317-.303 1.14-1.155.028-.014.014-.013 9.556-11.825.083-.097.014-.137.357-3.3 1.416-1.402.303-.317-2.915-2.915zm0 1.252L21.5 4.176l-.893.894-1.678-1.664.894-.894zm-1.692 1.36h.014l1.98 1.98v.014l-.234 2.324-4.056-4.056 2.296-.261zm-3.286.523l4.785 4.785-9.281 11.482-.027.04-.798.785-7.013-7.013.784-.797.042-.028 11.508-9.254zM12.11 8.824c-.555 0-1.102.235-1.526.66-.394.393-.518.844-.605 1.168-.047.17-.072.298-.138.413-.063.113-.136.23-.206.344-.345.548-.928 1.464-.206 2.186.178.179.399.3.632.344.045.233.164.45.344.632.22.22.52.344.839.344.488 0 .923-.282 1.347-.55.114-.07.23-.143.344-.206.115-.066.242-.091.412-.138.325-.087.776-.211 1.17-.605.905-.906.872-2.195-.07-3.135a2.62 2.62 0 00-.398-.33 2.62 2.62 0 00-.33-.399c-.47-.469-1.021-.728-1.609-.728zm0 .88c.337 0 .68.158.99.467.138.138.234.286.303.427.14.068.287.163.426.302.603.603.608 1.356.069 1.897-.392.392-.901.32-1.403.605-.455.26-.928.633-1.251.633a.303.303 0 01-.22-.082c-.155-.155-.143-.353.055-.55.273-.274.58-.686.825-1.046.093-.137-.028-.288-.165-.288a.148.148 0 00-.097.027c-.359.244-.773.552-1.044.825-.109.109-.217.165-.317.165a.332.332 0 01-.234-.11c-.287-.287.226-.897.55-1.471.286-.504.214-.999.606-1.389.262-.264.586-.412.907-.412zm-7.92 3.41l-.619.632.317.316.618-.632-.316-.316zm.646.646l-.632.619.316.316.632-.619-.316-.316zm.633.633l-.619.618.316.317.619-.62-.316-.316zm.632.632l-.619.633.317.316.619-.633-.317-.316zm.646.646l-.632.619.316.316.633-.619-.317-.316zm.633.633l-.619.619.316.316.62-.619-.317-.316zm.633.632l-.62.633.317.316.619-.633-.317-.316zm.646.647l-.633.618.316.317.633-.62-.316-.315zm.632.632l-.619.619.317.316.618-.619-.316-.316zm.633.633l-.619.632.316.316.619-.632-.316-.316zm.646.646l-.633.619.317.316.632-.619-.316-.316z\" fill=\"#000\" fill-rule=\"nonzero\"></path></svg>&nbsp;<span style=\"box-sizing: inherit; margin-left: 0.75rem;\">Kem đánh răng</span></li><li class=\"mt--12\" style=\"box-sizing: inherit; margin-top: 12px !important; flex-basis: 33.3333%; line-height: 2rem;\"><svg version=\"1.1\" viewBox=\"0 0 24 24\" class=\"svg-icon svg-fill\" alt=\"\" style=\"width: 24px; height: 24px;\"><g fill-rule=\"evenodd\"><path pid=\"0\" d=\"M7.2 16.902a2.105 2.105 0 01-1.654-.57 1.804 1.804 0 01-.351-1.328.393.393 0 00-.331-.443.4.4 0 00-.458.315 2.576 2.576 0 00.526 1.96c.488.564 1.251.85 2.268.85.22 0 .4-.175.4-.392a.396.396 0 00-.4-.392zm2 0h-.4c-.22 0-.4.176-.4.392 0 .217.18.392.4.392h.4c.22 0 .4-.175.4-.392a.396.396 0 00-.4-.392zm7.6-5.49c.61-.059 1.215.15 1.654.569.288.381.414.858.351 1.329a.393.393 0 00.395.455.398.398 0 00.394-.328 2.573 2.573 0 00-.526-1.959c-.488-.564-1.251-.85-2.268-.85-.22 0-.4.175-.4.392 0 .216.18.392.4.392zm-1.2-.392a.396.396 0 00-.4-.393h-.4c-.22 0-.4.176-.4.393 0 .216.18.392.4.392h.4c.22 0 .4-.176.4-.392z\"></path><path pid=\"1\" fill-rule=\"nonzero\" d=\"M2 9.451c1.104 0 2-.878 2-1.96 0-1.084-.896-1.962-2-1.962S0 6.407 0 7.49c.001 1.083.896 1.96 2 1.961zm0-3.137c.663 0 1.2.526 1.2 1.176 0 .65-.537 1.177-1.2 1.177-.663 0-1.2-.527-1.2-1.177S1.337 6.314 2 6.314zm8.8.392c0 .866.716 1.569 1.6 1.569.884 0 1.6-.703 1.6-1.57 0-.865-.716-1.568-1.6-1.568-.884 0-1.6.703-1.6 1.569zm2.4 0a.792.792 0 01-.8.784.792.792 0 01-.8-.784c0-.433.358-.784.8-.784.442 0 .8.35.8.784zM4.8 4.745c0 1.516 1.254 2.745 2.8 2.745 1.546 0 2.8-1.229 2.8-2.745S9.146 2 7.6 2c-1.546.002-2.798 1.23-2.8 2.745zm4.8 0c0 1.083-.896 1.96-2 1.96s-2-.877-2-1.96.896-1.96 2-1.96 1.999.878 2 1.96z\"></path><path pid=\"2\" d=\"M7.197 5.014a.722.722 0 01-.017-.54.39.39 0 00-.255-.495.402.402 0 00-.505.25c-.145.413-.1.867.127 1.243a1.22 1.22 0 001.053.45c.22 0 .4-.176.4-.393a.396.396 0 00-.4-.392.527.527 0 01-.403-.123z\"></path><path pid=\"3\" fill-rule=\"nonzero\" d=\"M21.6 16.118a2.38 2.38 0 00-.431.042c.02-.144.03-.29.031-.435v-3.137c-.002-1.948-1.613-3.527-3.6-3.53H6.4c-1.987.003-3.598 1.582-3.6 3.53v3.137c.002 1.949 1.613 3.528 3.6 3.53h6.54a2.397 2.397 0 002.26 1.569c.349 0 .694-.076 1.008-.224A2.4 2.4 0 0018.4 22a2.4 2.4 0 002.192-1.4c.314.148.66.224 1.008.224 1.325 0 2.4-1.054 2.4-2.353 0-1.3-1.075-2.353-2.4-2.353zm-8.8 2.353H6.4c-1.546-.002-2.798-1.23-2.8-2.746v-3.137c.002-1.515 1.254-2.743 2.8-2.745h11.2c1.546.002 2.798 1.23 2.8 2.745v3.137c0 .086-.01.17-.018.253a2.409 2.409 0 00-2.196-1.028 2.39 2.39 0 00-1.978 1.39 2.375 2.375 0 00-1.008-.222c-1.325.001-2.399 1.054-2.4 2.353zm8.8 1.568a1.598 1.598 0 01-.988-.345.406.406 0 00-.387-.059.394.394 0 00-.253.294 1.588 1.588 0 01-1.57 1.286 1.588 1.588 0 01-1.57-1.286.395.395 0 00-.253-.294.406.406 0 00-.387.059c-.28.223-.63.345-.992.345-.884 0-1.6-.702-1.6-1.568 0-.867.716-1.569 1.6-1.569.36.001.708.123.988.345.11.085.256.107.387.06a.394.394 0 00.253-.295 1.588 1.588 0 011.57-1.285c.772 0 1.433.54 1.57 1.285a.395.395 0 00.253.294c.13.048.278.026.387-.059.28-.222.63-.344.992-.345.884 0 1.6.702 1.6 1.569 0 .866-.716 1.568-1.6 1.568z\"></path></g></svg>&nbsp;<span style=\"box-sizing: inherit; margin-left: 0.75rem;\">Xà phòng tắm</span></li><li class=\"mt--12\" style=\"box-sizing: inherit; margin-top: 12px !important; flex-basis: 33.3333%; line-height: 2rem;\"><svg version=\"1.1\" viewBox=\"0 0 24 24\" class=\"svg-icon svg-fill\" alt=\"\" style=\"width: 24px; height: 24px;\"><g fill=\"none\" fill-rule=\"evenodd\"><path pid=\"0\" d=\"M0 0h24v24H0z\"></path><path pid=\"1\" fill=\"#000\" fill-rule=\"nonzero\" d=\"M17.571 3.452L6.434 2.07a5.872 5.872 0 00-.669-.038C2.586 2.03 0 4.62 0 7.805v.12a5.78 5.78 0 002.932 5.028l1.54 6.226c.17.689.599 1.27 1.206 1.636a2.639 2.639 0 002.01.304l.042-.01a2.638 2.638 0 001.637-1.206 2.639 2.639 0 00.304-2.01l-1.112-4.495 9.012-1.12a.494.494 0 00.434-.49V3.943c0-.25-.186-.46-.434-.49zM8.711 18.13c.107.433.039.88-.191 1.262-.23.381-.595.65-1.027.757l-.043.01c-.432.107-.88.04-1.26-.19a1.656 1.656 0 01-.758-1.028l-1.36-5.495a5.737 5.737 0 002.367.215l1.131-.14 1.14 4.61zm8.305-6.78L6.32 12.68A4.786 4.786 0 01.99 7.925v-.12a4.786 4.786 0 015.328-4.754L17.016 4.38v6.97z\"></path><path pid=\"2\" fill=\"#000\" fill-rule=\"nonzero\" d=\"M2.763 7.865a3.293 3.293 0 003.29 3.29 3.293 3.293 0 003.288-3.29 3.293 3.293 0 00-3.289-3.289 3.293 3.293 0 00-3.289 3.29zm5.59 0c0 1.269-1.032 2.3-2.3 2.3a2.303 2.303 0 01-2.301-2.3c0-1.268 1.032-2.3 2.3-2.3 1.269 0 2.3 1.032 2.3 2.3z\"></path><path pid=\"3\" fill=\"#000\" d=\"M19.196 6.305c.288 0 .426.155.688.476.289.356.684.843 1.455.843s1.166-.487 1.455-.843c.262-.321.4-.476.687-.476a.494.494 0 100-.99c-.77 0-1.166.487-1.455.843-.261.322-.4.477-.687.477-.288 0-.426-.155-.687-.477-.29-.356-.685-.842-1.455-.842a.494.494 0 000 .989zm4.285 1.998c-.77 0-1.166.486-1.455.842-.261.322-.4.477-.687.477-.288 0-.426-.155-.687-.477-.29-.356-.685-.842-1.455-.842a.494.494 0 100 .989c.287 0 .425.155.687.476.289.356.684.843 1.455.843s1.166-.487 1.455-.843c.262-.321.4-.476.688-.476a.494.494 0 100-.99z\"></path></g></svg>&nbsp;<span style=\"box-sizing: inherit; margin-left: 0.75rem;\">Máy sấy</span></li><li class=\"mt--12\" style=\"box-sizing: inherit; margin-top: 12px !important; flex-basis: 33.3333%; line-height: 2rem;\"><svg version=\"1.1\" viewBox=\"0 0 24 19\" class=\"svg-icon svg-fill\" alt=\"Mạng gia đình\" style=\"width: 24px; height: 24px;\"><g fill=\"#000\" fill-rule=\"evenodd\"><path pid=\"0\" d=\"M21.5 10.99h-4.141c-3.3 0-8.253.018-14.86.055C1.123 11.045 0 12.122 0 13.5v2.938c0 1.378 1.122 2.5 2.5 2.5h19c1.378 0 2.5-1.122 2.5-2.5-.002-1.04-.004-2.02-.004-2.938a2.51 2.51 0 00-2.496-2.51zm0 7.01h-19c-.827 0-1.5-.673-1.5-1.5v-3c0-.827.673-1.5 1.5-1.5h19c.827 0 1.5.673 1.5 1.5v3c0 .827-.673 1.5-1.5 1.5z\" fill-rule=\"nonzero\"></path><path pid=\"1\" d=\"M17.5 4.261a.5.5 0 00-.5.5v7a.5.5 0 001 0v-7a.5.5 0 00-.5-.5z\"></path><circle pid=\"2\" cx=\"3.5\" cy=\"14.761\" r=\"1\"></circle><circle pid=\"3\" cx=\"6.5\" cy=\"14.761\" r=\"1\"></circle><circle pid=\"4\" cx=\"9.5\" cy=\"14.761\" r=\"1\"></circle><circle pid=\"5\" cx=\"12.5\" cy=\"14.761\" r=\"1\"></circle><path pid=\"6\" d=\"M20.5 14.261h-5a.5.5 0 000 1h5a.5.5 0 000-1zM16 4.761c0-.4.156-.777.439-1.06a.5.5 0 00-.707-.708A2.484 2.484 0 0015 4.761c0 .668.26 1.296.732 1.768a.502.502 0 00.707 0 .5.5 0 000-.707A1.492 1.492 0 0116 4.762zM19.268 2.993a.5.5 0 00-.707.707c.283.284.439.66.439 1.061 0 .401-.156.778-.44 1.061a.5.5 0 00.708.707c.472-.472.732-1.1.732-1.768 0-.668-.26-1.296-.732-1.768z\"></path><path pid=\"7\" d=\"M15.024 2.287a.5.5 0 00-.707-.707 4.506 4.506 0 000 6.364.502.502 0 00.707 0 .5.5 0 000-.707 3.505 3.505 0 010-4.95zM20.682 1.58a.5.5 0 00-.707.707 3.505 3.505 0 010 4.95.5.5 0 00.707.707 4.506 4.506 0 000-6.364z\"></path><path pid=\"8\" d=\"M13.61.873a.5.5 0 00-.707-.707 6.508 6.508 0 000 9.192.502.502 0 00.707 0 .5.5 0 000-.707 5.505 5.505 0 010-7.778zM22.096.166a.5.5 0 00-.707.707 5.505 5.505 0 010 7.778.5.5 0 00.707.707 6.508 6.508 0 000-9.192z\"></path></g></svg>&nbsp;<span style=\"box-sizing: inherit; margin-left: 0.75rem;\">Internet</span></li></ul></div><div item=\"[object Object]\" style=\"box-sizing: inherit; color: rgb(34, 34, 34); font-family: Luxstay;\"><h4 class=\"mt--24 mb--0\" style=\"box-sizing: inherit; line-height: 1.25; margin-bottom: 1rem; font-size: 1.25rem; margin-top: 24px !important;\">Tiện ích bếp</h4><ul class=\"list list--3 is-flex\" style=\"padding-left: 0px; list-style: none; display: flex; flex-wrap: wrap; font-size: 0.875rem; color: rgb(85, 85, 85);\"><li class=\"mt--12\" style=\"box-sizing: inherit; margin-top: 12px !important; flex-basis: 33.3333%; line-height: 2rem;\"><svg version=\"1.1\" viewBox=\"0 0 24 24\" class=\"svg-icon svg-fill\" alt=\"\" style=\"width: 24px; height: 24px;\"><g fill-rule=\"evenodd\" transform=\"translate(1)\"><path pid=\"0\" d=\"M2 0h18a2 2 0 012 2v20a2 2 0 01-2 2H2a2 2 0 01-2-2V2a2 2 0 012-2zm1 1a2 2 0 00-2 2v18a2 2 0 002 2h16a2 2 0 002-2V3a2 2 0 00-2-2H3z\"></path><path pid=\"1\" d=\"M11 19a8 8 0 110-16 8 8 0 010 16zm0-1a7 7 0 100-14 7 7 0 000 14z\"></path><rect pid=\"2\" width=\"5\" height=\"1\" x=\"14\" y=\"21\" rx=\".5\"></rect><rect pid=\"3\" width=\"2\" height=\"1\" x=\"3\" y=\"21\" rx=\".5\"></rect><rect pid=\"4\" width=\"2\" height=\"1\" x=\"6\" y=\"21\" rx=\".5\"></rect></g></svg>&nbsp;<span style=\"box-sizing: inherit; margin-left: 0.75rem;\">Bếp điện</span></li><li class=\"mt--12\" style=\"box-sizing: inherit; margin-top: 12px !important; flex-basis: 33.3333%; line-height: 2rem;\"><svg version=\"1.1\" viewBox=\"0 0 24 24\" class=\"svg-icon svg-fill\" alt=\"\" style=\"width: 24px; height: 24px;\"><path pid=\"0\" fill=\"#000\" fill-rule=\"nonzero\" d=\"M17.5 0A1.5 1.5 0 0119 1.5v21a1.5 1.5 0 01-1.5 1.5h-11A1.5 1.5 0 015 22.5v-21A1.5 1.5 0 016.5 0h11zM6 13h12V1.5a.5.5 0 00-.5-.5h-11a.5.5 0 00-.5.5V13zm0 1v8.5a.5.5 0 00.5.5h11a.5.5 0 00.5-.5V14H6zm1-6.5a.5.5 0 011 0v4a.5.5 0 11-1 0v-4zm0 8a.5.5 0 111 0v4a.5.5 0 11-1 0v-4zm8.854 6.354a.5.5 0 01-.708-.708l1-1a.5.5 0 01.708.708l-1 1zm-3 0a.5.5 0 01-.708-.708l4-4a.5.5 0 01.708.708l-4 4z\"></path></svg>&nbsp;<span style=\"box-sizing: inherit; margin-left: 0.75rem;\">Tủ lạnh</span></li></ul></div><div item=\"[object Object]\" style=\"box-sizing: inherit; color: rgb(34, 34, 34); font-family: Luxstay;\"><h4 class=\"mt--24 mb--0\" style=\"box-sizing: inherit; line-height: 1.25; margin-bottom: 1rem; font-size: 1.25rem; margin-top: 24px !important;\">Tiện ích phòng</h4><ul class=\"list list--3 is-flex\" style=\"padding-left: 0px; list-style: none; display: flex; flex-wrap: wrap; font-size: 0.875rem; color: rgb(85, 85, 85);\"><li class=\"mt--12\" style=\"box-sizing: inherit; margin-top: 12px !important; flex-basis: 33.3333%; line-height: 2rem;\"><svg version=\"1.1\" viewBox=\"0 0 24 24\" class=\"svg-icon svg-fill\" alt=\"\" style=\"width: 24px; height: 24px;\"><g fill-rule=\"evenodd\"><path pid=\"0\" fill-rule=\"nonzero\" d=\"M23.485 13.987H18.2V6.87h.257a.468.468 0 000-.935h-.264A6.23 6.23 0 0011.977 0 6.23 6.23 0 005.76 5.936h-.264a.468.468 0 000 .935h.257v7.116H.468a.468.468 0 00-.468.468v9.03c0 .259.21.468.468.468h23.017c.259 0 .468-.21.468-.468v-9.03a.468.468 0 00-.468-.468zm-5.286.936h1.941v5.287H18.2v-5.287zM12.444.957a5.294 5.294 0 014.811 4.979h-1.608a3.708 3.708 0 00-3.203-3.203V.957zm0 2.721a2.772 2.772 0 012.258 2.258h-2.258V3.678zm0 5.543V6.87h3.269l-.89.89a.468.468 0 00.662.662l1.551-1.552h.227v7.116h-4.157l3.266-3.266a.468.468 0 00-.662-.661l-3.266 3.265V9.221zm4.82 5.702v5.287h-1.942v-5.287h1.941zm-4.82 0h1.942v5.287h-1.942v-5.287zM11.51.957v1.776a3.708 3.708 0 00-3.203 3.203H6.698a5.295 5.295 0 014.81-4.98zm0 2.721v2.258H9.25a2.772 2.772 0 012.258-2.258zm-4.82 8.427l1.551-1.552a.468.468 0 00-.661-.661l-.89.89v-3.91h4.819v2.155L9.25 11.285a.468.468 0 00.662.661l1.596-1.596v3.637H6.69v-1.882zm4.819 2.818v5.287H9.567v-5.287h1.942zm-4.819 0h1.942v5.287H6.69v-5.287zm-2.877 0h1.941v5.287H3.813v-5.287zm-2.877 0h1.941v5.287H.936v-5.287zm0 8.095v-1.872h22.082v1.872H.936zm22.082-2.808h-1.942v-5.287h1.942v5.287z\"></path><path pid=\"1\" d=\"M9.202 9.593a.468.468 0 00-.666-.658l-.008.008a.468.468 0 00.666.658l.008-.008zm4.671-.882l-.008.008a.468.468 0 00.661.662l.008-.008a.468.468 0 00-.661-.662z\"></path></g></svg>&nbsp;<span style=\"box-sizing: inherit; margin-left: 0.75rem;\">Ban Công</span></li></ul></div>', '', '<p style=\"box-sizing: inherit; margin-bottom: 1rem; color: rgb(34, 34, 34); font-family: Luxstay;\">·Đưa đón sân bay: giá đưa đón từ sân bay Nội Bài tới căn hộ The Galaxy Home 400.000VND / chiều / xe 4 chỗ</p><p style=\"box-sizing: inherit; margin-bottom: 1rem; color: rgb(34, 34, 34); font-family: Luxstay;\">Không hút thuốc trong căn hộ</p><p style=\"box-sizing: inherit; margin-bottom: 1rem; color: rgb(34, 34, 34); font-family: Luxstay;\">Không sử dụng chất kích thích</p><p style=\"box-sizing: inherit; margin-bottom: 1rem; color: rgb(34, 34, 34); font-family: Luxstay;\">Không mở tiệc trong căn hộ</p><p style=\"box-sizing: inherit; margin-bottom: 1rem; color: rgb(34, 34, 34); font-family: Luxstay;\">Không mang theo vật nuôi</p><p style=\"box-sizing: inherit; margin-bottom: 1rem; color: rgb(34, 34, 34); font-family: Luxstay;\">Vui lòng giữ im lặng sau 22h</p><p style=\"box-sizing: inherit; margin-bottom: 1rem; color: rgb(34, 34, 34); font-family: Luxstay;\">Vui lòng tắt các thiết bị khi bạn ra khỏi phòng</p>', 'ok', '2021-07-23 14:03:17');
INSERT INTO `chitietkhachsan` (`id`, `id_khachsan`, `chitiet`, `gioithieu`, `tiennghi`, `danhgia`, `chinhsach`, `tienich`, `time`) VALUES
(3, 16, '<p style=\"box-sizing: inherit; margin-bottom: 1rem; font-family: Luxstay; color: rgb(34, 34, 34); line-height: 1.5rem !important;\"><span style=\"box-sizing: inherit; font-weight: bolder;\">Tóm tắt về The Galaxy Home Apartment</span></p><p style=\"box-sizing: inherit; margin-bottom: 1rem; font-family: Luxstay; color: rgb(34, 34, 34); line-height: 1.5rem !important;\">·Vị trí rất đẹp và thuận tiện ở quận Cầu Giấy</p><p style=\"box-sizing: inherit; margin-bottom: 1rem; font-family: Luxstay; color: rgb(34, 34, 34); line-height: 1.5rem !important;\">·Gần công viên Cầu Giấy, Lotteria, trung tâm mua sắm với môi trường ngoài trời yên tĩnh</p><p style=\"box-sizing: inherit; margin-bottom: 1rem; font-family: Luxstay; color: rgb(34, 34, 34); line-height: 1.5rem !important;\">·Bạn hoàn toàn có thể trải nghiệm những dịch vụ cao cấp tại đây</p><p style=\"box-sizing: inherit; margin-bottom: 1rem; font-family: Luxstay; color: rgb(34, 34, 34); line-height: 1.5rem !important;\"><span style=\"box-sizing: inherit; font-weight: bolder;\">Về không gian</span></p><p style=\"box-sizing: inherit; margin-bottom: 1rem; font-family: Luxstay; color: rgb(34, 34, 34); line-height: 1.5rem !important;\">·Căn hộ được thiết kế với nhiều lựa chọn bố trí hợp lý và được trang bị theo tiêu chuẩn cao cấp 4 sao với ban công riêng và cảnh quan đẹp</p><p style=\"box-sizing: inherit; margin-bottom: 1rem; font-family: Luxstay; color: rgb(34, 34, 34); line-height: 1.5rem !important;\">·Có nhiều dịch vụ tại chỗ khác nhau như giặt ủi, dịch vụ vệ sinh, Wi-Fi miễn phí tốc độ cao, an ninh 24/7</p><p style=\"box-sizing: inherit; margin-bottom: 1rem; font-family: Luxstay; color: rgb(34, 34, 34); line-height: 1.5rem !important;\">·Dịch vụ khách hàng đặc biệt được cung cấp</p>', '<p style=\"box-sizing: inherit; margin-bottom: 1rem; font-family: Luxstay; color: rgb(34, 34, 34); line-height: 1.5rem !important;\"><span style=\"box-sizing: inherit; font-weight: bolder;\">Căn hộ Deluxe 60m2 - Có ban công - Hướng nhìn thành phố</span></p><p style=\"box-sizing: inherit; margin-bottom: 1rem; font-family: Luxstay; color: rgb(34, 34, 34); line-height: 1.5rem !important;\">·Thang máy ra vào căn hộ với hệ thống thẻ khóa an ninh</p><p style=\"box-sizing: inherit; margin-bottom: 1rem; font-family: Luxstay; color: rgb(34, 34, 34); line-height: 1.5rem !important;\">·Phòng khách được thiết kế theo phong cách hiện đại với ghế sofa và khu vực ăn uống riêng</p><p style=\"box-sizing: inherit; margin-bottom: 1rem; font-family: Luxstay; color: rgb(34, 34, 34); line-height: 1.5rem !important;\">·Nhà bếp được trang bị đầy đủ với bếp điện và máy hút mùi điện, lò vi sóng, tủ lạnh, ấm điện, đồ thủy tinh, đồ sành sứ, dao kéo</p><p style=\"box-sizing: inherit; margin-bottom: 1rem; font-family: Luxstay; color: rgb(34, 34, 34); line-height: 1.5rem !important;\">·Phòng tắm được trang bị bồn tắm dài / tắm đứng và kính riêng</p><p style=\"box-sizing: inherit; margin-bottom: 1rem; font-family: Luxstay; color: rgb(34, 34, 34); line-height: 1.5rem !important;\">·Phòng ngủ có sẵn ga trải giường và két an toàn cá nhân trong phòng</p><p style=\"box-sizing: inherit; margin-bottom: 1rem; font-family: Luxstay; color: rgb(34, 34, 34); line-height: 1.5rem !important;\">·Hệ thống giải trí với TV LCD và các kênh truyền hình cáp</p><p style=\"box-sizing: inherit; margin-bottom: 1rem; font-family: Luxstay; color: rgb(34, 34, 34); line-height: 1.5rem !important;\">·Điều hòa hai chiều với bộ điều khiển nhiệt riêng</p><p style=\"box-sizing: inherit; margin-bottom: 1rem; font-family: Luxstay; color: rgb(34, 34, 34); line-height: 1.5rem !important;\">·Điện thoại</p><p style=\"box-sizing: inherit; margin-bottom: 1rem; font-family: Luxstay; color: rgb(34, 34, 34); line-height: 1.5rem !important;\">·Wi-fi</p><p style=\"box-sizing: inherit; margin-bottom: 1rem; font-family: Luxstay; color: rgb(34, 34, 34); line-height: 1.5rem !important;\">·Cơ sở vật chất phòng tắm và nhà bếp tiện nghi đến từ các nhãn hàng nổi tiếng như: Koller, Samsung, Electrolux...</p><p style=\"box-sizing: inherit; margin-bottom: 1rem; font-family: Luxstay; color: rgb(34, 34, 34); line-height: 1.5rem !important;\">·Căn hộ đều có tiện nghi sang trọng, điện thoại, kênh truyền hình cáp, TV màn hình phẳng, máy lạnh, khu vực phòng khách, máy giặt, tủ quần áo, giá treo quần áo, máy sấy tóc, phòng tắm, dép, vòi hoa sen, ghế sofa, sàn gỗ, tủ lạnh, lò vi sóng, đồ dùng nhà bếp, bàn ăn, khăn tắm, ga trải giường.</p><p style=\"box-sizing: inherit; margin-bottom: 1rem; font-family: Luxstay; color: rgb(34, 34, 34); line-height: 1.5rem !important;\"><span style=\"box-sizing: inherit; font-weight: bolder;\">Các dịch vụ khác</span></p><p style=\"box-sizing: inherit; margin-bottom: 1rem; font-family: Luxstay; color: rgb(34, 34, 34); line-height: 1.5rem !important;\">·Dịch vụ dọn phòng: 2 lần mỗi tuần</p><p style=\"box-sizing: inherit; margin-bottom: 1rem; font-family: Luxstay; color: rgb(34, 34, 34); line-height: 1.5rem !important;\">·Dịch vụ giặt đồ</p><p style=\"box-sizing: inherit; margin-bottom: 1rem; font-family: Luxstay; color: rgb(34, 34, 34); line-height: 1.5rem !important;\">·Bãi đỗ xe</p><p style=\"box-sizing: inherit; margin-bottom: 1rem; font-family: Luxstay; color: rgb(34, 34, 34); line-height: 1.5rem !important;\">·Camera an ninh 24/7</p>', '<div class=\"title mt--60\" style=\"box-sizing: inherit; color: rgb(34, 34, 34); font-family: Luxstay; margin-top: 60px !important;\"><span style=\"box-sizing: inherit;\">Giới thiệu về các tiện nghi và dịch vụ tại nơi lưu trú</span></div><div class=\"is-flex amenities\" style=\"display: flex; flex-wrap: wrap; color: rgb(34, 34, 34); font-family: Luxstay;\"><div class=\"d-none d-sm-flex w--100\" style=\"box-sizing: inherit; width: 678px;\"><div class=\"fl-item-stretch\" style=\"box-sizing: inherit; flex: 1 0 0%;\"><div item=\"[object Object]\" style=\"box-sizing: inherit;\"><h4 class=\"mt--24 mb--0\" style=\"box-sizing: inherit; line-height: 1.25; margin-bottom: 1rem; font-size: 1.25rem; margin-top: 24px !important;\">Tiện ích</h4><ul class=\"list list--3 is-flex\" style=\"padding-left: 0px; list-style: none; display: flex; flex-wrap: wrap; font-size: 0.875rem; color: rgb(85, 85, 85);\"><li class=\"mt--12\" style=\"box-sizing: inherit; margin-top: 12px !important; flex-basis: 33.3333%; line-height: 2rem;\"><svg version=\"1.1\" viewBox=\"0 0 24 24\" class=\"svg-icon svg-fill\" alt=\"\" style=\"width: 24px; height: 24px;\"><g fill=\"#000\" fill-rule=\"nonzero\"><path pid=\"0\" d=\"M23.44 9.04a.502.502 0 01-.354-.146A14.9 14.9 0 0012.48 4.5 14.903 14.903 0 001.873 8.894a.5.5 0 01-.707-.707A15.896 15.896 0 0112.48 3.5c4.274 0 8.292 1.665 11.313 4.687a.5.5 0 01-.353.853z\"></path><path pid=\"1\" d=\"M20.612 11.868a.502.502 0 01-.354-.146c-4.289-4.288-11.268-4.288-15.557 0a.5.5 0 01-.707-.707c4.679-4.679 12.292-4.679 16.971 0a.5.5 0 01-.353.853z\"></path><path pid=\"2\" d=\"M17.783 14.697a.502.502 0 01-.354-.146 6.954 6.954 0 00-4.95-2.05c-1.87 0-3.627.728-4.95 2.05a.5.5 0 01-.707-.707 7.948 7.948 0 015.657-2.343c2.137 0 4.146.832 5.657 2.343a.5.5 0 01-.353.853zM12.48 20.5a2.503 2.503 0 01-2.5-2.5c0-1.378 1.122-2.5 2.5-2.5s2.5 1.122 2.5 2.5-1.122 2.5-2.5 2.5zm0-4c-.827 0-1.5.673-1.5 1.5s.673 1.5 1.5 1.5 1.5-.673 1.5-1.5-.673-1.5-1.5-1.5z\"></path></g></svg>&nbsp;<span style=\"box-sizing: inherit; margin-left: 0.75rem;\">Wifi</span></li><li class=\"mt--12\" style=\"box-sizing: inherit; margin-top: 12px !important; flex-basis: 33.3333%; line-height: 2rem;\"><svg version=\"1.1\" viewBox=\"0 0 24 24\" class=\"svg-icon svg-fill\" alt=\"\" style=\"width: 24px; height: 24px;\"><path pid=\"0\" fill=\"#000\" fill-rule=\"nonzero\" d=\"M16.293 14H8.707l-1.853 1.854a.5.5 0 01-.708-.708L7.293 14H3.5a.5.5 0 01-.5-.5v-11a.5.5 0 01.5-.5h18a.5.5 0 01.5.5v11a.5.5 0 01-.5.5h-3.793l1.147 1.146a.5.5 0 01-.708.708L16.293 14zM4 3v10h17V3H4zM3 21.5v1a.5.5 0 11-1 0V18a1.5 1.5 0 011.5-1.5h18A1.5 1.5 0 0123 18v4.5a.5.5 0 11-1 0v-1H3zm0-1h19V18a.5.5 0 00-.5-.5h-18a.5.5 0 00-.5.5v2.5zm8.5-1a.5.5 0 110-1h2a.5.5 0 110 1h-2zM5.854 5.854a.5.5 0 11-.708-.708l1-1a.5.5 0 11.708.708l-1 1zm0 3a.5.5 0 11-.708-.708l4-4a.5.5 0 11.708.708l-4 4z\"></path></svg>&nbsp;<span style=\"box-sizing: inherit; margin-left: 0.75rem;\">TV</span></li><li class=\"mt--12\" style=\"box-sizing: inherit; margin-top: 12px !important; flex-basis: 33.3333%; line-height: 2rem;\"><svg version=\"1.1\" viewBox=\"0 0 24 24\" class=\"svg-icon svg-fill\" alt=\"\" style=\"width: 24px; height: 24px;\"><path pid=\"0\" fill=\"#000\" fill-rule=\"nonzero\" d=\"M23 8.5h-2.085a1.5 1.5 0 01-2.83 0H1v4a.5.5 0 00.5.5h1v-.5A1.5 1.5 0 014 11h16a1.5 1.5 0 011.5 1.5v.5h1a.5.5 0 00.5-.5v-4zm0-1v-2a.5.5 0 00-.5-.5h-21a.5.5 0 00-.5.5v2h17.085a1.5 1.5 0 012.83 0H23zM20.5 13v-.5a.5.5 0 00-.5-.5H4a.5.5 0 00-.5.5v.5h17zm-19-9h21A1.5 1.5 0 0124 5.5v7a1.5 1.5 0 01-1.5 1.5h-21A1.5 1.5 0 010 12.5v-7A1.5 1.5 0 011.5 4zm5.886 16.182a.5.5 0 01-.772.636c-.817-.993-.817-2.086-.009-3.125.525-.674.525-1.248.009-1.875a.5.5 0 01.772-.636c.817.993.817 2.086.009 3.125-.525.674-.525 1.248-.009 1.875zm5 0a.5.5 0 01-.772.636c-.817-.993-.817-2.086-.009-3.125.525-.674.525-1.248.009-1.875a.5.5 0 01.772-.636c.817.993.817 2.086.009 3.125-.525.674-.525 1.248-.009 1.875zm5 0a.5.5 0 01-.772.636c-.817-.993-.817-2.086-.009-3.125.525-.674.525-1.248.009-1.875a.5.5 0 01.772-.636c.817.993.817 2.086.009 3.125-.525.674-.525 1.248-.009 1.875z\"></path></svg>&nbsp;<span style=\"box-sizing: inherit; margin-left: 0.75rem;\">Điều hoà</span></li><li class=\"mt--12\" style=\"box-sizing: inherit; margin-top: 12px !important; flex-basis: 33.3333%; line-height: 2rem;\"><svg version=\"1.1\" viewBox=\"0 0 24 24\" class=\"svg-icon svg-fill\" alt=\"\" style=\"width: 24px; height: 24px;\"><path pid=\"0\" fill=\"#000\" fill-rule=\"nonzero\" d=\"M15.07 11.21a4.5 4.5 0 100 6.58c-2.093-1.832-2.093-4.748 0-6.58zm.651.759c-1.628 1.432-1.628 3.63 0 5.062A4.48 4.48 0 0016.5 14.5a4.48 4.48 0 00-.779-2.531zM10 1H4.5a.5.5 0 00-.5.5V5h6V1zm1 0v4h9V1.5a.5.5 0 00-.5-.5H11zM4 6v17h16V6H4zm.5-6h15A1.5 1.5 0 0121 1.5v22a.5.5 0 01-.5.5h-17a.5.5 0 01-.5-.5v-22A1.5 1.5 0 014.5 0zM12 20a5.5 5.5 0 110-11 5.5 5.5 0 010 11zM6 3.5a.5.5 0 010-1h2a.5.5 0 010 1H6zM18 4a1 1 0 110-2 1 1 0 010 2zm-3 0a1 1 0 110-2 1 1 0 010 2z\"></path></svg>&nbsp;<span style=\"box-sizing: inherit; margin-left: 0.75rem;\">Máy giặt</span></li><li class=\"mt--12\" style=\"box-sizing: inherit; margin-top: 12px !important; flex-basis: 33.3333%; line-height: 2rem;\"><svg version=\"1.1\" viewBox=\"0 0 24 24\" class=\"svg-icon svg-fill\" alt=\"\" style=\"width: 24px; height: 24px;\"><path pid=\"0\" d=\"M7.381 0c-1.457 0-2.7 1.065-2.7 1.065a.48.48 0 10.6.75S6.438.96 7.381.96c1.226 0 2.28.855 2.28.855l.12.09V3.84H9.211a.48.48 0 00-.39.48v2.4h-.48a4.336 4.336 0 00-4.32 4.32v2.73a.492.492 0 000 .285V21.6a2.41 2.41 0 002.4 2.4h11.52a2.41 2.41 0 002.4-2.4v-7.59a.488.488 0 000-.195V11.04a4.336 4.336 0 00-4.32-4.32h-.48v-2.4a.48.48 0 00-.48-.48h-.48V1.92h.48a.483.483 0 00.422-.238.485.485 0 000-.484.483.483 0 00-.422-.238h-.855a.45.45 0 00-.15-.015.422.422 0 00-.045.015h-3.645a.45.45 0 00-.15-.015.422.422 0 00-.045.015h-.06C9.894.786 8.87 0 7.381 0zm3.36 1.92h2.88v1.92h-2.88V1.92zm-.96 2.88h4.8v1.92h-4.8V4.8zm-1.44 2.88h7.68c1.85 0 3.36 1.51 3.36 3.36v2.4h-5.805c.026-.154.045-.319.045-.48a2.888 2.888 0 00-2.88-2.88 2.888 2.888 0 00-2.88 2.88c0 .161.019.326.045.48H4.981v-2.4c0-1.85 1.51-3.36 3.36-3.36zm2.4 3.36c1.067 0 1.92.853 1.92 1.92s-.853 1.92-1.92 1.92a1.91 1.91 0 01-1.74-1.11v-.015l-.015-.03-.015-.015c-.002-.004.002-.011 0-.015l-.015-.015a1.944 1.944 0 01-.135-.72c0-1.067.853-1.92 1.92-1.92zm-5.76 3.36h3.27a2.89 2.89 0 002.49 1.44 2.89 2.89 0 002.49-1.44h6.15v7.2a1.44 1.44 0 01-1.44 1.44H6.421a1.44 1.44 0 01-1.44-1.44v-7.2zm10.08 1.44c-1.056 0-1.92.864-1.92 1.92s.864 1.92 1.92 1.92 1.92-.864 1.92-1.92-.864-1.92-1.92-1.92zm0 .96c.536 0 .96.424.96.96s-.424.96-.96.96a.952.952 0 01-.96-.96c0-.536.424-.96.96-.96zm-3.84 2.4c-.79 0-1.44.65-1.44 1.44 0 .79.65 1.44 1.44 1.44.79 0 1.44-.65 1.44-1.44 0-.79-.65-1.44-1.44-1.44zm0 .96c.27 0 .48.21.48.48s-.21.48-.48.48-.48-.21-.48-.48.21-.48.48-.48z\" fill=\"#000\" fill-rule=\"nonzero\"></path></svg>&nbsp;<span style=\"box-sizing: inherit; margin-left: 0.75rem;\">Dầu gội, dầu xả</span></li><li class=\"mt--12\" style=\"box-sizing: inherit; margin-top: 12px !important; flex-basis: 33.3333%; line-height: 2rem;\"><svg version=\"1.1\" viewBox=\"0 0 24 24\" class=\"svg-icon svg-fill\" alt=\"\" style=\"width: 24px; height: 24px;\"><path pid=\"0\" fill=\"#000\" d=\"M0 7.429C0 3.367 1.964 0 4.571 0H19.43C22.036 0 24 3.367 24 7.429c0 4.06-1.964 7.428-4.571 7.428H16v8.572a.571.571 0 01-.571.571H.57a.571.571 0 01-.57-.571v-16zm14.857 7.428H4.571c-1.394 0-2.604-.963-3.428-2.48v10.48h13.714v-8zm4.572-1.143c1.81 0 3.428-2.772 3.428-6.285 0-3.514-1.617-6.286-3.428-6.286H7.035c1.286 1.323 2.108 3.66 2.108 6.286 0 2.626-.822 4.962-2.108 6.285H19.43zm-14.858 0C6.383 13.714 8 10.942 8 7.43c0-3.514-1.617-6.286-3.429-6.286-1.81 0-3.428 2.772-3.428 6.286 0 3.513 1.617 6.285 3.428 6.285zm0-4c-1.007 0-1.714-1.06-1.714-2.285 0-1.226.707-2.286 1.714-2.286 1.008 0 1.715 1.06 1.715 2.286 0 1.225-.707 2.285-1.715 2.285zm0-1.143c.256 0 .572-.474.572-1.142 0-.669-.316-1.143-.572-1.143-.255 0-.571.474-.571 1.143 0 .668.316 1.142.571 1.142z\" fill-rule=\"evenodd\"></path></svg>&nbsp;<span style=\"box-sizing: inherit; margin-left: 0.75rem;\">Giấy vệ sinh</span></li><li class=\"mt--12\" style=\"box-sizing: inherit; margin-top: 12px !important; flex-basis: 33.3333%; line-height: 2rem;\"><svg version=\"1.1\" viewBox=\"0 0 24 24\" class=\"svg-icon svg-fill\" alt=\"\" style=\"width: 24px; height: 24px;\"><g fill-rule=\"evenodd\"><path pid=\"0\" fill-rule=\"nonzero\" d=\"M22.527 6.497h-.366v-.202c.107-1.298-.245-2.453-.993-3.254a3.18 3.18 0 00-2.443-1.024H3.945c-1.376 0-2.496 1.102-2.496 2.457v2.023h-.023C.64 6.497 0 7.127 0 7.901v.359c0 .774.64 1.403 1.426 1.403h.023v10.865c0 1.355 1.12 2.457 2.496 2.457h12.188c1.417 0 2.208-.28 2.646-.934.417-.624.421-1.51.421-2.537h1.757c.675 0 1.204-.67 1.204-1.524V9.663h.366c.787 0 1.426-.63 1.426-1.403V7.9c0-.773-.64-1.403-1.426-1.403zM1.45 8.742h-.023a.487.487 0 01-.49-.482V7.9c0-.265.22-.482.49-.482h.023v1.324zM21.225 6.36v.137H19.21c.043-.329.15-.593.314-.77a.773.773 0 01.577-.245c.39 0 .899.276 1.125.878zm-2.96 13.126c0 1.032-.019 1.686-.267 2.058-.162.242-.52.52-1.865.52H3.945c-.86 0-1.56-.69-1.56-1.536V18.05h15.88v1.435zm0-2.356H2.384v-1.98h15.88v1.98zm.572-12.028c-.307.327-.655.949-.573 2.057v7.07H2.384v-.88h4.578a.464.464 0 00.468-.46.465.465 0 00-.468-.461H2.385V4.474c0-.847.7-1.536 1.56-1.536h14.803a2.252 2.252 0 011.731.726c.298.32.513.72.638 1.18A2.001 2.001 0 0020.1 4.56c-.487 0-.935.192-1.263.541zm2.388 12.888c0 .396-.2.603-.268.603H19.2v-8.93h2.025v8.327zm1.793-9.73c0 .266-.22.482-.49.482H19.2V7.418h3.327c.27 0 .49.217.49.483v.359z\"></path><path pid=\"1\" d=\"M8.428 12.428h-.037a.464.464 0 00-.468.46c0 .255.21.461.468.461h.037a.464.464 0 00.468-.46.465.465 0 00-.468-.461z\"></path></g></svg>&nbsp;<span style=\"box-sizing: inherit; margin-left: 0.75rem;\">Khăn tắm</span></li><li class=\"mt--12\" style=\"box-sizing: inherit; margin-top: 12px !important; flex-basis: 33.3333%; line-height: 2rem;\"><svg version=\"1.1\" viewBox=\"0 0 24 24\" class=\"svg-icon svg-fill\" alt=\"\" style=\"width: 24px; height: 24px;\"><path pid=\"0\" d=\"M19.824 1.261L18.105 2.98l-3.273.399-.123.014-.096.068L2.745 12.99l-.014.014-.013.027-1.155 1.141-.303.317 8.25 8.25.317-.303 1.14-1.155.028-.014.014-.013 9.556-11.825.083-.097.014-.137.357-3.3 1.416-1.402.303-.317-2.915-2.915zm0 1.252L21.5 4.176l-.893.894-1.678-1.664.894-.894zm-1.692 1.36h.014l1.98 1.98v.014l-.234 2.324-4.056-4.056 2.296-.261zm-3.286.523l4.785 4.785-9.281 11.482-.027.04-.798.785-7.013-7.013.784-.797.042-.028 11.508-9.254zM12.11 8.824c-.555 0-1.102.235-1.526.66-.394.393-.518.844-.605 1.168-.047.17-.072.298-.138.413-.063.113-.136.23-.206.344-.345.548-.928 1.464-.206 2.186.178.179.399.3.632.344.045.233.164.45.344.632.22.22.52.344.839.344.488 0 .923-.282 1.347-.55.114-.07.23-.143.344-.206.115-.066.242-.091.412-.138.325-.087.776-.211 1.17-.605.905-.906.872-2.195-.07-3.135a2.62 2.62 0 00-.398-.33 2.62 2.62 0 00-.33-.399c-.47-.469-1.021-.728-1.609-.728zm0 .88c.337 0 .68.158.99.467.138.138.234.286.303.427.14.068.287.163.426.302.603.603.608 1.356.069 1.897-.392.392-.901.32-1.403.605-.455.26-.928.633-1.251.633a.303.303 0 01-.22-.082c-.155-.155-.143-.353.055-.55.273-.274.58-.686.825-1.046.093-.137-.028-.288-.165-.288a.148.148 0 00-.097.027c-.359.244-.773.552-1.044.825-.109.109-.217.165-.317.165a.332.332 0 01-.234-.11c-.287-.287.226-.897.55-1.471.286-.504.214-.999.606-1.389.262-.264.586-.412.907-.412zm-7.92 3.41l-.619.632.317.316.618-.632-.316-.316zm.646.646l-.632.619.316.316.632-.619-.316-.316zm.633.633l-.619.618.316.317.619-.62-.316-.316zm.632.632l-.619.633.317.316.619-.633-.317-.316zm.646.646l-.632.619.316.316.633-.619-.317-.316zm.633.633l-.619.619.316.316.62-.619-.317-.316zm.633.632l-.62.633.317.316.619-.633-.317-.316zm.646.647l-.633.618.316.317.633-.62-.316-.315zm.632.632l-.619.619.317.316.618-.619-.316-.316zm.633.633l-.619.632.316.316.619-.632-.316-.316zm.646.646l-.633.619.317.316.632-.619-.316-.316z\" fill=\"#000\" fill-rule=\"nonzero\"></path></svg>&nbsp;<span style=\"box-sizing: inherit; margin-left: 0.75rem;\">Kem đánh răng</span></li><li class=\"mt--12\" style=\"box-sizing: inherit; margin-top: 12px !important; flex-basis: 33.3333%; line-height: 2rem;\"><svg version=\"1.1\" viewBox=\"0 0 24 24\" class=\"svg-icon svg-fill\" alt=\"\" style=\"width: 24px; height: 24px;\"><g fill-rule=\"evenodd\"><path pid=\"0\" d=\"M7.2 16.902a2.105 2.105 0 01-1.654-.57 1.804 1.804 0 01-.351-1.328.393.393 0 00-.331-.443.4.4 0 00-.458.315 2.576 2.576 0 00.526 1.96c.488.564 1.251.85 2.268.85.22 0 .4-.175.4-.392a.396.396 0 00-.4-.392zm2 0h-.4c-.22 0-.4.176-.4.392 0 .217.18.392.4.392h.4c.22 0 .4-.175.4-.392a.396.396 0 00-.4-.392zm7.6-5.49c.61-.059 1.215.15 1.654.569.288.381.414.858.351 1.329a.393.393 0 00.395.455.398.398 0 00.394-.328 2.573 2.573 0 00-.526-1.959c-.488-.564-1.251-.85-2.268-.85-.22 0-.4.175-.4.392 0 .216.18.392.4.392zm-1.2-.392a.396.396 0 00-.4-.393h-.4c-.22 0-.4.176-.4.393 0 .216.18.392.4.392h.4c.22 0 .4-.176.4-.392z\"></path><path pid=\"1\" fill-rule=\"nonzero\" d=\"M2 9.451c1.104 0 2-.878 2-1.96 0-1.084-.896-1.962-2-1.962S0 6.407 0 7.49c.001 1.083.896 1.96 2 1.961zm0-3.137c.663 0 1.2.526 1.2 1.176 0 .65-.537 1.177-1.2 1.177-.663 0-1.2-.527-1.2-1.177S1.337 6.314 2 6.314zm8.8.392c0 .866.716 1.569 1.6 1.569.884 0 1.6-.703 1.6-1.57 0-.865-.716-1.568-1.6-1.568-.884 0-1.6.703-1.6 1.569zm2.4 0a.792.792 0 01-.8.784.792.792 0 01-.8-.784c0-.433.358-.784.8-.784.442 0 .8.35.8.784zM4.8 4.745c0 1.516 1.254 2.745 2.8 2.745 1.546 0 2.8-1.229 2.8-2.745S9.146 2 7.6 2c-1.546.002-2.798 1.23-2.8 2.745zm4.8 0c0 1.083-.896 1.96-2 1.96s-2-.877-2-1.96.896-1.96 2-1.96 1.999.878 2 1.96z\"></path><path pid=\"2\" d=\"M7.197 5.014a.722.722 0 01-.017-.54.39.39 0 00-.255-.495.402.402 0 00-.505.25c-.145.413-.1.867.127 1.243a1.22 1.22 0 001.053.45c.22 0 .4-.176.4-.393a.396.396 0 00-.4-.392.527.527 0 01-.403-.123z\"></path><path pid=\"3\" fill-rule=\"nonzero\" d=\"M21.6 16.118a2.38 2.38 0 00-.431.042c.02-.144.03-.29.031-.435v-3.137c-.002-1.948-1.613-3.527-3.6-3.53H6.4c-1.987.003-3.598 1.582-3.6 3.53v3.137c.002 1.949 1.613 3.528 3.6 3.53h6.54a2.397 2.397 0 002.26 1.569c.349 0 .694-.076 1.008-.224A2.4 2.4 0 0018.4 22a2.4 2.4 0 002.192-1.4c.314.148.66.224 1.008.224 1.325 0 2.4-1.054 2.4-2.353 0-1.3-1.075-2.353-2.4-2.353zm-8.8 2.353H6.4c-1.546-.002-2.798-1.23-2.8-2.746v-3.137c.002-1.515 1.254-2.743 2.8-2.745h11.2c1.546.002 2.798 1.23 2.8 2.745v3.137c0 .086-.01.17-.018.253a2.409 2.409 0 00-2.196-1.028 2.39 2.39 0 00-1.978 1.39 2.375 2.375 0 00-1.008-.222c-1.325.001-2.399 1.054-2.4 2.353zm8.8 1.568a1.598 1.598 0 01-.988-.345.406.406 0 00-.387-.059.394.394 0 00-.253.294 1.588 1.588 0 01-1.57 1.286 1.588 1.588 0 01-1.57-1.286.395.395 0 00-.253-.294.406.406 0 00-.387.059c-.28.223-.63.345-.992.345-.884 0-1.6-.702-1.6-1.568 0-.867.716-1.569 1.6-1.569.36.001.708.123.988.345.11.085.256.107.387.06a.394.394 0 00.253-.295 1.588 1.588 0 011.57-1.285c.772 0 1.433.54 1.57 1.285a.395.395 0 00.253.294c.13.048.278.026.387-.059.28-.222.63-.344.992-.345.884 0 1.6.702 1.6 1.569 0 .866-.716 1.568-1.6 1.568z\"></path></g></svg>&nbsp;<span style=\"box-sizing: inherit; margin-left: 0.75rem;\">Xà phòng tắm</span></li><li class=\"mt--12\" style=\"box-sizing: inherit; margin-top: 12px !important; flex-basis: 33.3333%; line-height: 2rem;\"><svg version=\"1.1\" viewBox=\"0 0 24 24\" class=\"svg-icon svg-fill\" alt=\"\" style=\"width: 24px; height: 24px;\"><g fill=\"none\" fill-rule=\"evenodd\"><path pid=\"0\" d=\"M0 0h24v24H0z\"></path><path pid=\"1\" fill=\"#000\" fill-rule=\"nonzero\" d=\"M17.571 3.452L6.434 2.07a5.872 5.872 0 00-.669-.038C2.586 2.03 0 4.62 0 7.805v.12a5.78 5.78 0 002.932 5.028l1.54 6.226c.17.689.599 1.27 1.206 1.636a2.639 2.639 0 002.01.304l.042-.01a2.638 2.638 0 001.637-1.206 2.639 2.639 0 00.304-2.01l-1.112-4.495 9.012-1.12a.494.494 0 00.434-.49V3.943c0-.25-.186-.46-.434-.49zM8.711 18.13c.107.433.039.88-.191 1.262-.23.381-.595.65-1.027.757l-.043.01c-.432.107-.88.04-1.26-.19a1.656 1.656 0 01-.758-1.028l-1.36-5.495a5.737 5.737 0 002.367.215l1.131-.14 1.14 4.61zm8.305-6.78L6.32 12.68A4.786 4.786 0 01.99 7.925v-.12a4.786 4.786 0 015.328-4.754L17.016 4.38v6.97z\"></path><path pid=\"2\" fill=\"#000\" fill-rule=\"nonzero\" d=\"M2.763 7.865a3.293 3.293 0 003.29 3.29 3.293 3.293 0 003.288-3.29 3.293 3.293 0 00-3.289-3.289 3.293 3.293 0 00-3.289 3.29zm5.59 0c0 1.269-1.032 2.3-2.3 2.3a2.303 2.303 0 01-2.301-2.3c0-1.268 1.032-2.3 2.3-2.3 1.269 0 2.3 1.032 2.3 2.3z\"></path><path pid=\"3\" fill=\"#000\" d=\"M19.196 6.305c.288 0 .426.155.688.476.289.356.684.843 1.455.843s1.166-.487 1.455-.843c.262-.321.4-.476.687-.476a.494.494 0 100-.99c-.77 0-1.166.487-1.455.843-.261.322-.4.477-.687.477-.288 0-.426-.155-.687-.477-.29-.356-.685-.842-1.455-.842a.494.494 0 000 .989zm4.285 1.998c-.77 0-1.166.486-1.455.842-.261.322-.4.477-.687.477-.288 0-.426-.155-.687-.477-.29-.356-.685-.842-1.455-.842a.494.494 0 100 .989c.287 0 .425.155.687.476.289.356.684.843 1.455.843s1.166-.487 1.455-.843c.262-.321.4-.476.688-.476a.494.494 0 100-.99z\"></path></g></svg>&nbsp;<span style=\"box-sizing: inherit; margin-left: 0.75rem;\">Máy sấy</span></li><li class=\"mt--12\" style=\"box-sizing: inherit; margin-top: 12px !important; flex-basis: 33.3333%; line-height: 2rem;\"><svg version=\"1.1\" viewBox=\"0 0 24 19\" class=\"svg-icon svg-fill\" alt=\"Mạng gia đình\" style=\"width: 24px; height: 24px;\"><g fill=\"#000\" fill-rule=\"evenodd\"><path pid=\"0\" d=\"M21.5 10.99h-4.141c-3.3 0-8.253.018-14.86.055C1.123 11.045 0 12.122 0 13.5v2.938c0 1.378 1.122 2.5 2.5 2.5h19c1.378 0 2.5-1.122 2.5-2.5-.002-1.04-.004-2.02-.004-2.938a2.51 2.51 0 00-2.496-2.51zm0 7.01h-19c-.827 0-1.5-.673-1.5-1.5v-3c0-.827.673-1.5 1.5-1.5h19c.827 0 1.5.673 1.5 1.5v3c0 .827-.673 1.5-1.5 1.5z\" fill-rule=\"nonzero\"></path><path pid=\"1\" d=\"M17.5 4.261a.5.5 0 00-.5.5v7a.5.5 0 001 0v-7a.5.5 0 00-.5-.5z\"></path><circle pid=\"2\" cx=\"3.5\" cy=\"14.761\" r=\"1\"></circle><circle pid=\"3\" cx=\"6.5\" cy=\"14.761\" r=\"1\"></circle><circle pid=\"4\" cx=\"9.5\" cy=\"14.761\" r=\"1\"></circle><circle pid=\"5\" cx=\"12.5\" cy=\"14.761\" r=\"1\"></circle><path pid=\"6\" d=\"M20.5 14.261h-5a.5.5 0 000 1h5a.5.5 0 000-1zM16 4.761c0-.4.156-.777.439-1.06a.5.5 0 00-.707-.708A2.484 2.484 0 0015 4.761c0 .668.26 1.296.732 1.768a.502.502 0 00.707 0 .5.5 0 000-.707A1.492 1.492 0 0116 4.762zM19.268 2.993a.5.5 0 00-.707.707c.283.284.439.66.439 1.061 0 .401-.156.778-.44 1.061a.5.5 0 00.708.707c.472-.472.732-1.1.732-1.768 0-.668-.26-1.296-.732-1.768z\"></path><path pid=\"7\" d=\"M15.024 2.287a.5.5 0 00-.707-.707 4.506 4.506 0 000 6.364.502.502 0 00.707 0 .5.5 0 000-.707 3.505 3.505 0 010-4.95zM20.682 1.58a.5.5 0 00-.707.707 3.505 3.505 0 010 4.95.5.5 0 00.707.707 4.506 4.506 0 000-6.364z\"></path><path pid=\"8\" d=\"M13.61.873a.5.5 0 00-.707-.707 6.508 6.508 0 000 9.192.502.502 0 00.707 0 .5.5 0 000-.707 5.505 5.505 0 010-7.778zM22.096.166a.5.5 0 00-.707.707 5.505 5.505 0 010 7.778.5.5 0 00.707.707 6.508 6.508 0 000-9.192z\"></path></g></svg>&nbsp;<span style=\"box-sizing: inherit; margin-left: 0.75rem;\">Internet</span></li></ul></div><div item=\"[object Object]\" style=\"box-sizing: inherit;\"><h4 class=\"mt--24 mb--0\" style=\"box-sizing: inherit; line-height: 1.25; margin-bottom: 1rem; font-size: 1.25rem; margin-top: 24px !important;\">Tiện ích bếp</h4><ul class=\"list list--3 is-flex\" style=\"padding-left: 0px; list-style: none; display: flex; flex-wrap: wrap; font-size: 0.875rem; color: rgb(85, 85, 85);\"><li class=\"mt--12\" style=\"box-sizing: inherit; margin-top: 12px !important; flex-basis: 33.3333%; line-height: 2rem;\"><svg version=\"1.1\" viewBox=\"0 0 24 24\" class=\"svg-icon svg-fill\" alt=\"\" style=\"width: 24px; height: 24px;\"><g fill-rule=\"evenodd\" transform=\"translate(1)\"><path pid=\"0\" d=\"M2 0h18a2 2 0 012 2v20a2 2 0 01-2 2H2a2 2 0 01-2-2V2a2 2 0 012-2zm1 1a2 2 0 00-2 2v18a2 2 0 002 2h16a2 2 0 002-2V3a2 2 0 00-2-2H3z\"></path><path pid=\"1\" d=\"M11 19a8 8 0 110-16 8 8 0 010 16zm0-1a7 7 0 100-14 7 7 0 000 14z\"></path><rect pid=\"2\" width=\"5\" height=\"1\" x=\"14\" y=\"21\" rx=\".5\"></rect><rect pid=\"3\" width=\"2\" height=\"1\" x=\"3\" y=\"21\" rx=\".5\"></rect><rect pid=\"4\" width=\"2\" height=\"1\" x=\"6\" y=\"21\" rx=\".5\"></rect></g></svg>&nbsp;<span style=\"box-sizing: inherit; margin-left: 0.75rem;\">Bếp điện</span></li><li class=\"mt--12\" style=\"box-sizing: inherit; margin-top: 12px !important; flex-basis: 33.3333%; line-height: 2rem;\"><svg version=\"1.1\" viewBox=\"0 0 24 24\" class=\"svg-icon svg-fill\" alt=\"\" style=\"width: 24px; height: 24px;\"><path pid=\"0\" fill=\"#000\" fill-rule=\"nonzero\" d=\"M17.5 0A1.5 1.5 0 0119 1.5v21a1.5 1.5 0 01-1.5 1.5h-11A1.5 1.5 0 015 22.5v-21A1.5 1.5 0 016.5 0h11zM6 13h12V1.5a.5.5 0 00-.5-.5h-11a.5.5 0 00-.5.5V13zm0 1v8.5a.5.5 0 00.5.5h11a.5.5 0 00.5-.5V14H6zm1-6.5a.5.5 0 011 0v4a.5.5 0 11-1 0v-4zm0 8a.5.5 0 111 0v4a.5.5 0 11-1 0v-4zm8.854 6.354a.5.5 0 01-.708-.708l1-1a.5.5 0 01.708.708l-1 1zm-3 0a.5.5 0 01-.708-.708l4-4a.5.5 0 01.708.708l-4 4z\"></path></svg>&nbsp;<span style=\"box-sizing: inherit; margin-left: 0.75rem;\">Tủ lạnh</span></li></ul></div><div item=\"[object Object]\" style=\"box-sizing: inherit;\"><h4 class=\"mt--24 mb--0\" style=\"box-sizing: inherit; line-height: 1.25; margin-bottom: 1rem; font-size: 1.25rem; margin-top: 24px !important;\">Tiện ích phòng</h4><ul class=\"list list--3 is-flex\" style=\"padding-left: 0px; list-style: none; display: flex; flex-wrap: wrap; font-size: 0.875rem; color: rgb(85, 85, 85);\"><li class=\"mt--12\" style=\"box-sizing: inherit; margin-top: 12px !important; flex-basis: 33.3333%; line-height: 2rem;\"><svg version=\"1.1\" viewBox=\"0 0 24 24\" class=\"svg-icon svg-fill\" alt=\"\" style=\"width: 24px; height: 24px;\"><g fill-rule=\"evenodd\"><path pid=\"0\" fill-rule=\"nonzero\" d=\"M23.485 13.987H18.2V6.87h.257a.468.468 0 000-.935h-.264A6.23 6.23 0 0011.977 0 6.23 6.23 0 005.76 5.936h-.264a.468.468 0 000 .935h.257v7.116H.468a.468.468 0 00-.468.468v9.03c0 .259.21.468.468.468h23.017c.259 0 .468-.21.468-.468v-9.03a.468.468 0 00-.468-.468zm-5.286.936h1.941v5.287H18.2v-5.287zM12.444.957a5.294 5.294 0 014.811 4.979h-1.608a3.708 3.708 0 00-3.203-3.203V.957zm0 2.721a2.772 2.772 0 012.258 2.258h-2.258V3.678zm0 5.543V6.87h3.269l-.89.89a.468.468 0 00.662.662l1.551-1.552h.227v7.116h-4.157l3.266-3.266a.468.468 0 00-.662-.661l-3.266 3.265V9.221zm4.82 5.702v5.287h-1.942v-5.287h1.941zm-4.82 0h1.942v5.287h-1.942v-5.287zM11.51.957v1.776a3.708 3.708 0 00-3.203 3.203H6.698a5.295 5.295 0 014.81-4.98zm0 2.721v2.258H9.25a2.772 2.772 0 012.258-2.258zm-4.82 8.427l1.551-1.552a.468.468 0 00-.661-.661l-.89.89v-3.91h4.819v2.155L9.25 11.285a.468.468 0 00.662.661l1.596-1.596v3.637H6.69v-1.882zm4.819 2.818v5.287H9.567v-5.287h1.942zm-4.819 0h1.942v5.287H6.69v-5.287zm-2.877 0h1.941v5.287H3.813v-5.287zm-2.877 0h1.941v5.287H.936v-5.287zm0 8.095v-1.872h22.082v1.872H.936zm22.082-2.808h-1.942v-5.287h1.942v5.287z\"></path><path pid=\"1\" d=\"M9.202 9.593a.468.468 0 00-.666-.658l-.008.008a.468.468 0 00.666.658l.008-.008zm4.671-.882l-.008.008a.468.468 0 00.661.662l.008-.008a.468.468 0 00-.661-.662z\"></path></g></svg>&nbsp;<span style=\"box-sizing: inherit; margin-left: 0.75rem;\">Ban Công</span></li></ul></div></div></div></div>', '', '<p style=\"box-sizing: inherit; margin-bottom: 1rem; color: rgb(34, 34, 34); font-family: Luxstay;\">·Đưa đón sân bay: giá đưa đón từ sân bay Nội Bài tới căn hộ The Galaxy Home 400.000VND / chiều / xe 4 chỗ</p><p style=\"box-sizing: inherit; margin-bottom: 1rem; color: rgb(34, 34, 34); font-family: Luxstay;\">Không hút thuốc trong căn hộ</p><p style=\"box-sizing: inherit; margin-bottom: 1rem; color: rgb(34, 34, 34); font-family: Luxstay;\">Không sử dụng chất kích thích</p><p style=\"box-sizing: inherit; margin-bottom: 1rem; color: rgb(34, 34, 34); font-family: Luxstay;\">Không mở tiệc trong căn hộ</p><p style=\"box-sizing: inherit; margin-bottom: 1rem; color: rgb(34, 34, 34); font-family: Luxstay;\">Không mang theo vật nuôi</p><p style=\"box-sizing: inherit; margin-bottom: 1rem; color: rgb(34, 34, 34); font-family: Luxstay;\">Vui lòng giữ im lặng sau 22h</p><p style=\"box-sizing: inherit; margin-bottom: 1rem; color: rgb(34, 34, 34); font-family: Luxstay;\">Vui lòng tắt các thiết bị khi bạn ra khỏi phòng</p>', '<span style=\"color: rgb(34, 34, 34); font-family: Luxstay;\">Bạn sẽ nhận được địa chỉ chính xác của chỗ ở sau khi hoàn tất đơn đặt phòng.</span><br>', '2021-07-24 22:55:19');
INSERT INTO `chitietkhachsan` (`id`, `id_khachsan`, `chitiet`, `gioithieu`, `tiennghi`, `danhgia`, `chinhsach`, `tienich`, `time`) VALUES
(4, 17, '                        <span style=\"color: rgb(34, 34, 34); font-family: Luxstay;\">The Royal Homies - Phú Mỹ Hưng tọa lạc tại Nội khu Hưng Gia 1, phường Tân Phong, quận 7. Khu dân dư đông đúc, an ninh thắt chặt bởi đội ngủ bảo vệ Phú Mỹ Hưng. Trung tâm hành chính và tập trung nhiều khu vui chơi giải trí, nhà hàng, quán ăn, quán cà phê, siêu thị, chợ, trung tâm mua sắm, thương mại, cách Trung tâm Hội nghị và Triển lãm Sài Gòn 1,3 km. Nơi lưu trú có tiện nghi nhà hàng phục vụ món ăn và thức uống có trong thực đơn, quầy lễ tân làm việc 24 giờ và dịch vụ phòng đến 15 giờ chiều mỗi ngày, WiFi được lắp đặt có thể sử dụng miễn phí trong toàn bộ khuôn viên.</span><br>                ', '                        <p style=\"box-sizing: inherit; margin-bottom: 1rem; font-family: Luxstay; color: rgb(34, 34, 34); line-height: 1.5rem !important;\">Tất cả các phòng được trang bị máy lạnh, lò vi sóng, bếp nấu ăn riêng từng phòng, tủ lạnh, ấm đun nước, chậu vệ sinh, máy sấy tóc và bàn làm việc. Tại các phòng của khách sạn được trang bị tủ quần áo, TV màn hình phẳng và phòng tắm riêng biệt.Tất cả các phòng điều có cửa sổ và tầm nhìn hướng đường phố và công viên, sân vườn</p><p style=\"box-sizing: inherit; margin-bottom: 1rem; font-family: Luxstay; color: rgb(34, 34, 34); line-height: 1.5rem !important;\">Du khách có thể thuê xe máy và xe hơi có tài xế tại chỗ nghỉ.</p><p style=\"box-sizing: inherit; margin-bottom: 1rem; font-family: Luxstay; color: rgb(34, 34, 34); line-height: 1.5rem !important;\">Bến Nhà Rồng và Bảo tàng Mỹ thuật đều nằm trong bán kính 7 km. Sân bay gần nhất là sân bay quốc tế Tân Sơn Nhất, cách đó 12 km, và khách sạn căn hộ này cung cấp dịch vụ đưa đón sân bay với một khoản phụ phí.</p><p style=\"box-sizing: inherit; margin-bottom: 1rem; font-family: Luxstay; color: rgb(34, 34, 34); line-height: 1.5rem !important;\"></p><p style=\"box-sizing: inherit; margin-bottom: 1rem; font-family: Luxstay; color: rgb(34, 34, 34); line-height: 1.5rem !important;\">Chúng tôi sử dụng ngôn ngữ của bạn!</p>                ', '<div class=\"title mt--60\" style=\"box-sizing: inherit; color: rgb(34, 34, 34); font-family: Luxstay; margin-top: 60px !important;\"><span style=\"box-sizing: inherit;\">Giới thiệu về các tiện nghi và dịch vụ tại nơi lưu trú</span></div><div class=\"is-flex amenities\" style=\"display: flex; flex-wrap: wrap; color: rgb(34, 34, 34); font-family: Luxstay;\"><div class=\"d-none d-sm-flex w--100\" style=\"box-sizing: inherit; width: 678px;\"><div class=\"fl-item-stretch\" style=\"box-sizing: inherit; flex: 1 0 0%;\"><div item=\"[object Object]\" style=\"box-sizing: inherit;\"><h4 class=\"mt--24 mb--0\" style=\"box-sizing: inherit; line-height: 1.25; margin-bottom: 1rem; font-size: 1.25rem; margin-top: 24px !important;\">Tiện ích</h4><ul class=\"list list--3 is-flex\" style=\"padding-left: 0px; list-style: none; display: flex; flex-wrap: wrap; font-size: 0.875rem; color: rgb(85, 85, 85);\"><li class=\"mt--12\" style=\"box-sizing: inherit; margin-top: 12px !important; flex-basis: 33.3333%; line-height: 2rem;\"><svg version=\"1.1\" viewBox=\"0 0 24 24\" class=\"svg-icon svg-fill\" alt=\"\" style=\"width: 24px; height: 24px;\"><g fill=\"#000\" fill-rule=\"nonzero\"><path pid=\"0\" d=\"M23.44 9.04a.502.502 0 01-.354-.146A14.9 14.9 0 0012.48 4.5 14.903 14.903 0 001.873 8.894a.5.5 0 01-.707-.707A15.896 15.896 0 0112.48 3.5c4.274 0 8.292 1.665 11.313 4.687a.5.5 0 01-.353.853z\"></path><path pid=\"1\" d=\"M20.612 11.868a.502.502 0 01-.354-.146c-4.289-4.288-11.268-4.288-15.557 0a.5.5 0 01-.707-.707c4.679-4.679 12.292-4.679 16.971 0a.5.5 0 01-.353.853z\"></path><path pid=\"2\" d=\"M17.783 14.697a.502.502 0 01-.354-.146 6.954 6.954 0 00-4.95-2.05c-1.87 0-3.627.728-4.95 2.05a.5.5 0 01-.707-.707 7.948 7.948 0 015.657-2.343c2.137 0 4.146.832 5.657 2.343a.5.5 0 01-.353.853zM12.48 20.5a2.503 2.503 0 01-2.5-2.5c0-1.378 1.122-2.5 2.5-2.5s2.5 1.122 2.5 2.5-1.122 2.5-2.5 2.5zm0-4c-.827 0-1.5.673-1.5 1.5s.673 1.5 1.5 1.5 1.5-.673 1.5-1.5-.673-1.5-1.5-1.5z\"></path></g></svg>&nbsp;<span style=\"box-sizing: inherit; margin-left: 0.75rem;\">Wifi</span></li><li class=\"mt--12\" style=\"box-sizing: inherit; margin-top: 12px !important; flex-basis: 33.3333%; line-height: 2rem;\"><svg version=\"1.1\" viewBox=\"0 0 24 24\" class=\"svg-icon svg-fill\" alt=\"\" style=\"width: 24px; height: 24px;\"><path pid=\"0\" fill=\"#000\" fill-rule=\"nonzero\" d=\"M16.293 14H8.707l-1.853 1.854a.5.5 0 01-.708-.708L7.293 14H3.5a.5.5 0 01-.5-.5v-11a.5.5 0 01.5-.5h18a.5.5 0 01.5.5v11a.5.5 0 01-.5.5h-3.793l1.147 1.146a.5.5 0 01-.708.708L16.293 14zM4 3v10h17V3H4zM3 21.5v1a.5.5 0 11-1 0V18a1.5 1.5 0 011.5-1.5h18A1.5 1.5 0 0123 18v4.5a.5.5 0 11-1 0v-1H3zm0-1h19V18a.5.5 0 00-.5-.5h-18a.5.5 0 00-.5.5v2.5zm8.5-1a.5.5 0 110-1h2a.5.5 0 110 1h-2zM5.854 5.854a.5.5 0 11-.708-.708l1-1a.5.5 0 11.708.708l-1 1zm0 3a.5.5 0 11-.708-.708l4-4a.5.5 0 11.708.708l-4 4z\"></path></svg>&nbsp;<span style=\"box-sizing: inherit; margin-left: 0.75rem;\">TV</span></li><li class=\"mt--12\" style=\"box-sizing: inherit; margin-top: 12px !important; flex-basis: 33.3333%; line-height: 2rem;\"><svg version=\"1.1\" viewBox=\"0 0 24 24\" class=\"svg-icon svg-fill\" alt=\"\" style=\"width: 24px; height: 24px;\"><path pid=\"0\" fill=\"#000\" fill-rule=\"nonzero\" d=\"M23 8.5h-2.085a1.5 1.5 0 01-2.83 0H1v4a.5.5 0 00.5.5h1v-.5A1.5 1.5 0 014 11h16a1.5 1.5 0 011.5 1.5v.5h1a.5.5 0 00.5-.5v-4zm0-1v-2a.5.5 0 00-.5-.5h-21a.5.5 0 00-.5.5v2h17.085a1.5 1.5 0 012.83 0H23zM20.5 13v-.5a.5.5 0 00-.5-.5H4a.5.5 0 00-.5.5v.5h17zm-19-9h21A1.5 1.5 0 0124 5.5v7a1.5 1.5 0 01-1.5 1.5h-21A1.5 1.5 0 010 12.5v-7A1.5 1.5 0 011.5 4zm5.886 16.182a.5.5 0 01-.772.636c-.817-.993-.817-2.086-.009-3.125.525-.674.525-1.248.009-1.875a.5.5 0 01.772-.636c.817.993.817 2.086.009 3.125-.525.674-.525 1.248-.009 1.875zm5 0a.5.5 0 01-.772.636c-.817-.993-.817-2.086-.009-3.125.525-.674.525-1.248.009-1.875a.5.5 0 01.772-.636c.817.993.817 2.086.009 3.125-.525.674-.525 1.248-.009 1.875zm5 0a.5.5 0 01-.772.636c-.817-.993-.817-2.086-.009-3.125.525-.674.525-1.248.009-1.875a.5.5 0 01.772-.636c.817.993.817 2.086.009 3.125-.525.674-.525 1.248-.009 1.875z\"></path></svg>&nbsp;<span style=\"box-sizing: inherit; margin-left: 0.75rem;\">Điều hoà</span></li><li class=\"mt--12\" style=\"box-sizing: inherit; margin-top: 12px !important; flex-basis: 33.3333%; line-height: 2rem;\"><svg version=\"1.1\" viewBox=\"0 0 24 24\" class=\"svg-icon svg-fill\" alt=\"\" style=\"width: 24px; height: 24px;\"><path pid=\"0\" d=\"M7.381 0c-1.457 0-2.7 1.065-2.7 1.065a.48.48 0 10.6.75S6.438.96 7.381.96c1.226 0 2.28.855 2.28.855l.12.09V3.84H9.211a.48.48 0 00-.39.48v2.4h-.48a4.336 4.336 0 00-4.32 4.32v2.73a.492.492 0 000 .285V21.6a2.41 2.41 0 002.4 2.4h11.52a2.41 2.41 0 002.4-2.4v-7.59a.488.488 0 000-.195V11.04a4.336 4.336 0 00-4.32-4.32h-.48v-2.4a.48.48 0 00-.48-.48h-.48V1.92h.48a.483.483 0 00.422-.238.485.485 0 000-.484.483.483 0 00-.422-.238h-.855a.45.45 0 00-.15-.015.422.422 0 00-.045.015h-3.645a.45.45 0 00-.15-.015.422.422 0 00-.045.015h-.06C9.894.786 8.87 0 7.381 0zm3.36 1.92h2.88v1.92h-2.88V1.92zm-.96 2.88h4.8v1.92h-4.8V4.8zm-1.44 2.88h7.68c1.85 0 3.36 1.51 3.36 3.36v2.4h-5.805c.026-.154.045-.319.045-.48a2.888 2.888 0 00-2.88-2.88 2.888 2.888 0 00-2.88 2.88c0 .161.019.326.045.48H4.981v-2.4c0-1.85 1.51-3.36 3.36-3.36zm2.4 3.36c1.067 0 1.92.853 1.92 1.92s-.853 1.92-1.92 1.92a1.91 1.91 0 01-1.74-1.11v-.015l-.015-.03-.015-.015c-.002-.004.002-.011 0-.015l-.015-.015a1.944 1.944 0 01-.135-.72c0-1.067.853-1.92 1.92-1.92zm-5.76 3.36h3.27a2.89 2.89 0 002.49 1.44 2.89 2.89 0 002.49-1.44h6.15v7.2a1.44 1.44 0 01-1.44 1.44H6.421a1.44 1.44 0 01-1.44-1.44v-7.2zm10.08 1.44c-1.056 0-1.92.864-1.92 1.92s.864 1.92 1.92 1.92 1.92-.864 1.92-1.92-.864-1.92-1.92-1.92zm0 .96c.536 0 .96.424.96.96s-.424.96-.96.96a.952.952 0 01-.96-.96c0-.536.424-.96.96-.96zm-3.84 2.4c-.79 0-1.44.65-1.44 1.44 0 .79.65 1.44 1.44 1.44.79 0 1.44-.65 1.44-1.44 0-.79-.65-1.44-1.44-1.44zm0 .96c.27 0 .48.21.48.48s-.21.48-.48.48-.48-.21-.48-.48.21-.48.48-.48z\" fill=\"#000\" fill-rule=\"nonzero\"></path></svg>&nbsp;<span style=\"box-sizing: inherit; margin-left: 0.75rem;\">Dầu gội, dầu xả</span></li><li class=\"mt--12\" style=\"box-sizing: inherit; margin-top: 12px !important; flex-basis: 33.3333%; line-height: 2rem;\"><svg version=\"1.1\" viewBox=\"0 0 24 24\" class=\"svg-icon svg-fill\" alt=\"\" style=\"width: 24px; height: 24px;\"><path pid=\"0\" fill=\"#000\" d=\"M0 7.429C0 3.367 1.964 0 4.571 0H19.43C22.036 0 24 3.367 24 7.429c0 4.06-1.964 7.428-4.571 7.428H16v8.572a.571.571 0 01-.571.571H.57a.571.571 0 01-.57-.571v-16zm14.857 7.428H4.571c-1.394 0-2.604-.963-3.428-2.48v10.48h13.714v-8zm4.572-1.143c1.81 0 3.428-2.772 3.428-6.285 0-3.514-1.617-6.286-3.428-6.286H7.035c1.286 1.323 2.108 3.66 2.108 6.286 0 2.626-.822 4.962-2.108 6.285H19.43zm-14.858 0C6.383 13.714 8 10.942 8 7.43c0-3.514-1.617-6.286-3.429-6.286-1.81 0-3.428 2.772-3.428 6.286 0 3.513 1.617 6.285 3.428 6.285zm0-4c-1.007 0-1.714-1.06-1.714-2.285 0-1.226.707-2.286 1.714-2.286 1.008 0 1.715 1.06 1.715 2.286 0 1.225-.707 2.285-1.715 2.285zm0-1.143c.256 0 .572-.474.572-1.142 0-.669-.316-1.143-.572-1.143-.255 0-.571.474-.571 1.143 0 .668.316 1.142.571 1.142z\" fill-rule=\"evenodd\"></path></svg>&nbsp;<span style=\"box-sizing: inherit; margin-left: 0.75rem;\">Giấy vệ sinh</span></li><li class=\"mt--12\" style=\"box-sizing: inherit; margin-top: 12px !important; flex-basis: 33.3333%; line-height: 2rem;\"><svg version=\"1.1\" viewBox=\"0 0 24 24\" class=\"svg-icon svg-fill\" alt=\"\" style=\"width: 24px; height: 24px;\"><g fill-rule=\"evenodd\"><path pid=\"0\" fill-rule=\"nonzero\" d=\"M22.527 6.497h-.366v-.202c.107-1.298-.245-2.453-.993-3.254a3.18 3.18 0 00-2.443-1.024H3.945c-1.376 0-2.496 1.102-2.496 2.457v2.023h-.023C.64 6.497 0 7.127 0 7.901v.359c0 .774.64 1.403 1.426 1.403h.023v10.865c0 1.355 1.12 2.457 2.496 2.457h12.188c1.417 0 2.208-.28 2.646-.934.417-.624.421-1.51.421-2.537h1.757c.675 0 1.204-.67 1.204-1.524V9.663h.366c.787 0 1.426-.63 1.426-1.403V7.9c0-.773-.64-1.403-1.426-1.403zM1.45 8.742h-.023a.487.487 0 01-.49-.482V7.9c0-.265.22-.482.49-.482h.023v1.324zM21.225 6.36v.137H19.21c.043-.329.15-.593.314-.77a.773.773 0 01.577-.245c.39 0 .899.276 1.125.878zm-2.96 13.126c0 1.032-.019 1.686-.267 2.058-.162.242-.52.52-1.865.52H3.945c-.86 0-1.56-.69-1.56-1.536V18.05h15.88v1.435zm0-2.356H2.384v-1.98h15.88v1.98zm.572-12.028c-.307.327-.655.949-.573 2.057v7.07H2.384v-.88h4.578a.464.464 0 00.468-.46.465.465 0 00-.468-.461H2.385V4.474c0-.847.7-1.536 1.56-1.536h14.803a2.252 2.252 0 011.731.726c.298.32.513.72.638 1.18A2.001 2.001 0 0020.1 4.56c-.487 0-.935.192-1.263.541zm2.388 12.888c0 .396-.2.603-.268.603H19.2v-8.93h2.025v8.327zm1.793-9.73c0 .266-.22.482-.49.482H19.2V7.418h3.327c.27 0 .49.217.49.483v.359z\"></path><path pid=\"1\" d=\"M8.428 12.428h-.037a.464.464 0 00-.468.46c0 .255.21.461.468.461h.037a.464.464 0 00.468-.46.465.465 0 00-.468-.461z\"></path></g></svg>&nbsp;<span style=\"box-sizing: inherit; margin-left: 0.75rem;\">Khăn tắm</span></li><li class=\"mt--12\" style=\"box-sizing: inherit; margin-top: 12px !important; flex-basis: 33.3333%; line-height: 2rem;\"><svg version=\"1.1\" viewBox=\"0 0 24 24\" class=\"svg-icon svg-fill\" alt=\"\" style=\"width: 24px; height: 24px;\"><path pid=\"0\" d=\"M19.824 1.261L18.105 2.98l-3.273.399-.123.014-.096.068L2.745 12.99l-.014.014-.013.027-1.155 1.141-.303.317 8.25 8.25.317-.303 1.14-1.155.028-.014.014-.013 9.556-11.825.083-.097.014-.137.357-3.3 1.416-1.402.303-.317-2.915-2.915zm0 1.252L21.5 4.176l-.893.894-1.678-1.664.894-.894zm-1.692 1.36h.014l1.98 1.98v.014l-.234 2.324-4.056-4.056 2.296-.261zm-3.286.523l4.785 4.785-9.281 11.482-.027.04-.798.785-7.013-7.013.784-.797.042-.028 11.508-9.254zM12.11 8.824c-.555 0-1.102.235-1.526.66-.394.393-.518.844-.605 1.168-.047.17-.072.298-.138.413-.063.113-.136.23-.206.344-.345.548-.928 1.464-.206 2.186.178.179.399.3.632.344.045.233.164.45.344.632.22.22.52.344.839.344.488 0 .923-.282 1.347-.55.114-.07.23-.143.344-.206.115-.066.242-.091.412-.138.325-.087.776-.211 1.17-.605.905-.906.872-2.195-.07-3.135a2.62 2.62 0 00-.398-.33 2.62 2.62 0 00-.33-.399c-.47-.469-1.021-.728-1.609-.728zm0 .88c.337 0 .68.158.99.467.138.138.234.286.303.427.14.068.287.163.426.302.603.603.608 1.356.069 1.897-.392.392-.901.32-1.403.605-.455.26-.928.633-1.251.633a.303.303 0 01-.22-.082c-.155-.155-.143-.353.055-.55.273-.274.58-.686.825-1.046.093-.137-.028-.288-.165-.288a.148.148 0 00-.097.027c-.359.244-.773.552-1.044.825-.109.109-.217.165-.317.165a.332.332 0 01-.234-.11c-.287-.287.226-.897.55-1.471.286-.504.214-.999.606-1.389.262-.264.586-.412.907-.412zm-7.92 3.41l-.619.632.317.316.618-.632-.316-.316zm.646.646l-.632.619.316.316.632-.619-.316-.316zm.633.633l-.619.618.316.317.619-.62-.316-.316zm.632.632l-.619.633.317.316.619-.633-.317-.316zm.646.646l-.632.619.316.316.633-.619-.317-.316zm.633.633l-.619.619.316.316.62-.619-.317-.316zm.633.632l-.62.633.317.316.619-.633-.317-.316zm.646.647l-.633.618.316.317.633-.62-.316-.315zm.632.632l-.619.619.317.316.618-.619-.316-.316zm.633.633l-.619.632.316.316.619-.632-.316-.316zm.646.646l-.633.619.317.316.632-.619-.316-.316z\" fill=\"#000\" fill-rule=\"nonzero\"></path></svg>&nbsp;<span style=\"box-sizing: inherit; margin-left: 0.75rem;\">Kem đánh răng</span></li><li class=\"mt--12\" style=\"box-sizing: inherit; margin-top: 12px !important; flex-basis: 33.3333%; line-height: 2rem;\"><svg version=\"1.1\" viewBox=\"0 0 24 24\" class=\"svg-icon svg-fill\" alt=\"\" style=\"width: 24px; height: 24px;\"><g fill-rule=\"evenodd\"><path pid=\"0\" d=\"M7.2 16.902a2.105 2.105 0 01-1.654-.57 1.804 1.804 0 01-.351-1.328.393.393 0 00-.331-.443.4.4 0 00-.458.315 2.576 2.576 0 00.526 1.96c.488.564 1.251.85 2.268.85.22 0 .4-.175.4-.392a.396.396 0 00-.4-.392zm2 0h-.4c-.22 0-.4.176-.4.392 0 .217.18.392.4.392h.4c.22 0 .4-.175.4-.392a.396.396 0 00-.4-.392zm7.6-5.49c.61-.059 1.215.15 1.654.569.288.381.414.858.351 1.329a.393.393 0 00.395.455.398.398 0 00.394-.328 2.573 2.573 0 00-.526-1.959c-.488-.564-1.251-.85-2.268-.85-.22 0-.4.175-.4.392 0 .216.18.392.4.392zm-1.2-.392a.396.396 0 00-.4-.393h-.4c-.22 0-.4.176-.4.393 0 .216.18.392.4.392h.4c.22 0 .4-.176.4-.392z\"></path><path pid=\"1\" fill-rule=\"nonzero\" d=\"M2 9.451c1.104 0 2-.878 2-1.96 0-1.084-.896-1.962-2-1.962S0 6.407 0 7.49c.001 1.083.896 1.96 2 1.961zm0-3.137c.663 0 1.2.526 1.2 1.176 0 .65-.537 1.177-1.2 1.177-.663 0-1.2-.527-1.2-1.177S1.337 6.314 2 6.314zm8.8.392c0 .866.716 1.569 1.6 1.569.884 0 1.6-.703 1.6-1.57 0-.865-.716-1.568-1.6-1.568-.884 0-1.6.703-1.6 1.569zm2.4 0a.792.792 0 01-.8.784.792.792 0 01-.8-.784c0-.433.358-.784.8-.784.442 0 .8.35.8.784zM4.8 4.745c0 1.516 1.254 2.745 2.8 2.745 1.546 0 2.8-1.229 2.8-2.745S9.146 2 7.6 2c-1.546.002-2.798 1.23-2.8 2.745zm4.8 0c0 1.083-.896 1.96-2 1.96s-2-.877-2-1.96.896-1.96 2-1.96 1.999.878 2 1.96z\"></path><path pid=\"2\" d=\"M7.197 5.014a.722.722 0 01-.017-.54.39.39 0 00-.255-.495.402.402 0 00-.505.25c-.145.413-.1.867.127 1.243a1.22 1.22 0 001.053.45c.22 0 .4-.176.4-.393a.396.396 0 00-.4-.392.527.527 0 01-.403-.123z\"></path><path pid=\"3\" fill-rule=\"nonzero\" d=\"M21.6 16.118a2.38 2.38 0 00-.431.042c.02-.144.03-.29.031-.435v-3.137c-.002-1.948-1.613-3.527-3.6-3.53H6.4c-1.987.003-3.598 1.582-3.6 3.53v3.137c.002 1.949 1.613 3.528 3.6 3.53h6.54a2.397 2.397 0 002.26 1.569c.349 0 .694-.076 1.008-.224A2.4 2.4 0 0018.4 22a2.4 2.4 0 002.192-1.4c.314.148.66.224 1.008.224 1.325 0 2.4-1.054 2.4-2.353 0-1.3-1.075-2.353-2.4-2.353zm-8.8 2.353H6.4c-1.546-.002-2.798-1.23-2.8-2.746v-3.137c.002-1.515 1.254-2.743 2.8-2.745h11.2c1.546.002 2.798 1.23 2.8 2.745v3.137c0 .086-.01.17-.018.253a2.409 2.409 0 00-2.196-1.028 2.39 2.39 0 00-1.978 1.39 2.375 2.375 0 00-1.008-.222c-1.325.001-2.399 1.054-2.4 2.353zm8.8 1.568a1.598 1.598 0 01-.988-.345.406.406 0 00-.387-.059.394.394 0 00-.253.294 1.588 1.588 0 01-1.57 1.286 1.588 1.588 0 01-1.57-1.286.395.395 0 00-.253-.294.406.406 0 00-.387.059c-.28.223-.63.345-.992.345-.884 0-1.6-.702-1.6-1.568 0-.867.716-1.569 1.6-1.569.36.001.708.123.988.345.11.085.256.107.387.06a.394.394 0 00.253-.295 1.588 1.588 0 011.57-1.285c.772 0 1.433.54 1.57 1.285a.395.395 0 00.253.294c.13.048.278.026.387-.059.28-.222.63-.344.992-.345.884 0 1.6.702 1.6 1.569 0 .866-.716 1.568-1.6 1.568z\"></path></g></svg>&nbsp;<span style=\"box-sizing: inherit; margin-left: 0.75rem;\">Xà phòng tắm</span></li><li class=\"mt--12\" style=\"box-sizing: inherit; margin-top: 12px !important; flex-basis: 33.3333%; line-height: 2rem;\"><svg version=\"1.1\" viewBox=\"0 0 24 24\" class=\"svg-icon svg-fill\" alt=\"\" style=\"width: 24px; height: 24px;\"><g fill=\"none\" fill-rule=\"evenodd\"><path pid=\"0\" d=\"M0 0h24v24H0z\"></path><path pid=\"1\" fill=\"#000\" fill-rule=\"nonzero\" d=\"M17.571 3.452L6.434 2.07a5.872 5.872 0 00-.669-.038C2.586 2.03 0 4.62 0 7.805v.12a5.78 5.78 0 002.932 5.028l1.54 6.226c.17.689.599 1.27 1.206 1.636a2.639 2.639 0 002.01.304l.042-.01a2.638 2.638 0 001.637-1.206 2.639 2.639 0 00.304-2.01l-1.112-4.495 9.012-1.12a.494.494 0 00.434-.49V3.943c0-.25-.186-.46-.434-.49zM8.711 18.13c.107.433.039.88-.191 1.262-.23.381-.595.65-1.027.757l-.043.01c-.432.107-.88.04-1.26-.19a1.656 1.656 0 01-.758-1.028l-1.36-5.495a5.737 5.737 0 002.367.215l1.131-.14 1.14 4.61zm8.305-6.78L6.32 12.68A4.786 4.786 0 01.99 7.925v-.12a4.786 4.786 0 015.328-4.754L17.016 4.38v6.97z\"></path><path pid=\"2\" fill=\"#000\" fill-rule=\"nonzero\" d=\"M2.763 7.865a3.293 3.293 0 003.29 3.29 3.293 3.293 0 003.288-3.29 3.293 3.293 0 00-3.289-3.289 3.293 3.293 0 00-3.289 3.29zm5.59 0c0 1.269-1.032 2.3-2.3 2.3a2.303 2.303 0 01-2.301-2.3c0-1.268 1.032-2.3 2.3-2.3 1.269 0 2.3 1.032 2.3 2.3z\"></path><path pid=\"3\" fill=\"#000\" d=\"M19.196 6.305c.288 0 .426.155.688.476.289.356.684.843 1.455.843s1.166-.487 1.455-.843c.262-.321.4-.476.687-.476a.494.494 0 100-.99c-.77 0-1.166.487-1.455.843-.261.322-.4.477-.687.477-.288 0-.426-.155-.687-.477-.29-.356-.685-.842-1.455-.842a.494.494 0 000 .989zm4.285 1.998c-.77 0-1.166.486-1.455.842-.261.322-.4.477-.687.477-.288 0-.426-.155-.687-.477-.29-.356-.685-.842-1.455-.842a.494.494 0 100 .989c.287 0 .425.155.687.476.289.356.684.843 1.455.843s1.166-.487 1.455-.843c.262-.321.4-.476.688-.476a.494.494 0 100-.99z\"></path></g></svg>&nbsp;<span style=\"box-sizing: inherit; margin-left: 0.75rem;\">Máy sấy</span></li><li class=\"mt--12\" style=\"box-sizing: inherit; margin-top: 12px !important; flex-basis: 33.3333%; line-height: 2rem;\"><svg version=\"1.1\" viewBox=\"0 0 24 19\" class=\"svg-icon svg-fill\" alt=\"Mạng gia đình\" style=\"width: 24px; height: 24px;\"><g fill=\"#000\" fill-rule=\"evenodd\"><path pid=\"0\" d=\"M21.5 10.99h-4.141c-3.3 0-8.253.018-14.86.055C1.123 11.045 0 12.122 0 13.5v2.938c0 1.378 1.122 2.5 2.5 2.5h19c1.378 0 2.5-1.122 2.5-2.5-.002-1.04-.004-2.02-.004-2.938a2.51 2.51 0 00-2.496-2.51zm0 7.01h-19c-.827 0-1.5-.673-1.5-1.5v-3c0-.827.673-1.5 1.5-1.5h19c.827 0 1.5.673 1.5 1.5v3c0 .827-.673 1.5-1.5 1.5z\" fill-rule=\"nonzero\"></path><path pid=\"1\" d=\"M17.5 4.261a.5.5 0 00-.5.5v7a.5.5 0 001 0v-7a.5.5 0 00-.5-.5z\"></path><circle pid=\"2\" cx=\"3.5\" cy=\"14.761\" r=\"1\"></circle><circle pid=\"3\" cx=\"6.5\" cy=\"14.761\" r=\"1\"></circle><circle pid=\"4\" cx=\"9.5\" cy=\"14.761\" r=\"1\"></circle><circle pid=\"5\" cx=\"12.5\" cy=\"14.761\" r=\"1\"></circle><path pid=\"6\" d=\"M20.5 14.261h-5a.5.5 0 000 1h5a.5.5 0 000-1zM16 4.761c0-.4.156-.777.439-1.06a.5.5 0 00-.707-.708A2.484 2.484 0 0015 4.761c0 .668.26 1.296.732 1.768a.502.502 0 00.707 0 .5.5 0 000-.707A1.492 1.492 0 0116 4.762zM19.268 2.993a.5.5 0 00-.707.707c.283.284.439.66.439 1.061 0 .401-.156.778-.44 1.061a.5.5 0 00.708.707c.472-.472.732-1.1.732-1.768 0-.668-.26-1.296-.732-1.768z\"></path><path pid=\"7\" d=\"M15.024 2.287a.5.5 0 00-.707-.707 4.506 4.506 0 000 6.364.502.502 0 00.707 0 .5.5 0 000-.707 3.505 3.505 0 010-4.95zM20.682 1.58a.5.5 0 00-.707.707 3.505 3.505 0 010 4.95.5.5 0 00.707.707 4.506 4.506 0 000-6.364z\"></path><path pid=\"8\" d=\"M13.61.873a.5.5 0 00-.707-.707 6.508 6.508 0 000 9.192.502.502 0 00.707 0 .5.5 0 000-.707 5.505 5.505 0 010-7.778zM22.096.166a.5.5 0 00-.707.707 5.505 5.505 0 010 7.778.5.5 0 00.707.707 6.508 6.508 0 000-9.192z\"></path></g></svg>&nbsp;<span style=\"box-sizing: inherit; margin-left: 0.75rem;\">Internet</span></li></ul></div><div item=\"[object Object]\" style=\"box-sizing: inherit;\"><h4 class=\"mt--24 mb--0\" style=\"box-sizing: inherit; line-height: 1.25; margin-bottom: 1rem; font-size: 1.25rem; margin-top: 24px !important;\">Tiện ích bếp</h4><ul class=\"list list--3 is-flex\" style=\"padding-left: 0px; list-style: none; display: flex; flex-wrap: wrap; font-size: 0.875rem; color: rgb(85, 85, 85);\"><li class=\"mt--12\" style=\"box-sizing: inherit; margin-top: 12px !important; flex-basis: 33.3333%; line-height: 2rem;\"><svg version=\"1.1\" viewBox=\"0 0 24 24\" class=\"svg-icon svg-fill\" alt=\"\" style=\"width: 24px; height: 24px;\"><g fill-rule=\"evenodd\" transform=\"translate(1)\"><path pid=\"0\" d=\"M2 0h18a2 2 0 012 2v20a2 2 0 01-2 2H2a2 2 0 01-2-2V2a2 2 0 012-2zm1 1a2 2 0 00-2 2v18a2 2 0 002 2h16a2 2 0 002-2V3a2 2 0 00-2-2H3z\"></path><path pid=\"1\" d=\"M11 19a8 8 0 110-16 8 8 0 010 16zm0-1a7 7 0 100-14 7 7 0 000 14z\"></path><rect pid=\"2\" width=\"5\" height=\"1\" x=\"14\" y=\"21\" rx=\".5\"></rect><rect pid=\"3\" width=\"2\" height=\"1\" x=\"3\" y=\"21\" rx=\".5\"></rect><rect pid=\"4\" width=\"2\" height=\"1\" x=\"6\" y=\"21\" rx=\".5\"></rect></g></svg>&nbsp;<span style=\"box-sizing: inherit; margin-left: 0.75rem;\">Bếp điện</span></li><li class=\"mt--12\" style=\"box-sizing: inherit; margin-top: 12px !important; flex-basis: 33.3333%; line-height: 2rem;\"><svg version=\"1.1\" viewBox=\"0 0 24 24\" class=\"svg-icon svg-fill\" alt=\"\" style=\"width: 24px; height: 24px;\"><path pid=\"0\" fill=\"#000\" fill-rule=\"nonzero\" d=\"M16 10V8.5a.5.5 0 00-.5-.5h-11a.5.5 0 00-.5.5v8a.5.5 0 00.5.5h11a.5.5 0 00.5-.5V15h-.5a1.5 1.5 0 01-1.5-1.5v-2a1.5 1.5 0 011.5-1.5h.5zm0 1h-.5a.5.5 0 00-.5.5v2a.5.5 0 00.5.5h.5v-3zM1.5 4h21A1.5 1.5 0 0124 5.5v14a1.5 1.5 0 01-1.5 1.5h-21A1.5 1.5 0 010 19.5v-14A1.5 1.5 0 011.5 4zm0 1a.5.5 0 00-.5.5v14a.5.5 0 00.5.5h21a.5.5 0 00.5-.5v-14a.5.5 0 00-.5-.5h-21zm3 2h11A1.5 1.5 0 0117 8.5v8a1.5 1.5 0 01-1.5 1.5h-11A1.5 1.5 0 013 16.5v-8A1.5 1.5 0 014.5 7zm1.354 3.853a.5.5 0 01-.708-.707l1-1a.5.5 0 01.708.707l-1 1zm0 3a.5.5 0 01-.708-.707l4-4a.5.5 0 01.708.707l-4 4zM20 9a1 1 0 110-2 1 1 0 010 2zm0 4a1 1 0 110-2 1 1 0 010 2zm0 4a1 1 0 110-2 1 1 0 010 2z\"></path></svg>&nbsp;<span style=\"box-sizing: inherit; margin-left: 0.75rem;\">Lò vi sóng</span></li><li class=\"mt--12\" style=\"box-sizing: inherit; margin-top: 12px !important; flex-basis: 33.3333%; line-height: 2rem;\"><svg version=\"1.1\" viewBox=\"0 0 24 24\" class=\"svg-icon svg-fill\" alt=\"\" style=\"width: 24px; height: 24px;\"><path pid=\"0\" fill=\"#000\" fill-rule=\"nonzero\" d=\"M17.5 0A1.5 1.5 0 0119 1.5v21a1.5 1.5 0 01-1.5 1.5h-11A1.5 1.5 0 015 22.5v-21A1.5 1.5 0 016.5 0h11zM6 13h12V1.5a.5.5 0 00-.5-.5h-11a.5.5 0 00-.5.5V13zm0 1v8.5a.5.5 0 00.5.5h11a.5.5 0 00.5-.5V14H6zm1-6.5a.5.5 0 011 0v4a.5.5 0 11-1 0v-4zm0 8a.5.5 0 111 0v4a.5.5 0 11-1 0v-4zm8.854 6.354a.5.5 0 01-.708-.708l1-1a.5.5 0 01.708.708l-1 1zm-3 0a.5.5 0 01-.708-.708l4-4a.5.5 0 01.708.708l-4 4z\"></path></svg>&nbsp;<span style=\"box-sizing: inherit; margin-left: 0.75rem;\">Tủ lạnh</span></li></ul></div><div item=\"[object Object]\" style=\"box-sizing: inherit;\"><h4 class=\"mt--24 mb--0\" style=\"box-sizing: inherit; line-height: 1.25; margin-bottom: 1rem; font-size: 1.25rem; margin-top: 24px !important;\">Tiện ích phòng</h4><ul class=\"list list--3 is-flex\" style=\"padding-left: 0px; list-style: none; display: flex; flex-wrap: wrap; font-size: 0.875rem; color: rgb(85, 85, 85);\"><li class=\"mt--12\" style=\"box-sizing: inherit; margin-top: 12px !important; flex-basis: 33.3333%; line-height: 2rem;\"><svg version=\"1.1\" viewBox=\"0 0 24 24\" class=\"svg-icon svg-fill\" alt=\"\" style=\"width: 24px; height: 24px;\"><g fill-rule=\"evenodd\"><path pid=\"0\" fill-rule=\"nonzero\" d=\"M23.485 13.987H18.2V6.87h.257a.468.468 0 000-.935h-.264A6.23 6.23 0 0011.977 0 6.23 6.23 0 005.76 5.936h-.264a.468.468 0 000 .935h.257v7.116H.468a.468.468 0 00-.468.468v9.03c0 .259.21.468.468.468h23.017c.259 0 .468-.21.468-.468v-9.03a.468.468 0 00-.468-.468zm-5.286.936h1.941v5.287H18.2v-5.287zM12.444.957a5.294 5.294 0 014.811 4.979h-1.608a3.708 3.708 0 00-3.203-3.203V.957zm0 2.721a2.772 2.772 0 012.258 2.258h-2.258V3.678zm0 5.543V6.87h3.269l-.89.89a.468.468 0 00.662.662l1.551-1.552h.227v7.116h-4.157l3.266-3.266a.468.468 0 00-.662-.661l-3.266 3.265V9.221zm4.82 5.702v5.287h-1.942v-5.287h1.941zm-4.82 0h1.942v5.287h-1.942v-5.287zM11.51.957v1.776a3.708 3.708 0 00-3.203 3.203H6.698a5.295 5.295 0 014.81-4.98zm0 2.721v2.258H9.25a2.772 2.772 0 012.258-2.258zm-4.82 8.427l1.551-1.552a.468.468 0 00-.661-.661l-.89.89v-3.91h4.819v2.155L9.25 11.285a.468.468 0 00.662.661l1.596-1.596v3.637H6.69v-1.882zm4.819 2.818v5.287H9.567v-5.287h1.942zm-4.819 0h1.942v5.287H6.69v-5.287zm-2.877 0h1.941v5.287H3.813v-5.287zm-2.877 0h1.941v5.287H.936v-5.287zm0 8.095v-1.872h22.082v1.872H.936zm22.082-2.808h-1.942v-5.287h1.942v5.287z\"></path><path pid=\"1\" d=\"M9.202 9.593a.468.468 0 00-.666-.658l-.008.008a.468.468 0 00.666.658l.008-.008zm4.671-.882l-.008.008a.468.468 0 00.661.662l.008-.008a.468.468 0 00-.661-.662z\"></path></g></svg>&nbsp;<span style=\"box-sizing: inherit; margin-left: 0.75rem;\">Ban Công</span></li></ul></div></div></div></div>', '', '                        <p style=\"box-sizing: inherit; margin-bottom: 1rem; color: rgb(34, 34, 34); font-family: Luxstay;\">Quy định thời gian nhận và trả phòng :</p><p style=\"box-sizing: inherit; margin-bottom: 1rem; color: rgb(34, 34, 34); font-family: Luxstay;\">Giờ nhận phòng: sau 14 giờ ngày khách đến</p><p style=\"box-sizing: inherit; margin-bottom: 1rem; color: rgb(34, 34, 34); font-family: Luxstay;\">Giờ trả phòng: trước 12 giờ trưa ngày khách đi</p><p style=\"box-sizing: inherit; margin-bottom: 1rem; color: rgb(34, 34, 34); font-family: Luxstay;\">Trường hợp quý khách có nhu cầu nhận phòng sớm hoặc trả phòng muộn, quý khách vui lòng thông báo trước hoặc liên hệ quầy lễ tân để được hỗ trợ báo phụ phí cũng như hỗ trợ mọi nhu cầu tại nơi lưu trú.</p>                ', '                        <div class=\"col-md-8 col-xs-12\" style=\"box-sizing: inherit; flex-basis: 66.6667%; padding-left: 0.5rem; padding-right: 0.5rem; max-width: 66.6667%; color: rgb(34, 34, 34); font-family: Luxstay;\"><div class=\"detail-left\" style=\"box-sizing: inherit; padding-right: 50px;\"><p id=\"map_desc\" class=\"mb--0 pt--24\" style=\"box-sizing: inherit; padding-top: 24px !important;\">Bạn sẽ nhận được địa chỉ chính xác của chỗ ở sau khi hoàn tất đơn đặt phòng.</p></div></div><div class=\"col-md-4 col-xs-12 d-none d-md-block\" style=\"box-sizing: inherit; flex-basis: 33.3333%; padding-left: 0.5rem; padding-right: 0.5rem; max-width: 33.3333%; color: rgb(34, 34, 34); font-family: Luxstay;\"></div>                ', '2021-07-25 17:00:55');
INSERT INTO `chitietkhachsan` (`id`, `id_khachsan`, `chitiet`, `gioithieu`, `tiennghi`, `danhgia`, `chinhsach`, `tienich`, `time`) VALUES
(5, 18, '<p style=\"box-sizing: inherit; margin-bottom: 1rem; font-family: Luxstay; color: rgb(34, 34, 34); line-height: 1.5rem !important;\">Pura Vida Studio 1 nằm ở tầng 2 của một chung cư cũ ngay trung tâm Sài Gòn, con đường mua sắm sầm uất Nguyễn Trãi, một trong những vòng xoay trung tâm nhất SG. Bạn sẽ không chỉ khám phá hương vị của Sài Gòn địa phương thực sự mà còn được trải nghiệm trong ngôi nhà trang trí tỉ mỉ, dành cho bạn nhiều khoảnh khắc thoải mái và thư giãn trong suốt thời gian ở thành phố sầm uất này.</p><p style=\"box-sizing: inherit; margin-bottom: 1rem; font-family: Luxstay; color: rgb(34, 34, 34); line-height: 1.5rem !important;\">5 phút từ chợ Bến Thành &amp; tòa tháp Bitexco mang tính biểu tượng. Căn hộ ấm cúng và rộng rãi này cung cấp mọi thứ bạn cần.</p><p style=\"box-sizing: inherit; margin-bottom: 1rem; font-family: Luxstay; color: rgb(34, 34, 34); line-height: 1.5rem !important;\">✯ Studio Studio có một giường Queen thoải mái</p><p style=\"box-sizing: inherit; margin-bottom: 1rem; font-family: Luxstay; color: rgb(34, 34, 34); line-height: 1.5rem !important;\">✯ MỘT BẾP với tất cả mọi thứ bạn cần để cho thấy tài nấu ăn của bạn tốt như thế nào.</p><p style=\"box-sizing: inherit; margin-bottom: 1rem; font-family: Luxstay; color: rgb(34, 34, 34); line-height: 1.5rem !important;\">✯ KHÔNG GIAN để tận hưởng khoảnh khắc lãng mạn của bạn và bữa tối ngon miệng.</p><p style=\"box-sizing: inherit; margin-bottom: 1rem; font-family: Luxstay; color: rgb(34, 34, 34); line-height: 1.5rem !important;\">✯ PHÒNG TẮM riêng để tắm sau một ngày dài. Khách có thể sử dụng toàn bộ căn hộ.</p><p style=\"box-sizing: inherit; margin-bottom: 1rem; font-family: Luxstay; color: rgb(34, 34, 34); line-height: 1.5rem !important;\">Khách có quyền truy cập vào tòa nhà (trừ sau 11h tới 5h sáng - liên hệ Chủ nhà trước để trao đổi thêm) và có thể liên lạc với chủ nhà qua Tin nhắn hoặc các phương tiện liên lạc khác từ 6 giờ sáng - 12 giờ sáng.</p>', '<span style=\"color: rgb(34, 34, 34); font-family: Luxstay;\">Đây là một tòa nhà khách sạn cũ của Hoa Kỳ, sau chiến tranh Việt Nam, nó trở thành nơi sinh sống bình thường. Khu phố thân thiện và an toàn, an ninh có mặt tại chỗ 24/7, vì vậy mặc dù rất trung tâm nhưng nó hoàn toàn an toàn để đi bộ bất cứ lúc nào trong ngày. Trạm xe buýt ở ngay trước tòa nhà. Taxi, Uber, Grab luôn có sẵn. Hầu hết bạn có thể đi bộ đến các điểm tham quan, nhà hàng, quán bar, quán cà phê, .. Ngoài ra, hãy hỏi chúng tôi nếu có bất cứ điều gì xuất hiện trong tâm trí của bạn. Khu vực nhà hàng (đường Phạm Ngũ Lão &amp; Bùi Viện): Cách đó 1km Nhiều loại thức ăn đường phố xung quanh - RẤT NHIỀU. Nhà hàng Việt Nam tuyệt vời (Tân Hải Vân, nhà hàng Din Ky): cách công viên Tao Đàn 0,2km: cách 0,2km 23/9 Công viên: 00,7km Chợ Bến Thành: cách 0,5 km Nhà hát lớn Sài Gòn: Cách đó 1,5 km Bảo tàng: Cách nhà thờ Đức Bà 2,4 km: Cách đường đi bộ Nguyễn Huệ 2 km: Cách Bảo tàng Thành phố Hồ Chí Minh 1,2km: Cách 0,5km</span><br>', '<div class=\"title mt--60\" style=\"box-sizing: inherit; color: rgb(34, 34, 34); font-family: Luxstay; margin-top: 60px !important;\"><span style=\"box-sizing: inherit;\">Giới thiệu về các tiện nghi và dịch vụ tại nơi lưu trú</span></div><div class=\"is-flex amenities\" style=\"display: flex; flex-wrap: wrap; color: rgb(34, 34, 34); font-family: Luxstay;\"><div class=\"d-none d-sm-flex w--100\" style=\"box-sizing: inherit; width: 678px;\"><div class=\"fl-item-stretch\" style=\"box-sizing: inherit; flex: 1 0 0%;\"><div item=\"[object Object]\" style=\"box-sizing: inherit;\"><h4 class=\"mt--24 mb--0\" style=\"box-sizing: inherit; line-height: 1.25; margin-bottom: 1rem; font-size: 1.25rem; margin-top: 24px !important;\">Tiện ích</h4><ul class=\"list list--3 is-flex\" style=\"padding-left: 0px; list-style: none; display: flex; flex-wrap: wrap; font-size: 0.875rem; color: rgb(85, 85, 85);\"><li class=\"mt--12\" style=\"box-sizing: inherit; margin-top: 12px !important; flex-basis: 33.3333%; line-height: 2rem;\"><svg version=\"1.1\" viewBox=\"0 0 24 24\" class=\"svg-icon svg-fill\" alt=\"\" style=\"width: 24px; height: 24px;\"><g fill=\"#000\" fill-rule=\"nonzero\"><path pid=\"0\" d=\"M23.44 9.04a.502.502 0 01-.354-.146A14.9 14.9 0 0012.48 4.5 14.903 14.903 0 001.873 8.894a.5.5 0 01-.707-.707A15.896 15.896 0 0112.48 3.5c4.274 0 8.292 1.665 11.313 4.687a.5.5 0 01-.353.853z\"></path><path pid=\"1\" d=\"M20.612 11.868a.502.502 0 01-.354-.146c-4.289-4.288-11.268-4.288-15.557 0a.5.5 0 01-.707-.707c4.679-4.679 12.292-4.679 16.971 0a.5.5 0 01-.353.853z\"></path><path pid=\"2\" d=\"M17.783 14.697a.502.502 0 01-.354-.146 6.954 6.954 0 00-4.95-2.05c-1.87 0-3.627.728-4.95 2.05a.5.5 0 01-.707-.707 7.948 7.948 0 015.657-2.343c2.137 0 4.146.832 5.657 2.343a.5.5 0 01-.353.853zM12.48 20.5a2.503 2.503 0 01-2.5-2.5c0-1.378 1.122-2.5 2.5-2.5s2.5 1.122 2.5 2.5-1.122 2.5-2.5 2.5zm0-4c-.827 0-1.5.673-1.5 1.5s.673 1.5 1.5 1.5 1.5-.673 1.5-1.5-.673-1.5-1.5-1.5z\"></path></g></svg>&nbsp;<span style=\"box-sizing: inherit; margin-left: 0.75rem;\">Wifi</span></li><li class=\"mt--12\" style=\"box-sizing: inherit; margin-top: 12px !important; flex-basis: 33.3333%; line-height: 2rem;\"><svg version=\"1.1\" viewBox=\"0 0 24 24\" class=\"svg-icon svg-fill\" alt=\"\" style=\"width: 24px; height: 24px;\"><path pid=\"0\" fill=\"#000\" fill-rule=\"nonzero\" d=\"M16.293 14H8.707l-1.853 1.854a.5.5 0 01-.708-.708L7.293 14H3.5a.5.5 0 01-.5-.5v-11a.5.5 0 01.5-.5h18a.5.5 0 01.5.5v11a.5.5 0 01-.5.5h-3.793l1.147 1.146a.5.5 0 01-.708.708L16.293 14zM4 3v10h17V3H4zM3 21.5v1a.5.5 0 11-1 0V18a1.5 1.5 0 011.5-1.5h18A1.5 1.5 0 0123 18v4.5a.5.5 0 11-1 0v-1H3zm0-1h19V18a.5.5 0 00-.5-.5h-18a.5.5 0 00-.5.5v2.5zm8.5-1a.5.5 0 110-1h2a.5.5 0 110 1h-2zM5.854 5.854a.5.5 0 11-.708-.708l1-1a.5.5 0 11.708.708l-1 1zm0 3a.5.5 0 11-.708-.708l4-4a.5.5 0 11.708.708l-4 4z\"></path></svg>&nbsp;<span style=\"box-sizing: inherit; margin-left: 0.75rem;\">TV</span></li><li class=\"mt--12\" style=\"box-sizing: inherit; margin-top: 12px !important; flex-basis: 33.3333%; line-height: 2rem;\"><svg version=\"1.1\" viewBox=\"0 0 24 24\" class=\"svg-icon svg-fill\" alt=\"\" style=\"width: 24px; height: 24px;\"><path pid=\"0\" fill=\"#000\" fill-rule=\"nonzero\" d=\"M23 8.5h-2.085a1.5 1.5 0 01-2.83 0H1v4a.5.5 0 00.5.5h1v-.5A1.5 1.5 0 014 11h16a1.5 1.5 0 011.5 1.5v.5h1a.5.5 0 00.5-.5v-4zm0-1v-2a.5.5 0 00-.5-.5h-21a.5.5 0 00-.5.5v2h17.085a1.5 1.5 0 012.83 0H23zM20.5 13v-.5a.5.5 0 00-.5-.5H4a.5.5 0 00-.5.5v.5h17zm-19-9h21A1.5 1.5 0 0124 5.5v7a1.5 1.5 0 01-1.5 1.5h-21A1.5 1.5 0 010 12.5v-7A1.5 1.5 0 011.5 4zm5.886 16.182a.5.5 0 01-.772.636c-.817-.993-.817-2.086-.009-3.125.525-.674.525-1.248.009-1.875a.5.5 0 01.772-.636c.817.993.817 2.086.009 3.125-.525.674-.525 1.248-.009 1.875zm5 0a.5.5 0 01-.772.636c-.817-.993-.817-2.086-.009-3.125.525-.674.525-1.248.009-1.875a.5.5 0 01.772-.636c.817.993.817 2.086.009 3.125-.525.674-.525 1.248-.009 1.875zm5 0a.5.5 0 01-.772.636c-.817-.993-.817-2.086-.009-3.125.525-.674.525-1.248.009-1.875a.5.5 0 01.772-.636c.817.993.817 2.086.009 3.125-.525.674-.525 1.248-.009 1.875z\"></path></svg>&nbsp;<span style=\"box-sizing: inherit; margin-left: 0.75rem;\">Điều hoà</span></li><li class=\"mt--12\" style=\"box-sizing: inherit; margin-top: 12px !important; flex-basis: 33.3333%; line-height: 2rem;\"><svg version=\"1.1\" viewBox=\"0 0 24 24\" class=\"svg-icon svg-fill\" alt=\"\" style=\"width: 24px; height: 24px;\"><path pid=\"0\" d=\"M7.381 0c-1.457 0-2.7 1.065-2.7 1.065a.48.48 0 10.6.75S6.438.96 7.381.96c1.226 0 2.28.855 2.28.855l.12.09V3.84H9.211a.48.48 0 00-.39.48v2.4h-.48a4.336 4.336 0 00-4.32 4.32v2.73a.492.492 0 000 .285V21.6a2.41 2.41 0 002.4 2.4h11.52a2.41 2.41 0 002.4-2.4v-7.59a.488.488 0 000-.195V11.04a4.336 4.336 0 00-4.32-4.32h-.48v-2.4a.48.48 0 00-.48-.48h-.48V1.92h.48a.483.483 0 00.422-.238.485.485 0 000-.484.483.483 0 00-.422-.238h-.855a.45.45 0 00-.15-.015.422.422 0 00-.045.015h-3.645a.45.45 0 00-.15-.015.422.422 0 00-.045.015h-.06C9.894.786 8.87 0 7.381 0zm3.36 1.92h2.88v1.92h-2.88V1.92zm-.96 2.88h4.8v1.92h-4.8V4.8zm-1.44 2.88h7.68c1.85 0 3.36 1.51 3.36 3.36v2.4h-5.805c.026-.154.045-.319.045-.48a2.888 2.888 0 00-2.88-2.88 2.888 2.888 0 00-2.88 2.88c0 .161.019.326.045.48H4.981v-2.4c0-1.85 1.51-3.36 3.36-3.36zm2.4 3.36c1.067 0 1.92.853 1.92 1.92s-.853 1.92-1.92 1.92a1.91 1.91 0 01-1.74-1.11v-.015l-.015-.03-.015-.015c-.002-.004.002-.011 0-.015l-.015-.015a1.944 1.944 0 01-.135-.72c0-1.067.853-1.92 1.92-1.92zm-5.76 3.36h3.27a2.89 2.89 0 002.49 1.44 2.89 2.89 0 002.49-1.44h6.15v7.2a1.44 1.44 0 01-1.44 1.44H6.421a1.44 1.44 0 01-1.44-1.44v-7.2zm10.08 1.44c-1.056 0-1.92.864-1.92 1.92s.864 1.92 1.92 1.92 1.92-.864 1.92-1.92-.864-1.92-1.92-1.92zm0 .96c.536 0 .96.424.96.96s-.424.96-.96.96a.952.952 0 01-.96-.96c0-.536.424-.96.96-.96zm-3.84 2.4c-.79 0-1.44.65-1.44 1.44 0 .79.65 1.44 1.44 1.44.79 0 1.44-.65 1.44-1.44 0-.79-.65-1.44-1.44-1.44zm0 .96c.27 0 .48.21.48.48s-.21.48-.48.48-.48-.21-.48-.48.21-.48.48-.48z\" fill=\"#000\" fill-rule=\"nonzero\"></path></svg>&nbsp;<span style=\"box-sizing: inherit; margin-left: 0.75rem;\">Dầu gội, dầu xả</span></li><li class=\"mt--12\" style=\"box-sizing: inherit; margin-top: 12px !important; flex-basis: 33.3333%; line-height: 2rem;\"><svg version=\"1.1\" viewBox=\"0 0 24 24\" class=\"svg-icon svg-fill\" alt=\"\" style=\"width: 24px; height: 24px;\"><g fill-rule=\"evenodd\"><path pid=\"0\" fill-rule=\"nonzero\" d=\"M22.527 6.497h-.366v-.202c.107-1.298-.245-2.453-.993-3.254a3.18 3.18 0 00-2.443-1.024H3.945c-1.376 0-2.496 1.102-2.496 2.457v2.023h-.023C.64 6.497 0 7.127 0 7.901v.359c0 .774.64 1.403 1.426 1.403h.023v10.865c0 1.355 1.12 2.457 2.496 2.457h12.188c1.417 0 2.208-.28 2.646-.934.417-.624.421-1.51.421-2.537h1.757c.675 0 1.204-.67 1.204-1.524V9.663h.366c.787 0 1.426-.63 1.426-1.403V7.9c0-.773-.64-1.403-1.426-1.403zM1.45 8.742h-.023a.487.487 0 01-.49-.482V7.9c0-.265.22-.482.49-.482h.023v1.324zM21.225 6.36v.137H19.21c.043-.329.15-.593.314-.77a.773.773 0 01.577-.245c.39 0 .899.276 1.125.878zm-2.96 13.126c0 1.032-.019 1.686-.267 2.058-.162.242-.52.52-1.865.52H3.945c-.86 0-1.56-.69-1.56-1.536V18.05h15.88v1.435zm0-2.356H2.384v-1.98h15.88v1.98zm.572-12.028c-.307.327-.655.949-.573 2.057v7.07H2.384v-.88h4.578a.464.464 0 00.468-.46.465.465 0 00-.468-.461H2.385V4.474c0-.847.7-1.536 1.56-1.536h14.803a2.252 2.252 0 011.731.726c.298.32.513.72.638 1.18A2.001 2.001 0 0020.1 4.56c-.487 0-.935.192-1.263.541zm2.388 12.888c0 .396-.2.603-.268.603H19.2v-8.93h2.025v8.327zm1.793-9.73c0 .266-.22.482-.49.482H19.2V7.418h3.327c.27 0 .49.217.49.483v.359z\"></path><path pid=\"1\" d=\"M8.428 12.428h-.037a.464.464 0 00-.468.46c0 .255.21.461.468.461h.037a.464.464 0 00.468-.46.465.465 0 00-.468-.461z\"></path></g></svg>&nbsp;<span style=\"box-sizing: inherit; margin-left: 0.75rem;\">Khăn tắm</span></li><li class=\"mt--12\" style=\"box-sizing: inherit; margin-top: 12px !important; flex-basis: 33.3333%; line-height: 2rem;\"><svg version=\"1.1\" viewBox=\"0 0 24 24\" class=\"svg-icon svg-fill\" alt=\"\" style=\"width: 24px; height: 24px;\"><g fill-rule=\"evenodd\"><path pid=\"0\" d=\"M7.2 16.902a2.105 2.105 0 01-1.654-.57 1.804 1.804 0 01-.351-1.328.393.393 0 00-.331-.443.4.4 0 00-.458.315 2.576 2.576 0 00.526 1.96c.488.564 1.251.85 2.268.85.22 0 .4-.175.4-.392a.396.396 0 00-.4-.392zm2 0h-.4c-.22 0-.4.176-.4.392 0 .217.18.392.4.392h.4c.22 0 .4-.175.4-.392a.396.396 0 00-.4-.392zm7.6-5.49c.61-.059 1.215.15 1.654.569.288.381.414.858.351 1.329a.393.393 0 00.395.455.398.398 0 00.394-.328 2.573 2.573 0 00-.526-1.959c-.488-.564-1.251-.85-2.268-.85-.22 0-.4.175-.4.392 0 .216.18.392.4.392zm-1.2-.392a.396.396 0 00-.4-.393h-.4c-.22 0-.4.176-.4.393 0 .216.18.392.4.392h.4c.22 0 .4-.176.4-.392z\"></path><path pid=\"1\" fill-rule=\"nonzero\" d=\"M2 9.451c1.104 0 2-.878 2-1.96 0-1.084-.896-1.962-2-1.962S0 6.407 0 7.49c.001 1.083.896 1.96 2 1.961zm0-3.137c.663 0 1.2.526 1.2 1.176 0 .65-.537 1.177-1.2 1.177-.663 0-1.2-.527-1.2-1.177S1.337 6.314 2 6.314zm8.8.392c0 .866.716 1.569 1.6 1.569.884 0 1.6-.703 1.6-1.57 0-.865-.716-1.568-1.6-1.568-.884 0-1.6.703-1.6 1.569zm2.4 0a.792.792 0 01-.8.784.792.792 0 01-.8-.784c0-.433.358-.784.8-.784.442 0 .8.35.8.784zM4.8 4.745c0 1.516 1.254 2.745 2.8 2.745 1.546 0 2.8-1.229 2.8-2.745S9.146 2 7.6 2c-1.546.002-2.798 1.23-2.8 2.745zm4.8 0c0 1.083-.896 1.96-2 1.96s-2-.877-2-1.96.896-1.96 2-1.96 1.999.878 2 1.96z\"></path><path pid=\"2\" d=\"M7.197 5.014a.722.722 0 01-.017-.54.39.39 0 00-.255-.495.402.402 0 00-.505.25c-.145.413-.1.867.127 1.243a1.22 1.22 0 001.053.45c.22 0 .4-.176.4-.393a.396.396 0 00-.4-.392.527.527 0 01-.403-.123z\"></path><path pid=\"3\" fill-rule=\"nonzero\" d=\"M21.6 16.118a2.38 2.38 0 00-.431.042c.02-.144.03-.29.031-.435v-3.137c-.002-1.948-1.613-3.527-3.6-3.53H6.4c-1.987.003-3.598 1.582-3.6 3.53v3.137c.002 1.949 1.613 3.528 3.6 3.53h6.54a2.397 2.397 0 002.26 1.569c.349 0 .694-.076 1.008-.224A2.4 2.4 0 0018.4 22a2.4 2.4 0 002.192-1.4c.314.148.66.224 1.008.224 1.325 0 2.4-1.054 2.4-2.353 0-1.3-1.075-2.353-2.4-2.353zm-8.8 2.353H6.4c-1.546-.002-2.798-1.23-2.8-2.746v-3.137c.002-1.515 1.254-2.743 2.8-2.745h11.2c1.546.002 2.798 1.23 2.8 2.745v3.137c0 .086-.01.17-.018.253a2.409 2.409 0 00-2.196-1.028 2.39 2.39 0 00-1.978 1.39 2.375 2.375 0 00-1.008-.222c-1.325.001-2.399 1.054-2.4 2.353zm8.8 1.568a1.598 1.598 0 01-.988-.345.406.406 0 00-.387-.059.394.394 0 00-.253.294 1.588 1.588 0 01-1.57 1.286 1.588 1.588 0 01-1.57-1.286.395.395 0 00-.253-.294.406.406 0 00-.387.059c-.28.223-.63.345-.992.345-.884 0-1.6-.702-1.6-1.568 0-.867.716-1.569 1.6-1.569.36.001.708.123.988.345.11.085.256.107.387.06a.394.394 0 00.253-.295 1.588 1.588 0 011.57-1.285c.772 0 1.433.54 1.57 1.285a.395.395 0 00.253.294c.13.048.278.026.387-.059.28-.222.63-.344.992-.345.884 0 1.6.702 1.6 1.569 0 .866-.716 1.568-1.6 1.568z\"></path></g></svg>&nbsp;<span style=\"box-sizing: inherit; margin-left: 0.75rem;\">Xà phòng tắm</span></li><li class=\"mt--12\" style=\"box-sizing: inherit; margin-top: 12px !important; flex-basis: 33.3333%; line-height: 2rem;\"><svg version=\"1.1\" viewBox=\"0 0 24 24\" class=\"svg-icon svg-fill\" alt=\"\" style=\"width: 24px; height: 24px;\"><g fill=\"none\" fill-rule=\"evenodd\"><path pid=\"0\" d=\"M0 0h24v24H0z\"></path><path pid=\"1\" fill=\"#000\" fill-rule=\"nonzero\" d=\"M17.571 3.452L6.434 2.07a5.872 5.872 0 00-.669-.038C2.586 2.03 0 4.62 0 7.805v.12a5.78 5.78 0 002.932 5.028l1.54 6.226c.17.689.599 1.27 1.206 1.636a2.639 2.639 0 002.01.304l.042-.01a2.638 2.638 0 001.637-1.206 2.639 2.639 0 00.304-2.01l-1.112-4.495 9.012-1.12a.494.494 0 00.434-.49V3.943c0-.25-.186-.46-.434-.49zM8.711 18.13c.107.433.039.88-.191 1.262-.23.381-.595.65-1.027.757l-.043.01c-.432.107-.88.04-1.26-.19a1.656 1.656 0 01-.758-1.028l-1.36-5.495a5.737 5.737 0 002.367.215l1.131-.14 1.14 4.61zm8.305-6.78L6.32 12.68A4.786 4.786 0 01.99 7.925v-.12a4.786 4.786 0 015.328-4.754L17.016 4.38v6.97z\"></path><path pid=\"2\" fill=\"#000\" fill-rule=\"nonzero\" d=\"M2.763 7.865a3.293 3.293 0 003.29 3.29 3.293 3.293 0 003.288-3.29 3.293 3.293 0 00-3.289-3.289 3.293 3.293 0 00-3.289 3.29zm5.59 0c0 1.269-1.032 2.3-2.3 2.3a2.303 2.303 0 01-2.301-2.3c0-1.268 1.032-2.3 2.3-2.3 1.269 0 2.3 1.032 2.3 2.3z\"></path><path pid=\"3\" fill=\"#000\" d=\"M19.196 6.305c.288 0 .426.155.688.476.289.356.684.843 1.455.843s1.166-.487 1.455-.843c.262-.321.4-.476.687-.476a.494.494 0 100-.99c-.77 0-1.166.487-1.455.843-.261.322-.4.477-.687.477-.288 0-.426-.155-.687-.477-.29-.356-.685-.842-1.455-.842a.494.494 0 000 .989zm4.285 1.998c-.77 0-1.166.486-1.455.842-.261.322-.4.477-.687.477-.288 0-.426-.155-.687-.477-.29-.356-.685-.842-1.455-.842a.494.494 0 100 .989c.287 0 .425.155.687.476.289.356.684.843 1.455.843s1.166-.487 1.455-.843c.262-.321.4-.476.688-.476a.494.494 0 100-.99z\"></path></g></svg>&nbsp;<span style=\"box-sizing: inherit; margin-left: 0.75rem;\">Máy sấy</span></li><li class=\"mt--12\" style=\"box-sizing: inherit; margin-top: 12px !important; flex-basis: 33.3333%; line-height: 2rem;\"><svg version=\"1.1\" viewBox=\"0 0 24 19\" class=\"svg-icon svg-fill\" alt=\"Mạng gia đình\" style=\"width: 24px; height: 24px;\"><g fill=\"#000\" fill-rule=\"evenodd\"><path pid=\"0\" d=\"M21.5 10.99h-4.141c-3.3 0-8.253.018-14.86.055C1.123 11.045 0 12.122 0 13.5v2.938c0 1.378 1.122 2.5 2.5 2.5h19c1.378 0 2.5-1.122 2.5-2.5-.002-1.04-.004-2.02-.004-2.938a2.51 2.51 0 00-2.496-2.51zm0 7.01h-19c-.827 0-1.5-.673-1.5-1.5v-3c0-.827.673-1.5 1.5-1.5h19c.827 0 1.5.673 1.5 1.5v3c0 .827-.673 1.5-1.5 1.5z\" fill-rule=\"nonzero\"></path><path pid=\"1\" d=\"M17.5 4.261a.5.5 0 00-.5.5v7a.5.5 0 001 0v-7a.5.5 0 00-.5-.5z\"></path><circle pid=\"2\" cx=\"3.5\" cy=\"14.761\" r=\"1\"></circle><circle pid=\"3\" cx=\"6.5\" cy=\"14.761\" r=\"1\"></circle><circle pid=\"4\" cx=\"9.5\" cy=\"14.761\" r=\"1\"></circle><circle pid=\"5\" cx=\"12.5\" cy=\"14.761\" r=\"1\"></circle><path pid=\"6\" d=\"M20.5 14.261h-5a.5.5 0 000 1h5a.5.5 0 000-1zM16 4.761c0-.4.156-.777.439-1.06a.5.5 0 00-.707-.708A2.484 2.484 0 0015 4.761c0 .668.26 1.296.732 1.768a.502.502 0 00.707 0 .5.5 0 000-.707A1.492 1.492 0 0116 4.762zM19.268 2.993a.5.5 0 00-.707.707c.283.284.439.66.439 1.061 0 .401-.156.778-.44 1.061a.5.5 0 00.708.707c.472-.472.732-1.1.732-1.768 0-.668-.26-1.296-.732-1.768z\"></path><path pid=\"7\" d=\"M15.024 2.287a.5.5 0 00-.707-.707 4.506 4.506 0 000 6.364.502.502 0 00.707 0 .5.5 0 000-.707 3.505 3.505 0 010-4.95zM20.682 1.58a.5.5 0 00-.707.707 3.505 3.505 0 010 4.95.5.5 0 00.707.707 4.506 4.506 0 000-6.364z\"></path><path pid=\"8\" d=\"M13.61.873a.5.5 0 00-.707-.707 6.508 6.508 0 000 9.192.502.502 0 00.707 0 .5.5 0 000-.707 5.505 5.505 0 010-7.778zM22.096.166a.5.5 0 00-.707.707 5.505 5.505 0 010 7.778.5.5 0 00.707.707 6.508 6.508 0 000-9.192z\"></path></g></svg>&nbsp;<span style=\"box-sizing: inherit; margin-left: 0.75rem;\">Internet</span></li></ul></div><div item=\"[object Object]\" style=\"box-sizing: inherit;\"><h4 class=\"mt--24 mb--0\" style=\"box-sizing: inherit; line-height: 1.25; margin-bottom: 1rem; font-size: 1.25rem; margin-top: 24px !important;\">Tiện ích bếp</h4><ul class=\"list list--3 is-flex\" style=\"padding-left: 0px; list-style: none; display: flex; flex-wrap: wrap; font-size: 0.875rem; color: rgb(85, 85, 85);\"><li class=\"mt--12\" style=\"box-sizing: inherit; margin-top: 12px !important; flex-basis: 33.3333%; line-height: 2rem;\"><svg version=\"1.1\" viewBox=\"0 0 24 24\" class=\"svg-icon svg-fill\" alt=\"\" style=\"width: 24px; height: 24px;\"><g fill-rule=\"evenodd\" transform=\"translate(1)\"><path pid=\"0\" d=\"M2 0h18a2 2 0 012 2v20a2 2 0 01-2 2H2a2 2 0 01-2-2V2a2 2 0 012-2zm1 1a2 2 0 00-2 2v18a2 2 0 002 2h16a2 2 0 002-2V3a2 2 0 00-2-2H3z\"></path><path pid=\"1\" d=\"M11 19a8 8 0 110-16 8 8 0 010 16zm0-1a7 7 0 100-14 7 7 0 000 14z\"></path><rect pid=\"2\" width=\"5\" height=\"1\" x=\"14\" y=\"21\" rx=\".5\"></rect><rect pid=\"3\" width=\"2\" height=\"1\" x=\"3\" y=\"21\" rx=\".5\"></rect><rect pid=\"4\" width=\"2\" height=\"1\" x=\"6\" y=\"21\" rx=\".5\"></rect></g></svg>&nbsp;<span style=\"box-sizing: inherit; margin-left: 0.75rem;\">Bếp điện</span></li><li class=\"mt--12\" style=\"box-sizing: inherit; margin-top: 12px !important; flex-basis: 33.3333%; line-height: 2rem;\"><svg version=\"1.1\" viewBox=\"0 0 24 24\" class=\"svg-icon svg-fill\" alt=\"\" style=\"width: 24px; height: 24px;\"><path pid=\"0\" fill=\"#000\" fill-rule=\"nonzero\" d=\"M16 10V8.5a.5.5 0 00-.5-.5h-11a.5.5 0 00-.5.5v8a.5.5 0 00.5.5h11a.5.5 0 00.5-.5V15h-.5a1.5 1.5 0 01-1.5-1.5v-2a1.5 1.5 0 011.5-1.5h.5zm0 1h-.5a.5.5 0 00-.5.5v2a.5.5 0 00.5.5h.5v-3zM1.5 4h21A1.5 1.5 0 0124 5.5v14a1.5 1.5 0 01-1.5 1.5h-21A1.5 1.5 0 010 19.5v-14A1.5 1.5 0 011.5 4zm0 1a.5.5 0 00-.5.5v14a.5.5 0 00.5.5h21a.5.5 0 00.5-.5v-14a.5.5 0 00-.5-.5h-21zm3 2h11A1.5 1.5 0 0117 8.5v8a1.5 1.5 0 01-1.5 1.5h-11A1.5 1.5 0 013 16.5v-8A1.5 1.5 0 014.5 7zm1.354 3.853a.5.5 0 01-.708-.707l1-1a.5.5 0 01.708.707l-1 1zm0 3a.5.5 0 01-.708-.707l4-4a.5.5 0 01.708.707l-4 4zM20 9a1 1 0 110-2 1 1 0 010 2zm0 4a1 1 0 110-2 1 1 0 010 2zm0 4a1 1 0 110-2 1 1 0 010 2z\"></path></svg>&nbsp;<span style=\"box-sizing: inherit; margin-left: 0.75rem;\">Lò vi sóng</span></li><li class=\"mt--12\" style=\"box-sizing: inherit; margin-top: 12px !important; flex-basis: 33.3333%; line-height: 2rem;\"><svg version=\"1.1\" viewBox=\"0 0 24 24\" class=\"svg-icon svg-fill\" alt=\"\" style=\"width: 24px; height: 24px;\"><path pid=\"0\" fill=\"#000\" fill-rule=\"nonzero\" d=\"M17.5 0A1.5 1.5 0 0119 1.5v21a1.5 1.5 0 01-1.5 1.5h-11A1.5 1.5 0 015 22.5v-21A1.5 1.5 0 016.5 0h11zM6 13h12V1.5a.5.5 0 00-.5-.5h-11a.5.5 0 00-.5.5V13zm0 1v8.5a.5.5 0 00.5.5h11a.5.5 0 00.5-.5V14H6zm1-6.5a.5.5 0 011 0v4a.5.5 0 11-1 0v-4zm0 8a.5.5 0 111 0v4a.5.5 0 11-1 0v-4zm8.854 6.354a.5.5 0 01-.708-.708l1-1a.5.5 0 01.708.708l-1 1zm-3 0a.5.5 0 01-.708-.708l4-4a.5.5 0 01.708.708l-4 4z\"></path></svg>&nbsp;<span style=\"box-sizing: inherit; margin-left: 0.75rem;\">Tủ lạnh</span></li></ul></div><div item=\"[object Object]\" style=\"box-sizing: inherit;\"><h4 class=\"mt--24 mb--0\" style=\"box-sizing: inherit; line-height: 1.25; margin-bottom: 1rem; font-size: 1.25rem; margin-top: 24px !important;\">Tiện ích phòng</h4><ul class=\"list list--3 is-flex\" style=\"padding-left: 0px; list-style: none; display: flex; flex-wrap: wrap; font-size: 0.875rem; color: rgb(85, 85, 85);\"><li class=\"mt--12\" style=\"box-sizing: inherit; margin-top: 12px !important; flex-basis: 33.3333%; line-height: 2rem;\"><svg version=\"1.1\" viewBox=\"0 0 24 24\" class=\"svg-icon svg-fill\" alt=\"Cửa sổ\" style=\"width: 24px; height: 24px;\"><g fill=\"#000\" fill-rule=\"evenodd\"><path pid=\"0\" d=\"M22 21.01V4c.662-.002.998-.538 1-1.2V.4a.4.4 0 00-.4-.4H1.416a.4.4 0 00-.4.4v2.4c.002.662.322 1.198.984 1.2v17.01H.408a.4.4 0 00-.4.4v2.19c0 .22.18.4.4.4H23.6a.4.4 0 00.4-.4v-2.19a.4.4 0 00-.4-.4H22zM2 2.62V.996h20V2.62a.4.4 0 01-.4.4H2.4a.4.4 0 01-.4-.4zM21 4v17.01H3V4h18zm2 19H1v-1h22v1z\" fill-rule=\"nonzero\"></path><path pid=\"1\" d=\"M19.612 5.032H4.449a.4.4 0 00-.4.4v14.184c0 .22.179.4.4.4h15.163a.4.4 0 00.4-.4V5.432a.4.4 0 00-.4-.4zm-8.136 13.967H5.003V13h6.473V19zm0-7H5.003V6.005h6.473v5.994zm7.524 7h-6.45V13H19V19zm0-7h-6.45V6.005H19v5.994z\" fill-rule=\"nonzero\"></path><path pid=\"2\" d=\"M5.512 8l1.6-1.6.566.565-1.6 1.6zM5.679 10.315l3.6-3.599.565.566-3.6 3.6z\"></path></g></svg>&nbsp;<span style=\"box-sizing: inherit; margin-left: 0.75rem;\">Cửa sổ</span></li></ul></div></div></div></div>', '', '<p class=\"mb--0\" style=\"box-sizing: inherit; color: rgb(34, 34, 34); font-family: Luxstay;\"></p><p style=\"box-sizing: inherit; margin-bottom: 1rem;\">Không hút thuốc trong phòng ngủ</p><p style=\"box-sizing: inherit; margin-bottom: 1rem;\">Không sử dụng chất kích thích</p><p style=\"box-sizing: inherit; margin-bottom: 1rem;\">Không mở tiệc trong phòng</p><p style=\"box-sizing: inherit; margin-bottom: 1rem;\">Vui lòng tắt các thiết bị khi bạn ra khỏi phòng</p><div><br></div><p></p>', '<div class=\"col-md-8 col-xs-12\" style=\"box-sizing: inherit; flex-basis: 66.6667%; padding-left: 0.5rem; padding-right: 0.5rem; max-width: 66.6667%; color: rgb(34, 34, 34); font-family: Luxstay;\"><div class=\"detail-left\" style=\"box-sizing: inherit; padding-right: 50px;\"><p id=\"map_desc\" class=\"mb--0 pt--24\" style=\"box-sizing: inherit; padding-top: 24px !important;\">Bạn sẽ nhận được địa chỉ chính xác của chỗ ở sau khi hoàn tất đơn đặt phòng.</p></div></div><div class=\"col-md-4 col-xs-12 d-none d-md-block\" style=\"box-sizing: inherit; flex-basis: 33.3333%; padding-left: 0.5rem; padding-right: 0.5rem; max-width: 33.3333%; color: rgb(34, 34, 34); font-family: Luxstay;\"></div>', '2021-07-25 17:08:35');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_khachsan` int(11) NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `detailmessage`
--

CREATE TABLE `detailmessage` (
  `id` int(11) NOT NULL,
  `id_message` int(11) NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` bit(3) NOT NULL,
  `phanquyen` bit(3) NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `doanhthu`
--

CREATE TABLE `doanhthu` (
  `id` int(11) NOT NULL,
  `id_doitac` int(11) NOT NULL,
  `phantram` int(11) NOT NULL,
  `ngaybatdau` date NOT NULL,
  `doanhthu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `doanhthudoitac`
--

CREATE TABLE `doanhthudoitac` (
  `id` int(11) NOT NULL,
  `id_khachsan` int(11) NOT NULL,
  `tongdoanhthu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `doitac`
--

CREATE TABLE `doitac` (
  `id` int(11) NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` int(11) NOT NULL,
  `cmnd` int(11) NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `doitac`
--

INSERT INTO `doitac` (`id`, `name`, `email`, `phone`, `cmnd`, `address`, `password`, `time`) VALUES
(1, 'dũng trương mạnh', 'dungtmph12934@fpt.edu.vn', 365727226, 1200012243, 'số 6', '202cb962ac59075b964b07152d234b70', '2021-07-16 16:53:15'),
(2, 'dũng trương mạnh', 'truongmanhdung04@gmail.com', 365727226, 1200012243, 'số 6', '202cb962ac59075b964b07152d234b70', '2021-07-16 17:07:52'),
(3, 'dũng trương mạnh', 'truongmanhdung04@gmail.com', 365727226, 1200012243, 'số 6', '202cb962ac59075b964b07152d234b70', '2021-07-20 21:36:22'),
(5, 'drhaisctn2 nguyen', 'drhaisctn2@gmail.com', 968856903, 91904664, '202', '202cb962ac59075b964b07152d234b70', '2021-07-23 11:18:23'),
(6, 'dũng trương mạnh', 'hoang123@123', 365727226, 1200012243, 'số 6', '202cb962ac59075b964b07152d234b70', '2021-07-23 15:18:18');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donhang`
--

CREATE TABLE `donhang` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_phong` int(11) NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` int(11) NOT NULL,
  `mahoadon` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `trangthai` bit(4) NOT NULL,
  `price` int(11) NOT NULL,
  `checkin` date NOT NULL,
  `checkout` date NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `favourite`
--

CREATE TABLE `favourite` (
  `id` int(11) NOT NULL,
  `id_khachsan` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `status` bit(3) NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `imagechitietkhachsan`
--

CREATE TABLE `imagechitietkhachsan` (
  `id` int(11) NOT NULL,
  `id_chitiet` int(11) NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `imagechitietkhachsan`
--

INSERT INTO `imagechitietkhachsan` (`id`, `id_chitiet`, `image`) VALUES
(84, 4, '3thc2n1bIgUNaf2OB5sI7cYz.jpg'),
(85, 4, '4.jpg'),
(86, 4, '4EsJYrkXOutlTN4G9_GeWJf1.PNG.jpg'),
(87, 4, '5.jpg'),
(88, 4, '3thc2n1bIgUNaf2OB5sI7cYz.jpg'),
(89, 4, '4.jpg'),
(90, 4, '4EsJYrkXOutlTN4G9_GeWJf1.PNG.jpg'),
(91, 4, '5.jpg'),
(92, 16, '3thc2n1bIgUNaf2OB5sI7cYz.jpg'),
(93, 16, '4.jpg'),
(94, 16, '4EsJYrkXOutlTN4G9_GeWJf1.PNG.jpg'),
(95, 16, '5.jpg'),
(96, 16, '5hwqxu3ptcAR3a04SgnS41Qm.jpg'),
(97, 16, '5q3v2EYLXNOoajWSKlMe-dDC.png'),
(98, 17, 'hcm1.jpg'),
(99, 17, 'hcm2.jpg'),
(100, 17, 'hcm3.jpg'),
(101, 17, 'hcm4.jpg'),
(102, 17, 'hcm5.jpg'),
(103, 17, 'hcm6.jpg'),
(104, 17, 'hcm7.jpg'),
(105, 17, 'hcm8.jpg'),
(106, 17, 'hcm9.jpg'),
(107, 17, 'hcm10.jpg'),
(108, 17, 'hcm11.jpg'),
(109, 18, 'J98tozqKN0GgcO3QfItYtVSY.jpg'),
(110, 18, 'jMSIBR9L8L8bzjbQ6K4fflBp.jpg'),
(111, 18, 'Lpa2IoVsUdvUWGOuRo7YPc5z.jpg'),
(112, 18, 'mYMCBfRrd0VQyn6GSfEUJyjD.jpg'),
(113, 18, 'OLjO7r0AsAONno84r2Bqn-q0.jpg'),
(114, 18, 'p8-UPJyIjtMVuSE0NuDJ2qxP.jpg'),
(115, 18, 'pKYg4zX9Zki5Xl8BHz-69uj2.jpg'),
(116, 18, 'T1xR2zMq7TSuQkj_iVn_ITg1.jpg'),
(117, 18, 'TccgBXV2gMxejq-wzReoWn9_.jpg'),
(118, 18, 'ViATG4YY5ZRtb11KxoFQ0S-A.jpg'),
(119, 18, 'zStw9kNFjZwNI0JAsr1V4gCw.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachsan`
--

CREATE TABLE `khachsan` (
  `id` int(11) NOT NULL,
  `id_doitac` int(11) NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `love` bit(1) NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sophong` int(11) NOT NULL,
  `id_khuvuc` int(11) NOT NULL,
  `danhgia` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `khachsan`
--

INSERT INTO `khachsan` (`id`, `id_doitac`, `name`, `price`, `address`, `phone`, `love`, `image`, `sophong`, `id_khuvuc`, `danhgia`, `time`) VALUES
(4, 3, 'The Galaxy Home', 850000, 'Ngõ 80 Xuân Phương Hà Nội', '0365727226', b'0', '1.png', 1, 14, '', '2021-07-22 21:16:17'),
(5, 3, 'Hanoi Home 3 - Beautiful apartment for you (no. 22) - miễn phí xe đạp', 690000, 'Hà Nội 3', '0365727226', b'0', '2.jpg', 1, 14, '', '2021-07-22 21:17:19'),
(6, 3, 'JOI homestay - căn hộ view phố,, ban công ,gần chợ đêm', 4500000, 'Hà nội ', '0365727226', b'0', '3.jpeg', 1, 14, '', '2021-07-22 21:18:12'),
(7, 3, 'Besthome Studio Phan Kế Bính, Ba Đình, Hà Nội', 480000, 'Phan Kế Bính, Ba Đình, Hà Nội', '0365727226', b'0', '4.jpg', 2, 14, '', '2021-07-22 21:19:03'),
(8, 3, 'APT 1bed rooftop LAKE VIEW @115 NHAT CHIEU', 620000, 'Ngõ 80 Xuân Phương', '0365727226', b'0', '5.jpg', 2, 14, '', '2021-07-22 21:19:52'),
(9, 3, 'Rustic Studio 2', 600000, 'Ngõ 80 Xuân Phương', '0365727226', b'0', '9.jpg', 1, 14, '', '2021-07-22 21:23:35'),
(10, 3, 'Neko Tây Hồ ', 550000, 'Tây hồ', '0365727226', b'0', '10.jpg', 2, 14, '', '2021-07-22 21:24:46'),
(11, 3, 'LAKESIDE✧BALCONY', 1200000, 'Láng Hạ', '0365727226', b'0', '11.jpg', 2, 14, '', '2021-07-22 21:25:42'),
(12, 3, 'KorHan Apartment 1', 460000, 'Tây Hồ', '0365727226', b'0', '12.jpg', 1, 14, '', '2021-07-22 21:26:29'),
(13, 3, 'Lotus Homestay Hanoi', 799000, 'Oasis View 1', '0365727226', b'0', '13.jpeg', 2, 14, '', '2021-07-22 21:27:13'),
(14, 3, 'ARL Trúc Bạch • Căn hộ 1 Phòng Ngủ City ', 550000, 'ARL Trúc Bạch', '0365727226', b'0', '14.jpg', 1, 14, '', '2021-07-22 21:28:05'),
(15, 3, 'Green room ❣  Địa điểm hẹn hò lý tưởng ❣', 810000, 'Ngõ 80 Xuân Phương', '0365727226', b'0', '15.jpg', 1, 14, '', '2021-07-22 21:28:54'),
(16, 6, 'BHA - R1 - Executive With Balcony', 700000, 'Hà nội', '0365727226', b'0', '6.jpg', 1, 14, '', '2021-07-24 20:51:53'),
(17, 3, 'The Royal Homies Suite Balcony - Phu My Hung (SECC, Crescent Mall, SC Vivo City)', 3074444, 'Quận 7, Hồ Chí Minh, Vietnam', '0369053052', b'0', 'hcm.jpg', 1, 15, '', '2021-07-25 16:39:57'),
(18, 3, 'Pura Vida 1  Studio 35m2', 614635, 'Quận 1, Hồ Chí Minh, Vietnam', '0369053052', b'0', 'hcm2-1.png', 1, 15, '', '2021-07-25 17:07:26'),
(19, 3, '2 BR- Lux Millennium- View Sông SG & Bitexco- Free Gym & Pool', 1200000, 'Quận 4, Hồ Chí Minh, Vietnam', '0984484849', b'0', 'hcm3.3.jpg', 1, 15, '', '2021-07-25 17:16:51'),
(20, 3, 'The Rivergate - modern designed and cozy studio', 500000, 'Quận 4, Hồ Chí Minh, Vietnam', '0369053052', b'0', '163.jpg', 1, 15, '', '2021-07-25 17:59:41'),
(21, 3, 'SUMMER HOUSE♙♞BenThanh*BuiVien*Terrace', 300000, 'Quận 1, Hồ Chí Minh, Vietnam', '0369053052', b'0', '157c970aecc90a9753d8.jpg', 1, 15, '', '2021-07-25 18:04:13'),
(22, 3, 'Glowing Private Room near Ben Thanh Market *BT303', 690000, 'Quận 1, Hồ Chí Minh, Vietnam', '0984484849', b'0', '1539943417_DSC06108.jpg', 1, 15, '', '2021-07-25 18:04:54'),
(23, 3, 'Rustic Terrace Loft near Ben Thanh Market *BT401', 790000, 'Quận 1, Hồ Chí Minh, Vietnam', '0373854648', b'0', '1537948428_DSC06217-Edit.jpg', 1, 15, '', '2021-07-25 18:05:56'),
(24, 3, 'Large Window Studio near Ben Thanh Market *BT201', 796000, 'Quận 1, Hồ Chí Minh, Vietnam', '0654965849', b'0', '201 4.jpg', 1, 15, '', '2021-07-25 18:07:21'),
(25, 3, '*CH Siêu Lãng Mạn* Couple Nest - Lust - Luxurious Brandnew 76m2 - Super Romantic Apt', 1900000, 'Quận 7, Hồ Chí Minh, Vietnam ', '0373333333', b'0', 'room_29890_563_1565929262.jpg', 1, 15, '', '2021-07-25 18:16:56'),
(26, 3, 'Dragon Bridge View Apartment', 430000, 'Sơn Trà, Đà Nẵng, Vietnam ', '0828888888', b'0', '1503311952_bedroom-1-3-min.jpg', 2, 17, '', '2021-07-25 18:18:46'),
(27, 3, 'Somerset Apartment - 02 Bedrooms', 1400000, 'Sơn Trà, Đà Nẵng, Vietnam', '0777777777', b'0', '1535624524_IMG_3002.jpg', 2, 17, '', '2021-07-25 18:19:33'),
(28, 3, 'Căn hộ gần sông Hàn, có ban công và view phố, smarthome 12', 350000, 'Ngũ Hành Sơn, Đà Nẵng, Vietnam ', '0373949684', b'0', 'XEA58GARWYnbrCewQXI-ibUg.jpg', 1, 17, '', '2021-07-25 18:20:13'),
(29, 3, 'Phòng nghỉ trọ homestay Đà Nẵng giá rẻ có điều hòa mát mẻ, WC riêng trong phòng, gần sông Hàn.', 250000, 'Ngũ Hành Sơn, Đà Nẵng, Vietnam', '0369053052', b'0', 'room_18996_1_1568567396.jpg', 1, 17, '', '2021-07-25 18:21:38'),
(30, 3, 'FUDOUSAN THANH LỊCH - VIP 1 PRO', 265300, 'Sơn Trà, Đà Nẵng, Vietnam', '0369050053', b'0', 'Dj94NmuVjjfbSCDKlFOOG6ey.jpg', 1, 17, '', '2021-07-25 18:22:22'),
(31, 3, 'TROPICAL HOUSE*CHARMING BLUE 2BR APT*PREE POOL- 4R3', 1155000, 'Sơn Trà, Đà Nẵng, Vietnam', '0826491696', b'0', 'room_21441_64_1553789825.png', 2, 17, '', '2021-07-25 18:23:05'),
(32, 3, 'TROPICAL HOUSE*BRIGHT BLUE 1BR APT* BALCONY - 2R5', 577500, 'Sơn Trà, Đà Nẵng, Vietnam', '0211652974', b'0', 'room_20965_41_1553910848.png', 2, 17, '', '2021-07-25 18:24:11'),
(33, 3, 'Saison de Dalat - Căn hộ gia đình Printemps', 804000, 'Đà Lạt, Lâm Đồng, Vietnam', '0982818302', b'0', 'room_16277_46_1545708567.jpg', 1, 16, '', '2021-07-25 18:26:01'),
(34, 3, 'Nomad Home & Coffee - Phòng đôi Cam, WC riêng, ăn sáng', 400000, 'Đà Lạt, Lâm Đồng, Vietnam ', '0826491696', b'0', 'DSC09930.jpg', 1, 16, '', '2021-07-25 18:26:47'),
(35, 3, 'Vườn đom đóm Đà Lạt- Gác mái view vườn toilet riêng', 400000, 'Đà Lạt, Lâm Đồng, Vietnam ', '0982818302', b'0', '8w7CgAmMvbzU2KNoF9m80EvP.jpg', 1, 16, '', '2021-07-25 18:27:31'),
(36, 3, 'Vườn đom đóm Đà Lạt- Phòng hướng vườn vintage toilet riêng', 400000, 'Đà Lạt, Lâm Đồng, Vietnam', '0982818302', b'0', 'CWvjvnA0CjMZzNuGWPVq17Py.jpg', 1, 16, '', '2021-07-25 18:28:14'),
(37, 3, 'CarpeDIEM DALAT - Recorgese Room', 400000, 'Đà Lạt, Lâm Đồng, Vietnam', '0982818302', b'0', 'swWGzSFogBcWM2oBtTM0lipv.jpg', 1, 16, '', '2021-07-25 18:29:12'),
(38, 3, 'Dốc apartment - Home cinema - Game Room PS4 pro - 05', 300000, 'Đà Lạt, Lâm Đồng, Vietnam', '0982818302', b'0', 'nk-GC5Jcz_PfFIc6lOf6qfaG.jpg', 1, 16, '', '2021-07-25 18:29:55'),
(39, 3, 'Villa De Dolphiné Dalat - Dolphiné Room 21, toilet riêng đối diện cửa phòng', 330000, 'Đà Lạt, Lâm Đồng, Vietnam', '0982818302', b'0', 'IMG_1559310423309_1559311852368.jpg', 1, 16, '', '2021-07-25 18:30:25'),
(40, 3, 'Merry Yard Homestay Dalat - 008', 300000, 'Đà Lạt, Lâm Đồng, Vietnam', '0982818302', b'0', '376A9A61-CBB5-499F-9C36-E683000E7DBE.jpg', 1, 16, '', '2021-07-25 18:31:01'),
(41, 3, 'Eco Apartment - căn hộ mini đầy đủ tiện nghi, gần Hồ Xuân Hương', 515000, 'Đà Lạt, Lâm Đồng, Vietnam', '0982818302', b'0', 'DSCF4120.jpg', 1, 16, '', '2021-07-25 18:31:38'),
(42, 3, 'Nomad Home & Coffee - Phòng đôi áp mái WC riêng, ăn sáng', 450000, 'Đà Lạt, Lâm Đồng, Vietnam', '0982818302', b'0', 'room_29599_195_1565605104.jpg', 1, 16, '', '2021-07-25 18:32:07'),
(43, 3, 'Áp mái 2 giường đôi, WC riêng, ăn sáng - Nomad home & coffee', 800000, 'Đà Lạt, Lâm Đồng, Vietnam', '0982818302', b'0', 'room_29605_38_1565608240.jpg', 1, 16, '', '2021-07-25 18:32:39'),
(44, 3, 'LeJardin De Papa - Phòng Hoa Mai dành cho 2 người', 250000, 'Đà Lạt, Lâm Đồng, Vietnam', '0982818302', b'0', '72113091_107672990646923_2879812594586091520_o.jpg', 1, 16, '', '2021-07-25 18:33:08'),
(45, 3, 'Ba An Apartment Đà Lạt', 850000, 'Đà Lạt, Lâm Đồng, Vietnam', '0982818302', b'0', 'room_13694_13_1544336318.jpg', 1, 16, '', '2021-07-25 18:33:40'),
(46, 3, 'Amia Superior (AS)', 549000, 'Đà Lạt, Lâm Đồng, Vietnam', '0982818302', b'0', 'room_17116_4_1552396122.jpg', 1, 16, '', '2021-07-25 18:34:12'),
(47, 3, 'Villa Pine Forest - Single Room', 400000, 'Đà Lạt, Lâm Đồng, Vietnam', '0828888888', b'0', 'room_11600_4_1550205725.jpg', 1, 16, '', '2021-07-25 18:34:40'),
(48, 3, 'LeJardin De Papa - Phòng Đỗ Quyên dành cho 2 người hướng vườn', 300000, 'Đà Lạt, Lâm Đồng, Vietnam', '0982818302', b'0', '72890569_107673100646912_1637014260745764864_o (1).jpg', 1, 16, '', '2021-07-25 18:35:09'),
(49, 3, 'Homestay Nhà tụi mình - Phòng couple (áp mái)', 300000, 'Đà Lạt, Lâm Đồng, Vietnam', '0982818302', b'0', 'DDfTTtk1wytyRFw0s5o4NEeQ.jpg', 1, 16, '', '2021-07-25 18:35:40'),
(50, 3, 'H Long Hotel Dalat (Deluxe Room - Giường cỡ King cho 2 khách)', 470000, 'Đà Lạt, Lâm Đồng, Vietnam', '0982818302', b'0', 'uRwCUzrbqE5biFEvWfaQ_cVY.jpg', 1, 16, '', '2021-07-25 18:36:11'),
(51, 3, 'Khải Quỳnh Villa Đà Lạt 2', 4200000, 'Đà Lạt, Lâm Đồng, Vietnam', '0982818302', b'0', '4cs12BqGkjTqC38sA2iHmtXZ.jpg', 6, 17, '', '2021-07-25 18:36:46'),
(52, 3, 'Home Little Home (Nguyên căn 4-6 người)', 785000, 'Đà Lạt, Lâm Đồng, Vietnam', '0982818302', b'0', 'room_24252_49_1562474042.jpg', 2, 16, '', '2021-07-25 18:37:44'),
(53, 3, 'Harmony Villa - Phòng đơn có view nhìn ra thành phố và thung lũng vườn hồng', 429000, 'Đà Lạt, Lâm Đồng, Vietnam', '0982818302', b'0', 'ejQsYMiiVd1AFtI7rQvkKM_m.jpg', 1, 16, '', '2021-07-25 18:38:26'),
(54, 3, 'Thái Quang Homestay 6-2', 400000, 'Vũng Tàu, Bà Rịa Vũng Tàu, Vietnam', '0982818302', b'0', '1.jpg', 1, 18, '', '2021-07-25 18:39:49'),
(55, 3, 'Golden Villa Vung Tau', 8000000, 'Vũng Tàu, Bà Rịa Vũng Tàu, Vietnam', '0369053052', b'0', 'LUtBxWpw5YgvY3HoGcz5dPNc.png', 8, 18, '', '2021-07-25 18:40:34'),
(56, 3, 'Phòng nhóm view hồ bơi 1_ La Mer homestay', 1000000, 'Vũng Tàu, Bà Rịa Vũng Tàu, Vietnam', '0982818302', b'0', 'XrQ4W66EVzLGHQu1L5TLMORP.jpg', 1, 18, '', '2021-07-25 18:41:23'),
(57, 3, 'Chillin House Cloudy - Oceanview Superior Apartment', 730000, 'Vũng Tàu, Bà Rịa Vũng Tàu, Vietnam', '0982818302', b'0', 'room_25939_53_1559703665.jpg', 1, 18, '', '2021-07-25 18:41:56'),
(58, 3, 'Tropical House Vung Tau 2- 2BRS, 2WC, SeaView', 520000, 'Vũng Tàu, Bà Rịa Vũng Tàu, Vietnam', '0982818302', b'0', 'USOqPgZesxaufL92tyWbF5KZ.jpg', 1, 18, '', '2021-07-25 18:42:55'),
(59, 3, 'Blue Sapphire Resort Apartment', 1800000, 'Vũng Tàu, Bà Rịa Vũng Tàu, Vietnam', '0369053052', b'0', 'TYPg4dCTj6Eccj9fIgDOfv8e.jpg', 2, 18, '', '2021-07-25 18:43:24'),
(60, 3, 'PENTHOUSE 02 - FOX’S HOMESTAY - Căn hộ Duplex Penthouse trên tầng 12 với dt 300m2 ngay sát biển', 3000000, 'Vũng Tàu, Bà Rịa Vũng Tàu, Vietnam', '0369053052', b'0', 'Phong khach 1.jpg', 3, 18, '', '2021-07-25 18:44:09');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khuvuc`
--

CREATE TABLE `khuvuc` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `khuvuc`
--

INSERT INTO `khuvuc` (`id`, `name`, `image`, `address`, `time`) VALUES
(14, 'Hà Nội', 'hanoi.png', 'Hà nội', '2021-07-22 21:07:29'),
(15, 'TP. Hồ Chí Minh', 'hcm.png', 'Tp hồ chí minh', '2021-07-22 21:08:00'),
(16, 'Đà Lạt', 'dalat.png', 'Ngõ 80 Xuân Phương', '2021-07-22 21:08:24'),
(17, 'Đà Nẵng', 'danang.png', 'Ngõ 80 Xuân Phương', '2021-07-22 21:09:01'),
(18, 'Vũng Tàu', 'vungtau.png', 'số 6', '2021-07-22 21:09:34'),
(19, 'Nha Trang', 'nhatrang.png', 'Nha Trang', '2021-07-22 21:10:04'),
(20, 'Quảng Ninh', 'quangninh.png', 'Quảng Ninh', '2021-07-22 21:10:22'),
(21, 'Hội An', 'hoian.png', 'Hội An', '2021-07-22 21:10:50');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `maggall`
--

CREATE TABLE `maggall` (
  `id` int(11) NOT NULL,
  `magiamgia` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `mucgiam` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `timeup` datetime NOT NULL,
  `timeout` datetime NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `maggall`
--

INSERT INTO `maggall` (`id`, `magiamgia`, `mucgiam`, `status`, `timeup`, `timeout`, `time`) VALUES
(1, 'dung145', 200000, 1, '2021-07-25 10:53:00', '2021-07-31 10:53:00', '2021-07-25 10:53:28');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` datetime NOT NULL,
  `status` bit(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `message`
--

INSERT INTO `message` (`id`, `id_user`, `name`, `email`, `message`, `time`, `status`) VALUES
(69, 27, 'Nguyễn Văn Linh', 'dung@0401', 'anh ádsadas', '2021-07-19 21:40:36', b'000'),
(70, 27, 'Nguyễn Văn Linh', 'dung@0401', 'em linh giỏi vl', '2021-07-19 21:47:48', b'000'),
(118, 28, 'dũng trương mạnh', 'linh@123', 'sdadsadsa', '2021-07-20 00:20:12', b'001'),
(119, 28, 'dũng trương mạnh', 'linh@123', 'saddssda', '2021-07-20 00:20:48', b'000'),
(120, 28, 'dũng trương mạnh', 'linh@123', 'sdadsadsa', '2021-07-20 00:20:56', b'001'),
(126, 27, 'Nguyễn Văn Linh', 'dung@0401', 'sdsdasdadsas', '2021-07-23 15:35:19', b'001'),
(127, 27, 'Nguyễn Văn Linh', 'dung@0401', 'sdadsadsa', '2021-07-23 15:35:48', b'000'),
(128, 27, 'Nguyễn Văn Linh', 'dung@0401', 'a', '2021-07-23 17:25:54', b'000'),
(129, 27, 'Nguyễn Văn Linh', 'dung@0401', 'sa', '2021-07-23 18:00:19', b'000');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `mggkhuvuc`
--

CREATE TABLE `mggkhuvuc` (
  `id` int(11) NOT NULL,
  `magiamgia` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `mucgiam` int(11) NOT NULL,
  `time_up` datetime NOT NULL,
  `time_out` datetime NOT NULL,
  `status` int(11) NOT NULL,
  `id_khuvuc` int(11) NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `mggkhuvuc`
--

INSERT INTO `mggkhuvuc` (`id`, `magiamgia`, `mucgiam`, `time_up`, `time_out`, `status`, `id_khuvuc`, `time`) VALUES
(4, 'dung455', 200000, '2021-07-26 11:14:00', '2021-07-31 11:14:00', 1, 15, '2021-07-25 11:14:29');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `mgguser`
--

CREATE TABLE `mgguser` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `magiamgia` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `mucgiam` int(11) NOT NULL,
  `time_out` datetime NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `mgguser`
--

INSERT INTO `mgguser` (`id`, `id_user`, `status`, `magiamgia`, `mucgiam`, `time_out`, `time`) VALUES
(2, 30, 1, 'ni7ekf', 200000, '2021-08-04 13:17:32', '2021-07-25 11:14:29');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phieugiamgia`
--

CREATE TABLE `phieugiamgia` (
  `id` int(11) NOT NULL,
  `magiamgia` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `mucgiam` int(11) NOT NULL,
  `status` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_khachsan` int(11) NOT NULL,
  `time_up` datetime NOT NULL,
  `time_out` datetime NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `phieugiamgia`
--

INSERT INTO `phieugiamgia` (`id`, `magiamgia`, `mucgiam`, `status`, `id_khachsan`, `time_up`, `time_out`, `time`) VALUES
(11, 'MH370', 200000, '1', 4, '2021-07-24 15:22:00', '2021-07-31 15:22:00', '2021-07-23 15:22:17');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `repcomment`
--

CREATE TABLE `repcomment` (
  `id` int(11) NOT NULL,
  `id_comment` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_khachsan` int(11) NOT NULL,
  `repcomment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `repmessage`
--

CREATE TABLE `repmessage` (
  `id` int(11) NOT NULL,
  `id_message` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `repmessage`
--

INSERT INTO `repmessage` (`id`, `id_message`, `id_user`, `message`, `time`) VALUES
(11, 118, 28, 'oke chào bạn', '2021-07-20 00:20:22'),
(15, 120, 28, 'mình rất vui được làm quen với bạn', '2021-07-21 20:53:22'),
(16, 126, 27, 'oke chào bạn', '2021-07-23 15:35:40');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `address`, `phone`, `avatar`, `time`) VALUES
(27, 'Nguyễn Văn Linh', 'dung@0401', '81dc9bdb52d04dc20036dbd8313ed055', 'hà nội', '0365727226', '1.jpg', '2021-07-17 22:36:25'),
(28, 'dũng trương mạnh', 'linh@123', '202cb962ac59075b964b07152d234b70', '', '0365727226', 'user.png', '2021-07-19 22:07:45'),
(30, 'dũng trương mạnh', 'truongmanhdung04@gmail.com', '202cb962ac59075b964b07152d234b70', '', '0365727226', 'user.png', '2021-07-25 13:17:32');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `chitietkhachsan`
--
ALTER TABLE `chitietkhachsan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_khachsan` (`id_khachsan`);

--
-- Chỉ mục cho bảng `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `comment_ibfk_1` (`id_khachsan`);

--
-- Chỉ mục cho bảng `detailmessage`
--
ALTER TABLE `detailmessage`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_message` (`id_message`);

--
-- Chỉ mục cho bảng `doanhthu`
--
ALTER TABLE `doanhthu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_doitac` (`id_doitac`);

--
-- Chỉ mục cho bảng `doanhthudoitac`
--
ALTER TABLE `doanhthudoitac`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_khachsan` (`id_khachsan`);

--
-- Chỉ mục cho bảng `doitac`
--
ALTER TABLE `doitac`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `donhang_ibfk_1` (`id_phong`);

--
-- Chỉ mục cho bảng `favourite`
--
ALTER TABLE `favourite`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_khachsan` (`id_khachsan`),
  ADD KEY `id_user` (`id_user`);

--
-- Chỉ mục cho bảng `imagechitietkhachsan`
--
ALTER TABLE `imagechitietkhachsan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `imagechitietkhachsan_ibfk_1` (`id_chitiet`);

--
-- Chỉ mục cho bảng `khachsan`
--
ALTER TABLE `khachsan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_doitac` (`id_doitac`),
  ADD KEY `id_khuvuc` (`id_khuvuc`);

--
-- Chỉ mục cho bảng `khuvuc`
--
ALTER TABLE `khuvuc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `maggall`
--
ALTER TABLE `maggall`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

--
-- Chỉ mục cho bảng `mggkhuvuc`
--
ALTER TABLE `mggkhuvuc`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_khuvuc` (`id_khuvuc`);

--
-- Chỉ mục cho bảng `mgguser`
--
ALTER TABLE `mgguser`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

--
-- Chỉ mục cho bảng `phieugiamgia`
--
ALTER TABLE `phieugiamgia`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_khachsan` (`id_khachsan`);

--
-- Chỉ mục cho bảng `repcomment`
--
ALTER TABLE `repcomment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_comment` (`id_comment`),
  ADD KEY `id_khachsan` (`id_khachsan`),
  ADD KEY `id_user` (`id_user`);

--
-- Chỉ mục cho bảng `repmessage`
--
ALTER TABLE `repmessage`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_message` (`id_message`),
  ADD KEY `id_user` (`id_user`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `chitietkhachsan`
--
ALTER TABLE `chitietkhachsan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `detailmessage`
--
ALTER TABLE `detailmessage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `doanhthu`
--
ALTER TABLE `doanhthu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `doanhthudoitac`
--
ALTER TABLE `doanhthudoitac`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `doitac`
--
ALTER TABLE `doitac`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `donhang`
--
ALTER TABLE `donhang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `favourite`
--
ALTER TABLE `favourite`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `imagechitietkhachsan`
--
ALTER TABLE `imagechitietkhachsan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=120;

--
-- AUTO_INCREMENT cho bảng `khachsan`
--
ALTER TABLE `khachsan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT cho bảng `khuvuc`
--
ALTER TABLE `khuvuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT cho bảng `maggall`
--
ALTER TABLE `maggall`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=130;

--
-- AUTO_INCREMENT cho bảng `mggkhuvuc`
--
ALTER TABLE `mggkhuvuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `mgguser`
--
ALTER TABLE `mgguser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `phieugiamgia`
--
ALTER TABLE `phieugiamgia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `repcomment`
--
ALTER TABLE `repcomment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `repmessage`
--
ALTER TABLE `repmessage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `chitietkhachsan`
--
ALTER TABLE `chitietkhachsan`
  ADD CONSTRAINT `chitietkhachsan_ibfk_1` FOREIGN KEY (`id_khachsan`) REFERENCES `khachsan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`id_khachsan`) REFERENCES `khachsan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comment_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`);

--
-- Các ràng buộc cho bảng `detailmessage`
--
ALTER TABLE `detailmessage`
  ADD CONSTRAINT `detailmessage_ibfk_1` FOREIGN KEY (`id_message`) REFERENCES `message` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `doanhthu`
--
ALTER TABLE `doanhthu`
  ADD CONSTRAINT `doanhthu_ibfk_1` FOREIGN KEY (`id_doitac`) REFERENCES `doitac` (`id`);

--
-- Các ràng buộc cho bảng `doanhthudoitac`
--
ALTER TABLE `doanhthudoitac`
  ADD CONSTRAINT `doanhthudoitac_ibfk_1` FOREIGN KEY (`id_khachsan`) REFERENCES `khachsan` (`id`);

--
-- Các ràng buộc cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD CONSTRAINT `donhang_ibfk_1` FOREIGN KEY (`id_phong`) REFERENCES `chitietkhachsan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `donhang_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `favourite`
--
ALTER TABLE `favourite`
  ADD CONSTRAINT `favourite_ibfk_1` FOREIGN KEY (`id_khachsan`) REFERENCES `khachsan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `favourite_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `imagechitietkhachsan`
--
ALTER TABLE `imagechitietkhachsan`
  ADD CONSTRAINT `imagechitietkhachsan_ibfk_1` FOREIGN KEY (`id_chitiet`) REFERENCES `khachsan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `khachsan`
--
ALTER TABLE `khachsan`
  ADD CONSTRAINT `khachsan_ibfk_1` FOREIGN KEY (`id_doitac`) REFERENCES `doitac` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `khachsan_ibfk_2` FOREIGN KEY (`id_khuvuc`) REFERENCES `khuvuc` (`id`);

--
-- Các ràng buộc cho bảng `message`
--
ALTER TABLE `message`
  ADD CONSTRAINT `message_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `mggkhuvuc`
--
ALTER TABLE `mggkhuvuc`
  ADD CONSTRAINT `mggkhuvuc_ibfk_1` FOREIGN KEY (`id_khuvuc`) REFERENCES `khuvuc` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `mgguser`
--
ALTER TABLE `mgguser`
  ADD CONSTRAINT `mgguser_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `phieugiamgia`
--
ALTER TABLE `phieugiamgia`
  ADD CONSTRAINT `phieugiamgia_ibfk_1` FOREIGN KEY (`id_khachsan`) REFERENCES `khachsan` (`id`);

--
-- Các ràng buộc cho bảng `repcomment`
--
ALTER TABLE `repcomment`
  ADD CONSTRAINT `repcomment_ibfk_1` FOREIGN KEY (`id_comment`) REFERENCES `comment` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `repcomment_ibfk_2` FOREIGN KEY (`id_khachsan`) REFERENCES `khachsan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `repcomment_ibfk_3` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`);

--
-- Các ràng buộc cho bảng `repmessage`
--
ALTER TABLE `repmessage`
  ADD CONSTRAINT `repmessage_ibfk_1` FOREIGN KEY (`id_message`) REFERENCES `message` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `repmessage_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
