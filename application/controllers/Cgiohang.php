<?php

class Cgiohang extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Mgiohang');
	}

	public function index()
	{
		$data['donhang'] = $this->Mgiohang->get_donhang();
        $temp['data'] = $data;
		$temp['template'] = 'Vgiohang';
		$this->load->view('layouts/Vlayout', $temp);
	}
}
