<?php
class Laporan extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('M_Laporan');
    }

    public function index(){
        if($this->session->userdata('login')!= TRUE){
            redirect('login');
        }

        $data['title'] = "Laporan Pembayaran SPP";
        $data['laporan'] = $this->M_Laporan->data_laporan();
        $this->template->load_admin('index','laporan',$data);
    }
}