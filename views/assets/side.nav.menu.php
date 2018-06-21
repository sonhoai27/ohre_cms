<nav class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-semi-dark navbar-shadow">
    <div class="navbar-wrapper">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mobile-menu d-md-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu font-large-1"></i></a></li>
                <li class="nav-item mr-auto">
                    <a class="navbar-brand" href="index.html">
                        <h3 class="brand-text">Ohre Admin</h3>
                    </a>
                </li>
                <li class="nav-item d-none d-md-block float-right"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="toggle-icon ft-toggle-right font-medium-3 white" data-ticon="ft-toggle-right"></i></a></li>
                <li class="nav-item d-md-none">
                    <a class="nav-link open-navbar-container" data-toggle="collapse" data-target="#navbar-mobile"><i class="la la-ellipsis-v"></i></a>
                </li>
            </ul>
        </div>
        <div class="navbar-container content">
            <div class="collapse navbar-collapse float-right" id="navbar-mobile">
                <ul class="nav navbar-nav">
                    <li class="dropdown dropdown-user nav-item">
                        <a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                <span class="mr-1">Hello,
                  <span class="user-name text-bold-700">Sơn Hoài</span>
                </span>
                            <span class="avatar avatar-online">
                  <img src="<?=BASE_URL?>public/images/index/avatar.png" alt="avatar"><i></i></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#"><i class="ft-user"></i> Tài khoản</a>
                            <a class="dropdown-item" href="#"><i class="ft-mail"></i> Thông báo</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item" href="<?=BASE_URL?>auth/logout"><i class="ft-power"></i> Thoát</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>

<div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class=" nav-item"><a href="<?=BASE_URL?>"><i class="la la-home"></i><span class="menu-title" data-i18n="nav.dash.main">Trang chủ</span></a>
            </li>
            <li class=" nav-item"><a href="#"><i class="ft ft-box"></i><span class="menu-title" data-i18n="nav.timelines.main">Danh mục</span></a>
                <ul class="menu-content">
                    <li><a href="#"><span class="menu-title" data-i18n="nav.timelines.main">Danh mục sản phẩm</span></a>
                        <ul class="menu-content">
                            <li><a class="menu-item" href="<?=CATEGORY_BRAND?>" data-i18n="nav.timelines.timeline_right">Hãng</a>
                            <li><a class="menu-item" href="<?=CATEGORY_GROUP?>" data-i18n="nav.timelines.timeline_center">Loại - nhóm</a>
                            </li>
                            <li><a class="menu-item" href="<?=CATEGORY_MENU?>" data-i18n="nav.timelines.timeline_left">Danh mục</a>
                            </li>
                        </ul>
                    </li>
                    <li><a class="menu-item" href="<?=CATEGORY_SHOP?>" data-i18n="nav.timelines.timeline_left">Cửa hàng</a>
                    </li>
                    </li>
                    <li><a class="menu-item" href="<?=CATEGORY_STATUS?>" data-i18n="nav.timelines.timeline_horizontal">Trạng thái</a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item"><a href="#"><i class="ft ft-user"></i><span class="menu-title" data-i18n="nav.timelines.main">Tài khoản</span></a>
                <ul class="menu-content">
                    <li><a class="menu-item" href="timeline-center.html" data-i18n="nav.timelines.timeline_center">User</a>
                    </li>
                    <li><a class="menu-item" href="timeline-left.html" data-i18n="nav.timelines.timeline_left">Anonymous User</a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item"><a href="#"><i class="ft ft-package"></i><span class="menu-title" data-i18n="nav.timelines.main">Sản phẩm</span></a>
                <ul class="menu-content">
                    <li><a class="menu-item" href="<?=PRODUCTS_PRODUCT?>" data-i18n="nav.timelines.timeline_center">Crawler sản phẩm</a>
                    </li>
                    <li><a class="menu-item" href="<?=PRODUCTS_GROUP?>" data-i18n="nav.timelines.timeline_left">Nhóm sản phẩm</a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item"><a href="#"><i class="ft ft-bar-chart"></i><span class="menu-title" data-i18n="nav.timelines.main">Thống kê</span></a>
                <ul class="menu-content">
                    <li><a class="menu-item" href="timeline-center.html" data-i18n="nav.timelines.timeline_center">Sản phẩm</a>
                    </li>
                    <li><a class="menu-item" href="timeline-left.html" data-i18n="nav.timelines.timeline_left">Tất cả</a>
                    </li>
                </ul>
            </li>
            <li class=" navigation-header">
                <span data-i18n="nav.category.support">Trợ giúp</span><i class="la la-ellipsis-h ft-minus" data-toggle="tooltip"
                                                                        data-placement="right" data-original-title="Support"></i>
            </li>
            <li class=" nav-item">
                <a href="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/documentation"><i class="la la-text-height"></i>
                    <span class="menu-title" data-i18n="nav.support_documentation.main">Documentation</span>
                </a>
            </li>
        </ul>
    </div>
</div>