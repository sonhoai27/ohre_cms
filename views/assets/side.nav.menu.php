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
            <div class="collapse navbar-collapse" id="navbar-mobile">
                <ul class="nav navbar-nav float-right">
                    <li class="dropdown dropdown-user nav-item">
                        <a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                <span class="mr-1">Hello,
                  <span class="user-name text-bold-700">Sơn Hoài</span>
                </span>
                            <span class="avatar avatar-online">
                  <img src="<?=BASE_URL?>public/images/index/avatar.png" alt="avatar"><i></i></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#"><i class="ft-user"></i> Edit Profile</a>
                            <a class="dropdown-item" href="#"><i class="ft-mail"></i> My Inbox</a>
                            <a class="dropdown-item" href="#"><i class="ft-check-square"></i> Task</a>
                            <a class="dropdown-item" href="#"><i class="ft-message-square"></i> Chats</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item" href="#"><i class="ft-power"></i> Thoát</a>
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
            <li class=" nav-item"><a href="<?=BASE_URL?>"><i class="la la-home"></i><span class="menu-title" data-i18n="nav.dash.main">Trang chủ</span><span class="badge badge badge-info badge-pill float-right mr-2">3</span></a>
            </li>
            <li class=" nav-item"><a href="#"><i class="la la-film"></i><span class="menu-title" data-i18n="nav.timelines.main">Timelines</span></a>
                <ul class="menu-content">
                    <li><a class="menu-item" href="timeline-center.html" data-i18n="nav.timelines.timeline_center">Timelines Center</a>
                    </li>
                    <li><a class="menu-item" href="timeline-left.html" data-i18n="nav.timelines.timeline_left">Timelines Left</a>
                    </li>
                    <li><a class="menu-item" href="timeline-right.html" data-i18n="nav.timelines.timeline_right">Timelines Right</a>
                    </li>
                    <li><a class="menu-item" href="timeline-horizontal.html" data-i18n="nav.timelines.timeline_horizontal">Timelines Horizontal</a>
                    </li>
                </ul>
            </li>
            <li class=" navigation-header">
                <span data-i18n="nav.category.support">Support</span><i class="la la-ellipsis-h ft-minus" data-toggle="tooltip"
                                                                        data-placement="right" data-original-title="Support"></i>
            </li>
            <li class=" nav-item"><a href="http://support.pixinvent.com/"><i class="la la-support"></i><span class="menu-title" data-i18n="nav.support_raise_support.main">Raise Support</span></a>
            </li>
            <li class=" nav-item">
                <a href="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/documentation"><i class="la la-text-height"></i>
                    <span class="menu-title" data-i18n="nav.support_documentation.main">Documentation</span>
                </a>
            </li>
        </ul>
    </div>
</div>