  <?php require './views/layout/header.php'; ?>
  <?php require './views/layout/navbar.php'; ?>
  <?php require './views/layout/sidebar.php'; ?>

  <div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Quản lý danh sách phòng</h1>
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
                <a href="<?= BASE_URL_ADMIN . '?act=form-them-phong' ?>">
                  <button class="btn btn-success">Thêm phòng</button>
                </a>
              </div>
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>STT</th>
                      <th>Số phòng</th>
                      <th>Hình ảnh</th>
                      <th>Giá phòng</th>
                      <th>Kiểu phòng</th>
                      <th>Loại phòng</th>
                      <th>Trạng thái</th>
                      <th>Thao tác</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($listPhong as $key => $phong) : ?>
                      <tr>
                        <td><?= $key + 1 ?></td>
                        <td><?= $phong['ten_phong'] ?></td>
                        <td>
                          <img src="<?= $phong['hinh_anh'] ?>" style="width: 100px" alt="">
                        </td>
                        <td><?= $phong['gia_phong'] ?></td>
                        <td><?= $phong['kieu_phong_id'] == 1 ? "Đơn" : "Đôi" ?></td>
                        <td><?= $phong['loai_phong_id'] == 1 ? "Cao cấp" : "Thường"?></td>
                        <td><?= $phong['trang_thai_id'] == 1 ? "Còn phòng" : "Hết phòng" ?></td>
                        <td>
                          <div class="btn-group">
                            <a href="<?= BASE_URL_ADMIN . '?act=chi-tiet-phong&id=' . $phong['id'] ?>">
                              <button class="btn btn-primary"><i class="fas fa-eye"></i></button>
                            </a>
                            <a href="<?= BASE_URL_ADMIN . '?act=form-sua-phong&id=' . $phong['id'] ?>">
                              <button class="btn btn-warning"><i class="fas fa-cogs"></i></button>
                            </a>
                            <a href="<?= BASE_URL_ADMIN . '?act=xoa-phong&id=' . $phong['id'] ?>" onclick="return confirm('Bạn có đồng ý xóa hay không ?')">
                              <button class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                            </a>
                          </div>

                        </td>
                      </tr>
                    <?php endforeach; ?>
                  </tbody>
                  <tfoot>
                    <tr>
                      <th>STT</th>
                      <th>Số phòng</th>
                      <th>Hình ảnh</th>
                      <th>Giá phòng</th>
                      <th>Kiểu phòng</th>
                      <th>Loại phòng</th>
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