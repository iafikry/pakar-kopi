<?php 

class Admin_model extends MY_Model
{
	public function idUser(){
		date_default_timezone_set("Asia/Jakarta");
		$data = $this->db->select_max('id')->get('pengguna')->row_array();
		if (is_null($data['id'])) {
			$kode = "0001".date("Ndnyz");
		} else {
			$data = substr($data['id'], 1, 12);
			(int)$id = substr($data,1,2);
			$id += 1;
			$kode = str_pad($id, 4, "0", STR_PAD_LEFT).date("Ndnyz");

		}
		// var_dump($kode); die;
		return $kode;
	}
 
	public function rule(){
		$this->db->select('p.nama as nama_penyakit, g.nama as nama_gejala, at.kd_penyakit as kode_penyakit');
		$this->db->from('aturan at');
		$this->db->join('gejala g', 'g.kd_gejala = at.kd_gejala');
		$this->db->join('penyakit p', 'p.kd_penyakit = at.kd_penyakit');
		return $this->db->get();
	}
	
	public function ambilDataAturan($kodePenyakit){
		$this->db->select('p.nama as nama_penyakit, g.nama as nama_gejala, at.kd_penyakit as kode_penyakit, at.kd_gejala as kode_gejala, at.id');
		$this->db->from('aturan at');
		$this->db->join('gejala g', 'g.kd_gejala = at.kd_gejala');
		$this->db->join('penyakit p', 'p.kd_penyakit = at.kd_penyakit');
		$this->db->where('at.kd_penyakit', $kodePenyakit);
		return $this->db->get()->result_array();
	}
}
