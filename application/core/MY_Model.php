<?php

class MY_Model extends CI_Model
{
	public function ambilSemuaData($tabel){
		return $this->db->get($tabel);
	}

	public function ambilData($tabel, $kondisi){
		return $this->db->get_where($tabel, $kondisi)->row_array();
	}

	public function jumlahBaris($tabel, $where){
		return $this->db->get_where($tabel, $where)->num_rows();
	}

	public function tambahData($tabel, $data){
		$this->db->insert($tabel, $data);
	}

	public function perbaruiData($tabel, $data, $kondisi){
		$this->db->update($tabel, $data, $kondisi);
	}

	public function hapusData($tabel, $kondisi){
		$this->db->delete($tabel, $kondisi);
	}
}
