<?php
$BODY_CLASS = 'class="vertical-layout vertical-menu-modern 2-columns   menu-expanded fixed-navbar"
      data-open="click" data-menu="vertical-menu-modern" data-col="2-columns"';
require_once(__SITE_PATH . "/views/assets/head.view.php");
require_once(__SITE_PATH . "/views/assets/side.nav.menu.php");
?>
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
                <h3 class="content-header-title mb-0 d-inline-block">Status</h3>
                <div class="row breadcrumbs-top d-inline-block">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Danh Mục</a>
                            </li>
                            <li class="breadcrumb-item active">Status
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
                        <h4 class="card-title">Chi tiết trạng thái</h4>
                    </div>
                    <div class="card-body">
                        <form action="<?=BASE_URL?>category/update_status" method="post">
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="userinput1">Tên trạng thái</label>
                                    <input type="text" id="status_name"
                                           class="form-control border-primary"
                                           value="<?=$status->status_name?>" name="status_name">
                                    <input type="text" style="display: none;"
                                           value="<?=$status->status_id?>" name="status_id">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">Tắt</button>
                                <button type="submit" class="btn btn-outline-primary">Lưu lại</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>