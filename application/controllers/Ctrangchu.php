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
		$data['top_3_sp'] = $this->get_sanpham(3, "sanpham.sGiaSP");
		$data['sp_moi'] = $this->get_sanpham(8, "sanpham.dNgaytao, sanpham.sGiaSP");
        $temp['data'] = $data;
		$temp['template'] = 'Vtrangchu';
		$this->load->view('layouts/Vlayout', $temp);
	}

	function get_sanpham($limit, $order_by = null){
		$list_sanpham = $this->Mtrangchu->get_sanpham(1000, $order_by);
		$data = array();
		foreach($list_sanpham as $sanpham){
			if(count($data) == $limit) break;
			if($sanpham['soluong'] > 0)
				$data[$sanpham['sPK_Ma_SP']] = $sanpham;
		}
		$soluong_f = $this->Mtrangchu->get_where_in('phanloai_sanpham', 'sFK_Ma_SP', array_column($data, 'sPK_Ma_SP'));
		$soluong = array();
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
		return array_merge_recursive($data, $soluong);
	}
}
