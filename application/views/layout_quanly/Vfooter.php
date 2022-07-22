	<script src="{$base_url}assets/template_giaodien/js/bootstrap.min.js"></script>
	<script src="{$base_url}assets/js/sweetalert2.js"></script>
    <!-- Required vendors -->
    <script src="{$base_url}assets/template_quanly/vendor/global/global.min.js"></script>
    <script src="{$base_url}assets/template_quanly/vendor/moment/moment.min.js"></script>

    <script src="{$base_url}assets/template_quanly/js/custom.min.js"></script>
    <script src="{$base_url}assets/template_quanly/js/dlabnav-init.js"></script>
    <script src="{$base_url}assets/template_quanly/js/demo.js"></script>
    {if $template == 'quanly/Vtknhanvien'}<script src="{$base_url}assets/js/quanly/taikhoan.js"></script>{/if}

    
    {if !empty($thongbao)}
    <script>
        $(document).ready(() => {
            Swal.fire({
                {foreach $thongbao as $attr => $value}
                {$attr}: '{$value}',
                {/foreach}
            })
        })
    </script>
    {/if}
</body>

</html>