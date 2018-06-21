<?php
$BODY_CLASS = 'class="vertical-layout vertical-menu-modern 1-column menu-expanded"
data-open="click" data-menu="vertical-menu-modern" data-col="1-column"';
require_once (__SITE_PATH."/views/assets/head.view.php");
?>

<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
            <section class="flexbox-container">
                <div class="col-12 d-flex align-items-center justify-content-center">
                    <div class="col-md-4 col-10 box-shadow-2 p-0">
                        <div class="card border-grey border-lighten-3 px-1 py-1 m-0">
                            <div class="card-header border-0 pb-0">
                                <div class="card-title text-center">
                                    <img src="<?=BASE_URL?>public/images/cdn/ohre.png" alt="branding logo" width="20%">
                                </div>
                                <h6 class="card-subtitle line-on-side text-muted text-center font-small-3 pt-2">
                                    <span>Easily Using</span>
                                </h6>
                            </div>
                            <div class="card-content">
                                <div class="card-body pt-0">
                                    <form class="form-horizontal" action="<?=BASE_URL?>auth/register_handle" method="post">
                                        <fieldset class="form-group floating-label-form-group">
                                            <label for="user-email">Your Email Address</label>
                                            <input type="email" name="email" class="form-control" id="user-email" placeholder="Your Email Address">
                                        </fieldset>
                                        <fieldset class="form-group floating-label-form-group mb-1">
                                            <label for="user-password">Enter Password</label>
                                            <input type="password" name="password" class="form-control" id="user-password" placeholder="Enter Password">
                                        </fieldset>
                                        <div class="form-group row">
                                            <div class="col-12 float-sm-left text-left"><a href="recover-password.html" class="card-link">Forgot Password?</a></div>
                                        </div>
                                        <button type="submit" class="btn btn-outline-info btn-block"><i class="ft-user"></i> Register</button>
                                    </form>
                                </div>
                                <div class="card-body pt-0">
                                    <a href="login-with-bg.html" class="btn btn-outline-danger btn-block"><i class="ft-unlock"></i> Login</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
<script>

</script>
