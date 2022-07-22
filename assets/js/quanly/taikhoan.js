$(document).ready(() => {
    $(document).on('click', '.delete', function () {
        let matk = $(this).val();
        Swal.fire({
            icon: 'warning',
            title: 'Bạn muốn xóa tài khoản này?',
            showDenyButton: true,
            confirmButtonText: 'Lưu',
            denyButtonText: `Hủy`,
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    method: "POST",
                    url: window.location.href,
                    data: {'action': 'xoataikhoan', matk},
                    dataType: "JSON",
                })
                .done(function(data){
                    if(data == 1){
                        Swal.fire('Thành công', '', 'success')
                        $(`#tt_nhanvien_${matk}`).remove();
                    }
                    else{
                        Swal.fire('Thất bại', '', 'error')
                    }
                })
            } else if (result.isDenied) {
                Swal.fire('Thay đổi chưa được lưu', '', 'info')
            }
        })
    })

    $(document).on('click', '.update', function(){
        let tentk = $(this).val();
        let hoten = $(`#hoten_${tentk}`).text();
        let ngaysinh = $(`#ngaysinh_${tentk}`).val();
        $('#taikhoan_nhap').addClass('disabled')
        $('#taikhoan_nhap').val(tentk);
        $('#hoten_nhap').val(hoten);
        $('#ngaysinh_nhap').val(ngaysinh);

        let placeholder = $('#matkhau_nhap').attr("placeholder") + " (Để trống nếu không có thay đổi)";
        $('#matkhau_nhap').attr("placeholder", placeholder);
        $('#dangky').addClass('hidden');
        $('#capnhat').removeClass('hidden');
        $('#huy').removeClass('hidden');
    })

    $('#huy').click(function(){
        $('#taikhoan_nhap').val(null);
        $('#hoten_nhap').val(null);
        $('#ngaysinh_nhap').val(null);
        $('#matkhau_nhap').attr("placeholder", "Mật khẩu");

        $('#dangky').removeClass('hidden');
        $('#capnhat').addClass('hidden');
        $('#huy').addClass('hidden');
    })
})