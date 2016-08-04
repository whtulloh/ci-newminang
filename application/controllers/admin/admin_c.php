<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_c extends CI_Controller {
	
	function __construct()
	{
        parent::__construct();
    }
	
	function index() 
	{
		$data = $this->load->model('/admin/admin_m');		
		$this->load->view('/admin/index');
	}
}
