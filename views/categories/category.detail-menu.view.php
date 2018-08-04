<?php
$BODY_CLASS = 'class="vertical-layout vertical-menu-modern 2-columns   menu-expanded fixed-navbar"
      data-open="click" data-menu="vertical-menu-modern" data-col="2-columns"';
$assetsCSS = '
            <link rel="stylesheet" type="text/css" href="' . BASE_URL . 'public/app-assets/vendors/css/extensions/toastr.css">
            <link rel="stylesheet" type="text/css" href="' . BASE_URL . 'public/app-assets/css/plugins/extensions/toastr.css">
            <link rel="stylesheet" type="text/css" href="' . BASE_URL . 'public/app-assets/vendors/css/forms/selects/select2.min.css">
            <link rel="stylesheet" type="text/css" href="' . BASE_URL . 'public/app-assets/vendors/css/tables/datatable/datatables.min.css">
            ';
$tempAssetsJS = '
            <script src="' . BASE_URL . 'public/app-assets/vendors/js/tables/datatable/datatables.min.js" type="text/javascript"></script>
            <script src="' . BASE_URL . 'public/app-assets/vendors/js/extensions/toastr.min.js" type="text/javascript"></script>
            <script src="' . BASE_URL . 'public/app-assets/js/scripts/extensions/toastr.js" type="text/javascript"></script>
            <script src="' . BASE_URL . 'public/app-assets/vendors/js/forms/select/select2.full.min.js" type="text/javascript"></script>
            <script>
                $(".select2").select2();
                $("#tblMenu").DataTable()
                $(".select2").val('.$currentIdMenu.').trigger("change.select2");
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
                <h3 class="content-header-title mb-0 d-inline-block">Menu</h3>
                <div class="row breadcrumbs-top d-inline-block">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Danh Mục</a>
                            </li>
                            <li class="breadcrumb-item active">Detail
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-body row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Chi tiết menu</h4>
                    </div>
                    <div class="card-body">
                        <form action="<?=BASE_URL?>category/handle_update_menu" method="post">
                            <div class="form-group">
                                <label for="userinput1">Tên Menu</label>
                                <input type="text" id="category_name" class="form-control border-primary"
                                       onkeyup="makeAlias('category_name','category_alias')" value="<?=$detail->category_name?>" name="category_name">
                            </div>
                            <div class="form-group">
                                <label for="userinput1">Alias Menu</label>
                                <input type="text" class="form-control" name="category_alias" value="<?=$detail->category_alias?>" id="category_alias">
                            </div>
                            <input type="text" style="display: none;" name="category_id" value="<?=$detail->category_id?>">
                            <div class="form-group">
                                <label for="category_parent_id">Chọn Item Cha</label>
                                <select class="select2  form-control" id="category_parent_id" name="category_parent_id"
                                        style="width: 100%!important;">
                                    <option value="">--| Không có</option>
                                    <?php
                                    foreach ($menus as $item) {
                                        ?>
                                        <option value="<?= $item->category_id ?>" <?=$item->category_id == 15 ? 'active' : ''?>>
                                            <?= $item->category_name ?>
                                        </option>
                                    <?php }
                                    ?>
                                </select>
                            </div>
                            <div class="text-right">
                                <button type="submit" class="btn btn-info">Lưu lại</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
