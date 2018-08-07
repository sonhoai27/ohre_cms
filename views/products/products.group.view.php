<?php
$BODY_CLASS = 'class="vertical-layout vertical-menu-modern 2-columns   menu-expanded fixed-navbar"
      data-open="click" data-menu="vertical-menu-modern" data-col="2-columns"';
$assetsCSS = '
            <link rel="stylesheet" type="text/css" href="'.BASE_URL.'public/app-assets/vendors/css/forms/selects/select2.min.css">
            <link rel="stylesheet" type="text/css" href="'.BASE_URL.'public/app-assets/vendors/css/tables/datatable/datatables.min.css">
            ';
$tempAssetsJS = '
           <script src="'.BASE_URL.'public/app-assets/vendors/js/tables/datatable/datatables.min.js" type="text/javascript"></script>
           <script src="'.BASE_URL.'public/app-assets/vendors/js/forms/select/select2.full.min.js" type="text/javascript"></script>
           <script>
            $("#tblListGroupProduct").DataTable()
            $(".select2").select2();
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
                <h3 class="content-header-title mb-0 d-inline-block">Group</h3>
                <div class="row breadcrumbs-top d-inline-block">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Products</a>
                            </li>
                            <li class="breadcrumb-item active">Group
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
                                if (count($groups) > 0) {
                                    ?>
                                    <table class="table table-bordered mb-0" id="tblListGroupProduct"
                                           style="width:100%">
                                        <thead>
                                        <tr>
                                            <th>Hình nhóm</th>
                                            <th>Tên nhóm</th>
                                            <th>Ngày tạo</th>
                                            <th>Thiết lập</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        foreach ($groups as $item) {
                                            ?>
                                            <tr id="group-id-<?= $item->group_product_id ?>">
                                                <td>
                                                    <img class="media-object rounded-circle"
                                                         src="<?= BASE_URL ?>/public/images/cdn/avatar-s-11.png"
                                                         alt="Generic placeholder image"
                                                         style="width: 48px;height: 48px;">
                                                </td>
                                                <td><a href="<?=BASE_URL?>products/detail-group/<?=$item->group_product_alias?>" style="display: inline-block;"><?= $item->group_product_name ?></a></td>
                                                <td><?= date( "d-m-Y",strtotime($item->group_product_created_date))?></td>
                                                <td>
                                                    <button class="btn btn-danger btn-sm"
                                                            onclick="removeGroup(<?= $item->group_product_id ?>)">
                                                        Xóa
                                                    </button>
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
<div class="modal fade text-left" id="add-new-group" role="dialog" aria-labelledby="myModalLabel17"
     aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel17">Thêm mới nhóm sản phẩm</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= BASE_URL ?>products/add_group_handle" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="userinput1">Tên nhóm</label>
                        <input type="text" class="form-control" onkeyup="makeAlias('group_name', 'group_alias')"
                               id="group_name" name="group_name" placeholder="Tên nhóm">
                    </div>
                    <div class="form-group">
                        <label for="userinput1">Alias nhóm</label>
                        <input type="text" class="form-control" name="group_alias" id="group_alias"
                               placeholder="Tên nhóm">
                    </div>
                    <div class="form-group">
                        <label for="category_parent_id">Chọn trạng thái</label>
                        <select class="select2  form-control" name="group_status" style="width: 100%!important;">
                            <?php
                            foreach ($status as $item) {
                                ?>
                                <option value="<?= $item->status_id ?>"><?= $item->status_name ?></option>
                            <?php }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-outline-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>
