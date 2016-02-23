<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class User_model extends CI_Model {
    
    public function __construct()
    {
        parent::__construct();
    }
	function login($username,$password)
    {
		$this->db->where("username",$username);
        $this->db->where("password",$password);
            
        $query=$this->db->get("member");
        if($query->num_rows()>0)
        {
         	foreach($query->result() as $rows)
            {
            	//add all data to session
                $newdata = array(
                	   	'id' 		=> $rows->id,
                        'username' => $rows->username,
                        'nama'   => $rows->nama,
                    	'nim' 	=> $rows->nim,
                        'divisi' => $rows->divisi,
	                    'logged_in' 	=> TRUE,
                   );
			}
            	$this->session->set_userdata($newdata);
                return true;            
		}
		return false;
    }
    
	public function add_user()
	{
		$data=array(
			'nama'=>$this->input->post('fullname'),
            'nim'=>$this->input->post('nim'),
            'divisi'=>$this->input->post('divisi'),
            'username'=>$this->input->post('username'),
            'password'=>md5($this->input->post('password'))
			);
		$this->db->insert('member',$data);
	}
}
?>