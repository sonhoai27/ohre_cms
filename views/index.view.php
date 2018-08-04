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
            <script src="https://www.google.com/jsapi" type="text/javascript"></script>
            ';
$tempAssetsJS = '
            <script src="' . BASE_URL . 'public/app-assets/vendors/js/charts/chart.min.js" type="text/javascript"></script>
            <script src="' . BASE_URL . 'public/app-assets/vendors/js/charts/raphael-min.js" type="text/javascript"></script>
            <script src="' . BASE_URL . 'public/app-assets/vendors/js/charts/morris.min.js" type="text/javascript"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.19.1/moment.min.js"></script>
            ';
define("AssetsJS", $tempAssetsJS);
require_once(__SITE_PATH . "/views/assets/head.view.php");
require_once(__SITE_PATH . "/views/assets/side.nav.menu.php");
?>
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
            <h3 class="content-header-title mb-0 d-inline-block">Hôm nay - <?=date("d-m-Y")?></h3>
        </div>
        <div class="content-body">
            <!-- Revenue, Hit Rate & Deals -->
            <div class="row">
                <div class="col-xl-3 col-lg-6 col-12">
                    <div class="card pull-up">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="media d-flex">
                                    <div class="media-body text-left">
                                        <h3 class="info"><?= $homeAnalyticsNormal->brand->count ?></h3>
                                        <h6><b>Xem hãng</b></h6>
                                    </div>
                                    <div>
                                        <i class="la la-inbox info font-large-2 float-right"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-12">
                    <div class="card pull-up">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="media d-flex">
                                    <div class="media-body text-left">
                                        <h3 class="warning"><?= $homeAnalyticsNormal->shop->count ?></h3>
                                        <h6><b>Tới cửa hàng</b></h6>
                                    </div>
                                    <div>
                                        <i class="la la-shopping-cart warning font-large-2 float-right"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-12">
                    <div class="card pull-up">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="media d-flex">
                                    <div class="media-body text-left">
                                        <h3 class="success"><?= $homeAnalyticsNormal->product->count ?></h3>
                                        <h6><b>Xem Sản phẩm</b></h6>
                                    </div>
                                    <div>
                                        <i class="la la-tasks success font-large-2 float-right"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-12">
                    <div class="card pull-up">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="media d-flex">
                                    <div class="media-body text-left">
                                        <h3 class="danger"><?= $homeAnalyticsNormal->group->count ?></h3>
                                        <h6><b>Xem nhóm sản phẩm</b></h6>
                                    </div>
                                    <div>
                                        <i class="la la-codepen font-large-2 float-right"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-5 col-12 ">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Truy cập hôm nay</h4>
                            <a class="heading-elements-toggle"><i class="la la-ellipsis-h font-medium-3"></i></a>
                        </div>
                        <div class="card-content collapse show">
                            <div class="card-body">
                                <div id="column-chart"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-7 col-12 ">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Truy cập tuần này</h4>
                            <a class="heading-elements-toggle"><i class="la la-ellipsis-h font-medium-3"></i></a>
                        </div>
                        <div class="card-content collapse show">
                            <div class="card-body">
                                <div id="stacked-column-chart"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Top 10 hãng</h4>
                                    <a class="heading-elements-toggle"><i
                                                class="la la-ellipsis-v font-medium-3"></i></a>
                                </div>
                                <div class="card-content collapse show">
                                    <div class="card-body p-0">
                                        <div class="table-responsive">
                                            <table class="table mb-0">
                                                <tbody>
                                                <?php
                                                    foreach ($homeAnalyticsTop10->brand as $item){?>
                                                        <tr>
                                                            <td><?=$item->brand_name?></td>
                                                            <td><?=$item->count?></td>
                                                        </tr>
                                                    <?php }
                                                ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Top 10 sản phẩm</h4>
                                    <a class="heading-elements-toggle"><i
                                                class="la la-ellipsis-v font-medium-3"></i></a>
                                </div>
                                <div class="card-content collapse show">
                                    <div class="card-body p-0">
                                        <div class="table-responsive">
                                            <table class="table mb-0">
                                                <tbody>
                                                <?php
                                                foreach ($homeAnalyticsTop10->product as $item){?>
                                                    <tr>
                                                        <td><?=$item->product_name?></td>
                                                        <td><?=$item->count?></td>
                                                    </tr>
                                                <?php }
                                                ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Top 10 nhóm</h4>
                                    <a class="heading-elements-toggle"><i
                                                class="la la-ellipsis-v font-medium-3"></i></a>
                                </div>
                                <div class="card-content collapse show">
                                    <div class="card-body p-0">
                                        <div class="table-responsive">
                                            <table class="table mb-0">
                                                <tbody>
                                                <?php
                                                foreach ($homeAnalyticsTop10->group as $item){?>
                                                    <tr>
                                                        <td><?=$item->group_product_name?></td>
                                                        <td><?=$item->count?></td>
                                                    </tr>
                                                <?php }
                                                ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Top 10 sản phẩm đi tới cửa hàng</h4>
                                    <a class="heading-elements-toggle"><i
                                                class="la la-ellipsis-v font-medium-3"></i></a>
                                </div>
                                <div class="card-content collapse show">
                                    <div class="card-body p-0">
                                        <div class="table-responsive">
                                            <table class="table mb-0">
                                                <tbody>
                                                <?php
                                                foreach ($homeAnalyticsTop10->shop as $item){?>
                                                    <tr>
                                                        <td><?=$item->product_name?></td>
                                                        <td><?=$item->count?></td>
                                                    </tr>
                                                <?php }
                                                ?>
                                                </tbody>
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

        $(document).ready(function () {
            console.log(getCurrentWeek())
            $.post(BASE_URL + 'index/homeAnalyticsChart', {weekListDays: getCurrentWeek()}, function (result) {
                console.log(result)
                google.setOnLoadCallback(drawColumn(JSON.parse(result)))
                google.setOnLoadCallback(drawColumnStacked(JSON.parse(result)));
            })
            function drawColumn(result) {
                console.log(result.currentDate)
                var data = google.visualization.arrayToDataTable(result.currentDate);
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
                var bar = new google.visualization.ColumnChart(document.getElementById('column-chart'));
                bar.draw(data, options_column)
            }

            function drawColumnStacked(result) {

                // Create the data table.
                var data = google.visualization.arrayToDataTable(result.currentWeek);


                // Set chart options
                var options_column_stacked = {
                    height: 300,
                    fontSize: 12,
                    colors: ['#99B898','#FECEA8', '#FF847C', '#E84A5F'],
                    chartArea: {
                        left: '5%',
                        width: '90%',
                        height: 250
                    },
                    vAxis: {
                        gridlines:{
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

                // Instantiate and draw our chart, passing in some options.
                var bar = new google.visualization.ColumnChart(document.getElementById('stacked-column-chart'));
                bar.draw(data, options_column_stacked);

            }
        })

    </script>
</div>