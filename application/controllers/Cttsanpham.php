<?php

class Cttsanpham extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Mttsanpham');
	}

	public function index()
	{
		$data['sanpham'] = $this->get_sanpham();
		$get_danhmuc = $this->Mttsanpham->get_sp_cungloai('', $data['sanpham']['sPK_Ma_SP']);
		$get_list_sp = $this->Mttsanpham->get_sp_cungloai($get_danhmuc[0]['sFK_Ma_DMSP']);
		$data['sp_lienquan'] = $this->Mttsanpham->get_sp_cungloai($get_danhmuc[0]['sFK_Ma_DMSP']);
		// pr($data);
        $temp['data'] = $data;
		$temp['template'] = 'Vttsanpham';
		$this->load->view('layouts/Vlayout', $temp);
	}

	function get_sanpham(){
		if(!$this->input->get('masp')) redirect('home');
		$masp = $this->input->get('masp');
		$data = $this->Mttsanpham->get_sanpham_row($masp);
		if(empty($data)) redirect('home');
		$data = array_merge($data, array(
			'phanloai' => array(),
		));
		$soluong_f = $this->Mttsanpham->get_where('phanloai_sanpham', 'sFK_Ma_SP', $masp);
		foreach($soluong_f as $tt_soluong){
			array_push($data['phanloai'], array(
				'sTenPL' => $tt_soluong['sTenPL'],
				'iSoLuong' => $tt_soluong['iSoLuong'],
			));
		}

		$dir = 'upload/sanpham/' . $data['sPK_Ma_SP'] . '/*';
		$dir_img = array();
		foreach(glob($dir) as $dir_file){
			if(basename($dir_file) != $data['sPimage'])
			array_push($dir_img, $dir_file);
		}
		$data['dir_img'] = $dir_img;
	
		return $data;
	}
}
