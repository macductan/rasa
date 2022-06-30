<?php /* Smarty version Smarty-3.1.21-dev, created on 2022-06-27 15:01:17
         compiled from "F:\xampp\htdocs\totnghiep\application\views\hethong\Vhome.php" */ ?>
<?php /*%%SmartyHeaderCode:2115662b963cd67fe05-09846147%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ad3e23673079e6cf4299e6772126c8927802585f' => 
    array (
      0 => 'F:\\xampp\\htdocs\\totnghiep\\application\\views\\hethong\\Vhome.php',
      1 => 1656315791,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2115662b963cd67fe05-09846147',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'time' => 0,
    'v' => 0,
    'now' => 0,
    'tths' => 0,
    'session' => 0,
    'quyen' => 0,
    'current_page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_62b963cd72eb57_91206037',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62b963cd72eb57_91206037')) {function content_62b963cd72eb57_91206037($_smarty_tpl) {?><style>

</style>
	<?php if (isset($_smarty_tpl->tpl_vars['time']->value)) {?>
	<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['time']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
	<div class="welcome col-md-12 mt-3">
		<h1>ĐỢT TỐT NGHIỆP (<?php if ($_smarty_tpl->tpl_vars['v']->value['iChinhQuy']==1) {?>Hệ Chính Quy<?php }
if ($_smarty_tpl->tpl_vars['v']->value['iChinhQuy']==2) {?>Hệ Vừa Làm Vừa Học<?php }
if ($_smarty_tpl->tpl_vars['v']->value['iChinhQuy']==0) {?>Hệ Từ Xa<?php }?>)</h1>
		<ul class="timeline" id="timeline">
			<li class="li <?php if ($_smarty_tpl->tpl_vars['now']->value>=$_smarty_tpl->tpl_vars['v']->value['dNgayBD']) {?>complete<?php }?>">
				<div class="timestamp">
					<span>Sinh viên đăng ký</span>
					<span class="author"><?php echo date("d/m/Y",strtotime($_smarty_tpl->tpl_vars['v']->value['dNgayBD']));?>
 - <?php echo date("d/m/Y",strtotime($_smarty_tpl->tpl_vars['v']->value['dNgayKT_SV']));?>
</span>
				</div>
				<div class="status">
					<h4 class="<?php if ($_smarty_tpl->tpl_vars['now']->value<$_smarty_tpl->tpl_vars['v']->value['dNgayBD']||$_smarty_tpl->tpl_vars['now']->value>$_smarty_tpl->tpl_vars['v']->value['dNgayKT_SV']) {?>invisible<?php }?>">
					<?php if ($_smarty_tpl->tpl_vars['now']->value>=$_smarty_tpl->tpl_vars['v']->value['dNgayBD']&&$_smarty_tpl->tpl_vars['now']->value<=$_smarty_tpl->tpl_vars['v']->value['dNgayKT_SV']) {?> Đang diễn ra <?php } else { ?>Chưa diễn ra<?php }?>
					</h4>
				</div>
			</li>
			<li class="li <?php if ($_smarty_tpl->tpl_vars['now']->value>$_smarty_tpl->tpl_vars['v']->value['dNgayKT_SV']) {?>complete<?php }?>">
				<div class="timestamp">
					<span>ĐVĐT duyệt</span>
					<span class="author"><?php echo date("d/m/Y",strtotime(($_smarty_tpl->tpl_vars['v']->value['dNgayKT_SV']).(' + 1 days')));?>
 - <?php echo date("d/m/Y",strtotime($_smarty_tpl->tpl_vars['v']->value['dNgayKT_K']));?>
</span>
				</div>
				<div class="status">
					<h4 class="<?php if ($_smarty_tpl->tpl_vars['now']->value<=$_smarty_tpl->tpl_vars['v']->value['dNgayKT_SV']||$_smarty_tpl->tpl_vars['now']->value>$_smarty_tpl->tpl_vars['v']->value['dNgayKT_K']) {?>invisible<?php }?>">
					<?php if ($_smarty_tpl->tpl_vars['now']->value>$_smarty_tpl->tpl_vars['v']->value['dNgayKT_SV']&&$_smarty_tpl->tpl_vars['now']->value<=$_smarty_tpl->tpl_vars['v']->value['dNgayKT_K']) {?> Đang diễn ra <?php } else { ?> - <?php }?>
					</h4>
				</div>
			</li>
			<li class="li <?php if ($_smarty_tpl->tpl_vars['now']->value>$_smarty_tpl->tpl_vars['v']->value['dNgayKT_K']) {?>complete<?php }?>">
				<div class="timestamp">
					<span>Tiểu ban duyệt</span>
					<span class="author"><?php echo date("d/m/Y",strtotime(($_smarty_tpl->tpl_vars['v']->value['dNgayKT_K']).(' + 1 days')));?>
 - <?php echo date("d/m/Y",strtotime($_smarty_tpl->tpl_vars['v']->value['dNgayKT']));?>
</span>
				</div>
				<div class="status">
				<h4 style="<?php if ($_smarty_tpl->tpl_vars['now']->value<=$_smarty_tpl->tpl_vars['v']->value['dNgayKT_K']||$_smarty_tpl->tpl_vars['now']->value>$_smarty_tpl->tpl_vars['v']->value['dNgayKT']) {?>opacity: 0<?php }?>">
				<?php if ($_smarty_tpl->tpl_vars['now']->value>$_smarty_tpl->tpl_vars['v']->value['dNgayKT_K']&&$_smarty_tpl->tpl_vars['now']->value<=$_smarty_tpl->tpl_vars['v']->value['dNgayKT']) {?> Đang diễn ra <?php } else { ?> - <?php }?>
				</h4>
				</div>
			</li>
		</ul>     
		<table class="end-tb">
			<tr>
				<th colspan='3'>Thời gian kết thúc tiểu ban</th>
			</tr>
			<tr>
				<th>Tiểu ban tài chính</th>
				<th>Tiểu ban rèn luyện</th>
				<th>Tiểu ban đầu vào</th>
			</tr>
			<tr>
				<td><?php echo date("d/m/Y",strtotime($_smarty_tpl->tpl_vars['v']->value['dNgayKT_TC']));?>
</td>
				<td><?php echo date("d/m/Y",strtotime($_smarty_tpl->tpl_vars['v']->value['dNgayKT_RL']));?>
</td>
				<td><?php echo date("d/m/Y",strtotime($_smarty_tpl->tpl_vars['v']->value['dNgayKT_DV']));?>
</td>
			</tr>
		</table> 
<div class="timeline_mobile">
  
      <div class="box">
        
        <div class="container">
          
          <div class="lines">
            <div class="dot <?php if ($_smarty_tpl->tpl_vars['now']->value>=$_smarty_tpl->tpl_vars['v']->value['dNgayBD']&&$_smarty_tpl->tpl_vars['now']->value<=$_smarty_tpl->tpl_vars['v']->value['dNgayKT_SV']) {?>ongoing<?php }?>"></div>
            <div class="line"></div>
            <div class="dot <?php if ($_smarty_tpl->tpl_vars['now']->value>$_smarty_tpl->tpl_vars['v']->value['dNgayKT_SV']&&$_smarty_tpl->tpl_vars['now']->value<=$_smarty_tpl->tpl_vars['v']->value['dNgayKT_K']) {?>ongoing<?php }?>"></div>
            <div class="line"></div>
            <div class="dot <?php if ($_smarty_tpl->tpl_vars['now']->value>$_smarty_tpl->tpl_vars['v']->value['dNgayKT_K']&&$_smarty_tpl->tpl_vars['now']->value<=$_smarty_tpl->tpl_vars['v']->value['dNgayKT']) {?>ongoing<?php }?>"></div>
          </div>
          
          <div class="cards">
            <div class="card <?php if ($_smarty_tpl->tpl_vars['now']->value>=$_smarty_tpl->tpl_vars['v']->value['dNgayBD']&&$_smarty_tpl->tpl_vars['now']->value<=$_smarty_tpl->tpl_vars['v']->value['dNgayKT_SV']) {?>ongoing<?php }?>" style="top: 30px;">
              
              <h4><?php echo date("d/m/Y",strtotime($_smarty_tpl->tpl_vars['v']->value['dNgayBD']));?>
 - <?php echo date("d/m/Y",strtotime($_smarty_tpl->tpl_vars['v']->value['dNgayKT_SV']));?>
</h4>
              <p>Sinh viên đăng kí</p>
            </div>
            <div class="card mid <?php if ($_smarty_tpl->tpl_vars['now']->value>$_smarty_tpl->tpl_vars['v']->value['dNgayKT_SV']&&$_smarty_tpl->tpl_vars['now']->value<=$_smarty_tpl->tpl_vars['v']->value['dNgayKT_K']) {?>ongoing<?php }?>" style="top: 55px;">
              <h4><?php echo date("d/m/Y",strtotime(($_smarty_tpl->tpl_vars['v']->value['dNgayKT_SV']).(' + 1 days')));?>
 - <?php echo date("d/m/Y",strtotime($_smarty_tpl->tpl_vars['v']->value['dNgayKT_K']));?>
</h4>
              <p>ĐVĐT duyệt</p>
            </div>
            <div class="card <?php if ($_smarty_tpl->tpl_vars['now']->value>$_smarty_tpl->tpl_vars['v']->value['dNgayKT_K']&&$_smarty_tpl->tpl_vars['now']->value<=$_smarty_tpl->tpl_vars['v']->value['dNgayKT']) {?>ongoing<?php }?>" style="top: 90px;">
              <h4><?php echo date("d/m/Y",strtotime(($_smarty_tpl->tpl_vars['v']->value['dNgayKT_K']).(' + 1 days')));?>
 - <?php echo date("d/m/Y",strtotime($_smarty_tpl->tpl_vars['v']->value['dNgayKT']));?>
</h4>
              <p>Phòng duyệt</p>
            </div>
          </div>
          
        </div>
      </div>
      
      
    </div>
</div>
	<?php } ?>
	<?php } else { ?>
	<div class="welcome col-md-12 mt-3">
	<h3 class="text-center">Chưa có đợt tốt nghiệp nào!</h3> 
    </div>
	<?php }?>
<div class="main">
  
    
</div>
	<?php if (!!$_smarty_tpl->tpl_vars['tths']->value) {?>
	<!-- trạng tháy hồ sơ -->
    <div class="col-md-12 content">
		<div class="col-lg-4 col-sm-12 offset-lg-4">
			<div class="card custom-card h-100 alert <?php if (empty($_smarty_tpl->tpl_vars['tths']->value['FK_iMaTT'])) {?>alert-secondary<?php } elseif ($_smarty_tpl->tpl_vars['tths']->value['FK_iMaTT']==1) {?>alert-warning<?php } elseif ($_smarty_tpl->tpl_vars['tths']->value['FK_iMaTT']==11) {?>alert-info<?php } elseif ($_smarty_tpl->tpl_vars['tths']->value['FK_iMaTT']==2) {?>alert-primary<?php } elseif ($_smarty_tpl->tpl_vars['tths']->value['FK_iMaTT']==21) {?>alert-icream<?php } elseif ($_smarty_tpl->tpl_vars['tths']->value['FK_iMaTT']==3) {?>alert-success<?php } else { ?>alert-danger<?php }?> m-0" role="alert">
				<p class="alert-text"><strong>Trạng thái hồ sơ:</strong> <span><?php echo $_smarty_tpl->tpl_vars['tths']->value['sTenTT'];?>
</span></p>
				<p class="alert-text"><strong>Cán bộ duyệt:</strong> <span><?php if (!empty($_smarty_tpl->tpl_vars['tths']->value['cb_duyet']['sHoTen'])) {
echo $_smarty_tpl->tpl_vars['tths']->value['cb_duyet']['sHoTen'];
} else { ?>Chưa có<?php }?></span></p>
				<p class="alert-text"><strong>Thời gian duyệt:</strong> <span><?php if (!empty($_smarty_tpl->tpl_vars['tths']->value['cb_duyet']['thoigian'])) {
echo $_smarty_tpl->tpl_vars['tths']->value['cb_duyet']['thoigian'];
} else { ?>Chưa có<?php }?></span></p>
				<p class="alert-text"><strong>Ghi chú:</strong> <span><?php if (!empty($_smarty_tpl->tpl_vars['tths']->value['cb_duyet']['sGhiChu'])) {
echo $_smarty_tpl->tpl_vars['tths']->value['cb_duyet']['sGhiChu'];
} else {
}?></span></p>
			</div>
		</div>
    </div>
	<?php }?>

    <div class="col-md-12 content" id="home">
        <div class="button-action col-md-12">
                <div class="col-lg-8 col-md-10 col-12 offset-lg-2 offset-md-1 offset-sm-0 row">
					<?php if ($_smarty_tpl->tpl_vars['session']->value&&!in_array($_smarty_tpl->tpl_vars['session']->value['quyen'],array(1,2,3,4,5))) {?>
                    <div class="box-btn col-md-auto col-auto mx-auto col-sm-auto offset-md-1">
						<a class="icon-btn" href="addRecord">
							<i class="fas fa-file-signature ml-2" aria-hidden="true"></i>
							<div class="vl"></div>
							<span><?php if (!!$_smarty_tpl->tpl_vars['tths']->value) {?>Cập nhật<?php } else { ?>Thêm<?php }?> hồ sơ</span>
						</a>
                    </div>
					<?php }?>
					<?php if (!!$_smarty_tpl->tpl_vars['session']->value) {?>
					<?php if ($_smarty_tpl->tpl_vars['session']->value['quyen']==1||$_smarty_tpl->tpl_vars['session']->value['username']=='dhvan') {?>
                    <div class="box-btn col-md-auto col-auto mx-auto col-sm-auto">
						<a class="icon-btn" href="studentScope">
							<i class="fas fa-university" aria-hidden="true"></i>
							<div class="vl"></div>
							<span>Quy mô sinh viên</span>
						</a>
                    </div>
                    <div class="box-btn col-md-auto col-auto mx-auto col-sm-auto">
						<a class="icon-btn" href="graduationPeriod">
							<i class="fas fa-graduation-cap" aria-hidden="true"></i>
							<div class="vl"></div>
							<span>Đợt tốt nghiệp</span>
						</a>
                    </div>
					<?php }?>
					<?php if (in_array($_smarty_tpl->tpl_vars['session']->value['quyen'],array(1,2))) {?>
					<?php if ($_smarty_tpl->tpl_vars['session']->value['quyen']==2) {?>
                    <div class="box-btn col-md-auto col-auto mx-auto col-sm-auto offset-md-1">
						<a class="icon-btn" href="recordManager">
							<i class="fas fa-folder" aria-hidden="true"></i>
							<div class="vl"></div>
							<span>Danh sách hồ sơ</span>
						</a>
                    </div>
					<?php }?>
                    <!-- <div class="box-btn col-md-auto col-auto mx-auto col-sm-auto offset-md-1">
						<a class="icon-btn" href="studentMaganer">
							<i class="fas fa-user-graduate" aria-hidden="true"></i>
							<div class="vl"></div>
							<span>Danh sách SV</span>
						</a>
                    </div>
                    <div class="box-btn col-md-auto col-auto mx-auto col-sm-auto">
						<a class="icon-btn" href="facultyManager">
							<i class="fas fa-user-friends" aria-hidden="true"></i>
							<div class="vl"></div>
							<span>Tài khoản Khoa</span>
						</a>
                    </div> -->
                    <div class="box-btn col-md-auto col-auto mx-auto col-sm-auto">
						<a class="icon-btn" href="confirmGraduate">
							<i class="fas fa-user-graduate" aria-hidden="true"></i>
							<div class="vl"></div>
							<span>Xác nhận tốt nghiệp</span>
						</a>
                    </div>
                    <div class="box-btn col-md-auto col-auto mx-auto col-sm-auto">
						<a class="icon-btn" href="graduationSummary">
							<i class="fas fa-chart-pie" aria-hidden="true"></i>
							<div class="vl"></div>
							<span>Thống kê tốt nghiệp</span>
						</a>
                    </div>
                    <div class="box-btn col-md-auto col-auto mx-auto col-sm-auto offset-md-1">
						<a class="icon-btn" href="excelFilesManager">
							<i class="fas fa-file-excel" aria-hidden="true"></i>
							<div class="vl"></div>
							<span>Quản lý files Excel</span>
						</a>
                    </div>
					<?php } elseif (in_array($_smarty_tpl->tpl_vars['session']->value['quyen'],array(3,4,5))) {?>
                    <div class="box-btn col-md-auto col-auto mx-auto col-sm-auto offset-md-1">
						<a class="icon-btn" href="recordManager">
							<i class="fas fa-folder" aria-hidden="true"></i>
							<div class="vl"></div>
							<span>Danh sách hồ sơ</span>
						</a>
                    </div>
                    <div class="box-btn col-md-auto col-auto mx-auto col-sm-auto">
						<a class="icon-btn" href="graduationSummary">
							<i class="fas fa-chart-pie" aria-hidden="true"></i>
							<div class="vl"></div>
							<span>Thống kê tốt nghiệp</span>
						</a>
                    </div>
					<?php } elseif ($_smarty_tpl->tpl_vars['session']->value['quyen']==6) {?>
                    <div class="box-btn col-md-auto col-auto mx-auto col-sm-auto offset-md-1">
						<a class="icon-btn" href="manageFile">
							<i class="fas fa-folder" aria-hidden="true"></i>
							<div class="vl"></div>
							<span>Danh sách hồ sơ</span>
						</a>
                    </div>
                    <div class="box-btn col-md-auto col-auto mx-auto col-sm-auto offset-md-1">
						<a class="icon-btn" href="eligibleStudents">
							<i class="fas fa-clipboard-check" aria-hidden="true"></i>
							<div class="vl"></div>
							<span>DSSV Dự kiến đủ điều kiện</span>
						</a>
                    </div>
                    <div class="box-btn col-md-auto col-auto mx-auto col-sm-auto">
						<a class="icon-btn" href="graduationSummary">
							<i class="fas fa-chart-pie" aria-hidden="true"></i>
							<div class="vl"></div>
							<span>Thống kê tốt nghiệp</span>
						</a>
                    </div>
                    <div class="box-btn col-md-auto col-auto mx-auto col-sm-auto offset-md-1">
						<a class="icon-btn" href="excelFilesManager">
							<i class="fas fa-file-excel" aria-hidden="true"></i>
							<div class="vl"></div>
							<span>Quản lý files Excel</span>
						</a>
                    </div>
					<?php }?>
					<?php } else { ?>
                    <div class="box-btn col-md-auto col-auto mx-auto col-sm-auto">
						<a class="icon-btn" href="login">
							<i class="fas fa-sign-in-alt" aria-hidden="true"></i>
							<div class="vl"></div>
							<span>Đăng nhập</span>
						</a>
                    </div>
					<?php }?>
                </div>
        </div>
    </div>
	<div class="text-center">
	<?php if ($_smarty_tpl->tpl_vars['session']->value['quyen']==7) {
$_smarty_tpl->tpl_vars['quyen'] = new Smarty_variable('Sinh viên', null, 0);?>
	<?php } elseif ($_smarty_tpl->tpl_vars['session']->value['quyen']==6) {
$_smarty_tpl->tpl_vars['quyen'] = new Smarty_variable('ĐVĐT', null, 0);?>
	<?php } elseif ($_smarty_tpl->tpl_vars['session']->value['quyen']==2) {
$_smarty_tpl->tpl_vars['quyen'] = new Smarty_variable('Phòng quản lý đào tạo', null, 0);?>
	<?php } elseif ($_smarty_tpl->tpl_vars['session']->value['quyen']==3) {
$_smarty_tpl->tpl_vars['quyen'] = new Smarty_variable('Tiểu ban tài chính', null, 0);?>
	<?php } elseif ($_smarty_tpl->tpl_vars['session']->value['quyen']==5) {
$_smarty_tpl->tpl_vars['quyen'] = new Smarty_variable('Tiểu ban Đầu vào và thời gian đào tạo', null, 0);?>
	<?php } elseif ($_smarty_tpl->tpl_vars['session']->value['quyen']==4) {
$_smarty_tpl->tpl_vars['quyen'] = new Smarty_variable('Tiểu ban KQRL', null, 0);?>
	<?php } else { ?>
	<?php }?>
	<?php if (isset($_smarty_tpl->tpl_vars['quyen']->value)) {?>
	<a href="<?php echo $_smarty_tpl->tpl_vars['current_page']->value;?>
?huongdan=1" class=""><i class="fas fa-file-download"></i> Tải file Hướng dẫn sử dụng hệ thống cho <b><?php echo $_smarty_tpl->tpl_vars['quyen']->value;?>
</b></a>
	<?php }?>
	</div>

<?php }} ?>
