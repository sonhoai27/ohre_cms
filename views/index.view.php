<?php
$BODY_CLASS = 'class="vertical-layout vertical-menu-modern 2-columns   menu-expanded fixed-navbar"
      data-open="click" data-menu="vertical-menu-modern" data-col="2-columns"';
$assetsCSS = '
            <link rel="stylesheet" type="text/css" href="'.BASE_URL.'public/app-assets/vendors/css/extensions/toastr.css">
            <link rel="stylesheet" type="text/css" href="'.BASE_URL.'public/app-assets/css/plugins/extensions/toastr.css">
            <link rel="stylesheet" type="text/css" href="'.BASE_URL.'public/app-assets/css/core/colors/palette-gradient.css">
            <link href="'.BASE_URL.'public/css/sanfrancisco-font.css" rel="stylesheet" type="text/css" />
            <link rel="stylesheet" type="text/css" href="'.BASE_URL.'public/app-assets/vendors/css/charts/jquery-jvectormap-2.0.3.css">
            <link rel="stylesheet" type="text/css" href="'.BASE_URL.'public/app-assets/vendors/css/charts/morris.css">
            ';
$tempAssetsJS = '
            <script src="'.BASE_URL.'public/app-assets/vendors/js/charts/chart.min.js" type="text/javascript"></script>
            <script src="'.BASE_URL.'public/app-assets/vendors/js/charts/raphael-min.js" type="text/javascript"></script>
            <script src="'.BASE_URL.'public/app-assets/vendors/js/charts/morris.min.js" type="text/javascript"></script>
            <script src="'.BASE_URL.'public/app-assets/vendors/js/charts/jvector/jquery-jvectormap-2.0.3.min.js"
        type="text/javascript"></script>
            <script src="'.BASE_URL.'public/app-assets/vendors/js/charts/jvector/jquery-jvectormap-world-mill.js"
                    type="text/javascript"></script>
            <script src="'.BASE_URL.'public/app-assets/data/jvector/visitor-data.js" type="text/javascript"></script>
            <script src="'.BASE_URL.'public/app-assets/js/scripts/pages/dashboard-sales.js" type="text/javascript"></script>
            ';
define("AssetsJS", $tempAssetsJS);
    require_once (__SITE_PATH."/views/assets/head.view.php");
    require_once (__SITE_PATH."/views/assets/side.nav.menu.php");
?>
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
            <!-- Revenue, Hit Rate & Deals -->
            <div class="row">
                <div class="col-xl-6 col-12 ">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Revenue</h4>
                            <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                            <div class="heading-elements">
                                <ul class="list-inline mb-0">
                                    <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-content collapse show">
                            <div class="card-body pt-0">
                                <div class="row mb-1">
                                    <div class="col-6 col-md-4">
                                        <h5>Current week</h5>
                                        <h2 class="danger">$82,124</h2>
                                    </div>
                                    <div class="col-6 col-md-4">
                                        <h5>Previous week</h5>
                                        <h2 class="text-muted">$52,502</h2>
                                    </div>
                                </div>
                                <div class="chartjs">
                                    <canvas id="thisYearRevenue" width="400" style="position: absolute;"></canvas>
                                    <canvas id="lastYearRevenue" width="400"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-12">
                    <div class="row">
                        <div class="col-lg-6 col-12">
                            <div class="card pull-up">
                                <div class="card-header bg-hexagons">
                                    <h4 class="card-title">Hit Rate
                                        <span class="danger">-12%</span>
                                    </h4>
                                    <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-content collapse show bg-hexagons">
                                    <div class="card-body pt-0">
                                        <div class="chartjs">
                                            <canvas id="hit-rate-doughnut" height="275"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Top Products</h4>
                                    <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li><a href="#">Show all</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-content collapse show">
                                    <div class="card-body p-0">
                                        <div class="table-responsive">
                                            <table class="table mb-0">
                                                <tbody>
                                                <tr>
                                                    <th scope="row" class="border-top-0">iPone X</th>
                                                    <td class="border-top-0">2245</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">One Plus</th>
                                                    <td>1850</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Samsung S7</th>
                                                    <td>1550</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-12">
                            <div class="card pull-up">
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="media d-flex">
                                            <div class="media-body text-left">
                                                <h6 class="text-muted">Order Value </h6>
                                                <h3>$ 88,568</h3>
                                            </div>
                                            <div class="align-self-center">
                                                <i class="icon-trophy success font-large-2 float-right"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <input type="file" name="file" id="file">
                            <button onclick="uploadFile()">Tải</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>

    </script>
</div>