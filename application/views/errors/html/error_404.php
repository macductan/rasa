<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<base href="home">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Hồ sơ tốt nghiệp</title>
	<link rel="icon" type="image/png" href="assets/images/icon/hat-icon.png" />
	<link href="assets/plugins/fontawesome/css/all.min.css" rel="stylesheet">
	<link rel="stylesheet" href="assets/plugins/css/bootstrap.min.css">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/quill/1.3.6/quill.snow.css">
	<script src="assets/plugins/js/jquery.min.js"></script>
	<script src="assets/plugins/js/popper.min.js"></script>
	<script src="assets/plugins/js/bootstrap.min.js"></script>
	<script src="assets/plugins/js/sweetalert2.all.min.js"></script>
	<!-- icon -->
	<script src="assets/plugins/js/feather.min.js"></script>

	<link rel="stylesheet" href="assets/plugins/css/style.css">
	<link rel="stylesheet" href="assets/plugins/css/common.css">
</head>

<body>
	<div class="bg"></div>
	<div class="wrapper">
	<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nav" aria-controls="navbarNav"
			aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<a class="navbar-brand font-weight-bold" href="">Hồ sơ tốt nghiệp</a>
		<div class="collapse navbar-collapse" id="nav">
			<ul class="navbar-nav bg-light m-0 p-3 p-lg-0">
				<li class="d-inline d-lg-none">
					<button data-toggle="collapse" data-target="#nav" class="close float-right">&times;</button>
				</li>
				<li class="nav-item {if $current_page == 'login'}active{/if}">
					<a class="nav-link dropdown-toggle" href="login">
						<i class="fas fa-sign-in-alt ml-2"></i>
						<span class="mr-2">Đăng nhập</span>
					</a>
				</li>
				
			</ul>

		</div>
	</nav>


    <div class="welcome col-md-12">
        <span class="inn-welcome" href="#">
            <span>Lỗi 404 - Không tìm thấy trang</span>
        </span>
    </div>
    <div class="col-md-12 content">
        <div class="button-action col-md-12">
                <div class="col-lg-8 col-md-10 col-12 offset-lg-2 offset-md-1 offset-sm-0 row">
                    <div class="box-btn col-md-5 col-auto mx-auto col-sm-auto offset-md-1">
						<a class="icon-btn" href="login?logout=true">
							<i class="fas fa-sign-in-alt ml-2" aria-hidden="true"></i>
							<div class="vl"></div>
							<span>Đăng nhập</span>
						</a>
                    </div>
                </div>
        </div>
    </div>
    <div class="footer">
    	Xây dựng và phát triển bởi
		<a class="font-weight-bold"	href="https://www.fb.com/tophatrienvachuyengiaocongnghe" target="blank" rel="nofollow"> FFC - Tổ phát	triển</a> © 2021
    	<i class="fa fa-heart" style="color:red" aria-hidden="true"></i>
    	Số điện thoại hỗ trợ: <b>0382978801 | 0985195550</b>
    </div>


    <script>
    	$(document).ready(function () {
    		$(document).click(
    			function (event) {
    				var target = $(event.target);
    				var _mobileMenuOpen = $(".navbar-collapse").hasClass("show");
    				if (_mobileMenuOpen === true && !target.hasClass("navbar-toggler")) {
    					$("button.navbar-toggler").click();
    				}
    			}
    		);
			$('.inn-user-menu__nav').hover(() => {
				$('.inn-user-menu__nav__avatar-btn__link').addClass('text-white');
			});
			$('.inn-user-menu__nav').on('mouseleave', () => {
				$('.inn-user-menu__nav__avatar-btn__link').removeClass('text-white');
			});
    	});

    </script>
	
    <script>
    	feather.replace();
    </script>
    </body>

    </html>
