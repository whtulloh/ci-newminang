<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_c extends CI_Controller {
	
	function __construct()
	{
        parent::__construct();		
    }
	
	function index() 
	{
		$this->load->model('/admin/admin_m','admin_model');
		
		$jml_peserta = $this->admin_model->get_total_record_m();
		
		$config['base_url'] = base_url().'index.php/user/index/';
        $config['total_rows'] = $jml_peserta;
        $config['per_page'] = 25;
        $config['uri_segment'] = 3;
        $this->pagination->initialize($config);
		
		$start = $this->uri->segment(3, 0);
        $peserta = $this->admin_model->getpeserta_m($config['per_page'],$start);
		
		$data['title'] = 'Buku Tamu Halal Bihalal Padang Gantiang 2016';
		$data['jml_peserta'] = $jml_peserta;
		$data['pagination'] = $this->pagination->create_links();
		$data['peserta'] = $peserta;
		
		$this->load->view('/admin/index',$data);
	}
	
	function export_to_xl() {
		$this->load->model('/admin/admin_m','admin_model');
		
		$data['excel'] = $this->admin_model->to_excel_all_m(); 
		$this->load->view('/admin/excel_v',$data);
	}
}