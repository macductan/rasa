<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Đồ dùng giáo dục</title>
	<link rel="stylesheet" href="style.css">
	<link rel="icon" type="image/png" href="{$base_url}assets/img/logo.png"/>
	<link rel="stylesheet" href="{$base_url}assets/css/common.css">
	<link rel="stylesheet" href="{$base_url}assets/css/font-awesome.min.css">
	<link rel="stylesheet" href="{$base_url}assets/template_giaodien/css/bootstrap.min.css">
	<link rel="stylesheet" href="{$base_url}assets/template_giaodien/css/owl.carousel.css">
	<link rel="stylesheet" href="{$base_url}assets/template_giaodien/css/flags.css">
	<link rel="stylesheet" href="{$base_url}assets/template_giaodien/css/main.css">
	{if $template=="Vgiohang"}<link rel="stylesheet" href="{$base_url}assets/css/giohang.css">{/if}
</head>

<body>
	<div class="quickViewWrap xv-hide">
		<div class="quickView">
			<ul class="quickActions clearfix">
				<li title="Profile">
					<!--<span class="userAlerts-count qvCount">01</span>-->
					<a data-wide="true" href="#qvt-user">
						<img src="{$base_url}assets/img/basic/avatar83.png" alt="">
						<span>Login</span>
					</a>
				</li>
				<li title="shopping cart">
					<span class="cartItems-count qvCount">1</span>
					<a data-wide="false" href="#qvt-cart">
						<img src="{$base_url}assets/img/basic/bag45.png" alt="">
						<span>Your Cart</span>
					</a>
				</li>
				<li>
					<!--<span class="compare-count qvCount">03</span>-->
					<a data-wide="false" href="#qvt-wishlist" title="Wish List">
						<img src="{$base_url}assets/img/basic/heart365.png" alt="">
						<span>Your Wishlist</span>
					</a>
				</li>
				<li>
					<!--<span class="compare-count qvCount">03</span>-->
					<a data-wide="false" href="#qvt-compare" title="Compare List">
						<img src="{$base_url}assets/img/basic/line.png" alt="">
						<span>Compare List</span>
					</a>
				</li>
			</ul>

			<div class="quickviewTabs">
				<div id="qvt-user" class="qv-panel">
					<a href="#" class="closeQPanel"><i class="fa fa-close"></i></a>
					<form method="post" action="login" id="login">
						<p class="text-center"> <img src="{$base_url}assets/img/basic/padlock106.png" alt=""></p>
						<input type="text" name="username" placeholder="Username" id="username">
						<input type="password" name="password" placeholder="Password" id="password">
						<a href="#" class="lost">Lost your password?</a><br><br>
						<input type="submit" name="submit" value="Login" class="btn-blue btn">
					</form>
				</div>

				<div id="qvt-cart" class="qv-panel">
					<a href="#" class="closeQPanel"><i class="fa fa-close"></i></a>
					<ul class="quickShoping-list">
						<li>
							<a data-pid="xyz101" data-qty="2" class="qv-remove-prod fa fa-remove" href="#"></a>
							<a href="#"><img src="{$base_url}assets/img/news-img-2.png" alt=""></a>
							<span>x2</span>
						</li>
					</ul>

					<a href="#" class="btn btn-blue triggerCart" title="check out">
						<i class="fa fa-cart-arrow-down"></i>
						<span>Visit Checkout Page</span>
					</a>
				</div>

				<div id="qvt-wishlist" class="qv-panel">
					<a href="#" class="closeQPanel"><i class="fa fa-close"></i></a>
					<ul class="quickShoping-list empty"></ul>
					<a href="#" class="btn btn-blue triggerCart" title="View Wishlist Page">
						<i class="fa fa-heart"></i>
						<span>Visit Checkout Page</span>
					</a>
				</div>

				<div id="qvt-compare" class="qv-panel">
					<a href="#" class="closeQPanel"><i class="fa fa-close"></i></a>
					<ul class="quickShoping-list empty"></ul>
					<a href="#" class="btn btn-blue triggerCompare" title="Compare Items">
						<i class="fa fa-exchange"></i>
						<span>Visit Checkout Page</span>
					</a>
				</div>
			</div>
		</div>
	</div>
	<div class="qv-alert"><img src="{$base_url}assets/img/basic/shopping102.png" alt=""> Product Added Successfully</div>

	<!-- Header -->
	<header class="doc-header header-light shadow-bottom">
		<!--top header-->
		<div class="header-bottom">
			<div class="container">
				<a class="logo" href="index1.html">
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
						<li><a href="#">Danh mục</a></li>
						<li><a href="#">Sản phẩm yêu thích</a></li>
						<li><a href="#">Đăng nhập</a></li>
						<li><a href="#">Đăng ký</a></li>
					</ul>
					<a href="#" class="openCart"></a>
					<div class="table-responsive cart-calculations  text-center">
						<table class="table">
							<tbody class="shadow-around">
								<tr class="table-body">
									<td>
										<figure><img src="{$base_url}assets/img/cart-img-1.png" alt="" /></figure>
									</td>
									<td>
										<div class="cart-wrappper text-left">
											<h6>Sony Powershot G2530</h6>
											<p><span>Availability</span>: Available in Stock</p>
											<p><span>Product Code</span>: CwT4a</p>
										</div>
									</td>
									<td>
										<div class="quantity-control">
											<span class="btn-cart btn-square btn-plus btn-qty"><i class="fa fa-plus"></i></span>
											<input type="text" value="2" data-min="1" data-minalert="Minimum limit reached" data-max="10" data-maxalert="Maximum limit reached" data-invalid="Enter valid quantity">
											<span class="btn-cart btn-square btn-minus btn-qty"><i class="fa fa-minus"></i></span>
										</div>
									</td>
									<td>
										<span class="cart-content">Unit Price:</span>
										<span class="cart-price">$250</span>
									</td>
									<td>
										<span class="cart-content">Sub Price:</span>
										<span class="cart-price">$500</span>
									</td>
									<td>
										<a class="cart-action" href="#"><i class="fa fa-trash-o"></i></a>
									</td>
								</tr>
								<tr class="table-body">
									<td>
										<figure><img src="{$base_url}assets/img/cart-img-2.png" alt="" /></figure>
									</td>
									<td>
										<div class="cart-wrappper text-left">
											<h6>Macbook 2015</h6>
											<p><span>Availability</span>: Available in Stock</p>
											<p><span>Product Code</span>: CwT4a</p>
										</div>
									</td>
									<td>
										<div class="quantity-control">
											<span class="btn-cart btn-square btn-plus btn-qty"><i class="fa fa-plus"></i></span>
											<input type="text" value="2" data-min="1" data-minalert="Minimum limit reached" data-max="5" data-maxalert="Maximum limit reached" data-invalid="Enter valid quantity">
											<span class="btn-cart btn-square btn-minus btn-qty"><i class="fa fa-minus"></i></span>
										</div>
									</td>
									<td>
										<span class="cart-content">Unit Price:</span>
										<span class="cart-price">$1500</span>
									</td>
									<td>
										<span class="cart-content">Sub Price:</span>
										<span class="cart-price">$1500</span>
									</td>
									<td>
										<a class="cart-action" href="#"><i class="fa fa-trash-o"></i></a>
									</td>
								</tr>
								<tr class="table-body style">
									<td></td>
									<td>
										<a href="cart1.html" class="btn-cart btn-rectangle">View Cart</a>
										<a href="checkout1.html" class="btn-cart btn-rectangle">Checkout</a>
									</td>
									<td></td>
									<td></td>
									<td class="style">TOTAL:<span class="colpink">$2031</span></td>
									<td></td>
								</tr>
							</tbody>
						</table>
					</div>
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
			<form class="search-form">
				<div class="custome-select">
					<b class="fa fa-caret-down"></b>
					<span>Select a Category</span>
					<select class="search-cate notranslate" id="search-dropdown-box">
						<option value="">All Categories</option>
					</select>
				</div>
				<input type="text" placeholder="I am searching for...">
				<button type="submit"><i class="fa fa-search"></i></button>
			</form>
		</div>
	</div>
	<!--social-search-->