<?php /* Smarty version Smarty-3.1.21-dev, created on 2022-06-27 15:01:17
         compiled from "F:\xampp\htdocs\totnghiep\application\views\layouts\Vheader.php" */ ?>
<?php /*%%SmartyHeaderCode:1976762b963cd5f0661-93290166%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2b8875934480427f3f5909102010307b24cd2505' => 
    array (
      0 => 'F:\\xampp\\htdocs\\totnghiep\\application\\views\\layouts\\Vheader.php',
      1 => 1656315793,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1976762b963cd5f0661-93290166',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'url' => 0,
    'ver' => 0,
    'current_page' => 0,
    'user' => 0,
    'session' => 0,
    'listmenu' => 0,
    'ncn' => 0,
    'firstmenu' => 0,
    'dropdown' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_62b963cd678ba3_01891337',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62b963cd678ba3_01891337')) {function content_62b963cd678ba3_01891337($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">

<head>
	<?php $_smarty_tpl->tpl_vars['ver'] = new Smarty_variable(9.9, null, 0);?>
	<meta charset="utf-8">
	<base href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Hồ sơ tốt nghiệp</title>
	<link rel="icon" type="image/png" href="assets/images/icon/hat-icon.png" />
	<link href="assets/plugins/fontawesome/css/all.min.css" rel="stylesheet">
	<link rel="stylesheet" href="assets/plugins/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/plugins/css/select2.min.css">
	<link rel="stylesheet" href="assets/plugins/css/style.css">
	<link rel="stylesheet" href="assets/plugins/css/common.css?v=<?php echo $_smarty_tpl->tpl_vars['ver']->value;?>
">
	<link rel="stylesheet" href="assets/plugins/css/quill.snow.css">
	<?php if ($_smarty_tpl->tpl_vars['current_page']->value=="home") {?><link rel="stylesheet" href="assets/plugins/css/head.css?v=<?php echo $_smarty_tpl->tpl_vars['ver']->value;?>
"><?php }?>

	<?php echo '<script'; ?>
 src="assets/plugins/js/jquery.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="assets/plugins/js/popper.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="assets/plugins/js/bootstrap.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src='assets/plugins/js/chart.min.js'><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="assets/plugins/js/sweetalert2.all.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="assets/plugins/js/select2.min.js"><?php echo '</script'; ?>
>
	<?php if ($_smarty_tpl->tpl_vars['current_page']->value=='login'||$_smarty_tpl->tpl_vars['current_page']->value=='userInfo'||$_smarty_tpl->tpl_vars['current_page']->value=='changePassword') {?><link rel="stylesheet" href="assets/plugins/css/login.css"><?php }?>
	<?php if ($_smarty_tpl->tpl_vars['current_page']->value=='excelFilesManager') {?><?php echo '<script'; ?>
 src="assets/plugins/js/hethong/excelFilesManager.js?v=<?php echo $_smarty_tpl->tpl_vars['ver']->value;?>
" defer><?php echo '</script'; ?>
><?php }?>
	<?php if ($_smarty_tpl->tpl_vars['current_page']->value=='findStudent') {?><?php echo '<script'; ?>
 src="assets/plugins/js/phong/findStudent.js?v=<?php echo $_smarty_tpl->tpl_vars['ver']->value;?>
" defer><?php echo '</script'; ?>
><?php }?>
	<?php if ($_smarty_tpl->tpl_vars['current_page']->value=='studentScope'&&$_smarty_tpl->tpl_vars['user']->value['username']=="dhvan") {?><?php echo '<script'; ?>
 src="assets/plugins/js/phong/studentScope.js?v=<?php echo $_smarty_tpl->tpl_vars['ver']->value;?>
" defer><?php echo '</script'; ?>
><?php }?>
	<?php if ($_smarty_tpl->tpl_vars['current_page']->value=='graduationPeriod') {?><?php echo '<script'; ?>
 src="assets/plugins/js/phong/graduationPeriod.js?v=<?php echo $_smarty_tpl->tpl_vars['ver']->value;?>
" defer><?php echo '</script'; ?>
><?php }?>
	<?php if ($_smarty_tpl->tpl_vars['current_page']->value=='graduationSummary') {?><?php echo '<script'; ?>
 src="assets/plugins/js/phong/graduationSummary.js?v=<?php echo $_smarty_tpl->tpl_vars['ver']->value;?>
" defer><?php echo '</script'; ?>
><?php }?>
	<?php if ($_smarty_tpl->tpl_vars['current_page']->value=='studentManager') {?><?php echo '<script'; ?>
 src="assets/plugins/js/phong/studentManager.js?v=<?php echo $_smarty_tpl->tpl_vars['ver']->value;?>
" defer><?php echo '</script'; ?>
><link rel="stylesheet" href="assets/plugins/css/studentManager.css"><?php }?>
	<?php if ($_smarty_tpl->tpl_vars['current_page']->value=='facultyManager') {?><?php echo '<script'; ?>
 src="assets/plugins/js/phong/facultyManager.js?v=<?php echo $_smarty_tpl->tpl_vars['ver']->value;?>
" defer><?php echo '</script'; ?>
><?php }?>
	<?php if ($_smarty_tpl->tpl_vars['current_page']->value=='confirmGraduate') {?>
		<?php echo '<script'; ?>
 src="assets/plugins/js/phong/confirmGraduate.js?v=<?php echo $_smarty_tpl->tpl_vars['ver']->value;?>
" defer><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="assets/plugins/js/phong/exportExcel.js?v=<?php echo $_smarty_tpl->tpl_vars['ver']->value;?>
" defer><?php echo '</script'; ?>
>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['current_page']->value=="recordManager") {?>
		<?php echo '<script'; ?>
 src="assets/plugins/js/phong/recordManager.js?v=<?php echo $_smarty_tpl->tpl_vars['ver']->value;?>
" defer><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="assets/plugins/js/phong/exportExcel.js?v=<?php echo $_smarty_tpl->tpl_vars['ver']->value;?>
" defer><?php echo '</script'; ?>
>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['current_page']->value=="insertExcel") {?><?php echo '<script'; ?>
 src="assets/plugins/js/phong/insertExcel.js?v=<?php echo $_smarty_tpl->tpl_vars['ver']->value;?>
" defer><?php echo '</script'; ?>
><?php }?>
	<?php if ($_smarty_tpl->tpl_vars['current_page']->value=="importListGraStu") {?><?php echo '<script'; ?>
 src="assets/plugins/js/xlsx.full.min.js" defer><?php echo '</script'; ?>
><?php echo '<script'; ?>
 src="assets/plugins/js/sha1.js" defer><?php echo '</script'; ?>
><?php echo '<script'; ?>
 src="assets/plugins/js/phong/importListGraStu.js?v=<?php echo $_smarty_tpl->tpl_vars['ver']->value;?>
" defer><?php echo '</script'; ?>
><?php }?>
	<?php if ($_smarty_tpl->tpl_vars['current_page']->value=="addEligibleStudents") {?><?php echo '<script'; ?>
 src="assets/plugins/js/xlsx.full.min.js" defer><?php echo '</script'; ?>
><?php echo '<script'; ?>
 src="assets/plugins/js/sha1.js" defer><?php echo '</script'; ?>
><?php echo '<script'; ?>
 src="assets/plugins/js/khoa/addEligibleStudents.js?v=<?php echo $_smarty_tpl->tpl_vars['ver']->value;?>
" defer><?php echo '</script'; ?>
><?php }?>
	<?php if ($_smarty_tpl->tpl_vars['current_page']->value=="addStudentScore") {?><?php echo '<script'; ?>
 src="assets/plugins/js/xlsx.full.min.js" defer><?php echo '</script'; ?>
><?php echo '<script'; ?>
 src="assets/plugins/js/sha1.js" defer><?php echo '</script'; ?>
><?php echo '<script'; ?>
 src="assets/plugins/js/khoa/addStudentScore.js?v=<?php echo $_smarty_tpl->tpl_vars['ver']->value;?>
" defer><?php echo '</script'; ?>
><?php }?>
	<?php if ($_smarty_tpl->tpl_vars['current_page']->value=="importStudentScope") {?><?php echo '<script'; ?>
 src="assets/plugins/js/xlsx.full.min.js" defer><?php echo '</script'; ?>
><?php echo '<script'; ?>
 src="assets/plugins/js/sha1.js" defer><?php echo '</script'; ?>
><?php echo '<script'; ?>
 src="assets/plugins/js/phong/importStudentScope.js?v=<?php echo $_smarty_tpl->tpl_vars['ver']->value;?>
" defer><?php echo '</script'; ?>
><?php }?>
	<?php if ($_smarty_tpl->tpl_vars['current_page']->value=="eligibleStudents") {?><?php echo '<script'; ?>
 src="assets/plugins/js/khoa/eligibleStudents.js?v=<?php echo $_smarty_tpl->tpl_vars['ver']->value;?>
" defer><?php echo '</script'; ?>
><?php }?>
	<?php if ($_smarty_tpl->tpl_vars['current_page']->value=='manageFile') {?><?php echo '<script'; ?>
 src="assets/plugins/js/khoa/manageFile.js?v=<?php echo $_smarty_tpl->tpl_vars['ver']->value;?>
" defer><?php echo '</script'; ?>
><?php }?>
	<?php if ($_smarty_tpl->tpl_vars['current_page']->value=='addRecord') {?><?php echo '<script'; ?>
 src="assets/plugins/js/sinhvien/addRecord1.js?v=<?php echo $_smarty_tpl->tpl_vars['ver']->value;?>
" defer><?php echo '</script'; ?>
><?php }?>
	<?php if ($_smarty_tpl->tpl_vars['current_page']->value=='summaryStudent') {?><?php echo '<script'; ?>
 src="assets/plugins/js/hethong/summaryStudent.js?v=<?php echo $_smarty_tpl->tpl_vars['ver']->value;?>
" defer><?php echo '</script'; ?>
><?php }?>
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
				<?php if (!!$_smarty_tpl->tpl_vars['session']->value) {?>
					<?php  $_smarty_tpl->tpl_vars['ncn'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ncn']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['listmenu']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ncn']->key => $_smarty_tpl->tpl_vars['ncn']->value) {
$_smarty_tpl->tpl_vars['ncn']->_loop = true;
?>
						<?php if ($_smarty_tpl->tpl_vars['ncn']->value['id_nhomcn']==0) {?>
							<?php  $_smarty_tpl->tpl_vars['firstmenu'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['firstmenu']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ncn']->value['chucnang']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['firstmenu']->key => $_smarty_tpl->tpl_vars['firstmenu']->value) {
$_smarty_tpl->tpl_vars['firstmenu']->_loop = true;
?>
								<?php if ($_smarty_tpl->tpl_vars['firstmenu']->value['sTrangThai']=="hien") {?>
								<li class="nav-item <?php if ($_smarty_tpl->tpl_vars['current_page']->value=='graduationPeriod') {?>active<?php }?>">
									<a class="nav-link  dropdown-toggle" href="<?php echo $_smarty_tpl->tpl_vars['firstmenu']->value['PK_sMaChucNang'];?>
">
										<i class="ml-2 <?php echo $_smarty_tpl->tpl_vars['firstmenu']->value['sIconCN'];?>
"></i>
										<span class="mr-2"><?php echo $_smarty_tpl->tpl_vars['firstmenu']->value['sTenChucNang'];?>
</span>
									</a>
								</li>
								<?php }?>
							<?php } ?>
						<?php } else { ?>
							<li class="nav-item dropdown">
									<a class="nav-link  dropdown-toggle <?php if (in_array($_smarty_tpl->tpl_vars['current_page']->value,array('manageFile','addRecord'))) {?>active<?php }?>" href="#" data-toggle="dropdown" for="item1">
										<i class="ml-2 <?php echo $_smarty_tpl->tpl_vars['ncn']->value['icon'];?>
"></i> <?php echo $_smarty_tpl->tpl_vars['ncn']->value['tennhomcn'];?>

										<img src="assets/images/icon/arrow.png" width="10px" alt="">
									</a>
									<ul class="dropdown-menu fade-up" id="item1" name="item">
										<?php  $_smarty_tpl->tpl_vars['dropdown'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['dropdown']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ncn']->value['chucnang']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['dropdown']->key => $_smarty_tpl->tpl_vars['dropdown']->value) {
$_smarty_tpl->tpl_vars['dropdown']->_loop = true;
?>
											<?php if ($_smarty_tpl->tpl_vars['dropdown']->value['sTrangThai']=="hien") {?>
											<li><a class="dropdown-item" href="<?php echo $_smarty_tpl->tpl_vars['dropdown']->value['PK_sMaChucNang'];?>
"><i class="<?php echo $_smarty_tpl->tpl_vars['dropdown']->value['sIconCN'];?>
"></i> <?php echo $_smarty_tpl->tpl_vars['dropdown']->value['sTenChucNang'];?>
</a></li>
											<?php }?>
										<?php } ?>
									</ul>
							</li>
						<?php }?>
					<?php } ?>
				<?php }?>
<!-- ------------------------------------------------------ -->
			
				<?php if (!$_smarty_tpl->tpl_vars['session']->value) {?>
				<li class="nav-item <?php if ($_smarty_tpl->tpl_vars['current_page']->value=='login') {?>active<?php }?>">
					<a class="nav-link dropdown-toggle" href="login">
						<i class="fas fa-sign-in-alt ml-2"></i>
						<span class="mr-2">Đăng nhập</span>
					</a>
				</li>
				<?php }?>
				
			</ul>

		</div>
		<?php if (!!$_smarty_tpl->tpl_vars['session']->value) {?>
		<div class="container-fluid row" style="justify-content: flex-end">
			
				<div class="inn-user-menu__nav__avatar-btn">
				<strong id="tenquyen"></strong>
					<span class="inn-user-menu__nav__avatar-btn__link float-right">
						<i class="fas fa-user-circle my-1"></i>
					</span>
					<div class="inn-user-menu__nav">
						<div class="inn-user-menu__nav__portal">
							<span title="" class="inn-user-menu__nav__portal__item">
								<span class="text-white"><?php echo $_smarty_tpl->tpl_vars['session']->value['ten'];?>
</span>
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
		<?php }?>
	</nav>
<?php }} ?>
