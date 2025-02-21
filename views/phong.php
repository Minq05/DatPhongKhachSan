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
                                <li class="breadcrumb-item active" aria-current="page">Phòng</li>
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
                        <div class="shop-top-bar">
                            <div class="row align-items-center">
                                <div class="col-lg-12 col-md-6 order-1 order-md-2">
                                    <div class="top-bar-right">
                                        <div class="room-short">
                                            <form action="<?= BASE_URL . '?act=phong' ?>" method="POST">
                                                <select class="nice-select" name="select_phong" id="select_phong" onchange="this.form.submit()">
                                                    <option value="0">Select All</option>
                                                    <option value="1">VIP</option>
                                                    <option value="2">Normal</option>
                                                </select>
                                            </form>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <?php
                                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                                    // Lấy giá trị từ select
                                    $select_phong = $_POST['select_phong'] ?? '';
                                    // Kiểm tra giá trị và xử lý
                                ?>
                                    <?php
                                    if ($select_phong == '1') {
                                    ?>
                                        <div class="row mbn-30">
                                            <?php foreach ($listPhongId as $key => $phong): ?>
                                                <?php if ($phong['loai_phong_id'] == 1): ?>
                                                    <div class="col-md-3">
                                                        <div class="room-item pb-2">
                                                            <figure class="room-thumb">
                                                                <a href="<?= BASE_URL . '?act=chi-tiet-phong&id=' . $phong['id'] ?>">
                                                                    <img style="width: 300px; height:200px; object-fit: cover;" class="pri-img" src="<?= $phong['hinh_anh'] ?>" alt="room">
                                                                    <img style="width: 300px; height:200px; object-fit: cover;" class="sec-img" src="<?= $phong['hinh_anh'] ?>" alt="room">
                                                                </a>
                                                                <div class="cart-hover">
                                                                    <a href="<?= BASE_URL . '?act=chi-tiet-phong&id=' . $phong['id'] ?>">
                                                                        <button class="btn btn-cart">Xem chi tiết</button>
                                                                    </a>
                                                                </div>
                                                            </figure>
                                                            <div class="room-caption text-center">
                                                                <h6 class="room-name">
                                                                    <a href="<?= BASE_URL . '?act=chi-tiet-phong&id=' . $phong['id'] ?>"><?= $phong['ten_phong'] ?></a>
                                                                </h6>
                                                                <div class="price-box">
                                                                    <span class="price-regular"><?= $phong['gia_phong'] ?>VNĐ</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php endif; ?>
                                            <?php endforeach; ?>
                                        </div>
                                    <?php
                                    } elseif ($select_phong == '2') {
                                    ?>
                                        <div class="row mbn-30">
                                            <?php foreach ($listPhongId as $key => $phong): ?>
                                                <?php if ($phong['loai_phong_id'] == 2): ?>
                                                    <div class="col-md-3">
                                                        <div class="room-item pb-2">
                                                            <figure class="room-thumb">
                                                                <a href="<?= BASE_URL . '?act=chi-tiet-phong&id=' . $phong['id'] ?>">
                                                                    <img style="width: 300px; height:200px; object-fit: cover;" class="pri-img" src="<?= $phong['hinh_anh'] ?>" alt="room">
                                                                    <img style="width: 300px; height:200px; object-fit: cover;" class="sec-img" src="<?= $phong['hinh_anh'] ?>" alt="room">
                                                                </a>
                                                                <div class="cart-hover">
                                                                    <a href="<?= BASE_URL . '?act=chi-tiet-phong&id=' . $phong['id'] ?>">
                                                                        <button class="btn btn-cart">Xem chi tiết</button>
                                                                    </a>
                                                                </div>
                                                            </figure>
                                                            <div class="room-caption text-center">
                                                                <h6 class="room-name">
                                                                    <a href="<?= BASE_URL . '?act=chi-tiet-phong&id=' . $phong['id'] ?>"><?= $phong['ten_phong'] ?></a>
                                                                </h6>
                                                                <div class="price-box">
                                                                    <span class="price-regular"><?= $phong['gia_phong'] ?> VNĐ</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php endif; ?>
                                            <?php endforeach; ?>
                                        </div>
                                    <?php
                                    } elseif($select_phong == '0') {
                                    ?>
                                        <div class="row mbn-30">
                                            <?php foreach ($listPhongId as $key => $phong): ?>
                                                <div class="col-md-3">
                                                    <div class="room-item pb-2">
                                                        <figure class="room-thumb">
                                                            <a href="<?= BASE_URL . '?act=chi-tiet-phong&id=' . $phong['id'] ?>">
                                                                <img style="width: 300px; height:200px; object-fit: cover;" class="pri-img" src="<?= $phong['hinh_anh'] ?>" alt="room">
                                                                <img style="width: 300px; height:200px; object-fit: cover;" class="sec-img" src="<?= $phong['hinh_anh'] ?>" alt="room">
                                                            </a>
                                                            <div class="cart-hover">
                                                                <a href="<?= BASE_URL . '?act=chi-tiet-phong&id=' . $phong['id'] ?>">
                                                                    <button class="btn btn-cart">Xem chi tiết</button>
                                                                </a>
                                                            </div>
                                                        </figure>
                                                        <div class="room-caption text-center">
                                                            <h6 class="room-name">
                                                                <a href="<?= BASE_URL . '?act=chi-tiet-phong&id=' . $phong['id'] ?>"><?= $phong['ten_phong'] ?></a>
                                                            </h6>
                                                            <div class="price-box">
                                                                <span class="price-regular"><?= $phong['gia_phong'] ?>VNĐ</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php endforeach; ?>
                                        </div>
                                <?php
                                    }
                                }
                                ?>

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