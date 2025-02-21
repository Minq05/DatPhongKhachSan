<?php require './views/layout/header.php'; ?>
<?php require './views/layout/navbar.php'; ?>
<?php require './views/layout/sidebar.php'; ?>

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-10">
                    <h1>Quản lý danh sách đơn đặt - Đơn hàng</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">

                    <div class="invoice p-3 mb-3">
                        <div class="row">
                            <div class="col-12">
                                <h4>
                                    <i class="fas fa-cat"></i> Đặt phòng khách sạn TripHouse
                                    <small class="float-right">Check in: <?= $donDat['check_in'] ?></small>
                                    <small class="float-right">Check out: <?= $donDat['check_out'] ?></small>
                                </h4>
                            </div>
                        </div>
                        <div class="row invoice-info">
                            <div class="col-sm-4 invoice-col">
                                Thông tin người đặt
                                <address>
                                    <strong><?= $donDat['ho_ten'] ?></strong>
                                    <strong><br>Email: <?= $donDat['email'] ?></strong>
                                    <strong><br>Điện thoại: <?= $donDat['dien_thoai'] ?></strong>
                                </address>
                            </div>

                            <div class="col-sm-4 invoice-col">

                                <br>
                                <b>Tổng tiền:<?= $donDat['don_gia'] ?> VND</b> <br>
                                <b>Thanh toán: <?= $donDat['trang_thai_id'] == 1 ? "Đã thanh toán" : "Chưa thanh toán" ?> </b>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12 table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Số phòng</th>
                                            <th>Giá phòng</th>
                                            <th>Thời gian</th>
                                            <th>Thành tiền</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $check_out = strtotime($donDat['check_out']);
                                        $check_in = strtotime($donDat['check_in']);
                                        $duration = $check_out - $check_in; // Kết quả là số giây giữa hai ngày
                                        ?>
                                        <tr>
                                            <td></td>
                                            <td><?= $phong['ten_phong'] ?></td>
                                            <td><?= $phong['don_gia'] ?>$</td>
                                            <td><?= $duration / 86400 ?> Ngày</td>
                                            <td><?= $phong['don_gia'] ?>$</td>
                                        </tr>
                                        <!-- <?php ?>  -->
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-6">
                                <p class="lead">Hóa đơn:</p>
                                <div class="table-responsive">
                                    <table class="table">
                                        <tr>
                                            <td>Ngày đến :<?= $donDat['check_in'] ?></td>
                                            <br>
                                            <td> Ngày đi :<?= $donDat['check_out'] ?> </td>
                                        </tr>
                                        <tr>
                                            <th>Giá tiền trên ngày:</th>
                                            <td><?= $phong['don_gia'] ?>$</td>
                                        </tr>
                                        <tr>
                                            <th>Tổng thành tiền:</th>
                                            <td><?= $donDat['don_gia'] ?>$</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<?php include './views/layout/footer.php'; ?>

</body>

</html>