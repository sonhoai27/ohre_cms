<?php
$BODY_CLASS = 'class="vertical-layout vertical-menu-modern 2-columns   menu-expanded fixed-navbar"
      data-open="click" data-menu="vertical-menu-modern" data-col="2-columns"';
require_once(__SITE_PATH . "/views/assets/head.view.php");
require_once(__SITE_PATH . "/views/assets/side.nav.menu.php");
?>
<div class="app-content content" id="idUser">
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
                <h3 class="content-header-title mb-0 d-inline-block">Sản phẩm</h3>
                <div class="row breadcrumbs-top d-inline-block">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Các sản phẩm</a>
                            </li>
                            <li class="breadcrumb-item active">Sản phẩm
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="content-header-right col-md-6 col-12">
                <div class="float-md-right">
                    <div class="card float-right">
                        <div class="card-body tool-bar-action">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Tìm kiếm menu" aria-describedby="button-addon2">
                                <div class="input-group-append">
                                    <button class="btn btn-primary btn-sm" type="button">Tìm</button>
                                </div>
                            </div>
                            <a data-toggle="modal" data-target="#add-new-menu" class="item text-center" href="#"><i class="la la-calendar-check-o"></i> Thêm mới</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-body row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Danh sách sản phẩm</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered mb-0">
                                <thead>
                                <tr>
                                    <th>Tên</th>
                                    <th>Giá</th>
                                    <th>Cửa hàng</th>
                                    <th>Thiết lập</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                    foreach ($products as $item){?>
                                        <tr>
                                            <td><?=$item->product_name?></td>
                                            <td><?=$item->product_price?></td>
                                            <td><?=$item->shop_name?></td>
                                            <td>
                                                <div class="float-right">
                                                    <button type="button" class="btn btn-icon btn-outline-info btn-sm mr-1" data-target="#productDetail" data-toggle="modal" data-id="<?=$item->product_id?>"><i class="icon-note"></i></button>
                                                    <button type="button" class="btn btn-icon btn-outline-danger btn-sm mr-1"><i class="icon-trash"></i></button>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="float-right">
                            <?=$pagination?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade text-left" id="add-new-menu" role="dialog" aria-labelledby="myModalLabel17"
     aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel17">Thêm mới item menu</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="userinput1">Địa chỉ trang web</label>
                    <input type="text" class="form-control" id="shop_url" placeholder="Địa chỉ trang web">
                </div>
                <div class="form-group">
                    <label for="userinput1">*Vị trí cần lấy</label>
                    <input type="text" class="form-control" id="shop_page" value="0">
                </div>
                <div class="form-group">
                    <label for="category_parent_id">Chọn cửa hàng</label>
                    <select class="select2  form-control" id="shop_id" style="width: 100%!important;">
                        <?php
                        foreach ($shops as $item){?>
                            <option value="<?=$item->shop_id?>"><?=$item->shop_name?></option>
                        <?php }
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="category_parent_id">Chọn danh mục</label>
                    <select class="select2  form-control" id="category_id" style="width: 100%!important;">
                        <?php
                        foreach ($category as $item){?>
                            <option value="<?=$item->category_id?>"><?=$item->category_name?></option>
                        <?php }
                        ?>
                    </select>
                </div>
                (*) chỉ áp dụng cho phương thức Lazy Get Product
            </div>
            <div class="modal-footer">
                <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-outline-primary" onclick="getProduct()">Save changes</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="productDetail" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="productDetail">Chi tiết sản phẩm</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div id="content-product-detail"></div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<script>
    var socket = io.connect("http://localhost:4000")
    socket.on("CRAWLER", function (data) {
        toastr.success('Thành công!', 'Thêm '+data+" thành công",{"showMethod": "slideDown", "hideMethod": "slideUp", timeOut: 3000});
    })
    socket.on("idSocket", function (id) {
        $("#idUser").data("user-id", id)
        console.log(id)
    })
    function getProduct() {
        var form = {
            url: $("#shop_url").val(),
            page: $("#shop_page").val(),
            idCate: $("#category_id").val(),
            idShop: $("#shop_id").val(),
            idUser: $("#idUser").data("user-id")
        }
        $.post('<?=PRODUCTS_PRODUCT_TGDD?>', form, function (data) {
            if(data.status == 200){
                toastr.success('Thành công!', 'Thêm '+$("#shop_url").val()+" thành công",{"showMethod": "slideDown", "hideMethod": "slideUp", timeOut: 2000});
                setTimeout(function () {
                    window.location = "<?=PRODUCTS_PRODUCT?>"
                },5000)
            }else {
                toastr.error('Lỗi.', 'Có lỗi trong quá trình thêm: '+ data.toString());
            }
        })
    }
</script>