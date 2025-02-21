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
                            <h5 class="text-center">ĐĂNG NHẬP</h5>
                            <form action="<?= BASE_URL . '?act=check-login' ?>" method="post">
                                <div class="single-input-item">
                                    <input type="email" placeholder="Email or Username" name="email" required />
                                </div>
                                <div class="single-input-item">
                                    <input type="password" placeholder="Enter your Password" name="password" required />
                                </div>
                                <div class="single-input-item">
                                    <div class="login-reg-form-meta d-flex align-items-center justify-content-between">

                                        <a href="<?= BASE_URL . '?act=register' ?>" class="forget-pwd">Đăng ký</a>
                                    </div>
                                </div>
                                <div class="single-input-item">
                                    <button class="btn btn-sqr">ĐĂNG NHẬP</button>
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