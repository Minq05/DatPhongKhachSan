<?php
class AdminTaiKhoanController
{
    public $modelTaiKhoan;
    public $modelDonDat;
    public $modelPhong;

    public function __construct()
    {
        $this->modelTaiKhoan = new AdminTaiKhoan();
        $this->modelDonDat = new AdminDonDat();
        $this->modelPhong = new AdminPhong();
    }

    public function danhSachQuanTri()
    {
        $listQuanTri = $this->modelTaiKhoan->getAllTaiKhoan(1);

        require_once './views/taikhoan/quantri/listQuanTri.php';
    }

    public function formAddQuanTri()
    {
        require_once './views/taikhoan/quantri/addQuanTri.php';

        // deleteSessionError();
    }
    public function postAddQuanTri()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $ho_ten = $_POST['ho_ten'] ?? '';
            $email = $_POST['email'] ?? '';
            $dien_thoai = $_POST['dien_thoai'] ?? '';

            $error = [];
            if (empty($ho_ten)) {
                $error['ho_ten'] = "Họ tên không được để trống";
            }
            if (empty($email)) {
                $error['email'] = "Email không được để trống";
            }
            $_SESSION['error'] = $error;
            if (empty($error)) {

                $chuc_vu_id = 1;

                $this->modelTaiKhoan->insertTaiKhoan(
                    $ho_ten,
                    $email,
                    $dien_thoai,
                    // $password,
                    $chuc_vu_id,
                );

                header("Location: " . BASE_URL_ADMIN . '?act=list-tai-khoan-quan-tri');
                exit();
            } else {
                $_SESSION['flash'] = true;
                header("Location: " . BASE_URL_ADMIN . '?act=form-them-quan-tri');
                exit();
            }
        }
    }

    public function deleteQuanTri()
    {
        $id = $_GET['id'];
        $this->modelTaiKhoan->deleteTaiKhoan($id);
        header("Location: " . BASE_URL_ADMIN . '?act=list-tai-khoan-quan-tri');
        exit();
    }

    public function formEditQuanTri()
    {
        $id = $_GET['id'];
        $quanTri = $this->modelTaiKhoan->getDetailTaiKhoan($id);
        // var_dump($quanTri);die;
        require_once './views/taikhoan/quantri/editQuanTri.php';
        // deleteSessionError();
    }

    public function postEditQt()
    {
        $id = $_GET['id'];
        $ho_ten = $_POST['ho_ten'];
        $email = $_POST['email'];
        $dien_thoai = $_POST['dien_thoai'];
        $this->modelTaiKhoan->postUpdateQt($id, $ho_ten, $email, $dien_thoai);
        header("Location: " . BASE_URL_ADMIN . '?act=list-tai-khoan-quan-tri');
        exit();
    }

    //  ======================================= code BE của khách hàng =================================
    public function danhSachKhachHang()
    {
        $listKhachHang = $this->modelTaiKhoan->getAllTaiKhoan(2);

        require_once './views/taikhoan/khachhang/listKhachHang.php';
    }

    public function formEditKhachHang()
    {
        $id = $_GET['id'];
        $khachHang = $this->modelTaiKhoan->getDetailTaiKhoan($id);
        // var_dump($quanTri);die;
        require_once './views/taikhoan/khachhang/editKhachHang.php';
        // deleteSessionError();
    }

    public function postEditKh()
    {
        $id = $_GET['id'];
        $ho_ten = $_POST['ho_ten'];
        $email = $_POST['email'];
        $dien_thoai = $_POST['dien_thoai'];
        $this->modelTaiKhoan->postUpdateKh($id, $ho_ten, $email, $dien_thoai);
        header("Location: " . BASE_URL_ADMIN . '?act=list-tai-khoan-khach-hang');
        exit();
    }

    public function detailKhachHang()
    {
        $id = $_GET['id'];
        $khachHang = $this->modelTaiKhoan->getDetailTaiKhoan($id);
        $listDonDat = $this->modelDonDat->getDonFromClient($id);
        $listBinhLuan = $this->modelPhong->getBinhLuanFromClient($id);
        require_once './views/taikhoan/khachhang/detailKhachHang.php';
    }
    

    public function formLogin()
    {
        $list = $this->modelTaiKhoan->getAllTaiKhoanAD();

        require_once "./views/auth/formLogin.php";
    }

    public function login()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $email = $_POST['email'];
            $password = $_POST['password'];
            $listUser = $this->modelTaiKhoan->getAllTaiKhoanAD();
            foreach ($listUser as $a) {

                if (($email == $a['email']) && ($password == $a['password'])) 
                {
                    if (($a['trang_thai_id'] == 1) && ($a['chuc_vu_id'] == 1)) {
                        $_SESSION['user_admin'] = $a['email'];
                        header("Location:" . BASE_URL_ADMIN);
                    } elseif ($a['chuc_vu_id'] !== 1) {
                        echo "Tài khoản ko hợp lệ";
                        
                    } elseif ($a['trang_thai_id'] !== 1) {
                        echo "Tài khoản bị cấm";
                        
                    }
                    exit();
                } else {
                    $_SESSION['error'] = $email;
                    $_SESSION['flash'] = true;
                    header("Location:" . BASE_URL_ADMIN . "?act=login-admin");
                }
            }
        }
    }

    public function logout()
    {
        if (isset($_SESSION['user_admin'])) {
            unset($_SESSION['user_admin']);
            header('Location:' . BASE_URL_ADMIN . '?act=login-admin');
        }
    }
}
