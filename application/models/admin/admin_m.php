<?php
defined('BASEPATH') OR exit('No direct script access allowed');

final class admin_m extends CI_Model
{

	public function __construct(){
    	parent::__construct();
	}

	public function getall( )
	{
		$query = $this->db->get('tb_register')->result();
		if ($query) {
			return $query;
		} else{
			return FALSE;
		}
	}
}