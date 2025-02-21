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
                    <h1>Quản lý tài khoản khách hàng</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-4">
                    <img src="" style="width: 70%" alt=""
                        onerror="this.onerror=null;this.src='https://www.nicepng.com/png/full/128-1280406_view-user-icon-png-user-circle-icon-png.png'">
                </div>
                <div class="col-8">
                    <div class="container">
                        <table class="table table-borderless">
                            <tbody style="font-size: x-large;">
                                <tr>
                                    <th>Họ tên:</th>
                                    <td><?= $khachHang['ho_ten'] ?></td>
                                </tr>

                                <tr>
                                    <th>Email:</th>
                                    <td><?= $khachHang['email'] ?></td>
                                </tr>
                                <tr>
                                    <th>Số điện thoại:</th>
                                    <td><?= $khachHang['dien_thoai'] ?></td>
                                </tr>


                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-12">
                    <h2>Lịch sử đơn đặt</h2>
                    <div>
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Số điện thoại</th>
                                    <th>Check_in</th>
                                    <th>Check_out</th>
                                    <th>Tổng tiền</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($listDonDat as $key => $donDat) : ?>
                                    <tr>
                                        <td><?= $key + 1 ?></td>
                                        <td><?= $donDat['dien_thoai'] ?></td>
                                        <td><?= $donDat['check_in'] ?></td>
                                        <td><?= $donDat['check_out'] ?></td>
                                        <td><?= $donDat['don_gia'] ?> $</td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-12">
                    <h2>Lịch sử bình luận</h2>
                    <div>
                        <table id="example2" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Số phòng</th>
                                    <th>Ngày bình luận</th>
                                    <th>Nội dung</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($listBinhLuan as $key => $binhLuan): ?>
                                    <tr>
                                        <td><?= $key+1 ?></td>
                                        <td><?= $binhLuan['ten_phong'] ?></td>
                                        <td><?= $binhLuan['ngay_danh_gia'] ?></td>
                                        <td><?= $binhLuan['noi_dung'] ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
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
<script>
    $(function() {
        $("#example1").DataTable({
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
            // "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        $('#example2').DataTable({
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
        });
    });
</script>

</html>