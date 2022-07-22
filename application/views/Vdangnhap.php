<!DOCTYPE html>
<html lang="en">
<head>
	<title>Đồ dùng giáo dục</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="{$base_url}assets/css/common.css">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="{$base_url}assets/img/logo.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{$base_url}assets/template_login/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{$base_url}assets/template_login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{$base_url}assets/template_login/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{$base_url}assets/template_login/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{$base_url}assets/template_login/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{$base_url}assets/template_login/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{$base_url}assets/template_login/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{$base_url}assets/template_login/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{$base_url}assets/template_login/css/util.css">
	<link rel="stylesheet" type="text/css" href="{$base_url}assets/template_login/css/main.css">
<!--===============================================================================================-->
	<script src="{$base_url}assets/js/sweetalert2.js"></script>
</head>
<body>
	{if !empty($swal)}
	<script>
		Swal.fire({
			icon: '{$swal["icon"]}',
			title: '{$swal["title"]}',
			text: '{$swal["text"]}',
			footer: '{$swal["footer"]}',
		})
	</script>
	{/if}
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-t-20 p-b-20">
				<form class="login100-form validate-form" method="post" action="">
					<span class="login100-form-title p-b-40">
						{$ten_trang[$trang]}
					</span>
					<span class="login100-form-avatar">
						<a href="home">
							<img src="{$base_url}assets/img/logo.png" alt="AVATAR">
						</a>
					</span>

					<div class="wrap-input100 validate-input m-t-85 m-b-35" data-validate = "Enter username">
						<input class="input100" type="text" name="username">
						<span class="focus-input100" data-placeholder="Tên đăng nhập"></span>
					</div>

					{if $trang != 'quenmatkhau'}
					<div class="wrap-input100 validate-input m-b-50" data-validate="Enter password">
						<input class="input100" type="password" name="pass">
						<span class="focus-input100" data-placeholder="Mật khẩu"></span>
					</div>
					{if $trang == 'dangky'}
					<div class="wrap-input100 validate-input m-b-50" data-validate="Enter password">
						<input class="input100" type="password" name="repass">
						<span class="focus-input100" data-placeholder="Nhập lại mật khẩu"></span>
					</div>
					<div class="wrap-input100 validate-input m-b-50" data-validate="Enter repassword">
						<input class="input100" type="text" name="nameuser">
						<span class="focus-input100" data-placeholder="Nhập họ tên"></span>
					</div>
					{/if}
					{/if}

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" name="action" value="{$trang}">
							{$ten_trang[$trang]}
						</button>
					</div>

					<ul class="login-more p-t-50">
						{foreach $ten_trang as $uri => $ten}
							{if $uri != $trang}
								<li class="m-b-8">
									<a href="{$uri}" class="txt2 a_login">
										{$ten}
									</a>
								</li>
							{/if}
						{/foreach}
					</ul>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="{$base_url}assets/template_login/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="{$base_url}assets/template_login/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="{$base_url}assets/template_login/vendor/bootstrap/js/popper.js"></script>
	<script src="{$base_url}assets/template_login/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="{$base_url}assets/template_login/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="{$base_url}assets/template_login/vendor/daterangepicker/moment.min.js"></script>
	<script src="{$base_url}assets/template_login/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="{$base_url}assets/template_login/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="{$base_url}assets/template_login/js/main.js"></script>

</body>
</html>