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
                    <h1>Quản lý danh mục phòng</h1>
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
                            <h3 class="card-title">Sửa danh mục phòng</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="?act=postEditDanhMuc&id=<?=$danhmuc['id']?>" method="post">
                            <input type="text" name="" value="" hidden>
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Sửa tên danh mục</label>
                                    <input type="text" class="form-control" id="ten_loai" name="ten_loai" value="<?=$danhmuc['ten_loai']?>" placeholder="Nhập tên danh mục">
                                    
                                </div>
                                <div class="form-group">
                                    <label>Mô tả</label>      
                                    <input type="text" name="mo_ta" id="mo_ta" value="<?=$danhmuc['mo_ta']?>" class="form-control" placeholder="Nhập mô tả" ></input>                          
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