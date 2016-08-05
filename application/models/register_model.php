<?php
defined('BASEPATH') OR exit('No direct script access allowed');

final class Register_model extends CI_Model
{

	public function __construct(){
    	parent::__construct();
	}

	public function registration( $data )
	{
		$query = $this->db->insert('peserta',$data);
		if ($query) {
			return TRUE;
		} else{
			return FALSE;
		}
	}

	public function get_data( $data )
	{
		$result = $this->db->get_where('peserta', $data, 1)->result();
		return $result[0]->id_peserta;
	}

	public function insert_anak( $id_parent , $nama_anak )
	{
		$data = array(
					'id_anak' 		=> '',
					'id_peserta'	=> $id_parent,
					'nama_anak'		=> $nama_anak
				);
		$result = $this->db->insert( 'anak', $data );
	}
}