<?php require './views/layout/header.php'; ?>
<?php require './views/layout/navbar.php'; ?>

<?php require './views/layout/sidebar.php'; ?>

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-11">
                    <h1>Sửa thông tin phòng</h1>
                </div>
                <div class="col-1">
                    <a href="<?= BASE_URL_ADMIN . '?act=phong' ?>" class="btn btn-secondary">Quay lại</a>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Thông tin phòng</h3>
                        <div class="card-tools">
                        </div>
                    </div>
                    <form action="<?= BASE_URL_ADMIN . '?act=sua-phong&id='.$phong['id'] ?>" method="post">
                        <div class="card-body row">
                            <div class="form-group col-12">
                                <label>Số phòng</label>
                                <input type="text" class="form-control" name="ten_phong" placeholder="Nhập số phòng" required value="<?= $phong['ten_phong'] ?>">

                            </div>

                            <div class="form-group col-6">
                                <label>Giá phòng</label>
                                <input type="number" min='0' class="form-control" name="gia_phong" placeholder="Nhập giá phòng" required value="<?= $phong['gia_phong'] ?>">

                            </div>

                            <div class="form-group col-6">
                                <label>Loại phòng</label>
                                <input type="hidden" name="loai_phong_id" value="<?=$phong['loai_phong_id']?>">
                                <select class="form-control" name="loai_phong_id" id="exampleFormControlSelect1">
                                <option selected disabled>
                                    <?php
                                        if($phong['loai_phong_id']==1)
                                        {
                                            echo "VIP";
                                        }
                                        elseif($phong['loai_phong_id']==2)
                                        {
                                            echo "Normal";
                                        }
                                    ?>
                                    <?php foreach ($listDanhMuc as $danhMuc): ?>
                                        <option value="<?= $danhMuc['id'] ?>"><?= $danhMuc['ten_loai'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>

                            <div class="form-group col-6">
                                <label>Kiểu phòng</label>
                                <input type="hidden" name="kieu_phong_id" value="<?=$phong['kieu_phong_id']?>">
                                <select class="form-control" name="kieu_phong_id" id="exampleFormControlSelect1">
                                <option selected disabled>
                                    <?php
                                        if($phong['kieu_phong_id']==1)
                                        {
                                            echo "Đơn";
                                        }
                                        elseif($phong['kieu_phong_id']==2)
                                        {
                                            echo "Đôi";
                                        }
                                    ?>
                                    <option value="1">Đơn</option>
                                    <option value="2">Đôi</option>
                                    <!-- PHP -->

                                </select>
                            </div>

                            <div class="form-group col-6">
                                <label>Hình ảnh</label>
                                <input type="text" class="form-control" name="hinh_anh" placeholder="Nhập link hình ảnh" required value="<?= $phong['hinh_anh'] ?>">
                                <!-- PHP -->
                            </div>

                            <div class="form-group col-12">
                                <label>Trạng thái</label>
                                <input type="hidden" name="trang_thai_id" value="<?=$phong['trang_thai_id']?>">
                                <select class="form-control" name="trang_thai_id" id="exampleFormControlSelect1">
                                    <option selected disabled>
                                    <?php
                                        if($phong['trang_thai_id']==1)
                                        {
                                            echo "Còn phòng";
                                        }
                                        elseif($phong['trang_thai_id']==2)
                                        {
                                            echo "Hết phòng";
                                        }
                                    ?>
                                    </option>
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
                                <input name="mo_ta" id="mo_ta" class="form-control" placeholder="Nhập mô tả"></input value="<?= $phong['mo_ta'] ?>">
                            </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Sửa phòng</button>
                        </div>
                    </form>
                </div>
            </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<!-- <footer> -->
<?php include './views/layout/footer.php'; ?>
</body>

</html>