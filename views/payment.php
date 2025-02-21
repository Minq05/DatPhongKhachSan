<?php
require_once 'layout/header.php';
require_once 'layout/menu.php';
?>
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
                                <h3 class="card-title">Thanh toán</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form action="?act=check-payment" method="post">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>Tên chủ thẻ</label>
                                        <input type="text" class="form-control" id="card_name" name="card_name" placeholder="Nhập tên chủ thẻ">
                                    </div>
                                    <div class="form-group">
                                        <label>Số thẻ</label>
                                        <input type="text" class="form-control" id="card_number" name="card_number" placeholder="Nhập số thẻ">
                                    </div>
                                    <div class="form-group">
                                        <label>Ngày hết hạn</label>
                                        <input type="date" class="form-control" id="expiry_date" name="expiry_date" placeholder="Nhập ngày hết hạn">
                                    </div>
                                    <div class="form-group">
                                        <label>Mã CVV</label>
                                        <input type="text" class="form-control" id="cvv" name="cvv" placeholder="Nhập mã CVV">
                                    </div>
                                </div>
                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-cart">Thanh toán</button>
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

<?php
require_once 'layout/footer.php';
?>