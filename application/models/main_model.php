<?php
class Main_model extends CI_Model
{
    public function __construct() {
        parent::__construct();
    }
    public function can_login($username,$password)
    {
        $this->db->where('username',$username);
        $this->db->where('password',$password);
        $query = $this->db->get('users');
        
        if($query->num_rows() > 0)
        {
            return TRUE;
        }
        else
        {
            return FALSE;
        }   
    }
    public function welcome($username)
    {
        $this->db->where('id_card',$username);
        $query = $this->db->get('slip');
        return $query->result_array();
    }
    public function output($username)
    {
        $this->db->where('id_card',$username);
        $query = $this->db->get('slip');
        return $query->result_array();
    }
    public function get_users($username)
    {
        $this->db->where('id_card',$username);
        $query = $this->db->get('users');
        return $query->row_array();
    }
    public function import($lineArr)
    {
        $data = array(
            "kcode1"                    => $lineArr[0],
            "id_card"                   => $lineArr[1],
            "prename"                   => $lineArr[2],
            "fname"                     => $lineArr[3],
            "lname"                     => $lineArr[4],
            "ministry"                  => $lineArr[5],
            "provincial_public_health"  => $lineArr[6],
            "province"                  => $lineArr[7],
            "kcode"                     => $lineArr[8],
            "bank"                      => $lineArr[9],
            "branch_code"               => $lineArr[10],
            "branch"                    => $lineArr[11],
            "bank_account"              => $lineArr[12],
            "revenue"                   => $lineArr[13],
            "reimbursement"             => $lineArr[14],
            "professional_values"       => $lineArr[15],
            "professional_fees"         => $lineArr[16],
            "tk88"                      => $lineArr[17],
            "tk88_togbork"              => $lineArr[18],
            "child_allowance"           => $lineArr[19],
            "ptk"                       => $lineArr[20],
            "extra_money"               => $lineArr[21],
            "other"                     => $lineArr[22],
            "revenue_sum"               => $lineArr[23],
            "tax"                       => $lineArr[24],
            "coorperative"              => $lineArr[25],
            "gpf"                       => $lineArr[26],
            "home_loan"                 => $lineArr[27],
            "education_loan"            => $lineArr[28],
            "vehicle_loan"              => $lineArr[29],
            "chapanakit"                => $lineArr[30],
            "welfare_loan"              => $lineArr[31],
            "attach_money"              => $lineArr[32],
            "other2"                    => $lineArr[33],
            "pay_sum"                   => $lineArr[34],
            "net"                       => $lineArr[35],
            "d_update"                  => $lineArr[36]
        );
        $this->db->insert('slip',$data);
    }
}
