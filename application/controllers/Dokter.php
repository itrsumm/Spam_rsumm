<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dokter extends CI_Controller {

    function __construct()
    {
        parent::__construct();

        $this->load->model('m_spam');

    }
	public function index()
	{
		$data['dokters']=$this->m_spam->get_dokter();
		$data['content']='dokter';
		$data['title']='Data Dokter Praktik Rsumm';
		$this->load->view('template',$data);
	}

    public function update_dokter(){

        $params = array(
            $this->input->post('status'),
            $this->input->post('kode_dokter')
        );
        $this->m_spam->update_dokter($params);
        $this->session->set_flashdata('succses', 'Data Berhasil Dihapus.');
		redirect('Dokter');

    }

}
