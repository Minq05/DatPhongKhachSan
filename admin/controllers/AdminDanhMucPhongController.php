<?php
class AdminDanhMucPhongController
{
    public $modelDanhMucPhong;
    public function __construct()
    {
        $this->modelDanhMucPhong = new AdminDanhMucPhong();
    }

    public function danhSachDanhMucPhong()
    {

        $listDanhMuc = $this->modelDanhMucPhong->getAllDanhMucPhong();

        require_once './views/danhmucphong/listDanhMucPhong.php';
    }
    public function formAddDanhMucPhong()
    {
        // Ham nay dung de hien thi form nhap
        require_once './views/danhmucphong/addDanhMucPhong.php';
        // deleteSessionError();
    }

    public function postAddDanhMucPhong()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $ten_loai = $_POST['ten_loai'] ?? '';
            $mo_ta = $_POST['mo_ta'] ?? '';
            $error = [];
            $_SESSION['error'] = $error;
            if (empty($error)) {
                $this->modelDanhMucPhong->insertDanhMucPhong($ten_loai, $mo_ta);
                header("Location: " . BASE_URL_ADMIN . '?act=danh-muc-phong');
                exit();
            } else {
                $_SESSION['flash'] = true;
                header("Location: " . BASE_URL_ADMIN . '?act=form-them-danh-muc');
                exit();
            }
        }
    }

    public function deleteDanhMucPhong()
    {
        $id = $_GET['id'];
        $this->modelDanhMucPhong->deleteDanhMuc($id);
        header("Location: " . BASE_URL_ADMIN . '?act=danh-muc-phong');
        exit();
    }

    public function formEditDanhMucPhong()
    {
        $id = $_GET['id'];
        $danhmuc = $this->modelDanhMucPhong->getDetailDanhMucPhong($id);
        require_once './views/danhmucphong/editDanhMucPhong.php';
        exit();
    }

    public function postEditDanhMucPhong()
    {
        $id = $_GET['id'];
        $ten_loai = $_POST['ten_loai'];
        $mo_ta = $_POST['mo_ta'];
        $this->modelDanhMucPhong->updateDanhMucPhong($id, $ten_loai, $mo_ta);
        header("Location: " . BASE_URL_ADMIN . '?act=danh-muc-phong');
        exit();
    }
}