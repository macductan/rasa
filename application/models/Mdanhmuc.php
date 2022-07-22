<?php 

	class Mdanhmuc extends MY_Model
	{
        function get_sanpham($timkiem, $danhmuc){
            $select = 'sp.*, ';
            if($timkiem != ''){
                $this->db->like('sTen_SP', $timkiem);
            }
            if($danhmuc != '' && $danhmuc != 'all'){
                $this->db->join('sanpham_dacdiem as spdd', 'sp.sPK_Ma_SP = spdd.sFK_Ma_SP');
                $this->db->join('danhmuc_dacdiem as dmdd', 'dmdd.sPK_Ma_DM_DD = spdd.sFK_Ma_DM_DD');
                $this->db->where('sFK_Ma_DMSP', $danhmuc);
                $this->db->group_by('sp.sPK_Ma_SP');
            }
            $this->db->select('sp.*');
            $this->db->order_by('sp.dNgaytao, sp.sGiaSP desc, sPK_Ma_SP');
            return $this->db->get('sanpham as sp')->result_array();
        }

        function get_soluong_sp($where_in){
            $this->db->where_in('sFK_Ma_SP', $where_in);
            return $this->db->get('phanloai_sanpham as plsp')->result_array();
        }
    }
?>