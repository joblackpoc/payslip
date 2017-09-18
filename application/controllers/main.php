<?php

class Main extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('main_model');
        $this->load->helper('fn_thaidate');
    }
    public function index()
    {
        $this->load->view('main/login_view');
    }
    public function login()
    {
        $data['title']= "ยินดีต้อนรับสู่ระบบรายงานการจ่ายเงินเดือน";
        $this->load->view("main/login_view",$data);
    }
    public function login_validation()
    {
            $this->form_validation->set_rules("username","ชื่อผู้ใช้","required");
            $this->form_validation->set_rules("password","รหัสผ่าน","required");
            if($this->form_validation->run())
            {
                //TRUE
                $username = $this->input->post('username');
                $password = md5($this->input->post('password'));
		//$password = md5($this->input->post('password'));

                if($this->main_model->can_login($username,$password))
                {
                    //TRUE
                    $session_data = array(
                        'username'=> $username
                    );
                    $this->session->set_userdata($session_data);

                    redirect(base_url().'main/enter');

                } else {
                    //FALSE
                    $this->session->set_flashdata('error','* ชื่อผู้ใช้หรือรหัสผ่านผิดพลาด !!!');
                    redirect(base_url().'main/login');
                }
            }
            else
            {
                //FALSE
                $this->login();
            }
    }
    public function enter()
    {
        if($this->session->userdata('username')!= '')
        {
            //TRUE
            //echo '<h2>Welcome - '.$this->session->userdata('username').'</h2>';
            //echo '<a href="'.base_url().'main/logout">Logout</a>'; // need to remember it well
            $username = $this->session->userdata('username');
            $data['news'] = $this->main_model->welcome($username);
            $this->load->view('main/enter_view',$data);
        }
        else
        {
            //FALSE
            redirect(base_url().'main/login');
        }
    }
    public function logout()
    {
        $this->session->unset_userdata('username');
        //$this->session->sess_destroy(); //don't need
        redirect(base_url().'main/login');
    }
    public function changepassword()
    {
        if($this->session->userdata('username')!='')
        {
            $username = $this->session->userdata('username');

            $this->form_validation->set_rules('password','รหัสผ่าน','required|min_length[6]');
            $this->form_validation->set_rules('password','ยืนยันรหัสผ่าน','required|min_length[6]|matches[password]');
            $this->form_validation->set_rules('email','อีเมล์','required');
            $this->form_validation->set_rules('phone','เบอร์โทรศัพท์','required');

            if($this->input->post('btsubmit')!=NULL && $this->form_validation->run() == TRUE)
            {
                //$username = $this->session->userdata('username');
                $ar = array(
                    'password'      => md5($this->input->post('password')),
                    'email'         =>   $this->input->post('email'),
                    'phone'         =>   $this->input->post('phone'),


                );
                $this->db->where('username',$username);
                $this->db->update("users",$ar);
                $this->session->set_flashdata("success","ยินดีด้วย คุณแก้ไขเรียบร้อย. ");
            }
            $username = $this->session->userdata('username');
            $data = array(
                    //'password'      =>   $this->input->post('password'),
                    'password'      => md5($this->input->post('password')),
                    'email'         =>   $this->input->post('email'),
                    'phone'         =>   $this->input->post('phone'),


                );
            $this->load->view('main/changepw',$data);
        } else {
            redirect(base_url().'main/login');
        }
    }
    public function print_pdf()
    {
        if($this->session->userdata('username')!='')
        {
            $username = $this->session->userdata('username');
            ini_set('memory_limit','256M');
            $this->load->library('pdf');
            $pdf = $this->pdf->load();
            //retrieve data from model viewpdf_model method get_slip
            $data['news'] = $this->main_model->output($username);
            $html = $this->load->view('main/print_pdf',$data,true);
            //set thai lang
            $pdf = new mPDF('tha','A4','0','THSaraban');
            $pdf->autoScriptToLang = true;
            $pdf->autoLangToFont = true;
            //render view to html
            $pdf->WriteHTML($html,2);
            //write html to pdf and save filename
            $output = "พิมพ์วันที่-".Datethai(date("Y-m-d")).".pdf";
            $pdf->Output("$output",'I');
        }
        else
        {
            redirect(base_url('main/login'));
        }
    }

    public function contact()
    {
  		if($this->session->userdata('username')!='')
  		{
  			$this->load->view("main/contact");
  		}else{
  			redirect(base_url('main/login'));
  		}
    }


}
