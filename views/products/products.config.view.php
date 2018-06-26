<?php
$BODY_CLASS = 'class="vertical-layout vertical-menu-modern 2-columns   menu-expanded fixed-navbar"
      data-open="click" data-menu="vertical-menu-modern" data-col="2-columns"';
$assetsCSS = '
            <link rel="stylesheet" type="text/css" href="' . BASE_URL . 'public/app-assets/vendors/css/tables/datatable/datatables.min.css">
            <link rel="stylesheet" type="text/css" href="' . BASE_URL . 'public/css/jsonTree.css">
            <link rel="stylesheet" type="text/css" href="' . BASE_URL . 'public/app-assets/css/core/colors/palette-tooltip.css">
            <script src="' . BASE_URL . 'public/js/jsonTree.js" type="text/javascript"></script>
            ';
$tempAssetsJS = '
           <script src="' . BASE_URL . 'public/app-assets/vendors/js/tables/datatable/datatables.min.js" type="text/javascript"></script>
           <script src="' . BASE_URL . 'public/app-assets/js/scripts/tooltip/tooltip.js" type="text/javascript"></script>
           ';
define("AssetsJS", $tempAssetsJS);
require_once(__SITE_PATH . "/views/assets/head.view.php");
require_once(__SITE_PATH . "/views/assets/side.nav.menu.php");
?>
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
                <h3 class="content-header-title mb-0 d-inline-block">Config</h3>
                <div class="row breadcrumbs-top d-inline-block">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Products</a>
                            </li>
                            <li class="breadcrumb-item active">Config
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="content-header-right col-md-6 col-12">
                <div class="float-md-right">
                    <div class="card float-right">
                        <div class="card-body tool-bar-action">
                            <a class="item text-center" href="<?= BASE_URL ?>products/add-new-config"><i
                                        class="la la-calendar-check-o"></i> Thêm mới</a>
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
                                if (count($configs) > 0) {
                                    ?>
                                    <table id="productsGroup" class="table table-bordered mb-0"
                                           style="width:100%">
                                        <thead>
                                        <tr>
                                            <th>Tên</th>
                                            <th>Phương thức</th>
                                            <th>Thiết lập</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        foreach ($configs as $item) {
                                            $config = explode(".", $item)[0];
                                            ?>
                                            <tr id="product-group-id-<?= $config ?>">
                                                <td><?= strtoupper(explode('-', $config)[0]) ?></td>
                                                <td><?= strtoupper(explode('-', $config)[1]) ?></td>
                                                <td class="text-right">
                                                    <div>
                                                        <button class="btn btn-info btn-sm"
                                                                onclick="showDetail('<?= $item ?>')">
                                                            Xem và sửa
                                                        </button>
                                                        <button class="btn btn-info btn-sm"
                                                                onclick="jsonViewer('<?= $item ?>')">
                                                            Raw
                                                        </button>
                                                        <button class="btn btn-danger btn-sm">
                                                            Xóa
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                        <?php }
                                        ?>
                                        </tbody>
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
<div class="modal fade text-left" id="view-config" role="dialog" aria-labelledby="myModalLabel17"
     aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel17">Chi tiết cấu hình</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div id="jsonViewer">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">Thoát</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade text-left" id="detail-config" role="dialog" aria-labelledby="myModalLabel17"
     aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel17">Chi tiết cấu hình</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= BASE_URL ?>products/update_config_handle" method="post">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12" style="margin-bottom: 16px">
                            <h2 class="content-header-title mb-0 d-inline-block text-bold-500">Chung</h2>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="projectinput1">Tên cấu hình</label>
                                <input type="text" id="name" class="form-control" placeholder="Name" name="name">
                            </div>
                            <div class="form-group" style="display: none">
                                <input type="text" id="nameConfig" name="nameConfig">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="projectinput2">Phương thức</label>
                                <select name="method" id="method" class="form-control">
                                    <option value="GET">GET</option>
                                    <option value="POST">POST</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="projectinput1"><span data-toggle="tooltip"
                                                                 data-placement="right"
                                                                 title=""
                                                                 data-original-title="Chỉ dành cho phương thức POST">(**)Địa chỉ Post data</span></label>
                                <input data-toggle="tooltip"
                                       data-placement="bottom"
                                       title="" data-original-title="Chỉ dành cho phương thức POST" type="text"
                                       id="urlPost" class="form-control" placeholder="Url Post" name="urlPost">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="projectinput1">Địa chỉ website (BASE URL)</label>
                                <input type="text" id="baseUrl" class="form-control" placeholder="Base Url"
                                       name="baseUrl">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="projectinput1">Class hoặc Id gốc</label>
                                <input type="text" id="dataCherrio" class="form-control"
                                       placeholder="Root id, class or tag" name="dataCherrio">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12" style="margin-bottom: 16px"><h2
                                    class="content-header-title mb-0 d-inline-block text-bold-500">Cấu hình mô tả sản
                                phẩm</h2></div>
                        <div class="col-md-6">
                            <h4 class="text-bold-500" for="projectinput1">Ngoại lệ (Undefined, quảng cáo..)</h4>
                            <div class="form-group">
                                <label for="projectinput2">Có hoặc không</label>
                                <select name="isUndefined_bool" id="isUndefined_bool" class="form-control">
                                    <option value="yes">Có</option>
                                    <option value="no">Không</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="projectinput2">Kiểu dữ liệu</label>
                                <select name="isUndefined_dataType" id="isUndefined_dataType" class="form-control">
                                    <option value="html">HTML</option>
                                    <option value="text">TEXT</option>
                                    <option value="attribs">ATTRIBS</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="projectinput2">Block con (Rỗng nếu không có)</label>
                                <p>Các class, id, tag cách nhau bởi dấu "|"</p>
                                <input type="text" id="isUndefined_children"
                                       class="form-control" placeholder="Children" name="isUndefined_children">
                            </div>
                            <div class="form-group">
                                <label for="projectinput2">Attribs (Rỗng nếu không có)</label>
                                <input type="text" id="isUndefined_attribs"
                                       class="form-control" placeholder="Attribs" name="isUndefined_attribs">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h4 class="text-bold-500" for="projectinput1">Tiêu đề</h4>
                            <div class="form-group">
                                <label for="projectinput2">Kiểu dữ liệu</label>
                                <select name="title_dataType" id="title_dataType" class="form-control">
                                    <option value="html">HTML</option>
                                    <option value="text">TEXT</option>
                                    <option value="attribs">ATTRIBS</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="projectinput2">Block con (Rỗng nếu không có)</label>
                                <p>Các class, id, tag cách nhau bởi dấu "|"</p>
                                <input type="text" id="title_children"
                                       class="form-control" placeholder="Children" name="title_children">
                            </div>
                            <div class="form-group">
                                <label for="projectinput2">Attribs (Rỗng nếu không có)</label>
                                <input type="text" id="title_attribs"
                                       class="form-control" placeholder="Attribs" name="title_attribs">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h4 class="text-bold-500" for="projectinput1">Liên kết</h4>
                            <div class="form-group">
                                <label for="projectinput2">Kiểu dữ liệu</label>
                                <select name="href_dataType" id="href_dataType" class="form-control">
                                    <option value="html">HTML</option>
                                    <option value="text">TEXT</option>
                                    <option value="attribs">ATTRIBS</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="projectinput2">Block con (Rỗng nếu không có)</label>
                                <p>Các class, id, tag cách nhau bởi dấu "|"</p>
                                <input type="text" id="href_children"
                                       class="form-control" placeholder="Children"
                                       name="href_children">
                            </div>
                            <div class="form-group">
                                <label for="projectinput2">Attribs (Rỗng nếu không có)</label>
                                <input type="text" id="href_attribs"
                                       class="form-control" placeholder="Attribs"
                                       name="href_attribs">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h4 class="text-bold-500" for="projectinput1">Giá</h4>
                            <div class="form-group">
                                <label for="projectinput2">Kiểu dữ liệu</label>
                                <select name="price_dataType" id="price_dataType" class="form-control">
                                    <option value="html">HTML</option>
                                    <option value="text">TEXT</option>
                                    <option value="attribs">ATTRIBS</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="projectinput2">Block con (Rỗng nếu không có)</label>
                                <p>Các class, id, tag cách nhau bởi dấu "|"</p>
                                <input type="text" id="price_children" class="form-control"
                                       placeholder="Children" name="price_children">
                            </div>
                            <div class="form-group">
                                <label for="projectinput2">Attribs (Rỗng nếu không có)</label>
                                <input type="text" id="price_attribs"
                                       class="form-control" placeholder="Attribs"
                                       name="price_attribs">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12" style="margin-bottom: 16px"><h2
                                    class="content-header-title mb-0 d-inline-block text-bold-500">Cấu hình chi tiết sản
                                phẩm</h2></div>
                        <div class="col-md-6">
                            <h4 class="text-bold-500" for="projectinput1">Hình ảnh</h4>
                            <div class="form-group">
                                <label for="projectinput2">Kiểu dữ liệu</label>
                                <select name="image_dataType" id="image_dataType" class="form-control">
                                    <option value="html">HTML</option>
                                    <option value="text">TEXT</option>
                                    <option value="attribs">ATTRIBS</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="projectinput2">Block con (Rỗng nếu không có)</label>
                                <p>Các class, id, tag cách nhau bởi dấu "|"</p>
                                <input type="text" id="image_children" class="form-control"
                                       placeholder="Children" name="image_children">
                            </div>
                            <div class="form-group">
                                <label for="projectinput2">Attribs (Rỗng nếu không có)</label>
                                <input type="text" id="image_attribs"
                                       class="form-control" placeholder="Attribs" name="image_attribs">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h4 class="text-bold-500" for="projectinput1">Hãng sản xuất</h4>
                            <div class="form-group">
                                <label for="projectinput2">Kiểu dữ liệu</label>
                                <select name="brand_dataType" id="brand_dataType" class="form-control">
                                    <option value="html">HTML</option>
                                    <option value="text">TEXT</option>
                                    <option value="attribs">ATTRIBS</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="projectinput2">Block con (Rỗng nếu không có)</label>
                                <p>Các class, id, tag cách nhau bởi dấu "|"</p>
                                <input type="text" id="brand_children"
                                       class="form-control" placeholder="Children"
                                       name="brand_children">
                            </div>
                            <div class="form-group">
                                <label for="projectinput2">Attribs (Rỗng nếu không có)</label>
                                <input type="text" id="brand_attribs"
                                       class="form-control" placeholder="Attribs"
                                       name="brand_attribs">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h4 class="text-bold-500" for="projectinput1">
                                <span data-toggle="tooltip"
                                      data-placement="top"
                                      title="" data-original-title="Cho phép rỗng">(*)Cấu hình</span></h4>
                            <div class="form-group">
                                <label for="projectinput2">Kiểu dữ liệu</label>
                                <select name="info_dataType" id="info_dataType" class="form-control">
                                    <option value="html">HTML</option>
                                    <option value="text">TEXT</option>
                                    <option value="attribs">ATTRIBS</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="projectinput2">Block con (Rỗng nếu không có)</label>
                                <p>Các class, id, tag cách nhau bởi dấu "|"</p>
                                <input type="text" id="info_children"
                                       class="form-control" placeholder="Children"
                                       name="info_children">
                            </div>
                            <div class="form-group">
                                <label for="projectinput2">Attribs (Rỗng nếu không có)</label>
                                <input type="text" id="info_attribs" class="form-control"
                                       placeholder="Attribs" name="info_attribs">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h4 class="text-bold-500" for="projectinput1">
                                <span data-toggle="tooltip"
                                      data-placement="top"
                                      title="" data-original-title="Cho phép rỗng">(*)Thông tin chi tiết</span>
                            </h4>
                            <div class="form-group">
                                <label for="projectinput2">Kiểu dữ liệu</label>
                                <select name="desc_dataType" id="desc_dataType" class="form-control">
                                    <option value="html">HTML</option>
                                    <option value="text">TEXT</option>
                                    <option value="attribs">ATTRIBS</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="projectinput2">Block con (Rỗng nếu không có)</label>
                                <p>Các class, id, tag cách nhau bởi dấu "|"</p>
                                <input type="text" id="desc_children"
                                       class="form-control" placeholder="Children"
                                       name="desc_children">
                            </div>
                            <div class="form-group">
                                <label for="projectinput2">Attribs (Rỗng nếu không có)</label>
                                <input data-toggle="tooltip"
                                       data-placement="bottom"
                                       title="" data-original-title="Ví dụ data-id" type="text"
                                       id="desc_attribs" class="form-control"
                                       placeholder="Attribs" name="desc_attribs">
                            </div>
                        </div>
                    </div>
                    <p>(*) Cho phép rỗng</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-outline-primary" id="btn-config-update">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="loading">
    <i class="la la-refresh"></i>
</div>
<script>
    function showDetail(configName) {
        $(".loading").addClass("active")
        $(".loading i").addClass("spinner")
        $.post('<?=PRODUCTS_DETAIL_CONFIG?>', {configName: configName}, function (result) {
            setTimeout(function () {
                $(".loading").removeClass("active")
                $("#loading i").removeClass("spinner")
                var config = JSON.parse(result)
                $("#name").val(config.name)
                $("#nameConfig").val(configName)
                $("#method").val(config.method).attr("selected", true)
                $("#urlPost").val(config.urlPost)
                $("#baseUrl").val(config.baseUrl)
                $("#dataCherrio").val(config.dataCherrio)

                $("#isUndefined_bool").val(config.item_dataCherrio.isUndefined.bool).attr("selected", true)
                $("#isUndefined_dataType").val(config.item_dataCherrio.isUndefined.dataType).attr("selected", true)
                $("#isUndefined_children").val(config.item_dataCherrio.isUndefined.children)
                $("#isUndefined_attribs").val(config.item_dataCherrio.isUndefined.attribs)

                $("#title_dataType").val(config.item_dataCherrio.title.dataType).attr("selected", true)
                $("#title_children").val(config.item_dataCherrio.title.children)
                $("#title_attribs").val(config.item_dataCherrio.title.attribs)

                $("#href_dataType").val(config.item_dataCherrio.href.dataType).attr("selected", true)
                $("#href_children").val(config.item_dataCherrio.href.children)
                $("#href_attribs").val(config.item_dataCherrio.href.attribs)

                $("#price_dataType").val(config.item_dataCherrio.price.dataType).attr("selected", true)
                $("#price_children").val(config.item_dataCherrio.price.children)
                $("#price_attribs").val(config.item_dataCherrio.price.attribs)

                $("#image_dataType").val(config.detail.image.dataType).attr("selected", true)
                $("#image_children").val(config.detail.image.children)
                $("#image_attribs").val(config.detail.image.attribs)

                $("#brand_dataType").val(config.detail.brand.dataType).attr("selected", true)
                $("#brand_children").val(config.detail.brand.children)
                $("#brand_attribs").val(config.detail.brand.attribs)

                $("#info_dataType").val(config.detail.info.dataType).attr("selected", true)
                $("#info_children").val(config.detail.info.children)
                $("#info_attribs").val(config.detail.info.attribs)

                $("#desc_dataType").val(config.detail.desc.dataType).attr("selected", true)
                $("#desc_children").val(config.detail.desc.children)
                $("#desc_attribs").val(config.detail.desc.attribs)

                $("#detail-config").modal('show')
            }, 2000)
        })
    }

    function jsonViewer(configName) {
        $("#jsonViewer").html("")
        $(".loading").addClass("active")
        $(".loading i").addClass("spinner")
        $.post('<?=PRODUCTS_DETAIL_CONFIG?>', {configName: configName}, function (result) {
            setTimeout(function () {
                $(".loading").removeClass("active")
                $("#loading i").removeClass("spinner")
                $("#view-config").modal('show')
                var wrapper = document.getElementById("jsonViewer");
                // Create json-tree
                var tree = jsonTree.create(JSON.parse(result), wrapper);
                // Expand all (or selected) child nodes of root (optional)
                tree.expand();
            }, 2000)
        })
    }
</script>