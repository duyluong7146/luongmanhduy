<?php require_once("../../resources/config.php"); ?>
<?php include(TEMPLATE_BACK . DS . "header.php"); ?>
<?php update_order(); ?>

<?PHP 
    if($_SERVER["REQUEST_METHOD"] == 'GET'){
        $order_id = $_GET['id'];
        $sql = "SELECT * FROM `orders` WHERE order_id = ".($_GET['id'])."";
			$query = mysqli_query($connection,$sql);
    }
?>
<div class="dashboard-wrapper">
    <div class="container-fluid dashboard-content">
        <!-- ============================================================== -->
        <!-- pageheader -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h2 class="pageheader-title">Update Order</h2>
                    <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce
                        sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Trang</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Update sản phẩm</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end pageheader -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <?PHP while( $row = fetch_array($query)){ ?>
                <form id="form" data-parsley-validate="" novalidate="" method="POST" action="" enctype="multipart/form-data">
                
                    <div class="form-group row">
                        <label for="inputEmail2" class="col-3 col-lg-2 col-form-label text-right">Tên</label>
                        <div class="col-9 col-lg-10">
                        <input style="pointer-events: none;" id="inputEmail2" type="text" required="" data-parsley-type="" placeholder=""class="form-control" name="order_name" value="<?php echo $row['order_name']?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail2" class="col-3 col-lg-2 col-form-label text-right">Địa chỉ</label>
                        <div class="col-9 col-lg-10">
                        <input style="pointer-events: none;" id="inputEmail2" type="text" required="" data-parsley-type="" placeholder=""class="form-control" name="order_address" value="<?php echo $row['order_address']?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail2" class="col-3 col-lg-2 col-form-label text-right">Điện thoại</label>
                        <div class="col-9 col-lg-10">
                        <input style="pointer-events: none;" id="inputEmail2" type="text" required="" data-parsley-type="" placeholder=""class="form-control" name="order_phone" value="<?php echo $row['order_phone']?>">
                        </div>
                    </div>
                    <div class="form-group row"> 
                        <label for="inputEmail2" class="col-3 col-lg-2 col-form-label text-right">Trạng thái</label>
                        <div class="col-9 col-lg-10"> 
                            <select class="form-control" id="input-select" name="status">
                                <option >Chọn Order</option>
                                <option value="Waiting">Đang đợi</option>
                                <option value="Shiping">Đang vận chuyển</option>
                                <option value="Done">Thành công</option>
                            </select> 
                        </div>
                    </div>
                  
                    <div class="row pt-2 pt-sm-5 mt-1">
                        <div class="col-sm-6 pl-0">
                            <p class="text-right"> 
                                <button type="submit" class="btn btn-space btn-primary" name="update_order">Update Order</button> 
                                <button class="btn btn-space btn-secondary">Huỷ bỏ</button>
                            </p>
                        </div>
                    </div>
                </form>
                <?PHP } ?>  
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- footer -->
    <!-- ============================================================== -->
    <?php include(TEMPLATE_BACK . DS . "footer.php"); ?>