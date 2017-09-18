<?php
class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('salary_model');
        $this->load->model('view_model');
        $this->load->helper('fn_thaidate');
    }
    public function slip()
    {
        // boost the memory limit if it's low ;)
        ini_set('memory_limit', '256M');
        // load library
        $this->load->library('pdf');
        $pdf = $this->pdf->load();
        // retrieve data from model
        $data['news'] = $this->salary_model->get_sqlslip();
        $html = $this->load->view('slip_pdf', $data, true);
	$pdf = new mPdf('tha','A4','0','THSaraban');
	$pdf->autoScriptToLang = true;
	$pdf->autoLangToFont = true;
        // render the view into HTML
        $pdf->WriteHTML($html,2);
        // write the HTML into the PDF
        $output = 'สลิปเงินเดือนพิมพ์วันที่'.date('_d_M_Y').'.pdf';
        $pdf->Output("$output", 'I');
    }
    public function payslip($id_card=0)
    {
        ini_set('memory_limit','256M');
        $this->load->library('pdf');
        $pdf = $this->pdf->load();
        
        $data['news'] = $this->salary_model->get_payslip();
        $html = $this->load->view('slip2_pdf', $data, true);
        $pdf = new mPDF('tha','A4','0','THSaraban');
        $pdf->autoScriptToLang = true;
        $pdf->autoLangToFont= true;
        $pdf->WriteHTML($html,2);
        $output = 'สลิปเงินเดือนพิมพ์วันที่'.date('_d_M_Y').'.pdf';
        $pdf->Output("$output",'I');
    }
    public function view($id_card=0)
    {
        $id_card = $this->input->post("id_card");
        $data['news'] = $this->view_model->view($id_card);
        $this->load->view("view_list",$data);
    }
    public function viewall()
    {
        $data['news'] = $this->salary_model->get_sqlslip();
        $this->load->view('viewall',$data);
    }
    public function search($fname=0,$lname=0)
    {
        $fname = $this->input->post('fname');
        $lname = $this->input->post('lname');
        $data['news']=$this->salary_model->search_slip($fname,$lname);
        $this->load->view('viewsearch_s',$data);
    }
    public function date()
    {
        $d = 12062560;
        $x = substr($d, 0,2) .'-'. substr($d, 2,2) .'-'. substr($d,4,4) ;
        echo $x;
    }
    public function login()
    {
        
    }
}


