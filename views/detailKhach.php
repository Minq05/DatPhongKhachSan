<?php
require_once 'layout/header.php';
require_once 'layout/menu.php';
?>

<main>
    <div class="container mt-5 mb-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-sm">
                    <div class="card-header bg-primary">
                        <h2 style="color: white;" class="mb-0">Thông tin khách hàng</h2>
                    </div>
                    <div class="card-body">
                        <div class="customer-info">
                            <p style="font-size: 30px;"><strong>Tên:</strong> <?= $khach['ho_ten'] ?></p>
                            <p style="font-size: 30px;"><strong>Email:</strong> <?= $khach['email']  ?></p>
                            <p style="font-size: 30px;"><strong>Số điện thoại:</strong> <?= $khach['dien_thoai']  ?></p>
                        </div>
                        <div class="text-right mt-3">
                            <a href="?act=form-edit-khach&id=<?= $khach['id'] ?>" class="btn btn-text">Sửa thông tin</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
require_once 'layout/footer.php';
?>