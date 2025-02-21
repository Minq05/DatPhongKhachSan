<?php
require_once 'layout/header.php';
require_once 'layout/menu.php';
?>
<!-- Content Wrapper. Contains page content -->
<main>
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Sửa thông tin cá nhân</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form action="?act=postEditKhachHang&id=<?= $khach['id'] ?>" method="post">
                                <input type="text" name="" value="" hidden>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>Tên</label>
                                        <input type="text" class="form-control" id="ho_ten" name="ho_ten" value="<?= $khach['ho_ten'] ?>" placeholder="Nhập ho_ten">
                                    </div>
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="text" class="form-control" id="email" name="email" value="<?= $khach['email'] ?>" placeholder="Nhập email">
                                    </div>
                                    <div class="form-group">
                                        <label>Số điện thoại</label>
                                        <input type="text" class="form-control" id="dien_thoai" name="dien_thoai" value="<?= $khach['dien_thoai'] ?>" placeholder="Nhập dien_thoai">
                                    </div>
                                    <div class="form-group">
                                        <label>Old Password</label>
                                        <input type="text" class="form-control" id="password" name="password" value="<?= $khach['password'] ?>" placeholder="Nhập password">
                                    </div>
                                    <div class="form-group">
                                        <label>New Password</label>
                                        <input type="password" class="form-control" id="new_password" name="new_password" placeholder="Nhập new_password">
                                    </div>
                                    <div class="form-group">
                                        <label>Confirm New Password</label>
                                        <input type="password" class="form-control" id="confirm_new_password" name="confirm_new_password" placeholder="Nhập confirm_new_password">
                                    </div>
                                </div>
                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-cart">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
</main>
<!-- /.content-wrapper -->
<!-- <footer> -->
<?php
require_once 'layout/footer.php';
?>