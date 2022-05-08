<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}
	public function index(){
		$data['penyakit'] = $this->db->get('penyakit');
		$data['judul'] = "Dashboard // ES Kopi";
		$this->load->view('templates/header-admin', $data);
		$this->load->view('templates/sidebar-admin');
		$this->load->view('admin/dashboard', $data);
		$this->load->view('templates/footer-admin');
	}
	
	public function gejala(){
		$this->load->view('templates/header-admin');
		$this->load->view('templates/sidebar-admin');
		$this->load->view('admin/gejala');
		$this->load->view('templates/footer-admin');
	}
	
	
}

