<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact_model extends CI_Model{

 public function __construct()
    {
        parent::__construct();
        $this->load->model('Contact_model');
    }
    public function get_Contact(){
        if(!empty($this->input->get("search"))){
          $this->db->like('email', $this->input->get("search"));
        }
        $query = $this->db->get("contact");
        return $query->result();
    }


    public function insert_item()
    {    
        $data = array(
            'name' => $this->input->post('name'),
            'subject' => $this->input->post('subject'),
            'email' => $this->input->post('email'),
            'query' => $this->input->post('message'),
        );
        return $this->db->insert('contact', $data);
    }


    public function update_item($id) 
    {	
        $data=array(
            'name' => $this->input->post('name'),
            'subject' => $this->input->post('subject'),
            'email' => $this->input->post('email'),
            'query' => $this->input->post('query'),
        );
        if($id==0){
            return $this->db->insert('contact',$data);
        }else{
            $this->db->where('id',$id);
            return $this->db->update('contact',$data);
        }        
    }


   public function find_item_by_id($id)
    {
        return $this->db->get_where('contact', array('id' => $id))->row();
    }


    public function delete_item($id)
    {
        return $this->db->delete('contact', array('id' => $id));
    }

    public function getContactCount()
    {
        $query = $this->db->get("contact");
        return $query->num_rows();
    }
}
?>