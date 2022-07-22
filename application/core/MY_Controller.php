<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
class MY_Controller extends CI_Controller
{
    function check_action_chung()
    {
        $action = $this->input->get('action');
        switch($action){
            case 'dangxuat':
                unset($_SESSION['user']);
                redirect('home');
                break;
        }

        $action = $this->input->post('action');
        switch($action){
            case 'timkiem':
                $this->timkiem();
                break;
            case 'muahang':
                $this->muahang();
                break;
        }
    }

    public function __construct()
    {
        parent::__construct();
		$this->load->model('Mtrangchu');
        $this->check_action_chung();
    }

    function timkiem()
    {
        $timkiem = $this->input->post('timkiem');
        if($timkiem != ''){
            $_SESSION['timkiem'] = $timkiem;
            if($this->uri->segment(1) != 'danhmuc'){
                redirect('danhmuc');
            }
        }
        else
            unset($_SESSION['timkiem']);
    }

    function muahang(){
        if(isset($_SESSION['user']['taikhoan'])){
            $taikhoan = $_SESSION['user']['taikhoan'];
        }
        else{
            exit(json_encode(array(
                'icon' => 'error',
                'title' => 'Quý khách chưa đăng nhập'
            )));
        }
        $sanpham = $this->input->post('masp');
        $phanloai = $this->input->post('phanloai');
        $ketqua = array(
            'icon' => 'error',
            'title' => 'Sản phẩm đã có trong giỏ hàng'
        );

        $where_laysanpham = array(
            'sFK_Ma_SP' => $sanpham,
            'sTenPL' => $phanloai, 
        );
        $laysanpham = $this->Mtrangchu->get_where('phanloai_sanpham', $where_laysanpham);

        // $phanloai_sanpham = $this->Mtrangchu->get_where('phanloai_sanpham', 'sFK_Ma_SP', $sanpham);
        $where_sobanghi = array(
            'sFK_TenTK' => $taikhoan,
            'sFK_Ma_PLSP' => $laysanpham[0]['sPK_Ma_PLSP'],
        );
        $sobanghi = $this->Mtrangchu->get_where('giohang', $where_sobanghi);
        if(count($sobanghi) == 0){
            $data = array(
                'PK_Ma_Donhang' => date('Y_m_d_H_i_s_').$taikhoan.'_'.$laysanpham[0]['sPK_Ma_PLSP'],
                'sFK_TenTK' => $taikhoan,
                'sFK_Ma_PLSP' => $laysanpham[0]['sPK_Ma_PLSP'],
                'iSoluong' => 1,
                'iTrangthai' => 0,
            );
            $hoanthanh = $this->Mtrangchu->insert_table('giohang', $data);
            if($hoanthanh == 1){
                $ketqua = array(
                    'icon' => 'success',
                    'title' => 'Đã thêm sản phẩm thành công'
                );
            }
            else{
                $ketqua = array(
                    'icon' => 'error',
                    'title' => 'Xảy ra lỗi khi thêm sản phẩm'
                );
            }
        }
        exit(json_encode($ketqua));
    }
}