<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library(array('form_validation'));
		$this->load->model('register_model');
	}

	public function index()
	{
		$this->load->view('register');
	}

	public function api_reg(){
		if ( !isset($_POST['submiten']) ) {
			redirect('register');
		}else{
			$config['upload_path'] = 'assets/image/';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size']	= '1000';
			$config['max_width']  = '1024';
			$config['max_height']  = '1024';

			$this->load->library('upload', $config);
			//$error = array('error' => $this->upload->display_errors());
			$data = $this->upload->data();
 
			extract($_POST);
			$data = array(
						'id_peserta' 		=> '',
						'nama_suami' 		=> $nama_suami,
						'nama_istri' 		=> $nama_istri,
						'alamat' 			=> $alamat,
						'no_telp' 			=> $no_telp,
						'bapak_suami' 		=> $bapak_suami,
						'ibu_suami'			=> $ibu_suami,
						'bapak_istri'		=> $bapak_istri,
						'ibu_istri'			=> $ibu_istri,
						'jorong_suami'		=> $jorong_suami,
						'jorong_istri'		=> $jorong_istri,
						'suku_suami'		=> $suku_suami,
						'suku_istri'		=> $suku_istri,
						'link_photo'		=> $data['full_path']
					);
			
			// if not upload photo
			if ( ! $this->upload->do_upload('userfile')){
	 			$data['link_photo'] = 'nothing';
	 		}
			
	 		//if radio button is other input
			if ( $jorong_suami == 'other_this' ) {
				$data['jorong_suami'] = $jorong_suami_other;
			}
			if ( $jorong_istri == 'other_this' ) {
				$data['jorong_istri'] = $jorong_istri_other;
			}
			if ( $suku_suami == 'other_this' ) {
				$data['suku_suami'] = $suku_suami_other;
			}
			if ( $suku_istri == 'other_this' ) {
				$data['suku_istri'] = $suku_istri_other;
			}

			$reg_data	= $this->register_model->registration( $data );

			if ( $reg_data ) {
				$data = array('nama_suami' => $nama_suami,'nama_istri' => $nama_istri );
				$result = $this->register_model->get_data( $data );
				if ( !empty($anak1) ) {
					$rs = $this->register_model->insert_anak( $result, $anak1 );
				}
				if( !empty($anak2) ) {
					$rs = $this->register_model->insert_anak( $result, $anak2 );
				}
				if ( !empty($anak3) ) {
					$rs = $this->register_model->insert_anak( $result, $anak3 );
				}
				if ( !empty($anak4) ) {
					$rs = $this->register_model->insert_anak( $result, $anak4 );
				}
				if (!empty($anak5) ) {
					$rs = $this->register_model->insert_anak( $result, $anak5 );
				}if (!empty($anak6) ) {
					$rs = $this->register_model->insert_anak( $result, $anak6 );
				}
			}
			
			if ( $reg_data == TRUE) {
				$param = array('flashdata' => ' Success !!', );
			}else{
				$param = array('flashdata' => ' Failed !!', );
			}
			$this->load->view("register", $param );
		}
	}

}
