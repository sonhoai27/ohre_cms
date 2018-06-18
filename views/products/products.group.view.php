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
                        <div class="col-sm-4" style="padding-right: 0;">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Tìm kiếm các nhóm sản phẩm"
                                       aria-describedby="button-addon2">
                            </div>
                            <div class="list-group-product" style="width: 100%;overflow-y: scroll;height: 409px">
                                <div class="media-list list-group">
                                    <div class="list-group-item list-group-item-action media">
                                        <a class="media-link" href="#">
                                              <span class="media-left">
                                                <img class="media-object rounded-circle"
                                                     src="<?= BASE_URL ?>/public/images/cdn/avatar-s-11.png"
                                                     alt="Generic placeholder image" style="width: 48px;height: 48px;">
                                              </span>
                                            <span class="media-body">
                                                Dapibus ac facilisis in
                                                <br>
                                                <span class="grey">CEO</span>
                                              </span>
                                        </a>
                                    </div>
                                    <div class="list-group-item list-group-item-action media">
                                        <a class="media-link" href="#">
                                              <span class="media-left">
                                                <img class="media-object rounded-circle"
                                                     src="<?= BASE_URL ?>/public/images/cdn/avatar-s-11.png"
                                                     alt="Generic placeholder image" style="width: 48px;height: 48px;">
                                              </span>
                                            <span class="media-body">
                                                Cras sit amet nibh libero
                                                <br>
                                                <span class="grey">PM</span>
                                              </span>
                                        </a>
                                    </div>
                                    <div class="list-group-item list-group-item-action media">
                                        <a class="media-link" href="#">
                                              <span class="media-left">
                                                <img class="media-object rounded-circle"
                                                     src="<?= BASE_URL ?>/public/images/cdn/avatar-s-11.png"
                                                     alt="Generic placeholder image" style="width: 48px;height: 48px;">
                                              </span>
                                            <span class="media-body">
                                                Porta ac consectetur ac
                                                <br>
                                                <span class="grey">CS</span>
                                              </span>
                                        </a>
                                    </div>
                                    <div class="list-group-item list-group-item-action media">
                                        <a class="media-link" href="#">
                                              <span class="media-left">
                                                <img class="media-object rounded-circle"
                                                     src="<?= BASE_URL ?>/public/images/cdn/avatar-s-11.png"
                                                     alt="Generic placeholder image" style="width: 48px;height: 48px;">
                                              </span>
                                            <span class="media-body">
                                                Vestibulum at eros
                                                <br>
                                                <span class="grey">MD</span>
                                              </span>
                                        </a>
                                    </div>
                                    <div class="list-group-item list-group-item-action media">
                                        <a class="media-link" href="#">
                                              <span class="media-left">
                                                <img class="media-object rounded-circle"
                                                     src="<?= BASE_URL ?>/public/images/cdn/avatar-s-11.png"
                                                     alt="Generic placeholder image" style="width: 48px;height: 48px;">
                                              </span>
                                            <span class="media-body">
                                                Vestibulum at eros
                                                <br>
                                                <span class="grey">MD</span>
                                              </span>
                                        </a>
                                    </div>
                                    <div class="list-group-item list-group-item-action media">
                                        <a class="media-link" href="#">
                                              <span class="media-left">
                                                <img class="media-object rounded-circle"
                                                     src="<?= BASE_URL ?>/public/images/cdn/avatar-s-11.png"
                                                     alt="Generic placeholder image" style="width: 48px;height: 48px;">
                                              </span>
                                            <span class="media-body">
                                                Vestibulum at eros
                                                <br>
                                                <span class="grey">MD</span>
                                              </span>
                                        </a>
                                    </div>
                                    <div class="list-group-item list-group-item-action media">
                                        <a class="media-link" href="#">
                                              <span class="media-left">
                                                <img class="media-object rounded-circle"
                                                     src="<?= BASE_URL ?>/public/images/cdn/avatar-s-11.png"
                                                     alt="Generic placeholder image" style="width: 48px;height: 48px;">
                                              </span>
                                            <span class="media-body">
                                                Vestibulum at eros
                                                <br>
                                                <span class="grey">MD</span>
                                              </span>
                                        </a>
                                    </div>
                                    <div class="list-group-item list-group-item-action media">
                                        <a class="media-link" href="#">
                                              <span class="media-left">
                                                <img class="media-object rounded-circle"
                                                     src="<?= BASE_URL ?>/public/images/cdn/avatar-s-11.png"
                                                     alt="Generic placeholder image" style="width: 48px;height: 48px;">
                                              </span>
                                            <span class="media-body">
                                                Vestibulum at eros
                                                <br>
                                                <span class="grey">MD</span>
                                              </span>
                                        </a>
                                    </div>
                                    <div class="list-group-item list-group-item-action media">
                                        <a class="media-link" href="#">
                                              <span class="media-left">
                                                <img class="media-object rounded-circle"
                                                     src="<?= BASE_URL ?>/public/images/cdn/avatar-s-11.png"
                                                     alt="Generic placeholder image" style="width: 48px;height: 48px;">
                                              </span>
                                            <span class="media-body">
                                                Vestibulum at eros
                                                <br>
                                                <span class="grey">MD</span>
                                              </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4" style="padding-left: 0;padding-right: 0">
                            <div class="list-product-of-group" style="width: 100%; overflow-y: scroll; height: 450px">
                                <div class="media-list list-group">
                                    <div class="list-group-item list-group-item-action media">
                                        <div>
                                              <span class="media-left">
                                                <img class="media-object rounded-circle"
                                                     src="<?= BASE_URL ?>/public/images/cdn/avatar-s-11.png"
                                                     alt="Generic placeholder image" style="width: 48px;height: 48px;">
                                              </span>
                                            <span class="media-body">
                                                <h4 class="list-group-item-heading">List group item heading</h4>
                                                <span class="list-group-item-text">
                                                    Donec id elit non mi porta gravida at eget metus. Maecenas
                                                    sed diam eget risus varius blandit.
                                                </span>
                                              </span>
                                        </div>
                                    </div>
                                    <div class="list-group-item list-group-item-action media">
                                        <div>
                                              <span class="media-left">
                                                <img class="media-object rounded-circle"
                                                     src="<?= BASE_URL ?>/public/images/cdn/avatar-s-11.png"
                                                     alt="Generic placeholder image" style="width: 48px;height: 48px;">
                                              </span>
                                            <span class="media-body">
                                                <h4 class="list-group-item-heading">List group item heading</h4>
                                                <span class="list-group-item-text">
                                                    Donec id elit non mi porta gravida at eget metus. Maecenas
                                                    sed diam eget risus varius blandit.
                                                </span>
                                              </span>
                                        </div>
                                    </div>
                                    <div class="list-group-item list-group-item-action media">
                                        <div>
                                              <span class="media-left">
                                                <img class="media-object rounded-circle"
                                                     src="<?= BASE_URL ?>/public/images/cdn/avatar-s-11.png"
                                                     alt="Generic placeholder image" style="width: 48px;height: 48px;">
                                              </span>
                                            <span class="media-body">
                                                <h4 class="list-group-item-heading">List group item heading</h4>
                                                <span class="list-group-item-text">
                                                    Donec id elit non mi porta gravida at eget metus. Maecenas
                                                    sed diam eget risus varius blandit.
                                                </span>
                                              </span>
                                        </div>
                                    </div>
                                    <div class="list-group-item list-group-item-action media">
                                        <div>
                                              <span class="media-left">
                                                <img class="media-object rounded-circle"
                                                     src="<?= BASE_URL ?>/public/images/cdn/avatar-s-11.png"
                                                     alt="Generic placeholder image" style="width: 48px;height: 48px;">
                                              </span>
                                            <span class="media-body">
                                                <h4 class="list-group-item-heading">List group item heading</h4>
                                                <span class="list-group-item-text">
                                                    Donec id elit non mi porta gravida at eget metus. Maecenas
                                                    sed diam eget risus varius blandit.
                                                </span>
                                              </span>
                                        </div>
                                    </div>
                                    <div class="list-group-item list-group-item-action media">
                                        <div>
                                              <span class="media-left">
                                                <img class="media-object rounded-circle"
                                                     src="<?= BASE_URL ?>/public/images/cdn/avatar-s-11.png"
                                                     alt="Generic placeholder image" style="width: 48px;height: 48px;">
                                              </span>
                                            <span class="media-body">
                                                <h4 class="list-group-item-heading">List group item heading</h4>
                                                <span class="list-group-item-text">
                                                    Donec id elit non mi porta gravida at eget metus. Maecenas
                                                    sed diam eget risus varius blandit.
                                                </span>
                                              </span>
                                        </div>
                                    </div>
                                    <div class="list-group-item list-group-item-action media">
                                        <div>
                                              <span class="media-left">
                                                <img class="media-object rounded-circle"
                                                     src="<?= BASE_URL ?>/public/images/cdn/avatar-s-11.png"
                                                     alt="Generic placeholder image" style="width: 48px;height: 48px;">
                                              </span>
                                            <span class="media-body">
                                                <h4 class="list-group-item-heading">List group item heading</h4>
                                                <span class="list-group-item-text">
                                                    Donec id elit non mi porta gravida at eget metus. Maecenas
                                                    sed diam eget risus varius blandit.
                                                </span>
                                              </span>
                                        </div>
                                    </div>
                                    <div class="list-group-item list-group-item-action media">
                                        <div>
                                              <span class="media-left">
                                                <img class="media-object rounded-circle"
                                                     src="<?= BASE_URL ?>/public/images/cdn/avatar-s-11.png"
                                                     alt="Generic placeholder image" style="width: 48px;height: 48px;">
                                              </span>
                                            <span class="media-body">
                                                <h4 class="list-group-item-heading">List group item heading</h4>
                                                <span class="list-group-item-text">
                                                    Donec id elit non mi porta gravida at eget metus. Maecenas
                                                    sed diam eget risus varius blandit.
                                                </span>
                                              </span>
                                        </div>
                                    </div>
                                    <div class="list-group-item list-group-item-action media">
                                        <div>
                                              <span class="media-left">
                                                <img class="media-object rounded-circle"
                                                     src="<?= BASE_URL ?>/public/images/cdn/avatar-s-11.png"
                                                     alt="Generic placeholder image" style="width: 48px;height: 48px;">
                                              </span>
                                            <span class="media-body">
                                                <h4 class="list-group-item-heading">List group item heading</h4>
                                                <span class="list-group-item-text">
                                                    Donec id elit non mi porta gravida at eget metus. Maecenas
                                                    sed diam eget risus varius blandit.
                                                </span>
                                              </span>
                                        </div>
                                    </div>
                                    <div class="list-group-item list-group-item-action media">
                                        <div>
                                              <span class="media-left">
                                                <img class="media-object rounded-circle"
                                                     src="<?= BASE_URL ?>/public/images/cdn/avatar-s-11.png"
                                                     alt="Generic placeholder image" style="width: 48px;height: 48px;">
                                              </span>
                                            <span class="media-body">
                                                <h4 class="list-group-item-heading">List group item heading</h4>
                                                <span class="list-group-item-text">
                                                    Donec id elit non mi porta gravida at eget metus. Maecenas
                                                    sed diam eget risus varius blandit.
                                                </span>
                                              </span>
                                        </div>
                                    </div>
                                    <div class="list-group-item list-group-item-action media">
                                        <div>
                                              <span class="media-left">
                                                <img class="media-object rounded-circle"
                                                     src="<?= BASE_URL ?>/public/images/cdn/avatar-s-11.png"
                                                     alt="Generic placeholder image" style="width: 48px;height: 48px;">
                                              </span>
                                            <span class="media-body">
                                                <h4 class="list-group-item-heading">List group item heading</h4>
                                                <span class="list-group-item-text">
                                                    Donec id elit non mi porta gravida at eget metus. Maecenas
                                                    sed diam eget risus varius blandit.
                                                </span>
                                              </span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4" style="padding-left: 0px">
                            <div class="search-product">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Tìm kiếm sản phẩm"
                                           aria-describedby="button-addon2">
                                </div>
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
            <div class="modal-body">
                <div class="form-group">
                    <label for="userinput1">Tên nhóm</label>
                    <input type="text" class="form-control" onkeyup="makeAlias('group_name', 'group_name')" id="group_name" placeholder="Tên nhóm">
                </div>
                <div class="form-group">
                    <label for="userinput1">Alias nhóm</label>
                    <input type="text" class="form-control" id="group_name" placeholder="Tên nhóm">
                </div>
                <div class="form-group">
                    <label for="category_parent_id">Chọn trạng thái</label>
                    <select class="select2  form-control" id="group_status" style="width: 100%!important;">
                        <?php
                        foreach ($status as $item){?>
                            <option value="<?=$item->status_id?>"><?=$item->status_name?></option>
                        <?php }
                        ?>
                    </select>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-outline-primary" onclick="addGroup()">Save changes</button>
            </div>
        </div>
    </div>
</div>