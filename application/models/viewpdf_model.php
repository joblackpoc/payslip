<?php
class Viewpdf_model extends CI_Model
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
}

?>

