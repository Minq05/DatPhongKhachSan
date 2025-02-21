<?php
require_once 'layout/header.php';
require_once 'layout/menu.php';
?>
<main>
    <section class="slider-area mt-4">
        <div class="hero-slider-active slick-arrow-style slick-arrow-style_hero slick-dot-style">
            <div class="hero-single-slide hero-overlay">
                <div class="hero-slider-item bg-img" data-bg="assets/img/slider/slider1.png">
                </div>
            </div>

            <div class="hero-single-slide hero-overlay">
                <div class="hero-slider-item bg-img" data-bg="assets/img/slider/slider2.png">
                </div>
            </div>

            <div class="hero-single-slide hero-overlay">
                <div class="hero-slider-item bg-img" data-bg="assets/img/slider/slider3.png">
                </div>
            </div>
        </div>
    </section>
    <section class="room-area section-padding" style="margin-top: -100px;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="service-policy section-padding">
                        <div class="body1">
                            <form action="<?= BASE_URL . '?act=phong-filter' ?>" method="POST">
                                <div class="search-container1">
                                    <select name="select_loai" id="select_loai">
                                        <option value="">Loại phòng</option>
                                        <option value="1">VIP</option>
                                        <option value="2">Normal</option>
                                    </select>
                                    <select name="select_trang_thai" id="select_trang_thai">
                                        <option value="">Trạng thái phòng</option>
                                        <option value="1">Còn phòng</option>
                                        <option value="2">Hết phòng</option>
                                    </select>
                                    <select name="select_people" id="select_people">
                                        <option value="">Thể loại</option>
                                        <option value="1">Đơn</option>
                                        <option value="2">Đôi</option>
                                    </select>
                                    <button class="btn" onchange="this.form.submit()">Search</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="section-title text-center">
                        <h2 class="title">Các phòng của chúng tôi</h2>
                        <p class="sub-title">Thông tin phòng được cập nhật liên tục</p>
                    </div>

                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="room-container">
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="tab1">
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
                </div>
            </div>
        </div>
    </section>
    <section class="testimonial-area section-padding bg-img" data-bg="https://mega.com.vn/media/news/2204_khung_powerpoint_lam_slide_dep__9_.jpg">
        <div class="container">
            <div class="row">
                <div class="col-12">

                    <div class="section-title text-center">
                        <h2 class="title">Các lời đánh giá</h2>
                        <p class="sub-title">Họ nói gì ?</p>
                    </div>

                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="testimonial-thumb-wrapper">
                        <div class="testimonial-thumb-carousel">
                            <div class="testimonial-thumb">
                                <img src="https://th.bing.com/th/id/OIP.7fIQ5_jM33_UdmvJv7ALxwHaJB?rs=1&pid=ImgDetMain" alt="testimonial-thumb">
                            </div>
                            <div class="testimonial-thumb">
                                <img src="https://giaingo.info/wp-content/uploads/2021/07/xoai-non-la-ai-2.jpg" alt="testimonial-thumb">
                            </div>
                            <div class="testimonial-thumb">
                                <img src="https://vietnamtre.vn/wp-content/uploads/2023/02/TikToker-Vo-Nu-Ngan-Ha.4.jpg" alt="testimonial-thumb">
                            </div>
                            <div class="testimonial-thumb">
                                <img src="https://i.vietgiaitri.com/2022/2/3/nu-mc-mai-dora-khoe-sac-don-xuan-li-xi-fan-ham-mo-voi-loat-anh-moi-51c-6298788.jpg" alt="testimonial-thumb">
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-content-wrapper">
                        <div class="testimonial-content-carousel">
                            <div class="testimonial-content">
                                <p>"Phòng phải nói là đỉnh của chóp lun , phục vụ tuyệt vời view nhìn từ phòng rất đẹp và đặc biệt là kính bám rất dính"</p>
                                <div class="ratings">
                                    <span><i class="fa fa-star yellow-star"></i></span>
                                    <span><i class="fa fa-star yellow-star"></i></span>
                                    <span><i class="fa fa-star yellow-star"></i></span>
                                    <span><i class="fa fa-star yellow-star"></i></span>
                                    <span><i class="fa fa-star yellow-star"></i></span>
                                </div>
                                <h5 class="testimonial-author">Trần Hà Linh</h5>
                            </div>
                            <div class="testimonial-content">
                                <p>"Vị trí khách sạn rất thuận tiện, gần trung tâm thành phố. Phòng ốc khá ổn nhưng wifi hơi chậm."</p>
                                <div class="ratings">
                                    <span><i class="fa fa-star yellow-star"></i></span>
                                    <span><i class="fa fa-star yellow-star"></i></span>
                                    <span><i class="fa fa-star yellow-star"></i></span>
                                    <span><i class="fa fa-star yellow-star"></i></span>
                                </div>
                                <h5 class="testimonial-author">Xoài Non</h5>
                            </div>
                            <div class="testimonial-content">
                                <p>"Tuyệt vời! Tôi sẽ quay lại đây lần nữa. Tiện nghi trong phòng rất hiện đại."</p>
                                <div class="ratings">
                                    <span><i class="fa fa-star yellow-star"></i></span>
                                    <span><i class="fa fa-star yellow-star"></i></span>
                                    <span><i class="fa fa-star yellow-star"></i></span>
                                    <span><i class="fa fa-star yellow-star"></i></span>
                                    <span><i class="fa fa-star yellow-star"></i></span>
                                </div>
                                <h5 class="testimonial-author">Ngân Hà</h5>
                            </div>
                            <div class="testimonial-content">
                                <p>"Phòng có view đẹp nhìn ra biển, tuy nhiên cách âm chưa tốt, có thể nghe tiếng ồn từ phòng bên."</p>
                                <div class="ratings">
                                    <span><i class="fa fa-star yellow-star"></i></span>
                                    <span><i class="fa fa-star yellow-star"></i></span>
                                    <span><i class="fa fa-star yellow-star"></i></span>
                                    <span><i class="fa fa-star yellow-star"></i></span>
                                    <span><i class="fa fa-star yellow-star"></i></span>
                                </div>
                                <h5 class="testimonial-author">Mai Dora</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="group-room-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="group-room-banner">
                        <figure class="banner-statistics">
                            <a href="#">
                                <img src="assets/img/room/room-1.jpg" alt="room banner">
                            </a>
                            <div class="banner-content banner-content_style3 text-center">
                                <h6 class="banner-text1">VIP</h6>
                                <h2 class="banner-text2">Presidential room</h2>
                                <a href="shop.html" class="btn btn-text">Đặt ngay</a>
                            </div>
                        </figure>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="categories-group-wrapper">

                        <div class="section-title-append">
                            <h4>Phòng VIP</h4>
                            <div class="slick-append"></div>
                        </div>
                        <div class="group-list-item-wrapper">
                            <div class="group-list-carousel">
                                <?php foreach ($listPhong as $key => $phong): ?>
                                    <?php if ($phong['loai_phong_id'] == 1): ?>
                                        <div class="group-slide-item">
                                            <div class="group-item my-2">
                                                <div class="group-item-thumb">
                                                    <a href="<?= BASE_URL . '?act=chi-tiet-phong&id=' . $phong['id'] ?>">
                                                        <img src="<?= $phong['hinh_anh'] ?>" style="height: 80px; width:auto" alt="image">
                                                    </a>
                                                </div>
                                                <div class="group-item-desc">
                                                    <h5 class="group-room-name"><a href="<?= BASE_URL . '?act=chi-tiet-phong&id=' . $phong['id'] ?>">
                                                        </a></h5>
                                                    <div class="price-box">
                                                        <span class="ml-3"><?= $phong['ten_phong'] ?></span><br><br><br>
                                                        <span class="price-old"><?= $phong['gia_phong'] ?> VNĐ</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="categories-group-wrapper">
                        <div class="section-title-append">
                            <h4>Phòng thường</h4>
                            <div class="slick-append"></div>
                        </div>
                        <div class="group-list-item-wrapper">
                            <div class="group-list-carousel">
                                <?php foreach ($listPhong as $key => $phong): ?>
                                    <?php if ($phong['loai_phong_id'] == 2): ?>
                                        <div class="group-slide-item">
                                            <div class="group-item my-2">
                                                <div class="group-item-thumb">
                                                    <a href="<?= BASE_URL . '?act=chi-tiet-phong&id=' . $phong['id'] ?>">
                                                        <img src="<?= $phong['hinh_anh'] ?>" style="height: 80px; width:auto" alt="image">
                                                    </a>
                                                </div>
                                                <div class="group-item-desc">
                                                    <h5 class="group-room-name"><a href="<?= BASE_URL . '?act=chi-tiet-phong&id=' . $phong['id'] ?>">
                                                        </a></h5>
                                                    <div class="price-box">
                                                        <span class="ml-3"><?= $phong['ten_phong'] ?></span><br><br><br>
                                                        <span class="price-old"><?= $phong['gia_phong'] ?> VNĐ</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="latest-blog-area section-padding pt-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title text-center">
                        <h2 class="title">Tin tức mới nhất</h2>
                        <p class="sub-title">Có những bài đăng trên blog mới nhất</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="blog-carousel-active slick-row-10 slick-arrow-style">
                        <div class="blog-post-item">
                            <figure class="blog-thumb">
                                <a href="#">
                                    <img src="https://cdn1.ivivu.com/iVivu/2018/09/25/10/khach-san-muong-thanh-luxury-nhat-le-quang-binh-1-800x450.webp?o=png" alt="blog image">
                                </a>
                            </figure>
                            <div class="blog-content">
                                <h5 class="blog-title">
                                    <a href="blog-details.html">“10 Điều Cần Lưu Ý Khi Chọn Khách Sạn Cho Kỳ Nghỉ Của Bạn”</a>
                                </h5>
                            </div>
                        </div>
                        <div class="blog-post-item">
                            <figure class="blog-thumb">
                                <a href="#">
                                    <img src="https://cdn1.ivivu.com/iVivu/2018/09/25/10/khach-san-muong-thanh-luxury-nhat-le-quang-binh-15-800x450.webp?o=png" alt="blog image">
                                </a>
                            </figure>
                            <div class="blog-content">
                                <h5 class="blog-title">
                                    <a href="blog-details.html">“Làm Thế Nào Để Tận Hưởng Kỳ Nghỉ 5 Sao Với Ngân Sách 3 Sao?”</a>
                                </h5>
                            </div>
                        </div>
                        <div class="blog-post-item">
                            <figure class="blog-thumb">
                                <a href="#">
                                    <img src="https://cdn1.ivivu.com/iVivu/2018/09/25/10/khach-san-muong-thanh-luxury-nhat-le-quang-binh-16-800x450.webp?o=png" alt="blog image">
                                </a>
                            </figure>
                            <div class="blog-content">
                                <h5 class="blog-title">
                                    <a href="blog-details.html">“Top 5 Điểm Đến Gần Khách Sạn [Tên Khách Sạn] Không Thể Bỏ Lỡ”</a>
                                </h5>
                            </div>
                        </div>
                        <div class="blog-post-item">
                            <figure class="blog-thumb">
                                <a href="#">
                                    <img src="https://cdn1.ivivu.com/iVivu/2018/09/25/10/khach-san-muong-thanh-luxury-nhat-le-quang-binh-2-800x450.webp?o=png" alt="blog image">
                                </a>
                            </figure>
                            <div class="blog-content">
                                <h5 class="blog-title">
                                    <a href="blog-details.html">“Bí Quyết Đặt Phòng Khách Sạn Giá Tốt Vào Mùa Cao Điểm”</a>
                                </h5>
                            </div>
                        </div>
                        <div class="blog-post-item">
                            <figure class="blog-thumb">
                                <a href="#">
                                    <img src="https://cdn1.ivivu.com/iVivu/2018/09/25/10/khach-san-muong-thanh-luxury-nhat-le-quang-binh-14-800x450.webp?o=png" alt="blog image">
                                </a>
                            </figure>
                            <div class="blog-content">
                                <h5 class="blog-title">
                                    <a href="blog-details.html">“Tầm Quan Trọng Của Khách Sạn Trong Trải Nghiệm Du Lịch”</a>
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


</main>

<?php
require_once 'layout/footer.php';
?>