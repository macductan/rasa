    <div class="footer">
		Hệ thống chạy tốt nhất trên trình duyệt <i class="fab fa-chrome" title="Google Chrome"></i> Google Chrome.
    	Xây dựng và phát triển bởi
		<a class="font-weight-bold"	href="https://www.fb.com/tophatrienvachuyengiaocongnghe" target="blank" rel="nofollow"> FFC - Tổ phát	triển</a> © 2021
    	<i class="fa fa-heart" style="color:red" aria-hidden="true"></i> Nếu gặp vấn đề liên quan đến quy trình hoặc hồ sơ đăng ký vui lòng liên hệ cố vấn học tập hoặc đơn vị đào tạo
    </div>
	</div>


    <script>
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
    </script>
    {if !empty($inform)}
    <script type="text/javascript">
        $(document).ready(function () {
            Swal.fire({
                title: 'Đã lưu thay đổi!',
                text: '{$inform.title}',
                icon: '{$inform.icon}'
            })
        });
    </script>
    {/if}

    {if !empty($messages)}
    <script type="text/javascript">
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
    			icon: '{$messages.icon}',
    			title: '{$messages.title}'
    		})
		});
    </script>
    {/if}
    </body>

    </html>
