<?php

class Ctknhanvien extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('quanly/Mtknhanvien');
	}

	function check_action(){
		$action = $this->input->post('action');
		switch($action){
			case 'xoataikhoan':
				$matk = $this->input->post('matk');
				$ketqua = $this->Mtknhanvien->delete_row('taikhoan', array('sPK_TenTK' => $matk));
				exit(json_encode($ketqua));
			case 'dangky':
				$this->dangky();
		}
	}

	public function index()
	{
		$this->check_action();
		$data['tknhanhvien'] = $this->Mtknhanvien->get_where('taikhoan', 'sFK_Ma_Quyen', 'nhanvien', 20, 0);
		// pr($data);
        $temp['data'] = $data;
		$temp['template'] = 'quanly/Vtknhanvien';
		$this->load->view('layout_quanly/Vlayout', $temp);
	}

	function dangky(){
		$tentk = $this->input->post('tentk');
		$matkhau = $this->input->post('matkhau');
		$hoten = $this->input->post('hoten');
		$ngaysinh = $this->input->post('ngaysinh');

		$check_taikhoan = $this->Mtknhanvien->get_where('taikhoan', 'sPK_TenTK', $tentk);
		if(count($check_taikhoan) > 0){
			$this->session->set_flashdata('thongbao', array(
				'icon' => 'error',
				'title' => 'Tài khoản đã tồn tại'
			));
			return;
		}

		$data = array(
			'sPK_TenTK' => $tentk,
			'sFK_Ma_Quyen' => 'nhanvien',
			'sMatkhau' => sha1($matkhau),
			'sTenTK' => $hoten,
			'dNgaysinh' => $ngaysinh,
		);
		$ketqua = $this->Mtknhanvien->insert_table('taikhoan', $data);

		if($ketqua == 1){
			$this->session->set_flashdata('thongbao', array(
				'icon' => 'success',
				'title' => 'Thêm tài khoản thành công'
			));
		}
		else{
			$this->session->set_flashdata('thongbao', array(
				'icon' => 'error',
				'title' => 'Thêm tài khoản thất bại'
			));
		}
	}
}
