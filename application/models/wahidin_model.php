<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Wahidin_model extends CI_Model {
    
    public function __construct()
    {
        parent::__construct();
    }
    
	public function get_member(){

        //$wahidin = $this->db->where('name', $name);
        //$list_member = $this->db->order_by("id", "desc")->get('upload');

        $this->db->select('*');
        $this->db->from('upload');
        $this->db->where('uploader', "wahidin");

        $list_member = $this->db->get();

        
        //$place = $query->num_rows();
        $num = $list_member->num_rows();


        if($num>0){
            return $list_member->result_array();
            //return $place->result();
        }
        else{
            return 0;
        }
    return $list_member->result_array();
    }
}
?>