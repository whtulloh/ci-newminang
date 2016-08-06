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
			$config['max_size']	= '10000';
			$config['max_width']  = '2048';
			$config['max_height']  = '2048';
			
			$this->load->library('upload', $config);

			if ( !$this->upload->do_upload('userfile'))
                {
                    $photo = 'nothing';
                }
                else
                {
                    $data = array('upload_data' => $this->upload->data());
					$photo = $config['upload_path'].$data['upload_data']['file_name'];
                }
			
			extract($_POST);
			$data = array(
						'id_peserta' 		=> '',
						'nama_suami' 		=> $nama_suami,
						'nama_istri' 		=> $nama_istri,
						'alamat' 			=> $alamat.','.$kota,
						'no_telp' 			=> $no_telp,
						'bapak_suami' 		=> $bapak_suami,
						'ibu_suami'			=> $ibu_suami,
						'bapak_istri'		=> $bapak_istri,
						'ibu_istri'			=> $ibu_istri,
						'jorong_suami'		=> (!empty($jorong_suami) ? $jorong_suami : ''),
						'jorong_istri'		=> (!empty($jorong_istri) ? $jorong_istri : ''),
						'suku_suami'		=> (!empty($suku_suami) ? $suku_suami : ''),
						'suku_istri'		=> (!empty($suku_istri) ? $suku_istri : ''),
						'link_photo'		=> $photo
					);
			
	 		//if radio button is other input
			if ( !empty($jorong_suami) && $jorong_suami == 'other_this') {
				$data['jorong_suami'] = $jorong_suami_other;
			}
			if ( !empty($jorong_istri) && $jorong_istri == 'other_this' ) {
				$data['jorong_istri'] = $jorong_istri_other;
			}
			if ( !empty($suku_suami) && $suku_suami == 'other_this' ) {
				$data['suku_suami'] = $suku_suami_other;
			}
			if ( !empty($suku_istri) && $suku_istri == 'other_this' ) {
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
				}if (!empty($anak7) ) {
					$rs = $this->register_model->insert_anak( $result, $anak7 );
				}if (!empty($anak8) ) {
					$rs = $this->register_model->insert_anak( $result, $anak8 );
				}if (!empty($anak9) ) {
					$rs = $this->register_model->insert_anak( $result, $anak9 );
				}
			}
			
			if ( $reg_data == TRUE) {
				// $param = array('flashdata' => ' Success !!', );
				$this->session->set_flashdata('message', ' Success !!');
				redirect(site_url('/'), 'refresh');
			}else{
				// $param = array('flashdata' => ' Failed !!', );
				$this->session->set_flashdata('message', ' Failed !!');
				redirect(site_url('/'), 'refresh');
			}
			// $this->load->view("register", $param );
		}
	}

}
