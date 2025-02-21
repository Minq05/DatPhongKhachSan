<?php require './views/layout/header.php'; ?>
<?php require './views/layout/navbar.php'; ?>

<?php require './views/layout/sidebar.php'; ?>

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Quản lý danh mục phòng</h1>
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
                            <h3 class="card-title">Thêm danh mục phòng</h3>
                        </div>
                        <form action="<?= BASE_URL_ADMIN . '?act=them-danh-muc' ?>" method="post" >
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Tên danh mục</label>
                                    <input type="text" class="form-control" name="ten_loai" placeholder="Nhập tên danh mục" required>
                                    
                                </div>
                                <div class="form-group">
                                    <label>Mô tả</label>      
                                    <textarea name="mo_ta" id="" class="form-control" placeholder="Nhập mô tả"></textarea>                          
                                </div>
                            </div>

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Thêm danh mục</button>
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