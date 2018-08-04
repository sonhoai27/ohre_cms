<?php
$BODY_CLASS = 'class="vertical-layout vertical-menu-modern 2-columns   menu-expanded fixed-navbar"
      data-open="click" data-menu="vertical-menu-modern" data-col="2-columns"';
$assetsCSS = '
            ';
$tempAssetsJS = '
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
                    <div class="row">
                        <div class="col-12">
                            <div class="card-body">
                                <p>IP: <?=$detail->user_IP?></p>
                                <p>Toạ độ: <?=$detail->user_geolocation?></p>
                                <p>Vị trí: <?=$detail->user_location?></p>
                                <p>Browser: <?=$detail->user_browser_info?></p>
                            </div>
                            <?php
                                $gelocation = explode("-", $detail->user_geolocation)
                            ?>
                            <div id="map" style="width:100%;height:400px;"></div>
                            <script>
                                function myMap() {
                                    var myCenter = new google.maps.LatLng(<?=$gelocation[0]?>,<?=$gelocation[1]?>);
                                    var mapCanvas = document.getElementById("map");
                                    var mapOptions = {center: myCenter, zoom: 5};
                                    var map = new google.maps.Map(mapCanvas, mapOptions);
                                    var marker = new google.maps.Marker({position:myCenter});
                                    marker.setMap(map);
                                }
                            </script>

                            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBwunQZrHspmMwSF3GakfH1zH8jUVMHNuU&callback=myMap"></script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>