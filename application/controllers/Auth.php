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
			$this->_login();
		}		
	}

	private function _login(){
		$username = $this->input->post('username', true);
		$password = $this->input->post('pass');
		$cekPengguna = $this->db->get_where('pengguna', ['username' => $username])->row_array();
		if ($cekPengguna) {
			if ($cekPengguna['password'] === $password ) {
				$dataUser = [
					'id' => $cekPengguna['id'],
					'username' => $cekPengguna['username'],
					'nama' => $cekPengguna['nama'],
					'role' => $cekPengguna['role'],
				];
				$this->session->set_userdata( $dataUser );
				$this->session->set_flashdata('message', 'masuk');
				redirect('admin');
			} else {
				$this->session->set_flashdata('message', 'salah');
				redirect('auth');
			}
		} else {
			$this->session->set_flashdata('message', 'unknown');
			redirect('auth');
		}
	}

	public function logout(){
		$this->session->unset_userdata('id');
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('nama');
		$this->session->unset_userdata('role');
		$this->session->set_flashdata('message', 'keluar');
		redirect('auth');
	}
}
