<?php

class Cdanhmuc extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Mdanhmuc');
	}

	public function index()
	{
		$data['sanpham_theoloai'] = $this->Mdanhmuc->get_top_sanpham('sanpham', 9, "dNgaytao, sGiaSP");
		$data['dir_anh'] = 'upload/sanpham/';
        $temp['data'] = $data;
		$temp['template'] = 'Vdanhmuc';
		$this->load->view('layouts/Vlayout', $temp);
	}
}
