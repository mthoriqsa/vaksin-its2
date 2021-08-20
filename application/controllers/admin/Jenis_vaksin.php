<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jenis_vaksin extends CI_Controller {

	public function index()
	{
		$query = $this->db->get('jenis_vaksin')->result();
		// print_r($data);
		// exit();
		$data = array();
		$data['result'] = $query;
		//print_r($data); exit();
		$this->load->view('admin/jenis_vaksin', $data);
	}
}