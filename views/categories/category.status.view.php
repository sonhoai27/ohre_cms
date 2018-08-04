<?php
$BODY_CLASS = 'class="vertical-layout vertical-menu-modern 2-columns   menu-expanded fixed-navbar"
      data-open="click" data-menu="vertical-menu-modern" data-col="2-columns"';
$assetsCSS = '
            <link rel="stylesheet" type="text/css" href="'.BASE_URL.'public/app-assets/vendors/css/extensions/toastr.css">
            <link rel="stylesheet" type="text/css" href="'.BASE_URL.'public/app-assets/css/plugins/extensions/toastr.css">
            ';
$tempAssetsJS = '
           <script src="'.BASE_URL.'public/app-assets/vendors/js/extensions/toastr.min.js" type="text/javascript"></script>
            <script src="'.BASE_URL.'public/app-assets/js/scripts/extensions/toastr.js" type="text/javascript"></script>
           ';
define("AssetsJS", $tempAssetsJS);
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
                        <h4 class="card-title">Danh sách trạng thái</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered mb-0">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Tên</th>
                                    <th>Thiết lập</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                foreach ($status as $key => $item) {?>
                                    <tr>
                                        <td><?=($key + 1)?></td>
                                        <td><a href="<?=BASE_URL?>category/detail_status/<?=$item->status_id?>"><?=$item->status_name?></a></td>
                                        <td>
                                            <div class="float-right">
                                                <button type="button" class="btn btn-icon btn-outline-info btn-sm mr-1"><i class="icon-note"></i></button>
                                                <button type="button"
                                                        onclick="deleteStatus(<?=$item->status_id?>)"
                                                        class="btn btn-icon btn-outline-danger btn-sm mr-1">
                                                    <i class="icon-trash"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                <?php }
                                ?>
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
                <h4 class="modal-title" id="myModalLabel17">Thêm mới trạng thái</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?=BASE_URL?>category/add_status" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="userinput1">Tên trạng thái</label>
                        <input type="text" id="status_name" class="form-control border-primary" placeholder="Name" name="status_name">
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
<div class="cd-popup" role="alert">
    <div class="cd-popup-container">
        <p>Bạn có muốn xoá?</p>
        <ul class="cd-buttons">
            <li><a id="yesDeleteStatus">Có</a></li>
            <li><a onclick="noDelete()">Không</a></li>
        </ul>
        <a href="#0" class="cd-popup-close img-replace"></a>
    </div>
</div>
<script>
    function deleteStatus(id) {
        $('.cd-popup').addClass('is-visible');
        $("#yesDeleteStatus").attr('onclick', 'yesDelete('+id+')');

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
        $.post(BASE_URL+'category/delete_status', {id: id}, function (data) {
            console.log(data.trim())
            if(data.trim() == 200){
                toastr.success('Thành công!', 'Xoá thành công',{"showMethod": "slideDown", "hideMethod": "slideUp", timeOut: 2000})
                setTimeout(function () {
                    window.location.href = BASE_URL+'category/status'
                },2000)
            }else if(data.trim() == 403){
                toastr.error('Thất bại!', 'Lỗi khoá ngoại!',{"showMethod": "slideDown", "hideMethod": "slideUp", timeOut: 2000})
                setTimeout(function () {
                    window.location.href = BASE_URL+'category/status'
                },2000)
            }
        })
    }
    function noDelete() {
        $('.cd-popup').removeClass('is-visible');
    }
</script>