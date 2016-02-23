<?php 
class All_member extends CI_Controller{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('beranda_model');
	}

	public function index(){
		/*
		if (($this->session->userdata('nip')=="")){
			redirect ('/user');
		}

		else {
		$data['beranda'] = $this->beranda_model->get_post();
		$this->load->view('view_beranda', $data);
		//$this->load->view('view_beranda');
	}
	*/

	$data['list_member'] = $this->beranda_model->get_member();
	//$data['place'] = $this->beranda_model->get_place();

	$this->load->view('view_all_member', $data);
	}


}
?>