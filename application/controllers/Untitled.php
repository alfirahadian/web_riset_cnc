<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hafid extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('hafid_model');
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
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		/*
		if (($this->session->userdata('username')=="")){
			redirect ('/user/login');
		}

		else {
		//$data['beranda'] = $this->beranda_model->get_post();
		$this->load->view('view_beranda_wahidin');
		}
		*/
		$data['list_member'] = $this->hafid_model->get_member();
		$this->load->view('view_beranda_hafid',$data);
	}
}
