<?php
require_once 'layout/header.php';
require_once 'layout/menu.php';
// print_r($listBinhLuan);
$gia_phong = (float) $phongDetail['gia_phong']; // Ép kiểu về float

?>


<main>
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-wrap">
                        <nav aria-label="breadcrumb">
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?= BASE_URL ?>"><i class="fa fa-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="?act=phong">Phòng</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Chi tiết phòng</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="shop-main-wrapper section-padding pb-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 order-1 order-lg-2">
                    <div class="room-details-inner">
                        <div class="row">
                            <div class="col-lg-5">
                                <div class="room-large-slider">
                                    <div class="pro-large-img img-zoom">
                                        <img src="<?= $phongDetail['hinh_anh'] ?>" alt="room-details" />
                                    </div>
                                </div>
                                <div class="pro-nav slick-row-10 slick-arrow-style">
                                    <div class="pro-nav-thumb" style="width: 100px; height:90px">
                                        <img class="w-full h-full" src="https://images.unsplash.com/photo-1445991842772-097fea258e7b?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8aG90ZWx8ZW58MHx8MHx8fDA%3D" alt="room-details" />
                                    </div>
                                    <div class="pro-nav-thumb" style="width: 100px; height:90px">
                                        <img class="w-full h-full" src="https://images.unsplash.com/photo-1495365200479-c4ed1d35e1aa?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTB8fGhvdGVsfGVufDB8fDB8fHww" alt="room-details" />
                                    </div>
                                    <div class="pro-nav-thumb" style="width: 100px; height:90px">
                                        <img class="w-full h-full" src="https://images.unsplash.com/photo-1529290130-4ca3753253ae?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTR8fGhvdGVsfGVufDB8fDB8fHww" alt="room-details" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="room-details-des">
                                    <div class="manufacturer-name">
                                        <a href="#"><?php if ($phongDetail['loai_phong_id'] == 1) {
                                                        echo "VIP";
                                                    } else {
                                                        echo "NORMAL";
                                                    } ?></a>
                                    </div>
                                    <h3 class="room-name"><?= $phongDetail['ten_phong'] ?></h3>
                                    <div class="ratings d-flex">

                                        <div class="pro-review">
                                            <!-- <?php ?> -->
                                            <span><?= count($listBinhLuan) ?> đánh giá</span>
                                        </div>
                                    </div>
                                    <div class="price-box">
                                        <!--  -->
                                        <span class="price-regular"><?= $phongDetail['gia_phong'] ?>VNĐ</span>

                                        <!--  -->
                                        <!-- <span class="price-regular">PHP</span> -->
                                        <!--  -->
                                    </div>

                                    <div class="availability">
                                        <?php if ($phongDetail['trang_thai_id'] == 1) {
                                        ?>
                                            <i class="fa fa-check-circle"></i>
                                            <span>Còn phòng</span>
                                        <?php
                                        } elseif ($phongDetail['trang_thai_id'] == 2) {
                                        ?>
                                            <i class="fa fa-times-circle" style="color:red"></i>
                                            <span>Hết phòng</span>
                                        <?php
                                        }
                                        ?>

                                    </div>
                                    <p class="pro-desc"><?= $phongDetail['mo_ta'] ?></p>
                                    <form action="#" method="post">
                                        <div class="quantity-cart-box d-flex align-items-center">

                                            <div class="action_link">
                                                <?php if ($phongDetail['trang_thai_id'] == 1) { ?>
                                                    <button class="btn btn-cart2" id="btn-book">Đặt phòng</button>
                                                <?php   } else { ?>
                                                    <button class="btn btn-cart2" style="background-color:grey" id="btn-book" disabled>Đặt phòng</button>
                                                <?php   } ?>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="room-details-reviews section-padding pb-0">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="room-review-info">
                                    <ul class="nav review-tab">

                                        <li>
                                            <a class="active" data-bs-toggle="tab" href="#tab_three">Bình luận </a>
                                        </li>
                                    </ul>
                                    <div class="tab-content reviews-tab">

                                        <div class="tab-pane fade show active" id="tab_three">
                                            <!-- <?php
                                                    ?> -->
                                            <form action="#" class="review-form">
                                                <?php foreach ($listBinhLuan as $a) {
                                                    if ($a['trang_thai_id'] === 1) {
                                                ?>
                                                        <div class="total-reviews">
                                                            <div class="rev-avatar">
                                                                <?php if ($a['avt_link'] == null) {
                                                                    $nameParts = explode(' ', $a['ho_ten']); // Tách họ và tên thành mảng
                                                                    $lastName = end($nameParts);
                                                                ?>
                                                                    <div class="avt-null">
                                                                        <p class="namenull"><?= $lastName ?></p>
                                                                    </div>
                                                                <?php
                                                                } else { ?>

                                                                    <img src="<?= $a['avt_link'] ?>" alt="AVT">
                                                                <?php } ?>
                                                            </div>
                                                            <div class="review-box">
                                                                <p><?= $a['noi_dung'] ?></p>
                                                            </div>
                                                        </div>
                                                <?php
                                                    }
                                                }
                                                ?>


                                                <!-- <?php  ?> -->

                                                <div class="form-group row">
                                                    <div class="col">
                                                        <label class="col-form-label"><span class="text-danger">*</span>
                                                            Nội dung bình luận</label>
                                                        <textarea class="form-control" required></textarea>

                                                    </div>
                                                </div>

                                                <div class="buttons">
                                                    <button class="btn btn-sqr" type="submit">Bình luận</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="related-products section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title text-center">
                        <h2 class="title">Các phòng khác</h2>
                    </div>

                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="room-carousel-4 slick-row-10 slick-arrow-style">
                        <?php foreach ($listPhong as $key => $phong): ?>
                            <div class="room-item">
                                <figure class="room-thumb">
                                    <a href="<?= BASE_URL . '?act=chi-tiet-phong&id=' . $phong['id'] ?>">
                                        <img style="width: 300px; height:200px; object-fit: cover;" class=" pri-img" src="<?= $phong['hinh_anh'] ?>" alt="roon">
                                        <img style="width: 300px; height:200px; object-fit: cover;" class=" sec-img" src="<?= $phong['hinh_anh'] ?>" alt="room">
                                    </a>
                                    <div class="cart-hover">
                                        <a href="<?= BASE_URL . '?act=chi-tiet-phong&id=' . $phong['id'] ?>"><button class="btn btn-cart">Xem chi tiết</button></a>
                                    </div>
                                </figure>
                                <div class="room-caption text-center">
                                    <h6 class="room-name">
                                        <a href="<?= BASE_URL . '?act=chi-tiet-phong&id=' . $phong['id'] ?>">Phòng <?= $phong['ten_phong'] ?></a>
                                    </h6>
                                    <div class="price-box">
                                        <span class="">Giá phòng: <?= $phong['gia_phong'] ?> VNĐ</span>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <style>
        /* CSS cơ bản */
        .overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            z-index: 999;
        }

        .overlay.show {
            display: block;
        }

        .form-container {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: white;
            padding: 20px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
            z-index: 1000;
            width: 300px;
            border-radius: 10px;
        }

        .form-container.show {
            display: block;
        }

        .btn {
            cursor: pointer;
            margin: 5px 0;
            border: none;
            border-radius: 5px;
            width: 200px;
            margin-left: 28px;
            margin-top: 10px;
            margin-right: 20px;
        }

        .btn-cart2 {
            background: #4CAF50;
            color: white;
        }

        .btn-danger {
            background: #f44336;
            color: white;
        }
    </style>
    <div>
        <div class="overlay" id="overlay"></div>
        <div class="form-container" id="booking-form">
            <form action="?act=postBooking" method="post" id="bookingForm">
                <h3 class="text-center" style="color: darkturquoise;">Đặt Phòng Ngay</h3>
                <div class="single-input-item my-3">
                    <label for="check_in">Ngày Nhận Phòng:</label>
                    <input class="my-1" type="date" name="check_in" id="check_in">
                </div>
                <div class="single-input-item my-3" style="margin-top: -5px;">
                    <label for="checkout_out">Ngày Trả Phòng:</label>
                    <input class="my-1" type="date" name="check_out" id="check_out">
                    <input type="hidden" name="tai_khoan_id" value="<?= $_SESSION['user_id'] ?>">
                    <input type="hidden" name="phong_id" value="<?= $phongDetail['id'] ?>">
                    <label class="form-label" for="">Phương Thức Thanh Toán</label>
                    <select name="phuong_thuc_id" id="">
                        <option value="1">Tiền mặt</option>
                        <option value="2">Internet Banking</option>
                    </select>

                    <div class="my-3">
                        <label for="total_price">Giá Tiền Cần Thanh Toán:</label>
                        <span id="total_price" style="font-weight: bold; color: red;">0</span>
                    </div>
                    <input type="hidden" name="trang_thai_id" value="4">
                    <input type="hidden" name="gia_phong" id="gia_phong" value="<?= htmlspecialchars(number_format($gia_phong, 2, '.', ''), ENT_QUOTES, 'UTF-8') ?>">
                    <input type="hidden" name="don_gia" id="total_don_gia" value="">
                </div>
                <button class="btn btn-cart2" id="btn-submit" type="submit">Xác Nhận</button>
                <button class="btn btn-danger h-10" style="border:1px solid dark" id="btn-cancel" type="button">Hủy</button>
            </form>
        </div>
        <script>
            const bookButton = document.getElementById('btn-book');
            const formContainer = document.getElementById('booking-form');
            const overlay = document.getElementById('overlay');
            const cancelButton = document.getElementById('btn-cancel');
            const bookingForm = document.getElementById('bookingForm');


            // Hiển thị form khi nhấn nút "Đặt Phòng"
            bookButton.addEventListener('click', (event) => {
                event.preventDefault();
                formContainer.classList.add('show');
                overlay.classList.add('show');
            });
            // Lấy các phần tử cần thiết
            const checkInInput = document.getElementById('check_in');
            const checkOutInput = document.getElementById('check_out');
            const totalPriceSpan = document.getElementById('total_price');

            // Lấy giá trị đơn giá từ thẻ input và chuyển đổi thành số
            const donGia = parseFloat(document.getElementById('gia_phong').value);
            console.log(donGia);
            if (isNaN(donGia)) {
                console.error("Đơn giá không hợp lệ, kiểm tra giá trị đầu vào.");
            }



            // Hàm tính toán giá tiền
            function calculateTotalPrice() {
                const checkInDate = new Date(document.getElementById('check_in').value);
                const checkOutDate = new Date(document.getElementById('check_out').value);
                const donGiaInput = document.getElementById('gia_phong');
                const totalDonGiaInput = document.getElementById('total_don_gia');

                const donGia = parseFloat(donGiaInput.value);

                if (checkInDate && checkOutDate && checkOutDate > checkInDate && !isNaN(donGia)) {
                    const daysDifference = (checkOutDate - checkInDate) / (1000 * 60 * 60 * 24);
                    const totalPrice = daysDifference * donGia;

                    // Hiển thị tổng giá tiền trong định dạng USD
                    document.getElementById('total_price').textContent = totalPrice.toLocaleString('en-US', {
                        style: 'currency',
                        currency: 'USD'
                    });

                    // Gán tổng tiền vào input ẩn
                    totalDonGiaInput.value = totalPrice.toFixed(2); // Lưu giá trị dạng số thực 2 chữ số thập phân
                } else {
                    document.getElementById('total_price').textContent = "0 USD";
                    totalDonGiaInput.value = ""; // Reset giá trị nếu không hợp lệ
                }
            }


            // Thêm sự kiện cho các input ngày
            checkInInput.addEventListener('change', calculateTotalPrice);
            checkOutInput.addEventListener('change', calculateTotalPrice);

            // // Ẩn form khi nhấn overlay hoặc nút "Hủy"
            cancelButton.addEventListener('click', hideForm);
            overlay.addEventListener('click', hideForm);

            function hideForm() {
                formContainer.classList.remove('show');
                overlay.classList.remove('show');
            }
        </script>
    </div>

</main>

<?php
require_once 'layout/footer.php';
?>