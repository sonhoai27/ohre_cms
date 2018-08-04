<?php
$BODY_CLASS = 'class="vertical-layout vertical-menu-modern 2-columns   menu-expanded fixed-navbar"
      data-open="click" data-menu="vertical-menu-modern" data-col="2-columns"';
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
                            <li class="breadcrumb-item">Shop
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
                        <h4 class="card-title">Danh sách cửa hàng</h4>
                    </div>
                    <div class="card-body">
                        <form action="<?=BASE_URL?>category/handle_update_shop" method="post">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="projectinput1">Tên cửa hàng</label>
                                        <input type="text" id="shop_name" onkeyup="makeAlias('shop_name', 'shop_alias')"
                                               class="form-control" value="<?= $shop->shop_name ?>" name="shop_name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="projectinput2">Alias</label>
                                        <input type="text" id="shop_alias" class="form-control"
                                               value="<?= $shop->shop_alias ?>"
                                               name="shop_alias">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="projectinput1">Địa chỉ cửa hành</label>
                                <input type="text" id="shop_url" class="form-control" value="<?= $shop->shop_url ?>"
                                       name="shop_url">
                            </div>
                            <input type="text" style="display: none;" value="<?= $shop->shop_id ?>" name="shop_id">
                            <button type="submit" class="btn btn-info">Lưu</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>