<footer class="footer footer-static footer-light navbar-border navbar-shadow">
    <p class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2">
      <span class="float-md-left d-block d-md-inline-block">Copyright &copy; 2018 <a class="text-bold-800 grey darken-2" href="https://fb.com/kris.nguyen27"
                                                                                     target="_blank">OHRE </a>, All rights reserved. </span>
        <span class="float-md-right d-block d-md-inline-blockd-none d-lg-block">Develop with <i class="ft-heart pink"></i> sonH</span>
    </p>
</footer>
<!-- jQuery  -->
<script src="<?=BASE_URL?>public/app-assets/vendors/js/vendors.min.js" type="text/javascript"></script>
<script src="<?=BASE_URL?>public/app-assets/js/core/app-menu.js" type="text/javascript"></script>
<script src="<?=BASE_URL?>public/app-assets/js/core/app.js" type="text/javascript"></script>
<script src="<?=BASE_URL?>public/app-assets/js/scripts/customizer.js" type="text/javascript"></script>
<!-- BEGIN VENDOR JS-->
<!-- BEGIN PAGE VENDOR JS-->
<?php
    try {
        if(defined('AssetsJS')){
            echo(AssetsJS);
       }
    }catch (Exception $e){

    }
?>
<script src="<?=BASE_URL?>public/js/custom.js" type="text/javascript"></script>
</body>
</html>