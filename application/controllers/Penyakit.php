<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penyakit extends CI_Controller
{
	public function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('Penyakit_model', 'PM');
		//cek session
		$role = ($this->session->userdata('role') == 'pakar' || $this->session->userdata('role') == 'superAdmin');
		if (is_null($this->session->userdata('role'))) {
			$this->session->unset_userdata('id');
			$this->session->unset_userdata('username');
			$this->session->unset_userdata('nama');
			$this->session->unset_userdata('role');
			$this->session->set_flashdata('message', 'user akses');
			redirect('auth');
		} elseif ($role == false) {
			$this->session->unset_userdata('id');
			$this->session->unset_userdata('username');
			$this->session->unset_userdata('nama');
			$this->session->unset_userdata('role');
			$this->session->set_flashdata('message', 'user akses');
			redirect('auth');
		}
		
	}
	
	public function index(){
		$data['judul'] = 'Data Penyakit // ES Kopi';
		$data['penyakit'] = $this->PM->ambilSemuaData('penyakit');
		$this->load->view('templates/header-admin', $data);
		$this->load->view('templates/sidebar-admin');
		$this->load->view('admin/penyakit', $data);
		$this->load->view('templates/footer-admin');
	}
	
	public function tambahDataPenyakit(){
		$data['judul'] = 'Tambah Data // ES Kopi';
		$data['kd_penyakit'] = $this->PM->kodePenyakit();
		$this->form_validation->set_rules('kd_penyakit', 'Kode penyakit', 'trim|required', [
			'required' => '{field} harus diisi!'
		]);
		$this->form_validation->set_rules('nama', 'Nama penyakit', 'trim|required', [
			'required' => '{field} harus diisi!'
		]);
		$this->form_validation->set_rules('ket', 'Keterangan', 'trim|required', [
			'required' => '{field} harus diisi'
		]);
		$this->form_validation->set_rules('solusi', 'Solusi', 'trim|required', [
			'required' => '{field} harus diisi'
		]);
		
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates/header-admin', $data);
			$this->load->view('templates/sidebar-admin');
			$this->load->view('admin/tambah-penyakit', $data);
			$this->load->view('templates/footer-admin');
		} else {
			$this->PM->tambahData('penyakit', [
				'kd_penyakit' => $this->input->post('kd_penyakit'),
				'nama' => $this->input->post('nama'),
				'ket' => $this->input->post('ket'),
				'solusi' => $this->input->post('solusi')
			]);
			$this->session->set_flashdata('message', 'simpan');
			redirect('penyakit');
		}
		
	}

	public function ubahDataPenyakit($kodePenyakit){
		$data['judul'] = "Ubah Data // ES Kopi";
		$data['penyakit'] = $this->PM->ambilData('penyakit', ['kd_penyakit' => $kodePenyakit]);
		$this->form_validation->set_rules('kd_penyakit', 'Kode penyakit', 'trim|required', [
			'required' => '{field} harus diisi!'
		]);
		$this->form_validation->set_rules('nama', 'Nama penyakit', 'trim|required', [
			'required' => '{field} harus diisi!'
		]);
		$this->form_validation->set_rules('ket', 'Keterangan', 'trim|required', [
			'required' => '{field} harus diisi'
		]);
		$this->form_validation->set_rules('solusi', 'Solusi', 'trim|required', [
			'required' => '{field} harus diisi'
		]);
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates/header-admin', $data);
			$this->load->view('templates/sidebar-admin');
			$this->load->view('admin/ubah-penyakit', $data);
			$this->load->view('templates/footer-admin');
		} else {
			$this->PM->perbaruiData($tabel='penyakit', [
				'nama' => $this->input->post('nama'),
				'ket' => $this->input->post('ket'),
				'solusi' => $this->input->post('solusi')
			], ['kd_penyakit' =>$kodePenyakit]);
			$this->session->set_flashdata('message', 'simpan');
			redirect('penyakit');
		}
	}

	public function hapusDataPenyakit($kodePenyakit){
		$this->PM->hapusData($tabel = 'penyakit', ['kd_penyakit' => $kodePenyakit]);
		$this->session->set_flashdata('message', 'hapus');
		redirect('penyakit');
	}	
}

