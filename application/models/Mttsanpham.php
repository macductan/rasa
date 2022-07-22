<?php 

	class Mttsanpham extends MY_Model
	{
        function get_sanpham_row($ma_sanpham){
            $this->db->where('sPK_Ma_SP', $ma_sanpham);
            return $this->db->get('sanpham')->row_array();
        }

        function get_sp_cungloai($danhmuc = '', $sanpham = ''){
            if($danhmuc != ''){
                $this->db->where('sFK_Ma_DMSP', $danhmuc);
            }
            if($sanpham != ''){
                $this->db->where('sPK_Ma_SP', $sanpham);
            }
            // $this->db->select('sp.*');
            $this->db->join('sanpham_dacdiem as spdd', 'sp.sPK_Ma_SP = spdd.sFK_Ma_SP');
            $this->db->join('danhmuc_dacdiem as dmdd', 'dmdd.sPK_Ma_DM_DD = spdd.sFK_Ma_DM_DD');
            $this->db->group_by('sp.sPK_Ma_SP');
            $this->db->order_by('sp.dNgaytao, sp.sGiaSP desc, sPK_Ma_SP');
            return $this->db->get('sanpham as sp', 8)->result_array();
        }
    }
?>