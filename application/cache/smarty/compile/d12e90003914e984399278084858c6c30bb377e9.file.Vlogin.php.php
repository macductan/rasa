<?php /* Smarty version Smarty-3.1.21-dev, created on 2022-06-27 15:01:19
         compiled from "F:\xampp\htdocs\totnghiep\application\views\hethong\Vlogin.php" */ ?>
<?php /*%%SmartyHeaderCode:1631862b963cf0fd4b4-58455286%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd12e90003914e984399278084858c6c30bb377e9' => 
    array (
      0 => 'F:\\xampp\\htdocs\\totnghiep\\application\\views\\hethong\\Vlogin.php',
      1 => 1656315791,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1631862b963cf0fd4b4-58455286',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'csrf' => 0,
    'username' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_62b963cf12df36_13829053',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62b963cf12df36_13829053')) {function content_62b963cf12df36_13829053($_smarty_tpl) {?>	<form action="" method="post">
		<!-- <input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['csrf']->value['name'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['csrf']->value['hash'];?>
" /> -->
		<div class="login">
			<div class="login-header">
				<i class="fas fa-user-circle" style="font-size: 70px;" aria-hidden="true"></i>
				<h1 class="font-weight-bold mt-3">ĐĂNG NHẬP</h1>
			</div>
			<div class="login-form">
				<span><i class="fas fa-address-card" aria-hidden="true"></i> Tên đăng nhập:</span>
				<input name="username" type="text" placeholder="Tên đăng nhập" <?php if (!$_smarty_tpl->tpl_vars['username']->value) {?>autofocus<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
"/><br>
				<span><i class="fas fa-key" aria-hidden="true"></i> Mật khẩu:</span>
				<input name="password" type="password" placeholder="Mật khẩu" <?php if (!!$_smarty_tpl->tpl_vars['username']->value) {?>autofocus<?php }?> />
				<br>
				<button name="action" value="login" type="submit" class="confirm btn btn-default">Đăng nhập</button>
			</div>
		</div>
	</form>
<?php }} ?>
