<?php
class View_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
    public function view($id_card)
    {
        $this->db->where('id_card','3860100814741');
        $query = $this->db->get('slip');
        return $query->result_array();
    }
}
