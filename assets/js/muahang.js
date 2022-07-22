$(document).ready(() => {
    $('.mua').click(function(){
        let masp = $(this).data("masp");
        // let phanloai = $(this).data("maphanloai");
        let phanloai = $(`#phanloai_${masp}`).val();
        $.ajax({
            type: "POST",
            url: window.location.href,
            data: {'action': 'muahang', masp, phanloai},
            dataType: "JSON"
        })
        .done(function(data){
            Swal.fire({
                icon: data['icon'],
                title: data['title'],
            })
        });
    })

    // $('select').change(function(){
    //     let name_class = `.btn_${$(this).data('btn')}_${$(this).data('masp')}`;
    //     $(name_class).each(function(index, value){
    //         $(this).attr('data-maphanloai', 'Đen')
    //     })
    //     // console.log($(name_class).data('maphanloai'));
    // })
})