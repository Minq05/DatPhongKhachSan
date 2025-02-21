  <?php require './views/layout/header.php'; ?>
  <?php require './views/layout/navbar.php'; ?>

  <?php require './views/layout/sidebar.php'; ?>

  <div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Quản lý danh sách đơn đặt</h1>
          </div>
        </div>
      </div>
    </section>

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">


            <div class="card">
              <div class="card-header">
              </div>
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>STT</th>
                      <th>Tên khách hàng</th>
                      <th>Số điện thoại</th>
                      <th>Check in</th>
                      <th>Check out</th>
                      <th>Tổng tiền</th>
                      <th>Trạng thái</th>
                      <th>Thao tác</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($listDonDat as $key => $donDat): ?>
                      <tr>
                        <td><?= $key + 1 ?></td>
                        <td><?= $donDat['ho_ten'] ?></td>
                        <td><?= $donDat['dien_thoai'] ?></td>
                        <td><?= $donDat['check_in'] ?></td>
                        <td><?= $donDat['check_out'] ?></td>
                        <td><?= $donDat['don_gia'] ?></td>
                        <td><?= $donDat['trang_thai_id'] == 1 ? "Đã xử lý" : "Đang xử lý"?></td>
                        <td>
                          <div class="btn-group">
                            <a href="<?= BASE_URL_ADMIN . '?act=chi-tiet-don-dat&id=' .$donDat['id'] ?>">
                              <button class="btn btn-primary"><i class="fas fa-eye"></i></button>
                            </a>
                            <a href="<?= BASE_URL_ADMIN . '?act=form-sua-don-dat&id=' .$donDat['id'] ?>">
                              <button class="btn btn-warning"><i class="fas fa-cogs"></i></button>
                            </a>
                          </div>

                        </td>
                      </tr>
                    <?php endforeach; ?>
                  </tbody>
                  <tfoot>
                    <tr>
                      <th>STT</th>
                      <th>Tên khách hàng</th>
                      <th>Số điện thoại</th>
                      <th>Check in</th>
                      <th>Check out</th>
                      <th>Tổng tiền</th>
                      <th>Trạng thái</th>
                      <th>Thao tác</th>
                    </tr>
                  </tfoot>
                </table>
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