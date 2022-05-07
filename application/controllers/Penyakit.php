<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penyakit extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('Penyakit_model', 'PM');
		
	}
	
	public function index(){
		$this->load->view('templates/header-admin');
		$this->load->view('templates/sidebar-admin');
		$this->load->view('admin/penyakit');
		$this->load->view('templates/footer-admin');
	}
	
	public function tambahDataPenyakit(){
		$data['kd_penyakit'] = $this->PM->kodePenyakit();
		$this->form_validation->set_rules('kd_penyakit', 'Kode penyakit', 'trim|required', [
			'required' => '{field} harus diisi!'
		]);
		$this->form_validation->set_rules('nama', 'Nama penyakit', 'trim|required', [
			'required' => '{field} harus diisi!'
		]);
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates/header-admin');
			$this->load->view('templates/sidebar-admin');
			$this->load->view('admin/tambah-penyakit', $data);
			$this->load->view('templates/footer-admin');
		} else {
			$this->PM->tambahData('penyakit', [
				'kd_penyakit' => $this->input->post('kd_penyakit'),
				'nama' => $this->input->post('nama'),
				'ket' => $this->input->post('ket')
			]);
			$this->session->set_flashdata('message', 'simpan');
			redirect('penyakit');
		}
		
	}
	
}

