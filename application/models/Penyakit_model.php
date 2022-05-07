<?php 

class Penyakit_model extends MY_Model {
	public function kodePenyakit(){
		$data = $this->db->select_max('kd_penyakit')->get('penyakit')->row_array();
		if (is_null($data['kd_penyakit'])) {
			$kode = "P001";
		} else {
			(int)$id = substr($data['kd_penyakit'], 1);
			$id += 1;
			$kode = "P" . str_pad($id, 3, "0", STR_PAD_LEFT);

		}
		return $kode;
		
	}
}
