<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jenis_vaksin extends CI_Controller {

	public function index()
	{
		$query = $this->db->get('jenis_vaksin')->result();
		// print_r($data);
		// exit();
		$data = array();
		foreach ($query as $v) {
			$data['id'] = $v->id_vaksin;
			$data['nama'] = $v->nama_vaksin;
		}
		//print_r($data); exit();
		$this->load->view('jenis_vaksin', $data);
	}
}