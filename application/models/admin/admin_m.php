<?php
defined('BASEPATH') OR exit('No direct script access allowed');

final class admin_m extends CI_Model
{

	public function __construct(){
    	parent::__construct();
	}

	public function getpeserta( )
	{
		$query = $this->db->get('peserta')->result();
		if ($query) {
			return $query;
		} else{
			return FALSE;
		}
	}
	
	public function getanak_byparent( $parent_id )
	{
		$this->db->select('*');
        $this->db->where('id_peserta', $parent_id);
        $query = $this->db->get('anak');
		if ($query) {
			return $query;
		} else{
			return FALSE;
		}
	}
}