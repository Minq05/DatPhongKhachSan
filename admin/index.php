<?php
session_start();
// Require file Common
require_once '../commons/env.php'; // Khai báo biến môi trường
require_once '../commons/function.php'; // Hàm hỗ trợ

// Require toàn bộ file Controllers
require_once './controllers/AdminDanhMucPhongController.php';
require_once './controllers/AdminPhongController.php';
require_once './controllers/AdminDonDatController.php';
require_once './controllers/AdminBaoCaoThongKeController.php';
require_once './controllers/AdminTaiKhoanController.php';

// Require toan bo file models
require_once './models/AdminDanhMucPhong.php';
require_once './models/AdminPhong.php';
require_once './models/AdminDonDat.php';
require_once './models/AdminTaiKhoan.php';

// Route

$act = $_GET['act'] ?? '/';

// if($act !== 'login-admin' && $act !== 'check-login-admin' && $act = 'logout-admin'){
//     checkLoginAdmin();
// }

match ($act) {

    // route bao cao thong ke - trang chu
    '/' => (new AdminBaoCaoThongKeController())->home(),

    // Danh muc
    'danh-muc-phong' =>(new AdminDanhMucPhongController())->danhSachDanhMucPhong(),
    'xoa-danh-muc-phong'=>(new AdminDanhMucPhongController())->deleteDanhMucPhong(),
    'form-them-danh-muc' => (new AdminDanhMucPhongController())->formAddDanhMucPhong(),
    'them-danh-muc' => (new AdminDanhMucPhongController())->postAddDanhMucPhong(),
    'form-sua-danh-muc' => (new AdminDanhMucPhongController())->formEditDanhMucPhong(),
    'postEditDanhMuc' => (new AdminDanhMucPhongController())->postEditDanhMucPhong(),
    

    // Phong
    'phong' => (new AdminPhongController())->danhSachPhong(),
    'form-them-phong' => (new AdminPhongController())->formAddPhong(),
    'them-phong' => (new AdminPhongController())->postAddPhong(),
    'chi-tiet-phong' => (new AdminPhongController())->detailPhong(),
    'form-sua-phong' => (new AdminPhongController())->formEditPhong(),
    'sua-phong' => (new AdminPhongController())->postEditPhong(),
    'xoa-phong' => (new AdminPhongController())->deletePhong(),

    //
    // 'update-binh-luan' => (new AdminPhongController())->updateTrangThaiBinhLuan(),

    // Don dat
    'don-dat' => (new AdminDonDatController())->danhSachDonDat(),
    'form-sua-don-dat' => (new AdminDonDatController())->formEditDonDat(),
    'chi-tiet-don-dat' => (new AdminDonDatController())->detailDonDat(),
    'sua-don-dat' => (new AdminDonDatController())->postEditDonDat(),

    // Quan tri
    'list-tai-khoan-quan-tri' =>(new AdminTaiKhoanController())->danhSachQuanTri(),
    'form-them-quan-tri' =>(new AdminTaiKhoanController())->formAddQuanTri(),
    'them-quan-tri' =>(new AdminTaiKhoanController())->postAddQuanTri(),
    'form-sua-quan-tri' =>(new AdminTaiKhoanController())->formEditQuanTri(),
    'postEditQt' =>(new AdminTaiKhoanController())->postEditQt(),
    'xoa-tai-khoan-qt' =>(new AdminTaiKhoanController())->deleteQuanTri(),
    // Khach hang 
    'list-tai-khoan-khach-hang' =>(new AdminTaiKhoanController())->danhSachKhachHang(),
    'form-sua-khach-hang' =>(new AdminTaiKhoanController())->formEditKhachHang(),
    'chi-tiet-khach-hang' =>(new AdminTaiKhoanController())->detailKhachHang(),
    'postEditKh' =>(new AdminTaiKhoanController())->postEditKh(),


    // auth
    'login-admin' =>(new AdminTaiKhoanController())->formLogin(),
    'check-login-admin' =>(new AdminTaiKhoanController())->login(),
    'logout-admin' =>(new AdminTaiKhoanController())->logout(),
};
