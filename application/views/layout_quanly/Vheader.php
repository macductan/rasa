<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- PAGE TITLE HERE -->
    <title>Quản lý</title>

    <!-- FAVICONS ICON -->
	<link rel="stylesheet" type="text/css" href="{$base_url}assets/template_giaodien/css/bootstrap.min.css">
    <link href="{$base_url}assets/template_quanly/vendor/fullcalendar/css/main.min.css" rel="stylesheet">
    <link href="{$base_url}assets/template_quanly/vendor/jquery-nice-select/css/nice-select.css" rel="stylesheet">

    <link href="{$base_url}assets/template_quanly/css/style.css" rel="stylesheet">


</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="lds-ripple">
            <div></div>
            <div></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->


    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="index.html" class="brand-logo">
                <svg class="logo-abbr" width="55" height="55" viewbox="0 0 55 55" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M27.5 0C12.3122 0 0 12.3122 0 27.5C0 42.6878 12.3122 55 27.5 55C42.6878 55 55 42.6878 55 27.5C55 12.3122 42.6878 0 27.5 0ZM28.0092 46H19L19.0001 34.9784L19 27.5803V24.4779C19 14.3752 24.0922 10 35.3733 10V17.5571C29.8894 17.5571 28.0092 19.4663 28.0092 24.4779V27.5803H36V34.9784H28.0092V46Z"
                        fill="url(#paint0_linear)"></path>
                    <defs>
                    </defs>
                </svg>
                <div class="brand-title">
                    <h2 class="">Cửa hàng</h2>
                    <span class="brand-sub-title">Trang quản trị</span>
                </div>
            </a>
            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                            <div class="dashboard_bar">
                                Quản lý cửa hàng
                            </div>

                        </div>
                        <ul class="navbar-nav header-right">
                            <li class="nav-item dropdown  header-profile">
                                <a class="nav-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown">
                                    <img src="{$base_url}assets/img/logo.png" width="56" alt="">
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="page-error-404.html" class="dropdown-item ai-icon">
                                        <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger"
                                            width="18" height="18" viewbox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                            <polyline points="16 17 21 12 16 7"></polyline>
                                            <line x1="21" y1="12" x2="9" y2="12"></line>
                                        </svg>
                                        <span class="ms-2">Đăng xuất </span>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>

        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="dlabnav">
            <div class="dlabnav-scroll">
                <ul class="metismenu" id="menu">
                    <li>
                        <a class="has-arrow " href="javascript:void()" aria-expanded="false">
							<i class="fas fa-user-check"></i>
							<span class="nav-text">Quản lý tài khoản</span>
						</a>
                        <ul aria-expanded="false">
							<li><a href="taikhoannhanvien">Tài khoản nhân viên</a></li>
							<li><a href="taikhoankhachhang">Tài khoản khách hàng</a></li>	
						</ul>
                    </li>
                    <li>
                        <a href="widget-basic.html" class="" aria-expanded="false">
							<i class="fas fa-file-alt"></i>
							<span class="nav-text">Quản lý sản phẩm</span>
						</a>
					</li>
                    <li>
                        <a href="widget-basic.html" class="" aria-expanded="false">
							<i class="fas fa-file-alt"></i>
							<span class="nav-text">Quản lý danh mục sản phẩm</span>
						</a>
					</li>
                    <li>
                        <a href="widget-basic.html" class="" aria-expanded="false">
							<i class="fas fa-file-alt"></i>
							<span class="nav-text">Quản lý đặc điểm sản phẩm</span>
						</a>
					</li>
                </ul>
            </div>
        </div>
    </div>
