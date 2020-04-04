<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Karyawan extends CI_Controller {
	function __construct(){
		parent::__construct();		
		$this->load->model('Karyawan_data');
		$this->load->model('Jabatan_data');
		$this->load->helper('url');
 
	}
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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$data['karyawan'] = $this->Karyawan_data->tampil_data()->result();
		$this->load->view('karyawan',$data);
	}
	function tambah(){
		$data['jabatan'] = $this->Jabatan_data->tampil_data()->result();
		$this->load->view('karyawan_tambah',$data);
	}

	function tambah_aksi(){
		$nip = $this->input->post('nip');
		$nama = $this->input->post('nama');
		$jenis_kelamin = $this->input->post('jenis_kelamin');
		$tanggal_lahir = $this->input->post('tanggal_lahir');
		$telp = $this->input->post('telp');
		$email = $this->input->post('email');
		$alamat = $this->input->post('alamat');
		$jabatan = $this->input->post('jabatan');
		$masa_kerja = $this->input->post('masa_kerja');
 print_r($tanggal_lahir);
 
		$data = array(
			'nip' => $nip,
			'nama' => $nama,
			'jenis_kelamin' => $jenis_kelamin,
			'tanggal_lahir' => $tanggal_lahir,
			'telp' => $telp,
			'email' => $email,
			'alamat' => $alamat,
			'jabatan' => $jabatan,
			'masa_kerja' => $masa_kerja
			);
		$this->Karyawan_data->input_data($data,'karyawan');
		redirect('karyawan');
	}

	function edit($nip){
		$where = array('nip' => $nip);
		$s['jabatan'] = $this->Jabatan_data->tampil_data()->result();
		$data['karyawan'] = $this->Karyawan_data->edit_data($where,'karyawan')->result();
		$this->load->view('karyawan_edit',$data,$s);
	}

	function update(){
		$nip = $this->input->post('nip');
		$nama = $this->input->post('nama');
		$jenis_kelamin = $this->input->post('jenis_kelamin');
		$tanggal_lahir = $this->input->post('tanggal_lahir');
		$telp = $this->input->post('telp');
		$email = $this->input->post('email');
		$alamat = $this->input->post('alamat');
		$jabatan = $this->input->post('jabatan');
		$masa_kerja = $this->input->post('masa_kerja');
 print_r($jenis_kelamin);
		$data = array(
			'nip' => $nip,
			'nama' => $nama,
			'jenis_kelamin' => $jenis_kelamin,
			'tanggal_lahir' => $tanggal_lahir,
			'telp' => $telp,
			'email' => $email,
			'alamat' => $alamat,
			'jabatan' => $jabatan,
			'masa_kerja' => $masa_kerja
			);

		$where = array(
			'nip' => $nip
		);
		$this->Karyawan_data->update_data($where,$data,'karyawan');
		redirect('karyawan');
	}

	function hapus($nip){
		$where = array('nip' => $nip);
		$this->Karyawan_data->hapus_data($where,'karyawan');
		redirect('karyawan');
	}
}
