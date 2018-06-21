<?php
$BODY_CLASS = 'class="vertical-layout vertical-menu-modern 1-column menu-expanded fixed-navbar"
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
                        <div class="card border-grey border-lighten-3 m-0">
                            <div class="card-header border-0">
                                <div class="card-title text-center">
                                    <img src="<?=BASE_URL?>public/images/cdn/ohre.png" alt="branding logo" width="20%">
                                </div>
                                <h6 class="card-subtitle line-on-side text-muted text-center font-small-3 pt-2">
                                    <span>Easily Using</span>
                                </h6>
                            </div>
                            <div class="card-content">
                                <div class="card-body pt-0">
                                    <form class="form-horizontal" action="<?=BASE_URL?>auth/login_handle" novalidate method="post">
                                        <fieldset class="form-group position-relative has-icon-left">
                                            <input type="text" class="form-control input-lg" id="email" name="email" placeholder="Your Username"
                                                   required>
                                            <div class="form-control-position">
                                                <i class="la la-user"></i>
                                            </div>
                                        </fieldset>
                                        <fieldset class="form-group position-relative has-icon-left">
                                            <input type="password" class="form-control input-lg" id="password" name="password" placeholder="Enter Password"
                                                   required>
                                            <div class="form-control-position">
                                                <i class="la la-key"></i>
                                            </div>
                                        </fieldset>
                                        <button type="submit" class="btn btn-info btn-lg btn-block"><i class="ft-unlock"></i> Login</button>
                                    </form>
                                </div>
                                <div class="card-body pb-0">
                                    <p class="text-center"><a href="<?=BASE_URL?>auth/recover-password" class="card-link">Recover password</a></p>
                                    <p class="text-center">New to Modern Admin? <a href="<?=BASE_URL?>auth/register" class="card-link">Create Account</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
