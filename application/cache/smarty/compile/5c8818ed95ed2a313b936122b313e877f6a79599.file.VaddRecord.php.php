<?php /* Smarty version Smarty-3.1.21-dev, created on 2022-06-27 15:40:12
         compiled from "F:\xampp\htdocs\totnghiep\application\views\sinhvien\VaddRecord.php" */ ?>
<?php /*%%SmartyHeaderCode:1669362b96cec74f3d6-12566899%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5c8818ed95ed2a313b936122b313e877f6a79599' => 
    array (
      0 => 'F:\\xampp\\htdocs\\totnghiep\\application\\views\\sinhvien\\VaddRecord.php',
      1 => 1656315796,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1669362b96cec74f3d6-12566899',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'session' => 0,
    'record' => 0,
    'list_diadiem' => 0,
    'v' => 0,
    'quymo' => 0,
    'list_mucduyet' => 0,
    'i' => 0,
    'khoatb' => 0,
    'list_dt' => 0,
    'list_tg' => 0,
    'list_quoctich' => 0,
    'list_tinh' => 0,
    'list_lvb' => 0,
    'k' => 0,
    'tb' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_62b96cecc231d0_90417613',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62b96cecc231d0_90417613')) {function content_62b96cecc231d0_90417613($_smarty_tpl) {?><div class="main-content-container container-fluid px-4">
	<input type="hidden" id="quyen" value="<?php if (!!$_smarty_tpl->tpl_vars['session']->value) {
echo $_smarty_tpl->tpl_vars['session']->value['quyen'];
}?>">
	<!-- Page Header -->
	<div class="page-header row no-gutters py-2">
		<div class="col-12 col-md-6 text-center text-md-left mb-0">
            <span class="text-uppercase page-subtitle">Hồ sơ</span>
			<h3 class="page-title">Chi tiết hồ sơ</h3>
		</div>
		<!-- <div class="col-12 col-md-6 text-center text-md-right mb-0">
			<a href="" class="btn custom-btn">
				<i class="fas fa-file-excel"></i>
				Nhập từ file excel
			</a>
		</div> -->
	</div>
	<!-- End Page Header -->
	<!-- Phần trên -->
	<form action="" method="get">
		<div class="row mb-3">
			<!-- Tra mã sinh viên -->
			<div class="col-xl-4 col-lg-4 col-sm-12 mb-3 mb-lg-0" id="search-field">
				<div class="card custom-card">
					<div class="card-body">
						<div class="input-group">
							<div class="input-group-prepend">
								<label class="input-group-text required" for="sMaSV">Mã sinh viên</label>
							</div>
							<?php if ($_smarty_tpl->tpl_vars['session']->value['quyen']==7) {?>
							<span class="form-control" id="sMaSV"><?php echo $_smarty_tpl->tpl_vars['record']->value['sMaSV'];?>
</span>
							<?php } else { ?>
							<input type="text" class="form-control undisabledable"name='id' id="sMaSV" value="<?php if (!!$_smarty_tpl->tpl_vars['record']->value) {
echo $_smarty_tpl->tpl_vars['record']->value['sMaSV'];
}?>">
							<div class="input-group-append">
								<button id="btn-search-masv" class="btn btn-solid" type="submit">Tìm kiếm</button>
							</div>
							<?php }?>
						</div>
					</div>
				</div>
			</div>
			<!-- End Tra mã sinh viên -->
			<!-- Tình trạng hồ sơ -->
			<div class="col-xl-8 col-lg-8 col-sm-12" id="graduation-state">
				<div class="card custom-card h-100">
					<div class="card-body">
						<p class="alert-text m-1">
							<?php if (!empty($_smarty_tpl->tpl_vars['record']->value['PK_sMaDTN'])) {?>
							<strong>Hệ:</strong> <span class="mr-3"><?php if ($_smarty_tpl->tpl_vars['record']->value['iChinhQuy']==1) {?>CQ<?php }
if ($_smarty_tpl->tpl_vars['record']->value['iChinhQuy']==2) {?>VLVH<?php }
if ($_smarty_tpl->tpl_vars['record']->value['iChinhQuy']==0) {?>TX<?php }?></span>
							<strong>Đợt tốt nghiệp:</strong> <span class="mr-3"><?php echo date("d/m/Y",strtotime($_smarty_tpl->tpl_vars['record']->value['dNgayBD']));?>
 - <?php echo date("d/m/Y",strtotime($_smarty_tpl->tpl_vars['record']->value['dNgayKT']));?>
</span>
							<?php }?>
							<strong>Trạng thái hồ sơ:</strong> <span class="badge <?php if (empty($_smarty_tpl->tpl_vars['record']->value['FK_iMaTT'])) {?>badge-secondary<?php } elseif ($_smarty_tpl->tpl_vars['record']->value['FK_iMaTT']==1) {?>badge-warning<?php } elseif ($_smarty_tpl->tpl_vars['record']->value['FK_iMaTT']==11) {?>badge-info<?php } elseif ($_smarty_tpl->tpl_vars['record']->value['FK_iMaTT']==2) {?>badge-primary<?php } elseif ($_smarty_tpl->tpl_vars['record']->value['FK_iMaTT']==21) {?>badge-icream<?php } elseif ($_smarty_tpl->tpl_vars['record']->value['FK_iMaTT']==3) {?>badge-success<?php } else { ?>badge-danger<?php }?>"><?php if (empty($_smarty_tpl->tpl_vars['record']->value['sTenTT'])) {?>Trống<?php } else {
echo $_smarty_tpl->tpl_vars['record']->value['sTenTT'];
}?></span>
						</p>
					</div>
				</div>
			</div>
			<!-- End Tình trạng hồ sơ -->
		</div>
	</form>
	<!-- End Phần trên -->
	<form action="addRecord" method="post" enctype="multipart/form-data">
		<input type="hidden" id="PK_sMaDTN" name="dtn[PK_sMaDTN]" value="<?php echo $_smarty_tpl->tpl_vars['record']->value['PK_sMaDTN'];?>
">
		<input type="hidden" id="dot_folder" name="dtn[sFolder]" value="<?php echo $_smarty_tpl->tpl_vars['record']->value['sFolder'];?>
">
		<input type="hidden" name="qm[PK_sMaQM]" value="<?php echo $_smarty_tpl->tpl_vars['record']->value['PK_sMaQM'];?>
">
		<input type="hidden" name="tctoithieu" value="<?php echo $_smarty_tpl->tpl_vars['record']->value['tctoithieu'];?>
">
		<input type="hidden" name="dktn[iTongTCTL]" value="<?php echo $_smarty_tpl->tpl_vars['record']->value['iTongTCTL'];?>
">
		<input type="hidden" name="dktn[iTBCTLTK]" value="<?php echo $_smarty_tpl->tpl_vars['record']->value['iTBCTLTK'];?>
">
		<input type="hidden" value="<?php if (!!$_smarty_tpl->tpl_vars['record']->value) {
echo $_smarty_tpl->tpl_vars['record']->value['sMaSV'];
}?>" <?php if (in_array($_smarty_tpl->tpl_vars['session']->value['quyen'],array(2,3,4,5,6))) {?>name='dktn[sMaSV]'<?php }?>>
		<div class="row">
			<!-- Phần Trái -->
			<div class="col-xl-4 col-lg-4 offset-lg-0 col-sm-12">
				<!-- Chọn Hệ, ngành, khoa -->
				<fieldset class="custom-fieldset" id="he_nganh-field" <?php if (empty($_smarty_tpl->tpl_vars['record']->value)||$_smarty_tpl->tpl_vars['record']->value['disable']&&!$_smarty_tpl->tpl_vars['record']->value['allowed_edit']||!in_array($_smarty_tpl->tpl_vars['session']->value['quyen'],array(2,6,7))||($_smarty_tpl->tpl_vars['session']->value['quyen']==2&&!$_smarty_tpl->tpl_vars['record']->value['allowed_edit'])) {?>disabled<?php }?>>
					<legend class="">Hệ - Ngành - ĐVĐT</legend>
					<div class="row">
							<input type="hidden" id="he">
						<div class="col-12 input-group mb-3">
							<div class="input-group-prepend">
								<label class="input-group-text required" for="he">Hệ</label>
							</div>
							<span class="form-control" id="sTenHe" data-mahe="<?php if (!empty($_smarty_tpl->tpl_vars['record']->value['FK_sMaHe'])) {
echo $_smarty_tpl->tpl_vars['record']->value['FK_sMaHe'];
}?>" readonly><?php if (!empty($_smarty_tpl->tpl_vars['record']->value['sTenHe'])) {
echo $_smarty_tpl->tpl_vars['record']->value['sTenHe'];
}?></span>
						</div>
							<input type="hidden" id="FK_iMaNH">
						<div class="col-12 input-group mb-3">
							<div class="input-group-prepend">
								<label class="input-group-text required" for="FK_iMaNH">Ngành</label>
							</div>
							<span class="form-control" id="sTenNganh" readonly><?php if (!empty($_smarty_tpl->tpl_vars['record']->value['sTenNganh'])) {
echo $_smarty_tpl->tpl_vars['record']->value['sTenNganh'];
}?></span>
						</div>
						<div class="col-12 input-group mb-3">
							<div class="input-group-prepend">
								<label class="input-group-text required" for="FK_iMaKhoa">ĐVĐT</label>
							</div>
							<input type="text" class="form-control" disabled id="sTenKhoa" value="<?php if (!empty($_smarty_tpl->tpl_vars['record']->value['sTenKhoa'])) {
echo $_smarty_tpl->tpl_vars['record']->value['sTenKhoa'];
}?>">
						</div>
						<div class="col-12 input-group mb-3">
							<div class="input-group-prepend">
								<label class="input-group-text required" for="sLop">Lớp</label>
							</div>
							<span class="form-control" id="sLop" readonly><?php if (!empty($_smarty_tpl->tpl_vars['record']->value['sLop'])) {
echo $_smarty_tpl->tpl_vars['record']->value['sLop'];
}?></span>
						</div>
						<div class="col-12 input-group mb-3">
							<div class="input-group-prepend">
								<label class="input-group-text required" for="sKhoa">Khoá</label>
							</div>
							<input type="text" class="form-control" id="sKhoa" name="dktn[sKhoa]" placeholder="Nhập Khoá" <?php if (!empty($_smarty_tpl->tpl_vars['record']->value['sKhoa'])) {?>value="<?php echo $_smarty_tpl->tpl_vars['record']->value['sKhoa'];?>
"<?php }?> required>
						</div>
						<div class="col-12 input-group mb-3" style="font-weight: bold;">
							<div class="input-group-prepend">
								<label class="input-group-text required" for="FK_sMaDD">Địa điểm học</label>
							</div>
							<select class="form-control" id="FK_sMaDD" name="dktn[FK_sMaDD]" required>
								<option disabled selected value="">Chọn địa điểm học tập</option>
								<?php if (!!$_smarty_tpl->tpl_vars['list_diadiem']->value) {?>
								<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['list_diadiem']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
								<option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['PK_sMaDD'];?>
" <?php if (!empty($_smarty_tpl->tpl_vars['record']->value['FK_sMaDD'])&&$_smarty_tpl->tpl_vars['record']->value['FK_sMaDD']==$_smarty_tpl->tpl_vars['v']->value['PK_sMaDD']) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value['sTenDD'];?>
</option>
								<?php } ?>
								<?php } else { ?>
								<option disabled>Chưa có dữ liệu</option>
								<?php }?>
							</select>
						</div>
						<div class="col-12 input-group mb-3">
							<div class="input-group-prepend">
								<label class="input-group-text required" for="sSoQD">Số quyết định ĐV</label>
							</div>
							<input type="text" class="form-control" name="qm[sSoQD]" id="sSoQD" <?php if (isset($_smarty_tpl->tpl_vars['quymo']->value['sSoQD'])) {?>value="<?php echo $_smarty_tpl->tpl_vars['quymo']->value['sSoQD'];?>
"<?php }?> <?php if (!in_array($_smarty_tpl->tpl_vars['session']->value['quyen'],array(2,6))) {?>disabled<?php }?>>
						</div>
						<div class="col-12 input-group mb-3">
							<div class="input-group-prepend">
								<label class="input-group-text required" for="dNgayQD">Ngày quyết định ĐV</label>
							</div>
							<input type="date" class="form-control" name="qm[dNgayQD]" id="dNgayQD" <?php if (isset($_smarty_tpl->tpl_vars['quymo']->value['dNgayQD'])) {?>value="<?php echo $_smarty_tpl->tpl_vars['quymo']->value['dNgayQD'];?>
"<?php }?> <?php if (!in_array($_smarty_tpl->tpl_vars['session']->value['quyen'],array(2,6))) {?>disabled<?php }?>>
						</div>
						<?php if (!empty($_smarty_tpl->tpl_vars['quymo']->value['dNgayQD'])) {?>
							<div class="text-danger h6">&nbsp;&nbsp;&nbsp;&nbsp;Số tháng học: <?php echo $_smarty_tpl->tpl_vars['quymo']->value['sothang'];?>
</div>
						<?php }?>
					</div>
				</fieldset>
				<!-- End Chọn Hệ, ngành, khoa -->
				<!-- Minh chứng -->
				<fieldset class="custom-fieldset" id="file-field">
					<legend class="">Hồ sơ tốt nghiệp<?php echo $_smarty_tpl->tpl_vars['record']->value['FK_sMaHe'];?>
</legend>
					<!-- <p class="text-danger mb-0"><i><b>Ghi chú:</b> File tải lên phải nhỏ hơn 1Mb</i></p> -->
					<div class="row">
						<?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable(0, null, 0);?>
						<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['list_mucduyet']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
						<?php if (($_smarty_tpl->tpl_vars['v']->value['FK_sMaHe']==''||$_smarty_tpl->tpl_vars['record']->value['FK_sMaHe']==''||$_smarty_tpl->tpl_vars['v']->value['FK_sMaHe']==$_smarty_tpl->tpl_vars['record']->value['FK_sMaHe'])) {?>
						<input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['v']->value['PK_sMaMD'];?>
_filename" value="<?php if (isset($_smarty_tpl->tpl_vars['record']->value['list_mucduyet'][$_smarty_tpl->tpl_vars['v']->value['PK_sMaMD']])&&!empty($_smarty_tpl->tpl_vars['record']->value['list_mucduyet'][$_smarty_tpl->tpl_vars['v']->value['PK_sMaMD']]['sTenFile'])) {
echo $_smarty_tpl->tpl_vars['record']->value['list_mucduyet'][$_smarty_tpl->tpl_vars['v']->value['PK_sMaMD']]['sTenFile'];
}?>">
						<input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['v']->value['PK_sMaMD'];?>
_dir" value="<?php if (isset($_smarty_tpl->tpl_vars['record']->value['list_mucduyet'][$_smarty_tpl->tpl_vars['v']->value['PK_sMaMD']])&&!empty($_smarty_tpl->tpl_vars['record']->value['list_mucduyet'][$_smarty_tpl->tpl_vars['v']->value['PK_sMaMD']]['sDuongDan'])) {
echo $_smarty_tpl->tpl_vars['record']->value['list_mucduyet'][$_smarty_tpl->tpl_vars['v']->value['PK_sMaMD']]['sDuongDan'];
}?>">
						<div class="col-12 text-bold">
							<div class="custom-control custom-checkbox float-left">
								<input type="checkbox" class="custom-control-input checkbox-mc <?php if ($_smarty_tpl->tpl_vars['v']->value['sLoaiMD']=='vb') {
echo $_smarty_tpl->tpl_vars['v']->value['PK_sMaMD'];
}?> <?php if (in_array($_smarty_tpl->tpl_vars['v']->value['PK_sMaMD'],array('iDonDKTN','iKhaiSinh','vb0_goc'))) {
echo $_smarty_tpl->tpl_vars['v']->value['PK_sMaMD'];
}?>" data-mamd="<?php echo $_smarty_tpl->tpl_vars['v']->value['PK_sMaMD'];?>
" data-tocheck="#cb_<?php echo $_smarty_tpl->tpl_vars['v']->value['PK_sMaMD'];?>
" id="lb_<?php echo $_smarty_tpl->tpl_vars['v']->value['PK_sMaMD'];?>
" name="<?php echo $_smarty_tpl->tpl_vars['v']->value['PK_sMaMD'];?>
iGiaTri_SV" <?php if ($_smarty_tpl->tpl_vars['v']->value['sLoaiMD']=='vb') {?> data-to="<?php echo $_smarty_tpl->tpl_vars['v']->value['PK_sMaMD'];?>
"<?php if ($_smarty_tpl->tpl_vars['v']->value['PK_sMaMD']!='vb2') {?> data-prev="<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"<?php }
}?> <?php if (isset($_smarty_tpl->tpl_vars['record']->value['list_mucduyet'][$_smarty_tpl->tpl_vars['v']->value['PK_sMaMD']])&&$_smarty_tpl->tpl_vars['record']->value['list_mucduyet'][$_smarty_tpl->tpl_vars['v']->value['PK_sMaMD']]['sGiaTri_SV']==1) {?>checked<?php }?> <?php if (empty($_smarty_tpl->tpl_vars['record']->value)||($_smarty_tpl->tpl_vars['record']->value['disable']&&$_smarty_tpl->tpl_vars['record']->value['disable_bosung'])||!in_array($_smarty_tpl->tpl_vars['session']->value['quyen'],array(6,7))||(isset($_smarty_tpl->tpl_vars['record']->value['list_mucduyet'][$_smarty_tpl->tpl_vars['v']->value['PK_sMaMD']])&&$_smarty_tpl->tpl_vars['record']->value['list_mucduyet'][$_smarty_tpl->tpl_vars['v']->value['PK_sMaMD']]['sGiaTri_PDT']==1)) {?>onclick="return false"<?php }?>>
								<label for="lb_<?php echo $_smarty_tpl->tpl_vars['v']->value['PK_sMaMD'];?>
" class="custom-control-label <?php if (isset($_smarty_tpl->tpl_vars['record']->value['list_mucduyet'][$_smarty_tpl->tpl_vars['v']->value['PK_sMaMD']])&&$_smarty_tpl->tpl_vars['record']->value['list_mucduyet'][$_smarty_tpl->tpl_vars['v']->value['PK_sMaMD']]['sGiaTri_PDT']==2) {?>bg-kdat<?php }?>"><?php echo $_smarty_tpl->tpl_vars['v']->value['sTenMD'];?>
</label>
								<?php if (in_array($_smarty_tpl->tpl_vars['v']->value['PK_sMaMD'],array('vb0','iDonDKTN','vb0_goc'))&&in_array($_smarty_tpl->tpl_vars['session']->value['quyen'],array(6,7))||(!empty($_smarty_tpl->tpl_vars['record']->value['FK_sMaHe'])&&$_smarty_tpl->tpl_vars['record']->value['FK_sMaHe']!='CQ'&&$_smarty_tpl->tpl_vars['v']->value['PK_sMaMD']=='iKhaiSinh')) {?><span class="required"></span> <?php }?>
							</div>
							<?php if (in_array($_smarty_tpl->tpl_vars['session']->value['quyen'],array(1,2))) {?>
								<?php if ((($_smarty_tpl->tpl_vars['record']->value['FK_sMaHe']=='TX'&&strpos($_smarty_tpl->tpl_vars['v']->value['PK_sMaMD'],'goc')==false)||$_smarty_tpl->tpl_vars['record']->value['FK_sMaHe']=='CQ'||$_smarty_tpl->tpl_vars['record']->value['FK_sMaHe']=='VLVH')) {?>
									<div class="custom-control custom-checkbox float-right">
										<input <?php if ($_smarty_tpl->tpl_vars['khoatb']->value==1) {?>disabled<?php }?> type="checkbox" class="custom-control-input pqldt-duyet-mc" id="lb_pdt_kdat_<?php echo $_smarty_tpl->tpl_vars['v']->value['PK_sMaMD'];?>
" name="lb_pdt_<?php echo $_smarty_tpl->tpl_vars['v']->value['PK_sMaMD'];?>
" data-val="2" data-md="<?php echo $_smarty_tpl->tpl_vars['v']->value['PK_sMaMD'];?>
" data-dktn="<?php echo $_smarty_tpl->tpl_vars['record']->value['PK_sMaDKTN'];?>
" data-pk="<?php echo sha1(($_smarty_tpl->tpl_vars['v']->value['PK_sMaMD']).($_smarty_tpl->tpl_vars['record']->value['PK_sMaDKTN']));?>
" data-name="lb_pdt_dat_<?php echo $_smarty_tpl->tpl_vars['v']->value['PK_sMaMD'];?>
" <?php if (isset($_smarty_tpl->tpl_vars['record']->value['list_mucduyet'][$_smarty_tpl->tpl_vars['v']->value['PK_sMaMD']])&&$_smarty_tpl->tpl_vars['record']->value['list_mucduyet'][$_smarty_tpl->tpl_vars['v']->value['PK_sMaMD']]['sGiaTri_PDT']==2) {?>checked<?php }?> <?php if (empty($_smarty_tpl->tpl_vars['record']->value)||$_smarty_tpl->tpl_vars['record']->value['disable']||!in_array($_smarty_tpl->tpl_vars['session']->value['quyen'],array(2))) {?>disabled<?php }?>>
										<label for="lb_pdt_kdat_<?php echo $_smarty_tpl->tpl_vars['v']->value['PK_sMaMD'];?>
" class="custom-control-label">Không đạt</label>
									</div>
									<div class="custom-control custom-checkbox float-right mr-2">
										<input <?php if ($_smarty_tpl->tpl_vars['khoatb']->value==1) {?>disabled<?php }?> type="checkbox" class="custom-control-input pqldt-duyet-mc" id="lb_pdt_dat_<?php echo $_smarty_tpl->tpl_vars['v']->value['PK_sMaMD'];?>
" name="lb_pdt_<?php echo $_smarty_tpl->tpl_vars['v']->value['PK_sMaMD'];?>
" data-val="1" data-md="<?php echo $_smarty_tpl->tpl_vars['v']->value['PK_sMaMD'];?>
" data-dktn="<?php echo $_smarty_tpl->tpl_vars['record']->value['PK_sMaDKTN'];?>
" data-pk="<?php echo sha1(($_smarty_tpl->tpl_vars['v']->value['PK_sMaMD']).($_smarty_tpl->tpl_vars['record']->value['PK_sMaDKTN']));?>
" data-name="lb_pdt_kdat_<?php echo $_smarty_tpl->tpl_vars['v']->value['PK_sMaMD'];?>
" <?php if (isset($_smarty_tpl->tpl_vars['record']->value['list_mucduyet'][$_smarty_tpl->tpl_vars['v']->value['PK_sMaMD']])&&$_smarty_tpl->tpl_vars['record']->value['list_mucduyet'][$_smarty_tpl->tpl_vars['v']->value['PK_sMaMD']]['sGiaTri_PDT']==1) {?>checked<?php }?> <?php if (empty($_smarty_tpl->tpl_vars['record']->value)||$_smarty_tpl->tpl_vars['record']->value['disable']||!in_array($_smarty_tpl->tpl_vars['session']->value['quyen'],array(2))) {?>disabled<?php }?>>
										<label for="lb_pdt_dat_<?php echo $_smarty_tpl->tpl_vars['v']->value['PK_sMaMD'];?>
" class="custom-control-label">Đạt</label>
									</div>
								<?php } else { ?>
									<div class="float-right">
										<?php if (isset($_smarty_tpl->tpl_vars['record']->value['list_mucduyet'][$_smarty_tpl->tpl_vars['v']->value['PK_sMaMD']])&&$_smarty_tpl->tpl_vars['record']->value['list_mucduyet'][$_smarty_tpl->tpl_vars['v']->value['PK_sMaMD']]['sGiaTri_PDT']==2) {?>
										<span class="text-danger">Không đạt</span>
										<?php } elseif (isset($_smarty_tpl->tpl_vars['record']->value['list_mucduyet'][$_smarty_tpl->tpl_vars['v']->value['PK_sMaMD']])&&$_smarty_tpl->tpl_vars['record']->value['list_mucduyet'][$_smarty_tpl->tpl_vars['v']->value['PK_sMaMD']]['sGiaTri_PDT']==1) {?>
										<span class="text-primary">Đạt</span>
										<?php }?>
									</div>
								<?php }?>
							<?php } elseif (in_array($_smarty_tpl->tpl_vars['session']->value['quyen'],array(5))) {?>
								<?php if ((($_smarty_tpl->tpl_vars['record']->value['FK_sMaHe']=='TX'&&strpos($_smarty_tpl->tpl_vars['v']->value['PK_sMaMD'],'goc')>0)||$_smarty_tpl->tpl_vars['record']->value['FK_sMaHe']=='VLVH')) {?>
									<div class="custom-control custom-checkbox float-right">
										<input <?php if ($_smarty_tpl->tpl_vars['khoatb']->value==1) {?>disabled<?php }?> type="checkbox" class="custom-control-input pqldt-duyet-mc" id="lb_pdt_kdat_<?php echo $_smarty_tpl->tpl_vars['v']->value['PK_sMaMD'];?>
" name="lb_pdt_<?php echo $_smarty_tpl->tpl_vars['v']->value['PK_sMaMD'];?>
" data-val="2" data-md="<?php echo $_smarty_tpl->tpl_vars['v']->value['PK_sMaMD'];?>
" data-dktn="<?php echo $_smarty_tpl->tpl_vars['record']->value['PK_sMaDKTN'];?>
" data-pk="<?php echo sha1(($_smarty_tpl->tpl_vars['v']->value['PK_sMaMD']).($_smarty_tpl->tpl_vars['record']->value['PK_sMaDKTN']));?>
" data-name="lb_pdt_dat_<?php echo $_smarty_tpl->tpl_vars['v']->value['PK_sMaMD'];?>
" <?php if (isset($_smarty_tpl->tpl_vars['record']->value['list_mucduyet'][$_smarty_tpl->tpl_vars['v']->value['PK_sMaMD']])&&$_smarty_tpl->tpl_vars['record']->value['list_mucduyet'][$_smarty_tpl->tpl_vars['v']->value['PK_sMaMD']]['sGiaTri_PDT']==2) {?>checked<?php }?> <?php if (empty($_smarty_tpl->tpl_vars['record']->value)||$_smarty_tpl->tpl_vars['record']->value['disable']||!in_array($_smarty_tpl->tpl_vars['session']->value['quyen'],array(5))) {?>disabled<?php }?>>
										<label for="lb_pdt_kdat_<?php echo $_smarty_tpl->tpl_vars['v']->value['PK_sMaMD'];?>
" class="custom-control-label">Không đạt</label>
									</div>
									<div class="custom-control custom-checkbox float-right mr-2">
										<input <?php if ($_smarty_tpl->tpl_vars['khoatb']->value==1) {?>disabled<?php }?> type="checkbox" class="custom-control-input pqldt-duyet-mc" id="lb_pdt_dat_<?php echo $_smarty_tpl->tpl_vars['v']->value['PK_sMaMD'];?>
" name="lb_pdt_<?php echo $_smarty_tpl->tpl_vars['v']->value['PK_sMaMD'];?>
" data-val="1" data-md="<?php echo $_smarty_tpl->tpl_vars['v']->value['PK_sMaMD'];?>
" data-dktn="<?php echo $_smarty_tpl->tpl_vars['record']->value['PK_sMaDKTN'];?>
" data-pk="<?php echo sha1(($_smarty_tpl->tpl_vars['v']->value['PK_sMaMD']).($_smarty_tpl->tpl_vars['record']->value['PK_sMaDKTN']));?>
" data-name="lb_pdt_kdat_<?php echo $_smarty_tpl->tpl_vars['v']->value['PK_sMaMD'];?>
" <?php if (isset($_smarty_tpl->tpl_vars['record']->value['list_mucduyet'][$_smarty_tpl->tpl_vars['v']->value['PK_sMaMD']])&&$_smarty_tpl->tpl_vars['record']->value['list_mucduyet'][$_smarty_tpl->tpl_vars['v']->value['PK_sMaMD']]['sGiaTri_PDT']==1) {?>checked<?php }?> <?php if (empty($_smarty_tpl->tpl_vars['record']->value)||$_smarty_tpl->tpl_vars['record']->value['disable']||!in_array($_smarty_tpl->tpl_vars['session']->value['quyen'],array(5))) {?>disabled<?php }?>>
										<label for="lb_pdt_dat_<?php echo $_smarty_tpl->tpl_vars['v']->value['PK_sMaMD'];?>
" class="custom-control-label">Đạt</label>
									</div>
								<?php }?>
							<?php } elseif (in_array($_smarty_tpl->tpl_vars['session']->value['quyen'],array(6,7))) {?>
							<div class="float-right">
								<?php if (isset($_smarty_tpl->tpl_vars['record']->value['list_mucduyet'][$_smarty_tpl->tpl_vars['v']->value['PK_sMaMD']])&&$_smarty_tpl->tpl_vars['record']->value['list_mucduyet'][$_smarty_tpl->tpl_vars['v']->value['PK_sMaMD']]['sGiaTri_PDT']==2) {?>
								<span class="text-danger">Không đạt</span>
								<?php } elseif (isset($_smarty_tpl->tpl_vars['record']->value['list_mucduyet'][$_smarty_tpl->tpl_vars['v']->value['PK_sMaMD']])&&$_smarty_tpl->tpl_vars['record']->value['list_mucduyet'][$_smarty_tpl->tpl_vars['v']->value['PK_sMaMD']]['sGiaTri_PDT']==1) {?>
								<span class="text-primary">Đạt</span>
								<?php }?>
							</div>
							<?php }?>
						</div>
						<div class="col-12 mb-3 <?php if (!isset($_smarty_tpl->tpl_vars['record']->value['list_mucduyet'][$_smarty_tpl->tpl_vars['v']->value['PK_sMaMD']])||$_smarty_tpl->tpl_vars['record']->value['list_mucduyet'][$_smarty_tpl->tpl_vars['v']->value['PK_sMaMD']]['sGiaTri_SV']!=1) {?> d-none<?php }?>">
							<div class="input-group">
								<div class="custom-file">
									<?php if (empty($_smarty_tpl->tpl_vars['record']->value)||($_smarty_tpl->tpl_vars['record']->value['disable']&&$_smarty_tpl->tpl_vars['record']->value['disable_bosung'])||!in_array($_smarty_tpl->tpl_vars['session']->value['quyen'],array(2,6,7))||(isset($_smarty_tpl->tpl_vars['record']->value['list_mucduyet'][$_smarty_tpl->tpl_vars['v']->value['PK_sMaMD']])&&$_smarty_tpl->tpl_vars['record']->value['list_mucduyet'][$_smarty_tpl->tpl_vars['v']->value['PK_sMaMD']]['sGiaTri_PDT']==1)) {?>
									<?php } else { ?>
									<input type="file" class="custom-file-input" accept="image/png, image/jpg, image/jpeg" id="<?php echo $_smarty_tpl->tpl_vars['v']->value['PK_sMaMD'];?>
" data-loaimd="<?php echo $_smarty_tpl->tpl_vars['v']->value['PK_sMaMD'];?>
" multiple>
									<?php }?>
									<label class="custom-file-label" for="<?php echo $_smarty_tpl->tpl_vars['v']->value['PK_sMaMD'];?>
" <?php if (empty($_smarty_tpl->tpl_vars['record']->value)||($_smarty_tpl->tpl_vars['record']->value['disable']&&$_smarty_tpl->tpl_vars['record']->value['disable_bosung'])||!in_array($_smarty_tpl->tpl_vars['session']->value['quyen'],array(2,6,7))||(isset($_smarty_tpl->tpl_vars['record']->value['list_mucduyet'][$_smarty_tpl->tpl_vars['v']->value['PK_sMaMD']])&&$_smarty_tpl->tpl_vars['record']->value['list_mucduyet'][$_smarty_tpl->tpl_vars['v']->value['PK_sMaMD']]['sGiaTri_PDT']==1)) {?>readonly<?php }?>><?php if (isset($_smarty_tpl->tpl_vars['record']->value['list_mucduyet'][$_smarty_tpl->tpl_vars['v']->value['PK_sMaMD']])&&!empty($_smarty_tpl->tpl_vars['record']->value['list_mucduyet'][$_smarty_tpl->tpl_vars['v']->value['PK_sMaMD']]['sTenFile'])) {
echo $_smarty_tpl->tpl_vars['record']->value['list_mucduyet'][$_smarty_tpl->tpl_vars['v']->value['PK_sMaMD']]['sTenFile'];
} else { ?>Chưa có file<?php }?></label>
								</div>
								<div class="input-group-append">
									<button name="call-modal" class="btn <?php if (!empty($_smarty_tpl->tpl_vars['record']->value['list_mucduyet'][$_smarty_tpl->tpl_vars['v']->value['PK_sMaMD']]['sTenFile'])) {?>btn-solid<?php } else { ?>btn-outline-secondary<?php }?>" type="button" data-target="#preview-img" data-toggle="modal" <?php if (isset($_smarty_tpl->tpl_vars['record']->value['list_mucduyet'][$_smarty_tpl->tpl_vars['v']->value['PK_sMaMD']])) {?>data-editable="<?php echo $_smarty_tpl->tpl_vars['record']->value['disable']&&$_smarty_tpl->tpl_vars['record']->value['disable_bosung'];?>
" data-img="<?php echo $_smarty_tpl->tpl_vars['record']->value['list_mucduyet'][$_smarty_tpl->tpl_vars['v']->value['PK_sMaMD']]['sTenFile'];?>
" data-src="<?php echo $_smarty_tpl->tpl_vars['record']->value['list_mucduyet'][$_smarty_tpl->tpl_vars['v']->value['PK_sMaMD']]['sDuongDan'];?>
" data-count="<?php echo substr_count($_smarty_tpl->tpl_vars['record']->value['list_mucduyet'][$_smarty_tpl->tpl_vars['v']->value['PK_sMaMD']]['sTenFile'],'|')+1;?>
"<?php }?>><i class="fas fa-eye"></i></button>
								</div>
							</div>
						</div>
						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['v']->value['sLoaiMD']=='vb') {?>
						<?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable($_smarty_tpl->tpl_vars['v']->value['PK_sMaMD'], null, 0);?>
						<?php }?>
						<?php } ?>
					</div>
				</fieldset>
				<!-- End Minh chứng -->
			</div>
			<!-- End Phần trái -->
			<!-- Phần phải -->
			<div class="col-xl-8 col-lg-8 col-md-12 col-sm-12">
				<!-- Thông tin cơ bản -->
				<fieldset class="custom-fieldset" id="info-field" <?php if (empty($_smarty_tpl->tpl_vars['record']->value)||$_smarty_tpl->tpl_vars['record']->value['disable']&&!$_smarty_tpl->tpl_vars['record']->value['allowed_edit']||!in_array($_smarty_tpl->tpl_vars['session']->value['quyen'],array(2,6,7))||($_smarty_tpl->tpl_vars['session']->value['quyen']==2&&!$_smarty_tpl->tpl_vars['record']->value['allowed_edit'])) {?>disabled<?php }?>>
					<legend class="">Thông tin cơ bản</legend>
					<div class="row">
						<div class="col-12 col-sm-6 col-xl-4 input-group mb-3">
							<div class="input-group-prepend">
								<label class="input-group-text required" for="sHoTen">Họ và tên</label>
							</div>
							<span class="form-control text-uppercase" id="sHoTen" readonly><?php if (!empty($_smarty_tpl->tpl_vars['record']->value['sHoTen'])) {
echo $_smarty_tpl->tpl_vars['record']->value['sHoTen'];
}?></span>
						</div>
						<div class="col-12 col-sm-6 col-xl-4 input-group mb-3">
							<div class="input-group-prepend">
								<label class="input-group-text required" for="dNgaySinh">Ngày sinh</label>
							</div>
							<span class="form-control" id="dNgaySinh" readonly>
								<?php if (!empty($_smarty_tpl->tpl_vars['record']->value['dNgaySinh'])) {
echo date("d/m/Y",strtotime($_smarty_tpl->tpl_vars['record']->value['dNgaySinh']));
}?>
								<?php if (!empty($_smarty_tpl->tpl_vars['record']->value['sNamSinh'])) {
echo $_smarty_tpl->tpl_vars['record']->value['sNamSinh'];
}?>
							</span>
						</div>
						<div class="col-12 col-sm-6 col-xl-4 input-group mb-3">
							<div class="input-group-prepend">
								<label class="input-group-text required" for="nam">Giới tính</label>
							</div>
							<span class="form-control" id="iGioiTinh" readonly><?php if (!empty($_smarty_tpl->tpl_vars['record']->value['iGioiTinh'])) {
echo $_smarty_tpl->tpl_vars['record']->value['iGioiTinh'];
}?></span>
						</div>
						<div class="col-12 col-sm-6 col-xl-4 input-group mb-3">
							<div class="input-group-prepend">
								<label class="input-group-text required" for="FK_iMaDT">Dân tộc</label>
							</div>
							<select class="form-control normal" id="FK_iMaDT" name="qm[FK_iMaDT]" <?php if (empty($_smarty_tpl->tpl_vars['record']->value)||$_smarty_tpl->tpl_vars['record']->value['disable']&&!$_smarty_tpl->tpl_vars['record']->value['allowed_edit']||!in_array($_smarty_tpl->tpl_vars['session']->value['quyen'],array(2,6,7))||($_smarty_tpl->tpl_vars['session']->value['quyen']==2&&!$_smarty_tpl->tpl_vars['record']->value['allowed_edit'])) {?>disabled<?php }?> required>
								<?php if (!!$_smarty_tpl->tpl_vars['list_dt']->value) {?>
								<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['list_dt']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
								<option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['PK_iMaDT'];?>
" <?php if (!empty($_smarty_tpl->tpl_vars['record']->value['FK_iMaDT'])&&$_smarty_tpl->tpl_vars['record']->value['FK_iMaDT']==$_smarty_tpl->tpl_vars['v']->value['PK_iMaDT']) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value['sTenDT'];?>
</option>
								<?php } ?>
								<?php } else { ?>
								<option class="" disabled>Chưa có dữ liệu</option>
								<?php }?>
							</select>
						</div>
						<div class="col-12 col-sm-6 col-xl-4 input-group mb-3">
							<div class="input-group-prepend">
								<label class="input-group-text required" for="FK_iMaTG">Tôn giáo</label>
							</div>
							<select class="form-control normal" id="FK_iMaTG" name="qm[FK_iMaTG]" <?php if (empty($_smarty_tpl->tpl_vars['record']->value)||$_smarty_tpl->tpl_vars['record']->value['disable']&&!$_smarty_tpl->tpl_vars['record']->value['allowed_edit']||!in_array($_smarty_tpl->tpl_vars['session']->value['quyen'],array(2,6,7))||($_smarty_tpl->tpl_vars['session']->value['quyen']==2&&!$_smarty_tpl->tpl_vars['record']->value['allowed_edit'])) {?>disabled<?php }?> required>
								<?php if (!!$_smarty_tpl->tpl_vars['list_tg']->value) {?>
								<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['list_tg']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
								<option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['PK_iMaTG'];?>
" <?php if (!empty($_smarty_tpl->tpl_vars['record']->value['FK_iMaTG'])&&$_smarty_tpl->tpl_vars['record']->value['FK_iMaTG']==$_smarty_tpl->tpl_vars['v']->value['PK_iMaTG']) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value['sTenTG'];?>
</option>
								<?php } ?>
								<?php } else { ?>
								<option class="" disabled>Chưa có dữ liệu</option>
								<?php }?>
							</select>
						</div>
						<div class="col-12 col-sm-6 col-xl-4 input-group mb-3">
							<div class="input-group-prepend">
								<label class="input-group-text" for="sQuocTich">Quốc tịch</label>
							</div>
							<select class="form-control normal" id="sQuocTich" name="qm[sQuocTich]" <?php if (empty($_smarty_tpl->tpl_vars['record']->value)||$_smarty_tpl->tpl_vars['record']->value['disable']&&!$_smarty_tpl->tpl_vars['record']->value['allowed_edit']||!in_array($_smarty_tpl->tpl_vars['session']->value['quyen'],array(2,6,7))||($_smarty_tpl->tpl_vars['session']->value['quyen']==2&&!$_smarty_tpl->tpl_vars['record']->value['allowed_edit'])) {?>disabled<?php }?>>
								<?php if (!!$_smarty_tpl->tpl_vars['list_quoctich']->value) {?>
								<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['list_quoctich']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
								<option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['CommonName'];?>
" <?php if (!empty($_smarty_tpl->tpl_vars['record']->value['sQuocTich'])&&$_smarty_tpl->tpl_vars['record']->value['sQuocTich']==$_smarty_tpl->tpl_vars['v']->value['CommonName']) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value['CommonName'];?>
</option>
								<?php } ?>
								<?php } else { ?>
								<option class="" disabled>Chưa có dữ liệu</option>
								<?php }?>
							</select>
						</div>
						<div class="col-12 col-xl-8 input-group mb-3">
							<div class="input-group-prepend">
								<label class="input-group-text required">Hộ khẩu</label>
							</div>
							<select class="form-control normal" id="tinh" name="qm[FK_iMaT]" <?php if (empty($_smarty_tpl->tpl_vars['record']->value)||$_smarty_tpl->tpl_vars['record']->value['disable']&&!$_smarty_tpl->tpl_vars['record']->value['allowed_edit']||!in_array($_smarty_tpl->tpl_vars['session']->value['quyen'],array(2,6,7))||($_smarty_tpl->tpl_vars['session']->value['quyen']==2&&!$_smarty_tpl->tpl_vars['record']->value['allowed_edit'])) {?>disabled<?php }?> required>
								<option value="-99" selected disabled hidden>Chọn Tỉnh</option>
								<?php if (!!$_smarty_tpl->tpl_vars['list_tinh']->value) {?>
								<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['list_tinh']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
								<option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['PK_iMaT'];?>
" <?php if (!empty($_smarty_tpl->tpl_vars['record']->value['FK_iMaT'])&&$_smarty_tpl->tpl_vars['record']->value['FK_iMaT']==$_smarty_tpl->tpl_vars['v']->value['PK_iMaT']) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value['sTenT'];?>
</option>
								<?php } ?>
								<?php } else { ?>
								<option class="" disabled>Chưa có dữ liệu</option>
								<?php }?>
							</select>
							<select class="form-control normal" id="huyen" name="qm[FK_iMaH]" <?php if (empty($_smarty_tpl->tpl_vars['record']->value)||$_smarty_tpl->tpl_vars['record']->value['disable']&&!$_smarty_tpl->tpl_vars['record']->value['allowed_edit']||!in_array($_smarty_tpl->tpl_vars['session']->value['quyen'],array(2,6,7))||($_smarty_tpl->tpl_vars['session']->value['quyen']==2&&!$_smarty_tpl->tpl_vars['record']->value['allowed_edit'])) {?>disabled<?php }?> required>
								<option value="-99" selected disabled hidden>Chọn Quận/Huyện</option>
								<?php if (!!$_smarty_tpl->tpl_vars['record']->value['list_h']) {?>
								<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['record']->value['list_h']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
								<option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['PK_iMaH'];?>
" <?php if (!empty($_smarty_tpl->tpl_vars['record']->value['FK_iMaH'])&&$_smarty_tpl->tpl_vars['record']->value['FK_iMaH']==$_smarty_tpl->tpl_vars['v']->value['PK_iMaH']) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value['sTenH'];?>
</option>
								<?php } ?>
								<?php } else { ?>
								<option class="" disabled>Chưa có dữ liệu</option>
								<?php }?>
							</select>
							<select class="form-control normal" id="xa" name="qm[FK_iMaX]" <?php if (empty($_smarty_tpl->tpl_vars['record']->value)||$_smarty_tpl->tpl_vars['record']->value['disable']&&!$_smarty_tpl->tpl_vars['record']->value['allowed_edit']||!in_array($_smarty_tpl->tpl_vars['session']->value['quyen'],array(2,6,7))||($_smarty_tpl->tpl_vars['session']->value['quyen']==2&&!$_smarty_tpl->tpl_vars['record']->value['allowed_edit'])||$_smarty_tpl->tpl_vars['record']->value['FK_iMaH']==-1) {?>disabled<?php }?>>
								<?php if ($_smarty_tpl->tpl_vars['record']->value['FK_iMaH']!=null&&$_smarty_tpl->tpl_vars['record']->value['FK_iMaH']==-1) {?>
								<option value="-1" selected disabled hidden>Không có Xã/Phường</option>
								<?php } else { ?>
								<option value="-99" selected disabled hidden>Chọn Phường/Xã</option>
								<?php if (!!$_smarty_tpl->tpl_vars['record']->value['list_x']) {?>
								<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['record']->value['list_x']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
								<option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['PK_iMaX'];?>
" <?php if (!empty($_smarty_tpl->tpl_vars['record']->value['FK_iMaX'])&&$_smarty_tpl->tpl_vars['record']->value['FK_iMaX']==$_smarty_tpl->tpl_vars['v']->value['PK_iMaX']) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value['sTenX'];?>
</option>
								<?php } ?>
								<?php } else { ?>
								<option class="" disabled>Chưa có dữ liệu</option>
								<?php }?>
								<?php }?>
							</select>
							<!-- <input type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['record']->value['sTenT'];?>
" disabled> -->
							<!-- <input type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['record']->value['sTenH'];?>
" disabled>
							<input type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['record']->value['sTenX'];?>
" disabled> -->
						</div>
						<div class="col-12 col-sm-6 col-xl-4 input-group mb-3">
							<div class="input-group-prepend">
								<label class="input-group-text" for="sSoNha">Số nhà</label>
							</div>
							<input type="text" class="form-control" name="qm[sSoNha]" id="sSoNha"value="<?php echo $_smarty_tpl->tpl_vars['record']->value['sSoNha'];?>
" <?php if (empty($_smarty_tpl->tpl_vars['record']->value)||$_smarty_tpl->tpl_vars['record']->value['disable']&&!$_smarty_tpl->tpl_vars['record']->value['allowed_edit']||!in_array($_smarty_tpl->tpl_vars['session']->value['quyen'],array(2,6,7))||($_smarty_tpl->tpl_vars['session']->value['quyen']==2&&!$_smarty_tpl->tpl_vars['record']->value['allowed_edit'])) {?>disabled<?php }?>>
						</div>
						<div class="col-12 col-sm-6 col-xl-4 input-group mb-3">
							<div class="input-group-prepend">
								<label class="input-group-text required" for="sCMND">CMND/CCCD</label>
							</div>
							<input type="text" class="form-control" name="qm[sCMND]" id="sCMND"value="<?php echo $_smarty_tpl->tpl_vars['record']->value['sCMND'];?>
" <?php if (empty($_smarty_tpl->tpl_vars['record']->value)||$_smarty_tpl->tpl_vars['record']->value['disable']&&!$_smarty_tpl->tpl_vars['record']->value['allowed_edit']||!in_array($_smarty_tpl->tpl_vars['session']->value['quyen'],array(2,6,7))||($_smarty_tpl->tpl_vars['session']->value['quyen']==2&&!$_smarty_tpl->tpl_vars['record']->value['allowed_edit'])) {?>disabled<?php }?> required>
						</div>
						<div class="col-12 col-sm-6 col-xl-4 input-group mb-3">
							<div class="input-group-prepend">
								<label class="input-group-text" for="sEmail">Email</label>
							</div>
							<input type="text" class="form-control" name="qm[sEmail]" id="sEmail" value="<?php echo $_smarty_tpl->tpl_vars['record']->value['sEmail'];?>
" <?php if (empty($_smarty_tpl->tpl_vars['record']->value)||$_smarty_tpl->tpl_vars['record']->value['disable']&&!$_smarty_tpl->tpl_vars['record']->value['allowed_edit']||!in_array($_smarty_tpl->tpl_vars['session']->value['quyen'],array(2,6,7))||($_smarty_tpl->tpl_vars['session']->value['quyen']==2&&!$_smarty_tpl->tpl_vars['record']->value['allowed_edit'])) {?>disabled<?php }?>>
						</div>
						<div class="col-12 col-sm-6 col-xl-4 input-group mb-3">
							<div class="input-group-prepend">
								<label class="input-group-text required" for="sDienThoai_CD">SĐT</label>
							</div>
							<!-- <input type="text" class="form-control" name="qm[sDienThoai_CD]" id="sDienThoai_CD" placeholder="Cố định" value="<?php echo $_smarty_tpl->tpl_vars['record']->value['sDienThoai_CD'];?>
" <?php if (empty($_smarty_tpl->tpl_vars['record']->value)||$_smarty_tpl->tpl_vars['record']->value['disable']&&!$_smarty_tpl->tpl_vars['record']->value['allowed_edit']||!in_array($_smarty_tpl->tpl_vars['session']->value['quyen'],array(2,6,7))||($_smarty_tpl->tpl_vars['session']->value['quyen']==2&&!$_smarty_tpl->tpl_vars['record']->value['allowed_edit'])) {?>disabled<?php }?>> -->
							<input type="text" class="form-control" name="qm[sDienThoai_DD]" id="sDienThoai_DD" placeholder="Di động*" value="<?php echo $_smarty_tpl->tpl_vars['record']->value['sDienThoai_DD'];?>
" <?php if (empty($_smarty_tpl->tpl_vars['record']->value)||$_smarty_tpl->tpl_vars['record']->value['disable']&&!$_smarty_tpl->tpl_vars['record']->value['allowed_edit']||!in_array($_smarty_tpl->tpl_vars['session']->value['quyen'],array(2,6,7))||($_smarty_tpl->tpl_vars['session']->value['quyen']==2&&!$_smarty_tpl->tpl_vars['record']->value['allowed_edit'])) {?>disabled<?php }?> required>
							</select>
						</div>
						<div class="col-12 col-sm-6 input-group mb-3">
							<div class="input-group-prepend">
								<label class=" lg-text input-group-text required" for="sNoiSinh">Nơi sinh</label>
							</div>
							<!-- <input type="text" class="form-control" id="sNoiSinh" name="dktn[sNoiSinh]" <?php if (!empty($_smarty_tpl->tpl_vars['record']->value['sNoiSinh'])) {?>value="<?php echo $_smarty_tpl->tpl_vars['record']->value['sNoiSinh'];?>
"<?php }?> required> -->
							<select class="form-control normal" id="sNoiSinh" name="dktn[sNoiSinh]" <?php if (empty($_smarty_tpl->tpl_vars['record']->value)||$_smarty_tpl->tpl_vars['record']->value['disable']&&!$_smarty_tpl->tpl_vars['record']->value['allowed_edit']||!in_array($_smarty_tpl->tpl_vars['session']->value['quyen'],array(2,6,7))||($_smarty_tpl->tpl_vars['session']->value['quyen']==2&&!$_smarty_tpl->tpl_vars['record']->value['allowed_edit'])) {?>disabled<?php }?>>
								<option value=''>Chọn Tỉnh/Thành phố</option>
								<?php if (!!$_smarty_tpl->tpl_vars['list_tinh']->value) {?>
								<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['list_tinh']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
								<option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['sTenT'];?>
" <?php if (!empty($_smarty_tpl->tpl_vars['record']->value['sNoiSinh'])&&$_smarty_tpl->tpl_vars['record']->value['sNoiSinh']==$_smarty_tpl->tpl_vars['v']->value['sTenT']) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value['sTenT'];?>
</option>
								<?php } ?>
								<?php } else { ?>
								<option class="" disabled>Chưa có dữ liệu</option>
								<?php }?>
							</select>
						</div>
						<div class="col-12 col-sm-6 input-group mb-3">
							<div class="input-group-prepend">
								<label class=" lg-text input-group-text required" for="sChoOHT">Chỗ ở hiện nay</label>
							</div>
							<input type="text" class="form-control" id="sChoOHT" name="dktn[sChoOHT]" <?php if (!empty($_smarty_tpl->tpl_vars['record']->value['sChoOHT'])) {?>value="<?php echo $_smarty_tpl->tpl_vars['record']->value['sChoOHT'];?>
"<?php }?> required>
						</div>
						<div class="col-12 input-group mb-3">
							<div class="input-group-prepend">
								<label class=" lg-text input-group-text" for="sNoiCT">Nơi công tác (Nếu có)</label>
							</div>
							<input type="text" class="form-control" id="sNoiCT" name="dktn[sNoiCT]" <?php if (!empty($_smarty_tpl->tpl_vars['record']->value['sNoiCT'])) {?>value="<?php echo $_smarty_tpl->tpl_vars['record']->value['sNoiCT'];?>
"<?php }?>>
						</div>
						<div class="col-12 input-group">
							<div class="input-group-prepend">
								<label class=" lg-text input-group-text" for="sThongTinLH">Họ tên, địa chỉ khi cần báo tin</label>
							</div>
							<input type="text" class="form-control" id="sThongTinLH" name="dktn[sThongTinLH]" <?php if (!empty($_smarty_tpl->tpl_vars['record']->value['sThongTinLH'])) {?>value="<?php echo $_smarty_tpl->tpl_vars['record']->value['sThongTinLH'];?>
"<?php }?>>
						</div>
					</div>
				</fieldset>
				<!-- End Thông tin cơ bản -->
				<!-- Văn bằng -->
				<fieldset class="custom-fieldset" name="diploma" <?php if (empty($_smarty_tpl->tpl_vars['record']->value)||($_smarty_tpl->tpl_vars['record']->value['disable']&&$_smarty_tpl->tpl_vars['record']->value['disable_bosung'])||!in_array($_smarty_tpl->tpl_vars['session']->value['quyen'],array(1,2,6,7))||(in_array($_smarty_tpl->tpl_vars['session']->value['quyen'],array(1,2))&&!$_smarty_tpl->tpl_vars['record']->value['allowed_edit'])) {?>disabled<?php }?>>
					<legend class="">Văn bằng</legend>
					<?php if (!empty($_smarty_tpl->tpl_vars['record']->value['sTenVB'])) {?>
					<p class="alert alert-success">
						<strong>Tên văn bằng:</strong> <span><?php if (!empty($_smarty_tpl->tpl_vars['record']->value['sTenVB'])) {
echo $_smarty_tpl->tpl_vars['record']->value['sTenVB'];
}?></span>
						<strong class="ml-2">Ngày quyết định đầu vào:</strong> <span><?php if (!empty($_smarty_tpl->tpl_vars['record']->value['dNgayQD'])) {
echo $_smarty_tpl->tpl_vars['record']->value['dNgayQD'];
}?></span>
						<strong class="ml-2">Số quyết định đầu vào:</strong> <span><?php if (!empty($_smarty_tpl->tpl_vars['record']->value['sSoQD'])) {
echo $_smarty_tpl->tpl_vars['record']->value['sSoQD'];
}?></span>
						<strong class="ml-2"><br>Năm tốt nghiệp:</strong> <span><?php if (!empty($_smarty_tpl->tpl_vars['record']->value['sNam'])) {
echo $_smarty_tpl->tpl_vars['record']->value['sNam'];
}?></span>
						<strong class="ml-2">Số hiệu bằng:</strong> <span><?php if (!empty($_smarty_tpl->tpl_vars['record']->value['sSoHieu'])) {
echo $_smarty_tpl->tpl_vars['record']->value['sSoHieu'];
}?></span>
						<strong class="ml-2">Nơi tốt nghiệp:</strong> <span><?php if (!empty($_smarty_tpl->tpl_vars['record']->value['sNoiTN'])) {
echo $_smarty_tpl->tpl_vars['record']->value['sNoiTN'];
}?></span>
					</p>
					<?php }?>
					<?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 4+1 - (0) : 0-(4)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
					<div class="row mt-3 vb<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
 <?php if (!empty($_smarty_tpl->tpl_vars['record']->value)&&isset($_smarty_tpl->tpl_vars['record']->value['list_mucduyet'][('vb').($_smarty_tpl->tpl_vars['i']->value)])) {
if ($_smarty_tpl->tpl_vars['record']->value['list_mucduyet'][('vb').($_smarty_tpl->tpl_vars['i']->value)]['sGiaTri_SV']==0) {?>d-none<?php }
} else { ?>d-none<?php }?>">
						<div class="col-12 mb-2">
							<?php if ($_smarty_tpl->tpl_vars['i']->value===0) {?>Văn bằng đầu vào<?php } elseif ($_smarty_tpl->tpl_vars['i']->value==1) {?>Văn bằng khác (cao nhất)<?php } else { ?>Văn bằng khác <?php echo $_smarty_tpl->tpl_vars['i']->value-1;
}?></div>
						<input type="hidden" id="vb_<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
_iSTT" name="vb[<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
][iSTT]" value="<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
">
						<div class="col-12 col-sm-6 col-xl-4 input-group mb-3">
							<div class="input-group-prepend">
								<label class="input-group-text required" for="vb_<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
_sLoaiVB">Loại văn bằng</label>
							</div>
							<?php if (!empty($_smarty_tpl->tpl_vars['record']->value)&&isset($_smarty_tpl->tpl_vars['record']->value['list_mucduyet'][('vb').($_smarty_tpl->tpl_vars['i']->value)])&&($_smarty_tpl->tpl_vars['session']->value['quyen']==6&&$_smarty_tpl->tpl_vars['record']->value['list_mucduyet'][('vb').($_smarty_tpl->tpl_vars['i']->value)]['sGiaTri_PDT']==1)||(in_array($_smarty_tpl->tpl_vars['session']->value['quyen'],array(1,2))&&!$_smarty_tpl->tpl_vars['record']->value['allowed_edit'])) {?>
							<span class="form-control" id="vb_<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
_sLoaiVB" readonly><?php echo $_smarty_tpl->tpl_vars['record']->value['list_mucduyet'][('vb').($_smarty_tpl->tpl_vars['i']->value)]['sLoaiVB'];?>
</span>
							<?php } else { ?>
							<select class="form-control normal loaivb required" data-nganh="#vb_<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
_sNganhHoc" data-to="#lb_mdvb<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" id="vb_<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
_sLoaiVB" name="vb[<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
][sLoaiVB]">
								<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['list_lvb']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
								<option value="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" <?php if (isset($_smarty_tpl->tpl_vars['record']->value['list_mucduyet'][('vb').($_smarty_tpl->tpl_vars['i']->value)])&&$_smarty_tpl->tpl_vars['record']->value['list_mucduyet'][('vb').($_smarty_tpl->tpl_vars['i']->value)]['sLoaiVB']==$_smarty_tpl->tpl_vars['v']->value) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</option>
								<?php } ?>
							</select>
							<?php }?>
						</div>
						<div class="col-12 col-sm-6 col-xl-8 input-group mb-3">
							<div class="input-group-prepend">
								<label class="input-group-text" for="vb_<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
_sNganhHoc">Ngành học</label>
							</div>
							<?php if (!empty($_smarty_tpl->tpl_vars['record']->value)&&isset($_smarty_tpl->tpl_vars['record']->value['list_mucduyet'][('vb').($_smarty_tpl->tpl_vars['i']->value)])&&($_smarty_tpl->tpl_vars['session']->value['quyen']==6&&$_smarty_tpl->tpl_vars['record']->value['list_mucduyet'][('vb').($_smarty_tpl->tpl_vars['i']->value)]['sGiaTri_PDT']==1)||(in_array($_smarty_tpl->tpl_vars['session']->value['quyen'],array(1,2))&&!$_smarty_tpl->tpl_vars['record']->value['allowed_edit'])) {?>
							<span class="form-control" id="vb_<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
_sNganhHoc" readonly><?php if (isset($_smarty_tpl->tpl_vars['record']->value['list_mucduyet'][('vb').($_smarty_tpl->tpl_vars['i']->value)])) {
echo $_smarty_tpl->tpl_vars['record']->value['list_mucduyet'][('vb').($_smarty_tpl->tpl_vars['i']->value)]['sNganhHoc'];
}?></span>
							<?php } else { ?>
							<input type="text" class="form-control" id="vb_<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
_sNganhHoc" name="vb[<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
][sNganhHoc]" <?php if (isset($_smarty_tpl->tpl_vars['record']->value['list_mucduyet'][('vb').($_smarty_tpl->tpl_vars['i']->value)])) {?>value="<?php echo $_smarty_tpl->tpl_vars['record']->value['list_mucduyet'][('vb').($_smarty_tpl->tpl_vars['i']->value)]['sNganhHoc'];?>
"<?php }?>>
							<?php }?>
						</div>
						<div class="col-12 col-sm-6 col-xl-4 input-group mb-3">
							<div class="input-group-prepend">
								<label class="input-group-text required" for="vb_<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
_iNamTN">Năm tốt nghiệp</label>
							</div>
							<?php if (!empty($_smarty_tpl->tpl_vars['record']->value)&&isset($_smarty_tpl->tpl_vars['record']->value['list_mucduyet'][('vb').($_smarty_tpl->tpl_vars['i']->value)])&&($_smarty_tpl->tpl_vars['session']->value['quyen']==6&&$_smarty_tpl->tpl_vars['record']->value['list_mucduyet'][('vb').($_smarty_tpl->tpl_vars['i']->value)]['sGiaTri_PDT']==1)||(in_array($_smarty_tpl->tpl_vars['session']->value['quyen'],array(1,2))&&!$_smarty_tpl->tpl_vars['record']->value['allowed_edit'])) {?>
							<span class="form-control" id="vb_<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
_iNamTN" readonly><?php if (isset($_smarty_tpl->tpl_vars['record']->value['list_mucduyet'][('vb').($_smarty_tpl->tpl_vars['i']->value)])) {
echo $_smarty_tpl->tpl_vars['record']->value['list_mucduyet'][('vb').($_smarty_tpl->tpl_vars['i']->value)]['iNamTN'];
}?></span>
							<?php } else { ?>
							<input type="text" class="form-control required" id="vb_<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
_iNamTN" name="vb[<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
][iNamTN]" <?php if (isset($_smarty_tpl->tpl_vars['record']->value['list_mucduyet'][('vb').($_smarty_tpl->tpl_vars['i']->value)])) {?>value="<?php echo $_smarty_tpl->tpl_vars['record']->value['list_mucduyet'][('vb').($_smarty_tpl->tpl_vars['i']->value)]['iNamTN'];?>
"<?php }?>>
							<?php }?>
						</div>
						<div class="col-12 col-sm-6 col-xl-4 input-group mb-3">
							<div class="input-group-prepend">
								<label class="input-group-text required" for="vb_<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
_sSoHieu">Số hiệu bằng</label>
							</div>
							<?php if (!empty($_smarty_tpl->tpl_vars['record']->value)&&isset($_smarty_tpl->tpl_vars['record']->value['list_mucduyet'][('vb').($_smarty_tpl->tpl_vars['i']->value)])&&($_smarty_tpl->tpl_vars['session']->value['quyen']==6&&$_smarty_tpl->tpl_vars['record']->value['list_mucduyet'][('vb').($_smarty_tpl->tpl_vars['i']->value)]['sGiaTri_PDT']==1)||(in_array($_smarty_tpl->tpl_vars['session']->value['quyen'],array(1,2))&&!$_smarty_tpl->tpl_vars['record']->value['allowed_edit'])) {?>
							<span class="form-control" id="vb_<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
_sSoHieu" readonly><?php if (isset($_smarty_tpl->tpl_vars['record']->value['list_mucduyet'][('vb').($_smarty_tpl->tpl_vars['i']->value)])) {
echo $_smarty_tpl->tpl_vars['record']->value['list_mucduyet'][('vb').($_smarty_tpl->tpl_vars['i']->value)]['sSoHieu'];
}?></span>
							<?php } else { ?>
							<input type="text" class="form-control required" id="vb_<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
_sSoHieu" name="vb[<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
][sSoHieu]" <?php if (isset($_smarty_tpl->tpl_vars['record']->value['list_mucduyet'][('vb').($_smarty_tpl->tpl_vars['i']->value)])) {?>value="<?php echo $_smarty_tpl->tpl_vars['record']->value['list_mucduyet'][('vb').($_smarty_tpl->tpl_vars['i']->value)]['sSoHieu'];?>
"<?php }?>>
							<?php }?>
						</div>
						<div class="col-12 col-sm-12 col-xl-4 input-group mb-3">
							<div class="input-group-prepend">
								<label class="input-group-text normal required" for="vb_<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
_sNoiCap">Nơi cấp</label>
							</div>
							<?php if (!empty($_smarty_tpl->tpl_vars['record']->value)&&isset($_smarty_tpl->tpl_vars['record']->value['list_mucduyet'][('vb').($_smarty_tpl->tpl_vars['i']->value)])&&($_smarty_tpl->tpl_vars['session']->value['quyen']==6&&$_smarty_tpl->tpl_vars['record']->value['list_mucduyet'][('vb').($_smarty_tpl->tpl_vars['i']->value)]['sGiaTri_PDT']==1)||(in_array($_smarty_tpl->tpl_vars['session']->value['quyen'],array(1,2))&&!$_smarty_tpl->tpl_vars['record']->value['allowed_edit'])) {?>
							<span class="form-control" id="vb_<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
_sNoiCap" title="<?php if (isset($_smarty_tpl->tpl_vars['record']->value['list_mucduyet'][('vb').($_smarty_tpl->tpl_vars['i']->value)])) {
echo $_smarty_tpl->tpl_vars['record']->value['list_mucduyet'][('vb').($_smarty_tpl->tpl_vars['i']->value)]['sNoiCap'];
}?>" readonly><?php if (isset($_smarty_tpl->tpl_vars['record']->value['list_mucduyet'][('vb').($_smarty_tpl->tpl_vars['i']->value)])) {
echo $_smarty_tpl->tpl_vars['record']->value['list_mucduyet'][('vb').($_smarty_tpl->tpl_vars['i']->value)]['sNoiCap'];
}?></span>
							<?php } else { ?>
							<input type="text" class="form-control required" id="vb_<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
_sNoiCap" name="vb[<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
][sNoiCap]" <?php if (isset($_smarty_tpl->tpl_vars['record']->value['list_mucduyet'][('vb').($_smarty_tpl->tpl_vars['i']->value)])) {?>value="<?php echo $_smarty_tpl->tpl_vars['record']->value['list_mucduyet'][('vb').($_smarty_tpl->tpl_vars['i']->value)]['sNoiCap'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['record']->value['list_mucduyet'][('vb').($_smarty_tpl->tpl_vars['i']->value)]['sNoiCap'];
}?>">
							<?php }?>
						</div>
					</div>
					<?php }} ?>
				</fieldset>
				<!-- End Văn bằng -->
			</div>
			<!-- Phần phải -->
		</div>
		<?php if (!!$_smarty_tpl->tpl_vars['session']->value&&in_array($_smarty_tpl->tpl_vars['session']->value['quyen'],array(2,3,4,5,6))) {?>
		<div id="nx_k" class="row">
			<div class="col-12 col-md-8 offset-md-2">
				<!-- Thẩm định của Khoa -->
				<fieldset class="custom-fieldset check-khoa" <?php if (empty($_smarty_tpl->tpl_vars['record']->value)||($_smarty_tpl->tpl_vars['record']->value['disable']&&$_smarty_tpl->tpl_vars['record']->value['disable_bosung'])||!in_array($_smarty_tpl->tpl_vars['session']->value['quyen'],array(6))) {?>disabled<?php }?>>
					<legend class="">Thẩm định của Đơn vị đào tạo</legend>
					<div class="row">
						<div class="col-12 col-sm-6 col-xl-4 mb-3">
							<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['list_mucduyet']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
							<?php if ($_smarty_tpl->tpl_vars['v']->value['sLoaiMD']!='vb_goc') {?>
							<?php if ($_smarty_tpl->tpl_vars['v']->value['FK_sMaHe']==''||$_smarty_tpl->tpl_vars['record']->value['FK_sMaHe']==''||($_smarty_tpl->tpl_vars['v']->value['FK_sMaHe']==$_smarty_tpl->tpl_vars['record']->value['FK_sMaHe'])) {?>
							<div class="custom-control custom-checkbox mr-3 w-100
								<?php if (!(($_smarty_tpl->tpl_vars['v']->value['sLoaiMD']=='vb'&&!empty($_smarty_tpl->tpl_vars['v']->value['sLoaiVB']))||$_smarty_tpl->tpl_vars['v']->value['sLoaiMD']!='vb')&&$_smarty_tpl->tpl_vars['v']->value['PK_sMaMD']!='vb0') {?>
									<?php if (!isset($_smarty_tpl->tpl_vars['record']->value['list_mucduyet'][$_smarty_tpl->tpl_vars['v']->value['PK_sMaMD']])) {?>d-none<?php }?>
								<?php }?>">
								<input type="checkbox" class="custom-control-input canbo_duyet_checkbox" data-tocheck="#lb_<?php echo $_smarty_tpl->tpl_vars['v']->value['PK_sMaMD'];?>
" id="cb_<?php echo $_smarty_tpl->tpl_vars['v']->value['PK_sMaMD'];?>
" name="md[<?php echo $_smarty_tpl->tpl_vars['v']->value['PK_sMaMD'];?>
]" <?php if (isset($_smarty_tpl->tpl_vars['record']->value['list_mucduyet'][$_smarty_tpl->tpl_vars['v']->value['PK_sMaMD']])&&$_smarty_tpl->tpl_vars['record']->value['list_mucduyet'][$_smarty_tpl->tpl_vars['v']->value['PK_sMaMD']]['sGiaTri_TK']=='1') {?>checked<?php }?> <?php if ((isset($_smarty_tpl->tpl_vars['record']->value['list_mucduyet'][$_smarty_tpl->tpl_vars['v']->value['PK_sMaMD']])&&$_smarty_tpl->tpl_vars['record']->value['list_mucduyet'][$_smarty_tpl->tpl_vars['v']->value['PK_sMaMD']]['sGiaTri_PDT']==1)) {?>onclick="return false"<?php }?>>
								<label id="lb_md<?php echo $_smarty_tpl->tpl_vars['v']->value['PK_sMaMD'];?>
" class="custom-control-label" for="cb_<?php echo $_smarty_tpl->tpl_vars['v']->value['PK_sMaMD'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['sTenMD'];?>
<span><?php if (!empty($_smarty_tpl->tpl_vars['record']->value['list_mucduyet'][$_smarty_tpl->tpl_vars['v']->value['PK_sMaMD']]['sLoaiVB'])) {?>: <?php echo $_smarty_tpl->tpl_vars['record']->value['list_mucduyet'][$_smarty_tpl->tpl_vars['v']->value['PK_sMaMD']]['sLoaiVB'];
}?></span></label>
							</div>
							<?php if ($_smarty_tpl->tpl_vars['k']->value+1==count($_smarty_tpl->tpl_vars['list_mucduyet']->value)/2) {?>
						</div>
						<div class="col-12 col-sm-6 col-xl-4 mb-3">
							<?php }?>
							<?php }?>
							<?php }?>
							<?php } ?>
						</div>
						<div class="col-12 col-sm-6 col-xl-4">
							<strong>TCTL:</strong> <span class="mr-3"><?php echo $_smarty_tpl->tpl_vars['record']->value['iTongTCTL'];
if ($_smarty_tpl->tpl_vars['record']->value['iTongTCTL']<$_smarty_tpl->tpl_vars['record']->value['tctoithieu']) {?><b style="color:red;">(Không đủ tín chỉ tối thiểu)</b><?php }?></span><br>
							<strong>TBCTLTK:</strong> <span class="mr-3"><?php echo $_smarty_tpl->tpl_vars['record']->value['iTBCTLTK'];?>
</span><br>
							<?php if ($_smarty_tpl->tpl_vars['record']->value['iChinhQuy']==1) {?><strong>XLRL:</strong> <span class="mr-3"><?php echo $_smarty_tpl->tpl_vars['record']->value['sXLRL'];?>
</span><br><?php }?>
							<strong>XLTN:</strong> <span class="mr-3"><?php echo $_smarty_tpl->tpl_vars['record']->value['sXLTN'];?>
</span>
							<?php if (!empty($_smarty_tpl->tpl_vars['record']->value['cb_duyet'])) {?>
							<br>
							<strong>Cán bộ:</strong> <span class="mr-3"><?php echo $_smarty_tpl->tpl_vars['record']->value['cb_duyet']['sHoTen'];?>
</span><br>
							<strong>Thời gian:</strong> <span class="mr-3"><?php echo $_smarty_tpl->tpl_vars['record']->value['cb_duyet']['dThoiGian'];?>
</span>
							<?php }?>
						</div>
					</div>
				</fieldset>
				<!-- End Thẩm định của Khoa -->
			</div>
		</div>
		<?php }?>
		<!-- <?php if (!$_smarty_tpl->tpl_vars['record']->value['iKhoaDot']) {?> -->
			<div class="col-12 mb-3 text-center">
				<?php if (!empty($_smarty_tpl->tpl_vars['record']->value['tb_duyet'])) {?>
				<?php  $_smarty_tpl->tpl_vars['tb'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tb']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['record']->value['tb_duyet']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tb']->key => $_smarty_tpl->tpl_vars['tb']->value) {
$_smarty_tpl->tpl_vars['tb']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['tb']->key;
?>
				<?php if (!empty($_smarty_tpl->tpl_vars['tb']->value)) {?>
				<button type="button" disabled class="alert alert-<?php if ($_smarty_tpl->tpl_vars['tb']->value['sGiaTri']=='y') {?>primary<?php } else { ?>danger<?php }?> text-left" style="cursor: unset !important; user-select: text;">
					Tiểu ban: <b><?php if ($_smarty_tpl->tpl_vars['tb']->value['iTrangThai']==31) {?>Hồ sơ<?php } elseif ($_smarty_tpl->tpl_vars['tb']->value['iTrangThai']==32) {?>Tài chính<?php } elseif ($_smarty_tpl->tpl_vars['tb']->value['iTrangThai']==33) {?>KQRL<?php } elseif ($_smarty_tpl->tpl_vars['tb']->value['iTrangThai']==34) {?>Đầu vào và thời gian đào tạo<?php }?></b> <br>
					Trạng thái: <b><?php if ($_smarty_tpl->tpl_vars['tb']->value['sGiaTri']=='y') {?>Duyệt<?php } else { ?>Không Duyệt<?php }?></b> <br>
					Ghi chú: <b><?php echo $_smarty_tpl->tpl_vars['tb']->value['sGhiChu'];?>
</b><br>
					Người duyệt: <b><?php echo $_smarty_tpl->tpl_vars['tb']->value['sHoTen'];?>
</b><br>
					Thời gian: <b><?php echo $_smarty_tpl->tpl_vars['tb']->value['dThoiGian'];?>
</b><br>
				</button>
				<?php }?>
				<?php } ?>
				<?php }?>
				<br>
				<?php if (!empty($_smarty_tpl->tpl_vars['record']->value['dNgayBD_BS'])&&$_smarty_tpl->tpl_vars['record']->value['dNgayBD_BS']>$_smarty_tpl->tpl_vars['record']->value['dNgayKT_K']) {?>
				<button type="button" disabled class="alert alert-primary" style="cursor: unset !important; user-select: text;">
					Đợt bổ sung: <?php echo date("d/m/Y",strtotime($_smarty_tpl->tpl_vars['record']->value['dNgayBD_BS']));?>
 - <?php echo date("d/m/Y",strtotime($_smarty_tpl->tpl_vars['record']->value['dNgayKT_BS']));?>

				</button> <br>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['session']->value['quyen']==7&&!$_smarty_tpl->tpl_vars['record']->value['disable']) {?>
					<!-- Sinh viên -->
					<button name="action" value="save-dktn" type="submit" class="btn btn-success hard-check"><i class="fas fa-save"></i> Lưu</button>
					<!-- End Sinh viên -->
				<?php } elseif ($_smarty_tpl->tpl_vars['session']->value['quyen']==6&&(!$_smarty_tpl->tpl_vars['record']->value['disable']||!$_smarty_tpl->tpl_vars['record']->value['disable_bosung']||!$_smarty_tpl->tpl_vars['record']->value['disable_hoantac'])) {?>
					<!-- ĐVĐT -->
					<?php if ($_smarty_tpl->tpl_vars['record']->value['FK_iMaTT']==2&&!$_smarty_tpl->tpl_vars['record']->value['disable_hoantac']) {?>
					<button name="action" value="hoantac" type="submit" class="btn" role="hoan-tac"><i class="fas fa-history"></i> Hoàn tác</button>
					<?php } elseif (!$_smarty_tpl->tpl_vars['record']->value['disable']||!$_smarty_tpl->tpl_vars['record']->value['disable_bosung']) {?>
					<button name="action" value="confirm-dktn" type="submit" class="btn btn-dark hard-check"><i class="fas fa-check"></i> Duyệt</button>
					<button name="action" value="save-dktn" type="submit" class="btn btn-success"><i class="fas fa-save"></i> Lưu tạm</button>
					<?php }?>
					<?php if (in_array($_smarty_tpl->tpl_vars['record']->value['FK_iMaTT'],array(1,11))) {?>
					<button class="btn btn-danger" name="btn-guitra"><i class="fas fa-times"></i> Gửi trả</button>
					<?php }?>
					<!-- End ĐVĐT -->
				<?php }?>
							<div class="input-group" style="margin: 1em 20%; width: 60%">
								<div class="input-group-prepend">
									<label class="input-group-text" for="ghichu">Ghi chú duyệt hồ sơ:</label>
								</div>
								<?php if ($_smarty_tpl->tpl_vars['session']->value['quyen']==7) {?>
								<span class="form-control" id="sMaSV" readon></span>
								<?php } else { ?>
								<input type="text" class="form-control undisabledable" name='ghichu' id="ghichu" value="<?php if ($_smarty_tpl->tpl_vars['session']->value['quyen']==6) {
echo $_smarty_tpl->tpl_vars['record']->value['input_ghichu_dvdt']['sGhiChu'];
}
echo $_smarty_tpl->tpl_vars['record']->value['input_ghichu'];?>
">
								<?php }?>
							</div>
				<?php if (in_array($_smarty_tpl->tpl_vars['session']->value['quyen'],array(2,3,4,5))&&!$_smarty_tpl->tpl_vars['record']->value['disable']&&$_smarty_tpl->tpl_vars['khoatb']->value==0) {?>
					<!-- Tiểu ban -->
					<button class="btn btn-solid" name="btn-duyet" data-quyen="<?php echo $_smarty_tpl->tpl_vars['session']->value['quyen'];?>
" data-tctt="<?php echo $_smarty_tpl->tpl_vars['record']->value['tctoithieu'];?>
"><i class="fas fa-check"></i> Duyệt</button>
					<?php if (in_array($_smarty_tpl->tpl_vars['session']->value['quyen'],array(2,5))) {?><button class="btn" name="btn-khongduyet"><i class="fas fa-times"></i> Không duyệt</button><?php }?>
					<?php if (in_array($_smarty_tpl->tpl_vars['session']->value['quyen'],array(3,4))) {?><button class="btn" name="btn-khongduyet-khonglydo"><i class="fas fa-times"></i> Không duyệt</button><?php }?>
					<!-- End Tiểu ban -->
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['record']->value['allowed_edit']) {?>
					<button name="action" value="update-dktn" type="submit" class="btn btn-success"><i class="fas fa-check"></i> Xác nhận Cật nhật thông tin</button>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['record']->value['disable_lydo']) {?>
					<button tyoe="button" disabled class="alert alert-danger disabled text-left" style="cursor: unset !important; user-select: text;">
						<i><?php echo $_smarty_tpl->tpl_vars['record']->value['disable_lydo'];?>
</i>
					</button>
				<?php }?>
			</div>
		<!-- <?php }?> -->
	</form>
	
	<!-- Preview ảnh -->
	<div class="modal fade bd-example-modal-lg show" id="preview-img" role="dialog">
    	<div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
					<div class="text-danger">*Ấn vào ảnh để thực hiện xoay ảnh</div>
                    <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-center">
					<div class="row" id="gallery">
					</div>
                </div>
            </div>
		</div>
	</div>
</div>

<!-- Photo viewer (Tool hiện thị cài đặt ảnh) -->
<!-- <link href="assets/plugins/photo_viewer/photo_viewer/docs.css"> -->
<link href="assets/plugins/photo_viewer/photoviewer.css" rel="stylesheet">
<!-- <link href="assets/plugins/photo_viewer/snack.css" rel="stylesheet">
<link href="assets/plugins/photo_viewer/snack-helper.css" rel="stylesheet"> -->

<?php echo '<script'; ?>
 src="assets/plugins/photo_viewer/jquery.min.js"><?php echo '</script'; ?>
>
<!-- <?php echo '<script'; ?>
 src="assets/plugins/photo_viewer/prettify.min.js"><?php echo '</script'; ?>
> -->
<?php echo '<script'; ?>
 src="assets/plugins/photo_viewer/photoviewer.js"><?php echo '</script'; ?>
>
<!-- Kết thúc --><?php }} ?>
