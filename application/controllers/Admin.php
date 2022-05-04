<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller
{
	public function index(){
		$this->load->view('templates/header-admin');
		$this->load->view('templates/sidebar-admin');
		$this->load->view('admin/dashboard');
		$this->load->view('templates/footer-admin');
		
	}
	
	public function gejala(){
		$this->load->view('templates/header-admin');
		$this->load->view('templates/sidebar-admin');
		$this->load->view('admin/gejala');
		$this->load->view('templates/footer-admin');
	}
	
}

