<!DOCTYPE html>
<html lang="en">

<head>
	{$ver = 9.9}
	<meta charset="utf-8">
	<base href="{$url}">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Hồ sơ tốt nghiệp</title>
	<link rel="icon" type="image/png" href="assets/images/icon/hat-icon.png" />
	<link href="assets/plugins/fontawesome/css/all.min.css" rel="stylesheet">
	<link rel="stylesheet" href="assets/plugins/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/plugins/css/select2.min.css">
	<link rel="stylesheet" href="assets/plugins/css/style.css">
	<link rel="stylesheet" href="assets/plugins/css/common.css?v={$ver}">
	<link rel="stylesheet" href="assets/plugins/css/quill.snow.css">
	{if $current_page == "home"}<link rel="stylesheet" href="assets/plugins/css/head.css?v={$ver}">{/if}

	<script src="assets/plugins/js/jquery.min.js"></script>
	<script src="assets/plugins/js/popper.min.js"></script>
	<script src="assets/plugins/js/bootstrap.min.js"></script>
	<script src='assets/plugins/js/chart.min.js'></script>
	<script src="assets/plugins/js/sweetalert2.all.min.js"></script>
	<script src="assets/plugins/js/select2.min.js"></script>
	{if $current_page == 'login' || $current_page == 'userInfo' || $current_page == 'changePassword'}<link rel="stylesheet" href="assets/plugins/css/login.css">{/if}
	{if $current_page == 'excelFilesManager'}<script src="assets/plugins/js/hethong/excelFilesManager.js?v={$ver}" defer></script>{/if}
	{if $current_page == 'findStudent'}<script src="assets/plugins/js/phong/findStudent.js?v={$ver}" defer></script>{/if}
	{if $current_page == 'studentScope' && $user.username == "dhvan"}<script src="assets/plugins/js/phong/studentScope.js?v={$ver}" defer></script>{/if}
	{if $current_page == 'graduationPeriod'}<script src="assets/plugins/js/phong/graduationPeriod.js?v={$ver}" defer></script>{/if}
	{if $current_page == 'graduationSummary'}<script src="assets/plugins/js/phong/graduationSummary.js?v={$ver}" defer></script>{/if}
	{if $current_page == 'studentManager'}<script src="assets/plugins/js/phong/studentManager.js?v={$ver}" defer></script><link rel="stylesheet" href="assets/plugins/css/studentManager.css">{/if}
	{if $current_page == 'facultyManager'}<script src="assets/plugins/js/phong/facultyManager.js?v={$ver}" defer></script>{/if}
	{if $current_page == 'confirmGraduate'}
		<script src="assets/plugins/js/phong/confirmGraduate.js?v={$ver}" defer></script>
		<script src="assets/plugins/js/phong/exportExcel.js?v={$ver}" defer></script>
	{/if}
	{if $current_page == "recordManager"}
		<script src="assets/plugins/js/phong/recordManager.js?v={$ver}" defer></script>
		<script src="assets/plugins/js/phong/exportExcel.js?v={$ver}" defer></script>
	{/if}
	{if $current_page == "insertExcel"}<script src="assets/plugins/js/phong/insertExcel.js?v={$ver}" defer></script>{/if}
	{if $current_page == "importListGraStu"}<script src="assets/plugins/js/xlsx.full.min.js" defer></script><script src="assets/plugins/js/sha1.js" defer></script><script src="assets/plugins/js/phong/importListGraStu.js?v={$ver}" defer></script>{/if}
	{if $current_page == "addEligibleStudents"}<script src="assets/plugins/js/xlsx.full.min.js" defer></script><script src="assets/plugins/js/sha1.js" defer></script><script src="assets/plugins/js/khoa/addEligibleStudents.js?v={$ver}" defer></script>{/if}
	{if $current_page == "addStudentScore"}<script src="assets/plugins/js/xlsx.full.min.js" defer></script><script src="assets/plugins/js/sha1.js" defer></script><script src="assets/plugins/js/khoa/addStudentScore.js?v={$ver}" defer></script>{/if}
	{if $current_page == "importStudentScope"}<script src="assets/plugins/js/xlsx.full.min.js" defer></script><script src="assets/plugins/js/sha1.js" defer></script><script src="assets/plugins/js/phong/importStudentScope.js?v={$ver}" defer></script>{/if}
	{if $current_page == "eligibleStudents"}<script src="assets/plugins/js/khoa/eligibleStudents.js?v={$ver}" defer></script>{/if}
	{if $current_page == 'manageFile'}<script src="assets/plugins/js/khoa/manageFile.js?v={$ver}" defer></script>{/if}
	{if $current_page == 'addRecord'}<script src="assets/plugins/js/sinhvien/addRecord1.js?v={$ver}" defer></script>{/if}
	{if $current_page == 'summaryStudent'}<script src="assets/plugins/js/hethong/summaryStudent.js?v={$ver}" defer></script>{/if}
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
				{if !!$session}
					{foreach $listmenu as $ncn}
						{if $ncn.id_nhomcn == 0}
							{foreach $ncn.chucnang as $firstmenu}
								{if $firstmenu.sTrangThai == "hien"}
								<li class="nav-item {if $current_page == 'graduationPeriod'}active{/if}">
									<a class="nav-link  dropdown-toggle" href="{$firstmenu.PK_sMaChucNang}">
										<i class="ml-2 {$firstmenu.sIconCN}"></i>
										<span class="mr-2">{$firstmenu.sTenChucNang}</span>
									</a>
								</li>
								{/if}
							{/foreach}
						{else}
							<li class="nav-item dropdown">
									<a class="nav-link  dropdown-toggle {if in_array($current_page, ['manageFile','addRecord'])}active{/if}" href="#" data-toggle="dropdown" for="item1">
										<i class="ml-2 {$ncn.icon}"></i> {$ncn.tennhomcn}
										<img src="assets/images/icon/arrow.png" width="10px" alt="">
									</a>
									<ul class="dropdown-menu fade-up" id="item1" name="item">
										{foreach $ncn.chucnang as $dropdown}
											{if $dropdown.sTrangThai == "hien"}
											<li><a class="dropdown-item" href="{$dropdown.PK_sMaChucNang}"><i class="{$dropdown.sIconCN}"></i> {$dropdown.sTenChucNang}</a></li>
											{/if}
										{/foreach}
									</ul>
							</li>
						{/if}
					{/foreach}
				{/if}
<!-- ------------------------------------------------------ -->
			
				{if !$session}
				<li class="nav-item {if $current_page == 'login'}active{/if}">
					<a class="nav-link dropdown-toggle" href="login">
						<i class="fas fa-sign-in-alt ml-2"></i>
						<span class="mr-2">Đăng nhập</span>
					</a>
				</li>
				{/if}
				
			</ul>

		</div>
		{if !!$session}
		<div class="container-fluid row" style="justify-content: flex-end">
			
				<div class="inn-user-menu__nav__avatar-btn">
				<strong id="tenquyen"></strong>
					<span class="inn-user-menu__nav__avatar-btn__link float-right">
						<i class="fas fa-user-circle my-1"></i>
					</span>
					<div class="inn-user-menu__nav">
						<div class="inn-user-menu__nav__portal">
							<span title="" class="inn-user-menu__nav__portal__item">
								<span class="text-white">{$session.ten}</span>
							</span>
						</div>
						<div class="inn-user-menu__nav__item__container">
							<div class="action-menu"> 
								<a href="logout?logout=1"><i class="fas fa-power-off"></i><span>Đăng xuất</span></a>
							</div>
						</div>
					</div>
				</div>
			
		</div>
		{/if}
	</nav>
