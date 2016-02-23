<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Upload_model extends CI_Model {
    
    public function __construct()
    {
        parent::__construct();
    }
    
	public function add_file($data)
	{
        //$file_name = $data['file_name'];
        $file_name = $data['file_name'];
		$data=array(
            'filename'=>$file_name,
			'uploader'=>$this->input->post('username'),
            'nim'=>$this->input->post('nim'),
            'divisi'=>$this->input->post('divisi'),
            'nama'=>$this->input->post('nama'),
            'bab'=>$this->input->post('materi'),
            'note'=>$this->input->post('note')
			);
		$this->db->insert('upload',$data);
	}
}
?>