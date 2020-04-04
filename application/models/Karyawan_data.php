<?php 
 
class Karyawan_data extends CI_Model{
	private $_table ="karyawan";
	public $nip;
	public $nama;
	public $jabatan;
	function tampil_data()
	{
		return $this->db->get('karyawan');
	}
 
	function input_data($data,$table){
		$this->db->insert($table,$data);
	}

	function edit_data($where,$table){		
		return $this->db->get_where($table,$where);
	}

	function get_nama($where,$table)
{
    $query = $this->db->get_where($table,$where);
    $array = array();

    foreach($query->result() as $row)
    {
        $array[] = $row['nip']; // add each user id to the array
    }

    return $array;
}

	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}	

	function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
}