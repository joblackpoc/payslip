<?php

class Auth_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
    public function get_user()
    {
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where(
                          array(
                                'username'   =>$username,
                                'password'  =>$password
                            )
                        );
        $query = $this->db->get();
        return $query->row();
    }
}
