<?php

class Cdangnhap extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data = array();
        $temp['data'] = $data;
        $temp['base_url'] = base_url();
		$this->parser->parse('Vdangnhap', $temp);
	}
}
