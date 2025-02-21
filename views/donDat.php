<?php
require_once 'layout/header.php';
require_once 'layout/menu.php';
// print_r($listDon);
// echo $_SESSION['currentUser'];
?>

<main>
    <!-- breadcrumb area start -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-wrap">
                        <nav aria-label="breadcrumb">
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html"><i class="fa fa-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="shop.html">shop</a></li>
                                <li class="breadcrumb-item active" aria-current="page">cart</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb area end -->

    <!-- cart main wrapper start -->
    <div class="cart-main-wrapper section-padding">
        <div class="container">
            <div class="section-bg-color">
                <div class="row">
                    <div class="col-lg-12">
                        <table class="table">
                            <thead>
                                <tr class="text-center">
                                    <th scope="col" style="background-color: #FFF3CD;">KHÁCH HÀNG</th>
                                    <th scope="col" style="background-color: #FFF3CD;">ĐIỆN THOẠI</th>
                                    <th scope="col" style="background-color: #FFF3CD;">PHÒNG</th>
                                    <th scope="col" style="background-color: #FFF3CD;">CHECK IN</th>
                                    <th scope="col" style="background-color: #FFF3CD;">CHECK OUT</th>
                                    <th scope="col" style="background-color: #FFF3CD;">GIÁ TIỀN</th>
                                    <th scope="col" style="background-color: #FFF3CD;">TRẠNG THÁI</th>
                                    <th scope="col" style="background-color: #FFF3CD;">ACTIONS</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if (isset($listDon)) {
                                    foreach ($listDon as $key => $donDat): ?>
                                        <tr class="text-center">
                                            <td><?= $donDat['ho_ten'] ?></td>
                                            <td><?= $donDat['dien_thoai'] ?></td>
                                            <td><?= $donDat['ten_phong'] ?></td>
                                            <td><?= $donDat['check_in'] ?></td>
                                            <td><?= $donDat['check_out'] ?></td>
                                            <td><?= $donDat['don_gia'] ?>VNĐ</td>


                                        <td><?= $donDat['trang_thai_id'] == 1 ? "Đã thanh toán" : "Chưa thanh toán" ?></td>
                                        <td>
                                            <?php if ($donDat['trang_thai_id'] == 1) { ?>
                                                <button class="bg-red-500 text-white font-bold py-2 px-4 rounded" type="submit" disabled>CANCEL</button>
                                            <?php } else { ?>
                                                <a href="?act=huy-don-dat&id=<?=$donDat['id']?>"><button onclick="return confirm('Bạn có đồng ý xóa hay không ?')" class="bg-red-500 hover:bg-red-800 text-white font-bold py-2 px-4 rounded" type="submit">CANCEL</button></a>
                                                
                                            <?php } ?>
                                        </td>
                                    </tr>
                                <?php endforeach;}; ?>
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- cart main wrapper end .-->
</main>

<?php
require_once 'layout/footer.php';
?>