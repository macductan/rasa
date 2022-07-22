<?php

class Cdangnhap extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Mdangnhap');
	}

	function check_action(){
		$action = $this->input->post('action');
		switch($action){
			case 'dangnhap':
				$this->dangnhap(); break;
			case 'dangky':
				return $this->dangky(); break;
		}
	}

	public function index()
	{
		$data['swal'] = $this->check_action();

		// pr($_SESSION);
		$data['trang'] = $this->uri->segment(1);
		$data['ten_trang'] = $this->laytentrang();
		// pr($data);
        $data['base_url'] = base_url();
		$this->parser->parse('Vdangnhap', $data);
	}

	function dangnhap(){
		$tendn = $this->input->post('username');
		$matkhau = $this->input->post('pass');
		$taikhoan = $this->Mdangnhap->dangnhap($tendn, $matkhau);
		if(count($taikhoan) > 0){
			$_SESSION['user'] = array(
				'taikhoan' => $taikhoan['sPK_TenTK'],
				'hoten' => $taikhoan['sTenTK'],
				'quyen' => $taikhoan['sFK_Ma_Quyen'],
			);
			redirect('home');
		}
	}

	function dangky(){
		$swal = array(
			'icon' => null,
			'title' => null,
			'text' => null,
			'footer' => null,
		);
		$tendn = $this->input->post('username');
		$matkhau = $this->input->post('pass');
		$hoten = $this->input->post('nameuser');
		$taikhoan = $this->Mdangnhap->get_where('taikhoan', 'sPK_TenTK', $tendn);
		if(count($taikhoan) == 0){
			$data = array(
				'sPK_TenTK' => $tendn,
				'sMatkhau' => sha1($matkhau),
				'sFK_Ma_Quyen' => 'khachhang',
				'sTenTK' => $hoten,
			);
			$taikhoan = $this->Mdangnhap->insert_table('taikhoan', $data);
			if($taikhoan == 1)
				$swal = array_replace($swal, array(
					'icon' => 'success',
					'title' => 'Đăng ký thành công',
					'footer' => '<a href="dangnhap">Đăng nhập</a>'
				));
			else
				$swal = array_replace($swal, array(
					'icon' => 'error',
					'title' => 'Đăng ký thất bại',
				));
		}
		else{
			$swal = array_replace($swal, array(
				'icon' => 'error',
				'title' => 'Đăng ký thất bại',
				'text' => 'Tài khoản đã tồn tại',
			));
		}
		return $swal;
	}

	function laytentrang(){
		return array(
			'dangnhap' => 'Đăng nhập',
			'quenmatkhau' => 'Quên mật khẩu',
			'dangky' => 'Đăng ký',
		);
	}
}
