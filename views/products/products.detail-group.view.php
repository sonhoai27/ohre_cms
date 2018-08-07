<?php
$BODY_CLASS = 'class="vertical-layout vertical-menu-modern 2-columns   menu-expanded fixed-navbar"
      data-open="click" data-menu="vertical-menu-modern" data-col="2-columns"';
$assetsCSS = '
            <link rel="stylesheet" type="text/css" href="'.BASE_URL.'public/app-assets/vendors/css/extensions/toastr.css">
            <link rel="stylesheet" type="text/css" href="'.BASE_URL.'public/app-assets/css/plugins/extensions/toastr.css">
            <link rel="stylesheet" type="text/css" href="'.BASE_URL.'public/app-assets/vendors/css/tables/datatable/datatables.min.css">
            ';
$tempAssetsJS = '
            <script src="'.BASE_URL.'public/app-assets/vendors/js/tables/datatable/datatables.min.js" type="text/javascript"></script>
            <script src="'.BASE_URL.'public/app-assets/vendors/js/extensions/toastr.min.js" type="text/javascript"></script>
            <script src="'.BASE_URL.'public/app-assets/js/scripts/extensions/toastr.js" type="text/javascript"></script>
            <script>
                $("#productsGroup").DataTable();
            </script>
            ';
define("AssetsJS", $tempAssetsJS);
require_once(__SITE_PATH . "/views/assets/head.view.php");
require_once(__SITE_PATH . "/views/assets/side.nav.menu.php");
?>
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
                <h3 class="content-header-title mb-0 d-inline-block">Detail Group</h3>
                <div class="row breadcrumbs-top d-inline-block">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?= PRODUCTS_GROUP ?>">Groups</a>
                            </li>
                            <li class="breadcrumb-item active">Detail Group - <span id="id-product-group"
                                                                                    data-id="<?= $detailGroup->group_product_id ?>"><?= $detailGroup->group_product_name ?></span>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="content-header-right col-md-6 col-12">
                <div class="float-md-right">
                    <div class="card float-right">
                        <div class="card-body tool-bar-action">
                            <a data-toggle="modal" data-target="#add-new-group" class="item text-center" href="#"><i
                                        class="la la-calendar-check-o"></i> Thêm sản phẩm</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-body row">
            <div class="col-12">
                <div class="card">
                    <div class="row">
                        <div class="col-12">
                            <div class="table-responsive">
                                <?php
                                if (count($productsGroup) > 0) {
                                    ?>
                                    <table id="productsGroup" class="table table-bordered mb-0"
                                           style="width:100%">
                                        <thead>
                                        <tr>
                                            <th>Hình sản phẩm</th>
                                            <th>Tên sản phẩm</th>
                                            <th>Cửa hàng</th>
                                            <th>Giá</th>
                                            <th>Thiết lập</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        foreach ($productsGroup as $item) {
                                            ?>
                                            <tr id="product-group-id-<?= $item->detail_gp_id ?>">
                                                <td style="text-align: center;"><img class="img-fluid"
                                                                                     src="<?= BASE_URL ?>index/load-image?src=<?= $item->product_avatar ?>">
                                                </td>
                                                <td><?= $item->product_name ?></td>
                                                <td><?= $item->shop_name ?></td>
                                                <td><?= $item->product_price ?></td>
                                                <td>
                                                    <button class="btn btn-danger btn-sm"
                                                            onclick="removeProductFromGroup(<?= $item->detail_gp_id ?>,<?= $item->product_id ?>)">
                                                        Xóa
                                                    </button>
                                                </td>
                                            </tr>
                                        <?php }
                                        ?>
                                        </tbody>
                                        <tfoot>
                                        <tr>
                                            <th>Hình sản phẩm</th>
                                            <th>Tên sản phẩm</th>
                                            <th>Cửa hàng</th>
                                            <th>Giá</th>
                                            <th>Thiết lập</th>
                                        </tr>
                                        </tfoot>
                                    </table>
                                <?php } else { ?>
                                    <img src="<?= BASE_URL ?>public/images/cdn/empty_state.png" alt=""
                                         id="img-search-product-group" class="img-fluid"
                                         style="display: block;margin: auto">
                                <?php }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade text-left" id="add-new-group" role="dialog" aria-labelledby="myModalLabel17"
     data-backdrop="static" data-keyboard="false"
     aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header" style="align-items: center">
                <h4 class="modal-title" style="flex: 3" id="myModalLabel17">Thêm sản phẩm vào nhóm</h4>
                <input style="flex: 3" type="text" class="form-control" onkeyup="searchProductForGroup()"
                       id="product_name" name="group_name" placeholder="Tên sản phẩm">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="dataTableGroupSearchProduct">
                <img src="<?= BASE_URL ?>public/images/cdn/empty_state.png" alt="" id="img-search-product-group"
                     class="img-fluid" style="display: block;margin: auto">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<script>
    function addToGroup(idProduct) {
        if ($("#data-id-" + idProduct).data("click") === "off") {
            $("#data-id-" + idProduct).css({
                textDecoration: 'line-through'
            })
            $.post("<?=BASE_URL?>products/add-product-group-handle", {
                idGroup: $("#id-product-group").data("id"),
                idProduct: idProduct
            }, function (resultAdd) {
                console.log(resultAdd)
                var tempAdd = JSON.parse(JSON.parse(resultAdd))
                if (tempAdd.message === "OK") {
                    $("#data-id-" + idProduct).data("click", "on")
                    toastr.success('Thành công!', 'Thêm ' + $("#data-id-" + idProduct).text() + " thành công.", {
                        "showMethod": "slideDown",
                        "hideMethod": "slideUp",
                        timeOut: 1000
                    });
                } else {
                    toastr.error('Thất bại!', 'Thêm ' + $("#data-id-" + idProduct).text() + " thất bại. Duplicate Key", {
                        "showMethod": "slideDown",
                        "hideMethod": "slideUp",
                        timeOut: 1000
                    });
                }
            })
        } else {
            $.post("<?=BASE_URL?>products/delete-product-group-handle", {
                idGroup: $("#id-product-group").data("id"),
                idProduct: idProduct
            }, function (resultAdd) {
                console.log(resultAdd)
                var tempAdd = (JSON.parse(resultAdd))
                if (tempAdd.message === "OK") {
                    $("#data-id-" + idProduct).css({
                        textDecoration: 'unset'
                    })
                    $("#data-id-" + idProduct).data("click", "off")
                    toastr.warning('Thành công!', 'Xóa ' + $("#data-id-" + idProduct).text() + " thành công.", {
                        "showMethod": "slideDown",
                        "hideMethod": "slideUp",
                        timeOut: 1000
                    });
                } else {
                    toastr.error('Thất bại!', 'Xóa ' + $("#data-id-" + idProduct).text() + " thất bại.", {
                        "showMethod": "slideDown",
                        "hideMethod": "slideUp",
                        timeOut: 1000
                    });
                }
            })
        }
    }

    function removeProductFromGroup(idProductDetail, idProduct) {
        $.post("<?=BASE_URL?>products/delete-product-group-handle", {
            idGroup: $("#id-product-group").data("id"),
            idProduct: idProduct
        }, function (resultAdd) {
            var tempAdd = (JSON.parse(resultAdd))
            if (tempAdd.message === "OK") {
                $("#product-group-id-" + idProductDetail).remove()
                toastr.warning('Thành công!', 'Xóa ' + $("#data-id-" + idProduct).text() + " thành công.", {
                    "showMethod": "slideDown",
                    "hideMethod": "slideUp",
                    timeOut: 1000
                });
            } else {
                toastr.error('Thất bại!', 'Xóa ' + $("#data-id-" + idProduct).text() + " thất bại.", {
                    "showMethod": "slideDown",
                    "hideMethod": "slideUp",
                    timeOut: 1000
                });
            }
        })
    }

</script>
