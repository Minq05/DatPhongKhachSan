<?php require './views/layout/header.php'; ?>
<!-- Navbar -->
<?php require './views/layout/navbar.php'; ?>
<!-- /.navbar -->

<!-- Main Sidebar Container -->
<?php require './views/layout/sidebar.php'; ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Quản lý danh sách phòng</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Thêm phòng</h3>
                        </div>
                        <form action="<?= BASE_URL_ADMIN . '?act=them-phong' ?>" method="post">
                            <div class="card-body row">
                                <div class="form-group col-12">
                                    <label>Số phòng</label>
                                    <input type="text" class="form-control" name="ten_phong" placeholder="Nhập số phòng" required>

                                </div>

                                <div class="form-group col-6">
                                    <label>Giá phòng</label>
                                    <input type="number" min='0' class="form-control" name="gia_phong" placeholder="Nhập giá phòng" required>

                                </div>

                                <div class="form-group col-6">
                                    <label>Loại phòng</label>
                                    <select class="form-control" name="loai_phong_id" id="exampleFormControlSelect1">
                                    <option selected disabled>Chọn kiểu phòng</option>
                                        <option value="1">VIP</option>
                                        <option value="2">Normal</option>
                                    </select>
                                </div>

                                <div class="form-group col-6">
                                    <label>Kiểu phòng</label>
                                    <select class="form-control" name="kieu_phong_id" id="exampleFormControlSelect1">
                                        <option selected disabled>Chọn kiểu phòng</option>
                                        <option value="1">Đơn</option>
                                        <option value="2">Đôi</option>
                                        <!-- PHP -->
                                        
                                    </select>
                                </div>

                                <div class="form-group col-6">
                                    <label>Hình ảnh</label>
                                    <input type="text" class="form-control" name="hinh_anh" placeholder="Nhập link hình ảnh" required>
                                    <!-- PHP -->
                                </div>

                                <div class="form-group col-12">
                                    <label>Trạng thái</label>
                                    <select class="form-control" name="trang_thai_id" id="exampleFormControlSelect1">
                                        <option selected disabled>Chọn trạng thái</option>
                                        <option value="1">Còn phòng</option>
                                        <option value="2">Hết phòng</option>
                                    </select>
                                    <!-- PHP -->
                                    <?php
                                    if (isset($_SESSION['trang_thai_id'])) { ?>
                                        <p class="text-danger"><?= $_SESSION['trang_thai_id'] ?></p>
                                    <?php } ?>
                                </div>
                                <div class="form-group col-12">
                                    <label>Mô tả</label>
                                    <textarea name="mo_ta" id="mo_ta" class="form-control" placeholder="Nhập mô tả"></textarea>
                                </div>
                            </div>

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Thêm phòng</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php include './views/layout/footer.php'; ?>
</body>

</html>