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
            ';
$tempAssetsJS = '
            <script src="' . BASE_URL . 'public/app-assets/vendors/js/charts/chart.min.js" type="text/javascript"></script>
            <script src="' . BASE_URL . 'public/app-assets/vendors/js/charts/raphael-min.js" type="text/javascript"></script>
            <script src="' . BASE_URL . 'public/app-assets/vendors/js/charts/morris.min.js" type="text/javascript"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.19.1/moment.min.js"></script>
            <script src="' . BASE_URL . 'public/app-assets/js/core/libraries/jquery_ui/jquery-ui.min.js" type="text/javascript"></script>
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
                                <h4 class="card-title">Thống kê lượt xem theo</h4>
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
                                               onclick="getChartMonth()"
                                               id="base-month" data-toggle="tab"
                                               aria-controls="month" href="#month" aria-expanded="false">
                                                Tháng
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link"
                                               onclick="getChartYear()"
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
                                                                    onchange="getDayChart()"
                                                                    id="day-chart"
                                                                    placeholder="Chọn ngày để xem"
                                                                    type="text"
                                                                    class="form-control datepicker-day">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4"></div>
                                                <div class="col-sm-12">
                                                    <div id="column-chart-day"></div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12 text-center"
                                                     style="margin-top: 64px; margin-bottom: 32px">
                                                    <h3 class="content-header-title d-inline-block">Top 10 truy cập</h3>
                                                </div>
                                                <div class="col-sm-3">
                                                    <h6 class="content-header-title d-inline-block">Hãng</h6>
                                                    <div class="table-responsive">
                                                        <table class="table mb-0 " id="top10day-brand">
                                                            <tr>
                                                                <td>Rỗng</td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <h6 class="content-header-title d-inline-block">Nhóm</h6>
                                                    <div class="table-responsive">
                                                        <table class="table mb-0 " id="top10day-group">
                                                            <tr>
                                                                <td>Rỗng</td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <h6 class="content-header-title d-inline-block">Tới cửa hàng</h6>
                                                    <div class="table-responsive">
                                                        <table class="table mb-0 " id="top10day-shop">
                                                            <tr>
                                                                <td>Rỗng</td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <h6 class="content-header-title d-inline-block">Sản phẩm</h6>
                                                    <div class="table-responsive">
                                                        <table class="table mb-0 " id="top10day-product">
                                                            <tr>
                                                                <td>Rỗng</td>
                                                            </tr>
                                                        </table>
                                                    </div>
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
                                                            <div id="column-chart-month"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12 text-center"
                                                     style="margin-top: 64px; margin-bottom: 32px">
                                                    <h3 class="content-header-title d-inline-block">Top 10 truy cập</h3>
                                                </div>
                                                <div class="col-sm-3">
                                                    <h6 class="content-header-title d-inline-block">Hãng</h6>
                                                    <div class="table-responsive">
                                                        <table class="table mb-0 " id="top10month-brand">
                                                            <tr>
                                                                <td>Rỗng</td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <h6 class="content-header-title d-inline-block">Nhóm</h6>
                                                    <div class="table-responsive">
                                                        <table class="table mb-0 " id="top10month-group">
                                                            <tr>
                                                                <td>Rỗng</td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <h6 class="content-header-title d-inline-block">Tới cửa hàng</h6>
                                                    <div class="table-responsive">
                                                        <table class="table mb-0 " id="top10month-shop">
                                                            <tr>
                                                                <td>Rỗng</td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <h6 class="content-header-title d-inline-block">Sản phẩm</h6>
                                                    <div class="table-responsive">
                                                        <table class="table mb-0 " id="top10month-product">
                                                            <tr>
                                                                <td>Rỗng</td>
                                                            </tr>
                                                        </table>
                                                    </div>
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
                                                            <div id="column-chart-year"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12 text-center"
                                                     style="margin-top: 64px; margin-bottom: 32px">
                                                    <h3 class="content-header-title d-inline-block">Top 10 truy cập</h3>
                                                </div>
                                                <div class="col-sm-3">
                                                    <h6 class="content-header-title d-inline-block">Hãng</h6>
                                                    <div class="table-responsive">
                                                        <table class="table mb-0 " id="top10year-brand">
                                                            <tr>
                                                                <td>Rỗng</td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <h6 class="content-header-title d-inline-block">Nhóm</h6>
                                                    <div class="table-responsive">
                                                        <table class="table mb-0 " id="top10year-group">
                                                            <tr>
                                                                <td>Rỗng</td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <h6 class="content-header-title d-inline-block">Tới cửa hàng</h6>
                                                    <div class="table-responsive">
                                                        <table class="table mb-0 " id="top10year-shop">
                                                            <tr>
                                                                <td>Rỗng</td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <h6 class="content-header-title d-inline-block">Sản phẩm</h6>
                                                    <div class="table-responsive">
                                                        <table class="table mb-0 " id="top10year-product">
                                                            <tr>
                                                                <td>Rỗng</td>
                                                            </tr>
                                                        </table>
                                                    </div>
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

        function getCurrentWeek() {
            var currentDate = moment()
            var weekStart = currentDate.clone().startOf('isoWeek');
            var weekEnd = currentDate.clone().endOf('isoWeek');
            var days = []
            for (var i = 0; i <= 6; i++) {
                days.push(moment(weekStart).add(i, 'days').format("DD,MM,YYYY"))
            }
            return days
        }

        $(function () {
            $('.datepicker-day').datepicker({
                dateFormat: 'dd-mm-yy',
            });
            $('.datepicker-month').datepicker({
                dateFormat: 'mm-yy',
                inline: true,
                changeMonth: true,
                changeYear: true,
                showButtonPanel: true,
                onClose: function (dateText, inst) {
                    $(this).datepicker('setDate', new Date(inst.selectedYear, inst.selectedMonth, 1));
                    setTimeout(function () {
                        getMonthChart()
                    }, 1000)
                }
            });
            $('.datepicker-year').datepicker({
                dateFormat: 'yy',
                inline: true,
                changeYear: true,
                showButtonPanel: true,
                onClose: function (dateText, inst) {
                    $(this).datepicker('setDate', new Date(inst.selectedYear, inst.selectedMonth, 1));
                    setTimeout(function () {
                        getYearChart()
                    }, 1000)
                }
            });
        });

        function getDayChart() {
            const date = ($("#day-chart").val()).split("-")
            $.post(BASE_URL + 'analytics/detailDayAnalyticsChart', {
                day: {
                    day: date[0],
                    month: date[1],
                    year: date[2]
                }
            }, function (result) {
                google.setOnLoadCallback(drawColumnDay(JSON.parse(result)))
            })


            $.post(BASE_URL + 'analytics/topHot10', {
                date: {
                    day: date[0],
                    month: date[1],
                    year: date[2]
                }, url: 'day'
            }, function (result) {
                var json = (JSON.parse(result))
                console.log(json)
                renderTopBrand(json.brand, 'top10day-brand')
                renderTopGroup(json.group, 'top10day-group')
                renderTopShop(json.shop, 'top10day-shop')
                renderTopProduct(json.product, 'top10day-product')
            })
        }

        function getMonthChart() {
            const date = ($("#month-chart").val()).split("-")
            $.post(BASE_URL + 'analytics/detailMonthAnalyticsChart', {
                month: {
                    month: date[0],
                    year: date[1]
                }
            }, function (result) {
                google.setOnLoadCallback(drawColumnMonth(JSON.parse(result), 'column-chart-month'))
            })

            $.post(BASE_URL + 'analytics/topHot10', {
                date: {
                    month: date[0],
                    year: date[1]
                }, url: 'month'
            }, function (result) {
                var json = (JSON.parse(result))
                console.log(json)
                renderTopBrand(json.brand, 'top10month-brand')
                renderTopGroup(json.group, 'top10month-group')
                renderTopShop(json.shop, 'top10month-shop')
                renderTopProduct(json.product, 'top10month-product')
            })
        }

        function getYearChart() {
            const date = ($("#year-chart").val())
            $.post(BASE_URL + 'analytics/detailYearAnalyticsChart', {
                year: {
                    year: date
                }
            }, function (result) {
                google.setOnLoadCallback(drawColumnMonth(JSON.parse(result), 'column-chart-year'))
            })

            $.post(BASE_URL + 'analytics/topHot10', {
                date: {
                    year: date
                }, url: 'year'
            }, function (result) {
                var json = (JSON.parse(result))
                console.log(json)
                renderTopBrand(json.brand, 'top10year-brand')
                renderTopGroup(json.group, 'top10year-group')
                renderTopShop(json.shop, 'top10year-shop')
                renderTopProduct(json.product, 'top10year-product')
            })
        }

        $(document).ready(function () {
            var date = new Date()
            $.post(BASE_URL + 'analytics/detailDayAnalyticsChart', {
                day: {
                    day: date.getDate(),
                    month: date.getMonth() + 1,
                    year: date.getFullYear()
                }
            }, function (result) {
                google.setOnLoadCallback(drawColumnDay(JSON.parse(result)))
            })

            $.post(BASE_URL + 'analytics/topHot10', {
                date: {
                    day: date.getDate(),
                    month: date.getMonth() + 1,
                    year: date.getFullYear()
                }, url: 'day'
            }, function (result) {
                var json = (JSON.parse(result))
                console.log(json)
                renderTopBrand(json.brand, 'top10day-brand')
                renderTopGroup(json.group, 'top10day-group')
                renderTopShop(json.shop, 'top10day-shop')
                renderTopProduct(json.product, 'top10day-product')
            })
        })

        function drawColumnDay(result) {
            var data = google.visualization.arrayToDataTable(result);
            var options_column = {
                height: 300,
                fontSize: 12,
                colors: ['#2494be'],
                chartArea: {
                    left: '5%',
                    width: '100%',
                    height: 250
                },
                vAxis: {
                    gridlines: {
                        color: '#e9e9e9',
                        count: 5
                    },
                    minValue: 0
                },
                legend: {
                    position: 'top',
                    alignment: 'center',
                    textStyle: {
                        fontSize: 12
                    }
                }
            };
            var bar = new google.visualization.ColumnChart(document.getElementById('column-chart-day'));
            bar.draw(data, options_column)
        }

        function drawColumnMonth(result, id) {
            console.log(result)
            // Create the data table.
            var data = google.visualization.arrayToDataTable(result);
            // Set chart options
            var options_column_stacked = {
                height: 300,
                fontSize: 12,
                isStacked: true,
                colors: ['#99B898', '#FECEA8', '#FF847C', '#E84A5F'],
                chartArea: {
                    left: '5%',
                    width: '90%',
                    height: 250
                },
                vAxis: {
                    gridlines: {
                        color: '#e9e9e9',
                        count: 10
                    },
                    minValue: 0
                },
                legend: {
                    position: 'top',
                    alignment: 'center',
                    textStyle: {
                        fontSize: 12
                    }
                }
            };

            // Instantiate and draw our chart, passing in some options.
            var bar = new google.visualization.ColumnChart(document.getElementById(id));
            bar.draw(data, options_column_stacked);

        }

        function getChartMonth() {
            var date = new Date()
            $.post(BASE_URL + 'analytics/detailMonthAnalyticsChart', {
                month: {
                    month: date.getMonth() + 1,
                    year: date.getFullYear()
                }
            }, function (result) {
                google.setOnLoadCallback(drawColumnMonth(JSON.parse(result), 'column-chart-month'))
            })
            $.post(BASE_URL + 'analytics/topHot10', {
                date: {
                    month: date.getMonth() + 1,
                    year: date.getFullYear()
                }, url: 'month'
            }, function (result) {
                var json = (JSON.parse(result))
                console.log(json)
                renderTopBrand(json.brand, 'top10month-brand')
                renderTopGroup(json.group, 'top10month-group')
                renderTopShop(json.shop, 'top10month-shop')
                renderTopProduct(json.product, 'top10month-product')
            })
        }

        function getChartYear() {
            var date = new Date()
            $.post(BASE_URL + 'analytics/detailYearAnalyticsChart', {
                year: {
                    year: date.getFullYear()
                }
            }, function (result) {
                google.setOnLoadCallback(drawColumnMonth(JSON.parse(result), 'column-chart-year'))
            })

            $.post(BASE_URL + 'analytics/topHot10', {
                date: {
                    year: date.getFullYear()
                }, url: 'year'
            }, function (result) {
                var json = (JSON.parse(result))
                console.log(json)
                renderTopBrand(json.brand, 'top10year-brand')
                renderTopGroup(json.group, 'top10year-group')
                renderTopShop(json.shop, 'top10year-shop')
                renderTopProduct(json.product, 'top10year-product')
            })
        }

        function renderTopBrand(brands, id) {
            var brand = ""
            brands.forEach(function (element, index) {
                brand += "<tr>"
                brand += "<td style='padding: 0.75rem'>" + element.brand_name + "</td>"
                brand += "<td style='padding: 0.75rem'>" + element.count + "</td>"
                brand += "</tr>"
            })
            $("#" + id).html(brand)
        }

        function renderTopShop(shops, id) {
            var shop = ""
            shops.forEach(function (element, index) {
                shop += "<tr>"
                shop += "<td style='padding: 0.75rem'>" + element.product_name + "</td>"
                shop += "<td style='padding: 0.75rem'>" + element.count + "</td>"
                shop += "</tr>"
            })
            $("#" + id).html(shop)
        }

        function renderTopProduct(products, id) {
            var product = ""
            products.forEach(function (element, index) {
                product += "<tr>"
                product += "<td style='padding: 0.75rem'>" + element.product_name + "</td>"
                product += "<td style='padding: 0.75rem'>" + element.count + "</td>"
                product += "</tr>"
            })
            $("#" + id).html(product)
        }

        function renderTopGroup(groups, id) {
            var group = ""
            groups.forEach(function (element, index) {
                group += "<tr>"
                group += "<td style='padding: 0.75rem'>" + element.group_product_name + "</td>"
                group += "<td style='padding: 0.75rem'>" + element.count + "</td>"
                group += "</tr>"
            })
            $("#" + id).html(group)
        }
    </script>
</div>
