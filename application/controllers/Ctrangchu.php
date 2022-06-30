<?php

class Chome extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data = array();
        $temp['data'] = $data;
		$temp['template'] = 'Vtrangchu';
		$this->load->view('layouts/Vlayout', $temp);
	}
}
