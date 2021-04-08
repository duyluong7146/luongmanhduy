<?php require_once("../../resources/config.php"); ?>
<?php include(TEMPLATE_BACK . DS . "header.php"); ?>
<?php  $isAddedSucessful = add_product(); ?>
<div class="dashboard-wrapper">
    <div class="container-fluid dashboard-content">
        <!-- ============================================================== -->
        <!-- pageheader -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <?PHP if($isAddedSucessful) {?>
                    <div class="alert alert-success action-notification" role="alert">
                        Thêm sản phẩm thành công
                    </div>
                <?PHP } ?>
                <div class="page-header">
                    <h2 class="pageheader-title">Thêm sản phẩm</h2>
                    <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce
                        sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Pages</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Thêm sản phẩm</li>
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
                <form id="form" data-parsley-validate="" novalidate="" method="POST" action="" enctype="multipart/form-data">

                    <div class="form-group row">
                        <label for="inputEmail2" class="col-3 col-lg-2 col-form-label text-right">Tiêu đề sản phẩm</label>
                        <div class="col-9 col-lg-10">
                            <input id="inputEmail2" type="text" required="require" data-parsley-type="" placeholder=""
                                class="form-control" name="product_title" require>
                        </div>
                    </div>

                    <div class="form-group row"> 
                        <label for="inputEmail2" class="col-3 col-lg-2 col-form-label text-right">Danh mục sản phẩm</label>
                        <div class="col-9 col-lg-10"> 
                            <select class="form-control" id="input-select" name="cat_id">
                                <option >Chọn danh mục</option>
                                <?php show_categories_in_add_product()?>
                            </select> </div>
                    </div>
                    <div class="form-group row"> 
                        <label for="inputEmail2" class="col-3 col-lg-2 col-form-label text-right">Số lượng sản phẩm</label>
                        <div class="col-9 col-lg-10"> <input type="number" require class="form-control" name="product_quantity"> </div>
                    </div>
                    <div class="form-group row">
                         <label for="inputEmail2" class="col-3 col-lg-2 col-form-label text-right">Giá sản phẩm</label>
                        <div class="col-9 col-lg-10">
                            <input type="number" require class="form-control" name="product_price"> 
                        </div>
                    </div>
                    <div class="form-group row"> 
                        <label class="col-3 col-lg-2 col-form-label text-right">Miêu tả</label>
                        <div class="col-9 col-lg-10"> 
                            <textarea require class="form-control" rows="7" name="product_description"></textarea>
                        </div>
                    </div>
                    
                    <div class="custom-file col-12 col-lg-10 row " > 
                        <input type="file" class="custom-file-input" id="customFile" name="file"> 
                        <label class="custom-file-label" for="customFile">Chọn ảnh</label> 
                    </div>
                    <br>
                    <br>
                    <div class="custom-file col-10 col-lg-10 row" > 
                        <input type="file" class="custom-file-input" id="customFile" name="file1"> 
                        <label class="custom-file-label" for="customFile">Chọn miêu tả</label> 
                    </div>
                    <div class="row pt-2 pt-sm-5 mt-1">
                        <div class="col-sm-6 pl-0">
                            <p class="text-right"> 
                                <button type="submit" class="btn btn-space btn-primary" name="add_product">Thêm sản phẩm</button> 
                                <button class="btn btn-space btn-secondary">Huỷ bỏ</button>
                            </p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- footer -->
    <!-- ============================================================== -->
    <?php include(TEMPLATE_BACK . DS . "footer.php"); ?>