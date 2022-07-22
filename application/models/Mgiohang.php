<?php 

	class Mgiohang extends MY_Model
	{
        function get_donhang(){
            $this->db->select('sp.sTen_SP, sp.sPK_Ma_SP, sp.sPimage, sp.sGiaSP, plsp.sTenPL, plsp.iSoLuong, gh.iSoLuong as soluong_gh');
            $this->db->join('phanloai_sanpham as plsp', 'plsp.sPK_Ma_PLSP = gh.sFK_Ma_PLSP');
            $this->db->join('sanpham as sp', 'plsp.sFK_Ma_SP = sp.sPK_Ma_SP');
            $this->db->where('sFK_TenTK', $_SESSION['user']['taikhoan']);
            return $this->db->get('giohang as gh')->result_array();
        }
    }
?>