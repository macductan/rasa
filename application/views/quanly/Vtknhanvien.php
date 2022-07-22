<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active">
                    <a href="javascript:void(0)">Quản lý tài khoản</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="javascript:void(0)">Tài khoản nhân viên</a>
                </li>
            </ol>
        </div>
        <!-- row -->

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Bảng tài khoản nhân viên</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-responsive-md">
                                <thead>
                                    <tr>
                                        <th style="width: 80px" class="text-center"><strong>STT</strong></th>
                                        <th><strong>Tên tài khoản</strong></th>
                                        <th><strong>Họ tên</strong></th>
                                        <th class="text-center"><strong>Ngày sinh</strong></th>
                                        <th><strong>Tác vụ</strong></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {$stt = 1}
                                    {foreach $tknhanhvien as $tt_taikhoan}
                                    <tr id="tt_nhanvien_{$tt_taikhoan['sPK_TenTK']}">
                                        <td class="text-center h5"><strong>{sprintf("%02d", $stt++)}</strong></td>
                                        <td class="h5" id="tentk_{$tt_taikhoan['sPK_TenTK']}">{$tt_taikhoan['sPK_TenTK']}</td>
                                        <td class="h5" id="hoten_{$tt_taikhoan['sPK_TenTK']}">{$tt_taikhoan['sTenTK']}</td>
                                        <td class="text-center h5">
                                            <input type="date" id="ngaysinh_{$tt_taikhoan['sPK_TenTK']}" name="ngaysinh" class="form-control form-control-lg" value="{$tt_taikhoan['dNgaysinh']}" disabled>
                                        </td>
                                        <td>
                                            <div>
                                                <button class="btn btn-primary shadow btn-xs sharp me-1 update" value="{$tt_taikhoan['sPK_TenTK']}"><i class="fas fa-pencil-alt"></i></button>
                                                <button class="btn btn-danger shadow btn-xs sharp delete" value="{$tt_taikhoan['sPK_TenTK']}"><i class="fa fa-trash"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                    {/foreach}
                                </tbody>
                            </table>

                        </div>
                        <nav>
                            <ul class="pagination pagination-gutter">
                                <li class="page-item page-indicator">
                                    <a class="page-link" href="javascript:void(0)">
                                        <i class="la la-angle-left"></i></a>
                                </li>
                                <li class="page-item active"><a class="page-link" href="javascript:void(0)">1</a> </li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0)">2</a></li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0)">4</a></li>
                                <li class="page-item page-indicator">
                                    <a class="page-link" href="javascript:void(0)">
                                        <i class="la la-angle-right"></i></a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="col-xl-12 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Cấp tài khoản</h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <form method="post">
                                <div class="mb-3 row">
                                    <label class="col-sm-2 col-form-label col-form-label-lg">Tên tài khoản</label>
                                    <div class="col-sm-10">
                                        <input type="text" id="taikhoan_nhap" name="tentk" class="form-control form-control-lg" placeholder="Tên tài khoản">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-2 col-form-label col-form-label-lg">Mật khẩu</label>
                                    <div class="col-sm-10">
                                        <input type="text" id="matkhau_nhap" name="matkhau" class="form-control form-control-lg" placeholder="Mật khẩu">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-2 col-form-label col-form-label-lg">Họ tên</label>
                                    <div class="col-sm-10">
                                        <input type="text" id="hoten_nhap" name="hoten" class="form-control form-control-lg" placeholder="Họ tên">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-2 col-form-label col-form-label-lg">Ngày sinh</label>
                                    <div class="col-sm-10">
                                        <input type="date" id="ngaysinh_nhap" name="ngaysinh" class="form-control form-control-lg">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <div class="col-sm-10">
                                        <button type="submit" id="dangky" name="action" value="dangky" class="btn btn-primary">Đăng ký</button>
                                        <button type="button" id="capnhat" name="action" value="chinhsua" class="btn btn-primary hidden">Cập nhật</button>
                                        <button type="button" id="huy" name="action" value="huy" class="btn light btn-dark hidden">Hủy</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>