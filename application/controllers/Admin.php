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
		$data['gejala'] = $this->db->get('gejala');
		$data['rule'] = $this->db->get('aturan');
		
		$this->load->view('templates/header-admin', $data);
		$this->load->view('templates/sidebar-admin');
		$this->load->view('admin/rule', $data);
		$this->load->view('templates/footer-admin');
	}
	
	public function tambahAturan(){
		$data['judul'] = 'Tambah aturan // ES KOPI';
		$data['penyakit'] = $this->AM->ambilSemuaData('penyakit');
		$data['gejala'] = $this->AM->ambilSemuaData('gejala');
		
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

