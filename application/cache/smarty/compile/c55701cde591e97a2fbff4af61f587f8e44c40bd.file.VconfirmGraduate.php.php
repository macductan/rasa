<?php /* Smarty version Smarty-3.1.21-dev, created on 2022-06-27 15:01:50
         compiled from "F:\xampp\htdocs\totnghiep\application\views\phong\VconfirmGraduate.php" */ ?>
<?php /*%%SmartyHeaderCode:190062b963eec29804-13430312%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c55701cde591e97a2fbff4af61f587f8e44c40bd' => 
    array (
      0 => 'F:\\xampp\\htdocs\\totnghiep\\application\\views\\phong\\VconfirmGraduate.php',
      1 => 1656315795,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '190062b963eec29804-13430312',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'csrf' => 0,
    'list_dotxet' => 0,
    'v' => 0,
    'list_khoa' => 0,
    'list_nganh' => 0,
    'list_diadiem' => 0,
    'list_trangthai' => 0,
    'list_he' => 0,
    'list_canbo' => 0,
    'username' => 0,
    'baseurl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_62b963eecc4cd8_18159210',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62b963eecc4cd8_18159210')) {function content_62b963eecc4cd8_18159210($_smarty_tpl) {?><style>
.tooltip {
    pointer-events: none;
}
table tr th{
    position: sticky;
    top: 2em;
    background: #fafafa;
}
.row-1-3{
    top: 2.5em !important;
}
.row-2-2{
    top: 5.1em !important;
}
.row-2-3{
    top: 5.5em !important;
}
.row-3-3{
    top: 8.4em !important;
}
.btn-import{
    position: absolute;
    top: -11em;
    right: -28em;
}
.form-control{
	color: black !important;
	font-weight:normal !important;
}
</style>
<div class="main-content-container container-fluid px-4">
    <div class="page-header row no-gutters py-2">
        <div class="col-12 col-md-6 text-center text-md-left mb-0">
            <span class="text-uppercase page-subtitle">Xác nhận tốt nghiệp</span>
            <h3 class="page-title">Danh sách sinh viên theo đợt</h3>
        </div>
        <div class="col-12 col-md-6 text-center text-md-right mb-0">
        <a href="importListGraStu" target="_blank" class="btn custom-btn my-3"><i class="fas fas fa-file-import"></i> Nhập DSSV tốt nghiệp</a>
        <button type="button" class="btn btn-danger reject-all-by-dtn"><i class="fas fa-times"></i> Chuyển các hồ sơ còn lại sang đợt khác</button>
        </div>
    </div>
    <div class="row">
        <div id="filter-box" class="col-12 mb-4">
            <div class="card custom-card">
                <div class="card-body">
                    <!-- <form action="" method="post" class="quick-post-form"> -->
                    <!-- <input class="csrf" type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['csrf']->value['name'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['csrf']->value['hash'];?>
" /> -->
                    <form action="previewScore" method="post" class="quick-post-form">
                        <input class="d-none" type="text" id="trangxacnhan" name="trangxacnhan" value="1">
                        <div class="row">
                            <div class="col-12 col-sm-6 col-xl-3 input-group mb-3">
                                <div class="input-group-prepend">
                                    <label class="input-group-text label-title" for="dotxet">Đợt xét</label>
                                </div>
                                <select class="form-control normal pl-1" id="dotxet" name="dotxet">
                                    <?php if (!!$_smarty_tpl->tpl_vars['list_dotxet']->value) {?>
                                    <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['list_dotxet']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['PK_sMaDTN'];?>
">
                                        <?php echo date('d/m/Y',strtotime($_smarty_tpl->tpl_vars['v']->value['dNgayBD']));?>
 - <?php echo date('d/m/Y',strtotime($_smarty_tpl->tpl_vars['v']->value['dNgayKT']));?>

                                        (<?php if ($_smarty_tpl->tpl_vars['v']->value['iChinhQuy']==1) {?>CQ<?php }
if ($_smarty_tpl->tpl_vars['v']->value['iChinhQuy']==2) {?>VLVH<?php }
if ($_smarty_tpl->tpl_vars['v']->value['iChinhQuy']==0) {?>TX<?php }?>)
                                    </option>
                                    <?php } ?>
                                    <?php } else { ?>
                                    <option class="" disabled>Chưa có dữ liệu</option>
                                    <?php }?>
                                </select>
                            </div>
                            <div class="col-12 col-sm-6 col-xl-3 input-group mb-3">
                                <div class="input-group-prepend">
                                    <label class="input-group-text label-title" for="khoa">ĐVĐT</label>
                                </div>
                                <select class="form-control normal pl-1" id="khoa" name="filter-khoa">
                                    <option value="all">Chọn tất cả</option>
                                    <?php if (!!$_smarty_tpl->tpl_vars['list_khoa']->value) {?>
                                    <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['list_khoa']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['PK_iMaKhoa'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['sTenKhoa'];?>
</option>
                                    <?php } ?>
                                    <?php }?>
                                </select>
                            </div>
                            <div class="col-12 col-sm-6 col-xl-3 input-group mb-3">
                                <div class="input-group-prepend">
                                    <label class="input-group-text label-title" for="nganh">Ngành</label>
                                </div>
                                <select class="form-control normal pl-1" id="nganh" name="filter-nganh">
                                    <option value="all" selected>Chọn tất cả</option>
                                    <?php if (!!$_smarty_tpl->tpl_vars['list_nganh']->value) {?>
                                    <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['list_nganh']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['PK_iMaNganh'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['sTenNganh'];?>
</option>
                                    <?php } ?>
                                    <?php }?>
                                </select>
                            </div>
                            <div class="col-12 col-sm-6 col-xl-3 input-group mb-3">
                                <div class="input-group-prepend">
                                    <label class="input-group-text label-title" for="diadiem">Địa điểm học tập</label>
                                </div>
                                <select class="form-control pl-1" id="diadiem" style="flex: 1 1 auto; width: 60%" name="filter-diadiem">
                                    <option value="all" selected>Chọn tất cả</option>
                                    <?php if (!!$_smarty_tpl->tpl_vars['list_diadiem']->value) {?>
                                    <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['list_diadiem']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['PK_sMaDD'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['sTenDD'];?>
</option>
                                    <?php } ?>
                                    <?php }?>
                                </select>
                            </div>
                            <div class="col-12 col-sm-6 col-xl-3 input-group mb-3 mb-xl-0">
                                <div class="input-group-prepend">
                                    <label class="input-group-text label-title" for="trangthai">Trạng thái</label>
                                </div>
                                <select class="form-control normal pl-1" id='trangthai' name="filter-trangthai">
                                    <option value="all">Chọn tất cả</option>
                                    <?php if (!!$_smarty_tpl->tpl_vars['list_trangthai']->value) {?>
                                    <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['list_trangthai']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['PK_iMaTT'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['sTenTT'];?>
</option>
                                    <?php } ?>
                                    <?php }?>
                                    <option value="eligible">Đủ điều kiện</option>
                                    <option value="unconditional">Không đủ điều kiện</option>
                                </select>
                            </div>
                            <div class="col-12 col-sm-6 col-xl-3 input-group mb-3 mb-xl-0">
                                <div class="input-group-prepend">
                                    <label class="input-group-text label-title" for="PQLDT">PQLĐT</label>
                                </div>
                                <select class="form-control normal pl-1" id='PQLDT' name="PQLDT">
                                    <option value="all">Chọn tất cả</option>
                                    <option value="0">Chưa duyệt</option>
                                    <option value="y">Đã duyệt</option>
                                    <option value="n">Không duyệt</option>
                                </select>
                            </div>
                            <div class="col-12 col-sm-6 col-xl-3 input-group mb-3 mb-xl-0">
                                <div class="input-group-prepend">
                                    <label class="input-group-text label-title" for="PKHTC">PKHTC</label>
                                </div>
                                <select class="form-control normal pl-1" id='PKHTC' name="PKHTC">
                                    <option value="all">Chọn tất cả</option>
                                    <option value="0">Chưa duyệt</option>
                                    <option value="y">Đã duyệt</option>
                                    <option value="n">Không duyệt</option>
                                </select>
                            </div>
                            <div id="box-ctccsv" class="col-12 col-sm-6 col-xl-3 input-group mb-3 mb-xl-0">
                                <div class="input-group-prepend">
                                    <label id="lb" class="input-group-text label-title" for="PCTCCSV">PCTCCSV</label>
                                </div>
                                <select class="form-control normal pl-1" id="PCTCCSV" name="PCTCCSV">
                                    <option selected value="all">Chọn tất cả</option>
                                    <option value="0">Chưa duyệt</option>
                                    <option value="y">Đã duyệt</option>
                                    <option value="n">Không duyệt</option>
                                </select>
                            </div>
                            <div id="box-ttptdt" class="col-12 col-sm-6 col-xl-3 input-group mb-3 mb-xl-0">
                                <div class="input-group-prepend">
                                    <label id="lb" class="input-group-text label-title" for="TTPTDT">TTPTĐT</label>
                                </div>
                                <select class="form-control normal pl-1" id="TTPTDT" name="TTPTDT">
                                    <option selected value="all">Chọn tất cả</option>
                                    <option value="0">Chưa duyệt</option>
                                    <option value="y">Đã duyệt</option>
                                    <option value="n">Không duyệt</option>
                                </select>
                            </div>


                            <div class="col-12 col-sm-6 col-xl-3 input-group mt-3 mb-3 mb-xl-0">
                                <div class="input-group-prepend">
                                    <label id="lb" class="input-group-text label-title" for="hedaotao">Hình thức đào tạo</label>
                                </div>
                                <select class="form-control normal pl-1" id="hedaotao" name="hedaotao">
                                    <option selected value="all">Chọn tất cả</option>
                                    <?php if (!!$_smarty_tpl->tpl_vars['list_he']->value) {?>
                                    <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['list_he']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['PK_sMaHTDT'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['sTenHTDT'];?>
 - <?php echo $_smarty_tpl->tpl_vars['v']->value['sTenVT'];?>
</option>
                                    <?php } ?>
                                    <?php }?>
                                </select>
                            </div>

                            <div class="col-12 col-sm-6 col-xl-3 input-group mt-3 mb-3 mb-xl-0">
                                <div class="input-group-prepend">
                                    <label class="input-group-text label-title" for="cgmasv">Mã hoặc tên SV</label>
                                </div>
                                <input type="text" class="form-control pl-2" id="cgmasv" name="cgmasv"
                                    placeholder="Nhập mã hoặc họ tên sinh viên" value="">
                            </div>

                            <div class="col-12 col-sm-6 col-xl-3 input-group mt-3 mb-3 mb-xl-0">
                                <div style="width:30%;" class="input-group-prepend">
                                    <label class="input-group-text label-title" for="canbo">Người thẩm định</label>
                                </div>
                                <select style="width:70%;" class="form-control pl-1" id="canbo" name="canbo">
                                    <option selected value="all">Chọn tất cả</option>
                                    <?php if (!!$_smarty_tpl->tpl_vars['list_canbo']->value) {?>
                                    <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['list_canbo']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['PK_sMaTK'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['sHoTen'];?>
</option>
                                    <?php } ?>
                                    <?php }?>
                                </select>
                            </div>
                            
                            <div class="col-12 col-xl-6 mt-3 text-center text-xl-left d-flex justify-content-between align-items-center">
								<span name="action" id="filter" class="btn custom-btn"><i class="fas fa-filter" ></i> Lọc</span>
								<button name="exportExcel" id="exportExcel" type="button" class="btn custom-btn">
									<i class="fas fa-file-excel"></i> Xuất Excel
								</button>
								<!-- <button name="exportExcel1" id="exportExcel1" type="button" class="d-none btn custom-btn">
									<i class="fas fa-file-excel"></i> Xuất Excel
								</button> -->
                                <?php if ($_smarty_tpl->tpl_vars['username']->value=='dhvan') {?>
                                <button name="exportWarning" id="exportWarning" type="button" class="btn custom-btn">
									<i class="fas fa-file-excel"></i> Xuất DS cảnh báo
								</button>
                                <?php }?>
                                <button id="loading" type="button" class="btn loader d-none"></button>
                                <span name="plvb" id="plvb" class="btn custom-btn" data-baseurl="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
"><i class="plvb" ></i><i class="fas fa-file-word"></i> PLVB</span>
                                <span name="coppy_plvb" id="coppy_plvb" class="btn custom-btn" data-baseurl="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
"><i class="fas fa-file-word"></i> BS PLVB</span>
                                <strong style="vertical-align: middle;">Hiện danh sách chi tiết</strong>
                                <label class="switch m-0 ml-2">
                                    <input type="checkbox" id="tog-btn" value="off">
                                    <span class="slider round"></span>
                                </label>
							</div>
                        </div>
                    </form>
                </div>
                <!-- </form> -->
            </div>
        </div>
        <!-- Danh sách đợt tốt nghiệp -->
        
        <div class="table-reponsive" style="width:100%">
            <table id="table-confirm" class="table table-striped table-inverse text-center mb-0" style="
        white-space: nowrap;">

                        <thead class="">
                        <tr id="head-table">
                            <!-- <td >STT</td> -->
                            <th class="sticky-col" style="z-index: 2;left: 0em;vertical-align: middle;" rowspan="3">STT</th>
                            <th class="sticky-col" style="z-index: 2;left: 3.1em; vertical-align: middle; min-width: 12em;" rowspan="3" >Mã SV</th>
                            <th class="sticky-col" style="z-index: 2;left: 15.1em; vertical-align: middle;" rowspan="3" >Họ tên</th>
                            <th class="hide-col" rowspan="3" >Ngày sinh</th>
                            <th class="hide-col" rowspan="3" >Nơi sinh</th>
                            <th class="hide-col" rowspan="3" >Quốc tịch</th>
                            <th class="hide-col" rowspan="3" >Giới tính</th>
                            <th class="hide-col" rowspan="3" >Tôn giáo</th>
                            <th class="hide-col" rowspan="3" >Dân tộc</th>
                            <th class="hide-col" rowspan="3" >Hệ</th>
                            <th class="hide-col" rowspan="3" >Ngành</th>
                            <th class="hide-col" rowspan="3" >Lớp</th>
                            <th class="hide-col" rowspan="3" >Địa điểm học</th>
                            <th class="hide-col" rowspan="3" >Đơn vị đào tạo</th>
                            <!-- <th class="hide-col" rowspan="3" >Mã sinh viên</th> -->
                            <th class="hide-col" rowspan="3" >Số-Ngày quyết định đầu vào</th>
                            <th class="hide-col" rowspan="3" >Lý lịch</th>
                            <th class="hide-col" rowspan="3" >Khai sinh</th>
                            <th class="hide-col" rowspan="3" >Đơn ĐK TN</th>
                            <th class="hide-col row-1-3" colspan="22" scope="colgroup">Bằng tốt nghiệp</th> <!--  top: 2.5em; -->
                            <th class="hide-col" rowspan="3" >GDTC</th>
                            <th class="hide-col" rowspan="3" >GDQP-AN</th>
                            <th class="hide-col" rowspan="3" >CĐR NLNN</th>
                            <th class="hide-col" rowspan="3" >CĐR CNTT</th>
                            <th class="hide-col" rowspan="3" >Điện thoại liên hệ</th>
                            <th id="headtable1" style="display: none; vertical-align: middle;" rowspan="3" >XLRL</th>
                            <th rowspan="3" style="vertical-align: middle;">XLTN</th>
                            <th rowspan="3" style="vertical-align: middle;">TCTL</th>
                            <th rowspan="3" style="vertical-align: middle;">TBCTLTK</th>
                            <th class="hide-col" colspan="4" scope="colgroup">Hộ khẩu thường trú</th>
                            <th class="hide-col" rowspan="3">Email</th>
                            <th class="hide-col" rowspan="3">Địa chỉ của sinh viên</th>
                            <th class="hide-col" rowspan="3">Số CMTND/CCCD</th>
                            <th class="hide-col" rowspan="3">Ghi chú</th>

                            <th class="tt-31" rowspan="3" style="vertical-align: middle;">PQLĐT</th>
                            <th class="tt-32" rowspan="3" style="vertical-align: middle;">PKHTC</th>
                            <th id="custom" class="1" rowspan="3" style="vertical-align: middle;"></th>
                            <th rowspan="3" style="vertical-align: middle;">Ghi chú</th>
                            <th rowspan="3" style="vertical-align: middle;">Trạng thái</th>
                            <th rowspan="3" style="vertical-align: middle;">Tác vụ</th>

                        </tr>
                        <tr>
                            <th class="hide-col row-2-2" scope="col" rowspan="2">Bản CC bằng theo đầu vào</th><!--  top: 5.1em; -->
                            <th class="hide-col row-2-2" scope="col" rowspan="2">Bản CC các văn bằng khác</th>

                            <th class="hide-col row-2-3" scope="col" colspan="5">Văn bằng gốc theo đầu vào</th><!-- top: 5.5em; -->
                            <th class="hide-col row-2-3" scope="col" colspan="5">Văn bằng gốc khác (1)</th>
                            <th class="hide-col row-2-3" scope="col" colspan="5">Văn bằng gốc khác (2)</th>
                            <th class="hide-col row-2-3" scope="col" colspan="5">Văn bằng gốc khác (3)</th>

                            <th class="hide-col row-2-2" scope="col" rowspan="2">Số nhà, Phố</th>
                            <th class="hide-col row-2-2" scope="col" rowspan="2">Xã/ Phường</th>
                            <th class="hide-col row-2-2" scope="col" rowspan="2">Huyện/ Quận</th>
                            <th class="hide-col row-2-2" scope="col" rowspan="2">Tỉnh/TP trung ương</th>
                        </tr>
                        <tr>
                            <th class="hide-col row-3-3" scope="col">Loại bằng</th><!-- top: 8.4.em; -->
                            <th class="hide-col row-3-3" scope="col">Ngành đào tạo của bằng TC trở lên</th>
                            <th class="hide-col row-3-3" scope="col">Số hiệu bằng</th>
                            <th class="hide-col row-3-3" scope="col">Năm TN</th>
                            <th class="hide-col row-3-3" scope="col">Nơi TN</th>
 
                            <th class="hide-col row-3-3" scope="col">Loại bằng</th>
                            <th class="hide-col row-3-3" scope="col">Ngành đào tạo của bằng TC trở lên</th>
                            <th class="hide-col row-3-3" scope="col">Số hiệu bằng</th>
                            <th class="hide-col row-3-3" scope="col">Năm TN</th>
                            <th class="hide-col row-3-3" scope="col">Nơi TN</th>

                            <th class="hide-col row-3-3" scope="col">Loại bằng</th>
                            <th class="hide-col row-3-3" scope="col">Ngành đào tạo của bằng TC trở lên</th>
                            <th class="hide-col row-3-3" scope="col">Số hiệu bằng</th>
                            <th class="hide-col row-3-3" scope="col">Năm TN</th>
                            <th class="hide-col row-3-3" scope="col">Nơi TN</th>

                            <th class="hide-col row-3-3" scope="col">Loại bằng</th>
                            <th class="hide-col row-3-3" scope="col">Ngành đào tạo của bằng TC trở lên</th>
                            <th class="hide-col row-3-3" scope="col">Số hiệu bằng</th>
                            <th class="hide-col row-3-3" scope="col">Năm TN</th>
                            <th class="hide-col row-3-3" scope="col">Nơi TN</th>
                        </tr>

                    </thead>

                    <tbody id="list-data">


                        <div class="modal fade bd-example-modal-lg show" id="preview-student" role="dialog">
                            <div class="modal-dialog modal-lg modal-dialog-centered">
                                <div class="modal-content">
                                    <form action="" id="confirm-form">
                                        <div class="modal-header">
                                            <h3>Xác nhận tốt nghiệp</h3>
                                            <button type="button" id="close_form" class="close" data-dismiss="modal">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body row">
                                            <div class="col-lg-6">
                                                <label for="ngayqd"><span style="color:red">*</span> Ngày quyết
                                                    định:</label>
                                                <input type="date" class="form-control pl-2" id="ngayqd" name="ngayqd"
                                                    value="">
                                            </div>
                                            <div class="col-lg-6">
                                                <label for="soqd"><span style="color:red">*</span> Số quyết
                                                    định:</label>
                                                <input type="text" class="form-control pl-2" id="soqd" name="soqd"
                                                    placeholder="Nhập số quyết định" value="">
                                            </div>
                                        </div>
                                        <div class="modal-body row">
                                            <div class="col-lg-6">
                                                <label for="ngayky"><span style="color:red">*</span> Ngày ký:</label>
                                                <input type="date" class="form-control pl-2" id="ngayky" name="ngayky"
                                                    value="">
                                            </div>
                                            <div class="col-lg-6">
                                                <label for="nguoiky"><span style="color:red">*</span>Người ký:</label>
                                                <input type="text" class="form-control pl-2" id="nguoiky" name="nguoiky"
                                                    placeholder="Nhập người ký" value="">
                                            </div>
                                        </div>
                                        <div class="modal-body row">
                                            <div class="col-lg-6">
                                                <label for="sohieub">Số hiệu
                                                    bằng:</label>
                                                <input type="text" class="form-control pl-2" id="sohieub" name="sohieub"
                                                    placeholder="Nhập số hiệu bằng" value="">
                                            </div>
                                            <div class="col-lg-6">
                                                <label for="sovaoso">Số vào
                                                    sổ:</label>
                                                <input type="text" class="form-control pl-2" id="sovaoso" name="sovaoso"
                                                    placeholder="Nhập số vào sổ" value="">
                                            </div>
                                        </div>
                                        <div class="modal-body row">
                                            <div class="col-lg-12">
                                                <label for="sohieub"> Ghi chú:</label>
                                                <input cols="40" rows="5" type="text" class="form-control pl-2"
                                                    id="ghichu" name="ghichu" placeholder="Ghi chú" value="">
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button id="add-period_btn-reset" name="reset" type="reset"
                                                class="btn custom-btn add-period_btn-reset"><i
                                                    class="fas fa-undo-alt"></i> Huỷ</button>

                                            <button type="button" name="btn-duyet"
                                                class="btn btn-sm custom-btn btn-solid"><i class="fas fa-check"></i>
                                                Xác nhận</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        </tbody>
                        
                    </table>
                    <div class="row" style="position: relative;">
                        <div class="col-3" id="pagination1" style="position: sticky;left: 10em !important;padding-top: 1em;"></div>
                        <div id="toltalrow" style="margin-top: -2em;padding-left: 1em;width: 100%;"><b></b></div>
                    </div>
        <!-- End Danh sách đợt tốt nghiệp -->
        </div>
        
    </div>
    
</div>
<?php echo '<script'; ?>
 src="assets/exportExcel/jquery-ui.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="assets/exportExcel/FileSaver.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="assets/exportExcel/Blob.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="assets/exportExcel/infragistics.core.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="assets/exportExcel/infragistics.ext_core.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="assets/exportExcel/infragistics.ext_collections.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="assets/exportExcel/infragistics.ext_text.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="assets/exportExcel/infragistics.ext_io.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="assets/exportExcel/infragistics.ext_ui.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="assets/exportExcel/infragistics.documents.core_core.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="assets/exportExcel/infragistics.ext_collectionsextended.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="assets/exportExcel/infragistics.excel_core.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="assets/exportExcel/infragistics.ext_threading.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="assets/exportExcel/infragistics.ext_web.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="assets/exportExcel/infragistics.xml.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="assets/exportExcel/infragistics.documents.core_openxml.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="assets/exportExcel/infragistics.excel_serialization_openxml.js"><?php echo '</script'; ?>
><?php }} ?>
