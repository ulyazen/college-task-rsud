<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dokter extends MY_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Dokter_model');
	}

	public function index()
	{
		$data['dokter'] = $this->Dokter_model->readDokter();
		$data['style']  = $this->load->view('style', '', true);
		$data['script']  = $this->load->view('script', '', true);
		$this->template->load('master_dashboard', 'index', $data);
	}
	public function createAct()
	{
		$data = [
			"nama" => $this->input->post('nama'),
			"jk" => $this->input->post('jk'),
			"alamat" => $this->input->post('alamat'),
		];
		$this->Home_model->createDokter($data);
		redirect('home');
	}
}
