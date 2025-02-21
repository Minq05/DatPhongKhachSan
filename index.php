<?php
session_start();
// Require file Common
require_once './commons/env.php'; // Khai báo biến môi trường
require_once './commons/function.php'; // Hàm hỗ trợ

// Require toàn bộ file Controllers
require_once './controllers/HomeController.php';

// Require toàn bộ file Models

require_once './models/Phong.php';
require_once './models/Taikhoan.php';
require_once './models/DonDat.php';

// Route 
$control = new HomeController();
$control->updateRoomStatuses();
$act = $_GET['act'] ?? '/';

match ($act) {
    // route
    '/' => (new HomeController())->home(),

    'phong' => (new HomeController())->phong(),

    'phong-filter' => (new HomeController())->phongFilter(),

    'chi-tiet-phong' => (new HomeController())->chiTietPhong(),

    'thong-tin-khach' => (new HomeController())->getDetailKhach(),

    'postEditKhachHang' => (new HomeController())->editKhach(),

    'form-edit-khach' => (new HomeController())->formEditKhach(),

    'login' => (new HomeController())->formLogin(),

    'register' => (new HomeController())->formRegister(),

    'check-register' => (new HomeController())->postRegister(),

    'check-login' => (new HomeController())->postLogin(),

    'gioi-thieu' => (new HomeController())->gioiThieu(),

    'lien-he' => (new HomeController())->lienHe(),

    'blog' => (new HomeController())->blog(),

    'don-dat' => (new HomeController())->donDat(),

    'postBooking' => (new HomeController())->addDondat(),

    'huy-don-dat' => (new HomeController())->huyDondat(),

    'logout' => (new HomeController())->logOut(),
};
