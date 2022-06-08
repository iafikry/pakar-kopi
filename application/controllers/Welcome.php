<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Admin_model', 'AM');
		
	}
	
	public function index()
	{	
		// $this->load->library('form_validation');
		$data['penyakit'] = $this->db->get('penyakit');
		$data['gejala'] = $this->db->get('gejala');
		// $this->form_validation->set_rules('kd_penyakit', 'Penyakit', 'trim|required', [
		// 	'required' => '{field} harus diisi'
		// ]);
		
		$this->load->view('welcome_message', $data);
		// if ($this->form_validation->run() == FALSE) {
		// 	$data['nilai'] = null;
		// 	$this->load->view('welcome_message', $data);
		// } else {
		// 	$data['nilai'] = $this->diagnosis();
		// 	$this->load->view('welcome_message', $data);
		// }
	}

	public function ambilRule($kodePenyakit){
		// $kodePenyakit = $this->input->post('kode');
		$data = $this->AM->ambilDataAturan($kodePenyakit);
		echo json_encode($data);
		
	}

	public function diagnosis(){
		$kd_penyakit = $this->input->post('kd_penyakit');
		$jmlGejala = $this->db->get_where('aturan', ['kd_penyakit' => $kd_penyakit]);
		$kd_gejala = $jmlGejala->result_array();
		(float)$bobot = 100/(int)$jmlGejala->num_rows();
		$nilai = 0;
		$x =0;
		for ($i=0; $i < $jmlGejala->num_rows(); $i++) { 
			$gejala['gejala'.$i] = $this->input->post('gejala'.$i);
			if ($kd_gejala[$i]['kd_gejala'] == $gejala['gejala'.$i]) {
				$data['gejala'][$x++] = $this->db->get_where('gejala', ['kd_gejala' => $gejala['gejala'.$i]])->row_array();
				$nilai += $bobot;
			}
		}
		$data['namaPenyakit'] = $this->db->get_where('penyakit', ['kd_penyakit' => $kd_penyakit])->row_array();
		$data['nilai'] = $nilai;
		echo json_encode($data);		
	}
}
