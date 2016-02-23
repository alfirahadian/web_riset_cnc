<?php 
class Upload extends CI_Controller{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('upload_model');
	}

	public function index(){
		if (($this->session->userdata('username')=="")){
			redirect ('/user/login');
		}

		else {
		//$data['beranda'] = $this->beranda_model->get_post();
		$this->load->view('view_upload');
		//$this->load->view('view_beranda');
	}
	}

	
	public function do_upload(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('materi', 'materi', 'required');

		if($this->form_validation->run() == FALSE)
		{
			//echo "Terjadi kesalahan. Pastikan Anda mengupload yang benar.";
			echo validation_errors(); 
		}
		else
		{
			$config['upload_path'] = './files/';
			$config['allowed_types'] = 'jpeg|jpg|png|pdf|docx|doc';
			//$config['max_size']	= '10000';
	 
			$this->load->library('upload', $config);
			$this->upload->initialize($config);
	 
			if ( ! $this->upload->do_upload()){
				$error = array('error' => $this->upload->display_errors());
				var_dump($error);
				//$this->load->view('view_upload', $error);
				//echo "Jangan lupa masukkan file";
			}
			else{
				$data = $this->upload->data();
				$this->upload_model->add_file($data);
				redirect('all_member');
			}

			
		}
		
	}
}
?>