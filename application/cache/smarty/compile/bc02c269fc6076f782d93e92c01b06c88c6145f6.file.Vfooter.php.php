<?php /* Smarty version Smarty-3.1.21-dev, created on 2022-06-27 15:01:17
         compiled from "F:\xampp\htdocs\totnghiep\application\views\layouts\Vfooter.php" */ ?>
<?php /*%%SmartyHeaderCode:2254162b963cd735b83-20042239%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bc02c269fc6076f782d93e92c01b06c88c6145f6' => 
    array (
      0 => 'F:\\xampp\\htdocs\\totnghiep\\application\\views\\layouts\\Vfooter.php',
      1 => 1656315794,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2254162b963cd735b83-20042239',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'inform' => 0,
    'messages' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_62b963cd742cc9_87927592',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62b963cd742cc9_87927592')) {function content_62b963cd742cc9_87927592($_smarty_tpl) {?>    <div class="footer">
		Hệ thống chạy tốt nhất trên trình duyệt <i class="fab fa-chrome" title="Google Chrome"></i> Google Chrome.
    	Xây dựng và phát triển bởi
		<a class="font-weight-bold"	href="https://www.fb.com/tophatrienvachuyengiaocongnghe" target="blank" rel="nofollow"> FFC - Tổ phát	triển</a> © 2021
    	<i class="fa fa-heart" style="color:red" aria-hidden="true"></i> Nếu gặp vấn đề liên quan đến quy trình hoặc hồ sơ đăng ký vui lòng liên hệ cố vấn học tập hoặc đơn vị đào tạo
    </div>
	</div>


    <?php echo '<script'; ?>
>
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

		$(".custom-file-input").on("change", function() {
			var fileName = $(this).val().split("\\").pop();
			$(this).siblings(".custom-file-label").addClass("selected").html(fileName);
		});

    	$('select.form-control:not(.normal)').select2({
			placeholder: $(this).data('placeholder')
		})
    <?php echo '</script'; ?>
>
    <?php if (!empty($_smarty_tpl->tpl_vars['inform']->value)) {?>
    <?php echo '<script'; ?>
 type="text/javascript">
        $(document).ready(function () {
            Swal.fire({
                title: 'Đã lưu thay đổi!',
                text: '<?php echo $_smarty_tpl->tpl_vars['inform']->value['title'];?>
',
                icon: '<?php echo $_smarty_tpl->tpl_vars['inform']->value['icon'];?>
'
            })
        });
    <?php echo '</script'; ?>
>
    <?php }?>

    <?php if (!empty($_smarty_tpl->tpl_vars['messages']->value)) {?>
    <?php echo '<script'; ?>
 type="text/javascript">
    	$(document).ready(function () {
    		const Toast = Swal.mixin({
    			toast: true,
    			position: 'top-end',
    			showConfirmButton: false,
    			timer: 6000,
    			timerProgressBar: true,
    			didOpen: (toast) => {
    				toast.addEventListener('mouseenter', Swal.stopTimer)
    				toast.addEventListener('mouseleave', Swal.resumeTimer)
    			}
    		})

    		Toast.fire({
    			icon: '<?php echo $_smarty_tpl->tpl_vars['messages']->value['icon'];?>
',
    			title: '<?php echo $_smarty_tpl->tpl_vars['messages']->value['title'];?>
'
    		})
		});
    <?php echo '</script'; ?>
>
    <?php }?>
    </body>

    </html>
<?php }} ?>
