<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class jabatan extends CI_Controller {
	function __construct(){
		parent::__construct();		
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
		$data['jabatan'] = $this->Jabatan_data->tampil_data()->result();
		$this->load->view('jabatan',$data);
	}
	function tambah(){
		$this->load->view('jabatan_tambah');
	}

	function tambah_aksi(){
		$kode = $this->input->post('kode');
		$jabatan = $this->input->post('jabatan');
		$standart_gaji = $this->input->post('standart_gaji');
		$keterangan = $this->input->post('keterangan');

		$data = array(
			'kode' => $kode,
			'jabatan' => $jabatan,
			'standart_gaji' => $standart_gaji,
			'keterangan' => $keterangan,
			);
		$this->Jabatan_data->input_data($data,'jabatan');
		redirect('jabatan');
	}

	function edit($kode){
		$where = array('kode' => $kode);
		$data['jabatan'] = $this->Jabatan_data->edit_data($where,'jabatan')->result();
		$this->load->view('jabatan_edit',$data);
	}

	function updateJabatan(){
		$kode = $this->input->post('kode');
		$jabatan = $this->input->post('jabatan');
		$standart_gaji = $this->input->post('standart_gaji');
		$keterangan = $this->input->post('keterangan');

		$data = array(
			'kode' => $kode,
			'jabatan' => $jabatan,
			'standart_gaji' => $standart_gaji,
			'keterangan' => $keterangan,
			);

		$where = array(
				'kode' => $kode
			);
		$this->Jabatan_data->update_data($where,$data,'jabatan');
		redirect('jabatan');
	}

	function hapus($kode){
		$where = array('kode' => $kode);
		$this->Jabatan_data->hapus_data($where,'jabatan');
		redirect('jabatan');
	}
}