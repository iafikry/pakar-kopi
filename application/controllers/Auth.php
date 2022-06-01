<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data['judul'] = 'Login // ES Kopi';
		$this->form_validation->set_rules('username', 'Username', 'trim|required', [
			'required' => '{field} harus diisi'
		]);
		$this->form_validation->set_rules('pass', 'Password', 'trim|required|min_length[6]', [
			'required' => '{field} harus diisi',
			'min_length' => '{field} berisikan minimal 6 karakter'
		]);
		
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('login', $data);
		} else {
			echo 'sipaling oke';
		}		
	}
}
