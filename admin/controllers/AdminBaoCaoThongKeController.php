<?php
class AdminBaoCaoThongKeController{
    public $modelPhong;
    public $modelDonDat;
    public function __construct()
    {
        $this->modelDonDat = new AdminDonDat();
        $this->modelPhong = new AdminPhong();
    }
    public function home(){
        if(!isset($_SESSION['user_admin'])) header("Location: " . BASE_URL_ADMIN . '?act=login-admin');
        $listDonDat = $this->modelDonDat->getAllDonDat();
        $listPhong = $this->modelPhong->getAllPhong();
        require_once './views/home.php';
    }

    public function logout(){
        unset($_SESSION['user_admin']);
        header("Location: " . BASE_URL_ADMIN . '?act=login-admin');
    }
    
}
?>