<?php require './views/layout/header.php'; ?>
<?php require './views/layout/navbar.php'; ?>

<?php require './views/layout/sidebar.php';
?>

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Quản lý thông tin đơn đặt</h1>
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
                            <h3 class="card-title">Sửa thông tin đơn đặt: </h3>
                        </div>
                        <form action="<?= BASE_URL_ADMIN . '?act=sua-don-dat&id=' . $donDat['id'] ?>" method="post">
                            <div class="card-body row">
                                <div class="form-group col-12">
                                    <label>Tên khách hàng</label>
                                    <input type="text" class="form-control" name="ho_ten" value="<?= $donDat['ho_ten'] ?>" placeholder="Nhập tên khách hàng" disabled>

                                </div>
                                <div class="form-group col-12">
                                    <label>Số điện thoại</label>
                                    <input type="text" class="form-control" name="dien_thoai" value="<?= $donDat['dien_thoai'] ?>" placeholder="Nhập số điện thoại " readonly>
                                </div>
                                <div class="form-group col-6">
                                    <label>Check_in</label>
                                    <input type="date" class="form-control" name="check_in" value="<?= $donDat['check_in'] ?>">
                                </div>
                                <div class="form-group col-6">
                                    <label>Check_out</label>
                                    <input type="date" class="form-control" name="check_out" value="<?= $donDat['check_out'] ?>">
                                </div>
                                <div class="form-group col-4">
                                    <label>Email</label>
                                    <input type="email" class="form-control" name="email" value="<?= $donDat['email'] ?>" placeholder="Nhập email khách hàng" readonly>

                                </div>
                                <div class="form-group col-4">
                                    <label for="inputStatus">Trạng thái đơn đặt</label>
                                    <input type="hidden" name="kieu_phong_id" value="<?= $donDat['trang_thai_id'] ?>">
                                    <select id="inputStatus" name="trang_thai_id" class="form-control custom-select">
                                        <option selected disabled>
                                            <?php
                                            if ($donDat['trang_thai_id'] == 1) {
                                                echo "Đã xử lý";
                                            } elseif ($donDat['trang_thai_id'] == 2) {
                                                echo "Đang xử lý";
                                            }
                                            ?>
                                        <option value="1">Đã xử lý</option>
                                        <option value="2">Đang xử lý</option>

                                    </select>

                                </div>
                                <div class="form-group col-4">
                                    <label>Ghi chú</label>
                                    <input type="text" class="form-control" name="" value="" placeholder="Nhập ghi chú">
                                </div>


                            </div>

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
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