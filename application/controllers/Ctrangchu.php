<?php

class Ctrangchu extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Mtrangchu');
	}

	public function index()
	{
		$data = array();
		$data['top_3_sp'] = $this->Mtrangchu->get_top_sanpham('sanpham', 3, "sGiaSP");
		$data['sp_moi'] = $this->Mtrangchu->get_top_sanpham('sanpham', 8, "dNgaytao, sGiaSP");
		$data['dir_anh'] = 'upload/sanpham/';
		// pr($data);
        $temp['data'] = $data;
		$temp['template'] = 'Vtrangchu';
		$this->load->view('layouts/Vlayout', $temp);
	}
}
