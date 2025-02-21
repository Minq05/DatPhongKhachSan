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
                    <h1>Quản lý tài khoản Khách hàng</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Sửa thông tin tài khoản Khách hàng: <?= $khachHang['ho_ten'] ?> </h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="?act=postEditKh&id=<?= $khachHang['id'] ?>" method="post">
                            <input type="hidden" name="id" value="<?= $khachHang['id'] ?>">
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Họ tên</label>
                                    <input type="text" class="form-control" name="ho_ten"
                                        value="<?= $khachHang['ho_ten'] ?>" placeholder="Nhập họ tên">
                                    <?php if (isset($_SESSION['error']['hoten'])) { ?>
                                    <p class="text-danger"> <?= $_SESSION['error']['hoten'] ?></p>
                                    <?php } ?>
                                </div>

                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" class="form-control" name="email"
                                        value="<?= $khachHang['email'] ?>" placeholder="Nhập email">
                                    <?php if (isset($_SESSION['error']['email'])) { ?>
                                    <p class="text-danger"> <?= $_SESSION['error']['email'] ?></p>
                                    <?php } ?>

                                </div>

                                <div class="form-group">
                                    <label>Số điện thoại</label>
                                    <input type="text" class="form-control" name="dien_thoai"
                                        value="<?= $khachHang['dien_thoai'] ?>" placeholder="Nhập Số điện thoại">
                                    <?php if (isset($_SESSION['error']['dien_thoai'])) { ?>
                                    <p class="text-danger"> <?= $_SESSION['error']['dien_thoai'] ?></p>
                                    <?php } ?>

                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
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
<!-- /.content-wrapper -->
<!-- <footer> -->
<?php include './views/layout/footer.php'; ?>
</body>

</html>