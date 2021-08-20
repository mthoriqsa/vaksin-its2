<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jadwal_vaksin extends CI_Controller {

	public function index()
	{
		$query = $this->db->get('jadwal')->result();
		// print_r($data);
		// exit();
		$data = array();
		$data['result'] = $query;
		
		//print_r($data); exit();
		$this->load->view('admin/jadwal_vaksin', $data);
	}

	public function detail(){
		$data = array();
		$id = $this->input->get('id');

		$data['result'] = $this->db->where('id_jadwal', $id)->get('jadwal')->row();
		$this->load->view('admin/vaksin_detail', $data);
	}
}