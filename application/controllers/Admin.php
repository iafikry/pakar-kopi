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
		$this->load->view('templates/header-admin', $data);
		$this->load->view('templates/sidebar-admin');
		$this->load->view('admin/rule', $data);
		$this->load->view('templates/footer-admin');
	}
	
	public function tambahAturan(){
		$data['judul'] = 'Tambah aturan // ES KOPI';
		$data['penyakit'] = $this->AM->ambilSemuaData('penyakit');
		$data['gejala'] = $this->AM->ambilSemuaData('gejala');
		
		
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates/header-admin', $data);
			$this->load->view('templates/sidebar-admin');
			$this->load->view('admin/tambah-aturan', $data);
			$this->load->view('templates/footer-admin');
		} else {
			echo 'ok si paling mantep';
		}
		
	}
	
	
}

