<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gejala extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Gejala_model', 'GM');
		$this->load->library('form_validation');
		
	}

	public function index(){
		$data['gejala']= $this->GM->ambilSemuaData('gejala');;
		$data['judul'] = 'Gejala // ES Kopi';
		$this->load->view('templates/header-admin', $data);
		$this->load->view('templates/sidebar-admin');
		$this->load->view('admin/gejala');
		$this->load->view('templates/footer-admin');
	}
	
	public function tambahDataGejala(){
		$data['judul'] = 'Tambah Data // ES Kopi';
		$data['kodeGejala'] = $this->GM->kodeGejala();
		$this->form_validation->set_rules('kd_gejala', 'Kode', 'trim|required', [
			'required' => '{field} harus diisi'
		]);
		// $this->form_validation->set_rules('nama', 'Nama', 'trim|required|regex_match[/^([a-z ])+$/i]', [
		// 	'required' => '{field} harus diisi',
		// 	'regex_match' => '{field} hanya berisikan alfabet',
		// ]);
		$this->form_validation->set_rules('nama', 'Nama', 'trim|required', [
			'required' => '{field} harus diisi',
		]);
		$this->form_validation->set_rules('bobot', 'Bobot', 'required', [
			'required' => '{field} harus diisi!'
		]);
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates/header-admin', $data);
			$this->load->view('templates/sidebar-admin');
			$this->load->view('admin/tambah-gejala', $data);
			$this->load->view('templates/footer-admin');
		} else {
			$this->GM->tambahData('gejala', [
				'kd_gejala' => $this->input->post('kd_gejala'),
				'nama' => $this->input->post('nama'),
				'bobot' => $this->input->post('bobot'),
			]);
			$this->session->set_flashdata('message', 'simpan');
			redirect('gejala');
		}
		
	}

	public function ubahDataGejala($kodeGejala){
		$data['judul'] = 'Ubah Data // ES Kopi';
		$data['gejala'] = $this->GM->ambilData('gejala', ['kd_gejala' => $kodeGejala]);
		$this->form_validation->set_rules('kd_gejala', 'Kode', 'trim|required', [
			'required' => '{field} harus diisi'
		]);
		// $this->form_validation->set_rules('nama', 'Nama', 'trim|required|regex_match[/^([a-z ])+$/i]', [
		// 	'required' => '{field} harus diisi',
		// 	'regex_match' => '{field} hanya berisikan alfabet',
		// ]);
		$this->form_validation->set_rules('nama', 'Nama', 'trim|required', [
			'required' => '{field} harus diisi',
		]);
		$this->form_validation->set_rules('bobot', 'Bobot', 'required', [
			'required' => '{field} harus diisi!'
		]);
		
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates/header-admin', $data);
			$this->load->view('templates/sidebar-admin');
			$this->load->view('admin/ubah-gejala', $data);
			$this->load->view('templates/footer-admin');
		} else {
			$this->GM->perbaruiData('gejala', [
				'nama' => $this->input->post('nama'),
				'bobot' => $this->input->post('bobot')
			], ['kd_gejala' => $kodeGejala]);
			$this->session->set_flashdata('message', 'simpan');
			redirect('gejala');
		}
	}

	public function hapusDataGejala($kodeGejala){
		$this->GM->hapusData('gejala', ['kd_gejala' => $kodeGejala]);
		$this->session->set_flashdata('message', 'hapus');
		redirect('gejala');
	}


}
