<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class aturan extends CI_Controller {
	function __construct(){
		parent::__construct();		
		$this->load->model('Aturan_data');
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
		$data['aturan'] = $this->Aturan_data->tampil_data()->result();
		$this->load->view('aturan',$data);
	}
	function tambah(){
		$data['jabatan'] = $this->Jabatan_data->tampil_data()->result();
		$this->load->view('aturan_tambah',$data);
	}

	function tambah_aksi(){
		$jabatan = $this->input->post('jabatan');
		$masa_kerja = $this->input->post('masa_kerja');
		$insentif = $this->input->post('insentif');
		$bonus = $this->input->post('bonus');

		$data = array(
			'jabatan' => $jabatan,
			'masa_kerja' => $masa_kerja,
			'insentif' => $insentif,
			'bonus' => $bonus,
			);
		$this->Aturan_data->input_data($data,'aturan_gaji');
		redirect('aturan');
	}

	function edit($jabatan){
		$where = array('jabatan' => $jabatan);
		$a['jabatan'] = $this->Jabatan_data->tampil_data()->result();
		$data['aturan'] = $this->Aturan_data->edit_data($where,'aturan_gaji')->result();
		$this->load->view('aturan_edit',$data,$a);
	}

	function updateAturan(){
		$jabatan = $this->input->post('jabatan');
		$masa_kerja = $this->input->post('masa_kerja');
		$insentif = $this->input->post('insentif');
		$bonus = $this->input->post('bonus');

		$data = array(
			'jabatan' => $jabatan,
			'masa_kerja' => $masa_kerja,
			'insentif' => $insentif,
			'bonus' => $bonus,
			);

		$where = array(
				'jabatan' => $jabatan
			);
		$this->Aturan_data->update_data($where,$data,'aturan_gaji');
		redirect('aturan');
	}

	function hapus($jabatan){
		$where = array('jabatan' => $jabatan);
		$this->Aturan_data->hapus_data($where,'aturan_gaji');
		redirect('aturan');
	}
}