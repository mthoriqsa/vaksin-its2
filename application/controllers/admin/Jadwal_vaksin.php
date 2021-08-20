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

	public function form_add(){
		$jenis = $this->db->get('jenis_vaksin')->result();
		$vaksinator = $this->db->get('vaksinator')->result();
		$data = array();
		$data['jenis'] = $jenis;
		$data['vaksinator'] = $vaksinator;

		$this->load->view('admin/add_jadwal', $data);
	}

	public function add(){
		$data = array(
			'tanggal' => $this->input->post('tgl_pelaksanaan'),
			'vaksinator' => $this->input->post('vaksinator'),
			'jenis_vaksin' => $this->input->post('jenis_vaksin'),
			'tanggal' => $this->input->post('tgl_pelaksanaan'),
			'mulai_daftar' => $this->input->post('tgl_mulai'),
			'selesai_daftar' => $this->input->post('tgl_selesai'),
			'mulai_daftar' => $this->input->post('tgl_mulai'),
			'jam_mulai' => $this->input->post('sesi_mulai'),
			'jam_selesai' => $this->input->post('sesi_selesai'),
			'lokasi' => $this->input->post('tempat_pelaksanaan'),
			'kuota' => $this->input->post('kuota'),
			'status' => $this->input->post('status')
		);

		$this->db->insert('jadwal', $data);
		$this->index();
	}
}