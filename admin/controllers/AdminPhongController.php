<?php
class AdminPhongController
{
    public $modelPhong;
    public $modelDanhMuc;

    public function __construct()
    {
        $this->modelPhong = new AdminPhong();
        $this->modelDanhMuc = new AdminDanhMucPhong();
    }

    public function danhSachPhong()
    {

        $listPhong = $this->modelPhong->getAllPhong();

        require_once './views/phong/listPhong.php';
    }

    public function formAddPhong()
    {
        $listDanhMuc = $this->modelDanhMuc->getAllDanhMucPhong();
        require_once './views/phong/addPhong.php';
    }

    public function postAddPhong()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $ten_phong = $_POST['ten_phong'] ?? '';
            $gia_phong = $_POST['gia_phong'] ?? '';
            $hinh_anh = $_POST['hinh_anh'] ?? '';
            $loai_phong_id = $_POST['loai_phong_id'] ?? '';
            $trang_thai_id = $_POST['trang_thai_id'] ?? '';
            $mo_ta = $_POST['mo_ta'] ?? '';
            $kieu_phong_id = $_POST['kieu_phong_id'] ?? '';
            $error = [];
            $_SESSION['error'] = $error;
            if (empty($error)) {
                $this->modelPhong->insertPhong(
                    $ten_phong,
                    $gia_phong,
                    $hinh_anh,
                    $loai_phong_id,
                    $trang_thai_id,
                    $kieu_phong_id,
                    $mo_ta
                );
                header("Location: " . BASE_URL_ADMIN . '?act=phong');
                exit();
            } else {
                $_SESSION['flash'] = true;
                header("Location: " . BASE_URL_ADMIN . '?act=form-them-phong');
                exit();
            }
        }
    }

    public function detailPhong()
    {
        $id = $_GET['id'] ?? null; 

        if ($id === null) {
            echo "ID is required.";
        }

        $phong = $this->modelPhong->getDetailPhong($id);
        $listBinhLuan = $this->modelPhong->getBinhLuanFromPhong($id);

        if ($phong) {
            require_once './views/phong/detailPhong.php';
            exit();
        } else {
            header("Location: " . BASE_URL_ADMIN . '?act=phong');
            exit();
        }
    }

    public function formEditPhong()
    {
        $id = $_GET['id'] ?? null; 

        if ($id === null) {
            echo "ID is required.";
        }
        $phong = $this->modelPhong->getDetailPhong($id);
        $listDanhMuc = $this->modelDanhMuc->getAllDanhMucPhong($id);
        if($phong){
            require_once './views/phong/editPhong.php';
        }else{
            header("Location: " . BASE_URL_ADMIN . '?act=phong');
            exit();
        }
    }

    public function postEditPhong()
    {
        $error = [];
        $id_phong = $_GET['id'] ?? '';
        $this->modelPhong->getDetailPhong($id_phong);

        $_SESSION['error'] = $error;
        $ten_phong = $_POST['ten_phong'] ?? '';
        $gia_phong = $_POST['gia_phong'] ?? '';
        $hinh_anh = $_POST['hinh_anh'] ?? '';
        $loai_phong_id = $_POST['loai_phong_id'] ?? null;
        $trang_thai_id = $_POST['trang_thai_id'] ?? '';
        $mo_ta = $_POST['mo_ta'] ?? '';
        $kieu_phong_id = $_POST['kieu_phong_id'] ?? '';
        $id_phong = $this->modelPhong->updatePhong(
            $id_phong,
            $ten_phong,
            $gia_phong,
            $hinh_anh,
            $loai_phong_id,
            $trang_thai_id,
            $kieu_phong_id,
            $mo_ta
        );
        header("Location: " . BASE_URL_ADMIN . '?act=phong');
        exit();
    }

    public function deletePhong()
    {
        $id = $_GET['id'];
        $this->modelPhong->deletePhong($id);
        header("Location: " . BASE_URL_ADMIN . '?act=phong');
        exit();
    }

    // public function updateTrangThaiBinhLuan()
    // {
    //     $id_binh_luan = $_POST['id'];
    //     $name_view = $_POST['name_view'];
    //     $binhLuan = $this->modelPhong->getDetailBinhLuan($id_binh_luan);

    //     if ($binhLuan) {
    //         $trang_thai_update = '';
    //         if ($binhLuan['trang_thai_id'] == 1) {
    //             $trang_thai_update = 0;
    //         } else {
    //             $trang_thai_update = 1;
    //         }
    //         $status = $this->modelPhong->updateTrangThaiBinhLuan($id_binh_luan, $trang_thai_update);
    //         if ($status) {
    //             if ($name_view == 'detail_khach') {
    //                 header("Location: " . BASE_URL_ADMIN . '?act=chi-tiet-khach-hang&id=' . $binhLuan['tai_khoan_id']);
    //             } else {
    //                 header("Location: " . BASE_URL_ADMIN . '?act=chi-tiet-phong&id=' . $binhLuan['phong_id']);
    //             }
    //         }
    //     }
    // }
}