<?php
$BODY_CLASS = 'class="vertical-layout vertical-menu-modern 2-columns   menu-expanded fixed-navbar"
      data-open="click" data-menu="vertical-menu-modern" data-col="2-columns"';
$assetsCSS = '
            <link rel="stylesheet" type="text/css" href="'.BASE_URL.'public/app-assets/vendors/css/extensions/toastr.css">
            <link rel="stylesheet" type="text/css" href="'.BASE_URL.'public/app-assets/css/plugins/extensions/toastr.css">
            <link rel="stylesheet" type="text/css" href="'.BASE_URL.'public/app-assets/vendors/css/forms/selects/select2.min.css">
            ';
$tempAssetsJS = '
            <script src="'.BASE_URL.'public/app-assets/vendors/js/extensions/toastr.min.js" type="text/javascript"></script>
            <script src="'.BASE_URL.'public/app-assets/js/scripts/extensions/toastr.js" type="text/javascript"></script>
            <script src="'.BASE_URL.'public/app-assets/vendors/js/forms/select/select2.full.min.js" type="text/javascript"></script>
            <script>$(".select2").select2();</script>
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
                            <li class="breadcrumb-item active">Menu
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="content-header-right col-md-6 col-12">
                <div class="float-md-right">
                    <div class="card float-right">
                        <div class="card-body tool-bar-action">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Tìm kiếm menu" aria-describedby="button-addon2">
                                <div class="input-group-append">
                                    <button class="btn btn-primary btn-sm" type="button">Tìm</button>
                                </div>
                            </div>
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
                        <h4 class="card-title">Danh sách menu</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered mb-0">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Tên</th>
                                    <th>Menu cha</th>
                                    <th>Địa chỉ</th>
                                    <th>Thiết lập</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                    <td>
                                        <div class="float-right">
                                            <button type="button" class="btn btn-icon btn-outline-info btn-sm mr-1"><i class="icon-note"></i></button>
                                            <button type="button" class="btn btn-icon btn-outline-danger btn-sm mr-1"><i class="icon-trash"></i></button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@TwBootstrap</td>
                                    <td>
                                        <div class="float-right">
                                            <button type="button" class="btn btn-icon btn-outline-info btn-sm mr-1"><i class="icon-note"></i></button>
                                            <button type="button" class="btn btn-icon btn-outline-danger btn-sm mr-1"><i class="icon-trash"></i></button>
                                        </div>
                                    </td>
                                </tr>
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

<div class="modal fade text-left" id="add-new-menu" role="dialog" aria-labelledby="myModalLabel17"
     aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel17">Thêm mới item menu</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="userinput1">Tên Menu</label>
                    <input type="text" id="category_name" class="form-control border-primary" onkeyup="makeAlias('category_name','category_alias')" placeholder="Name" name="name">
                </div>
                <div class="form-group">
                    <label for="userinput1">Alias Menu</label>
                    <input type="text" class="form-control" id="category_alias" placeholder="Địa chỉ menu">
                </div>
                <div class="form-group">
                    <label for="category_parent_id">Chọn Item Cha</label>
                    <select class="select2  form-control" id="category_parent_id" style="width: 100%!important;">
                        <option value="0">--| Không có</option>
                        <?php
                            foreach ($menus as $item){?>
                                <option value="<?=$item->category_id?>"><?=$item->category_name?></option>
                            <?php }
                        ?>
                    </select>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-outline-primary" onclick="addNewCategory()">Save changes</button>
            </div>
        </div>
    </div>
</div>
<script>
    function addNewCategory() {
        var form = {
            category_alias: $("#category_alias").val(),
            category_name: $("#category_name").val(),
            category_parent_id: $("#category_parent_id").val(),
        }
        $.post('<?=CATEGORY_MENU_ADD?>', form, function (data) {
            var result = JSON.parse(data)
            if(result.status == 200){
                toastr.success('Thành công!', 'Thêm '+$("#category_name").val()+" thành công",{"showMethod": "slideDown", "hideMethod": "slideUp", timeOut: 2000});
                setTimeout(function () {
                    window.location = "<?=CATEGORY_MENU?>"
                },2000)
            }else {
                toastr.error('Lỗi.', 'Có lỗi trong quá trình thêm: '+ data.toString());
            }
        })
    }
</script>