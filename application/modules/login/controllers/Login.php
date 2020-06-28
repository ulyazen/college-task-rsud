<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends MY_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Login_model');
		$this->load->library('form_validation');
	}
	public function index()
	{
		$this->form_validation->set_rules('username', 'username', 'required|trim');
		$this->form_validation->set_rules('password', 'password', 'required|trim');
		if ($this->form_validation->run() == false) {
			$data['style']  = $this->load->view('style', '', true);
			$data['script']  = $this->load->view('script', '', true);
			$is_logged_in = $this->session->userdata('is_logged_in');
			$this->template->load('master', 'index', $data);
			if (isset($is_logged_in) || $is_logged_in == true) {
				redirect('home');
			}
		} else {
			$this->loginAct();
		}
	}
	public function loginAct()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$userLogin = $this->db->get_where('user', ['username' => $username])->row_array();

		if ($userLogin) {
			if ($userLogin['status'] == 1) {
				if ($password == $userLogin['password']) {
					$data = [
						'username' => $userLogin['username'],
						'is_logged_in' => true
					];
					$this->session->set_userdata($data);
					redirect('home');
				} else {
					$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                    Password yang Anda Masukkan Salah. </div>');
					redirect('login');
				}
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                Username Belum Aktif. </div>');
				redirect('login');
			}
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Username Tidak Terdaftar. </div>');
			redirect('login');
		}
	}
	public function logout()
	{
		$this->session->unset_userdata('USERNAME');
		$this->session->unset_userdata('is_logged_in');
		redirect('login');
	}
}
