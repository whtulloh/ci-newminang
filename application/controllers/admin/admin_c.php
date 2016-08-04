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
		
		$data['title']='Buku Tamu Halal Bihalal Padang Gantiang 2016';
		$data['peserta']=$this->admin_model->getpeserta();
		
		$this->load->view('/admin/index',$data);
	}
	
	function getAnak($pesertaid)
	{
		
	}
}


#		$this->load->database();   //memanggil pengaturan database dan mengaktifkannya
#       $this->load->model('m_data_produk');  //memanggil model m_data_produk
#       $data['data_produk'] = $this->m_data_produk->list_data();//memanggil fungsi di model dan menerima hasil fungsi yang dimasukan ke $data['data_produk']
#       $this->load->view('v_data_produk',$data);//memanggil view yang nanti kita akan buat dan memasukan $data dari model tadi
		
#		$data['title'] = 'CRUD CodeIgniter Studi Kasus Barang'; //judul title
#       $data['qbarang'] = $this->mbarang->get_allbarang(); //model semua barang
 
#       $this->load->view('vbarang',$data); //load views vbarang