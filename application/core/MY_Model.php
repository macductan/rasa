<?php

class MY_Model extends CI_Model
{
    function get_all($table){
        return $this->db->get($table)->result_array();
    }
    
	function get_top_sanpham($table, $limit, $order_by = null){
        if($order_by) $this->db->order_by($order_by);
        return $this->db->get($table, $limit)->result_array();
    }
}