<?php
require_once 'views/layout/header.php';
require_once 'views/layout/menu.php';
?>

<main>
    <!-- breadcrumb area start -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-wrap">
                        <nav aria-label="breadcrumb">
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html"><i class="fa fa-home"></i></a></li>
                                <li class="breadcrumb-item active" aria-current="page">login-Register</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb area end -->

    <!-- login register wrapper start -->
    <div class="login-register-wrapper section-padding">
        <div class="container" style="max-width: 40vw;">
            <div class="member-area-from-wrap">
                <div class="row">
                    <!-- Login Content Start -->
                    <div class="col-lg-12">
                        <div class="login-reg-form-wrap">
                            <h5 class="text-center">ĐĂNG KÝ</h5>
                            <form action="<?= BASE_URL . '?act=check-register' ?>" method="post">
                                <div class="single-input-item">
                                    <input type="email" placeholder="Email or Username" name="email" required />
                                <div class="single-input-item">
                                    <input type="text" placeholder="Enter your Fullname" name="ho_ten" required />
                                <div class="single-input-item">
                                    <input type="text" placeholder="Enter your Phonenumber" name="dien_thoai" required />
                                    <input type="hidden" name="chuc_vu_id" value="2">
                                    <input type="hidden" name="trang_thai_id" value="2">
                                </div>
                                <div class="single-input-item">
                                    <input type="text" placeholder="Enter your Phonenumber" name="dien_thoai" required />
                                </div>
                                <div class="single-input-item">
                                    <input type="password" placeholder="Enter your Password" name="password" required />
                                </div>
                                <div class="single-input-item">
                                    <input type="password" placeholder="Confirm Password" name="confirm_password" required />
                                </div>
                                <div class="single-input-item">
                                    <div class="login-reg-form-meta d-flex align-items-center justify-content-between">

                                        <a href="<?= BASE_URL . '?act=login' ?>" class="forget-pwd">Đăng nhập</a>
                                    </div>
                                </div>
                                <div class="single-input-item">
                                    <button type="submit" class="btn btn-sqr">ĐĂNG KÝ</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- Login Content End -->
                </div>
            </div>
        </div>
    </div>
    <!-- login register wrapper end -->
</main>

<!-- offcanvas mini cart start -->
<li>
    <a href="#" class="mini-btn">
        <i class="fa-solid fa-shop"></i>
    </a>
</li>

<?php
require_once 'views/layout/footer.php';
?>