<?php
//https://www.youtube.com/watch?v=T578RTeJvB0 get from this
class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
                      
    }
    public function logout()
    {
        //unset($_SESSION);
        $this->session->sess_destroy();
        redirect("auth/login");
    }
    public function login()
    {
        $this->form_validation->set_rules('username','ชื่อผู้ใช้','required');
        $this->form_validation->set_rules('password','รหัสผ่าน','required|min_length[6]');
        if($this->form_validation->run() == TRUE)
        {
            $username = $_POST['username'];
            $password = md5($_POST['password']);
            
            //chech idcard in database
            $this->db->select("*");
            $this->db->from("users");
            $this->db->where(array(
                'username'=>$username,
                'password'=>$password
            ));
            $query = $this->db->get();
            $user = $query->row();
 
            //check if user exists
            if($user->username)// change after if need
            {
                //temporaty message
                $this->session->set_flashdata('success','Login Successful');
                //set session variables
                $_SESSION['user_logged'] = TRUE;
                $_SESSION['username']= $user->username;//change after if need
                
                //redirect to profile page for edit
                redirect("user/profile","refresh");//change after if need
            }else{
                echo "error error error";
                $this->session->set_flashdata('error','ชื่อผู้ใช้ หรือ รหัสผ่าน ผิดพลาด');
                redirect("auth/login","refresh");
                //
            }
        }
        
        $this->load->view("main/login");
    }
    public function register()
    {
        if(isset($_POST['register']))
        {
            
            $this->form_validation->set_rules('fname','ชื่อ','required');
            $this->form_validation->set_rules('lname','นามสกุล','required');
            $this->form_validation->set_rules('password','รหัสผ่าน','required|min_length[6]');
            $this->form_validation->set_rules('password','ยืนยันรหัสผ่าน','required|min_length[6]|matches[password]');
            $this->form_validation->set_rules('email','อีเมล์','required');
            $this->form_validation->set_rules('phone','เบอร์โทรศัพท์','required|min_length[6]');
                        
            //if form validation true
            if($this->form_validation->run() == TRUE)
            {
                //add to database;
                $data = array(
                    'fname'     =>   $_POST['fname'],
                    'lname'     =>   $_POST['lname'],
                    'username'  =>   $_POST['username'],
                    'password'  => md5($_POST['password']),
                    'email'     =>   $_POST['email'],
                    'phone'     =>   $_POST['phone'],
                    'gender'    =>   $_POST['gender'],
                    'create_date'=>date('Y-m-d H:i:s')
                );
                $this->db->insert('users',$data);
                $this->session->set_flashdata("success","ลงทะเบียนเรียบร้อย. คุณสามารถลงชื่อเข้าใช้ได้แล้ว");
                redirect("auth/register","refresh");
            }
        }
        $this->load->view("main/register");
    }
}
