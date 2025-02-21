<?php
class HomeController
{
    public $modelPhong;
    public $modelTaiKhoan;
    public $modelDonDat;
    public function __construct()
    {
        $this->modelPhong = new Phong;
        $this->modelTaiKhoan = new TaiKhoan;
        $this->modelDonDat = new DonDat;
    }
    public function home()
    {
        $listPhong = $this->modelPhong->getAllPhong();
        require_once './views/home.php';
    }

    public function phong()
    {
        $listPhongId = $this->modelPhong->getPhong();
        require_once './views/phong.php';
    }

    public function phongFilter()
    {
        $listFilter = $this->modelPhong->getPhongFilter();
        require_once './views/phongFilter.php';
    }

    public function getDetailKhach()
    {
        $id = $_GET['id'];
        $khach = $this->modelTaiKhoan->getUser($id);
        require_once './views/detailKhach.php';
    }

    public function editKhach()
    {
        $id = $_GET['id'];
        $ho_ten = $_POST['ho_ten'];
        $dien_thoai = $_POST['dien_thoai'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $new_password = $_POST['new_password'];
        $confirm_new_password = $_POST['confirm_new_password'];

        // Validate new password
        if (!empty($new_password) && $new_password === $confirm_new_password) {
            $password = $new_password;
        }
        if (!empty($new_password) && $new_password !== $confirm_new_password) {
            echo "<script>alert('Mật khẩu xác nhận không khớp.');</script>";
            header("Location: " . BASE_URL . '?act=form-edit-khach&id=' . $id);
            exit();
        }

        $this->modelTaiKhoan->editDetailKhach($id, $ho_ten, $dien_thoai, $email, $password);
        header("Location: " . BASE_URL . '?act=thong-tin-khach&id=' . $id);
        exit();
    }

    public function formEditKhach()
    {
        $id = $_GET['id'];
        $khach = $this->modelTaiKhoan->getUser($id);
        require_once './views/editKhach.php';
    }

    public function chiTietPhong()
    {
        $id = $_GET['id'];
        $phongDetail = $this->modelPhong->getDetailPhong($id);
        $listBinhLuan = $this->modelPhong->getAllBinhLuan($id);
        $listPhong = $this->modelPhong->getAllPhong();
        require_once './views/detailPhong.php';
    }

    public function formLogin()
    {
        require_once "./views/auth/formLogin.php";
        // deleteSessionError();
    }

    public function formRegister()
    {
        require_once "./views/auth/formRegister.php";
    }
    public function postRegister()
    {
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $email = $_POST['email'];
            $ho_ten = $_POST['ho_ten'];
            $dien_thoai = $_POST['dien_thoai'];
            $password = $_POST['password'];
            $chuc_vu_id = $_POST['chuc_vu_id'];
            $trang_thai_id = $_POST['trang_thai_id'];
            $confirmPassword = $_POST["confirm_password"];
            $error = [];
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $error[] = "Email không hợp lệ.";
            }
            if (strlen($password) < 6) {
                $error[] = "Mật khẩu phải có ít nhất 6 ký tự.";
            }
            if ($password !== $confirmPassword) {
                $error[] = "Mật khẩu xác nhận không khớp.";
            }

            if (empty($error)) {
                $this->modelTaiKhoan->registerUser($email, $ho_ten, $dien_thoai, $password, $chuc_vu_id, $trang_thai_id);
                echo "<script>alert('Đăng ký thành công!')</script>";
                // echo $dien_thoai;
                header("Location: " . BASE_URL . '?act=login');
                exit();
            } else {
                $errorMessage = implode("\\n", $error);
                echo "<script>alert('$errorMessage');</script>";
                header("Location: " . BASE_URL . '?act=register');
                exit();
            }
        }
    }
    public function postLogin()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $email = $_POST['email'];
            $password = $_POST['password'];
            $listUser = $this->modelTaiKhoan->getAllTaiKhoanCL();
            foreach ($listUser as $a) {
                if (($email == $a['email']) && ($password == $a['password'])) {
                    if (($a['trang_thai_id'] == 2) && ($a['chuc_vu_id'] == 2)) {
                        $_SESSION['user_id'] = $a['id'];
                        header("Location:" . BASE_URL);
                    } elseif ($a['chuc_vu_id'] !== 2) {
                        echo "<script>alert('Tài khoản ko hợp lệ !');</script>";
                        exit();
                    } elseif ($a['trang_thai_id'] !== 2) {
                        echo "<script>alert('Tài khoản bị cấm !');</script>";
                        exit();
                    }
                    exit();
                } else {
                    echo "Loi";
                }
            }
        }
    }

    public function gioiThieu()
    {
        require_once './views/introduce.php';
    }

    public function lienHe()
    {
        require_once './views/contact.php';
    }

    public function blog()
    {
        require_once './views/blog.php';
    }

    public function donDat()
    {
        $id = $_SESSION['user_id'];
        $listDon = $this->modelDonDat->getAllDonDat($id);
        require_once './views/donDat.php';
    }

    public function addDondat()
    {
        $tai_khoan_id = $_POST['tai_khoan_id'];
        $phong_id = $_POST['phong_id'];
        $check_in = $_POST['check_in'];
        $check_out = $_POST['check_out'];
        $trang_thai_id = $_POST['trang_thai_id'];
        $phuong_thuc_id = $_POST['phuong_thuc_id'];
        $don_gia = $_POST['don_gia'];
        $this->modelDonDat->postBooking($tai_khoan_id, $phong_id, $check_in, $check_out, $trang_thai_id, $phuong_thuc_id, $don_gia);
        $this->modelDonDat->changeStatus($phong_id);
        header("Location: " . BASE_URL . '?act=don-dat');
    }

    public function huyDonDat()
    {
        $id = $_GET['id'];
        $this->modelDonDat->deleteDonDat($id);
        header("Location: " . BASE_URL . '?act=don-dat');
    }
    public function logOut()
    {
        session_destroy();
        header("Location: " . BASE_URL . '?act=login');
    }


    public function updateRoomStatuses()
    {
        $rooms = $this->modelPhong->getAllRooms();
        $bookings = $this->modelDonDat->getBookings();
        $current_time = new DateTime();

        // Duyệt qua tất cả các phòng
        foreach ($rooms as $room) {
            $room_id = $room['id'];
            $shouldUpdate = true;

            // Kiểm tra xem phòng có trong danh sách đặt không
            foreach ($bookings as $booking) {
                if ($booking['phong_id'] == $room_id) {
                    $check_out_time = new DateTime($booking['check_out'] . " 23:59:59");

                    // Nếu ngày check_out lớn hơn thời gian hiện tại, không cập nhật
                    if ($check_out_time >= $current_time) {
                        $shouldUpdate = false;
                        break;
                    }
                }
            }

            // Cập nhật trạng thái về 2 nếu cần
            if ($shouldUpdate) {
                $this->modelPhong->updateRoomStatus($room_id);
            }
        }
    }
}
