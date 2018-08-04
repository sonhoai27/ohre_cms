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
           $(".select2").select2();
           $("#tblUsers").DataTable()
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
                <h3 class="content-header-title mb-0 d-inline-block">Auth</h3>
                <div class="row breadcrumbs-top d-inline-block">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Auth</a>
                            </li>
                            <li class="breadcrumb-item active">User
                            </li>
                        </ol>
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
                                if (count($listUsers) > 0) {
                                    ?>
                                    <table class="table table-bordered mb-0"
                                           style="width:100%" id="tblUsers">
                                        <thead>
                                        <tr>
                                            <th>IP</th>
                                            <th>Vị trí</th>
                                            <th>Ngày truy cập</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        foreach ($listUsers as $item) {
                                            ?>
                                            <tr id="group-id-<?= $item->user_id ?>">
                                                <td><a href="<?=BASE_URL?>auth/detail_guest_user/<?=$item->user_id?>" style="display: inline-block;"><?= $item->user_IP ?></a></td>
                                                <td><?=$item->user_location?></td>
                                                <td><?=$item->user_created_date?></td>
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