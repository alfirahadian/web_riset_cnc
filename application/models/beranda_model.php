<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Beranda_model extends CI_Model {
    
    public function __construct()
    {
        parent::__construct();
    }
    
	public function get_member(){

        $list_member = $this->db->order_by("id", "desc")->get('upload');
        
        //$place = $query->num_rows();
        $num = $list_member->num_rows();


        if($num>0){
            return $list_member->result();
            //return $place->result();
        }
        else{
            return 0;
        }
    //return json_encode($list_beranda);
    }
}
?>