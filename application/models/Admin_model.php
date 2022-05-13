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
}
