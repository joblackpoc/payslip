<?php
class Payslip extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('viewpdf_model');
        $this->load->helper('fn_thaidate');
    }
    public function index()
    {
        ini_set('memory_limit','256M');
        $this->load->library('pdf');
        $pdf = $this->pdf->load();
        //retrieve data from model viewpdf_model method get_slip
        $data['news'] = $this->viewpdf_model->get_slip();
        $html = $this->load->view('viewpdf',$data,true);
        //set thai lang
        $pdf = new mPDF('tha','A4','0','THSaraban');
        $pdf->autoScriptToLang = true;
        $pdf->autoLangToFont = true;
        //render view to html
        $pdf->WriteHTML($html,2);
        //write html to pdf and save filename
        $output = "Payslip".date("d_M_Y_H_i_s").".pdf";
        $pdf->Output("$output",'I');
    }
}

?>