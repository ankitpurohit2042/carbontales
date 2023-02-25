<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contactinfo_model extends CI_Model{

 public function __construct()
    {
        parent::__construct();
        $this->load->model('Contactinfo_model');
    }
    public function get_ContactInfo(){
        if(!empty($this->input->get("search"))){
          $this->db->like('mobile', $this->input->get("search"));
        }
        $query = $this->db->get("contact_info");
        return $query->result();
    }


    public function insert_item()
    {    
        $data = array(
            'email' => $this->input->post('email'),
            'mobile' => $this->input->post('mobile'),
            'address' => $this->input->post('address'),
        );
        return $this->db->insert('contact_info', $data);
    }


    public function update_item($id) 
    {	
        $data=array(
            'email' => $this->input->post('email'),
            'mobile' => $this->input->post('mobile'),
            'address' => $this->input->post('address'),
        );
        if($id==0){
            return $this->db->insert('contact_info',$data);
        }else{
            $this->db->where('id',$id);
            return $this->db->update('contact_info',$data);
        }        
    }


   public function find_item_by_id($id)
    {
        return $this->db->get_where('contact_info', array('id' => $id))->row();
    }


    public function delete_item($id)
    {
        return $this->db->delete('contact_info', array('id' => $id));
    }

    public function getContent($type){
        $this->db->select(' * FROM `contact_info` LIMIT 1', FALSE);
        return $query = $this->db->get()->row();
    }
}
?>