<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vaksinator extends CI_Controller {

	public function index()
	{
		$query = $this->db->get('vaksinator')->result();
		// print_r($data);
		// exit();
		$data = array();
		$data['result'] = $query;
		//print_r($data); exit();
		$this->load->view('admin/vaksinator', $data);
	}

	public function add(){
		$nama = $this->input->post('nama_instansi');
		$this->db->insert('vaksinator', array('nama_instansi'=>$nama));
		$this->index();
	}

	public function delete(){
		$id = $this->input->get('id');
		$this->db->where('id_vaksinator', $id);
		$this->db->delete('vaksinator');
		$this->index();
	}
}