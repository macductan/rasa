<?php 

	class Mdangnhap extends MY_Model
	{
        function dangnhap($tendn, $matkhau){
            $this->db->where('sPK_TenTK', $tendn);
            $this->db->where('sMatkhau', sha1($matkhau));
            return $this->db->get('taikhoan')->row_array();
        }
    }
?>