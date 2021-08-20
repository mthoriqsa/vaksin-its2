<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pegawai extends CI_Controller {

	public function index()
	{
		$query = $this->db->get('pegawai')->result();
		// print_r($data);
		// exit();
		$data = array();
		$data['result'] = $query;
		//print_r($data); exit();
		$this->load->view('admin/pegawai', $data);
	}

	public function detail(){
		$data = array();
		$id = $this->input->get('id');

		$data['result'] = $this->db->where('id_pegawai', $id)->get('pegawai')->row();
		$this->load->view('admin/pegawai_detail', $data);
	}

	public function filter(){
		$data = array();
		$f_jk = $this->input->get('jenis_kelamin');
		$f_gol = $this->input->get('golongan');
		$f_status = $this->input->get('status');



		if(!is_null($f_jk) && $f_jk !== ''){ $this->db->where('jenis_kelamin', $f_jk); }
		if(!is_null($f_gol) && $f_gol !== ''){ $this->db->where('golongan_darah', $f_gol); }
		if(!is_null($f_status) && $f_status !== ''){ $this->db->where('status', $f_status); }
		
		$data['result'] = $this->db->get('pegawai')->result();
		$this->load->view('admin/pegawai', $data);
	}
}