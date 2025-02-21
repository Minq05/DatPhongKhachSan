<?php
class AdminDonDatController
{
    public $modelDonDat;

    public function __construct()
    {
        $this->modelDonDat = new AdminDonDat();
    }
    public function danhSachDonDat()
    {

        $listDonDat = $this->modelDonDat->getAllDonDat();

        require_once './views/dondat/listDonDat.php';
    }

    public function formEditDonDat()
    {
        $id = $_GET['id'];
        $donDat = $this->modelDonDat->getDetailDonDat($id);

        require_once './views/dondat/editDonDat.php';
    }

    public function postEditDonDat()
    {
        $id = $_GET['id'] ?? null;
        $check_in = $_POST['check_in'] ?? null;
        $check_out = $_POST['check_out'] ?? null;
        $trang_thai_id = $_POST['trang_thai_id'] ?? null;
        $ghi_chu = $_POST['ghi_chu'] ?? null;
        $this->modelDonDat->updateDonDat($id, $check_in, $check_out, $trang_thai_id, $ghi_chu);
       header('Location: ' .BASE_URL_ADMIN . '?act=don-dat');

    }
    public function detailDonDat()
    {
        $id = $_GET['id'] ?? null;

        if ($id === null) {
            echo "ID is required.";
            return;
        }

        $donDat = $this->modelDonDat->getDetailDonDat($id);
        $phong = $this->modelDonDat->getDetailDonDatPhong($id);
        $donDatPhong = $this->modelDonDat->getListDonDat($id);

        // $listTrangThaiDonDat = $this->modelDonDat->getAllTrangThaiDonDat();

        require_once './views/dondat/detailDonDat.php';
    }

    // public function detailDonDat()
    // {
    //     $id = $_GET['id'] ?? null;

    //     if ($id === null) {
    //         echo "ID is required.";
    //         return;
    //     }

    //     $donDat = $this->modelDonDat->getDetailDonDat($id); // Lấy thông tin đơn đặt
    //     $donDatPhong = $this->modelDonDat->getListDonDat($id); // Lấy thông tin các phòng trong đơn đặt

    //     // Tính số ngày giữa check_in và check_out
    //     $check_in = new DateTime($donDat['check_in']);
    //     $check_out = new DateTime($donDat['check_out']);
    //     $so_ngay = $check_in->diff($check_out)->days;

    //     // Giả sử giá phòng mỗi ngày là 200.000 VND
    //     $gia_ngay = 200000;

    //     // Tính tổng tiền cho mỗi phòng
    //     $total = [];
    //     $thanh_tien = $so_ngay * $gia_ngay;
    //     $total[] = $thanh_tien;
    //     require_once './views/dondat/detailDonDat.php';
    // }
}
//