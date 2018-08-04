<?php
$BODY_CLASS = 'class="vertical-layout vertical-menu-modern 2-columns   menu-expanded fixed-navbar"
      data-open="click" data-menu="vertical-menu-modern" data-col="2-columns"';
$assetsCSS = '
            <link rel="stylesheet" type="text/css" href="' . BASE_URL . 'public/app-assets/vendors/css/extensions/toastr.css">
            <link rel="stylesheet" type="text/css" href="' . BASE_URL . 'public/app-assets/css/plugins/extensions/toastr.css">
            <link rel="stylesheet" type="text/css" href="' . BASE_URL . 'public/app-assets/css/core/colors/palette-gradient.css">
            <link href="' . BASE_URL . 'public/css/sanfrancisco-font.css" rel="stylesheet" type="text/css" />
            <link rel="stylesheet" type="text/css" href="' . BASE_URL . 'public/app-assets/vendors/css/charts/jquery-jvectormap-2.0.3.css">
            <link rel="stylesheet" type="text/css" href="' . BASE_URL . 'public/app-assets/vendors/css/charts/morris.css">
            <link rel="stylesheet" type="text/css" href="' . BASE_URL . 'public/app-assets/css/plugins/ui/jqueryui.css">
            <script src="https://www.google.com/jsapi" type="text/javascript"></script>
            <link rel="stylesheet" type="text/css" href="'.BASE_URL.'public/app-assets/vendors/css/tables/datatable/datatables.min.css">
            <link rel="stylesheet" type="text/css" href="'.BASE_URL.'public/app-assets/vendors/css/extensions/toastr.css">
            <link rel="stylesheet" type="text/css" href="'.BASE_URL.'public/app-assets/css/plugins/extensions/toastr.css">
            ';
$tempAssetsJS = '
            <script src="'.BASE_URL.'public/app-assets/vendors/js/tables/datatable/datatables.min.js" type="text/javascript"></script>
            <script src="' . BASE_URL . 'public/app-assets/vendors/js/charts/chart.min.js" type="text/javascript"></script>
            <script src="' . BASE_URL . 'public/app-assets/vendors/js/charts/raphael-min.js" type="text/javascript"></script>
            <script src="' . BASE_URL . 'public/app-assets/vendors/js/charts/morris.min.js" type="text/javascript"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.19.1/moment.min.js"></script>
            <script src="' . BASE_URL . 'public/app-assets/js/core/libraries/jquery_ui/jquery-ui.min.js" type="text/javascript"></script>
            <script src="'.BASE_URL.'public/app-assets/vendors/js/extensions/toastr.min.js" type="text/javascript"></script>
            <script>
            $(document).ready(function () {
            var date = new Date()
            $.post(BASE_URL + \'analytics/detailDayAnalyticsUser\', {
                date: {
                    day: date.getDate(),
                    month: date.getMonth() + 1,
                    year: date.getFullYear()
                }, url: \'day\'
            }, function (result) {
                if(JSON.parse(result).length > 0){
                    $("#user-day").remove()
                    $("#user-day_wrapper").remove()
                    $("#mytb1").append(\'<table class="table table-bordered mb-0" id="user-day" style="width:100%"></table>\')
                    $(\'#user-day\').DataTable({
                        data: JSON.parse(result),
                        columns: [
                            { title: "IP" },
                            { title: "Browser info" },
                            { title: "Toạ độ" },
                            { title: "Thành phố" }
                        ]
                    });
                }else {
                    toastr.warning(\'Cảnh báo!\', "Ngày này không có dữ liệu!",{"showMethod": "slideDown", "hideMethod": "slideUp", timeOut: 2000});
                }
            })
        })
        
        </script>
            ';
define("AssetsJS", $tempAssetsJS);
require_once(__SITE_PATH . "/views/assets/head.view.php");
require_once(__SITE_PATH . "/views/assets/side.nav.menu.php");
?>
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
            <h3 class="content-header-title mb-0 d-inline-block">Tât cả</h3>
        </div>
        <div class="content-body">
            <!-- Revenue, Hit Rate & Deals -->
            <section id="date-picker">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Thống kê người truy cập</h4>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <ul class="nav nav-tabs">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="base-day"
                                               data-toggle="tab" aria-controls="day" href="#day" aria-expanded="true">
                                                Ngày
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link"
                                               onclick="getMonthUser(0)"
                                               id="base-month" data-toggle="tab"
                                               aria-controls="month" href="#month" aria-expanded="false">
                                                Tháng
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link"
                                               onclick="getYearUser(0)"
                                               id="base-year" data-toggle="tab"
                                               aria-controls="year" href="#year" aria-expanded="false">
                                                Năm
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="tab-content px-1 pt-1">
                                        <div class="tab-pane active" id="day" aria-expanded="true"
                                             aria-labelledby="base-day">
                                            <div class="row">
                                                <div class="col-sm-4"></div>
                                                <div class="col-sm-4 text-center">
                                                    <h3 class="content-header-title d-inline-block">Theo ngày</h3>
                                                    <div class="form-group">
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text"><i
                                                                        class="ft-calendar"></i></span>
                                                            </div>
                                                            <input
                                                                onchange="getDayUser()"
                                                                id="day-user"
                                                                placeholder="Chọn ngày để xem"
                                                                type="text"
                                                                class="form-control datepicker-day">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4"></div>
                                                <div class="col-sm-12">
                                                    <div id="mytb1"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="month" aria-labelledby="base-month">
                                            <div class="row">
                                                <div class="col-sm-4"></div>
                                                <div class="col-sm-4 text-center">
                                                    <h3 class="content-header-title d-inline-block">Theo tháng</h3>
                                                    <div class="form-group">
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text"><i
                                                                        class="ft-calendar"></i></span>
                                                            </div>
                                                            <input
                                                                id="month-chart"
                                                                placeholder="Chọn ngày để xem"
                                                                type="text"
                                                                class="form-control datepicker-month">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4"></div>
                                                <div class="col-sm-12">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <div id="column-chart-month-user"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12 text-center"
                                                     style="margin-top: 64px; margin-bottom: 32px">
                                                    <h3 class="content-header-title d-inline-block">Danh sách người dùng mới</h3>
                                                </div>
                                                <div class="col-sm-12">
                                                    <div id="mytb2"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="year" aria-labelledby="base-year">
                                            <div class="row">
                                                <div class="col-sm-4"></div>
                                                <div class="col-sm-4 text-center">
                                                    <h3 class="content-header-title d-inline-block">Theo năm</h3>
                                                    <div class="form-group">
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text"><i
                                                                        class="ft-calendar"></i></span>
                                                            </div>
                                                            <input
                                                                id="year-chart"
                                                                placeholder="Chọn năm để xem"
                                                                type="text"
                                                                class="form-control datepicker-year">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4"></div>
                                                <div class="col-sm-12">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <div id="column-chart-year-user"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12 text-center"
                                                     style="margin-top: 64px; margin-bottom: 32px">
                                                    <h3 class="content-header-title d-inline-block">Người dùng mới</h3>
                                                </div>
                                                <div class="col-sm-12">
                                                    <div id="mytb3"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

    <script>
        google.load('visualization', '1.0', {'packages': ['corechart']});
    </script>
</div>
