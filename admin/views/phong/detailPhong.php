<?php require './views/layout/header.php'; ?>
<?php require './views/layout/navbar.php'; ?>

<?php require './views/layout/sidebar.php'; ?>

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Quản lý thông tin phòng</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="content">

        <div class="card card-solid">
            <div class="card-body">
                <div class="row">
                    <div class="col-12 col-sm-6">
                        <h3 class="d-inline-block d-sm-none"></h3>
                        <div class="col-12">
                            <img style="width: 400px; height: 400px; object-fit: cover; " src="<?= $phong['hinh_anh'] ?>" class="product-image" alt="Product Image">
                        </div>
                        <div class="col-12 product-image-thumbs">

                            <div class="product-image-thumb"><img src="https://plus.unsplash.com/premium_photo-1661964402307-02267d1423f5?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTd8fGhvdGVsfGVufDB8fDB8fHww" alt="Product Image"></div>
                            <div class="product-image-thumb"><img src="https://plus.unsplash.com/premium_photo-1676321688630-9558e7d2be10?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mjl8fGhvdGVsfGVufDB8fDB8fHww" alt="Product Image"></div>
                            <div class="product-image-thumb"><img src="https://images.unsplash.com/photo-1490122417551-6ee9691429d0?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MzJ8fGhvdGVsfGVufDB8fDB8fHww" alt="Product Image"></div>

                        </div>
                    </div>
                    <div class="col-12 col-sm-6">
                        <h3 class="my-3">Số phòng: <?= $phong['ten_phong'] ?></h3>
                        <hr>
                        <h4 class="mt-3">Giá phòng: <small><?= $phong['gia_phong'] ?></small></h4>
                        <h4 class="mt-3">Loại phòng: <small><?= $phong['loai_phong_id'] == 1 ? "Cao cấp" : "Thường" ?></small></h4>
                        <h4 class="mt-3">Kiểu phòng: <small><?= $phong['kieu_phong_id'] == 1 ? "Đơn" : "Đôi" ?></small></h4>
                        <h4 class="mt-3">Trạng thái: <small><?= $phong['trang_thai_id'] == 1 ? "Còn phòng" : "Hết phòng" ?></small></h4>
                        <h4 class="mt-3">Mô tả: <small><?= $phong['mo_ta'] ?></small></h4>

                    </div>
                </div>

                <div class="col-12">
                    <h2>Bình luận của phòng</h2>
                    <div>
                        <table id="example2" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Người bình luận</th>
                                    <th>Nội dung</th>
                                    <th>Ngày bình luận</th>
                                    <th>Trạng thái</th>
                                    <th>Thao tác</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php foreach ($listBinhLuan as $key => $danhgia) : ?>
                                    <tr>
                                        <td><?= $key + 1 ?></td>
                                        <td>
                                            <?= $danhgia['ho_ten'] ?>
                                        </td>
                                        <td><?= $danhgia['noi_dung'] ?></td>
                                        <td><?= $danhgia['ngay_danh_gia'] ?></td>
                                        <td><?= $danhgia['trang_thai_id'] == 1 ? 'Hiển thị' : 'Bị ẩn' ?></td>
                                        <td>
                                            <form action="" <?= BASE_URL_ADMIN . '?act=update-trang-thai-binh-luan' ?> method="post">
                                                <input type="hidden" name="id_binh_luan">
                                                <input type="hidden" name="name_view">
                                                <input type="hidden" name="id_khach_hang">
                                                <button onclick="return confirm('Bạn có muốn ẩn bình luận không ?')" class="btn btn-warning">
                                                    <?= $danhgia['trang_thai_id'] == 1 ? "Ẩn" : "Bỏ ẩn" ?></button>
                                            </form>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </section>
</div>
<?php include './views/layout/footer.php'; ?>

</body>
<script>
    $(document).ready(function() {
        $('.product-image-thumb').on('click', function() {
            var $image_element = $(this).find('img')
            $('.product-image').prop('src', $image_element.attr('src'))
            $('.product-image-thumb.active').removeClass('active')
            $(this).addClass('active')
        })
    })
</script>

</html>