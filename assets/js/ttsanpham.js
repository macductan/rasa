$(document).ready(() => {
    $(document).on('click', '.img_phu', function(){
        let src = $(this).attr('src');
        let src_goc = $("#img_goc").attr("src")
        $("#img_goc").attr("src", src);
        $(this).attr("src", src_goc);
    })

    $('#phanloai').change(function(){
        $('.soluong').addClass('hidden');
        $(`#phanloai_${$(this).val()}`).removeClass('hidden');
    })
})