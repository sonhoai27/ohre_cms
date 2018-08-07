<?php
$BODY_CLASS = 'class="vertical-layout vertical-menu-modern 2-columns   menu-expanded fixed-navbar"
      data-open="click" data-menu="vertical-menu-modern" data-col="2-columns"';
$assetsCSS = '
            <link rel="stylesheet" type="text/css" href="'.BASE_URL.'public/app-assets/vendors/css/extensions/toastr.css">
            <link rel="stylesheet" type="text/css" href="'.BASE_URL.'public/app-assets/css/plugins/extensions/toastr.css">
            <link rel="stylesheet" type="text/css" href="'.BASE_URL.'public/app-assets/vendors/css/forms/selects/select2.min.css">
            ';
$tempAssetsJS = '
           <script src="'.BASE_URL.'public/app-assets/vendors/js/forms/select/select2.full.min.js" type="text/javascript"></script>
           <script src="'.BASE_URL.'public/app-assets/vendors/js/extensions/toastr.min.js" type="text/javascript"></script>
           <script src="'.BASE_URL.'public/app-assets/js/scripts/extensions/toastr.js" type="text/javascript"></script>
           ';
define("AssetsJS", $tempAssetsJS);
$TITLE = "Quản lý cửa hàng";
require_once(__SITE_PATH . "/views/assets/head.view.php");
require_once(__SITE_PATH . "/views/assets/side.nav.menu.php");
?>
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
                <h3 class="content-header-title mb-0 d-inline-block">Shop</h3>
                <div class="row breadcrumbs-top d-inline-block">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Danh Mục</a>
                            </li>
                            <li class="breadcrumb-item active">Shop
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="content-header-right col-md-6 col-12">
                <div class="float-md-right">
                    <div class="card float-right">
                        <div class="card-body tool-bar-action">
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
                        <h4 class="card-title">Danh sách cửa hàng</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered mb-0">
                                <thead>
                                <tr>
                                    <th>Tên cửa hàng</th>
                                    <th>Alias</th>
                                    <th>Địa chỉ cửa hàng</th>
                                    <th>Cover</th>
                                    <td>Thiết lập</td>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                    foreach ($shops as $item){?>
                                        <tr>
                                            <td><a href="<?=BASE_URL?>category/detail_shop/<?=$item->shop_id?>"><?=$item->shop_name?></a></td>
                                            <td><?=$item->shop_alias?></td>
                                            <td><?=$item->shop_url?></td>
                                            <td>
                                                <img src="<?=RESOURCE?><?=$item->shop_avatar?>" alt="avatar" width="64px">
                                            </td>
                                            <td>
                                                <div class="float-right">
                                                    <button type="button"
                                                            onclick="deleteShop(<?=$item->shop_id?>)"
                                                            class="btn btn-icon btn-outline-danger btn-sm mr-1">
                                                        <i class="icon-trash"></i></button>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php }?>
                                </tbody>
                            </table>
                        </div>
                        <div class="float-right">
                            <ul class="pagination">
                                <li class="paginate_button page-item previous">
                                    <a href="#" class="page-link">Previous</a>
                                </li>

                                <li class="paginate_button page-item ">
                                    <a href="#" class="page-link">1</a>
                                </li>
                                <li class="paginate_button page-item next">
                                    <a href="#" class="page-link">Next</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade text-left" id="add-new-menu" tabindex="-1" role="dialog" aria-labelledby="myModalLabel17"
     aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel17">Thêm mới cửa hàng</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="projectinput1">Tên cửa hàng</label>
                            <input type="text" id="shop_name" onkeyup="makeAlias('shop_name', 'shop_alias')" class="form-control" placeholder="First Name" name="fname">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="projectinput2">Alias</label>
                            <input type="text" id="shop_alias" class="form-control" placeholder="Last Name" name="lname">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="projectinput1">Địa chỉ cửa hành</label>
                    <input type="text" id="shop_url" class="form-control" placeholder="https://" name="fname">
                </div>
                <div class="form-group">
                    <label for="userinput1">Hình ảnh</label>
                    <input type="file" class="form-control" id="shop_avatar">
                </div>
                * URL API do developer cung cấp
            </div>
            <div class="modal-footer">
                <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-outline-primary" onclick="addNewShop()">Save changes</button>
            </div>
        </div>
    </div>
</div>
<div class="cd-popup" role="alert">
    <div class="cd-popup-container">
        <p>Bạn có muốn xoá?</p>
        <ul class="cd-buttons">
            <li><a id="yesDeleteShop">Có</a></li>
            <li><a onclick="noDelete()">Không</a></li>
        </ul>
        <a href="#0" class="cd-popup-close img-replace"></a>
    </div>
</div>
<script>
    function addNewShop() {
        var form = new FormData();
        var fileData = $("#shop_avatar").prop("files")[0]
        form.append("image", fileData);
        form.append("shop_name", $("#shop_name").val());
        form.append("shop_alias", $("#shop_alias").val());
        form.append("shop_url", $("#shop_url").val());

        var settings = {
            "async": true,
            "crossDomain": true,
            "url": "http://localhost:4000/api/v1/shop/",
            "method": "POST",
            "headers": {
                "Cache-Control": "no-cache",
            },
            "processData": false,
            "contentType": false,
            "mimeType": "multipart/form-data",
            "data": form
        }

        $.ajax(settings).done(function (response) {
            if(JSON.parse(response).message ==="OK"){
                toastr.success('Thành công!', 'Thêm cửa hàng '+$("#shop_name").val()+" thành công",{"showMethod": "slideDown", "hideMethod": "slideUp", timeOut: 2000});
                setTimeout(function () {
                    window.location = "<?=CATEGORY_SHOP?>"
                },2000)
            }else {
                toastr.error('Lỗi.', 'Có lỗi trong quá trình thêm: '+ response.toString());
            }
        });
    }
</script>
<script>
    function deleteShop(id) {
        $('.cd-popup').addClass('is-visible');
        $("#yesDeleteShop").attr('onclick', 'yesDelete('+id+')');

    }

    jQuery(document).ready(function($){
        $('.cd-popup').on('click', function(event){
            if( $(event.target).is('.cd-popup-close') || $(event.target).is('.cd-popup') ) {
                event.preventDefault();
                $(this).removeClass('is-visible');
            }
        });
    });
    function yesDelete(id) {
        $.post(BASE_URL+'category/delete_shop', {id: id}, function (data) {
            console.log(data.trim())
            if(data.trim() == 200){
                toastr.success('Thành công!', 'Xoá thành công',{"showMethod": "slideDown", "hideMethod": "slideUp", timeOut: 2000})
                setTimeout(function () {
                    window.location.href = BASE_URL+'category/shop'
                },2000)
            }else if(data.trim() == 403){
                toastr.error('Thất bại!', 'Lỗi khoá ngoại!',{"showMethod": "slideDown", "hideMethod": "slideUp", timeOut: 2000})
                setTimeout(function () {
                    window.location.href = BASE_URL+'category/shop'
                },2000)
            }
        })
    }
    function noDelete() {
        $('.cd-popup').removeClass('is-visible');
    }
</script>