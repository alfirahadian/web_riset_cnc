<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class User extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
	}
	public function index()
	{
		if(($this->session->userdata('username')!=""))
		{
			redirect ('upload');
		}
		else{
			$this->load->view('view_login');
		}
	}
	public function login()
	{
		$username=$this->input->post('username');
		$password=md5($this->input->post('password'));

		$result=$this->user_model->login($username,$password);
		if($result) $this->index();
		else        $this->load->view('view_login');
	}
	public function signup()
	{
		
		$this->load->view('view_register');
	}
	public function registration()
	{
		$this->load->library('form_validation');
		// field name, error message, validation rules
		//$this->form_validation->set_rules('fullname', 'Nama', 'required');
		$this->form_validation->set_rules('nim', 'Nomor Induk Mahasiswa', 'required');
		//$this->form_validation->set_rules('password', 'Password', 'required');

		if($this->form_validation->run() == FALSE)
		{
			echo "error validation";
		}
		else
		{
			$captcha=$this->input->post('captcha');
			if ($captcha !== 'pinguin203'){
				echo "CAPTCHA SALAH. Anda bukan anggota CNC";
			}
			else {
			$this->user_model->add_user();
			$this->login();
			}
		}
	}
	public function logout()
	{
		$newdata = array(
		'id'   =>'',
		'username' =>'',
		'nama'  =>'',
		'nim'     => '',
		'divisi' => '',
		'logged_in' => FALSE,
		);
		$this->session->unset_userdata($newdata);
		$this->session->sess_destroy();
		$this->load->view('view_login');
	}
}
?>