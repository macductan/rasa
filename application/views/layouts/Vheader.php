<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Đồ dùng giáo dục</title>
	<link rel="stylesheet" href="style.css">
	<link rel="icon" type="image/png" href="{$base_url}assets/img/logo.png"/>
	<link rel="stylesheet" href="{$base_url}assets/css/common.css">
	{if $template=="Vgiohang"}<link rel="stylesheet" href="{$base_url}assets/css/giohang.css">{/if}
	<link rel="stylesheet" href="{$base_url}assets/css/style.css">

	<!-- Template -->
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,400italic,700,600' rel='stylesheet' type='text/css'>
	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
	<link rel="stylesheet" type="text/css" href="{$base_url}assets/template_giaodien/css/bootstrap.min.css">
	<script src="{$base_url}assets/template_giaodien/js/jquery3.6.0.min.js"></script>
	<script src="{$base_url}assets/template_giaodien/js/bootstrap.min.js"></script>
	<!-- <link rel="stylesheet" type="text/css" href="{$base_url}assets/template_giaodien/js/jquery3.6.0.min.js">
	<link rel="stylesheet" type="text/css" href="{$base_url}assets/template_giaodien/js/bootstrap.min.js"> -->
	<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> -->
	<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->
	<link rel="stylesheet" type="text/css" href="{$base_url}assets/template_giaodien/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="{$base_url}assets/template_giaodien/css/owl.carousel.css">
	<link rel="stylesheet" type="text/css" href="{$base_url}assets/template_giaodien/css/flags.css">
	<link rel="stylesheet" href="{$base_url}assets/template_giaodien/css/main.css">
	<!--  -->
</head>

<body>
	<button id="open-boxchat">
		<i class="fa fa-paper-plane" aria-hidden="true"></i>
	</button>
	<div class="wrapper">
		<button id="close-boxchat">>></button>
		<section class="chat-area">
			<header>
				<div class="b1">
					<img src="assets\imgchatbox\but1.webp" alt="">
					<div class="details">
						<span>Product Examples</span>
						<p>100.000 - 200.000</p>
					</div>
				</div>
				<a class="change-product" data-toggle="collapse" data-target="#collapseExample">
					<i class="fa fa-search" aria-hidden="true"></i>
				</a>
			</header>
			<div class="collapse" id="collapseExample">
				<div class="card card-body">
					<input type="text" placeholder="Tìm kiếm sản phẩm ...">
					<ul class="results">
						<li class="b1">
							<div class="group-details">
								<img class="search-item mr-3" src="assets\imgchatbox\but1.webp" alt="">
								<div class="details">
									<span class="item-name">Product Examples</span>
									<p>100.000 - 200.000</p>
								</div>
							</div>
							<a href=""><i class="fa fa-info-circle" aria-hidden="true"></i></a>
						</li>
						<li class="b1">
							<div class="group-details">
								<img class="search-item mr-3" src="assets\imgchatbox\but1.webp" alt="">
								<div class="details">
									<span class="item-name">Product Examples</span>
									<p>100.000 - 200.000</p>
								</div>
							</div>
							<a href=""><i class="fa fa-info-circle" aria-hidden="true"></i></a>
						</li>
						<li class="b1">
							<div class="group-details">
								<img class="search-item mr-3" src="assets\imgchatbox\but1.webp" alt="">
								<div class="details">
									<span class="item-name">Product Examples</span>
									<p>100.000 - 200.000</p>
								</div>
							</div>
							<a href=""><i class="fa fa-info-circle" aria-hidden="true"></i></a>
						</li>
					</ul>
				</div>
			</div>
			<div class="chat-box" id="chat-box">
				<div class="content-chat" id="content-chat">
					<div class="chat outgoing">
						<div class="details">
							<p>Hello bro</p>
						</div>
					</div>
					<div class="chat incoming">
						<img class="bot-avatar" src="assets\imgchatbox\ava2.jpg" alt="">
						<div class="details">
							<p>Bot utter hey dude</p>
							<div class="custom-button">
								<button class="active">Đỏ</button>
								<button class="active">Xanh</button>
							</div>
						</div>
					</div>
					<div class="suggest_product">
						<div class="item-suggest mb-1">
							<div class="inner-suggest">
								<img src="assets\imgchatbox\but1.webp" alt="">
								<div class="details-suggest">
									<span>Product Name</span>
									<p>100.000-200.000</p>
								</div>
							</div>
							<a href=""><i class="fa fa-info-circle" aria-hidden="true"></i></a>
						</div>
						<div class="item-suggest mb-1">
							<div class="inner-suggest">
								<img src="assets\imgchatbox\but1.webp" alt="">
								<div class="details-suggest">
									<span>Product Name</span>
									<p>100.000-200.000</p>
								</div>
							</div>
							<a href=""><i class="fa fa-info-circle" aria-hidden="true"></i></a>
						</div>
					</div>
					<div class="notify-mess">
						<p>Bạn đã chọn phân loại hàng <b>Đỏ</b></p>
					</div>
				</div>
			</div>
			<form action="#" class="typing-area">
				<input type="text" class="incoming_id" name="incoming_id" value="" hidden>
				<input type="text" name="message" class="input-field" id="input-field" placeholder="Type a message here..." autocomplete="off">
				<button id="send-button" class="" type="button"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
			</form>
		</section>
	</div>

	<!-- Header -->
	<header class="doc-header header-light shadow-bottom">
		<!--top header-->
		<div class="header-bottom">
			<div class="container">
				<a class="logo" href="home">
					<img id="img_logo" src="{$base_url}assets/img/logo.png" alt="" />
				</a>
				<nav>
					<a class="nav-triger" href="#">
						<img src="{$base_url}assets/img/basic/menu55.png" alt="">
					</a>
					<ul class="main_menu">
						<!-- <li class="home-dropdown"><a href="#">Pages</a>
							<ul>
								<li><a href="blog-masonry.html">Blog Masonry</a></li>
								<li><a href="blog1.html">Blog Classic</a></li>
								<li><a href="blog-detail.html">Blog Single</a></li>
								<li><a href="detail1.html">Product Detail</a></li>
								<li><a href="archive.html">Shop Archive</a></li>
								<li><a href="cart1.html">Shop Cart</a></li>
								<li><a href="checkout1.html">Shop Checkout</a></li>
							</ul>
						</li> -->
						<li><a href="home">Trang chủ</a></li>
						<li><a href="danhmuc">Danh mục</a></li>
						{if !isset($user)}
						<li><a href="dangnhap">Đăng nhập</a></li>
						<li><a href="dangky">Đăng ký</a></li>
						{else}
						<li><a href="{$trang_hientai}?action=dangxuat">Đăng xuất</a></li>
						{if $user['quyen'] == 'nhanvien'}
						<li><a href="dangky">Quản lý sản phẩm</a></li>
						{/if}
						{/if}
					</ul>
					{if isset($user) && $user['quyen'] == 'khachhang'}
					<a href="giohang" class="openCart"></a>
					{/if}
				</nav>
			</div>
		</div>
		<!--header Bottom-->
	</header>
	<!--document Header-->
	<!--========================================
Search
===========================================-->

	<div class="social-search style shadow-around style-wide">
		<div class="container">
			<div class="social">
				<span>Cửa hàng giáo dục<br>Email: chgiaoduc@gmail.com</span>
				<ul>
					<li><a href="#"><i class="fa fa-facebook"></i></a></li>
					<li><a href="#"><i class="fa fa-twitter"></i></a></li>
					<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
				</ul>
			</div>
			<form class="search-form" method="post" action="">
				<!-- <div class="custome-select">
					<b class="fa fa-caret-down"></b>
					<span>Select a Category</span>
					<select class="search-cate notranslate" id="search-dropdown-box">
						<option value="">All Categories</option>
					</select>
				</div> -->
				<input type="text" name="timkiem" placeholder="Tìm kiếm" value='{if isset($timkiem)}{$timkiem}{/if}'>
				<button type="submit" name="action" value="timkiem"><i class="fa fa-search"></i></button>
			</form>
		</div>
	</div>
	<!--social-search-->