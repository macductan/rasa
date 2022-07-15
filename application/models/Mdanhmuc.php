<?php 

	class Mdanhmuc extends MY_Model
	{
        function get_list_danhmuc(){
            $this->db->get("danhmuc")->result_array();
        }
    }
?>