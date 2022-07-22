<?php 

	class Mtrangchu extends MY_Model
	{
        function get_list_danhmuc(){
            $this->db->get("danhmuc")->result_array();
        }

        function get_sanpham($limit, $order_by = null){
            $this->db->select('sanpham.*, sum(iSoLuong) as soluong');
            $this->db->join('phanloai_sanpham', 'phanloai_sanpham.sFK_Ma_SP = sanpham.sPK_Ma_SP');
            $this->db->group_by('sanpham.sPK_Ma_SP');

            if($order_by)
                $this->db->order_by($order_by);
                // $this->db->get('sanpham', $limit);
                // pr($this->db->last_query());
            return $this->db->get('sanpham', $limit)->result_array();
        }
    }
?>