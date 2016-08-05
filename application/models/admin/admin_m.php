<?php
defined('BASEPATH') OR exit('No direct script access allowed');

final class admin_m extends CI_Model
{

	public function __construct(){
    	parent::__construct();
	}

	public function getpeserta_m($limit, $start = 0)
	{
        $this->db->order_by('id_peserta', 'DESC');
        $this->db->limit($limit, $start);
		$query = $this->db->get('peserta')->result();
		$return = array();

		foreach ($query as $peserta)
		{
			$return[$peserta->id_peserta] = $peserta;
			$return[$peserta->id_peserta]->anak = $this->getanak_by_parent_m($peserta->id_peserta);
		}

		if ($query) {
			return $return;
		} else{
			return FALSE;
		}
	}
	
	function get_total_record_m() {
        return $this->db->count_all_results('peserta');
    }
	
	public function getanak_by_parent_m( $peserta_id )
	{
        $this->db->where('anak.id_peserta', $peserta_id);
        $query = $this->db->get('anak')->result();
		if ($query) {
			return $query;
		} else{
			return FALSE;
		}
	}
	
	//query for get all data
	function to_excel_all_m() {
		$query = $this->db->get('peserta')->result();
		$return = array();

		foreach ($query as $peserta)
		{
			$return[$peserta->id_peserta] = $peserta;
			$return[$peserta->id_peserta]->anak = $this->getanak_by_parent_m($peserta->id_peserta);
		}

		if ($query) {
			return $return;
		} else{
			return FALSE;
		}
	}
}