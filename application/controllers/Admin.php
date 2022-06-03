<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('Admin_model', 'AM');
		
	}

	public function index(){
		$data['penyakit'] = $this->db->get('penyakit');
		$data['gejala'] = $this->db->get('gejala');
		$data['judul'] = "Dashboard // ES Kopi";
		$this->load->view('templates/header-admin', $data);
		$this->load->view('templates/sidebar-admin');
		$this->load->view('admin/dashboard', $data);
		$this->load->view('templates/footer-admin');
	}
	
	public function rule(){
		$data['judul'] = 'Aturan // ES Kopi';
		$data['penyakit'] = $this->db->get('penyakit');
		$data['cekJmlRule'] = $this->db->distinct()->select('kd_penyakit')->get('aturan')->num_rows(); //cek jumlah rule pada db
		for ($i=0; $i < $data['penyakit']->num_rows(); $i++) {
			$p = $data['penyakit']->result_array();
			$data['cekRule'][$p[$i]['kd_penyakit']] = $this->db->get_where('aturan', ['kd_penyakit' => $p[$i]['kd_penyakit']])->num_rows();
		}
		$data['gejala'] = $this->db->get('gejala');
		$data['rule'] = $this->AM->rule();		
		$this->load->view('templates/header-admin', $data);
		$this->load->view('templates/sidebar-admin');
		$this->load->view('admin/rule', $data);
		$this->load->view('templates/footer-admin');
	}
	
	public function tambahAturan($kode = null){
		$data['judul'] = 'Tambah aturan // ES KOPI';
		$data['gejala'] = $this->AM->ambilSemuaData('gejala');

		if ($kode) {
			$this->form_validation->set_rules('kd_penyakit', 'Kode Penyakit', 'trim|required');
			$data['penyakit'] = $this->AM->ambilData('penyakit', ['kd_penyakit' => $kode]);
			
			if ($this->form_validation->run() == FALSE) {
				$this->load->view('templates/header-admin', $data);
				$this->load->view('templates/sidebar-admin');
				$this->load->view('admin/tambah-satu-aturan', $data);
				$this->load->view('templates/footer-admin');
			} else {
				$jmlGejala = $this->db->get('gejala')->num_rows(); //ambil jumlah banyaknya gejala
				for ($i=0; $i < $jmlGejala; $i++) { 
					$gejala = $this->input->post('gejala'.$i);
					if (isset($gejala)) {
						$rule = [
							'id' => '',
							'kd_penyakit' => $kode,
							'kd_gejala' => $gejala
						];
						$this->AM->tambahData('aturan', $rule);
					}
				}
				$this->session->set_flashdata('message', 'simpan');
				redirect('admin/rule');
			}			
		} else {
			
			$data['penyakit'] = $this->AM->ambilSemuaData('penyakit');
			$this->form_validation->set_rules('jPenyakit', 'Jenis penyakit', 'trim|required', [
				'required' => '{field} harus diisi!'
			]);
			
			if ($this->form_validation->run() == FALSE) {
				$this->load->view('templates/header-admin', $data);
				$this->load->view('templates/sidebar-admin');
				$this->load->view('admin/tambah-aturan', $data);
				$this->load->view('templates/footer-admin');
			} else {
				$jmlGejala = $this->db->get('gejala')->num_rows(); //ambil jumlah banyaknya gejala
				for ($i=0; $i < $jmlGejala; $i++) { 
					$gejala = $this->input->post('gejala'.$i);
					if (isset($gejala)) {
						$rule = [
							'id' => '',
							'kd_penyakit' => $this->input->post('jPenyakit'),
							'kd_gejala' => $gejala
						];
						$this->AM->tambahData('aturan', $rule);
					}
				}
				$this->session->set_flashdata('message', 'simpan');
				redirect('admin/rule');
			}
		}	
	}

	public function ubahDataRule($kode_penyakit){
		$data['judul'] = 'Ubah data // ES Kopi';
		$data['penyakit'] = $this->AM->ambilSemuaData($table = 'penyakit');
		$data['gejala'] = $this->AM->ambilSemuaData($table = 'gejala');
		$data['rule'] = $this->AM->ambilDataAturan($kode_penyakit);
		$this->form_validation->set_rules('kd_penyakit', 'Kode Penyakit', 'trim|required');
		
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates/header-admin', $data);
			$this->load->view('templates/sidebar-admin');
			$this->load->view('admin/ubah-aturan', $data);
			$this->load->view('templates/footer-admin');
		} else {
			$this->AM->hapusData('aturan', ['kd_penyakit' => $kode_penyakit]);
			$jmGejala = $this->db->get('gejala')->num_rows();
			for ($i=0; $i < $jmGejala; $i++) { 
				$gejala = $this->input->post('gejala'.$i);
				if (isset($gejala)) {
					$rule = [
						'id' => '',
						'kd_penyakit' => $kode_penyakit,
						'kd_gejala' => $gejala
					];
					$this->AM->tambahData('aturan', $rule);
				}
			}
			$this->session->set_flashdata('message', 'simpan');
			redirect('admin/rule');
		}		
	}

	public function hapusDataRule($kode_penyakit){
		$this->AM->hapusData('aturan', ['kd_penyakit' => $kode_penyakit]);
		$this->session->set_flashdata('message', 'hapus');
		redirect('admin/rule');
	}

	public function pengguna(){
		$data['judul'] = 'Pengguna // ES Kopi';
		$data['pengguna'] = $this->AM->ambilSemuaData('pengguna');
		$this->load->view('templates/header-admin', $data);
		$this->load->view('templates/sidebar-admin');
		$this->load->view('admin/pengguna', $data);
		$this->load->view('templates/footer-admin');

	}

	public function tambahDataPengguna(){
		$data['judul'] = 'Tambah pengguna // ES Kopi';
		$this->form_validation->set_rules('username', 'Username', 'trim|required|is_unique[pengguna.username]|min_length[5]', [
			'required' => '{field} harus diisi',
			'is_unique' => '{field} telah digunakan',
			'min_length' => '{field} minimal berisikan 5 karakter'
		]);

		$this->form_validation->set_rules('nama', 'Nama', 'trim|required|alpha', [
			'required' => '{field} harus diisi'
		]);

		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]', [
			'required' => '{field} harus diisi', 
			'min_length' => '{field} minimal berisikan 6 karakter'
		]);
		
		
		
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates/header-admin', $data);
			$this->load->view('templates/sidebar-admin');
			$this->load->view('admin/tambah-pengguna', $data);
			$this->load->view('templates/footer-admin');
		} else {
			echo 'sipaling oke';
		}
		
	}
	
	
}

