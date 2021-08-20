<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jadwal extends CI_Controller {

	public function index()
	{
		$query = $this->db->get('jadwal')->result();
		// print_r($data);
		// exit();
		$data = array();
		$data['result'] = $query;
		
		//print_r($data); exit();
		$this->load->view('pegawai/jadwal_vaksin_p', $data);
	}

	public function detail(){
		$data = array();
		$id = $this->input->get('id');

		$data['result'] = $this->db->where('id_jadwal', $id)->get('jadwal')->row();
		$this->load->view('pegawai/vaksin_detail_p', $data);
	}
}