    <header class="header-area header-wide">
        <div class="main-header d-none d-lg-block">
            <div class="header-main-area sticky">
                <div class="container">
                    <div class="row align-items-center position-relative">
                        <div class="col-lg-2">
                            <div class="logo">
                                <a href=" <?= BASE_URL ?> ">
                                    <img src="assets/img/logo/logo.png" alt="Brand Logo" width="120px">
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-6 position-static">
                            <div class="main-menu-area">
                                <div class="main-menu">
                                    <nav class="desktop-menu">
                                        <ul>
                                            <li><a href="<?= BASE_URL ?>">Trang chủ</i></a>

                                            </li>

                                            <li><a href="<?= BASE_URL . '?act=phong' ?>">Phòng </a>
                                            </li>
                                            <li><a href="<?= BASE_URL . '?act=blog' ?>">Tin tức</a></li>
                                            <li><a href="<?= BASE_URL . '?act=gioi-thieu' ?>">Giới thiệu</a></li>
                                            <li><a href="<?= BASE_URL . '?act=lien-he' ?>">Liên hệ</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="header-right d-flex align-items-center justify-content-xl-between justify-content-lg-end">
                                <div class="header-search-container mx-5">
                                    <button class="search-trigger d-xl-none d-lg-block"><i class="pe-7s-search"></i></button>
                                    <form class="header-search-box d-lg-none d-xl-block">
                                        <input type="text" placeholder="Nhập loại phòng " class="header-search-field">
                                        <button class="header-search-btn"><i class="fa-solid fa-magnifying-glass"></i></i></button>
                                    </form>
                                </div>
                                <div class="header-configure-area">
                                    <ul class="nav justify-content-end">
                                        <label for="">
                                            <?php
                                            if (isset($_SESSION['user_id'])) {
                                                echo $_SESSION['user_id'];

                                            } ?>
                                        </label>
                                        <li class="user-hover">
                                            <a href="#">
                                                <i class="fa-solid fa-user"></i>
                                            </a>
                                            <ul class="dropdown-list">
                                                <?php
                                                if (isset($_SESSION['user_id'])) {
                                                ?>
                                                    <li><a href="<?= BASE_URL . '?act=logout' ?>">Đăng xuất</a></li>
                                                <?php
                                                } else {
                                                ?>
                                                    <li><a href="<?= BASE_URL . '?act=login' ?>">Đăng nhập</a></li>
                                                <?php
                                                } ?>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="<?= BASE_URL . '?act=don-dat' ?>" class="minicart-btn">
                                                <i class="fa-solid fa-shop"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>