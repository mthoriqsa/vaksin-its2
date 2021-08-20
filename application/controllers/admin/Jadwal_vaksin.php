<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jadwal_vaksin extends CI_Controller {

	public function index()
	{
		$query = $this->db->get('jadwal')->result();
		// print_r($data);
		// exit();
		$data = array();
		foreach ($query as $v) {
			$data['tanggal'] = $v->tanggal;
			$data['hari'] = date_format(date_create($v->tanggal), "l");
			$data['jam_mulai'] = $v->jam_mulai;
			$data['jam_selesai'] = $v->jam_selesai;
		}
		//print_r($data); exit();
		$this->load->view('admin/jadwal_vaksin', $data);
	}
}