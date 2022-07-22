<?php

class Cdanhmuc extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Mdanhmuc');
	}

	function check_action(){
		$action = $this->input->post('action');
		switch($action){
			case 'loc':
				$this->loc();
		}
	}

	public function index()
	{
		$this->check_action();
		$data['ds_danhmuc'] = $this->Mdanhmuc->get_top_sanpham('danhmuc', 7);
		if(!isset($_SESSION['danhmuc']['loc'])) $_SESSION['danhmuc']['loc'] = 'all';
		$data['sanpham_theoloai'] = $this->loc();
		$data['chon_danhmuc'] = $_SESSION['danhmuc']['loc'];
        $temp['data'] = $data;
		$temp['template'] = 'Vdanhmuc';
		$this->load->view('layouts/Vlayout', $temp);
	}

	function loc(){
		$danhmuc = '';
		$timkiem = '';
		// pr($this->input->post());
		if($this->input->post('chon_danhmuc')){
			$_SESSION['danhmuc']['loc'] = $this->input->post('chon_danhmuc');
		}
		if(isset($_SESSION['timkiem'])){
			$timkiem = $_SESSION['timkiem'];
		}
		if(isset($_SESSION['danhmuc']['loc'])){
			$danhmuc = $_SESSION['danhmuc']['loc'];
		}

		// Lấy và đếm số lượng hàng còn
		$data = $this->Mdanhmuc->get_sanpham($timkiem, $danhmuc);
		$soluong = array();
		if(!empty($data)){
			$data = valueToKey($data, 'sPK_Ma_SP');
			$where_in = array_column($data, 'sPK_Ma_SP');
			$soluong_f = $this->Mdanhmuc->get_soluong_sp($where_in);
			foreach($soluong_f as $giatri_sp){
				if(!isset($soluong[$giatri_sp['sFK_Ma_SP']])){
					$soluong[$giatri_sp['sFK_Ma_SP']] = array(
						'sTenPL' => array(),
						'iSoLuong' => 0,
					);
				}
				if($giatri_sp['iSoLuong'] > 0){
					array_push($soluong[$giatri_sp['sFK_Ma_SP']]['sTenPL'], $giatri_sp['sTenPL']);
					$soluong[$giatri_sp['sFK_Ma_SP']]['iSoLuong'] += $giatri_sp['iSoLuong'];
				}
			}
		}
		return array_merge_recursive($data, $soluong);
	}
}
