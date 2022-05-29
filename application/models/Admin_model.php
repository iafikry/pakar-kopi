<?php 

class Admin_model extends MY_Model
{
	// public function kodeRule(){
	// 	$data = $this->db->select_max('kd_gejala')->get('gejala')->row_array();
	// 	if (is_null($data['kd_gejala'])) {
	// 		$kode = "G001";
	// 	} else {
	// 		(int)$id = substr($data['kd_gejala'], 1);
	// 		$id += 1;
	// 		$kode = "G" . str_pad($id, 3, "0", STR_PAD_LEFT);

	// 	}
	// 	return $kode;
	// }
 
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
