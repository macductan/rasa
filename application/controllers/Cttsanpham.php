<?php

class Cttsanpham extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data = array();
        $temp['data'] = $data;
		$temp['template'] = 'Vttsanpham';
		$this->load->view('layouts/Vlayout', $temp);
	}
}
