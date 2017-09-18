<?php
class Salary_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
    public function get_slip()
    {
        $query = $this->db->get('slip');
        return $query->result_array();
    }
    public function get_sqlslip()
    {   
        $sql = 'Select * from slip order by fname asc';
        $query = $this->db->query($sql);
        return $query->result_array();        
    }
    public function get_payslip($id_card)
    {
        $this->db->where('id_card','3860100085145');
        $query = $this->db->get('slip');
        return $query->result_array();
    }
    public function search_slip($fname,$lname)
    {
        $this->db->where('fname',$fname);
        $this->db->or_where('lname',$lname);
        $query = $this->db->get('slip');
        return $query->result_array();
    }
}

