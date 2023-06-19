<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    function __construct()
    {
        parent::__construct();

        $this->load->model('m_spam');

    }
	public function index()
	{
		$data['dokter']=$this->m_spam->get_dokter();
		$data['content']='welcome_message';
		$this->load->view('template',$data);
	}

	public function hapus(){

		$kode_dokter= $this->input->post('kode_dokter');
		$tanggal= $this->input->post('tanggal');
		$nomr1= $this->input->post('nomr1');
		$nomr2= $this->input->post('nomr2');
		// var_dump($kode_dokter);
		// exit();


		
		$this->m_spam->hapus_antrian($kode_dokter,$tanggal,$nomr1,$nomr2);
		$this->m_spam->hapus_pendaftaran($kode_dokter,$tanggal,$nomr1,$nomr2);
		$this->session->set_flashdata('succses', 'Data Berhasil Dihapus.');
		redirect('welcome');
		// $this->m_spam->hapus_pendaftaran($kode_dokter,$tanggal,$nomr1,$nomr2);
	}
	public function edit(){
		$data['content']='edit';
	
		$data['dokter']=$this->m_spam->get_dokter();
		$kode_dokter= $this->input->post('kode_dokter');
		$tanggal= $this->input->post('tanggal');
		$nomr1= $this->input->post('nomr1');
		$nomr2= $this->input->post('nomr2');


		$data['param'] = array(
                
			'kode_dokter' => $kode_dokter,
			'tanggal' => $tanggal,
			'nomr1' => $nomr1,
			'nomr2' => $nomr2
		
		);

		// var_dump($params['data']);
		// exit();


		
		$data['antrian']=$this->m_spam->tampil_antrian($kode_dokter,$tanggal,$nomr1,$nomr2)->result();
		// $this->m_spam->hapus_pendaftaran($kode_dokter,$tanggal,$nomr1,$nomr2);

		$this->load->view('template',$data);
		// $this->m_spam->hapus_pendaftaran($kode_dokter,$tanggal,$nomr1,$nomr2);
	}
}
