<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class gaji extends CI_Controller {
	function __construct(){
        parent::__construct();		
        $this->load->model('Gaji_data');
		$this->load->model('Aturan_data');
        $this->load->model('Jabatan_data');
        $this->load->model('Karyawan_data');
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
		$data['gaji'] = $this->Gaji_data->tampil_data()->result();
		$this->load->view('gaji',$data);
	}
	function tambah(){
		$data['karyawan'] = $this->Karyawan_data->tampil_data()->result();
		$this->load->view('gaji_tambah',$data);
	}

	function tambah_aksi(){
		$nip = $this->input->post('nip');
		// $masa_kerja = $this->input->post('masa_kerja');
		// $insentif = $this->input->post('insentif');
		// $bonus = $this->input->post('bonus');
		$where = array('nip' => $nip);
		$a= $this->Karyawan_data->edit_data($where,'karyawan')->result();
		// print_r($a);
		foreach($a as $b){
			$nip = $b->nip;
		   $nama = $b->nama;
		   $kode = $b->jabatan;
		   $masa_kerja = $b->masa_kerja;
		}
		
		$where = array('kode' => $kode);
		$c= $this->Jabatan_data->edit_data($where,'jabatan')->result();
		foreach($c as $d){
			$standart_gaji = $d->standart_gaji;
		 }
		//  print_r($standart_gaji);
		 $wheres = array('jabatan' => $kode,'masa_kerja'=>$masa_kerja);
		 $e= $this->Aturan_data->get_data($wheres,'aturan_gaji')->result();
		 foreach($e as $g){
			$insentif = $g->insentif;
			$bonus = $g->bonus;
		 }
		 print_r($bonus);
		 print_r($standart_gaji);
		 print_r($insentif);
		$total = $standart_gaji+$insentif+$bonus;
		print_r($total);

		
		$tgl=date('Y-m-d');
		echo $tgl;
	
		$data = array(
			'nip' => $nip,
			'nama_karyawan' => $nama,
			'tanggal_penerimaan' => $tgl,
			'nominal' => $total,
			);
		$this->Gaji_data->input_data($data,'gaji');
		redirect('gaji');
	}

	// function edit($jabatan){
	// 	$where = array('jabatan' => $jabatan);
	// 	$a['jabatan'] = $this->Jabatan_data->tampil_data()->result();
	// 	$data['aturan'] = $this->Aturan_data->edit_data($where,'aturan_gaji')->result();
	// 	$this->load->view('aturan_edit',$data,$a);
	// }

	// function updateAturan(){
	// 	$jabatan = $this->input->post('jabatan');
	// 	$masa_kerja = $this->input->post('masa_kerja');
	// 	$insentif = $this->input->post('insentif');
	// 	$bonus = $this->input->post('bonus');

	// 	$data = array(
	// 		'jabatan' => $jabatan,
	// 		'masa_kerja' => $masa_kerja,
	// 		'insentif' => $insentif,
	// 		'bonus' => $bonus,
	// 		);

	// 	$where = array(
	// 			'jabatan' => $jabatan
	// 		);
	// 	$this->Aturan_data->update_data($where,$data,'aturan_gaji');
	// 	redirect('aturan');
	// }

	// function hapus($jabatan){
	// 	$where = array('jabatan' => $jabatan);
	// 	$this->Aturan_data->hapus_data($where,'aturan_gaji');
	// 	redirect('aturan');
	// }
}