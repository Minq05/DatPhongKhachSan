<?php
require_once 'layout/header.php';
require_once 'layout/menu.php';
?>

<main>
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-wrap">
                        <nav aria-label="breadcrumb">
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html"><i class="fa fa-home"></i></a></li>
                                <li class="breadcrumb-item active" aria-current="page">phongFilter</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="shop-main-wrapper section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 order-1 order-lg-2">
                    <div class="shop-room-wrapper">
                        <div class="row">
                            <div class="col-12">
                                <?php
                                if ($_SERVER['REQUEST_METHOD'] === 'POST') {

                                    // Lấy giá trị từ select
                                    $select_loai = $_POST['select_loai'] ?? '';
                                    $select_trang_thai = $_POST['select_trang_thai'] ?? '';
                                    $select_people = $_POST['select_people'] ?? '';
                                ?>
                                    <?php if ($select_loai == 1 && $select_trang_thai == 1 && $select_people == 1) { ?>
                                        <div class="row mbn-30">
                                            <?php foreach ($listFilter as $key => $phongFilter): ?>
                                                <?php if ($phongFilter['loai_phong_id'] == 1 && $phongFilter['kieu_phong_id'] == 1 && $phongFilter['trang_thai_id'] == 1): ?>
                                                    <div class="col-md-3">
                                                        <div class="room-item pb-2">
                                                            <figure class="room-thumb">
                                                                <a href="<?= BASE_URL . '?act=chi-tiet-phong&id=' . $phongFilter['id'] ?>">
                                                                    <img style="width: 300px; height:200px; object-fit: cover;" class="pri-img" src="<?= $phongFilter['hinh_anh'] ?>" alt="room">
                                                                    <img style="width: 300px; height:200px; object-fit: cover;" class="sec-img" src="<?= $phongFilter['hinh_anh'] ?>" alt="room">
                                                                </a>
                                                                <div class="cart-hover">
                                                                    <a href="<?= BASE_URL . '?act=chi-tiet-phong&id=' . $phongFilter['id'] ?>">
                                                                        <button class="btn btn-cart">Xem chi tiết</button>
                                                                    </a>
                                                                </div>
                                                            </figure>
                                                            <div class="room-caption text-center">
                                                                <h6 class="room-name">
                                                                    <a href="<?= BASE_URL . '?act=chi-tiet-phong&id=' . $phongFilter['id'] ?>"><?= $phongFilter['ten_phong'] ?></a>
                                                                </h6>
                                                                <div class="price-box">
                                                                    <span class="price-regular"><?= $phongFilter['gia_phong'] ?>VNĐ</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php endif; ?>
                                            <?php endforeach; ?>
                                        </div>
                                    <?php } elseif ($select_loai == 2 && $select_trang_thai == 2 && $select_people == 2) { ?>
                                        <div class="row mbn-30">
                                            <?php foreach ($listFilter as $key => $phongFilter): ?>
                                                <?php if ($phongFilter['loai_phong_id'] == 2 && $phongFilter['kieu_phong_id'] == 2 && $phongFilter['trang_thai_id'] == 2): ?>
                                                    <div class="col-md-3">
                                                        <div class="room-item pb-2">
                                                            <figure class="room-thumb">
                                                                <a href="<?= BASE_URL . '?act=chi-tiet-phong&id=' . $phongFilter['id'] ?>">
                                                                    <img style="width: 300px; height:200px; object-fit: cover;" class="pri-img" src="<?= $phongFilter['hinh_anh'] ?>" alt="room">
                                                                    <img style="width: 300px; height:200px; object-fit: cover;" class="sec-img" src="<?= $phongFilter['hinh_anh'] ?>" alt="room">
                                                                </a>
                                                                <div class="cart-hover">
                                                                    <a href="<?= BASE_URL . '?act=chi-tiet-phong&id=' . $phongFilter['id'] ?>">
                                                                        <button class="btn btn-cart">Xem chi tiết</button>
                                                                    </a>
                                                                </div>
                                                            </figure>
                                                            <div class="room-caption text-center">
                                                                <h6 class="room-name">
                                                                    <a href="<?= BASE_URL . '?act=chi-tiet-phong&id=' . $phongFilter['id'] ?>"><?= $phongFilter['ten_phong'] ?></a>
                                                                </h6>
                                                                <div class="price-box">
                                                                    <span class="price-regular"><?= $phongFilter['gia_phong'] ?>VNĐ</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php endif; ?>
                                            <?php endforeach; ?>
                                        </div>
                                    <?php } elseif ($select_loai == 1 && $select_trang_thai == 1 && $select_people == 2) {  ?>
                                        <div class="row mbn-30">
                                            <?php foreach ($listFilter as $key => $phongFilter): ?>
                                                <?php if ($phongFilter['loai_phong_id'] == 1 && $phongFilter['kieu_phong_id'] == 1 && $phongFilter['trang_thai_id'] == 2): ?>
                                                    <div class="col-md-3">
                                                        <div class="room-item pb-2">
                                                            <figure class="room-thumb">
                                                                <a href="<?= BASE_URL . '?act=chi-tiet-phong&id=' . $phongFilter['id'] ?>">
                                                                    <img style="width: 300px; height:200px; object-fit: cover;" class="pri-img" src="<?= $phongFilter['hinh_anh'] ?>" alt="room">
                                                                    <img style="width: 300px; height:200px; object-fit: cover;" class="sec-img" src="<?= $phongFilter['hinh_anh'] ?>" alt="room">
                                                                </a>
                                                                <div class="cart-hover">
                                                                    <a href="<?= BASE_URL . '?act=chi-tiet-phong&id=' . $phongFilter['id'] ?>">
                                                                        <button class="btn btn-cart">Xem chi tiết</button>
                                                                    </a>
                                                                </div>
                                                            </figure>
                                                            <div class="room-caption text-center">
                                                                <h6 class="room-name">
                                                                    <a href="<?= BASE_URL . '?act=chi-tiet-phong&id=' . $phongFilter['id'] ?>"><?= $phongFilter['ten_phong'] ?></a>
                                                                </h6>
                                                                <div class="price-box">
                                                                    <span class="price-regular"><?= $phongFilter['gia_phong'] ?>VNĐ</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php endif; ?>
                                            <?php endforeach; ?>
                                        </div>
                                    <?php } elseif ($select_loai == 1 && $select_trang_thai == 2 && $select_people == 2) {  ?>
                                        <div class="row mbn-30">
                                            <?php foreach ($listFilter as $key => $phongFilter): ?>
                                                <?php if ($phongFilter['loai_phong_id'] == 1 && $phongFilter['kieu_phong_id'] == 2 && $phongFilter['trang_thai_id'] == 2): ?>
                                                    <div class="col-md-3">
                                                        <div class="room-item pb-2">
                                                            <figure class="room-thumb">
                                                                <a href="<?= BASE_URL . '?act=chi-tiet-phong&id=' . $phongFilter['id'] ?>">
                                                                    <img style="width: 300px; height:200px; object-fit: cover;" class="pri-img" src="<?= $phongFilter['hinh_anh'] ?>" alt="room">
                                                                    <img style="width: 300px; height:200px; object-fit: cover;" class="sec-img" src="<?= $phongFilter['hinh_anh'] ?>" alt="room">
                                                                </a>
                                                                <div class="cart-hover">
                                                                    <a href="<?= BASE_URL . '?act=chi-tiet-phong&id=' . $phongFilter['id'] ?>">
                                                                        <button class="btn btn-cart">Xem chi tiết</button>
                                                                    </a>
                                                                </div>
                                                            </figure>
                                                            <div class="room-caption text-center">
                                                                <h6 class="room-name">
                                                                    <a href="<?= BASE_URL . '?act=chi-tiet-phong&id=' . $phongFilter['id'] ?>"><?= $phongFilter['ten_phong'] ?></a>
                                                                </h6>
                                                                <div class="price-box">
                                                                    <span class="price-regular"><?= $phongFilter['gia_phong'] ?>VNĐ</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php endif; ?>
                                            <?php endforeach; ?>
                                        </div>
                                    <?php } elseif ($select_loai == 2 && $select_trang_thai == 1 && $select_people == 2) {  ?>
                                        <div class="row mbn-30">
                                            <?php foreach ($listFilter as $key => $phongFilter): ?>
                                                <?php if ($phongFilter['loai_phong_id'] == 2 && $phongFilter['kieu_phong_id'] == 1 && $phongFilter['trang_thai_id'] == 2): ?>
                                                    <div class="col-md-3">
                                                        <div class="room-item pb-2">
                                                            <figure class="room-thumb">
                                                                <a href="<?= BASE_URL . '?act=chi-tiet-phong&id=' . $phongFilter['id'] ?>">
                                                                    <img style="width: 300px; height:200px; object-fit: cover;" class="pri-img" src="<?= $phongFilter['hinh_anh'] ?>" alt="room">
                                                                    <img style="width: 300px; height:200px; object-fit: cover;" class="sec-img" src="<?= $phongFilter['hinh_anh'] ?>" alt="room">
                                                                </a>
                                                                <div class="cart-hover">
                                                                    <a href="<?= BASE_URL . '?act=chi-tiet-phong&id=' . $phongFilter['id'] ?>">
                                                                        <button class="btn btn-cart">Xem chi tiết</button>
                                                                    </a>
                                                                </div>
                                                            </figure>
                                                            <div class="room-caption text-center">
                                                                <h6 class="room-name">
                                                                    <a href="<?= BASE_URL . '?act=chi-tiet-phong&id=' . $phongFilter['id'] ?>"><?= $phongFilter['ten_phong'] ?></a>
                                                                </h6>
                                                                <div class="price-box">
                                                                    <span class="price-regular"><?= $phongFilter['gia_phong'] ?>VNĐ</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php endif; ?>
                                            <?php endforeach; ?>
                                        </div>
                                    <?php } elseif ($select_loai == 2 && $select_trang_thai == 2 && $select_people == 1) {  ?>
                                        <div class="row mbn-30">
                                            <?php foreach ($listFilter as $key => $phongFilter): ?>
                                                <?php if ($phongFilter['loai_phong_id'] == 2 && $phongFilter['kieu_phong_id'] == 2 && $phongFilter['trang_thai_id'] == 1): ?>
                                                    <div class="col-md-3">
                                                        <div class="room-item pb-2">
                                                            <figure class="room-thumb">
                                                                <a href="<?= BASE_URL . '?act=chi-tiet-phong&id=' . $phongFilter['id'] ?>">
                                                                    <img style="width: 300px; height:200px; object-fit: cover;" class="pri-img" src="<?= $phongFilter['hinh_anh'] ?>" alt="room">
                                                                    <img style="width: 300px; height:200px; object-fit: cover;" class="sec-img" src="<?= $phongFilter['hinh_anh'] ?>" alt="room">
                                                                </a>
                                                                <div class="cart-hover">
                                                                    <a href="<?= BASE_URL . '?act=chi-tiet-phong&id=' . $phongFilter['id'] ?>">
                                                                        <button class="btn btn-cart">Xem chi tiết</button>
                                                                    </a>
                                                                </div>
                                                            </figure>
                                                            <div class="room-caption text-center">
                                                                <h6 class="room-name">
                                                                    <a href="<?= BASE_URL . '?act=chi-tiet-phong&id=' . $phongFilter['id'] ?>"><?= $phongFilter['ten_phong'] ?></a>
                                                                </h6>
                                                                <div class="price-box">
                                                                    <span class="price-regular"><?= $phongFilter['gia_phong'] ?>VNĐ</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php endif; ?>
                                            <?php endforeach; ?>
                                        </div>
                                    <?php } elseif ($select_loai == 1 && $select_trang_thai == 2 && $select_people == 1) {  ?>
                                        <div class="row mbn-30">
                                            <?php foreach ($listFilter as $key => $phongFilter): ?>
                                                <?php if ($phongFilter['loai_phong_id'] == 1 && $phongFilter['kieu_phong_id'] == 2 && $phongFilter['trang_thai_id'] == 1): ?>
                                                    <div class="col-md-3">
                                                        <div class="room-item pb-2">
                                                            <figure class="room-thumb">
                                                                <a href="<?= BASE_URL . '?act=chi-tiet-phong&id=' . $phongFilter['id'] ?>">
                                                                    <img style="width: 300px; height:200px; object-fit: cover;" class="pri-img" src="<?= $phongFilter['hinh_anh'] ?>" alt="room">
                                                                    <img style="width: 300px; height:200px; object-fit: cover;" class="sec-img" src="<?= $phongFilter['hinh_anh'] ?>" alt="room">
                                                                </a>
                                                                <div class="cart-hover">
                                                                    <a href="<?= BASE_URL . '?act=chi-tiet-phong&id=' . $phongFilter['id'] ?>">
                                                                        <button class="btn btn-cart">Xem chi tiết</button>
                                                                    </a>
                                                                </div>
                                                            </figure>
                                                            <div class="room-caption text-center">
                                                                <h6 class="room-name">
                                                                    <a href="<?= BASE_URL . '?act=chi-tiet-phong&id=' . $phongFilter['id'] ?>"><?= $phongFilter['ten_phong'] ?></a>
                                                                </h6>
                                                                <div class="price-box">
                                                                    <span class="price-regular"><?= $phongFilter['gia_phong'] ?>VNĐ</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php endif; ?>
                                            <?php endforeach; ?>
                                        </div>
                                    <?php } elseif ($select_loai == 2 && $select_trang_thai == 2 && $select_people == 1) {  ?>
                                        <div class="row mbn-30">
                                            <?php foreach ($listFilter as $key => $phongFilter): ?>
                                                <?php if ($phongFilter['loai_phong_id'] == 2 && $phongFilter['kieu_phong_id'] == 2 && $phongFilter['trang_thai_id'] == 1): ?>
                                                    <div class="col-md-3">
                                                        <div class="room-item pb-2">
                                                            <figure class="room-thumb">
                                                                <a href="<?= BASE_URL . '?act=chi-tiet-phong&id=' . $phongFilter['id'] ?>">
                                                                    <img style="width: 300px; height:200px; object-fit: cover;" class="pri-img" src="<?= $phongFilter['hinh_anh'] ?>" alt="room">
                                                                    <img style="width: 300px; height:200px; object-fit: cover;" class="sec-img" src="<?= $phongFilter['hinh_anh'] ?>" alt="room">
                                                                </a>
                                                                <div class="cart-hover">
                                                                    <a href="<?= BASE_URL . '?act=chi-tiet-phong&id=' . $phongFilter['id'] ?>">
                                                                        <button class="btn btn-cart">Xem chi tiết</button>
                                                                    </a>
                                                                </div>
                                                            </figure>
                                                            <div class="room-caption text-center">
                                                                <h6 class="room-name">
                                                                    <a href="<?= BASE_URL . '?act=chi-tiet-phong&id=' . $phongFilter['id'] ?>"><?= $phongFilter['ten_phong'] ?></a>
                                                                </h6>
                                                                <div class="price-box">
                                                                    <span class="price-regular"><?= $phongFilter['gia_phong'] ?>VNĐ</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php endif; ?>
                                            <?php endforeach; ?>
                                        </div>
                                    <?php } elseif ($select_loai == "" && $select_trang_thai == "" && $select_people == "") { ?>
                                        <div class="row mbn-30">
                                            <?php foreach ($listFilter as $key => $phongFilter): ?>
                                                <div class="col-md-3">
                                                    <div class="room-item pb-2">
                                                        <figure class="room-thumb">
                                                            <a href="<?= BASE_URL . '?act=chi-tiet-phong&id=' . $phongFilter['id'] ?>">
                                                                <img style="width: 300px; height:200px; object-fit: cover;" class="pri-img" src="<?= $phongFilter['hinh_anh'] ?>" alt="room">
                                                                <img style="width: 300px; height:200px; object-fit: cover;" class="sec-img" src="<?= $phongFilter['hinh_anh'] ?>" alt="room">
                                                            </a>
                                                            <div class="cart-hover">
                                                                <a href="<?= BASE_URL . '?act=chi-tiet-phong&id=' . $phongFilter['id'] ?>">
                                                                    <button class="btn btn-cart">Xem chi tiết</button>
                                                                </a>
                                                            </div>
                                                        </figure>
                                                        <div class="room-caption text-center">
                                                            <h6 class="room-name">
                                                                <a href="<?= BASE_URL . '?act=chi-tiet-phong&id=' . $phongFilter['id'] ?>"><?= $phongFilter['ten_phong'] ?></a>
                                                            </h6>
                                                            <div class="price-box">
                                                                <span class="price-regular"><?= $phongFilter['gia_phong'] ?>VNĐ</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php endforeach; ?>
                                        </div>
                                    <?php } elseif ($select_loai == 1 && $select_trang_thai == "" && $select_people == "") { ?>
                                        <div class="row mbn-30">
                                            <?php foreach ($listFilter as $key => $phongFilter): ?>
                                                <?php if ($phongFilter['loai_phong_id'] == 1): ?>
                                                    <div class="col-md-3">
                                                        <div class="room-item pb-2">
                                                            <figure class="room-thumb">
                                                                <a href="<?= BASE_URL . '?act=chi-tiet-phong&id=' . $phongFilter['id'] ?>">
                                                                    <img style="width: 300px; height:200px; object-fit: cover;" class="pri-img" src="<?= $phongFilter['hinh_anh'] ?>" alt="room">
                                                                    <img style="width: 300px; height:200px; object-fit: cover;" class="sec-img" src="<?= $phongFilter['hinh_anh'] ?>" alt="room">
                                                                </a>
                                                                <div class="cart-hover">
                                                                    <a href="<?= BASE_URL . '?act=chi-tiet-phong&id=' . $phongFilter['id'] ?>">
                                                                        <button class="btn btn-cart">Xem chi tiết</button>
                                                                    </a>
                                                                </div>
                                                            </figure>
                                                            <div class="room-caption text-center">
                                                                <h6 class="room-name">
                                                                    <a href="<?= BASE_URL . '?act=chi-tiet-phong&id=' . $phongFilter['id'] ?>"><?= $phongFilter['ten_phong'] ?></a>
                                                                </h6>
                                                                <div class="price-box">
                                                                    <span class="price-regular"><?= $phongFilter['gia_phong'] ?>VNĐ</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php endif; ?>
                                            <?php endforeach; ?>
                                        </div>
                                    <?php } elseif ($select_loai == 2 && $select_trang_thai == "" && $select_people == "") { ?>
                                        <div class="row mbn-30">
                                            <?php foreach ($listFilter as $key => $phongFilter): ?>
                                                <?php if ($phongFilter['loai_phong_id'] == 2): ?>
                                                    <div class="col-md-3">
                                                        <div class="room-item pb-2">
                                                            <figure class="room-thumb">
                                                                <a href="<?= BASE_URL . '?act=chi-tiet-phong&id=' . $phongFilter['id'] ?>">
                                                                    <img style="width: 300px; height:200px; object-fit: cover;" class="pri-img" src="<?= $phongFilter['hinh_anh'] ?>" alt="room">
                                                                    <img style="width: 300px; height:200px; object-fit: cover;" class="sec-img" src="<?= $phongFilter['hinh_anh'] ?>" alt="room">
                                                                </a>
                                                                <div class="cart-hover">
                                                                    <a href="<?= BASE_URL . '?act=chi-tiet-phong&id=' . $phongFilter['id'] ?>">
                                                                        <button class="btn btn-cart">Xem chi tiết</button>
                                                                    </a>
                                                                </div>
                                                            </figure>
                                                            <div class="room-caption text-center">
                                                                <h6 class="room-name">
                                                                    <a href="<?= BASE_URL . '?act=chi-tiet-phong&id=' . $phongFilter['id'] ?>"><?= $phongFilter['ten_phong'] ?></a>
                                                                </h6>
                                                                <div class="price-box">
                                                                    <span class="price-regular"><?= $phongFilter['gia_phong'] ?>VNĐ</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php endif; ?>
                                            <?php endforeach; ?>
                                        </div>
                                    <?php } elseif ($select_loai == "" && $select_trang_thai == 1 && $select_people == "") { ?>
                                        <div class="row mbn-30">
                                            <?php foreach ($listFilter as $key => $phongFilter): ?>
                                                <?php if ($phongFilter['trang_thai_id'] == 1): ?>
                                                    <div class="col-md-3">
                                                        <div class="room-item pb-2">
                                                            <figure class="room-thumb">
                                                                <a href="<?= BASE_URL . '?act=chi-tiet-phong&id=' . $phongFilter['id'] ?>">
                                                                    <img style="width: 300px; height:200px; object-fit: cover;" class="pri-img" src="<?= $phongFilter['hinh_anh'] ?>" alt="room">
                                                                    <img style="width: 300px; height:200px; object-fit: cover;" class="sec-img" src="<?= $phongFilter['hinh_anh'] ?>" alt="room">
                                                                </a>
                                                                <div class="cart-hover">
                                                                    <a href="<?= BASE_URL . '?act=chi-tiet-phong&id=' . $phongFilter['id'] ?>">
                                                                        <button class="btn btn-cart">Xem chi tiết</button>
                                                                    </a>
                                                                </div>
                                                            </figure>
                                                            <div class="room-caption text-center">
                                                                <h6 class="room-name">
                                                                    <a href="<?= BASE_URL . '?act=chi-tiet-phong&id=' . $phongFilter['id'] ?>"><?= $phongFilter['ten_phong'] ?></a>
                                                                </h6>
                                                                <div class="price-box">
                                                                    <span class="price-regular"><?= $phongFilter['gia_phong'] ?>VNĐ</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php endif; ?>
                                            <?php endforeach; ?>
                                        </div>
                                    <?php } elseif ($select_loai == "" && $select_trang_thai == 2 && $select_people == "") { ?>
                                        <div class="row mbn-30">
                                            <?php foreach ($listFilter as $key => $phongFilter): ?>
                                                <?php if ($phongFilter['trang_thai_id'] == 2): ?>
                                                    <div class="col-md-3">
                                                        <div class="room-item pb-2">
                                                            <figure class="room-thumb">
                                                                <a href="<?= BASE_URL . '?act=chi-tiet-phong&id=' . $phongFilter['id'] ?>">
                                                                    <img style="width: 300px; height:200px; object-fit: cover;" class="pri-img" src="<?= $phongFilter['hinh_anh'] ?>" alt="room">
                                                                    <img style="width: 300px; height:200px; object-fit: cover;" class="sec-img" src="<?= $phongFilter['hinh_anh'] ?>" alt="room">
                                                                </a>
                                                                <div class="cart-hover">
                                                                    <a href="<?= BASE_URL . '?act=chi-tiet-phong&id=' . $phongFilter['id'] ?>">
                                                                        <button class="btn btn-cart">Xem chi tiết</button>
                                                                    </a>
                                                                </div>
                                                            </figure>
                                                            <div class="room-caption text-center">
                                                                <h6 class="room-name">
                                                                    <a href="<?= BASE_URL . '?act=chi-tiet-phong&id=' . $phongFilter['id'] ?>"><?= $phongFilter['ten_phong'] ?></a>
                                                                </h6>
                                                                <div class="price-box">
                                                                    <span class="price-regular"><?= $phongFilter['gia_phong'] ?>VNĐ</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php endif; ?>
                                            <?php endforeach; ?>
                                        </div>
                                    <?php } elseif ($select_loai == "" && $select_trang_thai == "" && $select_people == 1) { ?>
                                        <div class="row mbn-30">
                                            <?php foreach ($listFilter as $key => $phongFilter): ?>
                                                <?php if ($phongFilter['kieu_phong_id'] == 1): ?>
                                                    <div class="col-md-3">
                                                        <div class="room-item pb-2">
                                                            <figure class="room-thumb">
                                                                <a href="<?= BASE_URL . '?act=chi-tiet-phong&id=' . $phongFilter['id'] ?>">
                                                                    <img style="width: 300px; height:200px; object-fit: cover;" class="pri-img" src="<?= $phongFilter['hinh_anh'] ?>" alt="room">
                                                                    <img style="width: 300px; height:200px; object-fit: cover;" class="sec-img" src="<?= $phongFilter['hinh_anh'] ?>" alt="room">
                                                                </a>
                                                                <div class="cart-hover">
                                                                    <a href="<?= BASE_URL . '?act=chi-tiet-phong&id=' . $phongFilter['id'] ?>">
                                                                        <button class="btn btn-cart">Xem chi tiết</button>
                                                                    </a>
                                                                </div>
                                                            </figure>
                                                            <div class="room-caption text-center">
                                                                <h6 class="room-name">
                                                                    <a href="<?= BASE_URL . '?act=chi-tiet-phong&id=' . $phongFilter['id'] ?>"><?= $phongFilter['ten_phong'] ?></a>
                                                                </h6>
                                                                <div class="price-box">
                                                                    <span class="price-regular"><?= $phongFilter['gia_phong'] ?>VNĐ</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php endif; ?>
                                            <?php endforeach; ?>
                                        </div>
                                    <?php } elseif ($select_loai == "" && $select_trang_thai == "" && $select_people == 2) { ?>
                                        <div class="row mbn-30">
                                            <?php foreach ($listFilter as $key => $phongFilter): ?>
                                                <?php if ($phongFilter['kieu_phong_id'] == 2): ?>
                                                    <div class="col-md-3">
                                                        <div class="room-item pb-2">
                                                            <figure class="room-thumb">
                                                                <a href="<?= BASE_URL . '?act=chi-tiet-phong&id=' . $phongFilter['id'] ?>">
                                                                    <img style="width: 300px; height:200px; object-fit: cover;" class="pri-img" src="<?= $phongFilter['hinh_anh'] ?>" alt="room">
                                                                    <img style="width: 300px; height:200px; object-fit: cover;" class="sec-img" src="<?= $phongFilter['hinh_anh'] ?>" alt="room">
                                                                </a>
                                                                <div class="cart-hover">
                                                                    <a href="<?= BASE_URL . '?act=chi-tiet-phong&id=' . $phongFilter['id'] ?>">
                                                                        <button class="btn btn-cart">Xem chi tiết</button>
                                                                    </a>
                                                                </div>
                                                            </figure>
                                                            <div class="room-caption text-center">
                                                                <h6 class="room-name">
                                                                    <a href="<?= BASE_URL . '?act=chi-tiet-phong&id=' . $phongFilter['id'] ?>"><?= $phongFilter['ten_phong'] ?></a>
                                                                </h6>
                                                                <div class="price-box">
                                                                    <span class="price-regular"><?= $phongFilter['gia_phong'] ?>VNĐ</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php endif; ?>
                                            <?php endforeach; ?>
                                        </div>
                                    <?php } ?>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
require_once 'layout/footer.php';
?>