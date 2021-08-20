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

	public function add(){
		$nama_vac = $this->input->post('nama_vac');
		$this->db->insert('jenis_vaksin', array('nama_vaksin'=>$nama_vac));
		$this->index();
	}

	public function delete(){
		$id = $this->input->get('id');
		$this->db->where('id_vaksin', $id);
		$this->db->delete('jenis_vaksin');
		$this->index();
	}
}