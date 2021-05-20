<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Common_model extends CI_Model
{
    public function insert($table, $data)
    {
        $this->db->insert($table, $data);
        return $this->db->insert_id();
    }

    public function get_row($tbl_name, $where = null)
    {
        $this->db->select('*');
        $this->db->from($tbl_name);
        if($where) {
            $this->db->where($where);
        }
        $query_result = $this->db->get();
        
        return $query_result->row();
    }
    
    function get_all_requests()
    {
        $this->db->select('tar.*, p.name as partner_name');
        $this->db->from('tbl_api_requests as tar');
        $this->db->join('tbl_partners p', 'tar.partner_id = p.id');
        $this->db->order_by('tar.datetime', 'DESC');
        $query = $this->db->get();
        
        $result = $query->result();        
        return $result;
    }

}  