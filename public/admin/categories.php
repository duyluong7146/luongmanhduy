<?php require_once("../../resources/config.php"); ?>
<?php include(TEMPLATE_BACK . DS . "header.php"); ?>
<?php $isAddedSucessful = add_category();?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <div class="dashboard-wrapper">
            <div class="container-fluid dashboard-content">
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <?PHP if($isAddedSucessful) {?>
                            <div class="alert alert-success action-notification" role="alert">
                                Thêm danh mục thành công
                            </div>
                        <?PHP } ?>

                        <div class="page-header">
                            <h2 class="pageheader-title">Thêm danh mục</h2>
                            <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce
                                sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a>
                                        </li>
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Trang</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Thêm danh mục</li>
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
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                        <form id="form" data-parsley-validate="" novalidate="" method="POST">
                       
                            <div class="form-group row"> <label for="inputEmail2"
                                    class="col-3 col-lg-2 col-form-label text-right">Tiêu đề</label>
                                <div class="col-9 col-lg-10"> <input id="" type="text" required=""
                                       placeholder="" class="form-control" name="cat_title"> </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-sm-12 pl-0">
                                    <p class="text-right"> 
                                    <button type="submit" class="btn btn-space btn-primary" name="add_category">Thêm danh mục</button> 
                                    <button class="btn btn-space btn-secondary">Huỷ bỏ</button>
                                    </p>
                                </div>
                            </div>
                            

                        </form>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-6">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="mb-0">Bảng danh mục - Print, Excel, PDF</h5>
                               
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example" class="table table-striped table-bordered second"
                                        style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Tiêu đề</th>
                                                <th>Hành động</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php show_categories_in_admin(); ?>
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
<?php include(TEMPLATE_BACK . DS . "footer.php"); ?>       