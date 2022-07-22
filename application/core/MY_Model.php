<?php

class MY_Model extends CI_Model
{
    function get_all($table){
        return $this->db->get($table)->result_array();
    }

    function get_where($table, $col, $value = null, $limit = null, $start = null){
        if($value)
            $this->db->where($col, $value);
        else
            $this->db->where($col);

        if($limit && $start)
            $this->db->limit($limit, $start);
        else if($limit)
            $this->db->limit($limit);

        return $this->db->get($table)->result_array();
    }

    function get_where_in($table, $col, $value){
        $this->db->where_in($col, $value);
        return $this->db->get($table)->result_array();
    }

    function insert_table($table, $data){
        $this->db->insert($table, $data);
        // exit($this->db->last_query());
        return $this->db->affected_rows();
    }

    function delete_row($table, $condition){
        $this->db->delete($table, $condition);
        return $this->db->affected_rows();
    }
    
	function get_top_sanpham($table, $limit, $order_by = null){
        if($order_by) $this->db->order_by($order_by);
        return $this->db->get($table, $limit)->result_array();
    }

    function check_donhang($where, $where_in){
        $this->db->where('sFK_TenTK', $where);
        $this->db->where_in('sFK_Ma_PLSP', $where_in);
        return $this->db->get('giohang')->result_array();
    }
}